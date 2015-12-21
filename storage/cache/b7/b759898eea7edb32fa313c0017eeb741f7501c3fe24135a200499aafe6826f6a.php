<?php

/* forms/layouts/layout-login.tpl */
class __TwigTemplate_c844deb680f6f698886cab0747a2c00ae3a167d11b7cf51f50b1dc5c25241653 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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

    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4\">
                <div class=\"login-panel panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Realizar Login</h3>
                    </div>
                    <div class=\"panel-body\">
                        <form role=\"form\">
                            <fieldset>
                                <div class=\"form-group\">
                                    <input class=\"form-control\" placeholder=\"E-mail\" name=\"email\" type=\"email\" autofocus>
                                </div>
                                <div class=\"form-group\">
                                    <input class=\"form-control\" placeholder=\"Senha\" name=\"password\" type=\"password\" value=\"\">
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input name=\"remember\" type=\"checkbox\" value=\"Lembrar-me\">Lembrar-me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/eleitoral\" class=\"btn btn-lg btn-success btn-block\">Enviar</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <link rel=\"stylesheet\" href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/bower_components/jquery/dist/jquery.min.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <link rel=\"stylesheet\" href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/bower_components/bootstrap/dist/js/bootstrap.min.js\"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <link rel=\"stylesheet\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/bower_components/metisMenu/dist/metisMenu.min.js\"></script>

    <!-- Custom Theme JavaScript -->
    <link rel=\"stylesheet\" href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/dist/js/sb-admin-2.js\"></script>

</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "forms/layouts/layout-login.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 76,  117 => 73,  111 => 70,  105 => 67,  92 => 57,  56 => 24,  50 => 21,  44 => 18,  38 => 15,  32 => 12,  19 => 1,);
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
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-4 col-md-offset-4">*/
/*                 <div class="login-panel panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         <h3 class="panel-title">Realizar Login</h3>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <form role="form">*/
/*                             <fieldset>*/
/*                                 <div class="form-group">*/
/*                                     <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <input class="form-control" placeholder="Senha" name="password" type="password" value="">*/
/*                                 </div>*/
/*                                 <div class="checkbox">*/
/*                                     <label>*/
/*                                         <input name="remember" type="checkbox" value="Lembrar-me">Lembrar-me*/
/*                                     </label>*/
/*                                 </div>*/
/*                                 <!-- Change this to a button or input when using this as a form -->*/
/*                                 <a href="{{ app.request.basepath }}/eleitoral" class="btn btn-lg btn-success btn-block">Enviar</a>*/
/*                             </fieldset>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <!-- jQuery -->*/
/*     <link rel="stylesheet" href="{{ app.request.basepath }}/assets/bower_components/jquery/dist/jquery.min.js"></script>*/
/* */
/*     <!-- Bootstrap Core JavaScript -->*/
/*     <link rel="stylesheet" href="{{ app.request.basepath }}/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>*/
/* */
/*     <!-- Metis Menu Plugin JavaScript -->*/
/*     <link rel="stylesheet" href="{{ app.request.basepath }}/assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>*/
/* */
/*     <!-- Custom Theme JavaScript -->*/
/*     <link rel="stylesheet" href="{{ app.request.basepath }}/assets/dist/js/sb-admin-2.js"></script>*/
/* */
/* </body>*/
/* */
/* </html>*/
/* */
