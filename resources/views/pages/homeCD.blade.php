
<!-- Vista: Home - Centro de Docencia y Área de Gestión y Vinculación -->
@extends('layouts.principal')

@section('contenido')
  <!--Body content-->
    <br>
    <br>
    <br>
    <div id="inner">
    <div class="top-bar">            
    </div>
    <section class="content-inner">
      <br>
      @include ('partials.messages')
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3>Coodinación del Centro de Docencia</h3> <!-- Obtener valor de BD-->
        </div>
        <div class="panel-body">
          
          <div class="div_periodo">
                <h3>Periodo</h3>

                <table>
                  <tr>
                <div class="panel-body">

                  <select name="semestre" id="semestre" onChange="updateDate()">
                    <!-- Obtener valores de BD -->
                    @foreach($semestre_anio as $anio)
                      <option value="{{$anio->semestre_anio.'-1'}}">{{$anio->semestre_anio}}-1</option>
                      <option value="{{$anio->semestre_anio.'-2'}}">{{$anio->semestre_anio}}-2</option>
                    @endforeach
                  </select>

                  <select id = "periodo" name='periodo' width = '25%' onChange="updatePeriodo()">
                    <option value='s'>s</option>
                    <option value='i'>i</option>
                  </select>
                </div>
                </tr>
                <tr style=>
                  <td><button id="boton1" type="button" class="btn btn-primary" >Reporte participantes periodo</button></td>
                  <td><button id="boton3" type="button" class="btn btn-warning" >Criterio de aceptación de coordinación de cursos</button></td>
                </tr>
              </table>      
          </div>

            <div class="div_area">
                <h3>Área</h3>

                <div class="panel-body">
                  <select class='' id='area' name='area'> 
                    @foreach($coordinaciones as $coordinacion)
                      <option value="{{$coordinacion->id}}">{{$coordinacion->nombre_coordinacion}}</option>
                    @endforeach
                  </select>
                  <button id="boton2"  type="submit" class="btn btn-success">Visualizar Área</button>
                </div>
            </div>
        <br><br>
        </div>
      
		  	
       
      </div>
    </section>
    <br>
  </div>

  <script type="text/javascript"> 

      function sendGlobal(){
        var select = document.getElementById('semestre');
				var date = select.value
        var select2 = document.getElementById('periodo');
				var periodo = select2.value;
        //var url = '{{route("cd.participantes",[":var1",":var2"])}}'
        var url = '{{route("cd.participantes",[":var1"])}}'
        url = url.replace(":var1",date);
        //url = url.replace(":var2",periodo);
        window.location.href = url;
      }

      function sendArea(){
        var select = document.getElementById('semestre');
				var date = select.value
        var select2 = document.getElementById('periodo');
				var periodo = select2.value;
        var select3 = document.getElementById('area');
				var area = select3.value;
        var url = '{{route("cd.area",[":var1",":var2",":var3"])}}'
        url = url.replace(":var1",date);
        url = url.replace(":var2",periodo);
        url = url.replace(":var3",area);
        window.location.href = url;
      }

      function sendCriterio(){
        var select = document.getElementById('semestre');
				var date = select.value
        var select2 = document.getElementById('periodo');
				var periodo = select2.value;
        var url = '{{route("cd.criterio",[":var1"])}}'
        url = url.replace(":var1",date);
        window.location.href = url;
      }

      var boton = document.getElementById("boton1");
      boton.addEventListener("click", ()=>{
        sendGlobal();
      })


      var boton = document.getElementById("boton2");
      boton.addEventListener("click", ()=>{
        sendArea();
      })

      var boton = document.getElementById("boton3");
      boton.addEventListener("click", ()=>{
        sendCriterio();
      })
  

</script>
@endsection

