<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/main.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Formulario Credito</title>
</head>
<body background="img/pantallaPrincipal.jpg">

	<div class="col-md-4 center-block text-center espacio-arriba quitar-float">

		<h3 class="text-center negrilla">Formulario Solicitud Crédito</h3>
		<br>

		<form method="post" name="frm" action="resultado.php">

			<div class="form-group">
				<label>Nombre Completo</label>
				<input type="text" class="form-control"  name="nombre">
			</div>

			<div class="form-group">
				<label>Cédula Ciudadania</label>
				<input type="number" class="form-control" name="cedula">
			</div>

			<div class="form-group">
				<label>Teléfono</label>
				<input type="number" class="form-control" name="telefono">
			</div>

			<div class="form-group">
				<label>Genero</label>
					<select class="form-control selectpicker" name="genero">
						<option value="1">Femenino</option>
						<option value="2">Masculino</option>
					</select>
			</div>

			<div class="form-group">
				<label>Credito</label>
					<select class="form-control selectpicker" name="credito">
						<option value="1">Vivienda 1.50</option>
						<option value="2">Educacion 1.50</option>
						<option value="3">Vehiculo 1.8</option>
						<option value="4">Otro</option>
					</select>
					<label>En caso de seleccionar otro</label>
					<input type="number" class="form-control" name="otroCredito">
			</div>

			<div class="form-group">
				<label>Valor solicitado</label>
				<input type="number" class="form-control" name="valor">
			</div>

			<div class="form-group">
				<label>Plazo Credito</label>
					<select class="form-control selectpicker" name="tiempoCredito">
						<option value="1">Años</option>
						<option value="2">Meses</option>
					</select>
					<br>
					<input type="number" class="form-control" name="plazo">
			</div>
			
			<div class="form-group">
				<input type="submit" value="Enviar" class="btn btn-info text-center">
			</div>

		</form>
	</div>

</body>
</html>