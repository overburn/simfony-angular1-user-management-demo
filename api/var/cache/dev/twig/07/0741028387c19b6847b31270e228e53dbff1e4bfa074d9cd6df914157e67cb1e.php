<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d926ccb48dc3292f167bc1f4b4a1962b1a3bf0a42106bdbffed23781b0df39c5 extends Twig_Template
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
        $__internal_850d1314d7b485cff479be32011462c1d826e2274d06ff1d01af53384d01b360 = $this->env->getExtension("native_profiler");
        $__internal_850d1314d7b485cff479be32011462c1d826e2274d06ff1d01af53384d01b360->enter($__internal_850d1314d7b485cff479be32011462c1d826e2274d06ff1d01af53384d01b360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_850d1314d7b485cff479be32011462c1d826e2274d06ff1d01af53384d01b360->leave($__internal_850d1314d7b485cff479be32011462c1d826e2274d06ff1d01af53384d01b360_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
