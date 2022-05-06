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
    @include ('partials.messages')
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
        @csrf
        <table>
          <tr>
            <div class="input-group">
              <td>
                {!!Form::label('pattern','Buscar', ["class" => "form-label"])!!}
                {!!Form::text("pattern", null, [ "class" => "form-control", "placeholder" => "Buscar Profesor"])!!}
              </td>
              <td>
                <button style='margin-top:30%; margin-left:5%;' class="btn btn-search " type="submit">Buscar</button>
              </td>
            </div>
          </tr>
        </table>
        {!! Form::close() !!}
      </div>
      <div class="panel-body">
        <h3>{{$nombre_curso}}</h3>
        <br>
        <div class="div_info">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Participante</th>
                <th>Evaluar</th>
                <th>Modificar</th>
                <th>Eliminar</th>
              </tr>
            </thead>
            <tbody>
              @foreach($participantes as $participante)
              <tr>
                <td>
                  <p>{{$participante->getProfesor()->getNombre()}}</p>
                </td>
                <td>
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
                <td>
                  <button type="button" class="btn btn-danger" style="margin: 10px;" data-toggle="modal" data-target="#myModal{{$participante->id}}">Borrar evaluación final del curso</button>
                </td>
              </tr>

              <!-- Modal -->
              <div class="modal fade" id="myModal{{$participante->id}}" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Eliminar Evaluación</h4>
                    </div>
                    <div class="modal-body">
                      <p>¿Está seguro de eliminar la evaluación del participante {{ $participante->getProfesor()->getNombre() }}?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-normal" data-dismiss="modal" aria-label="Close">Cancelar</button>
                      @if(Auth::user()->es_admin === True)
                        <button onclick="window.location='{{route("cd.eliminar.evaluacion",$participante->id)}}'" class="btn btn-danger">Eliminar</button>
                      @else
                        <button onclick="window.location='{{route("area.eliminar.evaluacion",$participante->id)}}'" class="btn btn-danger">Eliminar</button>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </tbody>

          </table>
        </div>
        <br>
        <br>
      </div>
      <!--Cierre panel-body-->

    </div>
  </section>
  <br>
</div>
@endsection
