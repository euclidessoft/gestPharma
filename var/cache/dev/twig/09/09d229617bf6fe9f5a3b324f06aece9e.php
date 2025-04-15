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

/* security.html.twig */
class __TwigTemplate_b64af1b305c9d27f37241b4d70d0228f extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">

<head>

    ";
        // line 6
        yield Twig\Extension\CoreExtension::include($this->env, $context, "includes/head.html.twig");
        yield "

    <title> ";
        // line 8
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield " </title>

    ";
        // line 10
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 16
        yield "    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
    <script src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/html5shiv.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/respond.min.js"), "html", null, true);
        yield "\"></script>
    <![endif]-->
</head>

<body>
<div class=\"col-lg-4 offset-lg-4 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-10 offset-1 fond\">
    <div class=\"row\">
        <div class=\"col-5\">
";
        // line 30
        yield "        </div>
        <div class=\"col-7 ml-n4 pt-4\">

        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-12 mb-4\">
            <img class=\"img-fluid mt-2\" src=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/gntpharma.jpeg"), "html", null, true);
        yield "\" alt=\"Logo GNT Pharma\" width=\"100\">
        </div>
        <div class=\"col-12 mb-4\">
            <label for=\"langue\">
                <i class=\"fa fa-globe\"></i>
            </label>
            <select name=\"langue\" id=\"langue\" onchange=\"choixlangue()\">

            </select>
        </div>
    </div>

    ";
        // line 49
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 52
        yield "
    <button type=\"button\" id=\"install_button\" onclick=\"installApp()\" hidden></button>

    <p class=\"mt-4 mb-4 text-muted\"> </p>
</div>
<!-- Footer Start -->
<footer class=\"text-light\">
    <div class=\"container-fluid copyright px-0\">
        <div class=\"d-flex flex-column flex-md-row justify-content-between\">
            <div class=\"py-4 px-5 text-center text-md-start\">
                <p class=\"mb-0\">&copy; 2023 GNT Pharma, ";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tout droits réservés."), "html", null, true);
        yield "</p>
            </div>
            <div class=\"py-4 px-5 bg-secondaire footer-shape position-relative text-center text-md-end\">
                <p class=\"mb-0 text-primaire\">
                    Designed By
                    <a class=\"fwb text-primaire\" href=\"https://euclideservices.com\" target=\"_blank\">EUCLIDES</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

";
        // line 75
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 81
        yield "
