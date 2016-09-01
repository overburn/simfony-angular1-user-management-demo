<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_efd2d13286130c1efc6115522518189f078795f195091d02f26104586f65d4f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b20118197c84cfbc300635623ec71717298b26354b82c2a00ee2056f3ab50fff = $this->env->getExtension("native_profiler");
        $__internal_b20118197c84cfbc300635623ec71717298b26354b82c2a00ee2056f3ab50fff->enter($__internal_b20118197c84cfbc300635623ec71717298b26354b82c2a00ee2056f3ab50fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b20118197c84cfbc300635623ec71717298b26354b82c2a00ee2056f3ab50fff->leave($__internal_b20118197c84cfbc300635623ec71717298b26354b82c2a00ee2056f3ab50fff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
