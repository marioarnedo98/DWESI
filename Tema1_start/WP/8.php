<?php
function ejercice8($string){
    preg_match("/\[.*\]/",$string,$result);
        print_r($result);
}
ejercice8("Hola [que tal][soy tontito]");