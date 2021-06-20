<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');

Route::middleware(['auth','cekakses:admin'])->group(function () {

    Route::get('/datafilm', 'AdminController@indexadminfilm')->name('indexadminfilm');
    Route::get('/datafilm/create', 'AdminController@createadminfilm')->name('createadminfilm');
    Route::get('/datafilm/{id}/edit', 'AdminController@editadminfilm')->name('editadminfilm');
    Route::post('/datafilm/create', 'AdminController@storeadminfilm')->name('storeadminfilm');
    Route::post('/datafilm/{id}/update', 'AdminController@updateadminfilm')->name('updateadminfilm');
    Route::get('/datafilm/{id}/delete', 'AdminController@destroyadminfilm')->name('destroyadminfilm');
    Route::get('/datafilm/{id}/show', 'AdminController@showadminfilm')->name('showadminfilm');
});

Route::middleware(['auth','cekakses:admin,user'])->group(function () {

    Route::get('/index', function () {
        return view('index');
    });
});


