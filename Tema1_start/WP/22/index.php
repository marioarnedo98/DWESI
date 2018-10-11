<?php
require './FormHelper.php';
$day=array();
$month=array();
$years= array();
for ($d=1; $d <=31 ; $d++) { 
    array_push($day,$d);
}
for($m=1; $m <=12; $m++){
    array_push($month, $m);
}
for ($y=1970; $y <=2020 ; $y++) { 
    array_push($years, $y);
}
$min_day=min($day);
$min_month=min($month);
$min_year=min($years);
$max_day=max($day);
$max_month=max($month);
$max_year=max($years);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $result = validate_form();

    if (count($result[0]) > 0) {
        show_form($result[0]);

    } else {
        process_form($result[1]);
    }
} else {
    show_form();
}

function process_form($input)
{
    print("You Select the date");
}

function show_form($errors = [])
{

    $form = new FormHelper();
    include 'form.html.php';
}

function validate_form()
{
    var_dump($_POST);
    $errors = array();
    $input = array();
    $array_spliteado=explode("-",trim($_POST['period']));
    var_dump($array_spliteado);
    if(sizeof($array_spliteado)>=4){
        $errors[]="You put a wrong date, check again";
    }
    $input['year']=$array_spliteado[0];
    $input['month']=$array_spliteado[1];
    $input['day']=$array_spliteado[2];
    if($input['year']<1769||$input['year']>2021){
        $errors[]="Please, insert a valid year";
    }
    if($input['month']<0||$input['month']<13){
        $errors[]="Please, insert a valid month";
    }
    if($input['day']<0||$input['day']<32){
        $errors[]="Please, insert a valid day";
    }
    return array($errors, $input);
}
