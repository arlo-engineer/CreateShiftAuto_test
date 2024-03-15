<?php

use App\Http\Controllers\CreatedShiftController;
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

Route::get('/create_shift', 'App\Http\Controllers\CreatedShiftController@create')->name('create');

Route::post('/store_shift', 'App\Http\Controllers\CreatedShiftController@store')->name('store');

Route::get('/submitted', 'App\Http\Controllers\CreatedShiftController@submitted')->name('submitted');

