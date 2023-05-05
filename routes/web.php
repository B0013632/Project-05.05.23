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


Route::resource('employees', App\Http\Controllers\employeeController::class);

Route::get('/employees/new', 'App\Http\Controllers\EmployeeController@new');
Route::post('/employees/create', 'App\Http\Controllers\EmployeeController@create')->name('employees.create'); 

Route::get('/employees/edit/{id}', 'App\Http\Controllers\EmployeeController@edit');
Route::post('/employees/update', 'App\Http\Controllers\EmployeeController@update');

Route::resource('customersFromTables', App\Http\Controllers\CustomersFromTableController::class);


Route::resource('customers', App\Http\Controllers\CustomerController::class);


Route::resource('tables', App\Http\Controllers\tablesController::class);
