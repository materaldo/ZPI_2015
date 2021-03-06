<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*
Route::get('/', function()
{
	return View::make('hello');
});
*/

Route::get('lang/{lang}',
    array(
        'as' => 'language.select',
        'uses' => 'HomeController@select'
    )
);

Route::get('export', array('uses' => 'HomeController@export', 'as' => 'export'));

Route::controller('accommodation','AccommodationController');
Route::controller('group','GroupController');
Route::controller('participant', 'ParticipantController');
Route::controller('organizer', 'OrganizerController');
Route::controller('language', 'LanguageController');
Route::controller('country', 'CountryController');

// Confide routes
Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');
Route::get('users/login', 'UsersController@login');
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('users/logout', 'UsersController@logout');
Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));
Route::controller('/', 'HomeController');//

//