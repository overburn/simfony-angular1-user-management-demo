<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_47e4b48a0b40886144cfafc2d93b0d2af0a2623defe1a21f32f03c643d818ad1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_c10995adf1994bb649ac42c922b0e589e928f83e645d3e6418ab34203773c8cb = $this->env->getExtension("native_profiler");
        $__internal_c10995adf1994bb649ac42c922b0e589e928f83e645d3e6418ab34203773c8cb->enter($__internal_c10995adf1994bb649ac42c922b0e589e928f83e645d3e6418ab34203773c8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c10995adf1994bb649ac42c922b0e589e928f83e645d3e6418ab34203773c8cb->leave($__internal_c10995adf1994bb649ac42c922b0e589e928f83e645d3e6418ab34203773c8cb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e2a293fec0d404ca31232b4b9e4ae7e5d2e13d4144586f723c3e673123fdd02b = $this->env->getExtension("native_profiler");
        $__internal_e2a293fec0d404ca31232b4b9e4ae7e5d2e13d4144586f723c3e673123fdd02b->enter($__internal_e2a293fec0d404ca31232b4b9e4ae7e5d2e13d4144586f723c3e673123fdd02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e2a293fec0d404ca31232b4b9e4ae7e5d2e13d4144586f723c3e673123fdd02b->leave($__internal_e2a293fec0d404ca31232b4b9e4ae7e5d2e13d4144586f723c3e673123fdd02b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a89f6aa63fb0729d7619105c3584340969a7f6f515af56b0e17f7c618a0df556 = $this->env->getExtension("native_profiler");
        $__internal_a89f6aa63fb0729d7619105c3584340969a7f6f515af56b0e17f7c618a0df556->enter($__internal_a89f6aa63fb0729d7619105c3584340969a7f6f515af56b0e17f7c618a0df556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a89f6aa63fb0729d7619105c3584340969a7f6f515af56b0e17f7c618a0df556->leave($__internal_a89f6aa63fb0729d7619105c3584340969a7f6f515af56b0e17f7c618a0df556_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_540177e0efc44620aea9764f938d662ef7ff8547f450def0eba079fc7b8abbf0 = $this->env->getExtension("native_profiler");
        $__internal_540177e0efc44620aea9764f938d662ef7ff8547f450def0eba079fc7b8abbf0->enter($__internal_540177e0efc44620aea9764f938d662ef7ff8547f450def0eba079fc7b8abbf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_540177e0efc44620aea9764f938d662ef7ff8547f450def0eba079fc7b8abbf0->leave($__internal_540177e0efc44620aea9764f938d662ef7ff8547f450def0eba079fc7b8abbf0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
