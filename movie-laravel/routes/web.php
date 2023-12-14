<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/movie', [MovieController::class, 'index']);

//Route::get('/movie/{id}', [MovieController::class, 'show']);
Route::get('/movie/{id}', [MovieController::class, 'showDetails']);

Route::get('/add-movie', [MovieController::class, 'addMovie']);



Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
Route::get('/movies/{id}', [MovieController::class, 'showDetails'])->name('movies.show');

