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
          <h3>{{$coordinacion}}</h3> <!-- Obtener valor de BD-->
        </div>

        <div class="panel-body">
          
            <h4>Buscar</h4>
            <br>
            <!-- Insertar FORM del sistema anterior -->
            <h4>Periodo</h4>
            <br>
            <div class="panel-body">
            <form method="POST" action="{{action('AreaController@cambioFecha')}}">
                <table>
                  <tr>
                    <td>
                      <select name="semestre" id="">
                        <!-- Obtener valores de BD -->
                        @foreach($semestre_anio as $anio)
                          <option value="{{$anio->semestre_anio.'-1'}}">{{$anio->semestre_anio}}-1</option>
                          <option value="{{$anio->semestre_anio.'-2'}}">{{$anio->semestre_anio}}-2</option>
                        @endforeach
                      </select>
                    </td>
                    <td>
                      <select name='periodo' width = '25%'>
                        <option value='s'>s</option>
                        <option value='i'>i</option>
                      </select>
                    </td>
                </div>
                <td>
                {{ csrf_field ()}}
                 <button id="area"  type="submit" class="btn btn-success">Buscar</button>
                </td>
              </table>
            </form>
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
                              @foreach($datos as $curso)
                                <tr>
                                    <td style="width:350px;">{{$curso[0]->nombre_curso}}</td>
                                    <td>
                                    @foreach($curso[1] as $profesors)
                                    
                                         <p>{{$profesors->nombres}} {{$profesors->apellido_paterno}} {{$profesors->apellido_materno}}</p>
                                        
                                    @endforeach
                                    </td>
                                    <td>
                                      <button class="btn btn-success" id="btn_eval" onclick="window.location='{{ route("cd.evaluacion") }}'">Capturar evaluación final de curso</button>
                                    </td>
                                    <td><button href="" class="btn btn-warning" id="btn_participantes" onclick="window.location='{{ route("cd.participantes") }}'">Visualizar participantes inscritos</button></td>
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