<?php

	$ciudades = array("Montevideo", "Tacuarembo", "Salto", "Maldonado",
					  "Rocha", "Rivera", "Paisandu", "Melo",
					  "Durazno", "Treinta y Tres", "Cerro Largo","Flores",
					  "Florida", "Lavalleja", "Artigas", "Colonia",
					  "Canelones", "San Jose", "Rio Negro", "Departamento 20");

	for ($i=0; $i<$array.count($ciudades); $i++) { 
		
		if($i%4==0){

			echo "<br>";		
		}
		echo "$ciudades[$i], ";
	}

	echo "<br><br>";

	for ($i=$array.count($ciudades)-1; $i>=0; $i--) { 
		
		if($i%4==0){

			echo "<br>";		
		}
		echo "$ciudades[$i], ";
	}
?>