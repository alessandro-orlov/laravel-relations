<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Song;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::all();

        $songs = Song::all();
        dd($songs);

        // Visualizzo ultimo album inserito come primo risulatato della pagina
        $albums = Album::orderBy('created_at', 'desc')->get();

        return view('albums.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('albums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $requested_info = $request->all();

      $new_album = new Album();
      $new_album->title = $requested_info['album-title'];
      $new_album->artist = $requested_info['artist'];
      $new_album->year = $requested_info['year'];
      $new_album->save();

      $new_album_song = new Song();
      $nwe_album_song->title = $requested_info['title'];
      $nwe_album_song->genre = $requested_info['genre'];
      $nwe_album_song->album_id = $new_album->id;
      $new_album_song->save();

      return redirect()->route('albums.show', $new_album);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        return view('albums.show' , compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
