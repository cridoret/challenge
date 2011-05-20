<?php

/* student.html.twig */
class __TwigTemplate_5a96aaf8dfaa6229b8da6ecefcc7d9e0 extends Twig_Template
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
Here is a sample code of how we could retrieve a single student data set by studentId
</p>
<h2>Sample Code</h2>
<pre><code>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context['code']) ? $context['code'] : null), "html");
        echo "</code></pre>
";
    }

    public function getTemplateName()
    {
        return "student.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
