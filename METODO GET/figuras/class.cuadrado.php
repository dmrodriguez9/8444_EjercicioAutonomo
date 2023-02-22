<?php

if(isset($_GET["lado_1"])){
    $lado_1=$_GET["lado_1"];
}


class cuadrado extends figura implements formulas {

     //Override
    
	public function GetArea(){
        $lado_1=$_GET["lado_1"];
        return $lado_1*$lado_1;  
    }

    public function GetPerimetro(){
        $lado_1=$_GET["lado_1"];
        return 4*$lado_1;
    }
	    
	    
    public function GetTipo(){
        $figuraCuadrado=$_GET["tipo"];
        return $figuraCuadrado;
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
