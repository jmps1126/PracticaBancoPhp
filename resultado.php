<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/main.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Resultado Solicitud</title>
</head>
<body>
	<div class="col-md-10 center-block text-center espacio-arriba quitar-float">
		<?php 
	
		$nombre = $_POST['nombre'];
		$cedula = $_POST['cedula'];
		$telefono = $_POST['telefono'];
		$genero = $_POST['genero'];
		$credito = $_POST['credito'];
		$otroCredito = $_POST['otroCredito'];
		$valor = $_POST['valor'];
		$tiempoCredito = $_POST['tiempoCredito'];
		$plazo = $_POST['plazo'];
		
		//determinamos su genero
		if($genero == 1){
			$generoFinal = "Señora";
		}else{
			$generoFinal = "Señor";
		}












				echo $generoFinal ." " . $nombre . " Le comunicamos que segun su ingreso mensual
				se le consede / o no se le consede (El prestamo se da si la cuota no pasa del 30% del salario que gana, cuando es no se dar motivo, cuando es si mostrar:)

				Resumen del credito:
				Monto
				Duracion credito (En años)
				Intereses anuales
				Periodo de pago (Meses)
				Cuota mensual 
				Total a pagar
				Cantidad de cuotas";	


 		?>
	</div>

</body>
</html>