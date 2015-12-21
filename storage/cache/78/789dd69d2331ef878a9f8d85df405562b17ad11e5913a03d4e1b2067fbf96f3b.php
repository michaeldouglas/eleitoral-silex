<?php

/* layouts/layout.tpl */
class __TwigTemplate_58a285d9d194e66a5f7f0e4dd37f95ac6422460c6742dfed67dbf343683de836 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Sistema de cadastro eleitoral\">
    <meta name=\"author\" content=\"Michael Douglas\">

    <title>";
        // line 12
        echo "Sistema de cadastro eleitoral | ";
        echo "</title>

    <!-- Bootstrap Core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/bower_components/bootstrap/dist/css/bootstrap.min.css\">

    <!-- MetisMenu CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/bower_components/metisMenu/dist/metisMenu.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/dist/css/sb-admin-2.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/bower_components/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

    <div id=\"wrapper\">

        <!-- Navigation -->
        <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">Eleitoral Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class=\"nav navbar-top-links navbar-right\">
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        <i class=\"fa fa-envelope fa-fw\"></i>  <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-messages\">
                        <li>
                            <a href=\"#\">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class=\"pull-right text-muted\">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class=\"pull-right text-muted\">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class=\"pull-right text-muted\">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a class=\"text-center\" href=\"#\">
                                <strong>Read All Messages</strong>
                                <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        <i class=\"fa fa-tasks fa-fw\"></i>  <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-tasks\">
                        <li>
                            <a href=\"#\">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class=\"pull-right text-muted\">40% Complete</span>
                                    </p>
                                    <div class=\"progress progress-striped active\">
                                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                                            <span class=\"sr-only\">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class=\"pull-right text-muted\">20% Complete</span>
                                    </p>
                                    <div class=\"progress progress-striped active\">
                                        <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                                            <span class=\"sr-only\">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class=\"pull-right text-muted\">60% Complete</span>
                                    </p>
                                    <div class=\"progress progress-striped active\">
                                        <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                            <span class=\"sr-only\">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class=\"pull-right text-muted\">80% Complete</span>
                                    </p>
                                    <div class=\"progress progress-striped active\">
                                        <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                            <span class=\"sr-only\">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a class=\"text-center\" href=\"#\">
                                <strong>See All Tasks</strong>
                                <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        <i class=\"fa fa-bell fa-fw\"></i>  <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-alerts\">
                        <li>
                            <a href=\"#\">
                                <div>
                                    <i class=\"fa fa-comment fa-fw\"></i> New Comment
                                    <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <i class=\"fa fa-twitter fa-fw\"></i> 3 New Followers
                                    <span class=\"pull-right text-muted small\">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <i class=\"fa fa-envelope fa-fw\"></i> Message Sent
                                    <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <i class=\"fa fa-tasks fa-fw\"></i> New Task
                                    <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <i class=\"fa fa-upload fa-fw\"></i> Server Rebooted
                                    <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a class=\"text-center\" href=\"#\">
                                <strong>See All Alerts</strong>
                                <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        <i class=\"fa fa-user fa-fw\"></i>  <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-user\">
                        <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> User Profile</a>
                        </li>
                        <li><a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i> Settings</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li><a href=\"login.html\"><i class=\"fa fa-sign-out fa-fw\"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class=\"navbar-default sidebar\" role=\"navigation\">
                <div class=\"sidebar-nav navbar-collapse\">
                    <ul class=\"nav\" id=\"side-menu\">
                        <li class=\"sidebar-search\">
                            <div class=\"input-group custom-search-form\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                                <span class=\"input-group-btn\">
                                    <button class=\"btn btn-default\" type=\"button\">
                                        <i class=\"fa fa-search\"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href=\"index.html\"><i class=\"fa fa-dashboard fa-fw\"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-bar-chart-o fa-fw\"></i> Charts<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"flot.html\">Flot Charts</a>
                                </li>
                                <li>
                                    <a href=\"morris.html\">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=\"tables.html\"><i class=\"fa fa-table fa-fw\"></i> Tables</a>
                        </li>
                        <li>
                            <a href=\"forms.html\"><i class=\"fa fa-edit fa-fw\"></i> Forms</a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-wrench fa-fw\"></i> UI Elements<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"panels-wells.html\">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href=\"buttons.html\">Buttons</a>
                                </li>
                                <li>
                                    <a href=\"notifications.html\">Notifications</a>
                                </li>
                                <li>
                                    <a href=\"typography.html\">Typography</a>
                                </li>
                                <li>
                                    <a href=\"icons.html\"> Icons</a>
                                </li>
                                <li>
                                    <a href=\"grid.html\">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-sitemap fa-fw\"></i> Multi-Level Dropdown<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"#\">Second Level Item</a>
                                </li>
                                <li>
                                    <a href=\"#\">Second Level Item</a>
                                </li>
                                <li>
                                    <a href=\"#\">Third Level <span class=\"fa arrow\"></span></a>
                                    <ul class=\"nav nav-third-level\">
                                        <li>
                                            <a href=\"#\">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href=\"#\">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href=\"#\">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href=\"#\">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li class=\"active\">
                            <a href=\"#\"><i class=\"fa fa-files-o fa-fw\"></i> Sample Pages<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a class=\"active\" href=\"blank.html\">Blank Page</a>
                                </li>
                                <li>
                                    <a href=\"login.html\">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id=\"page-wrapper\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    ";
        // line 374
        $this->displayBlock('content', $context, $blocks);
        // line 375
        echo "                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    
    <script src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/bower_components/jquery/dist/jquery.min.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/bower_components/bootstrap/dist/js/bootstrap.min.js\"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/bower_components/metisMenu/dist/metisMenu.min.js\"></script>

    <!-- Custom Theme JavaScript -->
    <script src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/dist/js/sb-admin-2.js\"></script>

