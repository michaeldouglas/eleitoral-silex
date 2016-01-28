<?php

namespace app\modules\adminportal\Models\Instituicoes;

use app\modules\adminportal\Models\BaseModel;

class Instituicoes extends BaseModel
{
    protected $entity = 'Instituicoes';
    protected $typeDB = 'portalpravaler';

    public function getTotalIES()
    {
        return number_format($this->count('Instituicoes'), 2, '.', '.');
    }
}
