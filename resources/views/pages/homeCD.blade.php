<!-- Guardado en resources/views/pages/admin.blade.php -->
@extends('layouts.principal')

@section('contenido')
  <!--Body content-->

  <!-- @if (session()->has('msj'))
    <p align="center" style="color:green;">{{ session('msj') }}<strong></strong></p>
  @endif -->
  <!--<div class="content" style="max-width:fit-content;">-->
    <br>
    <br>
    <br>
    <div id="inner">
    <div class="top-bar">            
    </div>
    <section class="content-inner">
      <br>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3>Coodinación del Centro de Docencia</h3> <!-- Obtener valor de BD-->
        </div>
        <div class="panel-body">
          
          <div class="div_periodo">
                <h3>Periodo</h3>

                <div class="panel-body">

                  <select name="fecha" id="">
                    <!-- Obtener valores de BD -->
                    <option value='s'>2020-1</option>
                    <option value='i'>2020-2</option>
                  </select>

                  <select name='periodo' width = '25%'>
                    <option value='s'>s</option>
                    <option value='i'>i</option>
                  </select>
                </div>

          </div>

            <div class="div_area">
                <h3>Área</h3>

                <div class="panel-body">
                  <select name='area'> 
                    <!-- Obtener valores de BD -->
                    <option value='0'>Gestión y Vinculación</option>
                    <option value='1'>Cómputo</option>
                  </select>
                
                  <button id="area"  type="submit" class="btn btn-success">Visualizar Área</button>
                </div>
            </div>
        <br><br>
        </div>
      
		  	
       
      </div>
    </section>
    <br>
  </div>
@endsection