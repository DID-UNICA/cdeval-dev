<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Evaluación global</title>
</head>
<style>
    html{
	    width:100%;
    }
    .margen{
        border: 1px solid #ddd;  
        font-family:Arial, Helvetica, Sans-serif,cursive;   
        font-size: 12px;    
    }
    .margen2{
        border: 1px solid black;        
    }
    #tabla_encabezado{
        border-collapse: collapse;
        border: 1px solid #ddd;
        height: 50px;
        width:100%;
    }
    #tabla_encabezado_debajo{
        border-collapse: collapse;
        border: 1px solid #ddd;
        height: 5%;
        width:100%;
        text-align:center;
        font-family:Arial, Helvetica, Sans-serif,cursive; 
        font-size: 9px;
    }
    #tabla_lista{
        border-collapse: collapse;
        border: 1px solid black;
        height: 5%;
        width:100%;
        text-align:left;
        font-family:Arial, Helvetica, Sans-serif,cursive; 
        font-size: 11px;
    }
    #encabezado{
        font-family:Arial, Helvetica, Sans-serif,cursive; 
        text-align: center;
        font-size: 12px;
        line-height:90%;
    }
    #imagen_izquierda{
        margin-left: 15%;
    }
    #imagen_derecha{
        margin-left: 14%;
    }
    .titulos{
        font-family:Arial, Helvetica, Sans-serif,cursive; 
        font-size: 13px;
        font-weight: bold;
        background-color: #B4B0B0;

    }
    .inicial{
        font-family:Arial, Helvetica, Sans-serif,cursive; 
        font-size: 13px;
        font-weight: bold;  
    }
    .valores{
        font-family:Arial, Helvetica, Sans-serif,cursive; 
        font-size: 11px;
    }
    .tipo{
        font-family:Arial, Helvetica, Sans-serif,cursive; 
        font-size: 14px;
        font-weight: bold;
    }
   .mayus{
        text-transform: uppercase;
    }
    .firma{
        text-align:center;
        vertical-align:top;
        line-height: 80%;
    }
    .firma1{
        text-align:center;
        vertical-align:top;
        padding-bottom: 1.5%;
        line-height: 100%;
    }
</style>
<body>
	<div>
		<table  id="tabla_encabezado">
				<td width= 12% class="margen">
                    <img id="imagen_izquierda"  src="img/fi_2.png" height="80">
				</td>
				<td width= 58% id="encabezado" class="margen" style="line-height=20px">
			        FACULTAD DE INGENIERÍA, UNAM<br/>
			        Secretaria de Apoyo a la Docencia<br>
			        Centro de Docencia "Ing. Gilberto Borja Navarrete"<br/>
			        Sistema de Gestión de la Calidad<br/>
			        Norma ISO 9001-2015<br/>
			        Formato
				</td>
				<td width= 12% class="margen">
                    <img id="imagen_derecha" src="img/cdd.png" height="80">
				</td>
		</table>
        <table id="tabla_encabezado_debajo">
				<td width="20%" class="margen">
					2730-SGC-IC-FO-11
				</td>
				<td  class="margen">
					Fecha de emisión:
				</td>
				<td class="margen">
                    2017-06-08
				</td>
				<td class="margen">
					Versión
				</td>
				<td class="margen">
					2
				</td>
				<td width="20%" class="margen">
					Página 1 de 1
				</td>
		</table>
        <h5 class="inicial">Reporte global de los cursos impartidos</h5>

        <br>
        <table style="width: 100%">
            <tr>
                <th class="titulos" align= left >  1. NOMBRE DE LOS CURSOS EVALUADOS</th>
            </tr>
            <tr>
                <td class="margen">
                    <!--<ol type=”A”>-->
                        <?php 
                            $num = 1;
                            foreach($nombres as $nombre){
                                echo "<dd style=\"line-height:1.3\">&nbsp;$num. $nombre</dd>";
                                $num++;
                            }
                        ?>
                    <!--</ol>-->
                </td>
            </tr>

		</table> 
        <br>

        <table style="width: 100%">
            <tr>
                <th colspan="4" class="titulos" align= left >2. REGISTRO DE PARTICIPANTES</th>
            </tr>
            <tr>
                <td class="margen">a) Periodo de evaluación: </td>
                <td class="margen">  {{$periodo}}</td>  </td>
                <td class="margen">d) Número de participantes que acreditaron </td>
                <td class="margen"> {{$acreditaron}}</td>
            </tr>
            <tr>
                <td class="margen">b) Número de particpantes inscritos: </td>
                <td class="margen"> {{$inscritos}}</td>
                <td rowspan="2" class="margen">e) Número de participantes que contestaron el formato de evaluación</td>
                <td rowspan="2"  class="margen">{{$contestaron}}</td>
            </tr>
            <tr>
                <td class="margen">c) Número de participantes que asistieron: </td>
                <td class="margen">{{$asistencia}}</td>
            </tr>
		</table> 
        <br>
        <table style="width: 100%">
            <tr>
                <th colspan="2" class="titulos" align= left >3. FACTOR DE OCUPACIÓN</th>
            </tr>
            <tr>
                <td class="margen"> (Total de participantes que asistieron a cursos x 100 / Capacidad total de los cursos) = </td>
                <td class="margen">{{$factor_ocupacion}}</td>
            </tr>

		</table> 
        <br>
        <table style="width: 100%">
            <tr>
                <th colspan="2" class="titulos" align= left >4. FACTOR DE RECOMENDACIÓN DE LOS CURSOS</th>
            </tr>
            <tr>
                <td class="margen">(Total de participantes que recomiendan los cursos x 100 / Total de participantes que respondieron la pregunta de satisfacción) = </td>
                <td class="margen"> {{$factor_recomendacion}}</td>
            </tr>
		</table> 
        <br>
        <table style="width: 100%">
            <tr>
                <th colspan="2" class="titulos" align= left >5. FACTOR DE ACREDITACIÓN</th>
            </tr>
            <tr>
                <td class="margen"> (Total de participantes que recibieron constancia x 100 / Total de participantes que asistieron a cursos) = </td>
                <td class="margen">{{$factor_acreditacion}}</td>
            </tr>
		</table> 
