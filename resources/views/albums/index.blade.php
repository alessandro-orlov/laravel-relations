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
        <h3><a href="{{ route('albums.show', $album) }}">{{ $album->title}} <small>({{$album->artist}})</small></a></h3>
        <span>Anno album: {{ $album->year}}</span>
      </div>
    @endforeach



@endsection
