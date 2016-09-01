<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_69fa6683506a37e8ff709b7d46fbe0a9cbc2e4d3ffa3d24b687c5717ff954b19 extends Twig_Template
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
        $__internal_3e87da196b11706a1074181086a7f89fe4a14a811bdcb7be86cd22241e438e7a = $this->env->getExtension("native_profiler");
        $__internal_3e87da196b11706a1074181086a7f89fe4a14a811bdcb7be86cd22241e438e7a->enter($__internal_3e87da196b11706a1074181086a7f89fe4a14a811bdcb7be86cd22241e438e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_3e87da196b11706a1074181086a7f89fe4a14a811bdcb7be86cd22241e438e7a->leave($__internal_3e87da196b11706a1074181086a7f89fe4a14a811bdcb7be86cd22241e438e7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
