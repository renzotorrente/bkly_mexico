<?php $tabindex = 9?>
<div class="col-lg-4">
    <aside class="linksList">
        <ul class="list-unstyled">
            <li class="first"><h3 class="h4"> <?= $titulo ?></h3></li>
            <?php foreach($secciones as $action => $nombre): ?>
                <li class="link">
                <?php
                    // Para páginas institucionales, usar URLs directas
                    if ($this->request->getParam('controller') === 'Institucionales') {
                        $url = '/' . $action;
                    } else {
                        // Para otros controladores, usar la lógica original
                        $urlparams = ['action' => 'index', $action];
                        if ($action === 'judiciales' || $action === 'credito' || $action === 'administrativas' || $action === 'seguroDeResponsabilidadCivil' || $action === 'seguroMultipleTodoRiesgo' || $action === 'monolinea'
                         || $action === 'construccion' || $action === 'seguroMaritimoTerrestreAereo' ) {
                            $urlparams = ['action' => $action];
                        }
                        $url = $this->Url->build($urlparams);
                    }
                    
                    // Determinar si está activo comparando con la URL actual
                    $currentPath = trim($this->request->getPath(), '/');
                    $isActive = ($currentPath === $action);
                    ?>
                    <a
                        style="padding-left: 20px;" 
                        tabindex="<?= $tabindex?>" 
                        href="<?= $url ?>" 
                        class="<?= $isActive ? "active" : "" ?>"> <?= $nombre ?> 
                    </a>
                </li>
                <?php $tabindex++;?>
            <?php endforeach;?>
        </ul>
    </aside>
</div>