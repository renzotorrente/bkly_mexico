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
				<h2 class="h3">Crédito</h2>
				<ul>
					<li><b>Suministro</b>: Garantiza el pago de los productos suministrados en los plazos determinados
						en el contrato (GAS, GASOLINA, PETROQUIMICA)</li>
					<li><b>De compraventa</b>: Garantiza el pago del crédito otorgado en operaciones para la adquisición
						de bienes o servicios.</li>
					<li><b>Otras fianzas de crédito</b>: Suministro de energía eléctrica, gas natural, etc.</li>
				</ul>
				</div>
			</div>
		</article>
		<article>
			<div class="row" style="margin-top: 70px;">
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
                            <td >Suministro</td>
                            <td>Gas</td>
                            <td>CNSF-F0025-0015-2019</td>
							<td>15/05/2019</td>
                        </tr>
                        <tr class="table-active">
                            <td >Suministro</td>
                            <td>Refinación</td>
                            <td>CNSF-F0025-0016-2019</td>
							<td>15/05/2019</td>
                        </tr>
						<tr class="table-active">
                            <td >Suministro</td>
                            <td>Estaciones de servicio</td>
                            <td>CNSF-F0025-0014-2019</td>
							<td>15/05/2019</td>
                        </tr>
						<tr class="table-active">
                            <td >Suministro</td>
                            <td>Petroquimica</td>
                            <td>CNSF-F0025-0018-2019</td>
							<td>15/05/2019</td>
                        </tr>
						<tr class="table-active">
                            <td >Suministro</td>
                            <td>Otros Suministros</td>
                            <td>CNSF-F0025-0268-2019</td>
							<td>16/10/2019</td>
                        </tr>
						<tr class="table-active">
                            <td >Otras de crédito</td>
                            <td>Otras de crédito</td>
                            <td>CNSF-F0025-0138-2018</td>
							<td>12/03/2019</td>
                        </tr>
                    </tbody>
                </table>
			</div>
			<div class="row">
				<div class="col-lg-12 d-flex" >
				<div class="col-md-4"></div>
				<div class="col-md-4"  style="padding-left: 20px; ">
                            <p><b>Berkley - Crédito</b></p>
                            <?php echo $this->Html->link(
                                'Descargar PDF',
                                '/files/productos/seguros/monolinea/berkley_ramo_credito.pdf',
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