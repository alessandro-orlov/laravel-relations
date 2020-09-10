@extends('layout.app')

{{-- Page title --}}
@section('title')
  Aggiungi nuovo Album
@endsection


{{-- Page content --}}
@section('content')


    <h1>Inserisci un nuovo Album</h1>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('albums.store') }}" method="post">
      @csrf
      @method('POST')

      {{-- Album --}}
      <label>Album Title</label><br>
      <input type="text" name="title" value="{{ old('title') }}" placeholder="Album Title">
      <br>
      <br>
      <label>Album Artis</label><br>
      <input type="text" name="artist" value="{{ old('artist') }}" placeholder="Album Artist">
      <br>
      <br>
      <label>Album Year</label><br>
      <input type="text" name="year" value="{{ old('year') }}" placeholder="Album Year">
      <br>
      <br>
      {{-- Song --}}
      <label>Song</label><br>
      <input type="text" name="song_title" value="{{ old('song_title') }}" placeholder="Song">
      <br>
      <br>
      <label>Genre</label><br>
      <input type="text" name="genre" value="{{ old('genre') }}" placeholder="genre">

      <br>
      <br>
      <input type="submit" value="Salva">

    </form>



@endsection
