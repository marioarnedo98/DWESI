<?php
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