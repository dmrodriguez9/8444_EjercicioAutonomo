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
    //var tipoFigura=figura.value;
    //console.log(figura.value);

    if(figura.value=="cuadrado"){
       document.getElementById("lado_1").readOnly=false;
       document.getElementById("lado_2").readOnly=true;
       document.getElementById("lado_3").readOnly=true;
       document.getElementById("altura").readOnly=true;
    }else if(figura.value=="rectangulo"){
        document.getElementById("lado_1").readOnly=false;
        document.getElementById("lado_2").readOnly=false;
        document.getElementById("lado_3").readOnly=true;
        document.getElementById("altura").readOnly=true;
    }else{
        document.getElementById("lado_1").readOnly=false;
        document.getElementById("lado_2").readOnly=false;
        document.getElementById("lado_3").readOnly=false;
        document.getElementById("altura").readOnly=false;
    }

    /*https://codigoroot.net/blog/3-formas-de-deshabilitar-inputs-html-rapido-y-sencillo-con-javascript-y-atributos-html/*/
}