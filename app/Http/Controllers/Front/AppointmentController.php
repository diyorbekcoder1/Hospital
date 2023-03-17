<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class AppointmentController extends Controller
{
    public function index()
    {

        return view('front.homepage.layouts.appointment-front.appointments');
    }
}
