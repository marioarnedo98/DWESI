<?php
ob_start();
?>
<div class="login-dark login" style="background:#475d62 url(<?=ROOT_URL?>/public/img/login.jpg);">
    <form action="<?= ROOT_URL?>Posts/add" enctype="multipart/form-data"  id="form" method="POST">
			<h1>New Post in the blog</h1>
            <div class="illustration"><i style="font-size:80px" class="fa">&#xf007;</i></div>
            <div class="form-group"><input type="text" name="title" class="form-control" placeholder="Insert the Title"></div>
            <div class="form-group"><input type="text" name="authors" class="form-control" placeholder="Insert the Authors"></div>
            <div class="form-group"><input type="text" name="content" class="form-control" placeholder="Insert the Content"></div>
            <div class="form-group"><input type="file" name="cover" id="cover">                
            <div class="form-group login"><input type="submit" name="signup_submit" value="Add"/></div>
            </form>
        </div>

</div>

  
<?php $content= ob_get_clean();
include 'app/views/layout.html.php';