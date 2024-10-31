<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::redirect('/', '/dashboard');

Route::get('dashboard', [UserController::class, 'user_index'])->middleware(['auth', 'verified'])
->name('dashboard');
// Route::get('usertbl', [UserController::class, 'usertbl']);

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
