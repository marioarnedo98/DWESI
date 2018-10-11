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
    print("You Select the date ".$input['date']);
}

function show_form($errors = [])
{

    $form = new FormHelper();
    include 'form.html.php';
}

$date=(trim($_POST['period']));

function validate_Date($date, $format='Y-m-d'){
$d=DateTime::createFromFormat($format, $date);
return $d && $d->format($format)==$date;
}
function validate_form()
{
 
    $errors = array();
    $input = array();
    $input['date']=trim($_POST['period']);
    if(!validate_Date($input['date'])){
     $errors[]="You put a wrong date";   
    }    
    return array($errors, $input);
}
