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

/* commande/admin/credit.html.twig */
class __TwigTemplate_af3f2eeda8896553d3c0f1c844e87bbe extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'commande' => [$this, 'block_commande'],
            'suivi' => [$this, 'block_suivi'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 8
        return $this->loadTemplate((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) ? ("admin.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RH")) ? ("rh.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FINANCE")) ? ("finance.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STOCK")) ? ("stock.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_LIVREUR")) ? ("livreur.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYER")) ? ("employe.html.twig") : ("layout.html.twig")))))))))))), "commande/admin/credit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/admin/credit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/admin/credit.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Commande"), "html", null, true);
        yield " - GNT Pharma ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_commande(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "commande"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "commande"));

        yield "active";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_suivi(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "suivi"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "suivi"));

        yield "active";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        yield "    <div class=\"container mt-4 fond-7\">
        <h3 class=\"mt-4 mb-5 text-bold\">
            <i class=\"fa fa-shopping-cart mr-2\"></i>
            ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Suivi des commandes"), "html", null, true);
        yield "
        </h3>
        <ul class=\"nav nav-tabs mb-4\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_panier_suivi");
        yield "\">
                    ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Validation paiement"), "html", null, true);
        yield "
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_panier_validation_credit");
        yield "\">
                    ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Validation crédit"), "html", null, true);
        yield "
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link active\" href=\"#\">
                    ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Commandes à crédit"), "html", null, true);
        yield "
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_panier_history");
        yield "\">
                    ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Commandes déjà payées"), "html", null, true);
        yield "
                </a>
            </li>
        </ul>

        <table class=\"table table-success-light table-bordered table-hover table-striped w-100 mt-4\" id=\"liste\">
            <thead>
            <tr>
                <th>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Numero Commande"), "html", null, true);
        yield "</th>
                <th>";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date"), "html", null, true);
        yield "</th>
                <th>";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Client"), "html", null, true);
        yield " </th>
                <th>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Montant Commande"), "html", null, true);
        yield "</th>
                <th>";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Montant Restant"), "html", null, true);
        yield "</th>
                <th> </th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 55, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 56
            yield "                <tr>
                    <td data-label=\"Numero Commande\">";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 57), "html", null, true);
            yield "</td>
                    <td data-label=\"Date\">";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "date", [], "any", false, false, false, 58), "d/m/Y"), "html", null, true);
            yield "</td>
                    <td data-label=\"Client\"> ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "user", [], "any", false, false, false, 59), "nom", [], "any", false, false, false, 59), "html", null, true);
            yield "</td>
                    <td data-label=\"Montant Commande\">";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "montant", [], "any", false, false, false, 60), 0, "", " "), "html", null, true);
            yield "</td>
                    <td data-label=\"Montant Restant\">";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "montant", [], "any", false, false, false, 61) - CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "versement", [], "any", false, false, false, 61)), 0, "", " "), "html", null, true);
            yield "</td>
                    <td data-label=\"traitement\">
                        <a id=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 63), "html", null, true);
            yield "\" onclick=\"load(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 63), "html", null, true);
            yield ")\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_panier_paiement_credit", ["commande" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            yield "\" class=\"btn btn-success\">
                            <i class=\"fa fa-gears\"></i>
                            ";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Traitement"), "html", null, true);
            yield "
                        </a>
                    </td>


                </tr>

            ";
            $context['_iterated'] = true;
        }
        // line 72
        if (!$context['_iterated']) {
            // line 73
            yield "                <tr>
                    <td colspan=\"5\">";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Aucune commande"), "html", null, true);
            yield "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commande'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "            </tbody>
        </table>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "commande/admin/credit.html.twig";
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
        return array (  294 => 77,  285 => 74,  282 => 73,  280 => 72,  268 => 65,  259 => 63,  254 => 61,  250 => 60,  246 => 59,  242 => 58,  238 => 57,  235 => 56,  230 => 55,  222 => 50,  218 => 49,  214 => 48,  210 => 47,  206 => 46,  195 => 38,  191 => 37,  184 => 33,  176 => 28,  172 => 27,  165 => 23,  161 => 22,  154 => 18,  149 => 15,  136 => 14,  113 => 12,  90 => 11,  65 => 10,  43 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends
    is_granted('ROLE_ADMIN') ? 'admin.html.twig' :
    is_granted('ROLE_RH') ? 'rh.html.twig' :
    is_granted('ROLE_FINANCE') ? 'finance.html.twig' :
    is_granted('ROLE_STOCK') ? 'stock.html.twig' :
    is_granted('ROLE_LIVREUR') ? 'livreur.html.twig' :
    is_granted('ROLE_EMPLOYER') ? 'employe.html.twig' :
    'layout.html.twig'
%}
{% block title %} {{ \"Commande\"|trans }} - GNT Pharma {% endblock %}
{% block commande %}active{% endblock %}
{% block suivi %}active{% endblock %}

{% block body %}
    <div class=\"container mt-4 fond-7\">
        <h3 class=\"mt-4 mb-5 text-bold\">
            <i class=\"fa fa-shopping-cart mr-2\"></i>
            {{ \"Suivi des commandes\"|trans }}
        </h3>
        <ul class=\"nav nav-tabs mb-4\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('commande_panier_suivi') }}\">
                    {{ 'Validation paiement'|trans }}
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('commande_panier_validation_credit') }}\">
                    {{ 'Validation crédit'|trans }}
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link active\" href=\"#\">
                    {{'Commandes à crédit'|trans}}
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('commande_panier_history') }}\">
                    {{'Commandes déjà payées'|trans}}
                </a>
            </li>
        </ul>

        <table class=\"table table-success-light table-bordered table-hover table-striped w-100 mt-4\" id=\"liste\">
            <thead>
            <tr>
                <th>{{ 'Numero Commande'|trans }}</th>
                <th>{{ 'Date'|trans }}</th>
                <th>{{ 'Client'|trans }} </th>
                <th>{{ 'Montant Commande'|trans }}</th>
                <th>{{ 'Montant Restant'|trans }}</th>
                <th> </th>
            </tr>
            </thead>
            <tbody>
            {% for commande in commandes %}
                <tr>
                    <td data-label=\"Numero Commande\">{{ commande.id }}</td>
                    <td data-label=\"Date\">{{ commande.date|date('d/m/Y') }}</td>
                    <td data-label=\"Client\"> {{ commande.user.nom }}</td>
                    <td data-label=\"Montant Commande\">{{ commande.montant|number_format(0, '' , ' ') }}</td>
                    <td data-label=\"Montant Restant\">{{ (commande.montant - commande.versement)|number_format(0, '' , ' ') }}</td>
                    <td data-label=\"traitement\">
                        <a id=\"{{ commande.id }}\" onclick=\"load({{ commande.id }})\" href=\"{{ path('commande_panier_paiement_credit', {'commande' : commande.id}) }}\" class=\"btn btn-success\">
                            <i class=\"fa fa-gears\"></i>
                            {{ 'Traitement'|trans }}
                        </a>
                    </td>


                </tr>

            {% else %}
                <tr>
                    <td colspan=\"5\">{{ 'Aucune commande'|trans }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>

{% endblock %}
", "commande/admin/credit.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\commande\\admin\\credit.html.twig");
    }
}
