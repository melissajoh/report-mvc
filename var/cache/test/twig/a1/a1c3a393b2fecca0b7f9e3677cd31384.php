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

/* game/home.html.twig */
class __TwigTemplate_f734b761e7b54ce0a6ac33f294adea03 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "game/home.html.twig", 1);
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

        echo "Kortspel landningssida";
        
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
        echo "    <h1 class=\"text-center gameh1\"><span class=\"text-danger\">&hearts;</span> 
    &clubs; Kortspelet 21 &spades; <span class=\"text-danger\">&diams;</span></h1>
    <div class=\"container\">
        <div class=\"row justify-content-end\">
            <div class=\"col-8 p-2 mt-2 text-center\">
            <p>
                I kortspelet 21 spelar en spelare mot banken. Målet är att få ihop kort som är värda 21.
                Överskrider värdet 21 förlorar man, underskrider värdet vinner den som är närmast 21.
                Ess är värt 1 eller 14 beroende på vad som är mest fördelaktigt för spelaren. Knekt 11, dam 12, kung 13.
                Resten av korten är värda sitt respektive nummer.
            </p>
            <p>
                Spelaren börjar att ta kort tills denne är nöjd. Över 21 så vinner banken. 21 så vinner spelaren. När spelaren känner sig klar 
                är det bankens tur. Banken plockar kort tills den stannar eller har över 21.
                Blir det lika vinner banken, har banken över 21 eller mindre än spelaren vinner spelaren.
            </p>
            <p>
                Spelet består av rundor som fortsätter tills kortleken är slut eller tills spelaren eller banken har 0 pengar kvar.
                Banken kan vara \"dum\" eller \"smart\", valet görs nedan.
            </p>
                <form method=\"post\" action=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_init");
        echo "\" class=\"text-center mt-5 form-group\">
                    <label for=\"bank\"><b>Väl bank att spela mot:</b></label>
                    <select id=\"bank\" name=\"bank\" class=\"form-control\">
                        <option value=\"dumb\">Dum bank</option>
                        <option value=\"smart\">Smart bank</option>
                    </select>
                    <label for=\"bet\"><b>Väl hur mycket du vill satsa varje runda:</b></label>
                    <input type=\"number\" name=\"bet\" min=\"0\" max=\"100\" value=\"10\" class=\"form-control\">
                    <input type=\"submit\" name=\"do_it\" value=\"Starta spelet\" class=\"btn btn-success btn-block mt-2\">
                </form>
            </div>
            <div class=\"col-2\">
                <ul class=\"list-group list-group-flush\">
                    <li class=\"list-group-item\"><a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_doc");
        echo "\">Doc</a></li>
                </ul>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "game/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 39,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Kortspel landningssida{% endblock %}

{% block body %}
    <h1 class=\"text-center gameh1\"><span class=\"text-danger\">&hearts;</span> 
    &clubs; Kortspelet 21 &spades; <span class=\"text-danger\">&diams;</span></h1>
    <div class=\"container\">
        <div class=\"row justify-content-end\">
            <div class=\"col-8 p-2 mt-2 text-center\">
            <p>
                I kortspelet 21 spelar en spelare mot banken. Målet är att få ihop kort som är värda 21.
                Överskrider värdet 21 förlorar man, underskrider värdet vinner den som är närmast 21.
                Ess är värt 1 eller 14 beroende på vad som är mest fördelaktigt för spelaren. Knekt 11, dam 12, kung 13.
                Resten av korten är värda sitt respektive nummer.
            </p>
            <p>
                Spelaren börjar att ta kort tills denne är nöjd. Över 21 så vinner banken. 21 så vinner spelaren. När spelaren känner sig klar 
                är det bankens tur. Banken plockar kort tills den stannar eller har över 21.
                Blir det lika vinner banken, har banken över 21 eller mindre än spelaren vinner spelaren.
            </p>
            <p>
                Spelet består av rundor som fortsätter tills kortleken är slut eller tills spelaren eller banken har 0 pengar kvar.
                Banken kan vara \"dum\" eller \"smart\", valet görs nedan.
            </p>
                <form method=\"post\" action=\"{{ path('game_init') }}\" class=\"text-center mt-5 form-group\">
                    <label for=\"bank\"><b>Väl bank att spela mot:</b></label>
                    <select id=\"bank\" name=\"bank\" class=\"form-control\">
                        <option value=\"dumb\">Dum bank</option>
                        <option value=\"smart\">Smart bank</option>
                    </select>
                    <label for=\"bet\"><b>Väl hur mycket du vill satsa varje runda:</b></label>
                    <input type=\"number\" name=\"bet\" min=\"0\" max=\"100\" value=\"10\" class=\"form-control\">
                    <input type=\"submit\" name=\"do_it\" value=\"Starta spelet\" class=\"btn btn-success btn-block mt-2\">
                </form>
            </div>
            <div class=\"col-2\">
                <ul class=\"list-group list-group-flush\">
                    <li class=\"list-group-item\"><a href=\"{{ path('game_doc') }}\">Doc</a></li>
                </ul>
            </div>
        </div>
    </div>
{% endblock %}", "game/home.html.twig", "/home/meljoh/dbwebb-kurser/mvc/me/report/templates/game/home.html.twig");
    }
}
