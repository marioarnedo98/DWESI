<?php
require './FormHelper.php';
$from = array(
    'madrid' => 'Madrid',
    'barcelona' => 'Barcelona',
    'valencia' => 'Valencia',
    'sevilla' => 'Sevilla',
    'alicante' => 'Alicante',
    'malaga'=>'Malaga',
    'murcia'=>'Murcia',
    'cadiz'=>'Cadiz',
    'vizcaya'=>'Vizcaya',
    'la_coruna'=>'La coruña'
);

$to = array(
    'madrid' => 'Madrid',
    'barcelona' => 'Barcelona',
    'valencia' => 'Valencia',
    'sevilla' => 'Sevilla',
    'alicante' => 'Alicante',
    'malaga'=>'Malaga',
    'murcia'=>'Murcia',
    'cadiz'=>'Cadiz',
    'vizcaya'=>'Vizcaya',
    'la_coruna'=>'La coruña'
);
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
    print("Your order is comming to " .$input['ciudad_destino']." from " .$input['cuidad_origen'].". The dimensions are " .$input['dimensions_1']."cm X ".$input['dimensions_2']. "cm. And the weight is ".$input['peso'])."kg.";
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
    $input['ciudad_destino'] = trim($_POST['to']);
       if(!$input['ciudad_destino']){
        $errors[]='Please, select a origin city';
    }
    $input['cuidad_origen'] = trim($_POST['from']);
       if(!$input['cuidad_origen']){
        $errors[]='Please, select a destiny city';
    }
    $input['zip_code']=intval(trim($_POST['zip_code']));
    if(strlen ($input['zip_code']) <5){
        $errors[]='The zip code must have 5 numbers';
    }
    $input['dimensions_1']= intval(trim($_POST['weight_1']));
    $input['dimensions_2']= intval(trim($_POST['weight_2']));
    if($input['dimensions_1']<2||$input['dimensions_2']<2){
        $errors[]='The dimensions are more than 2x2';
    }
    $input['peso'] = intval(trim($_POST['dimensions']));
    if($input['peso']<25){
        $errors[]='The weight must be greater than 25kg';
    }
    return array($errors, $input);
}
