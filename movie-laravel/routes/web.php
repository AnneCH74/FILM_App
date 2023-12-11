<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
        return 'Homepage';
})->name('homePage');

Route::get('/movie', function () {
    return 'Liste des produits';
});

Route::get('/movie/{id}', function (Request $request, string $id) {
   return 'Fiche du produit '.$id;
});
