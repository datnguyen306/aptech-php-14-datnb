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

Route::get('/abc',function(){
    return 'hehe';
});
Route::get('connect', function () {
    return view('connect');
});
Route::get('create_table', function () {
    return view('create_table');
});
Route::get('createdata', function () {
    return view('createdata');
});
Route::get('updatetable', function () {
    return view('updatetable');
});
