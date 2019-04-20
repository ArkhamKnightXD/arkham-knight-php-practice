<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		// leccion sobre los arreglos

		$friends = array("karvin","pablo","samuel","alex");
		

// para cambiar el nombre ubicado en la posicion deseada
		$friends[2]= "miguel";

		// obtener el nombre en la x posicion o modificar en cierta posicion
		echo $friends[2]; 

		// agregar otro valor ademas de lo que ya estan

		echo "<br>";

		echo $friends[4] = "miguelangel";
		echo "<br>";

		//para contar los elementos de un arreglo

		echo count($friends);




	  ?>

</body>
</html>