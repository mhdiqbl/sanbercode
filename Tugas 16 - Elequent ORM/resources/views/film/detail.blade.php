@extends('layouts.admin')

@section('title')
    Halaman Detail Film
@endsection

@section('isi')
    <img src="{{ asset('image/' . $film->poster) }}" width="300px" alt="">
    <h1>{{ $film->judul }}</h1>
    <p>Nama : {{ $film->judul }}</p>
    <p>ringkasan : {{ $film->ringkasan }}</p>
    <p>tahun : {{ $film->tahun }}</p>
    <p>genre_id : {{ $film->genre_id }}</p>
    <a href="/film" class="btn btn-info">Kembali</a>
@endsection
