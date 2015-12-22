<?php

namespace app\Controller\Conteudo;

use app\Controller\baseController;

class conteudoController extends baseController 
{

    public function index()
    {
        if ($this->app['security.authorization_checker']->isGranted('ROLE_ADMIN')) {
            echo 'ADMIN BOLADÃO';
        }
        return $this->render('conteudo/home.tpl');
    }
    
    public function eleitoral()
    {
        return $this->render('conteudo/home.tpl');
    }
    
}
