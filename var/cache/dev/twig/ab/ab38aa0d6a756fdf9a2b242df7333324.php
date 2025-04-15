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

/* finance/index.html.twig */
class __TwigTemplate_e7fb5d35183495845ce0616c718f5d33 extends Template
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
            'finance' => [$this, 'block_finance'],
            'journal' => [$this, 'block_journal'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 8
        return $this->loadTemplate((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) ? ("admin.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RH")) ? ("rh.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FINANCE")) ? ("finance.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STOCK")) ? ("stock.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_LIVREUR")) ? ("livreur.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYER")) ? ("employe.html.twig") : ("layout.html.twig")))))))))))), "finance/index.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "finance/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "finance/index.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Journal comptable"), "html", null, true);
        yield " - GNT Pharma";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 13
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

        yield "active";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 15
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

        yield "active";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
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

        // line 18
        yield "
    <div class=\"col-lg-11 mt-5 mb-5 fond-7\">
        <h3 class=\"mt-4 text-bold\">
            <i class=\"fas fa-money-bill fa-lg\"></i><i class=\"fas fa-hourglass-half\"></i>
            ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Journal comptable"), "html", null, true);
        yield "
        </h3>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "session", [], "any", false, false, false, 24), "flashbag", [], "any", false, false, false, 24), "get", ["notice"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            yield "            <div class=\"alert alert-danger alert-dismissible fade show radius-10 shadow-black mt-5 mb-5\">
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
        yield "        <div class=\"col-lg-12 fond-5 mt-5\">
            <h4 class=\"mt-4\">
                <i class=\"fa fa-money-bill-wave\"></i>
                ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Soldes"), "html", null, true);
        yield "
            </h4>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"alert alert-success shadow-black radius-10 mt-4 p-4 text-green\">
                        <span class=\"text-bold\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Solde caisse"), "html", null, true);
        yield "</span> :
                        <h3 class=\"text-nowrap text-bold text-center mt-3\">
                            ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["caisse"]) || array_key_exists("caisse", $context) ? $context["caisse"] : (function () { throw new RuntimeError('Variable "caisse" does not exist.', 40, $this->source); })()), 0, "", " "), "html", null, true);
        yield " F CFA
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"alert alert-success shadow-black radius-10 mt-4 p-4 text-green\">
                        <span class=\"text-bold\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Avoirs en banque :"), "html", null, true);
        yield "</span>
                        <span class=\"float-right\">
                            <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("banque_index");
        yield "\" class=\"text-green\">
                                ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Détails >>"), "html", null, true);
        yield "
                            </a>
                        </span>
                        <h3 class=\"text-nowrap text-bold text-center mt-3\">
                            ";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["banque"]) || array_key_exists("banque", $context) ? $context["banque"] : (function () { throw new RuntimeError('Variable "banque" does not exist.', 53, $this->source); })()), 0, "", " "), "html", null, true);
        yield " F CFA
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"alert alert-success shadow-black radius-10 mt-4 p-4 text-green\">
                        <span class=\"text-bold\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Solde global"), "html", null, true);
        yield "</span> :
                        <h3 class=\"text-nowrap text-bold text-center mt-3\">
                            ";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["caisse"]) || array_key_exists("caisse", $context) ? $context["caisse"] : (function () { throw new RuntimeError('Variable "caisse" does not exist.', 61, $this->source); })()) + (isset($context["banque"]) || array_key_exists("banque", $context) ? $context["banque"] : (function () { throw new RuntimeError('Variable "banque" does not exist.', 61, $this->source); })())), 0, "", " "), "html", null, true);
        yield " F CFA
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"card border-green shadow-black mt-5 mb-3 fond-5\">
            <div class=\"card-header bg-success-light bb-success\">
                <h5 class=\"text-success text-bold\">
                    <i class=\"fa fa-money-bill-transfer\"></i>
                    ";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Journal Comptable"), "html", null, true);
        yield "
                </h5>
            </div>
            <div class=\"card-body\">
                <table class=\"table table-success-light table-bordered table-hover table-striped\">
                    <thead>
                    <tr>
                        <th class=\"text-center\"> ";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nº"), "html", null, true);
        yield "</th>
                        <th class=\"text-center\"> ";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date"), "html", null, true);
        yield "</th>
                        <th>";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Compte"), "html", null, true);
        yield "</th>
