<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registration()
    {
        return view('registration');
    }

    public function registrationSubmitted(Request $request)
    {
        $validate = $request->validate([
            "fname"=>'required | min:3 | string',
            "lname"=>'required | string |  min:3',
            "email"=>'required | email',
            "password"=>'required | numeric | min: 8',
            "gender"=>'required',
            "dob"=>'required',
            "phone"=>'required | numeric | min:10'
        ]
    );
    return redirect()->route('login');
    }
}
