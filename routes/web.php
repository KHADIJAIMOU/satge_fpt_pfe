<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RapportController;
use App\Http\Controllers\RapportAdminController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisiteurController;
use App\Http\Controllers\ReclamtionController;
use App\Http\Controllers\AvisController;

// User Routes

Route::get('/conversations', [App\Http\Controllers\ConversationsController::class, 'index'])->name('conversations');
Route::get('/search/users', [App\Http\Controllers\ConversationsController::class, 'searchUsers'])->name('search.users');
Route::get('/conversations/{user}', [App\Http\Controllers\ConversationsController::class,'show'])->name('conversations.show')->middleware('can:talkTo,user');
Route::post('/conversations/{user}', [App\Http\Controllers\ConversationsController::class,'store'])->middleware('can:talkTo,user');
//Route::get('/', [RapportController::class, 'index']);
Route::get('/', [HomeController::class, 'redirectHome']);
Route::get('detailsEvent/{id}', [EventController::class, 'DetailsEvent']);
Route::get('listEvent/', [EventController::class, 'ListEvent']);
Route::post('listEvent/', [EventController::class, 'ListEvent'])->name('ListEvent');
Route::get('/login', [UserController::class, 'showLoginForm']);
Route::post('/login', [UserController::class, 'login'])->name('user.login');
Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');
Route::post('/register', [AdminController::class, 'register'])->name('register');
Route::get('/register', [AdminController::class, 'showRegistrationForm'])->name('register');

// Admin Routes
/*
Route::get('/admin/register', [AdminController::class, 'showRegistrationForm'])->name('admin.register');
Route::post('/admin/register', [AdminController::class, 'register'])->name('admin.register');
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');*/


Route::get('/', [HomeController::class, 'redirectHome']);
Route::get('detailsEvent/{id}', [EventController::class, 'DetailsEvent']);
Route::get('listEvent/', [EventController::class, 'ListEvent']);
Route::post('listEvent/', [EventController::class, 'ListEvent'])->name('ListEvent');
Route::get('/login', [UserController::class, 'showLoginForm']);
Route::post('/login', [UserController::class, 'login'])->name('user.login');
Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');

// User Routes
Route::prefix('/user')->group(function () {

Route::middleware(['auth', 'web'])->group(function () {
    Route::get('/repports', [RapportController::class, 'indexReport'])->name('rapport.indexReport');
    Route::get('/action', [RapportController::class, 'action'])->name('action');
    Route::resource('/rapport', RapportController::class);
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    Route::get('/profil', [RapportController::class,'profil'])->name('users.profil');
    Route::match(['put', 'post'], '/profil', [UsersController::class, 'profileUpdateUser'])->name('profileUpdateUser');
    Route::get('/rapport/{id}/print', [RapportController::class, 'print'])->name('rapport.print');
    Route::get('/rapport/{id}/telecharger', [RapportController::class, 'telecharger'])->name('rapport.telecharger');
});});

Route::prefix('/visiteur')->group(function () {
    Route::middleware(['auth', 'visiteur'])->group(function () {
        Route::get('/avi', [VisiteurController::class, 'indexAvis'])->name('indexAvis');
        Route::get('/reclamation', [VisiteurController::class, 'indexreclamation'])->name('indexreclamation');
        Route::match(['put', 'post'], '/avi/{id}', [VisiteurController::class, 'storeAvis'])->name('storeAvis');
    Route::delete('avi/{id}', [VisiteurController::class, 'destroyAvis'])->name('destroyAvis');
    Route::match(['put', 'post'], '/reclamation/{id}', [VisiteurController::class, 'storereclamation'])->name('storereclamation');
    Route::delete('reclamation/{id}', [VisiteurController::class, 'destroyreclamation'])->name('destroyreclamation');
    Route::get('/informationprofile', [VisiteurController::class, 'indexinformationupdate'])->name('informationupdate');

    Route::post('/informationprofile', [VisiteurController::class, 'profileUpdate'])->name('profileUpdateVisiteur');
    Route::get('/changepassword', [VisiteurController::class, 'indexchangePasswordUpdate']);
    Route::post('/changepassword', [VisiteurController::class, 'changePasswordUpdate'])->name('changePasswordUpdate');

});
});

Route::prefix('/admin')->group(function () {
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/actionsEvent', [EventController::class, 'actionsEvent'])->name('actionsEvent');
        Route::get('/actionsA', [UsersController::class, 'actions'])->name('actionsUser');
        Route::get('/actions', [RapportAdminController::class, 'actions'])->name('actions');

        Route::match(['put', 'post'], '/profil', [UsersController::class, 'profileUpdate'])->name('profileUpdateAdmin');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::match(['put', 'post'],'/dashboard', [AdminController::class, 'dashboard1'])->name('admin.dashboard');
    Route::resource('/repports', RapportAdminController::class);
    Route::resource('/users', UsersController::class);
    Route::post('/users/{user}/updatePassword', [UsersController::class,'updatePassword'])->name('admin.updatePassword');
    Route::get('/profil', [UsersController::class,'profil'])->name('admin.profil');
    Route::get('/repports/{id}/print', [RapportAdminController::class, 'print'])->name('repports.print');
    Route::get('/repports/{id}/telecharger', [RapportAdminController::class, 'telecharger'])->name('repports.telecharger');
    Route::resource('/events', EventController::class);
    Route::resource('/reclamations',ReclamtionController::class);
    Route::resource('/avis', AvisController::class);

});
});

// Handle invalid routes
Route::fallback(function () {
    return abort(404);
});
