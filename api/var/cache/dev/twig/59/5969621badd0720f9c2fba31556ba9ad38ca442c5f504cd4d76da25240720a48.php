<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_0c2bc08ff8fe847b91ad2ba0e8e48c81e3ef943d0e46cbffbe49bfb650d700e2 extends Twig_Template
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
        $__internal_075801c292cba69f0de9e9fc888900dc406e82bde3027b21aedf6b12d5e8cbe6 = $this->env->getExtension("native_profiler");
        $__internal_075801c292cba69f0de9e9fc888900dc406e82bde3027b21aedf6b12d5e8cbe6->enter($__internal_075801c292cba69f0de9e9fc888900dc406e82bde3027b21aedf6b12d5e8cbe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_075801c292cba69f0de9e9fc888900dc406e82bde3027b21aedf6b12d5e8cbe6->leave($__internal_075801c292cba69f0de9e9fc888900dc406e82bde3027b21aedf6b12d5e8cbe6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
