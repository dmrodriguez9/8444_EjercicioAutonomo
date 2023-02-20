<script src="script/figuras.js"></script>
<?php
	abstract class figura{

		//Atributos

		private $tipo;
		private $area; //area
		private $perimetro; //perimetro


		//Constructores

		/*function __construct($tipo) {
			$this->tipo=$tipo;
		}*/


		//Metodos

		public static function get_form(){
			$html = '
			<form class="form" name="figuras" method="post" action="index.php" >
			<table align="center" class="table table-warning table-striped">
				<tr>
					<th colspan="2" class="text-center">INGRESO DATOS DE LA FIGURA</th><br>
				</tr>
				<tr>
					<td>Tipo: </td>
					<td>
						<select id="tipo" name="tipo" OnChange="figuraSeleccionada()" class="form-select">
							<option value="sel">Seleccione...</option>
							<option value="cuadrado">Cuadrado</option>
							<option value="rectangulo">Rectángulo</option>
							<option value="triangulo">Triángulo</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Lado 1:</td>
					<td><input type="text" id="lado_1" name="lado_1"size="4" disabled class="form-control"></td>
				</tr>
				<tr>
					<td>Lado 2:</td>
					<td><input type="text" id="lado_2" name="lado_2"size="4" disabled class="form-control"></td>
				</tr>
				<tr>
					<td>Lado 3:</td>
					<td><input type="text" id="lado_3" name="lado_3"size="4" disabled class="form-control"></td>
				</tr>
								
					<tr class="text-center">
						<th colspan="2"><input type="submit" name="calcular" value="Calcular" class="btn btn-outline-warning"></th>
					</tr>
			
				
			</table>
			</form>';
			return $html;
		}


		/*public static function get_formFiguras(){
			$html = '
			<form name="figuras" method="post" action="figuras/class.cuadrado.php" >
			<table align="center" class="table table-warning table-striped">
				<tr>
					<th colspan="2" class="text-center">INGRESO DATOS DE LA FIGURA</th><br>
				</tr>
				<tr>
					<td>Tipo: </td>
					<td>
						<select id="tipo" name="tipo" OnChange="figuraSeleccionada()" class="form-select">
							<option value="sel">Seleccione...</option>
							<option value="cuadrado">Cuadrado</option>
							<option value="rectangulo">Rectángulo</option>
							<option value="triangulo">Triángulo</option>
						</select>
					</td>
				</tr>
				
			</table>
			</form>';
			return $html;
		}*/

	
		
		
		// METODOS ABSTRACTOS	
		public abstract function GetArea();
	    
	    
	    public abstract function GetPerimetro();
	    
	    
	    public abstract function GetTipo();
	}
?>


<!--BOOSTRAP-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<!--CSS-->
<link href="css/stilos.css" rel="stylesheet">

<!--<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="script/figuras.js"></script>
	<title>Document</title>
</head>
<body>
	<select id="tipo" name="tipo" OnChange="figuraSeleccionada()">
							<option value="sel">Seleccione...</option>
							<option value="cuadrado">Cuadrado</option>
							<option value="rectangulo">Rectángulo</option>
							<option value="triangulo">Triángulo</option>
						</select>
</body>
</html>-->