<?php

namespace app\modules\adminportal\Models\Cursos;

use app\modules\adminportal\Models\BaseModel;

class Cursos extends BaseModel
{
    protected $entity = 'Cursos';
    protected $typeDB = 'portalpravaler';

    public function getCursos($page = 1)
    {
        $dql = "JOIN Cursos.campus Campus where Cursos.deleted_at is null";
        $this->setDQL($dql, "Cursos.id_curso, Cursos.vl_mensalidade, Cursos.cd_nota_enade, "
                . "Cursos.qt_meses, Cursos.nm_curso, Campus.id_campus, Campus.nm_campus");
        return $this->paginator($page);
    }
    
    public function getTotalCursos()
    {
        return number_format($this->count('Cursos'), 2, '.', '.');
    }
}
