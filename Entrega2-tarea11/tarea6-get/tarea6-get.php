<?php
	
	if(isset($_GET['enviar'])){

		$nombre = $_GET['nombre'];
		$apellido = $_GET['apellido'];
		$edad = $_GET['edad'];
		$respuesta = "$nombre $apellido, eres ";
		
		if($edad<18){
			$respuesta = $respuesta . "menor de edad.";
		}else{
			$respuesta = $respuesta . "mayor de edad";
		}

		echo "$respuesta";

	}
	
?>