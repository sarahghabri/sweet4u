<?php

/* EspritPatisserieBundle:productF:productIndex.html.twig */
class __TwigTemplate_7d532dfc52ca79a6cbc84cfc2e55a423e7353312b8f51abe0795e8bf3fc901f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EspritPatisserieBundle::products.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritPatisserieBundle::products.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "EspritPatisserieBundle:productF:productIndex.html.twig";
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
