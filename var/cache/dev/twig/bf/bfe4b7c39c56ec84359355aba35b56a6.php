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

/* client.html.twig */
class __TwigTemplate_b1ee86703a2540d6b5208000acfe341c extends Template
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
            'produit' => [$this, 'block_produit'],
            'all_produits' => [$this, 'block_all_produits'],
            'new_produit' => [$this, 'block_new_produit'],
            'arrivage' => [$this, 'block_arrivage'],
            'ventes' => [$this, 'block_ventes'],
            'top' => [$this, 'block_top'],
            'promotion' => [$this, 'block_promotion'],
            'commande' => [$this, 'block_commande'],
            'my_commande' => [$this, 'block_my_commande'],
            'commande_extranet' => [$this, 'block_commande_extranet'],
            'livraison' => [$this, 'block_livraison'],
            'all_livraison' => [$this, 'block_all_livraison'],
            'new_livraison' => [$this, 'block_new_livraison'],
            'reclamation' => [$this, 'block_reclamation'],
            'new_reclamation' => [$this, 'block_new_reclamation'],
            'my_reclamation' => [$this, 'block_my_reclamation'],
            'officine' => [$this, 'block_officine'],
            'avoir' => [$this, 'block_avoir'],
            'dette' => [$this, 'block_dette'],
            'aide' => [$this, 'block_aide'],
            'manuel' => [$this, 'block_manuel'],
            'suggestion' => [$this, 'block_suggestion'],
            'bug' => [$this, 'block_bug'],
            'topbar' => [$this, 'block_topbar'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client.html.twig"));

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
        // line 18
        yield "    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
    <script src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/html5shiv.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/respond.min.js"), "html", null, true);
        yield "\"></script>
    <![endif]-->

</head>

<body ";
        // line 28
        yield from $this->unwrap()->yieldBlock('facture', $context, $blocks);
        yield ">

";
        // line 30
        yield from $this->unwrap()->yieldBlock('nav', $context, $blocks);
        // line 303
        yield "
";
        // line 304
        yield from $this->unwrap()->yieldBlock('topbar', $context, $blocks);
        // line 499
        yield "

<div id=\"main\" class=\"container-fluid main pt-5\">
    ";
        // line 502
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 505
        yield "</div>

";
        // line 507
        yield Twig\Extension\CoreExtension::include($this->env, $context, "includes/javascript.html.twig");
        yield "

</body>

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

    // line 28
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 30
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

        // line 31
        yield "    <nav id=\"navmenu\" class=\"navmenu\">
        <div class=\"session\">
            <a id=\"session\" class=\"navbar-brand text-white m-2\" href=\"";
        // line 33
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
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Accueil"), "html", null, true);
        yield "\">
                    <a class=\"nav-link ";
        // line 43
        yield from $this->unwrap()->yieldBlock('home', $context, $blocks);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_index");
        yield "\">
                        <div class=\"icone\">
                            <i class=\"fas fa-dashboard fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tableau de bord"), "html", null, true);
        yield "
                        </div>
                    </a>
                </li>
                <li class=\"nav-item dropright\" title=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Produits"), "html", null, true);
        yield "\">
                    <a class=\"nav-link dropdown-toggle ";
        // line 53
        yield from $this->unwrap()->yieldBlock('produit', $context, $blocks);
        yield "\" href=\"#\" id=\"produits\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fa-brands fa-product-hunt fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Produits"), "html", null, true);
        yield "
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"produits\">
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 65
        yield from $this->unwrap()->yieldBlock('all_produits', $context, $blocks);
        yield "\"
                               href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_index");
        yield "\">
                                <i class=\"fas fa-list\"></i>
                                ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tous les produits"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 72
        yield from $this->unwrap()->yieldBlock('new_produit', $context, $blocks);
        yield "\"
                               href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_nouveaute");
        yield "\">
                                <i class=\"fas fa-plus\"></i>
                                ";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nouveautés"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 79
        yield from $this->unwrap()->yieldBlock('arrivage', $context, $blocks);
        yield "\"
                               href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_arrivage");
        yield "\">
                                <i class=\"fa-solid fa-plane-arrival\"></i>
                                ";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Arrivage"), "html", null, true);
        yield "
                            </a>
                        </li>
                        ";
        // line 91
        yield "                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 92
        yield from $this->unwrap()->yieldBlock('ventes', $context, $blocks);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_vente");
        yield "\">
                                <i class=\"fas fa-money-bill-trend-up\"></i>
                                ";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meilleures ventes"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 98
        yield from $this->unwrap()->yieldBlock('top', $context, $blocks);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_top");
        yield "\">
                                <i class=\"fas fa-arrow-up-wide-short\"></i>
                                ";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mon Top"), "html", null, true);
        yield "
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item\" title=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Promotions"), "html", null, true);
        yield "\">
                    <a class=\"nav-link ";
        // line 106
        yield from $this->unwrap()->yieldBlock('promotion', $context, $blocks);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("promotion_courante");
        yield "\">
                        <div class=\"icone\">
                            <i class=\"fas fa-tags fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            ";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Promotions"), "html", null, true);
        yield "
                        </div>
                    </a>
                </li>
                <li class=\"nav-item dropright\" title=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Commande"), "html", null, true);
        yield "\">
                    <a class=\"nav-link dropdown-toggle ";
        // line 116
        yield from $this->unwrap()->yieldBlock('commande', $context, $blocks);
        yield "\" href=\"#\" id=\"commande\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fa fa-shopping-cart fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            ";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Commande"), "html", null, true);
        yield "
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"pelerin\">
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 128
        yield from $this->unwrap()->yieldBlock('my_commande', $context, $blocks);
        yield "\"
                               href=\"";
        // line 129
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_panier_suivi");
        yield "\">
                                <i class=\"fas fa-shopping-cart\"></i>
                                <i class=\"fas fa-plus\"></i>
                                ";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mes Commandes"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 136
        yield from $this->unwrap()->yieldBlock('commande_extranet', $context, $blocks);
        yield "\"
                               href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_panier_suivi_extranet");
        yield "\">
                                <i class=\"fa-solid fa-cart-arrow-down\"></i>
                                ";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Commandes Extranet"), "html", null, true);
        yield "
                            </a>
                        </li>
                        ";
        // line 148
        yield "                    </ul>
                </li>
                <li class=\"nav-item dropright\" title=\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Livraison"), "html", null, true);
        yield "\">
                    <a class=\"nav-link dropdown-toggle ";
        // line 151
        yield from $this->unwrap()->yieldBlock('livraison', $context, $blocks);
        yield "\" href=\"#\"
                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fa fas fa-truck-fast fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            ";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Livraison"), "html", null, true);
        yield "
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"pelerin\">
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link  ";
        // line 162
        yield from $this->unwrap()->yieldBlock('all_livraison', $context, $blocks);
        yield "\"
                               href=\"";
        // line 163
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livraison_historique");
        yield "\">
                                <i class=\"fas fa-truck-fast\"></i>
                                ";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Déjà livrée"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link  ";
        // line 169
        yield from $this->unwrap()->yieldBlock('new_livraison', $context, $blocks);
        yield "\"
                               href=\"";
        // line 170
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livraison_index");
        yield "\">
                                <i class=\"fas fa-truck-fast\"></i>
                                ";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("En attente de livraison"), "html", null, true);
        yield "
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item dropright\"
                    title=\"";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Réclamations"), "html", null, true);
        yield "\">
                    <a class=\"nav-link dropdown-toggle ";
        // line 179
        yield from $this->unwrap()->yieldBlock('reclamation', $context, $blocks);
        yield "\" href=\"#\" id=\"Produits\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fa-solid fa-user-clock fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            ";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Réclamation"), "html", null, true);
        yield "
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"pelerin\">
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 191
        yield from $this->unwrap()->yieldBlock('new_reclamation', $context, $blocks);
        yield "\"
                               href=\"";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_new", ["user" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 192, $this->source); })()), "user", [], "any", false, false, false, 192), "id", [], "any", false, false, false, 192)]), "html", null, true);
        yield "\">
                                <i class=\"fas fa-user-clock\"></i>
                                <i class=\"fas fa-plus\"></i>
                                ";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Créer une réclamation"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 199
        yield from $this->unwrap()->yieldBlock('my_reclamation', $context, $blocks);
        yield "\"
                               href=\"";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_index", ["user" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 200, $this->source); })()), "user", [], "any", false, false, false, 200), "id", [], "any", false, false, false, 200)]), "html", null, true);
        yield "\">
                                <i class=\"fas fa-user-clock\"></i>
                                <i class=\"fas fa-list\"></i>
                                ";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mes réclamations"), "html", null, true);
        yield "
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item dropright\" title=\"";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Officine"), "html", null, true);
        yield "\">
                    <a class=\"nav-link dropdown-toggle ";
        // line 209
        yield from $this->unwrap()->yieldBlock('officine', $context, $blocks);
        yield "\" href=\"#\" id=\"officine\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fas fa-staff-snake fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            ";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Officine"), "html", null, true);
        yield "
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"officine\">
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 221
        yield from $this->unwrap()->yieldBlock('avoir', $context, $blocks);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avoir_index");
        yield "\">
                                <i class=\"fas fa-sack-dollar\"></i>
                                ";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Avoirs"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 227
        yield from $this->unwrap()->yieldBlock('dette', $context, $blocks);
        yield "\"
                               href=\"";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("finance_dette", ["user" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 228, $this->source); })()), "user", [], "any", false, false, false, 228), "id", [], "any", false, false, false, 228)]), "html", null, true);
        yield "\">
                                <i class=\"fas fa-sack-xmark \"></i>
                                ";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dettes"), "html", null, true);
        yield "
                            </a>
                        </li>
                        ";
        // line 239
        yield "                    </ul>
                </li>


                <li class=\"nav-item dropright\" title=\"";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Aide"), "html", null, true);
        yield "\">
                    <a class=\"nav-link dropdown-toggle ";
        // line 244
        yield from $this->unwrap()->yieldBlock('aide', $context, $blocks);
        yield "\" href=\"#\" id=\"Aide\"
                       data-toggle=\"dropdown\" aria-haspopup=\"true\"
                       aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fas fa-question-circle fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            ";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Aide"), "html", null, true);
        yield "
                        </div>
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"Aide\">

                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 257
        yield from $this->unwrap()->yieldBlock('manuel', $context, $blocks);
        yield "\" target=\"_blank\" href=\"#\">
                                <i class=\"fas fa-book\"></i>
                                ";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Condition de vente"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link\" target=\"_blank\" href=\"#\">
                                <i class=\"fas fa-book\"></i>
                                ";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manuel"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 269
        yield from $this->unwrap()->yieldBlock('suggestion', $context, $blocks);
        yield "\"
                               href=\"";
        // line 270
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suggestion_new");
        yield "\">
                                <i class=\"fas fa-comments\"></i>
                                ";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Suggestions"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link ";
        // line 276
        yield from $this->unwrap()->yieldBlock('bug', $context, $blocks);
        yield "\" href=\"#\">
                                <i class=\"fas fa-bug\"></i>
                                ";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Signaler un bug"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            ";
        // line 283
        yield "                            <a href=\"#\" class=\"nav-link\" data-toggle=\"modal\" data-target=\"#about\">
                                <i class=\"fas fa-check-circle\"></i>
                                ";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A propos de"), "html", null, true);
        yield " GNT Pharma
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
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/gnt.png"), "html", null, true);
        yield "\" alt=\"by Euclides\" width=\"45\">
                </a>
            </span>
        </div>
    </nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 43
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 53
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 65
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

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_new_produit(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "new_produit"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "new_produit"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 79
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

    // line 92
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

    // line 98
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_top(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "top"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "top"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 106
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_promotion(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "promotion"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "promotion"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 116
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

    // line 128
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_my_commande(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "my_commande"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "my_commande"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 136
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_commande_extranet(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "commande_extranet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "commande_extranet"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 151
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

    // line 162
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_all_livraison(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_livraison"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_livraison"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 169
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_new_livraison(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "new_livraison"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "new_livraison"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 179
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

    // line 191
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_new_reclamation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "new_reclamation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "new_reclamation"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 199
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_my_reclamation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "my_reclamation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "my_reclamation"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 209
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 221
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

    // line 227
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_dette(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dette"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dette"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 244
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

    // line 257
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

    // line 269
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

    // line 276
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

    // line 304
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

        // line 305
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "includes/topbar.html.twig");
        yield "

    <div class=\"container-fluid topbar\">
        <div class=\"row\">
            <div class=\"topbar-menu\">
                <div id=\"navbtn\" class=\"navbtn\" onclick=\"openNav()\">
                    <i class=\"fas fa-align-justify fa-2x\"></i>
                </div>
            </div>
            <div class=\"topbar-item\">
                <div class=\"row\">
                    <div class=\"col-lg-5 col-md-2 col-6 text-nowrap\">
                    <span class=\"history-box\">
                        <i class=\"fa fa-arrow-circle-left history-btn\" title=\"Page précédente\"
                           onclick=\"window.history.back()\"></i>
                        <i class=\"fa fa-arrow-circle-right history-btn ml-3\" title=\"Page suivante\"
                           onclick=\"window.history.forward()\"></i>
                        <i class=\"fa fa-redo-alt fa-rotate-270 history-btn ml-3\" title=\"Actualiser la page\"
                           onclick=\"window.location.reload()\"></i>
                    </span>

                        <button type=\"button\" id=\"install_button\" onclick=\"installApp()\" hidden></button>
                    </div>

                    <div class=\"col-lg-2 col-md-1 col-6 text-nowrap\">
                        <!-- Empty column for spacing or other content -->

                    </div>
                    <div class=\"col-lg-2 col-md-3 col-6 text-nowrap\">
                        <div class=\"row\">
                            <div class=\"col-3\">
                                <div class=\"dropdown\">
                                    <a class=\"panier\" href=\"";
        // line 337
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_panier_panier");
        yield "\">
                                        <small class=\"text-right\">
                                            <span id=\"gest_panier\" class=\"badge badge-danger panierNombre\">
                                     ";
        // line 340
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 340, $this->source); })())), "html", null, true);
        yield "
                                    </span>
                                        </small>
                                        <i class=\"fa fa-cart-shopping fa-lg\"></i>
                                    </a>
                                    <div class=\"dropdown-menu\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-9\">
                                <div class=\"text-right\">
                                    <label for=\"langue\">
                                        <i class=\"fa fa-globe\"></i>
                                    </label>
                                    <select name=\"langue\" id=\"langue\" onchange=\"choixlangue()\">
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-3 col-6 text-nowrap\">
                        <div class=\"text-right\">
                            <div class=\"dropdown\">
                                <a href=\"#\" class=\"\" data-toggle=\"dropdown\">
                                    ";
        // line 365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 365, $this->source); })()), "user", [], "any", false, false, false, 365), "username", [], "any", false, false, false, 365), "html", null, true);
        yield "
                                    <img src=\"";
        // line 366
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar-homme.avif"), "html", null, true);
        yield "\" class=\"user-thumb\"
                                         alt=\"User Image\">
                                </a>
                                <div class=\"dropdown-menu\">
                                    <div class=\"row\">
                                        <div class=\"col-5\">
                                            <img src=\"";
        // line 372
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar-homme.avif"), "html", null, true);
        yield "\" alt=\"\"
                                                 class=\"w-100 mx-2\">
                                        </div>
                                        <div class=\"col-7\">
                                            <div class=\"mt-0\">
                                                <h6 class=\"text-bold text-wrap\">
                                                    ";
        // line 378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 378, $this->source); })()), "user", [], "any", false, false, false, 378), "nom", [], "any", false, false, false, 378), "html", null, true);
        yield "
                                                    ";
        // line 379
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 379, $this->source); })()), "user", [], "any", false, false, false, 379), "prenom", [], "any", false, false, false, 379), "html", null, true);
        yield "
                                                </h6>
                                            </div>
                                            <div class=\"mt-3\">
                                                <a href=\"";
        // line 383
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_profile");
        yield "\">
                                                    <i class=\"fa fa-user\"></i>
                                                    ";
        // line 385
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Profil"), "html", null, true);
        yield "
                                                </a>
                                            </div>
                                            ";
        // line 388
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RH")) {
            // line 389
            yield "                                                <div class=\"mt-2\">
                                                    <a href=\"";
            // line 390
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_manage");
            yield "\">
                                                        <i class=\"fa-solid fa-users-gear\"></i>
                                                        ";
            // line 392
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Gestion utilisateurs"), "html", null, true);
            yield "
                                                    </a>
                                                </div>
                                            ";
        }
        // line 396
        yield "                                            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FINANCE")) {
            // line 397
            yield "                                                <div class=\"mt-2\">
                                                    <a href=\"";
            // line 398
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_clients");
            yield "\">
                                                        <i class=\"fa-solid fa-user-tag\"></i>
                                                        ";
            // line 400
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Gestion clients"), "html", null, true);
            yield "
                                                    </a>
                                                </div>
                                            ";
        }
        // line 404
        yield "                                            <div class=\"mt-2\">
                                                <a href=\"";
        // line 405
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
        yield "\" data-toggle=\"modal\"
                                                   data-target=\"#logout\">
                                                    <i class=\"fa fa-power-off\"></i>
                                                    ";
        // line 408
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Déconnexion"), "html", null, true);
        yield "
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"logout\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deconnexion\" aria-hidden=\"true\">
        <div class=\"modal-dialog text-center\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h4 class=\"modal-title fs-5\" id=\"deconnexion\">
                        <i class=\"fa-solid fa-triangle-exclamation\"></i>
                        ";
        // line 428
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Déconnexion"), "html", null, true);
        yield "
                    </h4>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body px-5 pb-5\">
                    <p class=\"\">
                        <b>";
        // line 436
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Voulez-vous vraiment vous déconnecter ?"), "html", null, true);
        yield "</b>
                    </p>
                    <button type=\"button\" id=\"oui\" onclick=\"deconnexion()\" class=\"btn btn-danger mr-2\">
                        Oui
                    </button>
                    <button type=\"button\" class=\"btn btn-success-light\" data-dismiss=\"modal\" aria-label=\"Close\">
                        Non
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade about\" id=\"about\" role=\"dialog\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content radius-10\">
                <div class=\"float-right mr-4 mt-4\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <img src=\"";
        // line 460
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/gntpharma.jpeg"), "html", null, true);
        yield "\" alt=\"Logo\"
                                 class=\"img-fluid mt-n4 mb-4 align-center\">
                        </div>
                        <div class=\"col-lg-6\">
                            <h3 class=\"text-center text-bold\">GNT PHARMA v";
        // line 464
        yield Twig\Extension\CoreExtension::include($this->env, $context, "includes/version.html.twig");
        yield "</h3>
                            <p class=\"text-center mt-3\">
                                Copyright &copy; 2023-";
        // line 466
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " <b><a class=\"text-green\"
                                                                                  href=\"http://euclideservices.com\"
                                                                                  target=\"_blank\">EUCLIDES</a></b>
                                <br>";
        // line 469
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tous droits réservés"), "html", null, true);
        yield "
                            </p>
                            <p class=\"text-center mt-n2\">
                                ";
        // line 472
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Protégée par"), "html", null, true);
        yield " :
                                <br>- ";
        // line 473
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("La loi sur les droits d'auteurs"), "html", null, true);
        yield "
                                <br>- ";
        // line 474
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("La loi sur la propriété intellectuelle"), "html", null, true);
        yield "
                            </p>
                            <span class=\"row mt-n2\">
                            <span class=\"col-5 text-right\">Contact :</span>
                            <span class=\"col-7 ml-n4\"><a class=\"text-green\"
                                                         href=\"tel:+221754443384\">(+221) 75 444 33 84</a></span>
                            <span class=\"col-5 text-right\"></span>
                            <span class=\"col-7 ml-n4\"><a class=\"text-green\"
                                                         href=\"tel:+221775423500\">(+221) 77 542 35 00</a></span>
                            <span class=\"col-5 text-right\"></span>
                            <span class=\"col-7 ml-n4\"><a class=\"text-green\"
                                                         href=\"tel:+221787333434\">(+221) 78 733 34 34</a></span>
                            <span class=\"col-12 text-center\">Email :
                                <a class=\"text-green\" href=\"mailto:hajjalbayt@euclideservices.com\">infos@euclideservices.com</a>
                            </span>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 502
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

        // line 503
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
        return "client.html.twig";
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
        return array (  1594 => 503,  1581 => 502,  1545 => 474,  1541 => 473,  1537 => 472,  1531 => 469,  1525 => 466,  1520 => 464,  1513 => 460,  1486 => 436,  1475 => 428,  1452 => 408,  1446 => 405,  1443 => 404,  1436 => 400,  1431 => 398,  1428 => 397,  1425 => 396,  1418 => 392,  1413 => 390,  1410 => 389,  1408 => 388,  1402 => 385,  1397 => 383,  1390 => 379,  1386 => 378,  1377 => 372,  1368 => 366,  1364 => 365,  1336 => 340,  1330 => 337,  1294 => 305,  1281 => 304,  1259 => 276,  1237 => 269,  1215 => 257,  1193 => 244,  1171 => 227,  1149 => 221,  1127 => 209,  1105 => 199,  1083 => 191,  1061 => 179,  1039 => 169,  1017 => 162,  995 => 151,  973 => 136,  951 => 128,  929 => 116,  907 => 106,  885 => 98,  863 => 92,  841 => 79,  819 => 72,  797 => 65,  775 => 53,  753 => 43,  736 => 297,  721 => 285,  717 => 283,  710 => 278,  705 => 276,  698 => 272,  693 => 270,  689 => 269,  682 => 265,  673 => 259,  668 => 257,  659 => 251,  649 => 244,  645 => 243,  639 => 239,  633 => 230,  628 => 228,  624 => 227,  617 => 223,  610 => 221,  602 => 216,  592 => 209,  588 => 208,  580 => 203,  574 => 200,  570 => 199,  563 => 195,  557 => 192,  553 => 191,  545 => 186,  535 => 179,  531 => 178,  522 => 172,  517 => 170,  513 => 169,  506 => 165,  501 => 163,  497 => 162,  489 => 157,  480 => 151,  476 => 150,  472 => 148,  466 => 139,  461 => 137,  457 => 136,  450 => 132,  444 => 129,  440 => 128,  432 => 123,  422 => 116,  418 => 115,  411 => 111,  401 => 106,  397 => 105,  389 => 100,  382 => 98,  375 => 94,  368 => 92,  365 => 91,  359 => 82,  354 => 80,  350 => 79,  343 => 75,  338 => 73,  334 => 72,  327 => 68,  322 => 66,  318 => 65,  310 => 60,  300 => 53,  296 => 52,  289 => 48,  279 => 43,  275 => 42,  263 => 33,  259 => 31,  246 => 30,  224 => 28,  211 => 16,  207 => 15,  203 => 14,  199 => 13,  195 => 12,  190 => 11,  177 => 10,  154 => 8,  138 => 507,  134 => 505,  132 => 502,  127 => 499,  125 => 304,  122 => 303,  120 => 30,  115 => 28,  107 => 23,  103 => 22,  97 => 18,  95 => 10,  90 => 8,  85 => 6,  78 => 1,);
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

