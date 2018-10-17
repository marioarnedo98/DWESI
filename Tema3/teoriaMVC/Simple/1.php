<?php
$link = new PDO ("mysql:host=localhost;dbname=blog_db", 'root', '');
$result= $link->query('SELECT id, title FROM post');
$posts= array();
while($row=$result->fetch(PDO::FETCH_ASSOC)){
$posts[]=$row;
}
require 'templates/list.php';
$link=null;
?>