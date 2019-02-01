<?php

use Illuminate\Http\Request;

Route::get('dashboard', 'DashboardController@index');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
