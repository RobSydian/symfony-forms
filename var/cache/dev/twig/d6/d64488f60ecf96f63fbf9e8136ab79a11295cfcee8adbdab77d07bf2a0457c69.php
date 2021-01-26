<?php

/* @WebProfiler/Collector/config.html.twig */
class __TwigTemplate_97677e7a27e2d26f1d8fe6c9ae6aef0d764c53b426e43e35632dc5048a7689e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/config.html.twig", 1);
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
        $__internal_138b14f26ab94fb015c4a396dda47330537b7d61839222c202737f647053e283 = $this->env->getExtension("native_profiler");
        $__internal_138b14f26ab94fb015c4a396dda47330537b7d61839222c202737f647053e283->enter($__internal_138b14f26ab94fb015c4a396dda47330537b7d61839222c202737f647053e283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/config.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_138b14f26ab94fb015c4a396dda47330537b7d61839222c202737f647053e283->leave($__internal_138b14f26ab94fb015c4a396dda47330537b7d61839222c202737f647053e283_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1578887f71141e1ef950c8ac6536c29f8ccb78ae75a3f81c700dfff55b22663d = $this->env->getExtension("native_profiler");
        $__internal_1578887f71141e1ef950c8ac6536c29f8ccb78ae75a3f81c700dfff55b22663d->enter($__internal_1578887f71141e1ef950c8ac6536c29f8ccb78ae75a3f81c700dfff55b22663d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        if (("unknown" == $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyState", array()))) {
            // line 5
            $context["block_status"] = "";
            // line 6
            $context["symfony_version_status"] = "Unable to retrieve information about the Symfony version.";
        } elseif (("eol" == $this->getAttribute(        // line 7
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyState", array()))) {
            // line 8
            $context["block_status"] = "red";
            // line 9
            $context["symfony_version_status"] = "This Symfony version will no longer receive security fixes.";
        } elseif (("eom" == $this->getAttribute(        // line 10
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyState", array()))) {
            // line 11
            $context["block_status"] = "yellow";
            // line 12
            $context["symfony_version_status"] = "This Symfony version will only receive security fixes.";
        } elseif (("dev" == $this->getAttribute(        // line 13
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyState", array()))) {
            // line 14
            $context["block_status"] = "yellow";
            // line 15
            $context["symfony_version_status"] = "This Symfony version is still in the development phase.";
        } else {
            // line 17
            $context["block_status"] = "";
            // line 18
            $context["symfony_version_status"] = "";
        }
        // line 21
        ob_start();
        // line 22
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array())) {
            // line 23
            echo "            <span class=\"sf-toolbar-label\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array()), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-value\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationversion", array()), "html", null, true);
            echo "</span>";
        } elseif ($this->getAttribute(        // line 25
(isset($context["collector"]) ? $context["collector"] : null), "symfonyState", array(), "any", true, true)) {
            // line 26
            echo "            <span class=\"sf-toolbar-label\">";
            // line 27
            echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
            echo "
            </span>
            <span class=\"sf-toolbar-value\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
            echo "</span>";
        }
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 33
        ob_start();
        // line 34
        echo "        <div class=\"sf-toolbar-info-group\">";
        // line 35
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array())) {
            // line 36
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array()), "html", null, true);
            echo "</b>
                    <span>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationversion", array()), "html", null, true);
            echo "</span>
                </div>";
        }
        // line 41
        echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Profiler token</b>
                <span>";
        // line 45
        if ((isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url"))) {
            // line 46
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "token", array()), "html", null, true);
            echo "</a>";
        } else {
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "token", array()), "html", null, true);
        }
        // line 50
        echo "                </span>
            </div>";
        // line 53
        if ( !("n/a" === $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname", array()))) {
            // line 54
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Kernel name</b>
                    <span>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname", array()), "html", null, true);
            echo "</span>
                </div>";
        }
        // line 60
        if ( !("n/a" === $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env", array()))) {
            // line 61
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env", array()), "html", null, true);
            echo "</span>
                </div>";
        }
        // line 67
        if ( !("n/a" === $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug", array()))) {
            // line 68
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 70
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug", array())) ? ("green") : ("red"));
            echo "\">";
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug", array())) ? ("enabled") : ("disabled"));
            echo "</span>
                </div>";
        }
        // line 73
        echo "        </div>

        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP version</b>
                <span>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "phpversion", array()), "html", null, true);
        echo "
                    &nbsp; <a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("_profiler_phpinfo");
        echo "\">View phpinfo()</a>
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 86
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasxdebug", array())) ? ("green") : ("red"));
        echo "\">xdebug</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 87
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasaccelerator", array())) ? ("green") : ("red"));
        echo "\">accel</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sapiName", array()), "html", null, true);
        echo "</span>
            </div>
        </div>

        <div class=\"sf-toolbar-info-group\">";
        // line 97
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "symfonyversion", array(), "any", true, true)) {
            // line 98
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Resources</b>
                    <span>";
            // line 101
            if (("Silex" == $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array()))) {
                // line 102
                echo "                            <a href=\"http://silex.sensiolabs.org/documentation\" rel=\"help\">
                                Read Silex Docs
                            </a>";
            } else {
                // line 106
                echo "                            <a href=\"https://symfony.com/doc/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
                echo "/index.html\" rel=\"help\">
                                Read Symfony";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
                echo " Docs
                            </a>";
            }
            // line 110
            echo "                    </span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Help</b>
                    <span>
                        <a href=\"http://symfony.com/support\">
                            Symfony Support Channels
                        </a>
                    </span>
                </div>";
        }
        // line 121
        echo "        </div>";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 124
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true, "name" => "config", "status" => (isset($context["block_status"]) ? $context["block_status"] : $this->getContext($context, "block_status")), "additional_classes" => "sf-toolbar-block-right"));
        
        $__internal_1578887f71141e1ef950c8ac6536c29f8ccb78ae75a3f81c700dfff55b22663d->leave($__internal_1578887f71141e1ef950c8ac6536c29f8ccb78ae75a3f81c700dfff55b22663d_prof);

    }

    // line 127
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4541da2c4aff10c5946b704cb6bc200f19668dd26125b71e81ac17ae36da98c8 = $this->env->getExtension("native_profiler");
        $__internal_4541da2c4aff10c5946b704cb6bc200f19668dd26125b71e81ac17ae36da98c8->enter($__internal_4541da2c4aff10c5946b704cb6bc200f19668dd26125b71e81ac17ae36da98c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 128
        echo "    <span class=\"label label-status-";
        echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyState", array()) == "eol")) ? ("red") : (((twig_in_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyState", array()), array(0 => "eom", 1 => "dev"))) ? ("yellow") : (""))));
        echo "\">
        <span class=\"icon\">";
        // line 129
        echo twig_include($this->env, $context, "@WebProfiler/Icon/config.svg");
        echo "</span>
        <strong>Configuration</strong>
    </span>";
        
        $__internal_4541da2c4aff10c5946b704cb6bc200f19668dd26125b71e81ac17ae36da98c8->leave($__internal_4541da2c4aff10c5946b704cb6bc200f19668dd26125b71e81ac17ae36da98c8_prof);

    }

    // line 134
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b15eaf56e446172c683493ac924582aa2370c0307a938e8f2a2375747d79ca7f = $this->env->getExtension("native_profiler");
        $__internal_b15eaf56e446172c683493ac924582aa2370c0307a938e8f2a2375747d79ca7f->enter($__internal_b15eaf56e446172c683493ac924582aa2370c0307a938e8f2a2375747d79ca7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 135
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array())) {
            // line 137
            echo "        <h2>Project Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Application name</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationversion", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Application version</span>
            </div>
        </div>

        <p>
            Based on <a class=\"text-bold\" href=\"https://symfony.com\">Symfony";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
            echo "</a>
        </p>";
        } else {
            // line 155
            echo "        <h2>Symfony Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Symfony version</span>
            </div>";
            // line 163
            if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname", array()))) {
                // line 164
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 165
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname", array()), "html", null, true);
                echo "</span>
                    <span class=\"label\">Application name</span>
                </div>";
            }
            // line 170
            if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env", array()))) {
                // line 171
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 172
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env", array()), "html", null, true);
                echo "</span>
                    <span class=\"label\">Environment</span>
                </div>";
            }
            // line 177
            if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug", array()))) {
                // line 178
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 179
                echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug", array())) ? ("enabled") : ("disabled"));
                echo "</span>
                    <span class=\"label\">Debug</span>
                </div>";
            }
            // line 183
            echo "        </div>";
        }
        // line 185
        echo "
    <h2>PHP Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 190
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "phpversion", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">PHP version</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 195
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasaccelerator", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">PHP acceleration</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 200
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasxdebug", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">Xdebug</span>
        </div>
    </div>

    <div class=\"metrics metrics-horizontal\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 207
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "haszendopcache", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">OPcache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 212
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasapc", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">APC</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 217
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasxcache", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">XCache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 222
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "haseaccelerator", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">EAccelerator</span>
        </div>
    </div>

    <p>
        <a href=\"";
        // line 228
        echo $this->env->getExtension('routing')->getPath("_profiler_phpinfo");
        echo "\">View full PHP configuration</a>
    </p>";
        // line 231
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "bundles", array())) {
            // line 232
            echo "        <h2>Enabled Bundles <small>(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "bundles", array())), "html", null, true);
            echo ")</small></h2>
        <table>
            <thead>
                <tr>
                    <th class=\"key\">Name</th>
                    <th>Path</th>
                </tr>
            </thead>
            <tbody>";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "bundles", array()))));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 242
                echo "                <tr>
                    <th scope=\"row\" class=\"font-normal\">";
                // line 243
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</th>
                    <td class=\"font-normal\">";
                // line 244
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "bundles", array()), $context["name"], array(), "array"), "html", null, true);
                echo "</td>
                </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            echo "            </tbody>
        </table>";
        }
        
        $__internal_b15eaf56e446172c683493ac924582aa2370c0307a938e8f2a2375747d79ca7f->leave($__internal_b15eaf56e446172c683493ac924582aa2370c0307a938e8f2a2375747d79ca7f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 247,  454 => 244,  450 => 243,  447 => 242,  443 => 241,  431 => 232,  429 => 231,  425 => 228,  416 => 222,  408 => 217,  400 => 212,  392 => 207,  382 => 200,  374 => 195,  366 => 190,  359 => 185,  356 => 183,  350 => 179,  347 => 178,  345 => 177,  339 => 172,  336 => 171,  334 => 170,  328 => 165,  325 => 164,  323 => 163,  318 => 159,  312 => 155,  307 => 152,  298 => 146,  290 => 141,  284 => 137,  282 => 135,  276 => 134,  266 => 129,  261 => 128,  255 => 127,  248 => 124,  245 => 121,  233 => 110,  228 => 107,  223 => 106,  218 => 102,  216 => 101,  212 => 98,  210 => 97,  203 => 92,  195 => 87,  191 => 86,  182 => 80,  178 => 79,  171 => 73,  164 => 70,  160 => 68,  158 => 67,  153 => 63,  149 => 61,  147 => 60,  142 => 56,  138 => 54,  136 => 53,  133 => 50,  130 => 48,  123 => 46,  121 => 45,  116 => 41,  111 => 38,  107 => 37,  104 => 36,  102 => 35,  100 => 34,  98 => 33,  93 => 29,  88 => 27,  86 => 26,  84 => 25,  81 => 24,  76 => 23,  74 => 22,  72 => 21,  69 => 18,  67 => 17,  64 => 15,  62 => 14,  60 => 13,  58 => 12,  56 => 11,  54 => 10,  52 => 9,  50 => 8,  48 => 7,  46 => 6,  44 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% if 'unknown' == collector.symfonyState %}*/
