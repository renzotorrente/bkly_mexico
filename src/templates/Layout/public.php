<!doctype html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?= $this->Html->charset() ?>
    <title><?= (!empty($titulo)) ? sprintf("%s | Berkley Mexico",$titulo) : "Berkley Mexico" ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <?= $this->Html->css(['bootstrap.css','components.css', 'berkley.css','iziModal.min.css'])?>
    <?= $this->Html->meta('favicon.ico', 'img/favicon.ico', ['type' => 'icon']); ?>
    <?= $this->fetch('css')?>
    <?= $this->fetch('meta')?>
</head>

<body id="fullscreen">
    <?= $this->element('navbar_publico',[
            'institucional' => $nav_institucional
    ])?>
    <?= $this->element('slider_publico')?>
    <section>
        <div class="container">
            <div class="row">
                <div class=" col-xs-12 col-md-12 ">
                    <?= $this->fetch('content')?>
                </div>
            </div>
        </div>
    </section>
        
    </div>
    <?= $this->element('footer')?>

    
    <?= $this->Html->script(['bootstrap.js','bootstrap-accessibility.min.js','iziModal.min.js'])?>
    <?= $this->fetch('script')?>

</body>
</html>
