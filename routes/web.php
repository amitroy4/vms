<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VisitorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/visitor/checkin', function () {
    return view('checkin');
});

Route::get('/visitor/checkin', [VisitorController::class, 'checkin'])->name('visitor.checkin');
Route::post('/visitor/store', [VisitorController::class, 'store'])->name('visitor.store');

require __DIR__.'/auth.php';
