<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tarea 7</title>
	<link rel="stylesheet" href="entrega2-tarea7.css">
</head>
<body>

	<h1 class="encabezado">Ejercicio 7</h1>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
		<div>
			<label for="nombre" class="nombre">Nombre:</label>
			<input type="text" name="nombre" class="input-nombre" id="nombre" required>
		</div>
		
		<div>
			<input type="radio" class="radio" name="estudios" id="no-estudios" checked value="no tiene estudios">
			<label for="no-estudios">No tiene estudios</label>
		</div>
		
		<div>
			<input type="radio" class="radio" name="estudios" id="primarios" value="tiene estudios primarios">
			<label for="primarios">Estudios primarios</label>
		</div>
		
		<div>
			<input type="radio" class="radio" name="estudios" id="secundarios" value="tiene estudios secundarios">
			<label for="secundarios">Estudios secundarios</label>
		</div>

		<div>
			<input type="submit" name="enviar" value="Enviar" class="boton">
		</div>
	
	</form>

	<?php

		if(isset($_POST['enviar'])){

			$nombre = $_REQUEST['nombre'];
			$estudios = $_REQUEST['estudios'];

			echo "<br><br>$nombre $estudios";
			
		}
	?>

	
</body>
</html>