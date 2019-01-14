<div class="logo_intro_login">
<?php echo $this->Html->image('Logo.png');?>
</div>
<div class="users_form">
<?=$this->Flash->render('auth')
?>
<?=$this->Form->create()
?>
<fieldset>
    <div class="text-intro-login">
<?=__('<b>Log in with your username and password</b>')?>
</div>
<?=$this->Form->control('name' ,['placeholder' => 'Username'])
?>
<?=$this->Form->control('password',['placeholder' => 'Password'])
?>
</fieldset>
<div class="btn-login">
<?=$this->Form->button(__('Login'));?>
</div>
<?=$this->Form->end()
?>
</div>
<div class="text-intro-register">
<?=__("<b>You don't have an account?</b> <br>")?>
<?php echo $this->Html->link(
    'Register here',
    '/users/add',
    ['class' => 'button-register btn', 'target' => '_blank']
);?>
</div>
