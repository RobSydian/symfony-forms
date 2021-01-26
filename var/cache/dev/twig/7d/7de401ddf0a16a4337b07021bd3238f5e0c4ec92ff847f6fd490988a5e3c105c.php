<?php

/* @Debug/Profiler/dump.html.twig */
class __TwigTemplate_089095501e344e79b7593795fea1500ef9bb7f42eab33fbb403b5d8784e771a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Debug/Profiler/dump.html.twig", 1);
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
        $__internal_707aff1b2c2d52195b047a14de332e3ad378f9ea3a6f95e180c10e09b914d2af = $this->env->getExtension("native_profiler");
        $__internal_707aff1b2c2d52195b047a14de332e3ad378f9ea3a6f95e180c10e09b914d2af->enter($__internal_707aff1b2c2d52195b047a14de332e3ad378f9ea3a6f95e180c10e09b914d2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Debug/Profiler/dump.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_707aff1b2c2d52195b047a14de332e3ad378f9ea3a6f95e180c10e09b914d2af->leave($__internal_707aff1b2c2d52195b047a14de332e3ad378f9ea3a6f95e180c10e09b914d2af_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_90d9bf4b102dc3057a47d6f21edecfaf5616a5d942b67f3a7b64d56a7e677555 = $this->env->getExtension("native_profiler");
        $__internal_90d9bf4b102dc3057a47d6f21edecfaf5616a5d942b67f3a7b64d56a7e677555->enter($__internal_90d9bf4b102dc3057a47d6f21edecfaf5616a5d942b67f3a7b64d56a7e677555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dumpsCount", array())) {
            // line 5
            ob_start();
            // line 6
            echo twig_include($this->env, $context, "@Debug/Profiler/icon.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dumpsCount", array()), "html", null, true);
            echo "</span>";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 10
            ob_start();
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "getDumps", array(0 => "html"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["dump"]) {
                // line 12
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <span>";
                // line 14
                if ($this->getAttribute($context["dump"], "file", array())) {
                    // line 15
                    $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($context["dump"], "file", array()), $this->getAttribute($context["dump"], "line", array()));
                    // line 16
                    if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                        // line 17
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                        echo "</a>";
                    } else {
                        // line 19
                        echo "                            <abbr title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                        echo "</abbr>";
                    }
                } else {
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                }
                // line 24
                echo "                    </span>
                    <span class=\"sf-toolbar-file-line\">line";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "line", array()), "html", null, true);
                echo "</span>";
                // line 27
                echo $this->getAttribute($context["dump"], "data", array());
                echo "
                </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dump'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "            <img src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" onload=\"var h = this.parentNode.innerHTML, rx=/<script>(.*?)<\\/script>/g, s; while (s = rx.exec(h)) {eval(s[1]);};\" />";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 33
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true));
        }
        
        $__internal_90d9bf4b102dc3057a47d6f21edecfaf5616a5d942b67f3a7b64d56a7e677555->leave($__internal_90d9bf4b102dc3057a47d6f21edecfaf5616a5d942b67f3a7b64d56a7e677555_prof);

    }

    // line 37
    public function block_menu($context, array $blocks = array())
    {
        $__internal_54dcca5725e0100badc07aaeaa86137770ce574dbd667e089556e79bad5e0188 = $this->env->getExtension("native_profiler");
        $__internal_54dcca5725e0100badc07aaeaa86137770ce574dbd667e089556e79bad5e0188->enter($__internal_54dcca5725e0100badc07aaeaa86137770ce574dbd667e089556e79bad5e0188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 38
        echo "    <span class=\"label";
        echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dumpsCount", array()) == 0)) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 39
        echo twig_include($this->env, $context, "@Debug/Profiler/icon.svg");
        echo "</span>
        <strong>Debug</strong>
    </span>";
        
        $__internal_54dcca5725e0100badc07aaeaa86137770ce574dbd667e089556e79bad5e0188->leave($__internal_54dcca5725e0100badc07aaeaa86137770ce574dbd667e089556e79bad5e0188_prof);

    }

    // line 44
    public function block_panel($context, array $blocks = array())
    {
        $__internal_941df18f34289a55c48c4803a7950d3c0253ed8da2919af997301c2a210d4b19 = $this->env->getExtension("native_profiler");
        $__internal_941df18f34289a55c48c4803a7950d3c0253ed8da2919af997301c2a210d4b19->enter($__internal_941df18f34289a55c48c4803a7950d3c0253ed8da2919af997301c2a210d4b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 45
        echo "    <h2>Dumped Contents</h2>";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "getDumps", array(0 => "html"), "method"));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["dump"]) {
            // line 48
            echo "        <div class=\"sf-dump sf-reset\">
            <h3>In";
            // line 50
            if ($this->getAttribute($context["dump"], "line", array())) {
                // line 51
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($context["dump"], "file", array()), $this->getAttribute($context["dump"], "line", array()));
                // line 52
                if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                    // line 53
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                    echo "</a>";
                } else {
                    // line 55
                    echo "                        <abbr title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                    echo "</abbr>";
                }
            } else {
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
            }
            // line 60
            echo "                <small>line";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "line", array()), "html", null, true);
            echo "</small>

                <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\" data-toggle-alt-content=\"Hide code\">Show code</a>
            </h3>

            <div class=\"sf-dump-compact hidden\" id=\"sf-trace-";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\">
                <div class=\"trace\">";
            // line 67
            echo (($this->getAttribute($context["dump"], "fileExcerpt", array())) ? ($this->getAttribute($context["dump"], "fileExcerpt", array())) : ($this->env->getExtension('code')->fileExcerpt($this->getAttribute($context["dump"], "file", array()), $this->getAttribute($context["dump"], "line", array()))));
            echo "
                </div>
            </div>";
            // line 71
            echo $this->getAttribute($context["dump"], "data", array());
            echo "
        </div>";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 74
            echo "        <div class=\"empty\">
            <p>No content was dumped.</p>
        </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dump'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_941df18f34289a55c48c4803a7950d3c0253ed8da2919af997301c2a210d4b19->leave($__internal_941df18f34289a55c48c4803a7950d3c0253ed8da2919af997301c2a210d4b19_prof);

    }

    public function getTemplateName()
    {
        return "@Debug/Profiler/dump.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 74,  211 => 71,  206 => 67,  202 => 65,  196 => 62,  190 => 60,  187 => 58,  179 => 55,  170 => 53,  168 => 52,  166 => 51,  164 => 50,  161 => 48,  143 => 47,  141 => 45,  135 => 44,  125 => 39,  120 => 38,  114 => 37,  106 => 33,  103 => 30,  95 => 27,  92 => 25,  89 => 24,  86 => 22,  78 => 19,  69 => 17,  67 => 16,  65 => 15,  63 => 14,  60 => 12,  56 => 11,  54 => 10,  50 => 7,  46 => 6,  44 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% if collector.dumpsCount %}*/
/*         {% set icon %}*/
/*             {{ include('@Debug/Profiler/icon.svg') }}*/
/*             <span class="sf-toolbar-value">{{ collector.dumpsCount }}</span>*/
/*         {% endset %}*/
/* */
/*         {% set text %}*/
/*             {% for dump in collector.getDumps('html') %}*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <span>*/
/*                     {% if dump.file %}*/
/*                         {% set link = dump.file|file_link(dump.line) %}*/
/*                         {% if link %}*/
/*                             <a href="{{ link }}" title="{{ dump.file }}">{{ dump.name }}</a>*/
/*                         {% else %}*/
/*                             <abbr title="{{ dump.file }}">{{ dump.name }}</abbr>*/
/*                         {% endif %}*/
/*                     {% else %}*/
/*                         {{ dump.name }}*/
/*                     {% endif %}*/
/*                     </span>*/
/*                     <span class="sf-toolbar-file-line">line {{ dump.line }}</span>*/
/* */
/*                     {{ dump.data|raw }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*             <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" onload="var h = this.parentNode.innerHTML, rx=/<script>(.*?)<\/script>/g, s; while (s = rx.exec(h)) {eval(s[1]);};" />*/
/*         {% endset %}*/
/* */
/*         {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': true }) }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.dumpsCount == 0 ? 'disabled' }}">*/
/*         <span class="icon">{{ include('@Debug/Profiler/icon.svg') }}</span>*/
/*         <strong>Debug</strong>*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Dumped Contents</h2>*/
/* */
/*     {% for dump in collector.getDumps('html') %}*/
/*         <div class="sf-dump sf-reset">*/
/*             <h3>In*/
/*                 {% if dump.line %}*/
/*                     {% set link = dump.file|file_link(dump.line) %}*/
/*                     {% if link %}*/
/*                         <a href="{{ link }}" title="{{ dump.file }}">{{ dump.name }}</a>*/
/*                     {% else %}*/
/*                         <abbr title="{{ dump.file }}">{{ dump.name }}</abbr>*/
/*                     {% endif %}*/
/*                 {% else %}*/
/*                     {{ dump.name }}*/
/*                 {% endif %}*/
/*                 <small>line {{ dump.line }}</small>*/
/* */
/*                 <a class="text-small sf-toggle" data-toggle-selector="#sf-trace-{{ loop.index0 }}" data-toggle-alt-content="Hide code">Show code</a>*/
/*             </h3>*/
/* */
/*             <div class="sf-dump-compact hidden" id="sf-trace-{{ loop.index0 }}">*/
/*                 <div class="trace">*/
/*                     {{ dump.fileExcerpt ? dump.fileExcerpt|raw : dump.file|file_excerpt(dump.line) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             {{ dump.data|raw }}*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="empty">*/
/*             <p>No content was dumped.</p>*/
/*         </div>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
