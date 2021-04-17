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
    return view('index');
});


Route::prefix('/painel')->group(function(){
    Route::get('/login', "UserController@index")->name('login');
    Route::post('/logar', "UserController@login");
    Route::get('/home', "PainelController@index")->name('home');
    Route::get('/pequenosgrupos', "PainelController@pequenosGrupos")->name('pequenosgrupos');
    Route::get('/registro', "PainelController@register")->name('registro');
});

