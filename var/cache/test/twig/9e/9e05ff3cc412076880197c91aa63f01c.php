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

/* report.html.twig */
class __TwigTemplate_0525728b4acc51045427b6673d5137dd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "report.html.twig", 1);
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

        echo "About";
        
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
        echo "<h1>Redovisningstexter</h1>
<h2 id=\"kmom01\">Kmom01</h2>
<pre>
Den erfarenhet jag har av objektorientering sedan tidigare är väl främst
kursen som precis gick i Objektorienterad python. Där jobbade vi med att 
skapa olika klasser såsom “dice” och “hand” i ett yatzy-spel och “node” 
och “trie” i en trädstruktur, där man jobbade med olika metoder och 
attribut inuti de olika klasserna.

För att skapa en klass i PHP använder man nyckelordet “class” följt av 
klassnamn som börjar på stor bokstav och sedan måsvingar för tillhörande 
kod. Metoder och medlemsvariabler i klassen skapas genom att ange om den 
ska vara public, private eller protected följt av vilken typ (function, 
string osv) och namn (\$ före för variabel, () i slutet för metod). Ett 
objekt skapas genom att ange till exempel \$namn = new Klassnamn();. För 
att komma åt ett objekts “properties” använder man ->, exempelvis 
\$namn->age om ett objekt har ett “age-property”.

Koden för me/report uppfattar jag som okej så här långt. Det är mycket 
filer men det kändes logiskt var de filer vi behövde arbeta med för uppgiften 
skulle ligga. Så jag hade inga större besvär.

I “PHP The Right Way” tyckte jag att delen om hur man hanterar strängar 
var intressant. Detta då jag minns tydligt från webtec-kursen då man 
försökte hantera olika tecken och få allt rätt. Men då hittade jag 
exempelvis inte lika direkt informationen att man bör använda mb_*-
versionen av sträng-funktionen, eller UTF-8-hantering som det står lite om. 
Har ingen mer specifik del att lyfta fram men överlag tror jag att det går 
att hitta bra information där om man letar efter något specifikt.

TIL för detta kursmoment är att installera och använda ramverket Symfony 
och grund i hur man jobbar med klasser och objekt i PHP.
</pre>

<h2 id=\"kmom02\">Kmom02</h2>
<pre>
Arv innebär att en klass ärver av en annan klass, dvs den får samma publika 
delar som klassen den ärver av. Klassen som ärver kan sedan innehålla egna 
metoder eller skriva över metoder från basklassen. Komposition innebär att 
en klass använder sig av en annan klass. Som för våra kort, där en korthand 
eller kortlek använder sig av kort. Ett interface är som ett kontrakt där en 
klass lovar att innehålla vissa metoder. Interface innehåller ingen kod som en 
klass kan använda, utan enbart löfte om vilka metoder som ska finnas. Trait är 
återanvändbara delar kod som kan användas i olika klasser.

Jag löste uppgiften med hjälp av fyra klasser. Card, CardGraphic, CardHand och 
DeckOfCards. I Card skapas kort som ska ha ett värde mellan 0-51 (52 kort i 
en kortlek). Jag har där en metod som initierar korten genom att ett nummer 
skickas till metoden. Där kort används kan de alltså initieras genom antingen 
ett slumpmässigt värde mellan 0-51 eller genom att loopa igenom alla siffrorna 
för att få fram alla korten. CardGraphic gör korten till bilder (unicode) av 
kort istället för enbart siffror.

Jag har sedan använt DeckOfCards för att få fram en kortlek, kunna blanda den, 
ta bort kort från den osv. I CardHand tar jag fram en korthand till routen 
deck/draw/:number genom metoden draw.

Överlag känner jag att min lösning på uppgiften blev ganska rörig. Nog för att 
jag blev lite förvirrad över hur jag skulle lösa allting. Jag är inte jättenöjd. 
Vad jag märkt så fungerar allt som det ska, men jag känner mig lite osäker på om 
min kod håller för fortsättning i kommande kursmoment.

