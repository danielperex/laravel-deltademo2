<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class productoscontroller extends Controller
{

    public function index()
    {
        return view('productos');
    }   
    
    public function mostar()
    {
        echo "metodo mostar";
    }    

    public function crear()
    {
        return view("crear");
    }    

    public function show($post)
   {
       return "Aca se mando un valor como parametro el valor es de : $post";
   }

    public function dataformulario(Request $request)
   {
        return $request->input('nombre');

}}