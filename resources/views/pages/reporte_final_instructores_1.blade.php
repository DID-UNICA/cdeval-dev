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
</style>
<body>
<div style="height: 70%">
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
				if(strlen($catalogo->nombre_curso)>50){
            		echo "<p style=\"float: left; width: 100%; font-size: 22px; line-heigh:5px;\" class=\"n\"> $catalogo->nombre_curso </p>";
					echo "<br>";
            		echo "<p style=\"float: right; width: 15%\" class=\"n\" style=\"text-align:right\"> $cursos->semestre_anio$cursos->semestre_pi$cursos->semestre_si</p>";
            		echo "<div style=\"clear: both\"></div>";
					echo "<hr>";
				}else{
					echo "<div style=\"float: left; width: 100%; font-size: 22px;\" class=\"n\">$catalogo->nombre_curso</div>";
					echo "<div style=\"float: right; width: 15%\" class=\"n\" style=\"text-align:right\">$cursos->semestre_anio$cursos->semestre_pi$cursos->semestre_si</div>";
					echo "<div style=\"clear: both\"></div>";
					echo "<hr>";
				}
			?>
        </div>
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
				<tr>
					<td class="n1">{{$profesors[0]->getNombre()}}</td>
					<td class="n1">{{$experiencia1}}</td>
					<td class="n1">{{$planeacion1}}</td>
					<td class="n1">{{$puntualidad1}}</td>
					<td class="n1">{{$materiales1}}</td>
					<td class="n1">{{$dudas1}}</td>
					<td class="n1">{{$control1}}</td>
					<td class="n1">{{$interes1}}</td>
					<td class="n1">{{$actitud1}}</td>
				</tr>
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

</div>
<br>
<br>

<p>_______________________________________</p>
<p>SAD,CDD</p>
<p>{{$dia}}, {{$date["mday"]}} de {{$mes}} de {{$date["year"]}}</p>

</body>
</html>