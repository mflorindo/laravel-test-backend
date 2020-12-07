<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::post('login', 'LoginController@login');

Route::group(['middleware' => ['jwt.auth']], function () {
    Route::get('teste', function () {
        return response()->json(['teste' => 'eee'], 200);
    });

    Route::get('dashboard', function () {
        return response()->json(['dados' => 'ddd'], 200);
    });
});
