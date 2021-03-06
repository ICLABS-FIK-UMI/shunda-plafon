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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin', 'middleware' => 'auth'],function (){
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::get('/admin/mainslider','AdminController@mainslider')->name('admin.mainslider');
});

/* Route HomePage */
Route::get('/','IndexController@index');

// /* Route Admin */
// Route::get('/','AdminController@index');

/* Route User */
// Route::get('/','UserController@index');

/* Route Simulasi */
Route::get('/simulasi','SimulasiController@index')->name('simulasi');
