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

/* metrics.html.twig */
class __TwigTemplate_7949a380357663ceef704d4a69741c83 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "metrics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "metrics.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "metrics.html.twig", 1);
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

        echo "Metrics";
        
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
        echo "<h1>Metrics analys</h1>
<h2 id=\"intro\">Introduktion</h2>
<pre>
De sex C:na om kodkvalitet är Codestyle, Coverage, Complexity, Cohesion,
Coupling och CRAP.

Codestyle är om koden följer en vissa kodstil. I mitt fall fixas denna
med hjälp av \"composer csfix\" som följer Symfonys valda kodstil och är
därför godkänd. Att följa en kodstil genom hela koden gör den enklare
att läsa och förstå.

Coverage dvs kodtäckning är hur vältestat ett projekt är. Min kod-
täckning började på 29% vilket beror på att controllers inte är testade.
Så vad värdet egentligen säger är att endast 29% av all kod mitt projekt
innehåller är testad. Koden kan alltså egentligen fortfarande vara bra,
men den har inga tester kopplade till sig vilket kan försvåra om man till
exempel vill lägga till funktionalitet och inte snabbt kan se om något i
koden gått sönder.

Complexity är hur komplex koden är, dvs om den innehåller många if-satser,
loopar och alltså kan ta flera vägar. Är koden för komplex blir den svår
att sätta sig in i.

Cohesion är till vilken grad element i en modul hör samman. Hög Cohesion
är att föredra då detta gör koden mer robust och pålitlig.

Coupling är beroendet mellan moduler. Här vill man istället ha låg 
coupling då detta tyder på struktur och bra design. Detta kan delas in
i Afferent coupling som är antalet klasser som påverkas av en klass, och
Efferent coupling vilket är antalet klasser som påverkar en klass. Mitt
högsta AC är 5 i min Card-klass, vilket alltså innebär att 5 andra klasser
påverkas av Card-klassen. Min högsta EC är på 7 i två av mina controllers,
vilket alltså innebär att dessa påverkas av 7 andra klasser.

CRAP (Change Risk Anti Pattern) handlar om storlek på metod, komplexitet
och hur vältestad den är. Min metod som har höst CRAP-score är play() i
min GameController, vilken har 90. Den har komplexitet 9 och är för tillfället
otestad. Den är också lite stor för att vara en controller-metod, 48 kodrader.
Man vill alltså ha låg CRAP-score, vilket skulle visa på att metoden har bra
storlek, komplexitet och är testad.
</pre>

<h2 id=\"phpmetrics\">Phpmetrics</h2>
<pre>
Via översikten för PhpMetrics dokumentation ser man direkt att det finns 4
violations. Ingen av dem är kritiska eller errors, utan klassas som varningar --
men existerar. Via den bild av färgade cirklar som genereras i översikten
kan man också se att klassen GameBoard och GameController har högre cyklomatisk
komplexitet och är svårare att underhålla än andra delar. GameController har
även högst \"relative system complexity\", vilket nog beror på att det är en
controller som behandlar hela kortspelet, men möjligen går den att sänka något.

Som tidigare nämnt är till exempel efferent couplingen relativt hög hos vissa
controllers, om man tänker att man vill ha så låg siffra som möjligt. Men samtidigt
då det är controllers som har lite högre siffra kanske det ändå är rimligt.

<a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/phpmetrics.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/phpmetrics.png"), "html", null, true);
        echo "\" alt=\"phpmetrics overview\" width=600></a>
</pre>

<h2 id=\"scrutinizer\">Scrutinizer</h2>
<pre>
Det första jag noterar i denna rapport är att kodtäckningen är låg. Här
är det framförallt för att controllerna inte testas som den är så pass
låg. Jag hade några tester för dessa som jag fick ta bort för att kunna
generera en scrutinizer-rapport. Något gjorde att den inte ville sig med
testerna.

Sedan finns det 6 issues att fixa, varav 2 klassas som \"major\". Går man
vidare till kod-fliken och \"Hot Spots\" har jag tre operationer som har betyg
B, vilket är det sämsta jag fick i min rapport. Av dessa är den med mest
problem play()-metoden i GameController, som har orange komplexitet med 9
conditions och en CRAP-score av 90.
</pre>
<a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/scrutinizer.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/scrutinizer.png"), "html", null, true);
        echo "\" alt=\"scrutinizer overview\" width=600></a>

