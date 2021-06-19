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



// Current Employee Controller
Route::get('/', 'CurrentEmployeeController@index')->name('current-employee');

// Add Employee Controller
Route::get('/add', 'AddEmployeeController@index')->name('add-employee');

// Current Employee Controller
Route::get('/delete', 'DeleteEmployeeController@index')->name('delete-employee');
