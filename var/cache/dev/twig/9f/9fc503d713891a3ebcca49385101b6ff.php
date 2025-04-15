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

/* rh.html.twig */
class __TwigTemplate_5ff5713d79cf38765befee264acdf1f8 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'facture' => [$this, 'block_facture'],
            'nav' => [$this, 'block_nav'],
            'home' => [$this, 'block_home'],
            'perso' => [$this, 'block_perso'],
            'mon_contrat' => [$this, 'block_mon_contrat'],
            'bulletiins' => [$this, 'block_bulletiins'],
            'mes_primes' => [$this, 'block_mes_primes'],
            'mes_permissions' => [$this, 'block_mes_permissions'],
            'mes_absence' => [$this, 'block_mes_absence'],
            'mes_explications' => [$this, 'block_mes_explications'],
            'mes_sanctions' => [$this, 'block_mes_sanctions'],
            'mes_performance' => [$this, 'block_mes_performance'],
            'employes' => [$this, 'block_employes'],
            'all_employe' => [$this, 'block_all_employe'],
            'contrat' => [$this, 'block_contrat'],
            'planning' => [$this, 'block_planning'],
            'discipline' => [$this, 'block_discipline'],
            'permissions' => [$this, 'block_permissions'],
            'absence' => [$this, 'block_absence'],
            'explications' => [$this, 'block_explications'],
            'sanctions' => [$this, 'block_sanctions'],
            'evaluation' => [$this, 'block_evaluation'],
            'critere' => [$this, 'block_critere'],
            'performance' => [$this, 'block_performance'],
            'paie' => [$this, 'block_paie'],
            'bulletin' => [$this, 'block_bulletin'],
            'heure_supplementaire' => [$this, 'block_heure_supplementaire'],
            'fiche' => [$this, 'block_fiche'],
            'prime' => [$this, 'block_prime'],
            'paie_historique' => [$this, 'block_paie_historique'],
            'formations' => [$this, 'block_formations'],
            'catalogue' => [$this, 'block_catalogue'],
            'en_cours' => [$this, 'block_en_cours'],
            'competences' => [$this, 'block_competences'],
            'communication' => [$this, 'block_communication'],
            'messagerie' => [$this, 'block_messagerie'],
            'note' => [$this, 'block_note'],
            'evenement' => [$this, 'block_evenement'],
            'config' => [$this, 'block_config'],
            'aide' => [$this, 'block_aide'],
            'manuel' => [$this, 'block_manuel'],
            'suggestion' => [$this, 'block_suggestion'],
            'bug' => [$this, 'block_bug'],
            'topbar' => [$this, 'block_topbar'],
            'body' => [$this, 'block_body'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rh.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rh.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">

<head>

    ";
        // line 6
        yield Twig\Extension\CoreExtension::include($this->env, $context, "includes/head.html.twig");
        yield "

    <title> ";
        // line 8
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield " </title>

    ";
        // line 10
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 19
        yield "    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
    <script src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/html5shiv.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/respond.min.js"), "html", null, true);
        yield "\"></script>
    <![endif]-->

</head>

<body ";
        // line 29
        yield from $this->unwrap()->yieldBlock('facture', $context, $blocks);
        yield ">

    ";
        // line 31
        yield from $this->unwrap()->yieldBlock('nav', $context, $blocks);
        // line 408
        yield "
    ";
        // line 409
        yield from $this->unwrap()->yieldBlock('topbar', $context, $blocks);
        // line 412
        yield "

    <div id=\"main\" class=\"container-fluid main pt-5\">
        ";
        // line 415
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 418
        yield "    </div>

    ";
        // line 420
        yield Twig\Extension\CoreExtension::include($this->env, $context, "includes/javascript.html.twig");
        yield "
    ";
        // line 421
        yield from $this->unwrap()->yieldBlock('scripts', $context, $blocks);
        // line 424
        yield "</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 8
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

        yield " GNT Pharma ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        yield "    <link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("DataTables/datatables.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fontawesome/css/all.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-4plus.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/accueil.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/gntpharma.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/gntpharma.jpeg"), "html", null, true);
        yield "\" type=\"image/x-icon\">

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_facture(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "facture"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "facture"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_nav(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 32
        yield "    <nav id=\"navmenu\" class=\"navmenu\">
        <div class=\"session\">
            <a id=\"session\" class=\"navbar-brand text-white m-2\" href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Accueil");
        yield "\">
                Gnt Pharma
            </a>
        </div>
        <div class=\"closebtn\" id=\"closebtn\" onclick=\"closeNav()\">
        </div>

        <div id=\"sidenav\" class=\"sidenav\" onclick=\"openNav()\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\" title=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Accueil"), "html", null, true);
        yield "\">
                    <a class=\"nav-link ";
        // line 44
        yield from $this->unwrap()->yieldBlock('home', $context, $blocks);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_index");
        yield "\">
                        <div class=\"icone\">
                            <i class=\"fas fa-dashboard fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tableau de bord"), "html", null, true);
        yield "
                        </div>
                    </a>
                </li>
                <li class=\"nav-item dropright\" title=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mes affaires"), "html", null, true);
        yield "\">
                    <a class=\"nav-link dropdown-toggle ";
        // line 54
        yield from $this->unwrap()->yieldBlock('perso', $context, $blocks);
        yield "\" href=\"#\" id=\"mes_affaires\"
                        data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fas fa-user fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mes affaires"), "html", null, true);
        yield "
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"mes_affaires\">
                        <li class=\"dropdown-item\" title=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mon contrat"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 65
        yield from $this->unwrap()->yieldBlock('mon_contrat', $context, $blocks);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_index");
        yield "\">
                                <i class=\"fa-solid fa-address-card\"></i>
                                ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mon contrat"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mes fiches de paie"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 71
        yield from $this->unwrap()->yieldBlock('bulletiins', $context, $blocks);
        yield "\" href=\"";
        yield "\">
                                <i class=\"fa-solid fa-money-check-dollar\"></i>
                                ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mes fiches de paie"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mes primes et avantages"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 77
        yield from $this->unwrap()->yieldBlock('mes_primes', $context, $blocks);
        yield "\"
                               href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prime_index");
        yield "\">
                                <i class=\"fa-solid fa-money-bill-wheat\"></i>
                                ";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Primes et avantages"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mes permissions"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 84
        yield from $this->unwrap()->yieldBlock('mes_permissions', $context, $blocks);
        yield "\"
                               href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conges_employe_index");
        yield "\">
                                <i class=\"fa-solid fa-user-check\"></i>
                                ";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Permissions"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mes absences"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 91
        yield from $this->unwrap()->yieldBlock('mes_absence', $context, $blocks);
        yield "\"
                               href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("absence_index");
        yield "\">
                                <i class=\"fa fa-user-slash\"></i>
                                ";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Absences"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mes demande d'explication"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 98
        yield from $this->unwrap()->yieldBlock('mes_explications', $context, $blocks);
        yield "\"
                               href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_index");
        yield "\">
                                <i class=\"fa-solid fa-user-pen\"></i>
                                ";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Demande d'explication"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mes sanctions"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 105
        yield from $this->unwrap()->yieldBlock('mes_sanctions', $context, $blocks);
        yield "\"
                               href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sanction_suivi");
        yield "\">
                                <i class=\"fa-solid fa-user-xmark\"></i>
                                ";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sanctions"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mes performance"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 112
        yield from $this->unwrap()->yieldBlock('mes_performance', $context, $blocks);
        yield "\"
                               href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evaluation_index");
        yield "\">
                                <i class=\"fa-solid fa-chart-line\"></i>
                                ";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Performance"), "html", null, true);
        yield "
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item dropright\" title=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Employés"), "html", null, true);
        yield "\">
                    <a class=\"nav-link dropdown-toggle ";
        // line 121
        yield from $this->unwrap()->yieldBlock('employes', $context, $blocks);
        yield "\" href=\"#\"
                        id=\"employes\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fas fa-users fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            ";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Employés"), "html", null, true);
        yield "
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"employes\">
                        <li class=\"dropdown-item\" title=\"";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tous les employés"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 132
        yield from $this->unwrap()->yieldBlock('all_employe', $context, $blocks);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_index");
        yield "\">
                                <i class=\"fa-solid fa-address-card\"></i>
                                ";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tous les employés"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contrat"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 138
        yield from $this->unwrap()->yieldBlock('contrat', $context, $blocks);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_index");
        yield "\">
                                <i class=\"fa-solid fa-address-card\"></i>
                                ";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contrat"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Planning des congés"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 144
        yield from $this->unwrap()->yieldBlock('planning', $context, $blocks);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendrier_index");
        yield "\">
                                <i class=\"fa-solid fa-calendar-days\"></i>
                                ";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Planning des congés"), "html", null, true);
        yield "
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item dropright\" title=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Discipline"), "html", null, true);
        yield "\">
                    <a class=\"nav-link dropdown-toggle ";
        // line 152
        yield from $this->unwrap()->yieldBlock('discipline', $context, $blocks);
        yield "\" href=\"#\" id=\"conges\"
                        data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fa-solid fa-users-slash fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            ";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Discipline"), "html", null, true);
        yield "
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"conges\">
                        <li class=\"dropdown-item\" title=\"";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Permissions"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 164
        yield from $this->unwrap()->yieldBlock('permissions', $context, $blocks);
        yield "\"
                                href=\"";
        // line 165
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conges_admin_suivi");
        yield "\">
                                <i class=\"fa-solid fa-user-check\"></i>
                                ";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Permissions"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Absences"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 171
        yield from $this->unwrap()->yieldBlock('absence', $context, $blocks);
        yield "\"
                                href=\"";
        // line 172
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("absence_admin_attente");
        yield "\">
                                <i class=\"fa fa-user-slash\"></i>
                                ";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Absences"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Demande d'explication"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 178
        yield from $this->unwrap()->yieldBlock('explications', $context, $blocks);
        yield "\"
                                href=\"";
        // line 179
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_index");
        yield "\">
                                <i class=\"fa-solid fa-user-pen\"></i>
                                ";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Demande d'explication"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sanctions"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 185
        yield from $this->unwrap()->yieldBlock('sanctions', $context, $blocks);
        yield "\"
                                href=\"";
        // line 186
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sanction_suivi");
        yield "\">
                                <i class=\"fa-solid fa-user-xmark\"></i>
                                ";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sanctions"), "html", null, true);
        yield "
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item dropright\" title=\"";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Evaluation"), "html", null, true);
        yield "\">
                    <a class=\"nav-link dropdown-toggle ";
        // line 194
        yield from $this->unwrap()->yieldBlock('evaluation', $context, $blocks);
        yield "\" href=\"#\"
                        id=\"administration\"
                        data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fa-solid fa-chart-line fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            ";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Evaluation"), "html", null, true);
        yield "
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"administration\">
";
        // line 207
        yield "                        <li class=\"dropdown-item\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Performance"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 208
        yield from $this->unwrap()->yieldBlock('critere', $context, $blocks);
        yield "\"
                                href=\"";
        // line 209
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("critere_evaluation_index");
        yield "\">
                                <i class=\"fa-solid fa-chart-simple\"></i>
                                ";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Critere"), "html", null, true);
        yield "
                            </a>
                        </li>
