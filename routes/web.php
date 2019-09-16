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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::resource('/', 'PortfolioController');

Route::post('sendemail', 'MailController@html_email');

Route::post('ajaxrequest', 'PortfolioController@ajaxRequestPost');

Route::get('test', function (){
	return redirect('/')->with('success', 'abc');
});
