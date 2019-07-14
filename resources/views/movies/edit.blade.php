@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="title">
      <h1>Modifica Film</h1>
    </div>

{{-- valido ciò che ho specificato nello store --}}
    {{-- @if ($errors->any())
         <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
        </div>
    @endif --}}

    <form class="" action="{{route('movies.update', $movie->id)}}" method="post">
      {{-- indispensabile per passare il contenuto del form alla pagina store altrimenti da errore in quanto laravel non riesce ad effettuare il controllo --}}
      @method('PUT')
      @csrf
      <div class="form-group">
        <label for="title">Titolo</label>
        <input class="form-control" type="text" name="title" placeholder="Titolo Film" value="{{old('title', $movie->title)}}">
      </div>

      <div class="form-group">
        <label for="plot">Trama</label>
        <textarea class="form-control" type="text-area" rows="8" cols="80" name="plot">{{old('plot', $movie->plot)}}</textarea>
      </div>

      <div class="form-group">
        <label for="release">Anno di uscita</label>
        <input class="form-control" type="number" name="release" value="{{old('release', $movie->release)}}" min="1900" max="2019">
      </div>

      <div class="form-group">
        <select class="form-control" name="genre_id">
          <option value="">{{$movie->genre->name}}</option>
          @foreach ($genres as $genre)
            <option value="{{$genre->id}}">{{$genre->name}}</option>
          @endforeach
        </select>
        
      </div>

      <div class="form-group">

        <input class="form-control" type="submit" value="Crea Film">
      </div>


    </form>


  </div>


@endsection
