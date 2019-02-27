<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'master', 'middleware' => 'auth', 'namespace' => 'Master'], function () {
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', 'UsersController@index');
        Route::get('/create', 'UsersController@create');
        Route::get('/{id}/edit', 'UsersController@edit');
        Route::get('/datatable', 'UsersController@dataTable');
        Route::post('/save', 'UsersController@save');
        Route::DELETE('/{id}/delete', 'UsersController@delete');
    });

    Route::group(['prefix' => 'teachers'], function () {
        Route::get('/', 'TeachersController@index');
        Route::get('/create', 'TeachersController@create');
        Route::get('/{teacher_id}/edit', 'TeachersController@edit');
        Route::get('/datatable', 'TeachersController@dataTable');
        Route::post('/save', 'TeachersController@save');
        Route::DELETE('/{teacher_id}/delete', 'TeachersController@delete');
    });

    Route::group(['prefix' => 'classrooms'], function () {
        Route::get('/', 'ClassroomsController@index');
        Route::get('/create', 'ClassroomsController@create');
        Route::get('/{classroom_id}/edit', 'ClassroomsController@edit');
        Route::get('/datatable', 'ClassroomsController@dataTable');
        Route::post('/save', 'ClassroomsController@save');
        Route::DELETE('/{classroom_id}/delete', 'ClassroomsController@delete');
    });

    Route::group(['prefix' => 'students'], function () {
        Route::get('/', 'StudentsController@index');
        Route::get('/create', 'StudentsController@create');
        Route::get('/{student_id}/edit', 'StudentsController@edit');
        Route::get('/datatable', 'StudentsController@dataTable');
        Route::post('/save', 'StudentsController@save');
        Route::DELETE('/{student_id}/delete', 'StudentsController@delete');
    });
});

Route::group(['prefix' => 'class', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return 'test';
    });
});
