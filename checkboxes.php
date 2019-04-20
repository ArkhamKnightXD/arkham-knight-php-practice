<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action ="checkboxes.php" method="post">

Apples: <input type="checkbox" name ="fruits[]" value="apples">
<br>
Oranges: <input type="checkbox" name ="fruits[]" value="oranges">
<br>
Pears: <input type="checkbox" name ="fruits[]" value="pears">
<br>

<input type="submit" > 
</form>


<?php

// Trabajar con checkboxes en php los datos del checkbox se estan almacenando en el array fruits especificado en el name de los input

$fruits= $_POST["fruits"];

echo $fruits[0];

  ?>
</body>
</html>