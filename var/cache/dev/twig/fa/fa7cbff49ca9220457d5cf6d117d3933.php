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

/* security/security/userform.html.twig */
class __TwigTemplate_f621ad6a2b6559f995ce0ffa7627aff2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/security/userform.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/security/userform.html.twig"));

        // line 1
        yield "<div class=\"col-lg-12 mt-3\">
    ";
        // line 2
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["id" => "form"]]);
        yield "

    <div class=\"row\">

        <div class=\"col-md-6\">
            ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "prenom", [], "any", false, false, false, 7), 'errors');
        yield "
        </div>
        <div class=\"col-md-6\">
            ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10), 'errors');
        yield "
        </div>
        <div class=\"col-md-6\">
            <div class=\"form-group mb-4\">
                ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "prenom", [], "any", false, false, false, 14), 'row', ["label" => false, "attr" => ["placeholder" => "Prénom *"]]);
        yield "
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"form-group mb-4\">
                ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), 'widget', ["attr" => ["placeholder" => "Nom *"]]);
        yield "
            </div>
        </div>
        <div class=\"col-md-6\">
            ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "email", [], "any", false, false, false, 23), 'errors');
        yield "
        </div>
        <div class=\"col-md-6\">
            ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "phone", [], "any", false, false, false, 26), 'errors');
        yield "
        </div>
        <div class=\"col-md-6\">
            <div class=\"form-group mb-4\">
                ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'widget', ["attr" => ["placeholder" => "Email *"]]);
        yield "
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"form-group mb-4\">
                ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "phone", [], "any", false, false, false, 35), 'widget', ["attr" => ["placeholder" => "Telephone *"]]);
        yield "
            </div>
        </div>
        <div class=\"col-md-12\">
            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "adresse", [], "any", false, false, false, 39), 'errors');
        yield "
        </div>
        <div class=\"col-md-12\">
            <div class=\"form-group mb-4\">
                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "adresse", [], "any", false, false, false, 43), 'widget', ["attr" => ["placeholder" => "Adresse "]]);
        yield "
            </div>
        </div>
    </div>

    ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'rest');
        yield "


    <div class=\"col-md-4 mt-4 pt-3 fond-7\">
        <div class=\"centrer mb-3\">
            <button type=\"submit\" class=\"btn btn-shadow btn-normal btn-success mr-3\">
                <i class=\"fa fa-save\"></i>
                ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enregistrer"), "html", null, true);
        yield "
            </button>
            <a id=\"annule\" onclick=\"load('annule')\" href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_profile");
        yield "\" class=\"btn btn-shadow btn-normal btn-success-light\">
                <i class=\"fa fa-undo\"></i>
                ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Annuler"), "html", null, true);
        yield "
            </a>
        </div>
        ";
        // line 62
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_end');
        yield "
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
        return "security/security/userform.html.twig";
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
        return array (  156 => 62,  150 => 59,  145 => 57,  140 => 55,  130 => 48,  122 => 43,  115 => 39,  108 => 35,  100 => 30,  93 => 26,  87 => 23,  80 => 19,  72 => 14,  65 => 10,  59 => 7,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"col-lg-12 mt-3\">
    {{ form_start(form, {'attr' : { 'id' : 'form'}}) }}

    <div class=\"row\">

        <div class=\"col-md-6\">
            {{ form_errors(form.prenom) }}
        </div>
        <div class=\"col-md-6\">
            {{ form_errors(form.nom) }}
        </div>
        <div class=\"col-md-6\">
            <div class=\"form-group mb-4\">
                {{ form_row(form.prenom, {'label': false, 'attr' : { 'placeholder' : 'Prénom *'}}) }}
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"form-group mb-4\">
                {{ form_widget(form.nom, {'attr' : { 'placeholder' : 'Nom *'}}) }}
            </div>
        </div>
        <div class=\"col-md-6\">
            {{ form_errors(form.email) }}
        </div>
        <div class=\"col-md-6\">
            {{ form_errors(form.phone) }}
        </div>
        <div class=\"col-md-6\">
            <div class=\"form-group mb-4\">
                {{ form_widget(form.email, {'attr' : { 'placeholder' : 'Email *'}}) }}
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"form-group mb-4\">
                {{ form_widget(form.phone, {'attr' : { 'placeholder' : 'Telephone *'}}) }}
            </div>
        </div>
        <div class=\"col-md-12\">
            {{ form_errors(form.adresse) }}
        </div>
        <div class=\"col-md-12\">
            <div class=\"form-group mb-4\">
                {{ form_widget(form.adresse, {'attr' : { 'placeholder' : 'Adresse '}}) }}
            </div>
        </div>
    </div>

    {{ form_rest(form) }}


    <div class=\"col-md-4 mt-4 pt-3 fond-7\">
        <div class=\"centrer mb-3\">
            <button type=\"submit\" class=\"btn btn-shadow btn-normal btn-success mr-3\">
                <i class=\"fa fa-save\"></i>
                {{ 'Enregistrer'|trans }}
            </button>
            <a id=\"annule\" onclick=\"load('annule')\" href=\"{{ path('security_profile') }}\" class=\"btn btn-shadow btn-normal btn-success-light\">
                <i class=\"fa fa-undo\"></i>
                {{ 'Annuler'|trans }}
            </a>
        </div>
        {{ form_end(form) }}
    </div>
</div>", "security/security/userform.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\security\\security\\userform.html.twig");
    }
}
