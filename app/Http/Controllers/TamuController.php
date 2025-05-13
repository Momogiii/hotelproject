<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function Tamu()
    {
        return view('backend.v_tamu.tamu');
    }
}
