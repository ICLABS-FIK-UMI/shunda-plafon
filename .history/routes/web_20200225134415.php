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
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['admin']],function (){
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::get('/admin/mainslider','AdminMainSliderController@index')->name('admin.mainslider');
    Route::post('/admin/mainslider/store','AdminMainSliderController@store')->name('admin.mainslider.store');
    Route::get('/admin/mainslider/destroy/{slug}','AdminMainSliderController@destroy')->name('admin.mainslider.destroy');
    Route::get('/admin/mainslider/edit/{mainSlider}','AdminMainSliderController@edit')->name('admin.mainslider.edit');
    Route::post('/admin/mainslider/update/{mainSlider}','AdminMainSliderController@update')->name('admin.mainslider.update');
    Route::get('/admin/user', 'UserController@dashboardUser')->name('admin.user');
    Route::post('/admin/user/store', 'UserController@store')->name('admin.user.store');
    Route::get('/admin/user/destroy/{id}', 'UserController@destroy')->name('admin.user.destroy');
    Route::get('/admin/user/edit/{user}','UserController@edit')->name('admin.user.edit');
    route::get('/admin/user/update/{user}')
});

// Route::get('/admin', 'AdminController@index')->name('admin');
/* Route HomePage */
// Route::group(['middleware'=>['user']],function(){
//     Route::get('/','IndexController@index');
// });
Route::get('/','IndexController@index');

// /* Route Admin */
// Route::get('/','AdminController@index');

/* Route User */
// Route::get('/','UserController@index');

/* Route Simulasi */
Route::get('/simulasi','SimulasiController@index')->name('simulasi');
