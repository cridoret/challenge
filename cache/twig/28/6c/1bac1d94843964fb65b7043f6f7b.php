<?php

/* database.html.twig */
class __TwigTemplate_286c1bac1d94843964fb65b7043f6f7b extends Twig_Template
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
Here is a sample sql file with the table definitions that could be used for the implementation.
</p>
<h2>database.sql</h2>
<pre><code>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context['sqlFile']) ? $context['sqlFile'] : null), "html");
        echo "</code></pre>
";
    }

    public function getTemplateName()
    {
        return "database.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
