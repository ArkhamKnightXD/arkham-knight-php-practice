<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="madlibs.php" action="get">
		
		Color: <input type="text" name="color">
		<br>
		noun: <input type="text" name="pluralNoun">
		<br>
		Celebrity: <input type="text" name="celebrity">
		<br>
		<input type="submit">
	</form>
<?php
$color = $_GET["color"];
$pluralNoun = $_GET["pluralNoun"];
$celebrity =$_GET["celebrity"];


echo "Rose are $color <br>";
echo "$pluralNoun are blue <br>";
echo "I love $celebrity<br>";

  ?>
</body>
</html>