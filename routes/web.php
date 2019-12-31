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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/login','LoginController@login');
Route::get('/ryan','LoginController@getfuck');

 
Route::get('/ryanHomework01','RyanHomeWorkController@homework20191227')->middleware(['ryanHomework']);//中介層的用法回家作業