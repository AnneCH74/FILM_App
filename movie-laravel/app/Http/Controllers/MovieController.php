<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie;
use function Sodium\add;

class MovieController extends Controller
{
    //Créer nouvel enregistrement :
    public function create()
    {
return view('create');
    }

    public function store(Request $request)
    {
        global $movie;
        $movie = movie::create([
            'Title' => $request-> input('Title'),
            'image' => $request-> input('image'),
            'Release'=> $request->input('Release'),
            'director' =>$request->input('director'),
            'synopsis' => $request->input('synopsis')
        ]);
        return redirect()->route('movie.show',['slug' => $movie->slug, 'post' => $movie->id])->with('success', "L'article a bien été sauvegardé");
//dd($request->all());
    }
    public function index()
    {
        // Récupérer la liste des films depuis la base de données
        $movies = movie::all();

        // Passer les données à la vue movies-list
        return view('movies-list', ['movies' => $movies]);
    }

    public function showDetails($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        // Récupérer les détails du film en fonction de l'ID depuis la base de données
        $movie = movie::find($id);

        // Passer les données à la vue movie-details
        return view('movie-details', ['movie' => $movie]);
    }
}





