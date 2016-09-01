<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f0e5055a72c408db04430c3c82926b79e30e56c236ce4e97b277a159779b4afb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_d65a88a6e3299b1eb25aea463b733accc5c181f772c0cdc65eaccbca50836bce = $this->env->getExtension("native_profiler");
        $__internal_d65a88a6e3299b1eb25aea463b733accc5c181f772c0cdc65eaccbca50836bce->enter($__internal_d65a88a6e3299b1eb25aea463b733accc5c181f772c0cdc65eaccbca50836bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d65a88a6e3299b1eb25aea463b733accc5c181f772c0cdc65eaccbca50836bce->leave($__internal_d65a88a6e3299b1eb25aea463b733accc5c181f772c0cdc65eaccbca50836bce_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_44a55dfa95fb3249be2a74d94bbf36b7c55da8a27811360a8110230a1c37d0c8 = $this->env->getExtension("native_profiler");
        $__internal_44a55dfa95fb3249be2a74d94bbf36b7c55da8a27811360a8110230a1c37d0c8->enter($__internal_44a55dfa95fb3249be2a74d94bbf36b7c55da8a27811360a8110230a1c37d0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_44a55dfa95fb3249be2a74d94bbf36b7c55da8a27811360a8110230a1c37d0c8->leave($__internal_44a55dfa95fb3249be2a74d94bbf36b7c55da8a27811360a8110230a1c37d0c8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9979a0adfd440005bdfec414e9367f3c2b6d84e1035d42c7c902efed2b33b100 = $this->env->getExtension("native_profiler");
        $__internal_9979a0adfd440005bdfec414e9367f3c2b6d84e1035d42c7c902efed2b33b100->enter($__internal_9979a0adfd440005bdfec414e9367f3c2b6d84e1035d42c7c902efed2b33b100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9979a0adfd440005bdfec414e9367f3c2b6d84e1035d42c7c902efed2b33b100->leave($__internal_9979a0adfd440005bdfec414e9367f3c2b6d84e1035d42c7c902efed2b33b100_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f1888146badea7a98a69127e2adf7ba0e0b1165ebe9f5f08551dc22f147676d = $this->env->getExtension("native_profiler");
        $__internal_9f1888146badea7a98a69127e2adf7ba0e0b1165ebe9f5f08551dc22f147676d->enter($__internal_9f1888146badea7a98a69127e2adf7ba0e0b1165ebe9f5f08551dc22f147676d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9f1888146badea7a98a69127e2adf7ba0e0b1165ebe9f5f08551dc22f147676d->leave($__internal_9f1888146badea7a98a69127e2adf7ba0e0b1165ebe9f5f08551dc22f147676d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
