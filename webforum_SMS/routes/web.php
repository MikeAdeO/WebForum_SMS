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

Route::get("/student", "StudentsController@index");
Route::get("/admin", "AdminsController@index");
Route::get("/parent", "ParentsController@index");

// API ROUTES TO HANDLE STAFF CONTROLLER  (Note: during tesing on Postman i disabled CSRF Protection at (App/Http/Middleware/VerifyCsrfToken) but before productio wil wil enable)
Route::get('api/staff', "StaffsController@index");
Route::post('api/staff', "StaffsController@store");
Route::put('api/staff/{id}', 'StaffsController@update');
Route::delete('api/staff/{id}', 'StaffsController@destroy');
Route::get('api/staff/{id}', 'StaffsController@getSingle');




    

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
