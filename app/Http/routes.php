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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api', 'middleware' => 'cors'], function()
{
    Route::post('login', 'Api\AuthController@login');
    
    Route::group(['middleware' => ['jwt.auth', 'jwt.refresh']], function()
    {
        Route::post('logout', 'Api\AuthController@logout');
        
        Route::resource('tasks', 'TasksController', ['except' => ['create', 'edit', ]]);
        Route::model('tasks', '\App\Task');
    });
});

