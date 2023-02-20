<?php

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
        $figuraCuadrado=$_POST["tipo"];
        return $figuraCuadrado;
    }


    //Interface

    public function area(){
        $lado_1=$_POST["lado_1"];
        return $lado_1*$lado_1;  

    }
	public function perimetro(){
        $lado_1=$_POST["lado_1"];
        return 4*$lado_1;
    }


}
?>
