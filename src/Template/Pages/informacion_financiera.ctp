<main>
	<div class="separateContent">
		<article>
			<div class="row">
				<div class="col-md-6 text-center">
					<?= $this->Html->image('BerkleyMexico-Seguros.png', ['class' => 'img-responsive']) ?>
				</div>
				<div class="col-md-6 text-center">
					<?= $this->Html->image('BerkleyMexico-Fianzas.png', ['class' => 'img-responsive']) ?>
				</div>
			</div>

			<div class="row">
				<h2 class="h3">Reporte Sobre Solvencia y Condición Financiera</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th> </th>
								<th class="text-center">2024</th>
								<th class="text-center">2023</th>
								<th class="text-center">2022</th>
								<th class="text-center">2021</th>
								<th class="text-center">2020</th>
								<th class="text-center">2019</th>
								
							</tr>
						</thead>
						<tbody>
							<tr>
								
								<th>Seguros</th>
								<!-- Seguros 2024 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2024/2024 BIS_Reporte de Solvencia y Condición Financiera.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- Seguros 2023 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2023/2023ReporteSolvenciayCondiciónFinancieraSeguros.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- Seguros 2022 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2022/2022ReporteSolvenciayCondiciónFinancieraSeguros.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- Seguros 2021 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2021/BIS_REPORTE_SOBRE_SOLVENCIA_Y_CONDICION_FINANCIERA.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- Seguros 2020 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2020/SEGUROS-2020-REPORTE-SOLVENCIA-Y-CONSICION-FINANCIERA.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- Seguros 2019 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2019/BIS-Reporte_solvencia_condicion_financiera-2019.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
									<!-- Seguros 2018 -->
								<!-- <td class="text-center"> -->
									<?php
									//  echo $this->Html->link(
									// 	'Descargar PDF',
									// 	'/files/informacion-financiera/2018/BIS-Reporte_Sobre_Solvencia_y_Condicion_Financiera_2018.pdf',
									// 	['class' => 'btn greenlink', 'target' => "_blank"]
									// ); 
									?>
								<!-- </td> -->
									<!-- Seguros 2017 -->
								<!-- <td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2017/BIS-Reporte_Sobre_Solvencia_y_Condicion_Financiera_2017.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td> -->
							</tr>
							<tr>
								<th>Garantías</th>
								<!-- Fianzas 2024 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2024/2024 BIF_Reporte de Solvencia y Condición Financiera.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- Fianzas 2023 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2023/FIANZASREPORTE_SOLVENCIAYCONDICION_FINANCERA2023.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>

								<!-- Fianzas 2022 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2022/FIANZASREPORTE_SOLVENCIAYCONDICION_FINANCERA2022.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- Fianzas 2021 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2021/BFIANZASREPORTE_SOLVENCIAYCONDICION_FINANCERA2021.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- Fianzas 2020 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2020/FIANZAS-2020-REPORTE-SOLVENCIA-Y-CONSICION-FINANCIERA.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- Fianzas 2019 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2019/BIF-Reporte_solvencia_condicion_financiera_2019.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- Fianzas 2018 -->
								<!-- <td class="text-center"> -->
									<?php 
									// echo $this->Html->link(
									// 	'Descargar PDF',
									// 	'/files/informacion-financiera/2018/BIF-Reporte_Sobre_Solvencia_y_Condicion_Financiera_2018.pdf',
									// 	['class' => 'btn greenlink', 'target' => "_blank"]
									// ); 
									?>
								<!-- </td> -->

							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<div class="row">
				<h2 class="h3">Calificación Crediticia</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th> </th>
								<th class="text-center">2024</th>
                                <th class="text-center">2023</th>
								<th class="text-center">2022</th>
								<th class="text-center">2021</th>
								<th class="text-center">2020</th>
								<!-- <th class="text-center">2019</th> -->
							
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>Seguros</th>
								<!-- Seguros 2024 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2024/2024 BIS Calificación Crediticia.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
                                <td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2023/2023_bis_calificacion_crediticia.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>

								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2022/2022_BIS_CALIFICACION_CREDITICIA.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2021/BIS_CALIFICACION_CREDITICIA.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2020/BIS-CALIFICACION-CREDITICIA-2020.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- <td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2019/BIS_Calificacion_Crediticia__2019.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td> -->
								
							</tr>
							<tr>
								<th>Garantías</th>
								
								<!-- Fianzas 2024 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2024/2024 BIG Calificacion Crediticia.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>

                                <td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2023/califacioncredeticia_2023.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>

								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2022/2022_BIF_CALIFICACION_CREDITICIA.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2021/BFIANZAS_CALIFICACION_CREDITICIA2021.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2020/BIF-CALIFICACION-CREDITICIA-2020.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- <td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2019/BIF-Calificacion_Crediticia_2019.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td> -->
								
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<div class="row">
				<h2 class="h3">Estados Financieros y Notas de Revelación</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th> </th>
                                <th class="text-center">2024</th>
                                <th class="text-center">2023</th>
								<th class="text-center">2022</th>
								<th class="text-center">2021</th>
								<th class="text-center">2020</th>
								<!-- <th class="text-center">2019</th> -->
								
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>BIS - Dictámen y notas de revelación</th>
									<!-- 2024 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2024/2024 BIS Dictamen y Notas de revelación.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- 2023 -->
                                <td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2023/2023_bis_dictamen_notas_de_revelacion.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- 2022 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2022/2022_BIS_DICTAMEN_Y_NOTAS_DE_REVELACION.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- 2021 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2021/BIS_Dictamen_y_Notas_de_Revelación.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- 2020 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2020/BIS_DICTAMEN_Y_NOTAS DE REVELACION.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- 2019 -->
								<!-- <td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2019/BS_Dictamen_Notas_Revelacion_2019-1.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td> -->
				
							</tr>
							<tr>
								<th>BIS - Estados financieros</th>
								<!-- 2024 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2024/2024 BIS Estados Financieros.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- 2023 -->
                                <td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2023/2023_bis_estados_financieros.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
									<!-- 2022 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2022/2022_BIS_ESTADOS_FINANCIEROS.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- 2021 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2021/BIS_Estados_Financieros.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- 2020 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2020/BIS_ESTADOS_FINANCIEROS.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- 2019 -->
								<!-- <td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2019/BS_Estados_Financieros_2019.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td> -->
							
							</tr>
							<tr>
								<th>BIS - Indicadores regulatorios</th>
								<!-- 2024 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2024/2024 BIS Indicadores Regulatorios.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								<!-- 2023 -->
                                <td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2023/2023_bis_indicadores_regulatorios.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- 2022 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2022/2022_BIS_INDICADORES_REGULATORIOS-2.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- 2021 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2021/BIS_Indicadores_Regulatorios.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- 2020 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2020/BIS_INDICADORESREGULATORIOS.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- 2019 -->
								<!-- <td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2019/BS_Indicadores_Regulatorios_2019.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td> -->
							

							</tr>
							<tr>
								<th>BIG - Dictámen y notas de revelación</th>
								<!-- 2024 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2024/2024 BIG Dictamen y Notas de revelacion.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								<!-- 2023 -->
                                <td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2023/2023_bif_dictamen_notas_de_revelacion.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
									<!-- 2022 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2022/2022_BIF_DICTAMEN_Y NOTAS_DE_REVELACION.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- 2021 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2021/BIF_Dictamen_y_Notas_de_Revelación.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- 2020 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2020/BIF_DICTAMEN_Y_NOTAS DE REVELACION.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- 2019
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2019/BF_Dictamen_Notas_Revelacion_2019.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td> -->
							
							</tr>
							<tr>
								<th>BIG - Estados Financieros</th>
								<!-- 2024 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2024/2024 BIG Estados Financieros.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								<!-- 2023 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2023/2023bif_estados_financierios.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- 2022 -->
                                <td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2022/2022_NEW_BIF_ESTADOS_FINANCIEROS.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- 2021 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2021/BIF_Estados_Financieros.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- 2020 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2020/BIF_ESTADOS_FINANCIEROS.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- 2019 -->
								<!-- <td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2019/BF_Estados_Financieros_2019.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td> -->
								
							</tr>
							<tr>
								<th>BIG - Indicadores regulatorios</th>
								<!-- 2024 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2024/2024 BIG Indicadores Regulatorios.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								<!-- 2023 -->
                                <td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2023/2023bif_indicadores_regulatorios.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- 2022 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2022/INDICADORESREGULATORIOS2022_FIANZAS_Repro_02052023.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- 2021 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2021/BIF_Indicadores_Regulatorios.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- 2020 -->
								<td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2020/BIF_INDICADORESREGULATORIOS.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td>
								<!-- 2019 -->
								<!-- <td class="text-center">
									<?php echo $this->Html->link(
										'Descargar PDF',
										'/files/informacion-financiera/2019/BF_Indicadores_Regulatorios_2019.pdf',
										['class' => 'btn greenlink', 'target' => "_blank"]
									); ?>
								</td> -->
							
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</article>
	</div>
</main>