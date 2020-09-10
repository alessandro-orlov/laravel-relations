@extends('layout.app')

{{-- Page title --}}
@section('title')
  Edit album: {{ $album->title }}
@endsection


@section('content')
  <h1>Edit Album: {{ $album->title }}</h1>

@endsection
