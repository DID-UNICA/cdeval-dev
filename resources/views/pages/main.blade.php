<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Centro de Docencia Evaluaciones</title>
    
    <link rel="icon" type="image/icon" href="{{ asset('/img/cdd.ico') }}" />	
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
</head>

<body>

<div class="container">
	<h1></h1>
	<div class="d-flex justify-content-center h-100">
		
		<div class="card">

		@if(session()->has('error'))
			<div class="alert alert-danger" role='alert'>{{session('error')}}</div>
		@endif

			<div class="card-header">
				<h3>Sistema de evaluaciones Centro de Docencia</h3>
			</div>

			<div class="card-body">
			
			<form class="form-horizontal" method="POST" action="">
                        {{ csrf_field() }}

					<!-- <div class="input-group form-group">
						<h4 style="margin-right:1.1cm;">Seleccionar Área:</h4>
						<div class="input-group-prepend">
							
							--comment<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<select name="area" id="area" style="width: 270px;">
							<option value="">Cómputo</option>
							<option value="">Coordinación del Centro de Docencia</option>
							<option value="">Gestión y vinculación</option>
						</select>
						--comment<input type="text" class="form-control" name="rfc" placeholder="RFC" value="{{ old('rfc') }}" required autofocus>
					</div> -->

					<!-- <div class="input-group form-group">
					<h4>Ingrese contraseña:</h4>
						<div class="input-group-prepend">
							--comment<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="pass2" style="width: 5%;" placeholder="Palabra clave" value="{{ old('numTrabajador') }}" required autofocus>
					</div> -->
					<div class="input-group form-group">
					<h4>Ingrese contraseña:</h4>
						<div class="input-group-prepend">
							<!--<span class="input-group-text"><i class="fas fa-key"></i></span>-->
						</div>
						<input type="password" class="form-control" name="pass1" style="width: 5%;" placeholder="Contraseña" value="{{ old('numTrabajador') }}" required autofocus>
					</div>
					
					<div class="form-group">
						<input type="submit" class="btn float-right login_btn">
					</div>

				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center">
					<a href="#"style="color:#FFFFFF;" >¿Olvidaste tu contraseña?</a>
				</div>
			</div>
		</div>
		<!--END CARD DIV-->
	</div>
	</div>	
</div>

</body>
</html> -->