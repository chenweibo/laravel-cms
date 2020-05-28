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

Route::get('/', 'Home\PathController@index');

Auth::routes();

Route::get('createLink', 'Api\ToolsController@createLink');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/gbook', 'Home\PathController@gbook')->name('gbook');
Route::get('/search', 'Home\PathController@search');
//自定义路由需要加到次路由前面
Route::get('/{path}', 'Home\PathController@index')->name('page');
Route::get('/content/{id}', 'Home\PathController@contentList')->where('id', '[0-9]+')->name('contentList');
Route::get('/contentView/{id}', 'Home\PathController@contentView')->where('id', '[0-9]+')->name('contentView');
