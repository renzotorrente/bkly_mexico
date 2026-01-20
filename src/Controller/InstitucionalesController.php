<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class InstitucionalesController extends AppController
{

    /**
     * Renderiza las vistas de la sección Institucional
     *
     * @param array ...$seccion Sección que se va a renderizar.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function index(...$args)
    {
        $this->viewBuilder()->setLayout('interno');
        
        // Obtener la sección de los argumentos pasados o de la URL
        $seccion = $args[0] ?? $this->request->getParam('pass')[0] ?? null;
        
        // Si aún no hay sección, obtenerla de la ruta actual
        if(is_null($seccion) || empty($seccion)){
            $path = trim($this->request->getPath(), '/');
            // Extraer el slug de la ruta (última parte después de /)
            $pathParts = explode('/', $path);
            $seccion = end($pathParts);
        }
        
        if(is_null($seccion) || empty($seccion)){
            $this->redirect('/');
        } else{
            // Convertir guiones a guiones bajos si es necesario
            $seccion = str_replace('-', '_', $seccion);
            
            $titulo_seccion = '';
            $slug_separado = explode('_',$seccion);
            foreach ($slug_separado as $key => $slug) {
                $titulo_seccion .= ucfirst($slug).' ';
            }
            $titulo_sidebar = 'Institucional';
            $secciones_sidebar = [
                'berkley-corporation' => 'Berkley Corporation',
                'mision-y-compromiso' => 'Misión y compromiso',
                'carta-del-presidente' => 'Carta del presidente',
                'grupo-berkley' => 'Grupo Berkley',
                'rrhh' => 'RRHH',
            ];

            $textos_solapa = [
                'berkley_corporation' => 'Berkley <b>Corporation</b>',
                'mision_y_compromiso' => 'Misión y <b>compromiso</b>',
                'carta_del_presidente' => 'Carta del <b>presidente</b>',
                'grupo_berkley' => 'Grupo <b>Berkley</b>',
                'rrhh' => '<b>RRHH</b>',
            ];

            $solapa_titulo = $textos_solapa[$seccion] ?? $seccion;

            $this->set(compact('titulo_seccion','titulo_sidebar','secciones_sidebar','solapa_titulo'));
            $this->render($seccion);
        }
    }
}
