<?php

namespace app\Controller;

use Silex\Application,
    Silex\ControllerProviderInterface;

class LoginController implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $LoginController = $app['controllers_factory'];
	$LoginController->get("/login", array( $this, 'login' ) )->bind( 'login' );
        return $LoginController;
    }
    
    public function login(Application $app){
        return $app['twig']->render('forms/login/login.tpl');
    }
    
}