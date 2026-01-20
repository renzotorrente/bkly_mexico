<?php
    /* Para ahorrar código en esta vista, hago un array con todos los archivos y el título correspondiente
        y genero los items del acordeón con un foreach. Voy a llevar un contador también para generar los ID's. */
    $archivos = [
        '/files/home-art/guias-prevencion/Protocolo_aislamiento_domiciliario.pdf' => 'Protocolo Aislamiento Domiciliario',
        '/files/home-art/guias-prevencion/Recomendaciones_SRT.pdf' => 'SRT - Recomendaciones y Medidas de Prevención en Ámbitos Laborales',
        '/files/home-art/guias-prevencion/Salud_en_teletrabajo.pdf' => 'Home Office - Recomendaciones de Prevención',
        '/files/home-art/guias-prevencion/Anexo_recomendaciones_especiales_trabajos_exceptuados.pdf' => 'SRT - Recomendaciones Especiales para Trabajos Exceptuados del Cumplimiento',
        '/files/home-art/normativa/Afiche_ART_SRT.pdf' => 'Afiche SRT - Recomendaciones de Prevención',
        '/files/home-art/guias-prevencion/SRT_RECOMENDACIONES_DESPLAZAMIENTOS_HACIA_DESDE_TRABAJO.pdf' => 'SRT - Recomendaciones para desplazamientos hacia y desde tu trabajo',
        '/files/home-art/guias-prevencion/SRT_CORRECTA_COLOCACION_RETIRO_PROTECTOR_RESPIRATORIO.pdf' => 'SRT - Correcta colocación y retiro de protector respiratorio',
        '/files/home-art/guias-prevencion/SRT_RECOMENDACIONES_SECTOR_TELECOMUNICACIONES.pdf' => 'Recomendaciones sector telecomunicaciones',
        '/files/home-art/guias-prevencion/SRT_RECOMENDACIONES_SECTOR_ELECTRICO.pdf' => 'SRT - Recomendaciones especiales para trabajos en sector de energía eléctrica',
        '/files/home-art/guias-prevencion/SRT_ELEMENTOS_DE_PROTECCION_PERSONAL.pdf' => 'SRT - Elementos de protección personal',
        '/files/home-art/guias-prevencion/Prevencion_COVID19_Agropecuarias.pdf' => 'Afiche Prevención Agropecuarias',
        '/files/home-art/guias-prevencion/Prevencion_COVID19_Bancos_financieras.pdf' => 'Afiche Prevención Bancos y Financieras',
        '/files/home-art/guias-prevencion/Prevencion_COVID19_Clinicas_salud.pdf' => 'Afiche Prevención Clínicas y Salud',
        '/files/home-art/guias-prevencion/Prevencion_COVID19_Comercios.pdf' => 'Afiche Prevención Comercios',
        '/files/home-art/guias-prevencion/Prevencion_COVID19_Consorcios.pdf' => 'Afiche Prevención Consorcios',
        '/files/home-art/guias-prevencion/Prevencion_COVID19_Corralones.pdf' => 'Afiche Prevención Corralones',
        '/files/home-art/guias-prevencion/Prevencion_COVID19_Empresas_de_construccion.pdf' => 'Afiche Prevención Empresas de Construcción',
        '/files/home-art/guias-prevencion/Prevencion_COVID19_Estaciones_de_servicio.pdf' => 'Afiche Prevención Estaciones de Servicio',
        '/files/home-art/guias-prevencion/Prevencion_COVID19_Farmacias.pdf' => 'Afiche Prevención Farmacias',
        '/files/home-art/guias-prevencion/Prevencion_COVID19_Ferreteria.pdf' => 'Afiche Prevención Ferreterías',
        '/files/home-art/guias-prevencion/Prevencion_COVID19_Fumigaciones.pdf' => 'Afiche Prevención Fumigaciones',
        '/files/home-art/guias-prevencion/Prevencion_COVID19_Garages_estacionamientos.pdf' => 'Afiche Prevención Garages y Estacionamientos',
        '/files/home-art/guias-prevencion/Prevencion_COVID19_Hoteles.pdf' => 'Afiche Prevención Hoteles',
        '/files/home-art/guias-prevencion/Prevencion_COVID19_Industria_alimentaria.pdf' => 'Afiche Prevención Industria Alimentaria',
        '/files/home-art/guias-prevencion/Prevencion_COVID19_Laboratorios.pdf' => 'Afiche Prevención Laboratorios',
        '/files/home-art/guias-prevencion/Prevencion_COVID19_Lavanderias_tintoreria.pdf' => 'Afiche Prevención Lavanderías y Tintorerías',
        '/files/home-art/guias-prevencion/Prevencion_COVID19_Mantenimiento.pdf' => 'Afiche Prevención Mantenimiento',
        '/files/home-art/guias-prevencion/Prevencion_COVID19_Residencia_mayores.pdf' => 'Afiche Prevención Residencias para mayores',
        '/files/home-art/guias-prevencion/Prevencion_COVID19_Servicios_de_agua_luz_gas.pdf' => 'Afiche Prevención Servicios de agua, luz y gas',
        '/files/home-art/guias-prevencion/Prevencion_COVID19_Servicios_Funerarios.pdf' => 'Afiche Prevención Servicios funerarios',
        '/files/home-art/guias-prevencion/Prevencion_COVID19_Supermercados.pdf' => 'Afiche Prevención Supermercados',
        '/files/home-art/guias-prevencion/Prevencion_COVID19_Talleres_mecanicos.pdf' => 'Afiche Prevención Talleres mecánicos',
        '/files/home-art/guias-prevencion/Prevencion_COVID19_Transporte_logistica.pdf' => 'Afiche Prevención Transporte y logística',
        '/files/home-art/guias-prevencion/Prevencion_COVID19_Transporte_publico.pdf' => 'Afiche Prevención Transporte público',
        '/files/home-art/guias-prevencion/Prevencion_COVID19_Veterinaria.pdf' => 'Afiche Prevención Veterinaria',
        '/files/home-art/guias-prevencion/Prevencion_COVID19_Vigilancia_guardias_limpieza.pdf' => 'Afiche Prevención Vigilancia, guardias y limpieza',
    ];
    $contador = 1;
