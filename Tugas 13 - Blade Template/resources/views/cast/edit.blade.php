@extends('layouts.admin')

@section('title')
    Edit Cast {{ $cast->nama }}
@endsection

@section('isi')
    <h1>Edit Cast!</h1>
    <form action="/cast/{{ $cast->id }}" method="post">
        @csrf
        @method('put')
        <label for="Nama">Nama : </label>
        <input type="text" value="{{ $cast->nama }}" name="nama" id="nama"><br><br>
        @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="Umur">Umur : </label>
        <input type="text" value="{{ $cast->umur }}" name="umur" id="umur"><br><br>
        @error('umur')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="bio">Bio : </label><br>
        <textarea name="bio" id="bio" cols="30" rows="10">{{ $cast->bio }}</textarea>
        @error('bio')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <button type="submit">Edit</button>
    </form>
@endsection
