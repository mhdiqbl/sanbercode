@extends('layouts.admin')

@section('title')
    Halaman Selamat Datang
@endsection

@section('isi')
    <h1>SELAMAT DATANG!</h1>
    <p>Fisrt Name : {{ $firstname }}</p>
    <p>Last name : {{ $lastname }}</p>
    <p>Gender : {{ $gender }}</p>
    <p>Negara : {{ $negara }}</p>
    <p>Language : {{ $language }}</p>
    <p>Bio : {{ $bio }}</p>
@endsection
