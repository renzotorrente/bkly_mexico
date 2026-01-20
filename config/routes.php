<?php
use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Route\DashedRoute;

return function (RouteBuilder $routes): void {
    $routes->setRouteClass(DashedRoute::class);
    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httpOnly' => true
    ]));

    $routes->applyMiddleware('csrf');

    $routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);
    $routes->connect('/aviso-de-privacidad', ['controller' => 'Pages', 'action' => 'avisoDePrivacidad']);
    $routes->connect('/informacion-financiera', ['controller' => 'Pages', 'action' => 'informacionFinanciera']);
    
    // Rutas para páginas institucionales - el controlador obtendrá el slug de la URL
    $routes->connect('/berkley-corporation', ['controller' => 'Institucionales', 'action' => 'index']);
    $routes->connect('/mision-y-compromiso', ['controller' => 'Institucionales', 'action' => 'index']);
    $routes->connect('/carta-del-presidente', ['controller' => 'Institucionales', 'action' => 'index']);
    $routes->connect('/grupo-berkley', ['controller' => 'Institucionales', 'action' => 'index']);
    $routes->connect('/rrhh', ['controller' => 'Institucionales', 'action' => 'index']);
    
    // Ruta genérica para otras páginas institucionales
    $routes->connect('/institucional/:slug', ['controller' => 'Institucionales', 'action' => 'index'])->setPass(['slug']);
    $routes->connect('/contacto', ['controller' => 'Contactos', 'action' => 'index']);
    $routes->connect('/contactos', ['controller' => 'Contactos', 'action' => 'index']);

    $routes->fallbacks(DashedRoute::class);
};
