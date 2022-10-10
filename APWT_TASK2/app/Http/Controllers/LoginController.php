<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginSubmitted(Request $request)
    {
        $validate = $request->validate([
            "email"=>'required | email',
            "password"=>'required | numeric | min:7'
        ]
    );
    return redirect()->route('login');
    }
}
