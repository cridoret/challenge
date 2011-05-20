<?php

/* challenge.html.twig */
class __TwigTemplate_fd70b46cf69cc6ed4e32e604d4152a01 extends Twig_Template
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
        echo "<pre>";
        echo twig_escape_filter($this->env, (isset($context['teacherInfo']) ? $context['teacherInfo'] : null), "html");
        echo "</pre>
<pre>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context['studentInfo']) ? $context['studentInfo'] : null), "html");
        echo "</pre>
";
    }

    public function getTemplateName()
    {
        return "challenge.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
