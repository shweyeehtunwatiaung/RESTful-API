<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/* Route::get('/post', 'API\PostController@index');
Route::get('/post/{id}', 'API\PostController@show');
Route::post('/post', 'API\PostController@store');
Route::put('/post/{id}', 'API\PostController@update');
Route::patch('/post/{id}', 'API\PostController@update');
Route::delete('/post/{id}', 'API\PostController@destroy'); */

Route::apiResource('post', 'API\PostController');

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});