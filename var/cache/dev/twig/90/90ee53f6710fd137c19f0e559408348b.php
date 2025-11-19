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

/* errors/error.html.twig */
class __TwigTemplate_b23d40a6d905873acc5956cacc9e7cb7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "errors/error.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "errors/error.html.twig"));

        // line 1
        yield "<!DOCTYPE html PUBLIC \"-//W3C//DTDXHTML1.0Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html lang=\"en\">
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html;\" charset=\"UTF-8\" />
\t\t<meta name=\"robots\" content=\"INDEX,FOLLOW\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t\t
\t\t<link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        yield "\">
\t\t<link rel=\"canonical\" href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase");
        yield "\">
\t\t<link href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.css"), "html", null, true);
        yield "\" type=\"text/css\" rel=\"stylesheet\" media=\"all\" />

\t\t<title>
\t\t\t";
        // line 13
        if (((isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 13, $this->source); })()) == 404)) {
            // line 14
            yield "\t\t\t\t404 - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Page not found"), "html", null, true);
            yield "
\t\t\t";
        } elseif ((        // line 15
(isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 15, $this->source); })()) == 403)) {
            // line 16
            yield "\t\t\t\t403 - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forbidden"), "html", null, true);
            yield "
\t\t\t";
        } elseif ((        // line 17
(isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 17, $this->source); })()) == 500)) {
            // line 18
            yield "\t\t\t\t500 - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Internal server error"), "html", null, true);
            yield "
\t\t\t";
        } else {
            // line 20
            yield "\t\t\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 20, $this->source); })()), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error"), "html", null, true);
            yield "
\t\t\t";
        }
        // line 22
        yield "\t\t</title>

\t\t<style>
\t\t\t.error-dialog {
\t\t\t\tpadding: 25px;
\t\t\t\tposition: fixed;
\t\t\t\ttop: 50%;
\t\t\t\tleft: 50%;
\t\t\t\ttransform: translate(-50%, -50%);
\t\t\t}

\t\t\t.error-dialog h1 {
\t\t\t\tcolor: #6F6F6F;
\t\t\t\tfont-size: 21px;
\t\t\t\tfont-weight: 700;
\t\t\t\ttext-transform: uppercase;
\t\t\t\tmargin: unset;
\t\t\t\tline-height: 1.4em;
\t\t\t}

\t\t\t.section-separator {
\t\t\t\twidth: 50px;
\t\t\t\tborder: 1px solid #6F6F6F;
\t\t\t\tmargin: 14px 0px 20px;
\t\t\t}
\t\t\t.uv-logo {
    \t\t\theight: 70px;
 \t\t\t\tdisplay: table-cell;
\t\t\t}
\t\t</style>
\t</head>

\t<body>
\t\t";
        // line 55
        $context["websiteDetails"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 55, $this->source); })()), "getWebsiteDetails", ["knowledgebase"], "method", false, false, false, 55);
        yield "\t
\t\t";
        // line 56
        $context["currentPath"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "request", [], "any", false, false, false, 56), "schemeAndHttpHost", [], "any", false, false, false, 56) . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "request", [], "any", false, false, false, 56), "requestUri", [], "any", false, false, false, 56));
        // line 57
        yield "
\t\t<div class=\"uv-box-server-error\">
\t\t\t<div class=\"uv-box-server-error-lt\">
\t\t\t\t";
        // line 60
        if ((($tmp = (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 60, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "\t\t\t\t\t<a class=\"uv-logo\" href=\"";
            yield ((CoreExtension::inFilter("/en/member/", (isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 61, $this->source); })()))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_dashboard")) : ((((($tmp = (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 61, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase")) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "scheme", [], "any", false, false, false, 61) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "httpHost", [], "any", false, false, false, 61)), "html", null, true)))));
            yield "\">
\t\t\t\t\t\t";
            // line 62
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 62, $this->source); })()), "logo", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 63
                yield "\t\t\t\t\t\t\t<img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "request", [], "any", false, false, false, 63), "scheme", [], "any", false, false, false, 63) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "request", [], "any", false, false, false, 63), "httpHost", [], "any", false, false, false, 63)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 63, $this->source); })()), "logo", [], "any", false, false, false, 63), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 63, $this->source); })()), "name", [], "any", false, false, false, 63), "html", null, true);
                yield "\">
