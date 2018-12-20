<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('override.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="http://dwesi/Unit5/mybookstore/"><?= $this->fetch('title') ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    </ul>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            
            <?php $name = $this->Session->read('Auth.User.username');?>
            <?php if($name):?>
            <li class="nav-item">
            <p class="nav-link">Bienvenid@ <?php echo $name ?></p>
            </li>
            <li class="nav-item">
            <?= $this->Html->link(__('Logout'), ['controller' => 'users', 'action' => 'logout'], ['class'=> 'nav-link']) ?>
            </li>
            <li class="nav-item">
            <?php $cell = $this->cell('Carts');?>
            <?= $cell?>
            </li>
            
        </ul>
            
            <?php else:?>
            <li class="nav-item">
            <?= $this->Html->link(__('Login'), ['controller' => 'users', 'action' => 'login'], ['class'=> 'nav-link']) ?>
            </li>
            <li class="nav-item">
            <?= $this->Html->link(__('Register'), ['controller' => 'users', 'action' => 'add'], ['class'=> 'nav-link']) ?>
            </li>
            <li class="nav-item">
            <?php $cell = $this->cell('Carts');?>
            <?= $cell?>
            </li>
        </ul>
        <?php endif?>
</nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
    <?= $this->Flash->render() ?>
    <?= $this->element('menu'); ?>
    <?php $path = $this->cell('Categories::path');?>
    <?= $path ?>
    <!-- Contenido -->
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
  $('[id^=add-form]').submit(function (e){
    e.preventDefault();
    var tis= $(this);
    $.post(tis.attr('action'), tis.serialize(), function (data){
      $('#cart-counter').text(data);
    });
  });
});
</script>
</html>
