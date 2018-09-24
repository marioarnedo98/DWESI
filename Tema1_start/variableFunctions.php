<?php
function fist(){
    echo("primero");
}
function second(){
    echo("segundo");
}
function third(){
    echo("tercero");
}
$wich='second';
switch ($wich) {
    case 'first':
        first();
        break;
        case 'second':
        second();
        break;
        case 'third':
        third();
        break;
}
if(function_exists($wich)){
    $wich();
}