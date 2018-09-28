<?php
$cities= array(
    array("Barcelona",1602386),
    array("Sevilla",696676),
    array("Malaga",566913),
    array("Palma de Mallorca",399093),
    array("Bilbao",346574),
    array("Madrid",3151689),
    array("Valencia",787266),
    array("Zaragoza",666058),
    array("Murcia",439712),
    array("Las Palmas de Gran Canaria",382283)
);
function print_cities(){
echo "<table>";
foreach ($cities as $key=>$values) {
    echo ("<tr>");
        echo ("<td>".$values[0]."</td>");
        echo ("<td>".$values[1]."</td>");
    echo("</tr>");
}
echo("</table>");
}
function print_cities_ordered_by_population(){
    #Code...
}
function print_cities_ordered_by_name(){
    #Code...
}