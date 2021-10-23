<?php

	$personajes = array("Gandalf","Frodo","Galadriel","Aragorn","Pippin",
						"Merry","Radagast","Beorn","Tauriel","Sam",
						"Elrond","Legolas","Gollum","Arwen","boromir",
						"Faramir","Gimli","Saruman","Bilbo","Theoden");
	$cont = 0;

	echo "<h2>Personajes del señor de los anillos...</h2><br>";
	
	while ($cont < $array.count($personajes)) {
		
		if($cont == $array.count($personajes)-1){	
			echo "$personajes[$cont].";
		}elseif($cont!=0 && $cont==4 or $cont==9 or $cont==14){	
			echo "$personajes[$cont],<br>";
		}else{	
			echo "$personajes[$cont], ";
		}

		$cont++;		
	}

	echo "<br><h3>Y en sentido inverso...</h3>";

	$cont--;

	
	while($cont>=0){

		if($cont==0){	
			echo "$personajes[$cont].";
		}elseif($cont!=0 && $cont%5==0){
			echo "$personajes[$cont],<br>";
		}else{	
			echo "$personajes[$cont], ";
		}

		$cont--;	
	}						

?>