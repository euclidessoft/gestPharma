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

/* employe/new.html.twig */
class __TwigTemplate_decfa7733ac852218a2a4e6833a31381 extends Template
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
            'employe_new' => [$this, 'block_employe_new'],
            'body' => [$this, 'block_body'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 8
        return $this->loadTemplate((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) ? ("admin.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RH")) ? ("rh.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FINANCE")) ? ("finance.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STOCK")) ? ("stock.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_LIVREUR")) ? ("livreur.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYER")) ? ("employe.html.twig") : ("layout.html.twig")))))))))))), "employe/new.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nouvel employé "), "html", null, true);
        yield " - GNT Pharma ";
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_administration(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "active";
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_employe(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "active";
        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_employe_new(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "active";
        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 15
        yield "    <div class=\"container-fluid mt-4 fond-7 pb-5 pt-3 px-5\">
        <h3 class=\"mb-5\">
            <i class=\"fa-solid fa-landmark\"></i><i class=\"fa fa-plus mr-2\"></i>
            ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nouvel employé"), "html", null, true);
        yield "
        </h3>
        <h6 class=\"mt-4 text-danger\">
            ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Les champs marqués par * sont obligatoires"), "html", null, true);
        yield "
        </h6>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["notice"], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 24
            yield "            <div class=\"alert alert-danger alert-dismissible fade show radius-10 shadow-black\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
                    &times;
                </button>
                ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "
            ";
        // line 32
        yield Twig\Extension\CoreExtension::include($this->env, $context, "employe/_form.html.twig");
        yield "

    </div>
    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        yield "
    <div class=\"container-fluid mt-4 mb-5 pt-3 pb-2 fond-7\">
        <div class=\"centrer\">
            <button type=\"submit\" class=\"btn btn-shadow btn-green btn-normal mb-2 mr-3\" id=\"send\">
                <i class=\"fa fa-save\"></i>
                ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enregistrer"), "html", null, true);
        yield "
            </button>
            <button type=\"reset\" class=\"btn btn-shadow btn-danger btn-normal mb-2\">
                <i class=\"fa fa-delete-left\"></i>
                ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Effacer"), "html", null, true);
        yield "
            </button>
            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        yield "
            ";
        // line 47
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
        </div>
    </div>

    ";
        // line 51
        yield from $this->unwrap()->yieldBlock('script', $context, $blocks);
        // line 58
        yield "
";
        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 52
        yield "        <script>

            ";
        // line 54
        yield Twig\Extension\CoreExtension::include($this->env, $context, "scripts/employenew.html.twig");
        yield "

        </script>
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "employe/new.html.twig";
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
        return array (  202 => 54,  198 => 52,  191 => 51,  185 => 58,  183 => 51,  176 => 47,  172 => 46,  167 => 44,  160 => 40,  152 => 35,  146 => 32,  143 => 31,  134 => 28,  128 => 24,  124 => 23,  119 => 21,  113 => 18,  108 => 15,  101 => 14,  90 => 13,  79 => 12,  68 => 11,  55 => 10,  45 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "employe/new.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\employe\\new.html.twig");
    }
}
