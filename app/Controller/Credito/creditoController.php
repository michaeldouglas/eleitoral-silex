<?php

namespace app\Controller\Credito;

use app\Controller\baseController;

class creditoController extends baseController
{

    public function index()
    {
        return $this->render('index');
    }
}