För att lösa routen “draw” skapade jag en metod draw i DeckOfCards som tar fram 
ett kort som dras och tas bort ur leken. Men för routen “draw/:number” använder 
jag istället en ytterligare “draw”-metod men i klassen CardHand, som i sin tur 
tar ett DeckOfCards-objekt som argument. För att ta bort korten anropas en 
ytterligare metod i DeckOfCards. Det känns som att det hade kunnat gå att använda 
samma draw-metod för dessa två. Men av någon anledning gjorde jag två olika och 
lyckades inte riktigt få ihop dem till en när jag försökte nu. Men det skulle 
vara en förbättring.

TIL för detta kursmoment är lite inledande information om för mig nya 
konstruktionerna interface och trait. Att jobba med klasser och sessioner i PHP.
</pre>

<h2 id=\"kmom03\">Kmom03</h2>
<pre>
När jag först skulle göra flödesdiagram och pseudokod kändes det jobbigt. 
Detta troligen för att jag inte känner mig säker på programmering ännu och 
det kändes svårt att veta vad jag skulle behöva göra. Men efter att jag fått 
fundera igenom uppgiften lyckades jag ändå skapa ett flödesdiagram och pseudokod. 
Vilket kändes ganska bra ändå. Det kändes som att det absolut skulle kunna fungera 
som bra stöd i att ta sig an olika programmeringsuppgifter och det tvingade mig 
att faktiskt tänka igenom innan jag satte igång.

Jag löste uppgiften med hjälp av de klasser jag gjort i tidigare kursmoment 
samt två nya klasser. Dessa döpte jag till Player och GameBoard. Player håller 
en spelare med spelarens poäng samt en mängd pengar. GameBoard är själva spelplanen, 
där en spelare och banken initieras tillsammans med en kortlek, nuvarande korthand 
och det senaste dragna kortet. I denna klass finns metoder som drar ett kort, 
flera get-metoder som visar till exempel nuvarande hand, en metod som räknar ut 
poängen för varje kort, metoder för funktionalitet när spelaren eller banken drar 
kort, metod för statistik och att avsluta spelet.

Jag började att göra alla grundläggande krav för kortspelet 21 och fortsatte 
sedan arbeta med spelet med den tid som blev över. Jag lade då till satsning 
av pengar, statistik och smartare bank samt stylade spelet. Jag valde att 
visa ställningen på spelplanen, med rundans poäng, antal rundor spelaren 
respektive banken vunnit och varje spelares pengamängd. Spelet sker i rundor, 
där någon vinner varje runda. Spelet tar sedan slut antingen när någon har slut 
på pengar eller när kortleken är slut. Då är den slutgiltiga vinnaren den som 
vunnit flest gånger (och då även har mest pengar kvar).

Förbättringspotential är till exempel hur satsningen av pengar går till. Nu 
får man välja en mängd pengar som satsas varje runda innan spelet startas. Kanske 
hade det varit bättre om man fick satsa pengar inför varje runda. Sättet jag har 
implementerat satsningen på just nu gör det inte så troligt att man hinner förlora 
alla pengar innan kortleken tar slut om man satsar en för låg summa i början. Det 
gör också att den som vinner flest antal rundor automatiskt är den som har mest 
pengar, då den ena förlorar pengarna och den andra får samma mängd pengar.

Mer förbättringspotential är väl själva koden och strukturen på den. Jag har 
försökt minimera koden i Controllern, men det blev kanske lite mycket i 
play-metoden. Detta främst då jag använt mig av flash-meddelanden och inte kom 
på något annat sätt än att jobba med funktionaliteten av dessa i controllern. 
Det finns säkert saker som kan göras på ett smartare och “renare” sätt också. 
Men det känns överlag okej.

Att koda i ett ramverk som Symfony känns bra. Det känns som en bra grej att ha 
möjlighet att använda för att slippa skriva allting från början varje gång någonting 
ska programmeras.

TIL för det här kursmomentet är att använda phpmd och phpstan, hur man kan 
bygga upp ett kortspel, att skriva flödesdiagram och pseudokod.
</pre>

