 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 
<?php

// Leccion 1 echo: puedo agregar html tags<> entre el echo para ser mostrado en la pagina

echo "<h1>Prueba de h1 con php</h1>";


//Leccion 2 variables:

$charactherName = "John";
$charactherAge = 35;

echo "There once was a man named $charactherName <br>";
echo "He was $charactherAge year old <br>";
$charactherName = "Tom";
$charactherAge = 20;
echo "He liked the name $charactherName <br>";
echo "But didnt like being $charactherAge <br>";


//leccion 3 los diferentes tipo de datos para las variables:
// php diferencia los diferentes tipos de variables por si solo

$string = "Prueba de String";
$interger = 30;
$float = 33.32;
$boolean = false;

echo $string;
echo "<hr>";

//Leccion 4 strings:



// poner todo en minuscula
echo strtolower($string);
echo "<br>";

//poner todo en mayuscula
echo strtoupper($string);
echo "<br>";

//contar los caracteres del string
echo strlen($string);
echo "<br>";

// para conseguir el caracter en la posicion X
echo $string[0];
echo "<br>";

// tambien puedo cambiar una letra del string dependiendo de la posicion

echo $string[0]= "R";
echo "<br>";

echo $string;
echo "<br>";

// para cambiar una palabra en un string

echo str_replace("Rrueba", "Pruebita", $string);
echo "<br>";

// para tomar una porcion del string, ademas de que con el segundo numero podemos definir cuanto texto vamos a mostrar
 echo substr($string, 10, 2);
echo "<br>";

// leccion 5 trabajando con numeros:
echo "<hr>";

//suma casi lo mismo para las otras 4 operaciones basicas
echo 5+9;
echo "<br>";

// modulo 
echo 10%3;
echo "<br>";

// aumentarle uno a un numero
$number = 10;
$number++;

echo $number;
echo "<br>";

// conseguir valor absoluto

echo abs(-200);
echo "<br>";
// potenciacion

echo  pow(2, 4);
echo "<br>";
//raiz cuadrada

echo sqrt(144);
echo "<br>";
// cual de los 2 valores es mayor

echo max(2,10);
echo "<br>";
// cual de los 2 valores es menor

echo min(2,10);
echo "<br>";
// redondear al entero mas cercano

echo round(3.7);
echo "<br>";

// funcion de piso que lleva hacia el proximo decimal

echo floor(3.8);
echo "<br>";
?>

 </body>
 </html>