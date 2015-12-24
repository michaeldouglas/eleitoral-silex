<?php

namespace app\Controller\Conteudo;

use app\Controller\baseController;

class conteudoController extends baseController 
{

    public function index()
    {
       return  $this->app->redirect('/sistema');
    }
    
    public function eleitoral()
    {
        return $this->render('conteudo/home.tpl');
    }
    
}
