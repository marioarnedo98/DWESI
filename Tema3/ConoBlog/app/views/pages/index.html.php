<?php
ob_start();
?>      
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
  <?php $content= ob_get_clean();
include 'app/views/layout.html.php';