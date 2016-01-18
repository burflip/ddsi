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

Route::get('dashboard', function()
{
    return view('dashboard');
})->name('dashboard');

// Authentication routes...
Route::get('/', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('/login', ['as' => 'login.submit', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

// Password reset link request routes...
Route::get('password', ['as' => 'password', 'uses' => 'Auth\PasswordController@getEmail']);
Route::post('password', ['as' => 'password.submit', 'uses' => 'Auth\PasswordController@postEmail']);

// Password reset routes...
Route::get('password/reset/{token}', ['as' => 'password.reset', 'uses' => 'Auth\PasswordController@getReset']);
Route::post('password/reset', ['as' => 'password.reset.submit', 'uses' => 'Auth\PasswordController@postReset']);

Route::resources("cliente","ClienteController");
Route::resources("factura","FacturaController");
Route::resources("impuesto","ImpuestoController");
Route::resources("producto","ProductoController");
Route::resources("servicio","ServicioController");