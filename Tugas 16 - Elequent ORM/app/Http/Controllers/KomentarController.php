<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komentar;
use Illuminate\Support\Facades\Auth;

class KomentarController extends Controller
{
    public function store(Request $request)
    {
        $request -> validate([
            'content' => 'required',
        ],
        [
            "content.required" => "Komentar kosong",
        ]);

        $komentar = new Komentar;
        $komentar->user_id = Auth::id();
        $komentar->film_id = $request->film_id;
        $komentar->content = $request->content;
        $komentar->point = $request->point;
        $komentar->save();
        return redirect('film/'.$request->film_id);
    }
}
