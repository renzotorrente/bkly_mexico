<style>
    .caption {
        color: rgb(24, 86, 62);
        font-weight: bold;
        font-size: 16px;
        margin-top: 5px;
    }

    .ficha {
        margin-bottom: 10px;
    }
</style>
<div class="separateContent">
    <article>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4 ficha">
                        <a class="" target="_blank" href="<?= $this->Url->build(['action' => 'credito']); ?>">
                            <?= $this->Html->image('productos/seguros/responsabilidadcivil.jpg', ['class' => 'img-responsive']) ?>
                        </a>
                        <p class="caption">Crédito</p>
                    </div>
                    <div class="col-md-4 ficha">
                        <a class="" target="_blank" href="<?= $this->Url->build(['action' => 'administrativas']); ?>">
                            <?= $this->Html->image('productos/seguros/todo-riesgo.jpg', ['class' => 'img-responsive']) ?>
                        </a>
                        <p class="caption">Administrativas</p>

                    </div>
                    <div class="col-md-4 ficha">
                        <a class="" target="_blank" href="<?= $this->Url->build(['action' => 'judiciales']); ?>">
                            <?= $this->Html->image('productos/seguros/monolinea.jpg', ['class' => 'img-responsive']) ?>
                        </a>
                        <p class="caption">Judiciales</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2 class="h3">Accesos</h2>
                    <div class="row">
                        <div class="col-md-4"><a style="color:black;" href="https://fianzas.berkleymex.com/Sitios/Login.aspx" target="_blank" rel="noopener noreferrer"><?= $this->Html->image('biweb-fianzas.jpg') ?></a></div>

                        <div class="col-md-4"  style="padding-left: 20px;">
                            <p><b>Contrato Definitivo</b></p>
                            <?php echo $this->Html->link(
                                'Descargar PDF',
                                '/files/productos/seguros/monolinea/contrato_definitivo_formato.pdf',
                                ['class' => 'btn greenlink', 'target' => "_blank"]
                            ); ?>
                        </div>

                        <div class="col-md-4"><a style="color:black;" href="https://validafianza.berkleymex.com/ValidaFianzaBerkley/sitios/default.aspx" target="_blank" rel="noopener noreferrer"><?= $this->Html->image('valida-fianza.jpg') ?></a></div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>