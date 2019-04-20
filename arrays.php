<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		// Leccion sobre los arreglos:

		$friends = array("karvin","pablo","samuel","alex");
		

// Para cambiar el nombre ubicado en la posicion deseada:
		$friends[2]= "miguel";

		// Para obtener el nombre en la x posicion o modificar en cierta posicion:
		echo $friends[2]; 

		// Agregar otro valor ademas de lo que ya estan:

		echo "<br>";

		echo $friends[4] = "miguelangel";
		echo "<br>";

		//Para contar los elementos de un arreglo:

		echo count($friends);




	  ?>

</body>
</html>