<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('freelancer.dashboard');
})->name('dashboard');

Route::get('/all-clients', function () {
    return view('freelancer.all-clients', [
        'users' => User::skip(0)->take(15)->get(),
        'users1' => User::skip(15)->take(15)->get(),
        'users2' => User::skip(30)->take(15)->get(),
    ]);
})->name('all-clients');

Route::get('/chat', function () {
    return view('freelancer.chat');
})->name('chat');

Route::get('/invoice-list', function () {
    return view('freelancer.invoice');
})->name('invoice');

Route::get('/invoice-show', function () {
    return view('freelancer.invoice-show');
})->name('invoice-show');

Route::get('/show-client', function () {
    return view('freelancer.show-client');
})->name('show-client')->withoutMiddleware('auth');

Route::get('/my-contracts', function () {
    return view('freelancer.my-contracts');
})->name('my-contracts');
