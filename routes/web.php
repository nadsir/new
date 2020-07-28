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
Route::get('/show','Productfilter@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', 'HomeController@test')->name('test');


Route::middleware('is_admin')->group(function (){
    Route::get('admin','AdminController@index')->name('admin');
});


Route::middleware('is_homeagency')->group(function (){
    Route::get('homeagency','HomeagencyController@index')->name('homeagency');
});