<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Final de curso</title>
</head>
<style>
    div.container {
        text-align:center;
    }
    html{
	    width:100%;
    }
    .margen{
        border: 1px solid #000000;  
        font-family:Arial, Helvetica, Sans-serif,cursive;   
        font-size: 12px;    
    }
    #tabla_encabezado{
        border-collapse: collapse;
        border: 1px solid #ddd;
        height: 50px;
        width:100%;
    }
    #tabla_encabezado_debajo{
        border-collapse: collapse;
        border: 1px solid #000000;
        height: 5%;
        width:100%;
        text-align:center;
        font-family:Arial, Helvetica, Sans-serif,cursive; 
        font-size: 9px;
    }
body {
  font-family: Arial, Helvetica, Sans-serif;
  align-items: center;
  font-size: 15px;
}
.f{
    background-color: #2A4EDF;
    color: white; 
}
.n{
    border: 0px solid white;
}
#mayusculas{
	text-transform: uppercase;
}
#h4 {
    margin:15px 60px 15px; 
}
#renglonDoble, #mayusculas{
	 border: 1px solid white;
}
#normal, td,#encabezado{
  border: 1px solid #000;
  border-spacing: 0;
}

#encabezado{
        font-family:Arial, Helvetica, Sans-serif,cursive; 
        text-align: center;
        vertical-align: middle;
        font-size: 20px;
        line-height:90%;
    }
.small{
	width: 20%;
}
#imagen_izquierda{
        margin-left: 15%;
    }
    #imagen_derecha{
        margin-left: 14%;
    }
.header{
	z-index:-1;
	position: fixed;
    margin-top: -250px;
    }
@page {
margin-top: 300px;
}

