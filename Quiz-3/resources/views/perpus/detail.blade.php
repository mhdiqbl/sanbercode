@extends('layouts.master')
@section('title')
    Halaman Detail Buku
@endsection
@section('isi')
    <h1>Nama Buku : {{ $buku->judul }}</h1>
    <p>ID : {{ $buku->id }}</p>
    <p>judul : {{ $buku->judul }}</p>
    <p>deskripsi : {{ $buku->deskripsi }}</p>
    <p>pengarang : {{ $buku->pengarang }}</p>
    <p>tahun : {{ $buku->tahun }}</p>
    <p>genre : </p>
    @foreach ($genre as $gen)
        <ul>
            <li>
                {{ $gen->nama }}
            </li>
        </ul>
    @endforeach
    <br>
    <a href="/buku" class="btn btn-info">Kembali</a>
@endsection
