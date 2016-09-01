<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_f940a2e9603482b4333cbf23a674a455d34043864d612f682893b352b424145c extends Twig_Template
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
        $__internal_5a65f672b1dc089df0098322ae2d55b218b0b0a45eae6514c08aa1b55a617bb5 = $this->env->getExtension("native_profiler");
        $__internal_5a65f672b1dc089df0098322ae2d55b218b0b0a45eae6514c08aa1b55a617bb5->enter($__internal_5a65f672b1dc089df0098322ae2d55b218b0b0a45eae6514c08aa1b55a617bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5a65f672b1dc089df0098322ae2d55b218b0b0a45eae6514c08aa1b55a617bb5->leave($__internal_5a65f672b1dc089df0098322ae2d55b218b0b0a45eae6514c08aa1b55a617bb5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
