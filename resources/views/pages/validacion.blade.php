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
        height: 100px;
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
    background-color: #b9d7eb;
    color: #000000;
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
	/*padding: 10px;*/
}
.small{
	width: 20%;
}
.header{
    z-index:-1;
    margin-top: -310px;
	position: fixed;
}
@page {
margin-top: 350px;
}
@page :first{
margin-top: 350px;
}
</style>
<body>
<script type="text/php">
    $GLOBALS["header"] = NULL;
</script>

<div class="header">
    <script type="text/php">$GLOBALS["header"] = $pdf->open_object();
      $pdf->page_script('
              $font = $fontMetrics->get_font("Arial", "normal");
              if ($PAGE_NUM >= 1){
                  $pdf->text(480 , 135, "Página $PAGE_NUM de $PAGE_COUNT", $font, 8);
              }
              if( $PAGE_NUM == $PAGE_COUNT){
                $diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                $temp_date = $diassemana[date("w")]." ".date("j")." de ".$meses[date("n")-1]. " del ".date("Y");
                $pdf->text(50 , 800, "$temp_date", $font, 10);
              }
          ');
      
    </script>
	<div height="10%">
		<table style="width: 100%" align="center"  id="tabla_encabezado" height="5%">
			<tr id="normal">
				<td rowspan="2" width="20%" align="center" id="normal"><br>
					<img src="img/fi.jpg" alt="" align="center" height="112">
				</td>
				<td rowspan="2" align="center" id="normal">
                    FACULTAD DE INGENIERÍA,UNAM<br>
                    Secretaría de Apoyo a la Docencia<br>
			        CENTRO DE DOCENCIA "Ing. Gilberto Borja Navarrete"<br>
			        Sistema de Gestión de la Calidad<br>
                    Norma ISO 9001:2015<br>
                    Formato
				</td>
				<td rowspan="2" width="20%" align="center" id="normal"><br>
					<img src="img/cdd.png" alt="" align="center" height="112">
				</td>
			</tr>
		</table>
        <table id="tabla_encabezado_debajo">
				<td width="20%" class="margen">
					2730-SGC-IC-FO-09
				</td>
				<td  class="margen">
					Fecha de emisión:
				</td>
				<td class="margen">
                    21/08/2017
				</td>
				<td class="margen">
					Versión
				</td>
				<td class="margen">
					2
				</td>
				<td width="20%" class="margen">
					
				</td>
		</table>
        <div align="center">
        <?php
				//50
				if(strlen($nombre_curso)>50){
            		echo "<p style=\"float: left; width: 100%; font-size: 22px; line-heigh:5px;\" class=\"n\"> $nombre_curso </p>";
					echo "<br>";
            		echo "<p style=\"float: right; width: 15%\" class=\"n\" style=\"text-align:right\"> $periodo</p>";
            		echo "<div style=\"clear: both\"></div>";
					echo "<hr>";
				}else{
					echo "<div style=\"float: left; width: 100%; font-size: 22px;\" class=\"n\">$nombre_curso</div>";
					echo "<div style=\"float: right; width: 15%\" class=\"n\" style=\"text-align:right\">$periodo</div>";
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
                <th style="text-align:left" colspan=4>1. DATOS GENERALES DEL CURSO</th>
            </tr>
            <tr>
                <td style="font-weight: bold" class="n">a) Instructor</td>
                <td class="n">
                <ul>
                    @foreach($instructores as $instructor)
                        <li> {{$instructor->getNombreProfesor()}} </li>
                    @endforeach
                </ul>
                </td>
            </tr>
            <tr>
                <td style="font-weight: bold" class="n">b) Fecha de impartición</td>
                <td style="width=10%" class="n">{{$fecha_imparticion}}</td>
                <td style="font-weight: bold; margin-left:50px white; width=40%" class="n" >e) Capacidad</td>
                <td style="width=10%" class="n">{{$cupo_maximo}}</td>
            </tr>
            <tr>
                <td style="font-weight: bold" class="n">c) Horario</td>
                <td class="n">{{$hora_inicio}}, {{$hora_fin}}</td>
                <td style="font-weight: bold ; margin-left: 50px white;" class="n">f) Total de horas</td>
                <td class="n">{{$duracion}}</td>
            </tr>
            <tr>
                <td style="font-weight: bold" class="n">d) Lugar</td>
                <td class="n">{{$sede}}</td>
                
            </tr>     
        </table>
        <br>
        <table width="100%">
            <tr>
                <th style="text-align:left">2. REGISTRO DE PARTICIPANTES</th>
            </tr>
            <tr>
                <td style="font-weight: bold" class="n">a) Inscritos</td>
                <td class="n">{{$inscritos}}</td>
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
                <th class="n" style="text-align:left">3. FACTOR DE OCUPACIÓN</th>
                <td class="n" style="text-align:left"> {{round($ocupacion,2)}}</td>
                <th class="n" style="text-align:left">4. FACTOR DE RECOMENDACIÓN</th>
                <td class="n" style="text-align:left"> {{$factor}}</td>
            </tr>
            <tr>
                <th class="n" style="text-align:left">5. FACTOR DE ACREDITACIÓN</th>
                <td class="n" style="text-align:left"> {{$factor_acreditacion}}</td>
                <th class="n" style="text-align:left">6. FACTOR DE CALIDAD</th>
                <td class="n" style="text-align:left"> {{$positivas}}</td>
            </tr>
        </table>
        <br>
        <table width="100%">
            <tr>
                <th style="text-align:left">7. FACTOR DE DESEMPEÑO INSTRUCTOR</th>
            </tr>
        </table>
        <table width="100%">
            <tr>
                <th style="width: 65%; text-align:left" class="f" >Instructor</th>
                <th style="text-align:right" class="f">Promedio</th>
                <th style="text-align:right" class="f">Mínimo</th>
                <th style="text-align:right" class="f">Máximo</th>
            </tr>
        @foreach($instructores as $instructor)
            <tr>
                <td style="width: 65%" class="n" >{{$instructor->getNombreProfesor()}}</td>
                <td class="n">{{$instructor->factor}}</td>
                <td class="n">{{$instructor->minimo}}</td>
                <td class="n">{{$instructor->maximo}}</td>
            </tr>
        @endforeach

        </table>
        <br>
        <table style="align:left" width="100%">
          <tr>
            <th style="text-align:left; width: 40%">8. JUICIO SUMARIO  INSTRUCTOR a)</th>
            @if($instructor->factor >= 80)
              <td style="text-align:left; width: 60%" class= "n">  Si </td> 
            @else
              <td style="text-align:left; width: 60%" class= "n">  No </td> 
            @endif
          </tr>
        </table>
        <table style="align:left" width="100%">
          <tr>
            <th style="text-align:left; width: 40%">8. JUICIO SUMARIO  CURSO b)</th>
            @php
              $num = round(($factor+$factor_acreditacion+$positivas)/3,2);
            @endphp
              <td style="width: 30%" class="n">{{$num}}</td>
            @if($factor >= 80 && $factor_acreditacion >= 80 && $positivas >= 80)
              <td style="text-align:left; width: 30%" class="n">Si</td>
            @else
              <td style="text-align:left; width: 30%" class="n">No</td>
            @endif
          </tr>
        </table>
        <br>
        <table>
            <tr>
                <th style="text-align:left">9. RECOMENDACIONES</th>
            </tr>
            <?php
                foreach($sugerencias as $sug){
                    echo "<tr>";
                    echo "<td class=\"n\">$sug</td>";
                    echo "</tr>";
                }
            ?>
        </table>
        <br>
        <table width="100%">
            <tr>
                <th style="text-align:left">10. ÁREAS SOLICITADAS</th>
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
                <th style="text-align:left">11. TEMÁTICAS SOLICITADAS</th>
            </tr>
            <?php
                foreach($tematicas as $tematica){
                    echo "<tr>";
                    echo "<td class=\"n\">$tematica</td>";
                    echo "</tr>";
                }
            ?>
        </table>
        <br>
        <table width="100%">
            <tr>
                <th style="text-align:left">12. HORARIOS SOLICITADOS</th>
            </tr>
            <table width="50%">
            <tr>
              <th style="width: 50%" class="f">Horario semestral</th>
            </tr>
            @foreach($horarios as $horaris)
              <tr>
                  <td style="width: 50%;" class="n">{{$horaris}}</td>
              </tr>
            @endforeach
        </table>
        <table style="float:right" width="50%">
            <tr>
              <th style="width: 50%" class="f">Horario intersemestral</th>
            </tr>
              @foreach($horarioi as $horarii)
                <tr>
                  <td style="width: 50%;" class="n">{{$horarii}}</td>
                </tr>
              @endforeach
        </table>
        </table>
        
        <br>
        <table width="100%">
            <tr>
                <th style="text-align:left">13. CRITERIOS DE ACEPTACIÓN </th>
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
                <td style="width: 90%" class="n" >{{$ct_instructores}}</td>
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
        if ($PAGE_NUM >= 1) {
            $pdf->add_object($GLOBALS["header"],"add");
        }
        ');
 
   </script>
</body>
</html>