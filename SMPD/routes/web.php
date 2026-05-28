<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OpacController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\ReturnController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ELibraryController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\LoanHistoryController;


Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/opac', [OpacController::class, 'index'])->name('opac.index');
Route::get('/opac/{book}', [OpacController::class, 'show'])->name('opac.show');

Route::resource('/books', BookController::class);
Route::resource('/members', MemberController::class);
Route::get('/members/{id}/card', [MemberController::class, 'card'])->name('members.card');
Route::resource('/loans', LoanController::class);
Route::get('/returns', [ReturnController::class, 'index'])->name('returns.index');
Route::post('/returns/process', [ReturnController::class, 'process'])->name('returns.process');
Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
Route::put('/reservations/{reservation}/approve', [ReservationController::class, 'approve'])->name('reservations.approve');
Route::put('/reservations/{reservation}/cancel', [ReservationController::class, 'cancel'])->name('reservations.cancel');
Route::get('/elibrary', [ELibraryController::class, 'index'])->name('elibrary.index');
Route::get('/elibrary/{digitalBook}/read', [ELibraryController::class, 'read'])->name('elibrary.read');
Route::get('/statistics', [StatisticController::class, 'index'])->name('statistics.index');
Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
Route::get('/reports/export/pdf', [ReportController::class, 'exportPdf'])->name('reports.export.pdf');
Route::get('/reports/export/excel', [ReportController::class, 'exportExcel'])->name('reports.export.excel');
Route::get('/loan-history', [LoanHistoryController::class, 'index'])->name('loan-history.index');
Route::get('/reservations/pengguna', [ReservationController::class, 'pengguna'])->name('reservations.pengguna');
Route::get('/loans/pengguna', [LoanController::class, 'pengguna'])->name('loanhistory.index');
Route::get('/loan-history/pengguna', [LoanHistoryController::class, 'pengguna'])->name('loanhistory.index');
