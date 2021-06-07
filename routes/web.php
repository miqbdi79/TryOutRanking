<?php

use App\Http\Controllers\QRController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterTOController;
use App\Http\Controllers\TryoutController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
  return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function() {
  return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function() {
  Route::resource('tryouts', TryoutController::class);
  Route::resource('support', SupportController::class);
  Route::resource('users', UserController::class);
  Route::resource('register-to', RegisterTOController::class);
});
