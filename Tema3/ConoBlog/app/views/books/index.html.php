<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="assets/img/favicon.ico">
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
                        <li class="menu__item"><a href="index.html" class="menu__link oculta">Inicio</a></li>
						<li class="menu__item"><a href="calendario.html" class="menu__link">Calendario</a></li>
                        <li class="menu__item"><a href="galeria.html" class="menu__link">Galeria</a></li>
                        <li class="menu__item icono"><a class="navbar-brand" href="/cono"><img src="<?=ROOT_URL?>/public/img/logoconor.png" class="logo" alt="cono mcgregor" ></a></li>
						<li class="menu__item"><a href="sobre_mi.html" class="menu__link">Sobre Mi</a></li>
						<li class="menu__item"><a href="contacto.html" class="menu__link">Contacto</a></li>
					</ul>
				</nav>
                </div>
            </div>
        </nav>
    </div>
         
    <div class="carousel slide" data-ride="carousel" id="carousel-1">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="w-100 d-block" src="<?=ROOT_URL?>/public/img/conor-mcgregor-2.jpg" alt="Slide Image">
            </div>
            <div class="carousel-item">
                <img class="w-100 d-block" src="<?=ROOT_URL?>/public/img/conor-mcgregor-1.jpg" alt="Slide Image">
            </div>
            <div class="carousel-item">
                <img class="w-100 d-block" src="<?=ROOT_URL?>/public/img/conor-mcgregor.jpg" alt="Slide Image">
            </div>
            
            
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
        <ol
            class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2"></li>
            </ol>
    </div>
    <div class="article-list">
        <div class="container">
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item"><img class="img-fluid" src="<?=ROOT_URL?>/public/img/quien-soy.jpg">
                    <h3 class="name soy">¿Quien soy?</h3>
                    <p class="description">Toda la información sobre mi, mis titulos y logros personales.</p><a href="Sobre_mi.html" class="action"><button class="btn btn-primary" type="button">Info</button></a></div>
                <div
                    class="col-sm-6 col-md-4 item"><img class="img-fluid" src="<?=ROOT_URL?>/public/img/calendario.jpg">
                    <h3 class="name">Calendario</h3>
                    <p class="description">No te pierdas ninguna de las estadisticas que tengo en los ultimos combates.</p><a href="calendario.html" class="action"><button class="btn btn-primary" type="button">Calendario</button></a></div>
            <div
                class="col-sm-6 col-md-4 item"><img class="img-fluid" src="<?=ROOT_URL?>/public/img/galeria.jpg">
                <h3 class="name">Galeria</h3>
                <p class="description">Galeria sobre mi, mis mejores fotos.</p><a href="galeria.html" class="action"><button class="btn btn-primary" type="button">Galeria</button></a></div>
    </div>
    </div>
    </div>
    <div class="sponsors">
        <div class="container">
            <div class="row">
                <div class="col-md-3"><img src="<?=ROOT_URL?>/public/img/sponsor-Reebook.jpg"  class="img-sponsors" style="width:100%;"></div>
                <div class="col-md-3"><img src="<?=ROOT_URL?>/public/img/sponsor-BetSafe.jpg" class="img-sponsors" style="width:100%;"></div>
                <div class="col-md-3"><img src="<?=ROOT_URL?>/public/img/sponsor-MonsterEnergy.jpg" class="img-sponsors" style="width:100%;"></div>
                <div class="col-md-3"><img src="<?=ROOT_URL?>/public/img/sponsor-UFC.jpg" class="img-sponsors" style="width:100%;"></div>
            </div>
        </div>
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
                            <li><a href="galeria.html">Galeria</a></li>
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/clipboard.min.js"></script>
  
</body>

</html>