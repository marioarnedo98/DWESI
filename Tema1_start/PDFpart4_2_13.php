<?php
function print_table($meal){
    $tds="";
    echo"<table border='1'>"; 
    echo "<thead>";
   foreach($meal as $i => $v){
    echo "<th>".$i."</th>";
   }
   echo "</thead>";
   foreach ($meal as $x => $v){
    echo"<td>".$v."</td>";
   }
echo("</table>");
}
$meal=array('breackfast' => "cofee", 'snack'=>"sandwich", 'launch' => "pizza", 'dinner'=> "omelete");
$test= print_table($meal);
print_r($test);