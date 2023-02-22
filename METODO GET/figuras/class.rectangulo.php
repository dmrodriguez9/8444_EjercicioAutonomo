<?php

if(isset($_GET["lado_1"])){
   $lado_1=$_GET["lado_1"];
}

if(isset($_GET["lado_2"])){
    $lado_2=$_GET["lado_2"];
 }
 
 

class rectangulo extends figura implements formulas{


      //Override
 
     public function GetArea(){
        $lado_1=$_GET["lado_1"];
        $lado_2=$_GET["lado_2"];
        $base=$lado_1;
        $altura=$lado_2;
        return $base*$altura;      
     }
 
     public function GetPerimetro(){
        $lado_1=$_GET["lado_1"];
        $lado_2=$_GET["lado_2"];
        $base=$lado_1;
        $altura=$lado_2;
        return 2*($base+$altura);
     }
         
         
     public function GetTipo(){
        $figuraRectangulo=$_GET["tipo"];
        return $figuraRectangulo;
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
