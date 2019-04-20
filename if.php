<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

// condicional if

$isMale = true;
$isTall = false;

// Cuando se trata de booleanos no es necesario poner el == true funciona de ambas formas.

if ($isMale== true && $isTall == true) {

	echo "This person is male and is tall";
}

elseif ($isMale == true && $isTall!= true) {
	echo "This person is just male and not tall<br>";
}
//forma corta de trabajar con if
elseif (!$isMale && $isTall) {

	echo "this person is not male but is tall<br>";
}

else {
	echo "This person isn't male neither tall<br>";
}



// leccion de if statements trabajando con operadores de mayor o menor tambien se puede usar el >= o <=

function getMax($number1,$number2, $number3)
{
	if ($number1 > $number2 && $number1 > $number3) {
		return $number1;
	}


if ($number2 > $number1 && $number2 > $number3) {
	
	return $number2;
}

elseif ($number3 > $number1 && $number3 > $number2) {
	return $number3;
}

}



echo getMax(600,200, 100);


  ?>
</body>
</html>