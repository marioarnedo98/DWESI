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
    print " age: " . $input['age'] . " Email: " . $input['email'];
}

function show_form($errors = [])
{

    $defaults = array('name' => 'Type your name', 'age' => 'Type your age');
    $form = new FormHelper($defaults);
    include 'form.html.php';
}

function validate_form()
{
    $errors = array();
    $input = array();

    $input['age'] = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT,
        array('options' => array('min_range' => 18,
            'max_range' => 65)));

    $input['email'] = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if (!$input['email']) {
        $errors[] = 'Please enter a valid email addres';
    }
    return array($errors, $input);
}
