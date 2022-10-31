<?php

use App\Http\Controllers\Admin\CustomerListController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ModificationController;
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
    return view('Frontend.login');
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
        return view('Frontend.Admin.dashboard');

    })->middleware(['auth', 'verified'])->name('admin.dashboard');

    Route::controller(DashboardController::class)->group(function () {

        Route::get('/dashboard', 'index')->name('admin.dashboard');

        Route::post('/store', 'store')->name('admin.store');
    });

    Route::controller(CustomerListController::class)->group(function () {

        Route::get('/customers', 'index')->name('admin.customers');
    });

    Route::controller(ModificationController::class)->group(function () {

        Route::get('/modification/{id}', 'index')->name('admin.modification');
    });
});
require __DIR__.'/auth.php';
