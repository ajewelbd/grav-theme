<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_6fb15a7b0f1085cb30bad0df74e3ce5253af6bb58878919ec2cef48e94af352c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'mobile_navigation' => [$this, 'block_mobile_navigation'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))));
        echo "\">
<head>
";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('assets', $context, $blocks);
        // line 35
        echo "</head>
<body id=\"top\" class=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []));
        echo "\">

";
        // line 38
        $this->displayBlock('header', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('footer', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('bottom', $context, $blocks);
        // line 75
        echo "
</body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 6
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []));
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []));
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 10
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 10)->display($context);
        // line 11
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/logo.png"));
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "canonical", [0 => true], "method"));
        echo "\" />
";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 17
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/style.css", 1 => 98], "method");
        // line 18
        echo "    ";
        if (($this->getAttribute(($context["page"] ?? null), "route", []) == "/")) {
            // line 19
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/home.css", 1 => 97], "method");
            // line 20
            echo "    ";
        }
        // line 21
        echo "
    ";
        // line 22
        if (($this->getAttribute(($context["page"] ?? null), "route", []) == "/about-us")) {
            // line 23
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/about.css", 1 => 96], "method");
            // line 24
            echo "    ";
        }
    }

    // line 27
    public function block_javascripts($context, array $blocks = [])
    {
        // line 28
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 100], "method");
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 31
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 32
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 33
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 38
    public function block_header($context, array $blocks = [])
    {
        // line 39
        echo "    <header>
        <nav class=\"nav flex justify-between items-center\" role=\"navigation\">
            ";
        // line 41
        $this->displayBlock('mobile_navigation', $context, $blocks);
        // line 50
        echo "            <a href=\"";
        echo twig_escape_filter($this->env, ($context["home_url"] ?? null));
        echo "\">
                <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/logo.svg"));
        echo "\" width=\"128\" height=\"65\" alt=\"Logo\" />
            </a>
            ";
        // line 53
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 58
        echo "        </nav>
    </header>
";
    }

    // line 41
    public function block_mobile_navigation($context, array $blocks = [])
    {
        // line 42
        echo "            <div class=\"mobile-menu\">
                <input type=\"checkbox\" class=\"menu-checkbox\" />
                <div class=\"menu-icon\"></div>
                <div class=\"flex flex-col mobile-menus\">
                    ";
        // line 46
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 46)->display($context);
        // line 47
        echo "                </div>
            </div>
            ";
    }

    // line 53
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 54
        echo "            <div class=\"nav-links flex\">
                ";
        // line 55
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 55)->display($context);
        // line 56
        echo "            </div>
            ";
    }

    // line 62
    public function block_body($context, array $blocks = [])
    {
        // line 63
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
    }

    // line 66
    public function block_footer($context, array $blocks = [])
    {
        // line 67
        echo "    <footer>
        <p>Copyright © Lorem Ipsum 2023. | All rights reserved.</p>
    </footer>
";
    }

    // line 72
    public function block_bottom($context, array $blocks = [])
    {
        // line 73
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 73,  267 => 72,  260 => 67,  257 => 66,  248 => 63,  245 => 62,  240 => 56,  238 => 55,  235 => 54,  232 => 53,  226 => 47,  224 => 46,  218 => 42,  215 => 41,  209 => 58,  207 => 53,  202 => 51,  197 => 50,  195 => 41,  191 => 39,  188 => 38,  181 => 33,  176 => 32,  173 => 31,  163 => 28,  160 => 27,  155 => 24,  152 => 23,  150 => 22,  147 => 21,  144 => 20,  141 => 19,  138 => 18,  135 => 17,  132 => 16,  126 => 13,  122 => 12,  119 => 11,  117 => 10,  106 => 6,  103 => 5,  100 => 4,  92 => 75,  90 => 72,  87 => 71,  85 => 66,  82 => 65,  80 => 62,  77 => 61,  75 => 38,  70 => 36,  67 => 35,  65 => 31,  62 => 30,  60 => 27,  57 => 26,  55 => 16,  52 => 15,  50 => 4,  45 => 2,  42 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ (grav.language.getActive ?: grav.config.site.default_lang)|e }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e }} | {% endif %}{{ site.title|e }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png')|e }}\" />
    <link rel=\"canonical\" href=\"{{ page.canonical(true)|e }}\" />
{% endblock head %}

{% block stylesheets %}
    {% do assets.addCss('theme://css/style.css', 98) %}
    {% if page.route == '/' %}
        {% do assets.addCss('theme://css/home.css', 97) %}
    {% endif %}

    {% if page.route == '/about-us' %}
        {% do assets.addCss('theme://css/about.css', 96) %}
    {% endif %}
{% endblock %}

{% block javascripts %}
    {% do assets.addJs('jquery', 100) %}
{% endblock %}

{% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
{% endblock %}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes|e }}\">

{% block header %}
    <header>
        <nav class=\"nav flex justify-between items-center\" role=\"navigation\">
            {% block mobile_navigation %}
            <div class=\"mobile-menu\">
                <input type=\"checkbox\" class=\"menu-checkbox\" />
                <div class=\"menu-icon\"></div>
                <div class=\"flex flex-col mobile-menus\">
                    {% include 'partials/navigation.html.twig' %}
                </div>
            </div>
            {% endblock %}
            <a href=\"{{ home_url|e }}\">
                <img src=\"{{ url('theme://images/logo.svg')|e }}\" width=\"128\" height=\"65\" alt=\"Logo\" />
            </a>
            {% block header_navigation %}
            <div class=\"nav-links flex\">
                {% include 'partials/navigation.html.twig' %}
            </div>
            {% endblock %}
        </nav>
    </header>
{% endblock %}

{% block body %}
    {% block content %}{% endblock %}
{% endblock %}

{% block footer %}
    <footer>
        <p>Copyright © Lorem Ipsum 2023. | All rights reserved.</p>
    </footer>
{% endblock %}

{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "D:\\xampp\\htdocs\\grav-theme\\user\\themes\\decor\\templates\\partials\\base.html.twig");
    }
    private $deferred;
}