<h2 id=\"kmom04\">Kmom04</h2>
<pre>
Jag tyckte att det kändes helt okej att skriva testkod med PHPUnit. Det hjälpte 
att vi fick prova testning i en tidigare Python-kurs så att man en liten aning 
om hur det går till. Det var samma princip som då med att namnge filer, klasser 
och metoder med “test” och sedan använda olika asserts. Jag har inte så mycket 
att säga om PHPUnit rent allmänt, det fungerade bra. Som vanligt är det lite klurigt 
att få fram vad man söker i manualen, men bra träning att läsa i den.

Jag fick 100% kodtäckning på min kod. Men hur vältestad den är, är jag lite osäker 
på. Jag har försökt tänka på att göra värdefulla tester och testa det som behövs. 
Men det är inte det lättaste. Jag provade också att testa Controllers, men jag 
tyckte att det var svårt att hitta information kring hur man gör. De få tester 
jag lyckades skriva känns inte super-värdefulla. Men det var kul att försöka lite 
i alla fall.

Delar av min kod känns absolut som “testbar” kod och det gick smidigt att skriva 
tester. Andra delar var väldigt kluriga att lyckas testa. Jag försökte använda lite 
mock och sådant, men det gick inget vidare. Det slutade med att jag skrev om några 
metoder för att de skulle bli enkla att testa. Detta till exempel i form av att jag 
kortade ner en if-sats i metoden endGame i GameBoard-klassen, så att den nu endast 
har två returns istället för fyra. Jag lade även till in-parametrar på ett par 
ställen som jag satte till default-värde “null” för att få möjlighet att skicka med 
värden i mina tester. Detta gjorde att jag fick lägga till en extra if-sats i dessa 
metoder (endGame och checkEmptyDeck i GameBoard-klassen) för att sätta variabel-värde 
på dessa när man inte skickar med värden.

Mina ändringar gjorde min kod enklare att testa, på vissa ställen snyggare men på 
andra ställen inte. Den förstnämnda ändringen kändes som en förbättring som 
bidrog till snyggare och renare kod, men just lösningen som skapade en extra if-sats 
tyckte jag inte blev så snygg. Så jag vet inte riktigt om testbar kod alltid innebär 
“snygg och ren kod”. Kanske ofta men ibland inte.

TIL för detta kursmoment lite testning i PHPUnit, få fram och titta på kodtäckning, 
generera dokumentation av koden med phpdoc.
</pre>

<h2 id=\"kmom05\">Kmom05</h2>
<pre>
Det gick bra att jobba igenom övningen. Jag fastnade lite när databasen skulle skapas 
och jag fick felmeddelande “Could not find driver” trots att jag följt övningen och 
gjort alla steg. Men jag fick hjälp med det i discord och det löste sig genom att köra 
“sudo apt install php8.2-sqlite3” i terminalen. Annars fungerade det bra.

När jag byggde ihop mitt bibliotek tänkte jag på att alla sidor skulle länkas samman. 
Jag har landningssidan som välkomnar till biblioteket. Därifrån kan man sedan gå vidare 
för att se en lista med alla böcker eller välja att lägga till en bok. Från sidan med 
alla böcker, vilka ligger i en tabell, kan man sedan klicka sig vidare till en bok. 
Därifrån kan man i sin tur uppdatera eller radera den aktuella boken. Så jag tycker 
att jag fick med alla delar i ett flöde.

Det gick bra att jobba med ORM i CRUD. Jag stötte inte på några större problem. Det 
som kändes lite konstigt var att inte skriva någon SQL-kod för att få fram, lägga till, 
uppdatera och radera saker från databasen. Men det gjorde ju att mindre kod behövde 
skrivas från min sida, så det var ju skönt. Det känns hittills som ett smidigt sätt 
att arbeta mot en databas. Om man jämför mot hur vi arbetade i databas-kursen, där 
man behövde skriva väldigt mycket kod för att göra samma sak som vi gjorde nu – så 
känns det ju helt klart mindre tidskrävande om inte annat.

TIL för detta kursmoment är ett annat sätt att jobba med databaser, genom ORM.
</pre>

<h2 id=\"kmom06\">Kmom06</h2>

