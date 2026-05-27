<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OpacController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\ReturnController;

Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/opac', [OpacController::class, 'index'])->name('opac.index');
Route::get('/opac/{id}', [OpacController::class, 'show'])->name('opac.show');

Route::resource('/books', BookController::class);
Route::resource('/members', MemberController::class);
Route::get('/members/{id}/card', [MemberController::class, 'card'])->name('members.card');
Route::resource('/loans', LoanController::class);
Route::get('/returns', [ReturnController::class, 'index'])->name('returns.index');
Route::post('/returns/process', [ReturnController::class, 'process'])->name('returns.process');