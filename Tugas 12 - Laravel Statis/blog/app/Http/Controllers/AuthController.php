<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function kirim(Request $request)
    {
        $firstname = $request['firstname'];
        $lastname = $request['lastname'];
        $gender = $request['gender'];
        $negara = $request['negara'];
        $language = $request['language'];
        $bio = $request['bio'];

        return view('selamat', compact('firstname', 'lastname', 'gender', 'negara', 'language', 'bio'));
    }
}
