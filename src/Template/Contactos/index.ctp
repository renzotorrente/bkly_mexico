<section class="page">

    <div class="secondaryContent">
        <div id='map' style="width:100%;height:400px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1882.1216614835678!2d-99.27432134864391!3d19.358614099999993!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d200cbd43ce4f7%3A0xc3b538e2cc6d6012!2sEdificio%20Zentrum!5e0!3m2!1ses-419!2sar!4v1673636778883!5m2!1ses-419!2sar" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <?= $this->Form->create(null, ['id' => 'contact']) ?>
                    <h2 style="margin-bottom:20px;">Envianos tu consulta.</h2>
                    <small class="contactWarning">Los campos marcados con * son obligatorios</small><br>
                    <div class="form-group">
                        <label for="nombre">* Nombre: </label>
                        <?= $this->Form->control('nombre', ['class' => 'form-control', 'type' => 'text', 'id' => 'nombre', 'placeholder' => 'Escriba su nombre', 'required' => true, 'label' => false]) ?>
                    </div>
                    <div class="form-group">
                        <label for="email">* Email: </label>
                        <?= $this->Form->control('email', ['class' => 'form-control', 'type' => 'email', 'id' => 'email', 'placeholder' => 'Dirección de correo electrónico', 'required' => true, 'label' => false]) ?>
                    </div>
                    <div class="form-group">
                        <label for="asunto">* Asunto: </label>
                        <?= $this->Form->control('asunto', ['class' => 'form-control', 'type' => 'text', 'id' => 'asunto', 'placeholder' => 'Escriba su nombre', 'required' => true, 'label' => false]) ?>
                    </div>
                    <div class="form-group">
                        <label for="mensaje">* Mensaje: </label>
                        <?= $this->Form->textarea('mensaje', ['class' => 'form-control', 'type' => 'text', 'id' => 'mensaje', 'placeholder' => 'Escriba su mensaje', 'required' => true, 'label' => false]) ?>

                    </div>
                    <button class="greenlink btn">Enviar</button>
                    <?= $this->Form->end() ?>
                </div>
                <!--/col-8-->


                <div class="col-sm-4 col-sm-offset-2">
                    <h2 class="h4 contactTitle">Berkley International Seguros México S.A. de C.V. <br> <br>Berkley International Fianzas México S.A. de C.V.</h2>

                    <h4 style="color:rgb(24, 86, 62);font-weight: bold;">Atención al cliente</h4>
                    <div class="lateral" style="margin-bottom:20px;">
                        <div>
                            <p>
                                +52 (55) 1037 5300 <br><br>

                                De Lunes a Jueves de 8am a 6pm <br><br>

                                Viernes de 8am a 2pm
                            </p>

                        </div>
                    </div>

                    <!-- <h4 style="color:rgb(24, 86, 62);font-weight: bold;">Denuncia de siniestros las 24 hs</h4>
                <div class="lateral" style="margin-bottom:20px;">
                    <div>
                        <p>Tel.: 0800-8542 </p>
                    </div>
                </div>

                <h4 style="color:rgb(24, 86, 62);font-weight: bold;">Servicio de auxilio mecánico y asistencia al hogar</h4>
                <div class="lateral" style="margin-bottom:20px;">
                    <div>
                        <p>Tel.: 0800-8542 </p>
                    </div>
                </div>

                <h4 style="color:rgb(24, 86, 62);font-weight: bold;">Contacto</h4>
                <div class="lateral">
                    <a href="#">Rincón 391 Piso 5° - Montevideo</a>
                    <p class="telef">Teléfono: +598-2916-6998</p>
                </div> -->
                </div>

            </div>
        </div>
    </main>
</section>

<style>
    .lateral {


        padding: 20px;
        background: #f1f1f1;
        padding-right: 10px;
        padding-bottom: 8px;
    }


    .lateral .telef {

        margin-top: 8px;
        margin-bottom: 2px;



    }


    .lateral .maill {
        margin-top: 0px;
        margin-bottom: 20px;



    }

    .lateral a {
        color: rgb(24, 86, 62);
        font-weight: bold;

    }
</style>