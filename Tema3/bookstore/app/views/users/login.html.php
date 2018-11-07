<?php
ob_start();
?>
<div id="login-box">
  <div class="left">
    <h1>Login In</h1>
    <form action="<?= ROOT_URL?>users/login" enctype="multipart/form-data"  id="form-1" method="POST">
    <input type="text" name="username" placeholder="Username" />
    <input type="password" name="password" placeholder="Password" />
    
    <input type="submit" name="signup_submit" value="Login" />
  </div>
  
</div>
  
<?php $content= ob_get_clean();
include 'app/views/layout.html.php';