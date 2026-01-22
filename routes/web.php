<?php

use App\Http\Controllers\Admin\ConferenceController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/client', [ClientController::class, 'index'])->name('client.index');

Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');

Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');

Route::get('/admin/conferences', [ConferenceController::class, 'index'])->name('admin.conferences.index');

Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');

Route::get('/admin/users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');

Route::post('/admin/users/{id}', [UserController::class, 'update'])->name('admin.users.update');

Route::get('/admin/conferences', [ConferenceController::class, 'index'])->name('admin.conferences.index');

Route::get('/admin/conferences/create', [ConferenceController::class, 'create'])->name('admin.conferences.create');

Route::post('/admin/conferences', [ConferenceController::class, 'store'])->name('admin.conferences.store');

Route::get('/admin/conferences/{id}', [ConferenceController::class, 'show'])->name('admin.conferences.show');

Route::get('/admin/conferences/{id}/edit', [ConferenceController::class, 'edit'])->name('admin.conferences.edit');

Route::post('/admin/conferences/{id}', [ConferenceController::class, 'update'])->name('admin.conferences.update');

Route::post('/admin/conferences/{id}/delete', [ConferenceController::class, 'destroy'])->name('admin.conferences.destroy');
