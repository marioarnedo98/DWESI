<?php
function ejercice8($string){
    if(preg_match("/\[+/",$string)){
        echo("Se ha encontrado una coincidencia");
    }
    else{
        echo("No se ha encontrado");
    }
}
ejercice8("Hola [que tal");