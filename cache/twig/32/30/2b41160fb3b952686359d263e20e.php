<?php

/* layout/menu.html.twig */
class __TwigTemplate_32302b41160fb3b952686359d263e20e extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "Question 1: <a href=\"/objects\">Objects</a> 
<br>
Question 2 and 3: <a href=\"/tests\">Tests</a> / 
<a href=\"/sismo.php/code-challenge\" target=\"_none\">PHPunit test results</a>
<br>
Question 4: <a href=\"/database\">DB Design</a> / <a href=\"/student\">student by studentId</a>
<br>
Question 5: <a href=\"/printinfo\">MVC framework</a>
<hr>";
    }

    public function getTemplateName()
    {
        return "layout/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
