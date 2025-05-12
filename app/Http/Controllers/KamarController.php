<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function Kamar()
    {
        return view('backend.v_kamar.index');

    }
}
