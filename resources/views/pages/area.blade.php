<!-- Vista: Visualizar área - Centro de Docencia y Área de Gestiónn y Vinculación -->
@extends('layouts.principal')

@section('contenido')

<script>
  window.onload = function(){
    var elems = document.getElementsByClassName("btn-warning");
    for(var i = 0; i < elems.length; i++) {
      elems[i].disabled = false;
    }
  }
</script>
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
            <h3>{{$coordinacion}}</h3>
              <br>
            <h4>Buscar</h4>
            <!-- Insertar FORM del sistema anterior -->
            <a onclick="window.location='{{ route("cd.reporte.area",[$semestre,$periodo,$coordinacion_id]) }}'" class="btn btn-primary">Reporte de Evaluación Global de Área</a>
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
                              @foreach($datos as $curso)
                                <tr>
                                    <td style="width:350px;">{{$curso[0]->nombre_curso}}</td>
                                    <td>
                                    @foreach($curso[1] as $profesors)
                                    
                                         <p>{{$profesors->nombres}} {{$profesors->apellido_paterno}} {{$profesors->apellido_materno}}</p>
                                        
                                    @endforeach
                                    </td>
                                    <td>
                                      <button onclick="window.location='{{ route("cd.evaluacion",[$curso[0]->id])}}'"  class="btn btn-success" id="btn_eval" >Capturar evaluación final de curso</button>
                                    </td>
                                    <td>
                                      <a href="{{url("/CD/area/evaluacion/{$curso[0]->id}")}}" class="btn btn-info" id="btn_reporte">Reporte de Evaluación final de curso</a><br>
                                      <a href="" class="btn btn-primary" id="btn_reporte">Reporte de Instructores</a>
                                    </td>
                                    <td><button onclick="window.location='{{ route("cd.participantes",[$curso[0]->id])}}'" class="btn btn-warning" id="btn_participantes">Visualizar participantes inscritos</button>
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