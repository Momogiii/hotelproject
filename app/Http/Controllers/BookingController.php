<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function Booking()
    {
        return view('backend.v_booking.index');
    }
}
