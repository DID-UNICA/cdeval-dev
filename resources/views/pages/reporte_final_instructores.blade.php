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
    color: #2A4EDF;
	text-align:center;
}
.f1{
	font-weight: bold;
	border: 0px solid white;
}
.n1{
	border: 0px solid grey;
	text-align: center;
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
    margin-top: -225px;
	position: fixed;
}
@page {
margin-top: 250px;
}

@page :first{
margin-top: 260px;
}
</style>
<body>
<script type="text/php">
	$GLOBALS["header"] = NULL;
</script>
	<div class="header">
		<script type="text/php">$GLOBALS["header"] = $pdf->open_object();</script>
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
						2017-08-21
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
						echo "<div style=\"float: right; width: 15%\" class=\"n\" style=\"text-align:right\">$periodo </div>";
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
			<thead>
				<tr>
					<th class="f"><pre>      </pre></th>
					<th class="f">Experiencia</th>
					<th class="f">Planeacion y Organizacion</th>
					<th class="f">Puntualidad</th>
					<th class="f">Materiales de apoyo</th>
					<th class="f">Resolución de dudas</th>
					<th class="f">Control de grupo</th>
					<th class="f">Interés que despertó</th>
					<th class="f">Actitud del instructor</th>
				</tr>
			</thead>
			<tbody>
				@foreach($instructores as $instructor)
        <tr>
					<td class="n1">{{$instructor->nombre}}</td>
					<td class="n1">{{$instructor->experiencia}}</td>
					<td class="n1">{{$instructor->planeacion}}</td>
					<td class="n1">{{$instructor->puntualidad}}</td>
					<td class="n1">{{$instructor->materiales}}</td>
					<td class="n1">{{$instructor->dudas}}</td>
					<td class="n1">{{$instructor->control}}</td>
					<td class="n1">{{$instructor->interes}}</td>
					<td class="n1">{{$instructor->actitud}}</td>
				</tr>
        @endforeach
			</tbody>
        </table>
		<br>
		<table width="100%">
			<tr>
				<th class="f1">Lo mejor del curso fue</th>
			</tr>
      @foreach($mejor as $mejor)
        <tr>
          <td class="n">{{$mejor}}</td>
        </tr> 
      @endforeach
		</table>
		<br>
		<br>
		<table width="100%">
			<tr>
				<th class="f1">Comentarios y sugerencias</th>
			</tr>
            @foreach($sugerencias as $sugerencia)
                <tr>
				<td class="n">{{$sugerencia}}</td>
                </tr>
            @endforeach
		</table>

    </div>
<br>
<p>_______________________________________</p>
<p>SAD,CDD</p>
	<?php
        $diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        echo $diassemana[date('w')]." ".date('j')." de ".$meses[date('n')-1]. " del ".date('Y');
    ?>

<script type="text/php">
	$pdf->page_script('
	  if ($PAGE_NUM >= 2) {
		$pdf->add_object($GLOBALS["header"],"add");
	  }
	');
  </script>
</body>
</html>