<header>
    <nav class="navbar navbar-default navbar-bkl" data-spy="affix" data-offset-top="1" title="Menú Principal">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" tabindex="1" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Abrir Menú</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?= $this->Html->image('Berkley-Mexico-Seguros.png', [
					'href' => '#',
					'tabindex' => '2',
                    'url' => ['controller' => 'Pages','action' => 'display','home'],
                    'alt' => 'Logo Berkley - Dirige al inicio',
                    'title' => 'Berkley image',
                    'id' => 'navbar-logo'
                    ])?>

                <?= $this->Html->image('Berkley-Mexico-Seguros.png', [
					'tabindex' => '2',
                    'url' => ['controller' => 'Pages','action' => 'display','home'],
                    'alt' => 'Logo Berkley - Dirige al inicio',
                    'title' => 'Berkley image',
                    'id' => 'navbar-logo-hc'
                    ])?>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a tabindex="3" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false"><b>INSTITUCIONAL</b> <i class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <?php foreach($institucional as $slug => $titulo): ?>
                                <li><a href="<?= $this->Url->build(['controller' => 'Institucionales','action' => 'index',$slug])?>"><?= $titulo?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    
                    <li class="dropdown">
                        <a tabindex="5" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>PRODUCTOS</b> <i class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                                <li><a href="<?= $this->Url->build(['controller' => 'Seguros','action' => 'index'])?>">Seguros</a></li>
                                <li><a href="<?= $this->Url->build(['controller' => 'Fianzas','action' => 'index'])?>">Fianzas</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a tabindex="6" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>SINIESTROS</b> <i class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                                <li><a href="<?= $this->Url->build(['controller' => 'Siniestros','action' => 'seguros'])?>">Seguros</a></li>
                                <li><a href="<?= $this->Url->build(['controller' => 'Siniestros','action' => 'fianzas'])?>">Fianzas</a></li>
                        </ul>
                    </li>


                    <li><a tabindex="8" href="<?= $this->Url->build(['controller' => 'Contactos','action' => 'index'])?>"><b>CONTACTO</b></a></li>

                </ul>
            </div>
        </div>
    </nav>
</header>



























<?php 



/* <header>
    <nav class="navbar navbar-default navbar-bkl" data-spy="affix" data-offset-top="1" title="Menú Principal">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" tabindex="1" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                    <span class="sr-only">Abrir Menú</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?= $this->Html->image('logo.png', ['href' => '#','tabindex' => '2'])?>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                        <a tabindex="3" href="#" class="dropdown-toggle text-uppercase" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false"><strong>Seguros Empresariales</strong> <i class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Fianzas y Garantías</a></li>
                            <li><a href="#">Ingeniería & <br>Construcción</a></li>
                            <li><a href="#">Responsabilidad<br>Civil</a></li>
                            <li><a href="#">Directores & <br>Administradores</a></li>
                            <li><a href="#">Transportes</a></li>
                            <li><a href="#">Siniestros</a></li>
                            <li><a href="#">Clausulados</a></li>
                            <li><a href="#">Nuestros Productos</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" tabindex="4" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Institucional <i class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Presencia en<br>Colombia</a></li>
                            <li><a href="#">Nuestro valor<br>Agregado</a></li>
                            <li><a href="#">Datos<br>Patrimoniales</a></li>
                            <li><a href="#">Misión y<br>Compromiso</a></li>
                            <li><a href="#">Carta del<br>Presidente</a></li>
                            <li><a href="#">Grupo<br>Berkley</a></li>
                            <li><a href="#">Gobierno<br>Corporativo</a></li>
                            <li><a href="#">Administración<br>de Riesgos</a></li>
                            <li><a href="#">Estados<br>Financieros</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a tabindex="5" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Servicio al cliente <i class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Misión de<br>nuestra área</a></li>
                            <li><a href="#">Cómo reportamos sus<br>peticiones, quejas o<br>requerimientos</a></li>
                            <li><a href="#">Cómo pagar<br>sus pólizas</a></li>
                            <li><a href="#">Contáctanos</a></li>
                            <li><a href="#">Cliente preferencial</a></li>
                            <li><a href="#">Eres Berkley,<br>cuéntenos su<br>experiencia</a></li>
                            <li><a href="#">Glosario de Seguros</a></li>
                            <li><a href="#">Preguntas Frecuentes</a></li>
                            <li><a href="#">Qué hacer en caso<br>de siniestros</a></li>
                            <li><a href="#">Sistema de atención<br>al consumidor<br>financiero</a></li>
                            <li><a href="#">Educación Financiera</a></li>
                            <li><a href="#">Formularios útiles</a></li>
                            <li><a href="#">Nuestros<br>Intermediarios<br>de seguros</a></li>
                            <li><a href="#">Equipo de trabajo</a></li>
                        </ul>
                    </li>

                    <li><a tabindex="6" href="#">Sucursal Virtual</a></li>

                    <li class="dropdown">
                        <a tabindex="7" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">SUCIS <i class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Normatividad</a></li>
                            <li><a href="#">Nuestros<br>Intermediarios PNV</a></li>
                            <li><a href="#">Código de ética y<br>conducta de nuestros<br>intermediarios de<br>seguros</a></li>
                            <li><a href="#">Manual de<br>Intermediarios</a></li>
                            <li><a href="#">Capacitación PNV</a></li>
                            <li><a href="#">Beneficios<br>para nuestros<br>intermediarios<br>de seguros</a></li>
                        </ul>
                    </li>

                    <li><a tabindex="8" href="#">Contacto</a></li>

                </ul>
            </div>
        </div>
    </nav>
</header> */

?>
