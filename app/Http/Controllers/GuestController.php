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

    public function check_role(){

        $has_authenticated_x = auth()->user();
        $logged_role = $has_authenticated_x->roles;

        if($logged_role == 'admin'){

            return view ('authenticated.admin.index');

        }else{
            
            $userCheck = $has_authenticated_x;
            return view ('authenticated.user.index', compact('userCheck'));

        }

    }

}
