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

Route::view('/banan', 'welcome2');

Auth::routes();

Route::get('/home', 'SubmitterController@index')->name('home');

Route::get('/editProfile', 'SubmitterController@editProfile')->name('editProfile');

Route::post('/editProfileUpdate/{id}', 'SubmitterController@editProfileUpdate')->name('editProfileUpdate');

Route::post('/editProfilePasswordChange/{id}','SubmitterController@editProfilePasswordChange')->name('editProfilePasswordChange');

Route::get('/submission', 'SubmitterController@submission')->name('submission');

Route::post('/submissioncreate', 'SubmitterController@submissioncreate')->name('submissioncreate');

Route::get('/conferences', 'GuestController@conferences')->name('conferences');

Route::get('/submissionlist', 'SubmitterController@submissionlist')->name('submissionlist');

Route::get('/submissiondetail/{id}', 'SubmitterController@submissiondetail')->name('submissiondetail');