<h2 id=\"kmom10\">Kmom10</h2>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}About{% endblock %}

{% block body %}
<h1>Redovisningstexter</h1>
<h2 id=\"kmom01\">Kmom01</h2>
<pre>
Den erfarenhet jag har av objektorientering sedan tidigare är väl främst
kursen som precis gick i Objektorienterad python. Där jobbade vi med att 
skapa olika klasser såsom “dice” och “hand” i ett yatzy-spel och “node” 
och “trie” i en trädstruktur, där man jobbade med olika metoder och 
attribut inuti de olika klasserna.

För att skapa en klass i PHP använder man nyckelordet “class” följt av 
klassnamn som börjar på stor bokstav och sedan måsvingar för tillhörande 
kod. Metoder och medlemsvariabler i klassen skapas genom att ange om den 
ska vara public, private eller protected följt av vilken typ (function, 
string osv) och namn (\$ före för variabel, () i slutet för metod). Ett 
objekt skapas genom att ange till exempel \$namn = new Klassnamn();. För 
att komma åt ett objekts “properties” använder man ->, exempelvis 
\$namn->age om ett objekt har ett “age-property”.

Koden för me/report uppfattar jag som okej så här långt. Det är mycket 
filer men det kändes logiskt var de filer vi behövde arbeta med för uppgiften 
skulle ligga. Så jag hade inga större besvär.

I “PHP The Right Way” tyckte jag att delen om hur man hanterar strängar 
var intressant. Detta då jag minns tydligt från webtec-kursen då man 
försökte hantera olika tecken och få allt rätt. Men då hittade jag 
exempelvis inte lika direkt informationen att man bör använda mb_*-
versionen av sträng-funktionen, eller UTF-8-hantering som det står lite om. 
Har ingen mer specifik del att lyfta fram men överlag tror jag att det går 
att hitta bra information där om man letar efter något specifikt.

TIL för detta kursmoment är att installera och använda ramverket Symfony 
och grund i hur man jobbar med klasser och objekt i PHP.
</pre>

<h2 id=\"kmom02\">Kmom02</h2>
<pre>
Arv innebär att en klass ärver av en annan klass, dvs den får samma publika 
delar som klassen den ärver av. Klassen som ärver kan sedan innehålla egna 
metoder eller skriva över metoder från basklassen. Komposition innebär att 
en klass använder sig av en annan klass. Som för våra kort, där en korthand 
eller kortlek använder sig av kort. Ett interface är som ett kontrakt där en 
klass lovar att innehålla vissa metoder. Interface innehåller ingen kod som en 
klass kan använda, utan enbart löfte om vilka metoder som ska finnas. Trait är 
återanvändbara delar kod som kan användas i olika klasser.

Jag löste uppgiften med hjälp av fyra klasser. Card, CardGraphic, CardHand och 
DeckOfCards. I Card skapas kort som ska ha ett värde mellan 0-51 (52 kort i 
en kortlek). Jag har där en metod som initierar korten genom att ett nummer 
skickas till metoden. Där kort används kan de alltså initieras genom antingen 
ett slumpmässigt värde mellan 0-51 eller genom att loopa igenom alla siffrorna 
för att få fram alla korten. CardGraphic gör korten till bilder (unicode) av 
kort istället för enbart siffror.

Jag har sedan använt DeckOfCards för att få fram en kortlek, kunna blanda den, 
ta bort kort från den osv. I CardHand tar jag fram en korthand till routen 
deck/draw/:number genom metoden draw.

Överlag känner jag att min lösning på uppgiften blev ganska rörig. Nog för att 
jag blev lite förvirrad över hur jag skulle lösa allting. Jag är inte jättenöjd. 
Vad jag märkt så fungerar allt som det ska, men jag känner mig lite osäker på om 
min kod håller för fortsättning i kommande kursmoment.

