<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* team/index.html.twig */
class __TwigTemplate_959a4cd198d53eb5007c90871b275fd8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "team/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Team index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section class=\"container pt-5\">
        <div class=\"shadow p-5 mb-5 bg-body rounded\">
            <div class=\"d-flex align-items-center mb-5\">
                <h2>All Teams</h2>
                <a class=\"btn btn-primary ms-auto\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_new");
        echo "\">Create new team</a>
            </div>
            <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered\">
                    <thead>
                        <tr>
                            <th class=\"text-center\">#</th>
                            <th>Name</th>
                            <th>Country</th>
                            <th>Balance</th>
                            <th  class=\"text-center\">actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 25
            echo "                        <tr class=\"align-middle\">
                            <td class=\"text-center\" scope=\"row\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                            <td class=\"col-3\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "country", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                            <td>\$";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "balance", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                            <td class=\"text-nowrap col-4 text-center\">
                                <a class=\"btn btn-sm btn-secondary\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_player_teamplayer", ["id" => twig_get_attribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">Player List</a>
                                <a class=\"btn btn-sm btn-success\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_player_index", ["teamId" => twig_get_attribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">Buy Player</a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "                        <tr>
                            <td colspan=\"3\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                    </tbody>
                </table>
            </div>
        </div>
        
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "team/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 40,  134 => 36,  125 => 32,  121 => 31,  116 => 29,  112 => 28,  108 => 27,  104 => 26,  101 => 25,  96 => 24,  79 => 10,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Team index{% endblock %}

{% block body %}
    <section class=\"container pt-5\">
        <div class=\"shadow p-5 mb-5 bg-body rounded\">
            <div class=\"d-flex align-items-center mb-5\">
                <h2>All Teams</h2>
                <a class=\"btn btn-primary ms-auto\" href=\"{{ path('app_team_new') }}\">Create new team</a>
            </div>
            <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered\">
                    <thead>
                        <tr>
                            <th class=\"text-center\">#</th>
                            <th>Name</th>
                            <th>Country</th>
                            <th>Balance</th>
                            <th  class=\"text-center\">actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for team in teams %}
                        <tr class=\"align-middle\">
                            <td class=\"text-center\" scope=\"row\">{{ team.id }}</td>
                            <td class=\"col-3\">{{ team.name }}</td>
                            <td>{{ team.country }}</td>
                            <td>\${{ team.balance }}</td>
                            <td class=\"text-nowrap col-4 text-center\">
                                <a class=\"btn btn-sm btn-secondary\" href=\"{{ path('app_player_teamplayer', {'id': team.id}) }}\">Player List</a>
                                <a class=\"btn btn-sm btn-success\" href=\"{{ path('app_player_index' , {'teamId':team.id}) }}\">Buy Player</a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"3\">no records found</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
        
    </section>
{% endblock %}
", "team/index.html.twig", "/var/www/html/betting/templates/team/index.html.twig");
    }
}
