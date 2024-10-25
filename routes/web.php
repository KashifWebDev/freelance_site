<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
})->name('index');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');



Route::prefix('freelancer')->group(function (){
    Route::get('/dashboard', function () {
        return view('freelancer.dashboard');
    })->name('dashboard1');

    Route::get('/all-clients', function () {
        return view('freelancer.all-clients', [
            'users' => User::skip(0)->take(15)->get(),
            'users1' => User::skip(15)->take(15)->get(),
            'users2' => User::skip(30)->take(15)->get(),
        ]);
    })->name('freelancer.all-clients');

    Route::get('/chat', function () {
        return view('freelancer.chat');
    })->name('freelancer.chat');

    Route::get('/invoice-list', function () {
        return view('freelancer.invoice');
    })->name('freelancer.invoice');

    Route::get('/freelancer.invoice-show', function () {
        return view('freelancer.invoice-show');
    })->name('freelancer.invoice-show');
});

Route::prefix('client')->group(function (){

    Route::get('/dashboard', function () {
        return view('client.dashboard');
    })->name('dashboard');

    Route::get('/all-freelancers', function () {
        return view('client.all-freelancers', [
            'users' => User::skip(0)->take(15)->get(),
            'users1' => User::skip(15)->take(15)->get(),
            'users2' => User::skip(30)->take(15)->get(),
        ]);
    })->name('client.all-freelancers');

    Route::get('/chat', function () {
        return view('client.chat');
    })->name('client.chat');

    Route::get('/invoice-list', function () {
        return view('client.invoice');
    })->name('client.invoice');

    Route::get('/client.invoice-show', function () {
        return view('client.invoice-show');
    })->name('client.invoice-show');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
