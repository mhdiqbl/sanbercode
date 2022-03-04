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
    <br>
    <h1>DAFTAR KOMENTAR</h1>
    <hr>
    @forelse ($film->komentar as $item)
        <div class="card">
            <h5 class="card-header">{{ $item->user->name }}</h5>
            <div class="card-body">
                <h5 class="card-title">Point : {{ $item->point }}</h5>
                <p class="card-text">{{ $item->content }}</p>
            </div>
        </div>

    @empty
        <h5>TIDAK ADA KOMENTAR</h5>
    @endforelse

    @auth
        <form action="/komentar" method="post">
            @csrf
            <div class="form-group">
                <input type="hidden" name="film_id" value="{{ $film->id }}" id="">
                <label for="point">Point : </label><br>
                <input type="number" name="point" id="point"><br>
                <label for="content">Isi Komentar : </label><br>
                <textarea name="content" id="content"></textarea><br>
                @error('content')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <input type="submit" value="Add Komentar" class="btn btn-primary">
        </form>

        <a href="/film" class="btn btn-info">Kembali</a>
    @endauth
@endsection
