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

/* employe/_form.html.twig */
class __TwigTemplate_d6e4752405643e27f8a525fd8e85ca00 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/_form.html.twig"));

        // line 1
        yield "<div class=\"row\">
    <div class=\"col-lg-4\">
        <div class=\"card border-green mt-3 mb-3\">
            <div class=\"card-header bg-success-light bb-green text-green\">
                <i class=\"fa fa-id-card mr-2\"></i>
                ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Informations personnelles"), "html", null, true);
        yield "
            </div>
            <div class=\"card-body\">
                ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["id" => "form"]]);
        yield "

                <div class=\"form-group\">
                    ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), 'row', ["attr" => ["placeholder" => "Nom *"], "label" => false]);
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "prenom", [], "any", false, false, false, 15), 'row', ["attr" => ["placeholder" => "Prénom *"], "label" => false]);
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "Date_naissance", [], "any", false, false, false, 18), 'widget', ["attr" => ["title" => "Date de naissance "]]);
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "lieu_naissance", [], "any", false, false, false, 21), 'row', ["attr" => ["placeholder" => "Lieu de naissance"], "label" => false]);
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "nationalite", [], "any", false, false, false, 24), 'row', ["attr" => ["placeholder" => "Nationnalité"], "label" => false]);
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "phone", [], "any", false, false, false, 27), 'row', ["attr" => ["placeholder" => "Téléphone *"], "label" => false]);
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'row', ["attr" => ["placeholder" => "Adresse email"], "label" => false]);
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "sexe", [], "any", false, false, false, 33), 'row', ["attr" => ["title" => "Choisir le sexe de l'employé"], "label" => false]);
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "enfant", [], "any", false, false, false, 36), 'row', ["attr" => ["placeholder" => "Nombre d'enfant", "title" => "Le nombre d'enfant de l'employé"], "label" => false]);
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "civilite", [], "any", false, false, false, 39), 'row', ["attr" => ["placeholder" => "Situation matrimoniale"], "label" => false]);
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "adresse", [], "any", false, false, false, 42), 'row', ["attr" => ["placeholder" => "Adresse"], "label" => false]);
        yield "
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-4\">
        <div class=\"card border-green mt-3 mb-3\">
            <div class=\"card-header bg-success-light bb-green text-green\">
                <i class=\"fa fa-info-circle mr-2\"></i>

                ";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Informations professionnelles"), "html", null, true);
        yield "
            </div>
            <div class=\"card-body\">
                ";
        // line 55
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'form_start', ["attr" => ["id" => "form"]]);
        yield "

                <div class=\"form-group\">
                    ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "matricule", [], "any", false, false, false, 58), 'row', ["attr" => ["placeholder" => "Matricule *"], "label" => false]);
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "hiredate", [], "any", false, false, false, 61), 'widget', ["attr" => ["title" => "Date d'embauche "]]);
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "poste", [], "any", false, false, false, 64), 'row', ["label" => false]);
        yield "
                </div>
