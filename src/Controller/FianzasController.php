<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fianzas Controller
 *
 *
 * @method \App\Model\Entity\Fianza[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FianzasController extends AppController
{
    public function initialize(){
        parent::initialize();
        $this->viewBuilder()->setLayout('interno');
        $secciones_sidebar = [
            'credito' => 'Crédito',
            'administrativas' => 'Administrativas', 
            'judiciales' => 'Judiciales',
        ];
        $titulo_sidebar = 'PRODUCTOS';
        $this->set(compact('secciones_sidebar','titulo_sidebar'));
    }

    public function index(){
        $this->viewBuilder()->setLayout('sin_sidebar');
    }

    public function credito(){}
    public function administrativas(){}
    public function judiciales(){}

   
}
