<?php

namespace app\modules\adminportal\Controller\Login;

use app\modules\adminportal\Controller\BaseController;

class LoginController extends BaseController
{
    public function __construct(\Pimple $container, $request)
    {
        parent::__construct($container, $request);
    }

    public function login()
    {
        return $this->render('login', [], 'forms');
    }
}
