@extends('layouts.admin')

@section('title')
    Halaman Register
@endsection

@section('isi')
    <h1>Masukkan Cast!</h1>
    <form action="/cast/" method="post">
        @csrf
        <label for="Nama">Nama : </label>
        <input type="text" name="nama" id="nama"><br><br>
        @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="Umur">Umur : </label>
        <input type="text" name="umur" id="umur"><br><br>
        @error('umur')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="bio">Bio : </label><br>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
        @error('bio')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <button type="submit">Tambah</button>
    </form>
@endsection
