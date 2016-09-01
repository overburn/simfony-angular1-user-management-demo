<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0bd0505578d91975a0b421cb1cc935784826638fd1b9b8a0baab830e05c13a25 extends Twig_Template
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
        $__internal_831cdaf49486b6ecd6004e14816b65d5bb289a6be4ab4f84b043ae5e3e610872 = $this->env->getExtension("native_profiler");
        $__internal_831cdaf49486b6ecd6004e14816b65d5bb289a6be4ab4f84b043ae5e3e610872->enter($__internal_831cdaf49486b6ecd6004e14816b65d5bb289a6be4ab4f84b043ae5e3e610872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_831cdaf49486b6ecd6004e14816b65d5bb289a6be4ab4f84b043ae5e3e610872->leave($__internal_831cdaf49486b6ecd6004e14816b65d5bb289a6be4ab4f84b043ae5e3e610872_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
