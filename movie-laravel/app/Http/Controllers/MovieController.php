<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(): string
    {
        //code pour afficher la liste des films
       // return 'Liste des produits';

        return view('movies-list');
    }

    public function showDetails($id): string
    {
       //Code pour afficher les détails d'un film en fonction de l'ID
        //return 'Fiche du produit '.$id;

        //code pour afficher les films en lien avec blade
        return view('movie-details');
    }
}
