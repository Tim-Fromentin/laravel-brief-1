<x-layout>
    <form action="{{route('recipe.store')}}" method="POST">
        @csrf
        <label for="title">
            Titre de la recette
        </label>
        <input type="text" name="title" id="title" />

        <label for="description">
            Description de la recette
        </label>
        <textarea name="description" id="description">

        </textarea>
        <button type="submit">Créé</button>
    </form>
</x-layout>
