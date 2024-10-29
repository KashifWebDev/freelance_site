<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('client.dashboard');
})->name('dashboard');

Route::get('/all-freelancers', function () {
    return view('client.all-freelancers', [
        'users' => User::skip(0)->take(15)->get(),
        'users1' => User::skip(15)->take(15)->get(),
        'users2' => User::skip(30)->take(15)->get(),
    ]);
})->name('all-freelancers');

Route::get('/chat', function () {
    return view('client.chat');
})->name('chat');

Route::get('/invoice-list', function () {
    return view('client.invoice');
})->name('invoice');

Route::get('/invoice-show', function () {
    return view('client.invoice-show');
})->name('invoice-show');

Route::get('/show-freelancer', function () {
    return view('client.show-freelancer');
})->name('show-freelancer')->withoutMiddleware('auth');


Route::get('/my-contracts', function () {
    return view('client.my-contracts');
})->name('my-contracts');
