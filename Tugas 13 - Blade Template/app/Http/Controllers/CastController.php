<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cast = DB::table('cast')->get();
        return view('cast.index', compact('cast'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cast.create');
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
            "nama" => "required",
            "umur" => "required",
            "bio" => "required",
        ],
        [
            "nama.required" => "Nama kosong",
            "umur.required" => "Umur kosong",
            "bio.required" => "Bio kosong",
        ]);

        DB::table('cast')->insert([
            "nama" => $request["nama"],
            "umur" => $request["umur"],
            "bio" => $request["bio"],
        ]);
        return redirect('/cast');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cast = DB::table('cast')->where('id',$id)->first();
        return view('cast.detail', compact('cast'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cast = DB::table('cast')->where('id',$id)->first();
        return view('cast.edit', compact('cast'));
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
            "nama" => "required",
            "umur" => "required",
            "bio" => "required",
        ],
        [
            "nama.required" => "Nama kosong",
            "umur.required" => "Umur kosong",
            "bio.required" => "Bio kosong",
        ]);

        DB::table('cast')->where('id', $id)->update([
            "nama" => $request["nama"],
            "umur" => $request["umur"],
            "bio" => $request["bio"],
        ]);
        return redirect('/cast');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('cast')->where('id', '=', $id)->delete();
        return redirect('/cast');
    }
}
