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

Route::get("/", "StudentsController@index");
Route::get("/admin", "AdminsController@index");
Route::get('/staff', "StaffsController@index");
Route::get("/parent", "ParentsController@index");

    
