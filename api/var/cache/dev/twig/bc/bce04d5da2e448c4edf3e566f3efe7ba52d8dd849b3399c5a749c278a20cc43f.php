<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b5152a339706f99295ef46e3a5d52ea02208d4563fbfa52f80ef99f3a432576f extends Twig_Template
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
        $__internal_acc7c8dd26896ac1b5f4b80c44b7398251e518efad98752b4e07844eb0807a38 = $this->env->getExtension("native_profiler");
        $__internal_acc7c8dd26896ac1b5f4b80c44b7398251e518efad98752b4e07844eb0807a38->enter($__internal_acc7c8dd26896ac1b5f4b80c44b7398251e518efad98752b4e07844eb0807a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_acc7c8dd26896ac1b5f4b80c44b7398251e518efad98752b4e07844eb0807a38->leave($__internal_acc7c8dd26896ac1b5f4b80c44b7398251e518efad98752b4e07844eb0807a38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