";
        // line 83
        yield "                        <th>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Libellé"), "html", null, true);
        yield "</th>
                        <th class=\"text-center\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Débit"), "html", null, true);
        yield "</th>
                        <th class=\"text-center\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Crédit"), "html", null, true);
        yield "</th>
                        ";
        // line 87
        yield "                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 90
        $context["montant2"] = 0;
        // line 91
        yield "                    ";
        $context["i"] = 1;
        // line 92
        yield "                    ";
        $context["transfert"] = 0;
        // line 93
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ecritures"]) || array_key_exists("ecritures", $context) ? $context["ecritures"] : (function () { throw new RuntimeError('Variable "ecritures" does not exist.', 93, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ecriture"]) {
            // line 94
            yield "                        ";
            $context["first"] = 0;
            // line 95
            yield "                        ";
            if (((isset($context["transfert"]) || array_key_exists("transfert", $context) ? $context["transfert"] : (function () { throw new RuntimeError('Variable "transfert" does not exist.', 95, $this->source); })()) == 0)) {
                // line 96
                yield "                            ";
                if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "credit", [], "any", false, false, false, 96))) {
                    // line 97
                    yield "                                ";
                    if ( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "credit", [], "any", false, false, false, 97), "transfert", [], "any", false, false, false, 97))) {
                        // line 98
                        yield "                                    ";
                        $context["transfert"] = 1;
                        // line 99
                        yield "                                ";
                    }
                    // line 100
                    yield "                                <tr>
                                    <td data-label=\"";
                    // line 101
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date"), "html", null, true);
                    yield "\" class=\"text-center\">
                                        ";
                    // line 102
                    if (((isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 102, $this->source); })()) == 0)) {
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 102, $this->source); })()), "html", null, true);
                        yield " ";
                        $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 102, $this->source); })()) + 1);
                        yield " ";
                    }
                    // line 103
                    yield "                                    </td>
                                    <td data-label=\"";
                    // line 104
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date"), "html", null, true);
                    yield "\" class=\"text-center\">
                                        ";
                    // line 105
                    if (((isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 105, $this->source); })()) == 0)) {
                        // line 106
                        yield "                                            ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "date", [], "any", false, false, false, 106), "d/m/Y"), "html", null, true);
                        yield "
                                            ";
                        // line 107
                        $context["first"] = 1;
                        // line 108
                        yield "                                        ";
                    }
                    // line 109
                    yield "                                    </td>
                                    <td data-label=\"";
                    // line 110
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Débit"), "html", null, true);
                    yield "\">
                                        <a href=\"";
                    // line 111
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("finance_journal_compte", ["compte" => CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "comptecredit", [], "any", false, false, false, 111)]), "html", null, true);
                    yield "\">
                                            ";
                    // line 113
                    yield "                                            ";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "credit", [], "any", false, false, false, 113)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "comptecredit", [], "any", false, false, false, 113) . " - ") . CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "libellecomptecredit", [], "any", false, false, false, 113)), "html", null, true)) : (""));
                    yield "
                                        </a>
                                    </td>
                                    ";
                    // line 117
                    yield "
                                    ";
                    // line 119
                    yield "                                    <td data-label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Libellé"), "html", null, true);
                    yield "\">
                                        ";
                    // line 121
                    yield "                                                                                ";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "credit", [], "any", false, false, false, 121)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "libelle", [], "any", false, false, false, 121), "html", null, true)) : (""));
                    yield "

                                    </td>
                                    <td data-label=\"";
                    // line 124
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Crédit"), "html", null, true);
                    yield "\" class=\"text-right\">
                                        ";
                    // line 126
                    yield "                                        ";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "credit", [], "any", false, false, false, 126)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "montant", [], "any", false, false, false, 126), 0, "", " "), "html", null, true)) : (""));
                    yield "
                                    </td>
                                    <td data-label=\"";
                    // line 128
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Débit"), "html", null, true);
                    yield "\" class=\"text-right\">
                                        ";
                    // line 130
                    yield "                                        ";
                    // line 131
                    yield "
                                    </td>
                                    ";
                    // line 134
                    yield "

                                    ";
                    // line 137
                    yield "                                </tr>
                                <tr>
                                    <td data-label=\"";
                    // line 139
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date"), "html", null, true);
                    yield "\" class=\"text-center\">
                                        ";
                    // line 140
                    if (((isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 140, $this->source); })()) == 0)) {
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 140, $this->source); })()), "html", null, true);
                        yield " ";
                        $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 140, $this->source); })()) + 1);
                        yield " ";
                    }
                    // line 141
                    yield "                                    </td>
                                    <td data-label=\"";
                    // line 142
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date"), "html", null, true);
                    yield "\" class=\"text-center\">
                                        ";
                    // line 143
                    if (((isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 143, $this->source); })()) == 0)) {
                        // line 144
                        yield "                                            ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "date", [], "any", false, false, false, 144), "d/m/Y"), "html", null, true);
                        yield "
                                            ";
                        // line 145
                        $context["first"] = 1;
                        // line 146
                        yield "                                        ";
                    }
                    // line 147
                    yield "                                    </td>
                                    <td data-label=\"";
                    // line 148
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Compte"), "html", null, true);
                    yield "\" class=\"credit\">
                                        <a href=\"";
                    // line 149
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("finance_journal_compte", ["compte" => CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "comptedebit", [], "any", false, false, false, 149)]), "html", null, true);
                    yield "\">
                                        ";
                    // line 151
                    yield "                                        ";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "credit", [], "any", false, false, false, 151)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "comptedebit", [], "any", false, false, false, 151) . " - ") . CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "libellecomptedebit", [], "any", false, false, false, 151)), "html", null, true)) : (""));
                    yield "
                                        </a>
                                    </td>
