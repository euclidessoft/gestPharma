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

/* finance/brouyard_banque.html.twig */
class __TwigTemplate_a40a8252af29b93e4c4e5ab213cd0164 extends Template
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
        return $this->loadTemplate((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) ? ("admin.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RH")) ? ("rh.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FINANCE")) ? ("finance.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STOCK")) ? ("stock.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_LIVREUR")) ? ("livreur.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYER")) ? ("employe.html.twig") : ("layout.html.twig")))))))))))), "finance/brouyard_banque.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "finance/brouyard_banque.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "finance/brouyard_banque.html.twig"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Rapport journalier banque"), "html", null, true);
        yield " - GNT Pharma ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
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

    // line 12
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
        yield "    <div class=\"container\">
        <div class=\"container mt-4 mb-5 fond-7 pt-3 pb-3\">
            <div class=\"centrer\">
                <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("finance_brouyard_banque_print");
        yield "\" class=\"btn btn-success-light\">
                    <i class=\"fa fa-print\"></i>
                    ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("imprimer"), "html", null, true);
        yield "
                </a>
                <span id=\"exporter\"></span>
            </div>
        </div>
        <div class=\"card border-green shadow-black mt-5 mb-3 fond-5\">
            <div class=\"card-header bg-success-light bb-success\">
                <h5 class=\"text-success text-bold\">
                    <i class=\"fa-solid fa-chart-simple\"></i>
                    ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Rapport journalier banque"), "html", null, true);
        yield "
                </h5>
            </div>
            <div class=\"card-body\">
                <h4 class=\"text-success text-bold mb-4\">
                    ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Solde d'ouverture : "), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["ouverture"]) || array_key_exists("ouverture", $context) ? $context["ouverture"] : (function () { throw new RuntimeError('Variable "ouverture" does not exist.', 33, $this->source); })()), 0, "", " "), "html", null, true);
        yield "
                </h4>
                <table class=\"table table-success-light table-bordered table-hover table-striped\" id=\"liste\">
                    <thead>
                    <tr>
                        <th class=\"text-center\"> ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nº"), "html", null, true);
        yield "</th>
                        <th class=\"text-center\"> ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date"), "html", null, true);
        yield "</th>
                        <th>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Compte"), "html", null, true);
        yield "</th>
                        ";
        // line 42
        yield "                        <th>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Libellé"), "html", null, true);
        yield "</th>
                        <th class=\"text-center\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Débit"), "html", null, true);
        yield "</th>
                        <th class=\"text-center\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Crédit"), "html", null, true);
        yield "</th>
                        ";
        // line 46
        yield "                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 49
        $context["montant2"] = 0;
        // line 50
        yield "                    ";
        $context["i"] = 1;
        // line 51
        yield "                    ";
        $context["transfert"] = 0;
        // line 52
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ecritures"]) || array_key_exists("ecritures", $context) ? $context["ecritures"] : (function () { throw new RuntimeError('Variable "ecritures" does not exist.', 52, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ecriture"]) {
            // line 53
            yield "                        ";
            // line 54
            yield "                        ";
            // line 55
            yield "
                        ";
            // line 57
            yield "                        ";
            // line 58
            yield "                        ";
            // line 59
            yield "                        ";
            // line 60
            yield "                        ";
            // line 61
            yield "                        ";
            // line 62
            yield "                        ";
            // line 63
            yield "                        ";
            // line 64
            yield "                        ";
            // line 65
            yield "                        ";
            // line 66
            yield "                        ";
            // line 67
            yield "                        ";
            // line 68
            yield "                        ";
            // line 69
            yield "                        ";
            // line 70
            yield "                        ";
            // line 71
            yield "                        ";
            // line 72
            yield "                        ";
            // line 73
            yield "                        ";
            $context["first"] = 0;
            // line 74
            yield "                        ";
            // line 75
            yield "                        ";
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "credit", [], "any", false, false, false, 75))) {
                // line 76
                yield "                            ";
                if ( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "credit", [], "any", false, false, false, 76), "transfert", [], "any", false, false, false, 76))) {
                    // line 77
                    yield "                                ";
                    $context["transfert"] = 1;
                    // line 78
                    yield "                            ";
                }
                // line 79
                yield "                            <tr>
                                <td data-label=\"";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date"), "html", null, true);
                yield "\" class=\"text-center\">
                                    ";
                // line 81
                if (((isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 81, $this->source); })()) == 0)) {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 81, $this->source); })()), "html", null, true);
                    yield " ";
                    $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 81, $this->source); })()) + 1);
                    yield " ";
                }
                // line 82
                yield "                                </td>
                                <td data-label=\"";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date"), "html", null, true);
                yield "\" class=\"text-center\">
                                    ";
                // line 84
                if (((isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 84, $this->source); })()) == 0)) {
                    // line 85
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "date", [], "any", false, false, false, 85), "d/m/Y"), "html", null, true);
                    yield "
                                        ";
                    // line 86
                    $context["first"] = 1;
                    // line 87
                    yield "                                    ";
                }
                // line 88
                yield "                                </td>
                                <td data-label=\"";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Compte"), "html", null, true);
                yield "\" class=\"credit\">
                                    ";
                // line 91
                yield "                                    ";
                // line 92
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "comptedebit", [], "any", false, false, false, 92), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "libellecomptedebit", [], "any", false, false, false, 92), "html", null, true);
                yield "
                                    ";
                // line 94
                yield "                                    ";
                // line 95
                yield "                                    ";
                // line 96
                yield "                                </td>
                                ";
                // line 98
                yield "
                                ";
                // line 100
                yield "                                <td data-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Libellé"), "html", null, true);
                yield "\">
                                    ";
                // line 102
                yield "                                    ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "credit", [], "any", false, false, false, 102)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "libelle", [], "any", false, false, false, 102), "html", null, true)) : (""));
                yield "

                                </td>
                                <td data-label=\"";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Crédit"), "html", null, true);
                yield "\" class=\"text-right\">
                                    ";
                // line 107
                yield "                                    ";
                // line 108
                yield "                                    ";
                // line 109
                yield "                                </td>
                                <td data-label=\"";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Débit"), "html", null, true);
                yield "\" class=\"text-right\">
                                    ";
                // line 112
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "montant", [], "any", false, false, false, 112), 0, "", " "), "html", null, true);
                yield "
                                    ";
                // line 114
                yield "                                </td>
                                <!-- <td data-label=\"";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("solde"), "html", null, true);
                yield "\" class=\"text-center\">


