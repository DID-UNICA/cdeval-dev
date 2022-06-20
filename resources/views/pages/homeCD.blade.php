<!-- Vista: Home - Centro de Docencia y Área de Gestión y Vinculación -->
@extends('layouts.principal')

@section('contenido')
<!--Body content-->
<div id="inner">
  <section class="content-inner" style="padding-top: 5%">
    <br>
    @include ('partials.messages')
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3>Coodinación del Centro de Docencia</h3> <!-- Obtener valor de BD-->
      </div>
      <div class="panel-body">
          <div class="row">
            <div class="col-md-6">
              <h3>Periodo</h3>
              <div class="col-md-6">
                <select class="form-control" name="semestre" id="semestre">
                  <!-- Obtener valores de BD -->
                  @foreach($semestre_anio as $anio)
                  <option value="{{$anio->semestre_anio.'-1'}}">{{$anio->semestre_anio}}-1</option>
                  <option value="{{$anio->semestre_anio.'-2'}}">{{$anio->semestre_anio}}-2</option>
                  @endforeach
                </select>
              </div>
              <div class="col-md-2">
                <select id="periodo" name='periodo' class="form-control">
                  <option value='s'>s</option>
                  <option value='i'>i</option>
                </select>
              </div>
            </div>
                
            <div class="col-md-6">
              <h3>Área</h3>
              <div class="col-md-8">
                <select class='form-control' id='coord'>
                  @foreach($coordinaciones as $coordinacion)
                  <option value="{{$coordinacion->id}}">{{$coordinacion->nombre_coordinacion}}</option>
                  @endforeach
                </select>
              </div>
              <div class='col-md-2'>
                <button id='route-area' type="button" class="btn btn-success">Visualizar Área</button>
              </div>
            </div>
          </div>
        <div>
          <div class="row" style="margin-top: 1%">
            <div class="col-md-2">
              <button id='route-participantes' type="button" class="btn btn-info">Reporte participantes periodo</button>
            </div>
            <div class="col-md-3">
              <button id='route-criterio'type='button' class="btn btn-warning">Criterio de aceptación de coordinación de cursos</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<script type="text/javascript">
  function sendReporteParticipantes() {
    const periodo = document.getElementById('periodo').value
    const semestre = document.getElementById('semestre').value;
    let url = '{{route("cd.participantes",[":var1",":var2"])}}'
    url = url.replace(":var1", semestre);
    url = url.replace(":var2",periodo);
    window.location.href = url;
  }

  function sendVerArea() {
    const area = document.getElementById('coord').value;
    const periodo = document.getElementById('periodo').value
    const semestre = document.getElementById('semestre').value;
    let url = '{{route("cd.area",[":var1",":var2",":var3"])}}'
    url = url.replace(":var1", semestre);
    url = url.replace(":var2", periodo);
    url = url.replace(":var3", area);
    window.location.href = url;
  }

  function sendCriterioAceptacion() {
    let url = '{{route("cd.criterio",[":var1"])}}'
    const anio = document.getElementById('semestre').value;
    url = url.replace(":var1", anio);
    window.location.href = url;
  }

  const btn1 = document.getElementById("route-participantes");
  btn1.addEventListener("click", () => {
    sendReporteParticipantes();
  })


  const btn2 = document.getElementById("route-area");
  btn2.addEventListener("click", () => {
    sendVerArea();
  })

  const btn3 = document.getElementById("route-criterio");
  btn3.addEventListener("click", () => {
    sendCriterioAceptacion();
  })

</script>
@endsection
