<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        /* dd(Movie::all()); */
        return view('welcome', compact('movies'));
    }

    public function about()
    {
        return view('about');
    }
}
