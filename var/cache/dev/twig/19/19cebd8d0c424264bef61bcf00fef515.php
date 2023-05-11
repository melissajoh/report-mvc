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

/* api.html.twig */
class __TwigTemplate_05b39e69216b0d9493926a45653b7ea2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "api.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "api.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "api.html.twig", 1);
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

        echo "Routes";
        
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
        echo "    <h1>Sammanställning av routes</h1>
    <div>
        <div>
            <p><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quote");
        echo "\">api/quotes</a>: Route som visar dagens quote, dagens datum och tidsstämpel</p>
        </div>

        <div>
            <p><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deck");
        echo "\">api/deck</a>: Route som returnerar JSON-struktur med sorterad kortlek</p>
        </div>

        <div>
            <p><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shuffle");
        echo "\">api/deck/shuffle</a>: Route som returnerar blandad kortlek</p>
        </div>

        <div>
            <p><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("draw");
        echo "\">api/deck/draw</a>: Route där 1 kort dras från kortleken</p>
        </div>

        <div>
            <p><a href=\"";
        // line 25
        echo "api/deck/draw/3";
        echo "\">api/deck/draw/:number</a>: Route där :number kort dras från kortleken</p>
        </div>

        <div>
            <p><a href=\"";
        // line 29
        echo "api/game";
        echo "\">api/game</a>: Visar den aktuella ställningen för kortspelet 21</p>
        </div>

        <div>
            <p><a href=\"";
        // line 33
        echo "api/library/books";
        echo "\">api/library/books</a>: Bibliotek med alla böcker</p>
        </div>

        <div>
            <p><a href=\"";
        // line 37
        echo "api/library/book/9789129723946";
        echo "\">api/library/books/&lt;isbn&gt;</a>: Leder till en bok med angett ISBN-nummer</p>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "api.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 37,  135 => 33,  128 => 29,  121 => 25,  114 => 21,  107 => 17,  100 => 13,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Routes{% endblock %}

{% block body %}
    <h1>Sammanställning av routes</h1>
    <div>
        <div>
            <p><a href=\"{{ path('quote') }}\">api/quotes</a>: Route som visar dagens quote, dagens datum och tidsstämpel</p>
        </div>

        <div>
            <p><a href=\"{{ path('deck') }}\">api/deck</a>: Route som returnerar JSON-struktur med sorterad kortlek</p>
        </div>

        <div>
            <p><a href=\"{{ path('shuffle') }}\">api/deck/shuffle</a>: Route som returnerar blandad kortlek</p>
        </div>

        <div>
            <p><a href=\"{{ path('draw') }}\">api/deck/draw</a>: Route där 1 kort dras från kortleken</p>
        </div>

        <div>
            <p><a href=\"{{ 'api/deck/draw/3' }}\">api/deck/draw/:number</a>: Route där :number kort dras från kortleken</p>
        </div>

        <div>
            <p><a href=\"{{ 'api/game' }}\">api/game</a>: Visar den aktuella ställningen för kortspelet 21</p>
        </div>

        <div>
            <p><a href=\"{{ 'api/library/books' }}\">api/library/books</a>: Bibliotek med alla böcker</p>
        </div>

        <div>
            <p><a href=\"{{ 'api/library/book/9789129723946' }}\">api/library/books/&lt;isbn&gt;</a>: Leder till en bok med angett ISBN-nummer</p>
        </div>
    </div>
{% endblock %}
", "api.html.twig", "/home/meljoh/dbwebb-kurser/mvc/me/report/templates/api.html.twig");
    }
}
