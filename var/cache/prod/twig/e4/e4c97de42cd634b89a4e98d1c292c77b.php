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

/* dashboard/rh.html.twig */
class __TwigTemplate_0399aed66ebd6a58cdcbf75ef6e1efd9 extends Template
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
            'officine' => [$this, 'block_officine'],
            'clients' => [$this, 'block_clients'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 8
        return $this->loadTemplate((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) ? ("admin.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RH")) ? ("rh.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FINANCE")) ? ("finance.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STOCK")) ? ("stock.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_LIVREUR")) ? ("livreur.html.twig") : ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYER")) ? ("employe.html.twig") : ("layout.html.twig")))))))))))), "dashboard/rh.html.twig", 8);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mon profile"), "html", null, true);
        yield " ";
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_officine(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "active";
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_clients(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "active";
        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
        yield "    ";
        // line 15
        yield "
    <div class=\"col-lg-7 mt-5 mb-5 p-5 fond-7\">
        <h3 class=\"text-bold\">
            <i class=\"fa fa-user mr-2\"></i>
            ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Profil Utilisateur"), "html", null, true);
        yield "
        </h3>
        <div class=\"row\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["notice"], "method", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            yield "                <div class=\"col-lg-12 mt-4 alert alert-success alert-dismissible fade show radius-10 shadow-black\"
                     role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                    ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "security/security/boutons.html.twig");
        yield "
            <div class=\"col-lg-3 mt-5 text-center\">
                <img src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/team_1.avif"), "html", null, true);
        yield "\" alt=\"\" class=\"w-100 img-fluid rounded\">
                ";
        // line 33
        yield "                <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar.jpg"), "html", null, true);
        yield "\" width=\"100\" alt=\"Photo\" class=\"rounded-circle\" />
                ";
        // line 35
        yield "                ";
        // line 36
        yield "                ";
        // line 37
        yield "                ";
        // line 38
        yield "            </div>
            <div class=\"col-lg-9 mt-5\">
                <div class=\"row\">
                    <div class=\"col-lg-3 text-right text-bold\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Prénom"), "html", null, true);
        yield "</div>
                    <div class=\"col-lg-9 ml-n4\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "prenom", [], "any", false, false, false, 42), "html", null, true);
        yield "</div>
                    <div class=\"col-lg-3 text-right text-bold\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nom"), "html", null, true);
        yield "</div>
                    <div class=\"col-lg-9 ml-n4\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "nom", [], "any", false, false, false, 44), "html", null, true);
        yield "</div>
                    <div class=\"col-lg-3 text-right text-bold\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Téléphone"), "html", null, true);
        yield "</div>
                    <div class=\"col-lg-9 ml-n4\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, false, 46), "html", null, true);
        yield "</div>
                    <div class=\"col-lg-3 text-right text-bold\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        yield "</div>
                    <div class=\"col-lg-9 ml-n4\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 48), "html", null, true);
        yield "</div>
                    <div class=\"col-lg-3 text-right text-bold\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Adresse"), "html", null, true);
        yield "</div>
                    <div class=\"col-lg-9 ml-n4\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "adresse", [], "any", false, false, false, 50), "html", null, true);
        yield "</div>
                </div>
            </div>
        </div>
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard/rh.html.twig";
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
        return array (  189 => 50,  185 => 49,  181 => 48,  177 => 47,  173 => 46,  169 => 45,  165 => 44,  161 => 43,  157 => 42,  153 => 41,  148 => 38,  146 => 37,  144 => 36,  142 => 35,  137 => 33,  133 => 31,  127 => 29,  118 => 26,  113 => 23,  109 => 22,  103 => 19,  97 => 15,  95 => 14,  88 => 13,  77 => 12,  66 => 11,  53 => 10,  43 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "dashboard/rh.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\dashboard\\rh.html.twig");
    }
}