";
                // line 119
                yield "                </td> -->
                            </tr>
                        ";
            } else {
                // line 122
                yield "                            ";
                if ( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "debit", [], "any", false, false, false, 122), "transfert", [], "any", false, false, false, 122))) {
                    // line 123
                    yield "                                ";
                    $context["transfert"] = 1;
                    // line 124
                    yield "                            ";
                }
                // line 125
                yield "                            <tr>
                                <td data-label=\"";
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date"), "html", null, true);
                yield "\" class=\"text-center\">
                                    ";
                // line 127
                if (((isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 127, $this->source); })()) == 0)) {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 127, $this->source); })()), "html", null, true);
                    yield " ";
                    $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 127, $this->source); })()) + 1);
                    yield " ";
                }
                // line 128
                yield "                                </td>
                                <td data-label=\"";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date"), "html", null, true);
                yield "\" class=\"text-center\">
                                    ";
                // line 130
                if (((isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 130, $this->source); })()) == 0)) {
                    // line 131
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "date", [], "any", false, false, false, 131), "d/m/Y"), "html", null, true);
                    yield "
                                        ";
                    // line 132
                    $context["first"] = 1;
                    // line 133
                    yield "                                    ";
                }
                // line 134
                yield "                                </td>

                                <td data-label=\"";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Compte"), "html", null, true);
                yield "\" class=\"credit\">
                                    ";
                // line 138
                yield "                                    ";
                // line 139
                yield "                                    ";
                // line 140
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "comptecredit", [], "any", false, false, false, 140), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "libellecomptecredit", [], "any", false, false, false, 140), "html", null, true);
                yield "
                                    ";
                // line 142
                yield "                                    ";
                // line 143
                yield "

                                </td>
                                ";
                // line 147
                yield "
                                ";
                // line 149
                yield "                                <td data-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Libellé"), "html", null, true);
                yield "\">
                                    ";
                // line 150
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "debit", [], "any", false, false, false, 150)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "libelle", [], "any", false, false, false, 150), "html", null, true)) : (""));
                yield "
                                    ";
                // line 152
                yield "
                                </td>
                                <td data-label=\"";
                // line 154
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Crédit"), "html", null, true);
                yield "\" class=\"text-right\">
                                    ";
                // line 156
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["ecriture"], "montant", [], "any", false, false, false, 156), 0, "", " "), "html", null, true);
                yield "
                                    ";
                // line 158
                yield "                                </td>
                                <td data-label=\"";
                // line 159
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Débit"), "html", null, true);
                yield "\" class=\"text-right\">
                                    ";
                // line 161
                yield "                                    ";
                // line 162
                yield "                                    ";
                // line 163
                yield "
                                </td>
                                <!-- <td data-label=\"";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("solde"), "html", null, true);
                yield "\" class=\"text-center\">


