<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Client extends Controller
{
    public function index()
    {
        return view('landing.index', [
            'users' => User::skip(0)->take(15)->get(),
            'users1' => User::skip(15)->take(15)->get(),
            'users2' => User::skip(30)->take(15)->get(),
        ]);
    }

    public function freelancers()
    {
        return view('landing.freelancer', [
            'users' => User::skip(0)->take(15)->get(),
            'users1' => User::skip(15)->take(15)->get(),
            'users2' => User::skip(30)->take(15)->get(),
        ]);
    }

    public function client()
    {
        return view('landing.client', [
            'users' => User::skip(0)->take(15)->get(),
            'users1' => User::skip(15)->take(15)->get(),
            'users2' => User::skip(30)->take(15)->get(),
        ]);
    }

    public function profile(){
        return view('landing.profile');
    }
}
