<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Genre;
use Illuminate\Http\Request;

class MovieController extends Controller
{

    public function index()
    {
        $movies= Movie::all();
        return view('movies.index' , compact('movies'));

    }


    public function create()
    {
        $genres = Genre::all();
        return view('movies.create', compact('genres'));
    }


    public function store(Request $request)
    {
       $validateData = $request->validate([
          'title'=> 'required|max:255',
          'release'=>'required|numeric|between:1900,2019',
       ]);

       $dati= $request->all();
       $nuovo_film = new Movie();
       $nuovo_film->fill($dati);
       $nuovo_film->save();

       return redirect()->route('movies.index');
    }


    public function show(Movie $movie)
    {
        //
    }


    public function edit($movie_id)
    {

        $movie = Movie::find($movie_id);
        $genres = Genre::all();

        return view('movies.edit', compact('movie' , 'genres'));
    }


    public function update(Request $request, $movie_id)
    {
      $data= $request->all();
      $film= Movie::find($movie_id);
      $film->update($data);

      return redirect()->route('movies.index');
    }


    public function destroy(Movie $movie)
    {
        //
    }
}