/*         {% set block_status = '' %}*/
/*         {% set symfony_version_status = 'Unable to retrieve information about the Symfony version.' %}*/
/*     {% elseif 'eol' == collector.symfonyState %}*/
/*         {% set block_status = 'red' %}*/
/*         {% set symfony_version_status = 'This Symfony version will no longer receive security fixes.' %}*/
/*     {% elseif 'eom' == collector.symfonyState %}*/
/*         {% set block_status = 'yellow' %}*/
/*         {% set symfony_version_status = 'This Symfony version will only receive security fixes.' %}*/
/*     {% elseif 'dev' == collector.symfonyState %}*/
/*         {% set block_status = 'yellow' %}*/
/*         {% set symfony_version_status = 'This Symfony version is still in the development phase.' %}*/
/*     {% else %}*/
/*         {% set block_status = '' %}*/
/*         {% set symfony_version_status = '' %}*/
/*     {% endif %}*/
/* */
/*     {% set icon %}*/
/*         {% if collector.applicationname %}*/
/*             <span class="sf-toolbar-label">{{ collector.applicationname }}</span>*/
/*             <span class="sf-toolbar-value">{{ collector.applicationversion }}</span>*/
/*         {% elseif collector.symfonyState is defined %}*/
/*             <span class="sf-toolbar-label">*/
/*                 {{ include('@WebProfiler/Icon/symfony.svg') }}*/
/*             </span>*/
/*             <span class="sf-toolbar-value">{{ collector.symfonyversion }}</span>*/
/*         {% endif %}*/
/*     {% endset %}*/
/* */
/*     {% set text %}*/
/*         <div class="sf-toolbar-info-group">*/
/*             {% if collector.applicationname %}*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>{{ collector.applicationname }}</b>*/
/*                     <span>{{ collector.applicationversion }}</span>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Profiler token</b>*/
/*                 <span>*/
/*                     {% if profiler_url %}*/
/*                         <a href="{{ profiler_url }}">{{ collector.token }}</a>*/
/*                     {% else %}*/
/*                         {{ collector.token }}*/
/*                     {% endif %}*/
/*                 </span>*/
/*             </div>*/
/* */
/*             {% if 'n/a' is not same as(collector.appname) %}*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>Kernel name</b>*/
/*                     <span>{{ collector.appname }}</span>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             {% if 'n/a' is not same as(collector.env) %}*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>Environment</b>*/
/*                     <span>{{ collector.env }}</span>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             {% if 'n/a' is not same as(collector.debug) %}*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>Debug</b>*/
/*                     <span class="sf-toolbar-status sf-toolbar-status-{{ collector.debug ? 'green' : 'red' }}">{{ collector.debug ? 'enabled' : 'disabled' }}</span>*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         <div class="sf-toolbar-info-group">*/
/*             <div class="sf-toolbar-info-piece sf-toolbar-info-php">*/
/*                 <b>PHP version</b>*/
/*                 <span>*/
/*                     {{ collector.phpversion }}*/
/*                     &nbsp; <a href="{{ path('_profiler_phpinfo') }}">View phpinfo()</a>*/
/*                 </span>*/
/*             </div>*/
/* */
/*             <div class="sf-toolbar-info-piece sf-toolbar-info-php-ext">*/
/*                 <b>PHP Extensions</b>*/
/*                 <span class="sf-toolbar-status sf-toolbar-status-{{ collector.hasxdebug ? 'green' : 'red' }}">xdebug</span>*/
/*                 <span class="sf-toolbar-status sf-toolbar-status-{{ collector.hasaccelerator ? 'green' : 'red' }}">accel</span>*/
/*             </div>*/
/* */
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>PHP SAPI</b>*/
/*                 <span>{{ collector.sapiName }}</span>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="sf-toolbar-info-group">*/
/*             {% if collector.symfonyversion is defined %}*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>Resources</b>*/
/*                     <span>*/
/*                         {% if 'Silex' == collector.applicationname %}*/
/*                             <a href="http://silex.sensiolabs.org/documentation" rel="help">*/
/*                                 Read Silex Docs*/
/*                             </a>*/
/*                         {% else %}*/
/*                             <a href="https://symfony.com/doc/{{ collector.symfonyversion }}/index.html" rel="help">*/
/*                                 Read Symfony {{ collector.symfonyversion }} Docs*/
/*                             </a>*/
/*                         {% endif %}*/
/*                     </span>*/
/*                 </div>*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>Help</b>*/
/*                     <span>*/
/*                         <a href="http://symfony.com/support">*/
/*                             Symfony Support Channels*/
/*                         </a>*/
/*                     </span>*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endset %}*/
/* */
/*     {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: true, name: 'config', status: block_status, additional_classes: 'sf-toolbar-block-right' }) }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label label-status-{{ collector.symfonyState == 'eol' ? 'red' : collector.symfonyState in ['eom', 'dev'] ? 'yellow' : '' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/config.svg') }}</span>*/
/*         <strong>Configuration</strong>*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {% if collector.applicationname %}*/
/*         {# this application is not the Symfony framework #}*/
/*         <h2>Project Configuration</h2>*/
/* */
/*         <div class="metrics">*/
/*             <div class="metric">*/
/*                 <span class="value">{{ collector.applicationname }}</span>*/
/*                 <span class="label">Application name</span>*/
/*             </div>*/
/* */
/*             <div class="metric">*/
/*                 <span class="value">{{ collector.applicationversion }}</span>*/
/*                 <span class="label">Application version</span>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <p>*/
/*             Based on <a class="text-bold" href="https://symfony.com">Symfony {{ collector.symfonyversion }}</a>*/
/*         </p>*/
/*     {% else %}*/
/*         <h2>Symfony Configuration</h2>*/
/* */
/*         <div class="metrics">*/
/*             <div class="metric">*/
/*                 <span class="value">{{ collector.symfonyversion }}</span>*/
/*                 <span class="label">Symfony version</span>*/
/*             </div>*/
/* */
/*             {% if 'n/a' != collector.appname %}*/
/*                 <div class="metric">*/
/*                     <span class="value">{{ collector.appname }}</span>*/
/*                     <span class="label">Application name</span>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             {% if 'n/a' != collector.env %}*/
/*                 <div class="metric">*/
/*                     <span class="value">{{ collector.env }}</span>*/
/*                     <span class="label">Environment</span>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             {% if 'n/a' != collector.debug %}*/
/*                 <div class="metric">*/
/*                     <span class="value">{{ collector.debug ? 'enabled' : 'disabled' }}</span>*/
/*                     <span class="label">Debug</span>*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     <h2>PHP Configuration</h2>*/
/* */
/*     <div class="metrics">*/
/*         <div class="metric">*/
/*             <span class="value">{{ collector.phpversion }}</span>*/
/*             <span class="label">PHP version</span>*/
/*         </div>*/
/* */
/*         <div class="metric">*/
/*             <span class="value">{{ include('@WebProfiler/Icon/' ~ (collector.hasaccelerator ? 'yes' : 'no') ~ '.svg') }}</span>*/
/*             <span class="label">PHP acceleration</span>*/
/*         </div>*/
/* */
/*         <div class="metric">*/
/*             <span class="value">{{ include('@WebProfiler/Icon/' ~ (collector.hasxdebug ? 'yes' : 'no') ~ '.svg') }}</span>*/
/*             <span class="label">Xdebug</span>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="metrics metrics-horizontal">*/
/*         <div class="metric">*/
/*             <span class="value">{{ include('@WebProfiler/Icon/' ~ (collector.haszendopcache ? 'yes' : 'no') ~ '.svg') }}</span>*/
/*             <span class="label">OPcache</span>*/
/*         </div>*/
/* */
/*         <div class="metric">*/
/*             <span class="value">{{ include('@WebProfiler/Icon/' ~ (collector.hasapc ? 'yes' : 'no') ~ '.svg') }}</span>*/
/*             <span class="label">APC</span>*/
/*         </div>*/
/* */
/*         <div class="metric">*/
/*             <span class="value">{{ include('@WebProfiler/Icon/' ~ (collector.hasxcache ? 'yes' : 'no') ~ '.svg') }}</span>*/
/*             <span class="label">XCache</span>*/
/*         </div>*/
/* */
/*         <div class="metric">*/
/*             <span class="value">{{ include('@WebProfiler/Icon/' ~ (collector.haseaccelerator ? 'yes' : 'no') ~ '.svg') }}</span>*/
/*             <span class="label">EAccelerator</span>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <p>*/
/*         <a href="{{ path('_profiler_phpinfo') }}">View full PHP configuration</a>*/
/*     </p>*/
/* */
/*     {% if collector.bundles %}*/
/*         <h2>Enabled Bundles <small>({{ collector.bundles|length }})</small></h2>*/
/*         <table>*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th class="key">Name</th>*/
/*                     <th>Path</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% for name in collector.bundles|keys|sort %}*/
/*                 <tr>*/
/*                     <th scope="row" class="font-normal">{{ name }}</th>*/
/*                     <td class="font-normal">{{ collector.bundles[name] }}</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
