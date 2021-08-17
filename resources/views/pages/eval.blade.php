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
            <h3>Curso: Estrategias de trabajo grupal</h3> <!-- Obtener valor de BD-->
              <br>
            <h4>Buscar</h4>
			<!-- Insertar FORM del sistema anterior -->
            
            <div class="div_info">
              <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Particpante</th>

                                    <th>Evaluar</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <tr>
                                    <td>
                                    
                                         <p>NOMBRE ALUMNO APELLIDO PATERNO APELLIDO MATERNO </p>
                                        
                                    </td>
                                    <td>
                                      <a href="" class="btn btn-success">Evaluación final de curso</a>
                                    </td>
                                </tr>
                            </tbody>
                      
              </table>   
            </div>
		  		<br>
			  	<br>
        </div> <!--Cierre panel-body-->

      </div>
    </section>
    <br>
  </div>
@endsection