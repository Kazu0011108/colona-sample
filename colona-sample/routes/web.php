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

Route::group(['prefix' => 'admin', 'middleware'=> 'guest:admin'], function(){
    Route::get('/', function (){
        return view('admin.welcome');
    });
    
    Route::get('register', 'Auth\Admin\RegisterController@showRegisterForm')->name('admin.register');
    Route::post('register', 'Auth\Admin\RegisterController@create')->name('admin.create');
    Route::get('login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
