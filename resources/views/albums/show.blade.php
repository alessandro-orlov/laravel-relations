@extends('layout.app')

{{-- Page title --}}
@section('title')
   Album details: {{ $album->title }}
@endsection


@section('content')
    <div class="show-controls">
      <h1>Album: {{ $album->title }}</h1>

      <div class="controls">
        <ul>
          <li>Controls:</li>
          <li><a class="edit-btn" href="{{ route('albums.edit', $album ) }}">Edit</a></li>
          <li>
            <form class="delete-btn" action="{{ route('albums.destroy', $album) }}" method="post">
              @csrf
              @method('DELETE')

              <input type="submit" value="Delete Album">

            </form>
          </li>
        </ul>
      </div>
    </div>
    <div class="created-at">Added: {{$album->created_at->isoFormat('dddd D/M/YYYY')}}</div>


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
          <li>{{ $song->song_title }}</li>
        @endforeach
      </ul>
    @endif
    <br>
    <a href="{{ route('albums.index')}}">torna alla lista</a>



@endsection
