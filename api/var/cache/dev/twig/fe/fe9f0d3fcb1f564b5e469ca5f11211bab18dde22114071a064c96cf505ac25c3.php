<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_da465b62363513e0238ebc5ea5a275b103bca8d51921d0e0601dd19040ecce3a extends Twig_Template
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
        $__internal_13b91009bd8d61a649ab82530cb3e8e3af52826562ce5dc27a13a7c5da3a220d = $this->env->getExtension("native_profiler");
        $__internal_13b91009bd8d61a649ab82530cb3e8e3af52826562ce5dc27a13a7c5da3a220d->enter($__internal_13b91009bd8d61a649ab82530cb3e8e3af52826562ce5dc27a13a7c5da3a220d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_13b91009bd8d61a649ab82530cb3e8e3af52826562ce5dc27a13a7c5da3a220d->leave($__internal_13b91009bd8d61a649ab82530cb3e8e3af52826562ce5dc27a13a7c5da3a220d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
