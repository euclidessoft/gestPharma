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
class __TwigTemplate_3d3fdfd4d836c23e84ae32214136ce62 extends Template
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
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "scripts/employenew.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\scripts\\employenew.html.twig");
    }
}
