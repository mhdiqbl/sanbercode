@extends('layouts.admin')

@section('title')
    Halaman Tambah Genre
@endsection

@section('isi')
    <h1>Masukkan Genre!</h1>
    <form action="/genre" method="post" enctype="multipart/form-data">
        @csrf
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama"><br><br>
        @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection
