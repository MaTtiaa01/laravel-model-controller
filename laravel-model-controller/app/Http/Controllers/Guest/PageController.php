<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        //dd($movies);
        return view('welcome', compact('movies'));
    }
    public function about()
    {
        return view('about');
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function details()
    {
        $movie_details = Movie::find(1);
        return view('details', compact('movie_details'));
    }
}
