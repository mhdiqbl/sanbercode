@extends('layouts.admin')

@section('title')
    Halaman Detail Genre
@endsection

@section('isi')
    <h1>SELAMAT DATANG!</h1>
    <p>Nama : {{ $genre->nama }}</p>
    <div class="row">
        @forelse ($genre->film as $item)
            <div class="col-4">
                <div class="card">
                    <img src="{{ asset('image/' . $item->poster) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>{{ $item->judul }}</h5><br>
                        <p class="card-text">{{ Str::limit($item->ringkasan, 10) }}</p>
                        <a href="/film/{{ $item->id }}" class="btn btn-info btn-sm">Detail</a>
                    </div>
                </div>
            </div>
        @empty
            <h4>belum ada film di genre ini!!!</h4>
        @endforelse
    </div>
    <a href="/genre" class="btn btn-info">Kembali</a>
@endsection
