{% extends 'layouts/layout.tpl' %}

{% block content %}
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>
                Relatórios
                <small>
                    Cursos cadastrados
                </small>
            </h3>
        </div>

        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                    <input type="text" placeholder="Procurar dados curso..." class="form-control">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default">Procurar</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_content">
                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                    <thead>
                        <tr class="headings">
                            <th class="column-title">Nome do curso</th>
                            <th class="column-title">Nome do campus</th>
                            <th class="column-title">Valor da mensalidade</th>
                            <th class="column-title">Nota Enade</th>
                            <th class="column-title">Quantidade de meses</th>
                            <th class="column-title no-link last"><span class="nobr">Ações</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        {% for cursos in data %}
                            <tr class="even pointer">
                                <td>{{cursos.nm_curso}}</td>
                                <td>{{cursos.nm_campus}}</td>
                                <td>{{cursos.vl_mensalidade}}</td>
                                {% if cursos.cd_nota_enade == 0 %}
                                    <td>0</td>
                                {% else %}
                                    <td>{{cursos.cd_nota_enade}}</td>
                                {% endif %}
                                <td>{{cursos.qt_meses}}</td>
                                <td class=" last"><a href="#">Editar</a></td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{% endblock %}