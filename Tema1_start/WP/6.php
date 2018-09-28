<?php
function ejercice6($r,$g,$b){
    if($r<=255 && $g<=255 && $b<=255){
$rhex=dechex($r);
$ghex=dechex($g);
$bhex=dechex($b);
$hexvalue= $rhex.$ghex.$bhex;
echo("<html>");
echo("<body style='background-color:#$hexvalue'>");
echo("<h1>Hola que tal</h1>");
echo("</body>");
echo("</html>");
    }
} 
ejercice6(23,158,32);