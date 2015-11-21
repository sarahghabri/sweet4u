<?php

/* EspritPatisserieBundle:contactF:contactIndex.html.twig */
class __TwigTemplate_a7a67ae7eb829520428f06c94d27de3ee8047085a404835a9bc632bf4dc2263c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EspritPatisserieBundle::contact.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritPatisserieBundle::contact.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "EspritPatisserieBundle:contactF:contactIndex.html.twig";
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
