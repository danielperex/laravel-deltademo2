@extends('app')
@section('<title','home')

@section('sidebar')
   @parent

   <p> este es un codigo en el ABOUT sidebar.</p>

   @endsection 
   @section('content')
       <p>Esto es parte del cuerpo del ABOUT !!!!!!....</p>
   @endsection
