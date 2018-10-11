<form method = "POST" action ="<?=$form->encode($_SERVER['PHP_SELF'])?>">

<table>
    <?php if ($errors) {?>
        <tr>
            <td>Please correct this errors:  </td>
            <td><ul>
                <?php foreach ($errors as $error) {?>
                    <li><?=$form->encode($error)?></li>
                <?php }?>


            </ul>

            </td>
    <?php }?>
        <!-- <tr><td><?=$form->select($GLOBALS['to'], ['name' => 'to'])?></td></tr> -->
        <tr><td>Date <?=$form->input('date', ['name' => 'period','required' => true, 'min'=>"{$GLOBALS['min_year']}-0{$GLOBALS['min_month']}-0{$GLOBALS['min_day']}", 'max'=>"{$GLOBALS["max_year"]}-{$GLOBALS["max_month"]}-{$GLOBALS["max_day"]}"])?></td></tr>
        <tr><td colspan = "2" align ="center"><?=$form->input('submit', ['value' => 'order'])?></td></tr>


</table>
</form>

