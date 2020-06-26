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

Route::post('login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
Route::post('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@register']);

Route::get('/', 'Frontend\PagesController@index')->name("home");
Route::get('/about', 'Frontend\PagesController@about')->name("about");
Route::get('/how-it-works', 'Frontend\PagesController@howItWorks')->name("how-it-works");
Route::get('/features', 'Frontend\PagesController@features')->name("features");
Route::get('/tos', 'Frontend\PagesController@features')->name("tos");
Route::get('/privacy', 'Frontend\PagesController@features')->name("privacy");
Route::get('/account-activate/{code}', 'Frontend\PagesController@verify')->name('account-activate');
Route::get('/test', 'ExerciseController@test');
Auth::routes(['verify' => true]);

Route::post('/register/step1', 'Frontend\PagesController@signupStep1')->name('register-step');
Route::post('/profile-photo', 'Api\ApiController@uploadPhoto');

Route::get('/strength-athlete', 'Frontend\PagesController@strengthAthlete')->name("strength-athlete");
Route::get('/program-designer', 'Frontend\PagesController@programDesigner')->name("program-designer");
Route::get('/personal-trainer', 'Frontend\PagesController@personalTrainer')->name("personal-trainer");

Route::post('/search/exercise', 'ExerciseController@search');
Route::post('/add/workout', 'ExerciseController@addWorkout');
Route::post('/remove/workout', 'ExerciseController@removeWorkout');
Route::post('/program/restapi', 'ExerciseController@restapi');
