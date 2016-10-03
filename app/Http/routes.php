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

Route::get('/', [
    'uses' => 'AppController@getIndex',
    'as' => 'main'
]);

Route::get('/project/{id}', [
    'uses' => 'AppController@singlePortfolio',
    'as' => 'project.item'
]);

Route::get('/register', [
    'uses' => 'AuthController@getRegisterPage',
    'as' => 'register'
]);

Route::post('/register', [
    'uses' => 'AuthController@postRegister',
    'as' => 'register'
]);

Route::get('/login', [
    'uses' => 'AuthController@getLoginPage',
    'as' => 'login'
]);

Route::post('/login', [
    'uses' => 'AuthController@postLogin',
    'as' => 'login.post'
]);

Route::get('/logout', [
    'uses' => 'AuthController@getLogout',
    'as' => 'logout'
]);

Route::post('/send_mail', [
    'uses' => 'AppController@sendMail',
    'as' => 'mail.send'
]);