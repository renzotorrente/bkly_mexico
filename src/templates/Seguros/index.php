<style>
    .caption{
        color: rgb(24, 86, 62);
        font-weight: bold;
        font-size: 16px; 
        margin-top: 5px;
    }
    
    .ficha{
        margin-bottom: 10px;
    }
</style>
<div class="separateContent">
    <article>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4 ficha">
                        <a class="" target="_blank" href="<?= $this->Url->build(['action' => 'seguroDeResponsabilidadCivil']);?>">
                            <?= $this->Html->image('productos/seguros/responsabilidadcivil.jpg',['class' => 'img-responsive']) ?>
                        </a> 
                        <p class="caption">Responsabilidad Civil</p>
                    </div>
                    <div class="col-md-4 ficha">
                        <a class="" target="_blank" href="<?= $this->Url->build(['action' => 'seguroMultipleTodoRiesgo']);?>">
                            <?= $this->Html->image('productos/seguros/todo-riesgo.jpg',['class' => 'img-responsive']) ?>
                        </a> 
                        <p class="caption">Múltiple Todo Riesgo</p>

                    </div>
                    <div class="col-md-4 ficha">
                        <a class="" target="_blank" href="<?= $this->Url->build(['action' => 'monolinea']);?>">
                            <?= $this->Html->image('productos/seguros/monolinea.jpg',['class' => 'img-responsive']) ?>
                        </a> 
                        <p class="caption">Diversos Técnicos</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4 ficha">
                        <a class="" target="_blank" href="<?= $this->Url->build(['action' => 'construccion']);?>">
                            <?= $this->Html->image('productos/seguros/bkl_construccion.jpg',['class' => 'img-responsive']) ?>
                        </a> 
                        <p class="caption">Diversos Misceláneos</p>
                    </div>
                    <div class="col-md-4 ficha">
                        <a class="" target="_blank" href="<?= $this->Url->build(['action' => 'seguroMaritimoTerrestreAereo']);?>">
                            <?= $this->Html->image('productos/seguros/transporte.jpg',['class' => 'img-responsive']) ?>
                        </a> 
                        <p class="caption">Transporte</p>

                    </div>
                </div>
            </div>
        </div>
    </article>
</div>