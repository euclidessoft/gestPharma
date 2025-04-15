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

/* fournisseur/index.html.twig */
class __TwigTemplate_4c7ebe46f37dbe6799df834871bfd54e extends Template
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
            'fournisseur' => [$this, 'block_fournisseur'],
            'all_fournisseurs' => [$this, 'block_all_fournisseurs'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 8
        return $this->loadTemplate((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) ? ("admin.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RH")) ? ("rh.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FINANCE")) ? ("finance.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STOCK")) ? ("stock.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_LIVREUR")) ? ("livreur.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYER")) ? ("employe.html.twig") : ("layout.html.twig")))))))))))), "fournisseur/index.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/index.html.twig"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fournisseurs"), "html", null, true);
        yield " - GNT Pharma ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_fournisseur(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fournisseur"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fournisseur"));

        yield "active";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_all_fournisseurs(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_fournisseurs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_fournisseurs"));

        yield "active";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 13
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

        // line 14
        yield "    <div class=\"container mt-4 fond-7\">
        <h3 class=\"mt-4 mb-5 text-bold\">
            <i class=\"fa-solid fa-hospital-user\"></i>
            ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Liste des fournisseurs"), "html", null, true);
        yield "
        </h3>
        <a class=\"btn btn-green mb-5\" href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fournisseur_new");
        yield "\">
            <i class=\"fa-solid fa-hospital-user\"></i><i class=\"fa-solid fa-plus\"></i>
            ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nouveau fournisseur"), "html", null, true);
        yield "
        </a>
        <table class=\"table table-success-light table-bordered table-hover table-striped w-100\" id=\"liste\">
            <thead>
            <tr>
                <th>";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nº Compte"), "html", null, true);
        yield "</th>
                <th>";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nom"), "html", null, true);
        yield "</th>
                <th>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Adresse"), "html", null, true);
        yield "</th>
                <th>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        yield "</th>
                <th>";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pays"), "html", null, true);
        yield "</th>
                <th>";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Téléphone"), "html", null, true);
        yield "</th>
                <th>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions"), "html", null, true);
        yield "</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fournisseurs"]) || array_key_exists("fournisseurs", $context) ? $context["fournisseurs"] : (function () { throw new RuntimeError('Variable "fournisseurs" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["fournisseur"]) {
            // line 37
            yield "                <tr>
                    <td data-label=\"Nº Compte\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "compte", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                    <td data-label=\"Nom\">";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "designation", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                    <td data-label=\"Adresse\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "adresse", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                    <td data-label=\"Email\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "email", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                    <td data-label=\"Pays\">";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "pays", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                    <td data-label=\"Téléphone\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "telephone", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                    <td data-label=\"Actions\" class=\"text-nowrap\">
                        <a id=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "id", [], "any", false, false, false, 45), "html", null, true);
            yield "\" onclick=\"load(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "id", [], "any", false, false, false, 45), "html", null, true);
            yield ")\"
                           href=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fournisseur_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Voir details"), "html", null, true);
            yield "\"
                           class=\"btn btn-green mr-2\">
                            <i class=\"fa fa-eye\"></i>
                        </a>
                        <a href=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fournisseur_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modifier"), "html", null, true);
            yield "\"
                           class=\"btn btn-success-light mr-2\">
                            <i class=\"fa fa-edit\"></i>
                        </a>
                        ";
            // line 54
            yield Twig\Extension\CoreExtension::include($this->env, $context, "fournisseur/_delete_form.html.twig");
            yield "
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 57
        if (!$context['_iterated']) {
            // line 58
            yield "                <tr>
                    <td colspan=\"7\" class=\"text-center\">Aucun fournisseur enregistré</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fournisseur'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
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
        return "fournisseur/index.html.twig";
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
        return array (  300 => 62,  291 => 58,  289 => 57,  273 => 54,  264 => 50,  255 => 46,  249 => 45,  244 => 43,  240 => 42,  236 => 41,  232 => 40,  228 => 39,  224 => 38,  221 => 37,  203 => 36,  196 => 32,  192 => 31,  188 => 30,  184 => 29,  180 => 28,  176 => 27,  172 => 26,  164 => 21,  159 => 19,  154 => 17,  149 => 14,  136 => 13,  113 => 12,  90 => 11,  65 => 10,  43 => 8,);
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
{% block title %} {{ \"Fournisseurs\"|trans }} - GNT Pharma {% endblock %}
{% block fournisseur %}active{% endblock %}
{% block all_fournisseurs %}active{% endblock %}
{% block body %}
    <div class=\"container mt-4 fond-7\">
        <h3 class=\"mt-4 mb-5 text-bold\">
            <i class=\"fa-solid fa-hospital-user\"></i>
            {{ \"Liste des fournisseurs\"|trans }}
        </h3>
        <a class=\"btn btn-green mb-5\" href=\"{{ path('fournisseur_new') }}\">
            <i class=\"fa-solid fa-hospital-user\"></i><i class=\"fa-solid fa-plus\"></i>
            {{ 'Nouveau fournisseur'|trans }}
        </a>
        <table class=\"table table-success-light table-bordered table-hover table-striped w-100\" id=\"liste\">
            <thead>
            <tr>
                <th>{{ 'Nº Compte'|trans }}</th>
                <th>{{ 'Nom'|trans }}</th>
                <th>{{ 'Adresse'|trans }}</th>
                <th>{{ 'Email'|trans }}</th>
                <th>{{ 'Pays'|trans }}</th>
                <th>{{ 'Téléphone'|trans }}</th>
                <th>{{ 'Actions'|trans }}</th>
            </tr>
            </thead>
            <tbody>
            {% for fournisseur in fournisseurs %}
                <tr>
                    <td data-label=\"Nº Compte\">{{ fournisseur.compte }}</td>
                    <td data-label=\"Nom\">{{ fournisseur.designation }}</td>
                    <td data-label=\"Adresse\">{{ fournisseur.adresse }}</td>
                    <td data-label=\"Email\">{{ fournisseur.email }}</td>
                    <td data-label=\"Pays\">{{ fournisseur.pays }}</td>
                    <td data-label=\"Téléphone\">{{ fournisseur.telephone }}</td>
                    <td data-label=\"Actions\" class=\"text-nowrap\">
                        <a id=\"{{ fournisseur.id }}\" onclick=\"load({{ fournisseur.id }})\"
                           href=\"{{ path('fournisseur_show', {'id': fournisseur.id}) }}\" title=\"{{ 'Voir details'|trans }}\"
                           class=\"btn btn-green mr-2\">
                            <i class=\"fa fa-eye\"></i>
                        </a>
                        <a href=\"{{ path('fournisseur_edit', {'id': fournisseur.id}) }}\" title=\"{{ 'Modifier'|trans }}\"
                           class=\"btn btn-success-light mr-2\">
                            <i class=\"fa fa-edit\"></i>
                        </a>
                        {{ include('fournisseur/_delete_form.html.twig') }}
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"7\" class=\"text-center\">Aucun fournisseur enregistré</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
", "fournisseur/index.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\fournisseur\\index.html.twig");
    }
}
