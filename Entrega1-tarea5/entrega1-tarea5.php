<?php

	echo "<h2>Tabla del 4 con for y while...</h2>";

	for ($i=0; $i<=10 ; $i++) { 
		echo "$i * 4 = " . $i*4 . "<br>";	
	}

	echo "<br>";

	$valor = 0;


	while ($valor<=10) {
		echo "$valor * 4 = " . $valor*4 . "<br>";
		$valor++;
	}
?>