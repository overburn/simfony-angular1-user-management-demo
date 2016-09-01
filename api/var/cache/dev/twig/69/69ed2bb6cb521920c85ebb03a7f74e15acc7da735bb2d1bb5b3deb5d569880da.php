<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_fb95f1247b250917083bfed793156bc160c72b20dcb8f024faefee01191561f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b667f3c27a675c491a61ac256f09ca543b5a65596daa4279ec4b4d7d8df62800 = $this->env->getExtension("native_profiler");
        $__internal_b667f3c27a675c491a61ac256f09ca543b5a65596daa4279ec4b4d7d8df62800->enter($__internal_b667f3c27a675c491a61ac256f09ca543b5a65596daa4279ec4b4d7d8df62800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b667f3c27a675c491a61ac256f09ca543b5a65596daa4279ec4b4d7d8df62800->leave($__internal_b667f3c27a675c491a61ac256f09ca543b5a65596daa4279ec4b4d7d8df62800_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d837d4f3d01e99dccd38aa07c55ebc27bd561d511d4424fbee6226857cd815b = $this->env->getExtension("native_profiler");
        $__internal_8d837d4f3d01e99dccd38aa07c55ebc27bd561d511d4424fbee6226857cd815b->enter($__internal_8d837d4f3d01e99dccd38aa07c55ebc27bd561d511d4424fbee6226857cd815b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8d837d4f3d01e99dccd38aa07c55ebc27bd561d511d4424fbee6226857cd815b->leave($__internal_8d837d4f3d01e99dccd38aa07c55ebc27bd561d511d4424fbee6226857cd815b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
