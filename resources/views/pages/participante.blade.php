<!-- Vista: Visualizar Participante -->
@extends('layouts.principal')
@section('contenido')

<style>
table, td, th{
  padding: 10px;
}
td{
  text-align: center;
}
</style>
        <!--Body content-->
<script type="text/javascript">
  var esperando = [];
        function agregarLista(iter, lugar){
          console.log("Di algo");
          console.log(iter);
          console.log(lugar);

          esperando[lugar-1]=iter;
        }
        function Esperador(iter){
          var auxList = 0;
          var checkB = document.getElementById("Lista"+iter);
          var container = document.getElementById("espera"+iter);
          var xua = document.getElementById("aux"+iter);
          if (checkB.checked == true){
            container.value = esperando.push(iter);
            xua.value = container.value;
          }else{
            for (auxList = 0; auxList < esperando.length; auxList++) {
              if (esperando[auxList] == iter){ break;}
           }
            esperando.splice(auxList,1);
            container.value = '';
            xua.value = container.value;
            for (auxList; auxList < esperando.length; auxList++) {
              var container2 = document.getElementById("espera"+esperando[auxList]);
              var xua2 = document.getElementById("aux"+esperando[auxList]);
              var content2 = container2.innerHTML;
              container2.value = auxList+1;
              xua2.value = container2.value;
              container2.innerHTML= content2;
            }

          }
          var content = container.innerHTML;
          container.innerHTML= content;
        }
