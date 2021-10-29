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
Route::post('/api/customer/add', [CustomerController::class, 'store']);
Route::get('/api/customer', [CustomerController::class, 'index']);

//Routes Employee
Route::post('/api/employee/add', [EmployeeController::class, 'store']);
Route::get('/api/employee', [EmployeeController::class, 'index']);

