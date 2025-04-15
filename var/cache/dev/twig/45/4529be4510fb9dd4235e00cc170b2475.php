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

/* employe/index.html.twig */
class __TwigTemplate_9c02ffa002ff91806239a3c26d905119 extends Template
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
            'administration' => [$this, 'block_administration'],
            'employe' => [$this, 'block_employe'],
            'all_employe' => [$this, 'block_all_employe'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 8
        return $this->loadTemplate((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) ? ("admin.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RH")) ? ("rh.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FINANCE")) ? ("finance.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STOCK")) ? ("stock.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_LIVREUR")) ? ("livreur.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYER")) ? ("employe.html.twig") : ("layout.html.twig")))))))))))), "employe/index.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/index.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tous les employes"), "html", null, true);
        yield " - GNT Pharma ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        yield "active";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
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

        yield "active";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
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
        yield "    <div class=\"container-fluid mt-4 fond-7\">
        <h3 class=\"mt-4 mb-5 text-bold\">
            <i class=\"fa fa-users mr-2\"></i>
            ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tous les employes"), "html", null, true);
        yield "
        </h3>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", ["notice"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            yield "            <div class=\"alert alert-success alert-dismissible fade show radius-10 shadow-black mb-5\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
                    &times;
                </button>
                ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RH")) {
            // line 28
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_new");
            yield "\" class=\"btn btn-green mb-4\">
                <i class=\"fa fa-plus\"></i>
                ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ajouter employé"), "html", null, true);
            yield "
            </a>
        ";
        }
        // line 33
        yield "        <table class=\"table table-success-light table-bordered table-hover table-striped w-100\" id=\"liste\">
            <thead>
            <tr>
                <th>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Matricule"), "html", null, true);
        yield "</th>
                <th>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nom"), "html", null, true);
        yield "</th>
                <th>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Prénom"), "html", null, true);
        yield "</th>
                <th class=\"text-center\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Age"), "html", null, true);
        yield "</th>
                <th class=\"text-center\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sexe"), "html", null, true);
        yield "</th>
                <th>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Téléphone"), "html", null, true);
        yield "</th>
                <th>";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Adresse"), "html", null, true);
        yield "</th>
                <th>";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Poste"), "html", null, true);
        yield "</th>
                <th>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Département"), "html", null, true);
        yield "</th>
                <th class=\"text-center\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Action"), "html", null, true);
        yield "</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["employes"]) || array_key_exists("employes", $context) ? $context["employes"] : (function () { throw new RuntimeError('Variable "employes" does not exist.', 49, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["employe"]) {
            // line 50
            yield "                <tr>
                <td data-label=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Matricule"), "html", null, true);
            yield "\">
                    ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "matricule", [], "any", false, false, false, 52), "html", null, true);
            yield "
                </td>
                <td data-label=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nom"), "html", null, true);
            yield "\">
                    ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "nom", [], "any", false, false, false, 55), "html", null, true);
            yield "
                </td>
                <td data-label=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Prénom"), "html", null, true);
            yield "\">
                    ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "prenom", [], "any", false, false, false, 58), "html", null, true);
            yield "
                </td>
                <td data-label=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Age"), "html", null, true);
            yield "\" class=\"text-nowrap\">
                    ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y") - $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "dateNaissance", [], "any", false, false, false, 61), "Y")), "html", null, true);
            yield "
                    ";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ans"), "html", null, true);
            yield "
                </td>
                <td data-label=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sexe"), "html", null, true);
            yield "\" class=\"text-center\">
                    ";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "sexe", [], "any", false, false, false, 65), "html", null, true);
            yield "
                </td>
                <td data-label=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Téléphone"), "html", null, true);
            yield "\">
                    ";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "phone", [], "any", false, false, false, 68), "html", null, true);
            yield "
                </td>
                <td data-label=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Adresse"), "html", null, true);
            yield "\">
                    ";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "adresse", [], "any", false, false, false, 71), "html", null, true);
            yield "
                </td>
                <td data-label=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Poste"), "html", null, true);
            yield "\">
                    ";
            // line 74
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "poste", [], "any", false, false, false, 74)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "poste", [], "any", false, false, false, 74), "nom", [], "any", false, false, false, 74), "html", null, true)) : (""));
            yield "
                </td>
                <td data-label=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Département"), "html", null, true);
            yield "\">
                    ";
            // line 77
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "poste", [], "any", false, false, false, 77)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "poste", [], "any", false, false, false, 77), "departement", [], "any", false, false, false, 77), "nom", [], "any", false, false, false, 77), "html", null, true)) : (""));
            yield "
                </td>
                <td data-label=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Action"), "html", null, true);
            yield "\" class=\"text-center\">
                    <a href=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            yield "\" class=\"btn btn-green mb-1 mr-2\"
                       title=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Voir"), "html", null, true);
            yield "\">
                        <i class=\"fa fa-eye\"></i>
                    </a>
                    <a href=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 84)]), "html", null, true);
            yield "\" class=\"btn btn-success-light mb-1\"
                       title=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modifier"), "html", null, true);
            yield "\">
                        <i class=\"fa fa-edit\"></i>
                    </a>
                </td>
            ";
            $context['_iterated'] = true;
        }
        // line 89
        if (!$context['_iterated']) {
            // line 90
            yield "                <tr>
                    <td class=\"text-center\" colspan=\"10\">";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Aucun employé enregistré"), "html", null, true);
            yield "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['employe'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
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
        return "employe/index.html.twig";
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
        return array (  399 => 94,  390 => 91,  387 => 90,  385 => 89,  376 => 85,  372 => 84,  366 => 81,  362 => 80,  358 => 79,  353 => 77,  349 => 76,  344 => 74,  340 => 73,  335 => 71,  331 => 70,  326 => 68,  322 => 67,  317 => 65,  313 => 64,  308 => 62,  304 => 61,  300 => 60,  295 => 58,  291 => 57,  286 => 55,  282 => 54,  277 => 52,  273 => 51,  270 => 50,  265 => 49,  258 => 45,  254 => 44,  250 => 43,  246 => 42,  242 => 41,  238 => 40,  234 => 39,  230 => 38,  226 => 37,  222 => 36,  217 => 33,  211 => 30,  205 => 28,  202 => 27,  193 => 24,  187 => 20,  183 => 19,  178 => 17,  173 => 14,  160 => 13,  137 => 12,  114 => 11,  91 => 10,  66 => 9,  44 => 8,);
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
    'layout.html.twig' %}
{% block title %} {{ \"Tous les employes\"|trans }} - GNT Pharma {% endblock %}
{% block administration %}active{% endblock %}
{% block employe %}active{% endblock %}
{% block all_employe %}active{% endblock %}
{% block body %}
    <div class=\"container-fluid mt-4 fond-7\">
        <h3 class=\"mt-4 mb-5 text-bold\">
            <i class=\"fa fa-users mr-2\"></i>
            {{ \"Tous les employes\"|trans }}
        </h3>
        {% for message in app.flashes('notice') %}
            <div class=\"alert alert-success alert-dismissible fade show radius-10 shadow-black mb-5\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
                    &times;
                </button>
                {{ message|trans }}
            </div>
        {% endfor %}
        {% if is_granted('ROLE_RH') %}
            <a href=\"{{ path('employe_new') }}\" class=\"btn btn-green mb-4\">
                <i class=\"fa fa-plus\"></i>
                {{ \"Ajouter employé\"|trans }}
            </a>
        {% endif %}
        <table class=\"table table-success-light table-bordered table-hover table-striped w-100\" id=\"liste\">
            <thead>
            <tr>
                <th>{{ 'Matricule'|trans }}</th>
                <th>{{ 'Nom'|trans }}</th>
                <th>{{ 'Prénom'|trans }}</th>
                <th class=\"text-center\">{{ 'Age'|trans }}</th>
                <th class=\"text-center\">{{ 'Sexe'|trans }}</th>
                <th>{{ 'Téléphone'|trans }}</th>
                <th>{{ 'Adresse'|trans }}</th>
                <th>{{ 'Poste'|trans }}</th>
                <th>{{ 'Département'|trans }}</th>
                <th class=\"text-center\">{{ 'Action'|trans }}</th>
            </tr>
            </thead>
            <tbody>
            {% for employe in employes %}
                <tr>
                <td data-label=\"{{ 'Matricule'|trans }}\">
                    {{ employe.matricule }}
                </td>
                <td data-label=\"{{ 'Nom'|trans }}\">
                    {{ employe.nom }}
                </td>
                <td data-label=\"{{ 'Prénom'|trans }}\">
                    {{ employe.prenom }}
                </td>
                <td data-label=\"{{ 'Age'|trans }}\" class=\"text-nowrap\">
                    {{ 'now'|date('Y') - employe.dateNaissance|date('Y') }}
                    {{ \"ans\"|trans }}
                </td>
                <td data-label=\"{{ 'Sexe'|trans }}\" class=\"text-center\">
                    {{ employe.sexe }}
                </td>
                <td data-label=\"{{ 'Téléphone'|trans }}\">
                    {{ employe.phone }}
                </td>
                <td data-label=\"{{ 'Adresse'|trans }}\">
                    {{ employe.adresse }}
                </td>
                <td data-label=\"{{ 'Poste'|trans }}\">
                    {{ employe.poste ? employe.poste.nom: '' }}
                </td>
                <td data-label=\"{{ 'Département'|trans }}\">
                    {{ employe.poste ? employe.poste.departement.nom: '' }}
                </td>
                <td data-label=\"{{ 'Action'|trans }}\" class=\"text-center\">
                    <a href=\"{{ path('employe_show', {'id': employe.id}) }}\" class=\"btn btn-green mb-1 mr-2\"
                       title=\"{{ \"Voir\"|trans }}\">
                        <i class=\"fa fa-eye\"></i>
                    </a>
                    <a href=\"{{ path('employe_edit', {'id': employe.id}) }}\" class=\"btn btn-success-light mb-1\"
                       title=\"{{ \"Modifier\"|trans }}\">
                        <i class=\"fa fa-edit\"></i>
                    </a>
                </td>
            {% else %}
                <tr>
                    <td class=\"text-center\" colspan=\"10\">{{ 'Aucun employé enregistré'|trans }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}", "employe/index.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\employe\\index.html.twig");
    }
}
