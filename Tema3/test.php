<?php
$str = "this is a long string that should be cut in the middle of the first 'that'";
$wrapped = wordwrap($str, 25);
var_dump($wrapped);

$lines = explode("\n", $wrapped);
var_dump($lines);

$new_str = $lines[0] . '...';
var_dump($new_str);