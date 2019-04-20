<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		// Leccion de clases y objetos:
		
		class Book 
		{
			var $title;
			var $author;
			var $pages;
			
			function __construct($title,$author,$pages){
				$this->title = $title;
				$this->author = $author;
				$this->pages = $pages;

			}


		}

		// Instaciando un objeto y como trabajar con sus datos sin getter ni setter ni constructores:

		/*$book = new Book();
		$book->title = "Harry Potter";
		$book->author = "Jk Rowling";
		$book->pages =400;*/ 

		
		

		//Creando objetos mediante constructores:

		$book2 = new Book("The lord of the rings", "Jrr Tolkien",777);
 

		echo $book2->title;
		echo "<br>";

		echo "<br>";


	  ?>

</body>
</html>