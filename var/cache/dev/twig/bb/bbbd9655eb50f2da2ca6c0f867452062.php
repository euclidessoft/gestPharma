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

/* gnt/accueil.html.twig */
class __TwigTemplate_44c93c20b28a2b07644a47de63d50a33 extends Template
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
            'home' => [$this, 'block_home'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gnt/accueil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gnt/accueil.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "gnt/accueil.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "active";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "

    <!--PreLoader Ends-->

    <!-- Carousel Start -->
    <div class=\"container-fluid p-0 mb-lg-5\">
        <div id=\"header-carousel\" class=\"carousel header-carousel\" data-bs-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item position-relative active\">
                    <div class=\"carousel-img slide_1 animated fadeInLeft\">
                    </div>
                    <div class=\"carousel-overlay\">
                        <div class=\"container mt-md-5\">
                            <div class=\"row justify-content-center mt-md-5 text-center\">
                                <div class=\"col-10 col-lg-8\">
                                    <h1 class=\"fs-2 text-secondaire fw-bold mb-4 animated fadeInDownBig delay-05s\">
                                        ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Promotion médicale et pharmaceutique"), "html", null, true);
        yield "
                                    </h1>
                                    <div class=\"fs-5 text-white mb-4 pb-2 animated fadeInUpBig delay-05s\">
                                        <p class=\"paragraphe-1 mb-0\">
                                            ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Notre passion pour l'excellence médicale nous motive à redéfinir constamment les normes de l'industrie et à mettre la barre plus haut pour le bénéfice de tous."), "html", null, true);
        yield "
                                        </p>
                                        <p class=\"paragraphe-2\">
                                            ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nous sommes bien plus qu'une entreprise, nous sommes des artisans de la santé, des guides de l'innovation et des catalyseurs du bien-être"), "html", null, true);
        yield "
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item position-relative\">
                    <div class=\"carousel-img slide_3 animated fadeInLeft\">
                    </div>
                    <div class=\"carousel-overlay\">
                        <div class=\"container mt-md-5\">
                            <div class=\"row justify-content-center mt-md-5 text-center\">
                                <div class=\"col-10 col-lg-8\">
                                    <h1 class=\"fs-2 text-secondaire fw-bold mb-4 animated fadeInDownBig delay-05s\">
                                        ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Importation et stockage de produits pharmaceutiques"), "html", null, true);
        yield "
                                    </h1>
                                    <p class=\"fs-5 text-white mb-4 pb-2 animated fadeInUpBig delay-05s\">
                                        ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nous prenons à cœur notre rôle essentiel dans la chaîne d'approvisionnement pharmaceutique en veillant à ce que chaque produit qui entre dans nos entrepôts soit traité avec le plus grand soin et la plus grande précision"), "html", null, true);
        yield "
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item position-relative\">
                    <div class=\"carousel-img slide_2 animated fadeInLeft\">
                    </div>
                    <div class=\"carousel-overlay\">
                        <div class=\"container mt-md-5\">
                            <div class=\"row justify-content-center mt-md-5 text-center\">
                                <div class=\"col-10 col-lg-8\">
                                    <h1 class=\"fs-2 text-secondaire fw-bold mb-4 animated fadeInDownBig delay-05s\">
                                        ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Distribution de produits pharmaceutiques"), "html", null, true);
        yield "
                                    </h1>
                                    <p class=\"fs-5 text-white mb-4 pb-2 animated fadeInUpBig delay-05s\">
                                        ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nous nous engageons à jouer un rôle crucial dans la chaîne d'approvisionnement pharmaceutique en fournissant des solutions de distribution innovantes et fiables pour les laboratoires à travers le monde"), "html", null, true);
        yield "
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"carousel-indicators\">
                <button type=\"button\" data-bs-target=\"#header-carousel\" data-bs-slide-to=\"0\" aria-label=\"Slide 1\"
                        class=\"active\" aria-current=\"true\"></button>
                <button type=\"button\" data-bs-target=\"#header-carousel\" data-bs-slide-to=\"1\"
                        aria-label=\"Slide 2\"></button>
                <button type=\"button\" data-bs-target=\"#header-carousel\" data-bs-slide-to=\"2\"
                        aria-label=\"Slide 3\"></button>
            </div>
            <div class=\"carousel-control\">
                <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#header-carousel\"
                        data-bs-slide=\"prev\">
                    <i class=\"fa-solid fa-chevron-left\"></i>
                </button>
                <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#header-carousel\"
                        data-bs-slide=\"next\">
                    <i class=\"fa-solid fa-chevron-right\"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class=\"container-fluid py-5 mt-lg-5\">
        <div class=\"container mt-lg-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-6 wow fadeInRightBig text-center text-lg-end\" data-wow-delay=\"0.3s\">
                    <h2 class=\"section-title bg-white text-lg-end pe-3 mb-5\">
                        ";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Qui sommes-nous"), "html", null, true);
        yield "
                    </h2>
                    <p class=\"fs-5 mb-4\">
                        ";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("GNT PHARMA a évolué à partir d'une petite initiative locale, pour devenir l'un des noms les plus fiables, si ce n’est pas le plus fiable, dans l'industrie pharmaceutique, avec une portée nationale et même internationale."), "html", null, true);
        yield "
                    </p>
                    <p class=\"fs-5 mb-5\">
                        ";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Depuis, GNT PHARMA s'est forgé une solide réputation en tant que leader de confiance dans le domaine de la distribution de produits pharmaceutiques."), "html", null, true);
        yield "
                    </p>
                    <a class=\"btn btn-primaire btn-effect p-3\" href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("About");
        yield "\">
                        ";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("En savoir plus ..."), "html", null, true);
        yield "
                    </a>
                </div>
                <div class=\"col-lg-6 wow fadeInLeftBig\" data-wow-delay=\"0.3s\">
                    <div class=\"position-relative h-100\">
                        <img class=\"img-fluid position-absolute w-100 h-100 fit-cover\"
                             src=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/distribution_2.avif"), "html", null, true);
        yield "\" alt=\"A propos\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Metier Start -->
    <div class=\"container-fluid py-5 mb-lg-5\">
        <div class=\"container mb-5\">
            <div class=\"text-center mb-5 mt-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h2 class=\"section-title bg-white text-center text-secondaire px-3 mb-5\">
                    ";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nos métiers"), "html", null, true);
        yield "
                </h2>
            </div>
            <div class=\"row g-5 justify-content-center\">
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"metier-item\">
                        <div class=\"metier-item-inner\">
                            <div class=\"metier-item-front\">
                                <img class=\"img-fluid w-100\" src=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logistic_home.avif"), "html", null, true);
        yield "\"
                                     alt=\"Logistique\">
                                <h2 class=\"metier-front-tittle p-5\">
                                    ";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logistique"), "html", null, true);
        yield "
                                </h2>
                            </div>
                            <div class=\"metier-item-back px-5 py-4\">
                                <h3 class=\"metier-tittle\">
                                    ";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logistique"), "html", null, true);
        yield "
                                </h3>
                                <p class=\"metier-text\">
                                    ";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Chez GNT PHARMA, nous prenons à cœur notre rôle essentiel dans la chaîne d'approvisionnement pharmaceutique, en veillant à ce que chaque produit qui entre dans nos entrepôts soit traité avec le plus grand soin et la plus grande précision."), "html", null, true);
        yield "
                                </p>
                                <a class=\"btn btn-primaire btn-effect\" href=\"";
        // line 152
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Logistique");
        yield "\">
                                    ";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("En savoir plus ..."), "html", null, true);
        yield "
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"metier-item\">
                        <div class=\"metier-item-inner\">
                            <div class=\"metier-item-front\">
                                <img class=\"img-fluid w-100\" src=\"";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/distribution_home.avif"), "html", null, true);
        yield "\"
                                     alt=\"Distribution\">
                                <h2 class=\"metier-front-tittle p-5\">
                                    ";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Distribution"), "html", null, true);
        yield "
                                </h2>
                            </div>
                            <div class=\"metier-item-back px-5 py-4\">
                                <h3 class=\"metier-tittle\">
                                    ";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Distribution"), "html", null, true);
        yield "
                                </h3>
                                <p class=\"metier-text\">
                                    ";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Chez GNT PHARMA, nous nous engageons à jouer un rôle crucial dans la chaîne d'approvisionnement pharmaceutique en fournissant des solutions de distribution innovantes et fiables pour les laboratoires à travers le monde."), "html", null, true);
        yield "
                                </p>
                                <a class=\"btn btn-primaire btn-effect\" href=\"";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Distribution");
        yield "\">
                                    ";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("En savoir plus ..."), "html", null, true);
        yield "
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"metier-item\">
                        <div class=\"metier-item-inner\">
                            <div class=\"metier-item-front\">
                                <img class=\"img-fluid w-100\" src=\"";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/promotion_home.avif"), "html", null, true);
        yield "\"
                                     alt=\"Promotion\">
                                <h2 class=\"metier-front-tittle p-5\">
                                    ";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Promotion"), "html", null, true);
        yield "
                                </h2>
                            </div>
                            <div class=\"metier-item-back px-5 py-4\">
                                <h3 class=\"metier-tittle\">
                                    ";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Promotion"), "html", null, true);
        yield "
                                </h3>
                                <p class=\"metier-text\">
                                    ";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Notre passion pour l'excellence médicale nous motive à redéfinir constamment les normes de l'industrie et à mettre la barre plus haut pour le bénéfice de tous."), "html", null, true);
        yield "
                                    ";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nous sommes bien plus qu'une entreprise, nous sommes des artisans de la santé"), "html", null, true);
        yield "
                                </p>
                                <a class=\"btn btn-primaire btn-effect\" href=\"";
        // line 201
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Promotion");
        yield "\">
                                    ";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("En savoir plus ..."), "html", null, true);
        yield "
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Metier End -->

    <!-- Carriere Start -->
    <div class=\"container-fluid carriere wow fadeInUp mb-lg-5\" data-wow-delay=\"0.1s\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-8\">
                <div class=\"row\">
                    <div class=\"carriere-inner my-5 py-3 pe-5 wow fadeInLeft\" data-wow-delay=\"0.2s\">
                        <div class=\"text-center mb-5 mt-5 wow fadeInLeft\" data-wow-delay=\"0.3s\">
                            <h1 class=\"text-center text-white px-3\">
                                ";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carrière"), "html", null, true);
        yield "
                            </h1>
                        </div>
                        <div class=\"ms-lg-5 ms-md-4 ms-3\">
                            <p class=\"fs-5 pe-5 wow fadeInLeft\" data-wow-delay=\"0.5s\">
                                ";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Chez GNT Pharma, nous croyons fermement que la réussite d'une entreprise repose sur une culture d'entreprise solide et sur le bien-être de ses employés."), "html", null, true);
        yield "
                            </p>
                            <p class=\"fs-5 pe-5 wow fadeInLeft\" data-wow-delay=\"0.7s\">
                                ";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Notre culture est façonnée par des valeurs fondamentales et une vision commune, créant un environnement de travail dynamique et positif où chaque employé peut s'épanouir."), "html", null, true);
        yield "
                            </p>
                            <div class=\"text-center\">
                                <a class=\"btn btn-secondaire btn-effect mt-5 mb-5\" href=\"";
        // line 232
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Carriere");
        yield "\">
                                    ";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Plus de détails ..."), "html", null, true);
        yield "
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- row -->
    </div>
    <!-- Carriere End -->

    ";
        // line 245
        yield "    ";
        // line 246
        yield "    ";
        // line 247
        yield "    ";
        // line 248
        yield "    ";
        // line 249
        yield "    ";
        // line 250
        yield "    ";
        // line 251
        yield "    ";
        // line 252
        yield "    ";
        // line 253
        yield "    ";
        // line 254
        yield "    ";
        // line 255
        yield "    ";
        // line 256
        yield "    ";
        // line 257
        yield "    ";
        // line 258
        yield "    ";
        // line 259
        yield "    ";
        // line 260
        yield "    ";
        // line 261
        yield "    ";
        // line 262
        yield "    ";
        // line 263
        yield "    ";
        // line 264
        yield "    ";
        // line 265
        yield "    ";
        // line 266
        yield "    ";
        // line 267
        yield "    ";
        // line 268
        yield "    ";
        // line 269
        yield "    ";
        // line 270
        yield "    ";
        // line 271
        yield "    ";
        // line 272
        yield "    ";
        // line 273
        yield "    ";
        // line 274
        yield "    ";
        // line 275
        yield "    ";
        // line 276
        yield "    ";
        // line 277
        yield "    ";
        // line 278
        yield "    ";
        // line 279
        yield "    ";
        // line 280
        yield "    ";
        // line 281
        yield "    ";
        // line 282
        yield "    ";
        // line 283
        yield "    ";
        // line 284
        yield "    ";
        // line 285
        yield "    ";
        // line 286
        yield "    ";
        // line 287
        yield "    ";
        // line 288
        yield "    ";
        // line 289
        yield "    ";
        // line 290
        yield "    ";
        // line 291
        yield "    ";
        // line 292
        yield "    ";
        // line 293
        yield "    ";
        // line 294
        yield "    ";
        // line 295
        yield "    ";
        // line 296
        yield "    ";
        // line 297
        yield "    ";
        // line 298
        yield "    ";
        // line 299
        yield "    ";
        // line 300
        yield "    ";
        // line 301
        yield "    ";
        // line 302
        yield "    ";
        // line 303
        yield "    ";
        // line 304
        yield "    ";
        // line 305
        yield "    ";
        // line 306
        yield "    ";
        // line 307
        yield "    ";
        // line 308
        yield "    ";
        // line 309
        yield "    ";
        // line 310
        yield "    ";
        // line 311
        yield "    ";
        // line 312
        yield "    ";
        // line 313
        yield "    ";
        // line 314
        yield "    ";
        // line 315
        yield "    ";
        // line 316
        yield "    ";
        // line 317
        yield "    ";
        // line 318
        yield "    ";
        // line 319
        yield "    ";
        // line 320
        yield "    ";
        // line 321
        yield "    ";
        // line 322
        yield "    ";
        // line 323
        yield "    ";
        // line 324
        yield "    ";
        // line 325
        yield "    ";
        // line 326
        yield "    ";
        // line 327
        yield "    ";
        // line 328
        yield "    ";
        // line 329
        yield "    ";
        // line 330
        yield "    ";
        // line 331
        yield "    ";
        // line 332
        yield "    ";
        // line 333
        yield "    ";
        // line 334
        yield "    ";
        // line 335
        yield "    ";
        // line 336
        yield "    ";
        // line 337
        yield "    ";
        // line 338
        yield "    ";
        // line 339
        yield "    ";
        // line 340
        yield "    ";
        // line 341
        yield "    ";
        // line 342
        yield "    ";
        // line 343
        yield "    ";
        // line 344
        yield "    ";
        // line 345
        yield "    ";
        // line 346
        yield "    ";
        // line 347
        yield "    ";
        // line 348
        yield "    ";
        // line 349
        yield "    ";
        // line 350
        yield "    ";
        // line 351
        yield "    ";
        // line 352
        yield "    ";
        // line 353
        yield "    ";
        // line 354
        yield "    ";
        // line 355
        yield "    ";
        // line 356
        yield "    ";
        // line 357
        yield "    ";
        // line 358
        yield "    ";
        // line 359
        yield "    ";
        // line 360
        yield "    ";
        // line 361
        yield "    <!-- Equipe dirigeante Start -->
    <div class=\"container-fluid py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"container\">
            <div class=\"text-center mb-5 mt-5\">
                <h2 class=\"section-title bg-white text-center text-secondaire px-3 mb-5\">
                    ";
        // line 366
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Equipe dirigeante"), "html", null, true);
        yield "
                </h2>
                <div class=\"row gy-5\">
                    <div class=\"col-lg-3 col-md-6 tab-bloc\">
                        <div class=\"bloc-team wow animated fadeInUp\" data-wow-delay=\"0.1s\">
                            <div class=\"bloc-team-img\">
                                <img src=\"";
        // line 372
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Michel.avif"), "html", null, true);
        yield "\" alt=\"\">
                            </div>
                            <div class=\"bloc-team-text\">
                                <h4>Michel Yawat</h4>
                                <h6>";
        // line 376
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Directeur Général"), "html", null, true);
        yield "</h6>
                            </div>
                            <div class=\"bloc-team-icon\">
                                <a href=\"https://www.facebook.com/yawatdjogang.anselmemichel\" target=\"_blank\">
                                    <i class=\"fa-brands fa-facebook\"></i>
                                </a>
                                <a href=\"https://www.instagram.com/dr_ydam_anselme_michel\" target=\"_blank\">
                                    <i class=\"fa-brands fa-instagram\"></i>
                                </a>
                                <a href=\"https://twitter.com/MichelYawat\" target=\"_blank\">
                                    <i class=\"fa-brands fa-x-twitter\"></i>
                                </a>
                                <a href=\"https://www.linkedin.com/in/anselme-michel-yawat-djogang-a89a3430\" target=\"_blank\">
                                    <i class=\"fa-brands fa-linkedin\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 tab-bloc\">
                        <div class=\"bloc-team wow animated fadeInUp\" data-wow-delay=\"0.3s\">
                            <div class=\"bloc-team-img\">
                                <img src=\"";
        // line 397
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar-homme.avif"), "html", null, true);
        yield "\" alt=\"\">
                            </div>
                            <div class=\"bloc-team-text\">
                                <h4>Prénom Nom</h4>
                                <h6>";
        // line 401
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Directeur Commercial"), "html", null, true);
        yield "</h6>
                            </div>
                            <div class=\"bloc-team-icon\">
                                <a href=\"#\">
                                    <i class=\"fa-brands fa-facebook\"></i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa-brands fa-instagram\"></i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa-brands fa-x-twitter\"></i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa-brands fa-linkedin\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 tab-bloc\">
                        <div class=\"bloc-team wow animated fadeInUp\" data-wow-delay=\"0.5s\">
                            <div class=\"bloc-team-img\">
                                <img src=\"";
        // line 422
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar-homme.avif"), "html", null, true);
        yield "\" alt=\"\">
                            </div>
                            <div class=\"bloc-team-text\">
                                <h4>Prénom Nom</h4>
                                <h6>";
        // line 426
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Directeur Marketing"), "html", null, true);
        yield "</h6>
                            </div>
                            <div class=\"bloc-team-icon\">
                                <a href=\"#\">
                                    <i class=\"fa-brands fa-facebook\"></i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa-brands fa-instagram\"></i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa-brands fa-x-twitter\"></i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa-brands fa-linkedin\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 tab-bloc\">
                        <div class=\"bloc-team wow animated fadeInUp\" data-wow-delay=\"0.7s\">
                            <div class=\"bloc-team-img\">
                                <img src=\"";
        // line 447
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar-femme.avif"), "html", null, true);
        yield "\" alt=\"\">
                            </div>
                            <div class=\"bloc-team-text\">
                                <h4>Prénom Nom</h4>
                                <h6>";
        // line 451
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ressources humaines"), "html", null, true);
        yield "</h6>
                            </div>
                            <div class=\"bloc-team-icon\">
                                <a href=\"#\">
                                    <i class=\"fa-brands fa-facebook\"></i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa-brands fa-instagram\"></i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa-brands fa-x-twitter\"></i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa-brands fa-linkedin\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Equipe dirigeante End -->
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
        return "gnt/accueil.html.twig";
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
        return array (  802 => 451,  795 => 447,  771 => 426,  764 => 422,  740 => 401,  733 => 397,  709 => 376,  702 => 372,  693 => 366,  686 => 361,  684 => 360,  682 => 359,  680 => 358,  678 => 357,  676 => 356,  674 => 355,  672 => 354,  670 => 353,  668 => 352,  666 => 351,  664 => 350,  662 => 349,  660 => 348,  658 => 347,  656 => 346,  654 => 345,  652 => 344,  650 => 343,  648 => 342,  646 => 341,  644 => 340,  642 => 339,  640 => 338,  638 => 337,  636 => 336,  634 => 335,  632 => 334,  630 => 333,  628 => 332,  626 => 331,  624 => 330,  622 => 329,  620 => 328,  618 => 327,  616 => 326,  614 => 325,  612 => 324,  610 => 323,  608 => 322,  606 => 321,  604 => 320,  602 => 319,  600 => 318,  598 => 317,  596 => 316,  594 => 315,  592 => 314,  590 => 313,  588 => 312,  586 => 311,  584 => 310,  582 => 309,  580 => 308,  578 => 307,  576 => 306,  574 => 305,  572 => 304,  570 => 303,  568 => 302,  566 => 301,  564 => 300,  562 => 299,  560 => 298,  558 => 297,  556 => 296,  554 => 295,  552 => 294,  550 => 293,  548 => 292,  546 => 291,  544 => 290,  542 => 289,  540 => 288,  538 => 287,  536 => 286,  534 => 285,  532 => 284,  530 => 283,  528 => 282,  526 => 281,  524 => 280,  522 => 279,  520 => 278,  518 => 277,  516 => 276,  514 => 275,  512 => 274,  510 => 273,  508 => 272,  506 => 271,  504 => 270,  502 => 269,  500 => 268,  498 => 267,  496 => 266,  494 => 265,  492 => 264,  490 => 263,  488 => 262,  486 => 261,  484 => 260,  482 => 259,  480 => 258,  478 => 257,  476 => 256,  474 => 255,  472 => 254,  470 => 253,  468 => 252,  466 => 251,  464 => 250,  462 => 249,  460 => 248,  458 => 247,  456 => 246,  454 => 245,  440 => 233,  436 => 232,  430 => 229,  424 => 226,  416 => 221,  394 => 202,  390 => 201,  385 => 199,  381 => 198,  375 => 195,  367 => 190,  361 => 187,  348 => 177,  344 => 176,  339 => 174,  333 => 171,  325 => 166,  319 => 163,  306 => 153,  302 => 152,  297 => 150,  291 => 147,  283 => 142,  277 => 139,  266 => 131,  250 => 118,  241 => 112,  237 => 111,  232 => 109,  226 => 106,  220 => 103,  181 => 67,  175 => 64,  156 => 48,  150 => 45,  131 => 29,  125 => 26,  118 => 22,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block home %}active{% endblock %}

