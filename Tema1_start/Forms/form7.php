<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $defaults=$_POST;
}
else{
    $defaults= array('delivery'=> 'yes',
    'size'=> 'medium',
    'ingredients' => array('jam', 'cheese'),
    'pizza'=>'hawaian');
}
//select
$pizzas= array('pork'=> 'BBQ Pork Pizza',
                'chicken'=> 'Chicken Pizza',
                'lotus'=> 'Lotus Seed Pizza',
                'hawaian' => 'Hawaian Pizza',
                'carbonara'=>'Carbonara Pizza');
print '<select name="pizza">';
foreach($pizzas as $option => $label){
    print '<option value "'.$option.'"';
    if($option= $defaults['pizza']){
        print ' selected';
    }
    print ">$label</option>\n";
}
print '</select><br>';
//multi
$ingredients= array('chese'=> 'Extra cheese',
                'jam'=> 'Jam',
                'mushrooms'=> 'Mushrooms',
                'bbq' => 'BBQ sauce',);
print '<select name="ingredient[]" multiple>';
$selected_options =array();
foreach($defaults['ingredient'] as $option){
    $selected_options[$option]=true;
}
foreach($ingredients as $option => $label){
    print '<option value "'.htmlentities ($option).'"';
    if(array_key_exists($option, $selected_options)){
        print ' selected';
    }
    print '>'.htmlentities ($label).'</option>';
    print "\n";
}
print '</select><br>';