<br>
        <table style="width: 100%">
            <tr>
                <th colspan="2" class="titulos" align= left >6. CALIDAD DE LOS CURSOS</th>
            </tr>
            <tr>
                <td class="margen">(Total de reactivos positivos x 100 / Total de reactivos) = </td>
                <td class="margen"> {{$positivas}}</td>
            </tr>

		</table> 
        <br>
        <table width="100%">
            <tr>
                <th class="titulos" align= left >INSTRUCTORES QUE SE VOLVERÍAN A CONTRATAR</th>
                <th class="titulos" align= left >Mínimo Evaluación</th>
                <th class="titulos" align= left >Máximo Evaluación</th>
                <th class="titulos" align= left >Promedio Evaluación</th>
            </tr>
            <?php
                foreach($profesors as $profesor){
                    echo "<tr>";
                        echo "<td style=\"border: 0px solid white;\">";
                            echo $profesor[0]->apellido_paterno." ".$profesor[0]->apellido_materno." ".$profesor[0]->nombres;
                        echo "</td>";
                        echo "<td style=\"border: 0px solid white; text-align: center;\">";
                            echo $profesor[1];
                        echo "</td>";
                        echo "<td style=\"border: 0px solid white; text-align: center;\">";
                            echo $profesor[2];
                        echo "</td>";
                        echo "<td style=\"border: 0px solid white; text-align: center;\">";
                            echo $profesor[3];
                        echo "</td>";
                    echo "</tr>";
                }
            ?>
       </table> 
        <br>

        <table style="width: 100%">
            <tr>
                <th colspan="8"  class="titulos" align= left >8. ÁREAS SOLICITADAS POR LOS PARTICIPANTES</th>
            </tr>
            <tr>
                <td class="margen"> Didáctico Pedagógico: </td>
                <td class="margen">{{$DP}}</td>
                <td class="margen">Desarrollo Humano: </td>
                <td class="margen">{{$DH}}</td>
                <td class="margen">Cómputo: </td>
                <td class="margen">{{$CO}}</td>
                <td class="margen">Disciplinar:</td>
                <td class="margen">{{$DI}}</td>
            </tr>

		</table> 
        <br>

        <table style="width: 100%">
            <tr>
                <th colspan="4" class="titulos" align= left >9. TEMÁTICAS SOLICITADAS POR LOS PARTICIPANTES</th>
            </tr>
            <tr>
                <td class="margen"> Didáctico Pedagógico </td>
               
                <td class="margen">Desarrollo Humano </td>
                
                <td class="margen">Cómputo</td>
                
                <td class="margen">Disciplinar </td>
               
            </tr>
            <tr>
                <td class="margen">
                    <ul>
                        <?php
                            foreach($DPtematicas as $tematica){
                                echo "<li style=\"line-height=0.7\">$tematica</li>";
                            }
                        ?>
                    </ul>
                </td>
                <td class="margen">
                    <ul>
                        <?php
                            foreach($DItematicas as $tematica){
                                echo "<li style=\"line-height=0.7\">$tematica</li>";
                            }
                        ?>
                    </ul>
                </td>
                <td class="margen">
                    <ul>
                        <?php
                            foreach($DHtematicas as $tematica){
                                echo "<li style=\"line-height=0.7\">$tematica</li>";
                            }
                        ?>
                    </ul>
                </td>
                <td class="margen">
                    <ul>
                        <?php
                            foreach($COtematicas as $tematica){
                                echo "<li style=\"line-height=0.7\">$tematica</li>";
                            }
                        ?>
                    </ul>
                </td>
            </tr>

		</table> 
