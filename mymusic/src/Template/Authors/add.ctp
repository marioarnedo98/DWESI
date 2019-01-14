<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Author $author
 */
?>
<div class="authors content users_form">
    <?= $this->Form->create($author) ?>
    <fieldset>
    <div class="text-intro-login">
<?=__('<b>Submit Your Author!</b>')?>
</div>
        <?php
            echo $this->Form->control('Name',['placeholder' => 'Name']);
        ?>
    </fieldset>
    <div class="btn-login">
    <?= $this->Form->button(__('Submit')) ?>
    </div>
    <?= $this->Form->end() ?>
</div>
