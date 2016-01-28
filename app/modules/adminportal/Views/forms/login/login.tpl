{% extends 'forms/layouts/layout-login.tpl' %}


{% block content %}
    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>
        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                    <form action="{{ path('sistema_login_check') }}" method="post">
                        <h1><img src="{{ app.request.basepath }}/assets/modules/adminportal/img/logo_pravaler.png" /></h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" required="{{ last_username }}" name="_username" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" name="_password" required="" />
                        </div>
                        <div>
                            <input type="submit" class="btn btn-default submit" value="Entrar">
                        </div>
                        <div class="separator">
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-graduation-cap" style="font-size: 26px;"></i>  Portal Pravaler</h1>
                                <p>Ideal Invest S/A - Todos os direitos reservados</p>
                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
        </div>
    </div>
{% endblock %}