<br>
        <table style="width: 100%">
            <tr>
                <th colspan="2" class="titulos" align= left >10. HORARIOS SOLICITADOS POR LOS PARTICIPANTES</th>
            </tr>
            <tr>
                <td class="margen">Horarios Semestrales</td>
                <td class="margen">Horarios Intersemestrales</td>
            </tr>
            <?php

                foreach($horarios as $horario){
                    echo "<tr>";
                    echo "<td class=\"margen\">$horario[0]</td>";
                    echo "<td class=\"margen\">$horario[1]</td>";
                    echo "</tr>";
                }        
            ?>

		</table> 
<br>
        <table style="width: 100%">
            <?php
                $calif_contenido = $contenido;
                $calif_contenido_aritmetico = $aritmetico_contenido;
                $calif_instructor = $instructor;
                $calif_instrcutor_aritmetico = $aritmetico_instructor;
                $calif_coordinacion = $coordinacion;
                $calif_coordinacion_aritmetico = $aritmetico_coordinacion;
                $calif_recomendacion = $factor_recomendacion;
                $calif_recomendacion_aritmetico = $aritmetico_recomendacion;
                if($contenido > $aritmetico_contenido){
                    $calif_contenido = strval($contenido).' *';
                }else{
                    $calif_contenido_aritmetico = strval($aritmetico_contenido).' *';
                }
                if($instructor > $calif_instrcutor_aritmetico){
                    $calif_instructor = strval($instructor).' *';
                }else{
                    $calif_instrcutor_aritmetico = strval($aritmetico_instructor).' *';
                }
                if($coordinacion > $aritmetico_coordinacion){
                    $calif_coordinacion = strval($coordinacion).' *';
                }else{
                    $calif_coordinacion_aritmetico = strval($aritmetico_coordinacion).' *';
                }
                if($factor_recomendacion > $aritmetico_recomendacion){
                    $calif_recomendacion = strval($factor_recomendacion).' *';
                }else{
                    $calif_recomendacion_aritmetico = strval($aritmetico_recomendacion).' *';
                }
            ?>
            <tr>
                <th colspan="3" class="titulos" align= left >11. CRITERIOS DE ACEPTACIÓN DE LOS CURSOS</th>
            </tr>
            <tr>
                <td class="titulos">Campo</td>
                <td class="titulos">Ponderado</td>
                <td class="titulos">Aritmetico</td>
            </tr>
            <tr>
                <td class="margen">Contenido de los cursos: </td>
                <td class="margen">{{$calif_contenido}}</td>
                <td class="margen">{{$calif_contenido_aritmetico}}</td>
            </tr>
            <tr>
                <td class="margen">Desempeño de los instructores: </td>
                <td class="margen">{{$calif_instructor}}</td>
                <td class="margen">{{$calif_instrcutor_aritmetico}}</td>
            </tr>
            <tr>
                <td class="margen">Coordinación de los cursos: </td>
                <td class="margen">{{$calif_coordinacion}}</td>
                <td class="margen">{{$calif_coordinacion_aritmetico}}</td>
            </tr>
            <tr>
                <td class="margen">Recomendación de los cursos: </td>
                <td class="margen">{{$calif_recomendacion}}</td>
                <td class="margen">{{$calif_recomendacion_aritmetico}}</td>
            </tr>

		</table> 

    <br>
    <br>
    <br>

    <table class = "tabla-centro" width="100%">
      <tr>
        <td  class="firma" style="font-weight: bold; text-align: center;">Analista de Área</td>
        <td  class="firma" style="font-weight: bold; text-align: center;">Coordinador del centro de Docencia</td>
      </tr>
      <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
      </tr>
      <tr>
        <td  class="firma1">___________________</td>
        <td  class="firma1" style=" text-align: center;">___________________</td>
      </tr>
    </table>
    <br>
    <br>
    <p>Fecha:___________________</p>


<br>

</div>
