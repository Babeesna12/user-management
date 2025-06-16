<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;


// Public welcome page
Route::get('/', function () {
    return view('welcome');
});

// Dashboard (only for authenticated and verified users)
Route::middleware(['auth', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Profile management routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('users', UserController::class);
});

// Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
//     Route::get('/users', [UserController::class, 'index'])->name('users.index');
//     Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
//     Route::post('/users', [UserController::class, 'store'])->name('users.store');
//     Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
//     Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
//     Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
// });


require __DIR__.'/auth.php';
