@extends('layouts.admin')

@section('title')
    Halaman Register
@endsection

@section('isi')
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/kirim" method="post">
        @csrf
        <label for="FirstName">First Name :</label>
        <input type="text" name="firstname" id="FirstName"><br><br>
        <label for="LastName">Last Name :</label>
        <input type="text" name="lastname" id="LastName"><br><br>
        <label for="Gender">Gender :</label><br>
        <input type="radio" name="gender" id="male"><label for="male">Male</label>
        <br>
        <input type="radio" name="gender"><label for="female">Female</label>
        <br>
        <input type="radio" name="gender"><label for="other">Other</label>
        <br><br>

        <label for="nationaly">Nationaly :</label><br>
        <select name="negara" id="nationaly">
            <option value="indonesia">Indonesia</option>
            <option value="malaysia">Malaysia</option>
            <option value="brunei">Brunei</option>
            <option value="singapura">Singapura</option>
        </select>
        <br><br>

        <label for="language">Language Spoken: </label><br>
        <input type="checkbox" name="language" id="indonesia"><label for="indonesia">Bahasa Indonesia</label><br>
        <input type="checkbox" name="language" id="inggris"><label for="inggris">Bahasa Inggris</label><br>
        <input type="checkbox" name="language" id="other"><label for="other">Other</label><br>
        <br><br>
        <label for="bio">Bio:</label><br>
        <textarea name="bio" id="identitas" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Sign Up</button>
    </form>
@endsection
