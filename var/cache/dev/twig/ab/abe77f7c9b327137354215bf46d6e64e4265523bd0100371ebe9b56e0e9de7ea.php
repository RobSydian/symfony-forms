<?php

/* base.html.twig */
class __TwigTemplate_3830aa0f851904e685fd7e566690e5c126b41e96db56d70b19121393cf5d571f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_303af29871c9a688ed85973c2215513638a1d0f56869c30a1530946dfb5fc0f1 = $this->env->getExtension("native_profiler");
        $__internal_303af29871c9a688ed85973c2215513638a1d0f56869c30a1530946dfb5fc0f1->enter($__internal_303af29871c9a688ed85973c2215513638a1d0f56869c30a1530946dfb5fc0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"search-bar\">
            <form method=\"GET\" action=\"\" class=\"js-sea-search sea-search\">
                <input type=\"search\" name=\"q\" placeholder=\"Search Sea Creatures\" autocomplete=\"off\" class=\"search-input\">
            </form>
        </div>
        <header class=\"header\">
            <img class=\"logo-icon\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/aquanote-logo.png"), "html", null, true);
        echo "\">
            <h1 class=\"logo\">AquaNote</h1>
            <ul class=\"navi\">
                <li class=\"search\"><a href=\"#\" class=\"js-header-search-toggle\"><i class=\"fa fa-search\"></i></a></li>
                <li><a href=\"#\">Login</a></li>
            </ul>
        </header>

        <div class=\"main-content\">";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "        </div>

        <div class=\"footer\">
            <p class=\"footer-text\">Made with <span class=\"heart\"><3</span> <a href=\"https://knpuniversity.com\">KnpUniversity</a></p>
        </div>";
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "    </body>
</html>
";
        
        $__internal_303af29871c9a688ed85973c2215513638a1d0f56869c30a1530946dfb5fc0f1->leave($__internal_303af29871c9a688ed85973c2215513638a1d0f56869c30a1530946dfb5fc0f1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ea127703a2448335fc1ea09dade221e3b94e95e23513fd094905f65d81f860c = $this->env->getExtension("native_profiler");
        $__internal_6ea127703a2448335fc1ea09dade221e3b94e95e23513fd094905f65d81f860c->enter($__internal_6ea127703a2448335fc1ea09dade221e3b94e95e23513fd094905f65d81f860c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AquaNote!";
        
        $__internal_6ea127703a2448335fc1ea09dade221e3b94e95e23513fd094905f65d81f860c->leave($__internal_6ea127703a2448335fc1ea09dade221e3b94e95e23513fd094905f65d81f860c_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_29cf72ba2bb9dfdd39d8d7c23678b2da877dafa482bafd8abd85cf76c87b208d = $this->env->getExtension("native_profiler");
        $__internal_29cf72ba2bb9dfdd39d8d7c23678b2da877dafa482bafd8abd85cf76c87b208d->enter($__internal_29cf72ba2bb9dfdd39d8d7c23678b2da877dafa482bafd8abd85cf76c87b208d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">";
        
        $__internal_29cf72ba2bb9dfdd39d8d7c23678b2da877dafa482bafd8abd85cf76c87b208d->leave($__internal_29cf72ba2bb9dfdd39d8d7c23678b2da877dafa482bafd8abd85cf76c87b208d_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_27ad711ab4942e9d8400ded28b46928cb79e52283e52f2ab02842be7c81e7461 = $this->env->getExtension("native_profiler");
        $__internal_27ad711ab4942e9d8400ded28b46928cb79e52283e52f2ab02842be7c81e7461->enter($__internal_27ad711ab4942e9d8400ded28b46928cb79e52283e52f2ab02842be7c81e7461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_27ad711ab4942e9d8400ded28b46928cb79e52283e52f2ab02842be7c81e7461->leave($__internal_27ad711ab4942e9d8400ded28b46928cb79e52283e52f2ab02842be7c81e7461_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_347b4e733b3f32d3fac83c540d1ec66496fbf374af5075c5b1ae23013afa598a = $this->env->getExtension("native_profiler");
        $__internal_347b4e733b3f32d3fac83c540d1ec66496fbf374af5075c5b1ae23013afa598a->enter($__internal_347b4e733b3f32d3fac83c540d1ec66496fbf374af5075c5b1ae23013afa598a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "            <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
            <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_347b4e733b3f32d3fac83c540d1ec66496fbf374af5075c5b1ae23013afa598a->leave($__internal_347b4e733b3f32d3fac83c540d1ec66496fbf374af5075c5b1ae23013afa598a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 39,  132 => 38,  126 => 37,  115 => 30,  107 => 10,  103 => 9,  98 => 8,  92 => 7,  80 => 5,  71 => 41,  69 => 37,  63 => 31,  61 => 30,  50 => 21,  37 => 12,  35 => 7,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>{% block title %}AquaNote!{% endblock %}</title>*/
/* */
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/styles.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/font-awesome.min.css') }}">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <div class="search-bar">*/
/*             <form method="GET" action="" class="js-sea-search sea-search">*/
/*                 <input type="search" name="q" placeholder="Search Sea Creatures" autocomplete="off" class="search-input">*/
/*             </form>*/
/*         </div>*/
/*         <header class="header">*/
/*             <img class="logo-icon" src="{{ asset('images/aquanote-logo.png') }}">*/
/*             <h1 class="logo">AquaNote</h1>*/
/*             <ul class="navi">*/
/*                 <li class="search"><a href="#" class="js-header-search-toggle"><i class="fa fa-search"></i></a></li>*/
/*                 <li><a href="#">Login</a></li>*/
/*             </ul>*/
/*         </header>*/
/* */
/*         <div class="main-content">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/* */
/*         <div class="footer">*/
/*             <p class="footer-text">Made with <span class="heart"><3</span> <a href="https://knpuniversity.com">KnpUniversity</a></p>*/
/*         </div>*/
/* */
/*         {% block javascripts %}*/
/*             <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>*/
/*             <script src="{{ asset('js/main.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
