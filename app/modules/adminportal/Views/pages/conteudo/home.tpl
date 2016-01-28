{% extends 'layouts/layout.tpl' %}

{% block content %}
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>
                Relatórios <small> Portal Pravaler </small>
            </h3>
        </div>    
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="row tile_count">
            <div class="animated flipInY col-md-4 col-sm-8 col-xs-8 tile_stats_count">
                <div class="left"></div>
                <div class="right">
                    <span class="count_top"><i class="fa fa-graduation-cap"></i> Cursos cadastrados!</span>
                    <div class="count green">{{ totalCursosCadastradas }}</div>
                    <span class="count_bottom"><i class="fa fa-arrow-circle-right"></i> <a href="{{ path('total-cursos') }}"> Visualizar lista de cursos </a></span>
                </div>
            </div>
            <div class="animated flipInY col-md-4 col-sm-8 col-xs-8 tile_stats_count">
                <div class="left"></div>
                <div class="right">
                    <span class="count_top"><i class="fa fa-graduation-cap"></i> Instituições cadastradas</span>
                    <div class="count green">{{ totalInstituicoesCadastradas }}</div>
                    <span class="count_bottom"><i class="fa fa-arrow-circle-right"></i> <a href=""> Visualizar lista de instituições </a></span>
                </div>
            </div>
            <div class="animated flipInY col-md-4 col-sm-8 col-xs-8 tile_stats_count">
                <div class="left"></div>
                <div class="right">
                    <span class="count_top"><i class="fa fa-graduation-cap"></i> Campus cadastrados</span>
                    <div class="count green">{{ totalCampusCadastradas }}</div>  
                    <span class="count_bottom"><i class="fa fa-arrow-circle-right"></i> <a href=""> Visualizar lista de campus </a></span>
                </div>
            </div>
        </div>
    </div>    

    <div class="row">
        <div class="row tile_count">
            <div class="animated flipInY col-md-4 col-sm-8 col-xs-8 tile_stats_count">
                <div class="left"></div>
                <div class="right">
                    <span class="count_top"><i class="fa fa-comments"></i> Alunos interessados portal</span>
                    <div class="count green">{{ totalInteresseAlunos }}</div>
                    <span class="count_bottom"><i class="fa fa-arrow-circle-right"></i> <a href=""> Visualizar lista de interessados </a></span>
                </div>
            </div>
            <div class="animated flipInY col-md-4 col-sm-8 col-xs-8 tile_stats_count">
                <div class="left"></div>
                <div class="right">
                    <span class="count_top"><i class="fa fa-user"></i> Alunos interessados celular</span>
                    <div class="count green">{{ totalInteresseAlunosMobile }}</div>
                    <span class="count_bottom"><i class="fa fa-arrow-circle-right"></i> <a href=""> Visualizar lista de interessados </a></span>
                </div>
            </div>
            <div class="animated flipInY col-md-4 col-sm-8 col-xs-8 tile_stats_count">
                <div class="left"></div>
                <div class="right">
                    <span class="count_top"><i class="fa fa-graduation-cap"></i> Total produtos cadastrados</span>
                    <div class="count green">{{ totalProduto }}</div>
                    <span class="count_bottom"><i class="fa fa-arrow-circle-right"></i> <a href=""> Visualizar lista de interessados </a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix">&nbsp;</div>
</div>
{% endblock %}