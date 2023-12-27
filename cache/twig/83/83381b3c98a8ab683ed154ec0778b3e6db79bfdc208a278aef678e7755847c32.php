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

/* partials/navigation.html.twig */
class __TwigTemplate_2538afa3a21795eac9a1989d25431e282e9ab4a8610e0f6a3120c5da366da335 extends \Twig\Template
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
        // line 17
        echo "

";
        // line 19
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "dropdown", []), "enabled", [])) {
            // line 20
            echo "    ";
            echo $this->getAttribute($this, "loop", [0 => ($context["pages"] ?? null)], "method");
            echo "
";
        } else {
            // line 22
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 23
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("selected") : (""));
                // line 24
                echo "        <li class=\"";
                echo twig_escape_filter($this->env, ($context["current_page"] ?? null));
                echo "\">
            <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []));
                echo "\">
                ";
                // line 26
                if ($this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", [])) {
                    echo "<i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", []));
                    echo "\"></i>";
                }
                // line 27
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []));
                echo "
            </a>
        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 33
            echo "    <li>
        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "url", []));
            echo "\">
            ";
            // line 35
            if ($this->getAttribute($context["mitem"], "icon", [])) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "icon", []));
                echo "\"></i>";
            }
            // line 36
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "text", []));
            echo "
        </a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
";
    }

    // line 1
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("selected") : (""));
                // line 4
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0)) {
                    // line 5
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []));
                    echo "\" class=\"nav-link semi-bold text-white\">
                    ";
                    // line 6
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                        echo "<i class=\"fa fa-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []));
                        echo "\"></i>";
                    }
                    // line 7
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []));
                    echo "
                </a>
        ";
                } else {
                    // line 10
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []));
                    echo "\" class=\"nav-link semi-bold text-white\">
                ";
                    // line 11
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                        echo "<i class=\"fa fa-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []));
                        echo "\"></i>";
                    }
                    // line 12
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []));
                    echo "
            </a>
        ";
                }
                // line 15
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 15,  162 => 12,  156 => 11,  151 => 10,  144 => 7,  138 => 6,  133 => 5,  130 => 4,  127 => 3,  122 => 2,  110 => 1,  105 => 40,  94 => 36,  88 => 35,  84 => 34,  81 => 33,  77 => 32,  65 => 27,  59 => 26,  55 => 25,  50 => 24,  47 => 23,  42 => 22,  36 => 20,  34 => 19,  30 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro loop(page) %}
    {% for p in page.children.visible %}
        {% set current_page = (p.active or p.activeChild) ? 'selected' : '' %}
        {% if p.children.visible.count > 0 %}
                <a href=\"{{ p.url|e }}\" class=\"nav-link semi-bold text-white\">
                    {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon|e }}\"></i>{% endif %}
                    {{ p.menu|e }}
                </a>
        {% else %}
            <a href=\"{{ p.url|e }}\" class=\"nav-link semi-bold text-white\">
                {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon|e }}\"></i>{% endif %}
                {{ p.menu|e }}
            </a>
        {% endif %}
    {% endfor %}
{% endmacro %}


{% if config.theme.dropdown.enabled %}
    {{ _self.loop(pages) }}
{% else %}
    {% for page in pages.children.visible %}
        {% set current_page = (page.active or page.activeChild) ? 'selected' : '' %}
        <li class=\"{{ current_page|e }}\">
            <a href=\"{{ page.url|e }}\">
                {% if page.header.icon %}<i class=\"fa fa-{{ page.header.icon|e }}\"></i>{% endif %}
                {{ page.menu|e }}
            </a>
        </li>
    {% endfor %}
{% endif %}
{% for mitem in site.menu %}
    <li>
        <a href=\"{{ mitem.url|e }}\">
            {% if mitem.icon %}<i class=\"fa fa-{{ mitem.icon|e }}\"></i>{% endif %}
            {{ mitem.text|e }}
        </a>
    </li>
{% endfor %}

", "partials/navigation.html.twig", "D:\\xampp\\htdocs\\grav\\user\\themes\\decor\\templates\\partials\\navigation.html.twig");
    }
}
