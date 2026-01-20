<!doctype html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <?= $this->Html->charset() ?>
        <title><?= (!empty($titulo)) ? sprintf("%s | Berkley Mexico",$titulo) : "Berkley Mexico" ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <?= $this->Html->css(['bootstrap.css','components.css','berkley.css','/plugins/iziToast/iziToast.min.css'])?>

        <?= $this->fetch('css')?>
        <?= $this->fetch('meta')?>
        <?= $this->Html->meta('favicon.ico', 'img/favicon.ico', ['type' => 'icon']); ?>
        <style>
            .navbar-bkl .navbar-nav>li>a.active {
                text-transform: uppercase;
                font-weight: bold !important;
            }

            .ddjj{
                padding: 5px; 
                background-color:grey;
                margin-top:30px; 
                width:361px; 
                margin-left:14px; 
                height: auto;
                background: #eee;
            }

            .img-ddjj{
                    margin-left: 115px;
                }

            @media(max-width: 576px){
                .img-ddjj{
                    margin-left: 60px;
                }
            }
        </style>
    </head>

    <body id="fullscreen">
        <header>
            <?= $this->element('navbar_publico',[
                'institucional' => $nav_institucional,
            ])?>
        </header>
        <?= $this->Flash->render() ?>
        <section class="page">
            <?= $this->request->getParam('controller') != 'Contactos' ? $this->element('banner') : ''?>
            <main>
                <div class="container">
                    <div class="row">
                        <?php if($this->request->getParam('controller') != 'Contactos'):?>
                            <div class="col-lg-8">
                                <?= $this->fetch('content')?>
                            </div>
                            <aside class="sidebar">
                                <?= $this->element('sidebar',['titulo' => $titulo_sidebar, 'secciones' => $secciones_sidebar])?>
                            </aside>
                        <?php else: ?>
                            <div class="col-lg-12">
                                <?= $this->fetch('content')?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </main>
        </section>
        <?= $this->element('footer')?>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <?= $this->Html->script(['bootstrap.js','bootstrap-accessibility.min.js','/plugins/iziToast/iziToast.min.js'])?>
        <script>
            //AUMENTAR O DISMINUIR FUENTE
            var $affectedElements = $("p");
            $affectedElements.each(function () {
                var $this = $(this);
                $this.data("orig-size", $this.css("font-size"));
            });

            $("#btn-increase").click(function () {
                changeFontSize(1);
            })

            $("#btn-decrease").click(function () {
                changeFontSize(-1);
            })

            $("#btn-orig").click(function () {
                $affectedElements.each(function () {
                    var $this = $(this);
                    $this.css("font-size", $this.data("orig-size"));
                });
            })

            function changeFontSize(direction) {
                $affectedElements.each(function () {
                    var $this = $(this);
                    $this.css("font-size", parseInt($this.css("font-size")) + direction);
                });
            }

            //CONTRASTE
            $('#contrast').on('click', function (e) {
                $('body').toggleClass('contrast');
                $('#navbar-logo').toggleClass('hidden');
            });

            //SUBRAYAR LINKS
            $('#underlineLinks').on('click', function (e) {
                $('body').toggleClass('underlineLinks');
            });

            //ESCALA DE GRISES
            $('#grayscale').on('click', function (e) {
                $('.navbar-bkl').toggleClass('grayscale');
                $('.page').toggleClass('grayscale');
                $('footer').toggleClass('grayscale');
            });

            //FULLSCREEN, Plataforma de lectura
            var fullscreenButton = document.getElementById("fullscreen-button");
            var fullscreenDiv = document.getElementById("fullscreen");
            var fullscreenFunc = fullscreenDiv.requestFullscreen;

            if (!fullscreenFunc) {
                ['mozRequestFullScreen',
                    'msRequestFullscreen',
                    'webkitRequestFullScreen'
                ].forEach(function (req) {
                    fullscreenFunc = fullscreenFunc || fullscreenDiv[req];
                });
            }

            function enterFullscreen() {
                fullscreenFunc.call(fullscreenDiv);
            }

            fullscreenButton.addEventListener('click', enterFullscreen);
        </script>
        <?= $this->fetch('script') ?>
    </body>

</html>
