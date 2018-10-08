    <form method="POST" action="<?= $form->encode($_SERVER['PHP_SELF'])?>">
        <table>
            <?php if($errors){?>
            <tr>
            <td>Please correct these errors::</td>
            <td><ul>
                <?php foreach($errors as $error){ ?>
                <li><?= $form->encode($error)?></li>
                <?php } ?>
            </ul></td>
                <?php } ?>
                <tr><td>Your name: </td><td><?= $form->input('text', ['name'=>'name'])?></td></tr>   
                <tr><td>Your age: </td><td><?= $form->input('text', ['name'=>'age'])?></td></tr>       
                <tr><td colspan="2" align="center"><?= $form->input('submit', ['value'=>'order'])?></td></tr>   
            </tr>
        </table>
    </form>