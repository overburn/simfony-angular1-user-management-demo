<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_b720d5cec8f14fc9a7c186871c37cdcfd1f1d5a8e0450f19117e9cebd46c0e63 extends Twig_Template
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
        $__internal_ac2797e9b23f90774561cac6afe7e1dff4e1458746fd0aaa602d43d32204ce51 = $this->env->getExtension("native_profiler");
        $__internal_ac2797e9b23f90774561cac6afe7e1dff4e1458746fd0aaa602d43d32204ce51->enter($__internal_ac2797e9b23f90774561cac6afe7e1dff4e1458746fd0aaa602d43d32204ce51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_ac2797e9b23f90774561cac6afe7e1dff4e1458746fd0aaa602d43d32204ce51->leave($__internal_ac2797e9b23f90774561cac6afe7e1dff4e1458746fd0aaa602d43d32204ce51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
