<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_ee3d5c61c41a692513664dc15f131239de67e4008377f3ba7511416dbc5ba4e1 extends Twig_Template
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
        $__internal_45f377d2b65994b512d9eac6fa285db39851977a8b2721ba6dcc576aa324577d = $this->env->getExtension("native_profiler");
        $__internal_45f377d2b65994b512d9eac6fa285db39851977a8b2721ba6dcc576aa324577d->enter($__internal_45f377d2b65994b512d9eac6fa285db39851977a8b2721ba6dcc576aa324577d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_45f377d2b65994b512d9eac6fa285db39851977a8b2721ba6dcc576aa324577d->leave($__internal_45f377d2b65994b512d9eac6fa285db39851977a8b2721ba6dcc576aa324577d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
