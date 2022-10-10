<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function contactSubmitted(Request $request)
    {
        $validate = $request->validate([
            "name"=>'required | min:3 | max:7' ,
            "email"=>'required | email',
            "subject"=>'required | min:5',
            "message"=>'required | string'
        ]
    );
    return redirect()->route('contact');
    }
}