";
        // line 69
        yield "                <div class=\"form-group\">
                    ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "fonction", [], "any", false, false, false, 70), 'row', ["label" => false]);
        yield "
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-4\">
        <div class=\"card border-danger mt-3 mb-3 focus-shadow-danger\">
            <div class=\"card-header bg-danger-light bb-danger text-danger\">
                <i class=\"fa fa-info-circle mr-2\"></i>
                ";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Informations sensibles"), "html", null, true);
        yield "
            </div>

            <div class=\"card-body\">
                <div class=\"form-group\">
                    ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "bloodgroup", [], "any", false, false, false, 84), 'row', ["attr" => ["placeholder" => "Renseigner le groupe sanguin", "class" => "border-danger focus-shadow-danger"], "label" => false]);
        yield "
                </div>
                <div class=\"alert bg-danger-light border-danger mt-4 pt-4 radius-10\">
                    <div class=\"row\">
                        <div class=\"col-6 mt-1 mb-1\">
                            ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "diabete", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "focus-shadow-danger"], "label" => "Diabète"]);
        yield "
                        </div>
                        <div class=\"col-6 mt-1 mb-1\">
                            ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "handicap", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "focus-shadow-danger"], "label" => "Handicape"]);
        yield "
                        </div>
                        <div class=\"col-6 mt-1 mb-1\">
                            ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "hypo", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => "focus-shadow-danger"], "label" => "Hypotension"]);
        yield "
                        </div>
                        <div class=\"col-6 mt-1 mb-1\">
                            ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "hyper", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "focus-shadow-danger"], "label" => "Hypertension"]);
        yield "
                        </div>
                        <div class=\"col-6 mt-1 mb-1\">
                            ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "epilepsie", [], "any", false, false, false, 101), 'widget', ["attr" => ["class" => "focus-shadow-danger"], "label" => "Epileptiques"]);
        yield "
                        </div>
                        <div class=\"col-6 mt-1\">
                            <input class=\"focus-shadow-danger\" type=\"checkbox\" id=\"autre\" value=\"autre\"
                                   onclick=\"autretext()\">
                            <label for=\"autre\"> ";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Autre"), "html", null, true);
        yield " </label>
                        </div>
                        <div class=\"col-12 mb-1\">
                            ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "remark", [], "any", false, false, false, 109), 'widget', ["attr" => ["class" => "border-danger focus-shadow-danger", "placeholder" => "Autre maladie"], "label" => false]);
        yield "
                        </div>
                    </div>
                </div>
                <div class=\"card border-danger mt-4 mb-3\">
                    <div class=\"card-header bg-danger-light bb-danger text-danger\">
                        ";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Personne à contacter"), "html", null, true);
        yield "
                    </div>
                    <div class=\"card-body\">
                        <div class=\"form-group\">
                            ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "famillyname", [], "any", false, false, false, 119), 'row', ["attr" => ["placeholder" => "Prénom(s) et nom", "class" => "border-danger focus-shadow-danger"], "label" => false]);
        yield "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "famillylink", [], "any", false, false, false, 122), 'row', ["label" => false, "attr" => ["placeholder" => "Lien de parenté", "class" => "border-danger focus-shadow-danger"]]);
        yield "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "famillyphone", [], "any", false, false, false, 125), 'row', ["attr" => ["placeholder" => "Téléphone", "class" => "border-danger focus-shadow-danger"], "label" => false]);
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        return "employe/_form.html.twig";
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
        return array (  266 => 125,  260 => 122,  254 => 119,  247 => 115,  238 => 109,  232 => 106,  224 => 101,  218 => 98,  212 => 95,  206 => 92,  200 => 89,  192 => 84,  184 => 79,  172 => 70,  169 => 69,  164 => 64,  158 => 61,  152 => 58,  146 => 55,  140 => 52,  127 => 42,  121 => 39,  115 => 36,  109 => 33,  103 => 30,  97 => 27,  91 => 24,  85 => 21,  79 => 18,  73 => 15,  67 => 12,  61 => 9,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"row\">
    <div class=\"col-lg-4\">
        <div class=\"card border-green mt-3 mb-3\">
            <div class=\"card-header bg-success-light bb-green text-green\">
                <i class=\"fa fa-id-card mr-2\"></i>
                {{ 'Informations personnelles'|trans }}
            </div>
            <div class=\"card-body\">
                {{ form_start(form, {'attr':{'id': 'form'}}) }}

                <div class=\"form-group\">
                    {{ form_row(form.nom, {'attr':{'placeholder':'Nom *'}, 'label':false}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(form.prenom, {'attr':{'placeholder':'Prénom *'}, 'label':false}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_widget(form.Date_naissance, {'attr' : { 'title' : 'Date de naissance '}}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(form.lieu_naissance, {'attr':{'placeholder':'Lieu de naissance'}, 'label':false}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(form.nationalite, {'attr':{'placeholder':'Nationnalité'}, 'label':false}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(form.phone, {'attr':{'placeholder':'Téléphone *'}, 'label':false}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(form.email, {'attr':{'placeholder':'Adresse email'}, 'label':false}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(form.sexe, {'attr':{'title':'Choisir le sexe de l\\'employé'}, 'label':false}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(form.enfant, {'attr':{'placeholder':'Nombre d\\'enfant','title':'Le nombre d\\'enfant de l\\'employé'}, 'label':false}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(form.civilite, {'attr':{'placeholder':'Situation matrimoniale'}, 'label':false}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(form.adresse, {'attr':{'placeholder':'Adresse'}, 'label':false}) }}
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-4\">
        <div class=\"card border-green mt-3 mb-3\">
            <div class=\"card-header bg-success-light bb-green text-green\">
                <i class=\"fa fa-info-circle mr-2\"></i>

                {{ 'Informations professionnelles'|trans }}
            </div>
            <div class=\"card-body\">
                {{ form_start(form, {'attr':{'id': 'form'}}) }}

                <div class=\"form-group\">
                    {{ form_row(form.matricule, {'attr':{'placeholder':'Matricule *'}, 'label':false}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_widget(form.hiredate, {'attr' : { 'title' : 'Date d\\'embauche '}}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(form.poste, {'label':false}) }}
                </div>
{#                <div class=\"form-group\">#}
{#                    {{ form_row(form.sursalaire, {'attr' : { 'title' : 'Sursalaire', 'placeholder':'Sursalaire'},'label':false}) }}#}
{#                </div>#}
                <div class=\"form-group\">
                    {{ form_row(form.fonction, {'label':false}) }}
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-4\">
        <div class=\"card border-danger mt-3 mb-3 focus-shadow-danger\">
            <div class=\"card-header bg-danger-light bb-danger text-danger\">
                <i class=\"fa fa-info-circle mr-2\"></i>
                {{ 'Informations sensibles'|trans }}
            </div>

            <div class=\"card-body\">
                <div class=\"form-group\">
                    {{ form_row(form.bloodgroup, {'attr':{'placeholder':'Renseigner le groupe sanguin', 'class':'border-danger focus-shadow-danger'}, 'label':false}) }}
                </div>
                <div class=\"alert bg-danger-light border-danger mt-4 pt-4 radius-10\">
                    <div class=\"row\">
                        <div class=\"col-6 mt-1 mb-1\">
                            {{ form_widget(form.diabete, {'attr':{'class':'focus-shadow-danger'}, 'label':'Diabète'}) }}
                        </div>
                        <div class=\"col-6 mt-1 mb-1\">
                            {{ form_widget(form.handicap, {'attr':{'class':'focus-shadow-danger'}, 'label':'Handicape'}) }}
                        </div>
                        <div class=\"col-6 mt-1 mb-1\">
                            {{ form_widget(form.hypo, {'attr':{'class':'focus-shadow-danger'}, 'label':'Hypotension'}) }}
                        </div>
                        <div class=\"col-6 mt-1 mb-1\">
                            {{ form_widget(form.hyper, {'attr':{'class':'focus-shadow-danger'}, 'label':'Hypertension'}) }}
                        </div>
                        <div class=\"col-6 mt-1 mb-1\">
                            {{ form_widget(form.epilepsie, {'attr':{'class':'focus-shadow-danger'}, 'label':'Epileptiques'}) }}
                        </div>
                        <div class=\"col-6 mt-1\">
                            <input class=\"focus-shadow-danger\" type=\"checkbox\" id=\"autre\" value=\"autre\"
                                   onclick=\"autretext()\">
                            <label for=\"autre\"> {{ 'Autre'|trans }} </label>
                        </div>
                        <div class=\"col-12 mb-1\">
                            {{ form_widget(form.remark, {'attr':{'class':'border-danger focus-shadow-danger', 'placeholder':'Autre maladie'}, 'label':false}) }}
                        </div>
                    </div>
                </div>
                <div class=\"card border-danger mt-4 mb-3\">
                    <div class=\"card-header bg-danger-light bb-danger text-danger\">
                        {{ 'Personne à contacter'|trans }}
                    </div>
                    <div class=\"card-body\">
                        <div class=\"form-group\">
                            {{ form_row(form.famillyname, {'attr':{'placeholder':'Prénom(s) et nom', 'class':'border-danger focus-shadow-danger'}, 'label':false}) }}
                        </div>
                        <div class=\"form-group\">
                            {{ form_row(form.famillylink, {'label':false, 'attr' : {'placeholder': 'Lien de parenté', 'class':'border-danger focus-shadow-danger'}}) }}
                        </div>
                        <div class=\"form-group\">
                            {{ form_row(form.famillyphone, {'attr':{'placeholder':'Téléphone', 'class':'border-danger focus-shadow-danger'}, 'label':false}) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "employe/_form.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\employe\\_form.html.twig");
    }
}
