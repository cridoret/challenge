<?php

/* question1.html.twig */
class __TwigTemplate_36c13a3fb629799d241ae24b817207f4 extends Twig_Template
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
        echo "<h2>Person Interface</h2>
<pre><code>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context['personInterfaceClass']) ? $context['personInterfaceClass'] : null), "html");
        echo "</code></pre>
<h2>Person Abstract Class</h2>
<pre><code>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context['personClass']) ? $context['personClass'] : null), "html");
        echo "</code></pre>
<h2>Student Class</h2>
<pre><code>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context['studentClass']) ? $context['studentClass'] : null), "html");
        echo "</code></pre>
<h2>Teacher Class</h2>
<pre><code>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context['teacherClass']) ? $context['teacherClass'] : null), "html");
        echo "</code></pre>
";
    }

    public function getTemplateName()
    {
        return "question1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
