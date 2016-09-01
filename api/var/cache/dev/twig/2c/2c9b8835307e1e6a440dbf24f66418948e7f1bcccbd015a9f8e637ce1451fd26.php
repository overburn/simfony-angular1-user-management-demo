<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_f22d858e137715ce80c7597dd6f95fc49c05ce1b4125e6dd3790ea3fad078869 extends Twig_Template
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
        $__internal_2b37fa7bd4372b784648f59ded0ee9d49ff05f0ad147eff4e7d16c157f494f1a = $this->env->getExtension("native_profiler");
        $__internal_2b37fa7bd4372b784648f59ded0ee9d49ff05f0ad147eff4e7d16c157f494f1a->enter($__internal_2b37fa7bd4372b784648f59ded0ee9d49ff05f0ad147eff4e7d16c157f494f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2b37fa7bd4372b784648f59ded0ee9d49ff05f0ad147eff4e7d16c157f494f1a->leave($__internal_2b37fa7bd4372b784648f59ded0ee9d49ff05f0ad147eff4e7d16c157f494f1a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
