<?php

use Illuminate\Http\Request;


// Route::middleware('auth:api')->get('/', function (Request $request) {
//     return $request->user();
// });


Route::get('/users', 'Api\apiController@users')->name('users');

Route::get('/course', 'Api\apiController@course')->name('course');

Route::get('/category', 'Api\apiController@category')->name('category');