";
        // line 215
        yield "                        <li class=\"dropdown-item\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Performance"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 216
        yield from $this->unwrap()->yieldBlock('performance', $context, $blocks);
        yield "\"
                                href=\"";
        // line 217
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evaluation_index");
        yield "\">
                                <i class=\"fa-solid fa-chart-line\"></i>
                                ";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Performance"), "html", null, true);
        yield "
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item dropright\" title=\"";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Paie et Avantages"), "html", null, true);
        yield "\">
                    <a class=\"nav-link dropdown-toggle ";
        // line 225
        yield from $this->unwrap()->yieldBlock('paie', $context, $blocks);
        yield "\" href=\"#\" id=\"paie\"
                        data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fa-solid fa-money-bill-wave fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            ";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Paie"), "html", null, true);
        yield "
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"paie\">

                        <li class=\"dropdown-item\" title=\"";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fiche de paie"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 238
        yield from $this->unwrap()->yieldBlock('bulletin', $context, $blocks);
        yield "\"
                                href=\"";
        // line 239
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_bulletins");
        yield "\">
                                <i class=\"fa-solid fa-money-check-dollar\"></i>
                                ";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Bulletins de salaire"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fiche de paie"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 245
        yield from $this->unwrap()->yieldBlock('heure_supplementaire', $context, $blocks);
        yield "\"
                                href=\"";
        // line 246
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("heure_suplementaire_index");
        yield "\">
                                <i class=\"fa-solid fa-money-check-dollar\"></i>
                                ";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Heure Supplementaire"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fiche de paie"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 252
        yield from $this->unwrap()->yieldBlock('fiche', $context, $blocks);
        yield "\"
                                href=\"";
        // line 253
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie_index");
        yield "\">
                                <i class=\"fa-solid fa-money-check-dollar\"></i>
                                ";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fiche de paie à valider"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Primes et avantages"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 259
        yield from $this->unwrap()->yieldBlock('prime', $context, $blocks);
        yield "\"
                                href=\"";
        // line 260
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prime_index");
        yield "\">
                                <i class=\"fa-solid fa-money-bill-wheat\"></i>
                                ";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Primes et avantages"), "html", null, true);
        yield "
                            </a>
                        </li>

                        <li class=\"dropdown-item\" title=\"";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Historique des paiements"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 267
        yield from $this->unwrap()->yieldBlock('paie_historique', $context, $blocks);
        yield "\"
                                href=\"";
        // line 268
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie_historique");
        yield "\">
                                <i class=\"fa-solid fa-rectangle-list\"></i>
                                ";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Historique des paiements"), "html", null, true);
        yield "
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item dropright\" title=\"";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Formations"), "html", null, true);
        yield "\">
                    <a class=\"nav-link dropdown-toggle ";
        // line 276
        yield from $this->unwrap()->yieldBlock('formations', $context, $blocks);
        yield "\" href=\"#\" id=\"formations\"
                        data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fa-solid fa-book-open-reader fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            ";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Formations"), "html", null, true);
        yield "
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"formations\">

                        <li class=\"dropdown-item\" title=\"";
        // line 288
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Catalogue des formations"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 289
        yield from $this->unwrap()->yieldBlock('catalogue', $context, $blocks);
        yield "\"
                                href=\"";
        // line 290
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_index");
        yield "\">
                                <i class=\"fa-solid fa-book\"></i>
                                ";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Catalogue des formations"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Formations en cours"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 296
        yield from $this->unwrap()->yieldBlock('en_cours', $context, $blocks);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_index");
        yield "\">
                                <i class=\"fa-solid fa-book-bookmark\"></i>
                                ";
        // line 298
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Formations en cours"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 301
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Compétences acquises"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 302
        yield from $this->unwrap()->yieldBlock('competences', $context, $blocks);
        yield "\"
                                href=\"";
        // line 303
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_index");
        yield "\">
                                <i class=\"fa-solid fa-graduation-cap\"></i>
                                ";
        // line 305
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Compétences acquises"), "html", null, true);
        yield "
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item dropright\" title=\"";
        // line 310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Communication"), "html", null, true);
        yield "\">
                    <a class=\"nav-link dropdown-toggle ";
        // line 311
        yield from $this->unwrap()->yieldBlock('communication', $context, $blocks);
        yield "\" href=\"#\"
                        id=\"communication\"
                        data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fa-regular fa-message fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            ";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Communication"), "html", null, true);
        yield "
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"communication\">
                        <li class=\"dropdown-item\" title=\"";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Messagerie interne"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 324
        yield from $this->unwrap()->yieldBlock('messagerie', $context, $blocks);
        yield "\"
                                href=\"";
        // line 325
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("received");
        yield "\">
                                <i class=\"fa-solid fa-comments\"></i>
                                ";
        // line 327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Messagerie interne"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Notes de service"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 331
        yield from $this->unwrap()->yieldBlock('note', $context, $blocks);
        yield "\"
                                href=\"";
        // line 332
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("note_service_index");
        yield "\">
                                <i class=\"fa-regular fa-note-sticky\"></i>
                                ";
        // line 334
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Notes de service"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Événements"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 338
        yield from $this->unwrap()->yieldBlock('evenement', $context, $blocks);
        yield "\"
                                href=\"";
        // line 339
        yield "\">
                                <i class=\"fa-solid fa-mug-saucer\"></i>
                                ";
        // line 341
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Événements"), "html", null, true);
        yield "
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item\" title=\"";
        // line 346
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configuration"), "html", null, true);
        yield "\">
                    <a class=\"nav-link ";
        // line 347
        yield from $this->unwrap()->yieldBlock('config', $context, $blocks);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("departement_index");
        yield "\">
                        <div class=\"icone\">
                        <i class=\"fa-solid fa-gear fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                        ";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configuration"), "html", null, true);
        yield "
                        </div>
                    </a>
                </li>
                <li class=\"nav-item dropright\" title=\"";
        // line 356
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Aide"), "html", null, true);
        yield "\">
                    <a class=\"nav-link dropdown-toggle ";
        // line 357
        yield from $this->unwrap()->yieldBlock('aide', $context, $blocks);
        yield "\" href=\"#\" id=\"Aide\"
                        data-toggle=\"dropdown\" aria-haspopup=\"true\"
                        aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fas fa-question-circle fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            ";
        // line 364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Aide"), "html", null, true);
        yield "
                        </div>
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"Aide\">
                        <li class=\"dropdown-item\" title=\"";
        // line 368
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manuel"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 369
        yield from $this->unwrap()->yieldBlock('manuel', $context, $blocks);
        yield "\" href=\"#\">
                                <i class=\"fas fa-book\"></i>
                                ";
        // line 371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manuel"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 374
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Suggestions à l’entreprise"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 375
        yield from $this->unwrap()->yieldBlock('suggestion', $context, $blocks);
        yield "\"
                                href=\"";
        // line 376
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("feedback_index");
        yield "\">
                                <i class=\"fas fa-comments\"></i>
                                ";
        // line 378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Suggestions à l’entreprise"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 381
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Signaler un bug"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 382
        yield from $this->unwrap()->yieldBlock('bug', $context, $blocks);
        yield "\" href=\"#\">
                                <i class=\"fas fa-bug\"></i>
                                ";
        // line 384
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Signaler un bug"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 387
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A propos de l'application"), "html", null, true);
        yield "\">
                            <a href=\"#\" class=\"nav-link\" data-toggle=\"modal\" data-target=\"#about\">
                                <i class=\"fas fa-check-circle\"></i>
                                ";
        // line 390
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A propos de l'application"), "html", null, true);
        yield "
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class=\"copyright\">
            <span>
                <a href=\"#\" class=\"text-green\" data-toggle=\"modal\" data-target=\"#about\">
                    <img class=\"mr-1\" src=\"";
        // line 401
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/gnt.png"), "html", null, true);
        yield "\" alt=\"by Euclides\" width=\"45\">
                    <span class=\"version text-green\">GNT PHARMA v";
        // line 402
        yield Twig\Extension\CoreExtension::include($this->env, $context, "includes/version.html.twig");
        yield " <br> &copy; ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "</span>
                </a>
            </span>
        </div>
    </nav>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_home(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "home"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "home"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perso(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perso"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perso"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mon_contrat(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mon_contrat"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mon_contrat"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bulletiins(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bulletiins"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bulletiins"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 77
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mes_primes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mes_primes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mes_primes"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mes_permissions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mes_permissions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mes_permissions"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 91
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mes_absence(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mes_absence"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mes_absence"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 98
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mes_explications(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mes_explications"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mes_explications"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 105
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mes_sanctions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mes_sanctions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mes_sanctions"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 112
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mes_performance(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mes_performance"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mes_performance"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 121
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_employes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "employes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "employes"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 132
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_all_employe(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_employe"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_employe"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 138
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_contrat(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contrat"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contrat"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 144
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_planning(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "planning"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "planning"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 152
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_discipline(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "discipline"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "discipline"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 164
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_permissions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "permissions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "permissions"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 171
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_absence(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "absence"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "absence"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 178
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_explications(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "explications"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "explications"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 185
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sanctions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sanctions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sanctions"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 194
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_evaluation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "evaluation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "evaluation"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 208
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_critere(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "critere"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "critere"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 216
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_performance(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "performance"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "performance"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 225
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paie(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "paie"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "paie"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 238
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bulletin(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bulletin"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bulletin"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 245
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_heure_supplementaire(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "heure_supplementaire"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "heure_supplementaire"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 252
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_fiche(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fiche"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fiche"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 259
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_prime(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "prime"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "prime"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 267
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paie_historique(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "paie_historique"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "paie_historique"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 276
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_formations(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formations"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formations"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 289
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_catalogue(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "catalogue"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "catalogue"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 296
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_en_cours(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "en_cours"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "en_cours"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 302
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_competences(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "competences"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "competences"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 311
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_communication(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "communication"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "communication"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 324
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_messagerie(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messagerie"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messagerie"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 331
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_note(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "note"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "note"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 338
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_evenement(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "evenement"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "evenement"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 347
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_config(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "config"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "config"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 357
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_aide(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "aide"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "aide"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 369
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_manuel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "manuel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "manuel"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 375
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_suggestion(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "suggestion"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "suggestion"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 382
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bug(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bug"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bug"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 409
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_topbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "topbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "topbar"));

        // line 410
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "includes/topbar.html.twig");
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 415
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

        // line 416
        yield "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 421
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 422
        yield "
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
        return "rh.html.twig";
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
        return array (  2110 => 422,  2097 => 421,  2085 => 416,  2072 => 415,  2058 => 410,  2045 => 409,  2023 => 382,  2001 => 375,  1979 => 369,  1957 => 357,  1935 => 347,  1913 => 338,  1891 => 331,  1869 => 324,  1847 => 311,  1825 => 302,  1803 => 296,  1781 => 289,  1758 => 276,  1736 => 267,  1714 => 259,  1692 => 252,  1670 => 245,  1648 => 238,  1625 => 225,  1603 => 216,  1581 => 208,  1558 => 194,  1536 => 185,  1514 => 178,  1492 => 171,  1470 => 164,  1448 => 152,  1426 => 144,  1404 => 138,  1382 => 132,  1359 => 121,  1337 => 112,  1315 => 105,  1293 => 98,  1271 => 91,  1249 => 84,  1227 => 77,  1205 => 71,  1183 => 65,  1160 => 54,  1137 => 44,  1118 => 402,  1114 => 401,  1100 => 390,  1094 => 387,  1088 => 384,  1083 => 382,  1079 => 381,  1073 => 378,  1068 => 376,  1064 => 375,  1060 => 374,  1054 => 371,  1049 => 369,  1045 => 368,  1038 => 364,  1028 => 357,  1024 => 356,  1017 => 352,  1007 => 347,  1003 => 346,  995 => 341,  991 => 339,  987 => 338,  983 => 337,  977 => 334,  972 => 332,  968 => 331,  964 => 330,  958 => 327,  953 => 325,  949 => 324,  945 => 323,  938 => 319,  927 => 311,  923 => 310,  915 => 305,  910 => 303,  906 => 302,  902 => 301,  896 => 298,  889 => 296,  885 => 295,  879 => 292,  874 => 290,  870 => 289,  866 => 288,  858 => 283,  848 => 276,  844 => 275,  836 => 270,  831 => 268,  827 => 267,  823 => 266,  816 => 262,  811 => 260,  807 => 259,  803 => 258,  797 => 255,  792 => 253,  788 => 252,  784 => 251,  778 => 248,  773 => 246,  769 => 245,  765 => 244,  759 => 241,  754 => 239,  750 => 238,  746 => 237,  738 => 232,  728 => 225,  724 => 224,  716 => 219,  711 => 217,  707 => 216,  702 => 215,  696 => 211,  691 => 209,  687 => 208,  682 => 207,  675 => 202,  664 => 194,  660 => 193,  652 => 188,  647 => 186,  643 => 185,  639 => 184,  633 => 181,  628 => 179,  624 => 178,  620 => 177,  614 => 174,  609 => 172,  605 => 171,  601 => 170,  595 => 167,  590 => 165,  586 => 164,  582 => 163,  575 => 159,  565 => 152,  561 => 151,  553 => 146,  546 => 144,  542 => 143,  536 => 140,  529 => 138,  525 => 137,  519 => 134,  512 => 132,  508 => 131,  501 => 127,  492 => 121,  488 => 120,  480 => 115,  475 => 113,  471 => 112,  467 => 111,  461 => 108,  456 => 106,  452 => 105,  448 => 104,  442 => 101,  437 => 99,  433 => 98,  429 => 97,  423 => 94,  418 => 92,  414 => 91,  410 => 90,  404 => 87,  399 => 85,  395 => 84,  391 => 83,  385 => 80,  380 => 78,  376 => 77,  372 => 76,  366 => 73,  360 => 71,  356 => 70,  350 => 67,  343 => 65,  339 => 64,  332 => 60,  323 => 54,  319 => 53,  312 => 49,  302 => 44,  298 => 43,  286 => 34,  282 => 32,  269 => 31,  246 => 29,  232 => 16,  228 => 15,  224 => 14,  220 => 13,  216 => 12,  211 => 11,  198 => 10,  175 => 8,  162 => 424,  160 => 421,  156 => 420,  152 => 418,  150 => 415,  145 => 412,  143 => 409,  140 => 408,  138 => 31,  133 => 29,  125 => 24,  121 => 23,  115 => 19,  113 => 10,  108 => 8,  103 => 6,  96 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>

    {{ include('includes/head.html.twig') }}

    <title> {% block title %} GNT Pharma {% endblock %} </title>

    {% block stylesheets %}
    <link href=\"{{ asset('DataTables/datatables.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('fontawesome/css/all.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/bootstrap-4plus.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/accueil.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/gntpharma.css') }}\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"{{ asset('images/gntpharma.jpeg') }}\" type=\"image/x-icon\">

    {% endblock %}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
    <script src=\"{{ asset('js/html5shiv.js') }}\"></script>
    <script src=\"{{ asset('js/respond.min.js') }}\"></script>
    <![endif]-->

</head>

<body {% block facture %} {% endblock %}>

    {% block nav %}
    <nav id=\"navmenu\" class=\"navmenu\">
        <div class=\"session\">
            <a id=\"session\" class=\"navbar-brand text-white m-2\" href=\"{{ path('Accueil') }}\">
                Gnt Pharma
            </a>
        </div>
        <div class=\"closebtn\" id=\"closebtn\" onclick=\"closeNav()\">
        </div>

        <div id=\"sidenav\" class=\"sidenav\" onclick=\"openNav()\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\" title=\"{{ 'Accueil'|trans }}\">
                    <a class=\"nav-link {% block home %} {% endblock %}\" href=\"{{ path('commande_index') }}\">
                        <div class=\"icone\">
                            <i class=\"fas fa-dashboard fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            {{ 'Tableau de bord'|trans }}
                        </div>
                    </a>
                </li>
                <li class=\"nav-item dropright\" title=\"{{ 'Mes affaires'|trans }}\">
                    <a class=\"nav-link dropdown-toggle {% block perso %} {% endblock %}\" href=\"#\" id=\"mes_affaires\"
                        data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fas fa-user fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            {{ 'Mes affaires'|trans }}
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"mes_affaires\">
                        <li class=\"dropdown-item\" title=\"{{ 'Mon contrat'|trans }}\">
                            <a class=\"nav-link {% block mon_contrat %}{% endblock %}\" href=\"{{ path('contrat_index') }}\">
                                <i class=\"fa-solid fa-address-card\"></i>
                                {{ 'Mon contrat'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"{{ 'Mes fiches de paie'|trans }}\">
                            <a class=\"nav-link {% block bulletiins %}{% endblock %}\" href=\"{#{{ path('heure_suivi') }}#}\">
                                <i class=\"fa-solid fa-money-check-dollar\"></i>
                                {{ 'Mes fiches de paie'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"{{ 'Mes primes et avantages'|trans }}\">
                            <a class=\"nav-link {% block mes_primes %}{% endblock %}\"
                               href=\"{{ path('prime_index') }}\">
                                <i class=\"fa-solid fa-money-bill-wheat\"></i>
                                {{ 'Primes et avantages'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"{{ 'Mes permissions'|trans }}\">
                            <a class=\"nav-link {% block mes_permissions %}{% endblock %}\"
                               href=\"{{ path('conges_employe_index') }}\">
                                <i class=\"fa-solid fa-user-check\"></i>
                                {{ 'Permissions'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"{{ 'Mes absences'|trans }}\">
                            <a class=\"nav-link {% block mes_absence %}{% endblock %}\"
                               href=\"{{ path('absence_index') }}\">
                                <i class=\"fa fa-user-slash\"></i>
                                {{ 'Absences'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"{{ 'Mes demande d\\'explication'|trans }}\">
                            <a class=\"nav-link {% block mes_explications %}{% endblock %}\"
                               href=\"{{ path('demande_index') }}\">
                                <i class=\"fa-solid fa-user-pen\"></i>
                                {{ \"Demande d'explication\"|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"{{ 'Mes sanctions'|trans }}\">
                            <a class=\"nav-link {% block mes_sanctions %}{% endblock %}\"
                               href=\"{{ path('sanction_suivi') }}\">
                                <i class=\"fa-solid fa-user-xmark\"></i>
                                {{ 'Sanctions'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"{{ 'Mes performance'|trans }}\">
                            <a class=\"nav-link {% block mes_performance %}{% endblock %}\"
                               href=\"{{ path('evaluation_index') }}\">
                                <i class=\"fa-solid fa-chart-line\"></i>
                                {{ 'Performance'|trans }}
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item dropright\" title=\"{{ 'Employés'|trans }}\">
                    <a class=\"nav-link dropdown-toggle {% block employes %} {% endblock %}\" href=\"#\"
                        id=\"employes\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fas fa-users fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            {{ 'Employés'|trans }}
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"employes\">
                        <li class=\"dropdown-item\" title=\"{{ 'Tous les employés'|trans }}\">
                            <a class=\"nav-link {% block all_employe %}{% endblock %}\" href=\"{{ path('employe_index') }}\">
                                <i class=\"fa-solid fa-address-card\"></i>
                                {{ 'Tous les employés'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"{{ 'Contrat'|trans }}\">
                            <a class=\"nav-link {% block contrat %}{% endblock %}\" href=\"{{ path('contrat_index') }}\">
                                <i class=\"fa-solid fa-address-card\"></i>
                                {{ 'Contrat'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"{{ 'Planning des congés'|trans }}\">
                            <a class=\"nav-link {% block planning %}{% endblock %}\" href=\"{{ path('calendrier_index') }}\">
                                <i class=\"fa-solid fa-calendar-days\"></i>
                                {{ 'Planning des congés'|trans }}
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item dropright\" title=\"{{ 'Discipline'|trans }}\">
                    <a class=\"nav-link dropdown-toggle {% block discipline %}{% endblock %}\" href=\"#\" id=\"conges\"
                        data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fa-solid fa-users-slash fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            {{ 'Discipline'|trans }}
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"conges\">
                        <li class=\"dropdown-item\" title=\"{{ 'Permissions'|trans }}\">
                            <a class=\"nav-link {% block permissions %}{% endblock %}\"
                                href=\"{{ path('conges_admin_suivi') }}\">
                                <i class=\"fa-solid fa-user-check\"></i>
                                {{ 'Permissions'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"{{ 'Absences'|trans }}\">
                            <a class=\"nav-link {% block absence %}{% endblock %}\"
                                href=\"{{ path('absence_admin_attente') }}\">
                                <i class=\"fa fa-user-slash\"></i>
                                {{ 'Absences'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"{{ 'Demande d\\'explication'|trans }}\">
                            <a class=\"nav-link {% block explications %}{% endblock %}\"
                                href=\"{{ path('demande_index') }}\">
                                <i class=\"fa-solid fa-user-pen\"></i>
                                {{ \"Demande d'explication\"|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"{{ 'Sanctions'|trans }}\">
                            <a class=\"nav-link {% block sanctions %}{% endblock %}\"
                                href=\"{{ path('sanction_suivi') }}\">
                                <i class=\"fa-solid fa-user-xmark\"></i>
                                {{ 'Sanctions'|trans }}
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item dropright\" title=\"{{ 'Evaluation'|trans }}\">
                    <a class=\"nav-link dropdown-toggle {% block evaluation %} {% endblock %}\" href=\"#\"
                        id=\"administration\"
                        data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fa-solid fa-chart-line fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            {{ 'Evaluation'|trans }}
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"administration\">
{#                        {% if is_granted('ROLE_RH') %}#}
                        <li class=\"dropdown-item\" title=\"{{ 'Performance'|trans }}\">
                            <a class=\"nav-link {% block critere %}{% endblock %}\"
                                href=\"{{ path('critere_evaluation_index') }}\">
                                <i class=\"fa-solid fa-chart-simple\"></i>
                                {{ 'Critere'|trans }}
                            </a>
                        </li>
{#                        {% endif %}#}
                        <li class=\"dropdown-item\" title=\"{{ 'Performance'|trans }}\">
                            <a class=\"nav-link {% block performance %}{% endblock %}\"
                                href=\"{{ path('evaluation_index') }}\">
                                <i class=\"fa-solid fa-chart-line\"></i>
                                {{ 'Performance'|trans }}
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item dropright\" title=\"{{ 'Paie et Avantages'|trans }}\">
                    <a class=\"nav-link dropdown-toggle {% block paie %} {% endblock %}\" href=\"#\" id=\"paie\"
                        data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fa-solid fa-money-bill-wave fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            {{ 'Paie'|trans }}
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"paie\">

                        <li class=\"dropdown-item\" title=\"{{ 'Fiche de paie'|trans }}\">
                            <a class=\"nav-link {% block bulletin %}{% endblock %}\"
                                href=\"{{ path('mes_bulletins') }}\">
                                <i class=\"fa-solid fa-money-check-dollar\"></i>
                                {{ 'Bulletins de salaire'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"{{ 'Fiche de paie'|trans }}\">
                            <a class=\"nav-link {% block heure_supplementaire %}{% endblock %}\"
                                href=\"{{ path('heure_suplementaire_index') }}\">
                                <i class=\"fa-solid fa-money-check-dollar\"></i>
                                {{ 'Heure Supplementaire'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"{{ 'Fiche de paie'|trans }}\">
                            <a class=\"nav-link {% block fiche %}{% endblock %}\"
                                href=\"{{ path('paie_index') }}\">
                                <i class=\"fa-solid fa-money-check-dollar\"></i>
                                {{ 'Fiche de paie à valider'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"{{ 'Primes et avantages'|trans }}\">
                            <a class=\"nav-link {% block prime %}{% endblock %}\"
                                href=\"{{ path('prime_index') }}\">
                                <i class=\"fa-solid fa-money-bill-wheat\"></i>
                                {{ 'Primes et avantages'|trans }}
                            </a>
                        </li>

                        <li class=\"dropdown-item\" title=\"{{ 'Historique des paiements'|trans }}\">
                            <a class=\"nav-link {% block paie_historique %}{% endblock %}\"
                                href=\"{{ path('paie_historique') }}\">
                                <i class=\"fa-solid fa-rectangle-list\"></i>
                                {{ 'Historique des paiements'|trans }}
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item dropright\" title=\"{{ 'Formations'|trans }}\">
                    <a class=\"nav-link dropdown-toggle {% block formations %} {% endblock %}\" href=\"#\" id=\"formations\"
                        data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fa-solid fa-book-open-reader fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            {{ 'Formations'|trans }}
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"formations\">

                        <li class=\"dropdown-item\" title=\"{{ 'Catalogue des formations'|trans }}\">
                            <a class=\"nav-link {% block catalogue %}{% endblock %}\"
                                href=\"{{ path('formation_index') }}\">
                                <i class=\"fa-solid fa-book\"></i>
                                {{ 'Catalogue des formations'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"{{ 'Formations en cours'|trans }}\">
                            <a class=\"nav-link {% block en_cours %}{% endblock %}\" href=\"{{ path('formation_index') }}\">
                                <i class=\"fa-solid fa-book-bookmark\"></i>
                                {{ 'Formations en cours'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"{{ 'Compétences acquises'|trans }}\">
                            <a class=\"nav-link {% block competences %}{% endblock %}\"
                                href=\"{{ path('formation_index') }}\">
                                <i class=\"fa-solid fa-graduation-cap\"></i>
                                {{ 'Compétences acquises'|trans }}
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item dropright\" title=\"{{ 'Communication'|trans }}\">
                    <a class=\"nav-link dropdown-toggle {% block communication %}{% endblock %}\" href=\"#\"
                        id=\"communication\"
                        data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fa-regular fa-message fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            {{ 'Communication'|trans }}
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"communication\">
                        <li class=\"dropdown-item\" title=\"{{ 'Messagerie interne'|trans }}\">
                            <a class=\"nav-link {% block messagerie %}{% endblock %}\"
                                href=\"{{ path('received') }}\">
                                <i class=\"fa-solid fa-comments\"></i>
                                {{ 'Messagerie interne'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"{{ 'Notes de service'|trans }}\">
                            <a class=\"nav-link {% block note %}{% endblock %}\"
                                href=\"{{ path('note_service_index') }}\">
                                <i class=\"fa-regular fa-note-sticky\"></i>
                                {{ 'Notes de service'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"{{ 'Événements'|trans }}\">
                            <a class=\"nav-link {% block evenement %}{% endblock %}\"
                                href=\"{#{{ path('stock_index') }}#}\">
                                <i class=\"fa-solid fa-mug-saucer\"></i>
                                {{ 'Événements'|trans }}
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item\" title=\"{{ 'Configuration'|trans }}\">
                    <a class=\"nav-link {% block config %}{% endblock %}\" href=\"{{ path('departement_index') }}\">
                        <div class=\"icone\">
                        <i class=\"fa-solid fa-gear fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                        {{ 'Configuration'|trans }}
                        </div>
                    </a>
                </li>
                <li class=\"nav-item dropright\" title=\"{{ 'Aide'|trans }}\">
                    <a class=\"nav-link dropdown-toggle {% block aide %}{% endblock %}\" href=\"#\" id=\"Aide\"
                        data-toggle=\"dropdown\" aria-haspopup=\"true\"
                        aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fas fa-question-circle fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            {{ 'Aide'|trans }}
                        </div>
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"Aide\">
                        <li class=\"dropdown-item\" title=\"{{ 'Manuel'|trans }}\">
                            <a class=\"nav-link {% block manuel %}{% endblock %}\" href=\"#\">
                                <i class=\"fas fa-book\"></i>
                                {{ 'Manuel'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"{{ 'Suggestions à l’entreprise'|trans }}\">
                            <a class=\"nav-link {% block suggestion %}{% endblock %}\"
                                href=\"{{ path('feedback_index') }}\">
                                <i class=\"fas fa-comments\"></i>
                                {{ 'Suggestions à l’entreprise'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"{{ 'Signaler un bug'|trans }}\">
                            <a class=\"nav-link {% block bug %}{% endblock %}\" href=\"#\">
                                <i class=\"fas fa-bug\"></i>
                                {{ 'Signaler un bug'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"{{ 'A propos de l\\'application'|trans }}\">
                            <a href=\"#\" class=\"nav-link\" data-toggle=\"modal\" data-target=\"#about\">
                                <i class=\"fas fa-check-circle\"></i>
                                {{ 'A propos de l\\'application'|trans }}
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class=\"copyright\">
            <span>
                <a href=\"#\" class=\"text-green\" data-toggle=\"modal\" data-target=\"#about\">
                    <img class=\"mr-1\" src=\"{{ asset('images/gnt.png') }}\" alt=\"by Euclides\" width=\"45\">
                    <span class=\"version text-green\">GNT PHARMA v{{ include('includes/version.html.twig') }} <br> &copy; {{ 'now'|date('Y') }}</span>
                </a>
            </span>
        </div>
    </nav>
    {% endblock %}

    {% block topbar %}
    {{ include('includes/topbar.html.twig') }}
    {% endblock %}


    <div id=\"main\" class=\"container-fluid main pt-5\">
        {% block body %}

        {% endblock %}
    </div>

    {{ include('includes/javascript.html.twig') }}
    {% block scripts %}

    {% endblock %}
</body>

</html>", "rh.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\rh.html.twig");
    }
}
