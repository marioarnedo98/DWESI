<?php
function selection($name, $numbers){
    echo("<select name='$name'>");
    for($x=0; $x<$numbers; $x++){
        echo("<option>".$x."</option> ");
    }
    echo("</select>");
}
$test=selection("People",17);