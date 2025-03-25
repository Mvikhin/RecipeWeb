<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\RecipeStep;
use Illuminate\Support\Facades\DB;

class RecipeController extends Controller
{
    public function show($slug)
    {
        $recipe = Recipe::where('slug', $slug)->firstOrFail();
        $ingredients = $recipe->ingredients; // Assuming a relationship exists
        $steps = RecipeStep::where('recipe_id', $recipe->id)->orderBy('step_number')->get(); // Fetch steps ordered by step number

        return view('recipes.recipe-display', compact('recipe', 'ingredients', 'steps'));
    }

    public function index()
    {
        $recipes = Recipe::all(); // Fetch all recipes
        return view('index', compact('recipes'));
    }
}
