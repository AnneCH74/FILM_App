<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): string
    {
        //return 'Homepage';

        //code en lien avec homepage.blade.php :
        return view('homepage');
    }
}
