<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    
    public function welcome(){

        return view('welcome');

    }

    public function faq(){

        return view ('faq');

    }

    public function contactShow(){

        return view ('contact');

    }

    public function services(){

        return view('services');

    }

    public function showTracking(){

        return view ('tracking');

    }

    public function showBookingPage(){

        return view ('booking');

    }

}
