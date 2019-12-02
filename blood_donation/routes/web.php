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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/signup', 'HomeController@signup')->name('signup');
Route::get('/signin', 'HomeController@signin')->name('signin');
Route::get('/searchBlood', 'HomeController@searchBlood')->name('searchBlood');
Route::post('/submitfeedback', 'HomeController@submitfeedback')->name('submitfeedback');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/profile', 'Usercontroller@index')->name('profile');
    Route::post('/editprofile', 'Usercontroller@editprofile');
    Route::post('/addLastBloodDonation', 'Usercontroller@addLastBloodDonation');
    Route::post('/editPassword', 'Usercontroller@editPassword');
    Route::get('/messenger', 'Usercontroller@messenger')->name('messenger');
    Route::get('/getUserMessage/{id}', 'Usercontroller@getUserMessage')->name('getUserMessage');
    Route::get('/message/{id}', 'Usercontroller@getMessage')->name('getMessage');
    Route::POST('/sendMessage', 'Usercontroller@sendMessage');

    Route::get('/admin/users', 'AdminController@users')->name('users');
    Route::get('/admin/feedbacks', 'AdminController@feedbacks')->name('feedbacks');
    Route::post('/deleteuser', 'AdminController@deleteuser')->name('deleteuser');
    Route::post('/deletefeedback', 'AdminController@deletefeedback')->name('deletefeedback');

});

Auth::routes();

