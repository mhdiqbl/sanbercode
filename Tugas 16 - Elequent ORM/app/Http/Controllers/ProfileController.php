<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::where('user_id',Auth::id())->first();
        return view('profile.index', compact('profile'));
    }
    public function update(Request $request, $id)
    {
        $request -> validate([
            'umur' => 'required',
            'bio' => 'required',
            'alamat' => 'required',
        ]);

        $profile = Profile::find($id);
        $profile->umur = $request['umur'];
        $profile->bio = $request['bio'];
        $profile->alamat = $request['alamat'];
        $profile->user_id = Auth::id();
        $profile->save();
        return redirect('/profile');
    }
}
