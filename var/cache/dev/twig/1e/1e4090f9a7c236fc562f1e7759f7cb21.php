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

/* layout.html.twig */
class __TwigTemplate_ea17ee20e8efaf29ed830070f6713dbf extends Template
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
            'photobox_css' => [$this, 'block_photobox_css'],
            'home' => [$this, 'block_home'],
            'about' => [$this, 'block_about'],
            'metiers' => [$this, 'block_metiers'],
            'logistique' => [$this, 'block_logistique'],
            'distribution' => [$this, 'block_distribution'],
            'promotion' => [$this, 'block_promotion'],
            'commande' => [$this, 'block_commande'],
            'carriere' => [$this, 'block_carriere'],
            'contact' => [$this, 'block_contact'],
            'body' => [$this, 'block_body'],
            'photobox_js' => [$this, 'block_photobox_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "locale", [], "any", false, false, false, 2), "html", null, true);
        yield "\">
<head>
    <meta charset=\"utf-8\">
    <title>
        ";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 7
        yield "    </title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"keywords\" content=\"GNT Pharma\">
    <meta name=\"description\" content=\"Leader dans la distribution des produits pharmaceutiques\">
    <meta name=\"author\" content=\"EUCLIDES\">

    <!-- Favicon -->
    <!--    <link href=\"images/favicon.ico\" rel=\"icon\"> -->

    <!-- Libraries Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.compat.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/gntpharma.jpeg"), "html", null, true);
        yield "\" type=\"image/x-icon\">
    ";
        // line 21
        yield from $this->unwrap()->yieldBlock('photobox_css', $context, $blocks);
        // line 22
        yield "
    <!-- Site Stylesheet -->
    <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
";
        // line 26
        yield "</head>

<body>
<!-- Navbar Start -->
<nav class=\"navbar navbar-expand-lg navbar-light sticky-top p-0\">
    <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Accueil");
        yield "\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
        <h2 class=\"m-0 logo fw-bold\">
            <i class=\"fa-solid fa-staff-snake fa-lg me-2\"></i>GNT PHARMA
        </h2>
    </a>
    <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#main-nav\">
        <i class=\"fa fa-bars fa-lg\"></i>
    </button>
    <div class=\"collapse navbar-collapse pe-5\" id=\"main-nav\">
        <div class=\"navbar-nav ms-auto d-flex align-items-center p-4 p-lg-0\">
            <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Accueil");
        yield "\"
               class=\"nav-item nav-link ";
        // line 42
        yield from $this->unwrap()->yieldBlock('home', $context, $blocks);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Accueil"), "html", null, true);
        yield "</a>
            <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("About");
        yield "\"
               class=\"nav-item nav-link ";
        // line 44
        yield from $this->unwrap()->yieldBlock('about', $context, $blocks);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A propos"), "html", null, true);
        yield "</a>
            <div class=\"nav-item dropdown\">
                <a href=\"#\" class=\"nav-link dropdown-toggle ";
        // line 46
        yield from $this->unwrap()->yieldBlock('metiers', $context, $blocks);
        yield "\"
                   data-bs-toggle=\"dropdown\" aria-expanded=\"false\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nos métiers"), "html", null, true);
        yield "</a>
                <div class=\"dropdown-menu m-0\">
                    <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Logistique");
        yield "\"
                       class=\"dropdown-item ";
        // line 50
        yield from $this->unwrap()->yieldBlock('logistique', $context, $blocks);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logistique"), "html", null, true);
        yield "</a>
                    <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Distribution");
        yield "\"
                       class=\"dropdown-item ";
        // line 52
        yield from $this->unwrap()->yieldBlock('distribution', $context, $blocks);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Distribution"), "html", null, true);
        yield "</a>
                    <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Promotion");
        yield "\"
                       class=\"dropdown-item ";
        // line 54
        yield from $this->unwrap()->yieldBlock('promotion', $context, $blocks);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Promotion"), "html", null, true);
        yield "</a>
                </div>
            </div>
            <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_index");
        yield "\"
               class=\"nav-item nav-link ";
        // line 58
        yield from $this->unwrap()->yieldBlock('commande', $context, $blocks);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Commande"), "html", null, true);
        yield "</a>
            <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Carriere");
        yield "\"
               class=\"nav-item nav-link ";
        // line 60
        yield from $this->unwrap()->yieldBlock('carriere', $context, $blocks);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carrières"), "html", null, true);
        yield "</a>
            <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Contact");
        yield "\"
               class=\"nav-item nav-link ";
        // line 62
        yield from $this->unwrap()->yieldBlock('contact', $context, $blocks);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contact"), "html", null, true);
        yield "</a>
            <button id=\"changelang\" class=\"lang-button\">
            </button>
        </div>
    </div>
