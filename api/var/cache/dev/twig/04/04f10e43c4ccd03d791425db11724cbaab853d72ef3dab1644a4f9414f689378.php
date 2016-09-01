<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_fe51ea6bf40d732f2336fc974228cc56256e2cdd737c5d12af1637abaa310672 extends Twig_Template
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
        $__internal_dcaaa44fe35282f9ef073810bebd28b6a650a5a4ee9b7863dea1716af896e94f = $this->env->getExtension("native_profiler");
        $__internal_dcaaa44fe35282f9ef073810bebd28b6a650a5a4ee9b7863dea1716af896e94f->enter($__internal_dcaaa44fe35282f9ef073810bebd28b6a650a5a4ee9b7863dea1716af896e94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_dcaaa44fe35282f9ef073810bebd28b6a650a5a4ee9b7863dea1716af896e94f->leave($__internal_dcaaa44fe35282f9ef073810bebd28b6a650a5a4ee9b7863dea1716af896e94f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
