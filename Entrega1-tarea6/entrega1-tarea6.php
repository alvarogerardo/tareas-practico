<?php
	
	if(isset($_POST['enviar'])){

		$nombre = $_REQUEST['nombre'];
		$apellido = $_REQUEST['apellido'];
		$edad = $_REQUEST['edad'];
		$respuesta = "$nombre $apellido, eres ";
		
		if($edad<18){
			$respuesta = $respuesta . "menor de edad.";
		}else{
			$respuesta = $respuesta . "mayor de edad";
		}

		echo "$respuesta";

	}
	
?>