";
                    // line 155
                    yield "
";
                    // line 157
                    yield "                                    <td data-label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Libellé"), "html", null, true);
                    yield "\">
                                        ";
                    // line 159
                    yield "                                        ";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "credit", [], "any", false, false, false, 159)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "libelle", [], "any", false, false, false, 159), "html", null, true)) : (""));
                    yield "

                                    </td>
                                    <td data-label=\"";
                    // line 162
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Crédit"), "html", null, true);
                    yield "\" class=\"text-right\">
                                        ";
                    // line 164
                    yield "                                        ";
                    // line 165
                    yield "                                    </td>
                                    <td data-label=\"";
                    // line 166
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Débit"), "html", null, true);
                    yield "\" class=\"text-right\">
                                        ";
                    // line 168
                    yield "                                        ";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "credit", [], "any", false, false, false, 168)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "montant", [], "any", false, false, false, 168), 0, "", " "), "html", null, true)) : (""));
                    yield "

                                    </td>
                                    ";
                    // line 172
                    yield "

                                    ";
                    // line 175
                    yield "                                </tr>
                            ";
                } else {
                    // line 177
                    yield "                                ";
                    if ( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "debit", [], "any", false, false, false, 177), "transfert", [], "any", false, false, false, 177))) {
                        // line 178
                        yield "                                    ";
                        $context["transfert"] = 1;
                        // line 179
                        yield "                                ";
                    }
                    // line 180
                    yield "                                <tr>
                                    <td data-label=\"";
                    // line 181
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date"), "html", null, true);
                    yield "\" class=\"text-center\">
                                        ";
                    // line 182
                    if (((isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 182, $this->source); })()) == 0)) {
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 182, $this->source); })()), "html", null, true);
                        yield " ";
                        $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 182, $this->source); })()) + 1);
                        yield " ";
                    }
                    // line 183
                    yield "                                    </td>
                                    <td data-label=\"";
                    // line 184
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date"), "html", null, true);
                    yield "\" class=\"text-center\">
                                        ";
                    // line 185
                    if (((isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 185, $this->source); })()) == 0)) {
                        // line 186
                        yield "                                            ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "date", [], "any", false, false, false, 186), "d/m/Y"), "html", null, true);
                        yield "
                                            ";
                        // line 187
                        $context["first"] = 1;
                        // line 188
                        yield "                                        ";
                    }
                    // line 189
                    yield "                                    </td>
                                    <td data-label=\"";
                    // line 190
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Débit"), "html", null, true);
                    yield "\" class=\"credit\">
                                        <a href=\"";
                    // line 191
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("finance_journal_compte", ["compte" => CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "comptecredit", [], "any", false, false, false, 191)]), "html", null, true);
                    yield "\">

                                            ";
                    // line 193
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "debit", [], "any", false, false, false, 193)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "comptecredit", [], "any", false, false, false, 193) . " - ") . CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "libellecomptecredit", [], "any", false, false, false, 193)), "html", null, true)) : (""));
                    yield "
                                            ";
                    // line 195
                    yield "                                        </a>
                                    </td>
