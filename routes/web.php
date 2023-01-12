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
    $nome = "Yuri";
    $cognome = "Di Domenico";
    $tipoPage = "Homepage";

    return view('homepage', compact('tipoPage', 'nome', 'cognome'));
});

Route::get('/foto', function () {
    $nome = "Yuri";
    $cognome = "Di Domenico";
    $tipoPage = "Foto";

    return view('foto', compact('tipoPage', 'nome', 'cognome'));
});

Route::get('/video', function () {
    $nome = "Yuri";
    $cognome = "Di Domenico";
    $tipoPage = "Video";

    return view('video', compact('tipoPage', 'nome', 'cognome'));
});

Route::get('/tutorial', function () {
    $nome = "Yuri";
    $cognome = "Di Domenico";
    $tipoPage = "Tutorial";

    return view('tutorial', compact('tipoPage', 'nome', 'cognome'));
});



