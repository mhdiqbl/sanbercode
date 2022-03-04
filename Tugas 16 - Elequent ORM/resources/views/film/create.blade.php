@extends('layouts.admin')

@section('title')
    Halaman Tambah Film
@endsection

@section('isi')
    <h1>Masukkan Film!</h1>
    <form action="/film" method="post" enctype="multipart/form-data">
        @csrf
        <label for="judul">Judul : </label>
        <input type="text" value="{{ old('judul') }}" name="judul" id="judul"><br><br>
        @error('judul')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="ringkasan">Ringkasan : </label><br>
        <textarea name="ringkasan" id="ringkasan" cols="30" rows="10">{{ old('ringkasan') }}</textarea><br>
        @error('ringkasan')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="tahun">Tahun : </label>
        <input type="text" value="{{ old('tahun') }}" name="tahun" id="tahun"><br><br>
        @error('tahun')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="genre">Genre : </label>
        <select name="genre_id" id="genre">
            <option value="">-- Pilih Genre --</option>
            @foreach ($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->nama }}</option>
            @endforeach
        </select>
        @error('genre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="poster">Poster : </label>
        <input type="file" name="poster" id="poster"><br><br>
        @error('poster')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection
