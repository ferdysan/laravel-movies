<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{

    public function index()
    {
        $movies= Movie::all();
        

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Movie $movie)
    {
        //
    }


    public function edit(Movie $movie)
    {
        //
    }


    public function update(Request $request, Movie $movie)
    {
        //
    }


    public function destroy(Movie $movie)
    {
        //
    }
}
