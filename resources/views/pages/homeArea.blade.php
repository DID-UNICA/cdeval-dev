<!-- Vista:  Home - Áreas -->
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
          <h3>Coodinación Didáctico Pedagógico</h3> <!-- Obtener valor de BD-->
        </div>

        <div class="panel-body">
          
            <h4>Buscar</h4>
            <br>
            <!-- Insertar FORM del sistema anterior -->
            <h4>Periodo</h4>
            <br>
            <!-- Insertar FORM del sistema anterior -->
            
            <div class="div_info">
              <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Curso</th>
                                    <th>Instructor(es)</th>
                                    <th>Evaluaciones</th>
                                    <th>Participantes</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <tr>
                                    <td style="width:350px;">NOMBRE DEL CURSO</td>
                                    <td>
                                    
                                         <p>NOMBRE INSTR. APELLIDO PATERNO APELLIDO MATERNO </p>
                                        
                                    </td>
                                    <td>
                                      <a href="" class="btn btn-success" >Capturar evaluación final de curso</a>
                                    </td>
                                    <td><a href="" class="btn btn-warning">Visualizar participantes inscritos</a></td>
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