<?php


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');
	
Route::get('/course', 'CourseController@index')->name('all-courses');

Route::get('/category', 'CategoryController@index')->name('all-category');

Route::get('/course/create', 'CourseController@form')->name('form-course');
Route::post('/course/create', 'CourseController@create')->name('create-course');

Route::get('/logout', 'HomeController@logout')->name('logout');

Route::prefix('/admin')->group(function () {

	Route::get('/', 'Admin\HomeController@index')->name('admin-home');
	Route::get('/course/view', 'Admin\CourseController@view')->name('view-course');

	Route::get('/course', 'Admin\CourseController@allcourse')->name('course-home');

   	Route::get('/course/create', 'Admin\CourseController@form')->name('form');
	Route::post('/course/create', 'Admin\CourseController@create')->name('create');

   	Route::get('/course/update/{id}', 'Admin\CourseController@update')->name('updateCourse');
   	Route::post('/course/update/{id}', 'Admin\CourseController@update_data')->name('update_data_course');

	Route::get('/course/delete/{id}', 'Admin\CourseController@delete')->name('deleteCourse');

	Route::get('/category/view','Admin\CategoryController@index')->name('category-home');
	Route::get('/category','Admin\CategoryController@form')->name('createCategory');
	Route::post('/category','Admin\CategoryController@create')->name('createCategory');
	Route::get('/category/view', 'Admin\CategoryController@view')->name('view-category');
	Route::get('/category/update/{id}', 'Admin\CategoryController@update')->name('updateCategory');
   	Route::post('/category/update/{id}', 'Admin\CategoryController@update_data')->name('update_data_category');
   	Route::get('/category/delete/{id}', 'Admin\CategoryController@delete')->name('deleteCategory');

});
	




