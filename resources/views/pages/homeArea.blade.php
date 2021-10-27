<!-- Vista:  Home - Áreas -->
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
      <div class="panel panel-default">

        <div class="panel-heading">
          <h3>{{$coordinacion->nombre_coordinacion}}</h3> <!-- Obtener valor de BD-->
        </div>

        @if(session()->has('message'))
          <div class="alert alert-success" role='alert'>{{session('message')}}</div>
        @endif

        <div class="panel-body">
            <h4>Buscar</h4>
            <br>
            {!! Form::open(["route" => ["area.buscar.curso",$coordinacion->id], "method" => "POST"]) !!}
              <table>
                <tr>
                  <div class="input-group">
                    <td>
                      {!!Form::text("pattern", null, [ "class" => "form-control", "placeholder" => "Buscar Curso"])!!}
                    </td>
                    <td>
                      {!! Form::select('type', array(
                            'nombre' => 'Por nombre',
                            'instructor' => 'Por instructor'),
                            null,['class' => 'btn dropdown-toggle pull-left'] ) !!}
                    </td>
                    <td>
                      <span class="input-group-btn col-md-2">
                        <button class="btn btn-search " type="submit">Buscar</button>
                      </span>
                    </td>
                    <input type="hidden" name="periodo_anio" value="{{isset($periodo_anio)? $periodo_anio:null}}">
                    <input type="hidden" name="periodo_pi" value="{{isset($periodo_pi)? $periodo_pi:null}}">
                    <input type="hidden" name="periodo_si" value="{{isset($periodo_si)? $periodo_si:null}}">
                  </div>
                </tr>
              </table>
            {!! Form::close() !!}
            <br>
            <h4>Periodo</h4>
            <br>
            <form method="POST" action="{{action('AreaController@cambioFecha')}}">
                <table>
                  <tr>
                    <td>
                      <input width= '25%' min=1960 max=3000 type="number" placeholder="Año">

                    </td>
                    <td>
                      <select name='semestre_pi' width = '25%'>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                      </select>
                    </td>
                    <td>
                      <select name='semestre_si' width = '25%'>
                        <option value='s'>s</option>
                        <option value='i'>i</option>
                      </select>
                    </td>
                </div>
                <td>
                {{ csrf_field ()}}
                 <button id="area"  type="submit" class="btn btn-success">Buscar</button>
                </td>
              </table>
            </form>
            <div class="panel-body">
            <div class="div_info">
              <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Curso</th>
                                    <th>Instructor(es)</th>
                                    <th>Evaluaciones</th>
                                    <th>Participantes</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                              @foreach($cursos as $curso)
                                <tr>
                                    <td style="width:350px;">{{$curso->getCatalogoCurso()->nombre_curso}}</td>
                                    <td style="width:550px;">                                    
                                      <p>{{$curso->getCadenaInstructores()}}</p>
                                    </td>
                                    <td>
                                      <button class="btn btn-success" id="btn_eval" onclick="window.location='{{ route("area.evaluacion",[$curso->id]) }}'">Capturar evaluación final de curso</button>
                                    </td>
                                    <td><button href="" class="btn btn-warning" id="btn_participantes" onclick="window.location='{{ route("area.participantes",[$curso->id]) }}'">Visualizar participantes inscritos</button></td>
                                </tr>
                              @endforeach
                            </tbody>
                      
              </table>   
            </div>
		  		<br>
			  	<br>
        </div> <!--Cierre panel-body-->

      </div>
    </section>
    <br>
  </div>
@endsection