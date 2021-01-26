<?php

/* main/homepage.html.twig */
class __TwigTemplate_602074c49d8f210958a6a80cc6005a18fab55059671553933fcd72eb0f1f0183 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/homepage.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7eaded053183072aac6109144671ee957e4a526d3408b6eb3e2e1e18d9380985 = $this->env->getExtension("native_profiler");
        $__internal_7eaded053183072aac6109144671ee957e4a526d3408b6eb3e2e1e18d9380985->enter($__internal_7eaded053183072aac6109144671ee957e4a526d3408b6eb3e2e1e18d9380985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7eaded053183072aac6109144671ee957e4a526d3408b6eb3e2e1e18d9380985->leave($__internal_7eaded053183072aac6109144671ee957e4a526d3408b6eb3e2e1e18d9380985_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_36b3eae98ec2650d749931af8de672f9fc58769948651a576595f9426f2eecc1 = $this->env->getExtension("native_profiler");
        $__internal_36b3eae98ec2650d749931af8de672f9fc58769948651a576595f9426f2eecc1->enter($__internal_36b3eae98ec2650d749931af8de672f9fc58769948651a576595f9426f2eecc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"page-header text-center\">Welcome Aquanauts!</h1>";
        
        $__internal_36b3eae98ec2650d749931af8de672f9fc58769948651a576595f9426f2eecc1->leave($__internal_36b3eae98ec2650d749931af8de672f9fc58769948651a576595f9426f2eecc1_prof);

    }

    public function getTemplateName()
    {
        return "main/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1 class="page-header text-center">Welcome Aquanauts!</h1>*/
/* {% endblock %}*/
/* */
