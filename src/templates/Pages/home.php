<style>
    .box-enlaces {
        padding-top: 10px;
    }

    .login-enlaces {
        color: rgb(24, 86, 62);
        font-weight: bold;
        font-size: 1.6rem;
        text-decoration: none;
    }

    .login-enlaces a:hover {
        text-decoration: none;
    }

    .boton {
        width: 100%;
        background-color: #932321;
        border-radius: 0px 0px 25px 25px;
    }

    span {
        color: white;
        padding: 0px 5px;
        font-size: 20px;
    }

    .titulo {
        font-size: 20px;
    }

    .btn-pago {
        width: 330px;
        margin-left: auto;
    }

    @media (min-width: 992px) {
        .box-enlaces {
            margin-right: 17px;
        }
    }

    @media (max-width: 576px) {
        #menu-covid {
            margin-top: 20%;
        }

        .li-enlaces {
            margin: 10px 0px;
        }
    }
</style>
<div class="separateContent">
    <article>
        <div class="container">
            <div class="row pop-up" style="margin-top: 10rem;">
                <div id="popup-modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="margin-top: 12rem;">
                            <div class="modal-header" style="border-bottom: transparent;">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body" style="padding: 0px;">
                                <?= $this->Html->image('Aviso.JPG', ['class' => 'img-responsive']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row info-home" style="margin-bottom: 5rem;">
                <div class="col-md-8">
                    <p>Combinamos capital con gente sobresaliente y lo envolvemos en una cultura con una visión regional, adaptada al mercado local, a fin de comprender mejor sus riesgos y brindar respuestas rápidas y eficientes para cada necesidad.</p>
                </div>
                <div class="col-md-4">
                    <?= $this->element('telefonos') ?>
                    <a href="https://seguros.berkleymex.com/WebCobros" target="_blank">
                        <?= $this->Html->image('BOTONPAGOCONTARJETA-14.jpg', ['class' => 'btn-pago img-responsive']) ?>
                    </a>
                </div>
            </div>
        </div>
    </article>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#popup-modal').modal('toggle')
    });
</script>