<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_50dd992f48a0e1eaf511ce4c8eb3a08370add20bef2f6e18950374294fbc1701 extends Twig_Template
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
        $__internal_ccf8a82cec894f2c71f7dd3fcb87739a0cc776a7dcb8f21ddfee8a6562e0f27a = $this->env->getExtension("native_profiler");
        $__internal_ccf8a82cec894f2c71f7dd3fcb87739a0cc776a7dcb8f21ddfee8a6562e0f27a->enter($__internal_ccf8a82cec894f2c71f7dd3fcb87739a0cc776a7dcb8f21ddfee8a6562e0f27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ccf8a82cec894f2c71f7dd3fcb87739a0cc776a7dcb8f21ddfee8a6562e0f27a->leave($__internal_ccf8a82cec894f2c71f7dd3fcb87739a0cc776a7dcb8f21ddfee8a6562e0f27a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
