<?php

namespace app\modules\adminportal\Controller\Aprovar;

use app\modules\adminportal\Controller\BaseController;

class AprovarController extends BaseController
{

    public function index()
    {
        print_r($_POST);

        return $this->render('index');
    }

    public function pesquisar()
    {
        $listaBranchs = [
            0 => 'master',
            1 => 'develop',
        ];
    }
}
