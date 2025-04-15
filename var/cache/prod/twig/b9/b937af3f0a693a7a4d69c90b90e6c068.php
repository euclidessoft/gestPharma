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
class __TwigTemplate_7b445cf27635eae190d517f68847735c extends Template
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
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " GNT Pharma ";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_facture(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " ";
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_nav(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_home(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " ";
        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perso(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " ";
        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mon_contrat(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bulletiins(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 77
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mes_primes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mes_permissions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 91
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mes_absence(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 98
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mes_explications(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 105
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mes_sanctions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 112
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mes_performance(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 121
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_employes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " ";
        yield from [];
    }

    // line 132
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_all_employe(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 138
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_contrat(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 144
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_planning(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 152
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_discipline(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 164
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_permissions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 171
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_absence(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 178
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_explications(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 185
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sanctions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 194
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_evaluation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " ";
        yield from [];
    }

    // line 208
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_critere(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 216
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_performance(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 225
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paie(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " ";
        yield from [];
    }

    // line 238
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bulletin(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 245
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_heure_supplementaire(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 252
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_fiche(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 259
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_prime(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 267
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paie_historique(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 276
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_formations(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " ";
        yield from [];
    }

    // line 289
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_catalogue(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 296
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_en_cours(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 302
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_competences(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 311
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_communication(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 324
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_messagerie(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 331
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_note(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 338
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_evenement(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 347
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_config(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 357
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_aide(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 369
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_manuel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 375
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_suggestion(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 382
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bug(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 409
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_topbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 410
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "includes/topbar.html.twig");
        yield "
    ";
        yield from [];
    }

    // line 415
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 416
        yield "
        ";
        yield from [];
    }

    // line 421
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 422
        yield "
    ";
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
        return array (  1528 => 422,  1521 => 421,  1515 => 416,  1508 => 415,  1500 => 410,  1493 => 409,  1483 => 382,  1473 => 375,  1463 => 369,  1453 => 357,  1443 => 347,  1433 => 338,  1423 => 331,  1413 => 324,  1403 => 311,  1393 => 302,  1383 => 296,  1373 => 289,  1362 => 276,  1352 => 267,  1342 => 259,  1332 => 252,  1322 => 245,  1312 => 238,  1301 => 225,  1291 => 216,  1281 => 208,  1270 => 194,  1260 => 185,  1250 => 178,  1240 => 171,  1230 => 164,  1220 => 152,  1210 => 144,  1200 => 138,  1190 => 132,  1179 => 121,  1169 => 112,  1159 => 105,  1149 => 98,  1139 => 91,  1129 => 84,  1119 => 77,  1109 => 71,  1099 => 65,  1088 => 54,  1077 => 44,  1064 => 402,  1060 => 401,  1046 => 390,  1040 => 387,  1034 => 384,  1029 => 382,  1025 => 381,  1019 => 378,  1014 => 376,  1010 => 375,  1006 => 374,  1000 => 371,  995 => 369,  991 => 368,  984 => 364,  974 => 357,  970 => 356,  963 => 352,  953 => 347,  949 => 346,  941 => 341,  937 => 339,  933 => 338,  929 => 337,  923 => 334,  918 => 332,  914 => 331,  910 => 330,  904 => 327,  899 => 325,  895 => 324,  891 => 323,  884 => 319,  873 => 311,  869 => 310,  861 => 305,  856 => 303,  852 => 302,  848 => 301,  842 => 298,  835 => 296,  831 => 295,  825 => 292,  820 => 290,  816 => 289,  812 => 288,  804 => 283,  794 => 276,  790 => 275,  782 => 270,  777 => 268,  773 => 267,  769 => 266,  762 => 262,  757 => 260,  753 => 259,  749 => 258,  743 => 255,  738 => 253,  734 => 252,  730 => 251,  724 => 248,  719 => 246,  715 => 245,  711 => 244,  705 => 241,  700 => 239,  696 => 238,  692 => 237,  684 => 232,  674 => 225,  670 => 224,  662 => 219,  657 => 217,  653 => 216,  648 => 215,  642 => 211,  637 => 209,  633 => 208,  628 => 207,  621 => 202,  610 => 194,  606 => 193,  598 => 188,  593 => 186,  589 => 185,  585 => 184,  579 => 181,  574 => 179,  570 => 178,  566 => 177,  560 => 174,  555 => 172,  551 => 171,  547 => 170,  541 => 167,  536 => 165,  532 => 164,  528 => 163,  521 => 159,  511 => 152,  507 => 151,  499 => 146,  492 => 144,  488 => 143,  482 => 140,  475 => 138,  471 => 137,  465 => 134,  458 => 132,  454 => 131,  447 => 127,  438 => 121,  434 => 120,  426 => 115,  421 => 113,  417 => 112,  413 => 111,  407 => 108,  402 => 106,  398 => 105,  394 => 104,  388 => 101,  383 => 99,  379 => 98,  375 => 97,  369 => 94,  364 => 92,  360 => 91,  356 => 90,  350 => 87,  345 => 85,  341 => 84,  337 => 83,  331 => 80,  326 => 78,  322 => 77,  318 => 76,  312 => 73,  306 => 71,  302 => 70,  296 => 67,  289 => 65,  285 => 64,  278 => 60,  269 => 54,  265 => 53,  258 => 49,  248 => 44,  244 => 43,  232 => 34,  228 => 32,  221 => 31,  210 => 29,  202 => 16,  198 => 15,  194 => 14,  190 => 13,  186 => 12,  181 => 11,  174 => 10,  163 => 8,  156 => 424,  154 => 421,  150 => 420,  146 => 418,  144 => 415,  139 => 412,  137 => 409,  134 => 408,  132 => 31,  127 => 29,  119 => 24,  115 => 23,  109 => 19,  107 => 10,  102 => 8,  97 => 6,  90 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "rh.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\rh.html.twig");
    }
}
