<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\ClientController;

use App\Http\Controllers\EmployeeController;

use App\Http\Controllers\Admin\DashboardController;



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/client', [ClientController::class, 'index'])->name('client.index');

Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');

Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');
