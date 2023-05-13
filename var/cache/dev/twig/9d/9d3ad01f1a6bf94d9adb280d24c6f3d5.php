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

/* player/players.html.twig */
class __TwigTemplate_b8d31a53230864ca8fe250c1a36e8de3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/players.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "player/players.html.twig", 1);
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
            <h2>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 9, $this->source); })()), "getName", [], "method", false, false, false, 9), "html", null, true);
        echo " Players </h2>
            <a class=\"btn btn-primary ms-auto\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_index");
        echo "\">Back to Home</a>
        </div>

        <div class=\"row\">
            ";
        // line 14
        if ((twig_length_filter($this->env, (isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 14, $this->source); })())) > 0)) {
            // line 15
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 16
                echo "            <div class=\"col-md-3 p-2\">
                <div class=\"card shadow rounded\">
                  <img src=\"/assets/profile.jpg\" class=\"card-img-top\" alt=\"...\">
                  <div class=\"card-body\">
                   <div class=\"d-flex pb-2\">
                        <h5 class=\"card-title\">";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "getName", [], "method", false, false, false, 21), "html", null, true);
                echo "</h5>
                        <h4 class=\"ms-auto\">\$";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "getPrice", [], "method", false, false, false, 22), "html", null, true);
                echo "</h4>
                   </div>
                   
                    <a class=\"btn btn-primary\" href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_player_sell", ["teamId" => twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "playerId" => twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 25)]), "html", null, true);
                echo "\">Sell Player</a>
                  </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "            ";
        } else {
            // line 31
            echo "                <p>No players found in this team.</p>
            ";
        }
        // line 33
        echo "        </div> 
    </div>
</section>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "player/players.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 33,  127 => 31,  124 => 30,  113 => 25,  107 => 22,  103 => 21,  96 => 16,  91 => 15,  89 => 14,  82 => 10,  78 => 9,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Team index{% endblock %}

{% block body %}
<section class=\"container pt-5\">
    <div class=\"shadow p-5 mb-5 bg-body rounded\">
        <div class=\"d-flex align-items-center mb-5\">
            <h2>{{ team.getName()  }} Players </h2>
            <a class=\"btn btn-primary ms-auto\" href=\"{{ path('app_team_index') }}\">Back to Home</a>
        </div>

        <div class=\"row\">
            {% if players|length > 0 %}
            {% for player in players %}
            <div class=\"col-md-3 p-2\">
                <div class=\"card shadow rounded\">
                  <img src=\"/assets/profile.jpg\" class=\"card-img-top\" alt=\"...\">
                  <div class=\"card-body\">
                   <div class=\"d-flex pb-2\">
                        <h5 class=\"card-title\">{{ player.getName() }}</h5>
                        <h4 class=\"ms-auto\">\${{ player.getPrice() }}</h4>
                   </div>
                   
                    <a class=\"btn btn-primary\" href=\"{{ path('app_player_sell' , {'teamId':team.id,'playerId':player.id}) }}\">Sell Player</a>
                  </div>
                </div>
            </div>
            {% endfor %}
            {% else %}
                <p>No players found in this team.</p>
            {% endif %}
        </div> 
    </div>
</section>
    
{% endblock %}
", "player/players.html.twig", "/var/www/html/betting/templates/player/players.html.twig");
    }
}
