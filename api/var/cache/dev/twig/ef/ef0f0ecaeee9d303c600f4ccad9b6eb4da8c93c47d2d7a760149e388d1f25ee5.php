<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e67128180a952c527b84c8583709ff8943ce8849d339dff4610839cdb778b995 extends Twig_Template
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
        $__internal_2dc6088ea6879adf4abddaa6b96dbdb25e231df3c5978c964fe0923f780a4e08 = $this->env->getExtension("native_profiler");
        $__internal_2dc6088ea6879adf4abddaa6b96dbdb25e231df3c5978c964fe0923f780a4e08->enter($__internal_2dc6088ea6879adf4abddaa6b96dbdb25e231df3c5978c964fe0923f780a4e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2dc6088ea6879adf4abddaa6b96dbdb25e231df3c5978c964fe0923f780a4e08->leave($__internal_2dc6088ea6879adf4abddaa6b96dbdb25e231df3c5978c964fe0923f780a4e08_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