\t\t\t\t\t\t";
            } else {
                // line 65
                yield "\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"122\" height=\"48\" viewBox=\"0 0 122 48\">
\t\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t\t<style>
\t\t\t\t\t\t\t\t\t\t.cls-1 {
\t\t\t\t\t\t\t\t\t\t\tfill: #9f9f9f;
\t\t\t\t\t\t\t\t\t\t\tfill-rule: evenodd;
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t</style>
\t\t\t\t\t\t\t\t</defs>

\t\t\t\t\t\t\t\t<path id=\"uvdesk-icon\" class=\"cls-1\" d=\"M43.5,23A1.5,1.5,0,0,1,45,24.5V25H42V24.5A1.5,1.5,0,0,1,43.5,23ZM39,31H38V18h1a2.257,2.257,0,0,1,2,2v9A2.257,2.257,0,0,1,39,31Zm6-5H42s1.769,15.329-15,17c0.011-.1-0.027,1.292,0,2C33.324,44.708,45.563,40.575,45,26ZM25.987,44A1.988,1.988,0,1,1,24,41.989,2,2,0,0,1,25.987,44ZM8,41A18.173,18.173,0,0,1,3.386,29.28L3,24a14.906,14.906,0,0,0,9-5,14.838,14.838,0,0,0,5,4,17.2,17.2,0,0,0,16-1l4-3a2.479,2.479,0,0,0,0-1C36.692,8.308,27.872,0,18,0h0A17.913,17.913,0,0,0,0,18V29A21.17,21.17,0,0,0,5,43a16.677,16.677,0,0,0,7,5l1-3C10.936,44.167,9.633,42.824,8,41Zm2.492-15A3.5,3.5,0,1,0,14,29.5,3.5,3.5,0,0,0,10.492,26ZM27.5,33A3.5,3.5,0,1,0,24,29.5,3.5,3.5,0,0,0,27.5,33Z\"/>
\t\t\t\t\t\t\t\t<path id=\"uvdesk\" class=\"cls-1\" d=\"M53.078,25.329c0,2.976,1.1,4.56,3.576,4.56a4.931,4.931,0,0,0,3.84-2.112h0.072L60.734,29.6h1.632V17.937H60.4v8.281c-1.1,1.368-1.944,1.968-3.144,1.968-1.536,0-2.184-.936-2.184-3.12V17.937H53.078v7.393ZM68.822,29.6h2.3l4.128-11.665H73.31L71.1,24.561c-0.336,1.152-.72,2.328-1.056,3.432h-0.1c-0.36-1.1-.744-2.28-1.08-3.432l-2.208-6.625h-2.04Zm7.752-5.809c0,3.888,1.9,6.1,4.824,6.1a5.262,5.262,0,0,0,3.528-1.656H85L85.166,29.6H86.8V12.512H84.806V17l0.1,1.992a4.806,4.806,0,0,0-3.264-1.344C78.973,17.649,76.573,20,76.573,23.793Zm2.04-.024c0-2.664,1.488-4.464,3.36-4.464a4.06,4.06,0,0,1,2.832,1.224v6.1a3.948,3.948,0,0,1-2.976,1.608C79.789,28.233,78.613,26.553,78.613,23.769Zm11.256,0.024c0,3.816,2.472,6.1,5.593,6.1a6.947,6.947,0,0,0,3.84-1.2l-0.7-1.3a5.271,5.271,0,0,1-2.9.912c-2.232,0-3.744-1.584-3.888-4.1h7.873a6.956,6.956,0,0,0,.072-1.08c0-3.336-1.68-5.472-4.656-5.472C92.437,17.649,89.869,19.977,89.869,23.793Zm1.92-.888c0.24-2.352,1.728-3.7,3.36-3.7,1.824,0,2.88,1.32,2.88,3.7H91.789Zm9.552,5.376a7.021,7.021,0,0,0,4.344,1.608c2.76,0,4.272-1.584,4.272-3.48,0-2.208-1.872-2.9-3.552-3.528-1.32-.5-2.592-0.936-2.592-2.016,0-.888.672-1.68,2.136-1.68a4.331,4.331,0,0,1,2.664,1.032l0.936-1.248a5.822,5.822,0,0,0-3.624-1.32c-2.52,0-4.008,1.44-4.008,3.312,0,1.968,1.824,2.76,3.48,3.36,1.272,0.48,2.664,1.008,2.664,2.208,0,1.008-.768,1.824-2.3,1.824a5.245,5.245,0,0,1-3.432-1.392Zm11.352,1.32h1.944V26.529l2.184-2.544,3.408,5.617h2.16l-4.44-6.985,3.912-4.68h-2.184l-4.968,6.145h-0.072V12.512h-1.944V29.6Z\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t";
            }
            // line 79
            yield "\t\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 81
            yield "\t\t\t\t\t<a href=\"http://uvdesk.com\">
\t\t\t\t\t\t<img src=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/images/uvdesk-logo.svg"), "html", null, true);
            yield "\" title=\"UVdesk\">
\t\t\t\t\t</a>\t
\t\t\t\t";
        }
        // line 85
        yield "
