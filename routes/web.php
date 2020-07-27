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
Route::get('/about-us', function () {
    return view('about');
})->name('about');
Route::resource('post','PostController');
Route::resource('userprofile','UserProfileController');
Route::get('donors','MiscController@donors')->name('donors');
Route::get('user/{id}','MiscController@user');
Route::get('friend-request/{id}','MiscController@friendRequest')->name('friend-request');
Route::get('cancel-request/{id}','MiscController@cancelRequest')->name('cancel-request');
Route::get('unfriend/{id}','MiscController@unfriend')->name('unfriend');
Route::get('do-unfriend/{id}','MiscController@doUnfriend')->name('do-unfriend');
Route::get('confirm-request/{id}','MiscController@confirmRequest')->name('confirm-request');
Route::get('delete-request/{id}/{fi}','MiscController@deleteRequest')->name('delete-request');
Route::get('friends','MiscController@friends')->name('friends');
Route::get('post-by-user/{id}','MiscController@postBbyUser')->name('post-by-user');
Route::post('search-post','MiscController@search')->name('search-post');
Route::post('comment','MiscController@comment')->name('comment');
