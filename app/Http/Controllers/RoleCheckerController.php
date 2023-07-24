<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleCheckerController extends Controller
{
    
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
