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

/*
    controlar rutas anonimas
    Route::get('/', function () {
        return view('welcome');
    });
*/

//esta ruta esta cargando el la view welcome, desde el controlador testController -> en la function welcome
Route::get('/', 'TestController@welcome');

Route::get('/acerca', function(){
 return ("Esto es un mensaje de prueba");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
