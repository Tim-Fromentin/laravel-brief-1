<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;


class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();
        return view('recipe.index', compact('recipes'));
    }
    public function show(int $id)
    {
        $recipe = Recipe::find($id);
        return view('recipe.show', compact('recipe'));
    }
    public function create()
    {
        return view('recipe.create');
    }
    public function edit(Recipe $recipe)
    {
        return view('recipe.edit', compact('recipe'));
    }
    public function update(Request $request, Recipe $recipe)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        $recipe->title = $request->title;
        $recipe->description = $request->description;
        $recipe->save();

        return redirect()->route('recipe.index')->with('success', 'Recette modifiée');



    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
//        Recipe::create($request->all());
        $recipe = new Recipe();
        $recipe->title = $request->title;
        $recipe->description = $request->description;

        $recipe->save();

        return redirect()->route('recipe.index')->with('sucess', 'recette créé');
    }
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();
        return redirect()->route('recipe.index')->with('success', 'Recette supprimer');


    }
}
