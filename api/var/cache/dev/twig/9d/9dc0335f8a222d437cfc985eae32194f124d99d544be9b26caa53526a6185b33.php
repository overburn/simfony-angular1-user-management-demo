<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_c08fdd1de6cbbe8648aa8560a1590fe8a49868dd6297598724e53ed5874f16d9 extends Twig_Template
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
        $__internal_2ed20f80b38c8e60abe445d292aa36a79dcbdb4df109a9b5fa00c4dbb2b41adb = $this->env->getExtension("native_profiler");
        $__internal_2ed20f80b38c8e60abe445d292aa36a79dcbdb4df109a9b5fa00c4dbb2b41adb->enter($__internal_2ed20f80b38c8e60abe445d292aa36a79dcbdb4df109a9b5fa00c4dbb2b41adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_2ed20f80b38c8e60abe445d292aa36a79dcbdb4df109a9b5fa00c4dbb2b41adb->leave($__internal_2ed20f80b38c8e60abe445d292aa36a79dcbdb4df109a9b5fa00c4dbb2b41adb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