";
                // line 169
                yield "                </td> -->
                            </tr>
                        ";
            }
            // line 172
            yield "                        ";
            // line 173
            yield "                        ";
            // line 174
            yield "                        ";
            // line 175
            yield "                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 176
            yield "                        <tr>
                            <td data-label=\"colspan\" colspan=\"7\">
                                ";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Aucune transaction"), "html", null, true);
            yield "
                            </td>
                        </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ecriture'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        yield "                    </tbody>
                </table>
            </div>
            <div class=\"card-footer bg-success-light bt-success\">
                <h4 class=\"text-success text-bold\">
                    ";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Solde"), "html", null, true);
        yield " :
                    <span class=\"text-nowrap\">
                    ";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["banque"]) || array_key_exists("banque", $context) ? $context["banque"] : (function () { throw new RuntimeError('Variable "banque" does not exist.', 190, $this->source); })()), 0, "", " "), "html", null, true);
        yield " F CFA
                </span>
                </h4>
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
        return "finance/brouyard_banque.html.twig";
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
        return array (  553 => 190,  548 => 188,  541 => 183,  530 => 178,  526 => 176,  521 => 175,  519 => 174,  517 => 173,  515 => 172,  510 => 169,  504 => 165,  500 => 163,  498 => 162,  496 => 161,  492 => 159,  489 => 158,  484 => 156,  480 => 154,  476 => 152,  472 => 150,  467 => 149,  464 => 147,  459 => 143,  457 => 142,  450 => 140,  448 => 139,  446 => 138,  442 => 136,  438 => 134,  435 => 133,  433 => 132,  428 => 131,  426 => 130,  422 => 129,  419 => 128,  411 => 127,  407 => 126,  404 => 125,  401 => 124,  398 => 123,  395 => 122,  390 => 119,  384 => 115,  381 => 114,  376 => 112,  372 => 110,  369 => 109,  367 => 108,  365 => 107,  361 => 105,  354 => 102,  349 => 100,  346 => 98,  343 => 96,  341 => 95,  339 => 94,  332 => 92,  330 => 91,  326 => 89,  323 => 88,  320 => 87,  318 => 86,  313 => 85,  311 => 84,  307 => 83,  304 => 82,  296 => 81,  292 => 80,  289 => 79,  286 => 78,  283 => 77,  280 => 76,  277 => 75,  275 => 74,  272 => 73,  270 => 72,  268 => 71,  266 => 70,  264 => 69,  262 => 68,  260 => 67,  258 => 66,  256 => 65,  254 => 64,  252 => 63,  250 => 62,  248 => 61,  246 => 60,  244 => 59,  242 => 58,  240 => 57,  237 => 55,  235 => 54,  233 => 53,  227 => 52,  224 => 51,  221 => 50,  219 => 49,  214 => 46,  210 => 44,  206 => 43,  201 => 42,  197 => 40,  193 => 39,  189 => 38,  179 => 33,  171 => 28,  159 => 19,  154 => 17,  149 => 14,  136 => 13,  113 => 12,  90 => 11,  65 => 10,  43 => 8,);
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
{% block title %} {{ \"Rapport journalier banque\"|trans }} - GNT Pharma {% endblock %}
{% block finance %}active{% endblock %}
{% block journal %}active{% endblock %}
{% block body %}
    <div class=\"container\">
        <div class=\"container mt-4 mb-5 fond-7 pt-3 pb-3\">
            <div class=\"centrer\">
                <a href=\"{{ path('finance_brouyard_banque_print') }}\" class=\"btn btn-success-light\">
                    <i class=\"fa fa-print\"></i>
                    {{ 'imprimer'|trans }}
                </a>
                <span id=\"exporter\"></span>
            </div>
        </div>
        <div class=\"card border-green shadow-black mt-5 mb-3 fond-5\">
            <div class=\"card-header bg-success-light bb-success\">
                <h5 class=\"text-success text-bold\">
                    <i class=\"fa-solid fa-chart-simple\"></i>
                    {{ 'Rapport journalier banque'|trans }}
                </h5>
            </div>
            <div class=\"card-body\">
                <h4 class=\"text-success text-bold mb-4\">
                    {{ 'Solde d\\'ouverture : '|trans }} {{ouverture|number_format(0, '', ' ') }}
                </h4>
                <table class=\"table table-success-light table-bordered table-hover table-striped\" id=\"liste\">
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
                        {#                calcule solde#}
                        {#                        {% if ecriture.credit is not null %}#}

                        {#                            {% if ecriture.comptecredit == compte and ecriture.credit.transfert is null %}#}
                        {#                                {% set solde = solde + ecriture.montant %}#}
                        {#                                {% set credit = credit + ecriture.montant %}#}
                        {#                            {% else %}#}
                        {#                                {% set solde = solde - ecriture.montant %}#}
                        {#                                {% set debit = debit + ecriture.montant %}#}
                        {#                            {% endif %}#}
                        {#                        {% else %}#}
                        {#                            {% if ecriture.comptecredit == compte and ecriture.debit.transfert is not null %}#}
                        {#                                {% set solde = solde + ecriture.montant %}#}
                        {#                                {% set credit = credit + ecriture.montant %}#}
                        {#                            {% else %}#}
                        {#                                {% set solde = solde - ecriture.montant %}#}
                        {#                                {% set debit = debit + ecriture.montant %}#}
                        {#                            {% endif %}#}
                        {#                        {% endif %}#}
                        {#                fin calcule#}
                        {% set first = 0 %}
                        {#                        {% if transfert == 0 %}#}
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
                                <td data-label=\"{{ 'Compte'|trans }}\" class=\"credit\">
                                    {#                                    {{ ecriture.debit ? ecriture.comptecredit : '' }} #}
                                    {#                                        {% if ecriture.comptedebit != compte %}#}
                                    {{ ecriture.comptedebit }} - {{ ecriture.libellecomptedebit }}
                                    {#                                        {% else %}#}
                                    {#                                            {{ ecriture.comptecredit }} - {{ ecriture.libellecomptecredit }}#}
                                    {#                                        {% endif %}#}
                                </td>
                                {#                <td data-label=\"{{ 'Référence'|trans }}\">#}

                                {#                </td>#}
                                <td data-label=\"{{ 'Libellé'|trans }}\">
                                    {#                                    {{ ecriture.debit ? ecriture.libelle : '' }}#}
                                    {{ ecriture.credit ? ecriture.libelle : '' }}

                                </td>
                                <td data-label=\"{{ 'Crédit'|trans }}\" class=\"text-right\">
                                    {#                                        {% if ecriture.comptecredit != compte %}#}
                                    {#                                            {{ ecriture.montant|number_format(0, '', ' ') }}#}
                                    {#                                        {% endif %}#}
                                </td>
                                <td data-label=\"{{ 'Débit'|trans }}\" class=\"text-right\">
                                    {#                                        {% if ecriture.comptedebit != compte %}#}
                                    {{ ecriture.montant|number_format(0, '', ' ') }}
                                    {#                                        {% endif %}#}
                                </td>
                                <!-- <td data-label=\"{{ 'solde'|trans }}\" class=\"text-center\">


{#                    {{ solde|number_format(0, '', ' ') }}#}
                </td> -->
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

                                <td data-label=\"{{ 'Compte'|trans }}\" class=\"credit\">
                                    {#                                        {% if ecriture.comptedebit != compte %}#}
                                    {#                                            {{ ecriture.comptedebit }} - {{ ecriture.libellecomptedebit }}#}
                                    {#                                        {% else %}#}
                                    {{ ecriture.comptecredit }} - {{ ecriture.libellecomptecredit }}
                                    {#                                        {% endif %}#}
                                    {#                                    {{ ecriture.credit ? ecriture.comptedebit : '' }}#}


                                </td>
                                {#                <td data-label=\"{{ 'Référence'|trans }}\">#}

                                {#                </td>#}
                                <td data-label=\"{{ 'Libellé'|trans }}\">
                                    {{ ecriture.debit ? ecriture.libelle : '' }}
                                    {#                                    {{ ecriture.credit ? ecriture.libelle : '' }}#}

                                </td>
                                <td data-label=\"{{ 'Crédit'|trans }}\" class=\"text-right\">
                                    {#                                        {% if ecriture.comptecredit != compte %}#}
                                    {{ ecriture.montant|number_format(0, '', ' ') }}
                                    {#                                        {% endif %}#}
                                </td>
                                <td data-label=\"{{ 'Débit'|trans }}\" class=\"text-right\">
                                    {#                                        {% if ecriture.comptedebit != compte %}#}
                                    {#                                            {{ ecriture.montant|number_format(0, '', ' ') }}#}
                                    {#                                        {% endif %}#}

                                </td>
                                <!-- <td data-label=\"{{ 'solde'|trans }}\" class=\"text-center\">


{#                                    {{ solde|number_format(0, '', ' ') }}#}
                </td> -->
                            </tr>
                        {% endif %}
                        {#                        {% else %}#}
                        {#                            {% set transfert = 0 %}#}
                        {#                        {% endif %}#}
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
            <div class=\"card-footer bg-success-light bt-success\">
                <h4 class=\"text-success text-bold\">
                    {{ 'Solde'|trans }} :
                    <span class=\"text-nowrap\">
                    {{ (banque)|number_format(0, '', ' ') }} F CFA
                </span>
                </h4>
            </div>
        </div>
    </div>
{% endblock %}", "finance/brouyard_banque.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\finance\\brouyard_banque.html.twig");
    }
}
