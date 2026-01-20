<?php

namespace App\Controller;

use App\Controller\AppController;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class SiniestrosController extends AppController
{
    public function initialize(){
        parent::initialize();
        $this->viewBuilder()->setLayout('sin_sidebar');

    }
    public function seguros(){}
    public function fianzas(){}
    
}
