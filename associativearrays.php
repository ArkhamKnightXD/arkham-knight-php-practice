<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action ="associativearrays.php" method="post">
Name: <input type="text" name ="student">
<br>
<input type="submit" > 
</form>

	<?php 

		// este tipo de arreglos se usa para guardar key values, basicamente si buscamos el valor key osea el nombre el arreglo nos devolvera el value osea la calificacion

		$grades = array("Jim"=>"A+", "Pam"=>"B-","Oscar"=>"C");
// se puede cambiar los valores tambien y usar demas funciones de los arreglos normales

		$grades["Jim"] = "F";


		echo $grades["Jim"];

		echo "<br>";
		// conseguir los valores del formulario mendiante associative arrays
		echo $grades[$_POST["student"]];



	 ?>

</body>
</html>