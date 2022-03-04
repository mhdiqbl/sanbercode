@extends('layouts.admin')

@section('title')
    Halaman Film
@endsection

@section('isi')
    @auth
        <a href="/film/create" class="btn btn-primary mb-3">Tambah Film</a>
    @endauth
    <div class="row">
        @forelse ($film as $item)
            <div class="col-4">
                <div class="card">
                    <img src="{{ asset('image/' . $item->poster) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>{{ $item->judul }}</h5><br>
                        <span class="badge badge-warning">{{ $item->genre->nama }}</span>
                        <p class="card-text">{{ Str::limit($item->ringkasan, 10) }}</p>
                        @auth
                            <form action="{{ route('film.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <a href="/film/{{ $item->id }}" class="btn btn-info btn-sm">Detail</a>
                                <a href="{{ route('film.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <input type="submit" class="btn btn-danger btn-sm" value="delete">
                            </form>
                        @endauth
                        @guest
                            <a href="/film/{{ $item->id }}" class="btn btn-info btn-sm">Detail</a>
                        @endguest
                    </div>
                </div>
            </div>
        @empty
            <h1>TIDAK ADA FILM</h1>
        @endforelse
    </div>
@endsection
