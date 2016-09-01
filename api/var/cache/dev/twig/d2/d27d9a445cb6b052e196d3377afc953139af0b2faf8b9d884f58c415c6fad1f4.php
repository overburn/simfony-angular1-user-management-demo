<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_d131153f9461bc5062dcbb63e4402cb886dbffda63f20eb13531079a9824b36e extends Twig_Template
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
        $__internal_aa61cc8f40ea873c5385d5719f2f9cc013e58d04d8837c8c2d830142070968bf = $this->env->getExtension("native_profiler");
        $__internal_aa61cc8f40ea873c5385d5719f2f9cc013e58d04d8837c8c2d830142070968bf->enter($__internal_aa61cc8f40ea873c5385d5719f2f9cc013e58d04d8837c8c2d830142070968bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_aa61cc8f40ea873c5385d5719f2f9cc013e58d04d8837c8c2d830142070968bf->leave($__internal_aa61cc8f40ea873c5385d5719f2f9cc013e58d04d8837c8c2d830142070968bf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
