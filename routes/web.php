<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Customer routes
Route::prefix('customer')->group(function () {

    Route::get('/dashboard', function () {
        return view('Frontend.Customer.dashboard');

    })->middleware(['auth', 'verified'])->name('customer.dashboard');
});

// Admin routes
Route::prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('Frontend.Admin.Cork-Admin DASHBOARD.index');

    })->middleware(['auth', 'verified'])->name('admin.dashboard');

    // Route::controller()->group(function () {

    // });
});
require __DIR__.'/auth.php';
