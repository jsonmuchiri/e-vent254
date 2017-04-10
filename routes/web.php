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


Route::group(['middleware' => 'guest'], function () {
//    Route::get('/', [
//        'uses' => 'HomeController@welcome',
//        'as' => 'welcome',
//    ]);
    Route::get('/', [
        'uses' => 'HomeController@getWel',
        'as' => 'login',
    ]);
    Route::post('/', [
        'uses' => 'HomeController@postLogin',
        'as' => 'login',
    ]);

    //register
    Route::get('/register', [
        'uses' => 'HomeController@getRegister',
        'as' => 'register',
    ]);
    Route::post('/register', [
        'uses' => 'HomeController@postRegister',
        'as' => 'register',
    ]);

    /////get about page
    Route::get('/about', [
        'uses' => 'HomeController@getAbout',
        'as' => 'about',
    ]);
    ///contact page
    Route::get('/contact', [
        'uses' => 'HomeController@getContact',
        'as' => 'contact',
    ]);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [
        'uses' => 'AuthController@home',
        'as' => 'home',
    ]);
    Route::get('/logout', [
        'uses' => 'AuthController@getLogout',
        'as' => 'logout',
    ]);


    ////events pages
    Route::get('/today', [
        'uses' => 'EventController@getToday',
        'as' => 'today',
    ]);
    ///upcoming events
    Route::get('/upcoming', [
        'uses' => 'EventController@getUpcoming',
        'as' => 'upcoming',
    ]);
    //feedback
    Route::get('/feedback', [
        'uses' => 'AuthController@getFeedback',
        'as' => 'feedback',
    ]);
    Route::post('/feedback', [
        'uses' => 'AuthController@postFeedback',
        'as' => 'feedback',
    ]);

    ///email subscription
    Route::get('/newsletter', [
        'uses' => 'AuthController@home',
        'as' => 'newsletter',
    ]);
    Route::post('/newsletter', [
        'uses' => 'AuthController@postSubscription',
        'as' => 'newsletter',
    ]);
});