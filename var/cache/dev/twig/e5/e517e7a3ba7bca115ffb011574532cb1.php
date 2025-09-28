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

/* author/list.html.twig */
class __TwigTemplate_4203b88288311705173648ee099783cd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/list.html.twig"));

        // line 1
        yield "<h1>Liste des auteurs</h1>

";
        // line 3
        if ((array_key_exists("authors", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["authors"]) || array_key_exists("authors", $context) ? $context["authors"] : (function () { throw new RuntimeError('Variable "authors" does not exist.', 3, $this->source); })())) > 0))) {
            // line 4
            yield "    <p>Nombre d'auteurs : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalAuthors"]) || array_key_exists("totalAuthors", $context) ? $context["totalAuthors"] : (function () { throw new RuntimeError('Variable "totalAuthors" does not exist.', 4, $this->source); })()), "html", null, true);
            yield "</p>
    <p>Nombre total de livres : ";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalBooks"]) || array_key_exists("totalBooks", $context) ? $context["totalBooks"] : (function () { throw new RuntimeError('Variable "totalBooks" does not exist.', 5, $this->source); })()), "html", null, true);
            yield "</p>
        <ul>
    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["authors"]) || array_key_exists("authors", $context) ? $context["authors"] : (function () { throw new RuntimeError('Variable "authors" does not exist.', 7, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                // line 8
                yield "        <li>
            <img src=\"";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["author"], "picture", [], "any", false, false, false, 9)), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["author"], "username", [], "any", false, false, false, 9), "html", null, true);
                yield "\" width=\"80\">
            ";
                // line 10
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["author"], "username", [], "any", false, false, false, 10)), "html", null, true);
                yield " - 
            <a href=\"";
                // line 11
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("author_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["author"], "id", [], "any", false, false, false, 11)]), "html", null, true);
                yield "\">Details</a>
        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['author'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            yield "    </ul>
";
        } else {
            // line 16
            yield "    <p>Aucun auteur disponible.</p>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "author/list.html.twig";
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
        return array (  94 => 16,  90 => 14,  81 => 11,  77 => 10,  71 => 9,  68 => 8,  64 => 7,  59 => 5,  54 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h1>Liste des auteurs</h1>

{% if authors is defined and authors|length > 0 %}
    <p>Nombre d'auteurs : {{ totalAuthors }}</p>
    <p>Nombre total de livres : {{ totalBooks }}</p>
        <ul>
    {% for author in authors %}
        <li>
            <img src=\"{{ asset(author.picture) }}\" alt=\"{{ author.username }}\" width=\"80\">
            {{ author.username|upper }} - 
            <a href=\"{{ path('author_details', {'id': author.id}) }}\">Details</a>
        </li>
    {% endfor %}
    </ul>
{% else %}
    <p>Aucun auteur disponible.</p>
{% endif %}", "author/list.html.twig", "C:\\xampp\\htdocs\\FirstProject\\templates\\author\\list.html.twig");
    }
}
