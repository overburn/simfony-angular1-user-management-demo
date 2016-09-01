<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_34ec882eaaaf3a188a57c3adce10f204e9a18eff0013fb85dcce1554fb7d3f64 extends Twig_Template
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
        $__internal_b9270d9f8e60660ab29023d95d2a6af3712a9fbd859e344f371bfed18ced865d = $this->env->getExtension("native_profiler");
        $__internal_b9270d9f8e60660ab29023d95d2a6af3712a9fbd859e344f371bfed18ced865d->enter($__internal_b9270d9f8e60660ab29023d95d2a6af3712a9fbd859e344f371bfed18ced865d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b9270d9f8e60660ab29023d95d2a6af3712a9fbd859e344f371bfed18ced865d->leave($__internal_b9270d9f8e60660ab29023d95d2a6af3712a9fbd859e344f371bfed18ced865d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
