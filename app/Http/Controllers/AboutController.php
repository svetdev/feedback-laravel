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


        return \Redirect::route('contact')
            ->with('message', 'Thanks for contacting us!');
    }
}
