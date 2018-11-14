<?php
ob_start();
?>  
    <div class="login-dark" style="background:#475d62 url(<?=ROOT_URL?>/public/img/fondo_contacto.jpg);">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i style="font-size:80px" class="fa">&#xf0e0;</i></div>
            <div class="form-group"><input class="form-control" type="Nombre" name="Nombre" placeholder="Nombre"></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><textarea rows="5" class="form-control" type="mensaje" name="Mensaje" placeholder="Mensaje"></textarea></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Enviar</button></div></form>
    </div>
    <?php $content= ob_get_clean();
include 'app/views/layout.html.php';