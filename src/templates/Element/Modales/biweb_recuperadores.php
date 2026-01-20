<style>
    .contenido-modal {
        display: flex;
        align-items: stretch;
    }
    .contenido-modal .biweb-fondo {
        flex: 0 0 70%;
        max-width: 70%;
    }
    .contenido-modal .biweb-fondo img {
        width: 100%;
        height: 100%;
        object-fit: center;
        object-position: center;
    }
    .contenido-modal .form-biweb-recu {
        padding: 15px;
        background-color: #e1e1d7;
        text-align: center;
    }
    .contenido-modal .form-biweb-recu img{
        max-width: 125px;
        width: 100%;
    }
    
    @media screen and (max-width: 550px) {
        .contenido-modal {
            flex-direction: column;
        }    
        .contenido-modal .biweb-fondo, .contenido-modal .form-biweb-recu {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }
</style>

<div class="modal" id="biweb-recup">
    <div class="modal-content">
        <div class="modal-body">
            <div class="contenido-modal">
                <div class="col-md-8 biweb-fondo">
                    <?= $this->Html->image('home/modales/fondo-asegurados-recuperadores.jpg',['style' => 'max-height: 100%;max-width: 100%;'])?>
                </div>
                <div class="col-md-4 form-biweb-recu">
                    <?= $this->Form->create(null,['type' => 'POST','url' =>"https://col.berkleyonline.com.ar:8443/BIWeb/servlet/com.berkleycomercial10.binetloginaseg",'target' => '_blank'])?>
                        <div class="row campos">
                            <div style="height: 125px;"></div>
                            <div class="col-md-12">
                                <?= $this->Form->control('vUSERNAME',['type' => 'text','label' => false,'placeholder' => 'Usuario', 'style' => 'margin-bottom: 10px;']) ?>
                            </div>
                            <div class="col-md-12">
                                <?= $this->Form->control('vUSERPASSWORD',['type' => 'password','label' => false,'placeholder' => 'Clave','style' => 'margin-bottom: 10px;'])?>
                            </div>
                            <div class="col-md-12">
                            <?php echo $this->Form->button('Ingresar',['type' => 'submit','class' => 'btn greenlink centrado']
                            ); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <?= $this->Html->link('¿Olvidó su contraseña?','https://col.berkleyonline.com.ar:8443/BIWeb/servlet/com.berkleycomercial10.olvidopass_paso1?P',['class' => 'linkModal','target' => '_blank']) ?>
                            </div>
                            <div class="col-md-12">
                                <?= $this->Html->link('Registrarse como <b>nuevo usuario</b>','https://col.berkleyonline.com.ar:8443/BIWeb/servlet/com.berkleycomercial10.binetlogin?6',['class' => 'linkModal','escape' => false,'target' => '_blank']) ?>
                            </div>
                            <div class="col-md-12">
                                <?= $this->Html->link('Problemas para acceder','https://col.berkleyonline.com.ar:8443/BIWeb/servlet/com.berkleycomercial10.mailsoporte',['class' => 'linkModal','target' => '_blank']) ?>
                            </div>
                        </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>                
        </div>
    </div>
</div>

<style>
    .form-biweb-recu {
        background-image: url("<?= $this->Url->image('home/modales/acceso-recup.jpg') ?>");
        background-position: top center;
        background-repeat: no-repeat;
        margin-left: 0px;
        margin-right: auto;
        max-height: 100%;
        padding: 10px;
    }
    .biweb-fondo{
        margin-right: 0px;
        padding-left: 0px;
        padding-right: 0px;
    }
    .linkModal {
        font-size: 12px;
        color: black !important;
    }


</style>

<script>
$(document).ready(function () {
    $('#biweb-recup').iziModal({
        width: 750,
        closeButton: true,
    });        
    $('#modalRecup').click(function (e) { 
        e.preventDefault();
        $('#biweb-recup').iziModal('open');        
    });
});
</script>
