<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GigController extends Controller
{
    public function index(){
        return view('landing.gig');
    }

    public function show()
    {
        return view('landing.show-gig');
    }
}