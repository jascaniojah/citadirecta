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
*/
Route::get('/citas/create/{id}','CitasController@create');
Route::get('/citas/show/{id}','CitasController@show');
Route::get('/citas/ubicar','CitasController@ubicar');
Route::get('/citas/buscar','CitasController@buscar');
Route::get('/','UserController@index');
Route:: resource('citas','CitasController');
Route:: resource('mail','MailController');
Route::resource('usuario','UserController');
Route::get('logout','LoginController@logout');
Route::resource('log','LoginController');
