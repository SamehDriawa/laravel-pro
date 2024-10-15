<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes(['verify'=>true]);
Route::get('/users',[HomeController::class, 'index'])->name('logged')->middleware('verified');
Route::get('/home',[HomeController::class, 'loggedin'])->name('logged')->middleware('verified');
Route::get('/email/verify',[HomeController::class, 'verifyMail'])->name('verification.notice');