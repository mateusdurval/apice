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

Route::get('/', 'HomeController@index');
Route::resource('home', 'HomeController');
Route::delete('home/destroy/{id}', 'HomeController@destroy');
Route::post('home/store', 'HomeController@store');
Route::get('home/edit/{id}', 'HomeController@edit');
Route::put('home/update/{id}', 'HomeController@edit');
Route::get('home/teste/{cpf}', 'HomeController@teste');



