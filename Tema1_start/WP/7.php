<?php
function validateForm($username){
    // /^[A-Za-z]+$/
    if(preg_match("/^[A-Za-z0-9]+$/",$username)){
        echo ("El username es correcto\n");
    }else{
        echo("No es valido\n");
    }
}
validateForm("P3p1t0");
validateForm("P3p1t0#");