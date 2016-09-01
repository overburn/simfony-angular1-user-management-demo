<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_1b3a3922514d3a93cdb5d110d13eb58837a1c0da74c7608e827126180aa2c7ce extends Twig_Template
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
        $__internal_601ca1c0333184a3c165630763fb709d506e2eec8476844c10fc3da56730a7b3 = $this->env->getExtension("native_profiler");
        $__internal_601ca1c0333184a3c165630763fb709d506e2eec8476844c10fc3da56730a7b3->enter($__internal_601ca1c0333184a3c165630763fb709d506e2eec8476844c10fc3da56730a7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_601ca1c0333184a3c165630763fb709d506e2eec8476844c10fc3da56730a7b3->leave($__internal_601ca1c0333184a3c165630763fb709d506e2eec8476844c10fc3da56730a7b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
