<x-layout>
    <h1>                    {{$recipe->title}}
    </h1>
    <p>{{$recipe->description}}</p>

    <ol>
{{--        @foreach($recipe['ingredients'] as $ingredient)--}}
{{--            <li>{{$ingredient}}</li>--}}
{{--        @endforeach--}}
    </ol>

</x-layout>
