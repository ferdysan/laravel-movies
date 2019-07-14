@extends('layouts.app')

@section('content')

<div class="container">
  {{-- @foreach ($movies as $movie)
    <h4>{{$movie->title}}</h4>
    <a href="{{route("movies.create")}}" class="btn btn-primary">Inerisci un nuovo film</a>
    <ul>
      <li>{{$movie->plot}}</li>
      <li>{{$movie->release}}</li>
      {{-- tramite l'operatore ternario definisco che se esiste inserisco il genere altrimenti inserisco n/d --}}
      {{-- <li>Categoria: {{$movie->genre ? $movie->genre->name :'N/D'}}</li>
    </ul>
  @endforeach --}}
      @foreach ($movies as $movie)
        <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
       <h5 class="card-title">{{$movie->title}}</h5>
       <p class="card-text">Trama: {{$movie->plot}}</p>
       <p class="card-text">Uscita: {{$movie->release}}</p>
       <p class="card-text">Categoria:{{$movie->genre ? $movie->genre->name :'N/D'}}</p>

       <div class="btn-group" role="group" aria-label="Basic example">
          <a href="{{route("movies.create")}}" class="btn btn-primary">Nuovo Film</a>
          <a href="{{route("movies.edit", $movie->id)}}" class="btn btn-warning">Modifica</a>
          <a href="#" class="btn btn-danger">Elimina</a>
      </div>
     </div>
   </div>
      @endforeach
</div>

@endsection
