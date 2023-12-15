@extends('layouts.app')
@section('title', 'Créer un film')
@section('content')

    <form action="" method ="post" style="display: flex; flex-direction: column">
        @csrf
        <input type="text" name="Title" id="title" value="Nouveau film à ajouter">
        <input type="text" name="image" id="image" value="url de l'image">
        <input type="text" name="Release" id="Release" value="date de sortie">
        <input type="text" name="director" id="director" value="réalisateur">
        <input type="text" name="synopsis" id="title" value="synopsis">
        <button>Enregistrer</button>
    </form>
@endsection
