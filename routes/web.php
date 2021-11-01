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
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

//Routes Customer
Route::get('/api/customer', [CustomerController::class, 'index']);
Route::post('/api/customer/add', [CustomerController::class, 'store']);
Route::put('/api/customer/update', [CustomerController::class, 'update']);
Route::post('/api/customer/delete', [CustomerController::class, 'destroy']);

//Routes Employee
Route::post('/api/employee/add', [EmployeeController::class, 'store']);
Route::get('/api/employee', [EmployeeController::class, 'index']);
Route::put('/api/employee/update', [EmployeeController::class, 'update']);
Route::post('/api/employee/delete', [EmployeeController::class, 'destroy']);

