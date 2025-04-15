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

/* fournisseur/show.html.twig */
class __TwigTemplate_c705e09edbb35a690e22fc02857cf21c extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 8
        return $this->loadTemplate((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) ? ("admin.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RH")) ? ("rh.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FINANCE")) ? ("finance.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STOCK")) ? ("stock.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_LIVREUR")) ? ("livreur.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYER")) ? ("employe.html.twig") : ("layout.html.twig")))))))))))), "fournisseur/show.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/show.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
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

        // line 12
        yield "<div class=\"col-lg-6 mt-4 pb-4 fond-7\">
    <h3 class=\"mt-4 mb-5 text-bold\">
        <i class=\"fa-brands fa-product-hunt mr-2\"></i>
        ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Informations du fournisseur"), "html", null, true);
        yield "
    </h3>

    <table class=\"table table-success-light table-bordered text-center table-hover table-striped w-100\">
        <tbody>
            <tr>
                <th>Désignation</th>
                <td>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 22, $this->source); })()), "designation", [], "any", false, false, false, 22), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Téléphone</th>
                <td>";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 26, $this->source); })()), "telephone", [], "any", false, false, false, 26), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Pays</th>
                <td>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 34, $this->source); })()), "pays", [], "any", false, false, false, 34), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 38, $this->source); })()), "adresse", [], "any", false, false, false, 38), "html", null, true);
        yield "</td>
            </tr>

        </tbody>
    </table>

    <div class=\"col-md-4 offset-md-3 mt-4 py-3 fond-7\">
        <div class=\"centrer\">
";
        // line 48
        yield "            <a id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48), "html", null, true);
        yield "\" onclick=\"load(";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48), "html", null, true);
        yield ")\" class=\"btn btn-success-light text-green\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fournisseur_index");
        yield "\">
                <i class=\"fa fa-undo\"></i>
                ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Retour"), "html", null, true);
        yield "
            </a>
        </div>
    </div>

</div><div class=\"col-lg-6 mt-4 pb-4 fond-7\">
    <h3 class=\"mt-4 mb-5 text-bold\">
        <i class=\"fa-brands fa-product-hunt mr-2\"></i>
        ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Liste des produits du fournisseur"), "html", null, true);
        yield "
    </h3>

    <table class=\"table table-success-light table-bordered table-hover table-striped w-100\" id=\"liste\">
        <thead>
        <tr>
            <th>";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Code"), "html", null, true);
        yield "</th>
            <th>";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Désignation"), "html", null, true);
        yield "</th>
            <th>";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Prix Cession"), "html", null, true);
        yield "</th>
            <th>";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Prix Public"), "html", null, true);
        yield "</th>
            <th>";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Commande"), "html", null, true);
        yield "<br> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Minimum"), "html", null, true);
        yield "</th>
            <th>";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fabricant"), "html", null, true);
        yield "</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 73, $this->source); })()), "Produits", [], "any", false, false, false, 73));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 74
            yield "            <tr>
                <td>";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "reference", [], "any", false, false, false, 75), "html", null, true);
            yield "</td>
                <td>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "desigantion", [], "any", false, false, false, 76), "html", null, true);
            yield "</td>
                <td>";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 77), "html", null, true);
            yield "</td>
                <td>";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prixpublic", [], "any", false, false, false, 78), "html", null, true);
            yield "</td>
                <td>";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "mincommande", [], "any", false, false, false, 79), "html", null, true);
            yield "</td>
                <td>";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "fabriquant", [], "any", false, false, false, 80), "html", null, true);
            yield "</td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 82
        if (!$context['_iterated']) {
            // line 83
            yield "            <tr>
                <td colspan=\"7\">";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Aucun produit"), "html", null, true);
            yield "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        yield "        </tbody>
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
        return "fournisseur/show.html.twig";
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
        return array (  237 => 87,  228 => 84,  225 => 83,  223 => 82,  216 => 80,  212 => 79,  208 => 78,  204 => 77,  200 => 76,  196 => 75,  193 => 74,  188 => 73,  181 => 69,  175 => 68,  171 => 67,  167 => 66,  163 => 65,  159 => 64,  150 => 58,  139 => 50,  129 => 48,  118 => 38,  111 => 34,  104 => 30,  97 => 26,  90 => 22,  80 => 15,  75 => 12,  62 => 11,  40 => 8,);
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

{% block body %}
<div class=\"col-lg-6 mt-4 pb-4 fond-7\">
    <h3 class=\"mt-4 mb-5 text-bold\">
        <i class=\"fa-brands fa-product-hunt mr-2\"></i>
        {{ \"Informations du fournisseur\"|trans }}
    </h3>

    <table class=\"table table-success-light table-bordered text-center table-hover table-striped w-100\">
        <tbody>
            <tr>
                <th>Désignation</th>
                <td>{{ fournisseur.designation }}</td>
            </tr>
            <tr>
                <th>Téléphone</th>
                <td>{{ fournisseur.telephone }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ fournisseur.email }}</td>
            </tr>
            <tr>
                <th>Pays</th>
                <td>{{ fournisseur.pays }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ fournisseur.adresse }}</td>
            </tr>

        </tbody>
    </table>

    <div class=\"col-md-4 offset-md-3 mt-4 py-3 fond-7\">
        <div class=\"centrer\">
{#            <a class=\"btn btn-success mr-3\" href=\"{{ path('fournisseur_edit', {'id': fournisseur.id}) }}\">#}
{#                <i class=\"fa fa-edit\"></i> Modifier</a>#}
            <a id=\"{{ fournisseur.id }}\" onclick=\"load({{ fournisseur.id }})\" class=\"btn btn-success-light text-green\" href=\"{{ path('fournisseur_index') }}\">
                <i class=\"fa fa-undo\"></i>
                {{ 'Retour'|trans }}
            </a>
        </div>
    </div>

</div><div class=\"col-lg-6 mt-4 pb-4 fond-7\">
    <h3 class=\"mt-4 mb-5 text-bold\">
        <i class=\"fa-brands fa-product-hunt mr-2\"></i>
        {{ \"Liste des produits du fournisseur\"|trans }}
    </h3>

    <table class=\"table table-success-light table-bordered table-hover table-striped w-100\" id=\"liste\">
        <thead>
        <tr>
            <th>{{ 'Code'|trans }}</th>
            <th>{{ 'Désignation'|trans }}</th>
            <th>{{ 'Prix Cession'|trans }}</th>
            <th>{{ 'Prix Public'|trans }}</th>
            <th>{{ 'Commande'|trans }}<br> {{ 'Minimum'|trans }}</th>
            <th>{{ 'Fabricant'|trans }}</th>
        </tr>
        </thead>
        <tbody>
        {% for produit in fournisseur.Produits %}
            <tr>
                <td>{{ produit.reference }}</td>
                <td>{{ produit.desigantion }}</td>
                <td>{{ produit.prix }}</td>
                <td>{{ produit.prixpublic }}</td>
                <td>{{ produit.mincommande }}</td>
                <td>{{ produit.fabriquant }}</td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">{{ \"Aucun produit\"|trans }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

</div>
{% endblock %}
", "fournisseur/show.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\fournisseur\\show.html.twig");
    }
}
