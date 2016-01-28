<?php

namespace app\modules\adminportal\Controller\Conteudo;

use app\modules\adminportal\Controller\BaseController;
use app\modules\adminportal\Models\Graficos\Graficos;
use app\modules\adminportal\Models\Instituicoes\Instituicoes;
use app\modules\adminportal\Models\Cursos\Cursos;
use app\modules\adminportal\Models\Campus\Campus;
use app\modules\adminportal\Models\InteresseAlunos\InteresseAlunos;
use app\modules\adminportal\Models\InteresseMobile\InteresseMobile;
use app\modules\adminportal\Models\Produtos\Produtos;

class ConteudoController extends BaseController
{
    protected $grafico;

    public function index()
    {
        return  $this->app->redirect('/sistema');
    }
    
    public function eleitoral()
    {
        return $this->render('home', $this->register);
    }
    
    public function register()
    {
        $this->register = [
                'totalInstituicoesCadastradas' => (new Instituicoes($this->app['entityManagerPortal']))->getTotalIES(),
                'totalCursosCadastradas' => (new Cursos($this->app['entityManagerPortal']))->getTotalCursos(),
                'totalCampusCadastradas' => (new Campus($this->app['entityManagerPortal']))->getTotalCampus(),
                'totalInteresseAlunos' => (new InteresseAlunos($this->app['entityManagerPortal']))
                ->getTotalInteresseAlunos(),
                'totalInteresseAlunosMobile' => (new InteresseMobile($this->app['entityManagerPortal']))
                ->getTotalInteresseMobile(),
                'totalProduto' => (new Produtos($this->app['entityManagerPortal']))->getTotalProdutos(),
            ];
    }
}
