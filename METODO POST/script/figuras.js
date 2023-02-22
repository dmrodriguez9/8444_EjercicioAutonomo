/*var slcchange = document.getElementById("tipo");
slcchange.addEventListener("change", function() {
    console.log(slcchange.value)
})*/
//Lados figuras

lado1=document.getElementById("lado_1");
lado2=document.getElementById("lado_2");
lad03=document.getElementById("lado_3");

//Funciones

function figuraSeleccionada(){

    var figura = document.getElementById("tipo");
    //var lado1;
    var figura=document.getElementById("tipo");
    //var tipoFigura=figura.value;
    //console.log(figura.value);

    if(figura.value=="cuadrado"){
       document.getElementById("lado_1").disabled=false;
       document.getElementById("lado_2").disabled=true;
       document.getElementById("lado_3").disabled=true;
       document.getElementById("altura").disabled=true;
    }else if(figura.value=="rectangulo"){
        document.getElementById("lado_1").disabled=false;
        document.getElementById("lado_2").disabled=false;
        document.getElementById("lado_3").disabled=true;
        document.getElementById("altura").disabled=true;
    }else{
        document.getElementById("lado_1").disabled=false;
        document.getElementById("lado_2").disabled=false;
        document.getElementById("lado_3").disabled=false;
        document.getElementById("altura").disabled=false;
    }

    
}