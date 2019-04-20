<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="calculatorv2.php" method="post">
	First number:<input type="number
	" name="number1">
	<br>
	Operator: <input type="text" name="operator"><br>
Second number:	<input type="number" name="number2">
	<br>
	<input type="submit">
</form>

<?php
	$number1 = $_POST["number1"];
	$number2 =$_POST["number2"];
	$operator = $_POST["operator"];

	if ($operator == "+") {
		echo $number1+$number2;
	}

	if ($operator == "-") {
		echo $number1-$number2;
	}

	if ($operator == "*") {
		echo $number1*$number2;
	}

	if ($operator == "/") {
		echo $number1/$number2;
	}


  ?>

</body>
</html>