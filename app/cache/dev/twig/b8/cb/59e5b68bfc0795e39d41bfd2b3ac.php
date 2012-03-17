<?php

/* CommonBaseBundle:Default:index.html.twig */
class __TwigTemplate_b8cb59e5b68bfc0795e39d41bfd2b3ac extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "CommonBaseBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
