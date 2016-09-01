<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_8a76ffd3e8dfe56521870621ae7892524b46a12187cd3a16eb511161d16e166f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_dbd39f8f8635e3747648c52b7d0b42e5be594338e28523384d00f381b163a11b = $this->env->getExtension("native_profiler");
        $__internal_dbd39f8f8635e3747648c52b7d0b42e5be594338e28523384d00f381b163a11b->enter($__internal_dbd39f8f8635e3747648c52b7d0b42e5be594338e28523384d00f381b163a11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbd39f8f8635e3747648c52b7d0b42e5be594338e28523384d00f381b163a11b->leave($__internal_dbd39f8f8635e3747648c52b7d0b42e5be594338e28523384d00f381b163a11b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e679738be0731614e84c55de03c9ccf1d9fea6a4cb805b4a885692c308d7831 = $this->env->getExtension("native_profiler");
        $__internal_6e679738be0731614e84c55de03c9ccf1d9fea6a4cb805b4a885692c308d7831->enter($__internal_6e679738be0731614e84c55de03c9ccf1d9fea6a4cb805b4a885692c308d7831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6e679738be0731614e84c55de03c9ccf1d9fea6a4cb805b4a885692c308d7831->leave($__internal_6e679738be0731614e84c55de03c9ccf1d9fea6a4cb805b4a885692c308d7831_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb855937a3fbf14331e8e68d1f666165c0c031be0015cedf2be3c34ec3088ad0 = $this->env->getExtension("native_profiler");
        $__internal_fb855937a3fbf14331e8e68d1f666165c0c031be0015cedf2be3c34ec3088ad0->enter($__internal_fb855937a3fbf14331e8e68d1f666165c0c031be0015cedf2be3c34ec3088ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_fb855937a3fbf14331e8e68d1f666165c0c031be0015cedf2be3c34ec3088ad0->leave($__internal_fb855937a3fbf14331e8e68d1f666165c0c031be0015cedf2be3c34ec3088ad0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
