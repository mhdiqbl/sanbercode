@extends('layouts.admin')

@section('title')
    Halaman Register
@endsection

@section('isi')
    <a href="/cast/create" class="btn btn-primary mb-3">Tambah Kategori</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Umur</th>
                <th scope="col">Bio</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($cast as $key=> $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->umur }}</td>
                    <td>{{ $item->bio }}</td>
                    <td>
                        <form action="/cast/{{ $item->id }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="/cast/{{ $item->id }}" class="btn btn-info">Details</a>
                            <a href="/cast/{{ $item->id }}/edit" class="btn btn-success">Edit</a>
                            <input type="submit" value="delete" class="btn btn-danger">
                        </form>
                    </td>

                </tr>
            @empty
                <h1>DATA KOSONG</h1>
            @endforelse
        </tbody>
    </table>
@endsection
