<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\SearchController;

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





Route::get('/', function () {
    return view('index');
});
Route::get('/ingredient-suggestions', [IngredientController::class, 'getIngredientSuggestions'])->name('ingredient.suggestions');
Route::get('/search-suggestions', [SearchController::class, 'search'])->name('search.suggestions');