";
                    // line 198
                    yield "
";
                    // line 200
                    yield "                                    <td data-label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Libellé"), "html", null, true);
                    yield "\">
                                                                                ";
                    // line 201
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "debit", [], "any", false, false, false, 201)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "libelle", [], "any", false, false, false, 201), "html", null, true)) : (""));
                    yield "
                                        ";
                    // line 203
                    yield "
                                    </td>
                                    <td data-label=\"";
                    // line 205
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Crédit"), "html", null, true);
                    yield "\" class=\"text-right\">
                                        ";
                    // line 206
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "debit", [], "any", false, false, false, 206)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "montant", [], "any", false, false, false, 206), 0, "", " "), "html", null, true)) : (""));
                    yield "
                                        ";
                    // line 208
                    yield "                                    </td>
                                    <td data-label=\"";
                    // line 209
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Débit"), "html", null, true);
                    yield "\" class=\"text-right\">
                                        ";
                    // line 211
                    yield "                                        ";
                    // line 212
                    yield "
                                    </td>
                                    ";
                    // line 215
                    yield "

                                    ";
                    // line 218
                    yield "                                </tr>
                                <tr>
                                    <td data-label=\"";
                    // line 220
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date"), "html", null, true);
                    yield "\" class=\"text-center\">
                                        ";
                    // line 221
                    if (((isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 221, $this->source); })()) == 0)) {
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 221, $this->source); })()), "html", null, true);
                        yield " ";
                        $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 221, $this->source); })()) + 1);
                        yield " ";
                    }
                    // line 222
                    yield "                                    </td>
                                    <td data-label=\"";
                    // line 223
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date"), "html", null, true);
                    yield "\" class=\"text-center\">
                                        ";
                    // line 224
                    if (((isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 224, $this->source); })()) == 0)) {
                        // line 225
                        yield "                                            ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "date", [], "any", false, false, false, 225), "d/m/Y"), "html", null, true);
                        yield "
                                            ";
                        // line 226
                        $context["first"] = 1;
                        // line 227
                        yield "                                        ";
                    }
                    // line 228
                    yield "                                    </td>
                                    <td data-label=\"";
                    // line 229
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Compte"), "html", null, true);
                    yield "\" class=\"credit\">
                                        <a href=\"";
                    // line 230
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("finance_journal_compte", ["compte" => CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "comptedebit", [], "any", false, false, false, 230)]), "html", null, true);
                    yield "\">
                                        ";
                    // line 231
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "debit", [], "any", false, false, false, 231)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "comptedebit", [], "any", false, false, false, 231) . " - ") . CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "libellecomptedebit", [], "any", false, false, false, 231)), "html", null, true)) : (""));
                    yield "
                                        ";
                    // line 233
                    yield "                                        </a>

                                    </td>
";
                    // line 237
                    yield "
