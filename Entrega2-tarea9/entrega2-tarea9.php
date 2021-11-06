<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 9</title>
</head>
<body>

	<?php

		$dias_semana = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado",
							 "Domingo");

		echo "El primero y el último dia de la semana son: " . $dias_semana[0] . " y " 
		. $dias_semana[count($dias_semana)-1];

	?>
	
</body>
</html>