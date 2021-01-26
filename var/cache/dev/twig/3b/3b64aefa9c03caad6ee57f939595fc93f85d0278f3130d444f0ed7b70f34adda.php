<?php

/* @WebProfiler/Collector/request.html.twig */
class __TwigTemplate_7756a017cbd7dfc2d20a33b22df906285b336f2d7d747c6d8642a3629f786d40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/request.html.twig", 1);
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
        $__internal_8058cfb1f2f9c7d47ef19f8dadd352d8f104633442662cf06e7e6dcec824529b = $this->env->getExtension("native_profiler");
        $__internal_8058cfb1f2f9c7d47ef19f8dadd352d8f104633442662cf06e7e6dcec824529b->enter($__internal_8058cfb1f2f9c7d47ef19f8dadd352d8f104633442662cf06e7e6dcec824529b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8058cfb1f2f9c7d47ef19f8dadd352d8f104633442662cf06e7e6dcec824529b->leave($__internal_8058cfb1f2f9c7d47ef19f8dadd352d8f104633442662cf06e7e6dcec824529b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d151d883761a9cb9d6acb558145db0eccb58e3d74d00e511dd164ba4b58afd86 = $this->env->getExtension("native_profiler");
        $__internal_d151d883761a9cb9d6acb558145db0eccb58e3d74d00e511dd164ba4b58afd86->enter($__internal_d151d883761a9cb9d6acb558145db0eccb58e3d74d00e511dd164ba4b58afd86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        ob_start();
        // line 5
        $context["helper"] = $this;
        // line 6
        echo $context["helper"]->getset_handler($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "controller", array()));
        $context["request_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "redirect", array())) {
            // line 10
            ob_start();
            // line 11
            $context["helper"] = $this;
            // line 12
            echo $context["helper"]->getset_handler($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "redirect", array()), "controller", array()), $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "redirect", array()), "route", array()), ((("GET" != $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "redirect", array()), "method", array()))) ? ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "redirect", array()), "method", array())) : ("")));
            $context["redirect_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 16
        if ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "forward", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "forward", array()), false)) : (false))) {
            // line 17
            ob_start();
            // line 18
            $context["helper"] = $this;
            // line 19
            echo $context["helper"]->getset_handler($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "forward", array()), "controller", array()));
            $context["forward_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 23
        $context["request_status_code_color"] = ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statuscode", array()) >= 400)) ? ("red") : (((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statuscode", array()) >= 300)) ? ("yellow") : ("green"))));
        // line 25
        ob_start();
        // line 26
        echo "        <span class=\"sf-toolbar-status sf-toolbar-status-";
        echo twig_escape_filter($this->env, (isset($context["request_status_code_color"]) ? $context["request_status_code_color"] : $this->getContext($context, "request_status_code_color")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statuscode", array()), "html", null, true);
        echo "</span>";
        // line 27
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "route", array())) {
            // line 28
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "redirect", array())) {
                echo twig_include($this->env, $context, "@WebProfiler/Icon/redirect.svg");
            }
            // line 29
            if ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "forward", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "forward", array()), false)) : (false))) {
                echo twig_include($this->env, $context, "@WebProfiler/Icon/forward.svg");
            }
            // line 30
            echo "            <span class=\"sf-toolbar-label\">";
            echo twig_escape_filter($this->env, ((("GET" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "method", array()))) ? ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "method", array())) : ("")), "html", null, true);
            echo " @</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "route", array()), "html", null, true);
            echo "</span>";
        }
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 35
        ob_start();
        // line 36
        echo "        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP status</b>
                <span>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statuscode", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statustext", array()), "html", null, true);
        echo "</span>
            </div>";
        // line 42
        if (("GET" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "method", array()))) {
            // line 43
            echo "<div class=\"sf-toolbar-info-piece\">
                    <b>Method</b>
                    <span>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "method", array()), "html", null, true);
            echo "</span>
                </div>";
        }
        // line 48
        echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                <span>";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["request_handler"]) ? $context["request_handler"] : $this->getContext($context, "request_handler")), "html", null, true);
        echo "</span>
            </div>";
        // line 54
        if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "controller", array(), "any", false, true), "class", array(), "any", true, true)) {
            // line 55
            echo "<div class=\"sf-toolbar-info-piece\">
                    <b>Controller class</b>
                    <span>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "controller", array()), "class", array()), "html", null, true);
            echo "</span>
                </div>";
        }
        // line 60
        echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>";
        // line 63
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "route", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "route", array()), "NONE")) : ("NONE")), "html", null, true);
        echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>";
        // line 68
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionmetadata", array()))) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
            </div>
        </div>";
        // line 72
        if (array_key_exists("redirect_handler", $context)) {
            // line 73
            echo "<div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>
                        <span class=\"sf-toolbar-redirection-status sf-toolbar-status-yellow\">";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "redirect", array()), "status_code", array()), "html", null, true);
            echo "</span>
                        Redirect from
                    </b>
                    <span>";
            // line 80
            echo twig_escape_filter($this->env, (isset($context["redirect_handler"]) ? $context["redirect_handler"] : $this->getContext($context, "redirect_handler")), "html", null, true);
            echo "
                        (<a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "redirect", array()), "token", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "redirect", array()), "token", array()), "html", null, true);
            echo "</a>)
                    </span>
                </div>
            </div>";
        }
        // line 87
        if (array_key_exists("forward_handler", $context)) {
            // line 88
            echo "            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Forwarded to</b>
                    <span>";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["forward_handler"]) ? $context["forward_handler"] : $this->getContext($context, "forward_handler")), "html", null, true);
            echo "
                        (<a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "forward", array()), "token", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "forward", array()), "token", array()), "html", null, true);
            echo "</a>)
                    </span>
                </div>
            </div>";
        }
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 100
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url"))));
        
        $__internal_d151d883761a9cb9d6acb558145db0eccb58e3d74d00e511dd164ba4b58afd86->leave($__internal_d151d883761a9cb9d6acb558145db0eccb58e3d74d00e511dd164ba4b58afd86_prof);

    }

    // line 103
    public function block_menu($context, array $blocks = array())
    {
        $__internal_069846f320c82507b4c5194ce86db9b3bcff96432f188c83a87a7c4d56b8ea00 = $this->env->getExtension("native_profiler");
        $__internal_069846f320c82507b4c5194ce86db9b3bcff96432f188c83a87a7c4d56b8ea00->enter($__internal_069846f320c82507b4c5194ce86db9b3bcff96432f188c83a87a7c4d56b8ea00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 104
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 105
        echo twig_include($this->env, $context, "@WebProfiler/Icon/request.svg");
        echo "</span>
        <strong>Request / Response</strong>
    </span>";
        
        $__internal_069846f320c82507b4c5194ce86db9b3bcff96432f188c83a87a7c4d56b8ea00->leave($__internal_069846f320c82507b4c5194ce86db9b3bcff96432f188c83a87a7c4d56b8ea00_prof);

    }

    // line 110
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0e19638148c789bd57281de664dafcc1e05d55e44f837d4aeafafa118fdfbcef = $this->env->getExtension("native_profiler");
        $__internal_0e19638148c789bd57281de664dafcc1e05d55e44f837d4aeafafa118fdfbcef->enter($__internal_0e19638148c789bd57281de664dafcc1e05d55e44f837d4aeafafa118fdfbcef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 111
        echo "    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Request</h3>

            <div class=\"tab-content\">
                <h3>GET Parameters</h3>";
        // line 118
        if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestquery", array()), "all", array()))) {
            // line 119
            echo "                    <div class=\"empty\">
                        <p>No GET parameters</p>
                    </div>";
        } else {
            // line 123
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestquery", array())), false);
        }
        // line 125
        echo "
                <h3>POST Parameters</h3>";
        // line 128
        if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestrequest", array()), "all", array()))) {
            // line 129
            echo "                    <div class=\"empty\">
                        <p>No POST parameters</p>
                    </div>";
        } else {
            // line 133
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestrequest", array())), false);
        }
        // line 135
        echo "
                <h3>Request Attributes</h3>";
        // line 138
        if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestattributes", array()), "all", array()))) {
            // line 139
            echo "                    <div class=\"empty\">
                        <p>No attributes</p>
                    </div>";
        } else {
            // line 143
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestattributes", array())), false);
        }
        // line 145
        echo "
                <h3>Cookies</h3>";
        // line 148
        if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestcookies", array()), "all", array()))) {
            // line 149
            echo "                    <div class=\"empty\">
                        <p>No cookies</p>
                    </div>";
        } else {
            // line 153
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestcookies", array())), false);
        }
        // line 155
        echo "
                <h3>Request Headers</h3>";
        // line 157
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestheaders", array()), "labels" => array(0 => "Header", 1 => "Value")), false);
        echo "

                <h3>Request Content</h3>";
        // line 161
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "content", array()) == false)) {
            // line 162
            echo "                    <div class=\"empty\">
                        <p>Request content not available (it was retrieved as a resource).</p>
                    </div>";
        } elseif ($this->getAttribute(        // line 165
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "content", array())) {
            // line 166
            echo "                    <div class=\"card\">
                        <pre class=\"break-long-words\">";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "content", array()), "html", null, true);
            echo "</pre>
                    </div>";
        } else {
            // line 170
            echo "                    <div class=\"empty\">
                        <p>No content</p>
                    </div>";
        }
        // line 174
        echo "
                <h3>Server Parameters</h3>";
        // line 176
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestserver", array())), false);
        echo "
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Response</h3>

            <div class=\"tab-content\">
                <h3>Response Headers</h3>";
        // line 186
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "responseheaders", array()), "labels" => array(0 => "Header", 1 => "Value")), false);
        echo "
            </div>
        </div>

        <div class=\"tab";
        // line 190
        echo ((twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionmetadata", array()))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Session</h3>

            <div class=\"tab-content\">
                <h3>Session Metadata</h3>";
        // line 196
        if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionmetadata", array()))) {
            // line 197
            echo "                    <div class=\"empty\">
                        <p>No session metadata</p>
                    </div>";
        } else {
            // line 201
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionmetadata", array())), false);
        }
        // line 203
        echo "
                <h3>Session Attributes</h3>";
        // line 206
        if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionattributes", array()))) {
            // line 207
            echo "                    <div class=\"empty\">
                        <p>No session attributes</p>
                    </div>";
        } else {
            // line 211
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionattributes", array()), "labels" => array(0 => "Attribute", 1 => "Value")), false);
        }
        // line 213
        echo "            </div>
        </div>

        <div class=\"tab";
        // line 216
        echo ((twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "flashes", array()))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Flashes</h3>

            <div class=\"tab-content\">
                <h3>Flashes</h3>";
        // line 222
        if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "flashes", array()))) {
            // line 223
            echo "                    <div class=\"empty\">
                        <p>No flash messages were created.</p>
                    </div>";
        } else {
            // line 227
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "flashes", array())), false);
        }
        // line 229
        echo "            </div>
        </div>";
        // line 232
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent", array())) {
            // line 233
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Parent Request</h3>

            <div class=\"tab-content\">
                <h3>
                    <a href=\"";
            // line 238
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent", array()), "token", array()))), "html", null, true);
            echo "\">Return to parent request</a>
                    <small>(token =";
            // line 239
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent", array()), "token", array()), "html", null, true);
            echo ")</small>
                </h3>";
            // line 242
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent", array()), "getcollector", array(0 => "request"), "method"), "requestattributes", array())), false);
            echo "
            </div>
        </div>";
        }
        // line 247
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array()))) {
            // line 248
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Sub Requests <span class=\"badge\">";
            // line 249
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array())), "html", null, true);
            echo "</span></h3>

            <div class=\"tab-content\">";
            // line 252
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 253
                echo "                    <h3>
                        <a href=\"";
                // line 254
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($context["child"], "token", array()))), "html", null, true);
                echo "\">";
                // line 255
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "request"), "method"), "requestattributes", array()), "get", array(0 => "_controller"), "method"), "html", null, true);
                // line 256
                echo "</a>
                        <small>(token =";
                // line 257
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "token", array()), "html", null, true);
                echo ")</small>
                    </h3>";
                // line 260
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "request"), "method"), "requestattributes", array())), false);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 262
            echo "            </div>
        </div>";
        }
        // line 265
        echo "    </div>";
        
        $__internal_0e19638148c789bd57281de664dafcc1e05d55e44f837d4aeafafa118fdfbcef->leave($__internal_0e19638148c789bd57281de664dafcc1e05d55e44f837d4aeafafa118fdfbcef_prof);

    }

    // line 268
    public function getset_handler($__controller__ = null, $__route__ = null, $__method__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "controller" => $__controller__,
            "route" => $__route__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_329cbad67bfd720d26be07f1649ef485e69370735355d14f62d9d2c2b04125b9 = $this->env->getExtension("native_profiler");
            $__internal_329cbad67bfd720d26be07f1649ef485e69370735355d14f62d9d2c2b04125b9->enter($__internal_329cbad67bfd720d26be07f1649ef485e69370735355d14f62d9d2c2b04125b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "set_handler"));

            // line 269
            if ($this->getAttribute((isset($context["controller"]) ? $context["controller"] : null), "class", array(), "any", true, true)) {
                // line 270
                if (((array_key_exists("method", $context)) ? (_twig_default_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), false)) : (false))) {
                    echo "<span class=\"sf-toolbar-status sf-toolbar-redirection-method\">";
                    echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
                    echo "</span>";
                }
                // line 271
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), "file", array()), $this->getAttribute((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), "line", array()));
                // line 272
                if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), "file", array()), "html", null, true);
                    echo "\">";
                } else {
                    echo "<span>";
                }
                // line 274
                if (((array_key_exists("route", $context)) ? (_twig_default_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), false)) : (false))) {
                    // line 275
                    echo "@";
                    echo twig_escape_filter($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "html", null, true);
                } else {
                    // line 277
                    echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('code')->abbrClass($this->getAttribute((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), "class", array()))), "html", null, true);
                    // line 278
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), "method", array())) ? ((" :: " . $this->getAttribute((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), "method", array()))) : ("")), "html", null, true);
                }
                // line 281
                if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                    echo "</a>";
                } else {
                    echo "</span>";
                }
            } else {
                // line 283
                echo "<span>";
                echo twig_escape_filter($this->env, ((array_key_exists("route", $context)) ? (_twig_default_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")))) : ((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")))), "html", null, true);
                echo "</span>";
            }
            
            $__internal_329cbad67bfd720d26be07f1649ef485e69370735355d14f62d9d2c2b04125b9->leave($__internal_329cbad67bfd720d26be07f1649ef485e69370735355d14f62d9d2c2b04125b9_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  528 => 283,  521 => 281,  518 => 278,  516 => 277,  512 => 275,  510 => 274,  500 => 272,  498 => 271,  492 => 270,  490 => 269,  473 => 268,  466 => 265,  462 => 262,  456 => 260,  452 => 257,  449 => 256,  447 => 255,  444 => 254,  441 => 253,  437 => 252,  432 => 249,  429 => 248,  427 => 247,  421 => 242,  417 => 239,  413 => 238,  406 => 233,  404 => 232,  401 => 229,  398 => 227,  393 => 223,  391 => 222,  384 => 216,  379 => 213,  376 => 211,  371 => 207,  369 => 206,  366 => 203,  363 => 201,  358 => 197,  356 => 196,  349 => 190,  342 => 186,  331 => 176,  328 => 174,  323 => 170,  318 => 167,  315 => 166,  313 => 165,  309 => 162,  307 => 161,  302 => 157,  299 => 155,  296 => 153,  291 => 149,  289 => 148,  286 => 145,  283 => 143,  278 => 139,  276 => 138,  273 => 135,  270 => 133,  265 => 129,  263 => 128,  260 => 125,  257 => 123,  252 => 119,  250 => 118,  243 => 111,  237 => 110,  227 => 105,  224 => 104,  218 => 103,  211 => 100,  201 => 93,  197 => 92,  192 => 88,  190 => 87,  181 => 81,  177 => 80,  171 => 76,  166 => 73,  164 => 72,  155 => 68,  147 => 63,  142 => 60,  137 => 57,  133 => 55,  131 => 54,  127 => 51,  122 => 48,  117 => 45,  113 => 43,  111 => 42,  106 => 39,  101 => 36,  99 => 35,  94 => 31,  89 => 30,  85 => 29,  81 => 28,  79 => 27,  73 => 26,  71 => 25,  69 => 23,  65 => 19,  63 => 18,  61 => 17,  59 => 16,  55 => 12,  53 => 11,  51 => 10,  49 => 9,  46 => 6,  44 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% set request_handler %}*/
