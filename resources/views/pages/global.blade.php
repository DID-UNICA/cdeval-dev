@extends('layouts.principal')

@section('contenido')

@php
  $calif_contenido = $criterio_contenido_pon;
  $calif_contenido_aritmetico = $criterio_contenido_arim;
  $calif_instructor = $criterio_instructores_pon;
  $calif_instructor_aritmetico = $criterio_instructores_arim;
  $calif_coordinacion = $criterio_coordinacion_pon;
  $calif_coordinacion_aritmetico = $criterio_coordinacion_arim;
  $calif_recomendacion = $criterio_recomendacion_pon;
  $calif_recomendacion_aritmetico = $criterio_recomendacion_arim;
  $factor_ocupacion = (floor($factor_ocupacion) != $factor_ocupacion) ? $factor_ocupacion : intval($factor_ocupacion);
  if($criterio_contenido_pon > $criterio_contenido_arim){
      $calif_contenido = strval($criterio_contenido_pon).' *';
  }else{
      $calif_contenido_aritmetico = strval($criterio_contenido_arim).' *';
  }
  if($criterio_instructores_pon > $criterio_instructores_arim){
      $calif_instructor = strval($criterio_instructores_pon).' *';
  }else{
      $calif_instrcutor_aritmetico = strval($criterio_instructores_arim).' *';
  }
  if($criterio_coordinacion_pon > $criterio_coordinacion_arim){
      $calif_coordinacion = strval($criterio_coordinacion_pon).' *';
  }else{
      $calif_coordinacion_aritmetico = strval($criterio_coordinacion_arim).' *';
  }
  if($criterio_recomendacion_pon > $criterio_recomendacion_arim){
      $calif_recomendacion = strval($criterio_recomendacion_pon).' *';
  }else{
      $calif_recomendacion_aritmetico = strval($criterio_recomendacion_arim).' *';
  }
