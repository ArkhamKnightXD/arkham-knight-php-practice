<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

	/**
	 * 
	 */
	class Student
	{
		var $name;
		var $major;
		var $gpa;
		
		function __construct($name, $major,$gpa)
		{
			$this->name = $name;
			$this->major=$major;
			$this->gpa=$gpa;
		}

		// no es necesario ponerle parametros a la funcion se obtienen con el this

		function hasHonor(){


			if ($this->gpa > 3.5) {

				return "true";
			}
			return "false";


		}


	}

	// el student2->hasHonor() seria el equivalente de student2.hasHonor() de java

		$student1 = new Student("Karvin", "Business", 2.8);
		$student2 = new Student("Alex", "Art", 3.6);

		echo $student2->hasHonor();

  ?>


</body>
</html>