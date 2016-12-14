<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store()
    {
        //store message here in database

        //return view('thankyou');

        return \Redirect::route('thank')
            ->with('message', 'Thanks for your feedback!');
    }

    public function thank(){
        return view('thankyou');
    }
}
