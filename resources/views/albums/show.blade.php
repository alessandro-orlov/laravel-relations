<h1>Album: {{ $album->title }}</h1>
<h2>Artista: {{$album->artist}}</h2>
<p>Anno album: {{ $album->year }}</p>

<h2>Lista Canzoni</h2>
<ul>
  @foreach ($album->songs as $song)
    <li>{{ $song->title }}</li>
  @endforeach
</ul>
<br>
<a href="{{ route('albums.index')}}">torna alla lista</a>
