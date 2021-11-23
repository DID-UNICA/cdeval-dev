<!-- Guardado en resources/views/pages/xsesion.blade.php -->
@extends('layouts.principal')

@section('contenido')

<!--Body content-->
@if(Auth::user()->es_admin === True)
  {!! Form::open(["route" => ["cd.update.encuesta",$evaluacion->id], "method" => "POST"]) !!}
@else
  {!! Form::open(["route" => ["area.update.encuesta",$participante_id, $evaluacion->id], "method" => "POST"]) !!}
@endif
<input type="hidden" name="_token" value="{!! csrf_token() !!}">
@if(session()->has('message-success'))
<div class="alert alert-success" role='alert'>{{session('message-success')}}</div>
@elseif(session()->has('message-danger'))
<div class="alert alert-danger" role='alert'>{{session('message-danger')}}</div>
@elseif(session()->has('message-warning'))
<div class="alert alert-warning" role='alert'>{{session('message-warning')}}</div>
@endif
  <div style="padding-top: 2cm; padding-left: 0.5cm; padding-right: 0.5cm;">
    <div class="top-bar">       
      <a href="#menu" class="side-menu-link burger"> 
        <span class='burger_inside' id='bgrOne'></span>
        <span class='burger_inside' id='bgrTwo'></span>
        <span class='burger_inside' id='bgrThree'></span>
      </a>      
    </div>
    <section class="content-inner">
      <div class="panel panel-default">
      @if(session()->has('msj'))
        <div class="alert alert-success" role='alert'>{{session('msj')}}</div>
      @endif
                <div class="panel-heading">
                    <h2><span class="fa fa-check-square-o"></span> Evaluación final de curso </h3>
                </div>

                <div class="panel-body">
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-10">
                        <h4> Curso:  {{ $nombre_curso }}</h4>
                        </div>
                    </div>
                    <div class="form-group row">
                            <div class="col-sm-10">
                                <h4>Instructor(es): {{ $instructores_cadena }}</h4>
                            </div> 
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                        <h4> Participante:  {{ $participante_nombre }}</h4>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <h4>Fecha: {{ $fecha }}</h4>
                        </div>
                    </div>
                        <br>
                        <div class="col-md-12">
                            <label for="">Estimado participante, con objeto de mejorar el desarrollo de los seminarios futuros que ofrece el Centro de Docencia, le solicitamos contestar con veracidad y proporcionar cualquier comentario adicional que resulte relavante, gracias.</label>
                        </div>
                    </div>
                    <br>   
                    <table class="table table-hover">
                    <tr>
                        <th width="42%" align="justify">1. DESAROLLO DEL CURSO</th>
                        <th align="right">SR</th>
                        <th align="right">Mala</th>
                        <th align="right">Regular</th>
                        <th align="right">Buena</th>
                        <th align="right">Muy buena</th>
                        <th align="right">Excelente</th>
                    </tr>
                    <tr>
                        <td align="justify">Las actividades de aprendizaje estuvieron vinculadas a los objetivos y contenidos de manera </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_1" value="0"  {{ (isset($evaluacion)) ? (($evaluacion->p1_1 == 0) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_1" value="50"  {{ (isset($evaluacion)) ? (($evaluacion->p1_1 == 50) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_1" value="60"  {{ (isset($evaluacion)) ? (($evaluacion->p1_1 == 60) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_1" value="80"  {{ (isset($evaluacion)) ? (($evaluacion->p1_1 == 80) ? 'checked' : '') : ''}}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_1" value="95"  {{ (isset($evaluacion)) ? (($evaluacion->p1_1 == 95) ? 'checked' : '') : ''  }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_1" value="100"  {{ (isset($evaluacion)) ? (($evaluacion->p1_1 == 100) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La suficiencia de los contenidos para el logro de los objetivos propuestos fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_2" value="0"  {{ (isset($evaluacion)) ? (($evaluacion->p1_2 == 0) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_2" value="50"  {{ (isset($evaluacion)) ? (($evaluacion->p1_2 == 50) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_2" value="60"  {{ (isset($evaluacion)) ? (($evaluacion->p1_2 == 60) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_2" value="80"  {{ (isset($evaluacion)) ? (($evaluacion->p1_2 == 80) ? 'checked' : '') : ''}}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_2" value="95"  {{ (isset($evaluacion)) ? (($evaluacion->p1_2 == 95) ? 'checked' : '') : ''  }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_2" value="100"  {{ (isset($evaluacion)) ? (($evaluacion->p1_2 == 100) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La utilidad del material proporcionado durante el curso fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_3" value="0"  {{ (isset($evaluacion)) ? (($evaluacion->p1_3 == 0) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_3" value="50"  {{ (isset($evaluacion)) ? (($evaluacion->p1_3 == 50) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_3" value="60"  {{ (isset($evaluacion)) ? (($evaluacion->p1_3 == 60) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_3" value="80"  {{ (isset($evaluacion)) ? (($evaluacion->p1_3 == 80) ? 'checked' : '') : ''}}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_3" value="95"  {{ (isset($evaluacion)) ? (($evaluacion->p1_3 == 95) ? 'checked' : '') : ''  }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_3" value="100"  {{ (isset($evaluacion)) ? (($evaluacion->p1_3 == 100) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La motivación para el estudio independiente de las sesiones fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_4" value="0"  {{ (isset($evaluacion)) ? (($evaluacion->p1_4 == 0) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_4" value="50"  {{ (isset($evaluacion)) ? (($evaluacion->p1_4 == 50) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_4" value="60"  {{ (isset($evaluacion)) ? (($evaluacion->p1_4 == 60) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_4" value="80"  {{ (isset($evaluacion)) ? (($evaluacion->p1_4 == 80) ? 'checked' : '') : ''}}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_4" value="95"  {{ (isset($evaluacion)) ? (($evaluacion->p1_4 == 95) ? 'checked' : '') : ''  }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_4" value="100"  {{ (isset($evaluacion)) ? (($evaluacion->p1_4 == 100) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La aplicación de los temas tratados en mi desarrollo académico es</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_5" value="0"  {{ (isset($evaluacion)) ? (($evaluacion->p1_5 == 0) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_5" value="50"  {{ (isset($evaluacion)) ? (($evaluacion->p1_5 == 50) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_5" value="60"  {{ (isset($evaluacion)) ? (($evaluacion->p1_5 == 60) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_5" value="80"  {{ (isset($evaluacion)) ? (($evaluacion->p1_5 == 80) ? 'checked' : '') : ''}}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_5" value="95"  {{ (isset($evaluacion)) ? (($evaluacion->p1_5 == 95) ? 'checked' : '') : ''  }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_5" value="100"  {{ (isset($evaluacion)) ? (($evaluacion->p1_5 == 100) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        </tr>
                    </table>
                    <br>
                    <table class="table table-hover">
                    <tr>
                        <th width="42%" align="justify">2. AUTOEVALUACIÓN</th>
                        <th align="right">SR</th>
                        <th align="right">Mala</th>
                        <th align="right">Regular</th>
                        <th align="right">Buena</th>
                        <th align="right">Muy buena</th>
                        <th align="right">Excelente</th>
                    </tr>
                    <tr>
                        <td align="justify">Mi puntualidad fue </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_1" value="0"  {{ (isset($evaluacion)) ? (($evaluacion->p2_1 == 0) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_1" value="50"  {{ (isset($evaluacion)) ? (($evaluacion->p2_1 == 50) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_1" value="60"  {{ (isset($evaluacion)) ? (($evaluacion->p2_1 == 60) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_1" value="80"  {{ (isset($evaluacion)) ? (($evaluacion->p2_1 == 80) ? 'checked' : '') : ''}}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_1" value="95"  {{ (isset($evaluacion)) ? (($evaluacion->p2_1 == 95) ? 'checked' : '') : ''  }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_1" value="100"  {{ (isset($evaluacion)) ? (($evaluacion->p2_1 == 100) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">Mi participación fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_2" value="0"  {{ (isset($evaluacion)) ? (($evaluacion->p2_2 == 0) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_2" value="50"  {{ (isset($evaluacion)) ? (($evaluacion->p2_2 == 50) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_2" value="60"  {{ (isset($evaluacion)) ? (($evaluacion->p2_2 == 60) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_2" value="80"  {{ (isset($evaluacion)) ? (($evaluacion->p2_2 == 80) ? 'checked' : '') : ''}}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_2" value="95"  {{ (isset($evaluacion)) ? (($evaluacion->p2_2 == 95) ? 'checked' : '') : ''  }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_2" value="100"  {{ (isset($evaluacion)) ? (($evaluacion->p2_2 == 100) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">Mi actitud durante el curso fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_3" value="0"  {{ (isset($evaluacion)) ? (($evaluacion->p2_3 == 0) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_3" value="50"  {{ (isset($evaluacion)) ? (($evaluacion->p2_3 == 50) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_3" value="60"  {{ (isset($evaluacion)) ? (($evaluacion->p2_3 == 60) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_3" value="80"  {{ (isset($evaluacion)) ? (($evaluacion->p2_3 == 80) ? 'checked' : '') : ''}}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_3" value="95"  {{ (isset($evaluacion)) ? (($evaluacion->p2_3 == 95) ? 'checked' : '') : ''  }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_3" value="100"  {{ (isset($evaluacion)) ? (($evaluacion->p2_3 == 100) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La forma en la que aprovecharé este curso será</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_4" value="0"  {{ (isset($evaluacion)) ? (($evaluacion->p2_4 == 0) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_4" value="50"  {{ (isset($evaluacion)) ? (($evaluacion->p2_4 == 50) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_4" value="60"  {{ (isset($evaluacion)) ? (($evaluacion->p2_4 == 60) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_4" value="80"  {{ (isset($evaluacion)) ? (($evaluacion->p2_4 == 80) ? 'checked' : '') : ''}}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_4" value="95"  {{ (isset($evaluacion)) ? (($evaluacion->p2_4 == 95) ? 'checked' : '') : ''  }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_4" value="100"  {{ (isset($evaluacion)) ? (($evaluacion->p2_4 == 100) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    </table>
                    <br>
                    <table class="table table-hover">
                    <tr>
                        <th width="42%" align="justify">3. COORDINACIÓN DEL CURSO</th>
                        <th align="right">SR</th>
                        <th align="right">Mala</th>
                        <th align="right">Regular</th>
                        <th align="right">Buena</th>
                        <th align="right">Muy buena</th>
                        <th align="right">Excelente</th>
                    </tr>
                    <tr>
                        <td align="justify">La coordinación del curso desde su difusión, inscripción, hasta el cierre fue </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_1" value="0"  {{ (isset($evaluacion)) ? (($evaluacion->p3_1 == 0) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_1" value="50"  {{ (isset($evaluacion)) ? (($evaluacion->p3_1 == 50) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_1" value="60"  {{ (isset($evaluacion)) ? (($evaluacion->p3_1 == 60) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_1" value="80"  {{ (isset($evaluacion)) ? (($evaluacion->p3_1 == 80) ? 'checked' : '') : ''}}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_1" value="95"  {{ (isset($evaluacion)) ? (($evaluacion->p3_1 == 95) ? 'checked' : '') : ''  }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_1" value="100"  {{ (isset($evaluacion)) ? (($evaluacion->p3_1 == 100) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La calidad del servicio en cuanto a trato personal fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_2" value="0"  {{ (isset($evaluacion)) ? (($evaluacion->p3_2 == 0) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_2" value="50"  {{ (isset($evaluacion)) ? (($evaluacion->p3_2 == 50) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_2" value="60"  {{ (isset($evaluacion)) ? (($evaluacion->p3_2 == 60) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_2" value="80"  {{ (isset($evaluacion)) ? (($evaluacion->p3_2 == 80) ? 'checked' : '') : ''}}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_2" value="95"  {{ (isset($evaluacion)) ? (($evaluacion->p3_2 == 95) ? 'checked' : '') : ''  }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_2" value="100"  {{ (isset($evaluacion)) ? (($evaluacion->p3_2 == 100) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La calidad del servicio en cuanto a instalaciones, ventilación, ilumniación, mobiliario y equipo fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_3" value="0"  {{ (isset($evaluacion)) ? (($evaluacion->p3_3 == 0) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_3" value="50"  {{ (isset($evaluacion)) ? (($evaluacion->p3_3 == 50) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_3" value="60"  {{ (isset($evaluacion)) ? (($evaluacion->p3_3 == 60) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_3" value="80"  {{ (isset($evaluacion)) ? (($evaluacion->p3_3 == 80) ? 'checked' : '') : ''}}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_3" value="95"  {{ (isset($evaluacion)) ? (($evaluacion->p3_3 == 95) ? 'checked' : '') : ''  }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_3" value="100"  {{ (isset($evaluacion)) ? (($evaluacion->p3_3 == 100) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La limpieza, el orden y acústica de las instalaciones fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_4" value="0"  {{ (isset($evaluacion)) ? (($evaluacion->p3_4 == 0) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_4" value="50"  {{ (isset($evaluacion)) ? (($evaluacion->p3_4 == 50) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_4" value="60"  {{ (isset($evaluacion)) ? (($evaluacion->p3_4 == 60) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_4" value="80"  {{ (isset($evaluacion)) ? (($evaluacion->p3_4 == 80) ? 'checked' : '') : ''}}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_4" value="95"  {{ (isset($evaluacion)) ? (($evaluacion->p3_4 == 95) ? 'checked' : '') : ''  }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_4" value="100"  {{ (isset($evaluacion)) ? (($evaluacion->p3_4 == 100) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    </table>
                    @php
                      $count = 0;
                    @endphp
                    <br>
                    @foreach($instructores as $instructor)
                      @php
                        $evaluacion_instructor = $instructor->getEvaluacionByParticipante($participante_id);
                        $count = $count + 1;
                      @endphp
                    <table class="table table-hover">
                    <tr>
                        <th width="42%" align="justify">4.{{ $count }} INSTRUCTOR(A): {{ $instructor->getProfesor()->getNombre() }} </th>
                        <th align="right">SR</th>
                        <th align="right">Mala</th>
                        <th align="right">Regular</th>
                        <th align="right">Buena</th>
                        <th align="right">Muy buena</th>
                        <th align="right">Excelente</th>
                    </tr>
                    <tr>
                        <td align="justify">Considero la experiencia del instructor como </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p1" value="0"  {{ (!isset($evaluacion_instructor) ? 'checked' : ($evaluacion_instructor->p1 == NULL || $evaluacion_instructor->p1 == 0 ? 'checked' : '')) }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p1" value="50"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p1 == 50) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p1" value="60"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p1 == 60) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p1" value="80"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p1 == 80) ? 'checked' : '') : ''}}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p1" value="95"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p1 == 95) ? 'checked' : '') : ''  }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p1" value="100"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p1 == 100) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La planeación y organización de las sesiones y lecturas de acuerdo a los temas fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p2" value="0"  {{ (!isset($evaluacion_instructor) ? 'checked' : ($evaluacion_instructor->p2 == NULL || $evaluacion_instructor->p2 == 0 ? 'checked' : '')) }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p2" value="50"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p2 == 50) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p2" value="60"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p2 == 60) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p2" value="80"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p2 == 80) ? 'checked' : '') : ''}}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p2" value="95"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p2 == 95) ? 'checked' : '') : ''  }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p2" value="100"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p2 == 100) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La puntualidad del instructor fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p3" value="0"  {{ (!isset($evaluacion_instructor) ? 'checked' : ($evaluacion_instructor->p3 == NULL || $evaluacion_instructor->p3 == 0 ? 'checked' : '')) }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p3" value="50"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p3 == 50) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p3" value="60"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p3 == 60) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p3" value="80"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p3 == 80) ? 'checked' : '') : ''}}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p3" value="95"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p3 == 95) ? 'checked' : '') : ''  }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p3" value="100"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p3 == 100) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La forma de utilizar el equipo y materiales de apoyo al curso fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p4" value="0"  {{ (!isset($evaluacion_instructor) ? 'checked' : ($evaluacion_instructor->p4 == NULL || $evaluacion_instructor->p4 == 0 ? 'checked' : '')) }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p4" value="50"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p4 == 50) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p4" value="60"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p4 == 60) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p4" value="80"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p4 == 80) ? 'checked' : '') : ''}}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p4" value="95"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p4 == 95) ? 'checked' : '') : ''  }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p4" value="100"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p4 == 100) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La manera de aclarar las dudas planteadas por los participantes fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p5" value="0"  {{ (!isset($evaluacion_instructor) ? 'checked' : ($evaluacion_instructor->p5 == NULL || $evaluacion_instructor->p5 == 0 ? 'checked' : '')) }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p5" value="50"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p5 == 50) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p5" value="60"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p5 == 60) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p5" value="80"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p5 == 80) ? 'checked' : '') : ''}}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p5" value="95"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p5 == 95) ? 'checked' : '') : ''  }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p5" value="100"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p5 == 100) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">Las técnicas grupales utilizadas por el (la) instructor(a) fueron</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p6" value="0"  {{ (!isset($evaluacion_instructor) ? 'checked' : ($evaluacion_instructor->p6 == NULL || $evaluacion_instructor->p6 == 0 ? 'checked' : '')) }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p6" value="50"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p6 == 50) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p6" value="60"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p6 == 60) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p6" value="80"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p6 == 80) ? 'checked' : '') : ''}}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p6" value="95"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p6 == 95) ? 'checked' : '') : ''  }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p6" value="100"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p6 == 100) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La forma de interesar a los participantes durante el curso fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p7" value="0"  {{ (!isset($evaluacion_instructor) ? 'checked' : ($evaluacion_instructor->p7 == NULL || $evaluacion_instructor->p7 == 0 ? 'checked' : '')) }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p7" value="50"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p7 == 50) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p7" value="60"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p7 == 60) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p7" value="80"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p7 == 80) ? 'checked' : '') : ''}}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p7" value="95"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p7 == 95) ? 'checked' : '') : ''  }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p7" value="100"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p7 == 100) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La actitud del (de la) instructor(a) fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p8" value="0"  {{ (!isset($evaluacion_instructor) ? 'checked' : ($evaluacion_instructor->p8 == NULL || $evaluacion_instructor->p8 == 0 ? 'checked' : '')) }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p8" value="50"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p8 == 50) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p8" value="60"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p8 == 60) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p8" value="80"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p8 == 80) ? 'checked' : '') : ''}}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p8" value="95"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p8 == 95) ? 'checked' : '') : ''  }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p8" value="100"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p8 == 100) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">El manejo de las relaciones interpersonales del instructor(a) fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p9" value="0"  {{ (!isset($evaluacion_instructor) ? 'checked' : ($evaluacion_instructor->p9 == NULL || $evaluacion_instructor->p9 == 0 ? 'checked' : '')) }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p9" value="50"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p9 == 50) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p9" value="60"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p9 == 60) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p9" value="80"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p9 == 80) ? 'checked' : '') : ''}}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p9" value="95"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p9 == 95) ? 'checked' : '') : ''  }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p9" value="100"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p9 == 100) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La calidad del trato humano hacia los participantes fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p10" value="0"  {{ (!isset($evaluacion_instructor) ? 'checked' : ($evaluacion_instructor->p10 == NULL || $evaluacion_instructor->p10 == 0 ? 'checked' : '')) }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p10" value="50"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p10 == 50) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p10" value="60"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p10 == 60) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p10" value="80"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p10 == 80) ? 'checked' : '') : ''}}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p10" value="95"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p10 == 95) ? 'checked' : '') : ''  }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p10" value="100"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p10 == 100) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">El manejo de las emociones en las sesiones por parte del instructor(a) fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p11" value="0"  {{ (!isset($evaluacion_instructor) ? 'checked' : ($evaluacion_instructor->p11 == NULL || $evaluacion_instructor->p11 == 0 ? 'checked' : '')) }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p11" value="50"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p11 == 50) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p11" value="60"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p11 == 60) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p11" value="80"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p11 == 80) ? 'checked' : '') : ''}}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p11" value="95"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p11 == 95) ? 'checked' : '') : ''  }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="i_{{$instructor->id}}_p11" value="100"  {{ (isset($evaluacion_instructor)) ? (($evaluacion_instructor->p11 == 100) ? 'checked' : '') : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    </table>
                    @endforeach
                    <br>
                    
                    <table class="table table-hover">
                    <tr>
                        <th align="center">5. ¿RECOMENDARÍA EL CURSO A OTROS PROFESORES?</th>  
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p7" value="1" {{ (isset($evaluacion)) ? (($evaluacion->p7 == 1) ? 'checked' : '') : ''}} class="form-check-input" id="materialUnchecked"> Sí
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p7" value="0" {{ (isset($evaluacion)) ? (($evaluacion->p7 == 0) ? 'checked' : '') : '' }} class="form-check-input" id="materialUnchecked"> No
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p7" value="-1" {{ (isset($evaluacion)) ? (($evaluacion->p7 == -1) ? 'checked' : '') : '' }} class="form-check-input" id="materialUnchecked"> No contestó
                            </div>
                        </td>
                    </tr>
                    </table>
                    <br>
                    <table class="table table-hover">
                        <tr>
                        <th align="center">6. ¿CÓMO SE ENTERÓ DEL CURSO?</th>
                        </tr>
                        <tr>
                        <td>
                            <div class="form-check">
                                <input width="20%" name="p8[]" type="checkbox" class="form-check-input" id="materialUnchecked" value="1" @if(is_array($evaluacion->p8) && in_array('1', $evaluacion->p8)) checked @endif> Internet
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input name="p8[]" type="checkbox" class="form-check-input" id="materialUnchecked" value="2" @if(is_array($evaluacion->p8) && in_array('2', $evaluacion->p8)) checked @endif> Publicidad de la FI
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input name="p8[]" type="checkbox" class="form-check-input" id="materialUnchecked" value="3" @if(is_array($evaluacion->p8) && in_array('3', $evaluacion->p8)) checked @endif> Jefes de División
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input name="p8[]" type="checkbox" class="form-check-input" id="materialUnchecked" value="4" @if(is_array($evaluacion->p8) && in_array('4', $evaluacion->p8)) checked @endif> Otro
                            @if(is_array($evaluacion->p8) && in_array('4', $evaluacion->p8))
                            </div><input name="p8[]" type="otro" class="form-control" id="otro" placeholder="{{$evaluacion->p8[array_search('4',$evaluacion->p8)+1]}}">
                            @else
                            </div><input name="p8[]" type="otro" class="form-control" id="otro" placeholder="Otro">
                            @endif
                        </td>
                        </tr>
                    </table>
                    <table class="table table-hover">
                        <tr>
                            <td width="40%" align="justify">Lo mejor del curso fue: </td>
                            <td><textarea name="p9" class="form-control" id="contenido" rows="2" value={{old('p9')}}>{{(isset($evaluacion))?$evaluacion->p9 : ''}}</textarea></td>
                        </tr>
                        <tr>
                            <td width="40%" align="justify">Sugerencias y recomendaciones: </td>
                            <td><textarea name="sug" class="form-control" id="sugerencias" rows="2" value={{old('sug')}}>{{(isset($evaluacion))?$evaluacion->sug : ''}}</textarea></td>
                        </tr>
                        <tr>
                            <td width="40%" align="justify">¿Qué otros cursos, talleres, seminarios o temáticos le gustaría que se impartiesen o tomasen en cuenta para próximas actividades? </td>
                            <td><textarea name="otros" class="form-control" id="sugerencias" rows="2" value={{old('otros')}}>{{(isset($evaluacion))?$evaluacion->otros : ''}}</textarea></td>
                        </tr>
                    </table> 
                    <table class="table table-hover">
                        <tr>
                        <th>ÁREA DE CONOCIMIENTO</th>
                        </tr>
                        <tr>
                            <td><div class="form-check">
                                <input name="conocimiento[]" type="checkbox" class="form-check-input" id="materialUnchecked" value="1" {{(is_array($evaluacion->conocimiento) && in_array('1', $evaluacion->conocimiento)) ? 'checked':'' }}> Didáctico Pedagógico
                            </div></td>
                            <td><div class="form-check">
                                <input name="conocimiento[]" type="checkbox" class="form-check-input" id="materialUnchecked" value="2" {{(is_array($evaluacion->conocimiento) && in_array('2', $evaluacion->conocimiento)) ? 'checked':'' }}> Desarrollo humano
                            </div></td>
                            <td><div class="form-check">
                                <input name="conocimiento[]" type="checkbox" class="form-check-input" id="materialUnchecked" value="3" {{(is_array($evaluacion->conocimiento) && in_array('3', $evaluacion->conocimiento)) ? 'checked':'' }}> Cómputo
                            </div></td>
                            <td><div class="form-check">
                                <input name="conocimiento[]" type="checkbox" class="form-check-input" id="materialUnchecked" value="4" {{(is_array($evaluacion->conocimiento) && in_array('4', $evaluacion->conocimiento)) ? 'checked':'' }}> Disciplinar
                            </div></td>
                            <td><div class="form-check">
                                <input name="conocimiento[]" type="checkbox" class="form-check-input" id="materialUnchecked" value="5" {{(is_array($evaluacion->conocimiento) && in_array('5', $evaluacion->conocimiento)) ? 'checked':'' }}> Otro
                            </div></td>
                        </tr>
                    </table>     
                    <br>
                    <table class="table table-hover">
                        <tr>
                            <td width="40%" align="justify">Temáticas: </td>
                            <td><textarea name="tematica" class="form-control" id="contenido" rows="2" value="{{old('tematica')}}">{{(isset($evaluacion))?$evaluacion->tematica : ''}}</textarea></td>
                        </tr>
                        
                        <tr>
                            <tr>
                                <td><label for="">¿En qué horarios le gustaría que se impartiesen los cursos, talleres, seminarios o diplomados?</label></td>
                                </tr>
                            <td width="40%" align="justify">Horarios Semestrales: </td>
                            <td><input name="horarios" type="text" class="form-control" id="semestral" placeholder=""  value="{{(isset($evaluacion))?$evaluacion->horarios : ''}}"></td>
                        </tr>
                        <tr>
                            <td width="40%" align="justify">Horarios Intersemestrales: </td>
                            <td><input name="horarioi" type="text" class="form-control" id="intersemestral" placeholder="" value="{{(isset($evaluacion))?$evaluacion->horarioi : ''}}"></td>
                        </tr>
                    </table> 
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary active">Enviar evaluación</button>
                </div>
    
     </section>
     <br>
     </form>
     @endsection