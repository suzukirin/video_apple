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
    return view('videos/top');
});

// Route::get('videos', ' VideoController@top');
// Route::get('/holiday', 'CalendarController@getHoliday');
// Route::post('/holiday', 'CalendarController@postHoliday');
// Route::get('/', 'CalendarController@index');
Route::resource('videos', 'VideoController');