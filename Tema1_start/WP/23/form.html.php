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
        <tr><td><?=$form->select($GLOBALS['from'], ['name' => 'from'])?></td></tr>
        <tr><td><?=$form->select($GLOBALS['to'], ['name' => 'to'])?></td></tr>
        <tr><td>ZIP Code <?=$form->input('text', ['name' => 'zip_code','required' => true])?></td></tr>
        <tr><td>Dimensions <?=$form->input('text', ['name' => 'dimensions','required' => true])?></td></tr>
        <tr><td>Weight <?=$form->input('text', ['name' => 'weight_1','required' => true])?></td><td>x<?=$form->input('text', ['name' => 'weight_2','required' => true])?></td></tr>
        <tr><td colspan = "2" align ="center"><?=$form->input('submit', ['value' => 'order'])?></td></tr>


</table>
</form>

