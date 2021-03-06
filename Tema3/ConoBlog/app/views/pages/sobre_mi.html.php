<?php
ob_start();
?>  
    <div class="intro_sobre-mi">
        <div class="container">
            <div class="row">
                <h1>Mi historia</h1>
            </div>
            <div class="row">
                <div class="col-md-4"><img src="<?=ROOT_URL?>/public/img/sobre_mi.jpg" style="width:100%;"></div>
                <div class="col-md-8">
                    <p>Conor Anthony McGregor​ (nacido el 14 de julio de 1988) es un peleador irlandés de artes marciales mixtas que compite en las categorías de peso pluma, peso ligero y ocasionalmente en la de peso wélter de Ultimate Fighting Championship (UFC). También ha combatido en la disciplina del boxeo en la categoría de peso ligero.</p>
                    <p>McGregor fue el primer peleador en la historia de la UFC en ostentar títulos en dos divisiones distintas al mismo tiempo. Uno de esos cinturones se lo arrebató a José Aldo en 13 segundos de acción, logrando de esta manera el KO más rápido en la historia de las peleas por un título de UFC. El segundo cinturón lo obtuvo al derrotar por nocaut técnico a Eddie Álvarez en UFC 205. También fue campeón de peso pluma y ligero de manera simultánea en la liga británica de MMA Cage Warriors.</p>
                    <p>El deportista irlandés inició su carrera profesional en el boxeo en 2017. Fue derrotado por Floyd Mayweather Jr. en su debut.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="team-boxed">
        <div class="container">
                <h1 class="text-center">Titulos UFC</h1>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box sombra"><img class="rounded-circle" src="<?=ROOT_URL?>/public/img//interino_peso_pluma.jpg">
                        <h3 class="name">Campeon Interino de Peso Pluma</h3>
                        <p class="title">UFC 189 - 11 Julio 2015</p>
                        <p class="description">El 11 de julio de 2015, McGregor se enfrenta a Chad Mendes en el evento PPV UFC 189 por el campeonato interino de peso pluma. McGregor sufre durante el combate debido a la capacidad para la lucha de suelo de Mendes, pero acaba ganando una vez más por KO técnico en el segundo round, conquistando así el campeonato interino y el premio a la Actuación de la Noche.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box sombra"><img class="rounded-circle" src="<?=ROOT_URL?>/public/img/peso_pluma.jpg">
                        <h3 class="name">Campeon de Peso Pluma</h3>
                        <p class="title">UFC 194 - 12 Diciembre 2015</p>
                        <p class="description">Conor McGregor tiene su primer combate por un título de la UFC. La pelea contra el brasileño José Aldo por la unificación del cinturón del peso pluma es programada como acto estelar del evento UFC 194.14​ McGregor deja en shock al mundo al finalizar a su oponente de un solo puñetazo a los 13 segundos, conquistando así el campeonato y el premio a la Actuación de la Noche, además de quedar grabado en los libros de historia como el combate por cinturón más rápido en la historia de la UFC.15​</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box sombra"><img class="rounded-circle" src="<?=ROOT_URL?>/public/img/peso_ligero.JPG">
                        <h3 class="name">Campeon Peso Ligero</h3>
                        <p class="title">UFC 205 - 12 Noviembre 2016</p>
                        <p class="description">Mcgregor en busca de ser el primer peleador ostentando dos títulos en distintas categorias en la UFC al mismo tiempo se enfrenta a Eddie Alvarez en el UFC 205 por el cinturón de Peso Ligero. Finalmente, en el segundo round en el minuto 3 con 4 segundos de un zurdazo se impone ganador, siendo premiado con la presentación de la noche.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <?php $content= ob_get_clean();
include 'app/views/layout.html.php';