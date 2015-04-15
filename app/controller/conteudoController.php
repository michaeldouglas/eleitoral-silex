<?php

namespace app\Controller;

use Silex\Application,
    Silex\ControllerProviderInterface;

class conteudoController implements ControllerProviderInterface
{

    public function connect(Application $app)
    {
        $indexController = $app['controllers_factory'];
        $indexController->get("/", array($this, 'index'))->bind('homepage');
        return $indexController;
    }

    public function index( Application $app )
    {
        return $app['twig']->render('conteudo/home.tpl');
    }

}