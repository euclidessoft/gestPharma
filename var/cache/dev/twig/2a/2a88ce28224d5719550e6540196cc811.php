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

/* security/security/boutons.html.twig */
class __TwigTemplate_8cb48b834ab098382a20933877d7be75 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/security/boutons.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/security/boutons.html.twig"));

        // line 1
        yield "<div class=\"col-lg-12 mt-5\">
    <a id=\"modif\" onclick=\"load('modif')\" href=\"";
        // line 2
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_profile_edit");
        yield "\" class=\"btn btn-normal btn-success-light mb-2 mr-2\">
        <i class=\"fa fa-edit\"></i>
        ";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modifier mon profil"), "html", null, true);
        yield "
    </a>

    <a id=\"changepass\" onclick=\"load('changepass')\" href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_change_password");
        yield "\" class=\"btn btn-outline-danger mb-2 mr-2\">
        <i class=\"fa fa-lock\"></i>
        ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Changer mot de passe"), "html", null, true);
        yield "
    </a>
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
        return "security/security/boutons.html.twig";
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
        return array (  67 => 9,  62 => 7,  56 => 4,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"col-lg-12 mt-5\">
    <a id=\"modif\" onclick=\"load('modif')\" href=\"{{ path('security_profile_edit') }}\" class=\"btn btn-normal btn-success-light mb-2 mr-2\">
        <i class=\"fa fa-edit\"></i>
        {{ 'Modifier mon profil'|trans }}
    </a>

    <a id=\"changepass\" onclick=\"load('changepass')\" href=\"{{ path('security_change_password') }}\" class=\"btn btn-outline-danger mb-2 mr-2\">
        <i class=\"fa fa-lock\"></i>
        {{ 'Changer mot de passe'|trans }}
    </a>
</div>", "security/security/boutons.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\security\\security\\boutons.html.twig");
    }
}
