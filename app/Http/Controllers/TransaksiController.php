<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function Transaksi()
    {
        return view('backend.v_transaksi.index');
    }
}
