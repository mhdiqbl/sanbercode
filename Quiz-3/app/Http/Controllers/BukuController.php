<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function soal1()
    {
        return view('soal1');
    }

    public function index()
    {
        $buku = DB::table('buku')->get();
        return view('perpus.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perpus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "judul" => "required",
            "deskripsi" => "required",
            "pengarang" => "required",
            "tahun" => "required",
        ],
        [
            "judul.required" => "judul kosong",
            "deskripsi.required" => "deskripsi kosong",
            "pengarang.required" => "pengarang kosong",
            "tahun.required" => "tahun kosong",
        ]);

        DB::table('buku')->insert([
            "judul" => $request["judul"],
            "deskripsi" => $request["deskripsi"],
            "pengarang" => $request["pengarang"],
            "tahun" => $request["tahun"],
        ]);
        return redirect('/buku');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = DB::table('buku')->where('id',$id)->first();
        $genre = DB::table('genre')->where('buku_id',$id)->get();
        return view('perpus.detail', compact('buku','genre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = DB::table('buku')->where('id',$id)->first();
        return view('perpus.edit', compact('buku'));
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
        $request->validate([
            "judul" => "required",
            "deskripsi" => "required",
            "pengarang" => "required",
            "tahun" => "required",
        ],
        [
            "judul.required" => "judul kosong",
            "deskripsi.required" => "deskripsi kosong",
            "pengarang.required" => "pengarang kosong",
            "tahun.required" => "tahun kosong",
        ]);

        DB::table('buku')->where('id', $id)->update([
            "judul" => $request["judul"],
            "deskripsi" => $request["deskripsi"],
            "pengarang" => $request["pengarang"],
            "tahun" => $request["tahun"],
        ]);
        return redirect('/buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('buku')->where('id', '=', $id)->delete();
        return redirect('/buku');
    }
}
