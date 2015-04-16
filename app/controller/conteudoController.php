<?php

namespace app\Controller;


class conteudoController
{
    private $view;
    
    public function __construct(\Pimple $container)
    {
        $this->view = $container['twig'];
    }
    
    public function index()
    {
        return $this->view->render('conteudo/home.tpl');
    }
    
    public function eleitoral()
    {
        return $this->view->render('conteudo/home.tpl');
    }
    
}
