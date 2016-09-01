<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_7a8295baf07d56b561736a3862de1df93f3251b1c082bc9edbfa1dc73f4d7b7e extends Twig_Template
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
        $__internal_b4ca9b9ea9097ff12cf1009aaffc2649b56a0364e73f551c82c16c8863c4e316 = $this->env->getExtension("native_profiler");
        $__internal_b4ca9b9ea9097ff12cf1009aaffc2649b56a0364e73f551c82c16c8863c4e316->enter($__internal_b4ca9b9ea9097ff12cf1009aaffc2649b56a0364e73f551c82c16c8863c4e316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b4ca9b9ea9097ff12cf1009aaffc2649b56a0364e73f551c82c16c8863c4e316->leave($__internal_b4ca9b9ea9097ff12cf1009aaffc2649b56a0364e73f551c82c16c8863c4e316_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
