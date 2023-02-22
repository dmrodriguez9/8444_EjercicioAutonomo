<?php

if(isset($_POST["tipo"])){
    $figuraElegida=$_POST["tipo"];
    //echo $figuraElegida;
}

if(isset($_POST["lado_1"])){
   $lado_1=$_POST["lado_1"];
}

if(isset($_POST["lado_2"])){
    $lado_2=$_POST["lado_2"];
 }

 if(isset($_POST["lado_3"])){
    $lado_3=$_POST["lado_3"];
 }

 
 if(isset($_POST["altura"])){
    $lado_3=$_POST["altura"];
 }



class triangulo extends figura implements formulas{


     //Metodos
 
     public function GetArea(){
        $lado_1=$_POST["lado_1"];
        $altura=$_POST["altura"];
        $base=$lado_1;
        return ($base*$altura)/2;      
     }
 
     public function GetPerimetro(){
        $lado_1=$_POST["lado_1"];
        $lado_2=$_POST["lado_2"];
        $lado_3=$_POST["lado_3"];
        return $lado_1+$lado_2+$lado_3;
     }
         
         
     public function GetTipo(){
         $figuraTriangulo=$_POST["tipo"];
         return $figuraTriangulo;
     }
 
 
     //Interface
 
     public function area(){
        return $this->GetArea();  
 
     }
     public function perimetro(){
         return $this->GetPerimetro();
     }
 
	
}
?>

