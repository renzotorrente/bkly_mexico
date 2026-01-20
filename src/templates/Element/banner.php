<?php
    //Armo la ruta para la imagen del banner dependiendo si tengo el slug, la accion o el controlador.
    switch ($this->request->getParam('controller')) {
        case 'Institucionales':
            $textos_solapa = [
                'berkley-corporation' => 'Berkley Corporation',
                'mision-y-compromiso' => 'Misión y compromiso',
                'carta-del-presidente' => 'Carta del presidente',
                'grupo-berkley' => 'Grupo Berkley',
                'rrhh' => 'RRHH',
            ];
            
            // Obtener el slug de la URL (igual que en el controlador)
            $slug = $this->request->getParam('pass')[0] ?? null;
            if (is_null($slug) || empty($slug)) {
                $path = trim($this->request->getPath(), '/');
                $pathParts = explode('/', $path);
                $slug = end($pathParts);
            }
            
            $texto = $textos_solapa[$slug] ?? 'Institucional';
            $ruta = 'banners'.DS.$slug.'.jpg';            
            break;

        case 'Siniestros':
            $action = $this->request->getParam('action') ?? 'index';
            $ruta = 'banners'.DS.'siniestros'.DS.$action.'.jpg';
            $textos = [
                'seguros' => 'Siniestros',
                'fianzas' => 'Reclamaciones',
            ];
            $texto = $textos[$action] ?? 'Siniestros';
            break;
        
        case 'Seguros':
            $action = $this->request->getParam('action') ?? 'index';
            $ruta = 'banners'.DS.'productos'.DS.'seguros'.DS.$action.'.jpg';
            $textos = [
                'index' => 'Seguros',
                'seguroDeResponsabilidadCivil' => 'Seguros Responsabilidad Civil',
                'seguroMultipleTodoRiesgo' => 'Seguros Múltiple Todo Riesgo', 
                'monolinea' => 'Diversos Técnicos',
                'construccion' => 'Diversos Misceláneos',
                'seguroMaritimoTerrestreAereo' => 'Transporte marítimo, aéreo y terrestre'
            ];
            $texto = $textos[$action] ?? 'Seguros';
            break;

        case 'Fianzas':
            $action = $this->request->getParam('action') ?? 'index';
            $ruta = 'banners'.DS.'productos'.DS.'fianzas'.DS.$action.'.jpg';
            $textos = [
                'index' => 'Fianzas',
                'credito' => 'Crédito',
                'administrativas' => 'Administrativas', 
                'judiciales' => 'Judiciales',
            ];
            $texto = $textos[$action] ?? 'Fianzas';
            break;
        
        case 'Pages':
            $action = $this->request->getParam('action') ?? 'display';
            $ruta = 'banners'.DS.$action.'.jpg';
            $textos = [
                'avisoDePrivacidad' => 'Aviso de Privacidad',
                'informacionFinanciera' => 'Información Financiera',
            ];
            $texto = $textos[$action] ?? 'Página';
            break;


    }

    

?>

<div class="secondaryContent" style="height: 320px; background: url(<?php echo $this->Url->image($ruta) ?>) no-repeat center; background-size:cover;">
    <div class="solapa" style="margin-top: 255px;">
        <div class="solapa-bottom">
            <div class="container">
                <p class="texto-solapa" style="margin-left: 30px;"><b><?= $texto ?></b></p>
            </div>
        </div>
    </div>
</div>

<style>
    .solapa {
        font-size: 23px;
    }
    .solapa-bottom{
        height: 35px;
        width: auto;
        background-color: rgb(24, 86, 62,0.9);
        padding-left: 15px;
    }
</style>
