
<?php 

//*******************************************************************
function show_data($post){

    if(isset($_GET["lado_1"])){
        $lado1=$_GET["lado_1"];
       
     }
     if(isset($_GET["lado_2"])){
        $lado2=$_GET["lado_2"];
       
     }
     if(isset($_GET["lado_3"])){
        $lado3=$_GET["lado_3"];
      
     }

     
	$html = '
	<form class="form" >
	<table align="center" class="table table-warning table-striped">
		<tr>
			<th colspan="2" class="text-center">Figuras geométricas</th>
		</tr>
        <tr>
			<td>Tipo de figura: </td>
			<td>' . $post['tipo'] . '</td>
		</tr>
		<tr>
			<td>Lado 1: </td>
			<td>' . $post['lado_1'] . '</td>
		</tr>
		<tr>
			<td>Lado 2: </td>
			<td>' . $post['lado_2'] . '</td>
		</tr>
		<tr>
			<td>Lado 3: </td>
			<td>' . $post['lado_3'] . '</td>
		</tr>
		<tr>
			<td>Altura: </td>
			<td>' . $post['altura'] . '</td>
		</tr>
		<tr class="text-center">
			<th colspan="2"><a href="index.php"> Regresar</a></th>
		</tr>		
	</table>
	</form>';
   
	
	return $html;
}
//*********************************************************************************
echo "<br>PETICION GET: <br>";
echo "<pre>";
		print_r($_GET);
echo "</pre>";
			
    

    $u=urldecode($_GET['post']);
    $post=unserialize($u);
	
	 echo "<br>VARIABLE post: <br>";
			echo "<pre>";
				print_r($post);
			echo "</pre>";

    
    switch($_GET['d']){
        case "0":
            echo show_data($post);
            break;
        case "1":
            echo data($post['tipo'],"Tipo de figura: ");
            break;
        case "2":
            echo data($post['lado_1'],"Lado 1: ");
            break;
        case "3":
            echo data($post['lado_2'],"Lado 2: ");
            break;
		case "4":
			echo data($post['lado_3'],"Lado 3: ");
		break;
    }
    
    echo show_data($post);



 //   echo "<br> <br>";
 //   echo "<a href='index.html'> Regresar</a>";

 /*if(isset($_POST["enviar"])){
    $perimetro=$_POST["perimetro"];
    echo $perimetro;
 }*/
?>

<!--<form action="post_get.php" method="post">
    <p name="traerPerimetro" value="<?php echo $perimetro?>"></p>
</form>-->

<!--BOOSTRAP-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<!--CSS-->
<link href="css/stilos.css" rel="stylesheet">