<?php
class Author {
   public $name="Mario Arnedo";
   public $email="marioarnedo1@gmail.com";
   public $bookname="DWESI";
}
$autor= new Author();
print("Nombre: ".$autor->name." ");
print("Email: ".$autor->email." ");
print("Bookname: ".$autor->bookname);
die();
//Other way but whitout a class
$aux = (object) array('nombre' => 'Mario', 'email' => 'marioarnedo1@gmail.com', 'bookname'=>'DWESI');

echo $aux->email; // prints 'Mario'
echo $aux->nombre; // prints 'value'

?>