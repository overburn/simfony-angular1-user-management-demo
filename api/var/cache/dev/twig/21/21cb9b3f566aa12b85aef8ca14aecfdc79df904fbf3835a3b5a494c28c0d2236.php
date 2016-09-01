<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_e7c6e9185fb808f8eba644a5e93e0cc09d2ac477af923ec3de12ba73c31de7f8 extends Twig_Template
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
        $__internal_b9f82e253643698576ac6f249ff785e001094e9772f0471d0fe4fa7665a47f20 = $this->env->getExtension("native_profiler");
        $__internal_b9f82e253643698576ac6f249ff785e001094e9772f0471d0fe4fa7665a47f20->enter($__internal_b9f82e253643698576ac6f249ff785e001094e9772f0471d0fe4fa7665a47f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b9f82e253643698576ac6f249ff785e001094e9772f0471d0fe4fa7665a47f20->leave($__internal_b9f82e253643698576ac6f249ff785e001094e9772f0471d0fe4fa7665a47f20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
