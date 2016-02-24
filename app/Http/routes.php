<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () { return view('pages.login'); });
Route::get('login', function () { return view('pages.login'); });
Route::get('home', function () { return view('pages.dashboard'); });
Route::get('departments', function () { return view('pages.departments'); });
Route::get('roles', function () { return view('pages.roles'); });
Route::get('users', function () { return view('pages.users'); });
Route::get('categories', function () { return view('pages.categories'); });
Route::get('locations', function () { return view('pages.locations'); });
Route::get('complaints', function () { return view('pages.complaints'); });
Route::get('reports', function () { return view('pages.reports'); });

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
