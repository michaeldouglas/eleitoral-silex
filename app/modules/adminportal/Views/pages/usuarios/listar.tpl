{% extends 'layouts/layout.tpl' %}

{% block content %}
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Lista de usuários</h1>
    </div>
</div>
<!-- -->
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            &nbsp;
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Usuário</th>
                            <th>Tipo do usuário</th>
                            <th>Data de criação</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{% endblock %}