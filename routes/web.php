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

// Route for homepage
Route::get('/', function(){
    return view('new');
});

//Route for AJAX GET call from browser
Route::get('/action', 'YoutubeSearchController@action')->name('action');
