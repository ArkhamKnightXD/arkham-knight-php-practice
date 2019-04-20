<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form action ="switch.php" method="post">
What's your grade: <input type="text" name ="grade">
<br>
<input type="submit" > 
</form>

<?php 

// Leccion de los switch case

$grade = $_POST["grade"];



switch ($grade) {
	case 'A':
		echo "You are awesome";
		break;

		case 'B':
		echo "You did great";
		break;

		case 'C':
		echo "You did good";
		break;

		case 'D':
		echo "Try hard next time";
		break;

		case 'F':
		echo "You fail";
		break;
	
	default:
		echo "Enter a valid option";
		break;
}

 ?>

</body>
</html>