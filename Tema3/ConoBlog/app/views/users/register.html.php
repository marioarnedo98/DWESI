<?php
ob_start();
?>
<div id="login-box">
  <div class="left">
    <h1>Sign up</h1>
    <form action="<?= ROOT_URL?>users/register" enctype="multipart/form-data"  id="form-1" method="POST">
    <input type="text" name="username" placeholder="Username" required/>
    <input type="password" name="password" placeholder="Password" required/>
    
    <input type="submit" name="signup_submit" value="Sign me up" />
  </div>
  
</div>
  
<?php $content= ob_get_clean();
include 'app/views/layout.html.php';