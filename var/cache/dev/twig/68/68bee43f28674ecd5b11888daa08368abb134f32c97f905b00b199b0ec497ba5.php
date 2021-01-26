<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_69b1958c0a1b8f16c3866639a4960b5c851ef60b54d2baef66712a4795597f76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc09190c57b86317878ba44ac3afeeff1ef273cf7d647cb9f1f6c0720ad12b68 = $this->env->getExtension("native_profiler");
        $__internal_cc09190c57b86317878ba44ac3afeeff1ef273cf7d647cb9f1f6c0720ad12b68->enter($__internal_cc09190c57b86317878ba44ac3afeeff1ef273cf7d647cb9f1f6c0720ad12b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc09190c57b86317878ba44ac3afeeff1ef273cf7d647cb9f1f6c0720ad12b68->leave($__internal_cc09190c57b86317878ba44ac3afeeff1ef273cf7d647cb9f1f6c0720ad12b68_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7467c66c91fa21aef8445c65e1e3c27fc8ce85a8b11c94c40aa8d170bfb99e39 = $this->env->getExtension("native_profiler");
        $__internal_7467c66c91fa21aef8445c65e1e3c27fc8ce85a8b11c94c40aa8d170bfb99e39->enter($__internal_7467c66c91fa21aef8445c65e1e3c27fc8ce85a8b11c94c40aa8d170bfb99e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>";
        }
        // line 9
        $this->displayParentBlock("head", $context, $blocks);
        
        $__internal_7467c66c91fa21aef8445c65e1e3c27fc8ce85a8b11c94c40aa8d170bfb99e39->leave($__internal_7467c66c91fa21aef8445c65e1e3c27fc8ce85a8b11c94c40aa8d170bfb99e39_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cbe7a1fdfcd7867032ba5b2cc188a0c0a8aae5f366ae2c02dad649baebfc8ab5 = $this->env->getExtension("native_profiler");
        $__internal_cbe7a1fdfcd7867032ba5b2cc188a0c0a8aae5f366ae2c02dad649baebfc8ab5->enter($__internal_cbe7a1fdfcd7867032ba5b2cc188a0c0a8aae5f366ae2c02dad649baebfc8ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>";
        }
        // line 21
        echo "    </span>";
        
        $__internal_cbe7a1fdfcd7867032ba5b2cc188a0c0a8aae5f366ae2c02dad649baebfc8ab5->leave($__internal_cbe7a1fdfcd7867032ba5b2cc188a0c0a8aae5f366ae2c02dad649baebfc8ab5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b8735d0247252696f96b488121e113650d0360dfb2f329e3e5062669016ceb59 = $this->env->getExtension("native_profiler");
        $__internal_b8735d0247252696f96b488121e113650d0360dfb2f329e3e5062669016ceb59->enter($__internal_b8735d0247252696f96b488121e113650d0360dfb2f329e3e5062669016ceb59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>";
        }
        
        $__internal_b8735d0247252696f96b488121e113650d0360dfb2f329e3e5062669016ceb59->leave($__internal_b8735d0247252696f96b488121e113650d0360dfb2f329e3e5062669016ceb59_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 33,  102 => 32,  97 => 28,  95 => 27,  93 => 25,  87 => 24,  80 => 21,  75 => 17,  73 => 16,  69 => 14,  64 => 13,  58 => 12,  51 => 9,  46 => 6,  44 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
