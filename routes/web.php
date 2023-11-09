<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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


//rota direta no arquivo de rotas web.php
Route::get('/home', function () {
    return view('login');
});

Route::get('/home/pasta', function () {
    return view('exemplo-view-com-pasta.login');
});

//rota dentro do controller ou seja o controller está controlando a rota conforme manda a psr 4 - 7
Route::get('/home/com/controller', [LoginController::class, 'index']);