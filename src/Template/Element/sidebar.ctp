<?php $tabindex = 9?>
<div class="col-lg-4">
    <aside class="linksList">
        <ul class="list-unstyled">
            <li class="first"><h3 class="h4"> <?= $titulo ?></h3></li>
            <?php foreach($secciones as $action => $nombre): ?>
                <li class="link">
                <?php
                    $urlparams = ['action' => 'index',$action];

                    if ($action === 'judiciales' || $action === 'credito' || $action === 'administrativas' || $action === 'seguroDeResponsabilidadCivil' || $action === 'seguroMultipleTodoRiesgo' || $action === 'monolinea'
                     || $action === 'construccion' || $action === 'seguroMaritimoTerrestreAereo' ) {
                        $urlparams = ['action' => $action];
                    }
                    ?>
                    <a
                        style="padding-left: 20px;" 
                        tabindex="<?= $tabindex?>" 
                        href="<?= $this->Url->build($urlparams)?>" 
                        class="<?= $this->request->getParam('slug') == $action ? "active":""?>"> <?= $nombre ?> 
                    </a>
                </li>
                <?php $tabindex++;?>
            <?php endforeach;?>
        </ul>
    </aside>
</div>