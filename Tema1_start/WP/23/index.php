<?php
require './FormHelper.php';
$pizzas = array(
    'pork' => 'BBQ Prok Pizza',
    'chicken' => 'Chicken Pizza',
    'lotus' => 'Lotus Seed Pizza',
    'hawaian' => 'Hawaian Pizza',
    'carbonara' => 'Carbonara Pizza',
);

$ingredients = array(
    'cheese' => 'Extra cheese',
    'jam' => 'Jam',
    'mushrooms' => 'Mushrooms',
    'bbq' => 'BBQ Sauce',
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
    print("Congrats! You order a ".$input['size']." pizza ".$input['pizza']." whith these ingredients ");
    foreach ($input['ingredients'] as $key => $comida) {
        print $comida.",";
    }
    print("and the pizza is ");
    if($input['delivery']=="on"){
        print("going to your home,");
    }else{
        print("you have to come to our shop,");
    }
    print(" Thank you <3");
}

function show_form($errors = [])
{

    $form = new FormHelper();
    include 'form.html.php';
}

function validate_form()
{
    $errors = array();
    $input = array();
    $input['pizza'] = trim($_POST['pizzas']);
       if(!$input['pizza']){
        $errors[]='Please, select a pizza';
    }
    foreach ($_POST['ingredients'] as $key => $value) {
        $ingredientes[]=trim($value);
    }
    $input['ingredients']=$ingredientes;
    if (is_array($input['ingredients']) && sizeof($input['ingredients']) <= 1){
        $errors[]='Please, select at least 2 ingredients';
    }
    $input['size']= trim($_POST['size']);
    if(!$input['size']){
        $errors[]='Please, select a size';
    }
    $input['delivery']= trim($_POST['delivery']);

    return array($errors, $input);
}
