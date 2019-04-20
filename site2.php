<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action ="site2.php" method="get">
Name: <input type="text" name ="name">
<br>
Age:<input type="number" name="age">
<br>
<input type="submit" > 
</form>

<?

// Para conseguir los datos en php desde un formulario en html se trabaja con los nombres para obtener los datos.
// Conseguir el nombre del formulario:
php echo $_GET["name"]  ?>

 <?php
//Conseguir la edad del formulario:
  echo $_GET["age"] ?>

</body>
</html>