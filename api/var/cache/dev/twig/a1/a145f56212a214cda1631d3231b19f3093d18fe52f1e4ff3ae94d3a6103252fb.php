<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9c61f30bb88cdbaeeaee8e26da9e2be2c8f436c0fd322461caf3487039fb21d6 extends Twig_Template
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
        $__internal_f93abfbcad15e27cb7b98d1ba7d665c022a4568b94f6e3d1a646e35150f80ba6 = $this->env->getExtension("native_profiler");
        $__internal_f93abfbcad15e27cb7b98d1ba7d665c022a4568b94f6e3d1a646e35150f80ba6->enter($__internal_f93abfbcad15e27cb7b98d1ba7d665c022a4568b94f6e3d1a646e35150f80ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f93abfbcad15e27cb7b98d1ba7d665c022a4568b94f6e3d1a646e35150f80ba6->leave($__internal_f93abfbcad15e27cb7b98d1ba7d665c022a4568b94f6e3d1a646e35150f80ba6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