</nav>
<!-- Navbar End -->



";
        // line 72
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 76
        yield "
<!-- Footer Start -->
<footer class=\"text-light\">
    <div class=\"container-fluid footer pt-3\">
        <div class=\"container py-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"footer-tittle\">";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contact"), "html", null, true);
        yield "</h4>
                    <p class=\"mb-2 fw-medium\">
                        <i class=\"fa fa-map-marker-alt fa-lg me-2 text-secondaire\"></i>
                        BP : 3582 Yaoundé – Cameroun,<br>
                        <span class=\"ms-4\">NGOUSSO Montée Éleveur</span><br><span class=\"ms-4\">immeuble Sainte Marie</span>
                    </p>
                    <p class=\"mb-2\">
                        <a href=\"tel:+237621117743\" class=\"footer-link fw-medium\">
                            <i class=\"fa fa-phone fa-lg me-2 text-secondaire\"></i>
                            +237 69 71 49 4 12
                        </a>
                        <a href=\"tel:+237675247865\" class=\"footer-link fw-medium ms-4\">

                            +237 67 52 47 865
                        </a>
                    </p>
                    <p class=\"mb-2\">
                        <a href=\"mailto:lnatlantiscameroon@gmail.com\" class=\"footer-link fw-medium\">
                            <i class=\"fa fa-envelope fa-lg me-2 text-secondaire\"></i>
                            info@gntpharma-cameroun.com
                        </a>

                    </p>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"footer-tittle\">";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Liens utiles"), "html", null, true);
        yield "</h4>
                    <a class=\"btn btn-link\" href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("About");
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A propos"), "html", null, true);
        yield "</a>
                    <a class=\"btn btn-link\" href=\"#\">";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actualité et événements"), "html", null, true);
        yield "</a>
                    <a class=\"btn btn-link\" href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_index");
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Commande"), "html", null, true);
        yield "</a>
                    <a class=\"btn btn-link\" href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Contact");
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contact"), "html", null, true);
        yield "</a>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"footer-tittle\">";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Réseaux sociaux"), "html", null, true);
        yield "</h4>
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <a class=\"socialink\" href=\"#\">
                                <span class=\"socialink-facebook\">
                                    gnt-pharma
                                </span>
                                <i class=\"fab fa-square-facebook fa-2x\"></i>
                            </a>
                        </div>
                        <div class=\"col-12\">
                            <a class=\"socialink\" href=\"#\">
                                <span class=\"socialink-twitter\">
                                    gnt-pharma
                                </span>
                                <i class=\"fab fa-twitter fa-2x\"></i>
                            </a>
                        </div>
                        <div class=\"col-12\">
                            <a class=\"socialink\" href=\"#\">
                                <span class=\"socialink-instagram\">
                                    gnt-pharma
                                </span>
                                <i class=\"fab fa-instagram fa-2x\"></i>
                            </a>
                        </div>
                        <div class=\"col-12\">
                            <a class=\"socialink\" href=\"#\">
                                <span class=\"socialink-youtube\">
                                    gnt-pharma
                                </span>
                                <i class=\"fab fa-youtube fa-2x\"></i>
                            </a>
                        </div>
                        <div class=\"col-12\">
                            <a class=\"socialink\" href=\"#\">
                                <span class=\"socialink-linkedin\">
                                    gnt-pharma
                                </span>
                                <i class=\"fab fa-linkedin fa-2x\"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"footer-tittle\">";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Newsletter"), "html", null, true);
        yield "</h4>
                    <p class=\"mb-3\">
                        ";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Abonnez-vous à notre liste de diffusion pour recevoir les dernières actualités"), "html", null, true);
        yield "
                    </p>
                    <div class=\"subcriber-box\">
                        <form id=\"nl-form\" class=\"mc-form\">
                            <div class=\"newsletter-form\">
                                <div class=\"input-group mb-3\">
                                    <input type=\"email\" class=\"form-control\" placeholder=\"Adresse email\"
                                           aria-label=\"Adresse email\" aria-describedby=\"email\">
                                    <span class=\"input-group-text\" id=\"email\">
                                        <i class=\"fa fa-paper-plane\"></i>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container-fluid copyright px-0\">
        <div class=\"d-flex flex-column flex-md-row justify-content-between\">
            <div class=\"py-4 px-5 text-center text-md-start\">
                <p class=\"mb-0\">&copy; 2023 GNT Pharma, ";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tout droits réservés."), "html", null, true);
        yield "</p>
            </div>
            <div class=\"py-4 px-5 bg-secondaire footer-shape position-relative text-center text-md-end\">
                <p class=\"mb-0 text-primaire\">
                    Designed By
                    <a class=\"fw-bold text-primaire\" href=\"https://euclideservices.com\" target=\"_blank\">EUCLIDES</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- Back to Top -->
