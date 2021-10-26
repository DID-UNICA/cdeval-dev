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
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<body>
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

    <table class="tabla_lista">
        <thead>
            <tr>
                <th>Periodo</th>
                <th>Área</th>
                <th>Nombre del curso</th>
                <th>No. Aistentes totales</th>
                <th>No. Aistentes externos</th>
                <th>No. Aistentes FI</th>
            </tr>
        </thead>
        @foreach($cursos as $curso)
            <tr>
                <td>{{$semestre}}-{{$curso[0]->semestre_si}}</td>
                <td>{{$curso[0]->abreviatura}}</td>
                <td>{{$curso[0]->nombre_curso}}</td>
                <td>{{$curso[3]}}</td>
                <td>{{$curso[2]}}</td>
                <td>{{$curso[1]}}</td>
            </tr>
        @endforeach
        <tbody>
        </tbody>
    </table>

</body>

