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

/* README.md.twig */
class __TwigTemplate_6b1a07fd31d7d360f72bd84fc880b6a286f634cd823eb1bd182366a065658554 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "# ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->inflectorFilter("title", $this->getAttribute(($context["component"] ?? null), "name", [])), "html", null, true);
        echo " Theme

The **";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->inflectorFilter("title", $this->getAttribute(($context["component"] ?? null), "name", [])), "html", null, true);
        echo "** Theme is for [Grav CMS](http://github.com/getgrav/grav).  This README.md file should be modified to describe the features, installation, configuration, and general usage of this theme.

## Description

";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["component"] ?? null), "description", []), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "README.md.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("# {{ component.name|titleize }} Theme

The **{{ component.name|titleize }}** Theme is for [Grav CMS](http://github.com/getgrav/grav).  This README.md file should be modified to describe the features, installation, configuration, and general usage of this theme.

## Description

{{ component.description }}
", "README.md.twig", "D:\\xampp\\htdocs\\grav\\user\\plugins\\devtools\\components\\theme\\pure-blank\\README.md.twig");
    }
}
