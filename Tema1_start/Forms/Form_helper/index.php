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
    var_dump($input);
    print_r("Congrats! You order a pizza ".$_POST['pizzas']."wh");
}

function show_form($errors = [])
{

    $form = new FormHelper();
    include 'form.html.php';
}

function validate_form()
{
    var_dump(trim($_POST['pizzas']));
    $errors = array();
    $input = array();
    $input['pizza'] = filter_input(INPUT_POST, trim($_POST['pizzas']));
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
    $input['size']=filter_input(INPUT_POST, trim($_POST['size']));
    if(!$input['size']){
        $errors[]='Please, select a pizza';
    }
    $input['delivery']=filter_input(INPUT_POST, trim($_POST['delivery']));

    return array($errors, $input);
}
