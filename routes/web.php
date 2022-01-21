<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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


Route::get('/index', 'App\Http\Controllers\ProjectController@index');
Route::get('/register', 'App\Http\Controllers\ProjectController@create');
Route::post('insert', 'App\Http\Controllers\ProjectController@store');
Route::get('/edit/{id}', 'App\Http\Controllers\ProjectController@edit');
Route::put('update/{id}', 'App\Http\Controllers\ProjectController@update');
Route::get('delete/{id}', 'App\Http\Controllers\ProjectController@delete');