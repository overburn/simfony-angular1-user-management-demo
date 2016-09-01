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
        $__internal_4cc8785b161cce967cadb7e662e9665ff79d718f75890863c7bc7243d1450f0d = $this->env->getExtension("native_profiler");
        $__internal_4cc8785b161cce967cadb7e662e9665ff79d718f75890863c7bc7243d1450f0d->enter($__internal_4cc8785b161cce967cadb7e662e9665ff79d718f75890863c7bc7243d1450f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cc8785b161cce967cadb7e662e9665ff79d718f75890863c7bc7243d1450f0d->leave($__internal_4cc8785b161cce967cadb7e662e9665ff79d718f75890863c7bc7243d1450f0d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_040e1e889b545c1a17e61a3413e04fffd37a4ab80ff84bb347c0b8906e3d54d9 = $this->env->getExtension("native_profiler");
        $__internal_040e1e889b545c1a17e61a3413e04fffd37a4ab80ff84bb347c0b8906e3d54d9->enter($__internal_040e1e889b545c1a17e61a3413e04fffd37a4ab80ff84bb347c0b8906e3d54d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_040e1e889b545c1a17e61a3413e04fffd37a4ab80ff84bb347c0b8906e3d54d9->leave($__internal_040e1e889b545c1a17e61a3413e04fffd37a4ab80ff84bb347c0b8906e3d54d9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e40844affbc19959c013ff072dd87decca5bf25afe7ffd8dbd973522ced8f74e = $this->env->getExtension("native_profiler");
        $__internal_e40844affbc19959c013ff072dd87decca5bf25afe7ffd8dbd973522ced8f74e->enter($__internal_e40844affbc19959c013ff072dd87decca5bf25afe7ffd8dbd973522ced8f74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e40844affbc19959c013ff072dd87decca5bf25afe7ffd8dbd973522ced8f74e->leave($__internal_e40844affbc19959c013ff072dd87decca5bf25afe7ffd8dbd973522ced8f74e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bc4a0082ef3fc34c001334a5dde5f248a6e16414e12cd3dd52524ad487f8880 = $this->env->getExtension("native_profiler");
        $__internal_7bc4a0082ef3fc34c001334a5dde5f248a6e16414e12cd3dd52524ad487f8880->enter($__internal_7bc4a0082ef3fc34c001334a5dde5f248a6e16414e12cd3dd52524ad487f8880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7bc4a0082ef3fc34c001334a5dde5f248a6e16414e12cd3dd52524ad487f8880->leave($__internal_7bc4a0082ef3fc34c001334a5dde5f248a6e16414e12cd3dd52524ad487f8880_prof);

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
