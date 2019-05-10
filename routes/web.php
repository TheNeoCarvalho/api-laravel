<?php


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');
	
Route::get('/course', 'CourseController@index')->name('all-courses');

Route::get('/category', 'CategoryController@index')->name('all-category');

Route::get('/course/create', 'CourseController@form')->name('form-course');
Route::post('/course/create', 'CourseController@create')->name('create-course');

Route::prefix('/admin')->group(function () {

	Route::get('/', 'HomeController@index')->name('admin-home');
   	Route::get('/course/create', 'CourseController@create')->name('create-course');
	Route::post('/course/create', 'CourseController@index')->name('create');

});
	