/*         {% import _self as helper %}*/
/*         {{ helper.set_handler(collector.controller) }}*/
/*     {% endset %}*/
/* */
/*     {% if collector.redirect %}*/
/*         {% set redirect_handler %}*/
/*             {% import _self as helper %}*/
/*             {{ helper.set_handler(collector.redirect.controller, collector.redirect.route, 'GET' != collector.redirect.method ? collector.redirect.method) }}*/
/*         {% endset %}*/
/*     {% endif %}*/
/* */
/*     {% if collector.forward|default(false) %}*/
/*         {% set forward_handler %}*/
/*             {% import _self as helper %}*/
/*             {{ helper.set_handler(collector.forward.controller) }}*/
/*         {% endset %}*/
/*     {% endif %}*/
/* */
/*     {% set request_status_code_color = (collector.statuscode >= 400) ? 'red' : (collector.statuscode >= 300) ? 'yellow' : 'green' %}*/
/* */
/*     {% set icon %}*/
/*         <span class="sf-toolbar-status sf-toolbar-status-{{ request_status_code_color }}">{{ collector.statuscode }}</span>*/
/*         {% if collector.route %}*/
/*             {% if collector.redirect %}{{ include('@WebProfiler/Icon/redirect.svg') }}{% endif %}*/
/*             {% if collector.forward|default(false) %}{{ include('@WebProfiler/Icon/forward.svg') }}{% endif %}*/
/*             <span class="sf-toolbar-label">{{ 'GET' != collector.method ? collector.method }} @</span>*/
/*             <span class="sf-toolbar-value sf-toolbar-info-piece-additional">{{ collector.route }}</span>*/
/*         {% endif %}*/
/*     {% endset %}*/
/* */
/*     {% set text %}*/
/*         <div class="sf-toolbar-info-group">*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>HTTP status</b>*/
/*                 <span>{{ collector.statuscode }} {{ collector.statustext }}</span>*/
/*             </div>*/
/* */
/*             {% if 'GET' != collector.method -%}*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>Method</b>*/
/*                     <span>{{ collector.method }}</span>*/
/*                 </div>*/
/*             {%- endif %}*/
/* */
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Controller</b>*/
/*                 <span>{{ request_handler }}</span>*/
/*             </div>*/
/* */
/*             {% if collector.controller.class is defined -%}*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>Controller class</b>*/
/*                     <span>{{ collector.controller.class }}</span>*/
/*                 </div>*/
/*             {%- endif %}*/
/* */
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Route name</b>*/
/*                 <span>{{ collector.route|default('NONE') }}</span>*/
/*             </div>*/
/* */
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Has session</b>*/
/*                 <span>{% if collector.sessionmetadata|length %}yes{% else %}no{% endif %}</span>*/
/*             </div>*/
/*         </div>*/
/* */
/*         {% if redirect_handler is defined -%}*/
/*             <div class="sf-toolbar-info-group">*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>*/
/*                         <span class="sf-toolbar-redirection-status sf-toolbar-status-yellow">{{ collector.redirect.status_code }}</span>*/
/*                         Redirect from*/
/*                     </b>*/
/*                     <span>*/
/*                         {{ redirect_handler }}*/
/*                         (<a href="{{ path('_profiler', { token: collector.redirect.token }) }}">{{ collector.redirect.token }}</a>)*/
/*                     </span>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         {% if forward_handler is defined %}*/
/*             <div class="sf-toolbar-info-group">*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>Forwarded to</b>*/
/*                     <span>*/
/*                         {{ forward_handler }}*/
/*                         (<a href="{{ path('_profiler', { token: collector.forward.token }) }}">{{ collector.forward.token }}</a>)*/
/*                     </span>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endset %}*/
/* */
/*     {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/request.svg') }}</span>*/
/*         <strong>Request / Response</strong>*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <div class="sf-tabs">*/
/*         <div class="tab">*/
/*             <h3 class="tab-title">Request</h3>*/
/* */
/*             <div class="tab-content">*/
/*                 <h3>GET Parameters</h3>*/
/* */
/*                 {% if collector.requestquery.all is empty %}*/
/*                     <div class="empty">*/
/*                         <p>No GET parameters</p>*/
/*                     </div>*/
/*                 {% else %}*/
/*                     {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestquery }, with_context = false) }}*/
/*                 {% endif %}*/
/* */
/*                 <h3>POST Parameters</h3>*/
/* */
/*                 {% if collector.requestrequest.all is empty %}*/
/*                     <div class="empty">*/
/*                         <p>No POST parameters</p>*/
/*                     </div>*/
/*                 {% else %}*/
/*                     {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestrequest }, with_context = false) }}*/
/*                 {% endif %}*/
/* */
/*                 <h3>Request Attributes</h3>*/
/* */
/*                 {% if collector.requestattributes.all is empty %}*/
/*                     <div class="empty">*/
/*                         <p>No attributes</p>*/
/*                     </div>*/
/*                 {% else %}*/
/*                     {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestattributes }, with_context = false) }}*/
/*                 {% endif %}*/
/* */
/*                 <h3>Cookies</h3>*/
/* */
/*                 {% if collector.requestcookies.all is empty %}*/
/*                     <div class="empty">*/
/*                         <p>No cookies</p>*/
/*                     </div>*/
/*                 {% else %}*/
/*                     {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestcookies }, with_context = false) }}*/
/*                 {% endif %}*/
/* */
/*                 <h3>Request Headers</h3>*/
/*                 {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestheaders, labels: ['Header', 'Value'] }, with_context = false) }}*/
/* */
/*                 <h3>Request Content</h3>*/
/* */
/*                 {% if collector.content == false %}*/
/*                     <div class="empty">*/
/*                         <p>Request content not available (it was retrieved as a resource).</p>*/
/*                     </div>*/
/*                 {% elseif collector.content %}*/
/*                     <div class="card">*/
/*                         <pre class="break-long-words">{{ collector.content }}</pre>*/
/*                     </div>*/
/*                 {% else %}*/
/*                     <div class="empty">*/
/*                         <p>No content</p>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 <h3>Server Parameters</h3>*/
/*                 {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestserver }, with_context = false) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="tab">*/
/*             <h3 class="tab-title">Response</h3>*/
/* */
/*             <div class="tab-content">*/
/*                 <h3>Response Headers</h3>*/
/* */
/*                 {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.responseheaders, labels: ['Header', 'Value'] }, with_context = false) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="tab {{ collector.sessionmetadata is empty ? 'disabled' }}">*/
/*             <h3 class="tab-title">Session</h3>*/
/* */
/*             <div class="tab-content">*/
/*                 <h3>Session Metadata</h3>*/
/* */
/*                 {% if collector.sessionmetadata is empty %}*/
/*                     <div class="empty">*/
/*                         <p>No session metadata</p>*/
/*                     </div>*/
/*                 {% else %}*/
/*                     {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.sessionmetadata }, with_context = false) }}*/
/*                 {% endif %}*/
/* */
/*                 <h3>Session Attributes</h3>*/
/* */
/*                 {% if collector.sessionattributes is empty %}*/
/*                     <div class="empty">*/
/*                         <p>No session attributes</p>*/
/*                     </div>*/
/*                 {% else %}*/
/*                     {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.sessionattributes, labels: ['Attribute', 'Value'] }, with_context = false) }}*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="tab {{ collector.flashes is empty ? 'disabled' }}">*/
/*             <h3 class="tab-title">Flashes</h3>*/
/* */
/*             <div class="tab-content">*/
/*                 <h3>Flashes</h3>*/
/* */
/*                 {% if collector.flashes is empty %}*/
/*                     <div class="empty">*/
/*                         <p>No flash messages were created.</p>*/
/*                     </div>*/
/*                 {% else %}*/
/*                     {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.flashes }, with_context = false) }}*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/* */
/*         {% if profile.parent %}*/
/*         <div class="tab">*/
/*             <h3 class="tab-title">Parent Request</h3>*/
/* */
/*             <div class="tab-content">*/
/*                 <h3>*/
/*                     <a href="{{ path('_profiler', { token: profile.parent.token }) }}">Return to parent request</a>*/
/*                     <small>(token = {{ profile.parent.token }})</small>*/
/*                 </h3>*/
/* */
/*                 {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: profile.parent.getcollector('request').requestattributes }, with_context = false) }}*/
/*             </div>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if profile.children|length %}*/
/*         <div class="tab">*/
/*             <h3 class="tab-title">Sub Requests <span class="badge">{{ profile.children|length }}</span></h3>*/
/* */
/*             <div class="tab-content">*/
/*                 {% for child in profile.children %}*/
/*                     <h3>*/
/*                         <a href="{{ path('_profiler', { token: child.token }) }}">*/
/*                             {{- child.getcollector('request').requestattributes.get('_controller') -}}*/
/*                         </a>*/
/*                         <small>(token = {{ child.token }})</small>*/
/*                     </h3>*/
/* */
/*                     {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: child.getcollector('request').requestattributes }, with_context = false) }}*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% macro set_handler(controller, route, method) %}*/
/*     {% if controller.class is defined -%}*/
/*         {%- if method|default(false) %}<span class="sf-toolbar-status sf-toolbar-redirection-method">{{ method }}</span>{% endif -%}*/
/*         {%- set link = controller.file|file_link(controller.line) %}*/
/*         {%- if link %}<a href="{{ link }}" title="{{ controller.file }}">{% else %}<span>{% endif %}*/
/* */
/*             {%- if route|default(false) -%}*/
/*                 @{{ route }}*/
/*             {%- else -%}*/
/*                 {{- controller.class|abbr_class|striptags -}}*/
/*                 {{- controller.method ? ' :: ' ~ controller.method -}}*/
/*             {%- endif -%}*/
/* */
/*         {%- if link %}</a>{% else %}</span>{% endif %}*/
/*     {%- else -%}*/
/*         <span>{{ route|default(controller) }}</span>*/
/*     {%- endif %}*/
/* {% endmacro %}*/
/* */