</body>

</html>
";
    }

    // line 374
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layouts/layout.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 374,  445 => 397,  439 => 394,  433 => 391,  427 => 388,  412 => 375,  410 => 374,  57 => 24,  51 => 21,  45 => 18,  39 => 15,  33 => 12,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="pt">*/
/* */
/* <head>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="Sistema de cadastro eleitoral">*/
/*     <meta name="author" content="Michael Douglas">*/
/* */
/*     <title>{{ 'Sistema de cadastro eleitoral | ' }}</title>*/
/* */
/*     <!-- Bootstrap Core CSS -->*/
/*     <link rel="stylesheet" href="{{ app.request.basepath }}/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">*/
/* */
/*     <!-- MetisMenu CSS -->*/
/*     <link rel="stylesheet" href="{{ app.request.basepath }}/assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">*/
/* */
/*     <!-- Custom CSS -->*/
/*     <link rel="stylesheet" href="{{ app.request.basepath }}/assets/dist/css/sb-admin-2.css" rel="stylesheet">*/
/* */
/*     <!-- Custom Fonts -->*/
/*     <link rel="stylesheet" href="{{ app.request.basepath }}/assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/*     <div id="wrapper">*/
/* */
/*         <!-- Navigation -->*/
/*         <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="index.html">Eleitoral Admin v2.0</a>*/
/*             </div>*/
/*             <!-- /.navbar-header -->*/
/* */
/*             <ul class="nav navbar-top-links navbar-right">*/
/*                 <li class="dropdown">*/
/*                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                         <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu dropdown-messages">*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <div>*/
/*                                     <strong>John Smith</strong>*/
/*                                     <span class="pull-right text-muted">*/
/*                                         <em>Yesterday</em>*/
/*                                     </span>*/
/*                                 </div>*/
/*                                 <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="divider"></li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <div>*/
/*                                     <strong>John Smith</strong>*/
/*                                     <span class="pull-right text-muted">*/
/*                                         <em>Yesterday</em>*/
/*                                     </span>*/
/*                                 </div>*/
/*                                 <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="divider"></li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <div>*/
/*                                     <strong>John Smith</strong>*/
/*                                     <span class="pull-right text-muted">*/
/*                                         <em>Yesterday</em>*/
/*                                     </span>*/
/*                                 </div>*/
/*                                 <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="divider"></li>*/
/*                         <li>*/
/*                             <a class="text-center" href="#">*/
/*                                 <strong>Read All Messages</strong>*/
/*                                 <i class="fa fa-angle-right"></i>*/
/*                             </a>*/
/*                         </li>*/
/*                     </ul>*/
/*                     <!-- /.dropdown-messages -->*/
/*                 </li>*/
/*                 <!-- /.dropdown -->*/
/*                 <li class="dropdown">*/
/*                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                         <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu dropdown-tasks">*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <div>*/
/*                                     <p>*/
/*                                         <strong>Task 1</strong>*/
/*                                         <span class="pull-right text-muted">40% Complete</span>*/
/*                                     </p>*/
/*                                     <div class="progress progress-striped active">*/
/*                                         <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">*/
/*                                             <span class="sr-only">40% Complete (success)</span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="divider"></li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <div>*/
/*                                     <p>*/
/*                                         <strong>Task 2</strong>*/
/*                                         <span class="pull-right text-muted">20% Complete</span>*/
/*                                     </p>*/
/*                                     <div class="progress progress-striped active">*/
/*                                         <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">*/
/*                                             <span class="sr-only">20% Complete</span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="divider"></li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <div>*/
/*                                     <p>*/
/*                                         <strong>Task 3</strong>*/
/*                                         <span class="pull-right text-muted">60% Complete</span>*/
/*                                     </p>*/
/*                                     <div class="progress progress-striped active">*/
/*                                         <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">*/
/*                                             <span class="sr-only">60% Complete (warning)</span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="divider"></li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <div>*/
/*                                     <p>*/
/*                                         <strong>Task 4</strong>*/
/*                                         <span class="pull-right text-muted">80% Complete</span>*/
/*                                     </p>*/
/*                                     <div class="progress progress-striped active">*/
/*                                         <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">*/
/*                                             <span class="sr-only">80% Complete (danger)</span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="divider"></li>*/
/*                         <li>*/
/*                             <a class="text-center" href="#">*/
/*                                 <strong>See All Tasks</strong>*/
/*                                 <i class="fa fa-angle-right"></i>*/
/*                             </a>*/
/*                         </li>*/
/*                     </ul>*/
/*                     <!-- /.dropdown-tasks -->*/
/*                 </li>*/
/*                 <!-- /.dropdown -->*/
/*                 <li class="dropdown">*/
/*                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                         <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu dropdown-alerts">*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <div>*/
/*                                     <i class="fa fa-comment fa-fw"></i> New Comment*/
/*                                     <span class="pull-right text-muted small">4 minutes ago</span>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="divider"></li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <div>*/
/*                                     <i class="fa fa-twitter fa-fw"></i> 3 New Followers*/
/*                                     <span class="pull-right text-muted small">12 minutes ago</span>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="divider"></li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <div>*/
/*                                     <i class="fa fa-envelope fa-fw"></i> Message Sent*/
/*                                     <span class="pull-right text-muted small">4 minutes ago</span>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="divider"></li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <div>*/
/*                                     <i class="fa fa-tasks fa-fw"></i> New Task*/
/*                                     <span class="pull-right text-muted small">4 minutes ago</span>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="divider"></li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <div>*/
/*                                     <i class="fa fa-upload fa-fw"></i> Server Rebooted*/
/*                                     <span class="pull-right text-muted small">4 minutes ago</span>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="divider"></li>*/
/*                         <li>*/
/*                             <a class="text-center" href="#">*/
/*                                 <strong>See All Alerts</strong>*/
/*                                 <i class="fa fa-angle-right"></i>*/
/*                             </a>*/
/*                         </li>*/
/*                     </ul>*/
/*                     <!-- /.dropdown-alerts -->*/
/*                 </li>*/
/*                 <!-- /.dropdown -->*/
/*                 <li class="dropdown">*/
/*                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                         <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu dropdown-user">*/
/*                         <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>*/
/*                         </li>*/
/*                         <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>*/
/*                         </li>*/
/*                         <li class="divider"></li>*/
/*                         <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                     <!-- /.dropdown-user -->*/
/*                 </li>*/
/*                 <!-- /.dropdown -->*/
/*             </ul>*/
/*             <!-- /.navbar-top-links -->*/
/* */
/*             <div class="navbar-default sidebar" role="navigation">*/
/*                 <div class="sidebar-nav navbar-collapse">*/
/*                     <ul class="nav" id="side-menu">*/
/*                         <li class="sidebar-search">*/
/*                             <div class="input-group custom-search-form">*/
/*                                 <input type="text" class="form-control" placeholder="Search...">*/
/*                                 <span class="input-group-btn">*/
/*                                     <button class="btn btn-default" type="button">*/
/*                                         <i class="fa fa-search"></i>*/
/*                                     </button>*/
/*                                 </span>*/
/*                             </div>*/
/*                             <!-- /input-group -->*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>*/
/*                             <ul class="nav nav-second-level">*/
/*                                 <li>*/
/*                                     <a href="flot.html">Flot Charts</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="morris.html">Morris.js Charts</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                             <!-- /.nav-second-level -->*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>*/
/*                             <ul class="nav nav-second-level">*/
/*                                 <li>*/
/*                                     <a href="panels-wells.html">Panels and Wells</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="buttons.html">Buttons</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="notifications.html">Notifications</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="typography.html">Typography</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="icons.html"> Icons</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="grid.html">Grid</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                             <!-- /.nav-second-level -->*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>*/
/*                             <ul class="nav nav-second-level">*/
/*                                 <li>*/
/*                                     <a href="#">Second Level Item</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">Second Level Item</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">Third Level <span class="fa arrow"></span></a>*/
/*                                     <ul class="nav nav-third-level">*/
/*                                         <li>*/
/*                                             <a href="#">Third Level Item</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="#">Third Level Item</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="#">Third Level Item</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="#">Third Level Item</a>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                     <!-- /.nav-third-level -->*/
/*                                 </li>*/
/*                             </ul>*/
/*                             <!-- /.nav-second-level -->*/
/*                         </li>*/
/*                         <li class="active">*/
/*                             <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>*/
/*                             <ul class="nav nav-second-level">*/
/*                                 <li>*/
/*                                     <a class="active" href="blank.html">Blank Page</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="login.html">Login Page</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                             <!-- /.nav-second-level -->*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <!-- /.sidebar-collapse -->*/
/*             </div>*/
/*             <!-- /.navbar-static-side -->*/
/*         </nav>*/
/* */
/*         <!-- Page Content -->*/
/*         <div id="page-wrapper">*/
/*             <div class="container-fluid">*/
/*                 <div class="row">*/
/*                     {% block content %}{% endblock %}*/
/*                     <!-- /.col-lg-12 -->*/
/*                 </div>*/
/*                 <!-- /.row -->*/
/*             </div>*/
/*             <!-- /.container-fluid -->*/
/*         </div>*/
/*         <!-- /#page-wrapper -->*/
/* */
/*     </div>*/
/*     <!-- /#wrapper -->*/
/* */
/*     <!-- jQuery -->*/
/*     */
/*     <script src="{{ app.request.basepath }}/assets/bower_components/jquery/dist/jquery.min.js"></script>*/
/* */
/*     <!-- Bootstrap Core JavaScript -->*/
/*     <script src="{{ app.request.basepath }}/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>*/
/* */
/*     <!-- Metis Menu Plugin JavaScript -->*/
/*     <script src="{{ app.request.basepath }}/assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>*/
/* */
/*     <!-- Custom Theme JavaScript -->*/
/*     <script src="{{ app.request.basepath }}/assets/dist/js/sb-admin-2.js"></script>*/
/* */
/* </body>*/
/* */
/* </html>*/
/* */