<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_3f74fdd37629c0007130d1f87e03935e52c621fa1c5a329e026b0c323125c590 extends Twig_Template
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
        $__internal_bdc751fb8f2e79fc1b32d5dce6542f4ba0204b006e455f676b6ada86d7f9d7f3 = $this->env->getExtension("native_profiler");
        $__internal_bdc751fb8f2e79fc1b32d5dce6542f4ba0204b006e455f676b6ada86d7f9d7f3->enter($__internal_bdc751fb8f2e79fc1b32d5dce6542f4ba0204b006e455f676b6ada86d7f9d7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_bdc751fb8f2e79fc1b32d5dce6542f4ba0204b006e455f676b6ada86d7f9d7f3->leave($__internal_bdc751fb8f2e79fc1b32d5dce6542f4ba0204b006e455f676b6ada86d7f9d7f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
