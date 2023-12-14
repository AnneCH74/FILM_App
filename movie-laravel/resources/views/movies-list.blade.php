{{--@extends('layouts.app')--}}
{{--@section('title', 'Homepage')--}}
{{--@section('content')--}}


{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>Homepage</title>--}}
{{--    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">--}}
{{--</head>--}}
{{--<body>--}}
{{--<h1>Liste des films</h1>--}}

{{--<p><a href="{{ url('/') }}">Home page</a></p>--}}

{{--<div class="gallery">--}}
{{--    <img src="{{ asset('img/napoleonGuitry.jpeg') }}" alt="Affiche film Napoléon 1955 avec Sacha GUITRY">--}}
{{--    <img src="{{ asset('img/napoleonClavier.jpeg') }}" alt="Affiche film Napoléon 2002 avec Christian CLAVIER">--}}
{{--    <img src="{{ asset('img/napoleonPhoenix.jpeg') }}" alt="Affiche film Napoléon 2023 avec Joaquin PHOENIX">--}}
{{--    <br>--}}
{{--    <br>--}}
{{--    <img src="{{ asset('img/sharknado.jpeg') }}" alt="Affiche film Sharknado">--}}
{{--    <img src="{{ asset('img/megaSharkVsOctopus.jpeg') }}" alt="Affiche film Megashark vs Octopus">--}}
{{--    <img src="{{ asset('img/sharktopusVsPteracuda.jpeg') }}" alt="Affiche film Sharktopus vs Pteracuda">--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
{{--@endsection--}}


@extends('layouts.app')
@section('title', 'Homepage', 'MovieList')
@section('content')

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Database</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
<div class="film-reel"></div>

<h1>EXPLORE OUR EXCLUSIVE MOVIE COLLECTION</h1>

<!-- Afficher la liste des films -->
<ul>
    @foreach($movies as $movie)
        <li><a href="{{ route('movies.show', $movie->id) }}">{{ $movie->Title }}
        <img src="{{ $movie->image }}"></a></li>
    @endforeach
</ul>

<footer>
    <a href="https://www.allocine.fr/" target="_blank">Visit Allociné.fr</a>
</footer>
</body>

</html>
@endsection

