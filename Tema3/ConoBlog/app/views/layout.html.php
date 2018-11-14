<?php
 $pag_actual=($_SERVER['REQUEST_URI']);
$pag_cortada= explode("/", $pag_actual);
// var_dump($_COOKIE);
?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?=ROOT_URL?>/public/img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MacGregor</title>
    <link rel="stylesheet" href="<?=ROOT_URL?>/public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=ROOT_URL?>/public/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?=ROOT_URL?>/public/fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?=ROOT_URL?>/public/css/Article-List.css">
    <link rel="stylesheet" href="<?=ROOT_URL?>/public/css/Footer-Clean.css">
    <link rel="stylesheet" href="<?=ROOT_URL?>/public/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="<?=ROOT_URL?>/public/css/Navigation-Clean.css">
    <link rel="stylesheet" href="<?=ROOT_URL?>/public/css/styles.css">
    <link rel="stylesheet" href="<?=ROOT_URL?>/public/css/Team-Boxed.css">
    <link rel="stylesheet" href="<?=ROOT_URL?>/public/css/normalize.css" />
    <link rel="stylesheet" href="<?=ROOT_URL?>/public/css/demo.css" />
    <link rel="stylesheet" href="<?=ROOT_URL?>/public/css/component.css" />
    <link rel="stylesheet" href="<?=ROOT_URL?>/public/css/calendario.css" />
    
</head>

<body style="
background-color: #FFF;
">
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean">
            <div class="container"><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                <nav class="menu menu--sebastian">
					<ul class="menu__list">
                        <li class="menu__item"><a href="<?= ROOT_URL?>" class="menu__link oculta">Inicio</a></li>
                        <li class="menu__item"><a href="<?= ROOT_URL?>Pages/sobre_mi" class="menu__link">Sobre Mi</a></li>
						<li class="menu__item"><a href="<?= ROOT_URL?>Pages/contacto" class="menu__link">Contacto</a></li>
                        <li class="menu__item icono"><a class="navbar-brand" href="<?= ROOT_URL?>Pages/index"><img src="<?=ROOT_URL?>/public/img/logoconor.png" class="logo" alt="cono mcgregor" ></a></li>
                        <li class="menu__item"><a href="<?= ROOT_URL?>users/login" class="menu__link">Login</a></li>
                        <li class="menu__item"><a href="<?= ROOT_URL?>users/register" class="menu__link">Register</a></li>
                        <li class="menu__item"><a href="<?= ROOT_URL?>Posts/index" class="menu__link">Blog</a></li>
					</ul>
				</nav>
                </div>
            </div>
        </nav>
    </div>
<body class="<?php echo($pag_cortada[sizeof($pag_cortada)-1].$pag_cortada[sizeof($pag_cortada)-2])?>"> 
<div class="main">
<?=print_r (Messages::display(),true)?>
<?=$content?>

</div>
<div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Menu</h3>
                        <ul>
                            <li><a href="index.html">Inicio</a></li>
                            <li><a href="calendario.html">Calendario</a></li>
                            <li><a href="galeria.html">Blog</a></li>
                            <li><a href="sobre_mi.html">Info</a></li>
                            <li><a href="contacto.html">Contacto</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Contacto</h3>
                        <ul>
                            <li><a href="mailto:mcgregor@ufcfighter.com">Email: mcgregor@ufcfighter.com</a></li>
                        </ul>
                        <ul>
                            <li><a>Telefono: (1) 866 415 1336</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social"><a href="https://www.facebook.com/thenotoriousmma/"><i class="icon ion-social-facebook"></i></a><a href="https://twitter.com/TheNotoriousMMA"><i class="icon ion-social-twitter"></i></a><a href="https://www.instagram.com/thenotoriousmma"><i class="icon ion-social-instagram"></i></a>
                        <p class="copyright">Hecho con <i>♥</i> por Mariquitos</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
<script src="<?=ROOT_URL?>/public/js/jquery.min.js"></script>
    <script src="<?=ROOT_URL?>/public/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=ROOT_URL?>/public/js/classie.js"></script>
    <script src="<?=ROOT_URL?>/public/js/clipboard.min.js"></script>
</html>