<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/productos', function () {
    return "hola mundo ";
});*/


Route::get('/productos',[App\Http\Controllers\productoscontroller::class,'index']);


Route::get('/productos/mostrar',[App\Http\Controllers\productoscontroller::class,'mostar']);


Route::get('/productos/crear',[App\Http\Controllers\productoscontroller::class,'crear']);
Route::get('/productos/dataformulario',[App\Http\Controllers\productoscontroller::class,'dataformulario'])->name('productos.formdata');


Route::get('/app', function (){
    return view ('app',['nombre'=>'jose fernandez perez']);
});

Route::get('/home', function (){
    return view('home',);
});

Route::get('/about', function (){
    return view('about',);
});