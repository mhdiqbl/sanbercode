@extends('layouts.admin')

@section('title')
    Halaman Genre
@endsection

@section('isi')
    @auth
        <a href="/genre/create" class="btn btn-primary mb-3">Tambah Genre</a>
    @endauth

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($genre as $key=>$item)
                <tr>
                    <td scope="row">{{ $key + 1 }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>
                        <form action="{{ route('genre.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('genre.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('genre.show', $item->id) }}" class="btn btn-info">Details</a>
                            <input type="submit" value="delete" class="btn btn-danger">
                        </form>
                    </td>

                </tr>

            @empty
                <tr>
                    DATA GENRE KOSONG
                </tr>
            @endforelse


        </tbody>
    </table>
@endsection
