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

//error return
Route::get('/error', function(){return view('error');});

//Logged User
Route::get('/',['middleware' => 'loginAuth', 'uses' => 'DashboardController@index']);

//case lists
Route::get('/case-list/{showType}',['middleware' => 'loginAuth', 'uses' => 'CaseListController@index']);
Route::get('/case-list/',['middleware' => 'loginAuth', 'uses' => 'CaseListController@index']);
Route::get('/new-case',['middleware' => 'loginAuth', 'uses' => 'CaseListController@create']);
Route::post('/insert-case',['middleware' => 'loginAuth', 'uses' => 'CaseListController@store']);
Route::post('/edit-case/{id}',['middleware' => 'loginAuth', 'uses' => 'CaseListController@edit']);
Route::get('/review/{applicantId}',['middleware' => 'loginAuth', 'uses' => 'CaseListController@review']);
Route::get('/applicant-hearing/{applicantId}',['middleware' => 'loginAuth', 'uses' => 'CaseListController@applicant_hearing']);
Route::post('/new-hearing/{applicantId}',['middleware' => 'loginAuth', 'uses' => 'CaseListController@new_hearing']);
Route::get('/applicant-edit-hearing/{applicantId}/{hearingId}',['middleware' => 'loginAuth', 'uses' => 'CaseListController@applicant_edit_hearing']);
Route::get('/delete-hearing/{applicantId}/{hearingId}',['middleware' => 'loginAuth', 'uses' => 'CaseListController@delete_hearing']);
Route::get('/delete-applicant/{applicantId}',['middleware' => 'loginAuth', 'uses' => 'CaseListController@delete_applicant']);

//hearings
Route::get('/active-hearing',['middleware' => 'loginAuth', 'uses' => 'ActiveHearingController@index']);

//other pages
Route::get('/closed-hearing',['middleware' => 'loginAuth', 'uses' => 'ClosedHearingController@index']);
Route::get('/employer',['middleware' => 'loginAuth', 'uses' => 'EmployerController@index']);
Route::get('/agent-list',['middleware' => 'loginAuth', 'uses' => 'AgentController@index']);

//API
Route::get('/api/hit-applicants/{data}', ['middleware' => 'authAPi', 'uses' => 'ApiController@hitApplicants']);
Route::get('/api/login/{data}', 'ApiController@login');