";
                    // line 239
                    yield "                                    <td data-label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Libellé"), "html", null, true);
                    yield "\">
                                        ";
                    // line 240
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "debit", [], "any", false, false, false, 240)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "libelle", [], "any", false, false, false, 240), "html", null, true)) : (""));
                    yield "
                                        ";
                    // line 242
                    yield "
                                    </td>
                                    <td data-label=\"";
                    // line 244
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Crédit"), "html", null, true);
                    yield "\" class=\"text-right\">
                                        ";
                    // line 246
                    yield "                                        ";
                    // line 247
                    yield "                                    </td>
                                    <td data-label=\"";
                    // line 248
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Débit"), "html", null, true);
                    yield "\" class=\"text-right\">
                                        ";
                    // line 249
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "debit", [], "any", false, false, false, 249)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "montant", [], "any", false, false, false, 249), 0, "", " "), "html", null, true)) : (""));
                    yield "
                                        ";
                    // line 251
                    yield "
                                    </td>
                                    ";
                    // line 254
                    yield "

                                    ";
                    // line 257
                    yield "                                </tr>
                            ";
                }
                // line 259
                yield "                        ";
            } else {
                // line 260
                yield "                            ";
                $context["transfert"] = 0;
                // line 261
                yield "                        ";
            }
            // line 262
            yield "                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 263
            yield "                        <tr>
                            <td data-label=\"colspan\" colspan=\"7\">
                                ";
            // line 265
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Aucune transaction"), "html", null, true);
            yield "
                            </td>
                        </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ecriture'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 270
        yield "                    </tbody>
                </table>
            </div>
            ";
        // line 281
        yield "        </div>
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
        return "finance/index.html.twig";
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
        return array (  744 => 281,  739 => 270,  728 => 265,  724 => 263,  719 => 262,  716 => 261,  713 => 260,  710 => 259,  706 => 257,  702 => 254,  698 => 251,  694 => 249,  690 => 248,  687 => 247,  685 => 246,  681 => 244,  677 => 242,  673 => 240,  668 => 239,  665 => 237,  660 => 233,  656 => 231,  652 => 230,  648 => 229,  645 => 228,  642 => 227,  640 => 226,  635 => 225,  633 => 224,  629 => 223,  626 => 222,  618 => 221,  614 => 220,  610 => 218,  606 => 215,  602 => 212,  600 => 211,  596 => 209,  593 => 208,  589 => 206,  585 => 205,  581 => 203,  577 => 201,  572 => 200,  569 => 198,  565 => 195,  561 => 193,  556 => 191,  552 => 190,  549 => 189,  546 => 188,  544 => 187,  539 => 186,  537 => 185,  533 => 184,  530 => 183,  522 => 182,  518 => 181,  515 => 180,  512 => 179,  509 => 178,  506 => 177,  502 => 175,  498 => 172,  491 => 168,  487 => 166,  484 => 165,  482 => 164,  478 => 162,  471 => 159,  466 => 157,  463 => 155,  456 => 151,  452 => 149,  448 => 148,  445 => 147,  442 => 146,  440 => 145,  435 => 144,  433 => 143,  429 => 142,  426 => 141,  418 => 140,  414 => 139,  410 => 137,  406 => 134,  402 => 131,  400 => 130,  396 => 128,  390 => 126,  386 => 124,  379 => 121,  374 => 119,  371 => 117,  364 => 113,  360 => 111,  356 => 110,  353 => 109,  350 => 108,  348 => 107,  343 => 106,  341 => 105,  337 => 104,  334 => 103,  326 => 102,  322 => 101,  319 => 100,  316 => 99,  313 => 98,  310 => 97,  307 => 96,  304 => 95,  301 => 94,  295 => 93,  292 => 92,  289 => 91,  287 => 90,  282 => 87,  278 => 85,  274 => 84,  269 => 83,  265 => 81,  261 => 80,  257 => 79,  247 => 72,  233 => 61,  228 => 59,  219 => 53,  212 => 49,  208 => 48,  203 => 46,  194 => 40,  189 => 38,  181 => 33,  176 => 30,  167 => 27,  163 => 25,  159 => 24,  154 => 22,  148 => 18,  135 => 17,  112 => 15,  89 => 13,  65 => 11,  43 => 8,);
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

{% block title %}{{ 'Journal comptable'|trans }} - GNT Pharma{% endblock %}

{% block finance %}active{% endblock %}

{% block journal %}active{% endblock %}