<h2 id=\"forbattringar\">Förbättringar</h2>
<h3>Innan implementation</h3>
<pre>
Den första förbättringen jag tänker göra är att försöka fixa Violations och
Issues. Detta innebär att jag måste sätta mig in i vad som anses vara fel och
sedan se om jag kan lösa det. Detta vill jag göra då detta är utpekade fel i
koden som känns en bra början att ta tag i. Jag tror att fixa dessa kommer
öka kodkvalitets-poängen i scrutinizer något.

Det andra problemet jag vill ta tag i är att försöka öka kodtäckningen. Jag
tänker nog göra detta genom att skapa några tester för Book och Product som
skapades under förra kursmomentet för att få upp procenten något. Möjligen
ta bort Product helt och hållet då det inte tillhör någon uppgift. Även försöka
lägga till mina tester för controllers igen, om jag lyckas förbättra de på något
sätt så att de inte förstör bygget av scrutinizer-rapporten.

Den tredje förbättringen är play()-metoden och att försöka sänka CRAP-score och
komplexitet, samt göra ett försök att öka betyget till A. Möjligen även försöka
öka de två andra metoder som hade betyget B till A. Även detta tänker jag kommer
att öka kodkvalitets-poängen i scrutinizer. Jag tänker även att dessa förbättringar,
tillsammans med ökad kodtäckning om det sker för GameController kan sänka den
cyklomatiska komplexiteten och öka möjligheten att underhålla koden. Detta skulle
alltså göra att någon eller några av de röda cirklarna från PhpMetrics-rapporten
skulle minska och förhoppningsvis byta färg.
</pre>
<h3>Efter implementation</h3>
<pre>
</pre>

<h2 id=\"diskussion\">Diskussion</h2>
<pre>
</pre>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "metrics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 79,  146 => 62,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Metrics{% endblock %}

{% block body %}
<h1>Metrics analys</h1>
<h2 id=\"intro\">Introduktion</h2>
<pre>
De sex C:na om kodkvalitet är Codestyle, Coverage, Complexity, Cohesion,
Coupling och CRAP.

Codestyle är om koden följer en vissa kodstil. I mitt fall fixas denna
med hjälp av \"composer csfix\" som följer Symfonys valda kodstil och är
därför godkänd. Att följa en kodstil genom hela koden gör den enklare
att läsa och förstå.

Coverage dvs kodtäckning är hur vältestat ett projekt är. Min kod-
täckning började på 29% vilket beror på att controllers inte är testade.
Så vad värdet egentligen säger är att endast 29% av all kod mitt projekt
innehåller är testad. Koden kan alltså egentligen fortfarande vara bra,
men den har inga tester kopplade till sig vilket kan försvåra om man till
exempel vill lägga till funktionalitet och inte snabbt kan se om något i
koden gått sönder.

Complexity är hur komplex koden är, dvs om den innehåller många if-satser,
loopar och alltså kan ta flera vägar. Är koden för komplex blir den svår
att sätta sig in i.

Cohesion är till vilken grad element i en modul hör samman. Hög Cohesion
är att föredra då detta gör koden mer robust och pålitlig.

Coupling är beroendet mellan moduler. Här vill man istället ha låg 
coupling då detta tyder på struktur och bra design. Detta kan delas in
i Afferent coupling som är antalet klasser som påverkas av en klass, och
Efferent coupling vilket är antalet klasser som påverkar en klass. Mitt
högsta AC är 5 i min Card-klass, vilket alltså innebär att 5 andra klasser
påverkas av Card-klassen. Min högsta EC är på 7 i två av mina controllers,
vilket alltså innebär att dessa påverkas av 7 andra klasser.

