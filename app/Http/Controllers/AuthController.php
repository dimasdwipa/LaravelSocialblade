<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function getlogin()
    {
        return view('login');
    }



    public function postlogin(Request $request)
    {
        if (!\Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->back();
        }

        return redirect()->route('home');
    }



    public function getregister() 
    {
        return view('register');
    }



    public function postregister(Request $request)
    {       
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'nomor' => $request->nomor,
            'password' => bcrypt($request->password)
        ]);

        return redirect('login');

    }

    public function logout()
    {
        \Auth::logout();

        return redirect('login');
    }

    
}
