 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 
<?php

// Leccion 1 echo este es el codigo que se usa para mostrar texto en pantalla: puedo agregar html tags<> entre el echo para ser mostrado en la pagina.

echo "<h1>Prueba de h1 con php</h1>";


//Leccion 2 variables.

$charactherName = "John";
$charactherAge = 35;

echo "There once was a man named $charactherName <br>";
echo "He was $charactherAge year old <br>";
$charactherName = "Tom";
$charactherAge = 20;
echo "He liked the name $charactherName <br>";
echo "But didnt like being $charactherAge <br>";


//Leccion 3 los diferentes tipo de datos para las variables:
// php diferencia cada uno los diferentes tipos de variables por si solo, asi que no hay necesidad de estar escribir nada mas aparte del nombre de la variable

$string = "Prueba de String";
$interger = 30;
$float = 33.32;
$boolean = false;

echo $string;
echo "<hr>";

//Leccion 4 strings:

// Comando para poner todo en minuscula:
echo strtolower($string);
echo "<br>";

// Comando para poner todo en mayuscula:
echo strtoupper($string);
echo "<br>";

//Comando para contar los caracteres del string:
echo strlen($string);
echo "<br>";

// Para conseguir el caracter en la posicion X se usa esto:
echo $string[0];
echo "<br>";

// Tambien puedo cambiar una letra del string dependiendo de la posicion:

echo $string[0]= "R";
echo "<br>";

echo $string;
echo "<br>";

// Para cambiar una palabra en un string:

echo str_replace("Rrueba", "Pruebita", $string);
echo "<br>";

// Para tomar una porcion del string, ademas de que con el segundo numero podemos definir cuanto texto vamos a mostrar:
 echo substr($string, 10, 2);
echo "<br>";

// Leccion 5 trabajando con numeros:
echo "<hr>";

//Suma casi lo mismo para las otras 4 operaciones basicas:
echo 5+9;
echo "<br>";

// Modulo 
echo 10%3;
echo "<br>";

// Aumentarle uno a un numero
$number = 10;
$number++;

echo $number;
echo "<br>";

// Conseguir el valor absoluto de un numero:

echo abs(-200);
echo "<br>";
// Potenciacion:

echo  pow(2, 4);
echo "<br>";

// Raiz cuadrada:

echo sqrt(144);
echo "<br>";

// Cual de los 2 valores es el mayor:

echo max(2,10);
echo "<br>";
// Cual de los 2 valores es el menor:

echo min(2,10);
echo "<br>";
// Redondear al entero mas cercano:

echo round(3.7);
echo "<br>";

// Funcion de piso que lleva hacia el proximo decimal:

echo floor(3.8);
echo "<br>";
?>

 </body>
 </html>