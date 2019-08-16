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

Route::get('/example', 'ExampleController@index');
Route::get('/examplefrontend', 'ExampleController@frontend');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/schedule_table', 'ScheduleController@showSchedule');
Route::post('/schedule_table', 'ScheduleController@addSchedule');
Route::put('/schedule_table/{id}', 'ScheduleController@editSchedule');
Route::delete('/schedule_table/{id}', 'ScheduleController@deleteSchedule');
