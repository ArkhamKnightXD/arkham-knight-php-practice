<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 

		/**
		 Leccion de herencia en las clases
		 */
		class Chef 
		{
			
			function makeChicken()
			{
				echo "The chef make chicken<br>";
			}

				function makePork()
			{
				echo "The chef make pork";
			}

				function makeSpeciaDish()
			{
				echo "The chef make BBQ Ribs<br>";
			}


		}


		/**
		 De esta forma aplicamos herencia y por ende la clase italian chef debe de poder hacer todo lo que sabe hacer la clase chef
		 */
		class ItalianChef extends Chef
		{
			public function makePasta()
			{
				echo "The chef make pasta<br>";
			}

			// para hacerle el override a una funcion solo basta con escribir el nombre normal que esta en la clase padre y cambiar el atributo no hay necesidad de mas nada

			public function makeSpeciaDish()
			{
				echo "The chef makes chicken parm";
			}
		
		}

		$italianChef= new ItalianChef();

		$chef = new Chef();

		$italianChef->makeChicken();

		$italianChef->makePasta();

		$chef->makeSpeciaDish();		

		$italianChef->makeSpeciaDish();		



	 ?>

</body>
</html>