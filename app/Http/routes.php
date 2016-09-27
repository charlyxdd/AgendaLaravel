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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if(Auth::check()){
        return "Ya se ha iniciado sesión";
    }
    return view('inicio');
});

Route::get('/login','loginController@loginGet');

Route::get('/registro/{metodo}','registerController@mostrarVista');

Route::get('/registro/{metodo}/{modulo}','registerController@mostrarVistaModulos');

/*Route::group(['domain'=>'app.{dominio}'],function(){
    Route::get('/subdominio',function($dominio){
    });
});*/
