<?php

namespace app\modules\adminportal\Models\Produtos;

use app\modules\adminportal\Models\BaseModel;

class Produtos extends BaseModel
{
    protected $entity = 'Produto';
    protected $typeDB = 'portalpravaler';
    
    public function getTotalProdutos()
    {
        return number_format($this->count('Produto'), 2, '.', '.');
    }
}
