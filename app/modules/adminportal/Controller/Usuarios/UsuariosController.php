<?php

namespace app\modules\adminportal\Controller\Usuarios;

use app\modules\adminportal\Controller\BaseController;

class UsuariosController extends BaseController
{
    public function index()
    {
        return $this->render('index');
    }
    
    public function listar()
    {
        return $this->render('listar');
    }
}
