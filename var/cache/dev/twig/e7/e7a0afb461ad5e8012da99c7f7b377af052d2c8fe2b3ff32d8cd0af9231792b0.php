<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e48ec29ed23caa521440abdb9c6171496aa72dae3364c5c0388abcb539c765ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_218e5aadf34ba0b8a3cb5665674ae7ce76aece94d6bcf075021e0f00b612388f = $this->env->getExtension("native_profiler");
        $__internal_218e5aadf34ba0b8a3cb5665674ae7ce76aece94d6bcf075021e0f00b612388f->enter($__internal_218e5aadf34ba0b8a3cb5665674ae7ce76aece94d6bcf075021e0f00b612388f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_218e5aadf34ba0b8a3cb5665674ae7ce76aece94d6bcf075021e0f00b612388f->leave($__internal_218e5aadf34ba0b8a3cb5665674ae7ce76aece94d6bcf075021e0f00b612388f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_31fc39b40b98328df99ea110ffdaff9e8c46a16054de9b2d928810a54c5b203a = $this->env->getExtension("native_profiler");
        $__internal_31fc39b40b98328df99ea110ffdaff9e8c46a16054de9b2d928810a54c5b203a->enter($__internal_31fc39b40b98328df99ea110ffdaff9e8c46a16054de9b2d928810a54c5b203a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_31fc39b40b98328df99ea110ffdaff9e8c46a16054de9b2d928810a54c5b203a->leave($__internal_31fc39b40b98328df99ea110ffdaff9e8c46a16054de9b2d928810a54c5b203a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cf42f00c6287118306bc1f9f8c9d925b0a6ccbd86293534a9bc0bb8188d09ed2 = $this->env->getExtension("native_profiler");
        $__internal_cf42f00c6287118306bc1f9f8c9d925b0a6ccbd86293534a9bc0bb8188d09ed2->enter($__internal_cf42f00c6287118306bc1f9f8c9d925b0a6ccbd86293534a9bc0bb8188d09ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>";
        
        $__internal_cf42f00c6287118306bc1f9f8c9d925b0a6ccbd86293534a9bc0bb8188d09ed2->leave($__internal_cf42f00c6287118306bc1f9f8c9d925b0a6ccbd86293534a9bc0bb8188d09ed2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_af0444a03bd48985214f3e124bacd299e2f96823968755d5a55feeb8a6d5bdfe = $this->env->getExtension("native_profiler");
        $__internal_af0444a03bd48985214f3e124bacd299e2f96823968755d5a55feeb8a6d5bdfe->enter($__internal_af0444a03bd48985214f3e124bacd299e2f96823968755d5a55feeb8a6d5bdfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        
        $__internal_af0444a03bd48985214f3e124bacd299e2f96823968755d5a55feeb8a6d5bdfe->leave($__internal_af0444a03bd48985214f3e124bacd299e2f96823968755d5a55feeb8a6d5bdfe_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 13,  66 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
