<?php

/* printinfo.html.twig */
class __TwigTemplate_32179cd0be2c85a977a954688317c290 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("layout/layout.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<p>
Here is the outputs of printinfo() on a Student and a Teacher. 
</p>
<p>
This is using <a href=\"http://silex-project.org/\" target=\"_none\">Silex</a>, a PHP micro-framework.
</p>
<h2>Output of printinfo()</h2>
<pre>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context['teacherInfo']) ? $context['teacherInfo'] : null), "html");
        echo "</pre>
<pre>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context['studentInfo']) ? $context['studentInfo'] : null), "html");
        echo "</pre>
<hr>
<p>
Here is the controller of the application:
</p>
<h2>The Controller</h2>
<pre>";
        // line 17
        echo twig_escape_filter($this->env, (isset($context['appCode']) ? $context['appCode'] : null), "html");
        echo "</pre>
<hr>
<p>
Here is the source of the application on github:
</p>
<a href=\"https://github.com/cridoret/challenge\" target=\"_none\"><h2>Application Source</h2></a>
";
    }

    public function getTemplateName()
    {
        return "printinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
