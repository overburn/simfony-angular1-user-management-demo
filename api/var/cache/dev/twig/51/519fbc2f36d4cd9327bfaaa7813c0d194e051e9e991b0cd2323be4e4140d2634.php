<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3ccaeab1ecb14eae0fad72b98ff4751c5f4ee4e9c9f47832ea2fff6dbe5ed7eb extends Twig_Template
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
        $__internal_35ef42e8abc652b7405a13ec87b5149603ca5f5d59edc838d4e1ce420991bdc6 = $this->env->getExtension("native_profiler");
        $__internal_35ef42e8abc652b7405a13ec87b5149603ca5f5d59edc838d4e1ce420991bdc6->enter($__internal_35ef42e8abc652b7405a13ec87b5149603ca5f5d59edc838d4e1ce420991bdc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_35ef42e8abc652b7405a13ec87b5149603ca5f5d59edc838d4e1ce420991bdc6->leave($__internal_35ef42e8abc652b7405a13ec87b5149603ca5f5d59edc838d4e1ce420991bdc6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
