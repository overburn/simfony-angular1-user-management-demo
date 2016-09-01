<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_b7b6ef2a636fe50e695d194698832847ef921ee0414cb07a2640d507862c5924 extends Twig_Template
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
        $__internal_732e4ee0c698c6fb161993a159a8a26ef7a60f624f93f838d09d41249b7c3537 = $this->env->getExtension("native_profiler");
        $__internal_732e4ee0c698c6fb161993a159a8a26ef7a60f624f93f838d09d41249b7c3537->enter($__internal_732e4ee0c698c6fb161993a159a8a26ef7a60f624f93f838d09d41249b7c3537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_732e4ee0c698c6fb161993a159a8a26ef7a60f624f93f838d09d41249b7c3537->leave($__internal_732e4ee0c698c6fb161993a159a8a26ef7a60f624f93f838d09d41249b7c3537_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
