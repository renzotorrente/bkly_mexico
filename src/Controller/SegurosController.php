<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Seguros Controller
 *
 *
 * @method \App\Model\Entity\Seguro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SegurosController extends AppController
{

    public function initialize(){
        parent::initialize();
        $this->viewBuilder()->setLayout('interno');
        $secciones_sidebar = [
            'seguroDeResponsabilidadCivil' => 'Seguros Responsabilidad Civil',
            'seguroMultipleTodoRiesgo' => 'Seguros Múltiple Todo Riesgo', 
            'monolinea' => 'Diversos Técnicos',
            'construccion' => 'Diversos Misceláneos',
            'seguroMaritimoTerrestreAereo' => 'Transporte marítimo, aéreo y terrestre'
        ];
        $titulo_sidebar = 'PRODUCTOS';
        $this->set(compact('secciones_sidebar','titulo_sidebar'));
    }

    public function index(){
        $this->viewBuilder()->setLayout('sin_sidebar');
    }
    public function seguroDeResponsabilidadCivil(){}
    public function seguroMultipleTodoRiesgo(){}
    public function monolinea(){}
    public function construccion(){}
    public function seguroMaritimoTerrestreAereo(){}

}
