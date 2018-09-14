<?php
$resultado=array();
$var1="I'm";
$var2="Mario Arnedo";
$var3="and I'm a pro";
array_push($resultado,$var1,$var2,$var3);
for ($i=0; $i < sizeof($resultado); $i++) { 
    print($resultado[$i]." ");
}