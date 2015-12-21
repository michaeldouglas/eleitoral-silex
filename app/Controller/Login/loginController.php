<?php

namespace app\Controller\Login;

use app\Controller\baseController;

class loginController extends baseController 
{
    public function login() 
    {
        return $this->render('forms/login/login.tpl');
    }

}
