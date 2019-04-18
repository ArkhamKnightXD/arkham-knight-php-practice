<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="calculadora.php" method="get">
	<input type="number
	" name="number1">
	<br>
	<input type="number" name="number2">
	<br>
	<input type="submit">
</form>

<?php echo $_GET["number1"] + $_GET["number2"] ?>


</body>
</html>