\t\t\t\t<div class=\"uv-box-block\">
\t\t\t\t\t<p class=\"uv-error-title\">
\t\t\t\t\t\t";
        // line 88
        if (((isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 88, $this->source); })()) == 404)) {
            // line 89
            yield "\t\t\t\t\t\t\t<span>404</span>
\t\t\t\t\t\t\t- ";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Page not found"), "html", null, true);
            yield "
\t\t\t\t\t\t\t<p>";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("We were not able to find the page you are looking for."), "html", null, true);
            yield "</p>
\t\t\t\t\t\t";
        } elseif ((        // line 92
(isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 92, $this->source); })()) == 403)) {
            // line 93
            yield "\t\t\t\t\t\t\t<span>403</span>
\t\t\t\t\t\t\t- ";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forbidden"), "html", null, true);
            yield "
\t\t\t\t\t\t\t<p>";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You don’t have the necessary permissions to access this Web page :("), "html", null, true);
            yield "</p>
\t\t\t\t\t\t";
        } elseif ((        // line 96
(isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 96, $this->source); })()) == 500)) {
            // line 97
            yield "\t\t\t\t\t\t\t<span>500</span>
\t\t\t\t\t\t\t- ";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Internal server error"), "html", null, true);
            yield "
\t\t\t\t\t\t\t<p>";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Our system has goofed up for a while, but good part is it won't last long"), "html", null, true);
            yield "</p>
\t\t\t\t\t\t";
        } else {
            // line 101
            yield "\t\t\t\t\t\t\t<span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 101, $this->source); })()), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t- ";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unknown Error"), "html", null, true);
            yield "
\t\t\t\t\t\t\t<p>";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("We are quite confused about how did you land here:/"), "html", null, true);
            yield "</p>
\t\t\t\t\t\t";
        }
        // line 105
        yield "\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"uv-box-block\">
\t\t\t\t\t<p>";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Few of the links which may help you to get back on the track:"), "html", null, true);
        yield "</p>
\t\t\t\t\t
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"";
        // line 112
        yield ((CoreExtension::inFilter("/en/member/", (isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 112, $this->source); })()))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_dashboard")) : ((((($tmp = (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 112, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase")) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "request", [], "any", false, false, false, 112), "scheme", [], "any", false, false, false, 112) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "request", [], "any", false, false, false, 112), "httpHost", [], "any", false, false, false, 112)), "html", null, true)))));
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home"), "html", null, true);
        yield "</a></li>

\t\t\t\t\t\t";
        // line 114
        if ((array_key_exists("websiteDetails", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 114, $this->source); })())))) {
            // line 115
            yield "\t\t\t\t\t\t\t<li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Support"), "html", null, true);
            yield "</a></li>
\t\t\t\t\t\t";
        }
        // line 117
        yield "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"uv-box-server-error-rt\">
\t\t\t\t";
        // line 122
        if (CoreExtension::inFilter((isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 122, $this->source); })()), [404, 500, 403])) {
            // line 123
            yield "\t\t\t\t\t";
            if (((isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 123, $this->source); })()) == 404)) {
                // line 124
                yield "\t\t\t\t\t\t\t<img class=\"error-grooves\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/images/404.png"), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 124, $this->source); })()), "html", null, true);
                yield "\" />
\t\t\t\t\t";
            } elseif ((            // line 125
(isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 125, $this->source); })()) == 500)) {
                // line 126
                yield "\t\t\t\t\t\t\t<img class=\"error-grooves\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/images/500.png"), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 126, $this->source); })()), "html", null, true);
                yield "\" />
\t\t\t\t\t";
            } else {
                // line 128
                yield "\t\t\t\t\t\t\t<img class=\"error-grooves\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/images/403.png"), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 128, $this->source); })()), "html", null, true);
                yield "\" />
