<?php
function verificar_email($email) 
{
  if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$email))
  {
   echo "yes";
  }
  echo "no"
}
//1. verificar si un password es seguro 
function verificar_password_strenght($password) 
{   
   if (preg_match("/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/", $password))     
     echo "Su password es seguro.";   
   else     
     echo "Su password no es seguro."; 
} 

//2. Verificar el fomato de una IPv4
function verificar_ip($ip)
{
    return preg_match("/^([1-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])" .
            "(\.([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])){3}$/", $ip );
}

//3. Verificar formato de número telefónico en EU
function verificar_telefono_eu($telefono)
{
  $regex = '/^(?:1(?:[. -])?)?(?:\((?=\d{3}\)))?([2-9]\d{2})'
        .'(?:(?$0', $text);
}
function cambiar_formato_fecha($fecha)
{
    return preg_replace("/([0-9]{4})\/([0-9]{2})\/([0-9]{2})/i","$3/$2/$1",$fecha);
}
/*

Metacarácter	Descripción
\	escape
^	inicio de string o línea
$	final de string o línea
.	coincide con cualquier carácter excepto nueva línea
[	inicio de la definición de clase carácter
]	fin de la definición de clase carácter
|	inicio de la rama alternativa
(	inicio de subpatrón
)	fin de subpatrón
?	amplía el significado del subpatrón, cuantificador 0 ó 1, y hace lazy los cuantificadores greedy
*	cuantificador 0 o más
+	cuantificador 1 o más
{	inicio de cuantificador mín/máx
}	fin de cuantificador mín/máx
*/
//FILTER_VALIDATE
/*
FILTER_VALIDATE_BOOLEAN
FILTER_VALIDATE_EMAIL
FILTER_VALIDATE_FLOAT
FILTER_VALIDATE_INT
FILTER_VALIDATE_IP
FILTER_VALIDATE_MAC
FILTER_VALIDATE_REGEXP
FILTER_VALIDATE_URL
*/