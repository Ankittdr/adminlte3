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
Route::get('/', 'Frontend\FrontendController@home')->name('home');
Route::get('/add', 'Frontend\FrontendController@add')->name('add')->middleware('role:admin');

Route::group(['prefix'=>'dashboard',/*'as'=>'backend.',*/'namespace'=>'Backend','middleware'=> ['auth']], function() {
/*Route::get('/userIndex', 'Frontend\FrontendController@userIndex')->name('userIndex');*/
    Route::get('/', 'BackendController@index')->name('home');
});
/*Route::group(['prefix'=>'admin','as'=>'backend.','namespace'=>'Backend','middleware'=> ['auth','checkRole']], function() {
    Route::get('/', 'BackendController@index')->name('home');

});*/
Auth::routes();





/*Route::get('/home', 'HomeController@index')->name('home');*/
