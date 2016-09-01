<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f0e5055a72c408db04430c3c82926b79e30e56c236ce4e97b277a159779b4afb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c66a609b22ec1cb23a506e33a9976ead87e327c9782ea2e5ed5239662fc8e31 = $this->env->getExtension("native_profiler");
        $__internal_6c66a609b22ec1cb23a506e33a9976ead87e327c9782ea2e5ed5239662fc8e31->enter($__internal_6c66a609b22ec1cb23a506e33a9976ead87e327c9782ea2e5ed5239662fc8e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c66a609b22ec1cb23a506e33a9976ead87e327c9782ea2e5ed5239662fc8e31->leave($__internal_6c66a609b22ec1cb23a506e33a9976ead87e327c9782ea2e5ed5239662fc8e31_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_db36b478507d5f3c7ef65e2089c6358a964e58c424a189b2b2a05943f69fcf51 = $this->env->getExtension("native_profiler");
        $__internal_db36b478507d5f3c7ef65e2089c6358a964e58c424a189b2b2a05943f69fcf51->enter($__internal_db36b478507d5f3c7ef65e2089c6358a964e58c424a189b2b2a05943f69fcf51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_db36b478507d5f3c7ef65e2089c6358a964e58c424a189b2b2a05943f69fcf51->leave($__internal_db36b478507d5f3c7ef65e2089c6358a964e58c424a189b2b2a05943f69fcf51_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7d1b9aef96002e3d013e0cb78d60969f24c65787fcf3fa145f8b30a60c23ff8c = $this->env->getExtension("native_profiler");
        $__internal_7d1b9aef96002e3d013e0cb78d60969f24c65787fcf3fa145f8b30a60c23ff8c->enter($__internal_7d1b9aef96002e3d013e0cb78d60969f24c65787fcf3fa145f8b30a60c23ff8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7d1b9aef96002e3d013e0cb78d60969f24c65787fcf3fa145f8b30a60c23ff8c->leave($__internal_7d1b9aef96002e3d013e0cb78d60969f24c65787fcf3fa145f8b30a60c23ff8c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_36a9fbef88572f1c7f43eef808ad9e84d3a188d598cd6e5be2e1bd847df1ea64 = $this->env->getExtension("native_profiler");
        $__internal_36a9fbef88572f1c7f43eef808ad9e84d3a188d598cd6e5be2e1bd847df1ea64->enter($__internal_36a9fbef88572f1c7f43eef808ad9e84d3a188d598cd6e5be2e1bd847df1ea64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_36a9fbef88572f1c7f43eef808ad9e84d3a188d598cd6e5be2e1bd847df1ea64->leave($__internal_36a9fbef88572f1c7f43eef808ad9e84d3a188d598cd6e5be2e1bd847df1ea64_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