?>
<div id="modal_guias_prevencion" aria-hidden="true" aria-labelledby="bismart-modal" role="dialog" class="iziModal isAttached"
	style="border-radius: 3px; max-width: 900px; display: none;">
	
	<div class="iziModal-content" style="padding: 0px;">
		<div class="iziModal-header-buttons" style="padding: 10px;">
			<a href="javascript:void(0)" class="iziModal-button iziModal-button-close"
				data-izimodal-close=""> X </a>
		</div>
		<div class="row">
			<div class="col-md-12">
                <article>
                    <div class="panel-group" id="accordionGuiasPrevencion" role="tablist" aria-multiselectable="true">
                        <?php foreach($archivos as $filename => $titulo): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingPrevencion<?= $contador ?>">
                                    <h5 class="panel-title panel-title-color">
                                        <a role="button" data-toggle="collapse" data-parent="#accordionGuiasPrevencion" href="#collapsePrevencion<?= $contador ?>"
                                            aria-expanded="true" aria-controls="collapsePrevencion<?= $contador ?>" class="colorear">
                                            <i class="more-less glyphicon glyphicon-plus"></i>
                                            <?= trim($titulo) ?>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapsePrevencion<?= $contador ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingPrevencion<?= $contador ?>">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="seccion-acordeon">
                                                    <div id="acordeon-30" class="contenido-seccion-acordeon">
                                                        <?php echo $this->Html->link(
                                                            'Descargar PDF',
                                                            trim($filename),
                                                            ['class' => 'btn greenlink', 'aria-label' => 'Descargar '.$titulo, 'target' => '_blank']
                                                        ); ?> <br> <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php $contador++; endforeach; ?>

                    </div>
                </article>
            </div>
		</div>
	</div>



</div>