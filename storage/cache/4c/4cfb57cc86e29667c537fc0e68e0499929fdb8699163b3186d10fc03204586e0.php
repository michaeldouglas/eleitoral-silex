<?php

/* conteudo/home.tpl */
class __TwigTemplate_9b64de4dae70a14e20e7c16c11210e93aeb8b4f62a41b0e3e3d20b0818441c23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/layout.tpl", "conteudo/home.tpl", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/layout.tpl";
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
        return "conteudo/home.tpl";
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
/* {% extends 'layouts/layout.tpl' %}*/
/* */
/* {% block content %}*/
/*     <h1>Teste</h1>*/
/* {% endblock %}*/
