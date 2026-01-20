<footer style="padding-top: 20px;">
    <style>
        .mail {
            color: #18563E !important;
        }

        @media screen only and (min-width: 576px) {
            .contenedor {
                display: flex;
                align-items: center;
            }

            .contenedor .col {
                flex-grow: 1;
                padding: 10px 0;
                display: flex !important;
                justify-content: center;
                flex-direction: column;
                min-height: 60px;
                margin-bottom: 30px;
            }

            .contenedor .col.bordeado {
                border-right: 1px solid rgba(0, 0, 0, .3);
            }

            .contenedor .col.bordeado:last-child {
                border-right: none;
            }

            .contenedor .col.bordeado p {
                margin-bottom: 0;
            }

        }
    </style>

    <div>
        <div id="map" class="container-fluid">
            <div class="col-lg-12">
                <div class="col-lg-8">
                    <div class="col-12"><a style="color:#ffffff;" href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'avisoDePrivacidad']) ?>">Aviso de privacidad</a> | <a style="color:#ffffff" href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'informacionFinanciera']) ?>">Información Financiera</a> |
                        <?php echo $this->Html->link('UNE Seguros', '/files/UNE_SEGUROS_2023.pdf', ['target' => "_blank", 'style' => 'color: white;']); ?>
                        | <?php echo $this->Html->link('UNE Fianzas', '/files/UNE_FIANZAS_2023.pdf', ['target' => "_blank", 'style' => 'color: white;']); ?>
                        | <?php echo $this->Html->link('BURÓ Seguros', '/files/BURÓ DE ENTIDADES FINANCIERAS-seguros actualización a Marzo 2025.pdf', ['target' => "_blank", 'style' => 'color: white;']); ?>
                        | <?php echo $this->Html->link('BURÓ Fianzas', '/files/BURO-DE-ENTIDADES-FINANCIERAS-FIANZAS.pdf', ['target' => "_blank", 'style' => 'color: white;']); ?>
                    </div>
                    <div class="col-12">
                        <p style="color:#ffffff;">Berkley International Seguros México, SA de CV</p>
                        <p style="color:#ffffff;">Berkley Internacional Fianzas México, SA de CV</p>
                        <?php
                        echo $this->Html->link(
                            $this->Html->image(
                                'home/Condusef.png',
                                array(
                                    'class' => 'img-responsive',
                                    'target' => '_blank'
                                )
                            ),
                            '/webroot/img/home/CONDUSEF.jpg',
                            array(
                                'target' => '_blank',
                                'escape' => false
                            )
                        );
                        ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-12"><b style="color:#ffffff">Atención al cliente</b></div>
                    <div class="col-12">
                        <p style="color:#ffffff">+52 (55) 1037 5300</p>
                    </div>
                    <div class="col-12">
                        <p style="color:#ffffff">De Lunes a Jueves de 8am a 6pm</p>
                    </div>
                    <div class="col-12">
                        <p style="color:#ffffff">Viernes de 8am a 2pm</p>
                    </div>
                </div>
            </div>
        </div>
</footer>