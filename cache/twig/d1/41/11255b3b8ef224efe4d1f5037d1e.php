<?php

/* layout/layout.html.twig */
class __TwigTemplate_d14111255b3b8ef224efe4d1f5037d1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"xhtml11.dtd\">
<html>
    <head>
        <link rel=\"stylesheet\" href=\"/css/app.css\" type=\"text/css\" media=\"screen, projection\">
    </head>
    <body>
        <h1>Code Challenge</h1>
        <div id=\"menu\">
            ";
        // line 9
        $this->displayBlock('menu', $context, $blocks);
        // line 12
        echo "        </div>
        <div id=\"content\">
            ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "        </div>
    </body>
</html>";
    }

    // line 9
    public function block_menu($context, array $blocks = array())
    {
        // line 10
        echo "                ";
        $this->env->loadTemplate("layout/menu.html.twig")->display($context);
        // line 11
        echo "            ";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
