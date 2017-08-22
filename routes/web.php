<?php

use App\Http\Controllers\IndexController;

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

Route::get('/', 'IndexController@home');

Route::get('/nosotros', 'IndexController@nosotros');

Route::get('/indicadores', 'IndexController@indicadores');

Route::get('/contacto', 'IndexController@contacto');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'admin\IndexController@dashboard');