</script>
<div class="content">
    <section class="content-inner">
        <br> 
        <!--//@ include ('partials.messages')-->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Lista de participantes de {{$curso->getNombreCurso()}}</h3>
                <h4>Instructores(es): {{ $curso->getProfesores()}}</h4>

            </div>
        </div>
        <!--<form class="form-horizontal" method="POST" action=" route('curso.ver-respuesta') ">
                  {{csrf_field()}}-->
									@if( empty($users) )
										<p>Aún no hay alumnos inscritos en este curso</p>
										<a href="{{ URL::to('curso/inscripcion', $curso->id) }}" class="btn btn-success" style='margin: 20px;'>Inscribir Participantes</a>
									@else
									
                  
            <div class="panel-body tablaFija" style="overflow-x:auto;">
                  <input name="curso_id" type="hidden" value="{{$curso->id}}">
                  <table width="100%">
                      <tr>
                      <th width="10%">Nombre</th>
                          <th></th>
                          <th></th>
                          <th>Lista de Espera</th>
                          <th></th>
                          <th>Adicional</th>
                          <th>División</th>
                          <th>Confirmó</th>
                          <th>Canceló</th>

                          <th>Asistió</th>
                          <th>Acreditó</th>
                          <th>Calificación</th>
                          <th>Hoja de <br>Evaluación</th>
                          <th>Causa de no <br>acreditación</th>
                          <th>Externo </th>
                          <th>Pago de <br>Curso</th>
                          <th>Monto de <br>pago</th>
                          <th>Comentarios</th>

                      </tr>
                      @for ($i = 0; $i < sizeof($users); $i++)
                          <tr>
                          <td>{{ $users[ $i ]->apellido_paterno."    " }} </td>
                          <td>{{ $users[ $i ]->apellido_materno."    " }} </td>
                          <td>{{ $users[ $i ]->nombres }}</td>

                              <td>
                                  @if($participantes[$i]->espera > 0)
                                    <input type="input" name="espera[]" size="3" value="{{$participantes[$i]->espera}}" id="espera{{$i}}" disabled>
                                    <input type="hidden" name="aux[]" id="aux{{$i}}" value="{{$participantes[$i]->espera}}">
                                  @else
                                    <input type="input" name="espera[]" size="3" value="" id="espera{{$i}}" disabled>
                                    <input type="hidden" name="aux[]" id="aux{{$i}}">
                                  @endif
                                    <script type="text/javascript">
                                      agregarLista({{$i}},{{$participantes[$i]->espera}});
                                    </script>
                              </td>

                              @if ($participantes[$i]->estuvo_en_lista)
                                  <td><input onclick="Esperador({{$i}})" type="checkbox" name="estuvo_en_lista[]" value=" {{$participantes[$i]->profesor_id}}" checked id="Lista{{$i}}" disabled></td>
                              @else
                                  <td><input onclick="Esperador({{$i}})" type="checkbox" name="estuvo_en_lista[]" value="{{$participantes[$i]->profesor_id}}" id="Lista{{$i}}" disabled></td>
                              @endif
                              @if ($participantes[$i]->adicional)
                              <td> <input type="checkbox" name="adicional[]" value="{{$participantes[$i]->profesor_id}}" checked id="Adicional{{$i}}" disabled></td>
                              @else
                              <td> <input type="checkbox" name="adicional[]" value="{{$participantes[$i]->profesor_id}}" id="Adicional{{$i}}" disabled></td>
                              @endif
                              @if($users[$i]->unam == 1)
                                <td>{{ $users[ $i ]->procedencia}}</td>
                              @else
                                <td>{{ $users[ $i ]->procedencia}}</td>
                              @endif

                              @if ($participantes[$i]->confirmacion)
                                  <td><input type="checkbox" name="confirmaciones[]" value=" {{$participantes[$i]->profesor_id}}" checked id="Confirmacion{{$i}}" disabled></td>
                              @else
                                  <td><input type="checkbox" name="confirmaciones[]" value= "{{$participantes[$i]->profesor_id}}" id="Confirmacion{{$i}}" disabled></td>
                              @endif

                              @if ($participantes[$i]->cancelación)
                                  <td><input type="checkbox" name="cancelaciones[]" value= "{{$participantes[$i]->profesor_id}}" checked onclick="cancelar({{ $i }})" id="Cancelacion{{$i}}" disabled></td>
                              @else
                                  <td><input type="checkbox" name="cancelaciones[]" value= "{{$participantes[$i]->profesor_id}}" onclick="cancelar({{ $i }})" id="Cancelacion{{$i}}" disabled></td>
                              @endif

                              @if ($participantes[$i]->asistencia)
                                  <td><input type="checkbox" name="asistencia[]" value="{{$participantes[$i]->profesor_id}}" checked id="Asistencia{{$i}}" disabled></td>
                              @else
                                  <td><input type="checkbox" name="asistencia[]" value="{{$participantes[$i]->profesor_id}}" id="Asistencia{{$i}}" disabled></td>
                              @endif

                              @if ($participantes[$i]->acreditacion)
                                  <td><input type="checkbox" name="acreditacion[]" value="{{$participantes[$i]->profesor_id}}" checked onclick="deshabilitarAcreditacion({{ $i }})" id="Acreditacion{{$i}}" disabled></td>

                              @else
                                  <td><input type="checkbox" name="acreditacion[]" value= "{{$participantes[$i]->profesor_id}}" onclick="deshabilitarAcreditacion({{ $i }})" id="Acreditacion{{$i}}" disabled></td>
                              @endif
                              <td>
                                  <input name="alumnos[]" type="hidden" value="{{$participantes[$i]->profesor_id}}">
                                  <input type="number" name="calificaciones[]" value="{{$participantes[$i]->calificacion}}" id="Calificacion{{$i}}" min="0" max="10" /*oninvalid="this.setCustomValidity('Ingrese una calificacion del 0 al 10')" oninput="this.setCustomValidity('')" step="0.01"*/  disabled></td>
                              @if ($participantes[$i]->contesto_hoja_evaluacion)
                                  <td><input type="checkbox" name="hoja_evaluacion[]" value="{{$participantes[$i]->profesor_id}}" checked id="Evaluacion{{$i}}" disabled></td>

                              @else
                                  <td><input type="checkbox" name="hoja_evaluacion[]" value="{{$participantes[$i]->profesor_id}}" id="Evaluacion{{$i}}" disabled></td>

                              @endif

                                <td>
                                  <input type="text" name="causa_no_acreditacion[]" value="{{$participantes[$i]->causa_no_acreditacion}}" id="Causa{{ $i }}" disabled>
                                </td>
                              @if ($users[$i]->unam == 1)
                                <td> <input type="checkbox" name="es_externo[]" id="Externo{{$i}}" disabled></td>
                              @elseif ($users[$i]->unam == 0)
                                <td> <input type="checkbox" name="es_externo[]" checked id="Externo{{$i}}" disabled></td>
                              @else
                                <td> <input type="checkbox" name="es_externo[]" id="Externo{{$i}}" disabled></td>
                              @endif

                              @if ($participantes[$i]->pago_curso)
                                  <td><input type="checkbox" name="pago_curso[]" value=" {{$participantes[$i]->profesor_id}}" onclick="deshabilitarPago({{ $i }})" id="Pago{{ $i }}" checked  disabled></td>
                                  <td><input type="text" name="monto_pago[]" value="{{$participantes[$i]->monto_pago}}"  id="Monto{{$i }}" pattern="^\d*(\.\d{0,2})?$" title="Monto numérico a dos digitos decimales" disabled></td>

                              @else
                                  <td><input type="checkbox" name="pago_curso[]" value=" {{$participantes[$i]->profesor_id}}" id="Pago{{ $i }}" onclick="deshabilitarPago({{ $i }})" disabled></td>
                                  <td><input type="text" name="monto_pago[]" value="{{$participantes[$i]->monto_pago}}"  id="Monto{{$i }}" pattern="^\d*(\.\d{0,2})?$" title="Monto numérico a dos digitos decimales" disabled></td>

                              @endif


                              <td> <input type="text" value="{{$participantes[$i]->comentario}}" name="comentario[]" id="Comentario{{$i}}" disabled></td>




                            <!-- Modal -->
                            <div class="modal fade" id="myModal{{$i}}" role="dialog">
                              <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Eliminar Profesor</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>¿Está seguro de eliminar al profesor?</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-normal" data-dismiss="modal" aria-label="Close">Cancelar</button>
                                    <a href="{{ URL::to('curso/baja-profesor', [$users[$i]->id,$curso->id,$participantes[$i]->espera]) }}" class="btn btn-danger">Dar de baja</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                  </tr>
                    @endfor
                    
                </table>
              </form>
							@endif
    </section>

    <script>
      var ButtonA;
      var ButtonB;


      /*for(var i=0; i< {{ sizeof($users)}} ; i++  ){

          buttonA = document.getElementById("A"+i);
          buttonB = document.getElementById("B"+i);



          buttonA.addEventListener('click', function(event) {
          console.log(buttonA);
          console.log(buttonB);
          console.log("Click");
            buttonB.disabled = !buttonB.disabled;
            console.log(buttonB.disabled);
        });

        }*/
        /*function deshabilitarPago(iter){
          console.log("Entré a funcion");
          console.log(iter);
          buttonA = document.getElementById("Pago"+iter);
          buttonB = document.getElementById("Monto"+iter);
          console.log(buttonA);
          console.log(buttonB);
          buttonB.disabled = !buttonB.disabled;
        }*/

        function cancelar(iter){
          console.log("Entré a funcion");
          console.log(iter);
          buttonA=document.getElementById("Lista"+iter);
          buttonA.checked = false;
          Esperador(iter);
          buttonB=document.getElementById("Confirmacion"+iter);
          buttonC=document.getElementById("Asistencia"+iter);
          buttonD=document.getElementById("Acreditacion"+iter);
          buttonE=document.getElementById("Calificacion"+iter);
          //buttonF=document.getElementById("Evaluacion"+iter);
          buttonG=document.getElementById("Causa"+iter);
          buttonH=document.getElementById("Monto"+iter);
          buttonI=document.getElementById("Pago"+iter);

          if(!buttonA.disabled){
              buttonA.disabled = true;
          }else{
              buttonA.disabled = false;

          }
          if(!buttonB.disabled){
              buttonB.disabled = true;
          }else{
              buttonB.disabled = false;
          }
          if(!buttonC.disabled){
              buttonC.disabled = true;
          }else{
              buttonC.disabled = false;
          }
          if(!buttonD.disabled){
              buttonD.disabled = true;
          }else{
              buttonD.disabled = false;
          }
          if(!buttonE.disabled){
              buttonE.disabled = true;
          }
          else{
              buttonE.disabled = false;
          }
          /*if(!buttonF.disabled){
              buttonF.disabled = true;
          }else{
              buttonF.disabled = false;
          }*/
          if(!buttonG.disabled){
              buttonG.disabled = true;
          }else{
              buttonG.disabled = false;
          }

          if(!buttonH.disabled){
              buttonH.disabled = true;
          }else{
              buttonH.disabled = false;
          }
          if(!buttonI.disabled){
              buttonI.disabled = true;
          }else{
              buttonI.disabled = false;
          }



        }

    </script>

    <script>
        for(var i=0;i<{{ sizeof($users)}};i++ ){
          console.log(i);
          botonCancelar=document.getElementById("Cancelacion"+i);
          console.log(botonCancelar);
          if(botonCancelar.checked){
            cancelar(i);
          }
        }
     </script>

@endsection
