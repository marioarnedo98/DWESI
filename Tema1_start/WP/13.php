<?php
function ejercice13($number){
    $resultado= explode(",", $number);
    for ($i=0; $i < sizeof($resultado); $i++) { 
        echo $resultado[$i]; 
    }
    
}
ejercice13("1,212.25");