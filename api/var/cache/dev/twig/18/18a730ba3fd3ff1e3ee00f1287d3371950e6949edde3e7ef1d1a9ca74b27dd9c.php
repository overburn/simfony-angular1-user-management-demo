<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_33f9c48337d84ce443116e5ba4bcb75fea8d71b97a0a9eb94b8144f07fffa82b extends Twig_Template
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
        $__internal_66ea7186171c2b19a6d38465a09b694758790501ed7238e2d90db23ffad48f08 = $this->env->getExtension("native_profiler");
        $__internal_66ea7186171c2b19a6d38465a09b694758790501ed7238e2d90db23ffad48f08->enter($__internal_66ea7186171c2b19a6d38465a09b694758790501ed7238e2d90db23ffad48f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_66ea7186171c2b19a6d38465a09b694758790501ed7238e2d90db23ffad48f08->leave($__internal_66ea7186171c2b19a6d38465a09b694758790501ed7238e2d90db23ffad48f08_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
