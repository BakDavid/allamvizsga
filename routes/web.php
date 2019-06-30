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

Route::get('/', 'GuestController@news');

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

//Custom Register routes
Route::get('/register/custom/{email_hash}','CustomRegisterController@register')->name('registercustom');

Route::post('/register/custompost','CustomRegisterController@registerpost')->name('registercustompost');
//End of Custom Register routes

//Guest routes
Route::get('/news', 'GuestController@news')->name('news');

Route::get('/sections', 'GuestController@sections')->name('sections');

Route::get('/documents', 'GuestController@documents')->name('documents');

Route::get('/program', 'GuestController@program')->name('program');

Route::get('/archive', 'GuestController@archive')->name('archive');

Route::get('/advisor_check/{id}', 'GuestController@advisor_check')->name('advisor_check');
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
Route::get('/review','ReviewerController@review')->name('review');

Route::get('/editProfileRewiever', 'ReviewerController@editProfile')->name('editProfileRewiever');

Route::post('/editProfileRewieverUpdate/{id}', 'ReviewerController@editProfileUpdate')->name('editProfileRewieverUpdate');

Route::post('/editProfileRewieverPasswordChange/{id}','ReviewerController@editProfilePasswordChange')->name('editProfileRewieverPasswordChange');

Route::get('/submissiondetailreviewer/{id}', 'ReviewerController@submissiondetail')->name('submissiondetailreviewer');

Route::post('/reviewpost/{id}','ReviewerController@reviewpost')->name('reviewpost');

Route::post('/revieweditpost/{id}','ReviewerController@revieweditpost')->name('revieweditpost');

Route::get('/downloadPDFReviewer/{pdf}', 'ReviewerController@downloadPDF')->name('downloadPDFReviewer');
//End of Reviewer routes


//Chair routes
Route::get('/overview','ChairController@overview')->name('overview');

Route::get('/pages','ChairController@pages')->name('pages');

Route::get('/pageedit/{id}','ChairController@pageedit')->name('pageedit');

Route::post('/pageeditpost/{id}','ChairController@pageeditpost')->name('pageeditpost');

Route::get('/chairconferences','ChairController@conferences')->name('chairconferences');

Route::get('/chairconferencesedit/{id}','ChairController@conferencesedit')->name('chairconferencesedit');

Route::post('/chairconferenceseditpost/{id}','ChairController@conferenceseditpost')->name('chairconferenceseditpost');

Route::get('/chairconferencesdelete/{id}','ChairController@conferencesdelete')->name('chairconferencesdelete');

Route::get('/chairconferencescreate','ChairController@conferencescreate')->name('chairconferencescreate');

Route::post('/chairconferencescreatepost','ChairController@conferencescreatepost')->name('chairconferencescreatepost');

Route::get('/chairsubmissions','ChairController@submissions')->name('chairsubmissions');

Route::get('/chairsubmissionsedit/{id}','ChairController@submissionsedit')->name('chairsubmissionsedit');

Route::post('/chairsubmissionseditpost/{id}','ChairController@submissionseditpost')->name('chairsubmissionseditpost');

Route::get('/chairsubmissionsdelete/{id}','ChairController@submissionsdelete')->name('chairsubmissionsdelete');

Route::get('/chairsubmissionsassign','ChairController@chairsubmissionsassign')->name('chairsubmissionsassign');

Route::post('/chairsubmissionsassignpost/{id}','ChairController@chairsubmissionsassignpost')->name('chairsubmissionsassignpost');

Route::get('/users','ChairController@users')->name('users');

Route::get('/categories','ChairController@categories')->name('categories');

Route::post('/categoriescreatepost','ChairController@categoriescreatepost')->name('categoriescreatepost');

Route::post('/categorieseditpost','ChairController@categorieseditpost')->name('categorieseditpost');

Route::get('/categoriesdelete/{id}','ChairController@categoriesdelete')->name('categoriesdelete');

Route::get('/usersdelete/{id}','ChairController@usersdelete')->name('usersdelete');

Route::get('/usersedit/{id}','ChairController@usersedit')->name('usersedit');

Route::post('/userseditpost/{id}','ChairController@userseditpost')->name('userseditpost');

Route::get('/usersactivate/{id}','ChairController@usersactivate')->name('usersactivate');

Route::get('/chairdocuments','ChairController@documents')->name('chairdocuments');

Route::get('/mailing','ChairController@mailing')->name('mailing');

Route::post('/mailingpost','ChairController@mailingpost')->name('mailingpost');

Route::post('/directmailpost','ChairController@directmailpost')->name('directmailpost');

Route::post('/multiplemailpost','ChairController@multiplemailpost')->name('multiplemailpost');

Route::get('/settings','ChairController@settings')->name('settings');

Route::get('/sponsorcreate','ChairController@sponsorcreate')->name('sponsorcreate');

Route::post('/sponsorcreatepost','ChairController@sponsorcreatepost')->name('sponsorcreatepost');

Route::get('/sponsordelete/{id}','ChairController@sponsordelete')->name('sponsordelete');

Route::get('/sponsoredit/{id}','ChairController@sponsoredit')->name('sponsoredit');

Route::post('/sponsoreditpost/{id}','ChairController@sponsoreditpost')->name('sponsoreditpost');

Route::get('/export_database','ChairController@export_database')->name('export_database');

Route::post('/export_database_post','ChairController@export_database_post')->name('export_database_post');

Route::get('/editProfileChair','ChairController@editProfile')->name('editProfileChair');

Route::post('/updateProfileChair/{id}','ChairController@editProfileUpdate')->name('updateProfileChair');

Route::post('/editProfilePasswordChangeChair/{id}','ChairController@editProfilePasswordChange')->name('editProfilePasswordChangeChair');

Route::get('/chairdownloadPDF/{pdf}', 'ChairController@downloadPDF')->name('chairdownloadPDF');
//End of Chair routes

//Admin routes

//End of Admin routes
