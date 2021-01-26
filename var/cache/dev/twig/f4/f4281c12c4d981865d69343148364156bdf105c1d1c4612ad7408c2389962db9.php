<?php

/* @WebProfiler/Collector/memory.html.twig */
class __TwigTemplate_14bf4627ce5f30498bd843b2b955b9087261b3e8822cfce388adf09ba5c477df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/memory.html.twig", 1);
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
        $__internal_6f8c441e7e7992fcca1ddb6d78b954eaddc62ac70e48a3d374077acf04823a5c = $this->env->getExtension("native_profiler");
        $__internal_6f8c441e7e7992fcca1ddb6d78b954eaddc62ac70e48a3d374077acf04823a5c->enter($__internal_6f8c441e7e7992fcca1ddb6d78b954eaddc62ac70e48a3d374077acf04823a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/memory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f8c441e7e7992fcca1ddb6d78b954eaddc62ac70e48a3d374077acf04823a5c->leave($__internal_6f8c441e7e7992fcca1ddb6d78b954eaddc62ac70e48a3d374077acf04823a5c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4f11a0cbf0696dc1a7e69a96c1b58abd7d7b9d0c2f4a8b509e45b615857ea196 = $this->env->getExtension("native_profiler");
        $__internal_4f11a0cbf0696dc1a7e69a96c1b58abd7d7b9d0c2f4a8b509e45b615857ea196->enter($__internal_4f11a0cbf0696dc1a7e69a96c1b58abd7d7b9d0c2f4a8b509e45b615857ea196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        ob_start();
        // line 5
        $context["status_color"] = ((((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024) > 50)) ? ("yellow") : (""));
        // line 6
        echo twig_include($this->env, $context, "@WebProfiler/Icon/memory.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">MB</span>";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Peak memory usage</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>PHP memory limit</b>
            <span>";
        // line 19
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit", array()) ==  -1)) ? ("Unlimited") : (sprintf("%.0f MB", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit", array()) / 1024) / 1024)))), "html", null, true);
        echo "</span>
        </div>";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 23
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "name" => "time", "status" => (isset($context["status_color"]) ? $context["status_color"] : $this->getContext($context, "status_color"))));
        
        $__internal_4f11a0cbf0696dc1a7e69a96c1b58abd7d7b9d0c2f4a8b509e45b615857ea196->leave($__internal_4f11a0cbf0696dc1a7e69a96c1b58abd7d7b9d0c2f4a8b509e45b615857ea196_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  67 => 19,  59 => 14,  55 => 12,  53 => 11,  48 => 7,  44 => 6,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*         {% set status_color = (collector.memory / 1024 / 1024) > 50 ? 'yellow' : '' %}*/
/*         {{ include('@WebProfiler/Icon/memory.svg') }}*/
/*         <span class="sf-toolbar-value">{{ '%.1f'|format(collector.memory / 1024 / 1024) }}</span>*/
/*         <span class="sf-toolbar-label">MB</span>*/
/*     {% endset %}*/
/* */
/*     {% set text %}*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Peak memory usage</b>*/
/*             <span>{{ '%.1f'|format(collector.memory / 1024 / 1024) }} MB</span>*/
/*         </div>*/
/* */
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>PHP memory limit</b>*/
/*             <span>{{ collector.memoryLimit == -1 ? 'Unlimited' : '%.0f MB'|format(collector.memoryLimit / 1024 / 1024) }}</span>*/
/*         </div>*/
/*     {% endset %}*/
/* */
/*     {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, name: 'time', status: status_color }) }}*/
/* {% endblock %}*/
/* */
