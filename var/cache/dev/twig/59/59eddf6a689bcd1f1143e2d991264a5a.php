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

/* commande/admin/dashbord.html.twig */
class __TwigTemplate_ce60bcb0f307165f0be0084f7cc4c04f extends Template
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
        // line 8
        return $this->loadTemplate((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) ? ("admin.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RH")) ? ("rh.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FINANCE")) ? ("finance.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STOCK")) ? ("stock.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_LIVREUR")) ? ("livreur.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYER")) ? ("employe.html.twig") : ("layout.html.twig")))))))))))), "commande/admin/dashbord.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/admin/dashbord.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/admin/dashbord.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
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
        yield "
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "session", [], "any", false, false, false, 13), "flashbag", [], "any", false, false, false, 13), "get", ["notice"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            yield "        <div class=\"container mt-5 mb-5\">
            <div class=\"alert alert-danger alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
            yield "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "    <div class=\"col-md-8 offset-md-2 my-5\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-4 col-sm-6 my-3\">
                <div class=\"card border-green\">
                    <div class=\"card-header bg-green text-white\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <i class=\"fa-solid fa-cart-shopping fa-5x\"></i>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-12 text-right\">
                                <div class=\"text-bold\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 33, $this->source); })())), "html", null, true);
        yield "</div>
                                <div>
                                    ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nouvelle commande"), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer bg-light bt-green\">
                    <span class=\"float-left\">
                        <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_panier_suivi");
        yield "\" class=\"text-green\">
                            ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Voir les détails"), "html", null, true);
        yield "
                        </a>
                    </span>
                        <span class=\"float-right\">
                        <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_panier_suivi");
        yield "\" class=\"text-green\">
                            <i class=\"fa fa-arrow-circle-right fa-lg\"></i>
                        </a>
                    </span>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 mt-3 mb-3\">
                <div class=\"card border-green\">
                    <div class=\"card-header bg-success-light text-green\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <i class=\"fa-solid fa-money-bill-trend-up fa-5x\"></i>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-12 text-right\">
                                <div class=\"text-bold\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["vente"]) || array_key_exists("vente", $context) ? $context["vente"] : (function () { throw new RuntimeError('Variable "vente" does not exist.', 65, $this->source); })())), "html", null, true);
        yield "</div>
                                <div>
                                    ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meilleur vente"), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer bg-light bt-green\">
                    <span class=\"float-left\">
                        <a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_vente_admin");
        yield "\" class=\"text-green\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Voir les détails"), "html", null, true);
        yield "
                        </a>
                    </span>
                        <span class=\"float-right\">
                        <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_vente_admin");
        yield "\" class=\"text-green\">
                            <i class=\"fa fa-arrow-circle-right fa-lg\"></i>
                        </a>
                    </span>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 my-3\">
                <div class=\"card border-green\">
                    <div class=\"card-header bg-green text-white\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <i class=\"fa-solid fa-tags fa-5x\"></i>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-12 text-right\">
                                <div class=\"text-bold\">";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 96, $this->source); })())), "html", null, true);
        yield "</div>
                                <div>
                                    ";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Promotion en cour"), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer bg-light bt-green\">
                    <span class=\"float-left\">
                        <a href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("promotion_courante");
        yield "\" class=\"text-green\">
                            ";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Voir les détails"), "html", null, true);
        yield "
                        </a>
                    </span>
                        <span class=\"float-right\">
                        <a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("promotion_courante");
        yield "\" class=\"text-green\">
                            <i class=\"fa fa-arrow-circle-right fa-lg\"></i>
                        </a>
                    </span>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 mt-3 mb-3\">
                <div class=\"card border-green\">
                    <div class=\"card-header bg-success-light text-green\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <i class=\"fa-solid fa-plane-arrival fa-5x\"></i>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-12 text-right\">
                                <div class=\"text-bold\">";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["arrivage"]) || array_key_exists("arrivage", $context) ? $context["arrivage"] : (function () { throw new RuntimeError('Variable "arrivage" does not exist.', 128, $this->source); })())), "html", null, true);
        yield "</div>
                                <div>
                                    ";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Arrivage"), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer bg-light bt-green\">
                    <span class=\"float-left\">
                        <a href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_arrivage_admin");
        yield "\" class=\"text-green\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Voir les détails"), "html", null, true);
        yield "
                        </a>
                    </span>
                        <span class=\"float-right\">
                        <a href=\"";
        // line 141
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_arrivage_admin");
        yield "\" class=\"text-green\">
                            <i class=\"fa fa-arrow-circle-right fa-lg\"></i>
                        </a>
                    </span>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 mt-3 mb-3\">
                <div class=\"card border-green\">
                    <div class=\"card-header bg-success-light text-green\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <i class=\"fa-brands fa-product-hunt fa-5x\"></i>
                                <i class=\"fa-solid fa-circle-xmark fa-3x ml-n4 text-danger\"></i>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-12 text-right\">
                                <div class=\"text-bold\">";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 160, $this->source); })())), "html", null, true);
        yield "</div>
                                <div>
                                    ";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Produit en rupture"), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer bg-light bt-green\">
                    <span class=\"float-left\">
                        <a href=\"";
        // line 169
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stock_rupture");
        yield "\" class=\"text-green\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Voir les détails"), "html", null, true);
        yield "
                        </a>
                    </span>
                        <span class=\"float-right\">
                        <a href=\"";
        // line 173
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stock_rupture");
        yield "\" class=\"text-green\">
                            <i class=\"fa fa-arrow-circle-right fa-lg\"></i>
                        </a>
                    </span>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 mt-3 mb-3\">
                <div class=\"card border-green\">
                    <div class=\"card-header bg-green text-white\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <i class=\"fa-solid fa-warehouse fa-5x\" style=\"vertical-align: baseline;\"></i>
                                <i class=\"fa-solid fa-triangle-exclamation fa-4x ml-n5 text-danger\" style=\"vertical-align: bottom;\"></i>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-12 text-right\">
                                <div class=\"text-bold\">";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["stock"]) || array_key_exists("stock", $context) ? $context["stock"] : (function () { throw new RuntimeError('Variable "stock" does not exist.', 192, $this->source); })())), "html", null, true);
        yield "</div>
                                <div>
                                    ";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stock à surveiller"), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer bg-light bt-green\">
                    <span class=\"float-left\">
                        <a href=\"";
        // line 201
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stock_surveiller");
        yield "\" class=\"text-green\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Voir les détails"), "html", null, true);
        yield "
                        </a>
                    </span>
                        <span class=\"float-right\">
                        <a href=\"";
        // line 205
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stock_surveiller");
        yield "\" class=\"text-green\">
                            <i class=\"fa fa-arrow-circle-right fa-lg\"></i>
                        </a>
                    </span>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 my-3\">
                <div class=\"card border-green\">
                    <div class=\"card-header bg-success-light text-green\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <i class=\"fa-solid fa-truck-fast fa-5x\"></i>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-12 text-right\">
                                <div class=\"text-bold\">";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new RuntimeError('Variable "livraison" does not exist.', 223, $this->source); })())), "html", null, true);
        yield "</div>
                                <div>
                                    ";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attente de livraison"), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer bg-light bt-green\">
                    <span class=\"float-left\">
                        <a href=\"";
        // line 232
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livraison_index");
        yield "\" class=\"text-green\">
                            ";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Voir les détails"), "html", null, true);
        yield "
                        </a>
                    </span>
                        <span class=\"float-right\">
                        <a href=\"";
        // line 237
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livraison_index");
        yield "\" class=\"text-green\">
                            <i class=\"fa fa-arrow-circle-right fa-lg\"></i>
                        </a>
                    </span>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 my-3\">
                <div class=\"card border-green\">
                    <div class=\"card-header bg-green text-white\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <i class=\"fa-solid fa-rotate fa-5x\"></i>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-12 text-right\">
                                <div class=\"text-bold\">";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 255, $this->source); })())), "html", null, true);
        yield "</div>
                                <div>
                                    ";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Réclamation"), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer bg-light bt-green\">
                    <span class=\"float-left\">
                        <a href=\"";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_index", ["user" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 264, $this->source); })()), "user", [], "any", false, false, false, 264), "id", [], "any", false, false, false, 264)]), "html", null, true);
        yield "\" class=\"text-green\">
                            ";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Voir les détails"), "html", null, true);
        yield "
                        </a>
                    </span>
                        <span class=\"float-right\">
                        <a href=\"";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_index", ["user" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 269, $this->source); })()), "user", [], "any", false, false, false, 269), "id", [], "any", false, false, false, 269)]), "html", null, true);
        yield "\" class=\"text-green\">
                            <i class=\"fa fa-arrow-circle-right fa-lg\"></i>
                        </a>
                    </span>
                        <div class=\"clearfix\"></div>
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "commande/admin/dashbord.html.twig";
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
        return array (  484 => 269,  477 => 265,  473 => 264,  463 => 257,  458 => 255,  437 => 237,  430 => 233,  426 => 232,  416 => 225,  411 => 223,  390 => 205,  381 => 201,  371 => 194,  366 => 192,  344 => 173,  335 => 169,  325 => 162,  320 => 160,  298 => 141,  289 => 137,  279 => 130,  274 => 128,  253 => 110,  246 => 106,  242 => 105,  232 => 98,  227 => 96,  206 => 78,  197 => 74,  187 => 67,  182 => 65,  161 => 47,  154 => 43,  150 => 42,  140 => 35,  135 => 33,  121 => 21,  111 => 17,  106 => 14,  102 => 13,  99 => 12,  86 => 11,  63 => 10,  41 => 8,);
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
{% block home %}active{% endblock %}
{% block body %}

    {% for message in app.session.flashbag.get('notice') %}
        <div class=\"container mt-5 mb-5\">
            <div class=\"alert alert-danger alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                {{ message|trans }}
            </div>
        </div>
    {% endfor %}
    <div class=\"col-md-8 offset-md-2 my-5\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-4 col-sm-6 my-3\">
                <div class=\"card border-green\">
                    <div class=\"card-header bg-green text-white\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <i class=\"fa-solid fa-cart-shopping fa-5x\"></i>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-12 text-right\">
                                <div class=\"text-bold\">{{commande|length }}</div>
                                <div>
                                    {{ 'Nouvelle commande'|trans }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer bg-light bt-green\">
                    <span class=\"float-left\">
                        <a href=\"{{ path('commande_panier_suivi') }}\" class=\"text-green\">
                            {{ 'Voir les détails'|trans }}
                        </a>
                    </span>
                        <span class=\"float-right\">
                        <a href=\"{{ path('commande_panier_suivi') }}\" class=\"text-green\">
                            <i class=\"fa fa-arrow-circle-right fa-lg\"></i>
                        </a>
                    </span>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 mt-3 mb-3\">
                <div class=\"card border-green\">
                    <div class=\"card-header bg-success-light text-green\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <i class=\"fa-solid fa-money-bill-trend-up fa-5x\"></i>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-12 text-right\">
                                <div class=\"text-bold\">{{ vente|length }}</div>
                                <div>
                                    {{ 'Meilleur vente'|trans }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer bg-light bt-green\">
                    <span class=\"float-left\">
                        <a href=\"{{ path('produit_vente_admin') }}\" class=\"text-green\">{{ 'Voir les détails'|trans }}
                        </a>
                    </span>
                        <span class=\"float-right\">
                        <a href=\"{{ path('produit_vente_admin') }}\" class=\"text-green\">
                            <i class=\"fa fa-arrow-circle-right fa-lg\"></i>
                        </a>
                    </span>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 my-3\">
                <div class=\"card border-green\">
                    <div class=\"card-header bg-green text-white\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <i class=\"fa-solid fa-tags fa-5x\"></i>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-12 text-right\">
                                <div class=\"text-bold\">{{ promotion|length }}</div>
                                <div>
                                    {{ 'Promotion en cour'|trans }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer bg-light bt-green\">
                    <span class=\"float-left\">
                        <a href=\"{{ path('promotion_courante') }}\" class=\"text-green\">
                            {{ 'Voir les détails'|trans }}
                        </a>
                    </span>
                        <span class=\"float-right\">
                        <a href=\"{{ path('promotion_courante') }}\" class=\"text-green\">
                            <i class=\"fa fa-arrow-circle-right fa-lg\"></i>
                        </a>
                    </span>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 mt-3 mb-3\">
                <div class=\"card border-green\">
                    <div class=\"card-header bg-success-light text-green\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <i class=\"fa-solid fa-plane-arrival fa-5x\"></i>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-12 text-right\">
                                <div class=\"text-bold\">{{ arrivage|length }}</div>
                                <div>
                                    {{ 'Arrivage'|trans }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer bg-light bt-green\">
                    <span class=\"float-left\">
                        <a href=\"{{ path('produit_arrivage_admin') }}\" class=\"text-green\">{{ 'Voir les détails'|trans }}
                        </a>
                    </span>
                        <span class=\"float-right\">
                        <a href=\"{{ path('produit_arrivage_admin') }}\" class=\"text-green\">
                            <i class=\"fa fa-arrow-circle-right fa-lg\"></i>
                        </a>
                    </span>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 mt-3 mb-3\">
                <div class=\"card border-green\">
                    <div class=\"card-header bg-success-light text-green\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <i class=\"fa-brands fa-product-hunt fa-5x\"></i>
                                <i class=\"fa-solid fa-circle-xmark fa-3x ml-n4 text-danger\"></i>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-12 text-right\">
                                <div class=\"text-bold\">{{ produit|length }}</div>
                                <div>
                                    {{ 'Produit en rupture' |trans}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer bg-light bt-green\">
                    <span class=\"float-left\">
                        <a href=\"{{ path('stock_rupture') }}\" class=\"text-green\">{{ 'Voir les détails'|trans }}
                        </a>
                    </span>
                        <span class=\"float-right\">
                        <a href=\"{{ path('stock_rupture') }}\" class=\"text-green\">
                            <i class=\"fa fa-arrow-circle-right fa-lg\"></i>
                        </a>
                    </span>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 mt-3 mb-3\">
                <div class=\"card border-green\">
                    <div class=\"card-header bg-green text-white\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <i class=\"fa-solid fa-warehouse fa-5x\" style=\"vertical-align: baseline;\"></i>
                                <i class=\"fa-solid fa-triangle-exclamation fa-4x ml-n5 text-danger\" style=\"vertical-align: bottom;\"></i>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-12 text-right\">
                                <div class=\"text-bold\">{{ stock|length }}</div>
                                <div>
                                    {{'Stock à surveiller'|trans}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer bg-light bt-green\">
                    <span class=\"float-left\">
                        <a href=\"{{ path('stock_surveiller') }}\" class=\"text-green\">{{ 'Voir les détails'|trans }}
                        </a>
                    </span>
                        <span class=\"float-right\">
                        <a href=\"{{ path('stock_surveiller') }}\" class=\"text-green\">
                            <i class=\"fa fa-arrow-circle-right fa-lg\"></i>
                        </a>
                    </span>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 my-3\">
                <div class=\"card border-green\">
                    <div class=\"card-header bg-success-light text-green\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <i class=\"fa-solid fa-truck-fast fa-5x\"></i>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-12 text-right\">
                                <div class=\"text-bold\">{{ livraison|length }}</div>
                                <div>
                                    {{ 'Attente de livraison'|trans }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer bg-light bt-green\">
                    <span class=\"float-left\">
                        <a href=\"{{ path('livraison_index') }}\" class=\"text-green\">
                            {{ 'Voir les détails'|trans }}
                        </a>
                    </span>
                        <span class=\"float-right\">
                        <a href=\"{{ path('livraison_index') }}\" class=\"text-green\">
                            <i class=\"fa fa-arrow-circle-right fa-lg\"></i>
                        </a>
                    </span>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 my-3\">
                <div class=\"card border-green\">
                    <div class=\"card-header bg-green text-white\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <i class=\"fa-solid fa-rotate fa-5x\"></i>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-12 text-right\">
                                <div class=\"text-bold\">{{ reclamation|length }}</div>
                                <div>
                                    {{ 'Réclamation'|trans }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer bg-light bt-green\">
                    <span class=\"float-left\">
                        <a href=\"{{ path('reclamation_index', { 'user' : app.user.id}) }}\" class=\"text-green\">
                            {{ 'Voir les détails'|trans }}
                        </a>
                    </span>
                        <span class=\"float-right\">
                        <a href=\"{{ path('reclamation_index', { 'user' : app.user.id}) }}\" class=\"text-green\">
                            <i class=\"fa fa-arrow-circle-right fa-lg\"></i>
                        </a>
                    </span>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock%}
", "commande/admin/dashbord.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\commande\\admin\\dashbord.html.twig");
    }
}
