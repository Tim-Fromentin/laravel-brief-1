<?php

use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('recipe.index');
});

Route::resource('recipe', RecipeController::class);
