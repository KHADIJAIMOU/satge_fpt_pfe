<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RapportController;
use App\Http\Controllers\RapportAdminController;
use App\Http\Controllers\UsersController;

// User Routes

Route::get('/', [RapportController::class, 'index']); 
Route::get('/user/register', [UserController::class, 'showRegistrationForm'])->name('user.register');
Route::post('/user/register', [UserController::class, 'register'])->name('user.register');
Route::get('/login', [UserController::class, 'showLoginForm'])->name('user.login');
Route::post('/login', [UserController::class, 'login'])->name('user.login');
Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');

// Admin Routes

Route::get('/admin/register', [AdminController::class, 'showRegistrationForm'])->name('admin.register');
Route::post('/admin/register', [AdminController::class, 'register'])->name('admin.register');
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
/*
// Admin Middleware
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('/admin/repports', RapportAdminController::class);
    Route::resource('/admin/users', UsersController::class);
    Route::post('/admin/users/{user}/updatePassword', [UsersController::class,'updatePassword'])->name('admin.updatePassword');
    Route::get('/admin/users/profil', [UsersController::class,'profil'])->name('admin.profil');
});

// User Middleware
Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    Route::get('/user/rapport', [RapportController::class, 'index'])->name('rapport.index');
    Route::post('/user/rapport', [RapportController::class, 'store'])->name('rapport.store');
    Route::get('/user/rapport/create', [RapportController::class, 'create'])->name('rapport.create');
    Route::get('/user/rapport/{id}', [RapportController::class, 'show'])->name('rapport.show');
    Route::get('/user/rapport/{id}/edit', [RapportController::class, 'edit'])->name('rapport.edit');
    Route::put('/user/rapport/{id}', [RapportController::class, 'update'])->name('rapport.update');
    Route::delete('/user/rapport/{id}', [RapportController::class, 'destroy'])->name('rapport.destroy');
    Route::resource('/user/rapport', RapportController::class)->except(['index', 'store', 'create', 'show', 'edit', 'update', 'destroy']);
});
*/
// Handle invalid routes
Route::fallback(function () {
    return abort(404);
});
// User Routes
/*
Route::middleware(['auth:web', 'web'])->group(function () {
    Route::get('/user/rapport', [RapportController::class, 'index'])->name('rapport.index');
    Route::post('/user/rapport', [RapportController::class, 'store'])->name('rapport.store');
    Route::get('/user/rapport/create', [RapportController::class, 'create'])->name('rapport.create');
    Route::get('/user/rapport/{id}', [RapportController::class, 'show'])->name('rapport.show');
    Route::get('/user/rapport/{id}/edit', [RapportController::class, 'edit'])->name('rapport.edit');
    Route::put('/user/rapport/{id}', [RapportController::class, 'update'])->name('rapport.update');
    Route::delete('/user/rapport/{id}', [RapportController::class, 'destroy'])->name('rapport.destroy');
    Route::resource('/user/rapport', RapportController::class);
    Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
});

// Admin Routes
Route::middleware(['auth:admin', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('/admin/repports', RapportAdminController::class);
    Route::resource('/admin/users', UsersController::class);
    Route::post('/admin/users/{user}/updatePassword', [UsersController::class,'updatePassword'])->name('admin.updatePassword');
    Route::get('/admin/users/profil', [UsersController::class,'profil'])->name('admin.profil');
});*/
// user protected routes
Route::group(['middleware' => ['auth', 'web'], 'prefix' => 'user'], function () {
    Route::get('/repports', [RapportController::class, 'indexReport'])->name('rapport.indexReport');

    Route::resource('/rapport', RapportController::class);
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    Route::get('/profil', [RapportController::class,'profil'])->name('users.profil');

});

// admin protected routes
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('/repports', RapportAdminController::class);
    Route::resource('/users', UsersController::class);
    Route::post('/users/{user}/updatePassword', [UsersController::class,'updatePassword'])->name('admin.updatePassword');
    Route::get('/profil', [UsersController::class,'profil'])->name('admin.profil');
    Route::get('/repports/{id}/print', [RapportAdminController::class, 'print'])->name('repports.print');
    Route::get('/repports/{id}/telecharger', [RapportAdminController::class, 'telecharger'])->name('repports.telecharger');
    
});