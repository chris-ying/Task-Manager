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

Route::get('/', 'WelcomeController@show');
Route::get('dashboard', 'DashboardController@show');
Route::get('category/{id}', 'DashboardController@showCategory');

Route::get('add-task', 'TaskController@showAddTask');
Route::get('edit-task/{id}', 'TaskController@showEditTask');

Route::post('process-add-task', 'TaskController@addTask');
Route::post('process-edit-task/{id}', 'TaskController@editTask');
Route::post('delete-task/{id}', 'TaskController@deleteTask');

Route::get('add-category', 'CategoryController@showAddCategory');
Route::post('process-add-category', 'CategoryController@addCategory');
Route::post('delete-category/{id}', 'CategoryController@deleteCategory');


