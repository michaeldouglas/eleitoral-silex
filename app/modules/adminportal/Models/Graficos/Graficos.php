<?php

namespace app\modules\adminportal\Models\Graficos;

use app\modules\adminportal\Models\BaseModel;

class Graficos extends BaseModel
{
    public function getTotalInstituicoes()
    {
        die('teste');
        return (new Instituicoes)->getTotalCursos();
    }
    
    public function getTotalCursos()
    {
        return number_format($this->count('Cursos'), 2, '.', '.');
    }
    
    public function getTotalCampus()
    {
        return number_format($this->count('Campus'), 2, '.', '.');
    }
    
    public function getTotalInteresseAlunos()
    {
        return number_format($this->count('InteresseAlunos'), 2, '.', '.');
    }
    
    public function getTotalInteresseAlunosMobile()
    {
        return number_format($this->count('InteresseAlunosMobile'), 2, '.', '.');
    }
    
    public function getTotalProduto()
    {
        return number_format($this->count('Produto'), 2, '.', '.');
    }
}
