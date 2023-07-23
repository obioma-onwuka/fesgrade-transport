<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    
    public function showLogin(){

        return view ('guest-auth.login');

    }

    public function login(Request $request){

        $formData = $request->validate([

            'email' => [
                'required', 'max:72'
            ],
            'password' => [
                'required'
            ]

        ]);

        $formData['email'] = strip_tags($formData['email']);
        $formData['password'] = strip_tags($formData['password']);

        $isLogged = auth()->attempt($formData);

        if($isLogged){

            $request->session()->regenerate();
            return redirect()->route('guest.check.role');

        }
        return back()->with('error', 'Login failed, please try again later.');

    }

    public function showRegister(){

        return view ('guest-auth.register');

    }

    public function register(Request $request){

        $formData = $request->validate([

            'first_name' => [
                'required', 'min:5', 'max:15', 'string'
            ],

            'surname' => [
                'required', 'min:5', 'max:15', 'string'
            ],

            'email' => [
                'required', 'max:72', Rule::unique('users', 'email')
            ],

            'password' => [
                'required', 'min:5', 'max:35', 'confirmed'
            ],

            'password_confirmation' => [
                'required'
            ]

        ]);

        $formData['first_name'] = strip_tags(strtolower($formData['first_name']));
        $formData['surname'] = strip_tags(strtolower($formData['surname']));
        $formData['email'] = strip_tags(strtolower($formData['email']));
        $formData['password'] = bcrypt($formData['password']);

        $goSave = User::create($formData);

        if($goSave){

            return redirect()->route('auth.login.show')->with('success', 'You have registered successfully');

        }

        return back()->with('error', 'Something went wrong; please try again later');


    }


}
