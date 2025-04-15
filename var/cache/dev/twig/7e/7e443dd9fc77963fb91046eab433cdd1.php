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

/* security/security/changepassword.html.twig */
class __TwigTemplate_c8b09566228f09aebe1bad4b5deb846d extends Template
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
        return "client.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/security/changepassword.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/security/changepassword.html.twig"));

        $this->parent = $this->loadTemplate("client.html.twig", "security/security/changepassword.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Changement mot de passe"), "html", null, true);
        yield " - Hajjalbayt ";
        
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
        yield "<div class=\"container mt-5 mb-5 p-5 fond-7\">
    <h4 class=\"text-bold mb-5\">
        <i class=\"fa fa-user mr-2\"></i>
        ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Profil utilisateur"), "html", null, true);
        yield "
    </h4>
    <ul class=\"nav nav-tabs mb-4\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_profile");
        yield "\">
                ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Informations"), "html", null, true);
        yield "
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_profile_professionnelle");
        yield "\">
                ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Professionnelles"), "html", null, true);
        yield "
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_change_password");
        yield "\">
                ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Securite"), "html", null, true);
        yield "
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evaluation_suivi");
        yield "\">
                ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Discipline"), "html", null, true);
        yield "
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_bulletins");
        yield "\">
                ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Bulletins"), "html", null, true);
        yield "
            </a>
        </li>
    </ul>
    <h4 class=\"mt-4 mb-5 text-bold\">
        <i class=\"fa fa-lock\"></i>
        ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Changement mot de passe"), "html", null, true);
        yield "
    </h4>

    <div class=\"col-lg-8 offset-lg-2\">


        ";
        // line 44
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'form_start');
        yield "

        <div class=\"form-group mt-4\">
            ";
        // line 47
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'errors')) {
            // line 48
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'errors');
            yield "
            ";
        }
        // line 50
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "test", [], "any", false, false, false, 50), 'row', ["attr" => ["placeholder" => "Mot de passe actuel", "autofocus" => "autofocus"]]);
        yield "
        </div>
        <div class=\"form-group mt-4\">
            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "password", [], "any", false, false, false, 53), 'row', ["attr" => ["placeholder" => "Nouveau mot de passe"]]);
        yield "
        </div>
        <div class=\"form-group mt-4 mb-5\">
            ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "confirm", [], "any", false, false, false, 56), 'row', ["attr" => ["placeholder" => "Confirmer mot de passe"]]);
        yield "
        </div>


        <div class=\"col-md-8 mt-4 pt-3 fond-7 mb-4\">
            <div class=\"centrer\">
                <button type=\"submit\" class=\"btn btn-shadow btn-normal btn-success mb-2 mr-3\">
                    <i class=\"fa fa-save\"></i>
                    ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enregistrer"), "html", null, true);
        yield "
                </button>
                <a id=\"annule\" onclick=\"load('annule')\" href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_profile");
        yield "\"
                    class=\"btn btn-shadow btn-normal btn-success-light mb-2\">
                    <i class=\"fa fa-undo\"></i>
                    ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Annuler"), "html", null, true);
        yield "
                </a>
                ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'rest');
        yield "
                ";
        // line 72
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
        yield "
            </div>
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
        return "security/security/changepassword.html.twig";
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
        return array (  238 => 72,  234 => 71,  229 => 69,  223 => 66,  218 => 64,  207 => 56,  201 => 53,  194 => 50,  188 => 48,  186 => 47,  180 => 44,  171 => 38,  162 => 32,  158 => 31,  151 => 27,  147 => 26,  140 => 22,  136 => 21,  129 => 17,  125 => 16,  118 => 12,  114 => 11,  107 => 7,  102 => 4,  89 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'client.html.twig' %}
{% block title %} {{ 'Changement mot de passe'|trans }} - Hajjalbayt {% endblock %}
{% block body %}
<div class=\"container mt-5 mb-5 p-5 fond-7\">
    <h4 class=\"text-bold mb-5\">
        <i class=\"fa fa-user mr-2\"></i>
        {{ 'Profil utilisateur'|trans }}
    </h4>
    <ul class=\"nav nav-tabs mb-4\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('security_profile') }}\">
                {{'Informations'|trans }}
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('security_profile_professionnelle') }}\">
                {{'Professionnelles'|trans}}
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"{{ path('security_change_password') }}\">
                {{'Securite'|trans}}
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('evaluation_suivi') }}\">
                {{'Discipline'|trans}}
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('mes_bulletins') }}\">
                {{'Bulletins'|trans}}
            </a>
        </li>
    </ul>
    <h4 class=\"mt-4 mb-5 text-bold\">
        <i class=\"fa fa-lock\"></i>
        {{ 'Changement mot de passe'|trans }}
    </h4>

    <div class=\"col-lg-8 offset-lg-2\">


        {{ form_start(form) }}

        <div class=\"form-group mt-4\">
            {% if form_errors(form) %}
            {{ form_errors(form) }}
            {% endif %}
            {{ form_row(form.test, { 'attr' : { 'placeholder' : 'Mot de passe actuel', 'autofocus':'autofocus'}}) }}
        </div>
        <div class=\"form-group mt-4\">
            {{ form_row(form.password, { 'attr' : { 'placeholder' : 'Nouveau mot de passe'}}) }}
        </div>
        <div class=\"form-group mt-4 mb-5\">
            {{ form_row(form.confirm, { 'attr' : { 'placeholder' : 'Confirmer mot de passe'}}) }}
        </div>


        <div class=\"col-md-8 mt-4 pt-3 fond-7 mb-4\">
            <div class=\"centrer\">
                <button type=\"submit\" class=\"btn btn-shadow btn-normal btn-success mb-2 mr-3\">
                    <i class=\"fa fa-save\"></i>
                    {{ 'Enregistrer'|trans }}
                </button>
                <a id=\"annule\" onclick=\"load('annule')\" href=\"{{ path('security_profile') }}\"
                    class=\"btn btn-shadow btn-normal btn-success-light mb-2\">
                    <i class=\"fa fa-undo\"></i>
                    {{ 'Annuler'|trans }}
                </a>
                {{ form_rest(form) }}
                {{ form_end(form) }}
            </div>
        </div>
    </div>
</div>

{% endblock %}", "security/security/changepassword.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\security\\security\\changepassword.html.twig");
    }
}
