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

$cakeDescription = 'Adoptar perros';
?>
<!DOCTYPE html>
<html>

<head>
  <?=$this->Html->charset()?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?=$cakeDescription?>:
    <?=$this->fetch('title')?>
  </title>
  <?=$this->Html->meta('icon')?>

  <?=$this->Html->css('main.css')?>
  <?=$this->Html->css('main.min.css')?>
  <?=$this->Html->css('fonts.css')?>
  <?=$this->Html->css('fineuploader.css')?>
  <?=$this->Html->script('jquery.min.js')?>
  <?=$this->Html->script('main.min.js')?>

  <?=$this->fetch('meta')?>
  <?=$this->fetch('css')?>
  <?=$this->fetch('script')?>
</head>

<body class="height-full bg-light  main
        body-gap-lg                " data-base-url="http://adoptar.org/">
  <div id="js-slideout-menu" class="navbar-inverse">

  </div>
  <header class="">
    <div class="navbar navbar-default  navbar-lg navbar-flatshadow navbar-fixed-top" role="banner">
      <div class="container-fluid">
        <div class="navbar-header">
          <div class="navbar-brand-wrapper">
            <?php echo $this->Html->image('header-logo.jpg', ['alt' => 'el gato', 'class' => 'navbar-brand navbar-brand-img', 'url' => ['controller' => 'Dogs', 'action' => 'index']]); ?>
            <!-- <a class="navbar-brand navbar-brand-img" href="<?=ROOT_URL?>"> -->

            </a>
          </div>
          <button class="js-slideout-toggle-button navbar-toggle m-r-0 m-l-md pull-left" type="button">

            <span class="icon"></span>
            <span class="sr-only">
              Alternar navegación </span>
          </button>
        </div>
        <div class="main-menu collapse navbar-collapse main-menu" id="js-main-nav">
          <ul class="nav navbar-nav navbar-nav-alt">
          </ul>
          <ul class="nav navbar-nav navbar-right navbar-nav-alt">
            <li class="dropdown">
              <?php $name = $this->Session->read('Auth.User.username');?>

              <?php if ($name): ?>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Bienvenid@
                <?php echo $this->Session->read('Auth.User.username'); ?></a>
                <?php if ($this->Session->read('Auth.User.role') == 'admin'): ?>
                <div class="dropdown-menu hover-animated space-in width-xl" role="menu">
                        <?=$this->Html->link(__('Ver adoptados'), ['controller' => 'Dogs', 'action' => 'seeAdopted'], ['class' => 'btn btn-outline btn-primary btn-adoptar'])?>
                </div>

                <?php endif;?>
              <?php else: ?>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Iniciar
                sesión</a>
              <div class="dropdown-menu hover-animated space-in width-xl" role="menu">

                <form class="form-vertical js-login-form" action="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'login']); ?>"
                  method="post">
                  <fieldset>
                    <legend>
                      <?=__('Please enter your username and password')?>
                      <?php echo $this->Session->read('Auth.User.username'); ?>
                    </legend>
                    <?=$this->Form->input('username')?>
                    <?=$this->Form->input('password')?>
                  </fieldset>
                  <div class="form-group">
                    <div class="">
                      <?=$this->Form->button(__('Login'), ['class' => 'btn btn-block btn-primary']);?>
                      <?=$this->Form->end()?>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            </li>
            <?php endif;?>
            <?php if ($name): ?>
            <li>
              <a href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'logout']); ?>">Logout </a>
            </li>
            <?php else: ?>
            <li>
              <a href="#" data-toggle="modal" data-target="#modalRegister">
                Regístrate </a>
            </li>
            <?php endif;?>
          </ul>
        </div>
      </div>
    </div>
    <div class="header-widgets">
    </div>
  </header>
  <main class="" id="js-slideout-panel">

    <div class="js-search-header">
      <div class="height-md bg-dark pos-relative">
        <div class="background-cover overlay overlay-bottom-0 overlay-top-0 overlay-right-0 overlay-left-0 m-b-0 bg-dark">
          <div class="bg-cover bg-cover-transparent bg-fixed">
            <?php echo $this->Html->image('perritomono.jpg', ['height' => '100%', 'width' => '100%']); ?>
          </div>
        </div>

        <div class="row hbox height-md">
          <div class="col-xs-12 col-middle text-center">
            <h1 class="h2 text-white">Perros en adopción </h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container no-gutter-xs">
      <div class="row no-gutter-xs">
        <div class="col-sm-4 col-md-3 ">
          <div class="m-t-md">
          </div>
        </div>
        <!-- Aqui va el contenido -->
        <?=$this->Flash->render()?>
        <div class="container clearfix">
          <?=$this->fetch('content')?>
        </div>

        <!-- Fin del contenido -->
        <div class="footer-block footer-one bg-dark lt text-inverse hpadder-sm">
          <div class="container">
            Adoptar una Mascota </div>
        </div>
        <div class="footer-block footer-two bg-dark text-inverse p-y-md">
          <div class="container">
            <div class="row js-masonry">
              <div class="col-xs-12 col-sm-4 grid-item">
                <h4>More Information</h4>
                <ul class="list-special">
                  <li>
                    <a class="link-reset" href="">Viva VoX</a>
                  </li>
                </ul>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <span class="copyright text-xs">© Copyright 2018 Adoptar una Mascota</span>
                </div>
              </div>
            </div>
          </div>
          </footer>

          <div class="modal fade js-modal-center" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="modalRegister"
            aria-hidden="true" data-remote="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'add']); ?>">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="spinner">
                  <div class="double-bounce1"></div>
                  <div class="double-bounce2"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="modalQuickView" tabindex="-1" role="dialog" aria-labelledby="modalQuickView"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="spinner">
                  <div class="double-bounce1"></div>
                  <div class="double-bounce2"></div>
                </div>
              </div>
            </div>
          </div>

</body>

</html>