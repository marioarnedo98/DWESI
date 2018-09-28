<?php
function ejercice8($string){
    preg_match("/\[.*\]/",$string,$result);
        print_r($result[0]);
}
ejercice8("Hola [que tal]");