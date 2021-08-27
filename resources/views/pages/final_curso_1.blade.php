<!-- Guardado en resources/views/pages/xsesion.blade.php -->
@extends('layouts.principal')

@section('contenido')

  <!--Body content-->
<form method="POST" action="{{ action('CoordinadorGeneralController@saveFinal_Curso',['profesor_id' => $profesor->id,'curso_id'=> $curso->id,  'catalogoCurso_id'=>$catalogoCurso->id ]) }}">
<input type="hidden" name="_token" value="{!! csrf_token() !!}">
    @if(session()->has('message'))
        <div class="alert alert-success" role='alert' style='text-align:center'>{{session('message')}}</div>
    @endif
  <div class="content">
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
                    <h2><span class="fa fa-check-square-o"></span>    Evaluación final de curso </h3>
                </div>

                <div class="panel-body">
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-10">
                        <h4> Curso:  {{ $catalogoCurso->nombre_curso }}</h4>
                        </div>
                    </div>
                    <div class="form-group row">
                            <div class="col-sm-10">
                                <h4>Instructor: {{ $curso->getProfesores() }}</h4>
                            </div> 
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                        <h4> Participante:  {{ $profesor->nombres }} {{ $profesor->apellido_paterno }} {{ $profesor->apellido_materno }}</h4>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <h4>Fecha: {{ $curso->getToday() }}</h4>
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
                                <input type="radio" name="p1_1" value="50"  {{ (old('p1_1') == '50') ? 'checked' : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_1" value="60"  {{ (old('p1_1') == '80') ? 'checked' : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_1" value="80"  {{ (old('p1_1') == '95') ? 'checked' : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_1" value="95"  {{ (old('p1_1') == '95') ? 'checked' : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_1" value="100"  {{ (old('p1_1') == '100') ? 'checked' : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La suficiencia de los contenidos para el logro de los objetivos propuestos fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_2" value="50"  {{ (old('p1_2') == '50') ? 'checked' : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_2" value="60"  {{ (old('p1_2') == '80') ? 'checked' : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_2" value="80"  {{ (old('p1_2') == '95') ? 'checked' : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_2" value="95"  {{ (old('p1_2') == '95') ? 'checked' : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_2" value="100"  {{ (old('p1_2') == '100') ? 'checked' : '' }}  class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La utilidad del material proporcionado durante el curso fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_3" value="50" {{ (old('p1_3') == '50') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_3" value="60" {{ (old('p1_3') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_3" value="80" {{ (old('p1_3') == '95') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_3" value="95" {{ (old('p1_3') == '59') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_3" value="100" {{ (old('p1_3') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La motivación para el estudio independiente de las sesiones fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_4" value="50" {{ (old('p1_4') == '50') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_4" value="60" {{ (old('p1_4') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_4" value="80" {{ (old('p1_4') == '95') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_4" value="95" {{ (old('p1_4') == '95') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_4" value="100" {{ (old('p1_4') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La aplicación de los temas tratados en mi desarrollo académico es</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_5" value="50" {{ (old('p1_5') == '50') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_5" value="60" {{ (old('p1_5') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_5" value="80" {{ (old('p1_5') == '95') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_5" value="95" {{ (old('p1_5') == '95') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_5" value="100" {{ (old('p1_5') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        </tr>
                    </table>
                    <br>
                    <table class="table table-hover">
                    <tr>
                        <th width="42%" align="justify">2. AUTOEVALUACIÓN</th>
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
                                <input type="radio" name="p2_1" value="50" {{ (old('p2_1') == '50') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_1" value="60" {{ (old('p2_1') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_1" value="80" {{ (old('p2_1') == '95') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_1" value="95" {{ (old('p2_1') == '95') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_1" value="100" {{ (old('p2_1') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">Mi participación fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_2" value="50" {{ (old('p2_2') == '50') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_2" value="60" {{ (old('p2_2') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_2" value="80" {{ (old('p2_2') == '95') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_2" value="95" {{ (old('p2_2') == '95') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_2" value="100" {{ (old('p2_2') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">Mi actitud durante el curso fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_3" value="50" {{ (old('p2_3') == '50') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_3" value="60" {{ (old('p2_3') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_3" value="80" {{ (old('p2_3') == '95') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_3" value="95" {{ (old('p2_3') == '95') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_3" value="100" {{ (old('p2_3') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La forma en la que aprovecharé este curso será</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_4" value="50" {{ (old('p2_4') == '50') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_4" value="60" {{ (old('p2_4') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_4" value="80" {{ (old('p2_4') == '95') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_4" value="95" {{ (old('p2_4') == '98') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_4" value="100" {{ (old('p2_4') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    </table>
                    <br>
                    <table class="table table-hover">
                    <tr>
                        <th width="42%" align="justify">3. COORDINACIÓN DEL CURSO</th>
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
                                <input type="radio" name="p3_1" value="20" {{ (old('p3_1') == '50') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_1" value="40" {{ (old('p3_1') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_1" value="60" {{ (old('p3_1') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_1" value="80" {{ (old('p3_1') == '95') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_1" value="100" {{ (old('p3_1') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La calidad del servicio en cuanto a trato personal fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_2" value="20" {{ (old('p3_2') == '50') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_2" value="40" {{ (old('p3_2') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_2" value="60" {{ (old('p3_2') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_2" value="80" {{ (old('p3_2') == '95') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_2" value="100" {{ (old('p3_2') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La calidad del servicio en cuanto a instalaciones, ventilación, ilumniación, mobiliario y equipo fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_3" value="20" {{ (old('p3_3') == '50') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_3" value="40" {{ (old('p3_3') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_3" value="60" {{ (old('p3_3') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_3" value="80" {{ (old('p3_3') == '95') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_3" value="100" {{ (old('p3_3') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La limpieza, el orden y acústica de las instalaciones fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_4" value="20" {{ (old('p3_4') == '50') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_4" value="40" {{ (old('p3_4') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_4" value="60" {{ (old('p3_4') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_4" value="80" {{ (old('p3_4') == '95') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_4" value="100" {{ (old('p3_4') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    </table>
                    <br>
                    <table class="table table-hover">
                    <tr>
                        <th width="42%" align="justify">4. INSTRUCTOR(A) UNO</th>
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
                                <input type="radio" name="p4_1" value="50" {{ (old('p4_1') == '50') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_1" value="60" {{ (old('p4_1') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_1" value="80" {{ (old('p4_1') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_1" value="95" {{ (old('p4_1') == '95') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_1" value="100" {{ (old('p4_1') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La planeación y organización de las sesiones y lecturas de acuerdo a los temas fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_2" value="50" {{ (old('p4_2') == '50') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_2" value="60" {{ (old('p4_2') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_2" value="80" {{ (old('p4_2') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_2" value="95" {{ (old('p4_2') == '95') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_2" value="100" {{ (old('p4_2') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La puntualidad del instructor fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_3" value="50" {{ (old('p4_3') == '50') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_3" value="60" {{ (old('p4_3') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_3" value="80" {{ (old('p4_3') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_3" value="95" {{ (old('p4_3') == '95') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_3" value="100" {{ (old('p4_3') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La forma de utilizar el equipo y materiales de apoyo al curso fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_4" value="50" {{ (old('p4_4') == '50') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_4" value="60" {{ (old('p4_4') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_4" value="80" {{ (old('p4_4') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_4" value="95" {{ (old('p4_4') == '95') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_4" value="100" {{ (old('p4_4') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La manera de aclarar las dudas planteadas por los participantes fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_5" value="50" {{ (old('p4_5') == '50') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_5" value="60" {{ (old('p4_5') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_5" value="80" {{ (old('p4_5') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_5" value="95" {{ (old('p4_5') == '95') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_5" value="100" {{ (old('p4_5') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">Las técnicas grupales utilizadas por el (la) instructor(a) fueron</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_6" value="50" {{ (old('p4_6') == '50') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_6" value="60" {{ (old('p4_6') == '2¿40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_6" value="80" {{ (old('p4_6') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_6" value="95" {{ (old('p4_6') == '95') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_6" value="100" {{ (old('p4_6') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La forma de interesar a los participantes durante el curso fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_7" value="50" {{ (old('p4_7') == '50') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_7" value="60" {{ (old('p4_7') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_7" value="80" {{ (old('p4_7') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_7" value="95" {{ (old('p4_7') == '95') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_7" value="100" {{ (old('p4_7') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La actitud del (de la) instructor(a) fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_8" value="50" {{ (old('p4_8') == '50') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_8" value="60" {{ (old('p4_8') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_8" value="80" {{ (old('p4_8') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_8" value="95" {{ (old('p4_8') == '95') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_8" value="100" {{ (old('p4_8') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">El manejo de las relaciones interpersonales del instructor(a) fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_9" value="50" {{ (old('p4_9') == '50') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_9" value="60" {{ (old('p4_9') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_9" value="80" {{ (old('p4_9') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_9" value="95" {{ (old('p4_9') == '95') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_9" value="100" {{ (old('p4_9') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La calidad del trato humano hacia los participantes fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_10" value="50" {{ (old('p4_10') == '50') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_10" value="60" {{ (old('p4_10') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_10" value="80" {{ (old('p4_10') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_10" value="95" {{ (old('p4_10') == '95') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_10" value="100" {{ (old('p4_10') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">El manejo de las emociones en las sesiones por parte del instructor(a) fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_11" value="50" {{ (old('p4_11') == '50') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_11" value="60" {{ (old('p4_11') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_11" value="80" {{ (old('p4_11') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_11" value="95" {{ (old('p4_11') == '95') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_11" value="100" {{ (old('p4_11') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    </table>
                    <br>
                    
                    <table class="table table-hover">
                    <tr>
                        <th align="center">5. ¿RECOMENDARÍA EL CURSO A OTROS PROFESORES?</th>  
                    </tr>
                    <tr>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p7" value="1" {{ (old('p7') == '1') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked"> Sí
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p7" value="0" {{ (old('p7') == '0') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked"> No
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
                                <input width="20%" name="p8[]" type="checkbox" class="form-check-input" id="materialUnchecked" value="1" @if(is_array(old('p8[]')) && in_array('1', old('p8[]'))) checked @endif> Internet
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input name="p8[]" type="checkbox" class="form-check-input" id="materialUnchecked" vallue="2" @if(is_array(old('p8[]')) && in_array('2', old('p8[]'))) checked @endif> Publicidad de la FI
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input name="p8[]" type="checkbox" class="form-check-input" id="materialUnchecked" vallue="3" @if(is_array(old('p8[]')) && in_array('3', old('p8[]'))) checked @endif> Jefes de División
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input name="p8[]" type="checkbox" class="form-check-input" id="materialUnchecked" vallue="4" @if(is_array(old('p8[]')) && in_array('4', old('p8[]'))) checked @endif> Otro
                            </div><input name="p8[]" type="otro" class="form-control" id="otro" placeholder="Otro">
                        </td>
                        </tr>
                    </table>
                    <table class="table table-hover">
                        <tr>
                            <td width="40%" align="justify">Lo mejor del curso fue: </td>
                            <td><textarea name="mejor" class="form-control" id="contenido" rows="2" value={{old('mejor')}}></textarea></td>
                        </tr>
                        <tr>
                            <td width="40%" align="justify">Sugerencias y recomendaciones: </td>
                            <td><textarea name="sug" class="form-control" id="sugerencias" rows="2" value={{old('sug')}}></textarea></td>
                        </tr>
                        <tr>
                            <td width="40%" align="justify">¿Qué otros cursos, talleres, seminarios o temáticos le gustaría que se impartiesen o tomasen en cuenta para próximas actividades? </td>
                            <td><textarea name="otros" class="form-control" id="sugerencias" rows="2" value={{old('otros')}}></textarea></td>
                        </tr>
                    </table> 
                    <table class="table table-hover">
                        <tr>
                        <th>ÁREA DE CONOCIMIENTO</th>
                        </tr>
                        <tr>
                            <td><div class="form-check">
                                <input name="conocimiento[]" type="checkbox" class="form-check-input" id="materialUnchecked" value="1" {{(is_array(old('conocimiento[]')) && in_array('1', old('conocimiento[]'))) ? 'checked':'' }}> Didáctico Pedagógico
                            </div></td>
                            <td><div class="form-check">
                                <input name="conocimiento[]" type="checkbox" class="form-check-input" id="materialUnchecked" value="2" {{(is_array(old('conocimiento[]')) && in_array('2', old('conocimiento[]'))) ? 'checked':'' }}> Desarrollo humano
                            </div></td>
                            <td><div class="form-check">
                                <input name="conocimiento[]" type="checkbox" class="form-check-input" id="materialUnchecked" value="3" {{(is_array(old('conocimiento[]')) && in_array('3', old('conocimiento[]'))) ? 'checked':'' }}> Cómputo
                            </div></td>
                            <td><div class="form-check">
                                <input name="conocimiento[]" type="checkbox" class="form-check-input" id="materialUnchecked" value="4" {{(is_array(old('conocimiento[]')) && in_array('4', old('conocimiento[]'))) ? 'checked':'' }}> Disciplinar
                            </div></td>
                            <td><div class="form-check">
                                <input name="conocimiento[]" type="checkbox" class="form-check-input" id="materialUnchecked" value="5" {{(is_array(old('conocimiento[]')) && in_array('5', old('conocimiento[]'))) ? 'checked':'' }}> Otro
                            </div></td>
                        </tr>
                    </table>   
                    <br>
                    <table class="table table-hover">
                        <tr>
                            <td width="40%" align="justify">Temáticas: </td>
                            <td><textarea name="tematica" class="form-control" id="contenido" rows="2" value="{{old('tematica')}}"></textarea></td>
                        </tr>
                        
                        <tr>
                            <tr>
                                <td><label for="">¿En qué horarios le gustaría que se impartiesen los cursos, talleres, seminarios o diplomados?</label></td>
                            </tr>
                            <td width="40%" align="justify">Horarios Semestrales: </td>
                            <td><input name="horarios" type="text" class="form-control" id="semestral" placeholder=""  value="{{old('horarios')}}"></td>
                        </tr>
                        <tr>
                            <td width="40%" align="justify">Horarios Intersemestrales: </td>
                            <td><input name="horarioi" type="text" class="form-control" id="intersemestral" placeholder="" value="{{old('horarioi')}}"></td></td>
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