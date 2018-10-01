<?php
$temperatures=array(12,17,23,18,3,15,36,5,89,78,34,25,19);
sort($temperatures);
echo $media=array_sum($temperatures)/count($temperatures);
print_r ($last_5= array_slice($temperatures, -5,5, true));
print_r ($first_5 = array_slice($temperatures, 0,5, true));

