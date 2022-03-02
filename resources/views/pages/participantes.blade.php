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
        vertical-align: middle;
        font-family:Arial, Helvetica, Sans-serif,cursive; 
        font-size: 1px;
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
        vertical-align: middle;
        font-size: 20px;
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
    .space{margin-top: 0px}
    .header{
    z-index:-1;
	position: fixed;
    margin-top: -150px;
    }
@page {
margin-top: 200px;
}

@page :first{
margin-top: 200px;
}
</style>

<body>
    <script type="text/php">
        $GLOBALS["header"] = NULL;
    </script>
<div class="header">
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
    <script type="text/php">$pdf->close_object();</script>
</div>
    <div class="space">
    <table class="tabla_lista">
        <thead>
            <tr>
                <th>Periodo</th>
                <th>Área</th>
                <th>Nombre del curso</th>
                <th>No. Asistentes totales</th>
                <th>No. Asistentes externos</th>
                <th>No. Asistentes FI</th>
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

