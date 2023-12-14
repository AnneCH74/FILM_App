@extends('layouts.app')
@section('title', 'Homepage', 'Movie Details')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Details</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<h1>Movie Details</h1>
"
<!-- Afficher les détails du film -->
@if($movie)
    <h1>{{ $movie->Title }}</h1>
    <img src="{{ asset($movie->image) }}" alt="{{ $movie->Title }}">
    <p>{{$movie->Release}}</p>
    <p>{{ $movie->director }}</p>
    <p>{{ $movie->synopsis }}</p>
    <!-- Ajoutez d'autres détails du film ici -->
@else
    <p>Film non trouvé</p>
@endif

</body>
</html>
@endsection
