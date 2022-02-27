@extends('layouts.master')

@section('title')
    Halaman Perpustakaan
@endsection

@push('scripts')
    <script>
        Swal.fire({
            title: "Berhasil!",
            text: "Memasangkan script sweet alert",
            icon: "success",
            confirmButtonText: "Cool",
        });
    </script>
@endpush

@section('isi')
    <a href="/buku/create" class="btn btn-primary mb-3">Tambah Buku</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Judul</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Tahun</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($buku as $key=> $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>{{ $item->pengarang }}</td>
                    <td>{{ $item->tahun }}</td>
                    <td>
                        <form action="/buku/{{ $item->id }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="/buku/{{ $item->id }}" class="btn btn-info">Details</a>
                            <a href="/buku/{{ $item->id }}/edit" class="btn btn-success">Edit</a>
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
