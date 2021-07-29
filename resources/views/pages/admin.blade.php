<!-- Guardado en resources/views/pages/admin.blade.php -->

@extends('layouts.principal')

@section('contenido')
  <!--Body content-->

  @if (session()->has('msj'))
    <p align="center" style="color:green;">{{ session('msj') }}<strong></strong></p>
  @endif
  <div class="content">
    <div class="top-bar">       
           
    </div>
    <section class="content-inner">
    <br>
	
      <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Bienvenido Prof(a).</h3>
                </div>
                <div class="panel-body">

                  <div class="logos col-md-12 col-center">
                      <img class="img-escudo" src="{{ asset('img/cdd.png') }}">
                      Centro de Docencia. Evaluaciones
                      </h3>
                  
                  </div>
				<br>
				<br>
    </div>

     </section>
     <br>
@endsection