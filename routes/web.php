<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\RecipeIngredientController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('/', [RecipeController::class, 'index'])->name('index');

Route::get('/ingredient-suggestions', [IngredientController::class, 'getIngredientSuggestions'])->name('ingredient.suggestions');
Route::get('/search-suggestions', [SearchController::class, 'search'])->name('search.suggestions');
Route::get('/recipe-ingredients/create', [RecipeIngredientController::class, 'create'])->name('recipe-ingredients.create');
Route::post('/recipe-ingredients', [RecipeIngredientController::class, 'store'])->name('recipe-ingredients.store');
Route::get('/ingredients/create', [IngredientController::class, 'create'])->name('ingredients.create');
Route::post('/ingredients', [IngredientController::class, 'store'])->name('ingredients.store');
Route::get('/ingredients/suggestions', [IngredientController::class, 'getIngredientSuggestions']);
Route::get('/recipe/{slug}', [RecipeController::class, 'show'])->name('recipe.show');
Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');

Route::get('/recipe-download', function () {
    return view('recipe-download');
})->name('recipe.download');

Route::get('/auth', function () {
    return view('auth');
})->name('auth.view');

Route::post('/auth', [AuthController::class, 'submit'])->name('auth.submit');
