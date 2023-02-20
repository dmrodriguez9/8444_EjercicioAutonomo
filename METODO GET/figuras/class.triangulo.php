<?php

if(isset($_GET["lado_1"])){
   $lado_1=$_GET["lado_1"];
}

if(isset($_GET["lado_2"])){
    $lado_2=$_GET["lado_2"];
 }

 if(isset($_GET["lado_3"])){
    $lado_3=$_GET["lado_3"];
 }


class triangulo extends figura implements formulas{


     //Override
 
     public function GetArea(){
        $lado_1=$_GET["lado_1"];
        $lado_2=$_GET["lado_2"];
        $base=$lado_1;
        $altura=$lado_2;
        return ($base*$altura)/2;      
     }
 
     public function GetPerimetro(){
        $lado_1=$_GET["lado_1"];
        $lado_2=$_GET["lado_2"];
        $lado_3=$_GET["lado_3"];
        return $lado_1+$lado_2+$lado_3;
     }
         
         
     public function GetTipo(){
        $figuraTriangulo=$_GET["tipo"];
        return $figuraTriangulo;
     }
 
 
     //Interface
 
     public function area(){
         $lado_1=$_GET["lado_1"];
         $lado_2=$_GET["lado_2"];
         $base=$lado_1;
         $altura=$lado_2;
         return ($base*$altura)/2;   
 
     }
     public function perimetro(){
         $lado_1=$_GET["lado_1"];
         $lado_2=$_GET["lado_2"];
         $lado_3=$_GET["lado_3"];
         return $lado_1+$lado_2+$lado_3;
     }
 
	
}
?>

