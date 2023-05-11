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

/* game/play.html.twig */
class __TwigTemplate_606fba2dbb433e562b0d90c7370eeb6c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/play.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/play.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "game/play.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Kortspelet 21";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"cardgame\">
    <h1 class=\"h121 text-center\"><span class=\"text-danger\">&hearts;</span> 
    <span class=\"text-dark\">&clubs;</span> Kortspel: 21 <span class=\"text-dark\">&spades;</span> 
    <span class=\"text-danger\">&diams;</span></h1>
    <div class=\"container gamecontainer\">
    ";
        // line 11
        if (((isset($context["closeGame"]) || array_key_exists("closeGame", $context) ? $context["closeGame"] : (function () { throw new RuntimeError('Variable "closeGame" does not exist.', 11, $this->source); })()) == false)) {
            // line 12
            echo "        ";
            // line 13
            echo "        <form method=\"post\" action=\"\">
            <div class=\"row justify-content-center\">
            ";
            // line 15
            if (((isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 15, $this->source); })()) == null)) {
                // line 16
                echo "                <div class=\"col-5\">
                <input type=\"submit\" name=\"draw\" value=\"Dra kort\" class=\"btn btn-dark mb-2\"
                    onClick=\"this.form.action='";
                // line 18
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_draw");
                echo "';\">
                </div>
                ";
                // line 20
                if (((isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 20, $this->source); })()) != 0)) {
                    // line 21
                    echo "                <div class=\"col-3\">
                <input type=\"submit\" name=\"save\" value=\"Spara kort\" class=\"btn btn-light\"
                    onClick=\"this.form.action='";
                    // line 23
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_save");
                    echo "';\">
                </div>
                ";
                }
                // line 26
                echo "            ";
            } else {
                // line 27
                echo "                <div class=\"col-4\">
                <input type=\"submit\" name=\"restart\" value=\"Nästa runda\" class=\"btn btn-dark mb-2 btn-block\"
                    onClick=\"this.form.action='";
                // line 29
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_rematch");
                echo "';\">
                </div>
            ";
            }
            // line 32
            echo "            </div>
        </form>
        ";
            // line 35
            echo "        ";
            if ((((isset($context["hand"]) || array_key_exists("hand", $context) ? $context["hand"] : (function () { throw new RuntimeError('Variable "hand" does not exist.', 35, $this->source); })()) != []) && ((isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 35, $this->source); })()) == null))) {
                // line 36
                echo "            <div class=\"statistics mt-3\">
                <div class=\"row justify-content-between\">
                    <div class=\"col-4 bg-light py-1 shadow text-dark mb-3\">Nuvarande poäng: <b>";
                // line 38
                echo twig_escape_filter($this->env, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 38, $this->source); })()), "html", null, true);
                echo "</b></div>
                    <div class=\"col-5 bg-light py-1 shadow text-dark mb-3\">Chans att inte bli tjock: <b>";
                // line 39
                echo twig_escape_filter($this->env, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 39, $this->source); })()), "html", null, true);
                echo " %</b></div>
                </div>
            </div>
        ";
            } elseif (((((            // line 42
(isset($context["hand"]) || array_key_exists("hand", $context) ? $context["hand"] : (function () { throw new RuntimeError('Variable "hand" does not exist.', 42, $this->source); })()) == []) && ((isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 42, $this->source); })()) == null)) && ((isset($context["playerWon"]) || array_key_exists("playerWon", $context) ? $context["playerWon"] : (function () { throw new RuntimeError('Variable "playerWon" does not exist.', 42, $this->source); })()) == 0)) && ((isset($context["bankWon"]) || array_key_exists("bankWon", $context) ? $context["bankWon"] : (function () { throw new RuntimeError('Variable "bankWon" does not exist.', 42, $this->source); })()) == 0))) {
                // line 43
                echo "        ";
                // line 44
                echo "            <p class=\"my-5 text-center bg-info p-5 shadow\">Du spelar först, sedan är det bankens tur. 
            Du kan under spelets gång dra ett nytt kort eller välja att stanna. Dra ditt första kort för att börja, lycka till!</p>
        ";
            }
            // line 47
            echo "
        ";
            // line 48
            echo twig_include($this->env, $context, "game/flash.html.twig");
            echo "

        ";
            // line 51
            echo "        <div class=\"container\">
            <div class=\"row\">
                ";
            // line 53
            if (((isset($context["hand"]) || array_key_exists("hand", $context) ? $context["hand"] : (function () { throw new RuntimeError('Variable "hand" does not exist.', 53, $this->source); })()) != [])) {
                // line 54
                echo "                <div class=\"col\">
                    <h3 class=\"handh3\">Spelarens hand:</h3>
                    ";
                // line 56
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["hand"]) || array_key_exists("hand", $context) ? $context["hand"] : (function () { throw new RuntimeError('Variable "hand" does not exist.', 56, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                    // line 57
                    echo "                        <span class=\"drawn ";
                    echo twig_escape_filter($this->env, $context["card"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["card"], "html", null, true);
                    echo "</span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "                </div>
                ";
            }
            // line 61
            echo "                ";
            if (((isset($context["bankHand"]) || array_key_exists("bankHand", $context) ? $context["bankHand"] : (function () { throw new RuntimeError('Variable "bankHand" does not exist.', 61, $this->source); })()) != [])) {
                // line 62
                echo "                <div class=\"col\">
                    <h3 class=\"handh3\">Bankens hand:</h3>
                    ";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["bankHand"]) || array_key_exists("bankHand", $context) ? $context["bankHand"] : (function () { throw new RuntimeError('Variable "bankHand" does not exist.', 64, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                    // line 65
                    echo "                        <span class=\"drawn ";
                    echo twig_escape_filter($this->env, $context["card"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["card"], "html", null, true);
                    echo "</span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "                </div>
                ";
            }
            // line 69
            echo "            </div>
        </div>

        ";
            // line 73
            echo "        <div class=\"mt-4\">
            <h2>Ställning:</h2>
            <div class=\"row justify-content-between\">
                <div class=\"col-5\">
                    <h3>Spelare</h3>
                    <div>Spelaren har: ";
            // line 78
            echo twig_escape_filter($this->env, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 78, $this->source); })()), "html", null, true);
            echo " poäng</div>
                    <div>Spelaren har vunnit: ";
            // line 79
            echo twig_escape_filter($this->env, (isset($context["playerWon"]) || array_key_exists("playerWon", $context) ? $context["playerWon"] : (function () { throw new RuntimeError('Variable "playerWon" does not exist.', 79, $this->source); })()), "html", null, true);
            echo " rundor</div>
                    <div>Spelarens pengar: ";
            // line 80
            echo twig_escape_filter($this->env, (isset($context["playerCurrency"]) || array_key_exists("playerCurrency", $context) ? $context["playerCurrency"] : (function () { throw new RuntimeError('Variable "playerCurrency" does not exist.', 80, $this->source); })()), "html", null, true);
            echo "</div>
                </div>
                <div class=\"col-5\">
                    <h3>Bank</h3>
                    <div>Banken har: ";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["bank"]) || array_key_exists("bank", $context) ? $context["bank"] : (function () { throw new RuntimeError('Variable "bank" does not exist.', 84, $this->source); })()), "html", null, true);
            echo " poäng</div>
                    <div>Banken har vunnit: ";
            // line 85
            echo twig_escape_filter($this->env, (isset($context["bankWon"]) || array_key_exists("bankWon", $context) ? $context["bankWon"] : (function () { throw new RuntimeError('Variable "bankWon" does not exist.', 85, $this->source); })()), "html", null, true);
            echo " rundor</div>
                    <div>Bankens pengar: ";
            // line 86
            echo twig_escape_filter($this->env, (isset($context["bankCurrency"]) || array_key_exists("bankCurrency", $context) ? $context["bankCurrency"] : (function () { throw new RuntimeError('Variable "bankCurrency" does not exist.', 86, $this->source); })()), "html", null, true);
            echo "</div>
                </div>
            </div>
        </div>

    ";
            // line 92
            echo "    ";
        } elseif (((isset($context["closeGame"]) || array_key_exists("closeGame", $context) ? $context["closeGame"] : (function () { throw new RuntimeError('Variable "closeGame" does not exist.', 92, $this->source); })()) == true)) {
            // line 93
            echo "        <div style=\"display:none;\">";
            echo twig_include($this->env, $context, "game/flash.html.twig");
            echo "</div>
        ";
            // line 94
            if (((isset($context["playerWon"]) || array_key_exists("playerWon", $context) ? $context["playerWon"] : (function () { throw new RuntimeError('Variable "playerWon" does not exist.', 94, $this->source); })()) < (isset($context["bankWon"]) || array_key_exists("bankWon", $context) ? $context["bankWon"] : (function () { throw new RuntimeError('Variable "bankWon" does not exist.', 94, $this->source); })()))) {
                // line 95
                echo "            <div class=\"my-5 text-center bg-info p-5 shadow\"><p><b>Banken vann</b> med ";
                echo twig_escape_filter($this->env, (isset($context["bankWon"]) || array_key_exists("bankWon", $context) ? $context["bankWon"] : (function () { throw new RuntimeError('Variable "bankWon" does not exist.', 95, $this->source); })()), "html", null, true);
                echo " vunna rundor och ";
                echo twig_escape_filter($this->env, (isset($context["bankCurrency"]) || array_key_exists("bankCurrency", $context) ? $context["bankCurrency"] : (function () { throw new RuntimeError('Variable "bankCurrency" does not exist.', 95, $this->source); })()), "html", null, true);
                echo " pengar kvar</p>
            <p>Spelaren hade ";
                // line 96
                echo twig_escape_filter($this->env, (isset($context["playerWon"]) || array_key_exists("playerWon", $context) ? $context["playerWon"] : (function () { throw new RuntimeError('Variable "playerWon" does not exist.', 96, $this->source); })()), "html", null, true);
                echo " vunna rundor och ";
                echo twig_escape_filter($this->env, (isset($context["playerCurrency"]) || array_key_exists("playerCurrency", $context) ? $context["playerCurrency"] : (function () { throw new RuntimeError('Variable "playerCurrency" does not exist.', 96, $this->source); })()), "html", null, true);
                echo " pengar kvar</p></div>
            <form method=\"post\" action=\"\">
            <input type=\"submit\" name=\"draw\" value=\"Spela igen\" class=\"btn btn-dark mb-2 btn-block\"
                        onClick=\"this.form.action='";
                // line 99
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_home");
                echo "';\">
            </form>
        ";
            } elseif ((            // line 101
(isset($context["playerWon"]) || array_key_exists("playerWon", $context) ? $context["playerWon"] : (function () { throw new RuntimeError('Variable "playerWon" does not exist.', 101, $this->source); })()) > (isset($context["bankWon"]) || array_key_exists("bankWon", $context) ? $context["bankWon"] : (function () { throw new RuntimeError('Variable "bankWon" does not exist.', 101, $this->source); })()))) {
                // line 102
                echo "            <div class=\"my-5 text-center bg-info p-5 shadow\"><p><b>Spelaren vann</b> med ";
                echo twig_escape_filter($this->env, (isset($context["playerWon"]) || array_key_exists("playerWon", $context) ? $context["playerWon"] : (function () { throw new RuntimeError('Variable "playerWon" does not exist.', 102, $this->source); })()), "html", null, true);
                echo " vunna rundor och ";
                echo twig_escape_filter($this->env, (isset($context["playerCurrency"]) || array_key_exists("playerCurrency", $context) ? $context["playerCurrency"] : (function () { throw new RuntimeError('Variable "playerCurrency" does not exist.', 102, $this->source); })()), "html", null, true);
                echo " pengar kvar. Grattis!</p>
            <p>Banken hade ";
                // line 103
                echo twig_escape_filter($this->env, (isset($context["bankWon"]) || array_key_exists("bankWon", $context) ? $context["bankWon"] : (function () { throw new RuntimeError('Variable "bankWon" does not exist.', 103, $this->source); })()), "html", null, true);
                echo " vunna rundor och ";
                echo twig_escape_filter($this->env, (isset($context["bankCurrency"]) || array_key_exists("bankCurrency", $context) ? $context["bankCurrency"] : (function () { throw new RuntimeError('Variable "bankCurrency" does not exist.', 103, $this->source); })()), "html", null, true);
                echo " pengar kvar</p></div>
            <form method=\"post\" action=\"\">
            <input type=\"submit\" name=\"draw\" value=\"Spela igen\" class=\"btn btn-dark mb-2 btn-block\"
                        onClick=\"this.form.action='";
                // line 106
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_home");
                echo "';\">
            </form>
        ";
            } else {
                // line 109
                echo "            <div class=\"my-5 text-center bg-info p-5 shadow\"><p>Det blev oavgjort!</p>
            <p>Spelaren hade ";
                // line 110
                echo twig_escape_filter($this->env, (isset($context["playerWon"]) || array_key_exists("playerWon", $context) ? $context["playerWon"] : (function () { throw new RuntimeError('Variable "playerWon" does not exist.', 110, $this->source); })()), "html", null, true);
                echo " vunna rundor och ";
                echo twig_escape_filter($this->env, (isset($context["playerCurrency"]) || array_key_exists("playerCurrency", $context) ? $context["playerCurrency"] : (function () { throw new RuntimeError('Variable "playerCurrency" does not exist.', 110, $this->source); })()), "html", null, true);
                echo " pengar kvar</p>
            <p>Banken hade ";
                // line 111
                echo twig_escape_filter($this->env, (isset($context["bankWon"]) || array_key_exists("bankWon", $context) ? $context["bankWon"] : (function () { throw new RuntimeError('Variable "bankWon" does not exist.', 111, $this->source); })()), "html", null, true);
                echo " vunna rundor och ";
                echo twig_escape_filter($this->env, (isset($context["bankCurrency"]) || array_key_exists("bankCurrency", $context) ? $context["bankCurrency"] : (function () { throw new RuntimeError('Variable "bankCurrency" does not exist.', 111, $this->source); })()), "html", null, true);
                echo " pengar kvar</p></div>
            <form method=\"post\" action=\"\">
            <input type=\"submit\" name=\"draw\" value=\"Spela igen\" class=\"btn btn-dark mb-2 btn-block\"
                onClick=\"this.form.action='";
                // line 114
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_home");
                echo "';\">
            </form>
        ";
            }
            // line 117
            echo "    ";
        }
        // line 118
        echo "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "game/play.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 118,  351 => 117,  345 => 114,  337 => 111,  331 => 110,  328 => 109,  322 => 106,  314 => 103,  307 => 102,  305 => 101,  300 => 99,  292 => 96,  285 => 95,  283 => 94,  278 => 93,  275 => 92,  267 => 86,  263 => 85,  259 => 84,  252 => 80,  248 => 79,  244 => 78,  237 => 73,  232 => 69,  228 => 67,  217 => 65,  213 => 64,  209 => 62,  206 => 61,  202 => 59,  191 => 57,  187 => 56,  183 => 54,  181 => 53,  177 => 51,  172 => 48,  169 => 47,  164 => 44,  162 => 43,  160 => 42,  154 => 39,  150 => 38,  146 => 36,  143 => 35,  139 => 32,  133 => 29,  129 => 27,  126 => 26,  120 => 23,  116 => 21,  114 => 20,  109 => 18,  105 => 16,  103 => 15,  99 => 13,  97 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Kortspelet 21{% endblock %}

