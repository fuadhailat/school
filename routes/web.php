<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;







Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware(['auth', 'is_admin']);


Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('auth', 'is_admin');






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/admin/users', [AdminController::class, 'showUsers'])->name('admin.users')->middleware('auth');

// Routes for editing and updating users
Route::get('/admin/users/{user}/edit', [AdminController::class, 'edit'])->name('admin.users.edit')->middleware('auth');
Route::post('/admin/users/{user}/update', [AdminController::class, 'update'])->name('admin.users.update')->middleware('auth');
Route::delete('/admin/users/{user}', [AdminController::class, 'destroy'])->name('admin.users.destroy')->middleware('auth');




// Route for searching users
Route::get('/admin/users/search', [AdminController::class, 'showUsers'])->name('admin.users.search')->middleware('auth');
