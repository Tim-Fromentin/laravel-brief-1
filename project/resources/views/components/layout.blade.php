<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Projects</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


</head>
<style>
    * {
        box-sizing: border-box;
        text-decoration: none;
        color: #333333;
    }
    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }
    nav ul {
        display: flex;
        gap: 50px;
        width: 100%;
        list-style: none;
    }
    a:hover {
        color: crimson;
    }
    main {
        padding: 50px;
    }
</style>
<body>

<nav class="">
    <ul>
        <li>
            <a href="{{url('/')}}">Home</a>
        </li>



        <li>
            <a href="{{url('/recipe')}}">Recettes</a>
        </li>
    </ul>
</nav>

<main>
    {{$slot}}
</main>

</body>
</html>
