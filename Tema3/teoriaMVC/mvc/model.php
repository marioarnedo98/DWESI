<?php
function open_database_connection(){
$link = new PDO ("mysql:host=localhost;dbname=blog_db", 'root', '');
return $link;
}
function close_database_connection(&$link){
    $link=null;
}
function get_all_posts(){
    $link=open_database_connection();
$result= $link->query('SELECT id, title FROM post');
$posts= array();
while($row=$result->fetch(PDO::FETCH_ASSOC)){
$posts[]=$row;
}
close_database_connection($link);
return $posts;
}
?>