För att lösa routen “draw” skapade jag en metod draw i DeckOfCards som tar fram 
ett kort som dras och tas bort ur leken. Men för routen “draw/:number” använder 
jag istället en ytterligare “draw”-metod men i klassen CardHand, som i sin tur 
tar ett DeckOfCards-objekt som argument. För att ta bort korten anropas en 
ytterligare metod i DeckOfCards. Det känns som att det hade kunnat gå att använda 
samma draw-metod för dessa två. Men av någon anledning gjorde jag två olika och 
lyckades inte riktigt få ihop dem till en när jag försökte nu. Men det skulle 
vara en förbättring.

TIL för detta kursmoment är lite inledande information om för mig nya 
konstruktionerna interface och trait. Att jobba med klasser och sessioner i PHP.
</pre>

<h2 id=\"kmom03\">Kmom03</h2>
<pre>
När jag först skulle göra flödesdiagram och pseudokod kändes det jobbigt. 
Detta troligen för att jag inte känner mig säker på programmering ännu och 
det kändes svårt att veta vad jag skulle behöva göra. Men efter att jag fått 
fundera igenom uppgiften lyckades jag ändå skapa ett flödesdiagram och pseudokod. 
Vilket kändes ganska bra ändå. Det kändes som att det absolut skulle kunna fungera 
som bra stöd i att ta sig an olika programmeringsuppgifter och det tvingade mig 
att faktiskt tänka igenom innan jag satte igång.

Jag löste uppgiften med hjälp av de klasser jag gjort i tidigare kursmoment 
samt två nya klasser. Dessa döpte jag till Player och GameBoard. Player håller 
en spelare med spelarens poäng samt en mängd pengar. GameBoard är själva spelplanen, 
där en spelare och banken initieras tillsammans med en kortlek, nuvarande korthand 
och det senaste dragna kortet. I denna klass finns metoder som drar ett kort, 
flera get-metoder som visar till exempel nuvarande hand, en metod som räknar ut 
poängen för varje kort, metoder för funktionalitet när spelaren eller banken drar 
kort, metod för statistik och att avsluta spelet.

Jag började att göra alla grundläggande krav för kortspelet 21 och fortsatte 
sedan arbeta med spelet med den tid som blev över. Jag lade då till satsning 
av pengar, statistik och smartare bank samt stylade spelet. Jag valde att 
visa ställningen på spelplanen, med rundans poäng, antal rundor spelaren 
respektive banken vunnit och varje spelares pengamängd. Spelet sker i rundor, 
där någon vinner varje runda. Spelet tar sedan slut antingen när någon har slut 
på pengar eller när kortleken är slut. Då är den slutgiltiga vinnaren den som 
vunnit flest gånger (och då även har mest pengar kvar).

Förbättringspotential är till exempel hur satsningen av pengar går till. Nu 
får man välja en mängd pengar som satsas varje runda innan spelet startas. Kanske 
hade det varit bättre om man fick satsa pengar inför varje runda. Sättet jag har 
implementerat satsningen på just nu gör det inte så troligt att man hinner förlora 
alla pengar innan kortleken tar slut om man satsar en för låg summa i början. Det 
gör också att den som vinner flest antal rundor automatiskt är den som har mest 
pengar, då den ena förlorar pengarna och den andra får samma mängd pengar.

Mer förbättringspotential är väl själva koden och strukturen på den. Jag har 
försökt minimera koden i Controllern, men det blev kanske lite mycket i 
play-metoden. Detta främst då jag använt mig av flash-meddelanden och inte kom 
på något annat sätt än att jobba med funktionaliteten av dessa i controllern. 
Det finns säkert saker som kan göras på ett smartare och “renare” sätt också. 
Men det känns överlag okej.

Att koda i ett ramverk som Symfony känns bra. Det känns som en bra grej att ha 
möjlighet att använda för att slippa skriva allting från början varje gång någonting 
ska programmeras.

TIL för det här kursmomentet är att använda phpmd och phpstan, hur man kan 
bygga upp ett kortspel, att skriva flödesdiagram och pseudokod.
</pre>

<h2 id=\"kmom04\">Kmom04</h2>
<pre>
Jag tyckte att det kändes helt okej att skriva testkod med PHPUnit. Det hjälpte 
att vi fick prova testning i en tidigare Python-kurs så att man en liten aning 
om hur det går till. Det var samma princip som då med att namnge filer, klasser 
och metoder med “test” och sedan använda olika asserts. Jag har inte så mycket 
att säga om PHPUnit rent allmänt, det fungerade bra. Som vanligt är det lite klurigt 
att få fram vad man söker i manualen, men bra träning att läsa i den.

