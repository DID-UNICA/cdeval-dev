<!-- Vista: Main Contestar Evaluación -->
@extends('layouts.principal')

@section('contenido')
    <br>
    <br>
    <br>
    <div id="inner">
    <div class="top-bar">            
    </div>
    <section class="content-inner">
      <br>
      @if(session()->has('message-success'))
        <div class="alert alert-success" role='alert'>{{session('message-success')}}</div>
      @elseif(session()->has('message-danger'))
        <div class="alert alert-danger" role='alert'>{{session('message-danger')}}</div>
      @elseif(session()->has('message-warning'))
        <div class="alert alert-warning" role='alert'>{{session('message-warning')}}</div>
      @endif
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3>Coodinación del Centro de Docencia</h3> <!-- Obtener valor de BD-->
        </div>
        <br>
        <br>
        <div class="panel-body">
          @if(Auth::user()->es_admin === True)
            {!! Form::open(["route" => ["cd.buscar.instructor",$curso_id], "method" => "POST"]) !!}
          @else
            {!! Form::open(["route" => ["area.buscar.instructor",$curso_id], "method" => "POST"]) !!}
          @endif
          <table>
            <tr>
              <div class="input-group">
                <td>
                  {!!Form::text("pattern", null, [ "class" => "form-control", "placeholder" => "Buscar Profesor"])!!}
                </td>
                <td>
                  {!! Form::select('type', array(
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
        </div>
        <div class="panel-body">
            <h3>{{$nombre_curso}}</h3>
            <br>
            <h4>Buscar</h4>
            <div class="div_info">
              <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Particpante</th>
                        <th>Evaluar</th>
                        <th>Modificar</th>
                    </tr>
                </thead>
                  <tbody>
                    @foreach($participantes as $participante)
                      <tr>
                          <td>
                              <p>{{$participante->getProfesor()->getNombre()}}</p>
                          </td>
                          <td>
                            <!-- TODO:Implementar ruta en demas métodos -->
                            @if(Auth::user()->es_admin === True)
                              <button onclick="window.location='{{route("cd.evaluacion.vista",$participante->id)}}'" class="btn btn-success">Evaluación final de curso</button>
                            @else
                              <button onclick="window.location='{{route("area.evaluacion.vista",$participante->id)}}'" class="btn btn-success">Evaluación final de curso</button>
                            @endif
                          </td>
                          <td>
                          @if(Auth::user()->es_admin === True)
                              <button onclick="window.location='{{route("cd.modificar.evaluacion",$participante->id)}}'" class="btn btn-warning">Modificar evaluación final de curso</button>
                            @else
                              <button onclick="window.location='{{route("area.modificar.evaluacion",$participante->id)}}'" class="btn btn-warning">Modificar evaluación final de curso</button>
                            @endif
                        </td>
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