@extends('app')
@section('<title','home')

@section('sidebar')
   @parent

   <p> este es un codigo en el master sidebar.</p>

   @endsection 
   @section('content')
       <p>Esto es parte del cuerpo del cotendio !!!!!!....</p>
   @endsection

   
    