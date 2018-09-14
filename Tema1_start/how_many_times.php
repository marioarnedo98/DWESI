<?php
$array=array(1,17,17,25,12);
$tmp = array_count_values($array);
$numberToSearch=17;
$cnt = $tmp[$numberToSearch];
echo("The number ". $numberToSearch." repeats "  .$cnt." times");
