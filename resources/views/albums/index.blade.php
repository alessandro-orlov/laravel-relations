@extends('layout.app')

{{-- Page title --}}
@section('title')
  Album's page
@endsection


{{-- Page content --}}
@section('content')

    <h1>Tutti gli album</h1>
    @foreach ($albums as $album)
      <div class="album-list">
        <div class="list-container img">
          <a href="{{ route('albums.show', $album) }}"><img src="{{$album->poster->url}}" alt="{{$album->title}}"></a>
        </div>
        <div class="list-container info">
          <h3><a href="{{ route('albums.show', $album) }}">{{ $album->title}}</a></h3>
          <div>
            {{$album->artist}}
          </div>
          <div>Anno album: {{ $album->year}}</div>
        </div>
      </div>
    @endforeach



@endsection
