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
class __TwigTemplate_905267c69962116b760b12c53e3861c9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/security/login.html.twig"));

        $this->parent = $this->loadTemplate("security.html.twig", "security/security/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Connexion"), "html", null, true);
        yield " - GNT Pharma ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
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

        // line 4
        yield "
    <div class=\"col-10 offset-1\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", ["change"], "method", false, false, false, 6));
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", ["notice"], "method", false, false, false, 14));
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
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 23, $this->source); })())) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 41, $this->source); })()), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  251 => 89,  232 => 73,  225 => 69,  221 => 68,  214 => 64,  210 => 63,  199 => 55,  192 => 51,  177 => 41,  166 => 33,  162 => 31,  156 => 28,  150 => 24,  148 => 23,  145 => 22,  136 => 19,  130 => 15,  125 => 14,  116 => 11,  110 => 7,  106 => 6,  102 => 4,  89 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'security.html.twig' %}
{% block title %} {{ 'Connexion'|trans }} - GNT Pharma {% endblock %}
{% block body %}

    <div class=\"col-10 offset-1\">
        {% for message in app.flashes('change') %}
            <div class=\"alert alert-success alert-dismissible fade show radius-10 shadow-black\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
                    &times;
                </button>
                {{ message|trans }}
            </div>
        {% endfor %}
        {% for message in app.flashes('notice') %}
            <div class=\"alert alert-danger alert-dismissible fade show radius-10 shadow-black\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
                    &times;
                </button>
                {{ message|trans }}
            </div>
        {% endfor %}

        {% if error %}
            <div class=\"alert alert-danger alert-dismissible fade show radius-10 shadow-black\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
                    &times;
                </button>
                {{ 'Adresse email ou mot de passe incorrecte'|trans }}
            </div>
        {% endif %}
    </div>

    <form action=\"{{ path('security_login') }}\" method=\"POST\" class=\"form-signin\" id=\"form\">
        <div class=\"form-group mb-4\">
            <div class=\"input-group\">
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">
                        <i class=\"fa fa-at\"></i>
                    </span>
                </div>
                <input type=\"text\" value=\"{{ last_username }}\" name=\"username\" id=\"inputUsername\" class=\"form-control\" autocomplete=\"username\" placeholder=\"{{ 'Adresse email'|trans }}\" required autofocus>
            </div>
        </div>
        <div class=\"form-group mb-4\">
            <div class=\"input-group\">
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">
                        <i class=\"fa fa-lock\"></i>
                    </span>
                </div>
                <input type=\"password\" name=\"password\"  placeholder=\"{{ 'Mot de passe'|trans }}\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
            </div>
        </div>
        <input type=\"hidden\" name=\"_csrf_token\"
               value=\"{{ csrf_token('authenticate') }}\"
        >
        <div class=\"checkbox\">
            <label>
                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
            </label>
        </div>
        <div class=\"form-group mb-2\">
            <a href=\"{{ path('security_forgotten_password') }}\">
                {{ 'Mot de passe oublié'|trans }}
            </a>
        </div>
        <div class=\"form-group\">
            <a href=\"{{ path('Accueil') }}\">
                {{ 'Retour au site'|trans }}
            </a>
        </div>
        <button id=\"valider\" type=\"button\" onclick=\"sub()\" class=\"btn btn-shadow btn-green pl-4 pr-4\">
            {{ 'Se connecter'|trans }}
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
                alert(\"{{ 'renseignez les champs'|trans }}\");
            }
        }
    </script>

{% endblock %}
", "security/security/login.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\security\\security\\login.html.twig");
    }
}
