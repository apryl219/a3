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


//Route::get('/bill', 'BillController@index');

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::get('/', 'WelcomeController');
Route::get('/calculate', 'BillController@service');
Route::get('/calculate', 'BillController@calculate');



if(config('app.env') == 'local') {
		Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}