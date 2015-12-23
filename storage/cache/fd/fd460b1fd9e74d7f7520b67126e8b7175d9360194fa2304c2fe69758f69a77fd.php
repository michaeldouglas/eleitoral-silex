<?php

/* forms/login/login.tpl */
class __TwigTemplate_8bd76c202d1daeefd97f6225e840c66cabceef50a42009807afe99b9ff9f0329 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/layouts/layout-login.tpl", "forms/login/login.tpl", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/layouts/layout-login.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Teste</h1>
";
    }

    public function getTemplateName()
    {
        return "forms/login/login.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'forms/layouts/layout-login.tpl' %}*/
/* */
/* {% block content %}*/
/*     <h1>Teste</h1>*/
/* {% endblock %}*/