@page :first{
margin-top: 300px;
}
</style>
<body>
    <script type="text/php">
        $GLOBALS["header"] = NULL;
    </script>
	<div class="header">
        <div height="10%">
            <script type="text/php">$GLOBALS["header"] = $pdf->open_object();</script>
            <table  id="tabla_encabezado">
                <td width= 12% class="margen">
                    <img id="imagen_izquierda"  src="img/fi_2.png" height="80">
                </td>
                <td width= 58% id="encabezado" class="margen" style="line-height=20px">
                    Reporte de participantes por periodo
                </td>
                <td width= 12% class="margen">
                    <img id="imagen_derecha" src="img/cdd.png" height="80">
                </td>
            </table>
            
        
        <div align="center">
        <?php
				//50
				if(strlen($catalogo->nombre_curso)>50){
            		echo "<p style=\"float: left; width: 100%; font-size: 22px; line-heigh:5px;\" class=\"n\"> $catalogo->nombre_curso </p>";
					echo "<br>";
            		echo "<p style=\"float: right; width: 15%\" class=\"n\" style=\"text-align:right\"> $curso->semestre_anio-$curso->semestre_pi$curso->semestre_si</p>";
            		echo "<div style=\"clear: both\"></div>";
					echo "<hr>";
				}else{
					echo "<div style=\"float: left; width: 100%; font-size: 22px;\" class=\"n\">$catalogo->nombre_curso</div>";
					echo "<div style=\"float: right; width: 15%\" class=\"n\" style=\"text-align:right\">$curso->semestre_anio-$curso->semestre_pi$curso->semestre_si</div>";
					echo "<div style=\"clear: both\"></div>";
					echo "<hr>";
				}
			?>
        </div>
        
            </div>
        <script type="text/php">$pdf->close_object();</script>
    </div>
    <div>
        <table width="100%">
            <tr>
                <th>1. DATOS GENERALES DEL CURSO</th>
            </tr>
            <tr>
                <td style="font-weight: bold" class="n">a) Instructor</td>
                <td class="n">
                <ul>
                <?php
                    foreach($nombreInstructor as $instructorCurso){
                        echo "<li> $instructorCurso->nombres $instructorCurso->apellido_paterno $instructorCurso->apellido_materno </li>";
                    }
                ?>
                </ul>
                </td>
            </tr>
            <tr>
                <td style="font-weight: bold" class="n">b) Fecha de impartición</td>
                <td style="width=10%" class="n">{{$curso->fecha_inicio}}, {{$curso->fecha_fin}}</td>
                <td style="font-weight: bold; margin-left:50px white; width=40%" class="n" >e) Capacidad</td>
                <td style="width=10%" class="n">{{$curso->cupo_maximo}}</td>
            </tr>
            <tr>
                <td style="font-weight: bold" class="n">c) Horario</td>
                <td class="n">{{$curso->hora_inicio}}, {{$curso->hora_fin}}</td>
                <td style="font-weight: bold ; margin-left: 50px white;" class="n">f) Total de horas</td>
                <td class="n">{{$numero_horas}}</td>
            </tr>
            <tr>
                <td style="font-weight: bold" class="n">d) Lugar</td>
                <td class="n">{{$salon->sede}}</td>
                
            </tr>     
        </table>
        <br>
        <table width="100%">
            <tr>
                <th>2. REGISTRO DE PARTICIPANTES</th>
            </tr>
            <tr>
                <td style="font-weight: bold" class="n">a) Inscritos</td>
                <td class="n"><?php echo sizeof($participantes); ?></td>
                <td style="font-weight: bold ; margin-left: 50px white;" class="n" >c) Acreditaron</td>
                <td class="n">{{$acreditaron}}</td>
            </tr>
            <tr>
                <td style="font-weight: bold" class="n">b) Asistieron</td>
                <td class="n">{{$asistieron}}</td>
                <td style="font-weight: bold ; margin-left: 50px white;" class="n">d) Formatos de evaluación final</td>
                <td class="n">{{$contestaron}}</td>
            </tr>
        </table>
        <br>
        <table width="100%">
            <tr>
                <th>3. FACTOR DE OCUPACIÓN</th>
                <td class="n"> {{$ocupacion}}</td>
                <th>4. FACTOR DE RECOMENDACIÓN</th>
                <td class="n"> {{$factor}}</td>
            </tr>
        </table>
        <br>
        <table width="100%">
            <tr>
                <th>5. FACTOR DE ACREDITACIÓN</th>
                <td class="n"> {{$factor_acreditacion}}</td>
                <th>6. FACTOR DE CALIDAD</th>
                <td class="n"> {{$positivas}}</td>
            </tr>
        </table>
        <br>
        <table width="100%">
            <tr>
                <th>7. FACTOR DE DESEMPEÑO INSTRUCTOR</th>
            </tr>
        </table>
        <table width="100%">
            <tr>
                <th style="width: 65%" class="f" >Instructor</th>
                <th class="f">Promedio</th>
                <th class="f">Mínimo</th>
                <th class="f">Máximo</th>
                <th class="f">Juicio Sumario</th>
            </tr>
            <tr>
                <td style="width: 65%" class="n" >{{$nombreInstructor[0]->nombres}} {{$nombreInstructor[0]->apellido_paterno}} {{$nombreInstructor[0]->apellido_materno}}</td>
                <td class="n">{{$instructor}}</td>
                <td class="n">{{$minimo}}</td>
                <td class="n">{{$maximo}}</td>
                <td class="n"><?php
                    if($factor >= 80){
                        echo "Si";
                    }else{
                        echo "No";
                    }
                ?></td>
            </tr>
        </table>

        <br>
        <table width="100%">
            <tr>
                <th style="width: 20%">8. JUICIO SUMARIO  CURSO</th>
                <?php
                    $num = round(($factor+$factor_acreditacion+$positivas)/3,2);
                    if($factor >= 80 && $factor_acreditacion >= 80 && $positivas >= 80){
                        echo "<td style=\"width: 30%\" class=\"n\">$num &nbsp; Si</td>";
                    }else{
                        echo "<td style=\"width: 30%\" class=\"n\">$num &nbsp; No</td>";
                    }
                ?>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <th>9. RECOMENDACIONES</th>
            </tr>
            <?php
                foreach($evals as $evaluacion){
                    echo "<tr>";
                    echo "<td class=\"n\">$evaluacion->sug</td>";
                    echo "</tr>";
                }
            ?>
        </table>
        <br>
        <table width="100%">
            <tr>
                <th>10. ÁREAS SOLICITADAS</th>
                <th>DP: </th>
                <td class="n">{{$DP}}</td>
                <th>DH: </th>
                <td class="n">{{$DH}}</td>
                <th>CO: </th>
                <td class="n">{{$CO}}</td>
                <th>DI: </th>
                <td class="n">{{$DI}}</td>
                <th>Otros: </th>
                <td class="n">{{$Otros}}</td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <th>11. TEMÁTICA SOLICITADAS</th>
            </tr>
            <?php
                foreach($evals as $evaluacion){
                    echo "<tr>";
                    echo "<td class=\"n\">$evaluacion->tematica</td>";
                    echo "</tr>";
                }
            ?>
        </table>
        <br>
        <table width="100%">
            <tr>
                <th>12. HORARIOS SOLICITADOS</th>
            </tr>
            <tr>
                <th style="width: 50%" class="f">Horario semestral</th>
                <th style="width: 50%" class="f">Horario intersemestral</th>
            </tr>
            <?php
                foreach($evals as $evaluacion){
                    echo "<tr>";
                    echo "<td style=\"width: 50%\" class= \"n\">$evaluacion->horarios</td>";
                    echo "<td style=\"width: 50%\" class=\"n\">$evaluacion->horarioi</td>";
                    echo "</tr>";
            }
            ?>
        </table>
        <br>
        <table width="100%">
            <tr>
                <th>13. CRITERIOS DE ACEPTACIÓN </th>
            </tr>
        </table>
        <br>
        <table width="100%">
            <tr>
                <th style="width: 10%" >Contenido: </th>
                <td style="width: 90%" class="n" >{{$contenido}}</td>
            </tr>
            <br>
            <tr>
                <th style="width: 10%" >Instructores: </th>
                <td style="width: 90%" class="n" >{{$instructor}}</td>
            </tr>
            <br>
            <tr>
                <th style="width: 10%" >Coordinación: </th>
                <td style="width: 90%" class="n" >{{$factor_coordinacion}}</td>
            </tr>
            <br>
            <tr>
                <th style="width: 10%" >Recomendación: </th>
                <td style="width: 90%" class="n" >{{$factor}}</td>
            </tr>

        </table>

    </div>
<script type="text/php">
    $pdf->page_script('
        if ($PAGE_NUM >= 2) {
        $pdf->add_object($GLOBALS["header"],"add");
        }
        ');
</script>
</body>
</html>