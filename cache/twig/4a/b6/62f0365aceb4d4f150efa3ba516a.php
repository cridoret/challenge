<?php

/* tests.html.twig */
class __TwigTemplate_4ab662f0365aceb4d4f150efa3ba516a extends Twig_Template
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
In order to test the printinfo() method we test that the string returned by the getinfo() method, 
used to get the information by printinfo(), is matching a text file with the expected output.
</p>
<p>
For the studentId validation we tests the setStudentId() method  (implemented using a regular expression to check for input validity) 
with valid and invalid data and check that we get an Exception for the invalid ones.
</p>
<h2>Student Test Class</h2>
<pre><code>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context['studentTestClass']) ? $context['studentTestClass'] : null), "html");
        echo "</code></pre>
<h2>Teacher Test Class</h2>
<pre><code>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context['teacherTestClass']) ? $context['teacherTestClass'] : null), "html");
        echo "</code></pre>
";
    }

    public function getTemplateName()
    {
        return "tests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
