<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class AseguradosController extends AppController
{

    /**
     * Renderiza las vistas de la sección Institucional
     *
     * @param array ...$seccion Sección que se va a renderizar.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('sin_sidebar');
    }
    
    public function formulariosUtiles()
    {
        $this->viewBuilder()->setLayout('sin_sidebar');
    }
}
