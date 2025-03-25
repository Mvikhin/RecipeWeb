<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->get('query');
        
        $results = Recipe::where('name', 'LIKE', "%{$query}%")
            ->orWhere('title', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->select('id', 'slug', 'name', 'title', 'description')
            ->limit(10)
            ->get();
            
        return response()->json($results);
    }
}
