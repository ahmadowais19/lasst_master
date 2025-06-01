<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\ReservationformController;
use App\Http\Controllers\Admin\ReservationController;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
    |
    */

    // Route::get('/', function () {
    //     return view('layouts.home');
        
    // });

    Route::get('/', [ReservationformController::class, 'index'])->name('home');


    Route::get('/dashboard', function () {
        return view('layouts.dashboardd');
    })->name('dashboard');


    Route::resource('tables', TableController::class);
    Route::get('layouts.Add_Table', [TableController::class, 'index'])->name('tables.index');


    Route::get('settings', [SettingController::class, 'edit'])->name('settings_edit');
    Route::post('settings', [SettingController::class, 'update'])->name('settings.update');

    Route::resource('reservations', ReservationController::class)->only(['index', 'update', 'destroy']);

    Route::post('/reservations', [ReservationformController::class, 'store'])->name('reservations.store');




    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::post('users/{user}/toggle-block', [UserController::class, 'toggleBlock'])->name('users.toggle-block');


    // Route::middleware('auth')->group(function () {
    //     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    //     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // });

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
        Route::post('/profile', [UserController::class, 'updateProfile'])->name('user.profile.update');
        Route::get('/profile/reservations', [UserController::class, 'reservationHistory'])->name('user.reservations');
    });
    
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');


    Route::patch('/reservations/{id}/update-status', [UserController::class, 'updateStatus'])
    ->name('reservations.updateStatus');



    require __DIR__.'/auth.php';
