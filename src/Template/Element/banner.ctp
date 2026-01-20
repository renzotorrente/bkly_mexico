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
            $texto = $textos_solapa[$this->request->getParam('pass')[0]];

            $ruta = 'banners'.DS.$this->request->getParam('pass')[0].'.jpg';            
            break;

        case 'Siniestros':
            $ruta = 'banners'.DS.'siniestros'.DS.$this->request->getParam('action').'.jpg';
            $textos = [
                'seguros' => 'Siniestros',
                'fianzas' => 'Reclamaciones',
            ];
            $texto = $textos[$this->request->getParam('action')];
            break;
        
        case 'Seguros':
            $ruta = 'banners'.DS.'productos'.DS.'seguros'.DS.$this->request->getParam('action').'.jpg';
            $textos = [
                'index' => 'Seguros',
                'seguroDeResponsabilidadCivil' => 'Seguros Responsabilidad Civil',
                'seguroMultipleTodoRiesgo' => 'Seguros Múltiple Todo Riesgo', 
                'monolinea' => 'Diversos Técnicos',
                'construccion' => 'Diversos Misceláneos',
                'seguroMaritimoTerrestreAereo' => 'Transporte marítimo, aéreo y terrestre'
            ];
            $texto = $textos[$this->request->getParam('action')];
            break;

        case 'Fianzas':
            $ruta = 'banners'.DS.'productos'.DS.'fianzas'.DS.$this->request->getParam('action').'.jpg';
            $textos = [
                'index' => 'Fianzas',
                'credito' => 'Crédito',
                'administrativas' => 'Administrativas', 
                'judiciales' => 'Judiciales',
            ];
            $texto = $textos[$this->request->getParam('action')];
            break;
        
        case 'Pages':
            $ruta = 'banners'.DS.$this->request->getParam('action').'.jpg';
            $textos = [
                'avisoDePrivacidad' => 'Aviso de Privacidad',
                'informacionFinanciera' => 'Información Financiera',
            ];
            $texto = $textos[$this->request->getParam('action')];
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
