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
class __TwigTemplate_d16672976e734abb3fa124bcaae027c9 extends Template
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["id" => "form"]]);
        yield "

                <div class=\"form-group\">
                    ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 12), 'row', ["attr" => ["placeholder" => "Nom *"], "label" => false]);
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 15), 'row', ["attr" => ["placeholder" => "Prénom *"], "label" => false]);
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Date_naissance", [], "any", false, false, false, 18), 'widget', ["attr" => ["title" => "Date de naissance "]]);
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lieu_naissance", [], "any", false, false, false, 21), 'row', ["attr" => ["placeholder" => "Lieu de naissance"], "label" => false]);
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nationalite", [], "any", false, false, false, 24), 'row', ["attr" => ["placeholder" => "Nationnalité"], "label" => false]);
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 27), 'row', ["attr" => ["placeholder" => "Téléphone *"], "label" => false]);
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 30), 'row', ["attr" => ["placeholder" => "Adresse email"], "label" => false]);
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "sexe", [], "any", false, false, false, 33), 'row', ["attr" => ["title" => "Choisir le sexe de l'employé"], "label" => false]);
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "enfant", [], "any", false, false, false, 36), 'row', ["attr" => ["placeholder" => "Nombre d'enfant", "title" => "Le nombre d'enfant de l'employé"], "label" => false]);
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "civilite", [], "any", false, false, false, 39), 'row', ["attr" => ["placeholder" => "Situation matrimoniale"], "label" => false]);
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "adresse", [], "any", false, false, false, 42), 'row', ["attr" => ["placeholder" => "Adresse"], "label" => false]);
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["id" => "form"]]);
        yield "

                <div class=\"form-group\">
                    ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "matricule", [], "any", false, false, false, 58), 'row', ["attr" => ["placeholder" => "Matricule *"], "label" => false]);
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hiredate", [], "any", false, false, false, 61), 'widget', ["attr" => ["title" => "Date d'embauche "]]);
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "poste", [], "any", false, false, false, 64), 'row', ["label" => false]);
        yield "
                </div>
";
        // line 69
        yield "                <div class=\"form-group\">
                    ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "fonction", [], "any", false, false, false, 70), 'row', ["label" => false]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "bloodgroup", [], "any", false, false, false, 84), 'row', ["attr" => ["placeholder" => "Renseigner le groupe sanguin", "class" => "border-danger focus-shadow-danger"], "label" => false]);
        yield "
                </div>
                <div class=\"alert bg-danger-light border-danger mt-4 pt-4 radius-10\">
                    <div class=\"row\">
                        <div class=\"col-6 mt-1 mb-1\">
                            ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "diabete", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "focus-shadow-danger"], "label" => "Diabète"]);
        yield "
                        </div>
                        <div class=\"col-6 mt-1 mb-1\">
                            ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "handicap", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "focus-shadow-danger"], "label" => "Handicape"]);
        yield "
                        </div>
                        <div class=\"col-6 mt-1 mb-1\">
                            ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hypo", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => "focus-shadow-danger"], "label" => "Hypotension"]);
        yield "
                        </div>
                        <div class=\"col-6 mt-1 mb-1\">
                            ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hyper", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "focus-shadow-danger"], "label" => "Hypertension"]);
        yield "
                        </div>
                        <div class=\"col-6 mt-1 mb-1\">
                            ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "epilepsie", [], "any", false, false, false, 101), 'widget', ["attr" => ["class" => "focus-shadow-danger"], "label" => "Epileptiques"]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "remark", [], "any", false, false, false, 109), 'widget', ["attr" => ["class" => "border-danger focus-shadow-danger", "placeholder" => "Autre maladie"], "label" => false]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "famillyname", [], "any", false, false, false, 119), 'row', ["attr" => ["placeholder" => "Prénom(s) et nom", "class" => "border-danger focus-shadow-danger"], "label" => false]);
        yield "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "famillylink", [], "any", false, false, false, 122), 'row', ["label" => false, "attr" => ["placeholder" => "Lien de parenté", "class" => "border-danger focus-shadow-danger"]]);
        yield "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "famillyphone", [], "any", false, false, false, 125), 'row', ["attr" => ["placeholder" => "Téléphone", "class" => "border-danger focus-shadow-danger"], "label" => false]);
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
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
        return array (  260 => 125,  254 => 122,  248 => 119,  241 => 115,  232 => 109,  226 => 106,  218 => 101,  212 => 98,  206 => 95,  200 => 92,  194 => 89,  186 => 84,  178 => 79,  166 => 70,  163 => 69,  158 => 64,  152 => 61,  146 => 58,  140 => 55,  134 => 52,  121 => 42,  115 => 39,  109 => 36,  103 => 33,  97 => 30,  91 => 27,  85 => 24,  79 => 21,  73 => 18,  67 => 15,  61 => 12,  55 => 9,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "employe/_form.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\employe\\_form.html.twig");
    }
}
