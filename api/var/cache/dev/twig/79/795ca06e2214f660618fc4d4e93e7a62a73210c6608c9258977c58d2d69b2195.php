<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_47e4b48a0b40886144cfafc2d93b0d2af0a2623defe1a21f32f03c643d818ad1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d459bf773fa2b7f6b8d8e184190a4618eaf5a80f7eb7efab8c0ff8e4f3fa6ee4 = $this->env->getExtension("native_profiler");
        $__internal_d459bf773fa2b7f6b8d8e184190a4618eaf5a80f7eb7efab8c0ff8e4f3fa6ee4->enter($__internal_d459bf773fa2b7f6b8d8e184190a4618eaf5a80f7eb7efab8c0ff8e4f3fa6ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d459bf773fa2b7f6b8d8e184190a4618eaf5a80f7eb7efab8c0ff8e4f3fa6ee4->leave($__internal_d459bf773fa2b7f6b8d8e184190a4618eaf5a80f7eb7efab8c0ff8e4f3fa6ee4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_74fa3b43f1cae9dd3f99df344f017b3c8e84e7f96a0824338595d15ef29613b2 = $this->env->getExtension("native_profiler");
        $__internal_74fa3b43f1cae9dd3f99df344f017b3c8e84e7f96a0824338595d15ef29613b2->enter($__internal_74fa3b43f1cae9dd3f99df344f017b3c8e84e7f96a0824338595d15ef29613b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_74fa3b43f1cae9dd3f99df344f017b3c8e84e7f96a0824338595d15ef29613b2->leave($__internal_74fa3b43f1cae9dd3f99df344f017b3c8e84e7f96a0824338595d15ef29613b2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2a85fd769b657abe07fff783457af6a3066c1748c3ad39408b784679133dd4e = $this->env->getExtension("native_profiler");
        $__internal_c2a85fd769b657abe07fff783457af6a3066c1748c3ad39408b784679133dd4e->enter($__internal_c2a85fd769b657abe07fff783457af6a3066c1748c3ad39408b784679133dd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c2a85fd769b657abe07fff783457af6a3066c1748c3ad39408b784679133dd4e->leave($__internal_c2a85fd769b657abe07fff783457af6a3066c1748c3ad39408b784679133dd4e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfa2b3e030b00cd46ebfdedf76385f0052e0d6cc54339f980f23062ba1bd9a9c = $this->env->getExtension("native_profiler");
        $__internal_dfa2b3e030b00cd46ebfdedf76385f0052e0d6cc54339f980f23062ba1bd9a9c->enter($__internal_dfa2b3e030b00cd46ebfdedf76385f0052e0d6cc54339f980f23062ba1bd9a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_dfa2b3e030b00cd46ebfdedf76385f0052e0d6cc54339f980f23062ba1bd9a9c->leave($__internal_dfa2b3e030b00cd46ebfdedf76385f0052e0d6cc54339f980f23062ba1bd9a9c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
