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
@section('title', 'Homepage')
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


<div class="gallery">
    <img src="{{ asset('img/napoleonGuitry.jpeg') }}" alt="Napoléon 1955 - Sacha GUITRY">
    <img src="{{ asset('img/napoleonClavier.jpeg') }}" alt="Napoléon 2002 - Christian CLAVIER">
    <img src="{{ asset('img/napoleonPhoenix.jpeg') }}" alt="Napoléon 2023 - Joaquin PHOENIX">
</div>

<div class="gallery">
    <img src="{{ asset('img/sharknado.jpeg') }}" alt="Sharknado">
    <img src="{{ asset('img/megaSharkVsOctopus.jpeg') }}" alt="Megashark vs Octopus">
    <img src="{{ asset('img/sharktopusVsPteracuda.jpeg') }}" alt="Sharktopus vs Pteracuda">
</div>

<footer>
    <a href="https://www.allocine.fr/" target="_blank">Visit Allociné.fr</a>
</footer>
</body>

</html>
@endsection

