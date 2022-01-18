@extends('layouts.principal')

@section('contenido')

<!-- <style>
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
    
</style> -->
    <style>
      .text{
        margin: 1%;
      }
    </style>
	<div id="inner" style="margin-top:2%">
    <div class="content-inner">
      <br>
      @include('partials.messages')
      <div class="panel panel-default">
        
        <div class="panel-heading">
          <h3>Reporte de Evaluación Global de Área</h3>
          <h4>{{$periodo}}</h4>
        </div>

        <div class="panel-body">
          <div class="row">
            <div class="form-group col-md-6 text"> 
                {!!Form::label("cursos", "1. NOMBRE DE LOS CURSOS")!!}
              @foreach($nombre_cursos as $nombre)
                {!!Form::text("cursos", $nombre, ["class"=>"form-control", "disabled","style"=>"margin:1%"])!!}
              @endforeach
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-6 text">
            {!!Form::label("participantes", "2. REGISTRO DE PARTICIPANTES")!!}
              <div>
                {!!Form::label("periodo", 'a) Periodo de evaluación:', ["class"=>'col-md-4'])!!}
                {!!Form::text("periodo", $periodo, ["class"=>"col-md-2", "disabled","style"=>"margin:1%"])!!}
              </div>

              <div>
                {!!Form::label("numero", 'b) Número de participantes inscritos:', ["class"=>'col-md-4'])!!}
                {!!Form::text("numero", $inscritos, ["class"=>"col-md-2", "disabled","style"=>"margin:1%"])!!}
              </div>
              <div>
                {!!Form::label("asist", 'c) Número de participantes que asistieron:', ["class"=>'col-md-4'])!!}
                {!!Form::text("asist", $asistentes, ["class"=>"col-md-2", "disabled","style"=>"margin:1%"])!!}
              </div>
              <div>
                {!!Form::label("acredit", 'd) Número de participantes que acreditaron:', ["class"=>'col-md-4'])!!}
                {!!Form::text("acredit", $acreditados, ["class"=>"col-md-2", "disabled","style"=>"margin:1%"])!!}
              </div>
              <div>
                {!!Form::label("contestaron", 'e) Número de participantes que contestaron el formato de evaluación:', ["class"=>'col-md-4'])!!}
                {!!Form::text("contestaron", $contestaron, ["class"=>"col-md-2", "disabled","style"=>"margin:1%"])!!}
              </div>

            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-6 text"> 
                {!!Form::label("ocupacion", "3. FACTOR DE OCUPACIÓN")!!}
                <br>
                Total de participantes que asistieron a cursos x 100 / Capacidad total de los cursos
                {!!Form::text("ocupacion", $factor_ocupacion, ["class"=>"form-control", "disabled","style"=>"margin:1%"])!!}
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6 text"> 
              {!!Form::label("recomendacion", "4. FACTOR DE RECOMENDACIÓN DE LOS CURSOS:")!!}
              <br>
              Total de participantes que recomiendan los cursos x 100 / Total de participantes que respondieron la pregunta de satisfacción
              {!!Form::text("recomendacion", $factor_recomendacion, ["class"=>"form-control", "disabled","style"=>"margin:1%"])!!}
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-6 text"> 
              {!!Form::label("acreditacion", "5. FACTOR DE ACREDITACIÓN:")!!}
              <br>
              Total de participantes que recibieron constancia x 100 / Total de participantes que asistieron a cursos
              {!!Form::text("acreditacion", $factor_acreditacion, ["class"=>"form-control", "disabled","style"=>"margin:1%"])!!}
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-6 text"> 
              {!!Form::label("calidad", "6. CALIDAD DE LOS CURSOS:")!!}
              <br>
              Total de reactivos positivos x 100 / Total de reactivos
              {!!Form::text("calidad", $factor_calidad, ["class"=>"form-control", "disabled","style"=>"margin:1%"])!!}
            </div>
          </div>
          
          <div class="row" style="text-align:left">
            <h6>7. INSTRUCTORES QUE SE VOLVERÍAN A CONTRATAR:</h4>
            <div class="form-group col-md-6 text"> 
              {!!Form::label("nombre_inst", "Nombre")!!}
              {!!Form::label("minimo_inst", "Mínimo Evaluación")!!}
              {!!Form::label("maximo_inst", "Máximo Evaluación")!!}
              {!!Form::label("promedio_inst", "Promedio Evaluación")!!}
              @foreach(@$nombres_instructores as $inst)
                {!!Form::text("nombre_inst", $inst->nombre, ["class"=>"form-control", "disabled","style"=>"margin:1%"])!!}
                {!!Form::text("minimo_inst", $inst->min, ["class"=>"form-control", "disabled","style"=>"margin:1%"])!!}
                {!!Form::text("maximo_inst", $inst->max, ["class"=>"form-control", "disabled","style"=>"margin:1%"])!!}
                {!!Form::text("promedio_inst", $inst->prom, ["class"=>"form-control", "disabled","style"=>"margin:1%"])!!}
              @endforeach
            </div>
          </div>

		

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
                            foreach($temDP as $tematica){
                                echo "<li style=\"line-height=0.7\">$tematica</li>";
                            }
                        ?>
                    </ul>
                </td>
                <td class="margen">
                    <ul>
                        <?php
                            foreach($temDI as $tematica){
                                echo "<li style=\"line-height=0.7\">$tematica</li>";
                            }
                        ?>
                    </ul>
                </td>
                <td class="margen">
                    <ul>
                        <?php
                            foreach($temDH as $tematica){
                                echo "<li style=\"line-height=0.7\">$tematica</li>";
                            }
                        ?>
                    </ul>
                </td>
                <td class="margen">
                    <ul>
                        <?php
                            foreach($temCO as $tematica){
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
                $calif_contenido = $criterio_contenido_pon;
                $calif_contenido_aritmetico = $criterio_contenido_arim;
                $calif_instructor = $criterio_instructores_pon;
                $calif_instrcutor_aritmetico = $criterio_instructores_arim;
                $calif_coordinacion = $criterio_coordinacion_pon;
                $calif_coordinacion_aritmetico = $criterio_coordinacion_arim;
                $calif_recomendacion = $criterio_recomendacion_pon;
                $calif_recomendacion_aritmetico = $criterio_recomendacion_arim;
                if($criterio_contenido_pon > $criterio_contenido_arim){
                    $calif_contenido = strval($criterio_contenido_pon).' *';
                }else{
                    $calif_contenido_aritmetico = strval($criterio_contenido_arim).' *';
                }
                if($criterio_instructores_pon > $criterio_instructores_arim){
                    $calif_instructor = strval($criterio_instructores_pon).' *';
                }else{
                    $calif_instrcutor_aritmetico = strval($criterio_instructores_arim).' *';
                }
                if($criterio_coordinacion_pon > $criterio_coordinacion_arim){
                    $calif_coordinacion = strval($criterio_coordinacion_pon).' *';
                }else{
                    $calif_coordinacion_aritmetico = strval($criterio_coordinacion_arim).' *';
                }
                if($criterio_recomendacion_pon > $criterio_recomendacion_arim){
                    $calif_recomendacion = strval($criterio_recomendacion_pon).' *';
                }else{
                    $calif_recomendacion_aritmetico = strval($criterio_recomendacion_arim).' *';
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
<br>

</div>
@endsection