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
Route::get('/login','LoginController@index');
Route::post('/login','LoginController@login');
Route::get('/b','LoginController@b');
Route::get('/register','UserController@register');
Route::post('/register','UserController@insert');
Route::get('/user','UserController@index');
Route::get('/teacher','TeacherController@index');
Route::get('/teacher/studentRequests','TeacherController@studentRequests');
Route::get('/studentProfile/{id}','UserController@profile')->name('studentProfile');
Route::get('/studentApprove/{id}','TeacherController@approveStudent')->name('studentApprove');
Route::get('/studentDelete/{id}','UserController@delete')->name('studentDelete');
Route::get('/studentSubmitPaper','UserController@submitPaperG')->name('studentSubmitPaper');
Route::post('/studentSubmitPaper','UserController@submitPaper')->name('studentSubmitPaper');
