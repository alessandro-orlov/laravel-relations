@extends('layout.app')

{{-- Page title --}}
@section('title')
  Edit album: {{ $album->title }}
@endsection


@section('content')
  <h1>Edit Album: {{ $album->title }}</h1>

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('albums.update', $album) }}" method="post">
    @csrf
    @method('PUT')

    {{-- Album --}}
    <label>Album Title</label><br>
    <input type="text" name="title" value="{{$album->title}}" placeholder="Album Title">
    <br>
    <br>
    <label>Album Artis</label><br>
    <input type="text" name="artist" value="{{$album->artist}}" placeholder="Album Artist">
    <br>
    <br>
    <label>Album Year</label><br>
    <input type="text" name="year" value="{{$album->year}}" placeholder="Album Year">
    <br>
    <br>
    {{-- Song --}}
    {{-- <label>Song</label><br>
    <input type="text" name="song_title" value="{{$album->song['song_title']}}" placeholder="Song">
    <br>
    <br> --}}
    <label>Genre</label><br>
    <input type="text" name="genre" value="{{$album->song['genre']}}" placeholder="genre">

    <br>
    <br>
    <input type="submit" value="Salva">

  </form>

@endsection
