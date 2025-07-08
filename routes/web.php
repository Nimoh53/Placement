<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Routes for user management
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

//Departments routes
Route::get('/Departments', [DepartmentController::class, 'index'])->name('departments.index');
Route::get('/Departments/create', [DepartmentController::class, 'create'])->name('departments.create');
Route::post('/Departments', [DepartmentController::class, 'store'])->name('departments.store');
Route::get('/Departments/department}', [DepartmentController::class, 'show'])->name('Departments.show');
Route::get('/Departments/{department}/edit', [DepartmentController::class, 'edit'])->name('departments.edit');
Route::put('/Departments/{department}', [DepartmentController::class, 'update'])->name('departments.update');
Route::delete('/Departments/Departments}', [DepartmentController::class, 'destroy'])->name('departments.destroy');

