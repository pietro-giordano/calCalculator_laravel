<?php

use App\Http\Controllers\IngredientController;
use App\Http\Controllers\RecipeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
      return $request->user();
});

Route::middleware(['auth:sanctum'])->name('api.')->group(function () {
      Route::resource('ingredients', IngredientController::class);
      Route::resource('recipes', RecipeController::class);
});
