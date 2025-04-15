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

/* includes/head.html.twig */
class __TwigTemplate_299a7659016d54116093e4877b5a17e9 extends Template
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
        yield "<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
<meta name=\"description\" content=\"GNT PHARNA est en ligne pour la vente, la distribution et la promotion de produits pharmaceutiques\">
<meta name=\"title\" content=\"GNT PHARNA\">
<meta name=\"author\" content=\"EUCLIDES\">
";
        // line 7
        yield "<meta name=\"msapplication-config\" content=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("browserconfig.xml"), "html", null, true);
        yield "\">
<meta name=\"msapplication-TileColor\" content=\"#ffffff06\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"apple-mobile-web-app-title\" content=\"Hajjalbayt\">
<meta name=\"version\" content=\"4.9.4\">
<link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/favicon.ico"), "html", null, true);
        yield "\" rel=\"shortcut icon\">
<link href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/favicon-16x16.ico"), "html", null, true);
        yield "\" sizes=\"16x16\" rel=\"shortcut icon\">
<link href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/favicon-32x32.ico"), "html", null, true);
        yield "\" sizes=\"32x32\" rel=\"shortcut icon\">
<link href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/favicon-48x48.ico"), "html", null, true);
        yield "\" sizes=\"48x48\" rel=\"shortcut icon\">
<link href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/favicon-64x64.ico"), "html", null, true);
        yield "\" sizes=\"64x64\" rel=\"shortcut icon\">
<link href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/favicon-194x194.ico"), "html", null, true);
        yield "\" sizes=\"194x19\" rel=\"shortcut icon\">
<link href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/favicon-16x16.png"), "html", null, true);
        yield "\" rel=\"icon\" sizes=\"16x16\" type=\"image/png\">
<link href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/favicon-32x32.png"), "html", null, true);
        yield "\" rel=\"icon\" sizes=\"32x32\" type=\"image/png\">
<link href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/favicon-48x48.png"), "html", null, true);
        yield "\" rel=\"icon\" sizes=\"48x48\" type=\"image/png\">
<link href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/favicon-64x64.png"), "html", null, true);
        yield "\" rel=\"icon\" sizes=\"64x64\" type=\"image/png\">
<link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/favicon-194x194.png"), "html", null, true);
        yield "\" rel=\"icon\" sizes=\"194x194\" type=\"image/png\">
<!-- Android Icons -->
<link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/android-chrome-192x192.png"), "html", null, true);
        yield "\" rel=\"icon\" sizes=\"192x192\" type=\"image/png\">
<!-- IOS Touch Icons -->
<link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/apple-touch-icon-57x57.png"), "html", null, true);
        yield "\" rel=\"apple-touch-icon\" sizes=\"57x57\">
<link href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/apple-touch-icon-72x72.png"), "html", null, true);
        yield "\" rel=\"apple-touch-icon\" sizes=\"72x72\">
<link href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/apple-touch-icon-114x114.png"), "html", null, true);
        yield "\" rel=\"apple-touch-icon\" sizes=\"114x114\">
<link href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/apple-touch-icon-144x144.png"), "html", null, true);
        yield "\" rel=\"apple-touch-icon\" sizes=\"144x144\">
<link href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/apple-touch-icon-180x180.png"), "html", null, true);
        yield "\" rel=\"apple-touch-icon\" sizes=\"180x180\">
<link href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/apple-touch-icon-precomposed.png"), "html", null, true);
        yield "\" rel=\"apple-touch-icon-precomposed\">
<link href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/safari-pinned-tab.svg"), "html", null, true);
        yield "\" rel=\"mask-icon\">
<!-- iOS Startup images -->
<link href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/splashscreens/iphone5_splash.png"), "html", null, true);
        yield "\" media=\"(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)\" rel=\"apple-touch-startup-image\">
<link href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/splashscreens/iphone6_splash.png"), "html", null, true);
        yield "\" media=\"(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)\" rel=\"apple-touch-startup-image\">
<link href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/splashscreens/iphoneplus_splash.png"), "html", null, true);
        yield "\" media=\"(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)\" rel=\"apple-touch-startup-image\">
<link href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/splashscreens/iphonex_splash.png"), "html", null, true);
        yield "\" media=\"(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)\" rel=\"apple-touch-startup-image\">
<link href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/splashscreens/iphonexr_splash.png"), "html", null, true);
        yield "\" media=\"(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)\" rel=\"apple-touch-startup-image\">
<link href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/splashscreens/iphonexsmax_splash.png"), "html", null, true);
        yield "\" media=\"(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)\" rel=\"apple-touch-startup-image\">
<link href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/splashscreens/ipad_splash.png"), "html", null, true);
        yield "\" media=\"(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)\" rel=\"apple-touch-startup-image\">
<link href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/splashscreens/ipadpro1_splash.png"), "html", null, true);
        yield "\" media=\"(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)\" rel=\"apple-touch-startup-image\">
<link href=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/splashscreens/ipadpro3_splash.png"), "html", null, true);
        yield "\" media=\"(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2)\" rel=\"apple-touch-startup-image\">
<link href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/splashscreens/ipadpro2_splash.png"), "html", null, true);
        yield "\" media=\"(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)\" rel=\"apple-touch-startup-image\">
<!-- Manifest -->
<link href=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("manifest.json"), "html", null, true);
        yield "\" rel=\"manifest\">
<script async src=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/pwacompat.min.js"), "html", null, true);
        yield "\" crossorigin=\"anonymous\"></script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "includes/head.html.twig";
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
        return array (  182 => 46,  178 => 45,  173 => 43,  169 => 42,  165 => 41,  161 => 40,  157 => 39,  153 => 38,  149 => 37,  145 => 36,  141 => 35,  137 => 34,  132 => 32,  128 => 31,  124 => 30,  120 => 29,  116 => 28,  112 => 27,  108 => 26,  103 => 24,  98 => 22,  94 => 21,  90 => 20,  86 => 19,  82 => 18,  78 => 17,  74 => 16,  70 => 15,  66 => 14,  62 => 13,  58 => 12,  49 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "includes/head.html.twig", "C:\\wamp\\www\\upgradegnt\\templates\\includes\\head.html.twig");
    }
}