<a href=\"#\" class=\"btn btn-lg back-to-top\">
    <i class=\"fa-solid fa-chevron-up\"></i>
</a>

<!-- JavaScript Libraries -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js\" async></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js\" async></script>
";
        // line 208
        yield from $this->unwrap()->yieldBlock('photobox_js', $context, $blocks);
        // line 211
        yield "
<!-- Main Javascript -->
<script src=\"";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.min.js"), "html", null, true);
        yield "\"></script>
";
        // line 214
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 214, $this->source); })()), "user", [], "any", false, false, false, 214) != null)) {
        }
        // line 217
        yield "
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield " GNT Pharma - Leader dans la distribution des produits pharmaceutiques ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_photobox_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "photobox_css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "photobox_css"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 42
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

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_about(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "about"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "about"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_metiers(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metiers"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metiers"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_logistique(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logistique"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logistique"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_distribution(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "distribution"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "distribution"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 54
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

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 58
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

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 60
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_carriere(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carriere"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carriere"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_contact(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contact"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contact"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 72
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

        // line 73
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 208
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_photobox_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "photobox_js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "photobox_js"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout.html.twig";
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
        return array (  701 => 208,  688 => 73,  675 => 72,  652 => 62,  629 => 60,  606 => 58,  583 => 54,  560 => 52,  537 => 50,  514 => 46,  491 => 44,  468 => 42,  445 => 21,  422 => 6,  408 => 217,  405 => 214,  401 => 213,  397 => 211,  395 => 208,  368 => 184,  343 => 162,  338 => 160,  290 => 115,  282 => 112,  276 => 111,  272 => 110,  266 => 109,  262 => 108,  234 => 83,  225 => 76,  223 => 72,  208 => 62,  204 => 61,  198 => 60,  194 => 59,  188 => 58,  184 => 57,  176 => 54,  172 => 53,  166 => 52,  162 => 51,  156 => 50,  152 => 49,  147 => 47,  143 => 46,  136 => 44,  132 => 43,  126 => 42,  122 => 41,  109 => 31,  102 => 26,  98 => 24,  94 => 22,  92 => 21,  88 => 20,  73 => 7,  71 => 6,  64 => 2,  61 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale }}\">
<head>
    <meta charset=\"utf-8\">
    <title>
        {% block title %} GNT Pharma - Leader dans la distribution des produits pharmaceutiques {% endblock %}
    </title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"keywords\" content=\"GNT Pharma\">
    <meta name=\"description\" content=\"Leader dans la distribution des produits pharmaceutiques\">
    <meta name=\"author\" content=\"EUCLIDES\">

    <!-- Favicon -->
    <!--    <link href=\"images/favicon.ico\" rel=\"icon\"> -->

    <!-- Libraries Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.compat.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"{{ asset('images/gntpharma.jpeg') }}\" type=\"image/x-icon\">
    {% block photobox_css %} {% endblock %}

    <!-- Site Stylesheet -->
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
{#    <link href=\"{{ asset('css/commande.css') }}\" rel=\"stylesheet\">#}
</head>

<body>
<!-- Navbar Start -->
<nav class=\"navbar navbar-expand-lg navbar-light sticky-top p-0\">
    <a href=\"{{ path('Accueil') }}\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
        <h2 class=\"m-0 logo fw-bold\">
            <i class=\"fa-solid fa-staff-snake fa-lg me-2\"></i>GNT PHARMA
        </h2>
    </a>
    <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#main-nav\">
        <i class=\"fa fa-bars fa-lg\"></i>
    </button>
    <div class=\"collapse navbar-collapse pe-5\" id=\"main-nav\">
        <div class=\"navbar-nav ms-auto d-flex align-items-center p-4 p-lg-0\">
            <a href=\"{{ path('Accueil') }}\"
               class=\"nav-item nav-link {% block home %} {% endblock %}\">{{ \"Accueil\"|trans }}</a>
            <a href=\"{{ path('About') }}\"
               class=\"nav-item nav-link {% block about %} {% endblock %}\">{{ \"A propos\"|trans }}</a>
            <div class=\"nav-item dropdown\">
                <a href=\"#\" class=\"nav-link dropdown-toggle {% block metiers %} {% endblock %}\"
                   data-bs-toggle=\"dropdown\" aria-expanded=\"false\">{{ \"Nos métiers\"|trans }}</a>
                <div class=\"dropdown-menu m-0\">
                    <a href=\"{{ path('Logistique') }}\"
                       class=\"dropdown-item {% block logistique %} {% endblock %}\">{{ \"Logistique\"|trans }}</a>
                    <a href=\"{{ path('Distribution') }}\"
                       class=\"dropdown-item {% block distribution %} {% endblock %}\">{{ \"Distribution\"|trans }}</a>
                    <a href=\"{{ path('Promotion') }}\"
                       class=\"dropdown-item {% block promotion %} {% endblock %}\">{{ \"Promotion\"|trans }}</a>
                </div>
            </div>
            <a href=\"{{ path('commande_index') }}\"
               class=\"nav-item nav-link {% block commande %} {% endblock %}\">{{ \"Commande\"|trans }}</a>
            <a href=\"{{ path('Carriere') }}\"
               class=\"nav-item nav-link {% block carriere %} {% endblock %}\">{{ \"Carrières\"|trans }}</a>
            <a href=\"{{ path('Contact') }}\"
               class=\"nav-item nav-link {% block contact %} {% endblock %}\">{{ \"Contact\"|trans }}</a>
            <button id=\"changelang\" class=\"lang-button\">
            </button>
        </div>
    </div>
</nav>
<!-- Navbar End -->



{% block body %}


{% endblock %}

<!-- Footer Start -->
<footer class=\"text-light\">
    <div class=\"container-fluid footer pt-3\">
        <div class=\"container py-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"footer-tittle\">{{ \"Contact\"|trans }}</h4>
                    <p class=\"mb-2 fw-medium\">
                        <i class=\"fa fa-map-marker-alt fa-lg me-2 text-secondaire\"></i>
                        BP : 3582 Yaoundé – Cameroun,<br>
                        <span class=\"ms-4\">NGOUSSO Montée Éleveur</span><br><span class=\"ms-4\">immeuble Sainte Marie</span>
                    </p>
                    <p class=\"mb-2\">
                        <a href=\"tel:+237621117743\" class=\"footer-link fw-medium\">
                            <i class=\"fa fa-phone fa-lg me-2 text-secondaire\"></i>
                            +237 69 71 49 4 12
                        </a>
                        <a href=\"tel:+237675247865\" class=\"footer-link fw-medium ms-4\">

                            +237 67 52 47 865
                        </a>
                    </p>
                    <p class=\"mb-2\">
                        <a href=\"mailto:lnatlantiscameroon@gmail.com\" class=\"footer-link fw-medium\">
                            <i class=\"fa fa-envelope fa-lg me-2 text-secondaire\"></i>
                            info@gntpharma-cameroun.com
                        </a>

                    </p>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"footer-tittle\">{{ \"Liens utiles\"|trans }}</h4>
                    <a class=\"btn btn-link\" href=\"{{ path('About') }}\">{{ \"A propos\"|trans }}</a>
                    <a class=\"btn btn-link\" href=\"#\">{{ \"Actualité et événements\"|trans }}</a>
                    <a class=\"btn btn-link\" href=\"{{ path('produit_index') }}\">{{ \"Commande\"|trans }}</a>
                    <a class=\"btn btn-link\" href=\"{{ path('Contact') }}\">{{ \"Contact\"|trans }}</a>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"footer-tittle\">{{ \"Réseaux sociaux\"|trans }}</h4>
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <a class=\"socialink\" href=\"#\">
                                <span class=\"socialink-facebook\">
                                    gnt-pharma
                                </span>
                                <i class=\"fab fa-square-facebook fa-2x\"></i>
                            </a>
                        </div>
                        <div class=\"col-12\">
                            <a class=\"socialink\" href=\"#\">
                                <span class=\"socialink-twitter\">
                                    gnt-pharma
                                </span>
                                <i class=\"fab fa-twitter fa-2x\"></i>
                            </a>
                        </div>
                        <div class=\"col-12\">
                            <a class=\"socialink\" href=\"#\">
                                <span class=\"socialink-instagram\">
                                    gnt-pharma
                                </span>
                                <i class=\"fab fa-instagram fa-2x\"></i>
                            </a>
                        </div>
                        <div class=\"col-12\">
                            <a class=\"socialink\" href=\"#\">
                                <span class=\"socialink-youtube\">
                                    gnt-pharma
                                </span>
                                <i class=\"fab fa-youtube fa-2x\"></i>
                            </a>
                        </div>
                        <div class=\"col-12\">
                            <a class=\"socialink\" href=\"#\">
                                <span class=\"socialink-linkedin\">
                                    gnt-pharma
                                </span>
                                <i class=\"fab fa-linkedin fa-2x\"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"footer-tittle\">{{ 'Newsletter'|trans }}</h4>
                    <p class=\"mb-3\">
                        {{ \"Abonnez-vous à notre liste de diffusion pour recevoir les dernières actualités\"|trans }}
                    </p>
                    <div class=\"subcriber-box\">
                        <form id=\"nl-form\" class=\"mc-form\">
                            <div class=\"newsletter-form\">
                                <div class=\"input-group mb-3\">
                                    <input type=\"email\" class=\"form-control\" placeholder=\"Adresse email\"
                                           aria-label=\"Adresse email\" aria-describedby=\"email\">
                                    <span class=\"input-group-text\" id=\"email\">
                                        <i class=\"fa fa-paper-plane\"></i>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container-fluid copyright px-0\">
        <div class=\"d-flex flex-column flex-md-row justify-content-between\">
            <div class=\"py-4 px-5 text-center text-md-start\">
                <p class=\"mb-0\">&copy; 2023 GNT Pharma, {{ \"Tout droits réservés.\"|trans }}</p>
            </div>
            <div class=\"py-4 px-5 bg-secondaire footer-shape position-relative text-center text-md-end\">
                <p class=\"mb-0 text-primaire\">
                    Designed By
                    <a class=\"fw-bold text-primaire\" href=\"https://euclideservices.com\" target=\"_blank\">EUCLIDES</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- Back to Top -->
<a href=\"#\" class=\"btn btn-lg back-to-top\">
    <i class=\"fa-solid fa-chevron-up\"></i>
</a>

<!-- JavaScript Libraries -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js\" async></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js\" async></script>
{% block photobox_js %} {% endblock %}
{#<script src=\"https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js\" ></script>#}
{#<script src=\"{{ asset('libs/counterup/js/counterup.min.js')}}\"></script>#}

<!-- Main Javascript -->
<script src=\"{{ asset('js/main.min.js') }}\"></script>
{% if app.user != null %}
{#    <script src=\"{{ asset('js/commande.min.js') }}\"></script>#}
{% endif %}

</body>

</html>", "layout.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\layout.html.twig");
    }
}
