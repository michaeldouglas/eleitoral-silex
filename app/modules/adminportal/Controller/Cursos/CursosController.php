<?php

namespace app\modules\adminportal\Controller\Cursos;

use app\modules\adminportal\Controller\BaseController;
use app\modules\adminportal\Models\Cursos\Cursos;

class CursosController extends BaseController
{
    public function cursos()
    {
        $dataCursos = (new Cursos($this->app['entityManagerPortal']))->getCursos();
        return $this->render('cursos', ["data" => $dataCursos['data']]);
    }
}
