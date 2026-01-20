<?php
namespace App;

use Cake\Core\Configure;
use Cake\Core\Exception\MissingPluginException;
use Cake\Error\Middleware\ErrorHandlerMiddleware;
use Cake\Http\BaseApplication;
use Cake\Http\Middleware\CspMiddleware;
use Cake\Routing\Middleware\AssetMiddleware;
use Cake\Routing\Middleware\RoutingMiddleware;

class Application extends BaseApplication
{
    public function bootstrap(): void
    {
        parent::bootstrap();

        if (PHP_SAPI === 'cli') {
            try {
                $this->addPlugin('Bake');
            } catch (MissingPluginException $e) {
            }
        }

        if (Configure::read('debug')) {
            try {
                $this->addPlugin('DebugKit');
            } catch (MissingPluginException $e) {
            }
        }
    }

    public function middleware(\Cake\Http\MiddlewareQueue $middlewareQueue): \Cake\Http\MiddlewareQueue
    {
        $cspConfig = [];
        if (file_exists(CONFIG . 'csp.php')) {
            $cspConfig = require CONFIG . 'csp.php';
        }

        $middlewareQueue
            ->add(new ErrorHandlerMiddleware(Configure::read('Error')))
            ->add(new CspMiddleware($cspConfig, [
                'scriptNonce' => false,
                'styleNonce' => false,
            ]))
            ->add(new AssetMiddleware([
                'cacheTime' => Configure::read('Asset.cacheTime')
            ]))
            ->add(new RoutingMiddleware($this, '_cake_routes_'));

        return $middlewareQueue;
    }
}
