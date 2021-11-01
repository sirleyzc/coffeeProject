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
use App\Http\Controllers\DetHarvestController;
use App\Http\Controllers\DetOrderController;
use App\Http\Controllers\HarvestController;
use App\Http\Controllers\HarvestOrderController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;

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

//Routes DetHarvest
Route::post('/api/detHarvest/add', [DetHarvestController::class, 'store']);

//Routes DetOrder
Route::post('/api/detOrder/add', [DetOrderController::class, 'store']);

//Routes Harvest
Route::post('/api/harvest/add', [HarvestController::class, 'store']);

//Routes HarvestOrder
Route::post('/api/harvestOrder/add', [HarvestOrderController::class, 'store']);

//Routes Order
Route::post('/api/order/add', [OrderController::class, 'store']);

//Routes Payment
Route::post('/api/payment/add', [PaymentController::class, 'store']);

