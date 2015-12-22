<?php

namespace app\Controller\Login;

use app\Controller\baseController;

class loginController extends baseController 
{
    public function __construct(\Pimple $container, $request) {
        parent::__construct($container, $request);
    }

    public function login() 
    {
        return $this->render('forms/login/login.tpl');
    }
    
}
