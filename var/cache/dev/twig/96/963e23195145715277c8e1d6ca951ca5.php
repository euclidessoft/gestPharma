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

/* security/security/admin/profile.html.twig */
class __TwigTemplate_0e55c6bf7203959e6199d203eacc1c40 extends Template
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
            'officine' => [$this, 'block_officine'],
            'clients' => [$this, 'block_clients'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 8
        return $this->loadTemplate((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) ? ("admin.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RH")) ? ("rh.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FINANCE")) ? ("finance.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STOCK")) ? ("stock.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_LIVREUR")) ? ("livreur.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYER")) ? ("employe.html.twig") : ("layout.html.twig")))))))))))), "security/security/admin/profile.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/security/admin/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/security/admin/profile.html.twig"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mon profile"), "html", null, true);
        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_officine(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "officine"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "officine"));

        yield "active";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_clients(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "clients"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "clients"));

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

        // line 15
        yield "
<div class=\"container mt-5 mb-5 p-5 fond-7\">
    <h4 class=\"text-bold mb-5\">
        <i class=\"fa fa-user mr-2\"></i>
        ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Profil utilisateur"), "html", null, true);
        yield "
    </h4>

    ";
        // line 23
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "flashes", ["notice"], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 24
            yield "    <div class=\"col-lg-12 mt-4 alert alert-success alert-dismissible fade show radius-10 shadow-black\"
        role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
            yield "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "
    <ul class=\"nav nav-tabs mb-4\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_profile");
        yield "\">
                ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Informations"), "html", null, true);
        yield "
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_profile_professionnelle");
        yield "\">
                ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Professionnelles"), "html", null, true);
        yield "
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_change_password");
        yield "\">
                ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Securite"), "html", null, true);
        yield "
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evaluation_suivi");
        yield "\">
                ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Discipline"), "html", null, true);
        yield "
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_bulletins");
        yield "\">
                ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Bulletins"), "html", null, true);
        yield "
            </a>
        </li>
    </ul>


    <div class=\"row\">
        ";
        // line 61
        $context["employe"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61);
        // line 62
        yield "        <div class=\"col-md-8 pt-5\">
            <p><strong>Nom complet : </strong>";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 63, $this->source); })()), "prenom", [], "any", false, false, false, 63), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 63, $this->source); })()), "nom", [], "any", false, false, false, 63), "html", null, true);
        yield "</p>
            <p><strong>Date de naissance : </strong>";
        // line 64
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 64, $this->source); })()), "dateNaissance", [], "any", false, false, false, 64)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 64, $this->source); })()), "dateNaissance", [], "any", false, false, false, 64), "d/m/Y"), "html", null, true)) : (" "));
        yield "</p>
            <p><strong>Lieu de naissance : </strong>";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 65, $this->source); })()), "lieuNaissance", [], "any", false, false, false, 65), "html", null, true);
        yield "</p>
            <p><strong>Sexe : </strong>";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 66, $this->source); })()), "sexe", [], "any", false, false, false, 66), "html", null, true);
        yield "</p>
            <p><strong>Situation Matrimoniale : </strong>";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 67, $this->source); })()), "civilite", [], "any", false, false, false, 67), "html", null, true);
        yield "</p>
            <p><strong>Nombre d'enfants : </strong>";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 68, $this->source); })()), "enfant", [], "any", false, false, false, 68), "html", null, true);
        yield "</p>
            <p><strong>Nationalité : </strong>";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 69, $this->source); })()), "nationalite", [], "any", false, false, false, 69), "html", null, true);
        yield "</p>
            <p><strong>Adresse : </strong>";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 70, $this->source); })()), "adresse", [], "any", false, false, false, 70), "html", null, true);
        yield "</p>
            <p><strong>Téléphone : </strong>";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 71, $this->source); })()), "phone", [], "any", false, false, false, 71), "html", null, true);
        yield "</p>
            <p><strong>Email : </strong>";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 72, $this->source); })()), "email", [], "any", false, false, false, 72), "html", null, true);
        yield "</p>
            <p><strong>Groupe sanguin : </strong>";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 73, $this->source); })()), "bloodgroup", [], "any", false, false, false, 73), "html", null, true);
        yield "</p>
        </div>
        <div class=\"col-md-4\">
            <img src=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar-homme.avif"), "html", null, true);
        yield "\" width=\"150px\" height=\"150px\" alt=\"employe.nom\" class=\"img-fluid border border-secondary rounded-circle\" />
        </div>
    </div>

    ";
        // line 104
        yield "    ";
        // line 105
        yield "</div>
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
        return "security/security/admin/profile.html.twig";
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
        return array (  305 => 105,  303 => 104,  296 => 76,  290 => 73,  286 => 72,  282 => 71,  278 => 70,  274 => 69,  270 => 68,  266 => 67,  262 => 66,  258 => 65,  254 => 64,  248 => 63,  245 => 62,  243 => 61,  233 => 54,  229 => 53,  222 => 49,  218 => 48,  211 => 44,  207 => 43,  200 => 39,  196 => 38,  189 => 34,  185 => 33,  180 => 30,  171 => 27,  166 => 24,  161 => 23,  155 => 19,  149 => 15,  136 => 13,  113 => 12,  90 => 11,  65 => 10,  43 => 8,);
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
{% block title %} {{ 'Mon profile'|trans }} {% endblock %}
{% block officine %}active{% endblock %}
{% block clients %}active{% endblock %}
{% block body %}
{#    {{ include('security/security/profile-info.html.twig') }}#}

<div class=\"container mt-5 mb-5 p-5 fond-7\">
    <h4 class=\"text-bold mb-5\">
        <i class=\"fa fa-user mr-2\"></i>
        {{ 'Profil utilisateur'|trans }}
    </h4>

    {#        <div class=\"row\">#}
    {% for message in app.flashes('notice') %}
    <div class=\"col-lg-12 mt-4 alert alert-success alert-dismissible fade show radius-10 shadow-black\"
        role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        {{ message|trans }}
    </div>
    {% endfor %}

    <ul class=\"nav nav-tabs mb-4\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"{{ path('security_profile') }}\">
                {{'Informations'|trans }}
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('security_profile_professionnelle') }}\">
                {{'Professionnelles'|trans}}
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('security_change_password') }}\">
                {{'Securite'|trans}}
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('evaluation_suivi') }}\">
                {{'Discipline'|trans}}
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('mes_bulletins') }}\">
                {{'Bulletins'|trans}}
            </a>
        </li>
    </ul>


    <div class=\"row\">
        {% set employe = app.user %}
        <div class=\"col-md-8 pt-5\">
            <p><strong>Nom complet : </strong>{{ employe.prenom }} {{ employe.nom }}</p>
            <p><strong>Date de naissance : </strong>{{ employe.dateNaissance ? employe.dateNaissance|date('d/m/Y'): ' ' }}</p>
            <p><strong>Lieu de naissance : </strong>{{ employe.lieuNaissance }}</p>
            <p><strong>Sexe : </strong>{{ employe.sexe }}</p>
            <p><strong>Situation Matrimoniale : </strong>{{ employe.civilite }}</p>
            <p><strong>Nombre d'enfants : </strong>{{ employe.enfant }}</p>
            <p><strong>Nationalité : </strong>{{ employe.nationalite }}</p>
            <p><strong>Adresse : </strong>{{ employe.adresse }}</p>
            <p><strong>Téléphone : </strong>{{ employe.phone }}</p>
            <p><strong>Email : </strong>{{ employe.email }}</p>
            <p><strong>Groupe sanguin : </strong>{{ employe.bloodgroup }}</p>
        </div>
        <div class=\"col-md-4\">
            <img src=\"{{asset('images/avatar-homme.avif') }}\" width=\"150px\" height=\"150px\" alt=\"employe.nom\" class=\"img-fluid border border-secondary rounded-circle\" />
        </div>
    </div>

    {# {{ include('security/security/boutons.html.twig') }}
            <div class=\"col-lg-3 mt-5 text-center\">
                <img src=\"{{ asset('images/team_1.avif') }}\" alt=\"\" class=\"w-100 img-fluid rounded\">
                #}{#{% if user.sexe == \"Monsieur\" %}#}{#
                <img src=\"{{asset('images/avatar.jpg') }}\" width=\"100\" alt=\"Photo\" class=\"rounded-circle\" />
                #}{# {% else %}#}{#
                #}{# <img src=\"{{asset('images/avatar-femme.jpg') }}\" width=\"100\" alt=\"Photo\" class=\"rounded-circle\" />#}{#
                #}{# {% endif %}#}{#
                #}{# <h6 class=\"mt-3\">{{ user.bloodgroup }}</h6>#}{#
            </div>
            <div class=\"col-lg-9 mt-5\">
                <div class=\"row\">
                    <div class=\"col-lg-3 text-right text-bold\">{{ 'Prénom'|trans }}</div>
                    <div class=\"col-lg-9 ml-n4\">{{ user.prenom }}</div>
                    <div class=\"col-lg-3 text-right text-bold\">{{ 'Nom'|trans }}</div>
                    <div class=\"col-lg-9 ml-n4\">{{ user.nom }}</div>
                    <div class=\"col-lg-3 text-right text-bold\">{{ 'Téléphone'|trans }}</div>
                    <div class=\"col-lg-9 ml-n4\">{{ user.phone }}</div>
                    <div class=\"col-lg-3 text-right text-bold\">{{ 'Email'|trans }}</div>
                    <div class=\"col-lg-9 ml-n4\">{{ user.email }}</div>
                    <div class=\"col-lg-3 text-right text-bold\">{{ 'Adresse'|trans }}</div>
                    <div class=\"col-lg-9 ml-n4\">{{ user.adresse }}</div>
                </div>
            </div>#}
    {#        </div>#}
</div>
{% endblock %}", "security/security/admin/profile.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\security\\security\\admin\\profile.html.twig");
    }
}
