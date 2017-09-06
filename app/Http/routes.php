<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'LogController@index');
Route::any('log/index','LogController@index');
Route::any('log/check','LogController@check');
Route::any('log/out','LogController@out');
Route::any('admin/index','AdminController@index');
Route::any('role/index','AdminController@role');
Route::any('user/index','AdminController@user');
Route::any('user/add','AdminController@useradd');
Route::any('user/edit','AdminController@useredit');
Route::any('menu/index','AdminController@menu');
Route::any('course/add','CourseController@add');
Route::any('course/category','CourseController@category');
