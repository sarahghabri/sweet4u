<?php

/* EspritPatisserieBundle:loginF:loginIndex.html.twig */
class __TwigTemplate_7b62a0106a7cf76898814215af85daf51cddcd9ffc4d496631230cf69d74b35e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EspritPatisserieBundle::login.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritPatisserieBundle::login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "EspritPatisserieBundle:loginF:loginIndex.html.twig";
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
