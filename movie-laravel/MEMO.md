HIERARCHIE SITE 

REPERTOIRES  = "- XXX"
SOUS-REPERTOIRES = "*XXX"
FICHIERS = "XXXX"

Étape 1 : Mise en place des URL dans votre fichier de route

movie-laravel\routes\web.php

Étape 2 : Création de CONTROLLER

movie-laravel\app\Http\Controllers\HomeController.php => page d'accueil (home page)
movie-laravel\app\Http\Controllers\MovieController.php => liste des films (public function index) + détail d'un film (public function showDetails($id))

Etape 3 : Création des VIEWS

movie-laravel\resources\views\homepage.blade.php
movie-laravel\resources\views\movies-list.blade.php
movie-laravel\resources\views\movie-details.blade.php
