<?php
function ejercice9($email){
   $resultado= explode("@", $email);
   echo $resultado[0]; 
}
ejercice9("marioarnedo1@gmail.com");