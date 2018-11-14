<?php
ob_start();
?>
<div class="login-dark login" style="background:#475d62 url(<?=ROOT_URL?>/public/img/login.jpg);">
  <form action="<?= ROOT_URL?>users/register" enctype="multipart/form-data"  id="form-1" method="POST">
    <h1>Register</h1>
            <div class="illustration"><i style="font-size:80px" class="fa">&#xf007;</i></div>
            <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username" required></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group login"><input type="submit" name="signup_submit" value="Register"/></div>
    </form>
    </div>
  
<?php $content= ob_get_clean();
include 'app/views/layout.html.php';