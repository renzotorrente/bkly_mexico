<section class="page">

<main>
    <div class="container">
        <div class="row">
            <?= $this->Form->create(null,['id' => 'contact_art'])?>
            <div class="col-sm-6">                	
                    <div class="form-group">
                        <label for="nombre">* Empresa: </label>
                        <?= $this->Form->control('empresa',['class' => 'form-control','type' => 'text','id' => 'empresa','placeholder' => 'Empresa','required' => true,'label' => false])?>
                    </div>
                    <div class="form-group">
                        <label for="cuit">* CUIT: </label>
                        <?= $this->Form->control('cuit',['class' => 'form-control','type' => 'text','id' => 'cuit','placeholder' => 'CUIT','required' => true,'label' => false])?>
                    </div>
                    <div class="form-group">
                        <label for="capitas">* Capitas: </label>
                        <?= $this->Form->control('capitas',['class' => 'form-control','type' => 'text','id' => 'capitas','placeholder' => 'Capitas','required' => true,'label' => false])?>
                    </div>
                    <div class="form-group">
                        <label for="masa_salarial">* Masa salarial: </label>
                        <?= $this->Form->control('masa_salarial',['class' => 'form-control','type' => 'text','id' => 'masa_salarial','placeholder' => 'Masa salarial','required' => true,'label' => false])?>

                    </div>
                    <div class="form-group">
                        <label for="art_actual">ART Actual: </label>
                        <?= $this->Form->control('art_actual',['class' => 'form-control','type' => 'text','id' => 'art_actual','placeholder' => 'ART Actual','required' => false,'label' => false])?>

                    </div>
                    <div class="form-group">
                        <label for="tasa_actual">Tasa Actual: </label>
                        <?= $this->Form->control('tasa_actual',['class' => 'form-control','type' => 'text','id' => 'tasa_actual','placeholder' => 'Tasa Actual','required' => false,'label' => false])?>

                    </div>
                    <small class="contactWarning">Los campos marcados con * son obligatorios</small><br>
            </div><!--/col-8-->
            
            
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="nombre">* Nombre y Apellido: </label>
                    <?= $this->Form->control('nombre',['class' => 'form-control','type' => 'text','id' => 'nombre','placeholder' => 'Escriba su nombre y apellido','required' => true,'label' => false])?>
                </div>
                <div class="form-group">
                    <label for="email">* Email: </label>
                    <?= $this->Form->control('email',['class' => 'form-control','type' => 'email','id' => 'email','placeholder' => 'Dirección de correo electrónico','required' => true,'label' => false])?>
                </div>
                <div class="form-group">
                    <label for="telefonos">* Teléfonos: </label>
                    <?= $this->Form->control('telefonos',['class' => 'form-control','type' => 'text','id' => 'telefonos','placeholder' => 'Escriba su teléfono','required' => true,'label' => false])?>
                </div>
                <div class="form-group">
                    <label for="comentarios">* Comentarios: </label>
                    <?= $this->Form->textarea('comentarios',['class' => 'form-control','type' => 'text','id' => 'comentarios','placeholder' => 'Escriba sus comentarios','required' => true,'label' => false])?>

                </div>
            </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <button class="greenlink btn">Enviar</button>
                    </div>
                </div>
            <?= $this->Form->end()?>
            
        </div>
    </div>
</main>
</section>