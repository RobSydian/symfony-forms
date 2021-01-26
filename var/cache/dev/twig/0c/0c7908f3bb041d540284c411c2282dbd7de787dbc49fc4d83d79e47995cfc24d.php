<?php

/* @Security/Collector/security.html.twig */
class __TwigTemplate_10d229af615b2b6125fbb909cf1680952773b6c90c2a8dd8548a4c65145dbdd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Security/Collector/security.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
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
        $__internal_94986f761c9187f5d32122cf134ab4d0a3d4f3825ab0fbd338c704ab48e4d3ed = $this->env->getExtension("native_profiler");
        $__internal_94986f761c9187f5d32122cf134ab4d0a3d4f3825ab0fbd338c704ab48e4d3ed->enter($__internal_94986f761c9187f5d32122cf134ab4d0a3d4f3825ab0fbd338c704ab48e4d3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94986f761c9187f5d32122cf134ab4d0a3d4f3825ab0fbd338c704ab48e4d3ed->leave($__internal_94986f761c9187f5d32122cf134ab4d0a3d4f3825ab0fbd338c704ab48e4d3ed_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_47d1e8052e86fc173cf33e24676ca5f1e55ba6928cea27a04ff1f7835b2d40d0 = $this->env->getExtension("native_profiler");
        $__internal_47d1e8052e86fc173cf33e24676ca5f1e55ba6928cea27a04ff1f7835b2d40d0->enter($__internal_47d1e8052e86fc173cf33e24676ca5f1e55ba6928cea27a04ff1f7835b2d40d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Security";
        
        $__internal_47d1e8052e86fc173cf33e24676ca5f1e55ba6928cea27a04ff1f7835b2d40d0->leave($__internal_47d1e8052e86fc173cf33e24676ca5f1e55ba6928cea27a04ff1f7835b2d40d0_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7ab813685a85e8b3698433b52214daebfb78b60d91a805b8157d933d254e1ff9 = $this->env->getExtension("native_profiler");
        $__internal_7ab813685a85e8b3698433b52214daebfb78b60d91a805b8157d933d254e1ff9->enter($__internal_7ab813685a85e8b3698433b52214daebfb78b60d91a805b8157d933d254e1ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass", array())) {
            // line 7
            $context["is_authenticated"] = ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled", array()) && $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "authenticated", array()));
            // line 8
            $context["color_code"] = (((isset($context["is_authenticated"]) ? $context["is_authenticated"] : $this->getContext($context, "is_authenticated"))) ? ("") : ("yellow"));
        } else {
            // line 10
            $context["color_code"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled", array())) ? ("red") : (""));
        }
        // line 13
        ob_start();
        // line 14
        echo twig_include($this->env, $context, "@Security/Collector/icon.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 15
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "user", array()), "n/a")) : ("n/a")), "html", null, true);
        echo "</span>";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 18
        ob_start();
        // line 19
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass", array())) {
            // line 20
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Logged in as</b>
                <span>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user", array()), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Authenticated</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 27
            echo (((isset($context["is_authenticated"]) ? $context["is_authenticated"] : $this->getContext($context, "is_authenticated"))) ? ("green") : ("red"));
            echo "\">";
            echo (((isset($context["is_authenticated"]) ? $context["is_authenticated"] : $this->getContext($context, "is_authenticated"))) ? ("Yes") : ("No"));
            echo "</span>
            </div>";
            // line 30
            if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass", array()) != null)) {
                // line 31
                echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Token class</b>
                <span>";
                // line 33
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass", array()));
                echo "</span>
            </div>";
            }
            // line 36
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "logoutUrl", array())) {
                // line 37
                echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Actions</b>
                <span><a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "logoutUrl", array()), "html", null, true);
                echo "\">Logout</a></span>
            </div>";
            }
        } elseif ($this->getAttribute(        // line 42
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled", array())) {
            // line 43
            echo "            <div class=\"sf-toolbar-info-piece\">
                <span>You are not authenticated.</span>
            </div>";
        } else {
            // line 47
            echo "            <div class=\"sf-toolbar-info-piece\">
                <span>The security is disabled.</span>
            </div>";
        }
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 53
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "status" => (isset($context["color_code"]) ? $context["color_code"] : $this->getContext($context, "color_code"))));
        
        $__internal_7ab813685a85e8b3698433b52214daebfb78b60d91a805b8157d933d254e1ff9->leave($__internal_7ab813685a85e8b3698433b52214daebfb78b60d91a805b8157d933d254e1ff9_prof);

    }

    // line 56
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0633488d73f62432fa0086a1dd21a03ad5f1fc49e4bcbc4681d2dde8c1e21350 = $this->env->getExtension("native_profiler");
        $__internal_0633488d73f62432fa0086a1dd21a03ad5f1fc49e4bcbc4681d2dde8c1e21350->enter($__internal_0633488d73f62432fa0086a1dd21a03ad5f1fc49e4bcbc4681d2dde8c1e21350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 57
        echo "    <span class=\"label";
        echo ((( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled", array()) ||  !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 58
        echo twig_include($this->env, $context, "@Security/Collector/icon.svg");
        echo "</span>
        <strong>Security</strong>
    </span>";
        
        $__internal_0633488d73f62432fa0086a1dd21a03ad5f1fc49e4bcbc4681d2dde8c1e21350->leave($__internal_0633488d73f62432fa0086a1dd21a03ad5f1fc49e4bcbc4681d2dde8c1e21350_prof);

    }

    // line 63
    public function block_panel($context, array $blocks = array())
    {
        $__internal_682571b8c449cf7295fbfd5a219038249bbfd1934c97d5a32e4a854774a5a000 = $this->env->getExtension("native_profiler");
        $__internal_682571b8c449cf7295fbfd5a219038249bbfd1934c97d5a32e4a854774a5a000->enter($__internal_682571b8c449cf7295fbfd5a219038249bbfd1934c97d5a32e4a854774a5a000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 64
        echo "    <h2>Security Token</h2>";
        // line 66
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass", array())) {
            // line 67
            echo "        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 69
            echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user", array()) == "anon.")) ? ("Anonymous") : ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user", array()))), "html", null, true);
            echo "</span>
                <span class=\"label\">Username</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 74
            echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "authenticated", array())) ? ("yes") : ("no"))) . ".svg"));
            echo "</span>
                <span class=\"label\">Authenticated</span>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\" class=\"key\">Property</th>
                    <th scope=\"col\">Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Roles</th>
                    <td>";
            // line 90
            echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "roles", array()))) ? ("none") : ($this->env->getExtension('yaml')->encode($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "roles", array())))), "html", null, true);
            // line 92
            if (( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "authenticated", array()) && twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "roles", array())))) {
                // line 93
                echo "                            <p class=\"help\">User is not authenticated probably because they have no roles.</p>";
            }
            // line 95
            echo "                    </td>
                </tr>";
            // line 98
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "supportsRoleHierarchy", array())) {
                // line 99
                echo "                <tr>
                    <th>Inherited Roles</th>
                    <td>";
                // line 101
                echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "inheritedRoles", array()))) ? ("none") : ($this->env->getExtension('yaml')->encode($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "inheritedRoles", array())))), "html", null, true);
                echo "</td>
                </tr>";
            }
            // line 105
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass", array())) {
                // line 106
                echo "                <tr>
                    <th>Token class</th>
                    <td>";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass", array()), "html", null, true);
                echo "</td>
                </tr>";
            }
            // line 111
            echo "            </tbody>
        </table>";
        } elseif ($this->getAttribute(        // line 113
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled", array())) {
            // line 114
            echo "        <div class=\"empty\">
            <p>There is no security token.</p>
        </div>";
        } else {
            // line 118
            echo "        <div class=\"empty\">
            <p>The security component is disabled.</p>
        </div>";
        }
        // line 123
        if ( !twig_test_empty((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "voters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "voters", array()), array())) : (array())))) {
            // line 124
            echo "        <h2>Security Voters <small>(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "voters", array())), "html", null, true);
            echo ")</small></h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 128
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "voterStrategy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "voterStrategy", array()), "unknown")) : ("unknown")), "html", null, true);
            echo "</span>
                <span class=\"label\">Strategy</span>
            </div>
        </div>

        <table class=\"voters\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Voter class</th>
                </tr>
            </thead>

            <tbody>";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "voters", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["voter"]) {
                // line 143
                echo "                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                        <td class=\"font-normal\">";
                // line 145
                echo twig_escape_filter($this->env, $context["voter"], "html", null, true);
                echo "</td>
                    </tr>";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "            </tbody>
        </table>";
        }
        // line 152
        if ( !twig_test_empty((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "accessDecisionLog", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "accessDecisionLog", array()), array())) : (array())))) {
            // line 153
            echo "        <h2>Access decision log</h2>

        <table class=\"decision-log\">
            <col style=\"width: 30px\">
            <col style=\"width: 120px\">
            <col style=\"width: 25%\">
            <col style=\"width: 60%\">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Result</th>
                    <th>Attributes</th>
                    <th>Object</th>
                </tr>
            </thead>

            <tbody>";
            // line 171
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "accessDecisionLog", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["decision"]) {
                // line 172
                echo "                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">";
                // line 173
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                        <td class=\"font-normal\">";
                // line 175
                echo (($this->getAttribute($context["decision"], "result", array())) ? ("<span class=\"label status-success same-width\">GRANTED</span>") : ("<span class=\"label status-error same-width\">DENIED</span>"));
                // line 178
                echo "
                        </td>
                        <td>";
                // line 180
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["decision"], "attributes", array())) == 1)) ? (twig_first($this->env, $this->getAttribute($context["decision"], "attributes", array()))) : ($this->env->getExtension('profiler')->dumpValue($this->getAttribute($context["decision"], "attributes", array())))), "html", null, true);
                echo "</td>
                        <td>";
                // line 181
                echo twig_escape_filter($this->env, $this->env->getExtension('profiler')->dumpValue($this->getAttribute($context["decision"], "object", array())), "html", null, true);
                echo "</td>
                    </tr>";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['decision'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "            </tbody>
        </table>";
        }
        
        $__internal_682571b8c449cf7295fbfd5a219038249bbfd1934c97d5a32e4a854774a5a000->leave($__internal_682571b8c449cf7295fbfd5a219038249bbfd1934c97d5a32e4a854774a5a000_prof);

    }

    public function getTemplateName()
    {
        return "@Security/Collector/security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 184,  372 => 181,  368 => 180,  364 => 178,  362 => 175,  358 => 173,  355 => 172,  338 => 171,  319 => 153,  317 => 152,  313 => 148,  297 => 145,  293 => 144,  290 => 143,  273 => 142,  257 => 128,  249 => 124,  247 => 123,  242 => 118,  237 => 114,  235 => 113,  232 => 111,  227 => 108,  223 => 106,  221 => 105,  216 => 101,  212 => 99,  210 => 98,  207 => 95,  204 => 93,  202 => 92,  200 => 90,  182 => 74,  174 => 69,  170 => 67,  168 => 66,  166 => 64,  160 => 63,  150 => 58,  145 => 57,  139 => 56,  132 => 53,  126 => 47,  121 => 43,  119 => 42,  114 => 39,  110 => 37,  108 => 36,  103 => 33,  99 => 31,  97 => 30,  91 => 27,  83 => 22,  79 => 20,  77 => 19,  75 => 18,  71 => 15,  67 => 14,  65 => 13,  62 => 10,  59 => 8,  57 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block page_title 'Security' %}*/
/* */
/* {% block toolbar %}*/
/*     {% if collector.tokenClass %}*/
/*         {% set is_authenticated = collector.enabled and collector.authenticated  %}*/
/*         {% set color_code = is_authenticated ? '' : 'yellow' %}*/
/*     {% else %}*/
/*         {% set color_code = collector.enabled ? 'red' : '' %}*/
/*     {% endif %}*/
/* */
/*     {% set icon %}*/
/*         {{ include('@Security/Collector/icon.svg') }}*/
/*         <span class="sf-toolbar-value">{{ collector.user|default('n/a') }}</span>*/
/*     {% endset %}*/
/* */
/*     {% set text %}*/
/*         {% if collector.tokenClass %}*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Logged in as</b>*/
/*                 <span>{{ collector.user }}</span>*/
/*             </div>*/
/* */
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Authenticated</b>*/
/*                 <span class="sf-toolbar-status sf-toolbar-status-{{ is_authenticated ? 'green' : 'red' }}">{{ is_authenticated ? 'Yes' : 'No' }}</span>*/
/*             </div>*/
/* */
/*             {% if collector.tokenClass != null %}*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Token class</b>*/
/*                 <span>{{ collector.tokenClass|abbr_class }}</span>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if collector.logoutUrl %}*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Actions</b>*/
/*                 <span><a href="{{ collector.logoutUrl }}">Logout</a></span>*/
/*             </div>*/
/*             {% endif %}*/
/*         {% elseif collector.enabled %}*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <span>You are not authenticated.</span>*/
/*             </div>*/
/*         {% else %}*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <span>The security is disabled.</span>*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endset %}*/
/* */
/*     {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: color_code }) }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ not collector.enabled or not collector.tokenClass ? 'disabled' }}">*/
/*         <span class="icon">{{ include('@Security/Collector/icon.svg') }}</span>*/
/*         <strong>Security</strong>*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Security Token</h2>*/
/* */
/*     {% if collector.tokenClass %}*/
/*         <div class="metrics">*/
/*             <div class="metric">*/
/*                 <span class="value">{{ collector.user == 'anon.' ? 'Anonymous' : collector.user }}</span>*/
/*                 <span class="label">Username</span>*/
/*             </div>*/
/* */
/*             <div class="metric">*/
/*                 <span class="value">{{ include('@WebProfiler/Icon/' ~ (collector.authenticated ? 'yes' : 'no') ~ '.svg') }}</span>*/
/*                 <span class="label">Authenticated</span>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <table>*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th scope="col" class="key">Property</th>*/
/*                     <th scope="col">Value</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 <tr>*/
/*                     <th>Roles</th>*/
/*                     <td>*/
/*                         {{ collector.roles is empty ? 'none' : collector.roles|yaml_encode }}*/
/* */
/*                         {% if not collector.authenticated and collector.roles is empty %}*/
/*                             <p class="help">User is not authenticated probably because they have no roles.</p>*/
/*                         {% endif %}*/
/*                     </td>*/
/*                 </tr>*/
/* */
/*                 {% if collector.supportsRoleHierarchy %}*/
/*                 <tr>*/
/*                     <th>Inherited Roles</th>*/
/*                     <td>{{ collector.inheritedRoles is empty ? 'none' : collector.inheritedRoles|yaml_encode }}</td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/* */
/*                 {% if collector.tokenClass %}*/
/*                 <tr>*/
/*                     <th>Token class</th>*/
/*                     <td>{{ collector.tokenClass }}</td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/*             </tbody>*/
/*         </table>*/
/*     {% elseif collector.enabled %}*/
/*         <div class="empty">*/
/*             <p>There is no security token.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="empty">*/
/*             <p>The security component is disabled.</p>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {% if collector.voters|default([]) is not empty %}*/
/*         <h2>Security Voters <small>({{ collector.voters|length }})</small></h2>*/
/* */
/*         <div class="metrics">*/
/*             <div class="metric">*/
/*                 <span class="value">{{ collector.voterStrategy|default('unknown') }}</span>*/
/*                 <span class="label">Strategy</span>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <table class="voters">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>#</th>*/
/*                     <th>Voter class</th>*/
/*                 </tr>*/
/*             </thead>*/
/* */
/*             <tbody>*/
/*                 {% for voter in collector.voters %}*/
/*                     <tr>*/
/*                         <td class="font-normal text-small text-muted nowrap">{{ loop.index }}</td>*/
/*                         <td class="font-normal">{{ voter }}</td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     {% endif %}*/
/* */
/*     {% if collector.accessDecisionLog|default([]) is not empty %}*/
/*         <h2>Access decision log</h2>*/
/* */
/*         <table class="decision-log">*/
/*             <col style="width: 30px">*/
/*             <col style="width: 120px">*/
/*             <col style="width: 25%">*/
/*             <col style="width: 60%">*/
/* */
/*             <thead>*/
/*                 <tr>*/
/*                     <th>#</th>*/
/*                     <th>Result</th>*/
/*                     <th>Attributes</th>*/
/*                     <th>Object</th>*/
/*                 </tr>*/
/*             </thead>*/
/* */
/*             <tbody>*/
/*                 {% for decision in collector.accessDecisionLog %}*/
/*                     <tr>*/
/*                         <td class="font-normal text-small text-muted nowrap">{{ loop.index }}</td>*/
/*                         <td class="font-normal">*/
/*                             {{ decision.result*/
/*                                 ? '<span class="label status-success same-width">GRANTED</span>'*/
/*                                 : '<span class="label status-error same-width">DENIED</span>'*/
/*                             }}*/
/*                         </td>*/
/*                         <td>{{ decision.attributes|length == 1 ? decision.attributes|first : profiler_dump(decision.attributes) }}</td>*/
/*                         <td>{{ profiler_dump(decision.object) }}</td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
