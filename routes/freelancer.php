<?php

use App\Http\Controllers\Freelancer;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::controller(Freelancer::class)->group(function () {
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/gigs', 'gigs')->name('gigs');
    Route::get('/invoice-list', 'invoices')->name('invoice');

    Route::get('/invoice-show', 'invoice')->name('invoice-show');

    Route::get('/my-contracts', function () {
        return view('freelancer.my-contracts');
    })->name('my-contracts');
});
