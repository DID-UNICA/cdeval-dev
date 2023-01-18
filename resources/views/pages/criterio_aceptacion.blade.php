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
    .final_prom{
      text-align:left;
      font-family:Arial, Helvetica, Sans-serif,cursive; 
      font-size: 15px;
      margin-left: 5px;
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
    .header{
        z-index:-1;
    margin-top: -120px;
	position: fixed;
    }
@page {
margin-top: 120px;
}

@page :first{
margin-top: 150px;
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
                Criterio de aceptación de la coordinación de los cursos
		</td>
		<td width= 12% class="margen">
            <img id="imagen_derecha" src="img/cdd.png" height="80">
		</td>
    </table>
    <script type="text/php">$pdf->close_object();</script>
</div>
    @if($criterios_coord_s != NULL)
    <table class="tabla_lista">
        <thead>
            <tr>
                <th>{{$semestre}}-s</th>
                <th>Criterio de aceptación de la coordinación de cursos</th>
            </tr>
        </thead>
            @foreach($criterios_coord_s as $key => $value)
                <tr>
                    <td>{{$key}}</td>
                    <td>{{$value}}</td>
                </tr>
            @endforeach
            <tr>
              <td>Promedio:</td>
              <td>{{$criterio_s}}</td>
            </tr>
        <tbody>
        </tbody>
    </table>
    @endif
    <br>
    <br>
    @if($criterios_coord_i != NULL)
    <table class="tabla_lista">
        <thead>
            <tr>
                <th>{{$semestre}}-i</th>
                <th>Criterio de aceptación de la coordinación de cursos</th>
            </tr>
        </thead>

        @foreach($criterios_coord_i as $key => $value)
            <tr>
                <td>{{$key}}</td>
                <td>{{$value}}</td>
            </tr>
        @endforeach
        <tr>
          <td>Promedio:</td>
          <td>{{$criterio_i}}</td>
        </tr>
        <tbody>
        </tbody>
    </table>
    @endif
    <div class="final_prom">
      @if ($criterios_coord_i == NULL)
        <p>Promedio de ambos periodos: {{ $criterio_s }}</p>
      @elseif ($criterios_coord_s == NULL)
        <p>Promedio de ambos periodos: {{ $criterio_i }}</p>
      @else
        <p>Promedio de ambos periodos: {{$criterio_si}}</p>
      @endif
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
