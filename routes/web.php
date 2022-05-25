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
   $notes =[
       'primera nota',
       'segunda nota',
       'tercera nota',
       'cuarta nota',
       'quinta nota'

   ];
   return view('notes',['notes' => $notes]);
});



Route::get('/notas/crear', function () {
    return view('add-note');
});

Route::get('/notas/{id}/editar', function ($id) {
    return 'editar nota'.$id;
});

Route::get('/notas/{id}', function ($id) {
    return 'detalles de la nota'.$id;
});