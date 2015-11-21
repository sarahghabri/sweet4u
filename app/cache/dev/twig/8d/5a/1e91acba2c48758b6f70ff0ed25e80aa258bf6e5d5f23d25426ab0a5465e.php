<?php

/* EspritPatisserieBundle:aboutF:aboutIndex.html.twig */
class __TwigTemplate_8d5a1e91acba2c48758b6f70ff0ed25e80aa258bf6e5d5f23d25426ab0a5465e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EspritPatisserieBundle::about.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritPatisserieBundle::about.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "EspritPatisserieBundle:aboutF:aboutIndex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array ();
    }
}
