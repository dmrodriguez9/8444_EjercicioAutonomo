
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Figuras</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<!--BOOSTRAP-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>

	<?php
		
		//$objCuadrado = new cuadrado();
		//$objRectangulo = new rectangulo();
		//$objTriangulo = new triangulo();

     
	    include("include/class.figura.php");
	    include("include/Interface.formulas.php");
		include("figuras/class.cuadrado.php");
		include("figuras/class.rectangulo.php");
		include("figuras/class.triangulo.php");

		// Mostrando el formulario
		echo figura::get_form();

		//Mostrando el area y el perimetro segun la figura seleccionada
		
		if(isset($_POST["tipo"])){
			$figuraElegida=$_POST["tipo"];
			//echo $figuraElegida;
			if($figuraElegida=="cuadrado"){
				$objCuadrado = new cuadrado();
				$area=$objCuadrado->GetArea();
				$perimetro=$objCuadrado->GetPerimetro();
			}else if($figuraElegida=="rectangulo"){
			    $objRectangulo = new rectangulo();
				$area=$objRectangulo->GetArea();
				$perimetro=$objRectangulo->GetPerimetro();
			}else if($figuraElegida=="triangulo"){
				$objTriangulo = new triangulo();
				$area=$objTriangulo->GetArea();
				$perimetro=$objTriangulo->GetPerimetro();
			}
			echo '<p class="text-center">El área del ' . $figuraElegida . ' es: ' . $area .'</p>';
		    echo '<p class="text-center">El perímetro del ' . $figuraElegida . " es: " . $perimetro .'</p>'; 
		}
        
	?>
	   
	
</body>


</html>