<?php
$array=array(2,2,4,5,6);

for ($i = 0; $i < sizeof($array) -2; $i++){
    if ($array[$i] == $array[$i + 1] - 1 && $array[$i] == $array[$i + 2] - 2){
     echo("It's true");
     break;
    }
    else{
        echo("It's false");
        break;
    }
}