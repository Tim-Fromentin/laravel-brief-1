<x-layout>
    <form action="{{route('recipe.update', $recipe->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">
            Titre de la recette
        </label>
        <input type="text" name="title" id="title" value="{{$recipe->title}}" />

        <label for="description">
            Description de la recette
        </label>
        <textarea name="description" id="description" >
{{$recipe->description}}
        </textarea>
        <button type="submit">Créé</button>
    </form>
</x-layout>
