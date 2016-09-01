<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_17dca5c1ccb06aa5cbfb8b389c44e89a7a465b79679df99e2085957be57931a2 extends Twig_Template
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
        $__internal_7344d36a72e7b47ab3f34faa15bc8a0c2dc3fe71b3ca567cb6dcf9fd24f73021 = $this->env->getExtension("native_profiler");
        $__internal_7344d36a72e7b47ab3f34faa15bc8a0c2dc3fe71b3ca567cb6dcf9fd24f73021->enter($__internal_7344d36a72e7b47ab3f34faa15bc8a0c2dc3fe71b3ca567cb6dcf9fd24f73021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7344d36a72e7b47ab3f34faa15bc8a0c2dc3fe71b3ca567cb6dcf9fd24f73021->leave($__internal_7344d36a72e7b47ab3f34faa15bc8a0c2dc3fe71b3ca567cb6dcf9fd24f73021_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