{% block body %}

    <div class=\"col-lg-11 mt-5 mb-5 fond-7\">
        <h3 class=\"mt-4 text-bold\">
            <i class=\"fas fa-money-bill fa-lg\"></i><i class=\"fas fa-hourglass-half\"></i>
            {{ 'Journal comptable'|trans }}
        </h3>
        {% for message in app.session.flashbag.get('notice') %}
            <div class=\"alert alert-danger alert-dismissible fade show radius-10 shadow-black mt-5 mb-5\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                {{ message|trans }}
            </div>
        {% endfor %}
        <div class=\"col-lg-12 fond-5 mt-5\">
            <h4 class=\"mt-4\">
                <i class=\"fa fa-money-bill-wave\"></i>
                {{ 'Soldes'|trans }}
            </h4>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"alert alert-success shadow-black radius-10 mt-4 p-4 text-green\">
                        <span class=\"text-bold\">{{ 'Solde caisse'|trans }}</span> :
                        <h3 class=\"text-nowrap text-bold text-center mt-3\">
                            {{ caisse|number_format(0, '', ' ') }} F CFA
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"alert alert-success shadow-black radius-10 mt-4 p-4 text-green\">
                        <span class=\"text-bold\">{{ 'Avoirs en banque :'|trans }}</span>
                        <span class=\"float-right\">
                            <a href=\"{{ path('banque_index') }}\" class=\"text-green\">
                                {{ 'Détails >>'|trans }}
                            </a>
                        </span>
                        <h3 class=\"text-nowrap text-bold text-center mt-3\">
                            {{ banque|number_format(0, '', ' ') }} F CFA
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"alert alert-success shadow-black radius-10 mt-4 p-4 text-green\">
                        <span class=\"text-bold\">{{ 'Solde global'|trans }}</span> :
                        <h3 class=\"text-nowrap text-bold text-center mt-3\">
                            {{ (caisse + banque)|number_format(0, '', ' ') }} F CFA
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"card border-green shadow-black mt-5 mb-3 fond-5\">
            <div class=\"card-header bg-success-light bb-success\">
                <h5 class=\"text-success text-bold\">
                    <i class=\"fa fa-money-bill-transfer\"></i>
                    {{ 'Journal Comptable'|trans }}
                </h5>
            </div>
            <div class=\"card-body\">
                <table class=\"table table-success-light table-bordered table-hover table-striped\">
                    <thead>
                    <tr>
                        <th class=\"text-center\"> {{ 'Nº'|trans }}</th>
                        <th class=\"text-center\"> {{ 'Date'|trans }}</th>
                        <th>{{ 'Compte'|trans }}</th>
{#                        <th>{{ 'Référence'|trans }}</th>#}
                        <th>{{ 'Libellé'|trans }}</th>
                        <th class=\"text-center\">{{ 'Débit'|trans }}</th>
                        <th class=\"text-center\">{{ 'Crédit'|trans }}</th>
                        {#                        <th class=\"text-center\">{{ 'Solde'|trans }}</th> #}
                    </tr>
                    </thead>
                    <tbody>
                    {% set montant2 = 0 %}
                    {% set i =1 %}
                    {% set transfert = 0 %}
                    {% for ecriture in ecritures %}
                        {% set first = 0 %}
                        {% if transfert == 0 %}
                            {% if ecriture.credit is not null %}
                                {% if ecriture.credit.transfert is not null %}
                                    {% set transfert = 1 %}
                                {% endif %}
                                <tr>
                                    <td data-label=\"{{ 'Date'|trans }}\" class=\"text-center\">
                                        {% if first == 0 %} {{ i }} {% set i = i + 1 %} {% endif %}
                                    </td>
                                    <td data-label=\"{{ 'Date'|trans }}\" class=\"text-center\">
                                        {% if first == 0 %}
                                            {{ ecriture.date|date('d/m/Y') }}
                                            {% set first = 1 %}
                                        {% endif %}
                                    </td>
                                    <td data-label=\"{{ 'Débit'|trans }}\">
                                        <a href=\"{{ path('finance_journal_compte',{ 'compte': ecriture.comptecredit  }) }}\">
                                            {#                                    {{ ecriture.debit ? ecriture.comptedebit : '' }}#}
                                            {{ ecriture.credit ? ecriture.comptecredit~\" - \"~ ecriture.libellecomptecredit : '' }}
                                        </a>
                                    </td>
                                    {#                                    <td data-label=\"{{ 'Référence'|trans }}\">#}

                                    {#                                    </td>#}
                                    <td data-label=\"{{ 'Libellé'|trans }}\">
                                        {#                                        {{ ecriture.debit ? ecriture.libelle : '' }}#}
                                                                                {{ ecriture.credit ? ecriture.libelle : '' }}

                                    </td>
                                    <td data-label=\"{{ 'Crédit'|trans }}\" class=\"text-right\">
                                        {#                                    {{ ecriture.debit ? ecriture.montant|number_format(0, '', ' ') : '' }}#}
                                        {{ ecriture.credit ? ecriture.montant|number_format(0, '', ' ') : '' }}
                                    </td>
                                    <td data-label=\"{{ 'Débit'|trans }}\" class=\"text-right\">
                                        {#                                    {{ ecriture.debit ? ecriture.montant|number_format(0, '', ' ') : '' }}#}
                                        {#                                    {{ ecriture.credit ? ecriture.montant|number_format(0, '', ' ') : '' }}#}

                                    </td>
                                    {#                                <td data-label=\"{{ 'solde'|trans }}\"  class=\"text-center\">#}


                                    {#                                {% set montant2 = montant2 + debit.depense.montant %}#}
                                </tr>
                                <tr>
                                    <td data-label=\"{{ 'Date'|trans }}\" class=\"text-center\">
                                        {% if first == 0 %} {{ i }} {% set i = i + 1 %} {% endif %}
                                    </td>
                                    <td data-label=\"{{ 'Date'|trans }}\" class=\"text-center\">
                                        {% if first == 0 %}
                                            {{ ecriture.date|date('d/m/Y') }}
                                            {% set first = 1 %}
                                        {% endif %}
                                    </td>
                                    <td data-label=\"{{ 'Compte'|trans }}\" class=\"credit\">
                                        <a href=\"{{ path('finance_journal_compte',{ 'compte': ecriture.comptedebit  }) }}\">
                                        {#                                    {{ ecriture.debit ? ecriture.comptecredit : '' }}#}
                                        {{ ecriture.credit ? ecriture.comptedebit~\" - \"~ ecriture.libellecomptedebit : '' }}
                                        </a>
                                    </td>
{#                                    <td data-label=\"{{ 'Référence'|trans }}\">#}

{#                                    </td>#}
                                    <td data-label=\"{{ 'Libellé'|trans }}\">
                                        {#                                    {{ ecriture.debit ? ecriture.libelle : '' }}#}
                                        {{ ecriture.credit ? ecriture.libelle : '' }}

                                    </td>
                                    <td data-label=\"{{ 'Crédit'|trans }}\" class=\"text-right\">
                                        {#                                                                        {{ ecriture.debit ? ecriture.montant|number_format(0, '', ' ') : '' }}#}
                                        {#                                    {{ ecriture.credit ? ecriture.montant|number_format(0, '', ' ') : '' }}#}
                                    </td>
                                    <td data-label=\"{{ 'Débit'|trans }}\" class=\"text-right\">
                                        {#                                    {{ ecriture.debit ? ecriture.montant|number_format(0, '', ' ') : '' }}#}
                                        {{ ecriture.credit ? ecriture.montant|number_format(0, '', ' ') : '' }}

                                    </td>
                                    {#                                <td data-label=\"{{ 'solde'|trans }}\"  class=\"text-center\">#}


                                    {#                                {% set montant2 = montant2 + debit.depense.montant %}#}
                                </tr>
                            {% else %}
                                {% if ecriture.debit.transfert is not null %}
                                    {% set transfert = 1 %}
                                {% endif %}
                                <tr>
                                    <td data-label=\"{{ 'Date'|trans }}\" class=\"text-center\">
                                        {% if first == 0 %} {{ i }} {% set i = i + 1 %} {% endif %}
                                    </td>
                                    <td data-label=\"{{ 'Date'|trans }}\" class=\"text-center\">
                                        {% if first == 0 %}
                                            {{ ecriture.date|date('d/m/Y') }}
                                            {% set first = 1 %}
                                        {% endif %}
                                    </td>
                                    <td data-label=\"{{ 'Débit'|trans }}\" class=\"credit\">
                                        <a href=\"{{ path('finance_journal_compte',{ 'compte': ecriture.comptecredit  }) }}\">

                                            {{ ecriture.debit ? ecriture.comptecredit~\" - \"~ ecriture.libellecomptecredit : '' }}
                                            {#                                    {{ ecriture.credit ? ecriture.comptecredit : '' }}#}
                                        </a>
                                    </td>
{#                                    <td data-label=\"{{ 'Référence'|trans }}\">#}

{#                                    </td>#}
                                    <td data-label=\"{{ 'Libellé'|trans }}\">
                                                                                {{ ecriture.debit ? ecriture.libelle : '' }}
                                        {#                                    {{ ecriture.credit ? ecriture.libelle : '' }}#}

                                    </td>
                                    <td data-label=\"{{ 'Crédit'|trans }}\" class=\"text-right\">
                                        {{ ecriture.debit ? ecriture.montant|number_format(0, '', ' ') : '' }}
                                        {#                                    {{ ecriture.credit ? ecriture.montant|number_format(0, '', ' ') : '' }}#}
                                    </td>
                                    <td data-label=\"{{ 'Débit'|trans }}\" class=\"text-right\">
                                        {#                                    {{ ecriture.debit ? ecriture.montant|number_format(0, '', ' ') : '' }}#}
                                        {#                                    {{ ecriture.credit ? ecriture.montant|number_format(0, '', ' ') : '' }}#}

                                    </td>
                                    {#                                <td data-label=\"{{ 'solde'|trans }}\"  class=\"text-center\">#}


                                    {#                                {% set montant2 = montant2 + debit.depense.montant %}#}
                                </tr>
                                <tr>
                                    <td data-label=\"{{ 'Date'|trans }}\" class=\"text-center\">
                                        {% if first == 0 %} {{ i }} {% set i = i + 1 %} {% endif %}
                                    </td>
                                    <td data-label=\"{{ 'Date'|trans }}\" class=\"text-center\">
                                        {% if first == 0 %}
                                            {{ ecriture.date|date('d/m/Y') }}
                                            {% set first = 1 %}
                                        {% endif %}
                                    </td>
                                    <td data-label=\"{{ 'Compte'|trans }}\" class=\"credit\">
                                        <a href=\"{{ path('finance_journal_compte',{ 'compte': ecriture.comptedebit  }) }}\">
                                        {{ ecriture.debit ? ecriture.comptedebit ~\" - \"~ ecriture.libellecomptedebit : '' }}
                                        {#                                    {{ ecriture.credit ? ecriture.comptedebit : '' }}#}
                                        </a>

                                    </td>
{#                                    <td data-label=\"{{ 'Référence'|trans }}\">#}

{#                                    </td>#}
                                    <td data-label=\"{{ 'Libellé'|trans }}\">
                                        {{ ecriture.debit ? ecriture.libelle : '' }}
                                        {#                                    {{ ecriture.credit ? ecriture.libelle : '' }}#}

                                    </td>
                                    <td data-label=\"{{ 'Crédit'|trans }}\" class=\"text-right\">
                                        {#                                                                        {{ ecriture.debit ? ecriture.montant|number_format(0, '', ' ') : '' }}#}
                                        {#                                    {{ ecriture.credit ? ecriture.montant|number_format(0, '', ' ') : '' }}#}
                                    </td>
                                    <td data-label=\"{{ 'Débit'|trans }}\" class=\"text-right\">
                                        {{ ecriture.debit ? ecriture.montant|number_format(0, '', ' ') : '' }}
                                        {#                                    {{ ecriture.credit ? ecriture.montant|number_format(0, '', ' ') : '' }}#}

                                    </td>
                                    {#                                <td data-label=\"{{ 'solde'|trans }}\"  class=\"text-center\">#}


                                    {#                                {% set montant2 = montant2 + debit.depense.montant %}#}
                                </tr>
                            {% endif %}
                        {% else %}
                            {% set transfert = 0 %}
                        {% endif %}
                    {% else %}
                        <tr>
                            <td data-label=\"colspan\" colspan=\"7\">
                                {{ 'Aucune transaction'|trans }}
                            </td>
                        </tr>

                    {% endfor %}
                    </tbody>
                </table>
            </div>
            {#<div class=\"card-footer bg-success-light bt-success\">
                <h4 class=\"text-success text-bold\">
                    {{ 'Total transfert'|trans }} :
                    <span class=\"text-nowrap\">
                    {{ montant2|number_format(0, '', ' ') }} F CFA
                </span>
                </h4>
            </div>#}
        </div>
    </div>

{% endblock %}
", "finance/index.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\finance\\index.html.twig");
    }
}
