@extends('layouts.admin')

@section('title')
    Edit Profile {{ $profile->nama }}
@endsection

@section('isi')
    <h1>Edit Profile!</h1>
    <form action="/profile/{{ $profile->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <label for="email">Email : </label>
        <input type="text" value="{{ $profile->user->email }}" name="email" id="email" readonly><br><br>
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="name">Nama : </label>
        <input type="text" value="{{ $profile->user->name }}" name="name" id="name" readonly><br><br>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="umur">Umur : </label>
        <input type="number" value="{{ $profile->umur }}" name="umur" id="umur"><br><br>
        @error('umur')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="bio">Bio : </label><br>
        <textarea name="bio" id="bio" cols="30" rows="10">{{ $profile->bio }}</textarea>
        @error('bio')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="alamat">Alamat : </label>
        <input type="text" value="{{ $profile->alamat }}" name="alamat" id="alamat"><br>
        @error('alamat')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>
        <button type="submit">Edit</button>
    </form>
@endsection
