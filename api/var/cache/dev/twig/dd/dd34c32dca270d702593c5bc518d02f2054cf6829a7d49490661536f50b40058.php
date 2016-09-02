<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5ef062554a155eb02eeebd44aa1575b78ba4db458aae69992d4434718cd4ca12 extends Twig_Template
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
        $__internal_2a17e4742b3eb9cc00693c5960986d5d3176cdeea2a05d2e4bdc26f3e15e4234 = $this->env->getExtension("native_profiler");
        $__internal_2a17e4742b3eb9cc00693c5960986d5d3176cdeea2a05d2e4bdc26f3e15e4234->enter($__internal_2a17e4742b3eb9cc00693c5960986d5d3176cdeea2a05d2e4bdc26f3e15e4234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a17e4742b3eb9cc00693c5960986d5d3176cdeea2a05d2e4bdc26f3e15e4234->leave($__internal_2a17e4742b3eb9cc00693c5960986d5d3176cdeea2a05d2e4bdc26f3e15e4234_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f79a55ca853971986946908902e8dd16342ee5cdff352deee3e179f7d996ba43 = $this->env->getExtension("native_profiler");
        $__internal_f79a55ca853971986946908902e8dd16342ee5cdff352deee3e179f7d996ba43->enter($__internal_f79a55ca853971986946908902e8dd16342ee5cdff352deee3e179f7d996ba43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f79a55ca853971986946908902e8dd16342ee5cdff352deee3e179f7d996ba43->leave($__internal_f79a55ca853971986946908902e8dd16342ee5cdff352deee3e179f7d996ba43_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2e08653894af42eea964378176a796954c616e43eed280cc229ad14d813c702 = $this->env->getExtension("native_profiler");
        $__internal_d2e08653894af42eea964378176a796954c616e43eed280cc229ad14d813c702->enter($__internal_d2e08653894af42eea964378176a796954c616e43eed280cc229ad14d813c702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d2e08653894af42eea964378176a796954c616e43eed280cc229ad14d813c702->leave($__internal_d2e08653894af42eea964378176a796954c616e43eed280cc229ad14d813c702_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d66c480a4342b54beeeccd3291e84a6e7e82d55a3fbdcd8d1749834cc85fecf = $this->env->getExtension("native_profiler");
        $__internal_0d66c480a4342b54beeeccd3291e84a6e7e82d55a3fbdcd8d1749834cc85fecf->enter($__internal_0d66c480a4342b54beeeccd3291e84a6e7e82d55a3fbdcd8d1749834cc85fecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0d66c480a4342b54beeeccd3291e84a6e7e82d55a3fbdcd8d1749834cc85fecf->leave($__internal_0d66c480a4342b54beeeccd3291e84a6e7e82d55a3fbdcd8d1749834cc85fecf_prof);

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
