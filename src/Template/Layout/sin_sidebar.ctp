<!doctype html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <?= $this->Html->charset() ?>
        <title><?= (!empty($titulo)) ? sprintf("%s | Berkley Mexico",$titulo) : "Berkley Mexico" ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <?= $this->Html->css(['bootstrap.css','components.css','berkley.css','/plugins/iziToast/iziToast.min.css'])?>
        <?= $this->Html->meta('favicon.ico', 'img/favicon.ico', ['type' => 'icon']); ?>
        <?= $this->fetch('css')?>
        <?= $this->fetch('meta')?>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

        <style>
            .navbar-bkl .navbar-nav>li>a.active {
                text-transform: uppercase;
                font-weight: bold !important;
            }
        </style>
    </head>

    <body id="fullscreen">
        <?= $this->element('navbar_publico',[
            'institucional' => $nav_institucional,
        ])?>
        
        <?= $this->Flash->render() ?>
        <section class="page">
            <?php
                echo $this->element('banner');
            ?>
            <main>
                <div class="container">
                    <div class="row no-gutter">
                        <div class="col-lg-12">
                            <?= $this->fetch('content')?>
                        </div>
                    </div>
                </div>
            </main>
        </section>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.min.js"></script>

        <?= $this->Html->script(['bootstrap.js','bootstrap-accessibility.min.js','/plugins/iziToast/iziToast.min.js'])?>
        <?= $this->element('footer')?>

        <?= $this->fetch('script') ?>
    </body>

</html>
