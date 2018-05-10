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

//基礎路由
Route::get('basic1', function() {
  return 'Hello World';
});

Route::get('basic2', function() {
  return 'basic2';
});

//多請求路由
Route::match(['get','post'], 'multy1', function() {
  return 'multy1';
});

Route::any('multy2', function() {
  return 'multy2';
});
