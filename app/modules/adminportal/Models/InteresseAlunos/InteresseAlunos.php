<?php

namespace app\modules\adminportal\Models\InteresseAlunos;

use app\modules\adminportal\Models\BaseModel;

class InteresseAlunos extends BaseModel
{
    protected $entity = 'InteresseAlunos';
    protected $typeDB = 'portalpravaler';
    
    public function getTotalInteresseAlunos()
    {
        return number_format($this->count('InteresseAlunos'), 2, '.', '.');
    }
}
