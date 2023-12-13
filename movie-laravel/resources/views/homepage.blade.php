@extends('layouts.app')
@section('title', 'Homepage')
@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<h1>Welcome to the Homepage</h1>

<div class="gallery">
    <img src="{{ asset('img/popcorn.jpeg') }}" alt="photo pop corn">
    <img src="{{ asset('img/movie.jpeg') }}" alt="Affiche film Scary Movie - spectateurs dans salle de cinéma">
    <img src="{{ asset('img/zoopolis.jpeg') }}" alt="Affiche film Zootopia">
    <br>
</div>

<footer>
    <a href="https://www.allocine.fr/" target="_blank">Visit Allociné.fr</a>
</footer>

</body>
</html>
@endsection

