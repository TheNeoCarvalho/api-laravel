<?php


Route::get('/', 'HomeController@index')->name('home');

Route::get('/course', 'CourseController@index')->name('all-courses');

Route::prefix('admin')->group(function () {

	Route::get('/', 'HomeController@index')->name('admin-home');

   	Route::get('/course/create', 'CourseController@create')->name('create-course');

	Route::post('/course/create', 'CourseController@index')->name('create');
});



Auth::routes();

