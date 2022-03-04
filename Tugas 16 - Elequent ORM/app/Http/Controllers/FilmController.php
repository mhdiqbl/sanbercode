<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Genre;
use File;


class FilmController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $film = Film::all();
        return view('film.index', compact('film'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        return view('film.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request 
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'judul' => 'required',
            'ringkasan' => 'required',
            'tahun' => 'required',
            'genre_id' => 'required',
            'poster' => 'required|mimes:png,jpg,jpeg|max:2048',
        ]);
        $fileName = time().'.'.$request->poster->extension();

        $film = new Film;
        $film->judul = $request->judul;
        $film->ringkasan = $request->ringkasan;
        $film->tahun = $request->tahun;
        $film->genre_id = $request->genre_id;
        $film->poster = $fileName;
        $film->save();

        $request->poster->move(public_path('image'), $fileName);
        return redirect('/film');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film = Film::findOrFail($id);
        return view('film.detail', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genre = Genre::all();
        $film = Film::findOrFail($id);
        return view('film.edit', compact('film','genre'));
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
        $request -> validate([
            'judul' => 'required',
            'ringkasan' => 'required',
            'tahun' => 'required',
            'genre_id' => 'required',
            'poster' => 'mimes:png,jpg,jpeg|max:2048',
        ]);
        $film = Film::findOrFail($id);

        if ($request->has('poster')) {
            // $post_.delete();
            $path="image/";
            File::delete($path.$film->poster);
            // $poster = $request->poster;
            // $new_gambar = time().'-'.$gambar->getClientOriginalName();
            // $gambar->move('upload/post/',$new_gambar);
            $fileName = time().'.'.$request->poster->extension();
            $request->poster->move(public_path('image'), $fileName);
            $film_data = [
                'judul' => $request->judul,
                'ringkasan' => $request->ringkasan,
                'tahun' => $request->tahun,
                'genre_id' => $request->genre_id,
                'poster' => $fileName,
            ];
        }else {
            $film_data = [
                'judul' => $request->judul,
                'ringkasan' => $request->ringkasan,
                'tahun' => $request->tahun,
                'genre_id' => $request->genre_id,
            ];
        }
        // $film->tags()->sync($request->tags);
        $film->update($film_data);
        return redirect('/film');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film = Film::findOrFail($id);
        $path="image/";
        File::delete($path.$film->poster);
        $film->delete();
        return redirect('/film');
    }
}
