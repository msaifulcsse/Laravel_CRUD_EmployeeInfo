<?php

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

// Route::get('/', function () { 
// 	return view('/show');
// });
Route::get('/', 'EmployeesController@showEmployeeInfo');

Route::get('show', 'EmployeesController@showEmployeeInfo');

Route::get('create', 'EmployeesController@createEmployeeInfo');

Route::post('store', 'EmployeesController@storeEmployeeInfo');

Route::get('edit/{id}', 'EmployeesController@editEmployeeInfo');

Route::post('update/{id}', 'EmployeesController@updateEmployeeInfo');

Route::get('delete/{id}', 'EmployeesController@deleteEmployeeInfo');