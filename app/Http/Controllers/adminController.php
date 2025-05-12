<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function BerandaAdmin()
    {
        return view('backend.v_admin.admin', [
            'judul' => 'Admin Beranda'
        ]);
    }
}
