<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tarea 8</title>
	<link rel="stylesheet" href="entrega2-tarea8.css">
</head>
<body>
		
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
		<label for="nombre" id="nombre">Nombre:</label>
		<input type="text" name="nombre" required>
		
		<div><p>Que deportes practicas?...</p></div>
		
		<label for="futbol">Fútbol</label>
		<input type="checkbox" name="deportes[]" id="futbol" value="Fútbol">

		<label for="rugby">Rugby</label>
		<input type="checkbox" name="deportes[]" id="rugby" value="Rugby">

		<label for="basket">Basket</label>
	    <input type="checkbox" name="deportes[]" id="basket" value="Basket">

		<label for="tennis">Tennis</label>
		<input type="checkbox" name="deportes[]" id="tennis" value="Tennis">

		<label for="voley">Vóley</label>
		<input type="checkbox" name="deportes[]" id="voley" value="Vóley">

		<label for="e-sports">E-Sports</label>
		<input type="checkbox" name="deportes[]" id="e-sports" value="E-Sports">

		<input type="submit" name="enviar">
	</form>	

	<?php

		if(isset($_POST['enviar'])){

			$nombre = $_REQUEST['nombre'];
			
		    if(is_array($_POST['deportes']))	{

		    	$seleccionado = '';
		    	$largo_deportes = count($_POST['deportes']);
		    	$valor_actual = 0;

		    	foreach ($_POST['deportes'] as $key => $value) {
		    		
		    		$valor_actual++;

		    		if ($valor_actual < $largo_deportes) {
		    			 
		    			 $seleccionado .= $value . ", ";
		    		}else{

		    			$seleccionado .= $value . ".";
		    		}
		    		
		    	}

		        echo $nombre . " practicas $valor_actual deportes, $seleccionado";
		      
		    }else{

		    	 echo $nombre . " no practicas ningun deporte?";
		    }
	   }	
	?>	
</body>
</html>