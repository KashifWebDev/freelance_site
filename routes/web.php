<?php

use App\Http\Controllers\ProfileController;
use App\Http\Middleware\RedirectBasedOnRole;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
})->name('index');

Route::get('/dashboard', function () {
})->name('dashboard')->middleware(RedirectBasedOnRole::class);


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

require __DIR__.'/auth.php';
