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
    .contenido-modal .form-biweb-emple {
        padding: 15px;
        background-color: #e1e1d7;
        text-align: center;
    }
    .contenido-modal .form-biweb-emple img{
        max-width: 125px;
        width: 100%;
    }
    
    @media screen and (max-width: 550px) {
        .contenido-modal {
            flex-direction: column;
        }    
        .contenido-modal .biweb-fondo, .contenido-modal .form-biweb-emple {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }
</style>

<div class="modal" id="biweb-emp">
    <div class="modal-content">
        <div class="modal-body">
            <div class="contenido-modal">
                <div class="col-md-8 biweb-fondo">
                    <?= $this->Html->image('home/modales/fondo-asegurados-recuperadores.jpg',['style' => 'max-height: 100%;max-width: 100%;'])?>
                </div>
                <div class="col-md-4 form-biweb-emple">
                    <?= $this->Form->create(null,['type' => 'POST','url' =>"https://col.berkleyonline.com.ar:8443/BIWeb/servlet/com.berkleycomercial10.binetlogin?2",'id'=>'MAINFORM','target' => '_blank'])?>
                        <input type="submit" style="display:none">
                        <div class="row campos">
                            <div style="height: 125px;"></div>
                            <div class="col-md-12">
                                <?= $this->Form->control('vUSERNAME',['type' => 'text','id'=> 'vUSERNAME', 'label' => false,'placeholder' => 'Usuario', 'style' => 'margin-bottom: 10px;']) ?>
                            </div>
                            <div class="col-md-12">
                                <?= $this->Form->control('vUSERPASSWORD',['type' => 'password','id'=> 'vUSERPASSWORD','label' => false,'placeholder' => 'Clave','style' => 'margin-bottom: 10px;'])?>
                            </div>
                            <div class="col-md-12">
                            <?= $this->Form->control('LOGIN',['type' => 'hidden','id'=> 'LOGIN','label' => false, 'value' => 'INICIAR SESION'])?>
                            <?php echo $this->Form->button('LOGIN',['type' => 'submit','id'=> 'LOGIN','class' => 'btn greenlink centrado']
                            ); ?>
                            </div>
                        </div>
                        <input type="text" id="vEMPCOD" name="vEMPCOD" value="1" size="2" spellcheck="false" maxlength="2" class="Attribute" style="display:none;text-align:right"/><span class="ReadonlyAttribute" style="display:none;" id="span_vEMPCOD" data-gx-enabled-id="vEMPCOD"> 1</span>
                        <select id="vEMPPACOD" name="vEMPPACOD" class="Attribute" style="display:none;">
                            <option value="AR" selected="selected">Argentina</option>
                            <option value="BR">Brasil</option>
                            <option value="UY">Uruguay</option>
                        </select>
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
                        <div>
                            <input type="hidden" name="GXState" value='{"vEMPCOD_Enabled":"0","LOGIN_Fontbold":"1","TBSOPORTE_Link":"com.berkleycomercial10.mailsoporte","TBCONDICIONES_Linktarget":"_blank","TBCONDICIONES_Link":"com.berkleycomercial10.terminoscondiciones","TBNUEVOUSUARIO_Link":"com.berkleycomercial10.usuarionuevomsg","vEMPCOD_Visible":"0","vEMPPACOD_Visible":"0","HOME_Bitmap":"/BIWeb/static/Resources/ImgBerkleyArgentina.jpg","BIWEB_Bitmap":"/BIWeb/static/Resources/BiWebP01.jpg","_EventName":"","_EventGridId":"","_EventRowId":"","vEMPPACOD_Values":"{\"isset\":true,\"s\":\"AR\",\"v\":[[\"AR\",\"Argentina\"],[\"BR\",\"Brasil\"],[\"UY\",\"Uruguay\"]]}","vTIPUSUCOD":"2","GX_FocusControl":"vUSERNAME","GX_AJAX_KEY":"FFFFFF3772FFFF63FF663BFF62FF00FF","AJAX_SECURITY_TOKEN":"d0846ea97373578f22dd9717d61f6d20356abb49b5b7399896fd599c6fde57cb","GX_CMP_OBJS":{},"sCallerURL":"/BIWeb/servlet/com.berkleycomercial10.binetlogin?2","GX_WEBSOCKET_ID":"a48b4d0dc0b597a7f39db2265c4b3043ca1598b6","GX_CLI_NAV":"true","GX_THEME":"BinetModernGrey","GX_RES_PROVIDER":"com.genexus.webpanels.GXResourceProvider"}' />
                        </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>                
        </div>
    </div>
</div>

<style>
    .form-biweb-emple {
        background-image: url("<?= $this->Url->image('home/modales/acceso-empleados.jpg') ?>");
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
    $('#biweb-emp').iziModal({
        width: 750,
        closeButton: true
    });        
    $('#modalEmp').click(function (e) { 
        e.preventDefault();
        $('#biweb-emp').iziModal('open');        
    });
});
</script>
