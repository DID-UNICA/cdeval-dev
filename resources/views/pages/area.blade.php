<!-- Vista: Visualizar área - Centro de Docencia y Área de Gestiónn y Vinculación -->
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
            <h3>Área: Cómputo</h3>
              <br>
            <h4>Buscar</h4>
            <!-- Insertar FORM del sistema anterior -->
            <a href="" class="btn btn-primary">Reporte Global de cursos impartidos</a>
            <a href="" class="btn btn-primary">Reporte de Evaluación Global de Área</a>
            <div class="div_info">
              <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Curso</th>
                                    <th>Instructor(es)</th>
                                    <th>Evaluaciones</th>
                                    <th>Reportes</th>
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
                                      <a href="" class="btn btn-success" id="btn_eval">Capturar evaluación final de curso</a>
                                    </td>
                                    <td>
                                      <a href="" class="btn btn-info" id="btn_reporte">Reporte de Evaluación final de curso</a><br>
                                      <a href="" class="btn btn-primary" id="btn_reporte">Reporte de Instructores</a>
                                    </td>
                                    <td><a href="" class="btn btn-warning" id="btn_participantes">Visualizar participantes inscritos</a></td>
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