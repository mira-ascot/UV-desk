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

/* @UVDeskCoreFramework/ticket.html.twig */
class __TwigTemplate_08309f8024225799c58281ebf6eb8352 extends Template
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
            'templateCSS' => [$this, 'block_templateCSS'],
            'pageContent' => [$this, 'block_pageContent'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@UVDeskCoreFramework//Templates//layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/ticket.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/ticket.html.twig"));

        $this->parent = $this->load("@UVDeskCoreFramework//Templates//layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((("#" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)) . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3, $this->source); })()), "subject", [], "any", false, false, false, 3)), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_templateCSS(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "templateCSS"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "templateCSS"));

        // line 6
        yield "    <style>
        .uv-inner-section .uv-view .uv-ticket-note-agent .uv-ticket-main-rt {
            padding: 15px;
            margin-bottom: 10px;
            background-color: #E3F2FD;
            border: 1px solid #42a5f5;
            position: relative;
        }

        .uv-inner-section .uv-view .uv-ticket-note-agent .uv-ticket-main-rt::before,
        .uv-inner-section .uv-view .uv-ticket-note-agent .uv-ticket-main-rt::after { 
            border-bottom: solid 1px #42a5f5;
            border-right: solid 1px #42a5f5;
            border-left: solid 1px #42a5f5;
        }

        .uv-inner-section .uv-view .uv-ticket-note-agent .uv-ticket-main-rt::before {
            content: \"\";
            position: absolute;
            top: 0px;
            bottom: -4px;
            left: 2px;
            right: 2px;
            z-index: -1;
            background-color: #FFFFFF;
        }

        .uv-inner-section .uv-view .uv-ticket-note-agent .uv-ticket-main-rt::after {
            content: \"\";
            position: absolute;
            top: 0px;
            bottom: -7px;
            left: 6px;
            right: 6px;
            z-index: -2;
        }

        .uv-aside-ticket-labels.label-list-block .uv-btn-label {
            cursor: pointer;
        }
        .uv-main-info-update-block .uv-element-block {
            margin: 10px 0px !important;
        }
        .uv-tab-ellipsis {
            position: relative;
        }
        .uv-inner-section .uv-view .uv-ticket-section .uv-ticket-accordion .uv-ticket-wrapper {
            display: block;
        }
        .uv-element-block.cc-bcc .uv-dropdown-container {
            padding: 10px 20px 10px 20px;
        }
        .uv-action-buttons .uv-dropdown-list ul li {
            padding: 5px 0px !important;
        }
        .uv-action-buttons{
            margin-bottom: 40px !important;
        }
        .uv-ticket-reply .uv-element-block-textarea, .thread-edit-container .uv-element-block-textarea {
            width: 100% !important;
            max-width: 100% !important;
        }
        .thread-edit-container .uv-field-message {
            color: #FF5656 !important;
        }
        .uv-element-block .mce-tinymce {
            margin-top: 10px;
        }
        .uv-ticket-reply .uv-element-block-textarea .uv-field-message, .thread-edit-container .uv-element-block-textarea .uv-field-message {
            margin-top: 15px;
        }
        .thread-edit-container {
            margin-top: 10px;
        }
        .uv-ticket-viewer-bar{
            transition: 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            height: 0px;
        }
        .uv-ticket-viewer-bar.active {
            height: 50px;
            margin-bottom: 10px;
            border-bottom: 1px dotted #f97278;
        }
        .uv-ticket-viewer-single {
            display: inline-block;
            margin-right: 5px;
        }
        .uv-ticket-viewer-single img {
            width: 40px;
            border-radius: 3px;
            display: inline-block;
            vertical-align: middle;
        }
        .uv-ticket-viewer-single.uv-first {
            width: 40px;
            height: 40px;
            background-image: linear-gradient(to right, #f97278 0%, #f181bf 100%);
            text-align: center;
            vertical-align: top;
            line-height: 30px;
            border-radius: 20px;
        }
        .uv-ticket-viewer-close {
            position: absolute;
            top: 0px;
            width: 40px;
            height: 40px;
            background: #f1f1f1;
            text-align: center;
            line-height: 35px;
            border-radius: 2px;
            opacity: .6;
            text-indent: 6px;
        }
        .uv-ticket-viewer-list {
            display: inline;
        }
        span.viewer-firstletter.img-thumbnail {
            width: 40px;
            height: 40px;
            display: block;
            text-align: center;
            font-size: 20px;
            font-style: italic;
            border: 1px dotted;
            border-radius: 4px;
            line-height: 35px;
        }
        .uv-ticket-viewer-close {
            display:none;
        }
        .uv-ticket-viewer-single:hover .uv-ticket-viewer-close {
            display: block;
        }
        .uv-hide{
            display: none;
        }
        .uv-info {
            background: #7C70F4;
        }
        .uv-ticket-viewer-list .uv-icon-eye-light{
            animation: jelly 0.8s infinite alternate ease-in-out;
        }
        .uv-aside-brick .uv-loader {
            position: absolute;
            transform: scale(0.5);
            top: 22px;
            right: 45px;
        }
        .uv-app-glyph-customfields {
            width: 20px;
            height: 20px;
            background-position: center center;
            background-repeat: no-repeat;
            cursor: pointer;
            display: inline-block;
            vertical-align: middle;
            margin: 5px 0px 5px 10px;
            background-image: url(\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/images/app-glyph-custom.svg"), "html", null, true);
        yield "\");
        }
        .uv-no-threads {
            padding: 80px 20px;
            text-align: center;
        }
        .uv-ticket-strip-label {
            position: relative;
        }
        input.input-copy-thread-link {
            position: absolute;
            bottom: 10px;
            width: 400px;
        }
        .uv-ticket-action-bar-fixed {
            position: fixed;
            width: 100%;
            background: #fff;
            z-index: 999;
        }
        .uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt {
            position: fixed;
            right: 0px;
            margin-top: 10px;
        }
        .uv-ticket-action-bar-fixed + .uv-ticket-viewer-bar {
            margin-top: 70px;
        }
        .uv-ticket-main {
            word-wrap: break-word;
        }
        @media only screen and (max-width: 900px) {
            .uv-ticket-action-bar-fixed{
                position: relative;
            }
            .uv-ticket-action-bar-fixed + .uv-ticket-viewer-bar {
                margin-top: 0px;
            }
            .uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt {
                position: relative;
            }
        }
        .uv-icon-pin {
            width: 18px;
            height: 18px;
            display: inline-block;
            vertical-align: middle;
            background-image: url(\"";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/images/uvdesk-sprite.svg"), "html", null, true);
        yield "\");
            background-position: 0px -396px;
            transition: transform .15s;
            transform: scale(1);
        }
        .uv-icon-pinned {
            background-position: -19px -396px;
        }
        .uv-header-fix{
            display: inline-block;
            margin: 0px 10px 0px 5px;
        }
        .uv-header-fix + .uv-tabs {
            display: inline-block;
        }
        .uv-ticket-section span.uv-mail-status {
            width: 16px;
            height: 16px;
            background: url('../../../../../bundles/webkuldefault/images/mail-status.png');
            cursor: help;
        }
        .uv-ticket-section .uv-mail-status.uv-mail-processed {
            background-position: 0 0;
        }
        .uv-ticket-section .uv-mail-status.uv-mail-open,.uv-ticket-section .uv-mail-status.uv-mail-delivered,.uv-ticket-section .uv-mail-status.uv-mail-click {
            background-position: -38px 0;
        }
        .uv-ticket-section .uv-mail-status.uv-mail-spam,.uv-ticket-section .uv-mail-status.uv-mail-deferred,.uv-ticket-section .uv-mail-spamreport {
            background-position: -55px 0;
        }
        .uv-ticket-section .uv-mail-status.uv-mail-bounce,.uv-ticket-section .uv-mail-status.uv-mail-dropped {
            background-position: -73px 0;
        }
        @media only screen and (max-width: 1480px) {
            .uv-inner-section .uv-view .uv-ticket-action-bar-fixed.uv-ticket-action-bar .uv-ticket-action-bar-rt{
                width: auto;
            }
        }
        @media only screen and (max-width: 1300px) {
            .uv-header-fix{
                margin: 0px 10px 0px 10px;
            }
        }

        @media only screen and (max-width: 900px) {
            .uv-ticket-action-bar-fixed{
                position: relative;
            }
            .uv-ticket-action-bar-fixed + .uv-ticket-viewer-bar {
                margin-top: 0px;
            }
            .uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt {
                position: relative;
            }
            .uv-inner-section .uv-view .uv-ticket-action-bar.uv-ticket-action-bar-fixed .uv-ticket-action-bar-lt{
                width: 70%;
            }
            .uv-inner-section .uv-view .uv-ticket-action-bar.uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt {
                width: 21%;
                padding-right: 33px;
            }
            .uv-header-fix {
                display: none;
            }
        }

        .uv-inner-section .uv-view .uv-ticket-scroll-region {
            margin-bottom: 0px;
        }

        .uv-inner-section .uv-view .uv-ticket-action-bar.uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt {
            width: 21%;
            padding-right: 33px;
        }
        @media print {
            .uv-navbar,.uv-ticket-action-bar, .uv-sidebar, .uv-aside>.uv-aside-brick, .uv-aside-back, .uv-ticket-fixed-region, .uv-ticket-main.uv-ticket-reply, .uv-upload-actions, .uv-filter-view, .uv-dropdown-list>.uv-dropdown-container,.uv-notifications-wrapper,.uv-pop-up-overlay,.uv-loader-view, .uv-loader, .uv-navbar,.uv-ticket-count-wrapper {
                display: none !important;
            }
            .uv-ticket-scroll-region {
                overflow: visible;
                margin-bottom: 0 !important;
            }
            .uv-paper {
                padding-left: 0px !important; /* uv-view */
            }
            .uv-wrapper {
                left: 0 !important;
                margin: 0 !important;
            }
            .uv-inner-section .uv-view .uv-ticket-scroll-region  .uv-ticket-main-rt {
                width: 80%;
            }
            .uv-paper,.uv-view ,.uv-ticket-scroll-region, .uv-wrapper {
                position: initial !important;
            }
        }

        .uv-ticket-action-bar-rt .app-glyph {
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
            cursor: pointer;
            height: 20px;
            width: 20px;
        }

        .uv-ticket-action-bar-rt .app-glyph:last-child {
            margin-right: 0px;
        }

        blockquote {
            background: #f9f9f9;
            border-left: 4px solid #ccc;
            margin: 1.5em 10px;
            padding: 0.5em 10px;
            quotes: \"\\201C\"\"\\201D\"\"\\2018\"\"\\2019\";
        }

        blockquote:before {
            color: #ccc;
            content: open-quote;
            font-size: 3em;
            line-height: 0.1em;
            margin-right: 0.05em;
            vertical-align: -0.4em;
        }

        blockquote p {
            display: inline;
        }

        .uv-dropdown-list ul li {
            padding : 8px 0px !important;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        }
        ::-webkit-scrollbar-thumb {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        }

        .uv-aside-select.search .uv-dropdown-list.uv-bottom-left, .uv-aside-select .uv-dropdown-list.uv-bottom-right {
            top: 25px;
            width: 100%;
        }

        .uv-aside-select.search .uv-dropdown-list ul {
            padding: 0px 10px;
        }

        .uv-aside-select.search .uv-dropdown-container {
            padding: 8px 10px 4px;
            overflow-y: auto;
            max-height: 280px;
            border-bottom: solid 1px #D3D3D3;
        }

        .uv-aside-select.search .uv-dropdown-list ul.uv-agents-list li {
            border-bottom: solid 1px #D3D3D3;
            border-top:0px;
        }

        .uv-search-inline {
            width: 100%;
        }

        .uv-dropdown-list ul.uv-search-list li:first-child {
            border-top: none;
        }

        .uv-search-sm input.uv-search-field { 
           border: solid 1px #B1B1AE;
           border-radius: 3px;
           color: #333333;
           font-size: 15px;
           box-sizing: border-box;
           padding: 7px 10px 9px 33px;
           width: 100%;
        }

        ";
        // line 398
        yield "        .uv-pop-up-body {
            padding: 15px 0 0 0 !important;
        }

        .uv-quick-view-trigger {
            width: 18px !important;
            background-position: -14px 210px !important;
        }
        #quick-view-modal .uv-view {
            padding: 0;
            overflow-y: visible;
            display: inline-block;
            position: relative;
        }
        #quick-view-modal .uv-view .uv-ticket-section {
            margin-top: 0;
        }
        #quick-view-modal .uv-ticket-head {
            padding: 5px 0px 0px 0px;
        }
        #quick-view-modal .uv-ticket-strip {
            padding-bottom: 0;
        }
        #quick-view-modal .uv-ticket-strip .uv-btn-tag {
            margin-bottom: 0;
        }
        #quick-view-modal .quick-view-navigation {
            position: absolute;
            right: 50px;
            top: 9px;
        }
        #quick-view-modal .quick-view-navigation ~ a {
            width: calc(100% - 100px);
            display: inline-block;
        }
        #quick-view-modal .uv-btn-tag[disabled=\"disabled\"] {
            opacity: .4;
            cursor: not-allowed;
            border-color: #B1B1AE !important;
        }
        #quick-view-modal .uv-loader {
            transform: scale(0.5);
            top: 14px;
            right: 60px;
        }

        .uv-grid-item h3 {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .uv-grid-item {
            margin-bottom: 8px;
            background-color: white;
            padding: 10px 20px;
            border-radius: 8px;
        }

        .uv-inner-section .uv-view p:first-of-type {
            margin-top: 0 !important;
        }

        .uv-grid-item h3 {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #333;
        }
        .uv-agent-details-section {
            display: none;
        }
        .uv-agent-details {
            display: grid;
            list-style-type: none;
            padding-left: 10px;
            margin: 0;
            grid-template-columns: repeat(2, 1fr);
        }
        .uv-accordian-sec {
            display: flex;
            justify-content: space-between;
        }

        .uv-agent-details li, .uv-agent-details p {
            margin: 2px 0;
            padding-left: 15px;
            position: relative;
            text-transform: uppercase;
            font-size: 15px !important;
        }

        .uv-grid-item:last-child {
            margin-bottom: 0;
        }

        .uv-agent-details li::before {
            content: \"•\";
            font-size: 1rem;
            position: absolute;
            left: 0;
            top: -2px;
        }

        .uv-rt-accordian {
            display: flex;
            align-items: center;
        }

        .uv-accordian-icon {
            width: 12px;
            height: 12px;
            display: inline-block;
            background-color: transparent;
            position: relative;
            margin-right: 10px;
            cursor: pointer;
        }
        .uv-accordian-icon::before {
            content: '';
            border: solid #B1B1AE;
            border-width: 0 2px 2px 0;
            display: inline-block;
            padding: 4px;
            transform: rotate(45deg);
            transition: transform 0.3s ease;
        }
        .uv-accordian-icon.up::before {
            transform: rotate(-135deg); /* Up arrow */
        }

        .uv-ticket-head {
            font-family: 'Source Sans Pro', sans-serif;
        }

        @media (max-width: 768px) {
            .uv-grid-container {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }

        .uv-pop-up-box h2 {
            font-size: 20px !important;
        }

        .uv-pop-up-box .uv-pop-up-close {
            top : 30px !important;
            right: 28px !important;
        }

        .uv-pop-up-wide {
            background: #f4f6f9 !important;
            margin-left: -17% !important;
            border-radius: 10px;
            /* width: 700px; */
            max-width: 50% !important;
        }

        .uv-grid-item-count h4 {
            background: #f4f6f9;
            color: #333333;
            font-weight: 500;
            font-size: 15px;
            padding: 4px 8px;
            border-radius: 6px;
            margin-right: 15px;
        }
        ";
        // line 567
        yield "
        ";
        // line 568
        if ((($tmp = (isset($context["ticketRating"]) || array_key_exists("ticketRating", $context) ? $context["ticketRating"] : (function () { throw new RuntimeError('Variable "ticketRating" does not exist.', 568, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 569
            yield "            ";
            // line 570
            yield "            .uv-icon-kudos-rating {
                background-image: url(\"";
            // line 571
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/images/ticket-rating-white-star.svg"), "html", null, true);
            yield "\");
                width: 14px;
                height: 13px;
                margin-left: 1px;
                background-size: contain;
                background-repeat: no-repeat;
            }

            .ticket-rating-common {
                display: flex !important;
                padding: 4px 5px;
                border-radius: 4px;
                justify-content: center;
                align-items: center;
            }

            .ticket-rating-1 {
                background: #FF5656;
            }
            
            .ticket-rating-2 {
                    background: #FF5656;
                }

            .ticket-rating-3 {
                    background: #FFA500;
                }

            .ticket-rating-4 {
                    background: #68CB47;
                }

            .ticket-rating-5 {
                    background: #68CB47;
                }

            .uv-icon-kudos-rating-label {
                    color: white !important;
                    font-family: 'Source Sans Pro';
                    font-size: 15px !important;
                    font-weight: 600;
                    line-height: 18.34px;
                    text-align: center;
                    margin-left: -8px;
                    margin-right: 1px !important;
            }
            ";
            // line 618
            yield "        ";
        }
        // line 619
        yield "
        ";
        // line 621
        yield "        .ticket-public-resource-access-link {
            overflow: hidden;
            display: none;
            align-items: center;
            border: 1px solid #e5e5e5;
            border-radius: 4px;
            font-size: 14px;
        }

        .ticket-public-resource-access-link.visible {
            display: flex;
        }

        .ticket-public-resource-access-link .resource-link {
            overflow: hidden;
            text-overflow: ellipsis;
            text-wrap: nowrap;
            padding: 8px 10px;
            border-right: 1px solid #e5e5e5;
        }

        .ticket-public-resource-access-link .copy-resource-link-to-clipboard {
            padding: 8px 10px;
            cursor: pointer;
            background: #e9e9e9;
        }
        ";
        // line 648
        yield "        
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 651
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        // line 652
        yield "
    <!-- Quick View popup -->
    <div class=\"uv-pop-up-overlay\" id=\"quick-view-modal\">
        <div class=\"uv-pop-up-box uv-pop-up-wide\">
        </div>
    </div>
    <!-- //Quick View popup -->

    <div class=\"uv-inner-section\">
        ";
        // line 662
        yield "        <div class=\"uv-aside\" ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 662, $this->source); })()), "request", [], "any", false, false, false, 662), "cookies", [], "any", false, false, false, 662) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 662, $this->source); })()), "request", [], "any", false, false, false, 662), "cookies", [], "any", false, false, false, 662), "get", ["uv-asideView"], "method", false, false, false, 662))) {
            yield "style=\"display: none;\"";
        }
        yield " >
            <div class=\"uv-main-info-block\">
                <div class=\"uv-aside-head\">
                    <div class=\"uv-aside-title\">
                        <h6>";
        // line 666
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket"), "html", null, true);
        yield " #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 666, $this->source); })()), "id", [], "any", false, false, false, 666), "html", null, true);
        yield "</h6>
                    </div>
                    <div class=\"uv-aside-back\">
                        <span onclick=\"history.length > 1 ? history.go(-1) : window.location = '";
        // line 669
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_collection");
        yield "';\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back"), "html", null, true);
        yield "</span>
                    </div>
                </div>

                ";
        // line 674
        yield "                <div class=\"uv-aside-brick\">
                    ";
        // line 676
        yield "                    <div class=\"uv-aside-customer-block\">
                        <h3>";
        // line 677
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Information"), "html", null, true);
        yield "</h3>
                        <div class=\"uv-aside-avatar\">
                            ";
        // line 679
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 679, $this->source); })()), "thumbnail", [], "any", false, false, false, 679)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 680
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 680, $this->source); })()), "request", [], "any", false, false, false, 680), "scheme", [], "any", false, false, false, 680) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 680, $this->source); })()), "request", [], "any", false, false, false, 680), "httpHost", [], "any", false, false, false, 680)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 680, $this->source); })()), "thumbnail", [], "any", false, false, false, 680), "html", null, true);
            yield "\">
                            ";
        } else {
            // line 682
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_customer_image_path"]) || array_key_exists("default_customer_image_path", $context) ? $context["default_customer_image_path"] : (function () { throw new RuntimeError('Variable "default_customer_image_path" does not exist.', 682, $this->source); })())), "html", null, true);
            yield "\">
                            ";
        }
        // line 684
        yield "                        </div>

                        <div class=\"uv-aside-customer-info\">
                            <div style=\"display: flex; align-items: center; gap: 4px;\">
                                <span>";
        // line 688
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 688, $this->source); })()), "name", [], "any", false, false, false, 688), "html", null, true);
        yield "</span>
                                ";
        // line 689
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 689, $this->source); })()), "getUserPresenceStatus", [], "any", false, false, false, 689)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 690
            yield "                                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 690, $this->source); })()), "isOnline", [], "any", false, false, false, 690)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 691
                yield "                                        <span title=\"Last Login: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 691, $this->source); })()), "lastLogin", [], "any", false, false, false, 691), "html", null, true);
                yield "\" style=\"cursor:pointer; color: green; font-size: 15px;\">●</span>
                                    ";
            } else {
                // line 693
                yield "                                        <span title=\"Last Login: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 693, $this->source); })()), "lastLogin", [], "any", false, false, false, 693), "html", null, true);
                yield "\" style=\"cursor:pointer; color: red; font-size: 15px;\">●</span>
                                    ";
            }
            // line 695
            yield "                                ";
        }
        // line 696
        yield "
                            </div>
                            <span>";
        // line 698
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 698, $this->source); })()), "email", [], "any", false, false, false, 698), "html", null, true);
        yield "</span>
                            ";
        // line 699
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 699, $this->source); })()), "contactNumber", [], "any", false, false, false, 699)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 700
            yield "                                <span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 700, $this->source); })()), "contactNumber", [], "any", false, false, false, 700), "html", null, true);
            yield "</span>
                            ";
        }
        // line 702
        yield "
                            ";
        // line 703
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 703, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_MANAGE_CUSTOMER"], "method", false, false, false, 703)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 704
            yield "                                <span class=\"uv-customize\" data-toggle=\"tooltip\" title=\"Edit Customer Information\"></span>
                            ";
        }
        // line 706
        yield "                        </div>
                    </div>

                    ";
        // line 710
        yield "                    <div class=\"uv-aside-ticket-block\">
                        <div class=\"uv-aside-ticket-brick\">
                            <h3>";
        // line 712
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total Replies"), "html", null, true);
        yield "</h3>
                            <span class=\"uv-icon-replies\"></span> <span>";
        // line 713
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalReplies"]) || array_key_exists("totalReplies", $context) ? $context["totalReplies"] : (function () { throw new RuntimeError('Variable "totalReplies" does not exist.', 713, $this->source); })()), "html", null, true);
        yield "</span>
                        </div>

                        <div class=\"uv-aside-ticket-brick\">
                            <h3>";
        // line 717
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TimeStamp"), "html", null, true);
        yield "</h3>
                            <span class=\"uv-icon-timestamp\"></span> <span>";
        // line 718
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 718, $this->source); })()), "timeZoneConverter", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 718, $this->source); })()), "createdAt", [], "any", false, false, false, 718)], "method", false, false, false, 718), "html", null, true);
        yield "</span>
                        </div>

                        <div class=\"uv-aside-ticket-brick\">
                            <h3>";
        // line 722
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Channel"), "html", null, true);
        yield "</h3>
                            ";
        // line 723
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 723, $this->source); })()), "source", [], "any", false, false, false, 723) == "email")) {
            // line 724
            yield "                                <span class=\"uv-icon-channel uv-channel-email\"></span> <span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
            yield "</span>
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 725
(isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 725, $this->source); })()), "source", [], "any", false, false, false, 725) == "formbuilder")) {
            // line 726
            yield "                                <span class=\"uv-icon-channel uv-channel-form\"></span> <span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Formbuilder"), "html", null, true);
            yield "</span>
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 727
(isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 727, $this->source); })()), "source", [], "any", false, false, false, 727) == "api")) {
            // line 728
            yield "                                <span class=\"uv-icon-channel uv-channel-api\"></span> <span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Api"), "html", null, true);
            yield "</span>
                            ";
        } else {
            // line 730
            yield "                                <span class=\"uv-icon-channel uv-channel-web\"></span> <span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Website"), "html", null, true);
            yield "</span>
                            ";
        }
        // line 732
        yield "                        </div>

                        ";
        // line 735
        yield "                        <div class=\"uv-aside-ticket-brick\">
                            <ul style=\"padding: unset; margin: unset; list-style: none; display: flex; align-items: center; gap: 10px;\">
                                <li style=\"width: 100%;\">
                                    <button id=\"ticket-generate-customer-public-resource-access-link\" class=\"uv-btn-small\" title=\"Allow customer to view ticket publicly without having to login into their dashboard\">Generate Public Link</button>
                                    <div id=\"ticket-public-resource-access-link\" class=\"ticket-public-resource-access-link\" style=\"margin-top: 10px;\">
                                        <div class=\"resource-link\"></div>
                                        <div class=\"copy-resource-link-to-clipboard\">Copy</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        ";
        // line 747
        yield "
                        ";
        // line 749
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 749, $this->source); })()), "isFileExists", ["apps/uvdesk/sla"], "method", false, false, false, 749)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 750
            yield "                            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@UVDeskCoreFramework\\slaSnippet.html.twig");
            yield "
                        ";
        }
        // line 752
        yield "                    </div>
                </div>
            </div>

            ";
        // line 757
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 757, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_MANAGE_CUSTOMER"], "method", false, false, false, 757)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 758
            yield "                <div class=\"uv-main-info-update-block uv-no-error-success-icon\" style=\"display: none\">
                    <div class=\"uv-aside-head\">
                        <div class=\"uv-aside-title\"><h6>";
            // line 760
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Customer"), "html", null, true);
            yield "</h6></div>
                        <div class=\"uv-aside-back\"><span>";
            // line 761
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back"), "html", null, true);
            yield "</span></div>
                    </div>

                    <div class=\"uv-aside-brick\">
                        <form method=\"post\">
                            <input class=\"uv-field\" name=\"id\" type=\"hidden\" value=\"";
            // line 766
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 766, $this->source); })()), "id", [], "any", false, false, false, 766), "html", null, true);
            yield "\">

                            <div class=\"uv-element-block\">
                                <label class=\"uv-field-label\">";
            // line 769
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
            yield "</label>
                                <div class=\"uv-field-block\">
                                    <input class=\"uv-field\" name=\"name\" type=\"text\" value=\"";
            // line 771
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 771, $this->source); })()), "name", [], "any", false, false, false, 771), "html", null, true);
            yield "\">
                                </div>
                            </div>

                            <div class=\"uv-element-block\">
                                <label class=\"uv-field-label\">";
            // line 776
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
            yield "</label>
                                <div class=\"uv-field-block\">
                                    <input class=\"uv-field\" name=\"email\" type=\"text\" value=\"";
            // line 778
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 778, $this->source); })()), "email", [], "any", false, false, false, 778), "html", null, true);
            yield "\">
                                </div>
                            </div>

                            <div class=\"uv-element-block\">
                                <label class=\"uv-field-label\">";
            // line 783
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contact Number"), "html", null, true);
            yield "</label>
                                <div class=\"uv-field-block\">
                                    <input class=\"uv-field\" name=\"contactNumber\" type=\"text\" value=\"";
            // line 785
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 785, $this->source); })()), "contactNumber", [], "any", false, false, false, 785), "html", null, true);
            yield "\">
                                </div>
                            </div>

                            <div class=\"uv-action-buttons\">
                                <a class=\"uv-btn update-btn\" href=\"#\">";
            // line 790
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update"), "html", null, true);
            yield "</a>
                                <a class=\"uv-btn cancel-btn\" href=\"#\">";
            // line 791
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
            yield "</a>
                            </div>

                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 794
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["csrf_token_generator"]) || array_key_exists("csrf_token_generator", $context) ? $context["csrf_token_generator"] : (function () { throw new RuntimeError('Variable "csrf_token_generator" does not exist.', 794, $this->source); })()), "refreshToken", [""], "method", false, false, false, 794), "html", null, true);
            yield "\"/>
                        </form>
                    </div>
                </div>
            ";
        }
        // line 799
        yield "
            
            ";
        // line 802
        yield "            <div class=\"uv-aside-brick\">
                <div class=\"uv-aside-ticket-actions\">
                    ";
        // line 805
        yield "                    <div class=\"uv-aside-select search\">
                        <label class=\"uv-aside-select-label\">";
        // line 806
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        yield "</label>
                        <div>
                            ";
        // line 808
        $context["agentName"] = (((($tmp = (isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 808, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 808, $this->source); })()), "name", [], "any", false, false, false, 808)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned")));
        // line 809
        yield "                            ";
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 809, $this->source); })()), "isTrashed", [], "any", false, false, false, 809) == false) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 809, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ASSIGN_TICKET"], "method", false, false, false, 809))) {
            // line 810
            yield "                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"";
            yield (((($tmp = (isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 810, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 810, $this->source); })()), "id", [], "any", false, false, false, 810), "html", null, true)) : (""));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["agentName"]) || array_key_exists("agentName", $context) ? $context["agentName"] : (function () { throw new RuntimeError('Variable "agentName" does not exist.', 810, $this->source); })()), "html", null, true);
            yield "</span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>";
            // line 813
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
            yield "</label>
                                        <div class=\"uv-search-sm\">
                                            <input type=\"text\" class=\"uv-search-field uv-search-inline\" placeholder=\"";
            // line 815
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
            yield "\">
                                        </div>
                                    </div>

                                    <ul class=\"uv-agents-list agent\" data-action=\"agent\">
                                        ";
            // line 820
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 820, $this->source); })()), "getAgentPartialDataCollection", [], "method", false, false, false, 820));
            foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
                // line 821
                yield "                                            <li data-index=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 821), "html", null, true);
                yield "\">
                                                <img src=\"";
                // line 822
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 822) != null)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 822, $this->source); })()), "request", [], "any", false, false, false, 822), "scheme", [], "any", false, false, false, 822) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 822, $this->source); })()), "request", [], "any", false, false, false, 822), "httpHost", [], "any", false, false, false, 822)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")) . CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 822)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 822, $this->source); })())), "html", null, true)));
                yield "\"/> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 822), "html", null, true);
                yield "
                                                ";
                // line 823
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 823, $this->source); })()), "getUserPresenceStatus", [], "any", false, false, false, 823)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 824
                    yield "                                                    ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "isOnline", [], "any", false, false, false, 824)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "  
                                                            <span title=\"Online\" style=\"cursor:pointer; color: green; font-size: 15px; vertical-align: middle;\">●</span>
                                                        ";
                    } else {
                        // line 826
                        yield "  
                                                            <span title=\"Offline\" style=\"cursor:pointer; color: red; font-size: 15px; vertical-align: middle;\">●</span>
                                                    ";
                    }
                    // line 829
                    yield "                                                ";
                }
                // line 830
                yield "                                            </li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['agent'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 832
            yield "                                    </ul>
                                </div>
                            ";
        } else {
            // line 835
            yield "                                <span class=\"uv-aside-select-value\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["agentName"]) || array_key_exists("agentName", $context) ? $context["agentName"] : (function () { throw new RuntimeError('Variable "agentName" does not exist.', 835, $this->source); })()), "html", null, true);
            yield "</span>
                            ";
        }
        // line 837
        yield "                        </div>
                    </div>

                    ";
        // line 841
        yield "                    <div class=\"uv-aside-select\">
                        <label class=\"uv-aside-select-label\">";
        // line 842
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Priority"), "html", null, true);
        yield "</label>
                        <div>
                            <span class=\"uv-list-ticket-priority\" style=\"background: ";
        // line 844
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 844, $this->source); })()), "priority", [], "any", false, false, false, 844), "colorCode", [], "any", false, false, false, 844), "html", null, true);
        yield "\"></span>
                            ";
        // line 845
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 845, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_UPDATE_TICKET_PRIORITY"], "method", false, false, false, 845)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 846
            yield "                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 846, $this->source); })()), "priority", [], "any", false, false, false, 846), "id", [], "any", false, false, false, 846), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 846, $this->source); })()), "priority", [], "any", false, false, false, 846), "description", [], "any", false, false, false, 846)), "html", null, true);
            yield "</span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>";
            // line 849
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Priority"), "html", null, true);
            yield "</label>
                                        <ul class=\"priority\" data-action=\"priority\">
                                            ";
            // line 851
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ticketPriorityCollection"]) || array_key_exists("ticketPriorityCollection", $context) ? $context["ticketPriorityCollection"] : (function () { throw new RuntimeError('Variable "ticketPriorityCollection" does not exist.', 851, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["priority"]) {
                // line 852
                yield "                                                <li data-index=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["priority"], "id", [], "any", false, false, false, 852), "html", null, true);
                yield "\" data-color=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["priority"], "colorCode", [], "any", false, false, false, 852), "html", null, true);
                yield "\"><a href=\"#\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["priority"], "description", [], "any", false, false, false, 852)), "html", null, true);
                yield "</a></li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['priority'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 854
            yield "                                        </ul>
                                    </div>
                                </div>
                            ";
        } else {
            // line 858
            yield "                                <span class=\"uv-aside-select-value\">
                                    ";
            // line 859
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 859, $this->source); })()), "priority", [], "any", false, false, false, 859), "description", [], "any", false, false, false, 859)), "html", null, true);
            yield "
                                </span>
                            ";
        }
        // line 862
        yield "                        </div>
                    </div>

                    ";
        // line 866
        yield "                    <div class=\"uv-aside-select\">
                        <label class=\"uv-aside-select-label\">";
        // line 867
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "</label>
                        <div>
                            ";
        // line 869
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 869, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_UPDATE_TICKET_STATUS"], "method", false, false, false, 869)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 870
            yield "                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 870, $this->source); })()), "status", [], "any", false, false, false, 870), "id", [], "any", false, false, false, 870), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 870, $this->source); })()), "status", [], "any", false, false, false, 870), "description", [], "any", false, false, false, 870)), "html", null, true);
            yield "</span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>";
            // line 873
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
            yield "</label>
                                        <ul class=\"status\" data-action=\"status\">
                                            ";
            // line 875
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ticketStatusCollection"]) || array_key_exists("ticketStatusCollection", $context) ? $context["ticketStatusCollection"] : (function () { throw new RuntimeError('Variable "ticketStatusCollection" does not exist.', 875, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 876
                yield "                                                <li data-index=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 876), "html", null, true);
                yield "\"><a href=\"#\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "description", [], "any", false, false, false, 876)), "html", null, true);
                yield "</a></li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['status'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 878
            yield "                                        </ul>
                                    </div>
                                </div>
                            ";
        } else {
            // line 882
            yield "                                <span class=\"uv-aside-select-value\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 882, $this->source); })()), "status", [], "any", false, false, false, 882), "description", [], "any", false, false, false, 882)), "html", null, true);
            yield "</span>
                            ";
        }
        // line 884
        yield "                        </div>
                    </div>

                    ";
        // line 888
        yield "                    <div class=\"uv-aside-select search\">
                        <label class=\"uv-aside-select-label\">";
        // line 889
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        yield "</label>
                        <div>
                            ";
        // line 891
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 891, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_UPDATE_TICKET_TYPE"], "method", false, false, false, 891)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 892
            yield "                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 892, $this->source); })()), "type", [], "any", false, false, false, 892)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 892, $this->source); })()), "type", [], "any", false, false, false, 892), "id", [], "any", false, false, false, 892), "html", null, true)) : ("-- --"));
            yield "\">";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 892, $this->source); })()), "type", [], "any", false, false, false, 892)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 892, $this->source); })()), "type", [], "any", false, false, false, 892), "code", [], "any", false, false, false, 892), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true)));
            yield "</span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>";
            // line 895
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
            yield "</label>
                                        <div class=\"uv-search-sm\">
                                            <input type=\"text\" class=\"uv-search-field uv-search-inline\" placeholder=\"";
            // line 897
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
            yield "\">
                                        </div>
                                    </div>

                                    <ul class=\"uv-search-list type\" data-action=\"type\">
                                        ";
            // line 902
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 902, $this->source); })()), "getTypes", [], "method", false, false, false, 902));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 903
                yield "                                            <li data-index=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 903), "html", null, true);
                yield "\"><a href=\"#\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 903), "html", null, true);
                yield "</a></li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 905
            yield "                                    </ul>
                                </div>
                            ";
        } else {
            // line 908
            yield "                                <span class=\"uv-aside-select-value\">
                                    ";
            // line 909
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 909, $this->source); })()), "type", [], "any", false, false, false, 909)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 909, $this->source); })()), "type", [], "any", false, false, false, 909), "code", [], "any", false, false, false, 909), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true)));
            yield "
                                </span>
                            ";
        }
        // line 912
        yield "                        </div>
                    </div>

                    ";
        // line 916
        yield "                    <div class=\"uv-aside-select search\">
                        <label class=\"uv-aside-select-label\">";
        // line 917
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
        yield "</label>
                        <div>
                            ";
        // line 919
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 919, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ASSIGN_TICKET_GROUP"], "method", false, false, false, 919)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 920
            yield "                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 920, $this->source); })()), "supportGroup", [], "any", false, false, false, 920)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 920, $this->source); })()), "supportGroup", [], "any", false, false, false, 920), "id", [], "any", false, false, false, 920), "html", null, true)) : ("-- --"));
            yield "\">
                                    ";
            // line 921
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 921, $this->source); })()), "supportGroup", [], "any", false, false, false, 921)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 921, $this->source); })()), "supportGroup", [], "any", false, false, false, 921), "name", [], "any", false, false, false, 921), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true)));
            yield "
                                </span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>";
            // line 925
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
            yield "</label>
                                        <div class=\"uv-search-sm\">
                                            <input type=\"text\" class=\"uv-search-field uv-search-inline\" placeholder=\"";
            // line 927
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
            yield "\">
                                        </div>
                                    </div>
                                    <ul class=\"uv-search-list group\" data-action=\"group\">
                                        <li data-index=\"\"><a href=\"#\">";
            // line 931
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true);
            yield "</a></li>

                                        ";
            // line 933
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["supportGroupCollection"]) || array_key_exists("supportGroupCollection", $context) ? $context["supportGroupCollection"] : (function () { throw new RuntimeError('Variable "supportGroupCollection" does not exist.', 933, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 934
                yield "                                            <li data-index=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 934), "html", null, true);
                yield "\"><a href=\"#\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 934), "html", null, true);
                yield "</a></li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 936
            yield "                                    </ul>
                                </div>
                            ";
        } else {
            // line 939
            yield "                                <span class=\"uv-aside-select-value\">
                                    ";
            // line 940
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 940, $this->source); })()), "supportGroup", [], "any", false, false, false, 940)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 940, $this->source); })()), "supportGroup", [], "any", false, false, false, 940), "name", [], "any", false, false, false, 940), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true)));
            yield "
                                </span>
                            ";
        }
        // line 943
        yield "                        </div>
                    </div>

                    ";
        // line 947
        yield "                    <div class=\"uv-aside-select search\">
                        <label class=\"uv-aside-select-label\">";
        // line 948
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team"), "html", null, true);
        yield "</label>
                        <div>
                            ";
        // line 950
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 950, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ASSIGN_TICKET_GROUP"], "method", false, false, false, 950)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 951
            yield "                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 951, $this->source); })()), "supportTeam", [], "any", false, false, false, 951)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 951, $this->source); })()), "supportTeam", [], "any", false, false, false, 951), "id", [], "any", false, false, false, 951), "html", null, true)) : ("-- --"));
            yield "\">
                                    ";
            // line 952
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 952, $this->source); })()), "supportTeam", [], "any", false, false, false, 952)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 952, $this->source); })()), "supportTeam", [], "any", false, false, false, 952), "name", [], "any", false, false, false, 952), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true)));
            yield "
                                </span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>";
            // line 956
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team"), "html", null, true);
            yield "</label>
                                        <div class=\"uv-search-sm\">
                                            <input type=\"text\" class=\"uv-search-field uv-search-inline\" placeholder=\"";
            // line 958
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
            yield "\">
                                        </div>
                                    </div>
                                    <ul class=\"uv-search-list team\" data-action=\"team\">
                                        <li data-index=\"\"><a href=\"#\">";
            // line 962
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true);
            yield "</a></li>
                                        ";
            // line 963
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["supportTeamCollection"]) || array_key_exists("supportTeamCollection", $context) ? $context["supportTeamCollection"] : (function () { throw new RuntimeError('Variable "supportTeamCollection" does not exist.', 963, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 964
                yield "                                            <li data-index=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 964), "html", null, true);
                yield "\"><a href=\"#\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 964), "html", null, true);
                yield "</a></li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 966
            yield "                                    </ul>
                                </div>
                            ";
        } else {
            // line 969
            yield "                                <span class=\"uv-aside-select-value\">
                                    ";
            // line 970
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 970, $this->source); })()), "supportTeam", [], "any", false, false, false, 970)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 970, $this->source); })()), "supportTeam", [], "any", false, false, false, 970), "name", [], "any", false, false, false, 970), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true)));
            yield "
                                </span>
                            ";
        }
        // line 973
        yield "                        </div>
                    </div>

                    ";
        // line 977
        yield "                    <div class=\"uv-aside-select search\">
                        <label class=\"uv-aside-select-label\">";
        // line 978
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Country"), "html", null, true);
        yield "</label>

                        <div class=\"auto_focus\">
                            ";
        // line 981
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 981, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ASSIGN_TICKET_COUNTRY"], "method", false, false, false, 981)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 982
            yield "                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 982, $this->source); })()), "country", [], "any", false, false, false, 982)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 982, $this->source); })()), "country", [], "any", false, false, false, 982), "html", null, true)) : ("-- --"));
            yield "\">
                                    ";
            // line 983
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 983, $this->source); })()), "getCountries", [], "method", false, false, false, 983));
            foreach ($context['_seq'] as $context["key"] => $context["selectedCountry"]) {
                // line 984
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 984, $this->source); })()), "country", [], "any", false, false, false, 984) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 984, $this->source); })()), "country", [], "any", false, false, false, 984) == $context["key"]))) {
                    // line 985
                    yield "                                           ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["selectedCountry"], "html", null, true);
                    yield "
                                        ";
                }
                // line 987
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['selectedCountry'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 988
            yield "
                                    ";
            // line 989
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 989, $this->source); })()), "country", [], "any", false, false, false, 989) == "") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 989, $this->source); })()), "country", [], "any", false, false, false, 989) == null))) {
                // line 990
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true);
                yield "
                                    ";
            }
            // line 992
            yield "                                </span>

                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>";
            // line 996
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Country"), "html", null, true);
            yield "</label>

                                        <div class=\"uv-search-sm\">
                                            <input type=\"text\" class=\"uv-search-field uv-search-inline\">
                                        </div>
                                    </div>

                                    <ul class=\"uv-search-list country\" data-action=\"country\">
                                        <li data-index=\"\"><a href=\"#\">";
            // line 1004
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true);
            yield "</a></li>

                                        ";
            // line 1006
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1006, $this->source); })()), "getCountries", [], "method", false, false, false, 1006));
            foreach ($context['_seq'] as $context["key"] => $context["country"]) {
                // line 1007
                yield "                                            <li data-index=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\"><a href=\"#\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["country"], "html", null, true);
                yield "</a></li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['country'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1009
            yield "                                    </ul>
                                </div>
                            ";
        } else {
            // line 1012
            yield "                                <span class=\"uv-aside-select-value\">
                                    ";
            // line 1013
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1013, $this->source); })()), "getCountries", [], "method", false, false, false, 1013));
            foreach ($context['_seq'] as $context["key"] => $context["selectedCountry"]) {
                // line 1014
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1014, $this->source); })()), "country", [], "any", false, false, false, 1014) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1014, $this->source); })()), "country", [], "any", false, false, false, 1014) == $context["key"]))) {
                    // line 1015
                    yield "                                           ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["selectedCountry"], "html", null, true);
                    yield "
                                        ";
                }
                // line 1017
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['selectedCountry'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1018
            yield "
                                    ";
            // line 1019
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1019, $this->source); })()), "country", [], "any", false, false, false, 1019) == "") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1019, $this->source); })()), "country", [], "any", false, false, false, 1019) == null))) {
                // line 1020
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true);
                yield "
                                    ";
            }
            // line 1022
            yield "                                </span>
                            ";
        }
        // line 1024
        yield "                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 1030
        yield "            <div class=\"uv-aside-brick\">
                <div class=\"uv-aside-ticket-labels label-list-block\">
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 1033
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Labels"), "html", null, true);
        yield "</label>

                        <div class=\"uv-field-block\">
                            <input class=\"uv-field uv-dropdown-other\" type=\"text\" data-type=\"label\">
                            <div class=\"uv-dropdown-list uv-top-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 1039
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        yield "</label>
                                    <ul class=\"\">
                                        <span class=\"uv-filter-info\">";
        // line 1041
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        yield "</span>
                                        <span class=\"uv-no-results\" style=\"display: none;\">";
        // line 1042
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "</span>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"label-list\"></div>
                </div>
            </div>

            ";
        // line 1054
        yield "            <div class=\"uv-aside-brick collaborator-list-block\">
                <div class=\"uv-aside-ticket-labels\">
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 1057
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Collaborators"), "html", null, true);
        yield "</label>

                        ";
        // line 1059
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1059, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ADD_COLLABORATOR_TO_TICKET"], "method", false, false, false, 1059)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1060
            yield "                            <div class=\"uv-field-block\">
                                <input class=\"uv-field\" type=\"text\" name=\"email\" type=\"text\" value=\"\" placeholder=\"";
            // line 1061
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type email to add"), "html", null, true);
            yield "\">
                            </div>
                        ";
        }
        // line 1064
        yield "                    </div>
                    <div class=\"collaborator-list\" style=\"margin-top: 10px\"></div>
                </div>
            </div>

            ";
        // line 1070
        yield "            <div class=\"uv-aside-brick tag-list-block\">
                <div class=\"uv-aside-ticket-labels\">
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 1073
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tags"), "html", null, true);
        yield "</label>

                        ";
        // line 1075
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1075, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ADD_TAG"], "method", false, false, false, 1075)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1076
            yield "                            <div class=\"uv-field-block\">
                                <input class=\"uv-field uv-dropdown-other\" name=\"tag-name\" type=\"text\" data-type=\"tag\" value=\"\">
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>";
            // line 1080
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
            yield "</label>
                                        <ul class=\"\">
                                            <span class=\"uv-filter-info\">";
            // line 1082
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
            yield "</span>
                                            <span class=\"uv-no-results\" style=\"display: none;\">";
            // line 1083
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
            yield "</span>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        // line 1089
        yield "                    </div>

                    <div class=\"tag-list\" style=\"margin-top: 10px\"></div>
                </div>
            </div>
        </div>

        <div class=\"uv-view ";
        // line 1096
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1096, $this->source); })()), "request", [], "any", false, false, false, 1096), "cookies", [], "any", false, false, false, 1096) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1096, $this->source); })()), "request", [], "any", false, false, false, 1096), "cookies", [], "any", false, false, false, 1096), "get", ["uv-asideView"], "method", false, false, false, 1096))) {
            yield "uv-aside-view";
        }
        yield "\" >
            <div class=\"uv-ticket-scroll-region ";
        // line 1097
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1097, $this->source); })()), "request", [], "any", false, false, false, 1097), "cookies", [], "any", false, false, false, 1097) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1097, $this->source); })()), "request", [], "any", false, false, false, 1097), "cookies", [], "any", false, false, false, 1097), "get", ["uv-asideView"], "method", false, false, false, 1097))) {
            yield "uv-aside-view-tv";
        }
        yield "\" >
                ";
        // line 1099
        yield "                <div class=\"uv-ticket-action-bar\">
                    <div class=\"uv-ticket-action-bar-lt\">
                        <div class=\"uv-header-fix\"><a href=\"#\" class=\"uv-icon-pin\"></a></div>

                        ";
        // line 1104
        yield "                        <div class=\"uv-tabs\">
                            <ul>
                                ";
        // line 1107
        yield "                                <li for=\"default\" data-type=\"all\" class=\"uv-tab-active\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All Threads"), "html", null, true);
        yield "</li>
                                <li for=\"default\" data-type=\"reply\">";
        // line 1108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Replies"), "html", null, true);
        yield "</li>
                                <li for=\"default\" data-type=\"forward\">";
        // line 1109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forwards"), "html", null, true);
        yield "</li>
                                <li for=\"default\" data-type=\"note\">";
        // line 1110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Notes"), "html", null, true);
        yield "</li>
                                <li for=\"default\" data-type=\"pinned\">";
        // line 1111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pinned"), "html", null, true);
        yield "</li>

                                ";
        // line 1114
        yield "                                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1114, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_EDIT_TICKET"], "method", false, false, false, 1114) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1114, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_DELETE_TICKET"], "method", false, false, false, 1114))) {
            // line 1115
            yield "                                    <li class=\"uv-tab-ellipsis uv-ticket-action\">
                                        <span class=\"uv-icon-ellipsis uv-dropdown-other\"></span>

                                        <div class=\"uv-dropdown-list uv-bottom-right\">
                                            <div class=\"uv-dropdown-container\">
                                                <ul class=\"priority\" data-action=\"priority\">
                                                    ";
            // line 1121
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1121, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_EDIT_TICKET"], "method", false, false, false, 1121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1122
                yield "                                                        <li data-action=\"edit\" class=\"uv-open-popup\" data-target=\"edit-ticket-modal\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Ticket"), "html", null, true);
                yield "</li>
                                                    ";
            }
            // line 1124
            yield "
                                                    <li data-action=\"print\">";
            // line 1125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Print Ticket"), "html", null, true);
            yield "</li>

                                                    ";
            // line 1127
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1127, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_UPDATE_TICKET_STATUS"], "method", false, false, false, 1127)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1128
                yield "                                                        <li data-action=\"spam\" data-index=\"6\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mark as Spam"), "html", null, true);
                yield "</li>
                                                        <li data-action=\"closed\" data-index=\"5\">";
                // line 1129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mark as Closed"), "html", null, true);
                yield "</li>
                                                    ";
            }
            // line 1131
            yield "
                                                    ";
            // line 1132
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1132, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_DELETE_TICKET"], "method", false, false, false, 1132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1133
                yield "                                                        <li data-action=\"delete\" class=\"uv-text-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete Ticket"), "html", null, true);
                yield "</li>
                                                    ";
            }
            // line 1135
            yield "                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                ";
        }
        // line 1140
        yield "                            </ul>
                        </div>
                    </div>

                    <div class=\"uv-ticket-action-bar-rt\">
                        ";
        // line 1145
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 1145, $this->source); })()), "getRegisteredComponent", ["Webkul\\UVDesk\\CoreFrameworkBundle\\Tickets\\WidgetCollection"], "method", false, false, false, 1145), "embedSideFilterIcons", [], "method", false, false, false, 1145);
        yield "
                    </div>
                </div>

                ";
        // line 1150
        yield "                <div class=\"uv-ticket-viewer-bar\">
                    <div class=\"uv-ticket-viewer-list\">
                        <div class=\"uv-ticket-viewer-single uv-first\" title=\"Currently active agents on ticket...\">
                            <span class=\"uv-icon-eye-light\"></span>
                        </div>
                    </div>
                </div>

                ";
        // line 1159
        yield "                <div class=\"uv-ticket-head\">
                    <div class=\"uv-ticket-head-lt\">
                        <span class=\"uv-star-large ";
        // line 1161
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1161, $this->source); })()), "isStarred", [], "any", false, false, false, 1161)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("uv-star-active") : (""));
        yield " uv-star uv-margin-right-5\"></span>
                    </div>

                    <div class=\"uv-ticket-head-rt\">
                        <h1>";
        // line 1165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1165, $this->source); })()), "subject", [], "any", false, false, false, 1165), "html", null, true);
        yield "</h1>
                    </div>
                </div>

                <div class=\"uv-ticket-strip\">
                    <span>
                        <span class=\"uv-ticket-strip-label\">";
        // line 1171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Created"), "html", null, true);
        yield " - </span>
                        <span class=\"timeago uv-margin-0\" data-timestamp=\"";
        // line 1172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1172, $this->source); })()), "createdAt", [], "any", false, false, false, 1172), "getTimestamp", [], "method", false, false, false, 1172), "html", null, true);
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1172, $this->source); })()), "createdAt", [], "any", false, false, false, 1172), "format", ["d-m-Y h:ia"], "method", false, false, false, 1172), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 1172, $this->source); })()), "timeZoneConverter", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1172, $this->source); })()), "createdAt", [], "any", false, false, false, 1172)], "method", false, false, false, 1172), "html", null, true);
        yield "</span>
                    </span>

                    <span>
                        <span class=\"uv-ticket-strip-label\">";
        // line 1176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("By"), "html", null, true);
        yield " - </span> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1176, $this->source); })()), "user", [], "any", false, false, false, 1176), "name", [], "any", false, false, false, 1176), "html", null, true);
        yield "
                        ";
        // line 1177
        if ((($tmp = (isset($context["totalCustomerTickets"]) || array_key_exists("totalCustomerTickets", $context) ? $context["totalCustomerTickets"] : (function () { throw new RuntimeError('Variable "totalCustomerTickets" does not exist.', 1177, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1178
            yield "                            (<a id=\"more-tickets-btn\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_collection");
            yield "#customer/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 1178, $this->source); })()), "id", [], "any", false, false, false, 1178), "html", null, true);
            yield "\" target=\"_blank\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("count more tickets", ["count" => (isset($context["totalCustomerTickets"]) || array_key_exists("totalCustomerTickets", $context) ? $context["totalCustomerTickets"] : (function () { throw new RuntimeError('Variable "totalCustomerTickets" does not exist.', 1178, $this->source); })())]), "html", null, true);
            yield "</a>)
                        ";
        }
        // line 1180
        yield "                    </span>

                    <span class=\"agent-info\" style=\"";
        // line 1182
        yield (((($tmp = (isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 1182, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("display: none"));
        yield "\">
                        <span class=\"uv-ticket-strip-label\">";
        // line 1183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        yield " - </span>
                        <span class=\"name\">";
        // line 1184
        yield (((($tmp = (isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 1184, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 1184, $this->source); })()), "name", [], "any", false, false, false, 1184), "html", null, true)) : (""));
        yield "</span>
                        ";
        // line 1185
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1185, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_MANAGE_AGENT"], "method", false, false, false, 1185) && array_key_exists("ticketAgent", $context)) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 1185, $this->source); })())))) {
            // line 1186
            yield "                            <span class=\"uv-quick-view-trigger\" title=\"Agent access details\" data-placement=\"bottom\" data-id=\"<%= id %>\"></span>
                        ";
        }
        // line 1188
        yield "                    </span>

                    ";
        // line 1191
        yield "                    <span>
                        ";
        // line 1192
        if ((($tmp = (isset($context["ticketRating"]) || array_key_exists("ticketRating", $context) ? $context["ticketRating"] : (function () { throw new RuntimeError('Variable "ticketRating" does not exist.', 1192, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1193
            yield "                            <span class=\"kudos-rating\">
                                ";
            // line 1194
            if (((isset($context["ticketRating"]) || array_key_exists("ticketRating", $context) ? $context["ticketRating"] : (function () { throw new RuntimeError('Variable "ticketRating" does not exist.', 1194, $this->source); })()) == 1)) {
                // line 1195
                yield "                                    <span class='ticket-rating-common ticket-rating-1'>
                                        <span class=\"uv-icon-kudos-rating\"></span>
                                        <span class=\"uv-icon-kudos-rating-label\"  title=\"Client is very sad\">
                                            ";
                // line 1198
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Very Sad"), "html", null, true);
                yield "
                                        </span>
                                    </span>
                                ";
            } elseif ((            // line 1201
(isset($context["ticketRating"]) || array_key_exists("ticketRating", $context) ? $context["ticketRating"] : (function () { throw new RuntimeError('Variable "ticketRating" does not exist.', 1201, $this->source); })()) == 2)) {
                // line 1202
                yield "                                    <span class='ticket-rating-common ticket-rating-2'>
                                        <span class=\"uv-icon-kudos-rating\"></span>
                                        <span class=\"uv-icon-kudos-rating-label\" title=\"Client is sad\">
                                            ";
                // line 1205
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sad"), "html", null, true);
                yield "
                                        </span>
                                    </span>
                                ";
            } elseif ((            // line 1208
(isset($context["ticketRating"]) || array_key_exists("ticketRating", $context) ? $context["ticketRating"] : (function () { throw new RuntimeError('Variable "ticketRating" does not exist.', 1208, $this->source); })()) == 3)) {
                // line 1209
                yield "                                    <span class='ticket-rating-common ticket-rating-3'>
                                        <span class=\"uv-icon-kudos-rating\"></span>
                                        <span class=\"uv-icon-kudos-rating-label\" title=\"Client is neutral\">
                                            ";
                // line 1212
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Neutral"), "html", null, true);
                yield "
                                        </span>
                                    </span>
                                ";
            } elseif ((            // line 1215
(isset($context["ticketRating"]) || array_key_exists("ticketRating", $context) ? $context["ticketRating"] : (function () { throw new RuntimeError('Variable "ticketRating" does not exist.', 1215, $this->source); })()) == 4)) {
                // line 1216
                yield "                                    <span class='ticket-rating-common ticket-rating-4'>
                                        <span class=\"uv-icon-kudos-rating\"></span>
                                        <span class=\"uv-icon-kudos-rating-label\" title=\"Client is happy\">
                                            ";
                // line 1219
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Happy"), "html", null, true);
                yield "
                                        </span>
                                    </span>
                                ";
            } else {
                // line 1223
                yield "                                    <span class='ticket-rating-common ticket-rating-5'>
                                        <span class=\"uv-icon-kudos-rating\"></span>
                                        <span class=\"uv-icon-kudos-rating-label\" title=\"Client is very happy\">
                                            ";
                // line 1226
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Very Happy"), "html", null, true);
                yield "
                                        </span>
                                    </span>
                                ";
            }
            // line 1230
            yield "                            </span>
                        ";
        }
        // line 1232
        yield "                    </span>
                </div>

                ";
        // line 1236
        yield "                <div class=\"uv-tab-view uv-tab-view-active\" id=\"default\">
                    <div class=\"uv-ticket-section\">
                        <div class=\"uv-ticket-main create\">
                            <div class=\"uv-ticket-strip\">
                                <span>
                                    <span class=\"timeago uv-margin-0\" data-timestamp=\"";
        // line 1241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1241, $this->source); })()), "createdAt", [], "any", false, false, false, 1241), "getTimestamp", [], "method", false, false, false, 1241), "html", null, true);
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1241, $this->source); })()), "createdAt", [], "any", false, false, false, 1241), "format", ["d-m-Y h:ia"], "method", false, false, false, 1241), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 1241, $this->source); })()), "timeZoneConverter", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1241, $this->source); })()), "createdAt", [], "any", false, false, false, 1241)], "method", false, false, false, 1241), "html", null, true);
        yield "</span>
                                    - ";
        // line 1242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1242, $this->source); })()), "user", [], "any", false, false, false, 1242), "name", [], "any", false, false, false, 1242), "html", null, true);
        yield " <span class=\"uv-ticket-strip-label\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("created Ticket"), "html", null, true);
        yield "</span>
                                </span>
                                ";
        // line 1244
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1244, $this->source); })()), "cc", [], "any", false, false, false, 1244) != "")) {
            // line 1245
            yield "\t\t\t\t\t\t\t\t\t<div class=\"uv-ticket-strip\">
\t\t\t\t\t\t\t\t\t\t<span><span class=\"uv-ticket-strip-label\">";
            // line 1246
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CC"), "html", null, true);
            yield " -</span> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1246, $this->source); })()), "cc", [], "any", false, false, false, 1246), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 1248
        yield "      
                            </div>

                            <div class=\"uv-ticket-main-lt\">
                               <img src=\"";
        // line 1252
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1252, $this->source); })()), "user", [], "any", false, false, false, 1252), "thumbnail", [], "any", false, false, false, 1252)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1252, $this->source); })()), "request", [], "any", false, false, false, 1252), "scheme", [], "any", false, false, false, 1252) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1252, $this->source); })()), "request", [], "any", false, false, false, 1252), "httpHost", [], "any", false, false, false, 1252)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")) . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1252, $this->source); })()), "user", [], "any", false, false, false, 1252), "thumbnail", [], "any", false, false, false, 1252)), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1252, $this->source); })()), "createdBy", [], "any", false, false, false, 1252) == "customer")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_customer_image_path"]) || array_key_exists("default_customer_image_path", $context) ? $context["default_customer_image_path"] : (function () { throw new RuntimeError('Variable "default_customer_image_path" does not exist.', 1252, $this->source); })())), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 1252, $this->source); })())), "html", null, true)))));
        yield "\">
                            </div>

                            <div class=\"uv-ticket-main-rt\">
                                ";
        // line 1256
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1256, $this->source); })()), "createdBy", [], "any", false, false, false, 1256) == "customer")) {
            // line 1257
            yield "                                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_manage_customer_account");
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1257, $this->source); })()), "user", [], "any", false, false, false, 1257), "id", [], "any", false, false, false, 1257), "html", null, true);
            yield "\" class=\"uv-ticket-member-name\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1257, $this->source); })()), "user", [], "any", false, false, false, 1257), "name", [], "any", false, false, false, 1257), "html", null, true);
            yield "</a>
                                ";
        } else {
            // line 1259
            yield "                                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1259, $this->source); })()), "user", [], "any", false, false, false, 1259)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1260
                yield "                                        <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_account");
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1260, $this->source); })()), "user", [], "any", false, false, false, 1260), "id", [], "any", false, false, false, 1260), "html", null, true);
                yield "\" class=\"uv-ticket-member-name\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1260, $this->source); })()), "user", [], "any", false, false, false, 1260), "name", [], "any", false, false, false, 1260), "html", null, true);
                yield "</a>
                                    ";
            } else {
                // line 1262
                yield "                                        <a class=\"uv-ticket-member-name\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1262, $this->source); })()), "user", [], "any", false, false, false, 1262), "name", [], "any", false, false, false, 1262), "html", null, true);
                yield "</a>
                                    ";
            }
            // line 1264
            yield "                                ";
        }
        // line 1265
        yield "
                                ";
        // line 1267
        yield "                                <div class=\"message\">
                                    <p>
                                        ";
        // line 1269
        if ((Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1269, $this->source); })()), "message", [], "any", false, false, false, 1269)) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1269, $this->source); })()), "message", [], "any", false, false, false, 1269))) {
            // line 1270
            yield "                                            ";
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1270, $this->source); })()), "message", [], "any", false, false, false, 1270), "html", null, true));
            yield "
                                        ";
        } else {
            // line 1272
            yield "                                            ";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1272, $this->source); })()), "message", [], "any", false, false, false, 1272);
            yield "
                                        ";
        }
        // line 1274
        yield "                                    </p>
                                </div>

                                ";
        // line 1278
        yield "                                ";
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1278, $this->source); })()), "attachments", [], "any", false, false, false, 1278))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1279
            yield "                                    <div class=\"uv-ticket-uploads\">
                                        <h4>";
            // line 1280
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Uploaded Files"), "html", null, true);
            yield "</h4>
                                        <div class=\"uv-ticket-uploads-strip\">
                                            ";
            // line 1282
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1282, $this->source); })()), "attachments", [], "any", false, false, false, 1282));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 1283
                yield "                                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "downloadURL", [], "any", false, false, false, 1283), "html", null, true);
                yield "\" target = \"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "name", [], "any", false, false, false, 1283), "html", null, true);
                yield "\">
                                                    <img src=\"";
                // line 1284
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "iconURL", [], "any", false, false, false, 1284), "html", null, true);
                yield "\"  class=\"uv-auto-pointer-events\"/>
                                                </a>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['attachment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1287
            yield "                                        </div>

                                        ";
            // line 1289
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1289, $this->source); })()), "attachments", [], "any", false, false, false, 1289)) > 1)) {
                // line 1290
                yield "                                            <div class=\"uv-upload-actions\">
                                                <a href=\"#\" class=\"uv-open-in-files\" data-thread=\"";
                // line 1291
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1291, $this->source); })()), "id", [], "any", false, false, false, 1291), "html", null, true);
                yield "\" style=\"display: none\"><span class=\"uv-icon-open-in-files\"></span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Open in Files"), "html", null, true);
                yield "</a>
                                                ";
                // line 1292
                if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1292, $this->source); })()), "attachments", [], "any", false, false, false, 1292))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1293
                    yield "                                                    <a href=\"";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_download_attachment_zip");
                    yield "/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1293, $this->source); })()), "id", [], "any", false, false, false, 1293), "html", null, true);
                    yield "\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> Download (as .zip)</a>
                                                ";
                }
                // line 1295
                yield "                                            </div>
                                        ";
            }
            // line 1297
            yield "                                    </div>
                                ";
        }
        // line 1299
        yield "                            </div>
                        </div>

                        <div class=\"uv-ticket-accordion\">
                            <div class=\"uv-ticket-count-wrapper\">
                                <span class=\"uv-ticket-count-stat\">";
        // line 1304
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalReplies"]) || array_key_exists("totalReplies", $context) ? $context["totalReplies"] : (function () { throw new RuntimeError('Variable "totalReplies" does not exist.', 1304, $this->source); })()), "html", null, true);
        yield "</span>
                            </div>

                            <div class=\"uv-ticket-wrapper thread-list\"></div>
                        </div>
                    </div>
                </div>

                ";
        // line 1313
        yield "                <div class=\"uv-ticket-main uv-ticket-reply uv-no-error-success-icon\">
                    <div class=\"uv-ticket-main-lt\">
                        <span class=\"uv-icon-ellipsis\"></span>
                        <img src=\"";
        // line 1316
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUserDetails"]) || array_key_exists("currentUserDetails", $context) ? $context["currentUserDetails"] : (function () { throw new RuntimeError('Variable "currentUserDetails" does not exist.', 1316, $this->source); })()), "thumbnail", [], "any", false, false, false, 1316)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1316, $this->source); })()), "request", [], "any", false, false, false, 1316), "scheme", [], "any", false, false, false, 1316) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1316, $this->source); })()), "request", [], "any", false, false, false, 1316), "httpHost", [], "any", false, false, false, 1316)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")) . CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUserDetails"]) || array_key_exists("currentUserDetails", $context) ? $context["currentUserDetails"] : (function () { throw new RuntimeError('Variable "currentUserDetails" does not exist.', 1316, $this->source); })()), "thumbnail", [], "any", false, false, false, 1316)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 1316, $this->source); })())), "html", null, true)));
        yield "\" />
                    </div>

                    <div class=\"uv-ticket-main-rt\">
                        <span class=\"uv-ticket-member-name\">";
        // line 1320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUserDetails"]) || array_key_exists("currentUserDetails", $context) ? $context["currentUserDetails"] : (function () { throw new RuntimeError('Variable "currentUserDetails" does not exist.', 1320, $this->source); })()), "name", [], "any", false, false, false, 1320), "html", null, true);
        yield "</span>
                        <div class=\"uv-tabs\">
                            <ul>
                                <li for=\"reply\" class=\"uv-tab-active\">";
        // line 1323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reply"), "html", null, true);
        yield "</li>
                                <li for=\"forward\">";
        // line 1324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forward"), "html", null, true);
        yield "</li>
                                ";
        // line 1325
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1325, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ADD_NOTE"], "method", false, false, false, 1325)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1326
            yield "                                    <li for='note'>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Note"), "html", null, true);
            yield "</li>
                                ";
        }
        // line 1328
        yield "                            </ul>
                        </div>

                        ";
        // line 1332
        yield "                        <div class=\"uv-tab-view uv-tab-view-active\" id=\"reply\">
                            <form enctype=\"multipart/form-data\" method=\"post\" action=\"";
        // line 1333
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_add_ticket_thread", ["ticketId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1333, $this->source); })()), "id", [], "any", false, false, false, 1333)]), "html", null, true);
        yield "\">
                                <input name=\"threadType\" value=\"reply\" type=\"hidden\">
                                <input name=\"status\" value=\"\" type=\"hidden\" ";
        // line 1335
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1335, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_UPDATE_TICKET_STATUS"], "method", false, false, false, 1335)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "class=\"reply-status\"";
        }
        yield ">
                                <div class=\"uv-element-block collaborators\" style=\"display: none\">
                                    <label class=\"uv-field-label\">";
        // line 1337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Collaborators"), "html", null, true);
        yield "</label>
                                    <div class=\"uv-field-block\"></div>
                                </div>

                                <div class=\"uv-element-block cc-bcc\">
                                    <label>
                                        <div class=\"uv-checkbox\">
                                            <input type=\"checkbox\" class=\"cc-bcc-toggle\">
                                            <span class=\"uv-checkbox-view\"></span>
                                        </div>
                                        <span class=\"uv-checkbox-label\">CC/BCC</span>
                                    </label>

                                    <div class=\"uv-field-block\" style=\"display: none\">
                                        <div class=\"uv-group\">
                                            <input class=\"uv-group-field uv-dropdown-other preloaded uv-manual-enter\" type=\"text\">
                                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                                <div class=\"uv-dropdown-container\">
                                                    <label>";
        // line 1355
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        yield "</label>
                                                </div>

                                                <ul class=\"uv-agents-list\">
                                                    ";
        // line 1359
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1359, $this->source); })()), "getAgentPartialDataCollection", [], "any", false, false, false, 1359));
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 1360
            yield "                                                        <li data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "email", [], "any", false, false, false, 1360), "html", null, true);
            yield "\">
                                                            <img src=\"";
            // line 1361
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 1361)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1361, $this->source); })()), "request", [], "any", false, false, false, 1361), "scheme", [], "any", false, false, false, 1361) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1361, $this->source); })()), "request", [], "any", false, false, false, 1361), "httpHost", [], "any", false, false, false, 1361)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")) . CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 1361)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 1361, $this->source); })())), "html", null, true)));
            yield "\"/> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 1361), "html", null, true);
            yield "
                                                        </li>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['agent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1364
        yield "
                                                    <li class=\"uv-no-results\" style=\"display: none;\">";
        // line 1365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "</li>
                                                </ul>
                                            </div>
                                            <select class=\"uv-group-select cc-bcc-select\">
                                                <option value=\"bcc\">";
        // line 1369
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("BCC"), "html", null, true);
        yield "</option>
                                                <option value=\"cc\">";
        // line 1370
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CC"), "html", null, true);
        yield "</option>
                                            </select>
                                        </div>

                                        <div class=\"cc-bcc-list\"></div>
                                    </div>
                                </div>

                                <div class=\"uv-element-block uv-element-block-textarea\">
                                    <label class=\"uv-field-label\">";
        // line 1379
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Write a reply"), "html", null, true);
        yield "</label>
                                    <div class=\"uv-field-block\">
                                        <textarea class=\"uv-field\" name=\"reply\" id=\"reply-area\">";
        // line 1381
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 1381, $this->source); })()), "getAgentDraftReply", [], "method", false, false, false, 1381), "html", null, true);
        yield "</textarea>
                                    </div>
                                </div>

                                <div class=\"uv-element-block attachment-block\">
                                    <label>
                                        <span class=\"uv-file-label\">";
        // line 1387
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Attachment"), "html", null, true);
        yield "</span>
                                    </label>
                                </div>

                                <div class=\"uv-action-buttons\">
                                    <div class=\"uv-dropdown next-view\">
                                        <input type=\"hidden\" name=\"nextView\" value=\"stay\"/>
                                        <div class=\"uv-dropdown-btn\" style=\"padding: 9px 27px 9px 10px;\">";
        // line 1394
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stay on ticket"), "html", null, true);
        yield "</div>
                                        <div class=\"uv-dropdown-list uv-top-left\" style=\"opacity: 1;\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
        // line 1397
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("After Reply"), "html", null, true);
        yield "</label>
                                                <ul>
                                                    <li data-value=\"stay\">";
        // line 1399
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stay on ticket"), "html", null, true);
        yield "</li>
                                                    <li data-value=\"redirect\">";
        // line 1400
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Redirect to list"), "html", null, true);
        yield "</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"uv-dropdown reply\">
                                        <div class=\"uv-btn uv-dropdown-other\">";
        // line 1407
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reply"), "html", null, true);
        yield " <span class=\"uv-icon-down-light\"></span></div>
                                        <div class=\"uv-dropdown-list uv-top-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
        // line 1410
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reply"), "html", null, true);
        yield "</label>
                                                <ul>
                                                    <li data-id=\"\">";
        // line 1412
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit"), "html", null, true);
        yield "</li>
                                                    ";
        // line 1413
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1413, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_UPDATE_TICKET_STATUS"], "method", false, false, false, 1413)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1414
            yield "                                                        <li data-id=\"open\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Open"), "html", null, true);
            yield "</li>
                                                        <li data-id=\"pending\">";
            // line 1415
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Pending"), "html", null, true);
            yield "</li>
                                                        <li data-id=\"answered\">";
            // line 1416
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Answered"), "html", null, true);
            yield "</li>
                                                        <li data-id=\"resolved\">";
            // line 1417
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Resolved"), "html", null, true);
            yield "</li>
                                                        <li data-id=\"closed\">";
            // line 1418
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Closed"), "html", null, true);
            yield "</li>
                                                    ";
        }
        // line 1420
        yield "                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        ";
        // line 1429
        yield "                        <div class=\"uv-tab-view\" id=\"forward\">
                            <form enctype=\"multipart/form-data\" method=\"post\" action=\"";
        // line 1430
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_add_ticket_thread", ["ticketId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1430, $this->source); })()), "id", [], "any", false, false, false, 1430)]), "html", null, true);
        yield "\">
                                <input name=\"threadType\" value=\"forward\" type=\"hidden\">
                                <input name=\"status\" value=\"\" type=\"hidden\" ";
        // line 1432
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1432, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_UPDATE_TICKET_STATUS"], "method", false, false, false, 1432)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "class=\"reply-status\"";
        }
        yield ">

                                <div class=\"uv-element-block\">
                                    <label class=\"uv-field-label\">";
        // line 1435
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
        yield "</label>
                                    <div class=\"uv-field-block\">
                                        <input class=\"uv-field\" type=\"text\" name=\"subject\">
                                    </div>
                                </div>

                                <div class=\"uv-element-block to\">
                                    <label class=\"uv-field-label\">";
        // line 1442
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To"), "html", null, true);
        yield "</label>
                                    <div class=\"uv-field-block\">
                                        <input class=\"uv-field uv-dropdown-other preloaded uv-to-message uv-manual-enter\" type=\"text\">

                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
        // line 1448
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        yield "</label>
                                            </div>

                                            <ul class=\"uv-agents-list\">
                                                ";
        // line 1452
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1452, $this->source); })()), "getAgentPartialDataCollection", [], "any", false, false, false, 1452));
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 1453
            yield "                                                    <li data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "email", [], "any", false, false, false, 1453), "html", null, true);
            yield "\">
                                                        <img src=\"";
            // line 1454
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 1454)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1454, $this->source); })()), "request", [], "any", false, false, false, 1454), "scheme", [], "any", false, false, false, 1454) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1454, $this->source); })()), "request", [], "any", false, false, false, 1454), "httpHost", [], "any", false, false, false, 1454)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")) . CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 1454)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 1454, $this->source); })())), "html", null, true)));
            yield "\"/> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 1454), "html", null, true);
            yield "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['agent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1457
        yield "
                                                <li class=\"uv-no-results\" style=\"display: none;\">";
        // line 1458
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "</li>
                                            </ul>
                                        </div>

                                        <div class=\"to-list\"></div>
                                    </div>
                                </div>

                                <div class=\"uv-element-block cc-bcc\">
                                    <label>
                                        <div class=\"uv-checkbox\">
                                            <input type=\"checkbox\" class=\"cc-bcc-toggle\">
                                            <span class=\"uv-checkbox-view\"></span>
                                        </div>
                                        <span class=\"uv-checkbox-label\">CC/BCC</span>
                                    </label>
                                    <div class=\"uv-field-block\" style=\"display: none\">
                                        <div class=\"uv-group\">
                                            <input class=\"uv-group-field uv-dropdown-other preloaded uv-manual-enter\" type=\"text\">
                                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                                <div class=\"uv-dropdown-container\"><label>";
        // line 1478
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        yield "</label></div>

                                                <ul class=\"uv-agents-list\">
                                                    ";
        // line 1481
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1481, $this->source); })()), "getAgentPartialDataCollection", [], "any", false, false, false, 1481));
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 1482
            yield "                                                        <li data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "email", [], "any", false, false, false, 1482), "html", null, true);
            yield "\">
                                                            <img src=\"";
            // line 1483
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 1483)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1483, $this->source); })()), "request", [], "any", false, false, false, 1483), "scheme", [], "any", false, false, false, 1483) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1483, $this->source); })()), "request", [], "any", false, false, false, 1483), "httpHost", [], "any", false, false, false, 1483)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")) . CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 1483)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 1483, $this->source); })())), "html", null, true)));
            yield "\"/> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 1483), "html", null, true);
            yield "
                                                        </li>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['agent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1486
        yield "
                                                    <li class=\"uv-no-results\" style=\"display: none;\">";
        // line 1487
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "</li>
                                                </ul>
                                            </div>
                                            <select class=\"uv-group-select cc-bcc-select\">
                                                <option value=\"bcc\">";
        // line 1491
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("BCC"), "html", null, true);
        yield "</option>
                                                <option value=\"cc\">";
        // line 1492
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CC"), "html", null, true);
        yield "</option>
                                            </select>
                                        </div>

                                        <div class=\"cc-bcc-list\"></div>
                                    </div>
                                </div>

                                <div class=\"uv-element-block uv-element-block-textarea\">
                                    <label class=\"uv-field-label\">";
        // line 1501
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Write a reply"), "html", null, true);
        yield "</label>
                                    <div class=\"uv-field-block\">
                                        <textarea class=\"uv-field\" name=\"reply\" id=\"forward-area\">";
        // line 1503
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 1503, $this->source); })()), "getAgentDraftReply", [], "method", false, false, false, 1503), "html", null, true);
        yield "</textarea>
                                    </div>
                                </div>

                                <div class=\"uv-element-block attachment-block\">
                                    <label><span class=\"uv-file-label\">";
        // line 1508
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Attachment"), "html", null, true);
        yield "</span></label>
                                </div>

                                <div class=\"uv-action-buttons\">
                                    <div class=\"uv-dropdown next-view\">
                                        <input type=\"hidden\" name=\"nextView\" value=\"stay\"/>
                                        <div class=\"uv-dropdown-btn\" style=\"padding: 9px 27px 9px 10px;\">";
        // line 1514
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stay on ticket"), "html", null, true);
        yield "</div>
                                        <div class=\"uv-dropdown-list uv-top-left\" style=\"opacity: 1;\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
        // line 1517
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("After Reply"), "html", null, true);
        yield "</label>
                                                <ul>
                                                    <li data-value=\"stay\">";
        // line 1519
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stay on ticket"), "html", null, true);
        yield "</li>
                                                    <li data-value=\"redirect\">";
        // line 1520
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Redirect to list"), "html", null, true);
        yield "</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"uv-btn forward\">";
        // line 1526
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forward"), "html", null, true);
        yield "</div>
                                </div>
                            </form>
                        </div>

                        ";
        // line 1532
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1532, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ADD_NOTE"], "method", false, false, false, 1532)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1533
            yield "                            <div class=\"uv-tab-view\" id=\"note\">
                                <form enctype=\"multipart/form-data\" method=\"post\" action=\"";
            // line 1534
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_add_ticket_thread", ["ticketId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1534, $this->source); })()), "id", [], "any", false, false, false, 1534)]), "html", null, true);
            yield "\">
                                    <input name=\"threadType\" value=\"note\" type=\"hidden\">
                                    <input name=\"status\" value=\"\" type=\"hidden\" ";
            // line 1536
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1536, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_UPDATE_TICKET_STATUS"], "method", false, false, false, 1536)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "class=\"reply-status\"";
            }
            yield ">

                                    <div class=\"uv-element-block uv-element-block-textarea\">
                                        <label class=\"uv-field-label\">";
            // line 1539
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Write a reply"), "html", null, true);
            yield "</label>
                                        <div class=\"uv-field-block\">
                                            <textarea class=\"uv-field\" name=\"reply\" id=\"note-area\">";
            // line 1541
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 1541, $this->source); })()), "getAgentDraftReply", [], "method", false, false, false, 1541), "html", null, true);
            yield "</textarea>
                                        </div>
                                    </div>

                                    <div class=\"uv-element-block attachment-block\">
                                        <label><span class=\"uv-file-label\">";
            // line 1546
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Attachment"), "html", null, true);
            yield "</span></label>
                                    </div>

                                    <div class=\"uv-action-buttons\">
                                        <div class=\"uv-dropdown next-view\">
                                            <input type=\"hidden\" name=\"nextView\" value=\"stay\"/>
                                            <div class=\"uv-dropdown-btn\" style=\"padding: 9px 27px 9px 10px;\">";
            // line 1552
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stay on ticket"), "html", null, true);
            yield "</div>
                                            <div class=\"uv-dropdown-list uv-top-left\" style=\"opacity: 1;\">
                                                <div class=\"uv-dropdown-container\">
                                                    <label>";
            // line 1555
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("After Reply"), "html", null, true);
            yield "</label>
                                                    <ul>
                                                        <li data-value=\"stay\">";
            // line 1557
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stay on ticket"), "html", null, true);
            yield "</li>
                                                        <li data-value=\"redirect\">";
            // line 1558
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Redirect to list"), "html", null, true);
            yield "</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"uv-dropdown reply\">
                                            <div class=\"uv-btn uv-dropdown-other\">";
            // line 1565
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reply"), "html", null, true);
            yield "<span class=\"uv-icon-down-light\"></span></div>

                                            <div class=\"uv-dropdown-list uv-top-left\">
                                                <div class=\"uv-dropdown-container\">
                                                    <label>";
            // line 1569
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Note"), "html", null, true);
            yield "</label>
                                                    <ul>
                                                        <li data-id=\"\">";
            // line 1571
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit"), "html", null, true);
            yield "</li>
                                                        ";
            // line 1572
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1572, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_UPDATE_TICKET_STATUS"], "method", false, false, false, 1572)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1573
                yield "                                                            <li data-id=\"open\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Open"), "html", null, true);
                yield "</li>
                                                            <li data-id=\"pending\">";
                // line 1574
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Pending"), "html", null, true);
                yield "</li>
                                                            <li data-id=\"answered\">";
                // line 1575
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Answered"), "html", null, true);
                yield "</li>
                                                            <li data-id=\"resolved\">";
                // line 1576
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Resolved"), "html", null, true);
                yield "</li>
                                                            <li data-id=\"closed\">";
                // line 1577
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Closed"), "html", null, true);
                yield "</li>
                                                        ";
            }
            // line 1579
            yield "                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        ";
        }
        // line 1587
        yield "                    </div>
                </div>
            </div>

            <!-- Bottom Action Block -->
            <div class=\"uv-ticket-fixed-region\">
                <div class=\"uv-ticket-fixed-region-lt\">
                    ";
        // line 1594
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 1594, $this->source); })()), "getRegisteredComponent", ["Webkul\\UVDesk\\CoreFrameworkBundle\\Tickets\\QuickActionButtonCollection"], "method", false, false, false, 1594), "injectTemplates", [], "method", false, false, false, 1594);
        yield "
                </div>

                <div class=\"uv-ticket-fixed-region-rt\"></div>
            </div>
            <!-- //Bottom Action Block -->
        </div>
    </div>

    ";
        // line 1604
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1604, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_EDIT_TICKET"], "method", false, false, false, 1604)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1605
            yield "        <div class=\"uv-pop-up-overlay uv-no-error-success-icon\" id=\"edit-ticket-modal\">
            <div class=\"uv-pop-up-box uv-pop-up-wide\">
                <span class=\"uv-pop-up-close\"></span>
                <h2>";
            // line 1608
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Ticket"), "html", null, true);
            yield "</h2>

                ";
            // line 1611
            yield "                <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_update_ticket_details_xhr", ["ticketId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1611, $this->source); })()), "id", [], "any", false, false, false, 1611)]), "html", null, true);
            yield "\" id=\"edit-ticket-form\">
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
            // line 1613
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
            yield "</label>
                        <div class=\"uv-field-block\">
                            <input type=\"text\" name=\"subject\" class=\"uv-field\" value=\"";
            // line 1615
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1615, $this->source); })()), "subject", [], "any", false, false, false, 1615), "html", null, true);
            yield "\" />
                        </div>
                    </div>
                    
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
            // line 1620
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reply"), "html", null, true);
            yield "</label>
                        <div class=\"uv-field-block\">
                            ";
            // line 1622
            if ((Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1622, $this->source); })()), "message", [], "any", false, false, false, 1622)) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1622, $this->source); })()), "message", [], "any", false, false, false, 1622))) {
                // line 1623
                yield "                                <textarea name=\"reply\" id=\"uv-edit-create-thread\" class=\"uv-field\">";
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1623, $this->source); })()), "message", [], "any", false, false, false, 1623), "html", null, true));
                yield "</textarea>
                            %} ";
            } else {
                // line 1625
                yield "                                <textarea name=\"reply\" id=\"uv-edit-create-thread\" class=\"uv-field\">";
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1625, $this->source); })()), "message", [], "any", false, false, false, 1625);
                yield "</textarea>
                            ";
            }
            // line 1627
            yield "                        </div>
                    </div>

                    <div class=\"uv-pop-up-actions\">
                        <input class=\"uv-btn update\" href=\"#\" value=\"Update\" type=\"submit\">
                        <input class=\"uv-btn cancel\" href=\"#\" value=\"Discard\" type=\"button\">
                    </div>
                </form>
            </div>
        </div>
    ";
        }
        // line 1638
        yield "
    ";
        // line 1639
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 1639, $this->source); })()), "getRegisteredComponent", ["Webkul\\UVDesk\\CoreFrameworkBundle\\Tickets\\WidgetCollection"], "method", false, false, false, 1639), "embedSideFilterContent", [], "method", false, false, false, 1639);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1642
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 1643
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

    ";
        // line 1645
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@UVDeskCoreFramework\\Templates\\attachment.html.twig");
        yield "
    ";
        // line 1646
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@UVDeskCoreFramework/Templates/tinyMCE.html.twig");
        yield "

    <script id=\"thread_list_empty_tmp\" type=\"text/template\">
        <div class=\"uv-no-threads\">";
        // line 1649
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nothing interesting here..."), "html", null, true);
        yield "</div>
    </script>

    <script> 
        \$(document).ready(function() {
            function setupFilter(inputSelector, listSelector) {
                \$(inputSelector).on(\"keyup\", function () {
                    const value = this.value.toLowerCase();
                    const \$items = \$(listSelector + \" li\");
                    if (value) {
                        \$items.hide().filter(function () {
                            return \$(this).html().toLowerCase().includes(value);
                        }).show();
                    } else {
                        \$items.show();
                    }
                });
            }

            setupFilter(\"#filterSavedreplies\", \"#listSavedReplies\");
            setupFilter(\"#filterPreparedResponse\", \"#listPreparedResponses\");

            \$(\".uv-dropdown-btn\").click(function(event) {
                setTimeout(function() {
                    \$(\".uv-search-inline\").focus();
                }, 100);
            });
        });
    </script>

    <script id=\"thread_list_item_tmp\" type=\"text/template\">
        <div class=\"uv-ticket-strip\">
            <span>
                <% if(typeof(mailStatus) != 'undefined' && mailStatus) { %>
                    <a href=\"https://support.uvdesk.com/en/blog/uvdesk-ticket-delivery-status\" target=\"_blank\">
                        <span class=\"uv-mail-status uv-mail-<%- mailStatus.split(',')[0] %>\" <% if(mailStatus !== 'pending') { %>data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
        // line 1684
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mail status:"), "html", null, true);
        yield " <%- mailStatus.split(',')[0] %> <% if(mailStatus.split(',').length > 1) { print('Reason:' + mailStatus.split(',')[1] ); } %> \"<% } %> ></span>
            </a>
            <% } %>
            <span class=\"timeago uv-margin-0\" data-timestamp=\"<%- timestamp %>\" title=\"<%- formatedCreatedAt %>\">
                    <%- formatedCreatedAt %>
                </span>
            - <%- fullname %>
            <span class=\"uv-ticket-strip-label\">
                <% if (threadType == 'reply') { %>
                    ";
        // line 1693
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("replied"), "html", null, true);
        yield "
                <% } else if(threadType == 'note') { %>
                    ";
        // line 1695
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("added note"), "html", null, true);
        yield "
                <% } else if(threadType == 'forward') { %>
                    ";
        // line 1697
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("forwarded"), "html", null, true);
        yield "
                <% } %>
                - <a href=\"#thread/<%- id %>\" id=\"thread<%- id %>\" class=\"copy-thread-link\">#<%- id %></a>
                </span>
            </span>

            <% if ((replyTo && threadType ==  'forward') || cc || bcc) { %>
                <div class=\"uv-ticket-strip\">
                    <% if (replyTo && threadType ==  'forward') { %>
                    <span><span class=\"uv-ticket-strip-label\">";
        // line 1706
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TO"), "html", null, true);
        yield " -</span> <%- replyTo %></span>
                    <% } if (cc) { %>
                    <span><span class=\"uv-ticket-strip-label\">";
        // line 1708
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CC"), "html", null, true);
        yield " -</span> <%- cc %></span>
                    <% } if (bcc) { %>
                    <span><span class=\"uv-ticket-strip-label\">";
        // line 1710
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("BCC"), "html", null, true);
        yield " -</span> <%- bcc %></span>
                    <% } %>
                </div>
            <% } %>
        </div>

        <div class=\"uv-ticket-strip uv-margin-top-5\" <% if(!bookmark && !isLocked) { %>style=\"display: none\"<% } %> >
            <span <% if(!bookmark) { %>style=\"display: none\"<% } %> >
                    <span class=\"uv-icon-pinned\"></span>
                    ";
        // line 1719
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pinned"), "html", null, true);
        yield "
                    </span>
            <span <% if(!isLocked) { %>style=\"display: none\"<% } %> >
                <span class=\"uv-icon-locked\"></span>
                ";
        // line 1723
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Locked"), "html", null, true);
        yield "
            </span>
        </div>
        <div class=\"uv-ticket-main-lt\">
            <span class=\"uv-thread-action\">
                <span class=\"uv-icon-ellipsis uv-dropdown-other\"></span>
                <div class=\"uv-dropdown-list uv-bottom-left\">
                    <div class=\"uv-dropdown-container\">
                        <ul>
                            ";
        // line 1732
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1732, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_EDIT_THREAD_NOTE"], "method", false, false, false, 1732)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1733
            yield "                                <% if (userType != 'system' && userType != 'System') { %>
                                    <li data-action=\"edit\">";
            // line 1734
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Thread"), "html", null, true);
            yield "</li>
                                <% } %>
                            ";
        }
        // line 1737
        yield "                            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1737, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_DELETE_THREAD_NOTE"], "method", false, false, false, 1737)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1738
            yield "                                <li data-action=\"delete\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete Thread"), "html", null, true);
            yield "</li>
                            ";
        }
        // line 1740
        yield "                            <li data-action=\"forward\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forward"), "html", null, true);
        yield "</li>
                            <% if(bookmark) { %>
                                <li data-action=\"pin\" data-id=\"1\">";
        // line 1742
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unpin Thread"), "html", null, true);
        yield "</li>
                            <% } else { %>
                                <li data-action=\"pin\" data-id=\"0\">";
        // line 1744
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pin Thread"), "html", null, true);
        yield "</li>
                            <% } %>
                            <% if(threadType != 'note') { %>
                                ";
        // line 1747
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1747, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_MANAGE_LOCK_AND_UNLOCK_THREAD"], "method", false, false, false, 1747)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1748
            yield "                                    <% if(isLocked) { %>
                                        <li data-action=\"lock\" data-id=\"1\">";
            // line 1749
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unlock Thread"), "html", null, true);
            yield "</li>
                                    <% } else { %>
                                        <li data-action=\"lock\" data-id=\"0\">";
            // line 1751
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Lock Thread"), "html", null, true);
            yield "</li>
                                    <% } %>
                                ";
        }
        // line 1754
        yield "                            <% } %>
                            <li style=\"display: none;\" data-action=\"translate\">";
        // line 1755
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Translate Thread"), "html", null, true);
        yield "</li>
                        </ul>
                    </div>
                </div>
            </span>
            <span class=\"p-relative\">
                
            </span>
            <% if (userType != 'system' && userType != 'System') { %>
                <% if(user && user.smallThumbnail != null) { %>
                    <img src=\"";
        // line 1765
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1765, $this->source); })()), "request", [], "any", false, false, false, 1765), "scheme", [], "any", false, false, false, 1765) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1765, $this->source); })()), "request", [], "any", false, false, false, 1765), "httpHost", [], "any", false, false, false, 1765)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
        yield "<%- user.smallThumbnail %>\" />
                <% } else { %>
                    <img src=\"<% if(userType == 'agent') { %> ";
        // line 1767
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 1767, $this->source); })())), "html", null, true);
        yield " <% } else { %> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_customer_image_path"]) || array_key_exists("default_customer_image_path", $context) ? $context["default_customer_image_path"] : (function () { throw new RuntimeError('Variable "default_customer_image_path" does not exist.', 1767, $this->source); })())), "html", null, true);
        yield " <% } %>\" />
                <% } %>
            <% } else { %>
                <img src=\"";
        // line 1770
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_helpdesk_image_path"]) || array_key_exists("default_helpdesk_image_path", $context) ? $context["default_helpdesk_image_path"] : (function () { throw new RuntimeError('Variable "default_helpdesk_image_path" does not exist.', 1770, $this->source); })())), "html", null, true);
        yield "\" />
            <% } %>
        </div>
        <div class=\"uv-ticket-main-rt\">
            <% if(userType == 'customer') { %>
                <a <% if(user) { %>href=\"";
        // line 1775
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_manage_customer_account");
        yield "/<%- user.id %>\"<% } %> class=\"uv-ticket-member-name\">
                <%- fullname %>
                </a>
            <% } else if(userType == 'agent') { %>
                <a <% if(user) { %>href=\"";
        // line 1779
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_account");
        yield "/<%- user.id %>\"<% } %> class=\"uv-ticket-member-name\">
                <%- fullname %>
                </a>
            <% } else { %>
                <span class=\"uv-ticket-member-name\">
                    <%- fullname %>
                </span>
            <% } %>

            <!-- Message Block -->
            <div class=\"message\">
                <%= reply %>
            </div>

            <!-- Attachment Block -->
            <% if(attachments.length) { %>
            <div class=\"uv-ticket-uploads\">
                <h4>";
        // line 1796
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Uploaded Files"), "html", null, true);
        yield "</h4>
                <div class=\"uv-ticket-uploads-strip\">
                    <% _.each(attachments, function(file) { %>
                    <a href=\"<%-file.downloadURL %>\" target =\"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"<%- file.name %>\">
                        <img src=\"<%-file.iconURL %>\" class=\"uv-auto-pointer-events\">
                    </a>
                    <% }) %>
                </div>

                <% if (attachments.length > 1) { %>
                <div class=\"thread-attachments-zip pull-left\">
                    <div class=\"uv-upload-actions\">
                        <a href=\"#\" class=\"uv-open-in-files\" data-thread=\"<%- id %>\" style=\"display: none\"><span class=\"uv-icon-open-in-files\"></span>";
        // line 1808
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Open in Files"), "html", null, true);
        yield "</a>
                        <% if(attachments.length > 0) { %>
                        <a href=\"";
        // line 1810
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_download_attachment_zip");
        yield "/<%- id %>\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download (as .zip)"), "html", null, true);
        yield "</a>
                        <% } %>
                    </div>
                </div>
                <% } %>

            </div>
            <% } %>
        </div>
    </script>

    <script id=\"edit_thread_tmp\" type=\"text/template\">
        <div class=\"thread-edit-container\">
            <div class=\"uv-element-block uv-element-block-textarea\">
                <div class=\"uv-field-block\">
                    <textarea id=\"uv-edit-thread\">
                    </textarea>
                </div>
            </div>
            <div class=\"uv-action-buttons\">
                <a class=\"uv-btn cancel-edit\" type=\"button\">";
        // line 1830
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        yield "</a>
                <a class=\"uv-btn saveThread\" type=\"button\" style=\"margin-right: 10px;\">";
        // line 1831
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update"), "html", null, true);
        yield "</a>
            </div>
        </div>
    </script>

    <script id=\"ticket_quick_navigation_tmp\" type=\"text/template\">
        <% if(prev) { %>
            <a class=\"uv-btn-stroke\" href=\"";
        // line 1838
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket");
        yield "/<%- prev %>\">
                <span class=\"uv-icon-previous\"></span>
                ";
        // line 1840
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Previous Ticket"), "html", null, true);
        yield "
            </a>
        <% } else { %>
            <a class=\"uv-btn-stroke\" disabled=\"disabled\">
                <span class=\"uv-icon-previous\"></span>
                ";
        // line 1845
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Previous Ticket"), "html", null, true);
        yield "
            </a>
        <% } %>

        <% if(next) { %>
            <a class=\"uv-btn-stroke\" href=\"";
        // line 1850
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket");
        yield "/<%- next %>\">
                ";
        // line 1851
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next Ticket"), "html", null, true);
        yield "
                <span class=\"uv-icon-next\"></span>
            </a>
        <% } else { %>
            <a class=\"uv-btn-stroke\" disabled=\"disabled\">
                ";
        // line 1856
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next Ticket"), "html", null, true);
        yield "
                <span class=\"uv-icon-next\"></span>
            </a>
        <% } %>
    </script>

    <script type=\"text/javascript\">
        uvdesk = {
            ticket: {}
        };

        var ticketApp = {};

        viewerImages = function() {
            if (typeof(\$().viewer == 'function')) {
                \$('.uv-ticket-uploads .uv-ticket-uploads-strip').viewer({
                    'url': 'data-url',
                    'downloadBase': \"";
        // line 1873
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_download_attachment");
        yield "\",
                    'download': 'data-download',
                });
            }
        };

        \$(function () {
            var threadIds = [];
            viewerImages();

            _.extend(Backbone.Model.prototype, Backbone.Validation.mixin);

            // Ticket Model
            var TicketModel = Backbone.Model.extend({
                idAttribute : \"id\",
                urlRoot : \"";
        // line 1888
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_update_ticket_attributes_xhr");
        yield "\",
                validation: {
                    'email': [{
                        required: true,
                        msg: '";
        // line 1892
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                    },{
                        pattern: /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                        msg: 'Please enter a valid email'
                    }],
                    'subject' : {
                        required : true,
                        msg : '";
        // line 1899
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                    },
                    'reply' : {
                        fn: function(value) {
                            var content = tinyMCE.activeEditor.getContent();
\t\t\t\t\t\t\tcontent = content.replace(/&nbsp;/g, '').replace(/<[^>]*>/g, '');

\t\t\t\t\t\t\tif (content.trim() == '') {
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t}

                            if (! tinyMCE.get(\"uv-edit-create-thread\"))
                                return false;
                            var html = tinyMCE.get(\"uv-edit-create-thread\").getContent();
                            if (app.appView.stripHTML(html) != '') {
                                return false;
                            }
                            
                            return true;
                        },
                        msg : '";
        // line 1921
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                    }
                },
            });

            // Thread Model
            var ThreadModel = Backbone.Model.extend({
                idAttribute : \"id\",
                defaults : {
                    hasTask : 0,
                    task: null
                }
            });

            // Customer Model
            var CustomerModel = Backbone.Model.extend({
                validation: {
                    'name': [{
                        required: true,
                        msg: '";
        // line 1940
        yield "This field is mandatory";
        yield "'
                    }, {
                        pattern: /^((?![!@#\$%^&*()<_+]).)*\$/,
                        msg: '";
        // line 1943
        yield "This field must have characters only";
        yield "'
                    }],
                    'email': [{
                        required: true,
                        msg: '";
        // line 1947
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                    },{
                        pattern: /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                        msg: '";
        // line 1950
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email address is invalid"), "html", null, true);
        yield "'
                    }],
                    'contactNumber': function(value) {
                        if(value != undefined && value !== '') {
                            if (!value.match('^\\\\s*(?:\\\\+?(\\\\d{1,3}))?[-. (]*(\\\\d{3})[-. )]*(\\\\d{3})[-. ]*(\\\\d{4})(?: *x(\\\\d+))?\\\\s*\$'))
                                return 'Contact number is invalid';
                        }
                    }
                },
                urlRoot : \"";
        // line 1959
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_manage_customer_account");
        yield "\"
            });

            // Ticket Collaborator Model
            var CollaboratorModel = Backbone.Model.extend({
                idAttribute : \"id\",
                validation: {
                    'email': [{
                        required: true,
                        msg: '";
        // line 1968
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                    },{
                        pattern: /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                        msg: '";
        // line 1971
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please enter a valid email"), "html", null, true);
        yield "'
                    }]
                },
                defaults : {
                    ticketId : ";
        // line 1975
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1975, $this->source); })()), "id", [], "any", false, false, false, 1975), "html", null, true);
        yield ",
                    email: ''
                },
                parse: function (resp, options) {
                    return resp.collaborator;
                },
                urlRoot : \"";
        // line 1981
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_manage_collaborators_xhr");
        yield "\"
            });

            // Ticket Tag Model
            var TagModel = Backbone.Model.extend({
                idAttribute : \"id\",
                defaults : {
                    ticketId : ";
        // line 1988
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1988, $this->source); })()), "id", [], "any", false, false, false, 1988), "html", null, true);
        yield "
                },
                parse: function (resp, options) {
                    return resp.tag;
                },
                urlRoot : \"";
        // line 1993
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_create_tag_xhr");
        yield "\"
            });

            // Ticket Label Model
            var LabelModel = Backbone.Model.extend({
                idAttribute : \"id\",
                defaults : {
                    ticketId : ";
        // line 2000
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2000, $this->source); })()), "id", [], "any", false, false, false, 2000), "html", null, true);
        yield "
                },
                parse: function (resp, options) {
                    return resp.label;
                },
                urlRoot : \"";
        // line 2005
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_add_label_xhr");
        yield "\"
            });

            // Ticket Thread Collection
            var ThreadCollection = AppCollection.extend({
                model : ThreadModel,
                mode: \"infinite\",
                url : \"";
        // line 2012
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_thread_collection_xhr", ["ticketId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2012, $this->source); })()), "id", [], "any", false, false, false, 2012)]), "html", null, true);
        yield "\",
                firstScrollCheck: false,
                threadRequestedId: false,
                template : \$(\"#thread_list_empty_tmp\").html(),
                parseRecords: function (resp, options) {
                    return resp.threads;
                },
                syncData : function() {
                    type = \$(\".uv-ticket-action-bar-lt .uv-tabs .uv-tab-active\").attr('data-type')
                    var self = this;
                    var data = {
                        threadType: type
                    };

                    if(this.threadRequestedId)
                        data.threadRequestedId = this.threadRequestedId;

                    app.appView.showLoader()
                    this.fetch({
                        data : data,
                        remove: false,
                        success: function(model, response) {
                            app.appView.hideLoader();
                            self.threadRequestedId = false;
                            pagination.renderPagination(response.pagination);
                            threadCollection.state.currentPage = parseInt(response.pagination.current) + 1;
                            if(response.pagination.totalCount <= 0){
                                this.\$('.uv-ticket-wrapper.thread-list').html(self.template);
                            }
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    }).done(function(){
                        viewerImages();
                        if(!self.firstScrollCheck){
                            self.firstScrollCheck = true;
                            var fragment = Backbone.history.fragment.trim();
                            if(fragment == '') {
                                router.scrollPage('#reply');
                            } else
                                router.scrollPage('#' + fragment.replace('thread/', 'thread'));
                        }
                    });
                }
            });

            // Ticket Collaborator Collection
            var CollaboratorCollection = Backbone.PageableCollection.extend({
                model : CollaboratorModel
            });

            // Ticket Tag Collection
            var TagCollection = Backbone.PageableCollection.extend({
                model : TagModel,
                isTagExist : function(name) {
                    var flag = 1;
                    _.each(tagCollection.models, function (item) {
                        if(item.get('name').toUpperCase() == name.toUpperCase())
                            flag = 0;
                    }, this);

                    return flag;
                }
            });

            // Ticket Label Collection
            var LabelCollection = Backbone.PageableCollection.extend({
                model : TagModel,
                isLabelExist : function(name) {
                    var flag = 1;
                    _.each(labelCollection.models, function (item) {
                        if(item.get('name').toUpperCase() == name.toUpperCase())
                            flag = 0;
                    }, this);
                    return flag;
                }
            });

            // Customer Form View
            var CustomerForm = Backbone.View.extend({
                events : {
                    'click .uv-btn.update-btn' : \"saveCustomer\",
                    'blur input': 'formChanged',
                    'click .cancel-btn': 'backToInfo',
                    'click .uv-aside-back': 'backToInfo'
                },
                initialize : function() {
                    Backbone.Validation.bind(this);
                },
                formChanged: function(e) {
                    this.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
                    this.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
                },
                saveCustomer: function (e) {
                    e.preventDefault();
                    currentElement = Backbone.\$(e.currentTarget);
                    this.model.clear();
                    this.model.set(this.\$el.find('form').serializeObject());
                    self = this;
                    if (this.model.isValid(true)) {
                        app.appView.showLoader();
                        currentElement.attr('disabled', 'disabled');
                        this.model.save({}, {
                            success: function (model, response, options) {
                                app.appView.hideLoader();
                                currentElement.removeAttr(\"disabled\");
                                if (response.alertClass == \"success\") {
                                    app.appView.renderResponseAlert(response);
                                    \$('.uv-aside-customer-info').html(\"<span>\" + self.model.attributes.name + \"</span><span>\" + self.model.attributes.email + \"</span><span>\" + self.model.attributes.contactNumber + \"</span><span class='uv-customize'></span>\")
                                    self.backToInfo();
                                } else if (response.errors) {
                                    self.addErrors(JSON.parse(response.errors));
                                } else if (response.alertMessage) {
                                    app.appView.renderResponseAlert(response);
                                }
                            },
                            error: function (model, xhr, options) {
                                if (url = xhr.getResponseHeader('Location'))
                                    window.location = url;

                                app.appView.hideLoader();
                                app.appView.renderResponseAlert(warningResponse);
                            }
                        });
                    }
                },
                addErrors: function(jsonContext) {
                    for (var field in jsonContext) {
                        Backbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
                    }
                },
                backToInfo: function(e) {
                    if (e)
                        e.preventDefault()

                    \$('.uv-main-info-update-block').hide()
                    \$('.uv-main-info-block').show()
                },
            });

            // Ticket View
            var TicketView = Backbone.View.extend({
                el: \$('.uv-wrapper'),
                stopDraftSaveFlag: 0,
                events: {
                    'click .uv-ticket-action .uv-dropdown-list li[data-action=\"spam\"], .uv-ticket-action .uv-dropdown-list li[data-action=\"closed\"]': 'markSpamAndClosed',
                    'click .uv-aside-ticket-actions .uv-aside-select .uv-dropdown-list li': 'editTicketProperty',
                    'click .uv-aside-customer-info .uv-customize': 'showCustomerUpdateBlock',
                    'click .uv-ticket-head .uv-star-large': 'updateStar',
                    'click .uv-ticket-action-bar .uv-tabs li': 'filterThread',
                    'click .uv-ticket-action .uv-dropdown-list li[data-action=\"delete\"]': 'confirmRemove',
                    'click .uv-ticket-action .uv-dropdown-list li[data-action=\"lock\"]': 'lockAndUnlockThread',
                    'click .uv-element-block.collaborators .uv-btn-tag': 'removeCcCollaborator',
                    'keypress .uv-element-block.to .uv-dropdown-other': 'addToInput',
                    'click .uv-element-block.to .uv-dropdown-list li': 'addTo',
                    'click .to-list .uv-btn-tag': 'removeTo',
                    'change .uv-element-block.cc-bcc .cc-bcc-toggle': 'showCcBccBlock',
                    'keypress .uv-element-block.cc-bcc .uv-group-field.uv-dropdown-other': 'addCcBccInput',
                    'click .uv-element-block.cc-bcc .uv-dropdown-list li': 'addCcBcc',
                    'click .cc-bcc-list .uv-btn-tag, .to-list .uv-btn-tag': 'removeEmail',
                    'click .next-view .uv-dropdown-list li': 'setNextView',
                    'click .uv-dropdown.reply .uv-dropdown-list li, .uv-btn.forward': 'validateForm',
                    'click #edit-ticket-modal .uv-btn.update': 'updateTicket',
                    'click .message .uv-icon-ellipsis': 'showReplyQuote',
                    'input .uv-aside-brick .uv-field.uv-dropdown-other': 'searchFilterXhr',
                    'click .uv-dropdown-container.prepared-responses a:not(.create-new)': 'confirmPreparedResponses',

                    'click .uv-header-fix': 'fixheader',
                    'click .uv-ticket-action .uv-dropdown-list li[data-action=\"print\"]': 'printTicket',
                    'blur .uv-manual-enter': 'enterManualAdd',
                    'click .uv-quick-view-trigger, .quick-view-navigation .uv-btn-tag': 'navigateQuickView',
                    'click .uv-grid-item': 'toggleAccordian',
                    'click #ticket-generate-customer-public-resource-access-link': 'generateCustomerPublicTicketResourceAccessLink',
                    'click .ticket-public-resource-access-link .copy-resource-link-to-clipboard': 'copyResourceLinkToClipboard',
                },
                ticketNavigationTemplate : _.template(\$(\"#ticket_quick_navigation_tmp\").html()),
                loaderTemplate : _.template(\$(\"#loader-tmp\").html()),
                targetPreparedResponseUrl: '',
                initialize: function() {
                    Backbone.Validation.bind(this);
                    InitTinyMce('#uv-edit-create-thread');
                    \$('.uv-ticket-fixed-region .uv-ticket-fixed-region-rt').html(this.ticketNavigationTemplate(ticketNavigation))
                    var threadTab = localStorage.getItem(\"threadTab\");
                    if (threadTab){
                        \$('.uv-ticket-action-bar-lt .uv-tabs li').removeClass('uv-tab-active');
                        \$('.uv-ticket-action-bar-lt .uv-tabs [data-type=\"' + threadTab + '\"]').addClass('uv-tab-active');
                    }
                    nextView = localStorage.getItem(\"nextView\");
                    if (nextView) {
                        \$(\".next-view input\").val(nextView)
                        \$(\".next-view .uv-dropdown-btn\").text(\$(\"#reply .next-view .uv-dropdown-list li[data-value='\" + nextView + \"']\").text())
                    }
                    if (!localStorage.getItem('ticketTour')) {
                        \$('.uv-ticket-tour').show()
                    }
                    this.fixHeaderInit();
                },
                printTicket: function(e) {
                    window.print();
                },
                enterManualAdd: function(e) {
                    var target = \$(e.target);
                    if (target.val()) {
                        var e = \$.Event(\"keypress\");
                        e.which = 13; //choose the one you want
                        target.trigger(e);
                    }
                },
                fixheader: function(e){
                    e.preventDefault();
                    var header = localStorage.getItem(\"fixHeader\");
                    header = !(header == 'true');
                    localStorage.setItem(\"fixHeader\", header);
                    this.fixHeaderInit();
                },
                fixHeaderInit: function(){
                    var header = localStorage.getItem(\"fixHeader\");
                    if (header == 'true') {
                        \$('a.uv-icon-pin').addClass('uv-icon-pinned');
                        \$('.uv-ticket-action-bar').addClass('uv-ticket-action-bar-fixed');
                    } else {
                        \$('a.uv-icon-pin').removeClass('uv-icon-pinned');
                        \$('.uv-ticket-action-bar').removeClass('uv-ticket-action-bar-fixed');
                    }
                },
                markSpamAndClosed: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    var value = currentElement.attr('data-index');
                    \$(\".uv-aside-select .uv-dropdown-list ul.status li[data-index='\" + value + \"']\").trigger('click')
                },
               
                generateCustomerPublicTicketResourceAccessLink: function (e) {
                    app.appView.showLoader();

                    \$.ajax({
                        url: \"";
        // line 2249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("uvdesk_member_generate_ticket_public_resource_access_link", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2249, $this->source); })()), "id", [], "any", false, false, false, 2249)]), "html", null, true);
        yield "\",
                        type: 'POST',
                        dataType: 'json',
                        success: function(response) {
                            if (response.status == true) {
                                \$('#ticket-public-resource-access-link .resource-link').html(response.resourceUrl);
                                \$('#ticket-public-resource-access-link').addClass('visible');
                            } else {
                                app.appView.renderResponseAlert({
                                    alertClass: 'warning',
                                    alertMessage: response.message,
                                });
                            }

                            app.appView.hideLoader();
                        },
                        error: function (xhr) {
                            app.appView.renderResponseAlert({
                                alertClass: 'danger',
                                alertMessage: 'An unexpected error occurred while disabling generating public ticket resource link.'
                            });
                        }
                    });
                },
                copyResourceLinkToClipboard: function (e) {
                    let resourceLink = \$('#ticket-public-resource-access-link .resource-link').html();

                    copyContentToClipboard(resourceLink);
                },
                editTicketProperty: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    var uvSelect = currentElement.parents('.uv-aside-select');
                    var field = currentElement.parent().attr('data-action');
                    var value = currentElement.attr('data-index');
                    if(uvSelect.find('.uv-aside-select-value').attr('data-id') != value) {
                        var name = currentElement.text().trim();
                        app.appView.showLoader();
                        this.model.save({attribute: field, value: value, id: this.model.id}, {
                            patch: true,
                            success: function (model, response, options) {
                                uvSelect.find('.uv-aside-select-value').attr('data-id', value).text(name)
                                if (field == 'priority') {
                                    uvSelect.find('.uv-list-ticket-priority').attr('style', 'background:' + currentElement.attr('data-color'));
                                } else if (field == 'agent') {
                                    \$('.uv-ticket-strip .agent-info').show()
                                    \$('.uv-ticket-strip .agent-info .name').text(name)
                                }
                                app.appView.hideLoader();
                                app.appView.renderResponseAlert(response);
                            },
                            error: function (model, xhr, options) {
                                if (url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                                var response = warningResponse;
                                if (xhr.responseJSON)
                                    response = xhr.responseJSON;

                                app.appView.hideLoader();
                                app.appView.renderResponseAlert(response);
                            }
                        });
                    }
                },
                showCustomerUpdateBlock: function() {
                    \$('.uv-main-info-update-block').show()
                    \$('.uv-main-info-block').hide()
                },
                updateStar: function(e) {
                    e.preventDefault();
                    var currentElement = Backbone.\$(e.currentTarget);
                    currentElement.toggleClass('uv-star-active')
                    this.model.save({id: this.model.id}, {
                        patch: true,
                        url : \"";
        // line 2322
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_bookmark_ticket_xhr");
        yield "\",
                        success: function (model, response, options) {
                        },
                        error: function (model, xhr, options) {
                            if (url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                },
                filterThread: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    if(type = currentElement.attr('data-type')) {
                        localStorage.setItem(\"threadTab\", type);
                        if (type != 'all')
                            \$('.uv-ticket-main.create').hide()
                        else
                            \$('.uv-ticket-main.create').show()
                        \$('.uv-ticket-wrapper.thread-list').html('')
                        models = []
                        threadCollection.each(function(model) {
                            models.push(model)
                        })
                        total = threadCollection.models.length;
                        count = 0;
                        if (total) {
                            _.each(models, function (model) {
                                threadCollection.remove(model)
                                count++;
                                if(total == count) {
                                    threadCollection.reset()
                                    threadCollection.state.currentPage = 1;
                                    threadCollection.syncData()
                                }
                            });
                        } else {
                            threadCollection.reset()
                            threadCollection.state.currentPage = 1;
                            threadCollection.syncData()
                        }
                    }
                },
                confirmRemove: function(e) {
                    app.appView.openConfirmModal(this);
                },
                removeItem : function() {
                    if (this.model.attributes.isTrashed)
                        window.location.href = \"";
        // line 2368
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_delete_ticket", ["ticketId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2368, $this->source); })()), "id", [], "any", false, false, false, 2368)]), "html", null, true);
        yield "\";
                    else
                        window.location.href = \"";
        // line 2370
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_trash_ticket", ["ticketId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2370, $this->source); })()), "id", [], "any", false, false, false, 2370)]), "html", null, true);
        yield "\";
                },
                addCCCollaborators: function() {
                    if (collaboratorCollection.length) {
                        var collaboratorContainer = \$('.uv-element-block.collaborators');
                        collaboratorContainer.find('.uv-field-block').html('');
                        collaboratorContainer.show()
                        _.each(collaboratorCollection.models, function (item) {
                            var json = item.attributes;
                            collaboratorContainer.find('.uv-field-block').append(\"<span><input type='hidden' name='cccol[]' value='\" + json.email + \"'/><a class='uv-btn-tag' href='#'><span class='uv-icon-remove-dark-before'></span>\" + json.name + \"</a></span>\")
                        }, this);
                    }
                },
                removeCcCollaborator: function(e) {
                    e.preventDefault()
                    Backbone.\$(e.currentTarget).parent().remove();
                    var collaboratorContainer = \$('.uv-element-block.collaborators');
                    if (!collaboratorContainer.find('.uv-btn-tag').length)
                        collaboratorContainer.hide()
                },
                addToInput: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    var currentTab = inputElement.parents('.uv-tab-view');
                    var email = inputElement.val().trim();
                    if (e.which === 13 && email) {
                        e.preventDefault()
                        if (!this.model.preValidate({name: 'email', email: email})) {
                            inputElement.val('').trigger('input')
                            inputElement.removeClass('uv-dropdown-btn-active')
                            inputElement.siblings('.uv-dropdown-list').hide()
                            if (!currentTab.find(\".to-list input[value='\" + email + \"'].to\").length) {
                                currentTab.find('.to-list').append(\"<span><input type='hidden' name='to[]' value='\" + email + \"' class='to'/><a class='uv-btn-tag' href='#'><span class='uv-icon-remove-dark-before'></span>\" + email + \"</span></a></span>\")
                            }
                        }
                    }
                },
                addTo: function(e) {
                    var currentTab = Backbone.\$(e.currentTarget).parents('.uv-tab-view');
                    var email =  Backbone.\$(e.currentTarget).attr('data-id');
                    if (!currentTab.find(\".to-list input[value='\" + email + \"'].to\").length) {
                        currentTab.find('.to-list').append(\"<span><input type='hidden' name='to[]' value='\" + email + \"' class='to'/><a class='uv-btn-tag' href='#'><span class='uv-icon-remove-dark-before'></span>\" + email + \"</span></a></span>\")
                    }
                },
                showCcBccBlock: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    var currentTab = currentElement.parents('.uv-tab-view');
                    if (currentElement.is(':checked')) {
                        currentTab.find('.uv-element-block.cc-bcc').find('.uv-field-block').show()
                    } else {
                        currentTab.find('.uv-element-block.cc-bcc').find('.uv-field-block').hide()
                        currentTab.find('.uv-element-block .cc-bcc-list').html('')
                    }
                },
                addCcBccInput: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    var currentTab = inputElement.parents('.uv-tab-view');
                    var email = inputElement.val().trim();
                    if (e.which === 13 && email) {
                        e.preventDefault()
                        type = currentTab.find('.cc-bcc-select option:selected').text()
                        if (!this.model.preValidate({name: 'email', email: email})) {
                            inputName = \$('.cc-bcc-select').val()
                            inputElement.val('').trigger('input')
                            inputElement.removeClass('uv-dropdown-btn-active')
                            inputElement.siblings('.uv-dropdown-list').hide()
                            if (!currentTab.find(\".cc-bcc-list input[value='\" + email + \"'].\" + inputName).length) {
                                currentTab.find('.cc-bcc-list').append(\"<span><input type='hidden' name='\" + inputName + \"[]' value='\" + email + \"' class='\" + inputName + \"'/><a class=uv-btn-tag uv-lowercase' href='#'><span class='uv-icon-remove-dark-before'></span>\" + email + \" : <span class='uv-uppercase'>\" + type + \"</span></a></span>\")
                            }
                        }
                    }
                },
                addCcBcc: function(e) {
                    var currentTab = Backbone.\$(e.currentTarget).parents('.uv-tab-view');
                    var email =  Backbone.\$(e.currentTarget).attr('data-id');
                    type = currentTab.find('.cc-bcc-select option:selected').text()
                    inputName = currentTab.find('.cc-bcc-select').val()
                    if (!currentTab.find(\".cc-bcc-list input[value='\" + email + \"'].\" + inputName).length) {
                        currentTab.find('.uv-element-block.cc-bcc .uv-group-field.uv-dropdown-other').val('').trigger('input')
                        currentTab.find('.cc-bcc-list').append(\"<span><input type='hidden' name='\" + inputName + \"[]' value='\" + email + \"' class='\" + inputName + \"'/><a class=uv-btn-tag uv-lowercase' href='#'><span class='uv-icon-remove-dark-before'></span>\" + email + \" : <span class='uv-uppercase'>\" + type + \"</span></a></span>\")
                    }
                },
                removeEmail: function(e) {
                    e.preventDefault()
                    Backbone.\$(e.currentTarget).parent().remove();
                },
                setNextView: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    var nextView = currentElement.attr('data-value');
                    localStorage.setItem(\"nextView\", nextView);
                    \$(\".next-view input\").val(nextView)
                    \$(\".next-view .uv-dropdown-btn\").text(currentElement.text())
                },
                validateForm : function(e) {
                    e.preventDefault();
                    var element = Backbone.\$(e.currentTarget);
                    formType = element.parents('.uv-tab-view.uv-tab-view-active').attr('id');
                    form = element.parents('form');
                    form.find('.reply-status').val(element.attr('data-id'));
                    form.find('.uv-field-message').remove()

                    var html = tinyMCE.get(formType + \"-area\").getContent();
                    if (app.appView.htmlText(html) != '' || -1 != html.indexOf('<img')) {
                        if (formType == 'forward') {
                            if (!form.find(\".to-list input.to\").length) {
                                \$('.uv-element-block.to').append(\"<span class='uv-field-message'>";
        // line 2474
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "</span>\")
                            } else {
                                this.stopDraftSaveFlag = 1;

                                app.appView.showLoader();
                                tinyMCE.activeEditor.uploadImages(function(response) {
                                    app.appView.hideLoader();

                                    form.submit();
                                    \$('.uv-btn.forward').attr('disabled', 'disabled');
                                });
                            }
                        } else {
                            this.stopDraftSaveFlag = 1;
                            if (localStorage) {
                                localStorage.setItem(\"threadTab\", \"all\");
                            }

                            app.appView.showLoader();
                            tinyMCE.activeEditor.uploadImages(function(response) {
                                app.appView.hideLoader();

                                form.submit();
                                \$('.uv-dropdown.reply').find('.uv-btn').attr('disabled', 'disabled');
                            });
                        }
                    } else {
                        form.find('.uv-element-block-textarea').append(\"<span class='uv-field-message'>";
        // line 2501
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "</span>\");
                        if (formType == 'forward') {
                            if(!form.find(\".to-list input.to\").length) {
                                \$('.uv-element-block.to').append(\"<span class='uv-field-message'>";
        // line 2504
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "</span>\")
                            }
                        }
                    }
                },
                updateTicket: function(e) {
                    e.preventDefault();
                    this.model.set(\$('#edit-ticket-modal form').serializeObject());
                    if (this.model.isValid(['subject', 'reply'])) {
                        \$('#edit-ticket-modal form').find('.uv-btn').attr('disabled', 'disabled');
                        \$('#edit-ticket-modal form').submit();
                    }
                },
                showReplyQuote: function(e) {
                    Backbone.\$(e.currentTarget).next().toggle();
                },

                // Agent roles and permissions quick view
                quickViewTemplate: _.template(\$(\"#agent_access_details_quick_view_tmp\").html()),
                navigateQuickView : function(e) {
                    e.preventDefault();

                    var currentElement = Backbone.\$(e.currentTarget);
                    var self = this;

                    if(currentElement.hasClass(\"uv-quick-view-trigger\"))
                        app.appView.showLoader();

                    if(self.xhrReq)
                        self.xhrReq.abort();

                    \$(\"#quick-view-modal .uv-loader\").show()

                    self.xhrReq = \$.ajax({
                        url: \"";
        // line 2538
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_user_permission_quick_view_xhr");
        yield "\", // Make sure this route is correct
                        type: 'GET',
                        data: { 'ticketId': ticketModel.attributes.id }, // Sending the ticket ID
                        dataType: 'json',
                        success: function(response) {
                            console.log(response);
                            self.xhrReq = 0;
                            if(currentElement.hasClass(\"uv-quick-view-trigger\"))
                                app.appView.hideLoader();

                            self.renderQuickView(response)
                        },
                        error: function(xhr) {
                            self.xhrReq = 0;
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            app.appView.hideLoader();
                        }
                    });
                },

                renderQuickView: function(response) {
                    \$('#quick-view-modal .uv-pop-up-box').html(this.quickViewTemplate(response));
                    app.appView.openModal('quick-view-modal')
                    \$('#quick-view-modal .message').find('img').removeAttr('crossorigin');

                    \$('#quick-view-modal .message').find('.uv-icon-ellipsis').remove();
                    \$('#quick-view-modal .message').find('.helpdesk_blockquote').eq(0).before(\"<span class='uv-icon-ellipsis uv-ellipsis-mirror'></span>\").hide();
                    app.appView.relativeTime();
                },
                toggleAccordian: function(e) {
                    const arrowElement = Backbone.\$(e.currentTarget);

                    // Map of section configurations
                    const sectionMap = {
                        'uv-group-section': {
                            block: '.uv-agent-details-section',
                            arrow: '.uv-accordian-icon',
                        },
                        'uv-team-section': {
                            block: '.uv-agent-details-section',
                            arrow: '.uv-accordian-icon',
                        },
                        'uv-privilage-section': {
                            block: '.uv-agent-details-section',
                            arrow: '.uv-accordian-icon'
                        },
                        'uv-ticketView-section': {
                            block: '.uv-agent-details-section',
                            arrow: '.uv-accordian-icon'
                        }
                    };

                    // Find which section was clicked
                    const sectionKey = Object.keys(sectionMap).find(key =>
                        arrowElement.closest(`.\${key}`).length
                    );

                    if (sectionKey) {
                        const section = sectionMap[sectionKey];
                        const filterSection = this.\$(`.\${sectionKey} \${section.block}`);
                        const arrowToggle = this.\$(`.\${sectionKey} \${section.arrow}`);

                        // Toggle section visibility and update UI
                        const isVisible = filterSection.is(':visible');

                        filterSection[isVisible ? 'hide' : 'show']();

                        // Update arrow direction using CSS class
                        arrowToggle.toggleClass('up', !isVisible);
                    }
                },
                searchFilterXhr: _.debounce(function(e) {
                    currentElement = Backbone.\$(e.currentTarget);
                    var parent = currentElement.parent();
                    if (\$('.uv-dropdown-other.uv-dropdown-btn-active').parent().attr('id') != parent.attr('id'))
                        return;
                    parent.find(\"li:not(.uv-no-results, .uv-filter-info)\").remove();
                    parent.find(\".uv-filter-info\").show()
                    if (currentElement.val().length > 1) {
                        parent.append(this.loaderTemplate())
                        parent.find('.uv-filter-info').text(\"";
        // line 2619
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Searching", [], "messages");
        yield " ...\")
                        if(self.xhrReq)
                            self.xhrReq.abort();

                        self.xhrReq = \$.ajax({
                            url : \"";
        // line 2624
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_search_filter_options");
        yield "\",
                            type : 'GET',
                            data: {\"type\" : currentElement.attr('data-type'), \"query\": currentElement.val()},
                            dataType : 'json',
                            success : function(response) {
                                self.xhrReq = 0;
                                parent.find('.uv-loader').remove()
                                parent.find('.uv-filter-info').text(\"";
        // line 2631
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        yield "\").hide();
                                if (response.length == 0) {
                                    parent.find('.uv-no-results').show();
                                    parent.find('.uv-no-results').disabled = true;
                                } else {
                                    parent.find('.uv-no-results').hide();
                                    _.each(response, function(item) {
                                        parent.find('.uv-dropdown-list ul').append(\"<li data-id='\" + item.id + \"'>\" + item.name + \"</li>\")
                                    });
                                }
                            },
                            error: function (xhr) {
                                self.xhrReq = 0;
                                parent.find('.uv-loader').remove()
                                parent.find('.uv-no-results').hide();
                                parent.find('.uv-filter-info').text(\"";
        // line 2646
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        yield "\").show();

                                if (url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                            }
                        });
                    } else {
                        parent.find('.uv-no-results').hide();
                    }
                }, 1000)
            });

            // Ticket Thread View
            var ThreadItem = Backbone.View.extend({
                tagName : \"div\",
                className : \"uv-ticket-main\",
                template : _.template(\$(\"#thread_list_item_tmp\").html()),
                editThreadTemplate : _.template(\$(\"#edit_thread_tmp\").html()),
                events : {
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"delete\"]': 'confirmRemove',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"lock\"]': 'lockAndUnlockThread',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"pin\"]': 'pinThread',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"mark\"]': 'markForTask',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"forward\"]' : 'forwardThread',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"edit\"]' : 'editThread',
                    'click .uv-btn.cancel-edit' : 'cancelEdit',
                    'click .uv-btn.saveThread' : 'updateThread',
                    'click .copy-thread-link' : 'copyThreadLink',
                    'blur .input-copy-thread-link': 'removeCopyThreadLink'
                },
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));

                    this.\$el.addClass(\"thread-\" + this.model.id)
                    if (this.model.attributes.threadType == 'note' && this.model.attributes.userType == 'System') {
                        this.\$el.addClass('uv-ticket-note') 
                    } else if (this.model.attributes.threadType == 'note' && this.model.attributes.userType != 'System') {
                        this.\$el.addClass('uv-ticket-note-agent') 
                    }

                    return this;
                },
                unrender : function(response) {
                    if(response.alertMessage != undefined) {
                        var self = this;
                        ";
        // line 2692
        yield "                        threadCollection.models = threadCollection.models.filter(thread => {
                            if(thread.id == self.model.id) {
                                return false;
                            }

                            return true;
                        });
                        this.remove();
                        threadCollection.syncData();
                        app.appView.renderResponseAlert(response);
                    }
                },
                confirmRemove: function(e) {
                    app.appView.openConfirmModal(this);
                },
                removeItem : function() {
                    self = this;
                    var index = threadIds.indexOf(this.model.id);
                    if (index > -1)
                        threadIds.splice(index, 1);
                    app.appView.showLoader();
                    this.model.destroy({
                        url : \"";
        // line 2714
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_thread_xhr");
        yield "/\" + this.model.id,
                        data : { 'ticketId' : ticketModel.attributes.id },
                        success : function (model, response, options) {
                            app.appView.hideLoader();
                            self.unrender(response);
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                },
                lockAndUnlockThread :function(e) {
                    self = this;
                    currentElement = Backbone.\$(e.currentTarget);
                    var isLocked = 0;
                    if(this.model.get('isLocked')) {
                        this.model.set('isLocked', 0);
                        currentElement.attr('data-id', isLocked).text(\"";
        // line 2738
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Lock Thread"), "html", null, true);
        yield "\");
                    } else {
                        isLocked = 1;
                        this.model.set('isLocked', 1);
                        currentElement.attr('data-id', isLocked).text(\"";
        // line 2742
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unlock Thread"), "html", null, true);
        yield "\");
                    }
                    app.appView.showLoader();
                    this.model.save({
                        isLocked: isLocked,
                        id: this.model.id,
                        ticketId: ticketModel.attributes.id,
                        updateType: 'lock'
                    }, {
                        patch: true,
                        url : \"";
        // line 2752
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_thread_xhr");
        yield "/\" + this.model.id,
                        success : function (model, response, options) {
                            self.toggleThreadPropertyIcon()
                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                },
                pinThread :function(e) {
                    self = this;
                    currentElement = Backbone.\$(e.currentTarget);
                    var bookmark = 0;
                    if(this.model.get('bookmark')) {
                        this.model.set('bookmark', 0);
                        currentElement.attr('data-id', bookmark).text(\"";
        // line 2776
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pin Thread"), "html", null, true);
        yield "\");
                    } else {
                        bookmark = 1;
                        this.model.set('bookmark', 1);
                        currentElement.attr('data-id', bookmark).text(\"";
        // line 2780
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unpin Thread"), "html", null, true);
        yield "\");
                    }
                    app.appView.showLoader();
                    this.model.save({
                        bookmark: bookmark,
                        id: this.model.id,
                        ticketId: ticketModel.attributes.id,
                        updateType: 'bookmark'
                    }, {
                        patch: true,
                        url : \"";
        // line 2790
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_thread_xhr");
        yield "/\" + this.model.id,
                        success : function (model, response, options) {
                            self.toggleThreadPropertyIcon()
                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                },
                forwardThread : function(e) {
                    var element = Backbone.\$(e.currentTarget);
                    tinymce.get('forward-area').setContent(this.model.attributes.reply);
                    \$('#forward-area').parent().find('img').removeAttr('crossorigin');
                    \$(\".uv-tabs li[for='forward']\").trigger('click');

                    \$('.uv-ticket-scroll-region').animate({
                        scrollTop: \$('#default').outerHeight()
                    }, 'slow');
                },
                cancelEdit : function(e) {
                    this.initEditThread();
                    tinymce.get('uv-edit-thread').destroy()
                },
                editThread : function(e) {
                    \$('.thread-edit-container .cancel-edit').trigger('click');
                    this.initEditThread();
                    this.\$el.find('.message').hide().after(this.editThreadTemplate());
                    this.\$el.find('.uv-ticket-uploads').hide()

                    InitTinyMce('#uv-edit-thread');
                    tinymce.get('uv-edit-thread').setContent(this.model.attributes.reply);
                    this.\$el.find('img').removeAttr('crossorigin');
                },
                initEditThread: function() {
                    \$('.thread-edit-container').remove();
                    messageElement = this.\$el.find('.message');
                    messageElement.show();
                    this.\$el.find('.uv-ticket-uploads').show()
                },
                updateThread : function(e) {
                    e.preventDefault();
                    var currentElement = Backbone.\$(e.currentTarget);
                    parent = currentElement.parents('.thread-edit-container')
                    parent.find('.uv-field-message').remove()

                    var html = tinyMCE.get(\"uv-edit-thread\").getContent();
                    if(app.appView.stripHTML(html) != '') {
                        var self = this;
                        currentElement.attr(\"disabled\", \"disabled\");
                        this.model.set('reply', html);
                        app.appView.showLoader()
                        this.model.save({}, {
                            url : \"";
        // line 2851
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_thread_update_xhr");
        yield "/\" + this.model.id,
                            success : function (model, response, options) {
                                app.appView.hideLoader()
                                messageElement = self.\$el.find('.message');
                                if(response.alertClass == 'success') {
                                    messageElement.html(self.model.attributes.reply).show();
                                    messageElement.find('.uv-icon-ellipsis').remove();
                                    messageElement.find('.helpdesk_blockquote').eq(0).before(\"<span class='uv-icon-ellipsis uv-ellipsis-mirror'></span>\").hide();
                                }

                                self.initEditThread();
                                tinymce.get('uv-edit-thread').destroy()
                                app.appView.renderResponseAlert(response);
                            },
                            error: function (model, xhr, options) {
                                self.initEditThread();
                                tinymce.get('uv-edit-thread').destroy()
                                if(url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                                var response = warningResponse;
                                if(xhr.responseJSON)
                                    response = xhr.responseJSON;
                                app.appView.hideLoader()
                                app.appView.renderResponseAlert(response);
                            }
                        });
                    } else {
                        this.\$el.find('.uv-element-block-textarea').append(\"<span class='uv-field-message'>";
        // line 2878
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "</span>\");
                    }
                },
                toggleCreateTaskBar : function() {
                    if(threadIds.length) {
                        \$(\"#uv-task-view\").css('right', '0px');
                        \$(\"#uv-task-view .uv-create-task\").show()
                        \$(\"#uv-task-view .uv-task-list\").hide()
                    } else {
                        \$(\"#uv-task-view\").css('right', '-300px');
                        \$(\"#uv-task-view .uv-create-task\").hide()
                        \$(\"#uv-task-view .uv-task-list\").show()
                    }
                },
                copyThreadLink: function(e){
                    _.delay(function(){
                        \$(e.currentTarget).before('<input type=\"text\" class=\"input-copy-thread-link uv-field\" value=\"' + window.location.href + '\"/>');
                        \$(e.currentTarget).prev().focus().select();
                    }, 100);
                },
                removeCopyThreadLink: function(e){
                    \$(e.currentTarget).remove();
                },
                toggleThreadPropertyIcon: function(e) {
                    if(jQuery.inArray(this.model.id, threadIds) !== -1 || this.model.get('bookmark') || this.model.get('isLocked')) {
                        this.\$el.find('.uv-icon-pinned').parents('.uv-ticket-strip').show()
                    } else {
                        this.\$el.find('.uv-icon-pinned').parents('.uv-ticket-strip').hide()
                    }

                    if(jQuery.inArray(this.model.id, threadIds) !== -1)
                        this.\$el.find('.uv-icon-marked-task').parent().show()
                    else
                        this.\$el.find('.uv-icon-marked-task').parent().hide()

                    if(this.model.get('bookmark'))
                        this.\$el.find('.uv-icon-pinned').parent().show()
                    else
                        this.\$el.find('.uv-icon-pinned').parent().hide()

                    if(this.model.get('isLocked'))
                        this.\$el.find('.uv-icon-locked').parent().show()
                    else
                        this.\$el.find('.uv-icon-locked').parent().hide()
                }
            });

            // Ticket Thread List
            var ThreadList = Backbone.View.extend({
                el : \$(\".thread-list\"),
                initialize : function() {
                    this.listenTo(threadCollection.fullCollection, \"add\", this.renderThread);
                },
                renderThread : function (item) {
                    var threadItem = new ThreadItem({
                        model: item
                    });
                    if(item.id < threadCollection.fullCollection.at(0).id)
                        this.\$el.prepend(threadItem.render().el);
                    else
                        this.\$el.append(threadItem.render().el);
                    threadItem.\$el.find('.helpdesk_blockquote').eq(0).before(\"<span class='uv-icon-ellipsis uv-ellipsis-mirror'></span>\").hide();
                    //emojifyRun();
                    this.\$el.find('img').removeAttr('crossorigin');
                    this.\$el.find('div.message a').attr('target', '_blank');
                    app.appView.relativeTime();
                }
            });

            // Ticket Pagination View
            var Pagination = Backbone.View.extend({
                el: \$('.uv-ticket-accordion'),
                events: {
                    'click .uv-ticket-count-stat': 'loadMore',
                },
                renderPagination: function(pagination) {
                    if(pagination.totalCount - pagination.lastItemNumber > 0 && pagination.lastItemNumber > 0) {
                        var remain = pagination.totalCount - pagination.lastItemNumber;
                        \$('.uv-ticket-count-stat').text(remain)
                        \$('.uv-ticket-accordion').removeClass('uv-ticket-accordion-expanded').removeClass('uv-ticket-accordion-no-count')
                    } else {
                        \$('.uv-ticket-accordion').addClass('uv-ticket-accordion-expanded').addClass('uv-ticket-accordion-no-count')
                    }
                },
                loadMore: function() {
                    threadCollection.syncData();
                }
            });

            // Ticket collaborator Item View
            var CollaboratorItem = Backbone.View.extend({
                tagName : \"a\",
                className: 'uv-btn-tag',
                template : _.template(\"";
        // line 2971
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 2971, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_DELETE_COLLABORATOR_FROM_TICKET"], "method", false, false, false, 2971)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span class='uv-tag'><span class='uv-icon-remove-dark-before'></span><%- name %></span>";
        } else {
            yield "<span class='uv-tag-delete'><%- name %></span>";
        }
        yield "\"),
                events : {
                    'click .uv-tag' : 'confirmRemove'
                },
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));
                    return this;
                },
                unrender : function(response) {
                    if(response.alertMessage != undefined) {
                        app.appView.renderResponseAlert(response);
                    }
                },
                removeItem: function() {
                    ";
        // line 2985
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 2985, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ADD_COLLABORATOR_TO_TICKET"], "method", false, false, false, 2985)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2986
            yield "                        self = this;
                        app.appView.showLoader();
                        this.model.destroy({
                            data : { 'ticketId' : this.model.attributes.ticketId },
                            success : function (model, response, options) {
                                app.appView.hideLoader();
                                self.\$el.remove();
                                self.unrender(response);
                            },
                            error: function (model, xhr, options) {
                                if(url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                                var response = warningResponse;
                                if(xhr.responseJSON)
                                    response = xhr.responseJSON;

                                app.appView.hideLoader();
                                app.appView.renderResponseAlert(response);
                            }
                        });
                    ";
        }
        // line 3007
        yield "                },
                confirmRemove: function(e) {
                    e.preventDefault();
                    ";
        // line 3010
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 3010, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ADD_COLLABORATOR_TO_TICKET"], "method", false, false, false, 3010)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3011
            yield "                        app.appView.openConfirmModal(this);
                    ";
        }
        // line 3013
        yield "                }
            });

            // Ticket Collaborator View
            var CollaboratorList = Backbone.View.extend({
                el : \$(\".collaborator-list-block\"),
                events : {
                    'keypress .uv-field' : 'addCollaborator',
                    'focusout .uv-field' : 'removeErrorClass'
                },
                initialize : function() {
                    //Backbone.Validation.bind(this);
                },
                render : function() {
                    this.\$el.find(\".collaborator-list\").html('');
                    var self = this;
                    collaboratorOptionHtml = '';

                    if(collaboratorCollection.length) {
                        _.each(collaboratorCollection.models, function (item) {
                            this.renderCollaborator(item);
                        }, this);
                    }
                    ticketView.addCCCollaborators()
                },
                renderCollaborator : function (item) {
                    var collaborator = new CollaboratorItem({
                        model: item
                    });
                    this.\$el.find('.collaborator-list').append(collaborator.render().el);
                },
                removeErrorClass: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    inputElement.removeClass('uv-field-error');
                    inputElement.parents('.uv-element-block').find('.uv-field-message').remove()
                },
                addCollaborator : function(e) {
                    ";
        // line 3050
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 3050, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ADD_COLLABORATOR_TO_TICKET"], "method", false, false, false, 3050)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3051
            yield "                        var inputElement = Backbone.\$(e.currentTarget);
                        inputElement.removeClass('uv-field-error');
                        inputElement.parents('.uv-element-block').find('.uv-field-message').remove()
                        var text = inputElement.val().trim();

                        if (e.which === 13 && text) {
                            this.model = new CollaboratorModel();
                            self = this;
                            this.model.set({email: text})

                            if(this.model.isValid(true)) {
                                app.appView.showLoader();
                                this.model.save({},{
                                    success : function (model, response, options) {
                                        inputElement.val('');
                                        if(response.alertClass == \"success\") {
                                            collaboratorCollection.add(model);
                                        }
                                        self.render();
                                        app.appView.hideLoader();
                                        app.appView.renderResponseAlert(response);
                                    },
                                    error: function (model, xhr, options) {
                                        if(url = xhr.getResponseHeader('Location'))
                                            window.location = url;
                                        var response = warningResponse;
                                        if(xhr.responseJSON)
                                            response = xhr.responseJSON;

                                        app.appView.hideLoader();
                                        app.appView.renderResponseAlert(response);
                                    }
                                });
                            } else {
                                inputElement.addClass('uv-field-error');
                                if(text)
                                    inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>";
            // line 3087
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email address is invalid"), "html", null, true);
            yield "</span>\");
                            }
                        }
                    ";
        }
        // line 3091
        yield "                }
            });


            // Ticket Tag Item View
            var TagItem = Backbone.View.extend({
                tagName : \"a\",
                className : \"uv-btn-tag\",
                template : _.template(\"<span class='uv-tag'>";
        // line 3099
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 3099, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_DELETE_TAG"], "method", false, false, false, 3099)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span class='uv-icon-remove-dark-before'></span>";
        }
        yield "<%- name %></span>\"),
                events : {
                    'click .uv-tag' : \"confirmRemove\"
                },
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));

                    return this;
                },
                unrender : function(response) {
                    if(response.alertMessage != undefined) {
                        tagListView.render();
                        app.appView.renderResponseAlert(response);
                    }
                },
                removeItem : function () {
                    ";
        // line 3115
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 3115, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_DELETE_TAG"], "method", false, false, false, 3115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3116
            yield "                    self = this;
                    app.appView.showLoader();
                    this.model.destroy({
                        data : { 'ticketId' : ticketModel.id } ,
                        success : function (model, response, options) {
                            app.appView.hideLoader();
                            self.\$el.remove();
                            self.unrender(response);
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                    ";
        }
        // line 3137
        yield "                },
                confirmRemove: function(e) {
                    e.preventDefault();
                    ";
        // line 3140
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 3140, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_DELETE_TAG"], "method", false, false, false, 3140)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3141
            yield "                        app.appView.openConfirmModal(this)
                    ";
        }
        // line 3143
        yield "                }
            });

            // Ticket Tag View
            var TagList = Backbone.View.extend({
                el : \$(\".tag-list-block\"),
                events : {
                    'keypress .uv-field' : 'addTag',
                    'focusout .uv-field' : 'removeErrorClass',
                    'click .uv-dropdown-list li': 'addTag'
                },
                render : function() {
                    var self = this;
                    this.\$el.find(\".tag-list\").html('');
                    if (tagCollection.length) {
                        _.each(tagCollection.models, function (item) {
                            this.renderTag(item);
                        }, this);
                    }
                },
                renderTag : function (item) {
                    var tag = new TagItem({
                        model: item
                    });
                    this.\$el.find('.tag-list').append(tag.render().el);
                },
                addTag : function(e) {
                    ";
        // line 3170
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 3170, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ADD_TAG"], "method", false, false, false, 3170)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3171
            yield "                        var currentElement = Backbone.\$(e.currentTarget);
                        if (currentElement.is('li')) {
                            var inputElement = currentElement.parents('.uv-field-block').find('.uv-dropdown-other');
                            var text = currentElement.text().trim();
                        } else {
                            var inputElement = currentElement;
                            var text = inputElement.val().trim();
                        }
                        inputElement.removeClass('uv-field-error');
                        inputElement.parents('.uv-element-block').find('.uv-field-message').remove()

                        if (currentElement.is('li') || (e.which === 13 && text)) {
                            if (text.length <= 20) {
                                if (tagCollection.isTagExist(text)) {
                                    var self = this;
                                    inputElement.val('');
                                    this.model = new TagModel();
                                    this.model.set({name:text});
                                    self = this;

                                    app.appView.showLoader();
                                    this.model.save({}, {
                                        success: function (model, response, options) {
                                            inputElement.parent().find(\"li:not(.uv-no-results)\").remove()
                                            inputElement.parent().find(\".uv-no-results\").show()
                                            if (!currentElement.is('li')) {
                                                inputElement.trigger('click')
                                            }
                                            if (response.alertClass == \"success\") {
                                                tagCollection.add(model);
                                                self.render();
                                            }

                                            app.appView.hideLoader();
                                            app.appView.renderResponseAlert(response);
                                        },
                                        error: function (model, xhr, options) {
                                            if (url = xhr.getResponseHeader('Location'))
                                                window.location = url;
                                            var response = warningResponse;
                                            if (xhr.responseJSON)
                                                response = xhr.responseJSON;

                                            app.appView.hideLoader();
                                            app.appView.renderResponseAlert(response);
                                        }
                                    });
                                } else {
                                    inputElement.addClass('uv-field-error');
                                    inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>";
            // line 3220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tag with same name already exist"), "html", null, true);
            yield "</span>\");
                                }
                            } else {
                                inputElement.addClass('uv-field-error');
                                inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>";
            // line 3224
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Text length should be less than 20 charactors"), "html", null, true);
            yield "</span>\");
                            }
                        }
                    ";
        }
        // line 3228
        yield "                },
                removeErrorClass: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    inputElement.removeClass('uv-field-error');
                    inputElement.parents('.uv-element-block').find('.uv-field-message').remove()
                },
            });

            // Ticket Label Item View
            var LabelItem = Backbone.View.extend({
                tagName : \"a\",
                className : \"uv-btn-label\",
                template : _.template(\"<span class='uv-tag'><span class='uv-icon-remove-before'></span><%- name %></span>\"),
                events : {
                    'click .uv-tag' : \"confirmRemove\"
                },
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));

                    return this;
                },
                unrender : function(response) {
                    if (response.alertMessage != undefined) {
                        labelListView.render();
                        app.appView.renderResponseAlert(response);
                    }
                },
                removeItem : function () {
                    self = this;
                    app.appView.showLoader();

                    this.model.destroy({
                        url : \"";
        // line 3260
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_update_ticket_attributes_xhr");
        yield "\",
                        data : { attribute :'label', 'ticketId': ticketModel.id, 'labelId': this.model.get('id') },
                        success : function (model, response, options) {
                            app.appView.hideLoader();
                            self.\$el.remove();
                            self.unrender(response);
                        },
                        error: function (model, xhr, options) {
                            if (url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if (xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                },
                confirmRemove: function(e) {
                    e.preventDefault();
                    app.appView.openConfirmModal(this)
                }
            });

            // Ticket Label View
            var LabelList = Backbone.View.extend({
                el: \$(\".label-list-block\"),
                events: {
                    'keypress .uv-field' : 'addLabel',
                    'focusout .uv-field' : 'removeErrorClass',
                    'click .uv-dropdown-list li': 'addLabel'
                },
                render : function() {
                    var self = this;
                    this.\$el.find(\".label-list\").html('');
                    if (labelCollection.length) {
                        _.each(labelCollection.models, function (item) {
                            this.renderLabel(item);
                        }, this);
                    }
                },
                renderLabel : function (item) {
                    var label = new LabelItem({
                        model: item
                    });
                    lavelItem = label.render().el;
                    \$(lavelItem).attr('style', 'background:' + item.attributes.color)
                    this.\$el.find('.label-list').append(lavelItem);
                },
                addLabel : function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    if (currentElement.is('li')) {
                        var inputElement = currentElement.parents('.uv-field-block').find('.uv-dropdown-other');
                        var text = currentElement.text().trim();
                    } else {
                        var inputElement = currentElement;
                        var text = inputElement.val().trim();
                    }
                    inputElement.removeClass('uv-field-error');
                    inputElement.parents('.uv-element-block').find('.uv-field-message').remove()

                    if (currentElement.is('li') || (e.which === 13 && text)) {
                        if (text.length <= 20) {
                            if (labelCollection.isLabelExist(text)) {
                                var self = this;
                                inputElement.val('');
                                this.model = new LabelModel();
                                this.model.set({name:text});
                                self = this;

                                app.appView.showLoader();
                                this.model.save({}, {
                                    success: function (model, response, options) {
                                        inputElement.parent().find(\"li:not(.uv-no-results)\").remove()
                                        inputElement.parent().find(\".uv-no-results\").show()
                                        if (!currentElement.is('li')) {
                                            inputElement.trigger('click')
                                        }
                                        if (response.alertClass == \"success\") {
                                            labelCollection.add(model);
                                            self.render();
                                        }

                                        app.appView.hideLoader();
                                        app.appView.renderResponseAlert(response);
                                    },
                                    error: function (model, xhr, options) {
                                        if (url = xhr.getResponseHeader('Location'))
                                            window.location = url;
                                        var response = warningResponse;
                                        if (xhr.responseJSON)
                                            response = xhr.responseJSON;

                                        app.appView.hideLoader();
                                        app.appView.renderResponseAlert(response);
                                    }
                                });
                            } else {
                                inputElement.addClass('uv-field-error');
                                inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>";
        // line 3360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label with same name already exist"), "html", null, true);
        yield "</span>\");
                            }
                        } else {
                            inputElement.addClass('uv-field-error');
                            inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>";
        // line 3364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Text length should be less than 20 charactors"), "html", null, true);
        yield "</span>\");
                        }
                    }
                },
                removeErrorClass: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    inputElement.removeClass('uv-field-error');
                    inputElement.parents('.uv-element-block').find('.uv-field-message').remove()
                },
            });

            // Ticket Router
            var Router = Backbone.Router.extend({
                routes: {
                    'thread/:thread' : 'threadRequestedId'
                },
                threadRequestedId: function(thread){
                    threadCollection.threadRequestedId = thread;
                },
                scrollPage : function(divId) {
                    if (\$(divId).length){
                        \$('li a[href=\"'+divId+'\"]').trigger('click');
                        \$('.uv-ticket-scroll-region').animate({
                            scrollTop: \$(divId).offset().top
                        }, 'slow');
                    } else if (divId == '#') { //scroll to last thread added
                        if (threadCollection.fullCollection.length)
                            this.scrollPage('#thread' + threadCollection.fullCollection.at(0).id);
                    }
                }
            });

            var customerForm = new CustomerForm({
                el : \$(\".uv-main-info-update-block\"),
                model : new CustomerModel()
            });

            var ticketNavigation = \$.parseJSON('";
        // line 3401
        yield json_encode((isset($context["ticketNavigationIteration"]) || array_key_exists("ticketNavigationIteration", $context) ? $context["ticketNavigationIteration"] : (function () { throw new RuntimeError('Variable "ticketNavigationIteration" does not exist.', 3401, $this->source); })()));
        yield "');

            const copyContentToClipboard = async (content) => {
                try {
                    if (navigator.clipboard && navigator.clipboard.writeText) {
                        await navigator.clipboard.writeText(content);
                    } else {
                        // Fallback for unsupported browsers
                        const textarea = document.createElement(\"textarea\");
                        textarea.value = content;
                        textarea.style.position = \"fixed\";  // avoid scrolling to bottom
                        document.body.appendChild(textarea);
                        textarea.focus();
                        textarea.select();
                        document.execCommand(\"copy\");
                        document.body.removeChild(textarea);
                    }
                    console.log(\"Copied to clipboard!\");
                } catch (err) {
                    console.error(\"Failed to copy content to clipboard:\", err);
                }
            };

            var ticketModel = new TicketModel({
                id : \"";
        // line 3425
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3425, $this->source); })()), "id", [], "any", false, false, false, 3425), "html", null, true);
        yield "\",
                status : \"";
        // line 3426
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3426, $this->source); })()), "status", [], "any", false, false, false, 3426), "id", [], "any", false, false, false, 3426), "html", null, true);
        yield "\",
                priority : \"";
        // line 3427
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3427, $this->source); })()), "priority", [], "any", false, false, false, 3427), "id", [], "any", false, false, false, 3427), "html", null, true);
        yield "\",
                group : \"";
        // line 3428
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3428, $this->source); })()), "supportGroup", [], "any", false, false, false, 3428)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3428, $this->source); })()), "supportGroup", [], "any", false, false, false, 3428), "id", [], "any", false, false, false, 3428), "html", null, true)) : (""));
        yield "\",
                subGroup : \"";
        // line 3429
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3429, $this->source); })()), "supportTeam", [], "any", false, false, false, 3429)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3429, $this->source); })()), "supportTeam", [], "any", false, false, false, 3429), "id", [], "any", false, false, false, 3429), "html", null, true)) : (""));
        yield "\",
                agent : \"\",
                profileImage : \"\",
                isTrashed : \"";
        // line 3432
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3432, $this->source); })()), "isTrashed", [], "any", false, false, false, 3432), "html", null, true);
        yield "\"
            });

            ticketApp.ticketView = ticketView = new TicketView({
                model: ticketModel
            });

            uvdesk.ticket.model = ticketModel;

            threadCollection = new ThreadCollection();
            var threadList = new ThreadList();
            var pagination = new Pagination();

            var collaboratorCollection = new CollaboratorCollection(\$.parseJSON('";
        // line 3445
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 3445, $this->source); })()), "getTicketCollaborators", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3445, $this->source); })()), "id", [], "any", false, false, false, 3445)], "method", false, false, false, 3445));
        yield "'));
            var collaboratorList = new CollaboratorList();
            collaboratorList.render();

            var tagCollection = new TagCollection(\$.parseJSON('";
        // line 3449
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 3449, $this->source); })()), "getTicketTagsById", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3449, $this->source); })()), "id", [], "any", false, false, false, 3449)], "method", false, false, false, 3449));
        yield "'));
            var tagListView = new TagList();
            tagListView.render();

            var labelCollection = new LabelCollection(\$.parseJSON('";
        // line 3453
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 3453, $this->source); })()), "getTicketLabels", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3453, $this->source); })()), "id", [], "any", false, false, false, 3453)], "method", false, false, false, 3453));
        yield "'));
            var labelListView = new LabelList();
            labelListView.render();

            var router = new Router();
            Backbone.history.start({push_state:true});

            threadCollection.syncData();
        });
    </script>

    <script>
        var sfTinyMceNew = \$.extend({}, sfTinyMce);
        var toolbarOptions = sfTinyMce.options.toolbar;

        sfTinyMce.init({
            selector : '.uv-ticket-reply textarea',
            toolbar: toolbarOptions + ' | translate',
            mentions : getMentions(),
            images_upload_url: \"\",
            setup: function(editor) {
                editor.on('keydown', function(e) { /** for pageup, pagedown keys **/
                    if(e.keyCode == 34 || e.keyCode == 33){
                        e.preventDefault();
                    }
                });
                addTranslateButton(editor);
            }
        });

        function InitTinyMce(selector) {
            let sfTinyMceNew2 = \$.extend({}, sfTinyMceNew);
            sfTinyMceNew2.init({
                selector : selector,
                mentions : getMentions(),
                setup: function(editor) {
                    addTranslateButton(editor);
                }
            });
        }

        function getMentions(){
            return {
                delimiter: ['#'],
                items: 15,
                source: function(){
                    return [
                        {
                            name : \"";
        // line 3501
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket Id"), "html", null, true);
        yield "\",
                            value : \"";
        // line 3502
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3502, $this->source); })()), "id", [], "any", false, false, false, 3502), "html", null, true);
        yield "\",
                        },
                        {
                            name : \"";
        // line 3505
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
        yield "\",
                            value : \"";
        // line 3506
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3506, $this->source); })()), "subject", [], "any", false, false, false, 3506), ["
" => " ", "" => " "]), "html", null, true);
        yield "\",
                        },
                        {
                            name : \"";
        // line 3509
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "\",
                            value : \"";
        // line 3510
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3510, $this->source); })()), "status", [], "any", false, false, false, 3510), "description", [], "any", false, false, false, 3510), "html", null, true);
        yield "\",
                        },
                        {
                            name : \"";
        // line 3513
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Priority"), "html", null, true);
        yield "\",
                            value : \"";
        // line 3514
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3514, $this->source); })()), "priority", [], "any", false, false, false, 3514), "description", [], "any", false, false, false, 3514)), "html", null, true);
        yield "\",
                        },
                        {
                            name : \"";
        // line 3517
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        yield "\",
                            value : \"";
        // line 3518
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3518, $this->source); })()), "type", [], "any", false, false, false, 3518)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3518, $this->source); })()), "type", [], "any", false, false, false, 3518), "description", [], "any", false, false, false, 3518), ["
" => " ", "" => " "]), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true)));
        yield "\",
                        },
                        {
                            name : \"";
        // line 3521
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
        yield "\",
                            value : \"";
        // line 3522
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3522, $this->source); })()), "supportGroup", [], "any", false, false, false, 3522)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3522, $this->source); })()), "supportGroup", [], "any", false, false, false, 3522), "description", [], "any", false, false, false, 3522), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true)));
        yield "\",
                        },
                        {
                            name : \"";
        // line 3525
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team"), "html", null, true);
        yield "\",
                            value : \"";
        // line 3526
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3526, $this->source); })()), "supportTeam", [], "any", false, false, false, 3526)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3526, $this->source); })()), "supportTeam", [], "any", false, false, false, 3526), "description", [], "any", false, false, false, 3526), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true)));
        yield "\",
                        },
                        {
                            name : \"";
        // line 3529
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Name"), "html", null, true);
        yield "\",
                            value : \"";
        // line 3530
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 3530, $this->source); })()), "name", [], "any", false, false, false, 3530), "html", null, true);
        yield "\",
                        },
                        {
                            name : \"";
        // line 3533
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Email"), "html", null, true);
        yield "\",
                            value : \"";
        // line 3534
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 3534, $this->source); })()), "email", [], "any", false, false, false, 3534), "html", null, true);
        yield "\",
                        },
                        {
                            name : \"";
        // line 3537
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent Name"), "html", null, true);
        yield "\",
                            value : \"";
        // line 3538
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["ticketAgent"] ?? null), "name", [], "any", true, true, false, 3538)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 3538, $this->source); })()), "name", [], "any", false, false, false, 3538), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true)));
        yield "\",
                        },
                        {
                            name : \"";
        // line 3541
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent Email"), "html", null, true);
        yield "\",
                            value : \"";
        // line 3542
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["ticketAgent"] ?? null), "email", [], "any", true, true, false, 3542)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 3542, $this->source); })()), "email", [], "any", false, false, false, 3542), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true)));
        yield "\",
                        }
                    ];
                },
                insert: function(item) {
                    return '<span>' + item.value + '</span>';
                }
            };
        }
    </script>
    <script id=\"agent_access_details_quick_view_tmp\" type=\"text/template\">
        <div class=\"uv-pull-right quick-view-navigation\">
            <div class=\"uv-loader\" style=\"display: none\">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <span class=\"uv-pop-up-close\"></span>
        <h2>";
        // line 3561
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent Access Details"), "html", null, true);
        yield "</h2>
        <div class=\"uv-pop-up-body uv-inner-section\">
            <div class=\"uv-view\">
                <div class=\"uv-ticket-head uv-grid-container\">

                    <!-- Agent Groups -->
                    <div class=\"uv-grid-item uv-group-section\">
                        <span class=\"uv-accordian-sec\">
                            <h3>";
        // line 3569
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Groups"), "html", null, true);
        yield "</h3>

                            <span class=\"uv-rt-accordian\">
                                <% if (typeof agentGroups !== 'undefined' && agentGroups.length > 0) { %>
                                        <span class=\"uv-grid-item-count\">
                                          <h4> <%= agentGroups.length %> Access </h4>
                                        </span>
                                <% } else { %>
                                        <span class=\"uv-grid-item-count\">
                                          <h4> 0 Access </h4>
                                        </span>
                                <% } %>
                                <span class=\"uv-accordian-icon\"></span>
                            </span>
                        </span>
                        <span class=\"uv-agent-details-section\">
                            <ul class=\"uv-agent-details\">
                                <% if (typeof agentGroups !== 'undefined' && agentGroups.length > 0) { %>
                                    <% agentGroups.forEach(function(group) { %>
                                        <li><%- group %></li>
                                    <% }) %>
                                <% } else { %>
                                    <p>";
        // line 3591
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No Groups found"), "html", null, true);
        yield "</p>
                                <% } %>
                            </ul>
                        </span>
                    </div>

                    <!-- Agent Team -->
                    <div class=\"uv-grid-item uv-team-section\" id=\"uv-team-access\">
                        <span class=\"uv-accordian-sec\">
                            <h3>";
        // line 3600
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Teams"), "html", null, true);
        yield "</h3>

                            <span class=\"uv-rt-accordian\">
                                <% if (typeof agentTeam !== 'undefined' && agentTeam.length > 0) { %>
                                        <span class=\"uv-grid-item-count\">
                                          <h4> <%= agentTeam.length %> Access </h4>
                                        </span>
                                <% } else { %>
                                        <span class=\"uv-grid-item-count\">
                                          <h4> 0 Access </h4>
                                        </span>
                                <% } %>
                                <span class=\"uv-accordian-icon\"></span>
                            </span>
                        </span>
                        <span class=\"uv-agent-details-section\">
                            <ul class=\"uv-agent-details\">
                                <% if (typeof agentTeam !== 'undefined' && agentTeam.length > 0) { %>
                                    <% agentTeam.forEach(function(team) { %>
                                        <li><%- team %></li>
                                    <% }) %>
                                <% } else { %>
                                    <p>";
        // line 3622
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No Teams found"), "html", null, true);
        yield "</p>
                                <% } %>
                            </ul>
                        </span>
                    </div>

                    <!-- Agent Privileges -->
                    <div class=\"uv-grid-item uv-privilage-section\">
                        <span class=\"uv-accordian-sec\">
                            <h3>";
        // line 3631
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Privileges"), "html", null, true);
        yield "</h3>

                            <span class=\"uv-rt-accordian\">
                                <% if (typeof agentPrivileges !== 'undefined' && agentPrivileges.length > 0) { %>
                                        <span class=\"uv-grid-item-count\">
                                          <h4> <%= agentPrivileges.length %> Access </h4>
                                        </span>
                                <% } else { %>
                                        <span class=\"uv-grid-item-count\">
                                          <h4> 0 Access </h4>
                                        </span>
                                <% } %>
                                <span class=\"uv-accordian-icon\"></span>
                            </span>
                        </span>
                        <span class=\"uv-agent-details-section\">
                            <ul class=\"uv-agent-details\">
                                <% if (typeof agentPrivileges !== 'undefined' && agentPrivileges.length > 0) { %>
                                    <% agentPrivileges.forEach(function(privilege) { %>
                                        <li><%- privilege %></li>
                                    <% }) %>
                                <% } else { %>
                                    <p>";
        // line 3653
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No Privileges found"), "html", null, true);
        yield "</p>
                                <% } %>
                            </ul>
                        </span>
                    </div>

                    <!-- Ticket View -->
                    <div class=\"uv-grid-item uv-ticketView-section\">
                        <span class=\"uv-accordian-sec\">
                            <h3>";
        // line 3662
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket View"), "html", null, true);
        yield "</h3>

                            <span class=\"uv-rt-accordian\">
                                <% if (typeof ticketView !== 'undefined' && ticketView.length > 0) { %>
                                        <span class=\"uv-grid-item-count\">
                                          <h4> 1 Access </h4>
                                        </span>
                                <% } else { %>
                                        <span class=\"uv-grid-item-count\">
                                          <h4> 0 Access </h4>
                                        </span>
                                <% } %>
                                <span class=\"uv-accordian-icon\"></span>
                            </span>
                        </span>
                        <span class=\"uv-agent-details-section\">
                            <ul class=\"uv-agent-details\">
                                <% if (typeof ticketView !== 'undefined' && ticketView.length > 0) { %>
                                    <li><%- ticketView %></li>
                                <% } else { %>
                                    <p>";
        // line 3682
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No Ticket View Access found"), "html", null, true);
        yield "</p>
                                <% } %>
                            </ul>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </script>
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
        return "@UVDeskCoreFramework/ticket.html.twig";
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
        return array (  5357 => 3682,  5334 => 3662,  5322 => 3653,  5297 => 3631,  5285 => 3622,  5260 => 3600,  5248 => 3591,  5223 => 3569,  5212 => 3561,  5190 => 3542,  5186 => 3541,  5180 => 3538,  5176 => 3537,  5170 => 3534,  5166 => 3533,  5160 => 3530,  5156 => 3529,  5150 => 3526,  5146 => 3525,  5140 => 3522,  5136 => 3521,  5129 => 3518,  5125 => 3517,  5119 => 3514,  5115 => 3513,  5109 => 3510,  5105 => 3509,  5098 => 3506,  5094 => 3505,  5088 => 3502,  5084 => 3501,  5033 => 3453,  5026 => 3449,  5019 => 3445,  5003 => 3432,  4997 => 3429,  4993 => 3428,  4989 => 3427,  4985 => 3426,  4981 => 3425,  4954 => 3401,  4914 => 3364,  4907 => 3360,  4804 => 3260,  4770 => 3228,  4763 => 3224,  4756 => 3220,  4705 => 3171,  4703 => 3170,  4674 => 3143,  4670 => 3141,  4668 => 3140,  4663 => 3137,  4640 => 3116,  4638 => 3115,  4617 => 3099,  4607 => 3091,  4600 => 3087,  4562 => 3051,  4560 => 3050,  4521 => 3013,  4517 => 3011,  4515 => 3010,  4510 => 3007,  4487 => 2986,  4485 => 2985,  4464 => 2971,  4368 => 2878,  4338 => 2851,  4274 => 2790,  4261 => 2780,  4254 => 2776,  4227 => 2752,  4214 => 2742,  4207 => 2738,  4180 => 2714,  4156 => 2692,  4108 => 2646,  4090 => 2631,  4080 => 2624,  4072 => 2619,  3988 => 2538,  3951 => 2504,  3945 => 2501,  3915 => 2474,  3808 => 2370,  3803 => 2368,  3754 => 2322,  3678 => 2249,  3438 => 2012,  3428 => 2005,  3420 => 2000,  3410 => 1993,  3402 => 1988,  3392 => 1981,  3383 => 1975,  3376 => 1971,  3370 => 1968,  3358 => 1959,  3346 => 1950,  3340 => 1947,  3333 => 1943,  3327 => 1940,  3305 => 1921,  3280 => 1899,  3270 => 1892,  3263 => 1888,  3245 => 1873,  3225 => 1856,  3217 => 1851,  3213 => 1850,  3205 => 1845,  3197 => 1840,  3192 => 1838,  3182 => 1831,  3178 => 1830,  3153 => 1810,  3148 => 1808,  3133 => 1796,  3113 => 1779,  3106 => 1775,  3098 => 1770,  3090 => 1767,  3085 => 1765,  3072 => 1755,  3069 => 1754,  3063 => 1751,  3058 => 1749,  3055 => 1748,  3053 => 1747,  3047 => 1744,  3042 => 1742,  3036 => 1740,  3030 => 1738,  3027 => 1737,  3021 => 1734,  3018 => 1733,  3016 => 1732,  3004 => 1723,  2997 => 1719,  2985 => 1710,  2980 => 1708,  2975 => 1706,  2963 => 1697,  2958 => 1695,  2953 => 1693,  2941 => 1684,  2903 => 1649,  2897 => 1646,  2893 => 1645,  2887 => 1643,  2874 => 1642,  2861 => 1639,  2858 => 1638,  2845 => 1627,  2839 => 1625,  2833 => 1623,  2831 => 1622,  2826 => 1620,  2818 => 1615,  2813 => 1613,  2807 => 1611,  2802 => 1608,  2797 => 1605,  2794 => 1604,  2782 => 1594,  2773 => 1587,  2763 => 1579,  2758 => 1577,  2754 => 1576,  2750 => 1575,  2746 => 1574,  2741 => 1573,  2739 => 1572,  2735 => 1571,  2730 => 1569,  2723 => 1565,  2713 => 1558,  2709 => 1557,  2704 => 1555,  2698 => 1552,  2689 => 1546,  2681 => 1541,  2676 => 1539,  2668 => 1536,  2663 => 1534,  2660 => 1533,  2657 => 1532,  2649 => 1526,  2640 => 1520,  2636 => 1519,  2631 => 1517,  2625 => 1514,  2616 => 1508,  2608 => 1503,  2603 => 1501,  2591 => 1492,  2587 => 1491,  2580 => 1487,  2577 => 1486,  2566 => 1483,  2561 => 1482,  2557 => 1481,  2551 => 1478,  2528 => 1458,  2525 => 1457,  2514 => 1454,  2509 => 1453,  2505 => 1452,  2498 => 1448,  2489 => 1442,  2479 => 1435,  2471 => 1432,  2466 => 1430,  2463 => 1429,  2453 => 1420,  2448 => 1418,  2444 => 1417,  2440 => 1416,  2436 => 1415,  2431 => 1414,  2429 => 1413,  2425 => 1412,  2420 => 1410,  2414 => 1407,  2404 => 1400,  2400 => 1399,  2395 => 1397,  2389 => 1394,  2379 => 1387,  2370 => 1381,  2365 => 1379,  2353 => 1370,  2349 => 1369,  2342 => 1365,  2339 => 1364,  2328 => 1361,  2323 => 1360,  2319 => 1359,  2312 => 1355,  2291 => 1337,  2284 => 1335,  2279 => 1333,  2276 => 1332,  2271 => 1328,  2265 => 1326,  2263 => 1325,  2259 => 1324,  2255 => 1323,  2249 => 1320,  2242 => 1316,  2237 => 1313,  2226 => 1304,  2219 => 1299,  2215 => 1297,  2211 => 1295,  2203 => 1293,  2201 => 1292,  2195 => 1291,  2192 => 1290,  2190 => 1289,  2186 => 1287,  2177 => 1284,  2170 => 1283,  2166 => 1282,  2161 => 1280,  2158 => 1279,  2155 => 1278,  2150 => 1274,  2144 => 1272,  2138 => 1270,  2136 => 1269,  2132 => 1267,  2129 => 1265,  2126 => 1264,  2120 => 1262,  2110 => 1260,  2107 => 1259,  2097 => 1257,  2095 => 1256,  2088 => 1252,  2082 => 1248,  2074 => 1246,  2071 => 1245,  2069 => 1244,  2062 => 1242,  2054 => 1241,  2047 => 1236,  2042 => 1232,  2038 => 1230,  2031 => 1226,  2026 => 1223,  2019 => 1219,  2014 => 1216,  2012 => 1215,  2006 => 1212,  2001 => 1209,  1999 => 1208,  1993 => 1205,  1988 => 1202,  1986 => 1201,  1980 => 1198,  1975 => 1195,  1973 => 1194,  1970 => 1193,  1968 => 1192,  1965 => 1191,  1961 => 1188,  1957 => 1186,  1955 => 1185,  1951 => 1184,  1947 => 1183,  1943 => 1182,  1939 => 1180,  1929 => 1178,  1927 => 1177,  1921 => 1176,  1910 => 1172,  1906 => 1171,  1897 => 1165,  1890 => 1161,  1886 => 1159,  1876 => 1150,  1869 => 1145,  1862 => 1140,  1855 => 1135,  1849 => 1133,  1847 => 1132,  1844 => 1131,  1839 => 1129,  1834 => 1128,  1832 => 1127,  1827 => 1125,  1824 => 1124,  1818 => 1122,  1816 => 1121,  1808 => 1115,  1805 => 1114,  1800 => 1111,  1796 => 1110,  1792 => 1109,  1788 => 1108,  1783 => 1107,  1779 => 1104,  1773 => 1099,  1767 => 1097,  1761 => 1096,  1752 => 1089,  1743 => 1083,  1739 => 1082,  1734 => 1080,  1728 => 1076,  1726 => 1075,  1721 => 1073,  1716 => 1070,  1709 => 1064,  1703 => 1061,  1700 => 1060,  1698 => 1059,  1693 => 1057,  1688 => 1054,  1674 => 1042,  1670 => 1041,  1665 => 1039,  1656 => 1033,  1651 => 1030,  1644 => 1024,  1640 => 1022,  1634 => 1020,  1632 => 1019,  1629 => 1018,  1623 => 1017,  1617 => 1015,  1614 => 1014,  1610 => 1013,  1607 => 1012,  1602 => 1009,  1591 => 1007,  1587 => 1006,  1582 => 1004,  1571 => 996,  1565 => 992,  1559 => 990,  1557 => 989,  1554 => 988,  1548 => 987,  1542 => 985,  1539 => 984,  1535 => 983,  1530 => 982,  1528 => 981,  1522 => 978,  1519 => 977,  1514 => 973,  1508 => 970,  1505 => 969,  1500 => 966,  1489 => 964,  1485 => 963,  1481 => 962,  1474 => 958,  1469 => 956,  1462 => 952,  1457 => 951,  1455 => 950,  1450 => 948,  1447 => 947,  1442 => 943,  1436 => 940,  1433 => 939,  1428 => 936,  1417 => 934,  1413 => 933,  1408 => 931,  1401 => 927,  1396 => 925,  1389 => 921,  1384 => 920,  1382 => 919,  1377 => 917,  1374 => 916,  1369 => 912,  1363 => 909,  1360 => 908,  1355 => 905,  1344 => 903,  1340 => 902,  1332 => 897,  1327 => 895,  1318 => 892,  1316 => 891,  1311 => 889,  1308 => 888,  1303 => 884,  1297 => 882,  1291 => 878,  1280 => 876,  1276 => 875,  1271 => 873,  1262 => 870,  1260 => 869,  1255 => 867,  1252 => 866,  1247 => 862,  1241 => 859,  1238 => 858,  1232 => 854,  1219 => 852,  1215 => 851,  1210 => 849,  1201 => 846,  1199 => 845,  1195 => 844,  1190 => 842,  1187 => 841,  1182 => 837,  1176 => 835,  1171 => 832,  1164 => 830,  1161 => 829,  1156 => 826,  1149 => 824,  1147 => 823,  1141 => 822,  1136 => 821,  1132 => 820,  1124 => 815,  1119 => 813,  1110 => 810,  1107 => 809,  1105 => 808,  1100 => 806,  1097 => 805,  1093 => 802,  1089 => 799,  1081 => 794,  1075 => 791,  1071 => 790,  1063 => 785,  1058 => 783,  1050 => 778,  1045 => 776,  1037 => 771,  1032 => 769,  1026 => 766,  1018 => 761,  1014 => 760,  1010 => 758,  1007 => 757,  1001 => 752,  995 => 750,  992 => 749,  989 => 747,  976 => 735,  972 => 732,  966 => 730,  960 => 728,  958 => 727,  953 => 726,  951 => 725,  946 => 724,  944 => 723,  940 => 722,  933 => 718,  929 => 717,  922 => 713,  918 => 712,  914 => 710,  909 => 706,  905 => 704,  903 => 703,  900 => 702,  894 => 700,  892 => 699,  888 => 698,  884 => 696,  881 => 695,  875 => 693,  869 => 691,  866 => 690,  864 => 689,  860 => 688,  854 => 684,  848 => 682,  841 => 680,  839 => 679,  834 => 677,  831 => 676,  828 => 674,  819 => 669,  811 => 666,  801 => 662,  790 => 652,  777 => 651,  764 => 648,  736 => 621,  733 => 619,  730 => 618,  681 => 571,  678 => 570,  676 => 569,  674 => 568,  671 => 567,  501 => 398,  314 => 213,  264 => 166,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}{{ '#' ~ ticket.id ~ ' ' ~ ticket.subject }}{% endblock %}

