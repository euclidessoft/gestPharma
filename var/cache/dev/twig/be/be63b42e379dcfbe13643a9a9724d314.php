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

/* scripts/employenew.html.twig */
class __TwigTemplate_1bc976fe4beda00bcc4911a858d89f08 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scripts/employenew.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scripts/employenew.html.twig"));

        // line 1
        yield "// Ajouter une remarque
function autretext() {
    if (\$('#autre').is(':checked')) {
        \$('#employe_remark').show();
    } else {
        \$('#employe_remark').hide().val('');
    }
}


//enregistrer numero passeport
function Passeport() {
    if (\$('#mecquebundle_pelerin_numpassport').val() != \"\") {
        \$('#Passeport').show();
    } else {
        \$('#Passeport').hide();
        \$('#mecquebundle_pelerin_numpassport').val('');
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "scripts/employenew.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("// Ajouter une remarque
function autretext() {
    if (\$('#autre').is(':checked')) {
        \$('#employe_remark').show();
    } else {
        \$('#employe_remark').hide().val('');
    }
}


//enregistrer numero passeport
function Passeport() {
    if (\$('#mecquebundle_pelerin_numpassport').val() != \"\") {
        \$('#Passeport').show();
    } else {
        \$('#Passeport').hide();
        \$('#mecquebundle_pelerin_numpassport').val('');
    }
}
", "scripts/employenew.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\scripts\\employenew.html.twig");
    }
}
