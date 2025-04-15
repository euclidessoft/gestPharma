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

/* includes/javascript.html.twig */
class __TwigTemplate_0ad65dbd52de195791a0496c69da8928 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"menu-overlay\" id=\"menu-overlay\" onclick=\"openNav()\">

</div>
<div id=\"overlay\" class=\"overlay\" onclick=\"closeNav()\">

</div>
";
        // line 7
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 17
        yield "


<script>

    function openNav() {
        document.getElementById(\"navmenu\").style.width = \"250px\";
        document.getElementById(\"closebtn\").style.visibility = \"visible\";
        document.getElementById(\"sidenav\").style.overflow = \"visible\";
        document.getElementById(\"session\").style.visibility = \"visible\";
        document.getElementById(\"overlay\").style.visibility = \"visible\";
        document.getElementById(\"menu-overlay\").style.visibility = \"hidden\";
        if (document.body.clientWidth <= 768) {
            document.getElementById(\"navbtn\").style.visibility = \"hidden\";
        }
    }

    function closeNav() {
        document.getElementById(\"closebtn\").style.visibility = \"hidden\";
        document.getElementById(\"sidenav\").style.overflow = \"hidden\";
        document.getElementById(\"session\").style.visibility = \"hidden\";
        document.getElementById(\"overlay\").style.visibility = \"hidden\";
        document.getElementById(\"menu-overlay\").style.visibility = \"visible\";
        if (document.body.clientWidth <= 768) {
            document.getElementById(\"navmenu\").style.width = \"0px\";
            document.getElementById(\"navbtn\").style.visibility = \"visible\";
        } else {
            document.getElementById(\"navmenu\").style.width = \"50px\";
        }
    }

    if (document.body.clientWidth <= 768) {
        \$('#closebtn').html(\"<i class='fas fa-times fa-lg'></i>\");
    } else {
        \$('#closebtn').html('<i class=\"fas fa-arrow-left fa-lg\"></i>');
    }

    //langue systeme
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
    function load(id) {
        \$(\"#\"+id).html(\"<i class='fa-solid fa-spinner fa-spin-pulse fa-lg'></i>\");

    }

    function deconnexion() {
        \$(\"#oui\").html(\"<i class='fa-solid fa-spinner fa-spin-pulse fa-lg'></i>\");
        document.location.href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
        yield "\";
    }

    function addprod(id, mincom, st) {// fonction pour ajouter un produit dans le panier
        var reg = new RegExp(\"^[0-9]+\$\");
        if (reg.test(\$('#text' + id).val()) && mincom <= \$('#text' + id).val()) {
            if (st >= \$('#text' + id).val()) {
                \$('#btn' + id).html(\"<i class='fa-solid fa-spinner fa-spin-pulse fa-lg'></i>\");
                \$.ajax({
                    type: \"POST\",
                    url: \"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_add");
        yield "\",
                    data: \"prod=\" + id + \"&quantite=\" + \$('#text' + id).val(),
                    success: function (data) {
                        if (data['id'] == 'ok') {
                            \$('#tdprod' + id).html(\$('#text' + id).val());
                            \$('#gest_panier').html(data['panier']);
                            \$('#btn' + id).html(\"<i class='fa fa-cart-shopping'></i>\");
                            \$('#btn' + id).addClass('disabled');
                        } else {
                            alert(\"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Vérifier la quantité saisie"), "html", null, true);
        yield "\")
                        }
                    },
                    error: function () {
                        alert('";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("La requête n'a pas abouti"), "html", null, true);
        yield "');
                    }
                });
            } else {
                var mess = \"";
        // line 116
        yield "Maximum disponible  ";
        yield "\" + st;
                alert(mess);
            }
        } else {
            var mess = \"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Commande minimun "), "html", null, true);
        yield "\" + mincom;
            alert(mess);
        }

    }



    function nofocu(id) {
        \$('#tampon').val('');
    }

    //message systeme
    function advert() {
        \$('#advertiser').trigger('click');
        return false;
    }

    //exporter vers excel
    function allexcel() {
        \$('button').trigger('click');
        return false;

    }

    //rattraper une operation oublié
    function rattrapage() {
        if (\$('#datecheck').is(':checked')) {
            \$('#date').show();
        } else {
            \$('#date').hide();
        }
    }

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

    let deferredPrompt;
    const installButton = document.getElementById(\"install_button\");

    window.addEventListener(\"beforeinstallprompt\", e => {
        console.log(\"beforeinstallprompt fired\");
        e.preventDefault();
        deferredPrompt = e;
        installButton.hidden = false;
        installButton.addEventListener(\"click\", installApp);
    });

    function installApp() {
        deferredPrompt.prompt();
        installButton.disabled = true;
        deferredPrompt.userChoice.then(choiceResult => {
            if (choiceResult.outcome === \"accepté\") {
                console.log(\"Installation de l'application acceptée\");
                installButton.hidden = true;
            } else {
                console.log(\"Installation de l'application rejetée\");
            }
            installButton.disabled = false;
            deferredPrompt = null;
        });
    }

    \$(document).ready(function () {
        positionlangue();
        autretext(); // Vérifie l'état au chargement
        \$('#autre').change(autretext);

/*
        var keys = {};
        \$(window).on(\"keyup keydown\", function (e) {
            keys[e.keyCode] = e.type === 'keydown';
            if (keys[17] || keys[80]) {
                e.preventDefault();
            }
        });
        \$(window).bind('keydown keypress', 'ctrl+s', function () {
            \$('#save').click();
            return false;
        });
        \$(document).bind('contextmenu', false);

        \$(window).on(' copy dragstart drop', function (e) {
            e.preventDefault();
            return false;
        });*/
        initialisationpromo();
        \$('#btnversement').hide();
        \$('#versement').hide();
        \$('#tampon').hide();
        \$('#paiement_form_montant').change(function () {// controle montant paiement
            var reg = new RegExp(\"^[0-9]+\$\");
            if (reg.test(\$('#paiement_form_montant').val())) {
                \$('#tamp').val('ok');
                if (\$('#tamp1').val() != '') \$('#btnversement').show();
            } else {
                \$('#tamp').val('');
                \$('#btnversement').hide();
            }
        });

        \$('#promotion_type').change(function () {//changement type de promotion
            if (\$('#promotion_type option:selected').val() == 'Unités Gratuites') {
                \$('#tranche').show();
                \$('#reduction').hide();
                \$('#promotion_reduction').val('');

            }else if (\$('#promotion_type option:selected').val() == 'Réduction') {
                \$('#tranche').hide();
                \$('#reduction').show();
                \$('#promotion_premier').val('');
                \$('#promotion_ugpremier').val('');
                \$('#promotion_deuxieme').val('');
                \$('#promotion_ugdeuxieme').val('');
                \$('#promotion_troisieme').val('');
                \$('#promotion_ugtroisieme').val('');
            }else{
                \$('#tranche').hide();
                \$('#reduction').hide();
                \$('#promotion_premier').val('');
                \$('#promotion_ugpremier').val('');
                \$('#promotion_deuxieme').val('');
                \$('#promotion_ugdeuxieme').val('');
                \$('#promotion_troisieme').val('');
                \$('#promotion_ugtroisieme').val('');
                \$('#promotion_reduction').val('');
            }
        });

    });

    function envoie() {
        var valider=\$('#send');
        valider.addClass(\"disabled\");
        valider.html(\"<i class='fa-solid fa-spinner fa-spin-pulse fa-lg'></i>\");
        \$('#form').submit();
    }
    function initialisationpromo() {
        if (\$('#promotion_type option:selected').val() == 'Unités Gratuites') {
            \$('#tranche').show();
            \$('#reduction').hide();
            \$('#promotion_reduction').val('');

        }else if (\$('#promotion_type option:selected').val() == 'Réduction') {
            \$('#tranche').hide();
            \$('#reduction').show();
            \$('#promotion_premier').val('');
            \$('#promotion_ugpremier').val('');
            \$('#promotion_deuxieme').val('');
            \$('#promotion_ugdeuxieme').val('');
            \$('#promotion_troisieme').val('');
            \$('#promotion_ugtroisieme').val('');
        }else{
            \$('#tranche').hide();
            \$('#reduction').hide();
        }
    }
    function promosubmit() {// fonction enregistrement promotion
        var valider=\$('#send');
        var date1 = new Date(\$('#promotion_debut').val());
        var date2 = new Date(\$('#promotion_fin').val());
        let premier = \$('#promotion_premier').val();
        let ugpremier = \$('#promotion_ugpremier').val();
        let deuxieme = \$('#promotion_deuxieme').val();
        let ugdeuxieme = \$('#promotion_ugdeuxieme').val();
        let troisieme = \$('#promotion_troisieme').val();
        let ugtroisieme = \$('#promotion_ugtroisieme').val();
        let quatrieme = \$('#promotion_quatrieme').val();
        let ugquatrieme = \$('#promotion_ugquatrieme').val();
        let cinquieme = \$('#promotion_cinquieme').val();
        let ugcinquieme = \$('#promotion_ugcinquieme').val();
        // valider.addClass(\"disabled\");
        if (\$('#promotion_type option:selected').val() == 'Unités Gratuites') {


            if(\$('#promotion_premier').val() != '' &&
                \$('#promotion_ugpremier').val() != '' &&
                \$('#promotion_deuxieme').val() != '' &&
                \$('#promotion_ugdeuxieme').val() != '' &&
                \$('#promotion_troisieme').val() != '' &&
                \$('#promotion_ugtroisieme').val() != '' &&
                \$('#promotion_quatrieme').val() != '' &&
                \$('#promotion_ugquatrieme').val() != '' &&
                \$('#promotion_cinquieme').val() != '' &&
                \$('#promotion_ugcinquieme').val() != '' &&
                \$('#promotion_designation').val() != '' &&
                date1 != 'Invalid Date' &&
                date2 != 'Invalid Date' &&
                date1 >= new Date()) {

                // if(premier >= ugpremier &&
                //     deuxieme >= ugdeuxieme &&
                //     troisieme >= ugtroisieme &&
                //     quatrieme >= ugquatrieme &&
                //     cinquieme >= ugcinquieme &&
                //     premier <= deuxieme  &&
                //     deuxieme <= troisieme &&
                //     troisieme <= quatrieme &&
                //     quatrieme <= cinquieme
                // ) {
                    valider.html(\"<i class='fa-solid fa-spinner fa-spin-pulse fa-lg'></i>\");
                    \$('#form').submit();
                // }else alert(\"Veuillez verifier les valeurs de la promotion\");

            }else{
                alert('";
        // line 335
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Veuillez saisir tous les champs"), "html", null, true);
        yield "');
            }

        }else if (\$('#promotion_type option:selected').val() == 'Réduction') {

            if(\$('#promotion_reduction').val() != '' &&
                \$('#promotion_designation').val() != '' &&
                date1 != 'Invalid Date' &&
                date2 != 'Invalid Date' &&
                date1 >= new Date()) {
                valider.html(\"<i class='fa-solid fa-spinner fa-spin-pulse fa-lg'></i>\");
                \$('#form').submit();
            }else{
                alert('";
        // line 348
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Veuillez saisir tous les champs"), "html", null, true);
        yield "');
            }
        }else {
            alert('";
        // line 351
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Veuillez saisir tous les champs"), "html", null, true);
        yield "');
        }
    }

    function facture() {
        \$('#decl').trigger('click');
        return false;
    }

    //selection d'une ligne de données
    function trselect(id) {
        if (\$(\"#\" + id).is(':checked')) {
            \$(\"#tr\" + id).css('background', '#c5fbae');
        } else {
            \$(\"#tr\" + id).css('background', '');
        }
    }

    //selection de tous les pelerins
    function selectAll() {
        if (\$(\"#tous\").is(':checked')) {
            \$(\"input[type=checkbox]\").attr('checked', true);
            \$(\"input[type=checkbox]\").each(
                function () {
                    if (\$(this).is(':checked')) {

                    } else {
                        \$(this).trigger('click')
                    }
                    trselect(\$(this).attr(\"id\"));
                });
        } else {
            \$(\"input[type=checkbox]\").attr('checked', false);
            \$(\"input[type=checkbox]\").each(
                function () {
                    if (\$(this).is(':checked')) {
                        \$(this).trigger('click')
                    }
                    trselect(\$(this).attr(\"id\"));
                });
        }
    }

    var table = \$('#liste').DataTable({

        responsive: true,
        \"pageLength\": 100,
        buttons: [{
            extend: 'excelHtml5',
            text: '<i class=\"fa fa-file-excel\"></i> ";
        // line 400
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Exporter vers Excel"), "html", null, true);
        yield "',
            attr: {
                class: 'btn btn-shadow btn-green mx-3'
            },
        },
            {
                extend: 'pdfHtml5',
                text: '<i class=\"fa fa-file-pdf\"></i> ";
        // line 407
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Exporter vers PDF"), "html", null, true);
        yield "',
                attr: {
                    class: 'btn btn-shadow btn-danger'
                },
            }],
        language: {
            processing: \"";
        // line 413
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Traitement en cours..."), "html", null, true);
        yield "\",
            search: \"";
        // line 414
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Rechercher"), "html", null, true);
        yield " :\",
            lengthMenu: \"";
        // line 415
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Afficher"), "html", null, true);
        yield " _MENU_ ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("élèments"), "html", null, true);
        yield "\",
            info: \"";
        // line 416
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Affichage de l'élement"), "html", null, true);
        yield " _START_ ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("à"), "html", null, true);
        yield " _END_ ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sur"), "html", null, true);
        yield " _TOTAL_ ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("élèments"), "html", null, true);
        yield "\",
            infoEmpty: \"";
        // line 417
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Affichage de l'élèment 0 à 0 sur 0 élèments"), "html", null, true);
        yield "\",
            infoFiltered: \"(";
        // line 418
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtré de"), "html", null, true);
        yield " _MAX_ ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("élèment au total"), "html", null, true);
        yield ")\",
            infoPostFix: \"\",
            loadingRecords: \"";
        // line 420
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Chargement en cours..."), "html", null, true);
        yield "\",
            zeroRecords: \"";
        // line 421
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Aucun élèment à afficher"), "html", null, true);
        yield "\",
            emptyTable: \"";
        // line 422
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Aucune donnée disponible dans le tableau"), "html", null, true);
        yield "\",
            paginate: {
                first: \"";
        // line 424
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Premier"), "html", null, true);
        yield "\",
                previous: \"";
        // line 425
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Précédent"), "html", null, true);
        yield "\",
                next: \"";
        // line 426
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Suivant"), "html", null, true);
        yield "\",
                last: \"";
        // line 427
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dernier"), "html", null, true);
        yield "\"
            },
            aria: {
                sortAscending: \": ";
        // line 430
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("activer pour trier la colonne par ordre croissant"), "html", null, true);
        yield "\",
                sortDescending: \": ";
        // line 431
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("activer pour trier la colonne par ordre décroissant"), "html", null, true);
        yield "\"
            }
        }

    });
    table.buttons().container().appendTo('#exporter');

    var messagerie = \$('#message').DataTable({

        responsive: true,
        \"pageLength\": 25,
        buttons: [{
            extend: 'excelHtml5',
            text: '<i class=\"fa fa-file-excel\"></i> ";
        // line 444
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Exporter vers Excel"), "html", null, true);
        yield "',
            attr: {
                class: 'btn btn-shadow btn-green mx-3'
            },
        },
            {
                extend: 'pdfHtml5',
                text: '<i class=\"fa fa-file-pdf\"></i> ";
        // line 451
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Exporter vers PDF"), "html", null, true);
        yield "',
                attr: {
                    class: 'btn btn-shadow btn-danger'
                },
            }],
        language: {
            processing: \"";
        // line 457
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Traitement en cours..."), "html", null, true);
        yield "\",
            search: \"";
        // line 458
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Rechercher"), "html", null, true);
        yield " :\",
            lengthMenu: \"";
        // line 459
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Afficher"), "html", null, true);
        yield " _MENU_ ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("messages"), "html", null, true);
        yield "\",
            info: \"";
        // line 460
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Affichage de message"), "html", null, true);
        yield " _START_ ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("à"), "html", null, true);
        yield " _END_ ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sur"), "html", null, true);
        yield " _TOTAL_ ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("messages"), "html", null, true);
        yield "\",
            infoEmpty: \"";
        // line 461
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Affichage de message 0 à 0 sur 0 message"), "html", null, true);
        yield "\",
            infoFiltered: \"(";
        // line 462
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtré de"), "html", null, true);
        yield " _MAX_ ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message au total"), "html", null, true);
        yield ")\",
            infoPostFix: \"\",
            loadingRecords: \"";
        // line 464
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Chargement en cours..."), "html", null, true);
        yield "\",
            zeroRecords: \"";
        // line 465
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Aucun message à afficher"), "html", null, true);
        yield "\",
            emptyTable: \"";
        // line 466
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Aucun message"), "html", null, true);
        yield "\",
            paginate: {
                first: \"";
        // line 468
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Premier"), "html", null, true);
        yield "\",
                previous: \"";
        // line 469
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Précédent"), "html", null, true);
        yield "\",
                next: \"";
        // line 470
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Suivant"), "html", null, true);
        yield "\",
                last: \"";
        // line 471
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dernier"), "html", null, true);
        yield "\"
            },
            aria: {
                sortAscending: \": ";
        // line 474
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("activer pour trier la colonne par ordre croissant"), "html", null, true);
        yield "\",
                sortDescending: \": ";
        // line 475
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("activer pour trier la colonne par ordre décroissant"), "html", null, true);
        yield "\"
            }
        }

    });

    //gestion des tableaux multiples
    function reponse() {
        var table = \$('table').DataTable({

            responsive: true,
            \"pageLength\": 25,
            buttons: [{
                extend: 'excelHtml5',
                text: '<i class=\"fa fa-file-excel fa-lg\"></i> Exporter vers Excel',
                attr: {
                    class: 'btn btn-shadow btn-green'
                },
            }],
            language: {
                processing: \"";
        // line 495
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Traitement en cours..."), "html", null, true);
        yield "\",
                search: \"";
        // line 496
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Rechercher"), "html", null, true);
        yield " :\",
                lengthMenu: \"";
        // line 497
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Afficher"), "html", null, true);
        yield " _MENU_ ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("élèments"), "html", null, true);
        yield "\",
                info: \"";
        // line 498
        yield "Affichage de l'élement|trans";
        yield " _START_ ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("à"), "html", null, true);
        yield " _END_ ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sur"), "html", null, true);
        yield " _TOTAL_ ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("élèments"), "html", null, true);
        yield "\",
                infoEmpty: \"";
        // line 499
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Affichage de l'élèment 0 à 0 sur 0 élèments"), "html", null, true);
        yield "\",
                infoFiltered: \"(";
        // line 500
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtré de"), "html", null, true);
        yield " _MAX_ ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("élèment au total"), "html", null, true);
        yield ")\",
                infoPostFix: \"\",
                loadingRecords: \"";
        // line 502
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Chargement en cours..."), "html", null, true);
        yield "\",
                zeroRecords: \"";
        // line 503
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Aucun élèment à afficher"), "html", null, true);
        yield "\",
                emptyTable: \"";
        // line 504
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Aucune donnée disponible dans le tableau"), "html", null, true);
        yield "\",
                paginate: {
                    first: \"";
        // line 506
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Premier"), "html", null, true);
        yield "\",
                    previous: \"";
        // line 507
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Précédent"), "html", null, true);
        yield "\",
                    next: \"";
        // line 508
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Suivant"), "html", null, true);
        yield "\",
                    last: \"";
        // line 509
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dernier"), "html", null, true);
        yield "\"
                },
                aria: {
                    sortAscending: \": ";
        // line 512
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("activer pour trier la colonne par ordre croissant"), "html", null, true);
        yield "\",
                    sortDescending: \": ";
        // line 513
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("activer pour trier la colonne par ordre décroissant"), "html", null, true);
        yield "\"
                }
            }

        });
    }

    /*****Start Script de conversion le prix en lettre*****/

        // Utilisation de la fonction NumberToLetter
    var total = document.getElementById(\"total\").innerText;
    var totalEnLettres = NumberToLetter(total);
    document.getElementById(\"conversion\").innerHTML = totalEnLettres;
    function Unite( nombre ){
        var unite;
        switch( nombre ){
            case 0: unite = \"zero\";\t\tbreak;
            case 1: unite = \"un\";\t\tbreak;
            case 2: unite = \"deux\";\t\tbreak;
            case 3: unite = \"trois\"; \tbreak;
            case 4: unite = \"quatre\"; \tbreak;
            case 5: unite = \"cinq\"; \tbreak;
            case 6: unite = \"six\"; \t\tbreak;
            case 7: unite = \"sept\"; \tbreak;
            case 8: unite = \"huit\"; \tbreak;
            case 9: unite = \"neuf\"; \tbreak;
        }//fin switch
        return unite;
    }//-----------------------------------------------------------------------

    function Dizaine( nombre ){
        switch( nombre ){
            case 10: dizaine = \"dix\"; break;
            case 11: dizaine = \"onze\"; break;
            case 12: dizaine = \"douze\"; break;
            case 13: dizaine = \"treize\"; break;
            case 14: dizaine = \"quatorze\"; break;
            case 15: dizaine = \"quinze\"; break;
            case 16: dizaine = \"seize\"; break;
            case 17: dizaine = \"dix-sept\"; break;
            case 18: dizaine = \"dix-huit\"; break;
            case 19: dizaine = \"dix-neuf\"; break;
            case 20: dizaine = \"vingt\"; break;
            case 30: dizaine = \"trente\"; break;
            case 40: dizaine = \"quarante\"; break;
            case 50: dizaine = \"cinquante\"; break;
            case 60: dizaine = \"soixante\"; break;
            case 70: dizaine = \"soixante-dix\"; break;
            case 80: dizaine = \"quatre-vingt\"; break;
            case 90: dizaine = \"quatre-vingt-dix\"; break;
        }//fin switch
        return dizaine;
    }//-----------------------------------------------------------------------

    function NumberToLetter( nombre ){
        var i, j, n, quotient, reste, nb ;
        var ch
        var numberToLetter='';
        //__________________________________

        if(  nombre.toString().replace( / /gi, \"\" ).length > 15  )\treturn \"d�passement de capacit�\";
        if(  isNaN(nombre.toString().replace( / /gi, \"\" ))  )\t\treturn \"Nombre non valide\";

        nb = parseFloat(nombre.toString().replace( / /gi, \"\" ));
        if(  Math.ceil(nb) != nb  )\treturn  \"Nombre avec virgule non g�r�.\";

        n = nb.toString().length;
        switch( n ){
            case 1: numberToLetter = Unite(nb); break;
            case 2: if(  nb > 19  ){
                quotient = Math.floor(nb / 10);
                reste = nb % 10;
                if(  nb < 71 || (nb > 79 && nb < 91)  ){
                    if(  reste == 0  ) numberToLetter = Dizaine(quotient * 10);
                    if(  reste == 1  ) numberToLetter = Dizaine(quotient * 10) + \"-et-\" + Unite(reste);
                    if(  reste > 1   ) numberToLetter = Dizaine(quotient * 10) + \"-\" + Unite(reste);
                }else numberToLetter = Dizaine((quotient - 1) * 10) + \"-\" + Dizaine(10 + reste);
            }else numberToLetter = Dizaine(nb);
                break;
            case 3: quotient = Math.floor(nb / 100);
                reste = nb % 100;
                if(  quotient == 1 && reste == 0   ) numberToLetter = \"cent\";
                if(  quotient == 1 && reste != 0   ) numberToLetter = \"cent\" + \" \" + NumberToLetter(reste);
                if(  quotient > 1 && reste == 0    ) numberToLetter = Unite(quotient) + \" cents\";
                if(  quotient > 1 && reste != 0    ) numberToLetter = Unite(quotient) + \" cent \" + NumberToLetter(reste);
                break;
            case 4 :  quotient = Math.floor(nb / 1000);
                reste = nb - quotient * 1000;
                if(  quotient == 1 && reste == 0   ) numberToLetter = \"mille\";
                if(  quotient == 1 && reste != 0   ) numberToLetter = \"mille\" + \" \" + NumberToLetter(reste);
                if(  quotient > 1 && reste == 0    ) numberToLetter = NumberToLetter(quotient) + \" mille\";
                if(  quotient > 1 && reste != 0    ) numberToLetter = NumberToLetter(quotient) + \" mille \" + NumberToLetter(reste);
                break;
            case 5 :  quotient = Math.floor(nb / 1000);
                reste = nb - quotient * 1000;
                if(  quotient == 1 && reste == 0   ) numberToLetter = \"mille\";
                if(  quotient == 1 && reste != 0   ) numberToLetter = \"mille\" + \" \" + NumberToLetter(reste);
                if(  quotient > 1 && reste == 0    ) numberToLetter = NumberToLetter(quotient) + \" mille\";
                if(  quotient > 1 && reste != 0    ) numberToLetter = NumberToLetter(quotient) + \" mille \" + NumberToLetter(reste);
                break;
            case 6 :  quotient = Math.floor(nb / 1000);
                reste = nb - quotient * 1000;
                if(  quotient == 1 && reste == 0   ) numberToLetter = \"mille\";
                if(  quotient == 1 && reste != 0   ) numberToLetter = \"mille\" + \" \" + NumberToLetter(reste);
                if(  quotient > 1 && reste == 0    ) numberToLetter = NumberToLetter(quotient) + \" mille\";
                if(  quotient > 1 && reste != 0    ) numberToLetter = NumberToLetter(quotient) + \" mille \" + NumberToLetter(reste);
                break;
            case 7: quotient = Math.floor(nb / 1000000);
                reste = nb % 1000000;
                if(  quotient == 1 && reste == 0  ) numberToLetter = \"un million\";
                if(  quotient == 1 && reste != 0  ) numberToLetter = \"un million\" + \" \" + NumberToLetter(reste);
                if(  quotient > 1 && reste == 0   ) numberToLetter = NumberToLetter(quotient) + \" millions\";
                if(  quotient > 1 && reste != 0   ) numberToLetter = NumberToLetter(quotient) + \" millions \" + NumberToLetter(reste);
                break;
            case 8: quotient = Math.floor(nb / 1000000);
                reste = nb % 1000000;
                if(  quotient == 1 && reste == 0  ) numberToLetter = \"un million\";
                if(  quotient == 1 && reste != 0  ) numberToLetter = \"un million\" + \" \" + NumberToLetter(reste);
                if(  quotient > 1 && reste == 0   ) numberToLetter = NumberToLetter(quotient) + \" millions\";
                if(  quotient > 1 && reste != 0   ) numberToLetter = NumberToLetter(quotient) + \" millions \" + NumberToLetter(reste);
                break;
            case 9: quotient = Math.floor(nb / 1000000);
                reste = nb % 1000000;
                if(  quotient == 1 && reste == 0  ) numberToLetter = \"un million\";
                if(  quotient == 1 && reste != 0  ) numberToLetter = \"un million\" + \" \" + NumberToLetter(reste);
                if(  quotient > 1 && reste == 0   ) numberToLetter = NumberToLetter(quotient) + \" millions\";
                if(  quotient > 1 && reste != 0   ) numberToLetter = NumberToLetter(quotient) + \" millions \" + NumberToLetter(reste);
                break;
            case 10: quotient = Math.floor(nb / 1000000000);
                reste = nb - quotient * 1000000000;
                if(  quotient == 1 && reste == 0  ) numberToLetter = \"un milliard\";
                if(  quotient == 1 && reste != 0  ) numberToLetter = \"un milliard\" + \" \" + NumberToLetter(reste);
                if(  quotient > 1 && reste == 0   ) numberToLetter = NumberToLetter(quotient) + \" milliards\";
                if(  quotient > 1 && reste != 0   ) numberToLetter = NumberToLetter(quotient) + \" milliards \" + NumberToLetter(reste);
                break;
            case 11: quotient = Math.floor(nb / 1000000000);
                reste = nb - quotient * 1000000000;
                if(  quotient == 1 && reste == 0  ) numberToLetter = \"un milliard\";
                if(  quotient == 1 && reste != 0  ) numberToLetter = \"un milliard\" + \" \" + NumberToLetter(reste);
                if(  quotient > 1 && reste == 0   ) numberToLetter = NumberToLetter(quotient) + \" milliards\";
                if(  quotient > 1 && reste != 0   ) numberToLetter = NumberToLetter(quotient) + \" milliards \" + NumberToLetter(reste);
                break;
            case 12: quotient = Math.floor(nb / 1000000000);
                reste = nb - quotient * 1000000000;
                if(  quotient == 1 && reste == 0  ) numberToLetter = \"un milliard\";
                if(  quotient == 1 && reste != 0  ) numberToLetter = \"un milliard\" + \" \" + NumberToLetter(reste);
                if(  quotient > 1 && reste == 0   ) numberToLetter = NumberToLetter(quotient) + \" milliards\";
                if(  quotient > 1 && reste != 0   ) numberToLetter = NumberToLetter(quotient) + \" milliards \" + NumberToLetter(reste);
                break;
            case 13: quotient = Math.floor(nb / 1000000000000);
                reste = nb - quotient * 1000000000000;
                if(  quotient == 1 && reste == 0  ) numberToLetter = \"un billion\";
                if(  quotient == 1 && reste != 0  ) numberToLetter = \"un billion\" + \" \" + NumberToLetter(reste);
                if(  quotient > 1 && reste == 0   ) numberToLetter = NumberToLetter(quotient) + \" billions\";
                if(  quotient > 1 && reste != 0   ) numberToLetter = NumberToLetter(quotient) + \" billions \" + NumberToLetter(reste);
                break;
            case 14: quotient = Math.floor(nb / 1000000000000);
                reste = nb - quotient * 1000000000000;
                if(  quotient == 1 && reste == 0  ) numberToLetter = \"un billion\";
                if(  quotient == 1 && reste != 0  ) numberToLetter = \"un billion\" + \" \" + NumberToLetter(reste);
                if(  quotient > 1 && reste == 0   ) numberToLetter = NumberToLetter(quotient) + \" billions\";
                if(  quotient > 1 && reste != 0   ) numberToLetter = NumberToLetter(quotient) + \" billions \" + NumberToLetter(reste);
                break;
            case 15: quotient = Math.floor(nb / 1000000000000);
                reste = nb - quotient * 1000000000000;
                if(  quotient == 1 && reste == 0  ) numberToLetter = \"un billion\";
                if(  quotient == 1 && reste != 0  ) numberToLetter = \"un billion\" + \" \" + NumberToLetter(reste);
                if(  quotient > 1 && reste == 0   ) numberToLetter = NumberToLetter(quotient) + \" billions\";
                if(  quotient > 1 && reste != 0   ) numberToLetter = NumberToLetter(quotient) + \" billions \" + NumberToLetter(reste);
                break;
        }//fin switch
        /*respect de l'accord de quatre-vingt*/
        if(  numberToLetter.substr(numberToLetter.length-\"quatre-vingt\".length,\"quatre-vingt\".length) == \"quatre-vingt\"  ) numberToLetter = numberToLetter + \"s\";

        return numberToLetter;
    }//-----------------------------------------------------------------------

    /*****end Script de conversion le prix en lettre*****/
</script>
";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("DataTables/datatables.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fontawesome/js/all.js"), "html", null, true);
        yield "\"></script>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "includes/javascript.html.twig";
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
        return array (  961 => 14,  957 => 13,  953 => 12,  949 => 11,  944 => 10,  937 => 7,  752 => 513,  748 => 512,  742 => 509,  738 => 508,  734 => 507,  730 => 506,  725 => 504,  721 => 503,  717 => 502,  710 => 500,  706 => 499,  696 => 498,  690 => 497,  686 => 496,  682 => 495,  659 => 475,  655 => 474,  649 => 471,  645 => 470,  641 => 469,  637 => 468,  632 => 466,  628 => 465,  624 => 464,  617 => 462,  613 => 461,  603 => 460,  597 => 459,  593 => 458,  589 => 457,  580 => 451,  570 => 444,  554 => 431,  550 => 430,  544 => 427,  540 => 426,  536 => 425,  532 => 424,  527 => 422,  523 => 421,  519 => 420,  512 => 418,  508 => 417,  498 => 416,  492 => 415,  488 => 414,  484 => 413,  475 => 407,  465 => 400,  413 => 351,  407 => 348,  391 => 335,  173 => 120,  166 => 116,  159 => 112,  152 => 108,  140 => 99,  127 => 89,  53 => 17,  51 => 7,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "includes/javascript.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\includes\\javascript.html.twig");
    }
}
