{% extends 'layouts/layout.tpl' %}

{% block content %}
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>
                Aprovar mudanças <small> Portal Pravaler </small>
            </h3>
        </div>
    </div>

    <div class="x_panel">
        <div class="x_content">
            <br>
            <form method="post" action="{{ path('aprovar_listar') }}" class="form-horizontal form-label-left" data-parsley-validate="" id="demo-form2" novalidate="">

                <div class="form-group">
                    <label for="first-name" class="control-label col-md-3 col-sm-3 col-xs-12">Chamado <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" required="required" id="first-name" data-parsley-id="6967"><ul class="parsley-errors-list" id="parsley-id-6967"></ul>
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button class="btn btn-success" type="submit">Procurar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <div class="clearfix">&nbsp;</div>
</div>
{% endblock %}