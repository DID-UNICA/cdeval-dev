<!-- Vista: Main Contestar Evaluación -->
@extends('layouts.principal')

@section('contenido')
  <!--Body content-->

  <!--@if (\Session::has('msj'))
  <p align="center" style="color:green;">{!! \Session::get('msj') !!}<strong></strong></p>
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
      @if(session()->has('message'))
        <div class="alert alert-success" role='alert'>{{session('message')}}</div>
  @endif
        <div class="panel-heading">
          <h3>Coodinación del Centro de Docencia</h3> <!-- Obtener valor de BD-->
        </div>

        <div class="panel-body">
            <h3>{{$datos[0]->nombre_curso}}</h3> <!-- Obtener valor de BD-->
              <br>
            <h4>Buscar</h4>
			<!-- Insertar FORM del sistema anterior -->
            
            <div class="div_info">
              <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Particpante</th>

                                    <th>Evaluar</th>

                                    <th>Modificar</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                              @foreach($datos as $dato)
                                <tr>
                                    <td>
                                    
                                         <p>{{$dato->apellido_paterno}} {{$dato->apellido_materno}} {{$dato->nombres}}</p>
                                        <!-- Ordenados por apellido paterno -->
                                    </td>
                                    <td>
                                      @if(Session::get('sesion')=='cd')
                                        <button onclick="window.location='{{route("cd.evaluacion.vista",[$id, $dato->id])}}'" class="btn btn-success">Evaluación final de curso</button>
                                      @else
                                      <button onclick="window.location='{{route("area.evaluacion.vista",[$id, $dato->id])}}'" class="btn btn-success">Evaluación final de curso</button>
                                      @endif
                                    </td>
                                    <td>
                                    @if(Session::get('sesion')=='cd')
                                        <button onclick="window.location='{{route("cd.modificar.evaluacion",[$id, $dato->id])}}'" class="btn btn-warning">Modificar evaluación final de curso</button>
                                      @else
                                      <button onclick="window.location='{{route("area.modificar.evaluacion",[$id, $dato->id])}}'" class="btn btn-warning">Modificar evaluación final de curso</button>
                                      @endif
                                  </td>
                                </tr>
                              @endforeach
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