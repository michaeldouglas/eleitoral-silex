<?php

namespace app\modules\adminportal\Models\InteresseMobile;

use app\modules\adminportal\Models\BaseModel;

class InteresseMobile extends BaseModel
{
    protected $entity = 'InteresseAlunosMobile';
    protected $typeDB = 'portalpravaler';
    
    public function getTotalInteresseMobile()
    {
        return number_format($this->count('InteresseAlunosMobile'), 2, '.', '.');
    }
}
