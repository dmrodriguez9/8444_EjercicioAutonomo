<?php

if(isset($_POST["tipo"])){
     $figuraElegida=$_POST["tipo"];
     //echo $figuraElegida;
}

if(isset($_POST["lado_1"])){
    $lado_1=$_POST["lado_1"];
}


class cuadrado extends figura implements formulas {

    //Metodos
    
	public function GetArea(){
        $lado_1=$_POST["lado_1"];
        return $lado_1*$lado_1;  
    }

    public function GetPerimetro(){
        $lado_1=$_POST["lado_1"];
        return 4*$lado_1;
    }
	    
	    
    public function GetTipo(){
         
    }


    //Interface

    public function area(){

    }
	public function perimetro(){

    }


}
?>