<body {% block facture %}{% endblock %}>

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
                    <a class=\"nav-link {% block home %}{% endblock %}\" href=\"{{ path('commande_index') }}\">
                        <div class=\"icone\">
                            <i class=\"fas fa-dashboard fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            {{ 'Tableau de bord'|trans }}
                        </div>
                    </a>
                </li>
                <li class=\"nav-item dropright\" title=\"{{ 'Produits'|trans }}\">
                    <a class=\"nav-link dropdown-toggle {% block produit %}{% endblock %}\" href=\"#\" id=\"produits\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fa-brands fa-product-hunt fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            {{ 'Produits'|trans }}
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"produits\">
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block all_produits %}{% endblock %}\"
                               href=\"{{ path('produit_index') }}\">
                                <i class=\"fas fa-list\"></i>
                                {{ 'Tous les produits'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block new_produit %}{% endblock %}\"
                               href=\"{{ path('produit_nouveaute') }}\">
                                <i class=\"fas fa-plus\"></i>
                                {{ 'Nouveautés'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block arrivage %}{% endblock %}\"
                               href=\"{{ path('produit_arrivage') }}\">
                                <i class=\"fa-solid fa-plane-arrival\"></i>
                                {{ 'Arrivage'|trans }}
                            </a>
                        </li>
                        {#<li class=\"dropdown-item\">
                            <a class=\"nav-link\" href=\"#\">
                                <i class=\"fas fa-user-clock\"></i>
                                {{ 'Pré-arrivages'|trans }}
                            </a>
                        </li>#}
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block ventes %}{% endblock %}\" href=\"{{ path('produit_vente') }}\">
                                <i class=\"fas fa-money-bill-trend-up\"></i>
                                {{ 'Meilleures ventes'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block top %}{% endblock %}\" href=\"{{ path('produit_top') }}\">
                                <i class=\"fas fa-arrow-up-wide-short\"></i>
                                {{ 'Mon Top'|trans }}
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item\" title=\"{{ 'Promotions'|trans }}\">
                    <a class=\"nav-link {% block promotion %}{% endblock %}\" href=\"{{ path('promotion_courante') }}\">
                        <div class=\"icone\">
                            <i class=\"fas fa-tags fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            {{ 'Promotions'|trans }}
                        </div>
                    </a>
                </li>
                <li class=\"nav-item dropright\" title=\"{{ 'Commande'|trans }}\">
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
                    <ul class=\" dropdown-menu\" aria-labelledby=\"pelerin\">
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block my_commande %}{% endblock %}\"
                               href=\"{{ path('commande_panier_suivi') }}\">
                                <i class=\"fas fa-shopping-cart\"></i>
                                <i class=\"fas fa-plus\"></i>
                                {{ 'Mes Commandes'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block commande_extranet %}{% endblock %}\"
                               href=\"{{ path('commande_panier_suivi_extranet') }}\">
                                <i class=\"fa-solid fa-cart-arrow-down\"></i>
                                {{ 'Commandes Extranet'|trans }}
                            </a>
                        </li>
                        {#<li class=\"dropdown-item\">
                            <a class=\"nav-link\" href=\"#\">
                                <i class=\"fas fa-list\"></i>
                                {{ 'en preparation'|trans }}
                            </a>
                        </li>#}
                    </ul>
                </li>
                <li class=\"nav-item dropright\" title=\"{{ 'Livraison'|trans }}\">
                    <a class=\"nav-link dropdown-toggle {% block livraison %}{% endblock %}\" href=\"#\"
                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fa fas fa-truck-fast fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            {{ 'Livraison'|trans }}
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"pelerin\">
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link  {% block all_livraison %}{% endblock %}\"
                               href=\"{{ path('livraison_historique') }}\">
                                <i class=\"fas fa-truck-fast\"></i>
                                {{ 'Déjà livrée'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link  {% block new_livraison %}{% endblock %}\"
                               href=\"{{ path('livraison_index') }}\">
                                <i class=\"fas fa-truck-fast\"></i>
                                {{ 'En attente de livraison'|trans }}
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item dropright\"
                    title=\"{{ 'Réclamations'|trans }}\">
                    <a class=\"nav-link dropdown-toggle {% block reclamation %}{% endblock %}\" href=\"#\" id=\"Produits\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fa-solid fa-user-clock fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            {{ 'Réclamation'|trans }}
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"pelerin\">
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block new_reclamation %}{% endblock %}\"
                               href=\"{{ path('reclamation_new', { 'user' : app.user.id }) }}\">
                                <i class=\"fas fa-user-clock\"></i>
                                <i class=\"fas fa-plus\"></i>
                                {{ 'Créer une réclamation'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block my_reclamation %}{% endblock %}\"
                               href=\"{{ path('reclamation_index',{'user':app.user.id}) }}\">
                                <i class=\"fas fa-user-clock\"></i>
                                <i class=\"fas fa-list\"></i>
                                {{ 'Mes réclamations'|trans }}
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item dropright\" title=\"{{ 'Officine'|trans }}\">
                    <a class=\"nav-link dropdown-toggle {% block officine %}{% endblock %}\" href=\"#\" id=\"officine\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        <div class=\"icone\">
                            <i class=\"fas fa-staff-snake fa-lg\"></i>
                        </div>
                        <div class=\"title\">
                            {{ 'Officine'|trans }}
                        </div>
                    </a>
                    <ul class=\" dropdown-menu\" aria-labelledby=\"officine\">
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block avoir %}{% endblock %}\" href=\"{{ path('avoir_index') }}\">
                                <i class=\"fas fa-sack-dollar\"></i>
                                {{ 'Avoirs'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block dette %}{% endblock %}\"
                               href=\"{{ path('finance_dette', {'user': app.user.id}) }}\">
                                <i class=\"fas fa-sack-xmark \"></i>
                                {{ 'Dettes'|trans }}
                            </a>
                        </li>
                        {#<li class=\"dropdown-item\">
                            <a class=\"nav-link\" href=\"{{ path('security_profile') }}\">
                                <i class=\"fas fa-user\"></i>
                                {{ 'Compte Client'|trans }}
                            </a>
                        </li>#}
                    </ul>
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
                            <a class=\"nav-link {% block manuel %}{% endblock %}\" target=\"_blank\" href=\"#\">
                                <i class=\"fas fa-book\"></i>
                                {{ 'Condition de vente'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link\" target=\"_blank\" href=\"#\">
                                <i class=\"fas fa-book\"></i>
                                {{ 'Manuel'|trans }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a class=\"nav-link {% block suggestion %}{% endblock %}\"
                               href=\"{{ path('suggestion_new') }}\">
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
                            {#                            <a href=\"{{ path('About') }}\" class=\"nav-link\" target=\"_blank\">#}
                            <a href=\"#\" class=\"nav-link\" data-toggle=\"modal\" data-target=\"#about\">
                                <i class=\"fas fa-check-circle\"></i>
                                {{ 'A propos de'|trans }} GNT Pharma
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
                </a>
            </span>
        </div>
    </nav>
{% endblock %}

{% block topbar %}
    {{ include('includes/topbar.html.twig') }}

    <div class=\"container-fluid topbar\">
        <div class=\"row\">
            <div class=\"topbar-menu\">
                <div id=\"navbtn\" class=\"navbtn\" onclick=\"openNav()\">
                    <i class=\"fas fa-align-justify fa-2x\"></i>
                </div>
            </div>
            <div class=\"topbar-item\">
                <div class=\"row\">
                    <div class=\"col-lg-5 col-md-2 col-6 text-nowrap\">
                    <span class=\"history-box\">
                        <i class=\"fa fa-arrow-circle-left history-btn\" title=\"Page précédente\"
                           onclick=\"window.history.back()\"></i>
                        <i class=\"fa fa-arrow-circle-right history-btn ml-3\" title=\"Page suivante\"
                           onclick=\"window.history.forward()\"></i>
                        <i class=\"fa fa-redo-alt fa-rotate-270 history-btn ml-3\" title=\"Actualiser la page\"
                           onclick=\"window.location.reload()\"></i>
                    </span>

                        <button type=\"button\" id=\"install_button\" onclick=\"installApp()\" hidden></button>
                    </div>

                    <div class=\"col-lg-2 col-md-1 col-6 text-nowrap\">
                        <!-- Empty column for spacing or other content -->

                    </div>
                    <div class=\"col-lg-2 col-md-3 col-6 text-nowrap\">
                        <div class=\"row\">
                            <div class=\"col-3\">
                                <div class=\"dropdown\">
                                    <a class=\"panier\" href=\"{{ path('commande_panier_panier') }}\">
                                        <small class=\"text-right\">
                                            <span id=\"gest_panier\" class=\"badge badge-danger panierNombre\">
                                     {{ panier|length }}
                                    </span>
                                        </small>
                                        <i class=\"fa fa-cart-shopping fa-lg\"></i>
                                    </a>
                                    <div class=\"dropdown-menu\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-9\">
                                <div class=\"text-right\">
                                    <label for=\"langue\">
                                        <i class=\"fa fa-globe\"></i>
                                    </label>
                                    <select name=\"langue\" id=\"langue\" onchange=\"choixlangue()\">
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-3 col-6 text-nowrap\">
                        <div class=\"text-right\">
                            <div class=\"dropdown\">
                                <a href=\"#\" class=\"\" data-toggle=\"dropdown\">
                                    {{ app.user.username }}
                                    <img src=\"{{ asset('images/avatar-homme.avif') }}\" class=\"user-thumb\"
                                         alt=\"User Image\">
                                </a>
                                <div class=\"dropdown-menu\">
                                    <div class=\"row\">
                                        <div class=\"col-5\">
                                            <img src=\"{{ asset('images/avatar-homme.avif') }}\" alt=\"\"
                                                 class=\"w-100 mx-2\">
                                        </div>
                                        <div class=\"col-7\">
                                            <div class=\"mt-0\">
                                                <h6 class=\"text-bold text-wrap\">
                                                    {{ app.user.nom }}
                                                    {{ app.user.prenom }}
                                                </h6>
                                            </div>
                                            <div class=\"mt-3\">
                                                <a href=\"{{ path('security_profile') }}\">
                                                    <i class=\"fa fa-user\"></i>
                                                    {{ 'Profil'|trans }}
                                                </a>
                                            </div>
                                            {% if is_granted('ROLE_RH') %}
                                                <div class=\"mt-2\">
                                                    <a href=\"{{ path('employe_manage') }}\">
                                                        <i class=\"fa-solid fa-users-gear\"></i>
                                                        {{ 'Gestion utilisateurs'|trans }}
                                                    </a>
                                                </div>
                                            {% endif %}
                                            {% if is_granted('ROLE_FINANCE') %}
                                                <div class=\"mt-2\">
                                                    <a href=\"{{ path('security_clients') }}\">
                                                        <i class=\"fa-solid fa-user-tag\"></i>
                                                        {{ 'Gestion clients'|trans }}
                                                    </a>
                                                </div>
                                            {% endif %}
                                            <div class=\"mt-2\">
                                                <a href=\"{{ path('security_logout') }}\" data-toggle=\"modal\"
                                                   data-target=\"#logout\">
                                                    <i class=\"fa fa-power-off\"></i>
                                                    {{ 'Déconnexion'|trans }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"logout\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deconnexion\" aria-hidden=\"true\">
        <div class=\"modal-dialog text-center\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h4 class=\"modal-title fs-5\" id=\"deconnexion\">
                        <i class=\"fa-solid fa-triangle-exclamation\"></i>
                        {{ 'Déconnexion'|trans }}
                    </h4>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body px-5 pb-5\">
                    <p class=\"\">
                        <b>{{ 'Voulez-vous vraiment vous déconnecter ?'|trans }}</b>
                    </p>
                    <button type=\"button\" id=\"oui\" onclick=\"deconnexion()\" class=\"btn btn-danger mr-2\">
                        Oui
                    </button>
                    <button type=\"button\" class=\"btn btn-success-light\" data-dismiss=\"modal\" aria-label=\"Close\">
                        Non
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade about\" id=\"about\" role=\"dialog\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content radius-10\">
                <div class=\"float-right mr-4 mt-4\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <img src=\"{{ asset('images/gntpharma.jpeg') }}\" alt=\"Logo\"
                                 class=\"img-fluid mt-n4 mb-4 align-center\">
                        </div>
                        <div class=\"col-lg-6\">
                            <h3 class=\"text-center text-bold\">GNT PHARMA v{{ include('includes/version.html.twig') }}</h3>
                            <p class=\"text-center mt-3\">
                                Copyright &copy; 2023-{{ 'now'|date('Y') }} <b><a class=\"text-green\"
                                                                                  href=\"http://euclideservices.com\"
                                                                                  target=\"_blank\">EUCLIDES</a></b>
                                <br>{{ 'Tous droits réservés'|trans }}
                            </p>
                            <p class=\"text-center mt-n2\">
                                {{ 'Protégée par'|trans }} :
                                <br>- {{ 'La loi sur les droits d\\'auteurs'|trans }}
                                <br>- {{ 'La loi sur la propriété intellectuelle'|trans }}
                            </p>
                            <span class=\"row mt-n2\">
                            <span class=\"col-5 text-right\">Contact :</span>
                            <span class=\"col-7 ml-n4\"><a class=\"text-green\"
                                                         href=\"tel:+221754443384\">(+221) 75 444 33 84</a></span>
                            <span class=\"col-5 text-right\"></span>
                            <span class=\"col-7 ml-n4\"><a class=\"text-green\"
                                                         href=\"tel:+221775423500\">(+221) 77 542 35 00</a></span>
                            <span class=\"col-5 text-right\"></span>
                            <span class=\"col-7 ml-n4\"><a class=\"text-green\"
                                                         href=\"tel:+221787333434\">(+221) 78 733 34 34</a></span>
                            <span class=\"col-12 text-center\">Email :
                                <a class=\"text-green\" href=\"mailto:hajjalbayt@euclideservices.com\">infos@euclideservices.com</a>
                            </span>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


{% endblock %}


<div id=\"main\" class=\"container-fluid main pt-5\">
    {% block body %}

    {% endblock %}
</div>

{{ include('includes/javascript.html.twig') }}

</body>

</html>", "client.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\client.html.twig");
    }
}
