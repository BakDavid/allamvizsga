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

//Language select
Route::get('/locale/{locale}', function ($locale) {
    Session::put('locale',$locale);

    return redirect()->back();
})->name('locale');
//Language select end

//Auth routes
Auth::routes(['verify' => true]);
//End of Auth routes

//Guest routes
Route::get('/conferencedetail/{id}', 'GuestController@conferencedetail')->name('conferencedetail');

Route::get('/conferences', 'GuestController@conferences')->name('conferences');
//End of Guest routes


//Submitter routes
Route::get('/home', 'SubmitterController@index')->name('home');

Route::get('/editProfile', 'SubmitterController@editProfile')->name('editProfile');

Route::post('/editProfileUpdate/{id}', 'SubmitterController@editProfileUpdate')->name('editProfileUpdate');

Route::post('/editProfilePasswordChange/{id}','SubmitterController@editProfilePasswordChange')->name('editProfilePasswordChange');

Route::get('/submission', 'SubmitterController@submission')->name('submission');

Route::post('/submissioncreate', 'SubmitterController@submissioncreate')->name('submissioncreate');

Route::get('/submissionlist', 'SubmitterController@submissionlist')->name('submissionlist');

Route::get('/submissiondetail/{id}', 'SubmitterController@submissiondetail')->name('submissiondetail');

Route::get('/submissiondelete/{id}', 'SubmitterController@submissiondelete')->name('submissiondelete');

Route::get('/submissionedit/{id}', 'SubmitterController@submissionedit')->name('submissionedit');

Route::post('/submissioneditpost/{id}', 'SubmitterController@submissioneditpost')->name('submissioneditpost');

Route::get('/downloadPDF/{pdf}', 'SubmitterController@downloadPDF')->name('downloadPDF');

Route::get('/cooperatordelete/{id}', 'SubmitterController@cooperatordelete')->name('cooperatordelete');

Route::get('/conferenceparticipationlist', 'SubmitterController@conferenceparticipationlist')->name('conferenceparticipationlist');
//End of Submitter routes
