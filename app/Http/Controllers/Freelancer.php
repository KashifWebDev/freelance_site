<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Freelancer extends Controller
{
    public function dashboard(){
        return view('freelancer.dashboard');
    }

    public function invoices(){
        return view('freelancer.invoice');
    }

    public function invoice(){
        return view('freelancer.invoice-show');
    }

    public function gigs(){
        return view('freelancer.gigs');
    }
}
