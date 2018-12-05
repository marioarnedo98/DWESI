
<!DOCTYPE html>
<html class="height-full">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0">
  <!-- Title -->
  <title>Perros en adopción - Adoptar una Mascota</title>

  <!-- Description -->
  <meta name="description" content="Perros en adopción Rosario, Tengo para dar en adopción cachorro de 7 meses aproximadamente. Juguetón, cariñoso. Se lleva bien con perros gatos y niñ..." />

  <!-- Keywords -->
  <meta name="keywords" content="Perros en adopción, Rosario, Perros en adopción Rosario, Santa fe, Perros en adopción Santa fe, Perros en adopción Santa fe Rosario, Santa fe Rosario" />



  <!-- Gettext ! -->

  <meta property="fb:app_id" content="2058668947699473" />

  <!-- Robots start -->

  <!-- Robots end -->
  <!-- Twitter -->
  <link href="<?= ROOT_URL?>/public/css/fineuploader.css" rel="stylesheet" type="text/css" />
  <link href="<?= ROOT_URL?>/public/css/fonts.css" rel="stylesheet" type="text/css" />
  <link href="<?= ROOT_URL?>/public/css/main.min.css" rel="stylesheet" type="text/css" />
  <link href="<?= ROOT_URL?>/public/css/main.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="<?= ROOT_URL?>/public/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?= ROOT_URL?>/public/js/main.min.js"></script>
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
            <a class="navbar-brand navbar-brand-img" href="<?= ROOT_URL?>">
              <img src="<?= ROOT_URL?>/public/images/header-logo.jpg">
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
            <?php if(isset($_SESSION['is_logged_in'])):?>
              <a class="dropdown-toggle">Bienvenid@ <?php echo $_SESSION['user_data']['user']?></a>
            <?php else:?>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Iniciar
                sesión</a>
              <div class="dropdown-menu hover-animated space-in width-xl" role="menu">

                <form class="form-vertical js-login-form" action="<?= ROOT_URL?>/users/login" method="post"><input
                    type='hidden' name='CSRFName' value='CSRF73239541_866791440' />
                  <input type='hidden' name='CSRFToken' value='909160a639a0c2161399a3f541f3234dadb4299cb111603c69cfc68f82d0935afdea7c4285ee2d962742791c97f1ca77b55ec3178b0c64e4baa1fd22f006ccd4' />
                  <input type="hidden" name="page" value="login" />
                  <input type="hidden" name="action" value="login_post" />

                  <div class="form-group">
                    <label class=" control-label" for="email">
                      E-mail </label>
                    <div class="">
                      <input class="form-control" type="text" name="email" value="" data-rule-required="true"
                        data-msg-required="Introduzca su e-mail o su nombre de usuario">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class=" control-label" for="password">
                      Contraseña </label>
                    <div class="">
                      <input class="form-control" id="password" type="password" name="password" value=""
                        data-rule-required="true" data-msg-required="Introduzca su contraseña">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="">
                      <button class="btn btn-block btn-primary" name="submit" value='submit' type="submit">Iniciar
                        sesión</button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            </li>
            <?php endif;?>
            <?php if(isset($_SESSION['is_logged_in'])):?>
            <li>
              <a href="<?= ROOT_URL?>users/logout">Logout </a>
            </li>
                <?php else:?>
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
          <div class="bg-cover bg-cover-transparent bg-fixed" style="background-image: url(http://adoptar.org/oc-content/uploads/mcfly/image-1-@1508429402.jpg); height: 100%;">
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
<div class="contenido">
<?=$content?>
</div>


      </div>
    </div>


  </main>
  <!-- Start Footer Block -->
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
              <a class="link-reset" href="">Contactar</a>
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
      aria-hidden="true" data-remote="/adoptar/users/register">
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