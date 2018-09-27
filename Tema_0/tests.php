<?php
$arrar= array("physics", "chem", "math","bio", "cs", "drama","classics" );
$removed = array_splice($arrar,2,3);
print_r ($removed);
print_r ($arrar);
$removed = array_splice($arrar,2);
print_r ($removed);
print_r ($arrar);