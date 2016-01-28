<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ 'Admin Portal Pravaler | ' }}</title>

        <!-- Bootstrap core CSS -->

        <link href="{{ app.request.basepath }}/assets/css/bootstrap.min.css" rel="stylesheet">

        <link href="{{ app.request.basepath }}/assets/fonts/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{ app.request.basepath }}/assets/css/animate.min.css" rel="stylesheet">

        <!-- Custom styling plus plugins -->
        <link href="{{ app.request.basepath }}/assets/css/custom.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ app.request.basepath }}/assets/css/maps/jquery-jvectormap-2.0.1.css" />
        <link href="{{ app.request.basepath }}/assets/css/icheck/flat/green.css" rel="stylesheet" />
        <link href="{{ app.request.basepath }}/assets/css/floatexamples.css" rel="stylesheet" type="text/css" />

        <script src="{{ app.request.basepath }}/assets/js/jquery.min.js"></script>
        <script src="{{ app.request.basepath }}/assets/js/nprogress.js"></script>
        <script>
            NProgress.start();
        </script>

        <!--[if lt IE 9]>
            <script src="../assets/{{ app.request.basepath }}/assets/js/ie8-responsive-file-warning.js"></script>
            <![endif]-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

    </head>


    <body class="nav-md">

        <div class="container body">


            <div class="main_container">

                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">

                        <div class="navbar nav_title" style="border: 0;">
                            <a href="{{ path('sistema') }}" class="site_title"><i class="fa fa-graduation-cap"></i> <span>Portal Pravaler!</span></a>
                        </div>
                        <div class="clearfix"></div>

                        <!-- menu prile quick info -->
                        <div class="profile">
                            <div class="profile_pic">
                                <img src="{{ app.request.basepath }}/assets/images/img.jpg" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Bem vindo,</span>
                                <h2>Admin</h2>
                            </div>
                        </div>
                        <!-- /menu prile quick info -->

                        <div class="clearfix">&nbsp;</div>

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                            <div class="menu_section">
                                <h3>Geral</h3>
                                <ul class="nav side-menu">
                                    <li><a><i class="fa fa-users"></i> Usuários <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <li><a href="{{ path('listar-usuario') }}">Listar usuários</a>
                                            </li>
                                            <li>
                                                <a href="{{ path('inserir-usuario') }}">Inserir usuário</a>
                                            </li>
                                        </ul>
                                    </li> 
                                </ul>
                            </div> 

                            <div class="menu_section">
                                <h3>Portal Pravaler</h3>
                                <ul class="nav side-menu">
                                    <li><a><i class="fa fa-pie-chart"></i> Gráficos <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <li>
                                                <a href="index.html">Cursos cadastrados</a>
                                            </li>
                                            <li>
                                                <a href="index2.html">Instituições cadastradas</a>
                                            </li>
                                            <li>
                                                <a href="index3.html">Campus cadastrados</a>
                                            </li>
                                            <li>
                                                <a href="index3.html">Alunos interessados portal</a>
                                            </li>
                                            <li>
                                                <a href="index3.html">Alunos interessados celular</a>
                                            </li>
                                            <li>
                                                <a href="index3.html">Total produtos cadastrados</a>
                                            </li>
                                        </ul>
                                    </li> 
                                </ul>
                                <ul class="nav side-menu">
                                    <li><a><i class="fa fa-arrow-circle-up"></i> Aprovar <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <li>
                                                <a href="{{ path('aprovar') }}">Chamados</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="menu_section">
                                <h3>Crédito universitário</h3>
                                <ul class="nav side-menu">
                                    <li><a><i class="fa fa-external-link"></i> Redirecionamento <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <li>
                                                <a href="{{ path('credito') }}">Cadastrar</a>
                                                <a href="{{ path('credito') }}">Editar</a>
                                            </li>     
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock">
                                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">

                    <div class="nav_menu">
                        <nav class="" role="navigation">
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ app.request.basepath }}/assets/images/img.jpg" alt="">Admin
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                        <li><a href="javascript:;">  Profile</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="badge bg-red pull-right">50%</span>
                                                <span>Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">Help</a>
                                        </li>
                                        <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                        </li>
                                    </ul>
                                </li>

                                <li role="presentation" class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="badge bg-green">6</span>
                                    </a>
                                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                                        <li>
                                            <a>
                                                <span class="image">
                                                    <img src="{{ app.request.basepath }}/assets/images/img.jpg" alt="Profile Image" />
                                                </span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where... 
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image">
                                                    <img src="{{ app.request.basepath }}/assets/images/img.jpg" alt="Profile Image" />
                                                </span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where... 
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image">
                                                    <img src="{{ app.request.basepath }}/assets/images/img.jpg" alt="Profile Image" />
                                                </span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where... 
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image">
                                                    <img src="{{ app.request.basepath }}/assets/images/img.jpg" alt="Profile Image" />
                                                </span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where... 
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="text-center">
                                                <a>
                                                    <strong><a href="inbox.html">See All Alerts</strong>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                    </div>

                </div>
                <!-- /top navigation -->


                <!-- page content -->
                <div class="right_col" role="main">
                        {% block content %}{% endblock %}
                    <!-- footer content -->
                    <footer>
                        <div class="">
                            <p class="pull-right">Ideal Invest S/A - Todos os direitos reservados
                                <a href="http://www.portalpravaler.com.br/">
                                    <span class="lead"> <i class="fa fa-graduation-cap"></i> Portal Pravaler</span>
                                </a>
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </footer>
                    <!-- /footer content -->
                </div>
                <!-- /page content -->

            </div>

        </div>

        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
        </div>

        <script src="{{ app.request.basepath }}/assets/js/bootstrap.min.js"></script>

        <!-- bootstrap progress js -->
        <script src="{{ app.request.basepath }}/assets/js/progressbar/bootstrap-progressbar.min.js"></script>
        <script src="{{ app.request.basepath }}/assets/js/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- icheck -->
        <script src="{{ app.request.basepath }}/assets/js/icheck/icheck.min.js"></script>

        <script src="{{ app.request.basepath }}/assets/js/custom.js"></script>

        <!-- flot js -->
        <!--[if lte IE 8]><script type="text/javascript" src="{{ app.request.basepath }}/assets/js/excanvas.min.js"></script><![endif]-->



        <!-- worldmap -->
        <script type="text/javascript" src="{{ app.request.basepath }}/assets/js/maps/jquery-jvectormap-2.0.1.min.js"></script>
        <script type="text/javascript" src="{{ app.request.basepath }}/assets/js/maps/gdp-data.js"></script>
        <script type="text/javascript" src="{{ app.request.basepath }}/assets/js/maps/jquery-jvectormap-world-mill-en.js"></script>
        <script type="text/javascript" src="{{ app.request.basepath }}/assets/js/maps/jquery-jvectormap-us-aea-en.js"></script>

        <script>
            NProgress.done();
        </script>
    </body>
</html>