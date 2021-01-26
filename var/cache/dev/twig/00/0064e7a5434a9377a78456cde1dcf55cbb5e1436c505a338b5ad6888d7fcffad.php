<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ca008f78e50f53c223af95807ff988317b38cbe9749cfceb9187a4467fbf74b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eaa425c9e9fe36dcd17137fd5f6e9c0ecc3d19762c8e33b31b83570b4403a598 = $this->env->getExtension("native_profiler");
        $__internal_eaa425c9e9fe36dcd17137fd5f6e9c0ecc3d19762c8e33b31b83570b4403a598->enter($__internal_eaa425c9e9fe36dcd17137fd5f6e9c0ecc3d19762c8e33b31b83570b4403a598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaa425c9e9fe36dcd17137fd5f6e9c0ecc3d19762c8e33b31b83570b4403a598->leave($__internal_eaa425c9e9fe36dcd17137fd5f6e9c0ecc3d19762c8e33b31b83570b4403a598_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_121609a29414476112f5bbdc5b7314d0c8f80c06ca6b907eaf1a982f7c8f5e9a = $this->env->getExtension("native_profiler");
        $__internal_121609a29414476112f5bbdc5b7314d0c8f80c06ca6b907eaf1a982f7c8f5e9a->enter($__internal_121609a29414476112f5bbdc5b7314d0c8f80c06ca6b907eaf1a982f7c8f5e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        ob_start();
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        
        $__internal_121609a29414476112f5bbdc5b7314d0c8f80c06ca6b907eaf1a982f7c8f5e9a->leave($__internal_121609a29414476112f5bbdc5b7314d0c8f80c06ca6b907eaf1a982f7c8f5e9a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 29,  47 => 9,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*         {{ include('@WebProfiler/Icon/ajax.svg') }}*/
/*         <span class="sf-toolbar-value sf-toolbar-ajax-requests">0</span>*/
/*     {% endset %}*/
/* */
/*     {% set text %}*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b class="sf-toolbar-ajax-info"></b>*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <table class="sf-toolbar-ajax-requests">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Method</th>*/
/*                         <th>Status</th>*/
/*                         <th>URL</th>*/
/*                         <th>Time</th>*/
/*                         <th>Profile</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody class="sf-toolbar-ajax-request-list"></tbody>*/
/*             </table>*/
/*         </div>*/
/*     {% endset %}*/
/* */
/*     {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}*/
/* {% endblock %}*/
/* */
