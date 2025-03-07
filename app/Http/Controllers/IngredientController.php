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

    public function getIngredientSuggestions(Request $request)
    {
        $query = $request->get('query');
        $suggestions = Ingredient::where('name', 'LIKE', "%{$query}%")
            ->limit(5)
            ->get();
        
        return response()->json($suggestions);
    }
}
