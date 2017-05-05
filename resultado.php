<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Resultado Solicitud</title>
</head>
<body background="img/fondo.jpg">
	<div class="animated fadeInDown retraso-animate-1 espacio-arriba">
	<nav class="padding-largo text-center">
		<ul class="no-lista">
			<li class="col-md-4 inline-block"><a href="index.php" class="pacifico ">Digital Banking</a></li>
			<li class="col-md-4 inline-block"><a href="principa.php" class="pacifico ">Simulador Crédito</a></li>
			<li class="col-md-4 inline-block"><a href="contacto.php" class="pacifico ">Contacto</a></li>
		</ul>
	</nav>
	<img src="img/logo_banco_principal.jpg" class="col-md-1">    
	<img src="img/logo_banco_principal.jpg" class="col-md-1 imgstyle">

	<h1 class="text-center negrilla  pacifico">Resultado simulación crédito</h1>
		

	<?php 

		$nombre = $_POST['nombre'];
		$cedula = $_POST['cedula'];
		$genero = $_POST['genero'];
		$salario = $_POST['salario'];
		$valor = $_POST['valor'];
		$credito = $_POST['credito'];
		$otroPorcentaje = $_POST['otroPorcentaje'];
		$plazo = $_POST['plazo'];

		$interes =0.0;
		$cuota =0.0;

		if($genero == 1){
			$generoFinal = "Señora ";
		}else{
			$generoFinal = "Señor ";
		}


		switch ($credito) {
			case 1:
				$interes = 1.69;
				break;
			
			case 2:
				$interes = 1.50;
				break;
			case 3:
				$interes = 1.50;
				break;
			case 4:
				$interes = 1.8;
				break;
			case 5:
				$interes = $otroPorcentaje;
				break;
		}

		switch ($plazo) {
					case 12:
						$plazoAnnos = "1 año";
						break;
					case 24:
						$plazoAnnos = "2 años";
						break;
					case 36:
						$plazoAnnos = "3 años";
						break;
					case 48:
						$plazoAnnos = "4 años";
						break;
					case 60:
						$plazoAnnos = "5 años";
						break;
				}

		$cuota = $valor*$interes*1+$interes+$plazo / 1+$interes*$plazo-1;

		$salarioFinal = $salario * 0.30;

		$interesAnual = $cuota*$interes*$plazo;

		$totalPagar = $interesAnual + $valor;

		if($cuota > $salarioFinal){
			$estadoCredito = "Rechazado";
		}else{
			$estadoCredito = "Aprobado";
		}

		echo "<br><br><h2 class='espacio-arriba font-open-sans text-center font-mediana'>" .
			$generoFinal . $nombre . " identificado con el número de indentificación " . $cedula . " Le comunicamos que segun su ingreso mensual $" . $salario . " Su credito fue " .
			$estadoCredito;

			if($estadoCredito == "Rechazado"){
				echo " Debido a que su deducción mensual sería $" . $salarioFinal  . " y " .
				"supera el 30 % permitido por deducción" ."</h2>";
			}else{
				echo " y su resumen del crédito queda de la siguiente manera: <br><br>".
				"Detalle Credito: <br><br>" .
				"Monto: $" . $valor . "<br>" .
				"Duración Crédito: " . $plazoAnnos . "<br>" .
				"Intereses Anuales: $" . $interesAnual . "<br>".
				"Periodo de pago: " . $plazo ." meses <br>".
				"Cuota Mensual: $" . $cuota . "<br>" .
				"Total Pagar: $" . $totalPagar . "<br>" .
				"Cantidad Cuotas: " .$plazo . "<br>";
			}

	?>

	</div>

</body>
</html>