\t\t\t\t\t";
            }
            // line 130
            yield "\t\t\t\t";
        } else {
            // line 131
            yield "\t\t\t\t\t\t<img class=\"error-grooves\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/images/unkown-error.png"), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 131, $this->source); })()), "html", null, true);
            yield "\" />
\t\t\t\t";
        }
        // line 133
        yield "\t\t\t</div>
\t\t\t
\t\t\t<div class=\"uv-box-footer\">
\t\t\t\t<p>";
        // line 136
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Powered by", [], "messages");
        yield " <a target=\"_blank\" href=\"https://www.uvdesk.com/en/\">";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("UVdesk", [], "messages");
        yield "</a></p>
\t\t\t</div>
\t\t</div>
\t</body>
</html>
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
        return "errors/error.html.twig";
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
        return array (  335 => 136,  330 => 133,  322 => 131,  319 => 130,  311 => 128,  303 => 126,  301 => 125,  294 => 124,  291 => 123,  289 => 122,  282 => 117,  274 => 115,  272 => 114,  265 => 112,  259 => 109,  253 => 105,  248 => 103,  244 => 102,  239 => 101,  234 => 99,  230 => 98,  227 => 97,  225 => 96,  221 => 95,  217 => 94,  214 => 93,  212 => 92,  208 => 91,  204 => 90,  201 => 89,  199 => 88,  194 => 85,  188 => 82,  185 => 81,  181 => 79,  165 => 65,  156 => 63,  154 => 62,  149 => 61,  147 => 60,  142 => 57,  140 => 56,  136 => 55,  101 => 22,  93 => 20,  87 => 18,  85 => 17,  80 => 16,  78 => 15,  73 => 14,  71 => 13,  65 => 10,  61 => 9,  57 => 8,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html PUBLIC \"-//W3C//DTDXHTML1.0Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html lang=\"en\">
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html;\" charset=\"UTF-8\" />
\t\t<meta name=\"robots\" content=\"INDEX,FOLLOW\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t\t
\t\t<link rel=\"icon\" sizes=\"16x16\" href=\"{{ asset('favicon.ico') }}\">
\t\t<link rel=\"canonical\" href=\"{{ path('helpdesk_knowledgebase') }}\">
\t\t<link href=\"{{ asset('css/main.css') }}\" type=\"text/css\" rel=\"stylesheet\" media=\"all\" />

\t\t<title>
\t\t\t{% if code == 404 %}
\t\t\t\t404 - {{ 'Page not found'|trans }}
\t\t\t{% elseif code == 403 %}
\t\t\t\t403 - {{ 'Forbidden'|trans }}
\t\t\t{% elseif code == 500 %}
\t\t\t\t500 - {{ 'Internal server error'|trans }}
\t\t\t{% else %}
\t\t\t\t{{ code }} - {{ 'Error'|trans }}
\t\t\t{% endif %}
\t\t</title>

\t\t<style>
\t\t\t.error-dialog {
\t\t\t\tpadding: 25px;
\t\t\t\tposition: fixed;
\t\t\t\ttop: 50%;
\t\t\t\tleft: 50%;
\t\t\t\ttransform: translate(-50%, -50%);
\t\t\t}

\t\t\t.error-dialog h1 {
\t\t\t\tcolor: #6F6F6F;
\t\t\t\tfont-size: 21px;
\t\t\t\tfont-weight: 700;
\t\t\t\ttext-transform: uppercase;
\t\t\t\tmargin: unset;
\t\t\t\tline-height: 1.4em;
\t\t\t}

\t\t\t.section-separator {
\t\t\t\twidth: 50px;
\t\t\t\tborder: 1px solid #6F6F6F;
\t\t\t\tmargin: 14px 0px 20px;
\t\t\t}
\t\t\t.uv-logo {
    \t\t\theight: 70px;
 \t\t\t\tdisplay: table-cell;
\t\t\t}
\t\t</style>
\t</head>

\t<body>
\t\t{% set websiteDetails = user_service.getWebsiteDetails('knowledgebase') %}\t
\t\t{% set currentPath = app.request.schemeAndHttpHost ~ app.request.requestUri %}

\t\t<div class=\"uv-box-server-error\">
\t\t\t<div class=\"uv-box-server-error-lt\">
\t\t\t\t{% if websiteDetails %}
\t\t\t\t\t<a class=\"uv-logo\" href=\"{{ '/en/member/' in currentPath  ? path('helpdesk_member_dashboard') : (websiteDetails ? path('helpdesk_knowledgebase') : app.request.scheme ~'://' ~ app.request.httpHost ) }}\">
\t\t\t\t\t\t{% if websiteDetails.logo %}
\t\t\t\t\t\t\t<img src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}{{ websiteDetails.logo }}\" title=\"{{ websiteDetails.name }}\">
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"122\" height=\"48\" viewBox=\"0 0 122 48\">
\t\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t\t<style>
\t\t\t\t\t\t\t\t\t\t.cls-1 {
\t\t\t\t\t\t\t\t\t\t\tfill: #9f9f9f;
\t\t\t\t\t\t\t\t\t\t\tfill-rule: evenodd;
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t</style>
\t\t\t\t\t\t\t\t</defs>

\t\t\t\t\t\t\t\t<path id=\"uvdesk-icon\" class=\"cls-1\" d=\"M43.5,23A1.5,1.5,0,0,1,45,24.5V25H42V24.5A1.5,1.5,0,0,1,43.5,23ZM39,31H38V18h1a2.257,2.257,0,0,1,2,2v9A2.257,2.257,0,0,1,39,31Zm6-5H42s1.769,15.329-15,17c0.011-.1-0.027,1.292,0,2C33.324,44.708,45.563,40.575,45,26ZM25.987,44A1.988,1.988,0,1,1,24,41.989,2,2,0,0,1,25.987,44ZM8,41A18.173,18.173,0,0,1,3.386,29.28L3,24a14.906,14.906,0,0,0,9-5,14.838,14.838,0,0,0,5,4,17.2,17.2,0,0,0,16-1l4-3a2.479,2.479,0,0,0,0-1C36.692,8.308,27.872,0,18,0h0A17.913,17.913,0,0,0,0,18V29A21.17,21.17,0,0,0,5,43a16.677,16.677,0,0,0,7,5l1-3C10.936,44.167,9.633,42.824,8,41Zm2.492-15A3.5,3.5,0,1,0,14,29.5,3.5,3.5,0,0,0,10.492,26ZM27.5,33A3.5,3.5,0,1,0,24,29.5,3.5,3.5,0,0,0,27.5,33Z\"/>
\t\t\t\t\t\t\t\t<path id=\"uvdesk\" class=\"cls-1\" d=\"M53.078,25.329c0,2.976,1.1,4.56,3.576,4.56a4.931,4.931,0,0,0,3.84-2.112h0.072L60.734,29.6h1.632V17.937H60.4v8.281c-1.1,1.368-1.944,1.968-3.144,1.968-1.536,0-2.184-.936-2.184-3.12V17.937H53.078v7.393ZM68.822,29.6h2.3l4.128-11.665H73.31L71.1,24.561c-0.336,1.152-.72,2.328-1.056,3.432h-0.1c-0.36-1.1-.744-2.28-1.08-3.432l-2.208-6.625h-2.04Zm7.752-5.809c0,3.888,1.9,6.1,4.824,6.1a5.262,5.262,0,0,0,3.528-1.656H85L85.166,29.6H86.8V12.512H84.806V17l0.1,1.992a4.806,4.806,0,0,0-3.264-1.344C78.973,17.649,76.573,20,76.573,23.793Zm2.04-.024c0-2.664,1.488-4.464,3.36-4.464a4.06,4.06,0,0,1,2.832,1.224v6.1a3.948,3.948,0,0,1-2.976,1.608C79.789,28.233,78.613,26.553,78.613,23.769Zm11.256,0.024c0,3.816,2.472,6.1,5.593,6.1a6.947,6.947,0,0,0,3.84-1.2l-0.7-1.3a5.271,5.271,0,0,1-2.9.912c-2.232,0-3.744-1.584-3.888-4.1h7.873a6.956,6.956,0,0,0,.072-1.08c0-3.336-1.68-5.472-4.656-5.472C92.437,17.649,89.869,19.977,89.869,23.793Zm1.92-.888c0.24-2.352,1.728-3.7,3.36-3.7,1.824,0,2.88,1.32,2.88,3.7H91.789Zm9.552,5.376a7.021,7.021,0,0,0,4.344,1.608c2.76,0,4.272-1.584,4.272-3.48,0-2.208-1.872-2.9-3.552-3.528-1.32-.5-2.592-0.936-2.592-2.016,0-.888.672-1.68,2.136-1.68a4.331,4.331,0,0,1,2.664,1.032l0.936-1.248a5.822,5.822,0,0,0-3.624-1.32c-2.52,0-4.008,1.44-4.008,3.312,0,1.968,1.824,2.76,3.48,3.36,1.272,0.48,2.664,1.008,2.664,2.208,0,1.008-.768,1.824-2.3,1.824a5.245,5.245,0,0,1-3.432-1.392Zm11.352,1.32h1.944V26.529l2.184-2.544,3.408,5.617h2.16l-4.44-6.985,3.912-4.68h-2.184l-4.968,6.145h-0.072V12.512h-1.944V29.6Z\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</a>
\t\t\t\t{% else %}
\t\t\t\t\t<a href=\"http://uvdesk.com\">
\t\t\t\t\t\t<img src=\"{{ asset('bundles/uvdeskcoreframework/images/uvdesk-logo.svg') }}\" title=\"UVdesk\">
\t\t\t\t\t</a>\t
\t\t\t\t{% endif %}

\t\t\t\t<div class=\"uv-box-block\">
\t\t\t\t\t<p class=\"uv-error-title\">
\t\t\t\t\t\t{% if code == 404 %}
\t\t\t\t\t\t\t<span>404</span>
\t\t\t\t\t\t\t- {{ 'Page not found'|trans }}
\t\t\t\t\t\t\t<p>{{ 'We were not able to find the page you are looking for.'|trans }}</p>
\t\t\t\t\t\t{% elseif code == 403 %}
\t\t\t\t\t\t\t<span>403</span>
\t\t\t\t\t\t\t- {{ 'Forbidden'|trans }}
\t\t\t\t\t\t\t<p>{{ 'You don’t have the necessary permissions to access this Web page :('|trans }}</p>
\t\t\t\t\t\t{% elseif code == 500 %}
\t\t\t\t\t\t\t<span>500</span>
\t\t\t\t\t\t\t- {{ 'Internal server error'|trans }}
\t\t\t\t\t\t\t<p>{{ \"Our system has goofed up for a while, but good part is it won't last long\"|trans }}</p>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<span>{{ code }}</span>
\t\t\t\t\t\t\t- {{ 'Unknown Error'|trans }}
\t\t\t\t\t\t\t<p>{{ 'We are quite confused about how did you land here:/'|trans }}</p>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"uv-box-block\">
\t\t\t\t\t<p>{{ 'Few of the links which may help you to get back on the track:'|trans }}</p>
\t\t\t\t\t
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"{{ '/en/member/' in currentPath  ? path('helpdesk_member_dashboard') : (websiteDetails ? path('helpdesk_knowledgebase') : app.request.scheme ~'://' ~ app.request.httpHost ) }}\">{{ 'Home'|trans }}</a></li>

\t\t\t\t\t\t{% if websiteDetails is defined and websiteDetails is not empty %}
\t\t\t\t\t\t\t<li><a href=\"{{ path('helpdesk_knowledgebase') }}\">{{ 'Support'|trans }}</a></li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"uv-box-server-error-rt\">
\t\t\t\t{% if code in [404, 500, 403] %}
\t\t\t\t\t{% if code == 404 %}
\t\t\t\t\t\t\t<img class=\"error-grooves\" src=\"{{ asset('bundles/uvdeskcoreframework/images/404.png') }}\" alt=\"{{ code }}\" />
\t\t\t\t\t{% elseif code == 500 %}
\t\t\t\t\t\t\t<img class=\"error-grooves\" src=\"{{ asset('bundles/uvdeskcoreframework/images/500.png') }}\" alt=\"{{ code }}\" />
\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<img class=\"error-grooves\" src=\"{{ asset('bundles/uvdeskcoreframework/images/403.png') }}\" alt=\"{{ code }}\" />
\t\t\t\t\t{% endif %}
\t\t\t\t{% else %}
\t\t\t\t\t\t<img class=\"error-grooves\" src=\"{{ asset('bundles/uvdeskcoreframework/images/unkown-error.png') }}\" alt=\"{{ code }}\" />
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"uv-box-footer\">
\t\t\t\t<p>{% trans %}Powered by {% endtrans %} <a target=\"_blank\" href=\"https://www.uvdesk.com/en/\">{% trans %}UVdesk{% endtrans %}</a></p>
\t\t\t</div>
\t\t</div>
\t</body>
</html>
", "errors/error.html.twig", "/home/users/sanjeev.papnoi/www/uvdesk-community-v1.1.8/templates/errors/error.html.twig");
    }
}
