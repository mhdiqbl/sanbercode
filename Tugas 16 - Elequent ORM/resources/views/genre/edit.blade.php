@extends('layouts.admin')

@section('title')
    Edit Genre {{ $genre->nama }}
@endsection

@section('isi')
    <h1>Edit genre!</h1>
    <form action="/genre/{{ $genre->id }}" method="post">
        @csrf
        @method('put')
        <label for="nama">Nama : </label>
        <input type="text" value="{{ $genre->nama }}" name="nama" id="nama"><br><br>
        @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>
        <button type="submit">Edit</button>
    </form>
@endsection
