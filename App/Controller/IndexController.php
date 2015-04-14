<?php
namespace App\Controller;

use Silex\Application;
use Silex\ControllerProviderInterface;

//return $app["twig"]->render("index/about.twig");

class IndexController implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];

        $controllers->get('/', function (Application $app) {
            return $app->redirect('/eleitoral/web/hello');
        });
        
        $controllers->get('/hello', function (Application $app) {
            return 'oi';
        });

        return $controllers;
    }
}