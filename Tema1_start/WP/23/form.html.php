<form method = "POST" action ="<?=$form->encode($_SERVER['PHP_SELF'])?>">

<table>
    <?php if ($errors) {?>
        <tr>
            <td>Please correct this errors::   </td>
            <td><ul>
                <?php foreach ($errors as $error) {?>
                    <li><?=$form->encode($error)?></li>
                <?php }?>


            </ul>

            </td>
    <?php }?>
        <tr><td><?=$form->select($GLOBALS['pizzas'], ['name' => 'pizzas'])?></td></tr>
        <tr><td><?=$form->select($GLOBALS['ingredients'], ['name' => 'ingredients', 'multiple' => true])?></td></tr>
        <tr><td>Delivery?<?=$form->input('checkbox', ['name' => 'delivery','checked' => true])?></td></tr>
        <tr><td>small<?=$form->input('radio', ['name' => 'size', 'required'=> true, 'checked' => false, 'value'=>'small'])?></td></tr>
        <tr><td>medium<?=$form->input('radio', ['name' => 'size', 'required'=> true, 'checked' => true, 'value'=>'medium'])?></td></tr>
        <tr><td>large<?=$form->input('radio', ['name' => 'size', 'required'=> true, 'checked' => false, 'value'=>'largue'])?></td></tr>
        <tr><td colspan = "2" align ="center"><?=$form->input('submit', ['value' => 'order'])?></td></tr>


</table>
</form>

