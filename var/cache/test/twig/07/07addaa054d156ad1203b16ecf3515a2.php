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

/* game/doc.html.twig */
class __TwigTemplate_ac9318df657de7057ca9999e309f88c6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/doc.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/doc.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "game/doc.html.twig", 1);
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

        echo "Doc för kortspel";
        
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
        echo "    <h1>Dokumentation kortspel</h1>
    <div class=\"container\">
        <div>
            <h2>Flödesschema</h2>
            <p>

            </p>
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/flowchart.png"), "html", null, true);
        echo "\" alt=\"Flow chart for card game 21\">
            <h2>Pseudokod</h2>
            <pre>
                Start game
                INIT game board with player and bank
                SHOW game board for player
                Draw one card for player
                Add value of card to players points
                IF player draws another card THEN
                    WHILE player draws another card 
                        Draw one card for player
                        Add value of card to players points
                    ENDWHILE
                ELSE
                    IF players points is over 21 THEN
                        Bank has won
                    ELSE
                        WHILE bank's points are under 17
                            Bank draws cards
                        ENDWHILE
                        IF bank gets over 21 points THEN
                            Player has won
                        ELSE
                            Check points for bank and player
                            IF bank has more points or both has same points THEN
                                Bank has won
                            ELSE
                                Player has won
                            ENDIF
                        ENDIF
                    ENDIF
                ENDIF
                PRINT winner and end round
                DISPLAY button to play again
            </pre>
            <h2>Klasser</h2>
            <p>
                <b>Player:</b> Klass som håller spelarna och dess poäng<br>
                <b>GameBoard:</b> Funktionalitet för själva kortspelet<br>
                <b>DeckOfCards:</b> Klass som håller kortleken<br>
                <b>CardGraphic:</b> Ger en bildrepresentation av varje kort<br>
                <b>CardHand:</b> Håller alla dragna kort
            </p>

            <h2>Bank förklaring</h2>
            <p>
                <b>Dumma banken:</b> Drar kort tills att den fått 17 poäng eller mer.<br>
                <b>Smarta banken:</b> Använder sig av statistik och drar kort medan<br> 
                \"chansen för att inte bli tjock\" (dvs inte få över 21) är över 40%.
            </p>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "game/doc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Doc för kortspel{% endblock %}

{% block body %}
    <h1>Dokumentation kortspel</h1>
    <div class=\"container\">
        <div>
            <h2>Flödesschema</h2>
            <p>

            </p>
            <img src=\"{{ asset('img/flowchart.png') }}\" alt=\"Flow chart for card game 21\">
            <h2>Pseudokod</h2>
            <pre>
                Start game
                INIT game board with player and bank
                SHOW game board for player
                Draw one card for player
                Add value of card to players points
                IF player draws another card THEN
                    WHILE player draws another card 
                        Draw one card for player
                        Add value of card to players points
                    ENDWHILE
                ELSE
                    IF players points is over 21 THEN
                        Bank has won
                    ELSE
                        WHILE bank's points are under 17
                            Bank draws cards
                        ENDWHILE
                        IF bank gets over 21 points THEN
                            Player has won
                        ELSE
                            Check points for bank and player
                            IF bank has more points or both has same points THEN
                                Bank has won
                            ELSE
                                Player has won
                            ENDIF
                        ENDIF
                    ENDIF
                ENDIF
                PRINT winner and end round
                DISPLAY button to play again
            </pre>
            <h2>Klasser</h2>
            <p>
                <b>Player:</b> Klass som håller spelarna och dess poäng<br>
                <b>GameBoard:</b> Funktionalitet för själva kortspelet<br>
                <b>DeckOfCards:</b> Klass som håller kortleken<br>
                <b>CardGraphic:</b> Ger en bildrepresentation av varje kort<br>
                <b>CardHand:</b> Håller alla dragna kort
            </p>

            <h2>Bank förklaring</h2>
            <p>
                <b>Dumma banken:</b> Drar kort tills att den fått 17 poäng eller mer.<br>
                <b>Smarta banken:</b> Använder sig av statistik och drar kort medan<br> 
                \"chansen för att inte bli tjock\" (dvs inte få över 21) är över 40%.
            </p>
        </div>
    </div>
{% endblock %}", "game/doc.html.twig", "/home/meljoh/dbwebb-kurser/mvc/me/report/templates/game/doc.html.twig");
    }
}
