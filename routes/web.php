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

    });

    Route::group(['prefix' => 'classrooms'], function () {

    });

    Route::group(['prefix' => 'students'], function () {

    });
});

Route::group(['prefix' => 'class', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return 'test';
    });
});
