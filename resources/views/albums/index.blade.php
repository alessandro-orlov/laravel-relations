<h1>Sono lista di albums</h1>
@foreach ($albums as $album)
  <div>
    <h3>{{ $album->title}}</h3>
    <a href="{{ route('albums.show', $album) }}"> dettagli album</a>
  </div>
@endforeach
