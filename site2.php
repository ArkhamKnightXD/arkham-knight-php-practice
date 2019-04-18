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
// conseguir el nombre del formulario
php echo $_GET["name"]  ?>

 <?php
//Conseguir la edad del formulario
  echo $_GET["age"] ?>

</body>
</html>