<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
class MovieController extends Controller
{
    public function getMovie()
    {
    $movies = Movie::all();
    // dd($movies);
    return view ('movie.index', compact('movies'));
    }

    public function getMovieById($id)
    {
    $movie = Movie::findOrfail($id);
    return view('movie.show', compact('movie'));
    }
}
