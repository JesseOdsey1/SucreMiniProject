<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employees', [EmployeesController::class, 'index'])->name('employees.index');
Route::post('/employees', [EmployeesController::class, 'save'])->name('employees.save');
Route::post('/employees/summary', [EmployeesController::class, 'edited'])->name('employees.edited');
Route::get('/employees/add', [EmployeesController::class, 'add'])->name('employees.add');
Route::get('/employees/summary', [EmployeesController::class, 'summary'])->name('employees.summary');
Route::get('/employees/{employee}', [EmployeesController::class, 'show'])->name('employees.employee');
Route::get('/employees/{employee}/edit', [EmployeesController::class, 'edit'])->name('employees.edit');
Route::delete('/employees/{employee}', [EmployeesController::class, 'delete'])->name('employees.delete');