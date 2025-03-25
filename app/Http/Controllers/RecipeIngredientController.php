<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class RecipeIngredientController extends Controller
{
    public function create()
    {
        $recipes = Recipe::all();
        $ingredients = Ingredient::orderBy('name')->get();
        
        // Get ENUM values from the database
        $units = DB::select(DB::raw("SHOW COLUMNS FROM ingredients_recipes WHERE Field = 'unit'"))[0]->Type;
        preg_match("/^enum\(\'(.*)\'\)$/", $units, $matches);
        $units = explode("','", $matches[1]);
        sort($units);

        return view('recipe-ingredients.create', compact('recipes', 'ingredients', 'units'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'caution' => 'nullable|string|max:500',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'ingredients' => 'required|array|min:1',
            'ingredients.*' => 'required|exists:ingredients,id',
            'quantities' => 'required|array|min:1',
            'quantities.*' => 'required|numeric|min:0.01',
            'units' => 'required|array|min:1',
            'units.*' => [
                'required',
                'string',
                Rule::in($this->getValidUnits())
            ],
            'steps' => 'required|array|min:1',
            'steps.*' => 'required|string|min:3'
        ]);

        try {
            DB::beginTransaction();

            // Generate slug from name if not provided
            $slug = $request->filled('slug') ? $request->slug : Str::slug($validated['name']);

            // Handle Image Upload
            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('recipes', 'public');
            }

            // Create the recipe
            $recipe = Recipe::create([
                'name' => $validated['name'],
                'title' => $validated['title'],
                'slug' => $slug,
                'description' => $validated['description'],
                'caution' => $validated['caution'] ?? null,
                'image' => $imagePath, 
            ]);

            // Add ingredients with proper quantity handling
            foreach ($validated['ingredients'] as $index => $ingredientId) {
                DB::table('ingredients_recipes')->insert([
                    'recipe_id' => $recipe->id,
                    'ingredient_id' => $ingredientId,
                    'quantity' => round(floatval($validated['quantities'][$index]), 2),
                    'unit' => $validated['units'][$index]
                ]);
            }

            // Add steps
            foreach ($validated['steps'] as $index => $stepDescription) {
                DB::table('recipe_steps')->insert([
                    'recipe_id' => $recipe->id,
                    'step_number' => $index + 1,
                    'step_description' => trim($stepDescription)
                ]);
            }

            DB::commit();
            return redirect()->back()->with('success', 'Recipe created successfully!');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'Failed to create recipe. Please try again. Error: ' . $e->getMessage()]);
        }
    }

    private function getValidUnits()
    {
        $units = DB::select(DB::raw("SHOW COLUMNS FROM ingredients_recipes WHERE Field = 'unit'"))[0]->Type;
        preg_match("/^enum\(\'(.*)\'\)$/", $units, $matches);
        return explode("','", $matches[1]);
    }
}
