<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action ="postvsget.php" method="post">
Password: <input type="password" name ="password">
<br>
<input type="submit" > 
</form>

<?php
//diferencias entre el metodo post y get en los formularios, basicamente lo que pasa es que con el metodo get se mandan los datos directamente a la url donde cualquiera puede verlo lo cual no es bueno cuando se habla de informacion sensible y con post no pasa esto, por lo tanto para los formularios html siempre se debe de usar post
echo $_POST["password"];
  ?>

</body>
</html>