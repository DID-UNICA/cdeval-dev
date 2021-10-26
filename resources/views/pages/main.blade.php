<!DOCTYPE html>
<html>
<head>
	<title>Centro de Docencia Evaluaciones</title>
    <link rel="icon" type="image/icon" href="{{ asset('/img/cdd.ico') }}" />	
    <!--Bootsrap 5-->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <!--Fontawesome CDN-->
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
</head>

<body>
  <div class="container">
    <div class="d-flex justify-content-center h-100">
      <div class="card">
        @if(session()->has('msj'))
          <div class="alert alert-danger" role='alert'>{{session('msj')}}</div>
        @endif
        <div class="card-header">
          <h3>Sistema de evaluaciones del Centro de Docencia</h3>
        </div>

        <div class="card-body">
          <form class="form-horizontal" method="POST" action="{{ route('coordinador.login.post') }}">
            {{ csrf_field() }}
            <div class="mb-3">
              <label for="area" class="form-label" style="color:white">Seleccionar Área</label>
              <select name="abreviatura" id=abreviatura class="form-select" aria-label="Default select example" required autofocus>
                <option selected>Escoja el Área</option>
                @foreach ($coordinaciones as $nombre_coordinacion => $abreviatura)
                  <option value= {{$abreviatura}} > {{$nombre_coordinacion}} </option>
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label for="usuario" class="form-label" style="color:white">Contraseña</label>
              <input name="password" type="password" class="form-control" id="password" required>
            </div>
            <div class="mb-3">
              <button type="submit" class="btn login_btn">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>	
</body>
</html>