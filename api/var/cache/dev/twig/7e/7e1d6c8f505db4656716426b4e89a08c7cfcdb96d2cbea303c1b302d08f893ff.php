<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_397adef59b52f523f94aa888972b7bd93bfdf484b77e9171ac76df226961f73a extends Twig_Template
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
        $__internal_62b2425d59d476a0aefae7695b8b3a60c8f4aecae2fbd2fd016220fcab676f25 = $this->env->getExtension("native_profiler");
        $__internal_62b2425d59d476a0aefae7695b8b3a60c8f4aecae2fbd2fd016220fcab676f25->enter($__internal_62b2425d59d476a0aefae7695b8b3a60c8f4aecae2fbd2fd016220fcab676f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_62b2425d59d476a0aefae7695b8b3a60c8f4aecae2fbd2fd016220fcab676f25->leave($__internal_62b2425d59d476a0aefae7695b8b3a60c8f4aecae2fbd2fd016220fcab676f25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
