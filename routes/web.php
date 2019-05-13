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

Route::view('/banan', 'welcome2')->name('banan');

//Language select
Route::get('/locale/{locale}', function ($locale) {
    Session::put('locale',$locale);

    return redirect()->back();
})->name('locale');
//Language select end

//Auth routes
Auth::routes(['verify' => true]);
//End of Auth routes

//Custom Login routes
Route::post('/login/custom','CustomLoginController@login')->name('logincustom');
//End of Custom Login routes

//Guest routes
Route::get('/news', 'GuestController@news')->name('news');

Route::get('/sections', 'GuestController@sections')->name('sections');

Route::get('/documents', 'GuestController@documents')->name('documents');

Route::get('/program', 'GuestController@program')->name('program');

Route::get('/archive', 'GuestController@archive')->name('archive');
//End of Guest routes


//Submitter routes
Route::get('/home', 'SubmitterController@index')->name('home');

Route::get('/editProfile', 'SubmitterController@editProfile')->name('editProfile');

Route::post('/editProfileUpdate/{id}', 'SubmitterController@editProfileUpdate')->name('editProfileUpdate');

Route::post('/editProfilePasswordChange/{id}','SubmitterController@editProfilePasswordChange')->name('editProfilePasswordChange');

Route::get('/submissioncreate/{id}', 'SubmitterController@submissioncreate')->name('submissioncreate');

Route::get('/submissionlist', 'SubmitterController@submissionlist')->name('submissionlist');

Route::get('/submissiondetail/{id}', 'SubmitterController@submissiondetail')->name('submissiondetail');

Route::get('/submissiondelete/{id}', 'SubmitterController@submissiondelete')->name('submissiondelete');

Route::get('/submissionedit/{id}', 'SubmitterController@submissionedit')->name('submissionedit');

Route::post('/submissioneditpost/{id}', 'SubmitterController@submissioneditpost')->name('submissioneditpost');

Route::get('/downloadPDF/{pdf}', 'SubmitterController@downloadPDF')->name('downloadPDF');

Route::get('/cooperatordelete/{id}', 'SubmitterController@cooperatordelete')->name('cooperatordelete');

Route::get('/conferenceparticipationlist', 'SubmitterController@conferenceparticipationlist')->name('conferenceparticipationlist');

Route::get('/conferencedetail/{id}', 'SubmitterController@conferencedetail')->name('conferencedetail');

Route::get('/conferences', 'SubmitterController@conferences')->name('conferences');
//End of Submitter routes

//Reviewer routes

//End of Reviewer routes


//Chair routes
Route::get('/overview','ChairController@overview')->name('overview');

Route::get('/pages','ChairController@pages')->name('pages');

Route::get('/pageedit/{id}','ChairController@pageedit')->name('pageedit');

Route::post('/pageeditpost/{id}','ChairController@pageeditpost')->name('pageeditpost');

Route::get('/chairconferences','ChairController@conferences')->name('chairconferences');

Route::get('/submissions','ChairController@submissions')->name('submissions');

Route::get('/users','ChairController@users')->name('users');

Route::get('/usersdelete/{id}','ChairController@usersdelete')->name('usersdelete');

Route::get('/usersedit/{id}','ChairController@usersedit')->name('usersedit');

Route::post('/userseditpost/{id}','ChairController@userseditpost')->name('userseditpost');

Route::get('/usersactivate/{id}','ChairController@usersactivate')->name('usersactivate');

Route::get('/chairdocuments','ChairController@documents')->name('chairdocuments');

Route::get('/mailing','ChairController@mailing')->name('mailing');

Route::get('/settings','ChairController@settings')->name('settings');

Route::get('/editProfileChair','ChairController@editProfile')->name('editProfileChair');

Route::post('/updateProfileChair/{id}','ChairController@editProfileUpdate')->name('updateProfileChair');

Route::post('/editProfilePasswordChangeChair/{id}','ChairController@editProfilePasswordChange')->name('editProfilePasswordChangeChair');
//End of Chair routes

//Admin routes

//End of Admin routes
