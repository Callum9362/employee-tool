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



// Current Employee Routes
Route::get('/', 'CurrentEmployeeController@index')->name('current-employee');

// Add Employee Routes
Route::get('/add', 'AddEmployeeController@index')->name('add-employee');
Route::post('/addemployee', 'AddEmployeeController@create')->name('add');

// Delete Employee Routes
Route::get('/delete', 'DeleteEmployeeController@index')->name('delete-employee');

// More Details Routes
Route::get('/details/{userID}', 'MoreDetailsController@index')->name('details-employee');
