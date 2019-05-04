<?php

use Illuminate\Http\Request;


// Route::middleware('auth:api')->get('/', function (Request $request) {
//     return $request->user();
// });


Route::get('/users', 'HomeController@indexApi');

