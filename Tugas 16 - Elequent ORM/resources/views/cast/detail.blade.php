@extends('layouts.admin')

@section('title')
    Halaman Detail Cast
@endsection

@section('isi')
    <h1>SELAMAT DATANG!</h1>
    <p>ID : {{ $cast->id }}</p>
    <p>Nama : {{ $cast->nama }}</p>
    <p>Umur : {{ $cast->umur }}</p>
    <p>Bio : {{ $cast->bio }}</p>
    <a href="/cast" class="btn btn-info">Kembali</a>
@endsection
