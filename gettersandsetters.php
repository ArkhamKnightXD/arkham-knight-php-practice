<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php


/**Leccion de los getters and setters:
 * 
 */
class Movie
{
	private $title;
	private $rating;


	
	function __construct($title, $rating)
	{
		$this->title = $title;

		// De esta forma evitamos que se ponga un valor erroneo en el rating del constructor, pues aqui trabajamos directamente con el setter.
		$this->setRating($rating);
	}

	function getRating(){
		return $this->rating;
	}

	function setRating($rating){

		if ($rating == "PG-13" || $rating == "G") {
			$this->rating = $rating;
		}
		else{
			$this->rating = "NR";
		}
		
	}
}


$avengers = new Movie("Avengers","PG-13");

// Aqui llamamos los getter and setter para su debido uso:

$avengers->setRating("PG-13");
echo $avengers->getRating();

 


  ?>

</body>
</html>