<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\ReturnController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\LoanHistoryController;
use App\Http\Controllers\ELibraryController;
use App\Http\Controllers\OpacController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardPustakawanController;
use App\Http\Controllers\DashboardAnggotaController;
use App\Http\Controllers\NotificationController;

/*
|--------------------------------------------------------------------------
| LANDING
|--------------------------------------------------------------------------
*/

Route::get(
    '/',
    [LandingController::class, 'index']
)->name('landing');


/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

Route::get(
    '/login',
    [AuthController::class, 'login']
)->name('login');

Route::post(
    '/login',
    [AuthController::class, 'loginPost']
)->name('login.post');

Route::get(
    '/register',
    [AuthController::class, 'register']
)->name('register');

Route::get(
    '/logout',
    [AuthController::class, 'logout']
)->name('logout');


/*
|--------------------------------------------------------------------------
| DASHBOARD ROLE
|--------------------------------------------------------------------------
*/

// ADMIN
Route::get(
    '/admin/dashboard',
    function () {
        return view('admin.dashboard.index');
    }
)->name('admin.dashboard');


// PUSTAKAWAN
Route::get(
    '/pustakawan/dashboard',
    [DashboardPustakawanController::class, 'index']
)->name('pustakawan.dashboard');


// ANGGOTA
Route::get(
    '/anggota/dashboard',
    [DashboardAnggotaController::class, 'index']
)->name('anggota.dashboard');

/*
|--------------------------------------------------------------------------
| OPAC PUBLIC
|--------------------------------------------------------------------------
*/

Route::get(
    '/opac',
    [OpacController::class, 'index']
)->name('opac.index');

Route::get(
    '/opac/{book}',
    [OpacController::class, 'show']
)->name('opac.show');


/*
|--------------------------------------------------------------------------
| ADMIN & PUSTAKAWAN
|--------------------------------------------------------------------------
*/

// BOOKS
Route::resource(
    '/books',
    BookController::class
);

// MEMBERS
Route::resource(
    '/members',
    MemberController::class
);

// MEMBER CARD
Route::get(
    '/members/{id}/card',
    [MemberController::class, 'card']
)->name('members.card');

// REPORTS
Route::get(
    '/reports',
    [ReportController::class, 'index']
)->name('reports.index');

// EXPORT PDF
Route::get(
    '/reports/export/pdf',
    [ReportController::class, 'exportPdf']
)->name('reports.export.pdf');

// EXPORT EXCEL
Route::get(
    '/reports/export/excel',
    [ReportController::class, 'exportExcel']
)->name('reports.export.excel');

//STATISTICS
Route::get(
    '/statistics',
    [StatisticController::class, 'index']
)->name('statistics.index');

//MANAJEMEN HAK AKSES
Route::get(
    '/users',
    [UserController::class, 'index']
)->name('users.index');

/*
|--------------------------------------------------------------------------
| PUSTAKAWAN
|--------------------------------------------------------------------------
*/

// LOANS
Route::get(
    '/loans',
    [LoanController::class, 'index']
)->name('loans.index');

Route::get(
    '/loans/create',
    [LoanController::class, 'create']
)->name('loans.create');

Route::post(
    '/loans/store',
    [LoanController::class, 'store']
)->name('loans.store');


// RETURNS
Route::get(
    '/returns',
    [ReturnController::class, 'index']
)->name('returns.index');

Route::post(
    '/returns/process',
    [ReturnController::class, 'process']
)->name('returns.process');


// RESERVASI PUSTAKAWAN
Route::get(
    '/reservations',
    [ReservationController::class, 'index']
)->name('reservations.pustakawan');

Route::post(
    '/reservations/store',
    [ReservationController::class, 'store']
)->name('reservations.store');

Route::put(
    '/reservations/{reservation}/approve',
    [ReservationController::class, 'approve']
)->name('reservations.approve');

Route::put(
    '/reservations/{reservation}/cancel',
    [ReservationController::class, 'cancel']
)->name('reservations.cancel');

Route::get(
    '/pustakawan/reservations',
    [ReservationController::class, 'index']
)->name('reservations.pustakawan');


/*
|--------------------------------------------------------------------------
| Anggota
|--------------------------------------------------------------------------
*/

// LOAN HISTORY
Route::get(
    '/loan-history',
    [LoanHistoryController::class, 'anggota']
)->name('loan-history.index');


// RESERVASI anggota
Route::get(
    '/reservations/anggota',
    [ReservationController::class, 'anggota']
)->name('reservations.anggota');

Route::post(
    '/reservations/store',
    [ReservationController::class, 'store']
)->name('reservations.store');


// E-LIBRARY
Route::get(
    '/elibrary',
    [ELibraryController::class, 'index']
)->name('elibrary.index');

Route::get(
    '/elibrary/{digitalBook}/read',
    [ELibraryController::class, 'read']
)->name('elibrary.read');

// NOTIFIKASI
Route::get(
    '/notifications',
    [NotificationController::class, 'index']
)->name('notifications.index');
