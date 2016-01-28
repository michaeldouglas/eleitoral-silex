<?php

namespace app\modules\adminportal\Models\Campus;

use app\modules\adminportal\Models\BaseModel;

class Campus extends BaseModel
{
    protected $entity = 'Campus';
    protected $typeDB = 'portalpravaler';
    
    public function getTotalCampus()
    {
        return number_format($this->count('Campus'), 2, '.', '.');
    }
}
