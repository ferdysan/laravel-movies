@extends('layouts.app')

@section('content')

  <div class="container">
    <h1>Inserimento nuovo Film</h1>

{{-- valido ciò che ho specificato nello strore --}}
    @if ($errors->any())
         <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
        </div>
    @endif

    <form class="" action="{{route('movies.store')}}" method="post">
      @csrf
      <div class="form-group">
        <label for="title">Titolo</label>
        <input class="form-control" type="text" name="title" placeholder="Titolo Film" value="{{old('title')}}">
      </div>

      <div class="form-group">
        <label for="plot">Trama</label>
        <textarea class="form-control" type="text-area" rows="8" cols="80" name="plot" value="" placeholder="Trama film">{{old('plot')}}</textarea>
      </div>

      <div class="form-group">
        <label for="release">Anno di uscita</label>
        <input class="form-control" type="number" name="release" value="{{old('release')}}" min="1900" max="2019">
      </div>

      <div class="form-group">
        <select class="form-control" name="genre_id">
          <option value="">Seleziona il genere del film</option>
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
