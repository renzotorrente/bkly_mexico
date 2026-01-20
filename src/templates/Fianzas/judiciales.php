<style>
	.table-bordered th,
	.table-bordered td {

		height: 40px;
		text-align: center;
		vertical-align: middle !important;
	}



	.table-bordered>thead>tr>th,
	.table-bordered>tbody>tr>th,
	.table-bordered>tfoot>tr>th,
	.table-bordered>thead>tr>td,
	.table-bordered>tbody>tr>td,
	.table-bordered>tfoot>tr>td {
		border-color: #16533B !important;
	}

	thead {
		border-top: 1px solid #16533B;
	}

	.spanblack {
		color: black;
	}

	.underline-text {
		border-bottom: 1px solid #16533B;
		display: inline;
	}

	.colth {
		height: 50px !important;
		background: #16533B !important;
		text-align: center !important;
		color: white !important;
		font-weight: 500;


	}

	.subtitle {
		color: #16533B;
	}
</style>


<main>
	<div class="separateContent">
		<article>
			<div class="row">
				<div class="col-lg-12">
					<h2 class="h3">Judiciales</h2>
					<p>Son aquellas fianzas que exige un juez, autoridad judicial o la ley en un proceso judicial y
						garantiza el cumplimiento de una obligación de un acto procesal y que en su mayoría son para el pago
						de daños y perjuicios</p>
					<p><b>NO PENALES</b></p>
					<p>Derivadas de procesos judiciales no penales en materia:</p>
					<ul>
						<li>Civil</li>
						<li>Laboral</li>
						<li>Mercantil</li>
						<li>Amparo</li>
					</ul>

					<p><b>PENALES</b></p>
					<p>Garantizan la no sustracción del responsable de la comisión de un delito de la acción de la justicia
						ya sea que esté sujeto a un proceso penal o ya se encuentre sentenciado:</p>
					<ul>
						<li>LIBERTAD PROVISIONAL</li>
						<li>CONDENA CONDICIONAL</li>
						<li>LIBERTAD PREPARATORIA</li>
						<li>SANCIONES PECUNIARIAS</li>
					</ul>
				</div>
			</div>
		</article>
		<article>
			<div class="row" style="margin-top: 20px;">
				<div class="col-lg-12">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th class="colth" scope="col" style="width: 25%;">Subramo</th>
								<th class="colth" scope="col" style="width: 25%;">Obligación</th>
								<th class="colth" scope="col" style="width: 25%;">Número de registro</th>
								<th class="colth" scope="col" style="width: 25%;">Fecha de registro</th>
							</tr>
						</thead>
						<tbody>
							<tr class="table-active">
								<td>Penales</td>
								<td>Libertad provisional</td>
								<td>CNSF-F0025-0015-2023</td>
								<td>06/01/2023</td>
							</tr>
							<tr class="table-active">
								<td>Penales</td>
								<td>Condena condicional</td>
								<td>CNSF-F0025-0079-2017</td>
								<td>17/01/2019</td>
							</tr>
							<tr class="table-active">
								<td>Penales</td>
								<td>Reparacion del daño</td>
								<td>CNSF-F0025-0017-2023</td>
								<td>06/01/2023</td>
							</tr>
							<tr class="table-active">
								<td>Penales</td>
								<td>Libertad provisional ante Ministerio Publico</td>
								<td>CNSF-F0025-0016-2023</td>
								<td>06/01/2023</td>
							</tr>
							<tr class="table-active">
								<td>No penales</td>
								<td>Daños y perjuicios por embargo precautorio</td>
								<td>CNSF-F0025-0002-2023</td>
								<td>06/01/2023</td>
							</tr>
							<tr class="table-active">
								<td>No penales</td>
								<td>Daños y perjuicios por ejecucion de sentencia</td>
								<td>CNSF-F0025-0008-2018</td>
								<td>17/01/2019</td>
							</tr>
							<tr class="table-active">
								<td>No penales</td>
								<td>Daños y perjuicios por susp. provisional o definitiva</td>
								<td>CNSF-F0025-0207-2017</td>
								<td>17/01/2019</td>
							</tr>
							<tr class="table-active">
								<td>No penales</td>
								<td>Pension alimenticia</td>
								<td>CNSF-F0025-0137-2018</td>
								<td>12/03/2019</td>
							</tr>
						</tbody>
					</table>

				</div>
				<div class="row">
					<div class="col-lg-12 d-flex">
						<div class="col-md-4"></div>
						<div class="col-md-4" style="padding-left: 20px; ">
							<p><b>Berkley - Judiciales</b></p>
							<?php echo $this->Html->link(
								'Descargar PDF',
								'/files/productos/seguros/monolinea/berkley_ramo_judicial.pdf',
								['class' => 'btn greenlink', 'target' => "_blank"]
							); ?>
						</div>
						<div class="col-md-4"></div>

					</div>
				</div>



			</div>
		</article>
	</div>
</main>