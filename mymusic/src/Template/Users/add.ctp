<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="logo_intro_login">
<?php echo $this->Html->image('Logo.png');?>
</div>
    <?= $this->Form->create($user) ?>
    <fieldset>
    <div class="text-intro-login">
<?=__('<b>Register with your username, email and password</b>')?>
</div>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <div class="btn-login">
    <?= $this->Form->button(__('Register')) ?>
</div>
    <?= $this->Form->end() ?>
</div>
