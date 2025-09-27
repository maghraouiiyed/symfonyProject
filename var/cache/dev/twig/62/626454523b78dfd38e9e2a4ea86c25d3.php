<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* author/showAuthor.twig */
class __TwigTemplate_2515ff0ce6d84a972b6c714bb956f739 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/showAuthor.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/showAuthor.twig"));

        // line 1
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new RuntimeError('Variable "nom" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "

";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), (isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new RuntimeError('Variable "nom" does not exist.', 3, $this->source); })())), "html", null, true);
        yield "

";
        // line 6
        $context["A"] = 1;
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["A"]) || array_key_exists("A", $context) ? $context["A"] : (function () { throw new RuntimeError('Variable "A" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "

";
        // line 9
        if ((is_string($_v0 = "Fablen") && is_string($_v1 = "F") && str_starts_with($_v0, $_v1))) {
            // line 10
            yield "    commence par F
";
        }
        // line 12
        yield "
";
        // line 13
        if ((is_string($_v2 = "Fablen") && is_string($_v3 = "n") && str_ends_with($_v2, $_v3))) {
            // line 14
            yield "    finit par n
";
        }
        // line 16
        yield "<a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher");
        yield "\">lien1</a>
<a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("afficher");
        yield "\">lien2</a>

<br>

<img src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/slimenlabyedh.png"), "html", null, true);
        yield "\">
<br>

<h1>Détails de l'auteur</h1>

<p><strong>Nom :</strong> ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 26, $this->source); })()), "username", [], "any", false, false, false, 26)), "html", null, true);
        yield "</p>
<p><img src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 27, $this->source); })()), "picture", [], "any", false, false, false, 27)), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 27, $this->source); })()), "username", [], "any", false, false, false, 27), "html", null, true);
        yield "\" width=\"150\"></p>
<p><strong>Email :</strong> ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), "html", null, true);
        yield "</p>
<p><strong>Nombre de livres :</strong> ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 29, $this->source); })()), "nb_books", [], "any", false, false, false, 29), "html", null, true);
        yield "</p>

<p><a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_authors");
        yield "\">Retour à la liste</a></p>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "author/showAuthor.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  119 => 31,  114 => 29,  110 => 28,  104 => 27,  100 => 26,  92 => 21,  85 => 17,  80 => 16,  76 => 14,  74 => 13,  71 => 12,  67 => 10,  65 => 9,  60 => 7,  58 => 6,  53 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{nom}}

{{nom|upper}}

{#comment#}
{% set A=1%}
{{A}}

{% if 'Fablen' starts with 'F' %}
    commence par F
{% endif %}

{% if 'Fablen' ends with 'n' %}
    finit par n
{% endif %}
<a href=\"{{path('afficher')}}\">lien1</a>
<a href=\"{{url('afficher')}}\">lien2</a>

<br>

<img src=\"{{ asset('assets/images/slimenlabyedh.png') }}\">
<br>

<h1>Détails de l'auteur</h1>

<p><strong>Nom :</strong> {{ author.username|upper }}</p>
<p><img src=\"{{ asset(author.picture) }}\" alt=\"{{ author.username }}\" width=\"150\"></p>
<p><strong>Email :</strong> {{ author.email }}</p>
<p><strong>Nombre de livres :</strong> {{ author.nb_books }}</p>

<p><a href=\"{{ path('list_authors') }}\">Retour à la liste</a></p>", "author/showAuthor.twig", "C:\\xampp\\htdocs\\FirstProject\\templates\\author\\showAuthor.twig");
    }
}
