<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;

Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/register', [UserController::class, 'indexRegister'])->name('indexRegister');
Route::post('/auth', [LoginController::class, 'auth'])->name('auth'); 
Route::post('/', [UserController::class, 'register'])->name('register'); 

Route::prefix('/app')->middleware('auth')->group(function () {
    //Logout
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    //Dashboard
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');  
     
   //Contacts
   Route::get('/contacts', [ContactController::class, 'index'])->name('indexContact');
   Route::get('/contacts/{id}/show/', [ContactController::class, 'show'])->name('show');
   Route::get('/contacts/create', [ContactController::class, 'create'])->name('create');
   Route::post('/contacts', [ContactController::class, 'store'])->name('store');
   Route::get('/contacts/{id}/edit/', [ContactController::class, 'edit'])->name('edit');
   Route::put('/contacts/{id}', [ContactController::class, 'update'])->name('update');
   Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('delete');    

    });
