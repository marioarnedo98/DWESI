<?php
$srculr= "http://dwesi/Tema3/bookstore/";
$tempfilename= $_SERVER['DOCUMENT_ROOT']. "/Tema3/bookstore/tempindex.html";
$targetfilename= $_SERVER['DOCUMENT_ROOT']."/Tema3/bookstore/index.html";
if(file_exists($tempfilename)){
    unlink($tempfilename);
}
$html= file_get_contents($srculr);
if(!$html){
    $error= "Unable to load $srculr. Static page update aborted";
    echo $error;
    exit();
}
if (!file_put_contents($tempfilename, $html)){
    $error = "Unable to write $tempfilename. Static page update aborted!";
    echo $error;
    exit();
}
copy($tempfilename,$targetfilename);
unlink($tempfilename);
echo "Home page generated succesfully";
