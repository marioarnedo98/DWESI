
<!-- <div id="login-box">
  <div class="left">
    <h1>Register user</h1>
    <form action="<?= ROOT_URL?>users/register" enctype="multipart/form-data"  id="form-1" method="POST">
    <input type="text" name="name" placeholder="name" required/>
    <input type="text" name="username" placeholder="Username" required/>
    <input type="email" name="email" placeholder="email" required>
    <input type="password" name="password" placeholder="Password" required/>
    <input type="password" name="password2" placeholder="Repeat your password" required/>
    
    <input type="submit" name="signup_submit" value="Sign me up" />
  </div>
</div> -->
<?php
$form = new FormHelper();
?>
 <form action="<?= ROOT_URL?>users/register" enctype="multipart/form-data"  id="form-1" method="POST">
<div class="form-group register_form">
        Name<?=$form->input('text', ['name' => 'name', 'required'=> true, 'class'=> 'form-control'])?>
        Username<?=$form->input('text', ['name' => 'username', 'required'=> true, 'class'=> 'form-control' ])?>
        Email<?=$form->input('email', ['name' => 'email', 'required'=> true, 'class'=> 'form-control'  ])?><br>
        Password<?=$form->input('password', ['name' => 'password', 'required'=> true, 'class'=> 'form-control'  ])?><br>
        Repeat your password<?=$form->input('password', ['name' => 'password2', 'required'=> true, 'class'=> 'form-control'])?><br>
       <?=$form->input('submit', ['value' => 'Register', 'class'=> 'btn btn-primary'])?>
</div>
</form>