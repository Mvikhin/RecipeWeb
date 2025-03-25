<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function getIngredients()
    {
        $ingredients = Ingredient::all();
        return view('index', compact('ingredients'));
    }

    public function create()
    {
        return view('recipe-ingredients.new-ingredients');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:ingredients,name'
        ]);

        Ingredient::create($validated);

        return redirect()->back()->with('success', 'Ingredient added successfully!');
    }

    public function getIngredientSuggestions(Request $request)
    {
        $query = $request->get('query');
        $suggestions = Ingredient::where('name', 'LIKE', "%{$query}%")
            ->limit(5)
            ->get();
        
        return response()->json($suggestions);
    }
}
