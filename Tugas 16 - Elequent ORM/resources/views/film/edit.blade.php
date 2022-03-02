@extends('layouts.admin')

@section('title')
    Edit Film {{ $film->nama }}
@endsection

@section('isi')
    <h1>Edit Film!</h1>
    <form action="/film/{{ $film->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <label for="judul">Judul : </label>
        <input type="text" value="{{ $film->judul }}" name="judul" id="judul"><br><br>
        @error('judul')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="ringkasan">ringkasan : </label><br>
        <textarea name="ringkasan" id="ringkasan" cols="30" rows="10">{{ $film->ringkasan }}</textarea>
        @error('ringkasan')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="tahun">tahun : </label>
        <input type="text" value="{{ $film->tahun }}" name="tahun" id="tahun"><br>
        @error('tahun')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="genre">Genre</label>
        <select name="genre_id" id="genre">
            @foreach ($genre as $item)
                @if ($item->id === $film->genre_id)
                    <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                @else
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endif
            @endforeach
        </select>
        <br>
        <label for="poster">Poster : </label>
        <img src="{{ asset('image/' . $film->poster) }}" width="300px" alt=""><br><br>
        <input type="file" name="poster" id="poster">
        @error('poster')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>
        <button type="submit">Edit</button>
    </form>
@endsection