{% block body %}
<div class=\"cardgame\">
    <h1 class=\"h121 text-center\"><span class=\"text-danger\">&hearts;</span> 
    <span class=\"text-dark\">&clubs;</span> Kortspel: 21 <span class=\"text-dark\">&spades;</span> 
    <span class=\"text-danger\">&diams;</span></h1>
    <div class=\"container gamecontainer\">
    {% if closeGame == false %}
        {# Buttons #}
        <form method=\"post\" action=\"\">
            <div class=\"row justify-content-center\">
            {% if flash == null %}
                <div class=\"col-5\">
                <input type=\"submit\" name=\"draw\" value=\"Dra kort\" class=\"btn btn-dark mb-2\"
                    onClick=\"this.form.action='{{ path('game_draw') }}';\">
                </div>
                {% if player != 0 %}
                <div class=\"col-3\">
                <input type=\"submit\" name=\"save\" value=\"Spara kort\" class=\"btn btn-light\"
                    onClick=\"this.form.action='{{ path('game_save') }}';\">
                </div>
                {% endif %}
            {% else %}
                <div class=\"col-4\">
                <input type=\"submit\" name=\"restart\" value=\"Nästa runda\" class=\"btn btn-dark mb-2 btn-block\"
                    onClick=\"this.form.action='{{ path('game_rematch') }}';\">
                </div>
            {% endif %}
            </div>
        </form>
        {# Statistics #}
        {% if hand != [] and flash == null %}
            <div class=\"statistics mt-3\">
                <div class=\"row justify-content-between\">
                    <div class=\"col-4 bg-light py-1 shadow text-dark mb-3\">Nuvarande poäng: <b>{{ player }}</b></div>
                    <div class=\"col-5 bg-light py-1 shadow text-dark mb-3\">Chans att inte bli tjock: <b>{{statistics}} %</b></div>
                </div>
            </div>
        {% elseif hand == [] and flash == null and playerWon == 0 and bankWon == 0 %}
        {# Info box #}
            <p class=\"my-5 text-center bg-info p-5 shadow\">Du spelar först, sedan är det bankens tur. 
            Du kan under spelets gång dra ett nytt kort eller välja att stanna. Dra ditt första kort för att börja, lycka till!</p>
        {% endif %}

        {{ include('game/flash.html.twig') }}

        {# Card hands #}
        <div class=\"container\">
            <div class=\"row\">
                {% if hand != [] %}
                <div class=\"col\">
                    <h3 class=\"handh3\">Spelarens hand:</h3>
                    {% for card in hand %}
                        <span class=\"drawn {{ card }}\">{{ card }}</span>
                    {% endfor %}
                </div>
                {% endif %}
                {% if bankHand != [] %}
                <div class=\"col\">
                    <h3 class=\"handh3\">Bankens hand:</h3>
                    {% for card in bankHand %}
                        <span class=\"drawn {{ card }}\">{{ card }}</span>
                    {% endfor %}
                </div>
                {% endif %}
            </div>
        </div>

        {# Score #}
        <div class=\"mt-4\">
            <h2>Ställning:</h2>
            <div class=\"row justify-content-between\">
                <div class=\"col-5\">
                    <h3>Spelare</h3>
                    <div>Spelaren har: {{ player }} poäng</div>
                    <div>Spelaren har vunnit: {{ playerWon }} rundor</div>
                    <div>Spelarens pengar: {{ playerCurrency }}</div>
                </div>
                <div class=\"col-5\">
                    <h3>Bank</h3>
                    <div>Banken har: {{ bank }} poäng</div>
                    <div>Banken har vunnit: {{ bankWon }} rundor</div>
                    <div>Bankens pengar: {{ bankCurrency }}</div>
                </div>
            </div>
        </div>

    {# End screen #}
    {% elseif closeGame == true %}
        <div style=\"display:none;\">{{ include('game/flash.html.twig') }}</div>
        {% if playerWon < bankWon %}
            <div class=\"my-5 text-center bg-info p-5 shadow\"><p><b>Banken vann</b> med {{ bankWon }} vunna rundor och {{ bankCurrency }} pengar kvar</p>
            <p>Spelaren hade {{ playerWon }} vunna rundor och {{ playerCurrency }} pengar kvar</p></div>
            <form method=\"post\" action=\"\">
            <input type=\"submit\" name=\"draw\" value=\"Spela igen\" class=\"btn btn-dark mb-2 btn-block\"
                        onClick=\"this.form.action='{{ path('game_home') }}';\">
            </form>
        {% elseif playerWon > bankWon %}
            <div class=\"my-5 text-center bg-info p-5 shadow\"><p><b>Spelaren vann</b> med {{ playerWon }} vunna rundor och {{ playerCurrency }} pengar kvar. Grattis!</p>
            <p>Banken hade {{ bankWon }} vunna rundor och {{ bankCurrency }} pengar kvar</p></div>
            <form method=\"post\" action=\"\">
            <input type=\"submit\" name=\"draw\" value=\"Spela igen\" class=\"btn btn-dark mb-2 btn-block\"
                        onClick=\"this.form.action='{{ path('game_home') }}';\">
            </form>
        {% else %}
            <div class=\"my-5 text-center bg-info p-5 shadow\"><p>Det blev oavgjort!</p>
            <p>Spelaren hade {{ playerWon }} vunna rundor och {{ playerCurrency }} pengar kvar</p>
            <p>Banken hade {{ bankWon }} vunna rundor och {{ bankCurrency }} pengar kvar</p></div>
            <form method=\"post\" action=\"\">
            <input type=\"submit\" name=\"draw\" value=\"Spela igen\" class=\"btn btn-dark mb-2 btn-block\"
                onClick=\"this.form.action='{{ path('game_home') }}';\">
            </form>
        {% endif %}
    {% endif %}
    </div>
</div>
{% endblock %}", "game/play.html.twig", "/home/meljoh/dbwebb-kurser/mvc/me/report/templates/game/play.html.twig");
    }
}
