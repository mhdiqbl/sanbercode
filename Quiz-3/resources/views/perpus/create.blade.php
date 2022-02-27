@extends('layouts.master')

@section('title')
    Halaman Tambah Data Buku
@endsection

@section('isi')
    <h1>Masukkan Data Buku!</h1>
    <form action="/buku" method="post">
        @csrf
        <label for="judul">Judul : </label>
        <input type="text" name="judul" id="judul"><br><br>
        @error('judul')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="deskripsi">Deskripsi : </label><br>
        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
        @error('deskripsi')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="pengarang">Pengarang : </label>
        <input type="text" name="pengarang" id="pengarang"><br><br>
        @error('pengarang')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="tahun">Tahun : </label>
        <input type="text" name="tahun" id="tahun"><br><br>
        @error('tahun')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <button type="submit">Tambah</button>
    </form>
@endsection
