<?php

	$usuario = array("Juan" => "453at456",
					 "Maria" => "tr543e23",
					 "Sandra" => "ss5432a64",
					 "Gaston" => "re6540e4",
					 "Pablo" => "45rtg567");

	foreach ($usuario as $key => $value) {
		
		echo "Nombre de Usuario: ". $key . " Contraseña: ". $value . "<br>";
	}

?>