<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_6fb2a29599ab41aded536d70cad57da210fc6280c32015ea16df76eedc51f53a extends Twig_Template
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
        $__internal_007775ec116fcc0026871a08174730ec445a858eee90c6254cfafe43369bbc24 = $this->env->getExtension("native_profiler");
        $__internal_007775ec116fcc0026871a08174730ec445a858eee90c6254cfafe43369bbc24->enter($__internal_007775ec116fcc0026871a08174730ec445a858eee90c6254cfafe43369bbc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_007775ec116fcc0026871a08174730ec445a858eee90c6254cfafe43369bbc24->leave($__internal_007775ec116fcc0026871a08174730ec445a858eee90c6254cfafe43369bbc24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
