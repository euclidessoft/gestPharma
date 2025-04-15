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

/* fournisseur/_form.html.twig */
class __TwigTemplate_4e962d95cc4621229395d709e351a8e2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["id" => "form"]]);
        yield "

<div class=\"col-lg-5 offset-lg-2 mt-4 fond-7 pb-5 pt-3 px-5\">
    <h4 class=\"mb-5\">
        <i class=\"fa-solid fa-hospital-user\"></i><i class=\"fa fa-plus\"></i>
        ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nouveau fournisseur"), "html", null, true);
        yield "
    </h4>

    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", ["notice"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            yield "    <div class=\"alert alert-success alert-dismissible fade show radius-10 shadow-black\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
            &times;
        </button>
        ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
            yield "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "
    <div class=\"row\">
 
        <div class=\"col-12 mb-4\">
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "designation", [], "any", false, false, false, 21), 'row', ["attr" => ["placeholder" => "Nom fournisseur*"], "label" => false]);
        yield "
        </div>

        <div class=\"col-12 mb-4\">
            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "telephone", [], "any", false, false, false, 25), 'row', ["attr" => ["placeholder" => "Téléphone fournisseur *"], "label" => false]);
        yield "
        </div>

        <div class=\"col-12 mb-4\">
            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "email", [], "any", false, false, false, 29), 'row', ["attr" => ["placeholder" => "Email *"], "label" => false]);
        yield "
        </div>

        <div class=\"col-12 mb-4\">
            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "adresse", [], "any", false, false, false, 33), 'row', ["attr" => ["placeholder" => "Adresse fournisseur *"], "label" => false]);
        yield "
        </div>

        <div class=\"col-12 mb-4\">
            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "pays", [], "any", false, false, false, 37), 'row', ["attr" => ["placeholder" => "Pays fournisseur *"], "label" => false]);
        yield "
        </div>

    </div>

    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'rest');
        yield "
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
        return "fournisseur/_form.html.twig";
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
        return array (  123 => 42,  115 => 37,  108 => 33,  101 => 29,  94 => 25,  87 => 21,  81 => 17,  72 => 14,  66 => 10,  62 => 9,  56 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'id': 'form'}}) }}

<div class=\"col-lg-5 offset-lg-2 mt-4 fond-7 pb-5 pt-3 px-5\">
    <h4 class=\"mb-5\">
        <i class=\"fa-solid fa-hospital-user\"></i><i class=\"fa fa-plus\"></i>
        {{ 'Nouveau fournisseur'|trans }}
    </h4>

    {% for message in app.flashes('notice') %}
    <div class=\"alert alert-success alert-dismissible fade show radius-10 shadow-black\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
            &times;
        </button>
        {{ message|trans }}
    </div>
    {% endfor %}

    <div class=\"row\">
 
        <div class=\"col-12 mb-4\">
            {{ form_row(form.designation, {'attr': {'placeholder': 'Nom fournisseur*'}, 'label': false}) }}
        </div>

        <div class=\"col-12 mb-4\">
            {{ form_row(form.telephone, {'attr': {'placeholder': 'Téléphone fournisseur *'}, 'label': false}) }}
        </div>

        <div class=\"col-12 mb-4\">
            {{ form_row(form.email, {'attr': {'placeholder': 'Email *'}, 'label': false}) }}
        </div>

        <div class=\"col-12 mb-4\">
            {{ form_row(form.adresse, {'attr': {'placeholder': 'Adresse fournisseur *'}, 'label': false}) }}
        </div>

        <div class=\"col-12 mb-4\">
            {{ form_row(form.pays, {'attr': {'placeholder': 'Pays fournisseur *'}, 'label': false}) }}
        </div>

    </div>

    {{ form_rest(form) }}
</div>", "fournisseur/_form.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\fournisseur\\_form.html.twig");
    }
}