CRAP (Change Risk Anti Pattern) handlar om storlek på metod, komplexitet
och hur vältestad den är. Min metod som har höst CRAP-score är play() i
min GameController, vilken har 90. Den har komplexitet 9 och är för tillfället
otestad. Den är också lite stor för att vara en controller-metod, 48 kodrader.
Man vill alltså ha låg CRAP-score, vilket skulle visa på att metoden har bra
storlek, komplexitet och är testad.
</pre>

<h2 id=\"phpmetrics\">Phpmetrics</h2>
<pre>
Via översikten för PhpMetrics dokumentation ser man direkt att det finns 4
violations. Ingen av dem är kritiska eller errors, utan klassas som varningar --
men existerar. Via den bild av färgade cirklar som genereras i översikten
kan man också se att klassen GameBoard och GameController har högre cyklomatisk
komplexitet och är svårare att underhålla än andra delar. GameController har
även högst \"relative system complexity\", vilket nog beror på att det är en
controller som behandlar hela kortspelet, men möjligen går den att sänka något.

Som tidigare nämnt är till exempel efferent couplingen relativt hög hos vissa
controllers, om man tänker att man vill ha så låg siffra som möjligt. Men samtidigt
då det är controllers som har lite högre siffra kanske det ändå är rimligt.

<a href=\"{{ asset('img/phpmetrics.png') }}\"><img src=\"{{ asset('img/phpmetrics.png') }}\" alt=\"phpmetrics overview\" width=600></a>
</pre>

<h2 id=\"scrutinizer\">Scrutinizer</h2>
<pre>
Det första jag noterar i denna rapport är att kodtäckningen är låg. Här
är det framförallt för att controllerna inte testas som den är så pass
låg. Jag hade några tester för dessa som jag fick ta bort för att kunna
generera en scrutinizer-rapport. Något gjorde att den inte ville sig med
testerna.

Sedan finns det 6 issues att fixa, varav 2 klassas som \"major\". Går man
vidare till kod-fliken och \"Hot Spots\" har jag tre operationer som har betyg
B, vilket är det sämsta jag fick i min rapport. Av dessa är den med mest
problem play()-metoden i GameController, som har orange komplexitet med 9
conditions och en CRAP-score av 90.
</pre>
<a href=\"{{ asset('img/scrutinizer.png') }}\"><img src=\"{{ asset('img/scrutinizer.png') }}\" alt=\"scrutinizer overview\" width=600></a>

<h2 id=\"forbattringar\">Förbättringar</h2>
<h3>Innan implementation</h3>
<pre>
Den första förbättringen jag tänker göra är att försöka fixa Violations och
Issues. Detta innebär att jag måste sätta mig in i vad som anses vara fel och
sedan se om jag kan lösa det. Detta vill jag göra då detta är utpekade fel i
koden som känns en bra början att ta tag i. Jag tror att fixa dessa kommer
öka kodkvalitets-poängen i scrutinizer något.

Det andra problemet jag vill ta tag i är att försöka öka kodtäckningen. Jag
tänker nog göra detta genom att skapa några tester för Book och Product som
skapades under förra kursmomentet för att få upp procenten något. Möjligen
ta bort Product helt och hållet då det inte tillhör någon uppgift. Även försöka
lägga till mina tester för controllers igen, om jag lyckas förbättra de på något
sätt så att de inte förstör bygget av scrutinizer-rapporten.

Den tredje förbättringen är play()-metoden och att försöka sänka CRAP-score och
komplexitet, samt göra ett försök att öka betyget till A. Möjligen även försöka
öka de två andra metoder som hade betyget B till A. Även detta tänker jag kommer
att öka kodkvalitets-poängen i scrutinizer. Jag tänker även att dessa förbättringar,
tillsammans med ökad kodtäckning om det sker för GameController kan sänka den
cyklomatiska komplexiteten och öka möjligheten att underhålla koden. Detta skulle
alltså göra att någon eller några av de röda cirklarna från PhpMetrics-rapporten
skulle minska och förhoppningsvis byta färg.
</pre>
<h3>Efter implementation</h3>
<pre>
</pre>

<h2 id=\"diskussion\">Diskussion</h2>
<pre>
</pre>
{% endblock %}", "metrics.html.twig", "/home/meljoh/dbwebb-kurser/mvc/me/report/templates/metrics.html.twig");
    }
}
