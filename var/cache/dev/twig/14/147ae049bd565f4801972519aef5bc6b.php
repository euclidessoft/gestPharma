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

/* finance/rapport_journalier.html.twig */
class __TwigTemplate_cfe7d4581803936880a38e53dd13da1a extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "finance/rapport_journalier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "finance/rapport_journalier.html.twig"));

        // line 1
        yield "<div class=\"modal fade mt-5\" id=\"rapport\" role=\"dialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content radius-10\">
                <div class=\"modal-header bb-green\">
                    <h5 class=\"mt-3 text-center text-bold\">
                        ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Rapport journalière"), "html", null, true);
        yield "
                    </h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>

                <div class=\"modal-body\">
                    <h4 class=\"text-center text-bold text-dark mt-4\">
                        ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quelle rapport voulez-vous ?"), "html", null, true);
        yield "
                    </h4>
                    <div class=\"col-12 mt-5 mb-4\">
                        <div class=\"centrer\">
                            <div class=\"row\">
                                <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("finance_brouyard_caisse");
        yield "\"";
        yield ">
                                    <button type=\"button\"
                                            class=\"btn btn-shadow btn-normal btn-green mr-3\" ";
        // line 22
        yield ">
                                        &emsp;
                                        <i class=\"fa fa-cash-register fa-lg\"></i>
                                        ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Caisse"), "html", null, true);
        yield "
                                        &emsp;
                                    </button>
                                </a>
                                <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("finance_brouyard_banque");
        yield "\"";
        yield ">
                                    <button type=\"button\"
                                            class=\"btn btn-shadow btn-normal btn-primary mr-3\"";
        // line 31
        yield ">
                                        &emsp;
                                        <i class=\"fa fa-university fa-lg\"></i>
                                        ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Banque"), "html", null, true);
        yield "
                                        &emsp;
                                    </button>
                                </a>
                                <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("finance_brouyard");
        yield "\"";
        yield ">
                                    <button type=\"button\"
                                            class=\"btn btn-shadow btn-normal btn-success-light\"";
        // line 40
        yield ">
                                        &emsp;
                                        <i class=\"fa-solid fa-square-poll-vertical fa-lg\"></i>
                                        ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tous"), "html", null, true);
        yield "
                                        &emsp;
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "finance/rapport_journalier.html.twig";
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
        return array (  122 => 43,  117 => 40,  111 => 38,  104 => 34,  99 => 31,  93 => 29,  86 => 25,  81 => 22,  75 => 20,  67 => 15,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"modal fade mt-5\" id=\"rapport\" role=\"dialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content radius-10\">
                <div class=\"modal-header bb-green\">
                    <h5 class=\"mt-3 text-center text-bold\">
                        {{ 'Rapport journalière'|trans }}
                    </h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>

                <div class=\"modal-body\">
                    <h4 class=\"text-center text-bold text-dark mt-4\">
                        {{ 'Quelle rapport voulez-vous ?'|trans }}
                    </h4>
                    <div class=\"col-12 mt-5 mb-4\">
                        <div class=\"centrer\">
                            <div class=\"row\">
                                <a href=\"{{ path('finance_brouyard_caisse') }}\"{# target=\"_blank\"#}>
                                    <button type=\"button\"
                                            class=\"btn btn-shadow btn-normal btn-green mr-3\" {#onclick=\"window.location.reload();\"#}>
                                        &emsp;
                                        <i class=\"fa fa-cash-register fa-lg\"></i>
                                        {{ 'Caisse'|trans }}
                                        &emsp;
                                    </button>
                                </a>
                                <a href=\"{{ path('finance_brouyard_banque') }}\"{# target=\"_blank\"#}>
                                    <button type=\"button\"
                                            class=\"btn btn-shadow btn-normal btn-primary mr-3\"{# onclick=\"window.location.reload();\"#}>
                                        &emsp;
                                        <i class=\"fa fa-university fa-lg\"></i>
                                        {{ 'Banque'|trans }}
                                        &emsp;
                                    </button>
                                </a>
                                <a href=\"{{ path('finance_brouyard') }}\"{# target=\"_blank\"#}>
                                    <button type=\"button\"
                                            class=\"btn btn-shadow btn-normal btn-success-light\"{# onclick=\"window.location.reload();\"#}>
                                        &emsp;
                                        <i class=\"fa-solid fa-square-poll-vertical fa-lg\"></i>
                                        {{ 'Tous'|trans }}
                                        &emsp;
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>", "finance/rapport_journalier.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\finance\\rapport_journalier.html.twig");
    }
}
