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

/* player/index.html.twig */
class __TwigTemplate_bdc3346f676edb93a03a1eadcd774ce1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "player/index.html.twig", 1);
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
        echo "<section class=\"container pt-5\">
    <div class=\"shadow p-5 mb-5 bg-body rounded\">
        <div class=\"d-flex align-items-center mb-5\">
            <h2>Available Players</h2>
            <a class=\"btn btn-primary ms-auto\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_index");
        echo "\">Back to Home</a>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-striped table-bordered\">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Price</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 24
            echo "                    <tr class=\"align-middle\">
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "surname", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "price", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                        <td class=\"text-center\">
                            <a class=\"btn btn-sm btn-info\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_player_buy", ["playerId" => twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 29), "teamId" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 29, $this->source); })())]), "html", null, true);
            echo "\">Buy Now</a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "                    <tr>
                        <td colspan=\"4\">no records found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </tbody>
            </table>
        </div>
    </div>
</section>

    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "player/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 37,  125 => 33,  116 => 29,  111 => 27,  107 => 26,  103 => 25,  100 => 24,  95 => 23,  79 => 10,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Team index{% endblock %}

{% block body %}
<section class=\"container pt-5\">
    <div class=\"shadow p-5 mb-5 bg-body rounded\">
        <div class=\"d-flex align-items-center mb-5\">
            <h2>Available Players</h2>
            <a class=\"btn btn-primary ms-auto\" href=\"{{ path('app_team_index') }}\">Back to Home</a>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-striped table-bordered\">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Price</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                {% for player in players %}
                    <tr class=\"align-middle\">
                        <td>{{ player.name }}</td>
                        <td>{{ player.surname }}</td>
                        <td>{{ player.price }}</td>
                        <td class=\"text-center\">
                            <a class=\"btn btn-sm btn-info\" href=\"{{ path('app_player_buy', {'playerId':player.id, 'teamId': teamId }) }}\">Buy Now</a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"4\">no records found</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</section>

    
{% endblock %}
", "player/index.html.twig", "/var/www/html/betting/templates/player/index.html.twig");
    }
}
