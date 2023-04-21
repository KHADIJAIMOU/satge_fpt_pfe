<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RapportController;

// User Routes
Route::get('/user/register', [UserController::class, 'showRegistrationForm'])->name('user.register');
Route::post('/user/register', [UserController::class, 'register'])->name('user.register');
Route::get('/user/login', [UserController::class, 'showLoginForm'])->name('user.login');
Route::post('/user/login', [UserController::class, 'login'])->name('user.login');
Route::post('/user/logout', [UserController::class, 'logout'])->name('user.logout');
Route::get('/user/rapport', [UserController::class, 'userReport'])->name('user.rapport');



// Admin Routes
Route::get('/admin/register', [AdminController::class, 'showRegistrationForm'])->name('admin.register');
Route::post('/admin/register', [AdminController::class, 'register'])->name('admin.register');
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
//rapport
/*Route::get('/user/rapport', [RapportController::class, 'index'])->name('rapport.index');
Route::post('/user/rapport', [RapportController::class, 'store'])->name('rapport.store');
Route::get('/user/rapport/create', [RapportController::class, 'create'])->name('rapport.create');
Route::get('/user/rapport/{id}', [RapportController::class, 'show'])->name('rapport.show');
Route::get('/user/rapport/{id}/edit', [RapportController::class, 'edit'])->name('rapport.edit');
Route::put('/user/rapport/{id}', [RapportController::class, 'update'])->name('rapport.update');
Route::delete('/user/rapport/{id}', [RapportController::class, 'destroy'])->name('rapport.destroy');*/
Route::resource('/user/rapport', RapportController::class);
Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