{% block templateCSS %}
    <style>
        .uv-inner-section .uv-view .uv-ticket-note-agent .uv-ticket-main-rt {
            padding: 15px;
            margin-bottom: 10px;
            background-color: #E3F2FD;
            border: 1px solid #42a5f5;
            position: relative;
        }

        .uv-inner-section .uv-view .uv-ticket-note-agent .uv-ticket-main-rt::before,
        .uv-inner-section .uv-view .uv-ticket-note-agent .uv-ticket-main-rt::after { 
            border-bottom: solid 1px #42a5f5;
            border-right: solid 1px #42a5f5;
            border-left: solid 1px #42a5f5;
        }

        .uv-inner-section .uv-view .uv-ticket-note-agent .uv-ticket-main-rt::before {
            content: \"\";
            position: absolute;
            top: 0px;
            bottom: -4px;
            left: 2px;
            right: 2px;
            z-index: -1;
            background-color: #FFFFFF;
        }

        .uv-inner-section .uv-view .uv-ticket-note-agent .uv-ticket-main-rt::after {
            content: \"\";
            position: absolute;
            top: 0px;
            bottom: -7px;
            left: 6px;
            right: 6px;
            z-index: -2;
        }

        .uv-aside-ticket-labels.label-list-block .uv-btn-label {
            cursor: pointer;
        }
        .uv-main-info-update-block .uv-element-block {
            margin: 10px 0px !important;
        }
        .uv-tab-ellipsis {
            position: relative;
        }
        .uv-inner-section .uv-view .uv-ticket-section .uv-ticket-accordion .uv-ticket-wrapper {
            display: block;
        }
        .uv-element-block.cc-bcc .uv-dropdown-container {
            padding: 10px 20px 10px 20px;
        }
        .uv-action-buttons .uv-dropdown-list ul li {
            padding: 5px 0px !important;
        }
        .uv-action-buttons{
            margin-bottom: 40px !important;
        }
        .uv-ticket-reply .uv-element-block-textarea, .thread-edit-container .uv-element-block-textarea {
            width: 100% !important;
            max-width: 100% !important;
        }
        .thread-edit-container .uv-field-message {
            color: #FF5656 !important;
        }
        .uv-element-block .mce-tinymce {
            margin-top: 10px;
        }
        .uv-ticket-reply .uv-element-block-textarea .uv-field-message, .thread-edit-container .uv-element-block-textarea .uv-field-message {
            margin-top: 15px;
        }
        .thread-edit-container {
            margin-top: 10px;
        }
        .uv-ticket-viewer-bar{
            transition: 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            height: 0px;
        }
        .uv-ticket-viewer-bar.active {
            height: 50px;
            margin-bottom: 10px;
            border-bottom: 1px dotted #f97278;
        }
        .uv-ticket-viewer-single {
            display: inline-block;
            margin-right: 5px;
        }
        .uv-ticket-viewer-single img {
            width: 40px;
            border-radius: 3px;
            display: inline-block;
            vertical-align: middle;
        }
        .uv-ticket-viewer-single.uv-first {
            width: 40px;
            height: 40px;
            background-image: linear-gradient(to right, #f97278 0%, #f181bf 100%);
            text-align: center;
            vertical-align: top;
            line-height: 30px;
            border-radius: 20px;
        }
        .uv-ticket-viewer-close {
            position: absolute;
            top: 0px;
            width: 40px;
            height: 40px;
            background: #f1f1f1;
            text-align: center;
            line-height: 35px;
            border-radius: 2px;
            opacity: .6;
            text-indent: 6px;
        }
        .uv-ticket-viewer-list {
            display: inline;
        }
        span.viewer-firstletter.img-thumbnail {
            width: 40px;
            height: 40px;
            display: block;
            text-align: center;
            font-size: 20px;
            font-style: italic;
            border: 1px dotted;
            border-radius: 4px;
            line-height: 35px;
        }
        .uv-ticket-viewer-close {
            display:none;
        }
        .uv-ticket-viewer-single:hover .uv-ticket-viewer-close {
            display: block;
        }
        .uv-hide{
            display: none;
        }
        .uv-info {
            background: #7C70F4;
        }
        .uv-ticket-viewer-list .uv-icon-eye-light{
            animation: jelly 0.8s infinite alternate ease-in-out;
        }
        .uv-aside-brick .uv-loader {
            position: absolute;
            transform: scale(0.5);
            top: 22px;
            right: 45px;
        }
        .uv-app-glyph-customfields {
            width: 20px;
            height: 20px;
            background-position: center center;
            background-repeat: no-repeat;
            cursor: pointer;
            display: inline-block;
            vertical-align: middle;
            margin: 5px 0px 5px 10px;
            background-image: url(\"{{ asset('bundles/uvdeskcoreframework/images/app-glyph-custom.svg') }}\");
        }
        .uv-no-threads {
            padding: 80px 20px;
            text-align: center;
        }
        .uv-ticket-strip-label {
            position: relative;
        }
        input.input-copy-thread-link {
            position: absolute;
            bottom: 10px;
            width: 400px;
        }
        .uv-ticket-action-bar-fixed {
            position: fixed;
            width: 100%;
            background: #fff;
            z-index: 999;
        }
        .uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt {
            position: fixed;
            right: 0px;
            margin-top: 10px;
        }
        .uv-ticket-action-bar-fixed + .uv-ticket-viewer-bar {
            margin-top: 70px;
        }
        .uv-ticket-main {
            word-wrap: break-word;
        }
        @media only screen and (max-width: 900px) {
            .uv-ticket-action-bar-fixed{
                position: relative;
            }
            .uv-ticket-action-bar-fixed + .uv-ticket-viewer-bar {
                margin-top: 0px;
            }
            .uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt {
                position: relative;
            }
        }
        .uv-icon-pin {
            width: 18px;
            height: 18px;
            display: inline-block;
            vertical-align: middle;
            background-image: url(\"{{ asset('bundles/uvdeskcoreframework/images/uvdesk-sprite.svg') }}\");
            background-position: 0px -396px;
            transition: transform .15s;
            transform: scale(1);
        }
        .uv-icon-pinned {
            background-position: -19px -396px;
        }
        .uv-header-fix{
            display: inline-block;
            margin: 0px 10px 0px 5px;
        }
        .uv-header-fix + .uv-tabs {
            display: inline-block;
        }
        .uv-ticket-section span.uv-mail-status {
            width: 16px;
            height: 16px;
            background: url('../../../../../bundles/webkuldefault/images/mail-status.png');
            cursor: help;
        }
        .uv-ticket-section .uv-mail-status.uv-mail-processed {
            background-position: 0 0;
        }
        .uv-ticket-section .uv-mail-status.uv-mail-open,.uv-ticket-section .uv-mail-status.uv-mail-delivered,.uv-ticket-section .uv-mail-status.uv-mail-click {
            background-position: -38px 0;
        }
        .uv-ticket-section .uv-mail-status.uv-mail-spam,.uv-ticket-section .uv-mail-status.uv-mail-deferred,.uv-ticket-section .uv-mail-spamreport {
            background-position: -55px 0;
        }
        .uv-ticket-section .uv-mail-status.uv-mail-bounce,.uv-ticket-section .uv-mail-status.uv-mail-dropped {
            background-position: -73px 0;
        }
        @media only screen and (max-width: 1480px) {
            .uv-inner-section .uv-view .uv-ticket-action-bar-fixed.uv-ticket-action-bar .uv-ticket-action-bar-rt{
                width: auto;
            }
        }
        @media only screen and (max-width: 1300px) {
            .uv-header-fix{
                margin: 0px 10px 0px 10px;
            }
        }

        @media only screen and (max-width: 900px) {
            .uv-ticket-action-bar-fixed{
                position: relative;
            }
            .uv-ticket-action-bar-fixed + .uv-ticket-viewer-bar {
                margin-top: 0px;
            }
            .uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt {
                position: relative;
            }
            .uv-inner-section .uv-view .uv-ticket-action-bar.uv-ticket-action-bar-fixed .uv-ticket-action-bar-lt{
                width: 70%;
            }
            .uv-inner-section .uv-view .uv-ticket-action-bar.uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt {
                width: 21%;
                padding-right: 33px;
            }
            .uv-header-fix {
                display: none;
            }
        }

        .uv-inner-section .uv-view .uv-ticket-scroll-region {
            margin-bottom: 0px;
        }

        .uv-inner-section .uv-view .uv-ticket-action-bar.uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt {
            width: 21%;
            padding-right: 33px;
        }
        @media print {
            .uv-navbar,.uv-ticket-action-bar, .uv-sidebar, .uv-aside>.uv-aside-brick, .uv-aside-back, .uv-ticket-fixed-region, .uv-ticket-main.uv-ticket-reply, .uv-upload-actions, .uv-filter-view, .uv-dropdown-list>.uv-dropdown-container,.uv-notifications-wrapper,.uv-pop-up-overlay,.uv-loader-view, .uv-loader, .uv-navbar,.uv-ticket-count-wrapper {
                display: none !important;
            }
            .uv-ticket-scroll-region {
                overflow: visible;
                margin-bottom: 0 !important;
            }
            .uv-paper {
                padding-left: 0px !important; /* uv-view */
            }
            .uv-wrapper {
                left: 0 !important;
                margin: 0 !important;
            }
            .uv-inner-section .uv-view .uv-ticket-scroll-region  .uv-ticket-main-rt {
                width: 80%;
            }
            .uv-paper,.uv-view ,.uv-ticket-scroll-region, .uv-wrapper {
                position: initial !important;
            }
        }

        .uv-ticket-action-bar-rt .app-glyph {
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
            cursor: pointer;
            height: 20px;
            width: 20px;
        }

        .uv-ticket-action-bar-rt .app-glyph:last-child {
            margin-right: 0px;
        }

        blockquote {
            background: #f9f9f9;
            border-left: 4px solid #ccc;
            margin: 1.5em 10px;
            padding: 0.5em 10px;
            quotes: \"\\201C\"\"\\201D\"\"\\2018\"\"\\2019\";
        }

        blockquote:before {
            color: #ccc;
            content: open-quote;
            font-size: 3em;
            line-height: 0.1em;
            margin-right: 0.05em;
            vertical-align: -0.4em;
        }

        blockquote p {
            display: inline;
        }

        .uv-dropdown-list ul li {
            padding : 8px 0px !important;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        }
        ::-webkit-scrollbar-thumb {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        }

        .uv-aside-select.search .uv-dropdown-list.uv-bottom-left, .uv-aside-select .uv-dropdown-list.uv-bottom-right {
            top: 25px;
            width: 100%;
        }

        .uv-aside-select.search .uv-dropdown-list ul {
            padding: 0px 10px;
        }

        .uv-aside-select.search .uv-dropdown-container {
            padding: 8px 10px 4px;
            overflow-y: auto;
            max-height: 280px;
            border-bottom: solid 1px #D3D3D3;
        }

        .uv-aside-select.search .uv-dropdown-list ul.uv-agents-list li {
            border-bottom: solid 1px #D3D3D3;
            border-top:0px;
        }

        .uv-search-inline {
            width: 100%;
        }

        .uv-dropdown-list ul.uv-search-list li:first-child {
            border-top: none;
        }

        .uv-search-sm input.uv-search-field { 
           border: solid 1px #B1B1AE;
           border-radius: 3px;
           color: #333333;
           font-size: 15px;
           box-sizing: border-box;
           padding: 7px 10px 9px 33px;
           width: 100%;
        }

        {# Agent access details css start #}
        .uv-pop-up-body {
            padding: 15px 0 0 0 !important;
        }

        .uv-quick-view-trigger {
            width: 18px !important;
            background-position: -14px 210px !important;
        }
        #quick-view-modal .uv-view {
            padding: 0;
            overflow-y: visible;
            display: inline-block;
            position: relative;
        }
        #quick-view-modal .uv-view .uv-ticket-section {
            margin-top: 0;
        }
        #quick-view-modal .uv-ticket-head {
            padding: 5px 0px 0px 0px;
        }
        #quick-view-modal .uv-ticket-strip {
            padding-bottom: 0;
        }
        #quick-view-modal .uv-ticket-strip .uv-btn-tag {
            margin-bottom: 0;
        }
        #quick-view-modal .quick-view-navigation {
            position: absolute;
            right: 50px;
            top: 9px;
        }
        #quick-view-modal .quick-view-navigation ~ a {
            width: calc(100% - 100px);
            display: inline-block;
        }
        #quick-view-modal .uv-btn-tag[disabled=\"disabled\"] {
            opacity: .4;
            cursor: not-allowed;
            border-color: #B1B1AE !important;
        }
        #quick-view-modal .uv-loader {
            transform: scale(0.5);
            top: 14px;
            right: 60px;
        }

        .uv-grid-item h3 {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .uv-grid-item {
            margin-bottom: 8px;
            background-color: white;
            padding: 10px 20px;
            border-radius: 8px;
        }

        .uv-inner-section .uv-view p:first-of-type {
            margin-top: 0 !important;
        }

        .uv-grid-item h3 {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #333;
        }
        .uv-agent-details-section {
            display: none;
        }
        .uv-agent-details {
            display: grid;
            list-style-type: none;
            padding-left: 10px;
            margin: 0;
            grid-template-columns: repeat(2, 1fr);
        }
        .uv-accordian-sec {
            display: flex;
            justify-content: space-between;
        }

        .uv-agent-details li, .uv-agent-details p {
            margin: 2px 0;
            padding-left: 15px;
            position: relative;
            text-transform: uppercase;
            font-size: 15px !important;
        }

        .uv-grid-item:last-child {
            margin-bottom: 0;
        }

        .uv-agent-details li::before {
            content: \"•\";
            font-size: 1rem;
            position: absolute;
            left: 0;
            top: -2px;
        }

        .uv-rt-accordian {
            display: flex;
            align-items: center;
        }

        .uv-accordian-icon {
            width: 12px;
            height: 12px;
            display: inline-block;
            background-color: transparent;
            position: relative;
            margin-right: 10px;
            cursor: pointer;
        }
        .uv-accordian-icon::before {
            content: '';
            border: solid #B1B1AE;
            border-width: 0 2px 2px 0;
            display: inline-block;
            padding: 4px;
            transform: rotate(45deg);
            transition: transform 0.3s ease;
        }
        .uv-accordian-icon.up::before {
            transform: rotate(-135deg); /* Up arrow */
        }

        .uv-ticket-head {
            font-family: 'Source Sans Pro', sans-serif;
        }

        @media (max-width: 768px) {
            .uv-grid-container {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }

        .uv-pop-up-box h2 {
            font-size: 20px !important;
        }

        .uv-pop-up-box .uv-pop-up-close {
            top : 30px !important;
            right: 28px !important;
        }

        .uv-pop-up-wide {
            background: #f4f6f9 !important;
            margin-left: -17% !important;
            border-radius: 10px;
            /* width: 700px; */
            max-width: 50% !important;
        }

        .uv-grid-item-count h4 {
            background: #f4f6f9;
            color: #333333;
            font-weight: 500;
            font-size: 15px;
            padding: 4px 8px;
            border-radius: 6px;
            margin-right: 15px;
        }
        {# Agent details css end #}

        {% if ticketRating %}
            {# Kudos Rating related CSS #}
            .uv-icon-kudos-rating {
                background-image: url(\"{{ asset('bundles/uvdeskcoreframework/images/ticket-rating-white-star.svg') }}\");
                width: 14px;
                height: 13px;
                margin-left: 1px;
                background-size: contain;
                background-repeat: no-repeat;
            }

            .ticket-rating-common {
                display: flex !important;
                padding: 4px 5px;
                border-radius: 4px;
                justify-content: center;
                align-items: center;
            }

            .ticket-rating-1 {
                background: #FF5656;
            }
            
            .ticket-rating-2 {
                    background: #FF5656;
                }

            .ticket-rating-3 {
                    background: #FFA500;
                }

            .ticket-rating-4 {
                    background: #68CB47;
                }

            .ticket-rating-5 {
                    background: #68CB47;
                }

            .uv-icon-kudos-rating-label {
                    color: white !important;
                    font-family: 'Source Sans Pro';
                    font-size: 15px !important;
                    font-weight: 600;
                    line-height: 18.34px;
                    text-align: center;
                    margin-left: -8px;
                    margin-right: 1px !important;
            }
            {# Kudos Rating related CSS end #}
        {% endif %}

        {# public link access #}
        .ticket-public-resource-access-link {
            overflow: hidden;
            display: none;
            align-items: center;
            border: 1px solid #e5e5e5;
            border-radius: 4px;
            font-size: 14px;
        }

        .ticket-public-resource-access-link.visible {
            display: flex;
        }

        .ticket-public-resource-access-link .resource-link {
            overflow: hidden;
            text-overflow: ellipsis;
            text-wrap: nowrap;
            padding: 8px 10px;
            border-right: 1px solid #e5e5e5;
        }

        .ticket-public-resource-access-link .copy-resource-link-to-clipboard {
            padding: 8px 10px;
            cursor: pointer;
            background: #e9e9e9;
        }
        {# public link access #}
        
    </style>
{% endblock %}
{% block pageContent %}

    <!-- Quick View popup -->
    <div class=\"uv-pop-up-overlay\" id=\"quick-view-modal\">
        <div class=\"uv-pop-up-box uv-pop-up-wide\">
        </div>
    </div>
    <!-- //Quick View popup -->

    <div class=\"uv-inner-section\">
        {# Ticket Sidebar #}
        <div class=\"uv-aside\" {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}style=\"display: none;\"{% endif %} >
            <div class=\"uv-main-info-block\">
                <div class=\"uv-aside-head\">
                    <div class=\"uv-aside-title\">
                        <h6>{{ 'Ticket'|trans }} #{{ ticket.id }}</h6>
                    </div>
                    <div class=\"uv-aside-back\">
                        <span onclick=\"history.length > 1 ? history.go(-1) : window.location = '{{ path(\"helpdesk_member_ticket_collection\") }}';\">{{ 'Back'|trans }}</span>
                    </div>
                </div>

                {# Ticket Information #}
                <div class=\"uv-aside-brick\">
                    {# Customer Details #}
                    <div class=\"uv-aside-customer-block\">
                        <h3>{{ 'Customer Information'|trans }}</h3>
                        <div class=\"uv-aside-avatar\">
                            {% if customer.thumbnail %}
                                <img src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}{{ customer.thumbnail }}\">
                            {% else %}
                                <img src=\"{{ asset(default_customer_image_path) }}\">
                            {% endif %}
                        </div>

                        <div class=\"uv-aside-customer-info\">
                            <div style=\"display: flex; align-items: center; gap: 4px;\">
                                <span>{{ customer.name }}</span>
                                {% if ticket_service.getUserPresenceStatus %}
                                    {% if customer.isOnline %}
                                        <span title=\"Last Login: {{ customer.lastLogin }}\" style=\"cursor:pointer; color: green; font-size: 15px;\">●</span>
                                    {% else %}
                                        <span title=\"Last Login: {{ customer.lastLogin }}\" style=\"cursor:pointer; color: red; font-size: 15px;\">●</span>
                                    {% endif %}
                                {% endif %}

                            </div>
                            <span>{{ customer.email }}</span>
                            {% if customer.contactNumber %}
                                <span>{{ customer.contactNumber }}</span>
                            {% endif %}

                            {% if user_service.isAccessAuthorized('ROLE_AGENT_MANAGE_CUSTOMER') %}
                                <span class=\"uv-customize\" data-toggle=\"tooltip\" title=\"Edit Customer Information\"></span>
                            {% endif %}
                        </div>
                    </div>

                    {# Ticket Details #}
                    <div class=\"uv-aside-ticket-block\">
                        <div class=\"uv-aside-ticket-brick\">
                            <h3>{{ 'Total Replies'|trans }}</h3>
                            <span class=\"uv-icon-replies\"></span> <span>{{ totalReplies }}</span>
                        </div>

                        <div class=\"uv-aside-ticket-brick\">
                            <h3>{{ 'TimeStamp'|trans }}</h3>
                            <span class=\"uv-icon-timestamp\"></span> <span>{{ ticket_service.timeZoneConverter(ticket.createdAt) }}</span>
                        </div>

                        <div class=\"uv-aside-ticket-brick\">
                            <h3>{{ 'Channel'|trans }}</h3>
                            {% if ticket.source == 'email' %}
                                <span class=\"uv-icon-channel uv-channel-email\"></span> <span>{{ 'Email'|trans }}</span>
                            {% elseif ticket.source == 'formbuilder' %}
                                <span class=\"uv-icon-channel uv-channel-form\"></span> <span>{{ 'Formbuilder'|trans }}</span>
                            {% elseif ticket.source == 'api' %}
                                <span class=\"uv-icon-channel uv-channel-api\"></span> <span>{{ 'Api'|trans }}</span>
                            {% else %}
                                <span class=\"uv-icon-channel uv-channel-web\"></span> <span>{{ 'Website'|trans }}</span>
                            {% endif %}
                        </div>

                        {# Generate Public Link #}
                        <div class=\"uv-aside-ticket-brick\">
                            <ul style=\"padding: unset; margin: unset; list-style: none; display: flex; align-items: center; gap: 10px;\">
                                <li style=\"width: 100%;\">
                                    <button id=\"ticket-generate-customer-public-resource-access-link\" class=\"uv-btn-small\" title=\"Allow customer to view ticket publicly without having to login into their dashboard\">Generate Public Link</button>
                                    <div id=\"ticket-public-resource-access-link\" class=\"ticket-public-resource-access-link\" style=\"margin-top: 10px;\">
                                        <div class=\"resource-link\"></div>
                                        <div class=\"copy-resource-link-to-clipboard\">Copy</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        {# Generate Public Link End #}

                        {# SLA #}
                        {% if user_service.isFileExists('apps/uvdesk/sla') %}
                            {{ include('@UVDeskCoreFramework\\\\slaSnippet.html.twig') }}
                        {% endif %}
                    </div>
                </div>
            </div>

            {# Edit Customer Info #}
            {% if user_service.isAccessAuthorized('ROLE_AGENT_MANAGE_CUSTOMER') %}
                <div class=\"uv-main-info-update-block uv-no-error-success-icon\" style=\"display: none\">
                    <div class=\"uv-aside-head\">
                        <div class=\"uv-aside-title\"><h6>{{ 'Edit Customer'|trans }}</h6></div>
                        <div class=\"uv-aside-back\"><span>{{ 'Back'|trans }}</span></div>
                    </div>

                    <div class=\"uv-aside-brick\">
                        <form method=\"post\">
                            <input class=\"uv-field\" name=\"id\" type=\"hidden\" value=\"{{ customer.id }}\">

                            <div class=\"uv-element-block\">
                                <label class=\"uv-field-label\">{{ 'Name'|trans }}</label>
                                <div class=\"uv-field-block\">
                                    <input class=\"uv-field\" name=\"name\" type=\"text\" value=\"{{ customer.name }}\">
                                </div>
                            </div>

                            <div class=\"uv-element-block\">
                                <label class=\"uv-field-label\">{{ 'Email'|trans }}</label>
                                <div class=\"uv-field-block\">
                                    <input class=\"uv-field\" name=\"email\" type=\"text\" value=\"{{ customer.email }}\">
                                </div>
                            </div>

                            <div class=\"uv-element-block\">
                                <label class=\"uv-field-label\">{{ 'Contact Number'|trans }}</label>
                                <div class=\"uv-field-block\">
                                    <input class=\"uv-field\" name=\"contactNumber\" type=\"text\" value=\"{{ customer.contactNumber }}\">
                                </div>
                            </div>

                            <div class=\"uv-action-buttons\">
                                <a class=\"uv-btn update-btn\" href=\"#\">{{ 'Update'|trans }}</a>
                                <a class=\"uv-btn cancel-btn\" href=\"#\">{{ 'Cancel'|trans }}</a>
                            </div>

                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token_generator.refreshToken('') }}\"/>
                        </form>
                    </div>
                </div>
            {% endif %}

            
            {# Edit Ticket #}
            <div class=\"uv-aside-brick\">
                <div class=\"uv-aside-ticket-actions\">
                    {# Update Ticket Agent #}
                    <div class=\"uv-aside-select search\">
                        <label class=\"uv-aside-select-label\">{{ 'Agent'|trans }}</label>
                        <div>
                            {% set agentName = ticketAgent ? ticketAgent.name : 'Not Assigned'|trans %}
                            {% if ticket.isTrashed == false and user_service.isAccessAuthorized('ROLE_AGENT_ASSIGN_TICKET') %}
                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"{{ ticketAgent ? ticketAgent.id : '' }}\">{{ agentName }}</span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>{{ 'Agent'|trans }}</label>
                                        <div class=\"uv-search-sm\">
                                            <input type=\"text\" class=\"uv-search-field uv-search-inline\" placeholder=\"{{ 'Search'|trans }}\">
                                        </div>
                                    </div>

                                    <ul class=\"uv-agents-list agent\" data-action=\"agent\">
                                        {% for agent in user_service.getAgentPartialDataCollection() %}
                                            <li data-index=\"{{ agent.id }}\">
                                                <img src=\"{{ agent.smallThumbnail != null ? app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') ~ agent.smallThumbnail : asset(default_agent_image_path) }}\"/> {{ agent.name }}
                                                {% if ticket_service.getUserPresenceStatus %}
                                                    {% if (agent.isOnline) %}  
                                                            <span title=\"Online\" style=\"cursor:pointer; color: green; font-size: 15px; vertical-align: middle;\">●</span>
                                                        {% else %}  
                                                            <span title=\"Offline\" style=\"cursor:pointer; color: red; font-size: 15px; vertical-align: middle;\">●</span>
                                                    {% endif %}
                                                {% endif %}
                                            </li>
                                        {% endfor %}
                                    </ul>
                                </div>
                            {% else %}
                                <span class=\"uv-aside-select-value\">{{ agentName }}</span>
                            {% endif %}
                        </div>
                    </div>

                    {# Update Ticket Priority #}
                    <div class=\"uv-aside-select\">
                        <label class=\"uv-aside-select-label\">{{ 'Priority'|trans }}</label>
                        <div>
                            <span class=\"uv-list-ticket-priority\" style=\"background: {{ ticket.priority.colorCode }}\"></span>
                            {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_PRIORITY') %}
                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"{{ ticket.priority.id }}\">{{ ticket.priority.description|trans }}</span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>{{ 'Priority'|trans }}</label>
                                        <ul class=\"priority\" data-action=\"priority\">
                                            {% for priority in ticketPriorityCollection %}
                                                <li data-index=\"{{ priority.id }}\" data-color=\"{{ priority.colorCode }}\"><a href=\"#\">{{ priority.description|trans }}</a></li>
                                            {% endfor %}
                                        </ul>
                                    </div>
                                </div>
                            {% else %}
                                <span class=\"uv-aside-select-value\">
                                    {{ ticket.priority.description|trans }}
                                </span>
                            {% endif %}
                        </div>
                    </div>

                    {# Update Ticket Status #}
                    <div class=\"uv-aside-select\">
                        <label class=\"uv-aside-select-label\">{{ 'Status'|trans }}</label>
                        <div>
                            {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_STATUS') %}
                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"{{ ticket.status.id }}\">{{ ticket.status.description|trans }}</span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>{{ 'Status'|trans }}</label>
                                        <ul class=\"status\" data-action=\"status\">
                                            {% for status in ticketStatusCollection %}
                                                <li data-index=\"{{ status.id }}\"><a href=\"#\">{{ status.description|trans }}</a></li>
                                            {% endfor %}
                                        </ul>
                                    </div>
                                </div>
                            {% else %}
                                <span class=\"uv-aside-select-value\">{{ ticket.status.description|trans }}</span>
                            {% endif %}
                        </div>
                    </div>

                    {# Update Ticket Type #}
                    <div class=\"uv-aside-select search\">
                        <label class=\"uv-aside-select-label\">{{ 'Type'|trans }}</label>
                        <div>
                            {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_TYPE') %}
                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"{{ ticket.type ? ticket.type.id : '-- --' }}\">{{ ticket.type ? ticket.type.code : 'Not Assigned'|trans }}</span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>{{ 'Type'|trans }}</label>
                                        <div class=\"uv-search-sm\">
                                            <input type=\"text\" class=\"uv-search-field uv-search-inline\" placeholder=\"{{ 'Search'|trans }}\">
                                        </div>
                                    </div>

                                    <ul class=\"uv-search-list type\" data-action=\"type\">
                                        {% for type in ticket_service.getTypes()  %}
                                            <li data-index=\"{{ type.id }}\"><a href=\"#\">{{ type.name }}</a></li>
                                        {% endfor %}
                                    </ul>
                                </div>
                            {% else %}
                                <span class=\"uv-aside-select-value\">
                                    {{ ticket.type ? ticket.type.code : 'Not Assigned'|trans }}
                                </span>
                            {% endif %}
                        </div>
                    </div>

                    {# Update Ticket Support Group #}
                    <div class=\"uv-aside-select search\">
                        <label class=\"uv-aside-select-label\">{{ 'Group'|trans }}</label>
                        <div>
                            {% if user_service.isAccessAuthorized('ROLE_AGENT_ASSIGN_TICKET_GROUP') %}
                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"{{ ticket.supportGroup ? ticket.supportGroup.id : '-- --' }}\">
                                    {{ ticket.supportGroup ? ticket.supportGroup.name : 'Not Assigned'|trans }}
                                </span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>{{ 'Group'|trans }}</label>
                                        <div class=\"uv-search-sm\">
                                            <input type=\"text\" class=\"uv-search-field uv-search-inline\" placeholder=\"{{ 'Search'|trans }}\">
                                        </div>
                                    </div>
                                    <ul class=\"uv-search-list group\" data-action=\"group\">
                                        <li data-index=\"\"><a href=\"#\">{{ 'Not Assigned'|trans }}</a></li>

                                        {% for group in supportGroupCollection %}
                                            <li data-index=\"{{ group.id }}\"><a href=\"#\">{{ group.name }}</a></li>
                                        {% endfor %}
                                    </ul>
                                </div>
                            {% else %}
                                <span class=\"uv-aside-select-value\">
                                    {{ ticket.supportGroup ? ticket.supportGroup.name : 'Not Assigned'|trans }}
                                </span>
                            {% endif %}
                        </div>
                    </div>

                    {# Update Ticket Support Team #}
                    <div class=\"uv-aside-select search\">
                        <label class=\"uv-aside-select-label\">{{ 'Team'|trans }}</label>
                        <div>
                            {% if user_service.isAccessAuthorized('ROLE_AGENT_ASSIGN_TICKET_GROUP') %}
                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"{{ ticket.supportTeam ? ticket.supportTeam.id : '-- --' }}\">
                                    {{ ticket.supportTeam ? ticket.supportTeam.name : 'Not Assigned'|trans }}
                                </span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>{{ 'Team'|trans }}</label>
                                        <div class=\"uv-search-sm\">
                                            <input type=\"text\" class=\"uv-search-field uv-search-inline\" placeholder=\"{{ 'Search'|trans }}\">
                                        </div>
                                    </div>
                                    <ul class=\"uv-search-list team\" data-action=\"team\">
                                        <li data-index=\"\"><a href=\"#\">{{ 'Not Assigned'|trans }}</a></li>
                                        {% for team in supportTeamCollection %}
                                            <li data-index=\"{{ team.id }}\"><a href=\"#\">{{ team.name }}</a></li>
                                        {% endfor %}
                                    </ul>
                                </div>
                            {% else %}
                                <span class=\"uv-aside-select-value\">
                                    {{ ticket.supportTeam ? ticket.supportTeam.name : 'Not Assigned'|trans }}
                                </span>
                            {% endif %}
                        </div>
                    </div>

                    {# Assigned Country #}
                    <div class=\"uv-aside-select search\">
                        <label class=\"uv-aside-select-label\">{{ 'Country'|trans }}</label>

                        <div class=\"auto_focus\">
                            {% if user_service.isAccessAuthorized('ROLE_AGENT_ASSIGN_TICKET_COUNTRY') %}
                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"{{ ticket.country ? ticket.country : '-- --' }}\">
                                    {% for key, selectedCountry in user_service.getCountries() %}
                                        {% if (ticket.country) and (ticket.country == key) %}
                                           {{ selectedCountry }}
                                        {% endif %}
                                    {% endfor %}

                                    {% if (ticket.country == '') or (ticket.country == null) %}
                                        {{ 'Not Assigned'|trans }}
                                    {% endif %}
                                </span>

                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>{{ 'Country'|trans }}</label>

                                        <div class=\"uv-search-sm\">
                                            <input type=\"text\" class=\"uv-search-field uv-search-inline\">
                                        </div>
                                    </div>

                                    <ul class=\"uv-search-list country\" data-action=\"country\">
                                        <li data-index=\"\"><a href=\"#\">{{ 'Not Assigned'|trans }}</a></li>

                                        {% for key, country in user_service.getCountries() %}
                                            <li data-index=\"{{ key }}\"><a href=\"#\">{{ country }}</a></li>
                                        {% endfor %}
                                    </ul>
                                </div>
                            {% else %}
                                <span class=\"uv-aside-select-value\">
                                    {% for key, selectedCountry in user_service.getCountries() %}
                                        {% if (ticket.country) and (ticket.country == key) %}
                                           {{ selectedCountry }}
                                        {% endif %}
                                    {% endfor %}

                                    {% if (ticket.country == '') or (ticket.country == null) %}
                                        {{ 'Not Assigned'|trans }}
                                    {% endif %}
                                </span>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>

            {# Ticket Labels #}
            <div class=\"uv-aside-brick\">
                <div class=\"uv-aside-ticket-labels label-list-block\">
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Labels'|trans }}</label>

                        <div class=\"uv-field-block\">
                            <input class=\"uv-field uv-dropdown-other\" type=\"text\" data-type=\"label\">
                            <div class=\"uv-dropdown-list uv-top-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                    <ul class=\"\">
                                        <span class=\"uv-filter-info\">{{ 'Type atleast 2 letters'|trans }}</span>
                                        <span class=\"uv-no-results\" style=\"display: none;\">{{ 'No result found'|trans }}</span>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"label-list\"></div>
                </div>
            </div>

            {# Ticket Collaborators #}
            <div class=\"uv-aside-brick collaborator-list-block\">
                <div class=\"uv-aside-ticket-labels\">
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Collaborators'|trans }}</label>

                        {% if user_service.isAccessAuthorized('ROLE_AGENT_ADD_COLLABORATOR_TO_TICKET') %}
                            <div class=\"uv-field-block\">
                                <input class=\"uv-field\" type=\"text\" name=\"email\" type=\"text\" value=\"\" placeholder=\"{{ 'Type email to add'|trans }}\">
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"collaborator-list\" style=\"margin-top: 10px\"></div>
                </div>
            </div>

            {# Ticket Tags #}
            <div class=\"uv-aside-brick tag-list-block\">
                <div class=\"uv-aside-ticket-labels\">
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Tags'|trans }}</label>

                        {% if user_service.isAccessAuthorized('ROLE_AGENT_ADD_TAG') %}
                            <div class=\"uv-field-block\">
                                <input class=\"uv-field uv-dropdown-other\" name=\"tag-name\" type=\"text\" data-type=\"tag\" value=\"\">
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>{{ 'Filter With'|trans }}</label>
                                        <ul class=\"\">
                                            <span class=\"uv-filter-info\">{{ 'Type atleast 2 letters'|trans }}</span>
                                            <span class=\"uv-no-results\" style=\"display: none;\">{{ 'No result found'|trans }}</span>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                    </div>

                    <div class=\"tag-list\" style=\"margin-top: 10px\"></div>
                </div>
            </div>
        </div>

        <div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\" >
            <div class=\"uv-ticket-scroll-region {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view-tv{% endif %}\" >
                {# Ticket Header CTA #}
                <div class=\"uv-ticket-action-bar\">
                    <div class=\"uv-ticket-action-bar-lt\">
                        <div class=\"uv-header-fix\"><a href=\"#\" class=\"uv-icon-pin\"></a></div>

                        {# Thread Actions #}
                        <div class=\"uv-tabs\">
                            <ul>
                                {# Filter Threads #}
                                <li for=\"default\" data-type=\"all\" class=\"uv-tab-active\">{{ 'All Threads'|trans }}</li>
                                <li for=\"default\" data-type=\"reply\">{{ 'Replies'|trans }}</li>
                                <li for=\"default\" data-type=\"forward\">{{ 'Forwards'|trans }}</li>
                                <li for=\"default\" data-type=\"note\">{{ 'Notes'|trans }}</li>
                                <li for=\"default\" data-type=\"pinned\">{{ 'Pinned'|trans }}</li>

                                {# Update Threads #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_EDIT_TICKET') or user_service.isAccessAuthorized('ROLE_AGENT_DELETE_TICKET') %}
                                    <li class=\"uv-tab-ellipsis uv-ticket-action\">
                                        <span class=\"uv-icon-ellipsis uv-dropdown-other\"></span>

                                        <div class=\"uv-dropdown-list uv-bottom-right\">
                                            <div class=\"uv-dropdown-container\">
                                                <ul class=\"priority\" data-action=\"priority\">
                                                    {% if user_service.isAccessAuthorized('ROLE_AGENT_EDIT_TICKET') %}
                                                        <li data-action=\"edit\" class=\"uv-open-popup\" data-target=\"edit-ticket-modal\">{{ 'Edit Ticket'|trans }}</li>
                                                    {% endif %}

                                                    <li data-action=\"print\">{{ 'Print Ticket'|trans }}</li>

                                                    {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_STATUS') %}
                                                        <li data-action=\"spam\" data-index=\"6\">{{ 'Mark as Spam'|trans }}</li>
                                                        <li data-action=\"closed\" data-index=\"5\">{{ 'Mark as Closed'|trans }}</li>
                                                    {% endif %}

                                                    {% if user_service.isAccessAuthorized('ROLE_AGENT_DELETE_TICKET') %}
                                                        <li data-action=\"delete\" class=\"uv-text-danger\">{{ 'Delete Ticket'|trans }}</li>
                                                    {% endif %}
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                {% endif %}
                            </ul>
                        </div>
                    </div>

                    <div class=\"uv-ticket-action-bar-rt\">
                        {{ uvdesk_extensibles.getRegisteredComponent(\"Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Tickets\\\\WidgetCollection\").embedSideFilterIcons()|raw }}
                    </div>
                </div>

                {# Ticket Active Users #}
                <div class=\"uv-ticket-viewer-bar\">
                    <div class=\"uv-ticket-viewer-list\">
                        <div class=\"uv-ticket-viewer-single uv-first\" title=\"Currently active agents on ticket...\">
                            <span class=\"uv-icon-eye-light\"></span>
                        </div>
                    </div>
                </div>

                {# Ticket Header #}
                <div class=\"uv-ticket-head\">
                    <div class=\"uv-ticket-head-lt\">
                        <span class=\"uv-star-large {{ ticket.isStarred ? 'uv-star-active' : '' }} uv-star uv-margin-right-5\"></span>
                    </div>

                    <div class=\"uv-ticket-head-rt\">
                        <h1>{{ ticket.subject }}</h1>
                    </div>
                </div>

                <div class=\"uv-ticket-strip\">
                    <span>
                        <span class=\"uv-ticket-strip-label\">{{ 'Created'|trans }} - </span>
                        <span class=\"timeago uv-margin-0\" data-timestamp=\"{{ ticket.createdAt.getTimestamp() }}\" title=\"{{ ticket.createdAt.format('d-m-Y h:ia') }}\">{{ ticket_service.timeZoneConverter(ticket.createdAt) }}</span>
                    </span>

                    <span>
                        <span class=\"uv-ticket-strip-label\">{{ 'By'|trans }} - </span> {{ initialThread.user.name }}
                        {% if totalCustomerTickets %}
                            (<a id=\"more-tickets-btn\" href=\"{{ path('helpdesk_member_ticket_collection') }}#customer/{{customer.id}}\" target=\"_blank\">{{ 'count more tickets'|trans({'count': totalCustomerTickets}) }}</a>)
                        {% endif %}
                    </span>

                    <span class=\"agent-info\" style=\"{{ ticketAgent ? '' : 'display: none' }}\">
                        <span class=\"uv-ticket-strip-label\">{{ 'Agent'|trans }} - </span>
                        <span class=\"name\">{{ ticketAgent ? ticketAgent.name : '' }}</span>
                        {% if user_service.isAccessAuthorized('ROLE_AGENT_MANAGE_AGENT') and ticketAgent is defined and ticketAgent is not empty %}
                            <span class=\"uv-quick-view-trigger\" title=\"Agent access details\" data-placement=\"bottom\" data-id=\"<%= id %>\"></span>
                        {% endif %}
                    </span>

                    {# Ticket Kudos Rating By customer #}
                    <span>
                        {% if ticketRating %}
                            <span class=\"kudos-rating\">
                                {% if ticketRating == 1 %}
                                    <span class='ticket-rating-common ticket-rating-1'>
                                        <span class=\"uv-icon-kudos-rating\"></span>
                                        <span class=\"uv-icon-kudos-rating-label\"  title=\"Client is very sad\">
                                            {{ 'Very Sad'|trans }}
                                        </span>
                                    </span>
                                {% elseif ticketRating == 2 %}
                                    <span class='ticket-rating-common ticket-rating-2'>
                                        <span class=\"uv-icon-kudos-rating\"></span>
                                        <span class=\"uv-icon-kudos-rating-label\" title=\"Client is sad\">
                                            {{ 'Sad'|trans }}
                                        </span>
                                    </span>
                                {% elseif ticketRating == 3 %}
                                    <span class='ticket-rating-common ticket-rating-3'>
                                        <span class=\"uv-icon-kudos-rating\"></span>
                                        <span class=\"uv-icon-kudos-rating-label\" title=\"Client is neutral\">
                                            {{ 'Neutral'|trans }}
                                        </span>
                                    </span>
                                {% elseif ticketRating == 4 %}
                                    <span class='ticket-rating-common ticket-rating-4'>
                                        <span class=\"uv-icon-kudos-rating\"></span>
                                        <span class=\"uv-icon-kudos-rating-label\" title=\"Client is happy\">
                                            {{ 'Happy'|trans }}
                                        </span>
                                    </span>
                                {% else %}
                                    <span class='ticket-rating-common ticket-rating-5'>
                                        <span class=\"uv-icon-kudos-rating\"></span>
                                        <span class=\"uv-icon-kudos-rating-label\" title=\"Client is very happy\">
                                            {{ 'Very Happy'|trans }}
                                        </span>
                                    </span>
                                {% endif %}
                            </span>
                        {% endif %}
                    </span>
                </div>

                {# Thread Tab View #}
                <div class=\"uv-tab-view uv-tab-view-active\" id=\"default\">
                    <div class=\"uv-ticket-section\">
                        <div class=\"uv-ticket-main create\">
                            <div class=\"uv-ticket-strip\">
                                <span>
                                    <span class=\"timeago uv-margin-0\" data-timestamp=\"{{ ticket.createdAt.getTimestamp() }}\" title=\"{{ ticket.createdAt.format('d-m-Y h:ia') }}\">{{ ticket_service.timeZoneConverter(ticket.createdAt) }}</span>
                                    - {{ initialThread.user.name }} <span class=\"uv-ticket-strip-label\">{{ 'created Ticket'|trans }}</span>
                                </span>
                                {% if initialThread.cc != '' %}
\t\t\t\t\t\t\t\t\t<div class=\"uv-ticket-strip\">
\t\t\t\t\t\t\t\t\t\t<span><span class=\"uv-ticket-strip-label\">{{ 'CC'|trans }} -</span> {{ initialThread.cc }}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}      
                            </div>

                            <div class=\"uv-ticket-main-lt\">
                               <img src=\"{{ initialThread.user.thumbnail ? app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') ~ (initialThread.user.thumbnail) : initialThread.createdBy == 'customer' ? asset(default_customer_image_path) : asset(default_agent_image_path) }}\">
                            </div>

                            <div class=\"uv-ticket-main-rt\">
                                {% if initialThread.createdBy == 'customer' %}
                                    <a href=\"{{ path('helpdesk_member_manage_customer_account') }}/{{ initialThread.user.id}}\" class=\"uv-ticket-member-name\">{{ initialThread.user.name }}</a>
                                {% else %}
                                    {% if initialThread.user %}
                                        <a href=\"{{ path('helpdesk_member_account') }}/{{ initialThread.user.id}}\" class=\"uv-ticket-member-name\">{{ initialThread.user.name }}</a>
                                    {% else %}
                                        <a class=\"uv-ticket-member-name\">{{ initialThread.user.name }}</a>
                                    {% endif %}
                                {% endif %}

                                {# Ticket Message #}
                                <div class=\"message\">
                                    <p>
                                        {% if initialThread.message|striptags == initialThread.message %}
                                            {{ initialThread.message|nl2br }}
                                        {% else %}
                                            {{ initialThread.message|raw }}
                                        {% endif %}
                                    </p>
                                </div>

                                {# Ticket Attachments #}
                                {% if initialThread.attachments|length %}
                                    <div class=\"uv-ticket-uploads\">
                                        <h4>{{ 'Uploaded Files'|trans }}</h4>
                                        <div class=\"uv-ticket-uploads-strip\">
                                            {% for attachment in initialThread.attachments %}
                                                <a href=\"{{ attachment.downloadURL }}\" target = \"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"{{ attachment.name }}\">
                                                    <img src=\"{{ attachment.iconURL }}\"  class=\"uv-auto-pointer-events\"/>
                                                </a>
                                            {% endfor %}
                                        </div>

                                        {% if initialThread.attachments|length > 1 %}
                                            <div class=\"uv-upload-actions\">
                                                <a href=\"#\" class=\"uv-open-in-files\" data-thread=\"{{ initialThread.id }}\" style=\"display: none\"><span class=\"uv-icon-open-in-files\"></span>{{ 'Open in Files'|trans }}</a>
                                                {% if initialThread.attachments|length %}
                                                    <a href=\"{{ path('helpdesk_member_ticket_download_attachment_zip') }}/{{ initialThread.id }}\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> Download (as .zip)</a>
                                                {% endif %}
                                            </div>
                                        {% endif %}
                                    </div>
                                {% endif %}
                            </div>
                        </div>

                        <div class=\"uv-ticket-accordion\">
                            <div class=\"uv-ticket-count-wrapper\">
                                <span class=\"uv-ticket-count-stat\">{{ totalReplies }}</span>
                            </div>

                            <div class=\"uv-ticket-wrapper thread-list\"></div>
                        </div>
                    </div>
                </div>

                {# Reply Ticket View #}
                <div class=\"uv-ticket-main uv-ticket-reply uv-no-error-success-icon\">
                    <div class=\"uv-ticket-main-lt\">
                        <span class=\"uv-icon-ellipsis\"></span>
                        <img src=\"{{ currentUserDetails.thumbnail ? app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') ~ currentUserDetails.thumbnail : asset(default_agent_image_path) }}\" />
                    </div>

                    <div class=\"uv-ticket-main-rt\">
                        <span class=\"uv-ticket-member-name\">{{ currentUserDetails.name }}</span>
                        <div class=\"uv-tabs\">
                            <ul>
                                <li for=\"reply\" class=\"uv-tab-active\">{{ 'Reply'|trans }}</li>
                                <li for=\"forward\">{{ 'Forward'|trans }}</li>
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_ADD_NOTE') %}
                                    <li for='note'>{{ 'Note'|trans }}</li>
                                {% endif %}
                            </ul>
                        </div>

                        {# Ticket Thread | Add Reply #}
                        <div class=\"uv-tab-view uv-tab-view-active\" id=\"reply\">
                            <form enctype=\"multipart/form-data\" method=\"post\" action=\"{{ path('helpdesk_member_add_ticket_thread', {'ticketId': ticket.id }) }}\">
                                <input name=\"threadType\" value=\"reply\" type=\"hidden\">
                                <input name=\"status\" value=\"\" type=\"hidden\" {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_STATUS') %}class=\"reply-status\"{% endif %}>
                                <div class=\"uv-element-block collaborators\" style=\"display: none\">
                                    <label class=\"uv-field-label\">{{ 'Collaborators'|trans }}</label>
                                    <div class=\"uv-field-block\"></div>
                                </div>

                                <div class=\"uv-element-block cc-bcc\">
                                    <label>
                                        <div class=\"uv-checkbox\">
                                            <input type=\"checkbox\" class=\"cc-bcc-toggle\">
                                            <span class=\"uv-checkbox-view\"></span>
                                        </div>
                                        <span class=\"uv-checkbox-label\">CC/BCC</span>
                                    </label>

                                    <div class=\"uv-field-block\" style=\"display: none\">
                                        <div class=\"uv-group\">
                                            <input class=\"uv-group-field uv-dropdown-other preloaded uv-manual-enter\" type=\"text\">
                                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                                <div class=\"uv-dropdown-container\">
                                                    <label>{{ 'Agent'|trans }}</label>
                                                </div>

                                                <ul class=\"uv-agents-list\">
                                                    {% for agent in user_service.getAgentPartialDataCollection %}
                                                        <li data-id=\"{{ agent.email }}\">
                                                            <img src=\"{{ agent.smallThumbnail ? app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') ~ agent.smallThumbnail : asset(default_agent_image_path) }}\"/> {{agent.name}}
                                                        </li>
                                                    {% endfor %}

                                                    <li class=\"uv-no-results\" style=\"display: none;\">{{ 'No result found'|trans }}</li>
                                                </ul>
                                            </div>
                                            <select class=\"uv-group-select cc-bcc-select\">
                                                <option value=\"bcc\">{{ 'BCC'|trans }}</option>
                                                <option value=\"cc\">{{ 'CC'|trans }}</option>
                                            </select>
                                        </div>

                                        <div class=\"cc-bcc-list\"></div>
                                    </div>
                                </div>

                                <div class=\"uv-element-block uv-element-block-textarea\">
                                    <label class=\"uv-field-label\">{{ 'Write a reply'|trans }}</label>
                                    <div class=\"uv-field-block\">
                                        <textarea class=\"uv-field\" name=\"reply\" id=\"reply-area\">{{ ticket_service.getAgentDraftReply() }}</textarea>
                                    </div>
                                </div>

                                <div class=\"uv-element-block attachment-block\">
                                    <label>
                                        <span class=\"uv-file-label\">{{ 'Add Attachment'|trans }}</span>
                                    </label>
                                </div>

                                <div class=\"uv-action-buttons\">
                                    <div class=\"uv-dropdown next-view\">
                                        <input type=\"hidden\" name=\"nextView\" value=\"stay\"/>
                                        <div class=\"uv-dropdown-btn\" style=\"padding: 9px 27px 9px 10px;\">{{ 'Stay on ticket'|trans }}</div>
                                        <div class=\"uv-dropdown-list uv-top-left\" style=\"opacity: 1;\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>{{ 'After Reply'|trans }}</label>
                                                <ul>
                                                    <li data-value=\"stay\">{{ 'Stay on ticket'|trans }}</li>
                                                    <li data-value=\"redirect\">{{ 'Redirect to list'|trans }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"uv-dropdown reply\">
                                        <div class=\"uv-btn uv-dropdown-other\">{{ 'Reply'|trans }} <span class=\"uv-icon-down-light\"></span></div>
                                        <div class=\"uv-dropdown-list uv-top-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>{{ 'Reply'|trans }}</label>
                                                <ul>
                                                    <li data-id=\"\">{{ 'Submit'|trans }}</li>
                                                    {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_STATUS') %}
                                                        <li data-id=\"open\">{{ 'Submit And Open'|trans }}</li>
                                                        <li data-id=\"pending\">{{ 'Submit And Pending'|trans }}</li>
                                                        <li data-id=\"answered\">{{ 'Submit And Answered'|trans }}</li>
                                                        <li data-id=\"resolved\">{{ 'Submit And Resolved'|trans }}</li>
                                                        <li data-id=\"closed\">{{ 'Submit And Closed'|trans }}</li>
                                                    {% endif %}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        {# Ticket Thread | Forward Thread #}
                        <div class=\"uv-tab-view\" id=\"forward\">
                            <form enctype=\"multipart/form-data\" method=\"post\" action=\"{{ path('helpdesk_member_add_ticket_thread', {'ticketId': ticket.id }) }}\">
                                <input name=\"threadType\" value=\"forward\" type=\"hidden\">
                                <input name=\"status\" value=\"\" type=\"hidden\" {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_STATUS') %}class=\"reply-status\"{% endif %}>

                                <div class=\"uv-element-block\">
                                    <label class=\"uv-field-label\">{{ 'Subject'|trans }}</label>
                                    <div class=\"uv-field-block\">
                                        <input class=\"uv-field\" type=\"text\" name=\"subject\">
                                    </div>
                                </div>

                                <div class=\"uv-element-block to\">
                                    <label class=\"uv-field-label\">{{ 'To'|trans }}</label>
                                    <div class=\"uv-field-block\">
                                        <input class=\"uv-field uv-dropdown-other preloaded uv-to-message uv-manual-enter\" type=\"text\">

                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>{{ 'Agent'|trans }}</label>
                                            </div>

                                            <ul class=\"uv-agents-list\">
                                                {% for agent in user_service.getAgentPartialDataCollection %}
                                                    <li data-id=\"{{ agent.email }}\">
                                                        <img src=\"{{ agent.smallThumbnail ? app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') ~ agent.smallThumbnail : asset(default_agent_image_path) }}\"/> {{agent.name}}
                                                    </li>
                                                {% endfor %}

                                                <li class=\"uv-no-results\" style=\"display: none;\">{{ 'No result found'|trans }}</li>
                                            </ul>
                                        </div>

                                        <div class=\"to-list\"></div>
                                    </div>
                                </div>

                                <div class=\"uv-element-block cc-bcc\">
                                    <label>
                                        <div class=\"uv-checkbox\">
                                            <input type=\"checkbox\" class=\"cc-bcc-toggle\">
                                            <span class=\"uv-checkbox-view\"></span>
                                        </div>
                                        <span class=\"uv-checkbox-label\">CC/BCC</span>
                                    </label>
                                    <div class=\"uv-field-block\" style=\"display: none\">
                                        <div class=\"uv-group\">
                                            <input class=\"uv-group-field uv-dropdown-other preloaded uv-manual-enter\" type=\"text\">
                                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                                <div class=\"uv-dropdown-container\"><label>{{ 'Agent'|trans }}</label></div>

                                                <ul class=\"uv-agents-list\">
                                                    {% for agent in user_service.getAgentPartialDataCollection %}
                                                        <li data-id=\"{{ agent.email }}\">
                                                            <img src=\"{{ agent.smallThumbnail ? app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') ~ agent.smallThumbnail : asset(default_agent_image_path) }}\"/> {{agent.name}}
                                                        </li>
                                                    {% endfor %}

                                                    <li class=\"uv-no-results\" style=\"display: none;\">{{ 'No result found'|trans }}</li>
                                                </ul>
                                            </div>
                                            <select class=\"uv-group-select cc-bcc-select\">
                                                <option value=\"bcc\">{{ 'BCC'|trans }}</option>
                                                <option value=\"cc\">{{ 'CC'|trans }}</option>
                                            </select>
                                        </div>

                                        <div class=\"cc-bcc-list\"></div>
                                    </div>
                                </div>

                                <div class=\"uv-element-block uv-element-block-textarea\">
                                    <label class=\"uv-field-label\">{{ 'Write a reply'|trans }}</label>
                                    <div class=\"uv-field-block\">
                                        <textarea class=\"uv-field\" name=\"reply\" id=\"forward-area\">{{ ticket_service.getAgentDraftReply() }}</textarea>
                                    </div>
                                </div>

                                <div class=\"uv-element-block attachment-block\">
                                    <label><span class=\"uv-file-label\">{{ 'Add Attachment'|trans }}</span></label>
                                </div>

                                <div class=\"uv-action-buttons\">
                                    <div class=\"uv-dropdown next-view\">
                                        <input type=\"hidden\" name=\"nextView\" value=\"stay\"/>
                                        <div class=\"uv-dropdown-btn\" style=\"padding: 9px 27px 9px 10px;\">{{ 'Stay on ticket'|trans }}</div>
                                        <div class=\"uv-dropdown-list uv-top-left\" style=\"opacity: 1;\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>{{ 'After Reply'|trans }}</label>
                                                <ul>
                                                    <li data-value=\"stay\">{{ 'Stay on ticket'|trans }}</li>
                                                    <li data-value=\"redirect\">{{ 'Redirect to list'|trans }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"uv-btn forward\">{{ 'Forward'|trans }}</div>
                                </div>
                            </form>
                        </div>

                        {# Ticket Thread | Add Note #}
                        {% if user_service.isAccessAuthorized('ROLE_AGENT_ADD_NOTE') %}
                            <div class=\"uv-tab-view\" id=\"note\">
                                <form enctype=\"multipart/form-data\" method=\"post\" action=\"{{ path('helpdesk_member_add_ticket_thread', {'ticketId': ticket.id }) }}\">
                                    <input name=\"threadType\" value=\"note\" type=\"hidden\">
                                    <input name=\"status\" value=\"\" type=\"hidden\" {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_STATUS') %}class=\"reply-status\"{% endif %}>

                                    <div class=\"uv-element-block uv-element-block-textarea\">
                                        <label class=\"uv-field-label\">{{ 'Write a reply'|trans }}</label>
                                        <div class=\"uv-field-block\">
                                            <textarea class=\"uv-field\" name=\"reply\" id=\"note-area\">{{ ticket_service.getAgentDraftReply() }}</textarea>
                                        </div>
                                    </div>

                                    <div class=\"uv-element-block attachment-block\">
                                        <label><span class=\"uv-file-label\">{{ 'Add Attachment'|trans }}</span></label>
                                    </div>

                                    <div class=\"uv-action-buttons\">
                                        <div class=\"uv-dropdown next-view\">
                                            <input type=\"hidden\" name=\"nextView\" value=\"stay\"/>
                                            <div class=\"uv-dropdown-btn\" style=\"padding: 9px 27px 9px 10px;\">{{ 'Stay on ticket'|trans }}</div>
                                            <div class=\"uv-dropdown-list uv-top-left\" style=\"opacity: 1;\">
                                                <div class=\"uv-dropdown-container\">
                                                    <label>{{ 'After Reply'|trans }}</label>
                                                    <ul>
                                                        <li data-value=\"stay\">{{ 'Stay on ticket'|trans }}</li>
                                                        <li data-value=\"redirect\">{{ 'Redirect to list'|trans }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"uv-dropdown reply\">
                                            <div class=\"uv-btn uv-dropdown-other\">{{ 'Reply'|trans}}<span class=\"uv-icon-down-light\"></span></div>

                                            <div class=\"uv-dropdown-list uv-top-left\">
                                                <div class=\"uv-dropdown-container\">
                                                    <label>{{ 'Add Note'|trans }}</label>
                                                    <ul>
                                                        <li data-id=\"\">{{ 'Submit'|trans }}</li>
                                                        {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_STATUS') %}
                                                            <li data-id=\"open\">{{ 'Submit And Open'|trans }}</li>
                                                            <li data-id=\"pending\">{{ 'Submit And Pending'|trans }}</li>
                                                            <li data-id=\"answered\">{{ 'Submit And Answered'|trans }}</li>
                                                            <li data-id=\"resolved\">{{ 'Submit And Resolved'|trans }}</li>
                                                            <li data-id=\"closed\">{{ 'Submit And Closed'|trans }}</li>
                                                        {% endif %}
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>

            <!-- Bottom Action Block -->
            <div class=\"uv-ticket-fixed-region\">
                <div class=\"uv-ticket-fixed-region-lt\">
                    {{ uvdesk_extensibles.getRegisteredComponent(\"Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Tickets\\\\QuickActionButtonCollection\").injectTemplates()|raw }}
                </div>

                <div class=\"uv-ticket-fixed-region-rt\"></div>
            </div>
            <!-- //Bottom Action Block -->
        </div>
    </div>

    {# Edit Ticket #}
    {% if user_service.isAccessAuthorized('ROLE_AGENT_EDIT_TICKET') %}
        <div class=\"uv-pop-up-overlay uv-no-error-success-icon\" id=\"edit-ticket-modal\">
            <div class=\"uv-pop-up-box uv-pop-up-wide\">
                <span class=\"uv-pop-up-close\"></span>
                <h2>{{ 'Edit Ticket'|trans }}</h2>

                {# Edit Ticket Form #}
                <form method=\"post\" action=\"{{ path('helpdesk_member_update_ticket_details_xhr', {'ticketId': ticket.id}) }}\" id=\"edit-ticket-form\">
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Subject'|trans }}</label>
                        <div class=\"uv-field-block\">
                            <input type=\"text\" name=\"subject\" class=\"uv-field\" value=\"{{ ticket.subject }}\" />
                        </div>
                    </div>
                    
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Reply'|trans }}</label>
                        <div class=\"uv-field-block\">
                            {% if initialThread.message|striptags == initialThread.message %}
                                <textarea name=\"reply\" id=\"uv-edit-create-thread\" class=\"uv-field\">{{ initialThread.message|nl2br }}</textarea>
                            %} {% else %}
                                <textarea name=\"reply\" id=\"uv-edit-create-thread\" class=\"uv-field\">{{ initialThread.message|raw }}</textarea>
                            {% endif %}
                        </div>
                    </div>

                    <div class=\"uv-pop-up-actions\">
                        <input class=\"uv-btn update\" href=\"#\" value=\"Update\" type=\"submit\">
                        <input class=\"uv-btn cancel\" href=\"#\" value=\"Discard\" type=\"button\">
                    </div>
                </form>
            </div>
        </div>
    {% endif %}

    {{ uvdesk_extensibles.getRegisteredComponent(\"Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Tickets\\\\WidgetCollection\").embedSideFilterContent()|raw }}
{% endblock %}

{% block footer %}
    {{ parent() }}

    {{ include('@UVDeskCoreFramework\\\\Templates\\\\attachment.html.twig') }}
    {{ include(\"@UVDeskCoreFramework/Templates/tinyMCE.html.twig\") }}

    <script id=\"thread_list_empty_tmp\" type=\"text/template\">
        <div class=\"uv-no-threads\">{{ 'Nothing interesting here...'|trans }}</div>
    </script>

    <script> 
        \$(document).ready(function() {
            function setupFilter(inputSelector, listSelector) {
                \$(inputSelector).on(\"keyup\", function () {
                    const value = this.value.toLowerCase();
                    const \$items = \$(listSelector + \" li\");
                    if (value) {
                        \$items.hide().filter(function () {
                            return \$(this).html().toLowerCase().includes(value);
                        }).show();
                    } else {
                        \$items.show();
                    }
                });
            }

            setupFilter(\"#filterSavedreplies\", \"#listSavedReplies\");
            setupFilter(\"#filterPreparedResponse\", \"#listPreparedResponses\");

            \$(\".uv-dropdown-btn\").click(function(event) {
                setTimeout(function() {
                    \$(\".uv-search-inline\").focus();
                }, 100);
            });
        });
    </script>

    <script id=\"thread_list_item_tmp\" type=\"text/template\">
        <div class=\"uv-ticket-strip\">
            <span>
                <% if(typeof(mailStatus) != 'undefined' && mailStatus) { %>
                    <a href=\"https://support.uvdesk.com/en/blog/uvdesk-ticket-delivery-status\" target=\"_blank\">
                        <span class=\"uv-mail-status uv-mail-<%- mailStatus.split(',')[0] %>\" <% if(mailStatus !== 'pending') { %>data-toggle=\"tooltip\" data-placement=\"right\" title=\"{{ 'Mail status:'|trans }} <%- mailStatus.split(',')[0] %> <% if(mailStatus.split(',').length > 1) { print('Reason:' + mailStatus.split(',')[1] ); } %> \"<% } %> ></span>
            </a>
            <% } %>
            <span class=\"timeago uv-margin-0\" data-timestamp=\"<%- timestamp %>\" title=\"<%- formatedCreatedAt %>\">
                    <%- formatedCreatedAt %>
                </span>
            - <%- fullname %>
            <span class=\"uv-ticket-strip-label\">
                <% if (threadType == 'reply') { %>
                    {{ 'replied'|trans }}
                <% } else if(threadType == 'note') { %>
                    {{ 'added note'|trans }}
                <% } else if(threadType == 'forward') { %>
                    {{ 'forwarded'|trans }}
                <% } %>
                - <a href=\"#thread/<%- id %>\" id=\"thread<%- id %>\" class=\"copy-thread-link\">#<%- id %></a>
                </span>
            </span>

            <% if ((replyTo && threadType ==  'forward') || cc || bcc) { %>
                <div class=\"uv-ticket-strip\">
                    <% if (replyTo && threadType ==  'forward') { %>
                    <span><span class=\"uv-ticket-strip-label\">{{ 'TO'|trans }} -</span> <%- replyTo %></span>
                    <% } if (cc) { %>
                    <span><span class=\"uv-ticket-strip-label\">{{ 'CC'|trans }} -</span> <%- cc %></span>
                    <% } if (bcc) { %>
                    <span><span class=\"uv-ticket-strip-label\">{{ 'BCC'|trans }} -</span> <%- bcc %></span>
                    <% } %>
                </div>
            <% } %>
        </div>

        <div class=\"uv-ticket-strip uv-margin-top-5\" <% if(!bookmark && !isLocked) { %>style=\"display: none\"<% } %> >
            <span <% if(!bookmark) { %>style=\"display: none\"<% } %> >
                    <span class=\"uv-icon-pinned\"></span>
                    {{ 'Pinned'|trans }}
                    </span>
            <span <% if(!isLocked) { %>style=\"display: none\"<% } %> >
                <span class=\"uv-icon-locked\"></span>
                {{ 'Locked'|trans }}
            </span>
        </div>
        <div class=\"uv-ticket-main-lt\">
            <span class=\"uv-thread-action\">
                <span class=\"uv-icon-ellipsis uv-dropdown-other\"></span>
                <div class=\"uv-dropdown-list uv-bottom-left\">
                    <div class=\"uv-dropdown-container\">
                        <ul>
                            {% if user_service.isAccessAuthorized('ROLE_AGENT_EDIT_THREAD_NOTE') %}
                                <% if (userType != 'system' && userType != 'System') { %>
                                    <li data-action=\"edit\">{{ 'Edit Thread'|trans }}</li>
                                <% } %>
                            {% endif %}
                            {% if user_service.isAccessAuthorized('ROLE_AGENT_DELETE_THREAD_NOTE') %}
                                <li data-action=\"delete\">{{ 'Delete Thread'|trans }}</li>
                            {% endif %}
                            <li data-action=\"forward\">{{ 'Forward'|trans }}</li>
                            <% if(bookmark) { %>
                                <li data-action=\"pin\" data-id=\"1\">{{ 'Unpin Thread'|trans }}</li>
                            <% } else { %>
                                <li data-action=\"pin\" data-id=\"0\">{{ 'Pin Thread'|trans }}</li>
                            <% } %>
                            <% if(threadType != 'note') { %>
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_MANAGE_LOCK_AND_UNLOCK_THREAD') %}
                                    <% if(isLocked) { %>
                                        <li data-action=\"lock\" data-id=\"1\">{{ 'Unlock Thread'|trans }}</li>
                                    <% } else { %>
                                        <li data-action=\"lock\" data-id=\"0\">{{ 'Lock Thread'|trans }}</li>
                                    <% } %>
                                {% endif %}
                            <% } %>
                            <li style=\"display: none;\" data-action=\"translate\">{{ 'Translate Thread'|trans }}</li>
                        </ul>
                    </div>
                </div>
            </span>
            <span class=\"p-relative\">
                
            </span>
            <% if (userType != 'system' && userType != 'System') { %>
                <% if(user && user.smallThumbnail != null) { %>
                    <img src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}<%- user.smallThumbnail %>\" />
                <% } else { %>
                    <img src=\"<% if(userType == 'agent') { %> {{ asset(default_agent_image_path) }} <% } else { %> {{ asset(default_customer_image_path) }} <% } %>\" />
                <% } %>
            <% } else { %>
                <img src=\"{{ asset(default_helpdesk_image_path) }}\" />
            <% } %>
        </div>
        <div class=\"uv-ticket-main-rt\">
            <% if(userType == 'customer') { %>
                <a <% if(user) { %>href=\"{{ path('helpdesk_member_manage_customer_account') }}/<%- user.id %>\"<% } %> class=\"uv-ticket-member-name\">
                <%- fullname %>
                </a>
            <% } else if(userType == 'agent') { %>
                <a <% if(user) { %>href=\"{{ path('helpdesk_member_account') }}/<%- user.id %>\"<% } %> class=\"uv-ticket-member-name\">
                <%- fullname %>
                </a>
            <% } else { %>
                <span class=\"uv-ticket-member-name\">
                    <%- fullname %>
                </span>
            <% } %>

            <!-- Message Block -->
            <div class=\"message\">
                <%= reply %>
            </div>

            <!-- Attachment Block -->
            <% if(attachments.length) { %>
            <div class=\"uv-ticket-uploads\">
                <h4>{{ 'Uploaded Files'|trans }}</h4>
                <div class=\"uv-ticket-uploads-strip\">
                    <% _.each(attachments, function(file) { %>
                    <a href=\"<%-file.downloadURL %>\" target =\"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"<%- file.name %>\">
                        <img src=\"<%-file.iconURL %>\" class=\"uv-auto-pointer-events\">
                    </a>
                    <% }) %>
                </div>

                <% if (attachments.length > 1) { %>
                <div class=\"thread-attachments-zip pull-left\">
                    <div class=\"uv-upload-actions\">
                        <a href=\"#\" class=\"uv-open-in-files\" data-thread=\"<%- id %>\" style=\"display: none\"><span class=\"uv-icon-open-in-files\"></span>{{ 'Open in Files'|trans }}</a>
                        <% if(attachments.length > 0) { %>
                        <a href=\"{{ path('helpdesk_member_ticket_download_attachment_zip') }}/<%- id %>\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> {{ 'Download (as .zip)'|trans }}</a>
                        <% } %>
                    </div>
                </div>
                <% } %>

            </div>
            <% } %>
        </div>
    </script>

    <script id=\"edit_thread_tmp\" type=\"text/template\">
        <div class=\"thread-edit-container\">
            <div class=\"uv-element-block uv-element-block-textarea\">
                <div class=\"uv-field-block\">
                    <textarea id=\"uv-edit-thread\">
                    </textarea>
                </div>
            </div>
            <div class=\"uv-action-buttons\">
                <a class=\"uv-btn cancel-edit\" type=\"button\">{{ 'Cancel'|trans }}</a>
                <a class=\"uv-btn saveThread\" type=\"button\" style=\"margin-right: 10px;\">{{ 'Update'|trans }}</a>
            </div>
        </div>
    </script>

    <script id=\"ticket_quick_navigation_tmp\" type=\"text/template\">
        <% if(prev) { %>
            <a class=\"uv-btn-stroke\" href=\"{{ path('helpdesk_member_ticket') }}/<%- prev %>\">
                <span class=\"uv-icon-previous\"></span>
                {{ 'Previous Ticket'|trans }}
            </a>
        <% } else { %>
            <a class=\"uv-btn-stroke\" disabled=\"disabled\">
                <span class=\"uv-icon-previous\"></span>
                {{ 'Previous Ticket'|trans }}
            </a>
        <% } %>

        <% if(next) { %>
            <a class=\"uv-btn-stroke\" href=\"{{ path('helpdesk_member_ticket') }}/<%- next %>\">
                {{ 'Next Ticket'|trans }}
                <span class=\"uv-icon-next\"></span>
            </a>
        <% } else { %>
            <a class=\"uv-btn-stroke\" disabled=\"disabled\">
                {{ 'Next Ticket'|trans }}
                <span class=\"uv-icon-next\"></span>
            </a>
        <% } %>
    </script>

    <script type=\"text/javascript\">
        uvdesk = {
            ticket: {}
        };

        var ticketApp = {};

        viewerImages = function() {
            if (typeof(\$().viewer == 'function')) {
                \$('.uv-ticket-uploads .uv-ticket-uploads-strip').viewer({
                    'url': 'data-url',
                    'downloadBase': \"{{ path('helpdesk_member_ticket_download_attachment') }}\",
                    'download': 'data-download',
                });
            }
        };

        \$(function () {
            var threadIds = [];
            viewerImages();

            _.extend(Backbone.Model.prototype, Backbone.Validation.mixin);

            // Ticket Model
            var TicketModel = Backbone.Model.extend({
                idAttribute : \"id\",
                urlRoot : \"{{ path('helpdesk_member_update_ticket_attributes_xhr') }}\",
                validation: {
                    'email': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\" | trans}}'
                    },{
                        pattern: /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                        msg: 'Please enter a valid email'
                    }],
                    'subject' : {
                        required : true,
                        msg : '{{ \"This field is mandatory\" | trans}}'
                    },
                    'reply' : {
                        fn: function(value) {
                            var content = tinyMCE.activeEditor.getContent();
\t\t\t\t\t\t\tcontent = content.replace(/&nbsp;/g, '').replace(/<[^>]*>/g, '');

\t\t\t\t\t\t\tif (content.trim() == '') {
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t}

                            if (! tinyMCE.get(\"uv-edit-create-thread\"))
                                return false;
                            var html = tinyMCE.get(\"uv-edit-create-thread\").getContent();
                            if (app.appView.stripHTML(html) != '') {
                                return false;
                            }
                            
                            return true;
                        },
                        msg : '{{ \"This field is mandatory\" | trans}}'
                    }
                },
            });

            // Thread Model
            var ThreadModel = Backbone.Model.extend({
                idAttribute : \"id\",
                defaults : {
                    hasTask : 0,
                    task: null
                }
            });

            // Customer Model
            var CustomerModel = Backbone.Model.extend({
                validation: {
                    'name': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\" }}'
                    }, {
                        pattern: /^((?![!@#\$%^&*()<_+]).)*\$/,
                        msg: '{{ \"This field must have characters only\"}}'
                    }],
                    'email': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\" | trans}}'
                    },{
                        pattern: /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                        msg: '{{ \"Email address is invalid\" | trans}}'
                    }],
                    'contactNumber': function(value) {
                        if(value != undefined && value !== '') {
                            if (!value.match('^\\\\s*(?:\\\\+?(\\\\d{1,3}))?[-. (]*(\\\\d{3})[-. )]*(\\\\d{3})[-. ]*(\\\\d{4})(?: *x(\\\\d+))?\\\\s*\$'))
                                return 'Contact number is invalid';
                        }
                    }
                },
                urlRoot : \"{{ path('helpdesk_member_manage_customer_account') }}\"
            });

            // Ticket Collaborator Model
            var CollaboratorModel = Backbone.Model.extend({
                idAttribute : \"id\",
                validation: {
                    'email': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\" | trans}}'
                    },{
                        pattern: /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                        msg: '{{ \"Please enter a valid email\" | trans}}'
                    }]
                },
                defaults : {
                    ticketId : {{ ticket.id }},
                    email: ''
                },
                parse: function (resp, options) {
                    return resp.collaborator;
                },
                urlRoot : \"{{ path('helpdesk_member_ticket_manage_collaborators_xhr') }}\"
            });

            // Ticket Tag Model
            var TagModel = Backbone.Model.extend({
                idAttribute : \"id\",
                defaults : {
                    ticketId : {{ ticket.id }}
                },
                parse: function (resp, options) {
                    return resp.tag;
                },
                urlRoot : \"{{ path('helpdesk_member_ticket_create_tag_xhr') }}\"
            });

            // Ticket Label Model
            var LabelModel = Backbone.Model.extend({
                idAttribute : \"id\",
                defaults : {
                    ticketId : {{ ticket.id }}
                },
                parse: function (resp, options) {
                    return resp.label;
                },
                urlRoot : \"{{ path('helpdesk_member_ticket_add_label_xhr') }}\"
            });

            // Ticket Thread Collection
            var ThreadCollection = AppCollection.extend({
                model : ThreadModel,
                mode: \"infinite\",
                url : \"{{ path('helpdesk_member_thread_collection_xhr', {'ticketId': ticket.id}) }}\",
                firstScrollCheck: false,
                threadRequestedId: false,
                template : \$(\"#thread_list_empty_tmp\").html(),
                parseRecords: function (resp, options) {
                    return resp.threads;
                },
                syncData : function() {
                    type = \$(\".uv-ticket-action-bar-lt .uv-tabs .uv-tab-active\").attr('data-type')
                    var self = this;
                    var data = {
                        threadType: type
                    };

                    if(this.threadRequestedId)
                        data.threadRequestedId = this.threadRequestedId;

                    app.appView.showLoader()
                    this.fetch({
                        data : data,
                        remove: false,
                        success: function(model, response) {
                            app.appView.hideLoader();
                            self.threadRequestedId = false;
                            pagination.renderPagination(response.pagination);
                            threadCollection.state.currentPage = parseInt(response.pagination.current) + 1;
                            if(response.pagination.totalCount <= 0){
                                this.\$('.uv-ticket-wrapper.thread-list').html(self.template);
                            }
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    }).done(function(){
                        viewerImages();
                        if(!self.firstScrollCheck){
                            self.firstScrollCheck = true;
                            var fragment = Backbone.history.fragment.trim();
                            if(fragment == '') {
                                router.scrollPage('#reply');
                            } else
                                router.scrollPage('#' + fragment.replace('thread/', 'thread'));
                        }
                    });
                }
            });

            // Ticket Collaborator Collection
            var CollaboratorCollection = Backbone.PageableCollection.extend({
                model : CollaboratorModel
            });

            // Ticket Tag Collection
            var TagCollection = Backbone.PageableCollection.extend({
                model : TagModel,
                isTagExist : function(name) {
                    var flag = 1;
                    _.each(tagCollection.models, function (item) {
                        if(item.get('name').toUpperCase() == name.toUpperCase())
                            flag = 0;
                    }, this);

                    return flag;
                }
            });

            // Ticket Label Collection
            var LabelCollection = Backbone.PageableCollection.extend({
                model : TagModel,
                isLabelExist : function(name) {
                    var flag = 1;
                    _.each(labelCollection.models, function (item) {
                        if(item.get('name').toUpperCase() == name.toUpperCase())
                            flag = 0;
                    }, this);
                    return flag;
                }
            });

            // Customer Form View
            var CustomerForm = Backbone.View.extend({
                events : {
                    'click .uv-btn.update-btn' : \"saveCustomer\",
                    'blur input': 'formChanged',
                    'click .cancel-btn': 'backToInfo',
                    'click .uv-aside-back': 'backToInfo'
                },
                initialize : function() {
                    Backbone.Validation.bind(this);
                },
                formChanged: function(e) {
                    this.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
                    this.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
                },
                saveCustomer: function (e) {
                    e.preventDefault();
                    currentElement = Backbone.\$(e.currentTarget);
                    this.model.clear();
                    this.model.set(this.\$el.find('form').serializeObject());
                    self = this;
                    if (this.model.isValid(true)) {
                        app.appView.showLoader();
                        currentElement.attr('disabled', 'disabled');
                        this.model.save({}, {
                            success: function (model, response, options) {
                                app.appView.hideLoader();
                                currentElement.removeAttr(\"disabled\");
                                if (response.alertClass == \"success\") {
                                    app.appView.renderResponseAlert(response);
                                    \$('.uv-aside-customer-info').html(\"<span>\" + self.model.attributes.name + \"</span><span>\" + self.model.attributes.email + \"</span><span>\" + self.model.attributes.contactNumber + \"</span><span class='uv-customize'></span>\")
                                    self.backToInfo();
                                } else if (response.errors) {
                                    self.addErrors(JSON.parse(response.errors));
                                } else if (response.alertMessage) {
                                    app.appView.renderResponseAlert(response);
                                }
                            },
                            error: function (model, xhr, options) {
                                if (url = xhr.getResponseHeader('Location'))
                                    window.location = url;

                                app.appView.hideLoader();
                                app.appView.renderResponseAlert(warningResponse);
                            }
                        });
                    }
                },
                addErrors: function(jsonContext) {
                    for (var field in jsonContext) {
                        Backbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
                    }
                },
                backToInfo: function(e) {
                    if (e)
                        e.preventDefault()

                    \$('.uv-main-info-update-block').hide()
                    \$('.uv-main-info-block').show()
                },
            });

            // Ticket View
            var TicketView = Backbone.View.extend({
                el: \$('.uv-wrapper'),
                stopDraftSaveFlag: 0,
                events: {
                    'click .uv-ticket-action .uv-dropdown-list li[data-action=\"spam\"], .uv-ticket-action .uv-dropdown-list li[data-action=\"closed\"]': 'markSpamAndClosed',
                    'click .uv-aside-ticket-actions .uv-aside-select .uv-dropdown-list li': 'editTicketProperty',
                    'click .uv-aside-customer-info .uv-customize': 'showCustomerUpdateBlock',
                    'click .uv-ticket-head .uv-star-large': 'updateStar',
                    'click .uv-ticket-action-bar .uv-tabs li': 'filterThread',
                    'click .uv-ticket-action .uv-dropdown-list li[data-action=\"delete\"]': 'confirmRemove',
                    'click .uv-ticket-action .uv-dropdown-list li[data-action=\"lock\"]': 'lockAndUnlockThread',
                    'click .uv-element-block.collaborators .uv-btn-tag': 'removeCcCollaborator',
                    'keypress .uv-element-block.to .uv-dropdown-other': 'addToInput',
                    'click .uv-element-block.to .uv-dropdown-list li': 'addTo',
                    'click .to-list .uv-btn-tag': 'removeTo',
                    'change .uv-element-block.cc-bcc .cc-bcc-toggle': 'showCcBccBlock',
                    'keypress .uv-element-block.cc-bcc .uv-group-field.uv-dropdown-other': 'addCcBccInput',
                    'click .uv-element-block.cc-bcc .uv-dropdown-list li': 'addCcBcc',
                    'click .cc-bcc-list .uv-btn-tag, .to-list .uv-btn-tag': 'removeEmail',
                    'click .next-view .uv-dropdown-list li': 'setNextView',
                    'click .uv-dropdown.reply .uv-dropdown-list li, .uv-btn.forward': 'validateForm',
                    'click #edit-ticket-modal .uv-btn.update': 'updateTicket',
                    'click .message .uv-icon-ellipsis': 'showReplyQuote',
                    'input .uv-aside-brick .uv-field.uv-dropdown-other': 'searchFilterXhr',
                    'click .uv-dropdown-container.prepared-responses a:not(.create-new)': 'confirmPreparedResponses',

                    'click .uv-header-fix': 'fixheader',
                    'click .uv-ticket-action .uv-dropdown-list li[data-action=\"print\"]': 'printTicket',
                    'blur .uv-manual-enter': 'enterManualAdd',
                    'click .uv-quick-view-trigger, .quick-view-navigation .uv-btn-tag': 'navigateQuickView',
                    'click .uv-grid-item': 'toggleAccordian',
                    'click #ticket-generate-customer-public-resource-access-link': 'generateCustomerPublicTicketResourceAccessLink',
                    'click .ticket-public-resource-access-link .copy-resource-link-to-clipboard': 'copyResourceLinkToClipboard',
                },
                ticketNavigationTemplate : _.template(\$(\"#ticket_quick_navigation_tmp\").html()),
                loaderTemplate : _.template(\$(\"#loader-tmp\").html()),
                targetPreparedResponseUrl: '',
                initialize: function() {
                    Backbone.Validation.bind(this);
                    InitTinyMce('#uv-edit-create-thread');
                    \$('.uv-ticket-fixed-region .uv-ticket-fixed-region-rt').html(this.ticketNavigationTemplate(ticketNavigation))
                    var threadTab = localStorage.getItem(\"threadTab\");
                    if (threadTab){
                        \$('.uv-ticket-action-bar-lt .uv-tabs li').removeClass('uv-tab-active');
                        \$('.uv-ticket-action-bar-lt .uv-tabs [data-type=\"' + threadTab + '\"]').addClass('uv-tab-active');
                    }
                    nextView = localStorage.getItem(\"nextView\");
                    if (nextView) {
                        \$(\".next-view input\").val(nextView)
                        \$(\".next-view .uv-dropdown-btn\").text(\$(\"#reply .next-view .uv-dropdown-list li[data-value='\" + nextView + \"']\").text())
                    }
                    if (!localStorage.getItem('ticketTour')) {
                        \$('.uv-ticket-tour').show()
                    }
                    this.fixHeaderInit();
                },
                printTicket: function(e) {
                    window.print();
                },
                enterManualAdd: function(e) {
                    var target = \$(e.target);
                    if (target.val()) {
                        var e = \$.Event(\"keypress\");
                        e.which = 13; //choose the one you want
                        target.trigger(e);
                    }
                },
                fixheader: function(e){
                    e.preventDefault();
                    var header = localStorage.getItem(\"fixHeader\");
                    header = !(header == 'true');
                    localStorage.setItem(\"fixHeader\", header);
                    this.fixHeaderInit();
                },
                fixHeaderInit: function(){
                    var header = localStorage.getItem(\"fixHeader\");
                    if (header == 'true') {
                        \$('a.uv-icon-pin').addClass('uv-icon-pinned');
                        \$('.uv-ticket-action-bar').addClass('uv-ticket-action-bar-fixed');
                    } else {
                        \$('a.uv-icon-pin').removeClass('uv-icon-pinned');
                        \$('.uv-ticket-action-bar').removeClass('uv-ticket-action-bar-fixed');
                    }
                },
                markSpamAndClosed: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    var value = currentElement.attr('data-index');
                    \$(\".uv-aside-select .uv-dropdown-list ul.status li[data-index='\" + value + \"']\").trigger('click')
                },
               
                generateCustomerPublicTicketResourceAccessLink: function (e) {
                    app.appView.showLoader();

                    \$.ajax({
                        url: \"{{ path('uvdesk_member_generate_ticket_public_resource_access_link', { id: ticket.id }) }}\",
                        type: 'POST',
                        dataType: 'json',
                        success: function(response) {
                            if (response.status == true) {
                                \$('#ticket-public-resource-access-link .resource-link').html(response.resourceUrl);
                                \$('#ticket-public-resource-access-link').addClass('visible');
                            } else {
                                app.appView.renderResponseAlert({
                                    alertClass: 'warning',
                                    alertMessage: response.message,
                                });
                            }

                            app.appView.hideLoader();
                        },
                        error: function (xhr) {
                            app.appView.renderResponseAlert({
                                alertClass: 'danger',
                                alertMessage: 'An unexpected error occurred while disabling generating public ticket resource link.'
                            });
                        }
                    });
                },
                copyResourceLinkToClipboard: function (e) {
                    let resourceLink = \$('#ticket-public-resource-access-link .resource-link').html();

                    copyContentToClipboard(resourceLink);
                },
                editTicketProperty: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    var uvSelect = currentElement.parents('.uv-aside-select');
                    var field = currentElement.parent().attr('data-action');
                    var value = currentElement.attr('data-index');
                    if(uvSelect.find('.uv-aside-select-value').attr('data-id') != value) {
                        var name = currentElement.text().trim();
                        app.appView.showLoader();
                        this.model.save({attribute: field, value: value, id: this.model.id}, {
                            patch: true,
                            success: function (model, response, options) {
                                uvSelect.find('.uv-aside-select-value').attr('data-id', value).text(name)
                                if (field == 'priority') {
                                    uvSelect.find('.uv-list-ticket-priority').attr('style', 'background:' + currentElement.attr('data-color'));
                                } else if (field == 'agent') {
                                    \$('.uv-ticket-strip .agent-info').show()
                                    \$('.uv-ticket-strip .agent-info .name').text(name)
                                }
                                app.appView.hideLoader();
                                app.appView.renderResponseAlert(response);
                            },
                            error: function (model, xhr, options) {
                                if (url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                                var response = warningResponse;
                                if (xhr.responseJSON)
                                    response = xhr.responseJSON;

                                app.appView.hideLoader();
                                app.appView.renderResponseAlert(response);
                            }
                        });
                    }
                },
                showCustomerUpdateBlock: function() {
                    \$('.uv-main-info-update-block').show()
                    \$('.uv-main-info-block').hide()
                },
                updateStar: function(e) {
                    e.preventDefault();
                    var currentElement = Backbone.\$(e.currentTarget);
                    currentElement.toggleClass('uv-star-active')
                    this.model.save({id: this.model.id}, {
                        patch: true,
                        url : \"{{ path('helpdesk_member_bookmark_ticket_xhr') }}\",
                        success: function (model, response, options) {
                        },
                        error: function (model, xhr, options) {
                            if (url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                },
                filterThread: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    if(type = currentElement.attr('data-type')) {
                        localStorage.setItem(\"threadTab\", type);
                        if (type != 'all')
                            \$('.uv-ticket-main.create').hide()
                        else
                            \$('.uv-ticket-main.create').show()
                        \$('.uv-ticket-wrapper.thread-list').html('')
                        models = []
                        threadCollection.each(function(model) {
                            models.push(model)
                        })
                        total = threadCollection.models.length;
                        count = 0;
                        if (total) {
                            _.each(models, function (model) {
                                threadCollection.remove(model)
                                count++;
                                if(total == count) {
                                    threadCollection.reset()
                                    threadCollection.state.currentPage = 1;
                                    threadCollection.syncData()
                                }
                            });
                        } else {
                            threadCollection.reset()
                            threadCollection.state.currentPage = 1;
                            threadCollection.syncData()
                        }
                    }
                },
                confirmRemove: function(e) {
                    app.appView.openConfirmModal(this);
                },
                removeItem : function() {
                    if (this.model.attributes.isTrashed)
                        window.location.href = \"{{ path('helpdesk_member_delete_ticket', {'ticketId': ticket.id}) }}\";
                    else
                        window.location.href = \"{{ path('helpdesk_member_trash_ticket', {'ticketId': ticket.id}) }}\";
                },
                addCCCollaborators: function() {
                    if (collaboratorCollection.length) {
                        var collaboratorContainer = \$('.uv-element-block.collaborators');
                        collaboratorContainer.find('.uv-field-block').html('');
                        collaboratorContainer.show()
                        _.each(collaboratorCollection.models, function (item) {
                            var json = item.attributes;
                            collaboratorContainer.find('.uv-field-block').append(\"<span><input type='hidden' name='cccol[]' value='\" + json.email + \"'/><a class='uv-btn-tag' href='#'><span class='uv-icon-remove-dark-before'></span>\" + json.name + \"</a></span>\")
                        }, this);
                    }
                },
                removeCcCollaborator: function(e) {
                    e.preventDefault()
                    Backbone.\$(e.currentTarget).parent().remove();
                    var collaboratorContainer = \$('.uv-element-block.collaborators');
                    if (!collaboratorContainer.find('.uv-btn-tag').length)
                        collaboratorContainer.hide()
                },
                addToInput: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    var currentTab = inputElement.parents('.uv-tab-view');
                    var email = inputElement.val().trim();
                    if (e.which === 13 && email) {
                        e.preventDefault()
                        if (!this.model.preValidate({name: 'email', email: email})) {
                            inputElement.val('').trigger('input')
                            inputElement.removeClass('uv-dropdown-btn-active')
                            inputElement.siblings('.uv-dropdown-list').hide()
                            if (!currentTab.find(\".to-list input[value='\" + email + \"'].to\").length) {
                                currentTab.find('.to-list').append(\"<span><input type='hidden' name='to[]' value='\" + email + \"' class='to'/><a class='uv-btn-tag' href='#'><span class='uv-icon-remove-dark-before'></span>\" + email + \"</span></a></span>\")
                            }
                        }
                    }
                },
                addTo: function(e) {
                    var currentTab = Backbone.\$(e.currentTarget).parents('.uv-tab-view');
                    var email =  Backbone.\$(e.currentTarget).attr('data-id');
                    if (!currentTab.find(\".to-list input[value='\" + email + \"'].to\").length) {
                        currentTab.find('.to-list').append(\"<span><input type='hidden' name='to[]' value='\" + email + \"' class='to'/><a class='uv-btn-tag' href='#'><span class='uv-icon-remove-dark-before'></span>\" + email + \"</span></a></span>\")
                    }
                },
                showCcBccBlock: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    var currentTab = currentElement.parents('.uv-tab-view');
                    if (currentElement.is(':checked')) {
                        currentTab.find('.uv-element-block.cc-bcc').find('.uv-field-block').show()
                    } else {
                        currentTab.find('.uv-element-block.cc-bcc').find('.uv-field-block').hide()
                        currentTab.find('.uv-element-block .cc-bcc-list').html('')
                    }
                },
                addCcBccInput: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    var currentTab = inputElement.parents('.uv-tab-view');
                    var email = inputElement.val().trim();
                    if (e.which === 13 && email) {
                        e.preventDefault()
                        type = currentTab.find('.cc-bcc-select option:selected').text()
                        if (!this.model.preValidate({name: 'email', email: email})) {
                            inputName = \$('.cc-bcc-select').val()
                            inputElement.val('').trigger('input')
                            inputElement.removeClass('uv-dropdown-btn-active')
                            inputElement.siblings('.uv-dropdown-list').hide()
                            if (!currentTab.find(\".cc-bcc-list input[value='\" + email + \"'].\" + inputName).length) {
                                currentTab.find('.cc-bcc-list').append(\"<span><input type='hidden' name='\" + inputName + \"[]' value='\" + email + \"' class='\" + inputName + \"'/><a class=uv-btn-tag uv-lowercase' href='#'><span class='uv-icon-remove-dark-before'></span>\" + email + \" : <span class='uv-uppercase'>\" + type + \"</span></a></span>\")
                            }
                        }
                    }
                },
                addCcBcc: function(e) {
                    var currentTab = Backbone.\$(e.currentTarget).parents('.uv-tab-view');
                    var email =  Backbone.\$(e.currentTarget).attr('data-id');
                    type = currentTab.find('.cc-bcc-select option:selected').text()
                    inputName = currentTab.find('.cc-bcc-select').val()
                    if (!currentTab.find(\".cc-bcc-list input[value='\" + email + \"'].\" + inputName).length) {
                        currentTab.find('.uv-element-block.cc-bcc .uv-group-field.uv-dropdown-other').val('').trigger('input')
                        currentTab.find('.cc-bcc-list').append(\"<span><input type='hidden' name='\" + inputName + \"[]' value='\" + email + \"' class='\" + inputName + \"'/><a class=uv-btn-tag uv-lowercase' href='#'><span class='uv-icon-remove-dark-before'></span>\" + email + \" : <span class='uv-uppercase'>\" + type + \"</span></a></span>\")
                    }
                },
                removeEmail: function(e) {
                    e.preventDefault()
                    Backbone.\$(e.currentTarget).parent().remove();
                },
                setNextView: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    var nextView = currentElement.attr('data-value');
                    localStorage.setItem(\"nextView\", nextView);
                    \$(\".next-view input\").val(nextView)
                    \$(\".next-view .uv-dropdown-btn\").text(currentElement.text())
                },
                validateForm : function(e) {
                    e.preventDefault();
                    var element = Backbone.\$(e.currentTarget);
                    formType = element.parents('.uv-tab-view.uv-tab-view-active').attr('id');
                    form = element.parents('form');
                    form.find('.reply-status').val(element.attr('data-id'));
                    form.find('.uv-field-message').remove()

                    var html = tinyMCE.get(formType + \"-area\").getContent();
                    if (app.appView.htmlText(html) != '' || -1 != html.indexOf('<img')) {
                        if (formType == 'forward') {
                            if (!form.find(\".to-list input.to\").length) {
                                \$('.uv-element-block.to').append(\"<span class='uv-field-message'>{{ 'This field is mandatory'|trans }}</span>\")
                            } else {
                                this.stopDraftSaveFlag = 1;

                                app.appView.showLoader();
                                tinyMCE.activeEditor.uploadImages(function(response) {
                                    app.appView.hideLoader();

                                    form.submit();
                                    \$('.uv-btn.forward').attr('disabled', 'disabled');
                                });
                            }
                        } else {
                            this.stopDraftSaveFlag = 1;
                            if (localStorage) {
                                localStorage.setItem(\"threadTab\", \"all\");
                            }

                            app.appView.showLoader();
                            tinyMCE.activeEditor.uploadImages(function(response) {
                                app.appView.hideLoader();

                                form.submit();
                                \$('.uv-dropdown.reply').find('.uv-btn').attr('disabled', 'disabled');
                            });
                        }
                    } else {
                        form.find('.uv-element-block-textarea').append(\"<span class='uv-field-message'>{{ 'This field is mandatory'|trans }}</span>\");
                        if (formType == 'forward') {
                            if(!form.find(\".to-list input.to\").length) {
                                \$('.uv-element-block.to').append(\"<span class='uv-field-message'>{{ 'This field is mandatory'|trans }}</span>\")
                            }
                        }
                    }
                },
                updateTicket: function(e) {
                    e.preventDefault();
                    this.model.set(\$('#edit-ticket-modal form').serializeObject());
                    if (this.model.isValid(['subject', 'reply'])) {
                        \$('#edit-ticket-modal form').find('.uv-btn').attr('disabled', 'disabled');
                        \$('#edit-ticket-modal form').submit();
                    }
                },
                showReplyQuote: function(e) {
                    Backbone.\$(e.currentTarget).next().toggle();
                },

                // Agent roles and permissions quick view
                quickViewTemplate: _.template(\$(\"#agent_access_details_quick_view_tmp\").html()),
                navigateQuickView : function(e) {
                    e.preventDefault();

                    var currentElement = Backbone.\$(e.currentTarget);
                    var self = this;

                    if(currentElement.hasClass(\"uv-quick-view-trigger\"))
                        app.appView.showLoader();

                    if(self.xhrReq)
                        self.xhrReq.abort();

                    \$(\"#quick-view-modal .uv-loader\").show()

                    self.xhrReq = \$.ajax({
                        url: \"{{ path('helpdesk_member_ticket_user_permission_quick_view_xhr') }}\", // Make sure this route is correct
                        type: 'GET',
                        data: { 'ticketId': ticketModel.attributes.id }, // Sending the ticket ID
                        dataType: 'json',
                        success: function(response) {
                            console.log(response);
                            self.xhrReq = 0;
                            if(currentElement.hasClass(\"uv-quick-view-trigger\"))
                                app.appView.hideLoader();

                            self.renderQuickView(response)
                        },
                        error: function(xhr) {
                            self.xhrReq = 0;
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            app.appView.hideLoader();
                        }
                    });
                },

                renderQuickView: function(response) {
                    \$('#quick-view-modal .uv-pop-up-box').html(this.quickViewTemplate(response));
                    app.appView.openModal('quick-view-modal')
                    \$('#quick-view-modal .message').find('img').removeAttr('crossorigin');

                    \$('#quick-view-modal .message').find('.uv-icon-ellipsis').remove();
                    \$('#quick-view-modal .message').find('.helpdesk_blockquote').eq(0).before(\"<span class='uv-icon-ellipsis uv-ellipsis-mirror'></span>\").hide();
                    app.appView.relativeTime();
                },
                toggleAccordian: function(e) {
                    const arrowElement = Backbone.\$(e.currentTarget);

                    // Map of section configurations
                    const sectionMap = {
                        'uv-group-section': {
                            block: '.uv-agent-details-section',
                            arrow: '.uv-accordian-icon',
                        },
                        'uv-team-section': {
                            block: '.uv-agent-details-section',
                            arrow: '.uv-accordian-icon',
                        },
                        'uv-privilage-section': {
                            block: '.uv-agent-details-section',
                            arrow: '.uv-accordian-icon'
                        },
                        'uv-ticketView-section': {
                            block: '.uv-agent-details-section',
                            arrow: '.uv-accordian-icon'
                        }
                    };

                    // Find which section was clicked
                    const sectionKey = Object.keys(sectionMap).find(key =>
                        arrowElement.closest(`.\${key}`).length
                    );

                    if (sectionKey) {
                        const section = sectionMap[sectionKey];
                        const filterSection = this.\$(`.\${sectionKey} \${section.block}`);
                        const arrowToggle = this.\$(`.\${sectionKey} \${section.arrow}`);

                        // Toggle section visibility and update UI
                        const isVisible = filterSection.is(':visible');

                        filterSection[isVisible ? 'hide' : 'show']();

                        // Update arrow direction using CSS class
                        arrowToggle.toggleClass('up', !isVisible);
                    }
                },
                searchFilterXhr: _.debounce(function(e) {
                    currentElement = Backbone.\$(e.currentTarget);
                    var parent = currentElement.parent();
                    if (\$('.uv-dropdown-other.uv-dropdown-btn-active').parent().attr('id') != parent.attr('id'))
                        return;
                    parent.find(\"li:not(.uv-no-results, .uv-filter-info)\").remove();
                    parent.find(\".uv-filter-info\").show()
                    if (currentElement.val().length > 1) {
                        parent.append(this.loaderTemplate())
                        parent.find('.uv-filter-info').text(\"{% trans %}Searching{% endtrans %} ...\")
                        if(self.xhrReq)
                            self.xhrReq.abort();

                        self.xhrReq = \$.ajax({
                            url : \"{{ path('helpdesk_member_ticket_search_filter_options') }}\",
                            type : 'GET',
                            data: {\"type\" : currentElement.attr('data-type'), \"query\": currentElement.val()},
                            dataType : 'json',
                            success : function(response) {
                                self.xhrReq = 0;
                                parent.find('.uv-loader').remove()
                                parent.find('.uv-filter-info').text(\"{{ 'Type atleast 2 letters'|trans }}\").hide();
                                if (response.length == 0) {
                                    parent.find('.uv-no-results').show();
                                    parent.find('.uv-no-results').disabled = true;
                                } else {
                                    parent.find('.uv-no-results').hide();
                                    _.each(response, function(item) {
                                        parent.find('.uv-dropdown-list ul').append(\"<li data-id='\" + item.id + \"'>\" + item.name + \"</li>\")
                                    });
                                }
                            },
                            error: function (xhr) {
                                self.xhrReq = 0;
                                parent.find('.uv-loader').remove()
                                parent.find('.uv-no-results').hide();
                                parent.find('.uv-filter-info').text(\"{{ 'Type atleast 2 letters'|trans }}\").show();

                                if (url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                            }
                        });
                    } else {
                        parent.find('.uv-no-results').hide();
                    }
                }, 1000)
            });

            // Ticket Thread View
            var ThreadItem = Backbone.View.extend({
                tagName : \"div\",
                className : \"uv-ticket-main\",
                template : _.template(\$(\"#thread_list_item_tmp\").html()),
                editThreadTemplate : _.template(\$(\"#edit_thread_tmp\").html()),
                events : {
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"delete\"]': 'confirmRemove',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"lock\"]': 'lockAndUnlockThread',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"pin\"]': 'pinThread',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"mark\"]': 'markForTask',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"forward\"]' : 'forwardThread',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"edit\"]' : 'editThread',
                    'click .uv-btn.cancel-edit' : 'cancelEdit',
                    'click .uv-btn.saveThread' : 'updateThread',
                    'click .copy-thread-link' : 'copyThreadLink',
                    'blur .input-copy-thread-link': 'removeCopyThreadLink'
                },
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));

                    this.\$el.addClass(\"thread-\" + this.model.id)
                    if (this.model.attributes.threadType == 'note' && this.model.attributes.userType == 'System') {
                        this.\$el.addClass('uv-ticket-note') 
                    } else if (this.model.attributes.threadType == 'note' && this.model.attributes.userType != 'System') {
                        this.\$el.addClass('uv-ticket-note-agent') 
                    }

                    return this;
                },
                unrender : function(response) {
                    if(response.alertMessage != undefined) {
                        var self = this;
                        {# threadCollection.models.remove(this.model); #}
                        threadCollection.models = threadCollection.models.filter(thread => {
                            if(thread.id == self.model.id) {
                                return false;
                            }

                            return true;
                        });
                        this.remove();
                        threadCollection.syncData();
                        app.appView.renderResponseAlert(response);
                    }
                },
                confirmRemove: function(e) {
                    app.appView.openConfirmModal(this);
                },
                removeItem : function() {
                    self = this;
                    var index = threadIds.indexOf(this.model.id);
                    if (index > -1)
                        threadIds.splice(index, 1);
                    app.appView.showLoader();
                    this.model.destroy({
                        url : \"{{ path('helpdesk_member_thread_xhr') }}/\" + this.model.id,
                        data : { 'ticketId' : ticketModel.attributes.id },
                        success : function (model, response, options) {
                            app.appView.hideLoader();
                            self.unrender(response);
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                },
                lockAndUnlockThread :function(e) {
                    self = this;
                    currentElement = Backbone.\$(e.currentTarget);
                    var isLocked = 0;
                    if(this.model.get('isLocked')) {
                        this.model.set('isLocked', 0);
                        currentElement.attr('data-id', isLocked).text(\"{{ 'Lock Thread'|trans }}\");
                    } else {
                        isLocked = 1;
                        this.model.set('isLocked', 1);
                        currentElement.attr('data-id', isLocked).text(\"{{ 'Unlock Thread'|trans }}\");
                    }
                    app.appView.showLoader();
                    this.model.save({
                        isLocked: isLocked,
                        id: this.model.id,
                        ticketId: ticketModel.attributes.id,
                        updateType: 'lock'
                    }, {
                        patch: true,
                        url : \"{{ path('helpdesk_member_thread_xhr') }}/\" + this.model.id,
                        success : function (model, response, options) {
                            self.toggleThreadPropertyIcon()
                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                },
                pinThread :function(e) {
                    self = this;
                    currentElement = Backbone.\$(e.currentTarget);
                    var bookmark = 0;
                    if(this.model.get('bookmark')) {
                        this.model.set('bookmark', 0);
                        currentElement.attr('data-id', bookmark).text(\"{{ 'Pin Thread'|trans }}\");
                    } else {
                        bookmark = 1;
                        this.model.set('bookmark', 1);
                        currentElement.attr('data-id', bookmark).text(\"{{ 'Unpin Thread'|trans }}\");
                    }
                    app.appView.showLoader();
                    this.model.save({
                        bookmark: bookmark,
                        id: this.model.id,
                        ticketId: ticketModel.attributes.id,
                        updateType: 'bookmark'
                    }, {
                        patch: true,
                        url : \"{{ path('helpdesk_member_thread_xhr') }}/\" + this.model.id,
                        success : function (model, response, options) {
                            self.toggleThreadPropertyIcon()
                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                },
                forwardThread : function(e) {
                    var element = Backbone.\$(e.currentTarget);
                    tinymce.get('forward-area').setContent(this.model.attributes.reply);
                    \$('#forward-area').parent().find('img').removeAttr('crossorigin');
                    \$(\".uv-tabs li[for='forward']\").trigger('click');

                    \$('.uv-ticket-scroll-region').animate({
                        scrollTop: \$('#default').outerHeight()
                    }, 'slow');
                },
                cancelEdit : function(e) {
                    this.initEditThread();
                    tinymce.get('uv-edit-thread').destroy()
                },
                editThread : function(e) {
                    \$('.thread-edit-container .cancel-edit').trigger('click');
                    this.initEditThread();
                    this.\$el.find('.message').hide().after(this.editThreadTemplate());
                    this.\$el.find('.uv-ticket-uploads').hide()

                    InitTinyMce('#uv-edit-thread');
                    tinymce.get('uv-edit-thread').setContent(this.model.attributes.reply);
                    this.\$el.find('img').removeAttr('crossorigin');
                },
                initEditThread: function() {
                    \$('.thread-edit-container').remove();
                    messageElement = this.\$el.find('.message');
                    messageElement.show();
                    this.\$el.find('.uv-ticket-uploads').show()
                },
                updateThread : function(e) {
                    e.preventDefault();
                    var currentElement = Backbone.\$(e.currentTarget);
                    parent = currentElement.parents('.thread-edit-container')
                    parent.find('.uv-field-message').remove()

                    var html = tinyMCE.get(\"uv-edit-thread\").getContent();
                    if(app.appView.stripHTML(html) != '') {
                        var self = this;
                        currentElement.attr(\"disabled\", \"disabled\");
                        this.model.set('reply', html);
                        app.appView.showLoader()
                        this.model.save({}, {
                            url : \"{{ path('helpdesk_member_thread_update_xhr') }}/\" + this.model.id,
                            success : function (model, response, options) {
                                app.appView.hideLoader()
                                messageElement = self.\$el.find('.message');
                                if(response.alertClass == 'success') {
                                    messageElement.html(self.model.attributes.reply).show();
                                    messageElement.find('.uv-icon-ellipsis').remove();
                                    messageElement.find('.helpdesk_blockquote').eq(0).before(\"<span class='uv-icon-ellipsis uv-ellipsis-mirror'></span>\").hide();
                                }

                                self.initEditThread();
                                tinymce.get('uv-edit-thread').destroy()
                                app.appView.renderResponseAlert(response);
                            },
                            error: function (model, xhr, options) {
                                self.initEditThread();
                                tinymce.get('uv-edit-thread').destroy()
                                if(url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                                var response = warningResponse;
                                if(xhr.responseJSON)
                                    response = xhr.responseJSON;
                                app.appView.hideLoader()
                                app.appView.renderResponseAlert(response);
                            }
                        });
                    } else {
                        this.\$el.find('.uv-element-block-textarea').append(\"<span class='uv-field-message'>{{ 'This field is mandatory'|trans }}</span>\");
                    }
                },
                toggleCreateTaskBar : function() {
                    if(threadIds.length) {
                        \$(\"#uv-task-view\").css('right', '0px');
                        \$(\"#uv-task-view .uv-create-task\").show()
                        \$(\"#uv-task-view .uv-task-list\").hide()
                    } else {
                        \$(\"#uv-task-view\").css('right', '-300px');
                        \$(\"#uv-task-view .uv-create-task\").hide()
                        \$(\"#uv-task-view .uv-task-list\").show()
                    }
                },
                copyThreadLink: function(e){
                    _.delay(function(){
                        \$(e.currentTarget).before('<input type=\"text\" class=\"input-copy-thread-link uv-field\" value=\"' + window.location.href + '\"/>');
                        \$(e.currentTarget).prev().focus().select();
                    }, 100);
                },
                removeCopyThreadLink: function(e){
                    \$(e.currentTarget).remove();
                },
                toggleThreadPropertyIcon: function(e) {
                    if(jQuery.inArray(this.model.id, threadIds) !== -1 || this.model.get('bookmark') || this.model.get('isLocked')) {
                        this.\$el.find('.uv-icon-pinned').parents('.uv-ticket-strip').show()
                    } else {
                        this.\$el.find('.uv-icon-pinned').parents('.uv-ticket-strip').hide()
                    }

                    if(jQuery.inArray(this.model.id, threadIds) !== -1)
                        this.\$el.find('.uv-icon-marked-task').parent().show()
                    else
                        this.\$el.find('.uv-icon-marked-task').parent().hide()

                    if(this.model.get('bookmark'))
                        this.\$el.find('.uv-icon-pinned').parent().show()
                    else
                        this.\$el.find('.uv-icon-pinned').parent().hide()

                    if(this.model.get('isLocked'))
                        this.\$el.find('.uv-icon-locked').parent().show()
                    else
                        this.\$el.find('.uv-icon-locked').parent().hide()
                }
            });

            // Ticket Thread List
            var ThreadList = Backbone.View.extend({
                el : \$(\".thread-list\"),
                initialize : function() {
                    this.listenTo(threadCollection.fullCollection, \"add\", this.renderThread);
                },
                renderThread : function (item) {
                    var threadItem = new ThreadItem({
                        model: item
                    });
                    if(item.id < threadCollection.fullCollection.at(0).id)
                        this.\$el.prepend(threadItem.render().el);
                    else
                        this.\$el.append(threadItem.render().el);
                    threadItem.\$el.find('.helpdesk_blockquote').eq(0).before(\"<span class='uv-icon-ellipsis uv-ellipsis-mirror'></span>\").hide();
                    //emojifyRun();
                    this.\$el.find('img').removeAttr('crossorigin');
                    this.\$el.find('div.message a').attr('target', '_blank');
                    app.appView.relativeTime();
                }
            });

            // Ticket Pagination View
            var Pagination = Backbone.View.extend({
                el: \$('.uv-ticket-accordion'),
                events: {
                    'click .uv-ticket-count-stat': 'loadMore',
                },
                renderPagination: function(pagination) {
                    if(pagination.totalCount - pagination.lastItemNumber > 0 && pagination.lastItemNumber > 0) {
                        var remain = pagination.totalCount - pagination.lastItemNumber;
                        \$('.uv-ticket-count-stat').text(remain)
                        \$('.uv-ticket-accordion').removeClass('uv-ticket-accordion-expanded').removeClass('uv-ticket-accordion-no-count')
                    } else {
                        \$('.uv-ticket-accordion').addClass('uv-ticket-accordion-expanded').addClass('uv-ticket-accordion-no-count')
                    }
                },
                loadMore: function() {
                    threadCollection.syncData();
                }
            });

            // Ticket collaborator Item View
            var CollaboratorItem = Backbone.View.extend({
                tagName : \"a\",
                className: 'uv-btn-tag',
                template : _.template(\"{% if user_service.isAccessAuthorized('ROLE_AGENT_DELETE_COLLABORATOR_FROM_TICKET') %}<span class='uv-tag'><span class='uv-icon-remove-dark-before'></span><%- name %></span>{% else %}<span class='uv-tag-delete'><%- name %></span>{% endif %}\"),
                events : {
                    'click .uv-tag' : 'confirmRemove'
                },
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));
                    return this;
                },
                unrender : function(response) {
                    if(response.alertMessage != undefined) {
                        app.appView.renderResponseAlert(response);
                    }
                },
                removeItem: function() {
                    {% if user_service.isAccessAuthorized('ROLE_AGENT_ADD_COLLABORATOR_TO_TICKET') %}
                        self = this;
                        app.appView.showLoader();
                        this.model.destroy({
                            data : { 'ticketId' : this.model.attributes.ticketId },
                            success : function (model, response, options) {
                                app.appView.hideLoader();
                                self.\$el.remove();
                                self.unrender(response);
                            },
                            error: function (model, xhr, options) {
                                if(url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                                var response = warningResponse;
                                if(xhr.responseJSON)
                                    response = xhr.responseJSON;

                                app.appView.hideLoader();
                                app.appView.renderResponseAlert(response);
                            }
                        });
                    {% endif %}
                },
                confirmRemove: function(e) {
                    e.preventDefault();
                    {% if user_service.isAccessAuthorized('ROLE_AGENT_ADD_COLLABORATOR_TO_TICKET') %}
                        app.appView.openConfirmModal(this);
                    {% endif %}
                }
            });

            // Ticket Collaborator View
            var CollaboratorList = Backbone.View.extend({
                el : \$(\".collaborator-list-block\"),
                events : {
                    'keypress .uv-field' : 'addCollaborator',
                    'focusout .uv-field' : 'removeErrorClass'
                },
                initialize : function() {
                    //Backbone.Validation.bind(this);
                },
                render : function() {
                    this.\$el.find(\".collaborator-list\").html('');
                    var self = this;
                    collaboratorOptionHtml = '';

                    if(collaboratorCollection.length) {
                        _.each(collaboratorCollection.models, function (item) {
                            this.renderCollaborator(item);
                        }, this);
                    }
                    ticketView.addCCCollaborators()
                },
                renderCollaborator : function (item) {
                    var collaborator = new CollaboratorItem({
                        model: item
                    });
                    this.\$el.find('.collaborator-list').append(collaborator.render().el);
                },
                removeErrorClass: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    inputElement.removeClass('uv-field-error');
                    inputElement.parents('.uv-element-block').find('.uv-field-message').remove()
                },
                addCollaborator : function(e) {
                    {% if user_service.isAccessAuthorized('ROLE_AGENT_ADD_COLLABORATOR_TO_TICKET') %}
                        var inputElement = Backbone.\$(e.currentTarget);
                        inputElement.removeClass('uv-field-error');
                        inputElement.parents('.uv-element-block').find('.uv-field-message').remove()
                        var text = inputElement.val().trim();

                        if (e.which === 13 && text) {
                            this.model = new CollaboratorModel();
                            self = this;
                            this.model.set({email: text})

                            if(this.model.isValid(true)) {
                                app.appView.showLoader();
                                this.model.save({},{
                                    success : function (model, response, options) {
                                        inputElement.val('');
                                        if(response.alertClass == \"success\") {
                                            collaboratorCollection.add(model);
                                        }
                                        self.render();
                                        app.appView.hideLoader();
                                        app.appView.renderResponseAlert(response);
                                    },
                                    error: function (model, xhr, options) {
                                        if(url = xhr.getResponseHeader('Location'))
                                            window.location = url;
                                        var response = warningResponse;
                                        if(xhr.responseJSON)
                                            response = xhr.responseJSON;

                                        app.appView.hideLoader();
                                        app.appView.renderResponseAlert(response);
                                    }
                                });
                            } else {
                                inputElement.addClass('uv-field-error');
                                if(text)
                                    inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>{{ 'Email address is invalid'|trans }}</span>\");
                            }
                        }
                    {% endif %}
                }
            });


            // Ticket Tag Item View
            var TagItem = Backbone.View.extend({
                tagName : \"a\",
                className : \"uv-btn-tag\",
                template : _.template(\"<span class='uv-tag'>{% if user_service.isAccessAuthorized('ROLE_AGENT_DELETE_TAG') %}<span class='uv-icon-remove-dark-before'></span>{% endif %}<%- name %></span>\"),
                events : {
                    'click .uv-tag' : \"confirmRemove\"
                },
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));

                    return this;
                },
                unrender : function(response) {
                    if(response.alertMessage != undefined) {
                        tagListView.render();
                        app.appView.renderResponseAlert(response);
                    }
                },
                removeItem : function () {
                    {% if user_service.isAccessAuthorized('ROLE_AGENT_DELETE_TAG') %}
                    self = this;
                    app.appView.showLoader();
                    this.model.destroy({
                        data : { 'ticketId' : ticketModel.id } ,
                        success : function (model, response, options) {
                            app.appView.hideLoader();
                            self.\$el.remove();
                            self.unrender(response);
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                    {% endif %}
                },
                confirmRemove: function(e) {
                    e.preventDefault();
                    {% if user_service.isAccessAuthorized('ROLE_AGENT_DELETE_TAG') %}
                        app.appView.openConfirmModal(this)
                    {% endif %}
                }
            });

            // Ticket Tag View
            var TagList = Backbone.View.extend({
                el : \$(\".tag-list-block\"),
                events : {
                    'keypress .uv-field' : 'addTag',
                    'focusout .uv-field' : 'removeErrorClass',
                    'click .uv-dropdown-list li': 'addTag'
                },
                render : function() {
                    var self = this;
                    this.\$el.find(\".tag-list\").html('');
                    if (tagCollection.length) {
                        _.each(tagCollection.models, function (item) {
                            this.renderTag(item);
                        }, this);
                    }
                },
                renderTag : function (item) {
                    var tag = new TagItem({
                        model: item
                    });
                    this.\$el.find('.tag-list').append(tag.render().el);
                },
                addTag : function(e) {
                    {% if user_service.isAccessAuthorized('ROLE_AGENT_ADD_TAG') %}
                        var currentElement = Backbone.\$(e.currentTarget);
                        if (currentElement.is('li')) {
                            var inputElement = currentElement.parents('.uv-field-block').find('.uv-dropdown-other');
                            var text = currentElement.text().trim();
                        } else {
                            var inputElement = currentElement;
                            var text = inputElement.val().trim();
                        }
                        inputElement.removeClass('uv-field-error');
                        inputElement.parents('.uv-element-block').find('.uv-field-message').remove()

                        if (currentElement.is('li') || (e.which === 13 && text)) {
                            if (text.length <= 20) {
                                if (tagCollection.isTagExist(text)) {
                                    var self = this;
                                    inputElement.val('');
                                    this.model = new TagModel();
                                    this.model.set({name:text});
                                    self = this;

                                    app.appView.showLoader();
                                    this.model.save({}, {
                                        success: function (model, response, options) {
                                            inputElement.parent().find(\"li:not(.uv-no-results)\").remove()
                                            inputElement.parent().find(\".uv-no-results\").show()
                                            if (!currentElement.is('li')) {
                                                inputElement.trigger('click')
                                            }
                                            if (response.alertClass == \"success\") {
                                                tagCollection.add(model);
                                                self.render();
                                            }

                                            app.appView.hideLoader();
                                            app.appView.renderResponseAlert(response);
                                        },
                                        error: function (model, xhr, options) {
                                            if (url = xhr.getResponseHeader('Location'))
                                                window.location = url;
                                            var response = warningResponse;
                                            if (xhr.responseJSON)
                                                response = xhr.responseJSON;

                                            app.appView.hideLoader();
                                            app.appView.renderResponseAlert(response);
                                        }
                                    });
                                } else {
                                    inputElement.addClass('uv-field-error');
                                    inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>{{ 'Tag with same name already exist'|trans }}</span>\");
                                }
                            } else {
                                inputElement.addClass('uv-field-error');
                                inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>{{ 'Text length should be less than 20 charactors'|trans }}</span>\");
                            }
                        }
                    {% endif %}
                },
                removeErrorClass: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    inputElement.removeClass('uv-field-error');
                    inputElement.parents('.uv-element-block').find('.uv-field-message').remove()
                },
            });

            // Ticket Label Item View
            var LabelItem = Backbone.View.extend({
                tagName : \"a\",
                className : \"uv-btn-label\",
                template : _.template(\"<span class='uv-tag'><span class='uv-icon-remove-before'></span><%- name %></span>\"),
                events : {
                    'click .uv-tag' : \"confirmRemove\"
                },
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));

                    return this;
                },
                unrender : function(response) {
                    if (response.alertMessage != undefined) {
                        labelListView.render();
                        app.appView.renderResponseAlert(response);
                    }
                },
                removeItem : function () {
                    self = this;
                    app.appView.showLoader();

                    this.model.destroy({
                        url : \"{{ path('helpdesk_member_update_ticket_attributes_xhr') }}\",
                        data : { attribute :'label', 'ticketId': ticketModel.id, 'labelId': this.model.get('id') },
                        success : function (model, response, options) {
                            app.appView.hideLoader();
                            self.\$el.remove();
                            self.unrender(response);
                        },
                        error: function (model, xhr, options) {
                            if (url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if (xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                },
                confirmRemove: function(e) {
                    e.preventDefault();
                    app.appView.openConfirmModal(this)
                }
            });

            // Ticket Label View
            var LabelList = Backbone.View.extend({
                el: \$(\".label-list-block\"),
                events: {
                    'keypress .uv-field' : 'addLabel',
                    'focusout .uv-field' : 'removeErrorClass',
                    'click .uv-dropdown-list li': 'addLabel'
                },
                render : function() {
                    var self = this;
                    this.\$el.find(\".label-list\").html('');
                    if (labelCollection.length) {
                        _.each(labelCollection.models, function (item) {
                            this.renderLabel(item);
                        }, this);
                    }
                },
                renderLabel : function (item) {
                    var label = new LabelItem({
                        model: item
                    });
                    lavelItem = label.render().el;
                    \$(lavelItem).attr('style', 'background:' + item.attributes.color)
                    this.\$el.find('.label-list').append(lavelItem);
                },
                addLabel : function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    if (currentElement.is('li')) {
                        var inputElement = currentElement.parents('.uv-field-block').find('.uv-dropdown-other');
                        var text = currentElement.text().trim();
                    } else {
                        var inputElement = currentElement;
                        var text = inputElement.val().trim();
                    }
                    inputElement.removeClass('uv-field-error');
                    inputElement.parents('.uv-element-block').find('.uv-field-message').remove()

                    if (currentElement.is('li') || (e.which === 13 && text)) {
                        if (text.length <= 20) {
                            if (labelCollection.isLabelExist(text)) {
                                var self = this;
                                inputElement.val('');
                                this.model = new LabelModel();
                                this.model.set({name:text});
                                self = this;

                                app.appView.showLoader();
                                this.model.save({}, {
                                    success: function (model, response, options) {
                                        inputElement.parent().find(\"li:not(.uv-no-results)\").remove()
                                        inputElement.parent().find(\".uv-no-results\").show()
                                        if (!currentElement.is('li')) {
                                            inputElement.trigger('click')
                                        }
                                        if (response.alertClass == \"success\") {
                                            labelCollection.add(model);
                                            self.render();
                                        }

                                        app.appView.hideLoader();
                                        app.appView.renderResponseAlert(response);
                                    },
                                    error: function (model, xhr, options) {
                                        if (url = xhr.getResponseHeader('Location'))
                                            window.location = url;
                                        var response = warningResponse;
                                        if (xhr.responseJSON)
                                            response = xhr.responseJSON;

                                        app.appView.hideLoader();
                                        app.appView.renderResponseAlert(response);
                                    }
                                });
                            } else {
                                inputElement.addClass('uv-field-error');
                                inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>{{ 'Label with same name already exist'|trans }}</span>\");
                            }
                        } else {
                            inputElement.addClass('uv-field-error');
                            inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>{{ 'Text length should be less than 20 charactors'|trans }}</span>\");
                        }
                    }
                },
                removeErrorClass: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    inputElement.removeClass('uv-field-error');
                    inputElement.parents('.uv-element-block').find('.uv-field-message').remove()
                },
            });

            // Ticket Router
            var Router = Backbone.Router.extend({
                routes: {
                    'thread/:thread' : 'threadRequestedId'
                },
                threadRequestedId: function(thread){
                    threadCollection.threadRequestedId = thread;
                },
                scrollPage : function(divId) {
                    if (\$(divId).length){
                        \$('li a[href=\"'+divId+'\"]').trigger('click');
                        \$('.uv-ticket-scroll-region').animate({
                            scrollTop: \$(divId).offset().top
                        }, 'slow');
                    } else if (divId == '#') { //scroll to last thread added
                        if (threadCollection.fullCollection.length)
                            this.scrollPage('#thread' + threadCollection.fullCollection.at(0).id);
                    }
                }
            });

            var customerForm = new CustomerForm({
                el : \$(\".uv-main-info-update-block\"),
                model : new CustomerModel()
            });

            var ticketNavigation = \$.parseJSON('{{ ticketNavigationIteration|json_encode|raw }}');

            const copyContentToClipboard = async (content) => {
                try {
                    if (navigator.clipboard && navigator.clipboard.writeText) {
                        await navigator.clipboard.writeText(content);
                    } else {
                        // Fallback for unsupported browsers
                        const textarea = document.createElement(\"textarea\");
                        textarea.value = content;
                        textarea.style.position = \"fixed\";  // avoid scrolling to bottom
                        document.body.appendChild(textarea);
                        textarea.focus();
                        textarea.select();
                        document.execCommand(\"copy\");
                        document.body.removeChild(textarea);
                    }
                    console.log(\"Copied to clipboard!\");
                } catch (err) {
                    console.error(\"Failed to copy content to clipboard:\", err);
                }
            };

            var ticketModel = new TicketModel({
                id : \"{{ ticket.id }}\",
                status : \"{{ ticket.status.id }}\",
                priority : \"{{ ticket.priority.id }}\",
                group : \"{{ ticket.supportGroup ? ticket.supportGroup.id : '' }}\",
                subGroup : \"{{ ticket.supportTeam ? ticket.supportTeam.id : '' }}\",
                agent : \"\",
                profileImage : \"\",
                isTrashed : \"{{ ticket.isTrashed }}\"
            });

            ticketApp.ticketView = ticketView = new TicketView({
                model: ticketModel
            });

            uvdesk.ticket.model = ticketModel;

            threadCollection = new ThreadCollection();
            var threadList = new ThreadList();
            var pagination = new Pagination();

            var collaboratorCollection = new CollaboratorCollection(\$.parseJSON('{{ ticket_service.getTicketCollaborators(ticket.id)|json_encode|raw }}'));
            var collaboratorList = new CollaboratorList();
            collaboratorList.render();

            var tagCollection = new TagCollection(\$.parseJSON('{{ ticket_service.getTicketTagsById(ticket.id)|json_encode|raw }}'));
            var tagListView = new TagList();
            tagListView.render();

            var labelCollection = new LabelCollection(\$.parseJSON('{{ ticket_service.getTicketLabels(ticket.id)|json_encode|raw }}'));
            var labelListView = new LabelList();
            labelListView.render();

            var router = new Router();
            Backbone.history.start({push_state:true});

            threadCollection.syncData();
        });
    </script>

    <script>
        var sfTinyMceNew = \$.extend({}, sfTinyMce);
        var toolbarOptions = sfTinyMce.options.toolbar;

        sfTinyMce.init({
            selector : '.uv-ticket-reply textarea',
            toolbar: toolbarOptions + ' | translate',
            mentions : getMentions(),
            images_upload_url: \"\",
            setup: function(editor) {
                editor.on('keydown', function(e) { /** for pageup, pagedown keys **/
                    if(e.keyCode == 34 || e.keyCode == 33){
                        e.preventDefault();
                    }
                });
                addTranslateButton(editor);
            }
        });

        function InitTinyMce(selector) {
            let sfTinyMceNew2 = \$.extend({}, sfTinyMceNew);
            sfTinyMceNew2.init({
                selector : selector,
                mentions : getMentions(),
                setup: function(editor) {
                    addTranslateButton(editor);
                }
            });
        }

        function getMentions(){
            return {
                delimiter: ['#'],
                items: 15,
                source: function(){
                    return [
                        {
                            name : \"{{ 'Ticket Id'|trans }}\",
                            value : \"{{ ticket.id }}\",
                        },
                        {
                            name : \"{{ 'Subject'|trans }}\",
                            value : \"{{ ticket.subject|replace({\"\\n\":' ', \"\\r\":' '}) }}\",
                        },
                        {
                            name : \"{{ 'Status'|trans }}\",
                            value : \"{{ ticket.status.description }}\",
                        },
                        {
                            name : \"{{ 'Priority'|trans }}\",
                            value : \"{{ ticket.priority.description|trans }}\",
                        },
                        {
                            name : \"{{ 'Type'|trans }}\",
                            value : \"{{ ticket.type ? ticket.type.description|replace({\"\\n\":' ', \"\\r\":' '}) : 'Not Assigned'|trans }}\",
                        },
                        {
                            name : \"{{ 'Group'|trans }}\",
                            value : \"{{ ticket.supportGroup ? ticket.supportGroup.description : 'Not Assigned'|trans }}\",
                        },
                        {
                            name : \"{{ 'Team'|trans }}\",
                            value : \"{{ ticket.supportTeam ? ticket.supportTeam.description : 'Not Assigned'|trans }}\",
                        },
                        {
                            name : \"{{ 'Customer Name'|trans }}\",
                            value : \"{{ customer.name }}\",
                        },
                        {
                            name : \"{{ 'Customer Email'|trans }}\",
                            value : \"{{ customer.email }}\",
                        },
                        {
                            name : \"{{ 'Agent Name'|trans }}\",
                            value : \"{{ ticketAgent.name is defined ? ticketAgent.name : 'Not Assigned'|trans }}\",
                        },
                        {
                            name : \"{{ 'Agent Email'|trans }}\",
                            value : \"{{ ticketAgent.email is defined ? ticketAgent.email : 'Not Assigned'|trans }}\",
                        }
                    ];
                },
                insert: function(item) {
                    return '<span>' + item.value + '</span>';
                }
            };
        }
    </script>
    <script id=\"agent_access_details_quick_view_tmp\" type=\"text/template\">
        <div class=\"uv-pull-right quick-view-navigation\">
            <div class=\"uv-loader\" style=\"display: none\">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <span class=\"uv-pop-up-close\"></span>
        <h2>{{ 'Agent Access Details'|trans }}</h2>
        <div class=\"uv-pop-up-body uv-inner-section\">
            <div class=\"uv-view\">
                <div class=\"uv-ticket-head uv-grid-container\">

                    <!-- Agent Groups -->
                    <div class=\"uv-grid-item uv-group-section\">
                        <span class=\"uv-accordian-sec\">
                            <h3>{{ 'Groups'|trans }}</h3>

                            <span class=\"uv-rt-accordian\">
                                <% if (typeof agentGroups !== 'undefined' && agentGroups.length > 0) { %>
                                        <span class=\"uv-grid-item-count\">
                                          <h4> <%= agentGroups.length %> Access </h4>
                                        </span>
                                <% } else { %>
                                        <span class=\"uv-grid-item-count\">
                                          <h4> 0 Access </h4>
                                        </span>
                                <% } %>
                                <span class=\"uv-accordian-icon\"></span>
                            </span>
                        </span>
                        <span class=\"uv-agent-details-section\">
                            <ul class=\"uv-agent-details\">
                                <% if (typeof agentGroups !== 'undefined' && agentGroups.length > 0) { %>
                                    <% agentGroups.forEach(function(group) { %>
                                        <li><%- group %></li>
                                    <% }) %>
                                <% } else { %>
                                    <p>{{ 'No Groups found'|trans }}</p>
                                <% } %>
                            </ul>
                        </span>
                    </div>

                    <!-- Agent Team -->
                    <div class=\"uv-grid-item uv-team-section\" id=\"uv-team-access\">
                        <span class=\"uv-accordian-sec\">
                            <h3>{{ 'Teams'|trans }}</h3>

                            <span class=\"uv-rt-accordian\">
                                <% if (typeof agentTeam !== 'undefined' && agentTeam.length > 0) { %>
                                        <span class=\"uv-grid-item-count\">
                                          <h4> <%= agentTeam.length %> Access </h4>
                                        </span>
                                <% } else { %>
                                        <span class=\"uv-grid-item-count\">
                                          <h4> 0 Access </h4>
                                        </span>
                                <% } %>
                                <span class=\"uv-accordian-icon\"></span>
                            </span>
                        </span>
                        <span class=\"uv-agent-details-section\">
                            <ul class=\"uv-agent-details\">
                                <% if (typeof agentTeam !== 'undefined' && agentTeam.length > 0) { %>
                                    <% agentTeam.forEach(function(team) { %>
                                        <li><%- team %></li>
                                    <% }) %>
                                <% } else { %>
                                    <p>{{ 'No Teams found'|trans }}</p>
                                <% } %>
                            </ul>
                        </span>
                    </div>

                    <!-- Agent Privileges -->
                    <div class=\"uv-grid-item uv-privilage-section\">
                        <span class=\"uv-accordian-sec\">
                            <h3>{{ 'Privileges'|trans }}</h3>

                            <span class=\"uv-rt-accordian\">
                                <% if (typeof agentPrivileges !== 'undefined' && agentPrivileges.length > 0) { %>
                                        <span class=\"uv-grid-item-count\">
                                          <h4> <%= agentPrivileges.length %> Access </h4>
                                        </span>
                                <% } else { %>
                                        <span class=\"uv-grid-item-count\">
                                          <h4> 0 Access </h4>
                                        </span>
                                <% } %>
                                <span class=\"uv-accordian-icon\"></span>
                            </span>
                        </span>
                        <span class=\"uv-agent-details-section\">
                            <ul class=\"uv-agent-details\">
                                <% if (typeof agentPrivileges !== 'undefined' && agentPrivileges.length > 0) { %>
                                    <% agentPrivileges.forEach(function(privilege) { %>
                                        <li><%- privilege %></li>
                                    <% }) %>
                                <% } else { %>
                                    <p>{{ 'No Privileges found'|trans }}</p>
                                <% } %>
                            </ul>
                        </span>
                    </div>

                    <!-- Ticket View -->
                    <div class=\"uv-grid-item uv-ticketView-section\">
                        <span class=\"uv-accordian-sec\">
                            <h3>{{ 'Ticket View'|trans }}</h3>

                            <span class=\"uv-rt-accordian\">
                                <% if (typeof ticketView !== 'undefined' && ticketView.length > 0) { %>
                                        <span class=\"uv-grid-item-count\">
                                          <h4> 1 Access </h4>
                                        </span>
                                <% } else { %>
                                        <span class=\"uv-grid-item-count\">
                                          <h4> 0 Access </h4>
                                        </span>
                                <% } %>
                                <span class=\"uv-accordian-icon\"></span>
                            </span>
                        </span>
                        <span class=\"uv-agent-details-section\">
                            <ul class=\"uv-agent-details\">
                                <% if (typeof ticketView !== 'undefined' && ticketView.length > 0) { %>
                                    <li><%- ticketView %></li>
                                <% } else { %>
                                    <p>{{ 'No Ticket View Access found'|trans }}</p>
                                <% } %>
                            </ul>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </script>
{% endblock %}", "@UVDeskCoreFramework/ticket.html.twig", "/home/users/sanjeev.papnoi/www/uvdesk-community-v1.1.8/vendor/uvdesk/core-framework/Resources/views/ticket.html.twig");
    }
}
