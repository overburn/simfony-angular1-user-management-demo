<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_8a8bee51db58b326bac3d9849537ea3ea81b2e1b011a9f28387d719708562620 extends Twig_Template
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
        $__internal_a4cd746a939e9ba0d37fa22bc30960aa471ccfd36bb5121a3d069cd54a1b0067 = $this->env->getExtension("native_profiler");
        $__internal_a4cd746a939e9ba0d37fa22bc30960aa471ccfd36bb5121a3d069cd54a1b0067->enter($__internal_a4cd746a939e9ba0d37fa22bc30960aa471ccfd36bb5121a3d069cd54a1b0067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a4cd746a939e9ba0d37fa22bc30960aa471ccfd36bb5121a3d069cd54a1b0067->leave($__internal_a4cd746a939e9ba0d37fa22bc30960aa471ccfd36bb5121a3d069cd54a1b0067_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
