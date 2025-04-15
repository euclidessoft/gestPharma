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

/* security/security/login.html.twig */
class __TwigTemplate_7762c972158f7930e250f89fd47caac8 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "security.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("security.html.twig", "security/security/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Connexion"), "html", null, true);
        yield " - GNT Pharma ";
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "
    <div class=\"col-10 offset-1\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["change"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            yield "            <div class=\"alert alert-success alert-dismissible fade show radius-10 shadow-black\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
                    &times;
                </button>
                ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["notice"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            yield "            <div class=\"alert alert-danger alert-dismissible fade show radius-10 shadow-black\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
                    &times;
                </button>
                ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "
        ";
        // line 23
        if (($context["error"] ?? null)) {
            // line 24
            yield "            <div class=\"alert alert-danger alert-dismissible fade show radius-10 shadow-black\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
                    &times;
                </button>
                ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Adresse email ou mot de passe incorrecte"), "html", null, true);
            yield "
            </div>
        ";
        }
        // line 31
        yield "    </div>

    <form action=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        yield "\" method=\"POST\" class=\"form-signin\" id=\"form\">
        <div class=\"form-group mb-4\">
            <div class=\"input-group\">
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">
                        <i class=\"fa fa-at\"></i>
                    </span>
                </div>
                <input type=\"text\" value=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["last_username"] ?? null), "html", null, true);
        yield "\" name=\"username\" id=\"inputUsername\" class=\"form-control\" autocomplete=\"username\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Adresse email"), "html", null, true);
        yield "\" required autofocus>
            </div>
        </div>
        <div class=\"form-group mb-4\">
            <div class=\"input-group\">
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">
                        <i class=\"fa fa-lock\"></i>
                    </span>
                </div>
                <input type=\"password\" name=\"password\"  placeholder=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mot de passe"), "html", null, true);
        yield "\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
            </div>
        </div>
        <input type=\"hidden\" name=\"_csrf_token\"
               value=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\"
        >
        <div class=\"checkbox\">
            <label>
                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
            </label>
        </div>
        <div class=\"form-group mb-2\">
            <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_forgotten_password");
        yield "\">
                ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mot de passe oublié"), "html", null, true);
        yield "
            </a>
        </div>
        <div class=\"form-group\">
            <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Accueil");
        yield "\">
                ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Retour au site"), "html", null, true);
        yield "
            </a>
        </div>
        <button id=\"valider\" type=\"button\" onclick=\"sub()\" class=\"btn btn-shadow btn-green pl-4 pr-4\">
            ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Se connecter"), "html", null, true);
        yield "
            <i class=\"fa fa-sign-in-alt\"></i>
        </button>
    </form>
    <script>
            document.addEventListener('keydown', function(event) {
                if (event.key === 'Enter') {
                    sub();
                }
            });
        function sub() {
            if(\$(\"#_password\").val() != '' && \$(\"#_username\").val() != '') {
                \$(\"#valider\").html(\"<i class='fa-solid fa-spinner fa-spin-pulse fa-lg'></i>\");
                \$(\"#form\").submit();
            }
            else{
                alert(\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("renseignez les champs"), "html", null, true);
        yield "\");
            }
        }
    </script>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/security/login.html.twig";
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
        return array (  221 => 89,  202 => 73,  195 => 69,  191 => 68,  184 => 64,  180 => 63,  169 => 55,  162 => 51,  147 => 41,  136 => 33,  132 => 31,  126 => 28,  120 => 24,  118 => 23,  115 => 22,  106 => 19,  100 => 15,  95 => 14,  86 => 11,  80 => 7,  76 => 6,  72 => 4,  65 => 3,  52 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "security/security/login.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\security\\security\\login.html.twig");
    }
}
