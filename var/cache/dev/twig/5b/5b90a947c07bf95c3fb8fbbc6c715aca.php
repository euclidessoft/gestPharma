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

/* admin.html.twig */
class __TwigTemplate_8df4303861b6136b994875808d243c93 extends Template
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
            'finance' => [$this, 'block_finance'],
            'balance' => [$this, 'block_balance'],
            'balance_journaliere' => [$this, 'block_balance_journaliere'],
            'balance_date' => [$this, 'block_balance_date'],
            'balance_interval' => [$this, 'block_balance_interval'],
            'transfert' => [$this, 'block_transfert'],
            'caisse_banque' => [$this, 'block_caisse_banque'],
            'banque_caisse' => [$this, 'block_banque_caisse'],
            'all_transfert' => [$this, 'block_all_transfert'],
            'remboursement' => [$this, 'block_remboursement'],
            'choix_remboursement' => [$this, 'block_choix_remboursement'],
            'remboursement_avoir' => [$this, 'block_remboursement_avoir'],
            'all_remboursement' => [$this, 'block_all_remboursement'],
            'depense' => [$this, 'block_depense'],
            'new_depense' => [$this, 'block_new_depense'],
            'all_depense' => [$this, 'block_all_depense'],
            'all_categories' => [$this, 'block_all_categories'],
            'achat' => [$this, 'block_achat'],
            'new_achat' => [$this, 'block_new_achat'],
            'all_achat' => [$this, 'block_all_achat'],
            'salaire' => [$this, 'block_salaire'],
            'banque' => [$this, 'block_banque'],
            'financement' => [$this, 'block_financement'],
            'journal' => [$this, 'block_journal'],
            'commande' => [$this, 'block_commande'],
            'suivi' => [$this, 'block_suivi'],
            'extranet' => [$this, 'block_extranet'],
            'allcommande' => [$this, 'block_allcommande'],
            'new_promotion' => [$this, 'block_new_promotion'],
            'current_promotion' => [$this, 'block_current_promotion'],
            'all_promotion' => [$this, 'block_all_promotion'],
            'produit' => [$this, 'block_produit'],
            'all_produits' => [$this, 'block_all_produits'],
            'arrivage' => [$this, 'block_arrivage'],
            'ventes' => [$this, 'block_ventes'],
            'etat_stock' => [$this, 'block_etat_stock'],
            'retour_stock' => [$this, 'block_retour_stock'],
            'appro' => [$this, 'block_appro'],
            'client_suivi' => [$this, 'block_client_suivi'],
            'client' => [$this, 'block_client'],
            'reclamation' => [$this, 'block_reclamation'],
            'avoir' => [$this, 'block_avoir'],
            'administration' => [$this, 'block_administration'],
            'employe' => [$this, 'block_employe'],
            'contrat' => [$this, 'block_contrat'],
            'planning' => [$this, 'block_planning'],
            'config' => [$this, 'block_config'],
            'permissions' => [$this, 'block_permissions'],
            'absence' => [$this, 'block_absence'],
            'explications' => [$this, 'block_explications'],
            'sanctions' => [$this, 'block_sanctions'],
            'critere' => [$this, 'block_critere'],
            'performance' => [$this, 'block_performance'],
            'heure_supplementaire' => [$this, 'block_heure_supplementaire'],
            'fiche' => [$this, 'block_fiche'],
            'prime' => [$this, 'block_prime'],
            'paie_historique' => [$this, 'block_paie_historique'],
            'communication' => [$this, 'block_communication'],
            'messagerie' => [$this, 'block_messagerie'],
            'note' => [$this, 'block_note'],
            'evenement' => [$this, 'block_evenement'],
            'catalogue' => [$this, 'block_catalogue'],
            'en_cours' => [$this, 'block_en_cours'],
            'competences' => [$this, 'block_competences'],
            'fournisseur' => [$this, 'block_fournisseur'],
            'livraison' => [$this, 'block_livraison'],
            'aide' => [$this, 'block_aide'],
            'manuel' => [$this, 'block_manuel'],
            'pdf_comptable' => [$this, 'block_pdf_comptable'],
            'suggestiongit' => [$this, 'block_suggestiongit'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin.html.twig"));

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
        // line 642
        yield "
";
        // line 643
        yield from $this->unwrap()->yieldBlock('topbar', $context, $blocks);
        // line 647
        yield "

<div id=\"main\" class=\"container-fluid main pt-5\">
    ";
        // line 650
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 653
        yield "</div>

";
        // line 655
        yield Twig\Extension\CoreExtension::include($this->env, $context, "includes/javascript.html.twig");
        yield "
";
        // line 656
        yield from $this->unwrap()->yieldBlock('scripts', $context, $blocks);
        // line 659
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
        yield "        <link href=\"";
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Finance"), "html", null, true);
        yield "\">
                    <a class=\"nav-link dropdown-toggle ";
        // line 54
        yield from $this->unwrap()->yieldBlock('finance', $context, $blocks);
        yield "\" href=\"#\" id=\"finance\"
                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fa-solid fa-money-bill fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Finance"), "html", null, true);
        yield "
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"finance\">
                        <li class=\"dropdown-item submenu\">
                            <a class=\"nav-link dropdown-toggle ";
        // line 65
        yield from $this->unwrap()->yieldBlock('balance', $context, $blocks);
        yield "\" href=\"#\"
                               id=\"balance\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fa-solid fa-chart-simple\"></i>
                                ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Balance"), "html", null, true);
        yield "
                            </a>
                            <ul class=\"dropdown-submenu\" aria-labelledby=\"balance\">
                                <li class=\"dropdown-item\">
                                    <a class=\"nav-link ";
        // line 72
        yield from $this->unwrap()->yieldBlock('balance_journaliere', $context, $blocks);
        yield "\"
                                       href=\"#\" data-toggle=\"modal\" data-target=\"#rapport\">
                                        <i class=\"fa-solid fa-chart-simple\"></i>
                                        ";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Journalière"), "html", null, true);
        yield "
                                    </a>
                                </li>
                                <li class=\"dropdown-item\">
                                    <a class=\"nav-link ";
        // line 79
        yield from $this->unwrap()->yieldBlock('balance_date', $context, $blocks);
        yield "\"
                                       href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("finance_rapport_date");
        yield "\">
                                        <i class=\"fa-solid fa-magnifying-glass-chart\"></i>
                                        ";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A une date"), "html", null, true);
        yield "
                                    </a>
                                </li>
                                <li class=\"dropdown-item\">
                                    <a class=\"nav-link ";
        // line 86
        yield from $this->unwrap()->yieldBlock('balance_interval', $context, $blocks);
        yield "\"
                                       href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("finance_rapport_interval");
        yield "\">
                                        <i class=\"fa-solid fa-magnifying-glass-chart\"></i>
                                        ";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dans un interval"), "html", null, true);
        yield "
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown-item submenu\">
                            <a class=\"nav-link dropdown-toggle ";
        // line 95
        yield from $this->unwrap()->yieldBlock('transfert', $context, $blocks);
        yield "\" href=\"#\"
                               id=\"transfert\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fa-solid fa-arrow-right-arrow-left\"></i>
                                ";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Transfert des fonds"), "html", null, true);
        yield "
                            </a>
                            <ul class=\"dropdown-submenu\" aria-labelledby=\"transfert\">
                                <li class=\"dropdown-item\">
                                    <a class=\"nav-link ";
        // line 102
        yield from $this->unwrap()->yieldBlock('caisse_banque', $context, $blocks);
        yield "\"
                                       href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transfert_caisse");
        yield "\">
                                        <i class=\"fa-solid fa-cash-register\"></i>
                                        <i class=\"fa-solid fa-landmark\"></i>
                                        ";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Caisse => Banque"), "html", null, true);
        yield "
                                    </a>
                                </li>
                                <li class=\"dropdown-item\">
                                    <a class=\"nav-link ";
        // line 110
        yield from $this->unwrap()->yieldBlock('banque_caisse', $context, $blocks);
        yield "\"
                                       href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transfert_banque");
        yield "\">
                                        <i class=\"fa-solid fa-landmark\"></i>
                                        <i class=\"fa-solid fa-cash-register\"></i>
                                        ";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Banque => Caisse"), "html", null, true);
        yield "
                                    </a>
                                </li>
                                <li class=\"dropdown-item\">
                                    <a class=\"nav-link ";
        // line 118
        yield from $this->unwrap()->yieldBlock('all_transfert', $context, $blocks);
        yield "\"
                                       href=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transfert_index");
        yield "\">
                                        <i class=\"fa-solid fa-money-bill-transfer\"></i>
                                        <i class=\"fas fa-list\"></i>
                                        ";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tous les transferts"), "html", null, true);
        yield "
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown-item submenu\">
                            <a class=\"nav-link dropdown-toggle ";
        // line 128
        yield from $this->unwrap()->yieldBlock('remboursement', $context, $blocks);
        yield "\" href=\"#\"
                               id=\"remboursement\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fa-solid fa-hand-holding-dollar\"></i>
                                ";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remboursements"), "html", null, true);
        yield "
                            </a>
                            <ul class=\"dropdown-submenu\" aria-labelledby=\"remboursement\">
                                <li class=\"dropdown-item\">
                                    <a class=\"nav-link ";
        // line 135
        yield from $this->unwrap()->yieldBlock('choix_remboursement', $context, $blocks);
        yield "\"
                                       href=\"";
        // line 136
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remboursement_choix");
        yield "\">
                                        <i class=\"fas fa-money-bill\"></i>
                                        ";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Financements"), "html", null, true);
        yield "
                                    </a>
                                </li>
                                <li class=\"dropdown-item\">
                                    <a class=\"nav-link ";
        // line 142
        yield from $this->unwrap()->yieldBlock('remboursement_avoir', $context, $blocks);
        yield "\"
                                       href=\"";
        // line 143
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remboursement_avoir_index");
        yield "\">
                                        <i class=\"fa-solid fa-sack-dollar\"></i>
                                        ";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Avoir"), "html", null, true);
        yield "
                                    </a>
                                </li>
                                <li class=\"dropdown-item\">
                                    <a class=\"nav-link ";
        // line 149
        yield from $this->unwrap()->yieldBlock('all_remboursement', $context, $blocks);
        yield "\"
                                       href=\"";
        // line 150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remboursement_index");
        yield "\">
                                        <i class=\"fas fa-list\"></i>
                                        ";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tous les remboursements"), "html", null, true);
        yield "
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown-item submenu\">
                            <a class=\"nav-link dropdown-toggle ";
        // line 158
        yield from $this->unwrap()->yieldBlock('depense', $context, $blocks);
        yield "\" href=\"#\"
                               id=\"depense\"
                               data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fa-solid fa-right-from-bracket\"></i>
                                ";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dépense"), "html", null, true);
        yield "
                            </a>
                            <ul class=\"dropdown-submenu\" aria-labelledby=\"depense\">

                                <li class=\"dropdown-item\">
                                    <a class=\"nav-link  ";
        // line 167
        yield from $this->unwrap()->yieldBlock('new_depense', $context, $blocks);
        yield "\"
                                       href=\"";
        // line 168
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("depense_new");
        yield "\">
                                        <i class=\"fas fa-money-bill\"></i><i class=\"fas fa-plus\"></i>
                                        ";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Créer une dépense"), "html", null, true);
        yield "
                                    </a>
                                </li>
                                <li class=\"dropdown-item\">
                                    <a class=\"nav-link ";
        // line 174
        yield from $this->unwrap()->yieldBlock('all_depense', $context, $blocks);
        yield "\"
                                       href=\"";
        // line 175
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("depense_index");
        yield "\">
                                        <i class=\"fas fa-money-bill\"></i><i class=\"fas fa-list\"></i>
                                        ";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Toutes les dépenses"), "html", null, true);
        yield "
                                    </a>
                                </li>
                                <li class=\"dropdown-item\">
                                    <a class=\"nav-link  ";
        // line 181
        yield from $this->unwrap()->yieldBlock('all_categories', $context, $blocks);
        yield "\"
                                       href=\"";
        // line 182
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_index");
        yield "\">
                                        <i class=\"fas fa-money-check\"></i><i class=\"fas fa-plus\"></i>
                                        ";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Lignes de dépense"), "html", null, true);
        yield "
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown-item submenu\">
                            <a class=\"nav-link dropdown-toggle ";
        // line 190
        yield from $this->unwrap()->yieldBlock('achat', $context, $blocks);
        yield "\" href=\"#\"
                               id=\"paiement_fournisseur\"
                               data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fa-solid fa-hospital-user\"></i>
                                ";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Paiement fournisseur"), "html", null, true);
        yield "
                            </a>
                            <ul class=\"dropdown-submenu\" aria-labelledby=\"paiement_fournisseur\">
                                <li class=\"dropdown-item\">
                                    <a class=\"nav-link ";
        // line 198
        yield from $this->unwrap()->yieldBlock('new_achat', $context, $blocks);
        yield "\"
                                       href=\"";
        // line 199
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facture_list");
        yield "\">
                                        <i class=\"fa-solid fa-receipt\"></i>
                                        ";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Factures impayées"), "html", null, true);
        yield "
                                    </a>
                                </li>
                                <li class=\"dropdown-item\">
                                    <a class=\"nav-link ";
        // line 205
        yield from $this->unwrap()->yieldBlock('all_achat', $context, $blocks);
        yield "\"
                                       href=\"";
        // line 206
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("achat_index");
        yield "\">
                                        <i class=\"fas fa-list\"></i>
                                        ";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tous les paiements"), "html", null, true);
        yield "
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 214
        yield from $this->unwrap()->yieldBlock('salaire', $context, $blocks);
        yield "\"
                               href=\"";
        // line 215
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("finance_salaire");
        yield "\">
                                <i class=\"fa-solid fa-money-bill-trend-up\"></i>
                                ";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Paiement Salaire"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 221
        yield from $this->unwrap()->yieldBlock('banque', $context, $blocks);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("banque_index");
        yield "\"
                               id=\"banque\">
                                <i class=\"fa-solid fa-landmark\"></i>
                                ";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Banque"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 228
        yield from $this->unwrap()->yieldBlock('financement', $context, $blocks);
        yield "\"
                               href=\"";
        // line 229
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("financement_index");
        yield "\"
                               id=\"banque\">
                                <i class=\"fas fa-money-bills\"></i>
                                ";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Financement"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 236
        yield from $this->unwrap()->yieldBlock('journal', $context, $blocks);
        yield "\"
                               href=\"";
        // line 237
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("finance_index");
        yield "\">
                                <i class=\"fa-solid fa-money-bill-transfer\"></i>
                                ";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Journal"), "html", null, true);
        yield "
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item dropright\" title=\"";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Commande et Promotion"), "html", null, true);
        yield "\">
                    <a class=\"nav-link dropdown-toggle ";
        // line 245
        yield from $this->unwrap()->yieldBlock('commande', $context, $blocks);
        yield "\" href=\"#\" id=\"commande\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fa fa-shopping-cart fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            ";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Commande"), "html", null, true);
        yield "
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"commande\">
                        <h6 class=\"menu-title\">Commande</h6>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 258
        yield from $this->unwrap()->yieldBlock('suivi', $context, $blocks);
        yield "\"
                               href=\"";
        // line 259
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_panier_suivi");
        yield "\">
                                <i class=\"fas fa-shopping-cart\"></i>
                                ";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Suivi Commande"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 265
        yield from $this->unwrap()->yieldBlock('extranet', $context, $blocks);
        yield "\"
                               href=\"";
        // line 266
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_panier_extranet");
        yield "\">
                                <i class=\"fas fa-cart-arrow-down\"></i>
                                ";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Commandes Extranet"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 272
        yield from $this->unwrap()->yieldBlock('allcommande', $context, $blocks);
        yield "\"
                               href=\"";
        // line 273
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_panier_all_commande");
        yield "\">
                                <i class=\"fas fa-list\"></i>
                                ";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Toutes les Commandes"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <h6 class=\"menu-title\">Promotion</h6>
                        ";
        // line 279
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STOCK")) {
            // line 280
            yield "                            <li class=\"dropdown-item\">
                                <a class=\"nav-link ";
            // line 281
            yield from $this->unwrap()->yieldBlock('new_promotion', $context, $blocks);
            yield "\"
                                   href=\"";
            // line 282
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("promotion_new");
            yield "\">
                                    <i class=\"fa fa-plus mr-2\"></i>
                                    ";
            // line 284
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Créer une promotion"), "html", null, true);
            yield "
                                </a>
                            </li>
                        ";
        }
        // line 288
        yield "                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 289
        yield from $this->unwrap()->yieldBlock('current_promotion', $context, $blocks);
        yield "\"
                               href=\"";
        // line 290
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("promotion_courante");
        yield "\">
                                <i class=\"fas fa-tag mr-2\"></i>
                                ";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Promotions en cours"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 296
        yield from $this->unwrap()->yieldBlock('all_promotion', $context, $blocks);
        yield "\"
                               href=\"";
        // line 297
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("promotion_index");
        yield "\">
                                <i class=\"fas fa-tags mr-2\"></i>
                                ";
        // line 299
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Toutes les promotions"), "html", null, true);
        yield "
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item dropright\" title=\"";
        // line 304
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Produits et Stock"), "html", null, true);
        yield "\">
                    <a class=\"nav-link dropdown-toggle ";
        // line 305
        yield from $this->unwrap()->yieldBlock('produit', $context, $blocks);
        yield "\" href=\"#\" id=\"produits\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fa-brands fa-product-hunt fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            ";
        // line 312
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Produits & Stock"), "html", null, true);
        yield "
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"produits\">
                        <h6 class=\"menu-title\">Produits</h6>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 318
        yield from $this->unwrap()->yieldBlock('all_produits', $context, $blocks);
        yield "\"
                               href=\"";
        // line 319
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_index");
        yield "\">
                                <i class=\"fas fa-list\"></i>
                                ";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tous les produits"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 325
        yield from $this->unwrap()->yieldBlock('arrivage', $context, $blocks);
        yield "\"
                               href=\"";
        // line 326
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_arrivage_admin");
        yield "\">
                                <i class=\"fas fa-plane-arrival\"></i>
                                ";
        // line 328
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Arrivage"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 332
        yield from $this->unwrap()->yieldBlock('ventes', $context, $blocks);
        yield "\"
                               href=\"";
        // line 333
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_vente_admin");
        yield "\">
                                <i class=\"fas fa-money-bill-trend-up\"></i>
                                ";
        // line 335
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meilleures ventes"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <h6 class=\"menu-title\">Stock</h6>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 340
        yield from $this->unwrap()->yieldBlock('etat_stock', $context, $blocks);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stock_index");
        yield "\">
                                <i class=\"fas fa-warehouse\"></i>
                                ";
        // line 342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Etat du Stock"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 346
        yield from $this->unwrap()->yieldBlock('retour_stock', $context, $blocks);
        yield "\"
                               href=\"";
        // line 347
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stock_retour_index");
        yield "\">
                                <i class=\"fas fa-arrow-rotate-left\"></i>
                                ";
        // line 349
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Retour Stock"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 353
        yield from $this->unwrap()->yieldBlock('appro', $context, $blocks);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stock_historique");
        yield "\">
                                <i class=\"fa-solid fa-arrows-down-to-line fa-rotate-90\"></i>
                                ";
        // line 355
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Réapprovisionnement"), "html", null, true);
        yield "
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item dropright\" title=\"";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Client et Réclamation"), "html", null, true);
        yield "\">
                    <a class=\"nav-link dropdown-toggle ";
        // line 361
        yield from $this->unwrap()->yieldBlock('client_suivi', $context, $blocks);
        yield "\" href=\"#\" id=\"client\"
                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fas fa-user-tag fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            ";
        // line 367
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Client & Suivi"), "html", null, true);
        yield "
                        </div>
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"client\">
                        <li class=\"dropdown-item\" title=\"";
        // line 371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Client"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 372
        yield from $this->unwrap()->yieldBlock('client', $context, $blocks);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_index");
        yield "\">
                                <i class=\"fas fa-user-tag\"></i>
                                ";
        // line 374
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Client"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 377
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Réclamation"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 378
        yield from $this->unwrap()->yieldBlock('reclamation', $context, $blocks);
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_index", ["user" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 378, $this->source); })()), "user", [], "any", false, false, false, 378), "id", [], "any", false, false, false, 378)]), "html", null, true);
        yield "\">
                                <i class=\"fa-solid fa-user-clock\"></i>
                                ";
        // line 380
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Réclamation"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 383
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Avoirs"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 384
        yield from $this->unwrap()->yieldBlock('avoir', $context, $blocks);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avoir_index");
        yield "\">
                                <i class=\"fas fa-sack-dollar\"></i>
                                ";
        // line 386
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Avoirs"), "html", null, true);
        yield "
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item dropright\" title=\"";
        // line 391
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Employés"), "html", null, true);
        yield "\">
                    <a class=\"nav-link dropdown-toggle ";
        // line 392
        yield from $this->unwrap()->yieldBlock('administration', $context, $blocks);
        yield "\" href=\"#\"
                       id=\"administration\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fas fa-users fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            ";
        // line 400
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Employés"), "html", null, true);
        yield "
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"administration\">
                        <h6 class=\"menu-title\">Administration</h6>
                        <li class=\"dropdown-item\" title=\"";
        // line 405
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Employés"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 406
        yield from $this->unwrap()->yieldBlock('employe', $context, $blocks);
        yield "\"
                               href=\"";
        // line 407
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_index");
        yield "\">
                                <i class=\"fa-solid fa-address-card\"></i>
                                ";
        // line 409
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Employés"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 412
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contrat"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 413
        yield from $this->unwrap()->yieldBlock('contrat', $context, $blocks);
        yield "\"
                               href=\"";
        // line 414
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_index");
        yield "\">
                                <i class=\"fa-solid fa-address-card\"></i>
                                ";
        // line 416
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contrat"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 419
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Planning des congés"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 420
        yield from $this->unwrap()->yieldBlock('planning', $context, $blocks);
        yield "\"
                               href=\"";
        // line 421
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendrier_index");
        yield "\">
                                <i class=\"fa-solid fa-calendar-days\"></i>
                                ";
        // line 423
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Planning des congés"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 426
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configuration"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 427
        yield from $this->unwrap()->yieldBlock('config', $context, $blocks);
        yield "\"
                               href=\"";
        // line 428
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("departement_index");
        yield "\">
                                <i class=\"fa-solid fa-gears\"></i>
                                ";
        // line 430
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configuration"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <h6 class=\"menu-title\">Discipline</h6>
                        <li class=\"dropdown-item\" title=\"";
        // line 434
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Permissions"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 435
        yield from $this->unwrap()->yieldBlock('permissions', $context, $blocks);
        yield "\"
                               href=\"";
        // line 436
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conges_employe_index");
        yield "\">
                                <i class=\"fa-solid fa-user-check\"></i>
                                ";
        // line 438
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Permissions"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 441
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Absences"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 442
        yield from $this->unwrap()->yieldBlock('absence', $context, $blocks);
        yield "\"
                               href=\"";
        // line 443
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("absence_suivi");
        yield "\">
                                <i class=\"fa fa-user-slash\"></i>
                                ";
        // line 445
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Absences"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 448
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Demande d'explication"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 449
        yield from $this->unwrap()->yieldBlock('explications', $context, $blocks);
        yield "\"
                               href=\"";
        // line 450
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_index");
        yield "\">
                                <i class=\"fa-solid fa-user-pen\"></i>
                                ";
        // line 452
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Demande d'explication"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 455
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sanctions"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 456
        yield from $this->unwrap()->yieldBlock('sanctions', $context, $blocks);
        yield "\"
                               href=\"";
        // line 457
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sanction_suivi");
        yield "\">
                                <i class=\"fa-solid fa-user-xmark\"></i>
                                ";
        // line 459
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sanctions"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <h6 class=\"menu-title\">Evaluation</h6>
                        <li class=\"dropdown-item\" title=\"";
        // line 463
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Performance"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 464
        yield from $this->unwrap()->yieldBlock('critere', $context, $blocks);
        yield "\"
                               href=\"";
        // line 465
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("critere_evaluation_index");
        yield "\">
                                <i class=\"fa-solid fa-chart-simple\"></i>
                                ";
        // line 467
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Critere"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 470
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Performance"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 471
        yield from $this->unwrap()->yieldBlock('performance', $context, $blocks);
        yield "\"
                               href=\"";
        // line 472
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evaluation_index");
        yield "\">
                                <i class=\"fa-solid fa-chart-line\"></i>
                                ";
        // line 474
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Performance"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <h6 class=\"menu-title\">Paie</h6>
                        <li class=\"dropdown-item\" title=\"";
        // line 478
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fiche de paie"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 479
        yield from $this->unwrap()->yieldBlock('heure_supplementaire', $context, $blocks);
        yield "\"
                               href=\"";
        // line 480
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("heure_suplementaire_index");
        yield "\">
                                <i class=\"fa-solid fa-money-check-dollar\"></i>
                                ";
        // line 482
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Heure Supplementaire"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 485
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fiche de paie"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 486
        yield from $this->unwrap()->yieldBlock('fiche', $context, $blocks);
        yield "\"
                               href=\"";
        // line 487
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie_index");
        yield "\">
                                <i class=\"fa-solid fa-money-check-dollar\"></i>
                                ";
        // line 489
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fiche de paie"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 492
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Primes et avantages"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 493
        yield from $this->unwrap()->yieldBlock('prime', $context, $blocks);
        yield "\"
                               href=\"";
        // line 494
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prime_index");
        yield "\">
                                <i class=\"fa-solid fa-money-bill-wheat\"></i>
                                ";
        // line 496
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Primes et avantages"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 499
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Historique des paiements"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 500
        yield from $this->unwrap()->yieldBlock('paie_historique', $context, $blocks);
        yield "\"
                               href=\"";
        // line 501
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie_historique");
        yield "\">
                                <i class=\"fa-solid fa-rectangle-list\"></i>
                                ";
        // line 503
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Historique des paiements"), "html", null, true);
        yield "
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item dropright\" title=\"";
        // line 508
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Communication"), "html", null, true);
        yield "\">
                    <a class=\"nav-link dropdown-toggle ";
        // line 509
        yield from $this->unwrap()->yieldBlock('communication', $context, $blocks);
        yield "\" href=\"#\"
                       id=\"communication\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fa-regular fa-message fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            ";
        // line 515
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Communication"), "html", null, true);
        yield "
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"communication\">
                        <h6 class=\"menu-title\">Communication</h6>
                        <li class=\"dropdown-item\" title=\"";
        // line 520
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Messagerie interne"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 521
        yield from $this->unwrap()->yieldBlock('messagerie', $context, $blocks);
        yield "\"
                               href=\"";
        // line 522
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("received");
        yield "\">
                                <i class=\"fa-solid fa-comments\"></i>
                                ";
        // line 524
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Messagerie interne"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 527
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Notes de service"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 528
        yield from $this->unwrap()->yieldBlock('note', $context, $blocks);
        yield "\"
                               href=\"";
        // line 529
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("note_service_index");
        yield "\">
                                <i class=\"fa-regular fa-note-sticky\"></i>
                                ";
        // line 531
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Notes de service"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 534
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Événements"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 535
        yield from $this->unwrap()->yieldBlock('evenement', $context, $blocks);
        yield "\"
                               href=\"#\">
                                <i class=\"fa-solid fa-mug-saucer\"></i>
                                ";
        // line 538
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Événements"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <h6 class=\"menu-title\">Formations</h6>
                        <li class=\"dropdown-item\" title=\"";
        // line 542
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Catalogue des formations"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 543
        yield from $this->unwrap()->yieldBlock('catalogue', $context, $blocks);
        yield "\"
                               href=\"";
        // line 544
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_index");
        yield "\">
                                <i class=\"fa-solid fa-book\"></i>
                                ";
        // line 546
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Catalogue des formations"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 549
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Formations en cours"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 550
        yield from $this->unwrap()->yieldBlock('en_cours', $context, $blocks);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_index");
        yield "\">
                                <i class=\"fa-solid fa-book-bookmark\"></i>
                                ";
        // line 552
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Formations en cours"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"";
        // line 555
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Compétences acquises"), "html", null, true);
        yield "\">
                            <a class=\"nav-link ";
        // line 556
        yield from $this->unwrap()->yieldBlock('competences', $context, $blocks);
        yield "\"
                               href=\"";
        // line 557
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_index");
        yield "\">
                                <i class=\"fa-solid fa-graduation-cap\"></i>
                                ";
        // line 559
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Compétences acquises"), "html", null, true);
        yield "
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item\" title=\"";
        // line 564
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fournisseur"), "html", null, true);
        yield "\">
                    <a class=\"nav-link ";
        // line 565
        yield from $this->unwrap()->yieldBlock('fournisseur', $context, $blocks);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fournisseur_index");
        yield "\">
                        <div class=\"icone\">
                            <i class=\"fa-solid fa-hospital-user fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            ";
        // line 570
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fournisseur"), "html", null, true);
        yield "
                        </div>
                    </a>
                </li>
                <li class=\"nav-item\" title=\"";
        // line 574
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Livraison"), "html", null, true);
        yield "\">
                    <a class=\"nav-link ";
        // line 575
        yield from $this->unwrap()->yieldBlock('livraison', $context, $blocks);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livraison_historique");
        yield "\">
                        <div class=\"icone\">
                            <i class=\"fas fa-truck-fast fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            ";
        // line 580
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Livraison"), "html", null, true);
        yield "
                        </div>
                    </a>
                </li>
                <li class=\"nav-item dropright\" title=\"";
        // line 584
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Aide"), "html", null, true);
        yield "\">
                    <a class=\"nav-link dropdown-toggle ";
        // line 585
        yield from $this->unwrap()->yieldBlock('aide', $context, $blocks);
        yield "\" href=\"#\" id=\"Aide\"
                       data-toggle=\"dropdown\" aria-haspopup=\"true\"
                       aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fas fa-question-circle fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            ";
        // line 592
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Aide"), "html", null, true);
        yield "
                        </div>
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"Aide\">
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 597
        yield from $this->unwrap()->yieldBlock('manuel', $context, $blocks);
        yield "\" href=\"#\" target=\"_blank\">
                                <i class=\"fas fa-book\"></i>
                                ";
        // line 599
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manuel"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 603
        yield from $this->unwrap()->yieldBlock('pdf_comptable', $context, $blocks);
        yield "\" href=\"#\" target=\"_blank\">
                                <i class=\"fas fa-book\"></i>
                                ";
        // line 605
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Plan Comptable"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 609
        yield from $this->unwrap()->yieldBlock('suggestiongit', $context, $blocks);
        yield "\"
                               href=\"";
        // line 610
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suggestion_index");
        yield "\">
                                <i class=\"fas fa-comments\"></i>
                                ";
        // line 612
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Suggestions"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 616
        yield from $this->unwrap()->yieldBlock('bug', $context, $blocks);
        yield "\" href=\"#\">
                                <i class=\"fas fa-bug\"></i>
                                ";
        // line 618
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Signaler un bug"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a href=\"#\" class=\"nav-link\" data-toggle=\"modal\" data-target=\"#about\">
                                <i class=\"fas fa-check-circle\"></i>
                                ";
        // line 624
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
        // line 635
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/gnt.png"), "html", null, true);
        yield "\" alt=\"by Euclides\" width=\"45\">
                    <span class=\"version text-green\">GNT PHARMA v";
        // line 636
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
    public function block_finance(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "finance"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "finance"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_balance(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "balance"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "balance"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_balance_journaliere(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "balance_journaliere"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "balance_journaliere"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 79
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_balance_date(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "balance_date"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "balance_date"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_balance_interval(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "balance_interval"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "balance_interval"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 95
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_transfert(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "transfert"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "transfert"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 102
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_caisse_banque(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "caisse_banque"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "caisse_banque"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 110
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_banque_caisse(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banque_caisse"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banque_caisse"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 118
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_all_transfert(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_transfert"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_transfert"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 128
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_remboursement(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "remboursement"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "remboursement"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 135
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choix_remboursement(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choix_remboursement"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choix_remboursement"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 142
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_remboursement_avoir(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "remboursement_avoir"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "remboursement_avoir"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 149
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_all_remboursement(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_remboursement"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_remboursement"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 158
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_depense(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "depense"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "depense"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 167
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_new_depense(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "new_depense"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "new_depense"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 174
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_all_depense(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_depense"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_depense"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 181
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_all_categories(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_categories"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_categories"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 190
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_achat(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "achat"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "achat"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 198
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_new_achat(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "new_achat"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "new_achat"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 205
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_all_achat(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_achat"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_achat"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 214
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_salaire(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "salaire"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "salaire"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 221
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_banque(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banque"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banque"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 228
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_financement(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "financement"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "financement"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 236
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_journal(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "journal"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "journal"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 245
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 258
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 265
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extranet(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extranet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extranet"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 272
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_allcommande(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "allcommande"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "allcommande"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 281
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_new_promotion(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "new_promotion"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "new_promotion"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 289
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_current_promotion(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "current_promotion"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "current_promotion"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 296
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_all_promotion(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_promotion"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_promotion"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 305
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_produit(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produit"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produit"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 318
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_all_produits(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_produits"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_produits"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 325
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_arrivage(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "arrivage"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "arrivage"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 332
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ventes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ventes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ventes"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 340
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_etat_stock(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "etat_stock"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "etat_stock"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 346
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_retour_stock(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "retour_stock"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "retour_stock"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 353
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_appro(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "appro"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "appro"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 361
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_client_suivi(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "client_suivi"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "client_suivi"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 372
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_client(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "client"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "client"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 378
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_reclamation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "reclamation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "reclamation"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 384
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_avoir(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "avoir"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "avoir"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 392
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_administration(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "administration"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "administration"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 406
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_employe(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "employe"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "employe"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 413
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

    // line 420
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

    // line 427
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

    // line 435
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

    // line 442
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

    // line 449
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

    // line 456
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

    // line 464
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

    // line 471
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

    // line 479
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

    // line 486
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

    // line 493
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

    // line 500
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

    // line 509
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

    // line 521
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

    // line 528
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

    // line 535
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

    // line 543
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

    // line 550
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

    // line 556
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

    // line 565
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

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 575
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_livraison(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "livraison"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "livraison"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 585
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

    // line 597
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

    // line 603
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pdf_comptable(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pdf_comptable"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pdf_comptable"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 609
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_suggestiongit(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "suggestiongit"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "suggestiongit"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 616
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

    // line 643
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

        // line 644
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "includes/topbar.html.twig");
        yield "
    ";
        // line 645
        yield Twig\Extension\CoreExtension::include($this->env, $context, "finance/rapport_journalier.html.twig");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 650
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

        // line 651
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 656
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

        // line 657
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
        return "admin.html.twig";
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
        return array (  3296 => 657,  3283 => 656,  3271 => 651,  3258 => 650,  3245 => 645,  3240 => 644,  3227 => 643,  3205 => 616,  3183 => 609,  3161 => 603,  3139 => 597,  3117 => 585,  3095 => 575,  3072 => 565,  3050 => 556,  3028 => 550,  3006 => 543,  2984 => 535,  2962 => 528,  2940 => 521,  2918 => 509,  2896 => 500,  2874 => 493,  2852 => 486,  2830 => 479,  2808 => 471,  2786 => 464,  2764 => 456,  2742 => 449,  2720 => 442,  2698 => 435,  2676 => 427,  2654 => 420,  2632 => 413,  2610 => 406,  2587 => 392,  2565 => 384,  2543 => 378,  2521 => 372,  2499 => 361,  2477 => 353,  2455 => 346,  2433 => 340,  2411 => 332,  2389 => 325,  2367 => 318,  2344 => 305,  2322 => 296,  2300 => 289,  2278 => 281,  2256 => 272,  2234 => 265,  2212 => 258,  2190 => 245,  2168 => 236,  2146 => 228,  2124 => 221,  2102 => 214,  2080 => 205,  2058 => 198,  2036 => 190,  2014 => 181,  1992 => 174,  1970 => 167,  1948 => 158,  1926 => 149,  1904 => 142,  1882 => 135,  1860 => 128,  1838 => 118,  1816 => 110,  1794 => 102,  1772 => 95,  1750 => 86,  1728 => 79,  1706 => 72,  1684 => 65,  1661 => 54,  1638 => 44,  1619 => 636,  1615 => 635,  1601 => 624,  1592 => 618,  1587 => 616,  1580 => 612,  1575 => 610,  1571 => 609,  1564 => 605,  1559 => 603,  1552 => 599,  1547 => 597,  1539 => 592,  1529 => 585,  1525 => 584,  1518 => 580,  1508 => 575,  1504 => 574,  1497 => 570,  1487 => 565,  1483 => 564,  1475 => 559,  1470 => 557,  1466 => 556,  1462 => 555,  1456 => 552,  1449 => 550,  1445 => 549,  1439 => 546,  1434 => 544,  1430 => 543,  1426 => 542,  1419 => 538,  1413 => 535,  1409 => 534,  1403 => 531,  1398 => 529,  1394 => 528,  1390 => 527,  1384 => 524,  1379 => 522,  1375 => 521,  1371 => 520,  1363 => 515,  1354 => 509,  1350 => 508,  1342 => 503,  1337 => 501,  1333 => 500,  1329 => 499,  1323 => 496,  1318 => 494,  1314 => 493,  1310 => 492,  1304 => 489,  1299 => 487,  1295 => 486,  1291 => 485,  1285 => 482,  1280 => 480,  1276 => 479,  1272 => 478,  1265 => 474,  1260 => 472,  1256 => 471,  1252 => 470,  1246 => 467,  1241 => 465,  1237 => 464,  1233 => 463,  1226 => 459,  1221 => 457,  1217 => 456,  1213 => 455,  1207 => 452,  1202 => 450,  1198 => 449,  1194 => 448,  1188 => 445,  1183 => 443,  1179 => 442,  1175 => 441,  1169 => 438,  1164 => 436,  1160 => 435,  1156 => 434,  1149 => 430,  1144 => 428,  1140 => 427,  1136 => 426,  1130 => 423,  1125 => 421,  1121 => 420,  1117 => 419,  1111 => 416,  1106 => 414,  1102 => 413,  1098 => 412,  1092 => 409,  1087 => 407,  1083 => 406,  1079 => 405,  1071 => 400,  1060 => 392,  1056 => 391,  1048 => 386,  1041 => 384,  1037 => 383,  1031 => 380,  1024 => 378,  1020 => 377,  1014 => 374,  1007 => 372,  1003 => 371,  996 => 367,  987 => 361,  983 => 360,  975 => 355,  968 => 353,  961 => 349,  956 => 347,  952 => 346,  945 => 342,  938 => 340,  930 => 335,  925 => 333,  921 => 332,  914 => 328,  909 => 326,  905 => 325,  898 => 321,  893 => 319,  889 => 318,  880 => 312,  870 => 305,  866 => 304,  858 => 299,  853 => 297,  849 => 296,  842 => 292,  837 => 290,  833 => 289,  830 => 288,  823 => 284,  818 => 282,  814 => 281,  811 => 280,  809 => 279,  802 => 275,  797 => 273,  793 => 272,  786 => 268,  781 => 266,  777 => 265,  770 => 261,  765 => 259,  761 => 258,  752 => 252,  742 => 245,  738 => 244,  730 => 239,  725 => 237,  721 => 236,  714 => 232,  708 => 229,  704 => 228,  697 => 224,  689 => 221,  682 => 217,  677 => 215,  673 => 214,  664 => 208,  659 => 206,  655 => 205,  648 => 201,  643 => 199,  639 => 198,  632 => 194,  625 => 190,  616 => 184,  611 => 182,  607 => 181,  600 => 177,  595 => 175,  591 => 174,  584 => 170,  579 => 168,  575 => 167,  567 => 162,  560 => 158,  551 => 152,  546 => 150,  542 => 149,  535 => 145,  530 => 143,  526 => 142,  519 => 138,  514 => 136,  510 => 135,  503 => 131,  497 => 128,  488 => 122,  482 => 119,  478 => 118,  471 => 114,  465 => 111,  461 => 110,  454 => 106,  448 => 103,  444 => 102,  437 => 98,  431 => 95,  422 => 89,  417 => 87,  413 => 86,  406 => 82,  401 => 80,  397 => 79,  390 => 75,  384 => 72,  377 => 68,  371 => 65,  363 => 60,  354 => 54,  350 => 53,  343 => 49,  333 => 44,  329 => 43,  317 => 34,  313 => 32,  300 => 31,  277 => 29,  263 => 16,  259 => 15,  255 => 14,  251 => 13,  247 => 12,  242 => 11,  229 => 10,  206 => 8,  193 => 659,  191 => 656,  187 => 655,  183 => 653,  181 => 650,  176 => 647,  174 => 643,  171 => 642,  169 => 31,  164 => 29,  156 => 24,  152 => 23,  146 => 19,  144 => 10,  139 => 8,  134 => 6,  127 => 1,);
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
                <li class=\"nav-item dropright\" title=\"{{ 'Finance'|trans }}\">
                    <a class=\"nav-link dropdown-toggle {% block finance %} {% endblock %}\" href=\"#\" id=\"finance\"
                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fa-solid fa-money-bill fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            {{ 'Finance'|trans }}
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"finance\">
                        <li class=\"dropdown-item submenu\">
                            <a class=\"nav-link dropdown-toggle {% block balance %}{% endblock %}\" href=\"#\"
                               id=\"balance\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fa-solid fa-chart-simple\"></i>
                                {{ 'Balance'|trans }}
                            </a>
                            <ul class=\"dropdown-submenu\" aria-labelledby=\"balance\">
                                <li class=\"dropdown-item\">
                                    <a class=\"nav-link {% block balance_journaliere %}{% endblock %}\"
                                       href=\"#\" data-toggle=\"modal\" data-target=\"#rapport\">
                                        <i class=\"fa-solid fa-chart-simple\"></i>
                                        {{ 'Journalière'|trans }}
                                    </a>
                                </li>
                                <li class=\"dropdown-item\">
                                    <a class=\"nav-link {% block balance_date %}{% endblock %}\"
                                       href=\"{{ path('finance_rapport_date') }}\">
                                        <i class=\"fa-solid fa-magnifying-glass-chart\"></i>
                                        {{ 'A une date'|trans }}
                                    </a>
                                </li>
                                <li class=\"dropdown-item\">
                                    <a class=\"nav-link {% block balance_interval %}{% endblock %}\"
                                       href=\"{{ path('finance_rapport_interval') }}\">
                                        <i class=\"fa-solid fa-magnifying-glass-chart\"></i>
                                        {{ 'Dans un interval'|trans }}
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown-item submenu\">
                            <a class=\"nav-link dropdown-toggle {% block transfert %}{% endblock %}\" href=\"#\"
                               id=\"transfert\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fa-solid fa-arrow-right-arrow-left\"></i>
                                {{ 'Transfert des fonds'|trans }}
                            </a>
                            <ul class=\"dropdown-submenu\" aria-labelledby=\"transfert\">
                                <li class=\"dropdown-item\">
                                    <a class=\"nav-link {% block caisse_banque %}{% endblock %}\"
                                       href=\"{{ path('transfert_caisse') }}\">
                                        <i class=\"fa-solid fa-cash-register\"></i>
                                        <i class=\"fa-solid fa-landmark\"></i>
                                        {{ 'Caisse => Banque'|trans }}
                                    </a>
                                </li>
                                <li class=\"dropdown-item\">
                                    <a class=\"nav-link {% block banque_caisse %}{% endblock %}\"
                                       href=\"{{ path('transfert_banque') }}\">
                                        <i class=\"fa-solid fa-landmark\"></i>
                                        <i class=\"fa-solid fa-cash-register\"></i>
                                        {{ 'Banque => Caisse'|trans }}
                                    </a>
                                </li>
                                <li class=\"dropdown-item\">
                                    <a class=\"nav-link {% block all_transfert %}{% endblock %}\"
                                       href=\"{{ path('transfert_index') }}\">
                                        <i class=\"fa-solid fa-money-bill-transfer\"></i>
                                        <i class=\"fas fa-list\"></i>
                                        {{ 'Tous les transferts'|trans }}
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown-item submenu\">
                            <a class=\"nav-link dropdown-toggle {% block remboursement %}{% endblock %}\" href=\"#\"
                               id=\"remboursement\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fa-solid fa-hand-holding-dollar\"></i>
                                {{ 'Remboursements'|trans }}
                            </a>
                            <ul class=\"dropdown-submenu\" aria-labelledby=\"remboursement\">
                                <li class=\"dropdown-item\">
                                    <a class=\"nav-link {% block choix_remboursement %}{% endblock %}\"
                                       href=\"{{ path('remboursement_choix') }}\">
                                        <i class=\"fas fa-money-bill\"></i>
                                        {{ 'Financements'|trans }}
                                    </a>
                                </li>
                                <li class=\"dropdown-item\">
                                    <a class=\"nav-link {% block remboursement_avoir %}{% endblock %}\"
                                       href=\"{{ path('remboursement_avoir_index') }}\">
                                        <i class=\"fa-solid fa-sack-dollar\"></i>
                                        {{ 'Avoir'|trans }}
                                    </a>
                                </li>
                                <li class=\"dropdown-item\">
                                    <a class=\"nav-link {% block all_remboursement %}{% endblock %}\"
                                       href=\"{{ path('remboursement_index') }}\">
                                        <i class=\"fas fa-list\"></i>
                                        {{ 'Tous les remboursements'|trans }}
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown-item submenu\">
                            <a class=\"nav-link dropdown-toggle {% block depense %}{% endblock %}\" href=\"#\"
                               id=\"depense\"
                               data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fa-solid fa-right-from-bracket\"></i>
                                {{ 'Dépense'|trans }}
                            </a>
                            <ul class=\"dropdown-submenu\" aria-labelledby=\"depense\">

                                <li class=\"dropdown-item\">
                                    <a class=\"nav-link  {% block new_depense %}{% endblock %}\"
                                       href=\"{{ path('depense_new') }}\">
                                        <i class=\"fas fa-money-bill\"></i><i class=\"fas fa-plus\"></i>
                                        {{ 'Créer une dépense'|trans }}
                                    </a>
                                </li>
                                <li class=\"dropdown-item\">
                                    <a class=\"nav-link {% block all_depense %}{% endblock %}\"
                                       href=\"{{ path('depense_index') }}\">
                                        <i class=\"fas fa-money-bill\"></i><i class=\"fas fa-list\"></i>
                                        {{ 'Toutes les dépenses'|trans }}
                                    </a>
                                </li>
                                <li class=\"dropdown-item\">
                                    <a class=\"nav-link  {% block all_categories %}{% endblock %}\"
                                       href=\"{{ path('categorie_index') }}\">
                                        <i class=\"fas fa-money-check\"></i><i class=\"fas fa-plus\"></i>
                                        {{ 'Lignes de dépense'|trans }}
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown-item submenu\">
                            <a class=\"nav-link dropdown-toggle {% block achat %}{% endblock %}\" href=\"#\"
                               id=\"paiement_fournisseur\"
                               data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fa-solid fa-hospital-user\"></i>
                                {{ 'Paiement fournisseur'|trans }}
                            </a>
                            <ul class=\"dropdown-submenu\" aria-labelledby=\"paiement_fournisseur\">
                                <li class=\"dropdown-item\">
                                    <a class=\"nav-link {% block new_achat %}{% endblock %}\"
                                       href=\"{{ path('facture_list') }}\">
                                        <i class=\"fa-solid fa-receipt\"></i>
                                        {{ 'Factures impayées'|trans }}
                                    </a>
                                </li>
                                <li class=\"dropdown-item\">
                                    <a class=\"nav-link {% block all_achat %}{% endblock %}\"
                                       href=\"{{ path('achat_index') }}\">
                                        <i class=\"fas fa-list\"></i>
                                        {{ 'Tous les paiements'|trans }}
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block salaire %}{% endblock %}\"
                               href=\"{{ path('finance_salaire') }}\">
                                <i class=\"fa-solid fa-money-bill-trend-up\"></i>
                                {{ 'Paiement Salaire'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block banque %}{% endblock %}\" href=\"{{ path('banque_index') }}\"
                               id=\"banque\">
                                <i class=\"fa-solid fa-landmark\"></i>
                                {{ 'Banque'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block financement %}{% endblock %}\"
                               href=\"{{ path('financement_index') }}\"
                               id=\"banque\">
                                <i class=\"fas fa-money-bills\"></i>
                                {{ 'Financement'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block journal %}{% endblock %}\"
                               href=\"{{ path('finance_index') }}\">
                                <i class=\"fa-solid fa-money-bill-transfer\"></i>
                                {{ 'Journal'|trans }}
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item dropright\" title=\"{{ 'Commande et Promotion'|trans }}\">
                    <a class=\"nav-link dropdown-toggle {% block commande %}{% endblock %}\" href=\"#\" id=\"commande\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fa fa-shopping-cart fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            {{ 'Commande'|trans }}
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"commande\">
                        <h6 class=\"menu-title\">Commande</h6>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block suivi %}{% endblock %}\"
                               href=\"{{ path('commande_panier_suivi') }}\">
                                <i class=\"fas fa-shopping-cart\"></i>
                                {{ 'Suivi Commande'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block extranet %}{% endblock %}\"
                               href=\"{{ path('commande_panier_extranet') }}\">
                                <i class=\"fas fa-cart-arrow-down\"></i>
                                {{ 'Commandes Extranet'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block allcommande %}{% endblock %}\"
                               href=\"{{ path('commande_panier_all_commande') }}\">
                                <i class=\"fas fa-list\"></i>
                                {{ 'Toutes les Commandes'|trans }}
                            </a>
                        </li>
                        <h6 class=\"menu-title\">Promotion</h6>
                        {% if is_granted('ROLE_STOCK') %}
                            <li class=\"dropdown-item\">
                                <a class=\"nav-link {% block new_promotion %}{% endblock %}\"
                                   href=\"{{ path('promotion_new') }}\">
                                    <i class=\"fa fa-plus mr-2\"></i>
                                    {{ 'Créer une promotion'|trans }}
                                </a>
                            </li>
                        {% endif %}
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block current_promotion %}{% endblock %}\"
                               href=\"{{ path('promotion_courante') }}\">
                                <i class=\"fas fa-tag mr-2\"></i>
                                {{ 'Promotions en cours'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block all_promotion %}{% endblock %}\"
                               href=\"{{ path('promotion_index') }}\">
                                <i class=\"fas fa-tags mr-2\"></i>
                                {{ 'Toutes les promotions'|trans }}
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item dropright\" title=\"{{ 'Produits et Stock'|trans }}\">
                    <a class=\"nav-link dropdown-toggle {% block produit %} {% endblock %}\" href=\"#\" id=\"produits\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fa-brands fa-product-hunt fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            {{ 'Produits & Stock'|trans }}
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"produits\">
                        <h6 class=\"menu-title\">Produits</h6>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block all_produits %}{% endblock %}\"
                               href=\"{{ path('produit_index') }}\">
                                <i class=\"fas fa-list\"></i>
                                {{ 'Tous les produits'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block arrivage %}{% endblock %}\"
                               href=\"{{ path('produit_arrivage_admin') }}\">
                                <i class=\"fas fa-plane-arrival\"></i>
                                {{ 'Arrivage'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block ventes %}{% endblock %}\"
                               href=\"{{ path('produit_vente_admin') }}\">
                                <i class=\"fas fa-money-bill-trend-up\"></i>
                                {{ 'Meilleures ventes'|trans }}
                            </a>
                        </li>
                        <h6 class=\"menu-title\">Stock</h6>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block etat_stock %}{% endblock %}\" href=\"{{ path('stock_index') }}\">
                                <i class=\"fas fa-warehouse\"></i>
                                {{ 'Etat du Stock'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block retour_stock %}{% endblock %}\"
                               href=\"{{ path('stock_retour_index') }}\">
                                <i class=\"fas fa-arrow-rotate-left\"></i>
                                {{ 'Retour Stock'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block appro %}{% endblock %}\" href=\"{{ path('stock_historique') }}\">
                                <i class=\"fa-solid fa-arrows-down-to-line fa-rotate-90\"></i>
                                {{ 'Réapprovisionnement'|trans }}
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item dropright\" title=\"{{ 'Client et Réclamation'|trans }}\">
                    <a class=\"nav-link dropdown-toggle {% block client_suivi %}{% endblock %}\" href=\"#\" id=\"client\"
                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fas fa-user-tag fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            {{ 'Client & Suivi'|trans }}
                        </div>
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"client\">
                        <li class=\"dropdown-item\" title=\"{{ 'Client'|trans }}\">
                            <a class=\"nav-link {% block client %}{% endblock %}\" href=\"{{ path('client_index') }}\">
                                <i class=\"fas fa-user-tag\"></i>
                                {{ 'Client'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"{{ 'Réclamation'|trans }}\">
                            <a class=\"nav-link {% block reclamation %}{% endblock %}\" href=\"{{ path('reclamation_index',{'user':app.user.id}) }}\">
                                <i class=\"fa-solid fa-user-clock\"></i>
                                {{ 'Réclamation'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"{{ 'Avoirs'|trans }}\">
                            <a class=\"nav-link {% block avoir %}{% endblock %}\" href=\"{{ path('avoir_index') }}\">
                                <i class=\"fas fa-sack-dollar\"></i>
                                {{ 'Avoirs'|trans }}
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item dropright\" title=\"{{ 'Employés'|trans }}\">
                    <a class=\"nav-link dropdown-toggle {% block administration %} {% endblock %}\" href=\"#\"
                       id=\"administration\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fas fa-users fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            {{ 'Employés'|trans }}
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"administration\">
                        <h6 class=\"menu-title\">Administration</h6>
                        <li class=\"dropdown-item\" title=\"{{ 'Employés'|trans }}\">
                            <a class=\"nav-link {% block employe %}{% endblock %}\"
                               href=\"{{ path('employe_index') }}\">
                                <i class=\"fa-solid fa-address-card\"></i>
                                {{ 'Employés'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"{{ 'Contrat'|trans }}\">
                            <a class=\"nav-link {% block contrat %}{% endblock %}\"
                               href=\"{{ path('contrat_index') }}\">
                                <i class=\"fa-solid fa-address-card\"></i>
                                {{ 'Contrat'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"{{ 'Planning des congés'|trans }}\">
                            <a class=\"nav-link {% block planning %}{% endblock %}\"
                               href=\"{{ path('calendrier_index') }}\">
                                <i class=\"fa-solid fa-calendar-days\"></i>
                                {{ 'Planning des congés'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"{{ 'Configuration'|trans }}\">
                            <a class=\"nav-link {% block config %}{% endblock %}\"
                               href=\"{{ path('departement_index') }}\">
                                <i class=\"fa-solid fa-gears\"></i>
                                {{ 'Configuration'|trans }}
                            </a>
                        </li>
                        <h6 class=\"menu-title\">Discipline</h6>
                        <li class=\"dropdown-item\" title=\"{{ 'Permissions'|trans }}\">
                            <a class=\"nav-link {% block permissions %}{% endblock %}\"
                               href=\"{{ path('conges_employe_index') }}\">
                                <i class=\"fa-solid fa-user-check\"></i>
                                {{ 'Permissions'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"{{ 'Absences'|trans }}\">
                            <a class=\"nav-link {% block absence %}{% endblock %}\"
                               href=\"{{ path('absence_suivi') }}\">
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
                        <h6 class=\"menu-title\">Evaluation</h6>
                        <li class=\"dropdown-item\" title=\"{{ 'Performance'|trans }}\">
                            <a class=\"nav-link {% block critere %}{% endblock %}\"
                               href=\"{{ path('critere_evaluation_index') }}\">
                                <i class=\"fa-solid fa-chart-simple\"></i>
                                {{ 'Critere'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\" title=\"{{ 'Performance'|trans }}\">
                            <a class=\"nav-link {% block performance %}{% endblock %}\"
                               href=\"{{ path('evaluation_index') }}\">
                                <i class=\"fa-solid fa-chart-line\"></i>
                                {{ 'Performance'|trans }}
                            </a>
                        </li>
                        <h6 class=\"menu-title\">Paie</h6>
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
                                {{ 'Fiche de paie'|trans }}
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
                <li class=\"nav-item dropright\" title=\"{{ 'Communication'|trans }}\">
                    <a class=\"nav-link dropdown-toggle {% block communication %}{% endblock %}\" href=\"#\"
                       id=\"communication\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fa-regular fa-message fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            {{ 'Communication'|trans }}
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"communication\">
                        <h6 class=\"menu-title\">Communication</h6>
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
                               href=\"#\">
                                <i class=\"fa-solid fa-mug-saucer\"></i>
                                {{ 'Événements'|trans }}
                            </a>
                        </li>
                        <h6 class=\"menu-title\">Formations</h6>
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
                <li class=\"nav-item\" title=\"{{ 'Fournisseur'|trans }}\">
                    <a class=\"nav-link {% block fournisseur %} {% endblock %}\" href=\"{{ path('fournisseur_index') }}\">
                        <div class=\"icone\">
                            <i class=\"fa-solid fa-hospital-user fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            {{ 'Fournisseur'|trans }}
                        </div>
                    </a>
                </li>
                <li class=\"nav-item\" title=\"{{ 'Livraison'|trans }}\">
                    <a class=\"nav-link {% block livraison %}{% endblock %}\" href=\"{{ path('livraison_historique') }}\">
                        <div class=\"icone\">
                            <i class=\"fas fa-truck-fast fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            {{ 'Livraison'|trans }}
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
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block manuel %}{% endblock %}\" href=\"#\" target=\"_blank\">
                                <i class=\"fas fa-book\"></i>
                                {{ 'Manuel'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block pdf_comptable %}{% endblock %}\" href=\"#\" target=\"_blank\">
                                <i class=\"fas fa-book\"></i>
                                {{ 'Plan Comptable'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block suggestiongit %}{% endblock %}\"
                               href=\"{{ path('suggestion_index') }}\">
                                <i class=\"fas fa-comments\"></i>
                                {{ 'Suggestions'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block bug %}{% endblock %}\" href=\"#\">
                                <i class=\"fas fa-bug\"></i>
                                {{ 'Signaler un bug'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a href=\"#\" class=\"nav-link\" data-toggle=\"modal\" data-target=\"#about\">
                                <i class=\"fas fa-check-circle\"></i>
                                {{ \"A propos de l'application\"|trans }}
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
    {{ include('finance/rapport_journalier.html.twig') }}
{% endblock %}


<div id=\"main\" class=\"container-fluid main pt-5\">
    {% block body %}

    {% endblock %}
</div>

{{ include('includes/javascript.html.twig') }}
{% block scripts %}

{% endblock %}
</body>

</html>", "admin.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\admin.html.twig");
    }
}