@endphp
    <style>
      .h4{
        text:left;
      }
      h5{
        font-weight:bold;
      }
    </style>
	<div id="inner" style="margin-top:2%">
    <div class="content-inner">
      <br>
      @include('partials.messages')
      <div class="panel panel-default">
        
        <div class="panel-heading">
          <h3>Reporte de Evaluación Global de Área</h3>
          <h4>{{$periodo}}</h4>
        </div>

        <div class="panel-body">
          <div class="container">
            <div class="row">
              <div class="col text"> 
                  <h4 class="h4">
                    1. NOMBRE DE LOS CURSOS
                  </h4>
              </div>
            </div>

          
            @foreach($nombre_cursos as $nombre)
              <div class="row">
                <div class="col">
                {!!Form::text("cursos", $nombre, ["class"=>"form-control", "disabled","style"=>"margin-top:0.5%"])!!}
                </div>
              </div>
            @endforeach
            <div class="row">
            <div class="form-group text">
                  {!!Form::label("capacidad", 'Capacidad:', ["class"=>'col-4'])!!}
                  {!!Form::text("capacidad", $capacidad, ["class"=>"col-2", "disabled","style"=>"margin:1%"])!!}
                  {!!Form::label("duracion", 'Total de horas:', ["class"=>'col-4'])!!}
                  {!!Form::text("duracion", $duracion, ["class"=>"col-2", "disabled","style"=>"margin:1%"])!!}
                  {!!Form::label("horas_pc", 'Horas participante curso:', ["class"=>'col-4'])!!}
                  {!!Form::text("horas_pc", $horas_pc, ["class"=>"col-2", "disabled","style"=>"margin:1%"])!!}
              </div>
            </div>
              
            <div class="row">
              <div class="col text">
                <h4>2. REGISTRO DE PARTICIPANTES</h4>
              </div>
            </div>
              <div class="row" style="margin-top:0.5%">
                <div class="col-md-6">
                  <h5>a) Semiperiodo de evaluación:</h5>
                </div>
                <div class="col-md-3">
                  <input type="text" value={{$periodo}} disabled class="form-control" name="periodo" id="periodo">
                </div>
              </div>
              <div class="row" style="margin-top:0.5%">
                <div class="col-md-6">
                  <h5>b) Número de participantes inscritos:</h5>
                </div>
                <div class="col-md-3">
                  <input type="text" value={{$inscritos}} disabled name="inscritos" class="form-control" id="inscritos">
                </div>
              </div>
              <div class="row" style="margin-top:0.5%">
                <div class="col-md-6">
                  <h5>c) Número de participantes que asistieron:</h5>
                </div>
                <div class="col-md-3">
                  <input disabled class="form-control" value={{$asistentes}} type="text" name="asistentes" id="asistentes">
                </div>
              </div>
              <div class="row" style="margin-top:0.5%">
                <div class="col-md-6">
                  <h5>d) Número de participantes que acreditaron:</h5>
                </div>
                <div class="col-md-3">
                  <input disabled class="form-control" value={{$acreditados}} type="text" name="acreditados" id="acreditados">
                </div>
              </div>
              <div class="row" style="margin-top:0.5%">
                <div class="col-md-6">
                  <h5>e) Número de participantes que contestaron el formato de evaluación:</h5>
                </div>
                <div class="col-md-3">
                  <input disabled class="form-control" value={{$contestaron}} type="text" name="contestaron" id="contestaron">
                </div>
              </div>
            <br>
            <div class="row">
              <h4>3. FACTOR DE OCUPACIÓN</h4>
              <div class="col-md-6"> 
                <p>Total de participantes que asistieron a cursos x 100 / Capacidad total de los cursos</p>
              </div>
              
              <div class="col-md-4">
                {!!Form::text("ocupacion", $factor_ocupacion, ["class"=>"form-control", "disabled"])!!}
              </div>
            </div>
            <div class="row">
              <h4> 4. FACTOR DE RECOMENDACIÓN DE LOS CURSOS:</h4>
              <div class="col-md-6"> 
                <p>Total de participantes que recomiendan los cursos x 100 / Total de participantes que respondieron la pregunta de satisfacción</p>
              </div>
              <div class="col-md-4">
                {!!Form::text("recomendacion", $factor_recomendacion, ["class"=>"form-control", "disabled"])!!}
              </div>
            </div>

            <div class="row">
              <h4> 5. FACTOR DE ACREDITACIÓN:</h4>
              <div class="col-md-6"> 
                <p>Total de participantes que recibieron constancia x 100 / Total de participantes que asistieron a cursos</p>
              </div>
              <div class="col-md-4">
                {!!Form::text("acreditacion", $factor_acreditacion, ["class"=>"form-control", "disabled"])!!}
              </div>
            </div>

            <div class="row">
              <h4>6. CALIDAD DE LOS CURSOS:</h4>
              <div class="col-md-6"> 
                <p>Total de reactivos positivos x 100 / Total de reactivos</p>
              </div>
              <div class="col-md-4">
                {!!Form::text("calidad", $factor_calidad, ["class"=>"form-control", "disabled"])!!}
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col">
                <h4>7. INSTRUCTORES QUE SE VOLVERÍAN A CONTRATAR:</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <h5>Nombre</h5>
              </div>
              <div class="col-md-3">
                <h5>Mínimo Evaluación</h5>
              </div>
              <div class="col-md-3">
                <h5>Máximo Evaluación</h5>
              </div>
              <div class="col-md-3">
                <h5>Promedio Evaluación</h5>
              </div>
            </div>
            @foreach($nombres_instructores as $inst)
              <div class="row" style="margin-top:0.5%">
                <div class="col-md-3">
                  <input value="{{$inst->nombre}}" type="text" name="nombre_inst" id="nombre_inst" disabled class="form-control">
                </div>
                <div class="col-md-3">
                  <input value="{{$inst->min}}" type="text" name="minimo_inst" id="minimo_inst" disabled class="form-control">
                </div>
                <div class="col-md-3">
                  <input value="{{$inst->max}}" type="text" name="maximo_inst" id="maximo_inst" disabled class="form-control">
                </div>
                <div class="col-md-3">
                  <input value="{{$inst->prom}}" type="text" name="promedio_inst" id="promedio_inst" disabled class="form-control">
                </div>
              </div>  
            @endforeach
            <br>
            <div class="row">
              <h4>8. ÁREAS SOLICITADAS POR LOS PARTICIPANTES</h4>
            </div>
            <div class="row">
              <div class="col-md-3">
                <h5>Didáctico Pedagógico</h5>
              </div>
              <div class="col-md-3">
                <h5>Desarrollo Humano</h5>
              </div>
              <div class="col-md-3">
                <h5>Cómputo</h5>
              </div>
              <div class="col-md-3">
                <h5>Disciplinar</h5>
              </div>
            </div>
            <div class="row" style="margin-top:0.5%">
              <div class="col-md-3">
                <input value="{{$DP}}" type="text" name="DP" id="DP" disabled class="form-control">
              </div>
              <div class="col-md-3">
                <input value="{{$DH}}" type="text" name="DH" id="DH" disabled class="form-control">
              </div>
              <div class="col-md-3">
                <input value="{{$CO}}" type="text" name="CO" id="CO" disabled class="form-control">
              </div>
              <div class="col-md-3">
                <input value="{{$DI}}" type="text" name="DI" id="DI" disabled class="form-control">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col">
                <h4>9. TEMÁTICAS SOLICITADAS POR LOS PARTICIPANTES</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <h5>Solicitud</h5>
              </div>
              <div class="col-md-4">
                <h5>Curso de donde proviene</h5>
              </div>
              <div class="col-md-4">
                <h5>¿Qué otros cursos, talleres, seminarios o temáticos le gustaría que se impartiesen o tomasen en cuenta para próximas actividades? </h5>
              </div>
            </div>
            @foreach($tematicas as $tem)
              <div class="row" style="margin-top:0.5%">
                <div class="col-md-4">
                  <input value="{{$tem['tematica']}}" type="text" name="tematica" id="tematica" disabled class="form-control">
                </div>
                <div class="col-md-4">
                  <input value="{{$tem['curso']}}" type="text" name="tematica_curso" id="tematica_curso" disabled class="form-control">
                </div>
                <div class="col-md-4">
                  <input value="{{$tem['otros']}}" type="text" name="otros" id="otros" disabled class="form-control">
                </div>
              </div>
            @endforeach
            <br>
            <div class="row">
              <div class="col">
                <h4>10. HORARIOS SOLICITADOS</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <h5>Horarios Semestrales</h5>
              </div>
              <div class="col-md-6">
                <h5>Horarios Intersemestrales</h5>
              </div>
            </div>
            @foreach($horarios as $horario)
              <div class="row" style="margin-top:0.5%">
                <div class="col-md-6">
                  <input value="{{$horario[0]}}" type="text" name="horario_s" id="horario_s" disabled class="form-control">
                </div>
                <div class="col-md-6">
                  <input value="{{$horario[1]}}" type="text" name="horario_i" id="horario_i" disabled class="form-control">
                </div>
              </div>
            @endforeach
            <br>
            <div class="row">
              <div class="col">
                <h4>11. CRITERIOS DE ACEPTACIÓN DE LOS CURSOS</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <h5 style="text-align:left">Campo</h5>
              </div>
              <div class="col-md-3">
                <h5 style="text-align:center">Ponderado</h5>
              </div>
              <div class="col-md-3">
                <h5></h5>
              </div>
              <div class="col-md-3">
                <h5 style="text-align:center">Aritmético</h5>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <p style="text-align:left">Contenido de los cursos:</p>
              </div>
              <div class="col-md-3">
                <p style="text-align:center">{{$calif_contenido}}</p>
              </div>
              @if($criterio_contenido_pon <= 80)
                <div class="col-md-3">
                  <p style="color: red;">BAJO</p>
                </div>
              @else
              <div class="col-md-3">
                  <p></p>
                </div>
              @endif
              <div class="col-md-3">
                <p style="text-align:center">{{$calif_contenido_aritmetico}}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <p style="text-align:left">Desempeño de los instructores:</p>
              </div>
              <div class="col-md-3">
                <p style="text-align:center">{{$calif_instructor}}</p>
              </div>
              @if($criterio_instructores_pon <= 80)
              <div class="col-md-3">
                  <p style="color: red;">BAJO</p>
                </div>
              @else
              <div class="col-md-3">
                  <p></p>
                </div>
              @endif
              <div class="col-md-3">
                <p style="text-align:center">{{$calif_instructor_aritmetico}}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <p style="text-align:left">Coordinación de los cursos:</p>
              </div>
              <div class="col-md-3">
                <p style="text-align:center">{{$calif_coordinacion}}</p>
              </div>
              @if($criterio_coordinacion_pon <= 80)
              <div class="col-md-3">
                  <p style="color: red;">BAJO</p>
                </div>
              @else
              <div class="col-md-3">
                  <p></p>
                </div>
              @endif
              <div class="col-md-3">
                <p style="text-align:center">{{$calif_coordinacion_aritmetico}}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <p style="text-align:left">Recomendación de los cursos:</p>
              </div>
              <div class="col-md-3">
                <p style="text-align:center">{{$calif_recomendacion}}</p>
              </div>
              @if($criterio_recomendacion_pon <= 80)
                <div class="col-md-3">
                  <p style="color: red;">BAJO</p>
                </div>
              @else
                <div class="col-md-3">
                  <p></p>
                </div>
              @endif
              <div class="col-md-3">
               <p style="text-align:center">{{$calif_recomendacion_aritmetico}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection