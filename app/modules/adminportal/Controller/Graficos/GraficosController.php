<?php

namespace app\modules\adminportal\Controller\Graficos;

use app\modules\adminportal\Controller\BaseController;
use app\modules\adminportal\Models\Cursos\Cursos;

class GraficosController extends BaseController
{
    public function cursos()
    {
        $dataCursos = (new Cursos($this->app['entityManagerPortal']))->getCursos();
        return $this->render('totalcursos', ["data" => $dataCursos['data']]);
    }
}
