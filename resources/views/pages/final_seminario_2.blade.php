<!-- Guardado en resources/views/pages/xsesion.blade.php -->

@extends('layouts.principal')

@section('contenido')
  <!--Body content-->
  <form method="POST" action="{{ action('EvaluacionController@saveFinal_Seminario',['profesor_id' => $profesor->id,'curso_id'=> $curso->id,  'catalogoCurso_id'=>$catalogoCurso->id ]) }}">
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
                    <h2><span class="fa fa-check-square-o"></span>    Evaluación final de seminario </h3>
                </div>

                <div class="panel-body">
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-10">
                        <h4> Seminario:  {{ $catalogoCurso->nombre_curso }}</h4>
                        </div>
                    </div>
                    <div class="form-group row">
                            <div class="col-sm-10">
                                <h4>Facilitador: {{ $curso->getProfesores() }}</h4>
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
                        <th width="42%" align="justify">1. DESAROLLO DEL SEMINARIO</th>
                        <th align="right">Mala</th>
                        <th align="right">Regular</th>
                        <th align="right">Buena</th>
                        <th align="right">Muy buena</th>
                        <th align="right">Excelente</th>
                    </tr>
                    <tr>
                        <td align="justify">La participación de los asistentes fue </td>
                        <td align="center">
                        <div class="form-check">
                                <input type="radio" name="p1_1" value="20"  {{ (old('p1_1') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_1" value="40"  {{ (old('p1_1') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_1" value="60"  {{ (old('p1_1') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_1" value="80"  {{ (old('p1_1') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_1" value="100"  {{ (old('p1_1') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La temática central del seminario fue</td>
                        <td align="center">
                        <div class="form-check">
                                <input type="radio" name="p1_2" value="20"  {{ (old('p1_2') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_2" value="40"  {{ (old('p1_2') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_2" value="60"  {{ (old('p1_2') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_2" value="80"  {{ (old('p1_2') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_2" value="100"  {{ (old('p1_2') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La información útil que aportó el seminario a su práctica docente fue</td>
                        <td align="center">
                        <div class="form-check">
                                <input type="radio" name="p1_3" value="20" {{ (old('p1_3') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_3" value="40" {{ (old('p1_3') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_3" value="60" {{ (old('p1_3') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_3" value="80" {{ (old('p1_3') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_3" value="100" {{ (old('p1_3') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La moderación del seminario se desarrolló de manera</td>
                        <td align="center">
                        <div class="form-check">
                                <input type="radio" name="p1_4" value="20" {{ (old('p1_4') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_4" value="40" {{ (old('p1_4') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_4" value="60" {{ (old('p1_4') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_4" value="80" {{ (old('p1_4') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_4" value="100" {{ (old('p1_4') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">Las conclusiones a las que se llegó en el seminario son aplicables en mi desarrollo académico de forma</td>
                        <td align="center">
                        <div class="form-check">
                                <input type="radio" name="p1_5" value="20" {{ (old('p1_5') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_5" value="40" {{ (old('p1_5') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_5" value="60" {{ (old('p1_5') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_5" value="80" {{ (old('p1_5') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
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
                                    <input type="radio" name="p2_1" value="20" {{ (old('p2_1') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p2_1" value="40" {{ (old('p2_1') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p2_1" value="60" {{ (old('p2_1') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p2_1" value="80" {{ (old('p2_1') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
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
                                    <input type="radio" name="p2_2" value="20" {{ (old('p2_2') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p2_2" value="40" {{ (old('p2_2') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p2_2" value="60" {{ (old('p2_2') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p2_2" value="80" {{ (old('p2_2') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p2_2" value="100" {{ (old('p2_2') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                    </tr>
                    <tr>
                        <td align="justify">Mi actitud durante el seminario fue</td>
                        <td align="center">
                        <div class="form-check">
                                    <input type="radio" name="p2_3" value="20" {{ (old('p2_3') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p2_3" value="40" {{ (old('p2_3') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p2_3" value="60" {{ (old('p2_3') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p2_3" value="80" {{ (old('p2_3') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p2_3" value="100" {{ (old('p2_3') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                    </tr>
                    <tr>
                        <td align="justify">Mi asimilación en este seminario</td>
                        <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p2_4" value="20" {{ (old('p2_4') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p2_4" value="40" {{ (old('p2_4') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p2_4" value="60" {{ (old('p2_4') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p2_4" value="80" {{ (old('p2_4') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
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
                        <th width="42%" align="justify">3. COORDINACIÓN DEL SEMINARIO</th>
                        <th align="right">Mala</th>
                        <th align="right">Regular</th>
                        <th align="right">Buena</th>
                        <th align="right">Muy buena</th>
                        <th align="right">Excelente</th>
                    </tr>
                    <tr>
                        <td align="justify">La coordinación del seminario desde su difusión, inscripción, hasta el cierre fue </td>
                        <td align="center">
                            <div class="form-check">
                                        <input type="radio" name="p3_1" value="20" {{ (old('p3_1') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                    </div>
                                </td>
                                <td align="center">
                                    <div class="form-check">
                                        <input type="radio" name="p3_1" value="40" {{ (old('p3_1') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                    </div>
                                </td>
                                <td align="center">
                                    <div class="form-check">
                                        <input type="radio" name="p3_1" value="60" {{ (old('p3_1') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                    </div>
                                </td>
                                <td align="center">
                                    <div class="form-check">
                                        <input type="radio" name="p3_1" value="80" {{ (old('p3_1') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
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
                                        <input type="radio" name="p3_2" value="20" {{ (old('p3_2') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                    </div>
                                </td>
                                <td align="center">
                                    <div class="form-check">
                                        <input type="radio" name="p3_2" value="40" {{ (old('p3_2') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                    </div>
                                </td>
                                <td align="center">
                                    <div class="form-check">
                                        <input type="radio" name="p3_2" value="60" {{ (old('p3_2') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                    </div>
                                </td>
                                <td align="center">
                                    <div class="form-check">
                                        <input type="radio" name="p3_2" value="80" {{ (old('p3_2') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
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
                                        <input type="radio" name="p3_3" value="20" {{ (old('p3_3') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                    </div>
                                </td>
                                <td align="center">
                                    <div class="form-check">
                                        <input type="radio" name="p3_3" value="40" {{ (old('p3_3') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                    </div>
                                </td>
                                <td align="center">
                                    <div class="form-check">
                                        <input type="radio" name="p3_3" value="60" {{ (old('p3_3') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                    </div>
                                </td>
                                <td align="center">
                                    <div class="form-check">
                                        <input type="radio" name="p3_3" value="80" {{ (old('p3_3') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
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
                                        <input type="radio" name="p3_4" value="20" {{ (old('p3_4') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                    </div>
                                </td>
                                <td align="center">
                                    <div class="form-check">
                                        <input type="radio" name="p3_4" value="40" {{ (old('p3_4') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                    </div>
                                </td>
                                <td align="center">
                                    <div class="form-check">
                                        <input type="radio" name="p3_4" value="60" {{ (old('p3_4') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                    </div>
                                </td>
                                <td align="center">
                                    <div class="form-check">
                                        <input type="radio" name="p3_4" value="80" {{ (old('p3_4') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
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
                        <th width="42%" align="justify">4. FACILITADOR(A) DEL SEMINARIO UNO</th>
                        <th align="right">Mala</th>
                        <th align="right">Regular</th>
                        <th align="right">Buena</th>
                        <th align="right">Muy buena</th>
                        <th align="right">Excelente</th>
                    </tr>
                    <tr>
                        <td align="justify">Considero la experiencia del facilitador como </td>
                        <td align="center">
                        <div class="form-check">
                                    <input type="radio" name="p4_1" value="20" {{ (old('p4_1') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p4_1" value="40" {{ (old('p4_1') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
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
                                    <input type="radio" name="p4_1" value="100" {{ (old('p4_1') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                    </tr>
                    <tr>
                        <td align="justify">La planeación y organización de las sesiones y lecturas de acuerdo a los temas fue</td>
                        <td align="center">
                        <div class="form-check">
                                    <input type="radio" name="p4_2" value="20" {{ (old('p4_2') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p4_2" value="40" {{ (old('p4_2') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
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
                                    <input type="radio" name="p4_2" value="100" {{ (old('p4_2') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                    </tr>
                    <tr>
                        <td align="justify">La puntualidad del facilitador fue</td>
                        <td align="center">
                        <div class="form-check">
                                    <input type="radio" name="p4_3" value="20" {{ (old('p4_3') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p4_3" value="40" {{ (old('p4_3') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
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
                                    <input type="radio" name="p4_3" value="100" {{ (old('p4_3') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                    </tr>
                    <tr>
                        <td align="justify">La forma de utilizar el equipo y materiales de apoyo al seminario fue</td>
                        <td align="center">
                        <div class="form-check">
                                    <input type="radio" name="p4_4" value="20" {{ (old('p4_4') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p4_4" value="40" {{ (old('p4_4') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
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
                                    <input type="radio" name="p4_4" value="100" {{ (old('p4_4') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                    </tr>
                    <tr>
                        <td align="justify">La manera de aclarar las dudas planteadas por los participantes fue</td>
                        <td align="center">
                        <div class="form-check">
                                    <input type="radio" name="p4_5" value="20" {{ (old('p4_5') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p4_5" value="40" {{ (old('p4_5') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
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
                                    <input type="radio" name="p4_5" value="100" {{ (old('p4_5') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                    </tr>
                    <tr>
                        <td align="justify">El manejo del control de grupo por parte del facilitador fue</td>
                        <td align="center">
                        <div class="form-check">
                                    <input type="radio" name="p4_6" value="20" {{ (old('p4_6') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p4_6" value="40" {{ (old('p4_6') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p4_6" value="60" {{ (old('p4_6') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p4_6" value="80" {{ (old('p4_6') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
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
                                    <input type="radio" name="p4_7" value="20" {{ (old('p4_7') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p4_7" value="40" {{ (old('p4_7') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
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
                                    <input type="radio" name="p4_7" value="100" {{ (old('p4_7') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                    </tr>
                    <tr>
                        <td align="justify">La actitud del facilitador(a) fue</td>
                        <td align="center">
                        <div class="form-check">
                                    <input type="radio" name="p4_8" value="20" {{ (old('p4_8') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p4_8" value="40" {{ (old('p4_8') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
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
                                    <input type="radio" name="p4_8" value="100" {{ (old('p4_8') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                    </tr>
                    <tr>
                        <td align="justify">El manejo de las relaciones interpersonales del facilitador(a) fue</td>
                        <td align="center">
                        <div class="form-check">
                                    <input type="radio" name="p4_9" value="20" {{ (old('p4_9') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p4_9" value="40" {{ (old('p4_9') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
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
                                    <input type="radio" name="p4_9" value="100" {{ (old('p4_9') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                    </tr>
                    <tr>
                        <td align="justify">La calidad del trato humano hacia los participantes fue</td>
                        <td align="center">
                        <div class="form-check">
                                    <input type="radio" name="p4_10" value="20" {{ (old('p4_10') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p4_10" value="40" {{ (old('p4_10') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
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
                                    <input type="radio" name="p4_10" value="100" {{ (old('p4_10') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                    </tr>
                    <tr>
                        <td align="justify">El manejo de las emociones en las sesiones por parte del facilitador(a) fue</td>
                        <td align="center">
                        <div class="form-check">
                                    <input type="radio" name="p4_11" value="20" {{ (old('p4_11') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p4_11" value="40" {{ (old('p4_11') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
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
                                    <input type="radio" name="p4_11" value="100" {{ (old('p4_11') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                    </tr>
                    </table>

                    <br>
                    <table class="table table-hover">
                    <tr>
                        <th width="42%" align="justify">5. FACILITADOR(A) DEL SEMINARIO DOS</th>
                        <th align="right">Mala</th>
                        <th align="right">Regular</th>
                        <th align="right">Buena</th>
                        <th align="right">Muy buena</th>
                        <th align="right">Excelente</th>
                    </tr>
                    <tr>
                        <td align="justify">Considero la experiencia del facilitador como </td>
                        <td align="center">
                        <div class="form-check">
                                    <input type="radio" name="p5_1" value="20" {{ (old('p5_1') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_1" value="40" {{ (old('p5_1') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_1" value="60" {{ (old('p5_1') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_1" value="80" {{ (old('p5_1') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_1" value="100" {{ (old('p5_1') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                    </tr>
                    <tr>
                        <td align="justify">La planeación y organización de las sesiones y lecturas de acuerdo a los temas fue</td>
                        <td align="center">
                        <div class="form-check">
                                    <input type="radio" name="p5_2" value="20" {{ (old('p5_2') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_2" value="40" {{ (old('p5_2') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_2" value="60" {{ (old('p5_2') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_2" value="80" {{ (old('p5_2') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_2" value="100" {{ (old('p5_2') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                    </tr>
                    <tr>
                        <td align="justify">La puntualidad del facilitador fue</td>
                        <td align="center">
                        <div class="form-check">
                                    <input type="radio" name="p5_3" value="20" {{ (old('p5_3') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_3" value="40" {{ (old('p5_3') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_3" value="60" {{ (old('p5_3') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_3" value="80" {{ (old('p5_3') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_3" value="100" {{ (old('p5_3') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                    </tr>
                    <tr>
                        <td align="justify">La forma de utilizar el equipo y materiales de apoyo al seminario fue</td>
                        <td align="center">
                        <div class="form-check">
                                    <input type="radio" name="p5_4" value="20" {{ (old('p5_4') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_4" value="40" {{ (old('p5_4') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_4" value="60" {{ (old('p5_4') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_4" value="80" {{ (old('p5_4') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_4" value="100" {{ (old('p5_4') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                    </tr>
                    <tr>
                        <td align="justify">La manera de aclarar las dudas planteadas por los participantes fue</td>
                        <td align="center">
                        <div class="form-check">
                                    <input type="radio" name="p5_5" value="20" {{ (old('p5_5') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_5" value="40" {{ (old('p5_5') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_5" value="60" {{ (old('p5_5') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_5" value="80" {{ (old('p5_5') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_5" value="100" {{ (old('p5_5') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                    </tr>
                    <tr>
                        <td align="justify">El manejo del control de grupo por parte del facilitador fue</td>
                        <td align="center">
                        <div class="form-check">
                                    <input type="radio" name="p5_6" value="20" {{ (old('p5_6') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_6" value="40" {{ (old('p5_6') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_6" value="60" {{ (old('p5_6') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_6" value="80" {{ (old('p5_6') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_6" value="100" {{ (old('p5_6') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                    </tr>
                    <tr>
                        <td align="justify">La forma de interesar a los participantes durante el curso fue</td>
                        <td align="center">
                        <div class="form-check">
                                    <input type="radio" name="p5_7" value="20" {{ (old('p5_7') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_7" value="40" {{ (old('p5_7') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_7" value="60" {{ (old('p5_7') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_7" value="80" {{ (old('p5_7') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_7" value="100" {{ (old('p5_7') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                    </tr>
                    <tr>
                        <td align="justify">La actitud del facilitador(a) fue</td>
                        <td align="center">
                        <div class="form-check">
                                    <input type="radio" name="p5_8" {{ (old('p5_8') == '20') ? 'checked' : '' }} value="20" class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_8" {{ (old('p5_8') == '40') ? 'checked' : '' }} value="40" class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_8" {{ (old('p5_8') == '60') ? 'checked' : '' }} value="60" class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_8" {{ (old('p5_8') == '80') ? 'checked' : '' }} value="80" class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_8" {{ (old('p5_8') == '100') ? 'checked' : '' }} value="100" class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                    </tr>
                    <tr>
                        <td align="justify">El manejo de las relaciones interpersonales del facilitador(a) fue</td>
                        <td align="center">
                        <div class="form-check">
                                    <input type="radio" name="p5_9" {{ (old('p5_9') == '20') ? 'checked' : '' }} value="20" class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_9" value="40" {{ (old('p5_9') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_9" value="60" {{ (old('p5_9') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_9" value="80" {{ (old('p5_9') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_9" value="100" {{ (old('p5_8') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                    </tr>
                    <tr>
                        <td align="justify">La calidad del trato humano hacia los participantes fue</td>
                        <td align="center">
                        <div class="form-check">
                                    <input type="radio" name="p5_10" value="20" {{ (old('p5_10') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_10" value="40" {{ (old('p5_10') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_10" value="60" {{ (old('p5_10') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_10" value="80" {{ (old('p5_10') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_10" value="100" {{ (old('p5_10') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                    </tr>
                    <tr>
                        <td align="justify">El manejo de las emociones en las sesiones por parte del facilitador(a) fue</td>
                        <td align="center">
                        <div class="form-check">
                                    <input type="radio" name="p5_11" value="20" {{ (old('p5_11') == '20') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_11" value="40" {{ (old('p5_11') == '40') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_11" value="60" {{ (old('p5_11') == '60') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_11" value="80" {{ (old('p5_11') == '80') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="radio" name="p5_11" value="100" {{ (old('p5_11') == '100') ? 'checked' : '' }} class="form-check-input" id="materialUnchecked">
                                </div>
                            </td>
                    </tr>
                    </table>

                    <br>
                    <table class="table table-hover">
                    <tr>
                        <th align="center">6. ¿RECOMENDARÍA EL SEMINARIO A OTROS PROFESORES?</th>  
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
                        <th align="center">7. ¿CÓMO SE ENTERÓ DEL SEMINARIO?</th>
                        </tr>
                        <tr>
                        <td>
                        <div class="form-check">
                                <input width="20%" name="p8[]" type="checkbox" class="form-check-input" id="materialUnchecked" value="1"> Internet
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input name="p8[]" type="checkbox" class="form-check-input" id="materialUnchecked" value="2"> Publicidad de la FI
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input name="p8[]" type="checkbox" class="form-check-input" id="materialUnchecked" value="3"> Jefes de División
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input name="p8[]" type="checkbox" class="form-check-input" id="materialUnchecked" value="4"> Otro
                            </div><input name="p8[]" type="otro" class="form-control" id="otro" placeholder="Otro">
                        </td>
                        </tr>
                    </table>
                    <table class="table table-hover">
                        <tr>
                            <td width="40%" align="justify">Lo que me aportó el seminario fue: </td>
                            <td><textarea name="aporto" class="form-control" id="contenido" rows="2"></textarea></td>
                        </tr>
                        <tr>
                            <td width="40%" align="justify">Sugerencias y recomendaciones: </td>
                            <td><textarea name="sug" class="form-control" id="sugerencias" rows="2"></textarea></td>
                        </tr>
                        <tr>
                            <td width="40%" align="justify">¿Qué otros cursos, talleres, seminarios o temáticos le gustaría que se impartiesen o tomasen en cuenta para próximas actividades? </td>
                            <td><textarea name="otros" class="form-control" id="sugerencias" rows="2"></textarea></td>
                        </tr>
                    </table> 
                    <table class="table table-hover">
                        <tr>
                        <th>ÁREA DE CONOCIMIENTO</th>
                        </tr>
                        <tr>
                            <td><div class="form-check">
                                <input name="conocimiento[]" type="checkbox" class="form-check-input" id="materialUnchecked" value="1"> Didáctico Pedagógico
                            </div></td>
                            <td><div class="form-check">
                                <input name="conocimiento[]" type="checkbox" class="form-check-input" id="materialUnchecked" value="2"> Desarrollo humano
                            </div></td>
                            <td><div class="form-check">
                                <input name="conocimiento[]" type="checkbox" class="form-check-input" id="materialUnchecked" value="3"> Cómputo
                            </div></td>
                            <td><div class="form-check">
                                <input name="conocimiento[]" type="checkbox" class="form-check-input" id="materialUnchecked" value="4"> Disciplinar
                            </div></td>
                            <td><div class="form-check">
                                <input name="conocimiento[]" type="checkbox" class="form-check-input" id="materialUnchecked" value="5"> Otro
                            </div></td>
                        </tr>
                    </table>   
                    <br>
                    <table class="table table-hover">
                        <tr>
                            <td width="40%" align="justify">Temáticas: </td>
                            <td><textarea name="tematica" class="form-control" id="contenido" rows="2"></textarea></td>
                        </tr>
                        
                        <tr>
                            <tr>
                                <td><label for="">¿En qué horarios le gustaría que se impartiesen los cursos, talleres, seminarios o diplomados?</label></td>
                            </tr>
                            <td width="40%" align="justify">Horarios Semestrales: </td>
                            <td><input name="horarios" type="text" class="form-control" id="semestral" placeholder=""></td>
                        </tr>
                        <tr>
                            <td width="40%" align="justify">Horarios Intersemestrales: </td>
                            <td><input name="horarioi" type="text" class="form-control" id="intersemestral" placeholder=""></td></td>
                        </tr>
                    </table>
                    <button type="submit" class="btn btn-primary active">Enviar evaluación</button>
                    
                
                
                </div>
     </section>
     <br>
     </form>
   
@endsection