<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_be3e89a95764d5640343099fc9f3850396d6359dd9c5e6cf53881b027820f4da extends Twig_Template
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
        $__internal_7d348830ec1c1035f6c9711be831b3cde95c86c064fd38852f2d850d4d26d4a7 = $this->env->getExtension("native_profiler");
        $__internal_7d348830ec1c1035f6c9711be831b3cde95c86c064fd38852f2d850d4d26d4a7->enter($__internal_7d348830ec1c1035f6c9711be831b3cde95c86c064fd38852f2d850d4d26d4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_7d348830ec1c1035f6c9711be831b3cde95c86c064fd38852f2d850d4d26d4a7->leave($__internal_7d348830ec1c1035f6c9711be831b3cde95c86c064fd38852f2d850d4d26d4a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
