<?php
$cities= array(
"Barcelona"=>1602386,
"Sevilla"=>696676,
"Malaga"=>566913,
"Palma de Mallorca"=>399093,
"Bilbao"=>346574,
"Madrid"=>3151689,
"Valencia"=>787266,
"Zaragoza"=>666058,
"Murcia"=>439712,
"Las Palmas de Gran Canaria"=>382283
);
function print_cities($cities){
    echo "<h1>print_cities</h1>";

foreach ($cities as $key=>$values) {
echo "La ciudad de $key tiene $values personas";
}

}
function print_cities_ordered_by_population($cities){
    asort($cities);
    foreach ($cities as $x=>$x_values) {
        echo "La ciudad de $x tiene $x_values personas";
    }
}
function print_cities_ordered_by_name($cities){
    ksort($cities);
    foreach ($cities as $j=>$j_values) {
        echo "La ciudad de $j tiene $j_values personas";
    }
}
echo print_cities($cities);
echo print_cities_ordered_by_population($cities);
echo print_cities_ordered_by_name($cities);