<?php

if(isset($_POST["lado_1"])){
   $lado_1=$_POST["lado_1"];
}

if(isset($_POST["lado_2"])){
    $lado_2=$_POST["lado_2"];
 }
 
 

class rectangulo extends figura implements formulas{


     //Metodos
 
     public function GetArea(){
        $lado_1=$_POST["lado_1"];
        $lado_2=$_POST["lado_2"];
        $base=$lado_1;
        $altura=$lado_2;
        return $base*$altura;      
     }
 
     public function GetPerimetro(){
        $lado_1=$_POST["lado_1"];
        $lado_2=$_POST["lado_2"];
        $base=$lado_1;
        $altura=$lado_2;
        return 2*($base+$altura);
     }
         
         
     public function GetTipo(){
         $figuraRectangulo=$_POST["tipo"];
         return $figuraRectangulo;
     }
 
 
     //Interface
 
     public function area(){
         $lado_1=$_POST["lado_1"];
         $lado_2=$_POST["lado_2"];
         $base=$lado_1;
         $altura=$lado_2;
         return $base*$altura;  
 
     }
     public function perimetro(){
         $lado_1=$_POST["lado_1"];
         $lado_2=$_POST["lado_2"];
         $base=$lado_1;
         $altura=$lado_2;
         return 2*($base+$altura);
     }
 
	
}
?>
