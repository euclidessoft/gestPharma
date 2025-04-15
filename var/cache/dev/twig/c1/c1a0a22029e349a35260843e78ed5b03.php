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

/* includes/topbar.html.twig */
class __TwigTemplate_e057301531b3082371ca0ac6f4f8264a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/topbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/topbar.html.twig"));

        // line 1
        yield "<div class=\"container-fluid topbar\">
    <div class=\"row\">
        <div class=\"topbar-menu\">
            <div id=\"navbtn\" class=\"navbtn\" onclick=\"openNav()\">
                <i class=\"fas fa-align-justify fa-2x\"></i>
            </div>
        </div>
        <div class=\"topbar-item\">
            <div class=\"row\">
                <div class=\"col-lg-5 col-md-2 col-6 text-nowrap\">
                    <span class=\"history-box\">
                        <i class=\"fa fa-arrow-circle-left history-btn\" title=\"Page précédente\"
                           onclick=\"window.history.back()\"></i>
                        <i class=\"fa fa-arrow-circle-right history-btn ml-3\" title=\"Page suivante\"
                           onclick=\"window.history.forward()\"></i>
                        <i class=\"fa fa-redo-alt fa-rotate-270 history-btn ml-3\" title=\"Actualiser la page\"
                           onclick=\"window.location.reload()\"></i>
                    </span>

                    <button type=\"button\" id=\"install_button\" onclick=\"installApp()\" hidden></button>
                </div>

                <div class=\"col-lg-2 col-md-1 col-6 text-nowrap\">
                    <!-- Empty column for spacing or other content -->
                    <div class=\"text-right\">
                        <div class=\"dropdown\">
                            <a href=\"#\" class=\"d-flex align-items-center\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-bell fa-lg\"></i> <!-- Icône des notifications -->
                                <span id=\"notification-count\" class=\"badge badge-danger\"></span>
                                <!-- Badge pour le nombre de notifications -->
                            </a>
                            <div class=\"dropdown-menu p-4\" id=\"notifications-menu\">
                                <!-- Les notifications seront affichées ici -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-6 text-nowrap\">
                    <div class=\"row\">
                        <div class=\"col-3\">

                        </div>
                        <div class=\"col-9\">
                            <div class=\"text-right\">
                                <label for=\"langue\">
                                    <i class=\"fa fa-globe\"></i>
                                </label>
                                <select name=\"langue\" id=\"langue\" onchange=\"choixlangue()\">
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-3 col-6 text-nowrap\">
                    <div class=\"text-right\">
                        <div class=\"dropdown\">
                            <a href=\"#\" class=\"\" data-toggle=\"dropdown\">
                                ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "nom", [], "any", false, false, false, 59), "html", null, true);
        yield "
                                <img src=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar-homme.avif"), "html", null, true);
        yield "\" class=\"user-thumb\" alt=\"User Image\">
                            </a>
                            <div class=\"dropdown-menu\">
                                <div class=\"row\">
                                    <div class=\"col-5\">
                                        <img src=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar-homme.avif"), "html", null, true);
        yield "\" alt=\"\"
                                             class=\"w-100 mx-2\">
                                    </div>
                                    <div class=\"col-7\">
                                        <div class=\"mt-0\">
                                            <h6 class=\"text-bold text-wrap\">
                                                ";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), "nom", [], "any", false, false, false, 71), "html", null, true);
        yield "
                                                ";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72), "prenom", [], "any", false, false, false, 72), "html", null, true);
        yield "
                                            </h6>
                                        </div>
                                        <div class=\"mt-3\">
                                            <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_profile");
        yield "\">
                                                <i class=\"fa fa-user\"></i>
                                                ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Profil"), "html", null, true);
        yield "
                                            </a>
                                        </div>
                                        ";
        // line 81
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RH")) {
            // line 82
            yield "                                            <div class=\"mt-2\">
                                                <a href=\"";
            // line 83
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_manage");
            yield "\">
                                                    <i class=\"fa-solid fa-users-gear\"></i>
                                                    ";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Gestion utilisateurs"), "html", null, true);
            yield "
                                                </a>
                                            </div>
                                        ";
        }
        // line 89
        yield "                                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FINANCE")) {
            // line 90
            yield "                                            <div class=\"mt-2\">
                                                <a href=\"";
            // line 91
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_clients");
            yield "\">
                                                    <i class=\"fa-solid fa-user-tag\"></i>
                                                    ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Gestion clients"), "html", null, true);
            yield "
                                                </a>
                                            </div>
                                        ";
        }
        // line 97
        yield "                                        <div class=\"mt-2\">
                                            <a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
        yield "\" data-toggle=\"modal\"
                                               data-target=\"#logout\">
                                                <i class=\"fa fa-power-off\"></i>
                                                ";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Déconnexion"), "html", null, true);
        yield "
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"logout\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deconnexion\" aria-hidden=\"true\">
    <div class=\"modal-dialog text-center\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title fs-5\" id=\"deconnexion\">
                    <i class=\"fa-solid fa-triangle-exclamation\"></i>
                    ";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Déconnexion"), "html", null, true);
        yield "
                </h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body px-5 pb-5\">
                <p class=\"\">
                    <b>";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Voulez-vous vraiment vous déconnecter ?"), "html", null, true);
        yield "</b>
                </p>
                <button type=\"button\" id=\"oui\" onclick=\"deconnexion()\" class=\"btn btn-danger mr-2\">
                    Oui
                </button>
                <button type=\"button\" class=\"btn btn-success-light\" data-dismiss=\"modal\" aria-label=\"Close\">
                    Non
                </button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade about\" id=\"about\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content radius-10\">
            <div class=\"float-right mr-4 mt-4\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <img src=\"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/gntpharma.jpeg"), "html", null, true);
        yield "\" alt=\"Logo\"
                             class=\"img-fluid mt-n4 mb-4 align-center\">
                    </div>
                    <div class=\"col-lg-6\">
                        <h3 class=\"text-center text-bold\">GNT PHARMA v";
        // line 157
        yield Twig\Extension\CoreExtension::include($this->env, $context, "includes/version.html.twig");
        yield "</h3>
                        <p class=\"text-center mt-3\">
                            Copyright &copy; 2023-";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "
                            <b>
                                <a class=\"text-green\" href=\"http://euclideservices.com\" target=\"_blank\">EUCLIDES</a>
                            </b>
                            <br>";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tous droits réservés"), "html", null, true);
        yield "
                        </p>
                        <p class=\"text-center mt-n2\">
                            ";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Protégée par"), "html", null, true);
        yield " :
                            <br>- ";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("La loi sur les droits d'auteurs"), "html", null, true);
        yield "
                            <br>- ";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("La loi sur la propriété intellectuelle"), "html", null, true);
        yield "
                        </p>
                        <span class=\"row mt-n2\">
                            <span class=\"col-5 text-right\">Contact :</span>
                            <span class=\"col-7 ml-n4\"><a class=\"text-green\"
                                                         href=\"tel:+221754443384\">(+221) 75 444 33 84</a></span>
                            <span class=\"col-5 text-right\"></span>
                            <span class=\"col-7 ml-n4\"><a class=\"text-green\"
                                                         href=\"tel:+221775423500\">(+221) 77 542 35 00</a></span>
                            <span class=\"col-5 text-right\"></span>
                            <span class=\"col-7 ml-n4\"><a class=\"text-green\"
                                                         href=\"tel:+221787333434\">(+221) 78 733 34 34</a></span>
                            <span class=\"col-12 text-center\">Email :
                                <a class=\"text-green\" href=\"mailto:hajjalbayt@euclideservices.com\">infos@euclideservices.com</a>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "includes/topbar.html.twig";
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
        return array (  289 => 168,  285 => 167,  281 => 166,  275 => 163,  268 => 159,  263 => 157,  256 => 153,  229 => 129,  218 => 121,  195 => 101,  189 => 98,  186 => 97,  179 => 93,  174 => 91,  171 => 90,  168 => 89,  161 => 85,  156 => 83,  153 => 82,  151 => 81,  145 => 78,  140 => 76,  133 => 72,  129 => 71,  120 => 65,  112 => 60,  108 => 59,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container-fluid topbar\">
    <div class=\"row\">
        <div class=\"topbar-menu\">
            <div id=\"navbtn\" class=\"navbtn\" onclick=\"openNav()\">
                <i class=\"fas fa-align-justify fa-2x\"></i>
            </div>
        </div>
        <div class=\"topbar-item\">
            <div class=\"row\">
                <div class=\"col-lg-5 col-md-2 col-6 text-nowrap\">
                    <span class=\"history-box\">
                        <i class=\"fa fa-arrow-circle-left history-btn\" title=\"Page précédente\"
                           onclick=\"window.history.back()\"></i>
                        <i class=\"fa fa-arrow-circle-right history-btn ml-3\" title=\"Page suivante\"
                           onclick=\"window.history.forward()\"></i>
                        <i class=\"fa fa-redo-alt fa-rotate-270 history-btn ml-3\" title=\"Actualiser la page\"
                           onclick=\"window.location.reload()\"></i>
                    </span>

                    <button type=\"button\" id=\"install_button\" onclick=\"installApp()\" hidden></button>
                </div>

                <div class=\"col-lg-2 col-md-1 col-6 text-nowrap\">
                    <!-- Empty column for spacing or other content -->
                    <div class=\"text-right\">
                        <div class=\"dropdown\">
                            <a href=\"#\" class=\"d-flex align-items-center\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-bell fa-lg\"></i> <!-- Icône des notifications -->
                                <span id=\"notification-count\" class=\"badge badge-danger\"></span>
                                <!-- Badge pour le nombre de notifications -->
                            </a>
                            <div class=\"dropdown-menu p-4\" id=\"notifications-menu\">
                                <!-- Les notifications seront affichées ici -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-6 text-nowrap\">
                    <div class=\"row\">
                        <div class=\"col-3\">

                        </div>
                        <div class=\"col-9\">
                            <div class=\"text-right\">
                                <label for=\"langue\">
                                    <i class=\"fa fa-globe\"></i>
                                </label>
                                <select name=\"langue\" id=\"langue\" onchange=\"choixlangue()\">
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-3 col-6 text-nowrap\">
                    <div class=\"text-right\">
                        <div class=\"dropdown\">
                            <a href=\"#\" class=\"\" data-toggle=\"dropdown\">
                                {{ app.user.nom }}
                                <img src=\"{{ asset('images/avatar-homme.avif') }}\" class=\"user-thumb\" alt=\"User Image\">
                            </a>
                            <div class=\"dropdown-menu\">
                                <div class=\"row\">
                                    <div class=\"col-5\">
                                        <img src=\"{{ asset('images/avatar-homme.avif') }}\" alt=\"\"
                                             class=\"w-100 mx-2\">
                                    </div>
                                    <div class=\"col-7\">
                                        <div class=\"mt-0\">
                                            <h6 class=\"text-bold text-wrap\">
                                                {{ app.user.nom }}
                                                {{ app.user.prenom }}
                                            </h6>
                                        </div>
                                        <div class=\"mt-3\">
                                            <a href=\"{{ path('security_profile') }}\">
                                                <i class=\"fa fa-user\"></i>
                                                {{ 'Profil'|trans }}
                                            </a>
                                        </div>
                                        {% if is_granted('ROLE_RH') %}
                                            <div class=\"mt-2\">
                                                <a href=\"{{ path('employe_manage') }}\">
                                                    <i class=\"fa-solid fa-users-gear\"></i>
                                                    {{ 'Gestion utilisateurs'|trans }}
                                                </a>
                                            </div>
                                        {% endif %}
                                        {% if is_granted('ROLE_FINANCE') %}
                                            <div class=\"mt-2\">
                                                <a href=\"{{ path('security_clients') }}\">
                                                    <i class=\"fa-solid fa-user-tag\"></i>
                                                    {{ 'Gestion clients'|trans }}
                                                </a>
                                            </div>
                                        {% endif %}
                                        <div class=\"mt-2\">
                                            <a href=\"{{ path('security_logout') }}\" data-toggle=\"modal\"
                                               data-target=\"#logout\">
                                                <i class=\"fa fa-power-off\"></i>
                                                {{ 'Déconnexion'|trans }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"logout\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deconnexion\" aria-hidden=\"true\">
    <div class=\"modal-dialog text-center\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title fs-5\" id=\"deconnexion\">
                    <i class=\"fa-solid fa-triangle-exclamation\"></i>
                    {{ 'Déconnexion'|trans }}
                </h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body px-5 pb-5\">
                <p class=\"\">
                    <b>{{ 'Voulez-vous vraiment vous déconnecter ?'|trans }}</b>
                </p>
                <button type=\"button\" id=\"oui\" onclick=\"deconnexion()\" class=\"btn btn-danger mr-2\">
                    Oui
                </button>
                <button type=\"button\" class=\"btn btn-success-light\" data-dismiss=\"modal\" aria-label=\"Close\">
                    Non
                </button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade about\" id=\"about\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content radius-10\">
            <div class=\"float-right mr-4 mt-4\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <img src=\"{{ asset('images/gntpharma.jpeg') }}\" alt=\"Logo\"
                             class=\"img-fluid mt-n4 mb-4 align-center\">
                    </div>
                    <div class=\"col-lg-6\">
                        <h3 class=\"text-center text-bold\">GNT PHARMA v{{ include('includes/version.html.twig') }}</h3>
                        <p class=\"text-center mt-3\">
                            Copyright &copy; 2023-{{ 'now'|date('Y') }}
                            <b>
                                <a class=\"text-green\" href=\"http://euclideservices.com\" target=\"_blank\">EUCLIDES</a>
                            </b>
                            <br>{{ 'Tous droits réservés'|trans }}
                        </p>
                        <p class=\"text-center mt-n2\">
                            {{ 'Protégée par'|trans }} :
                            <br>- {{ 'La loi sur les droits d\\'auteurs'|trans }}
                            <br>- {{ 'La loi sur la propriété intellectuelle'|trans }}
                        </p>
                        <span class=\"row mt-n2\">
                            <span class=\"col-5 text-right\">Contact :</span>
                            <span class=\"col-7 ml-n4\"><a class=\"text-green\"
                                                         href=\"tel:+221754443384\">(+221) 75 444 33 84</a></span>
                            <span class=\"col-5 text-right\"></span>
                            <span class=\"col-7 ml-n4\"><a class=\"text-green\"
                                                         href=\"tel:+221775423500\">(+221) 77 542 35 00</a></span>
                            <span class=\"col-5 text-right\"></span>
                            <span class=\"col-7 ml-n4\"><a class=\"text-green\"
                                                         href=\"tel:+221787333434\">(+221) 78 733 34 34</a></span>
                            <span class=\"col-12 text-center\">Email :
                                <a class=\"text-green\" href=\"mailto:hajjalbayt@euclideservices.com\">infos@euclideservices.com</a>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{#
{% block javascripts %}
    <script>
        const locale = 'fr';
        let isFetching = false; // Éviter les requêtes multiples
//
        // Fonction pour récupérer les notifications
        function fetchNotifications() {
            if (isFetching) return; // Empêche les requêtes multiples
            isFetching = true;
//
            fetch(`/\${locale}/notifications/check`)
                .then(response => response.json())
                .then(data => {
                    const notificationCount = document.getElementById('notification-count');
                    const notificationsMenu = document.getElementById('notifications-menu');
//
                    if (notificationCount && notificationsMenu) {
                        if (data.count > 0) {
                            notificationCount.textContent = data.count;
//
                            // Vérifier et ajouter seulement les nouvelles notifications
                            data.notifications.forEach(notification => {
                                if (!document.querySelector(`[data-id='\${notification.id}']`)) {
                                    const li = document.createElement('a');
                                    li.classList.add('dropdown-item');
                                    li.textContent = notification.message;
                                    li.href = notification.lien;
                                    li.dataset.id = notification.id;
                                    li.style.cursor = 'pointer';
                                    li.addEventListener('click', () => markAsRead(notification.id, li));
                                    notificationsMenu.appendChild(li);
                                }
                            });
                        } else {
                            notificationCount.textContent = '';
                            notificationsMenu.innerHTML = '<li class=\"dropdown-item\">Aucune nouvelle notification</li>';
                        }
                    }
                })
                .catch(error => console.error('Erreur récupération notifications:', error))
                .finally(() => isFetching = false);
        }
//
        // Fonction pour marquer une notification comme lue
        function markAsRead(notificationId, notificationElement) {
            fetch(`/\${locale}/notifications/Read/\${notificationId}`, { method: 'POST' })
                .then(response => response.json())
                .then(data => {
                    if (data.message) {
                        notificationElement.style.textDecoration = 'line-through';
                        notificationElement.style.color = 'gray';
                        notificationElement.removeEventListener('click', () => markAsRead(notificationId, notificationElement));
                    }
                })
                .catch(error => console.error('Erreur lors de la mise à jour de la notification:', error));
        }
//
        // Lancer le chargement des notifications
        document.addEventListener('DOMContentLoaded', function () {
            fetchNotifications();
            setInterval(fetchNotifications, 60000); // Vérifie toutes les 60 secondes
        });
//
    </script>
{% endblock %}#}
", "includes/topbar.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\includes\\topbar.html.twig");
    }
}