<script>

    if ('serviceWorker' in navigator) {
        navigator.serviceWorker
            .register('/sw.js')
            .then(function (registration) {
                console.log(
                    'Service Worker registration successful with scope:', registration.scope
                );
            })
            .catch(function (err) {
                console.log('Service Worker registration failed:', err);
            });
    }

    let deferredPrompt; // Allows to show the install prompt
    const installButton = document.getElementById(\"install_button\");

    window.addEventListener(\"beforeinstallprompt\", e => {
        console.log(\"beforeinstallprompt fired\");
        // Prevent Chrome 76 and earlier from automatically showing a prompt
        e.preventDefault();
        // Stash the event so it can be triggered later.
        deferredPrompt = e;
        // Show the install button
        installButton.hidden = false;
        installButton.addEventListener(\"click\", installApp);
    });

    function installApp() {

        // Show the prompt
        deferredPrompt.prompt();
        installButton.disabled = true;

        // Wait for the user to respond to the prompt
        deferredPrompt.userChoice.then(choiceResult => {
            if (choiceResult.outcome === \"accepted\") {
                console.log(\"PWA setup accepted\");
                installButton.hidden = true;
            } else {
                console.log(\"PWA setup rejected\");
            }
            installButton.disabled = false;
            deferredPrompt = null;
        });
    }

    function choixlangue() {
        var url = \$(location).attr(\"href\");
        var index;
        var langselect = \$('#langue option:selected');
        if (langselect.val() === 'Francais') {
                url = url.replace(\"/en/\", \"/fr/\");
        } else{
                url = url.replace(\"/fr/\", \"/en/\");
        }
        document.location.href = url;
    }

    function positionlangue() {

        var url = \$(location).attr(\"href\");
        var fr = url.indexOf(\"/fr/\");
        var en = url.indexOf(\"/en/\");
        if (fr !== -1) {
            \$(\"#langue\").html(\"<option value='Francais'>Français</option><option value='English'>English</option>\")

        } else if (en !== -1) {
            \$(\"#langue\").html(\"<option value='English'>English</option><option value='Francais'>Français</option>\")


        }

    }

    \$(document).ready(function () {
        positionlangue();
    });

</script>
</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 8
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

        yield " Hajjalbayt - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Le pèlerinage facile"), "html", null, true);
        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        yield "        <link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fontawesome/css/all.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-4plus.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/login.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link rel=\"shortcut icon\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/gntpharma.jpeg"), "html", null, true);
        yield "\" type=\"image/x-icon\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 49
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

        // line 50
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 75
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 76
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fontawesome/js/all.js"), "html", null, true);
        yield "\"></script>
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
        return "security.html.twig";
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
        return array (  359 => 79,  355 => 78,  351 => 77,  346 => 76,  333 => 75,  321 => 50,  308 => 49,  295 => 14,  291 => 13,  287 => 12,  282 => 11,  269 => 10,  244 => 8,  148 => 81,  146 => 75,  130 => 62,  118 => 52,  116 => 49,  101 => 37,  92 => 30,  81 => 21,  77 => 20,  71 => 16,  69 => 10,  64 => 8,  59 => 6,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>

    {{ include('includes/head.html.twig') }}

    <title> {% block title %} Hajjalbayt - {{ 'Le pèlerinage facile'|trans }} {% endblock %} </title>

    {% block stylesheets %}
        <link href=\"{{ asset('fontawesome/css/all.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('css/bootstrap-4plus.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('css/login.css') }}\" rel=\"stylesheet\">
        <link rel=\"shortcut icon\" href=\"{{ asset('images/gntpharma.jpeg') }}\" type=\"image/x-icon\">
    {% endblock %}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
    <script src=\"{{ asset('js/html5shiv.js') }}\"></script>
    <script src=\"{{ asset('js/respond.min.js') }}\"></script>
    <![endif]-->
</head>

<body>
<div class=\"col-lg-4 offset-lg-4 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-10 offset-1 fond\">
    <div class=\"row\">
        <div class=\"col-5\">
{#            <img class=\"img-fluid mt-2\" src=\"{{ asset('images/Hajjalbayt.png') }}\" alt=\"Logo Hajjalbayt\" width=\"100\">#}
        </div>
        <div class=\"col-7 ml-n4 pt-4\">

        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-12 mb-4\">
            <img class=\"img-fluid mt-2\" src=\"{{ asset('images/gntpharma.jpeg') }}\" alt=\"Logo GNT Pharma\" width=\"100\">
        </div>
        <div class=\"col-12 mb-4\">
            <label for=\"langue\">
                <i class=\"fa fa-globe\"></i>
            </label>
            <select name=\"langue\" id=\"langue\" onchange=\"choixlangue()\">

            </select>
        </div>
    </div>

    {% block body %}

    {% endblock %}

    <button type=\"button\" id=\"install_button\" onclick=\"installApp()\" hidden></button>

    <p class=\"mt-4 mb-4 text-muted\"> </p>
</div>
<!-- Footer Start -->
<footer class=\"text-light\">
    <div class=\"container-fluid copyright px-0\">
        <div class=\"d-flex flex-column flex-md-row justify-content-between\">
            <div class=\"py-4 px-5 text-center text-md-start\">
                <p class=\"mb-0\">&copy; 2023 GNT Pharma, {{ \"Tout droits réservés.\"|trans }}</p>
            </div>
            <div class=\"py-4 px-5 bg-secondaire footer-shape position-relative text-center text-md-end\">
                <p class=\"mb-0 text-primaire\">
                    Designed By
                    <a class=\"fwb text-primaire\" href=\"https://euclideservices.com\" target=\"_blank\">EUCLIDES</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

{% block javascripts %}
    <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('js/popper.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('fontawesome/js/all.js') }}\"></script>
{% endblock %}

<script>

    if ('serviceWorker' in navigator) {
        navigator.serviceWorker
            .register('/sw.js')
            .then(function (registration) {
                console.log(
                    'Service Worker registration successful with scope:', registration.scope
                );
            })
            .catch(function (err) {
                console.log('Service Worker registration failed:', err);
            });
    }

    let deferredPrompt; // Allows to show the install prompt
    const installButton = document.getElementById(\"install_button\");

    window.addEventListener(\"beforeinstallprompt\", e => {
        console.log(\"beforeinstallprompt fired\");
        // Prevent Chrome 76 and earlier from automatically showing a prompt
        e.preventDefault();
        // Stash the event so it can be triggered later.
        deferredPrompt = e;
        // Show the install button
        installButton.hidden = false;
        installButton.addEventListener(\"click\", installApp);
    });

    function installApp() {

        // Show the prompt
        deferredPrompt.prompt();
        installButton.disabled = true;

        // Wait for the user to respond to the prompt
        deferredPrompt.userChoice.then(choiceResult => {
            if (choiceResult.outcome === \"accepted\") {
                console.log(\"PWA setup accepted\");
                installButton.hidden = true;
            } else {
                console.log(\"PWA setup rejected\");
            }
            installButton.disabled = false;
            deferredPrompt = null;
        });
    }

    function choixlangue() {
        var url = \$(location).attr(\"href\");
        var index;
        var langselect = \$('#langue option:selected');
        if (langselect.val() === 'Francais') {
                url = url.replace(\"/en/\", \"/fr/\");
        } else{
                url = url.replace(\"/fr/\", \"/en/\");
        }
        document.location.href = url;
    }

    function positionlangue() {

        var url = \$(location).attr(\"href\");
        var fr = url.indexOf(\"/fr/\");
        var en = url.indexOf(\"/en/\");
        if (fr !== -1) {
            \$(\"#langue\").html(\"<option value='Francais'>Français</option><option value='English'>English</option>\")

        } else if (en !== -1) {
            \$(\"#langue\").html(\"<option value='English'>English</option><option value='Francais'>Français</option>\")


        }

    }

    \$(document).ready(function () {
        positionlangue();
    });

</script>
</body>

</html>
", "security.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\security.html.twig");
    }
}
