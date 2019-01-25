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
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'Mymusic, musica para todos';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('home.css') ?>
    <?= $this->Html->css('override.css') ?>
</head>
<body class="home">
<nav class="navbar navbar-default navbar-fixed-top navbar-semi-transparent" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>    
  </div>
  <div class="navbar-collapse collapse container">
    <ul class="nav navbar-nav">
        <li><?php echo $this->Html->image('Logo.png',['alt' => 'Logo','class'=>'navbar-brand', 'url' => '/']);?></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
     <?php $name = $this->Session->read('Auth.User.username');?>

        <li><?php echo $this->Html->link('Browse','/songs/index');?></li>
         <li><?php echo $this->Html->link('Authors','/authors');?></li>
        <li role="separator" class="divider"></li>
        <?php if(!$name):?>
        <li><?php echo $this->Html->link('Login','/users/login');?></li>
        <li><?php echo $this->Html->link('Register','/users/add');?></li>
<?php else:?>
<li><a><?php echo "Bienvenido ".$name ;?></a></li>
<li><?php echo $this->Html->link('Logout','/users/logout');?></li>
<!-- <li><?php echo $this->Html->link('See backend', ['controller' => 'Pages', 'action' => 'backend' , '_full' => true]);?></li> -->
<?php endif;?>
    </ul>
  </div>
</nav>

<header class="row">
    <div class="header-image"><h1 class="intro">Música para todos.</h1><?= $this->Html->image('mymusic-into.jpg') ?>
    <?= $this->Html->link(__('See all Songs'), ['controller' => 'Songs','action' => 'index'] ,['class' =>'btn btn-success']) ?>
    </div>
    <div class="header-title">
        <h1>Welcome to Mymusic. Calidad. Solidez.</h1>
    </div>
</header>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
