<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte de instructores</title>
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
        height: 35px;
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
  color: #2D2F8A;
	font-size: 10px;
	text-align:center;
  font-family:'Calibri, sans-serif';
}
.f1{
	font-family: "Times New Roman", Times, serif;
	font-size: 13px;
	font-weight: bold;
	border: 0px solid white;
}
.n1{
	
	border: 0px solid grey;
	font-size: 11px;
	text-align: center;
  font-family:'Calibri, sans-serif';
}
.prof{
	font-family: "Times New Roman", Times, serif;
	border: 0px solid grey;
	font-size: 15px;
	text-align: center;
}
.n{
	font-family: "Times New Roman", Times, serif;
	font-size: 13px;
    border: 0px solid white;
}
.n0{
    border: 0px solid white;
    margin: 0px;
    display: inline-block;
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
  border: 0px solid #000;
  border-spacing: 0;
  
}
.small{
	width: 20%;
}
.header{
    z-index:-1;
    margin-top: -225px;
	position: fixed;
}
.unam{ 
	border: 0px; 
	border-top: 2px solid #000;
	font-size: 20px;
	font-weight: bold;
}
.fi{
	border: 0px; 
	font-size: 20px;
	font-weight: bold;
}
.curso{
	border: 0px; 
	font-size: 18px;
	font-weight: bold;
	border-top: 2px solid #000;
	border-bottom: 2px solid #000;	
}
.periodo{
	font-family: "Times New Roman", Times, serif;
	font-size: 12px;
}
@page {
margin-top: 250px;
}

</style>
<body>
<script type="text/php">
	$GLOBALS["header"] = NULL;
</script>
	<div class="header">
  <script type="text/php">$GLOBALS["header"] = $pdf->open_object();
      $pdf->page_script('
              $font = $fontMetrics->get_font("Arial", "bold");
              if( $PAGE_NUM == $PAGE_COUNT){
                $diassemana = array("Domingo","lunes","martes","miércoles","jueves","viernes","sábado");
                $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                $temp_date = $diassemana[date("w")].", ".date("j")." de ".$meses[date("n")-1]. " del ".date("Y");
                $pdf->text(50 , 800, "$temp_date", $font, 10);
				$pdf->text(50 , 773, "_______________________________________", $font, 10);
				$pdf->text(50 , 788, "SAD,CDD", $font, 10);
              }
          ');
      
    </script>
		<div height="10%">
			<table style="width: 100%" align="center" height="5%">
			<tr><td colspan = "3" align="center" class="unam">UNIVERSIDAD NACIONAL AUTÓNOMA DE MÉXICO</td></tr>	
			<tr style="border-bottom: 2px solid #000;">
					<td rowspan="2" width="20%" align="center" class="escudos">
						<img src="img/fi_2.png" alt="" align="center" height="95">
					</td>
					<td rowspan="2" align="center" class="fi">
						FACULTAD DE INGENIERÍA,UNAM<br>
						Secretaría de Apoyo a la Docencia<br>
						CENTRO DE DOCENCIA<br>
						<div style='font-style:italic; font-family:Times New Roman;'>"Ing. Gilberto Borja Navarrete"<br></div> 
					</td>
					<td rowspan="2" width="20%" align="center" class="escudos">
						<img src="img/CentroDocencia.png" alt="" align="center" height="95">
					</td>
			</tr>
				
			</table>
			<table style="width: 100%"  class="curso" align="center">
					<?php
						//50
					if(strlen($nombre_curso)>50){
						echo "<tr><td align=\"center\">Encuestas del curso</td></tr>";
						echo "<tr><td align=\"center\" style=\"font-size: 15px;\"> $nombre_curso </td></tr>";
						echo "<tr><td align=\"center\" class=\"periodo\"> $periodo </td></tr>";
					}else{
						echo "<tr><td align=\"center\">Encuestas del curso</td></tr>";
						echo "<tr><td align=\"center\"> $nombre_curso </td></tr>";
						echo "<tr><td align=\"center\" class=\"periodo\"> $periodo </td></tr>";
					}
				?>
			</table>
			</div>

		
	<script type="text/php">$pdf->close_object();</script>
</div>
	<div>
        <table width="100%">
			<thead>
				<tr>
					<th class="f" width="5%"><pre>      </pre></th>
					<th class="f" width="2%">Experiencia</th>
					<th class="f" width="1%">Planeacion y Organizacion</th>
					<th class="f" width="1%">Puntualidad</th>
					<th class="f" width="1%">Materiales de apoyo</th>
					<th class="f" width="1%">Resolución de dudas</th>
					<th class="f" width="1%">Control de grupo</th>
					<th class="f" width="1%">Interés que despertó</th>
					<th class="f" width="2%">Actitud del instructor</th>
				</tr>
			</thead>
			<tbody>
				@foreach($instructores as $instructor)
        <tr>
					<td text-align='left' class="prof">
            {{$instructor->nombre}} <br>
            <div style="font-family:'Calibri, sans-serif'; font-size:11px; color:#001E42">{{$total_evaluaciones}} hojas de evaluación</div> 
          </td>
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
				<th class="f1" align=left>Lo mejor del curso fue</th>
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
				<th class="f1" align=left>Sugerencias y recomendaciones</th>
			</tr>
            @foreach($sugerencias as $sugerencia)
                <tr>
				<td class="n">{{$sugerencia}}</td>
                </tr>
            @endforeach
		</table>

    </div>
<br>


<script type="text/php">
	$pdf->page_script('
	  if ($PAGE_NUM >= 1) {
		  $pdf->add_object($GLOBALS["header"],"add");
	  }
	');
  </script>
</body>
</html>