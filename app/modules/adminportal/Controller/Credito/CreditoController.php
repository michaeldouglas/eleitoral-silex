<?php

namespace app\Controller\Credito;

use app\Controller\BaseController;

class CreditoController extends BaseController
{
    public function index()
    {
        return $this->render('index');
    }
}
