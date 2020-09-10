@extends('layout.app')

{{-- Page title --}}
@section('title')
  Dettagli album: {{ $album->title }}
@endsection


@section('content')

    <h1>Album: {{ $album->title }}</h1>

    @if (!empty($album->poster->url))
      <div class="poster-box">
        <img src="{{$album->poster->url}}" alt="">
      </div>
    @endif

    <h2>Artista: <span class="big-text">{{$album->artist}}</span></h2>
    <p>Anno album: {{ $album->year }}</p>

    @if (!$album->songs->isEmpty())
      <h2>Lista Canzoni</h2>
      <ul>
        @foreach ($album->songs as $song)
          <li>{{ $song->title }}</li>
        @endforeach
      </ul>
    @endif
    <br>
    <a href="{{ route('albums.index')}}">torna alla lista</a>



@endsection
