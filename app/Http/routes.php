<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 Route is an object, get is a method of lavarel. It accepts 2 parameters - 1st is url and 2nd is a function when url is requested
*/

Route::get('/about','PagesController@getAbout' );
Route::get('/','PagesController@getIndex' );
Route::get('/contact','PagesController@getContact');