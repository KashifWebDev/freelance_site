<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\Client;
use App\Http\Controllers\GigController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\RedirectBasedOnRole;
use Illuminate\Support\Facades\Route;


Route::controller(Client::class)->group(function () {
    Route::group(['as' => 'guests.'], function () {
        Route::get('/freelancers', 'freelancers')->name('freelancers');
        Route::get('/clients', 'client')->name('clients');
    });

    Route::get('/', 'index')->name('index');
    Route::get('my-profile', 'profile')->name('my-profile');

});

Route::controller(ChatController::class)->group(function () {
    Route::get('/chat', 'index')->name('chat');
});


Route::controller(GigController::class)->group(function () {
    Route::get('/gigs', 'index')->name('gigs');
    Route::get('/show-gig', 'show')->name('show-gig');
});







Route::prefix('freelancer')->middleware(['auth'])->name('freelancer.')->group(function (){
    require 'freelancer.php';
});

Route::prefix('client')->middleware(['auth'])->name('client.')->group(function (){
    require 'client.php';
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', function () {
})->name('dashboard')->middleware(RedirectBasedOnRole::class);

Route::get('/login', function () {
    return redirect()->route('login');
})->name('index');
require __DIR__.'/auth.php';
