<!-- Guardado en resources/views/pages/xsesion.blade.php -->
@extends('layouts.principal')

@section('contenido')
  <!--Body content-->
<form method="POST" action="final.curso">
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
                <div class="panel-heading">
                    <h2><span class="fa fa-check-square-o"></span>    Evaluación final de curso </h3>
                </div>

                <div class="panel-body">
                    <br>
                    <div class="form-group row">
                        <label for="staticCurso" class="col-sm-2 col-form-label">Nombre del curso</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="curso" value="Nombre Curso">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticParticipante" class="col-sm-2 col-form-label">Nombre del participante</label>
                        <div class="col-md-10">
                            <input type="text" readonly class="form-control-plaintext" id="participante" value="Nombre Participante">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticInstructor" class="col-sm-2 col-form-label">Nombre del instructor</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="instructor" value="Nombre Instructor">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticFecha" class="col-sm-2 col-form-label">Fecha</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="fecha" value="fecha">
                        </div>
                        <br><br>
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
                                <input type="radio" name="p1_1" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_1" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_1" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_1" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_1" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La suficiencia de los contenidos para el logro de los objetivos propuestos fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_2" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_2" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_2" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_2" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_2" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La utilidad del material proporcionado durante el curso fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_3" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_3" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_3" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_3" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_3" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La motivación para el estudio independiente de las sesiones fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_4" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_4" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_4" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_4" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_4" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La aplicación de los temas tratados en mi desarrollo académico es</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_5" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_5" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_5" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_5" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p1_5" value="5" class="form-check-input" id="materialUnchecked">
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
                                <input type="radio" name="p2_1" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_1" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_1" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_1" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_1" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">Mi participación fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_2" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_2" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_2" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_2" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_2" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">Mi actitud durante el curso fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_3" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_3" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_3" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_3" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_3" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La forma en la que aprovecharé este curso será</td>
                        <<td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_4" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_4" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_4" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_4" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p2_4" value="5" class="form-check-input" id="materialUnchecked">
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
                                <input type="radio" name="p3_1" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_1" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_1" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_1" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_1" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La calidad del servicio en cuanto a trato personal fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_2" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_2" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_2" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_2" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_2" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La calidad del servicio en cuanto a instalaciones, ventilación, ilumniación, mobiliario y equipo fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_3" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_3" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_3" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_3" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_3" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La limpieza, el orden y acústica de las instalaciones fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_4" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_4" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_4" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_4" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p3_4" value="5" class="form-check-input" id="materialUnchecked">
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
                                <input type="radio" name="p4_1" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_1" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_1" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_1" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_1" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La planeación y organización de las sesiones y lecturas de acuerdo a los temas fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_2" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_2" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_2" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_2" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_2" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La puntualidad del instructor fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_3" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_3" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_3" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_3" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_3" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La forma de utilizar el equipo y materiales de apoyo al curso fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_4" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_4" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_4" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_4" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_4" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La manera de aclarar las dudas planteadas por los participantes fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_5" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_5" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_5" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_5" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_5" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">Las técnicas grupales utilizadas por el (la) instructor(a) fueron</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_6" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_6" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_6" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_6" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_6" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La forma de interesar a los participantes durante el curso fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_7" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_7" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_7" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_7" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_7" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La actitud del (de la) instructor(a) fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_8" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_8" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_8" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_8" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_8" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">El manejo de las relaciones interpersonales del instructor(a) fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_9" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_9" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_9" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_9" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_9" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La calidad del trato humano hacia los participantes fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_10" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_10" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_10" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_10" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_10" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">El manejo de las emociones en las sesiones por parte del instructor(a) fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_11" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_11" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_11" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_11" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p4_11" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    </table>
                    <br>
                    <table class="table table-hover">
                    <tr>
                        <th width="42%" align="justify">5. INSTRUCTOR(A) DOS</th>
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
                                <input type="radio" name="p5_1" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_1" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_1" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_1" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_1" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La planeación y organización de las sesiones y lecturas de acuerdo a los temas fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_2" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_2" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_2" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_2" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_2" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La puntualidad del instructor fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_3" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_3" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_3" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_3" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_3" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La forma de utilizar el equipo y materiales de apoyo al curso fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_4" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_4" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_4" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_4" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_4" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La manera de aclarar las dudas planteadas por los participantes fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_5" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_5" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_5" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_5" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_5" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">Las técnicas grupales utilizadas por el (la) instructor(a) fueron</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_6" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_6" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_6" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_6" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_6" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La forma de interesar a los participantes durante el curso fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_7" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_7" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_7" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_7" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_7" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La actitud del (de la) instructor(a) fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_8" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_8" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_8" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_8" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_8" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">El manejo de las relaciones interpersonales del instructor(a) fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_9" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_9" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_9" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_9" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_9" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">La calidad del trato humano hacia los participantes fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_10" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_10" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_10" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_10" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_10" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">El manejo de las emociones en las sesiones por parte del instructor(a) fue</td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_11" value="1" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_11" value="2" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_11" value="3" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_11" value="4" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p5_11" value="5" class="form-check-input" id="materialUnchecked">
                            </div>
                        </td>
                    </tr>
                    </table>
                    <br>
                    
                    <table class="table table-hover">
                    <tr>
                        <th align="center">6. ¿RECOMENDARÍA EL CURSO A OTROS PROFESORES?</th>  
                    </tr>
                    <tr>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p6" value="1" class="form-check-input" id="materialUnchecked"> Sí
                            </div>
                        </td>
                        <td align="center">
                            <div class="form-check">
                                <input type="radio" name="p6" value="1" class="form-check-input" id="materialUnchecked"> No
                            </div>
                        </td>
                    </tr>
                    </table>
                    <br>
                    <table class="table table-hover">
                        <tr>
                        <th align="center">7. ¿CÓMO SE ENTERÓ DEL CURSO?</th>
                        </tr>
                        <tr>
                        <td>
                            <div class="form-check">
                                <input width="20%" name="p7[]" type="checkbox" class="form-check-input" id="materialUnchecked"> Internet
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input name="p7[]" type="checkbox" class="form-check-input" id="materialUnchecked"> Publicidad de la FI
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input name="p7[]" type="checkbox" class="form-check-input" id="materialUnchecked"> Jefes de División
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input name="p7[]" type="checkbox" class="form-check-input" id="materialUnchecked"> Otro
                            </div><input name="p7[]" type="otro" class="form-control" id="otro" placeholder="Otro">
                        </td>
                        </tr>
                    </table>
                    <table class="table table-hover">
                        <tr>
                            <td width="40%" align="justify">Lo mejor del curso fue: </td>
                            <td><textarea name="mejor" class="form-control" id="contenido" rows="2"></textarea></td>
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
                                <input name="conocimiento[]" type="checkbox" class="form-check-input" id="materialUnchecked"> Didáctico Pedagógico
                            </div></td>
                            <td><div class="form-check">
                                <input name="conocimiento[]" type="checkbox" class="form-check-input" id="materialUnchecked"> Desarrollo humano
                            </div></td>
                            <td><div class="form-check">
                                <input name="conocimiento[]" type="checkbox" class="form-check-input" id="materialUnchecked"> Cómputo
                            </div></td>
                            <td><div class="form-check">
                                <input name="conocimiento[]" type="checkbox" class="form-check-input" id="materialUnchecked"> Otro
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
                    <button type="button" class="btn btn-primary active">Enviar evaluación</button>
                </div>
    
     </section>
     <br>
     </form>
     @endsection