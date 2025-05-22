<x-layout>
    <style>
        ul {
            display: flex;
            gap: 25px;
            list-style: none;
        }
        li a {
            margin: 0 25px;
        }
    </style>
    <h1>recipes</h1>
    @foreach($recipes as $recipe)
        <ul>
            <li>
                <a href="{{route('recipe.show', $recipe)}}">
                    {{$recipe->title}}

                </a>

                <a href="{{route('recipe.edit', $recipe)}}">Modif</a>
            </li>
            <form action="{{route('recipe.destroy', $recipe->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Supprimer</button>
            </form>
        </ul>
    @endforeach

    <a href="/recipe/create">Add</a>
</x-layout>
