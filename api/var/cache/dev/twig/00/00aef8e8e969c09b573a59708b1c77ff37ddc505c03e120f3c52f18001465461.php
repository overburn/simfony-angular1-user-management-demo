<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_6de5c7b1bf2461c029c416694d707dd92bd9f27cfb201e87ee9dbf79784b7162 extends Twig_Template
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
        $__internal_eb2170e41a1d24e3a1380784e3124af3a15bc4db964171f69a797429bcb1a43e = $this->env->getExtension("native_profiler");
        $__internal_eb2170e41a1d24e3a1380784e3124af3a15bc4db964171f69a797429bcb1a43e->enter($__internal_eb2170e41a1d24e3a1380784e3124af3a15bc4db964171f69a797429bcb1a43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_eb2170e41a1d24e3a1380784e3124af3a15bc4db964171f69a797429bcb1a43e->leave($__internal_eb2170e41a1d24e3a1380784e3124af3a15bc4db964171f69a797429bcb1a43e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
