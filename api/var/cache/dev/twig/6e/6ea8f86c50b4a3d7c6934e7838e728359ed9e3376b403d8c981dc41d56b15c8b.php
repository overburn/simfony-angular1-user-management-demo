<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_49b3497a33ccd50cb826ebb46b2c6fcace966e4fe4ff9ef78a46e171f8264375 extends Twig_Template
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
        $__internal_c57419bbd3cec6b86ee96cc22afa62889812ced4479be2a74f4a0027c8faad4d = $this->env->getExtension("native_profiler");
        $__internal_c57419bbd3cec6b86ee96cc22afa62889812ced4479be2a74f4a0027c8faad4d->enter($__internal_c57419bbd3cec6b86ee96cc22afa62889812ced4479be2a74f4a0027c8faad4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c57419bbd3cec6b86ee96cc22afa62889812ced4479be2a74f4a0027c8faad4d->leave($__internal_c57419bbd3cec6b86ee96cc22afa62889812ced4479be2a74f4a0027c8faad4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