{% block body %}


    <!--PreLoader Ends-->

    <!-- Carousel Start -->
    <div class=\"container-fluid p-0 mb-lg-5\">
        <div id=\"header-carousel\" class=\"carousel header-carousel\" data-bs-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item position-relative active\">
                    <div class=\"carousel-img slide_1 animated fadeInLeft\">
                    </div>
                    <div class=\"carousel-overlay\">
                        <div class=\"container mt-md-5\">
                            <div class=\"row justify-content-center mt-md-5 text-center\">
                                <div class=\"col-10 col-lg-8\">
                                    <h1 class=\"fs-2 text-secondaire fw-bold mb-4 animated fadeInDownBig delay-05s\">
                                        {{ \"Promotion médicale et pharmaceutique\"|trans }}
                                    </h1>
                                    <div class=\"fs-5 text-white mb-4 pb-2 animated fadeInUpBig delay-05s\">
                                        <p class=\"paragraphe-1 mb-0\">
                                            {{ \"Notre passion pour l'excellence médicale nous motive à redéfinir constamment les normes de l'industrie et à mettre la barre plus haut pour le bénéfice de tous.\"|trans }}
                                        </p>
                                        <p class=\"paragraphe-2\">
                                            {{ \"Nous sommes bien plus qu'une entreprise, nous sommes des artisans de la santé, des guides de l'innovation et des catalyseurs du bien-être\"|trans }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item position-relative\">
                    <div class=\"carousel-img slide_3 animated fadeInLeft\">
                    </div>
                    <div class=\"carousel-overlay\">
                        <div class=\"container mt-md-5\">
                            <div class=\"row justify-content-center mt-md-5 text-center\">
                                <div class=\"col-10 col-lg-8\">
                                    <h1 class=\"fs-2 text-secondaire fw-bold mb-4 animated fadeInDownBig delay-05s\">
                                        {{ \"Importation et stockage de produits pharmaceutiques\"|trans }}
                                    </h1>
                                    <p class=\"fs-5 text-white mb-4 pb-2 animated fadeInUpBig delay-05s\">
                                        {{ \"Nous prenons à cœur notre rôle essentiel dans la chaîne d'approvisionnement pharmaceutique en veillant à ce que chaque produit qui entre dans nos entrepôts soit traité avec le plus grand soin et la plus grande précision\"|trans }}
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item position-relative\">
                    <div class=\"carousel-img slide_2 animated fadeInLeft\">
                    </div>
                    <div class=\"carousel-overlay\">
                        <div class=\"container mt-md-5\">
                            <div class=\"row justify-content-center mt-md-5 text-center\">
                                <div class=\"col-10 col-lg-8\">
                                    <h1 class=\"fs-2 text-secondaire fw-bold mb-4 animated fadeInDownBig delay-05s\">
                                        {{ \"Distribution de produits pharmaceutiques\"|trans }}
                                    </h1>
                                    <p class=\"fs-5 text-white mb-4 pb-2 animated fadeInUpBig delay-05s\">
                                        {{ \"Nous nous engageons à jouer un rôle crucial dans la chaîne d'approvisionnement pharmaceutique en fournissant des solutions de distribution innovantes et fiables pour les laboratoires à travers le monde\"|trans }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"carousel-indicators\">
                <button type=\"button\" data-bs-target=\"#header-carousel\" data-bs-slide-to=\"0\" aria-label=\"Slide 1\"
                        class=\"active\" aria-current=\"true\"></button>
                <button type=\"button\" data-bs-target=\"#header-carousel\" data-bs-slide-to=\"1\"
                        aria-label=\"Slide 2\"></button>
                <button type=\"button\" data-bs-target=\"#header-carousel\" data-bs-slide-to=\"2\"
                        aria-label=\"Slide 3\"></button>
            </div>
            <div class=\"carousel-control\">
                <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#header-carousel\"
                        data-bs-slide=\"prev\">
                    <i class=\"fa-solid fa-chevron-left\"></i>
                </button>
                <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#header-carousel\"
                        data-bs-slide=\"next\">
                    <i class=\"fa-solid fa-chevron-right\"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class=\"container-fluid py-5 mt-lg-5\">
        <div class=\"container mt-lg-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-6 wow fadeInRightBig text-center text-lg-end\" data-wow-delay=\"0.3s\">
                    <h2 class=\"section-title bg-white text-lg-end pe-3 mb-5\">
                        {{ \"Qui sommes-nous\"|trans }}
                    </h2>
                    <p class=\"fs-5 mb-4\">
                        {{ \"GNT PHARMA a évolué à partir d'une petite initiative locale, pour devenir l'un des noms les plus fiables, si ce n’est pas le plus fiable, dans l'industrie pharmaceutique, avec une portée nationale et même internationale.\"|trans }}
                    </p>
                    <p class=\"fs-5 mb-5\">
                        {{ \"Depuis, GNT PHARMA s'est forgé une solide réputation en tant que leader de confiance dans le domaine de la distribution de produits pharmaceutiques.\"|trans }}
                    </p>
                    <a class=\"btn btn-primaire btn-effect p-3\" href=\"{{ path('About') }}\">
                        {{ \"En savoir plus ...\"|trans }}
                    </a>
                </div>
                <div class=\"col-lg-6 wow fadeInLeftBig\" data-wow-delay=\"0.3s\">
                    <div class=\"position-relative h-100\">
                        <img class=\"img-fluid position-absolute w-100 h-100 fit-cover\"
                             src=\"{{ asset('images/distribution_2.avif') }}\" alt=\"A propos\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Metier Start -->
    <div class=\"container-fluid py-5 mb-lg-5\">
        <div class=\"container mb-5\">
            <div class=\"text-center mb-5 mt-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h2 class=\"section-title bg-white text-center text-secondaire px-3 mb-5\">
                    {{ \"Nos métiers\"|trans }}
                </h2>
            </div>
            <div class=\"row g-5 justify-content-center\">
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"metier-item\">
                        <div class=\"metier-item-inner\">
                            <div class=\"metier-item-front\">
                                <img class=\"img-fluid w-100\" src=\"{{ asset('images/logistic_home.avif') }}\"
                                     alt=\"Logistique\">
                                <h2 class=\"metier-front-tittle p-5\">
                                    {{ \"Logistique\"|trans }}
                                </h2>
                            </div>
                            <div class=\"metier-item-back px-5 py-4\">
                                <h3 class=\"metier-tittle\">
                                    {{ \"Logistique\"|trans }}
                                </h3>
                                <p class=\"metier-text\">
                                    {{ \"Chez GNT PHARMA, nous prenons à cœur notre rôle essentiel dans la chaîne d'approvisionnement pharmaceutique, en veillant à ce que chaque produit qui entre dans nos entrepôts soit traité avec le plus grand soin et la plus grande précision.\"|trans }}
                                </p>
                                <a class=\"btn btn-primaire btn-effect\" href=\"{{ path('Logistique') }}\">
                                    {{ \"En savoir plus ...\"|trans }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"metier-item\">
                        <div class=\"metier-item-inner\">
                            <div class=\"metier-item-front\">
                                <img class=\"img-fluid w-100\" src=\"{{ asset('images/distribution_home.avif') }}\"
                                     alt=\"Distribution\">
                                <h2 class=\"metier-front-tittle p-5\">
                                    {{ \"Distribution\"|trans }}
                                </h2>
                            </div>
                            <div class=\"metier-item-back px-5 py-4\">
                                <h3 class=\"metier-tittle\">
                                    {{ \"Distribution\"|trans }}
                                </h3>
                                <p class=\"metier-text\">
                                    {{ \"Chez GNT PHARMA, nous nous engageons à jouer un rôle crucial dans la chaîne d'approvisionnement pharmaceutique en fournissant des solutions de distribution innovantes et fiables pour les laboratoires à travers le monde.\"|trans }}
                                </p>
                                <a class=\"btn btn-primaire btn-effect\" href=\"{{ path('Distribution') }}\">
                                    {{ \"En savoir plus ...\"|trans }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"metier-item\">
                        <div class=\"metier-item-inner\">
                            <div class=\"metier-item-front\">
                                <img class=\"img-fluid w-100\" src=\"{{ asset('images/promotion_home.avif') }}\"
                                     alt=\"Promotion\">
                                <h2 class=\"metier-front-tittle p-5\">
                                    {{ \"Promotion\"|trans }}
                                </h2>
                            </div>
                            <div class=\"metier-item-back px-5 py-4\">
                                <h3 class=\"metier-tittle\">
                                    {{ \"Promotion\"|trans }}
                                </h3>
                                <p class=\"metier-text\">
                                    {{ \"Notre passion pour l'excellence médicale nous motive à redéfinir constamment les normes de l'industrie et à mettre la barre plus haut pour le bénéfice de tous.\"|trans }}
                                    {{ \"Nous sommes bien plus qu'une entreprise, nous sommes des artisans de la santé\"|trans }}
                                </p>
                                <a class=\"btn btn-primaire btn-effect\" href=\"{{ path('Promotion') }}\">
                                    {{ \"En savoir plus ...\"|trans }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Metier End -->

    <!-- Carriere Start -->
    <div class=\"container-fluid carriere wow fadeInUp mb-lg-5\" data-wow-delay=\"0.1s\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-8\">
                <div class=\"row\">
                    <div class=\"carriere-inner my-5 py-3 pe-5 wow fadeInLeft\" data-wow-delay=\"0.2s\">
                        <div class=\"text-center mb-5 mt-5 wow fadeInLeft\" data-wow-delay=\"0.3s\">
                            <h1 class=\"text-center text-white px-3\">
                                {{ \"Carrière\"|trans }}
                            </h1>
                        </div>
                        <div class=\"ms-lg-5 ms-md-4 ms-3\">
                            <p class=\"fs-5 pe-5 wow fadeInLeft\" data-wow-delay=\"0.5s\">
                                {{ \"Chez GNT Pharma, nous croyons fermement que la réussite d'une entreprise repose sur une culture d'entreprise solide et sur le bien-être de ses employés.\"|trans }}
                            </p>
                            <p class=\"fs-5 pe-5 wow fadeInLeft\" data-wow-delay=\"0.7s\">
                                {{ \"Notre culture est façonnée par des valeurs fondamentales et une vision commune, créant un environnement de travail dynamique et positif où chaque employé peut s'épanouir.\"|trans }}
                            </p>
                            <div class=\"text-center\">
                                <a class=\"btn btn-secondaire btn-effect mt-5 mb-5\" href=\"{{ path('Carriere') }}\">
                                    {{ \"Plus de détails ...\"|trans }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- row -->
    </div>
    <!-- Carriere End -->

    {#    <!-- Actualite Start -->#}
    {#    <div class=\"container-fluid py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">#}
    {#        <div class=\"container\">#}
    {#            <div class=\"text-center mb-5 mt-5\">#}
    {#                <h2 class=\"section-title bg-white text-center text-secondaire px-3 mb-5\">#}
    {#                    {{ \"Actualité\"|trans }}#}
    {#                </h2>#}
    {#            </div>#}
    {#            <div class=\"row g-5\">#}
    {#                <div class=\"col-md-6\">#}
    {#                    <div class=\"banner wow fadeInUp shadow\" data-wow-delay=\"0.3s\">#}
    {#                        <div class=\"row\">#}
    {#                            <div class=\"col-lg-4 wow fadeInLeft\" data-wow-delay=\"0.5s\">#}
    {#                                <div class=\"h-100\">#}
    {#                                    <img class=\"img-fluid w-100 h-100 fit-cover\"#}
    {#                                         src=\"{{ asset('images/event_1.avif') }}\" alt=\"\">#}
    {#                                </div>#}
    {#                            </div>#}
    {#                            <div class=\"col-lg-8 text-center\">#}
    {#                                <h3 class=\"fw-bold mt-4 fs-4 wow fadeInRight\" data-wow-delay=\"0.7s\">#}
    {#                                    {{ \"Titre de l'article 1\"|trans }}#}
    {#                                </h3>#}
    {#                                <p class=\"text-lg-start mt-3 px-3 wow fadeInRight\" data-wow-delay=\"0.7s\">#}
    {#                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab accusantium#}
    {#                                    cupiditate#}
    {#                                    distinctio, dolor explicabo fugiat illo illum inventore minima necessitatibus#}
    {#                                    possimus#}
    {#                                </p>#}
    {#                                <a class=\"btn btn-primaire btn-effect px-4 py-2 mt-lg-2 mt-3 mb-lg-3 mb-5 me-3 float-lg-end\" href=\"#\">#}
    {#                                    {{ \"En savoir plus ...\"|trans }}#}
    {#                                </a>#}
    {#                            </div>#}
    {#                        </div>#}
    {#                    </div>#}
    {#                </div>#}
    {#                <div class=\"col-md-6\">#}
    {#                    <div class=\"banner wow fadeInUp shadow\" data-wow-delay=\"0.3s\">#}
    {#                        <div class=\"row\">#}
    {#                            <div class=\"col-lg-4 wow fadeInLeft\" data-wow-delay=\"0.5s\">#}
    {#                                <div class=\"h-100\">#}
    {#                                    <img class=\"img-fluid w-100 h-100 fit-cover\"#}
    {#                                         src=\"{{ asset('images/event_2.avif') }}\" alt=\"\">#}
    {#                                </div>#}
    {#                            </div>#}
    {#                            <div class=\"col-lg-8 text-center\">#}
    {#                                <h3 class=\"fw-bold mt-4 fs-4 wow fadeInRight\" data-wow-delay=\"0.7s\">#}
    {#                                    {{ \"Titre de l'article 2\"|trans }}#}
    {#                                </h3>#}
    {#                                <p class=\"text-lg-start mt-3 px-3 wow fadeInRight\" data-wow-delay=\"0.7s\">#}
    {#                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab accusantium#}
    {#                                    cupiditate#}
    {#                                    distinctio, dolor explicabo fugiat illo illum inventore minima necessitatibus#}
    {#                                    possimus#}
    {#                                </p>#}
    {#                                <a class=\"btn btn-primaire btn-effect px-4 py-2 mt-lg-2 mt-3 mb-lg-3 mb-5 me-3 float-lg-end\" href=\"#\">#}
    {#                                    {{ \"En savoir plus ...\"|trans }}#}
    {#                                </a>#}
    {#                            </div>#}
    {#                        </div>#}
    {#                    </div>#}
    {#                </div>#}
    {#                <div class=\"col-md-6\">#}
    {#                    <div class=\"banner wow fadeInUp shadow\" data-wow-delay=\"0.3s\">#}
    {#                        <div class=\"row\">#}
    {#                            <div class=\"col-lg-4 wow fadeInLeft\" data-wow-delay=\"0.5s\">#}
    {#                                <div class=\"h-100\">#}
    {#                                    <img class=\"img-fluid w-100 h-100 fit-cover\"#}
    {#                                         src=\"{{ asset('images/event_3.avif') }}\" alt=\"\">#}
    {#                                </div>#}
    {#                            </div>#}
    {#                            <div class=\"col-lg-8 text-center\">#}
    {#                                <h3 class=\"fw-bold mt-4 fs-4 wow fadeInRight\" data-wow-delay=\"0.7s\">#}
    {#                                    {{ \"Titre de l'article 3\"|trans }}#}
    {#                                </h3>#}
    {#                                <p class=\"text-lg-start mt-3 px-3 wow fadeInRight\" data-wow-delay=\"0.7s\">#}
    {#                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab accusantium#}
    {#                                    cupiditate#}
    {#                                    distinctio, dolor explicabo fugiat illo illum inventore minima necessitatibus#}
    {#                                    possimus#}
    {#                                </p>#}
    {#                                <a class=\"btn btn-primaire btn-effect px-4 py-2 mt-lg-2 mt-3 mb-lg-3 mb-5 me-3 float-lg-end\" href=\"#\">#}
    {#                                    {{ \"En savoir plus ...\"|trans }}#}
    {#                                </a>#}
    {#                            </div>#}
    {#                        </div>#}
    {#                    </div>#}
    {#                </div>#}
    {#                <div class=\"col-md-6\">#}
    {#                    <div class=\"banner wow fadeInUp shadow\" data-wow-delay=\"0.3s\">#}
    {#                        <div class=\"row\">#}
    {#                            <div class=\"col-lg-4 wow fadeInLeft\" data-wow-delay=\"0.5s\">#}
    {#                                <div class=\"h-100\">#}
    {#                                    <img class=\"img-fluid w-100 h-100 fit-cover\"#}
    {#                                         src=\"{{ asset('images/event_4.avif') }}\" alt=\"\">#}
    {#                                </div>#}
    {#                            </div>#}
    {#                            <div class=\"col-lg-8 text-center\">#}
    {#                                <h3 class=\"fw-bold mt-4 fs-4 wow fadeInRight\" data-wow-delay=\"0.7s\">#}
    {#                                    {{ \"Titre de l'article 4\"|trans }}#}
    {#                                </h3>#}
    {#                                <p class=\"text-lg-start mt-3 px-3 wow fadeInRight\" data-wow-delay=\"0.7s\">#}
    {#                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab accusantium#}
    {#                                    cupiditate#}
    {#                                    distinctio, dolor explicabo fugiat illo illum inventore minima necessitatibus#}
    {#                                    possimus#}
    {#                                </p>#}
    {#                                <a class=\"btn btn-primaire btn-effect px-4 py-2 mt-lg-2 mt-3 mb-lg-3 mb-5 me-3 float-lg-end\" href=\"#\">#}
    {#                                    {{ \"En savoir plus ...\"|trans }}#}
    {#                                </a>#}
    {#                            </div>#}
    {#                        </div>#}
    {#                    </div>#}
    {#                </div>#}
    {#            </div>#}
    {#        </div>#}
    {#    </div>#}
    {#    <!-- Actualite End -->#}
    <!-- Equipe dirigeante Start -->
    <div class=\"container-fluid py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"container\">
            <div class=\"text-center mb-5 mt-5\">
                <h2 class=\"section-title bg-white text-center text-secondaire px-3 mb-5\">
                    {{ \"Equipe dirigeante\"|trans }}
                </h2>
                <div class=\"row gy-5\">
                    <div class=\"col-lg-3 col-md-6 tab-bloc\">
                        <div class=\"bloc-team wow animated fadeInUp\" data-wow-delay=\"0.1s\">
                            <div class=\"bloc-team-img\">
                                <img src=\"{{ asset ('images/Michel.avif') }}\" alt=\"\">
                            </div>
                            <div class=\"bloc-team-text\">
                                <h4>Michel Yawat</h4>
                                <h6>{{'Directeur Général'|trans}}</h6>
                            </div>
                            <div class=\"bloc-team-icon\">
                                <a href=\"https://www.facebook.com/yawatdjogang.anselmemichel\" target=\"_blank\">
                                    <i class=\"fa-brands fa-facebook\"></i>
                                </a>
                                <a href=\"https://www.instagram.com/dr_ydam_anselme_michel\" target=\"_blank\">
                                    <i class=\"fa-brands fa-instagram\"></i>
                                </a>
                                <a href=\"https://twitter.com/MichelYawat\" target=\"_blank\">
                                    <i class=\"fa-brands fa-x-twitter\"></i>
                                </a>
                                <a href=\"https://www.linkedin.com/in/anselme-michel-yawat-djogang-a89a3430\" target=\"_blank\">
                                    <i class=\"fa-brands fa-linkedin\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 tab-bloc\">
                        <div class=\"bloc-team wow animated fadeInUp\" data-wow-delay=\"0.3s\">
                            <div class=\"bloc-team-img\">
                                <img src=\"{{ asset ('images/avatar-homme.avif') }}\" alt=\"\">
                            </div>
                            <div class=\"bloc-team-text\">
                                <h4>Prénom Nom</h4>
                                <h6>{{ 'Directeur Commercial'|trans }}</h6>
                            </div>
                            <div class=\"bloc-team-icon\">
                                <a href=\"#\">
                                    <i class=\"fa-brands fa-facebook\"></i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa-brands fa-instagram\"></i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa-brands fa-x-twitter\"></i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa-brands fa-linkedin\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 tab-bloc\">
                        <div class=\"bloc-team wow animated fadeInUp\" data-wow-delay=\"0.5s\">
                            <div class=\"bloc-team-img\">
                                <img src=\"{{ asset ('images/avatar-homme.avif') }}\" alt=\"\">
                            </div>
                            <div class=\"bloc-team-text\">
                                <h4>Prénom Nom</h4>
                                <h6>{{ 'Directeur Marketing'|trans }}</h6>
                            </div>
                            <div class=\"bloc-team-icon\">
                                <a href=\"#\">
                                    <i class=\"fa-brands fa-facebook\"></i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa-brands fa-instagram\"></i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa-brands fa-x-twitter\"></i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa-brands fa-linkedin\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 tab-bloc\">
                        <div class=\"bloc-team wow animated fadeInUp\" data-wow-delay=\"0.7s\">
                            <div class=\"bloc-team-img\">
                                <img src=\"{{ asset ('images/avatar-femme.avif') }}\" alt=\"\">
                            </div>
                            <div class=\"bloc-team-text\">
                                <h4>Prénom Nom</h4>
                                <h6>{{ 'Ressources humaines'|trans }}</h6>
                            </div>
                            <div class=\"bloc-team-icon\">
                                <a href=\"#\">
                                    <i class=\"fa-brands fa-facebook\"></i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa-brands fa-instagram\"></i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa-brands fa-x-twitter\"></i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa-brands fa-linkedin\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Equipe dirigeante End -->
{% endblock %}", "gnt/accueil.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\gnt\\accueil.html.twig");
    }
}
