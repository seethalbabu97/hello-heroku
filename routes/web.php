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
Route::group(['middleware' =>['auth','admin']], function(){

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/roleregister','DashboardController@registered');
    Route::get('/role-edit/{id}','DashboardController@registeredit');  
    Route::put('/role-register-update/{id}','DashboardController@registerupdate');
    Route::post('/role-delete/{id}','DashboardController@destroy');
    Route::get('/abouts','AboutusController@index');
    Route::post('/save','AboutusController@store');
    Route::get('/aboutus-edit/{id}','AboutusController@edit');
    Route::put('/aboutus-update/{id}','AboutusController@update');
    Route::post ('/aboutusdelete/{id}','AboutusController@destroy');

    
});