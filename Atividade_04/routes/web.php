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

Route::get('/', function(){
    return view('template.main');
});

Route::prefix('/municipio')->group(function() {

    Route::get('/', function() {
        return view('municipio.index');
    })->name('municipios');

    Route::get('/cadastrar', function() {
        return view('municipio.create');
    })->name('cadastrar');

    // Route::get('/alterar', function() {
    //     return view('alterar');
    // })->name('municipio.alterar');

});