Jag fick 100% kodtäckning på min kod. Men hur vältestad den är, är jag lite osäker 
på. Jag har försökt tänka på att göra värdefulla tester och testa det som behövs. 
Men det är inte det lättaste. Jag provade också att testa Controllers, men jag 
tyckte att det var svårt att hitta information kring hur man gör. De få tester 
jag lyckades skriva känns inte super-värdefulla. Men det var kul att försöka lite 
i alla fall.

Delar av min kod känns absolut som “testbar” kod och det gick smidigt att skriva 
tester. Andra delar var väldigt kluriga att lyckas testa. Jag försökte använda lite 
mock och sådant, men det gick inget vidare. Det slutade med att jag skrev om några 
metoder för att de skulle bli enkla att testa. Detta till exempel i form av att jag 
kortade ner en if-sats i metoden endGame i GameBoard-klassen, så att den nu endast 
har två returns istället för fyra. Jag lade även till in-parametrar på ett par 
ställen som jag satte till default-värde “null” för att få möjlighet att skicka med 
värden i mina tester. Detta gjorde att jag fick lägga till en extra if-sats i dessa 
metoder (endGame och checkEmptyDeck i GameBoard-klassen) för att sätta variabel-värde 
på dessa när man inte skickar med värden.

Mina ändringar gjorde min kod enklare att testa, på vissa ställen snyggare men på 
andra ställen inte. Den förstnämnda ändringen kändes som en förbättring som 
bidrog till snyggare och renare kod, men just lösningen som skapade en extra if-sats 
tyckte jag inte blev så snygg. Så jag vet inte riktigt om testbar kod alltid innebär 
“snygg och ren kod”. Kanske ofta men ibland inte.

TIL för detta kursmoment lite testning i PHPUnit, få fram och titta på kodtäckning, 
generera dokumentation av koden med phpdoc.
</pre>

<h2 id=\"kmom05\">Kmom05</h2>
<pre>
Det gick bra att jobba igenom övningen. Jag fastnade lite när databasen skulle skapas 
och jag fick felmeddelande “Could not find driver” trots att jag följt övningen och 
gjort alla steg. Men jag fick hjälp med det i discord och det löste sig genom att köra 
“sudo apt install php8.2-sqlite3” i terminalen. Annars fungerade det bra.

När jag byggde ihop mitt bibliotek tänkte jag på att alla sidor skulle länkas samman. 
Jag har landningssidan som välkomnar till biblioteket. Därifrån kan man sedan gå vidare 
för att se en lista med alla böcker eller välja att lägga till en bok. Från sidan med 
alla böcker, vilka ligger i en tabell, kan man sedan klicka sig vidare till en bok. 
Därifrån kan man i sin tur uppdatera eller radera den aktuella boken. Så jag tycker 
att jag fick med alla delar i ett flöde.

Det gick bra att jobba med ORM i CRUD. Jag stötte inte på några större problem. Det 
som kändes lite konstigt var att inte skriva någon SQL-kod för att få fram, lägga till, 
uppdatera och radera saker från databasen. Men det gjorde ju att mindre kod behövde 
skrivas från min sida, så det var ju skönt. Det känns hittills som ett smidigt sätt 
att arbeta mot en databas. Om man jämför mot hur vi arbetade i databas-kursen, där 
man behövde skriva väldigt mycket kod för att göra samma sak som vi gjorde nu – så 
känns det ju helt klart mindre tidskrävande om inte annat.

TIL för detta kursmoment är ett annat sätt att jobba med databaser, genom ORM.
</pre>

<h2 id=\"kmom06\">Kmom06</h2>

<h2 id=\"kmom10\">Kmom10</h2>
{% endblock %}
", "report.html.twig", "/home/meljoh/dbwebb-kurser/mvc/me/report/templates/report.html.twig");
    }
}
