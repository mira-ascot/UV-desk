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

/* @UVDeskCoreFramework/ticketList.html.twig */
class __TwigTemplate_1a476a2fd8ffa097d834705e9534182b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/ticketList.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/ticketList.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tickets"), "html", null, true);
        
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
        .uv-dropdown.asset-visibility li input {
            z-index: 100;
        }
        .uv-dropdown.asset-visibility ul li label {
            color: #333333;
            font-size: 17px;
            font-weight: 500;
            text-transform: capitalize;
            cursor: pointer;
            margin: auto;
        }
        .uv-table td a {
            color: #333333;
        }
        .uv-table.uv-list-view table tbody td.uv-width-100 {
            width: 100px !important;
        }
        .uv-table.uv-list-view td[data-index=\"agent\"] {
            white-space: nowrap;
        }
        .uv-view:not(.uv-stack-view) .uv-table td a {
            display: inline-block;
            width: 100%;
        }
        .uv-action-bar-col-lt.uv-width-100 {
            width: 100% !important;
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
            border-top: 1px solid #d3d3d3;
            padding-top: 10px;
            padding-bottom: 10px;
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
        tr.unread {
            background: #f1f1f1;
        }
        .uv-table table tbody tr.not-assigned td {
            border-bottom: 1px solid #ffcacc;
        }
        .clear-search-icon {
            cursor: pointer;
            color: #B1B1AE;;
            font-size: 14px;
            top: 80px;
            position: absolute;
            left: 10;
            right: 152px;
        }
        #error-message {
            position: absolute;
            font-size: 13.2px;
            color: #FF5656;
            margin-top: 41px;
            margin-left: -291px;
            font-style: italic;
        }
        .search-by {
            border-top-right-radius: 0px  !important;
            border-bottom-right-radius: 0px  !important;
            border-right: none !important;
        }
        .uv-search-inline {
            border-top-left-radius: 0px;
            border-bottom-left-radius: 0px;
            padding: 7px 22px 9px 33px;
            position: relative;
        }
        .uv-action-bar {
            padding-bottom: 15px !important;
        }
        @media screen and (max-width: 500px) {
            .uv-action-bar label {
                display: inline-block;
            }
        }

        @media screen and (max-width: 400px) {
            .clear-search-icon {
                top: 215px;
                right: 30px;
            }
            #error-message {
                margin-top: 43px;
                margin-left: 8px;
                font-size: 11.4px;
            }
        }

        @media screen and (max-width: 500px) and (min-width: 400px) {
            .clear-search-icon {
                top: 215px;
                right: 30px;
            }
            #error-message {
                margin-top: 43px;
                margin-left: 8px;
                font-size: 13.5px;
            }
        }

        @media screen and (max-width: 600px) {
            .uv-inner-section .uv-action-bar .uv-dropdown .uv-dropdown-btn {
                width: 100%;
            }
        }
        @media screen and (min-width: 1100px) and (max-width: 1250px)  {
            .clear-search-icon {
                top: 125px;
            }
        }
        @media screen and (max-width: 1024px) {
            .clear-search-icon {
                right: 25px;
            }
        }

        @media screen and (max-width: 500px) {
            .uv-inner-section .uv-action-bar .uv-action-bar-col-lt {
                width: 100% !important;
            }
            .uv-inner-section .uv-action-bar .uv-action-bar-col-rt {
                width: 100% !important;
            }
        }

        .uv-action-bar-col-lt {
            width: 40% !important;
        }
        .uv-action-bar-col-rt {
            width: 60% !important;
        }

        .uv-dropdown-list ul.uv-agents-list li  {
            padding: 15px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 178
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

        // line 179
        yield "    ";
        // line 180
        yield "    <div class=\"uv-pop-up-overlay\" id=\"quick-view-modal\">
        <div class=\"uv-pop-up-box uv-pop-up-wide\"></div>
    </div>

    <div class=\"uv-inner-section\">
        ";
        // line 186
        yield "        <div class=\"uv-aside\" ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 186, $this->source); })()), "request", [], "any", false, false, false, 186), "cookies", [], "any", false, false, false, 186) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 186, $this->source); })()), "request", [], "any", false, false, false, 186), "cookies", [], "any", false, false, false, 186), "get", ["uv-asideView"], "method", false, false, false, 186))) {
            yield " style=\"display: none;\" ";
        }
        yield " >
            <div class=\"uv-aside-default\">
                <div class=\"uv-aside-head\">
                    <div class=\"uv-aside-title\">
                        <h6>";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tickets"), "html", null, true);
        yield "</h6>
                    </div>

                    <div class=\"uv-aside-back\">
                        <span onclick=\"history.length > 1 ? history.go(-1) : window.location = '";
        // line 194
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_dashboard");
        yield "';\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back"), "html", null, true);
        yield "</span>
                    </div>
                </div>

                <div class=\"uv-aside-nav\">
                    <ul>
                        ";
        // line 201
        yield "                        <ul class=\"predefined-label-list uv-aside-list\">
                            <li>
                                <a href=\"#\" class=\"uv-aside-active\">";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        yield " <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>

                                ";
        // line 206
        yield "                                <ul class=\"status-list\">
                                    <li>
                                        <a href=\"#\" data-id=\"1\" class=\"uv-aside-nav-active\"><span class=\"name\">";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Open"), "html", null, true);
        yield "</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"2\"><span class=\"name\">";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pending"), "html", null, true);
        yield "</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"6\"><span class=\"name\">";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Answered"), "html", null, true);
        yield "</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"3\"><span class=\"name\">";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Resolved"), "html", null, true);
        yield "</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"4\"><span class=\"name\">";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Closed"), "html", null, true);
        yield "</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"5\"><span class=\"name\">";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Spam"), "html", null, true);
        yield "</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#new\">";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New"), "html", null, true);
        yield " <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#unassigned\">";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("UnAssigned"), "html", null, true);
        yield " <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#notreplied\">";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("UnAnswered"), "html", null, true);
        yield " <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#mine\">";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My Tickets"), "html", null, true);
        yield " <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#starred\">";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Starred"), "html", null, true);
        yield " <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#trashed\" style=\"border-bottom: none\">";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Trashed"), "html", null, true);
        yield " <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                        </ul>

                        ";
        // line 248
        yield "                        <ul class=\"uv-aside-custom\"></ul>
                    </ul>
                </div>

                <a class=\"uv-btn-small add-new-label\" href=\"#\"><span class=\"uv-icon-add\"></span> ";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label"), "html", null, true);
        yield "</a>
            </div>

            <!-- Label add and edit -->
            <div class=\"uv-add-edit-label\" style=\"display: block\"></div>
        </div>

        ";
        // line 260
        yield "        <div class=\"uv-view ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 260, $this->source); })()), "request", [], "any", false, false, false, 260), "cookies", [], "any", false, false, false, 260) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 260, $this->source); })()), "request", [], "any", false, false, false, 260), "cookies", [], "any", false, false, false, 260), "get", ["uv-asideView"], "method", false, false, false, 260))) {
            yield " uv-aside-view ";
        }
        yield "\">
            <h1>";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tickets"), "html", null, true);
        yield "</h1>

            ";
        // line 264
        yield "            <div class=\"uv-action-bar\">
                ";
        // line 266
        yield "                <div class=\"uv-action-select-wrapper\">
                    <label class=\"uv-vertical-align uv-margin-left-27\">
                        <div class=\"uv-checkbox\">
                            <input type=\"checkbox\" class=\"select-all-checkbox\"><span class=\"uv-checkbox-view\"></span>
                        </div>
                    </label>
                </div>
                ";
        // line 274
        yield "                <div class=\"uv-action-col-wrapper\">
                    ";
        // line 276
        yield "                    <div class=\"uv-action-bar-col-lt\">
                        <div class=\"filter\">
                            ";
        // line 279
        yield "                            <div class=\"uv-dropdown sort\">
                                <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort By:"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last Replied"), "html", null, true);
        yield "</div>

                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort By"), "html", null, true);
        yield "</label>
                                        <ul></ul>
                                    </div>
                                </div>
                            </div>

                            ";
        // line 291
        yield "                            <div class=\"uv-dropdown asset-visibility\">
                                <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Assets Visibility"), "html", null, true);
        yield "</div>

                                <div class=\"uv-dropdown-list uv-bottom-left\" style=\"width: 215px;\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>";
        // line 296
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Assets Visibility"), "html", null, true);
        yield "</label>

                                        <ul>
                                            ";
        // line 300
        yield "                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"source\" name=\"assetVisibility[]\" value=\"source\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"source\">";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Channel/Source"), "html", null, true);
        yield "</label>
                                            </li>

                                            ";
        // line 312
        yield "                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"customer-name\" name=\"assetVisibility[]\" value=\"customer-name\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"customer-name\">";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Name"), "html", null, true);
        yield "</label>
                                            </li>

                                            ";
        // line 324
        yield "                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"customer-email\" name=\"assetVisibility[]\" value=\"customer-email\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"customer-email\">";
        // line 332
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Email"), "html", null, true);
        yield "</label>
                                            </li>

                                            ";
        // line 336
        yield "                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"timestamp\" name=\"assetVisibility[]\" value=\"timestamp\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"timestamp\">";
        // line 344
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Timestamp"), "html", null, true);
        yield "</label>
                                            </li>

                                            ";
        // line 348
        yield "                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"group\" name=\"assetVisibility[]\" value=\"group\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"group\">";
        // line 356
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
        yield "</label>
                                            </li>

                                            ";
        // line 360
        yield "                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"team\" name=\"assetVisibility[]\" value=\"team\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"team\">";
        // line 368
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team"), "html", null, true);
        yield "</label>
                                            </li>

                                            ";
        // line 372
        yield "                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"type1\" name=\"assetVisibility[]\" value=\"type1\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"type1\">";
        // line 380
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        yield "</label>
                                            </li>

                                            ";
        // line 384
        yield "                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"replies\" name=\"assetVisibility[]\" value=\"replies\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"replies\">";
        // line 392
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Replies"), "html", null, true);
        yield "</label>
                                            </li>

                                            ";
        // line 396
        yield "                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"agent\" name=\"assetVisibility[]\" value=\"agent\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"agent\">";
        // line 404
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        yield "</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    ";
        // line 414
        yield "                    <div class=\"uv-action-bar-col-lt\" style=\"display: none\">
                        <!-- Mass action -->
                        <div class=\"mass-action\">
                            <div class=\"property-block\">
                                ";
        // line 419
        yield "                                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 419, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ASSIGN_TICKET"], "method", false, false, false, 419)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 420
            yield "                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">";
            // line 421
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
            yield "</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
            // line 424
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
            yield "</label>
                                                <div class=\"uv-search-sm\">
                                                    <input type=\"text\" class=\"uv-search-field\" placeholder=\"Search\">
                                                </div>
                                            </div>

                                            <ul class=\"uv-agents-list agent\" data-action=\"agent\">
                                                ";
            // line 431
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 431, $this->source); })()), "getAgentPartialDataCollection", [], "method", false, false, false, 431));
            foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
                // line 432
                yield "                                                    <li data-index=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 432), "html", null, true);
                yield "\">
                                                        ";
                // line 433
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 433) != null)) {
                    // line 434
                    yield "                                                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 434, $this->source); })()), "request", [], "any", false, false, false, 434), "scheme", [], "any", false, false, false, 434) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 434, $this->source); })()), "request", [], "any", false, false, false, 434), "httpHost", [], "any", false, false, false, 434)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 434), "html", null, true);
                    yield "\"/>
                                                        ";
                } else {
                    // line 436
                    yield "                                                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 436, $this->source); })())), "html", null, true);
                    yield "\" alt=\"\"/>
                                                        ";
                }
                // line 438
                yield "                                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 438), "html", null, true);
                yield "
                                                        
                                                        ";
                // line 440
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 440, $this->source); })()), "getUserPresenceStatus", [], "any", false, false, false, 440)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 441
                    yield "                                                            ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "isOnline", [], "any", false, false, false, 441)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 442
                        yield "                                                                <span title=\"Online\" style=\"cursor:pointer; color: green; font-size: 15px; vertical-align: middle;\">●</span>
                                                                    ";
                    } else {
                        // line 444
                        yield "                                                                <span title=\"Offline\" style=\"cursor:pointer; color: red; font-size: 15px; vertical-align: middle;\">●</span>
                                                            ";
                    }
                    // line 446
                    yield "                                                        ";
                }
                // line 447
                yield "                                                    </li>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['agent'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 449
            yield "                                            </ul>
                                        </div>
                                    </div>
                                ";
        }
        // line 453
        yield "
                                ";
        // line 455
        yield "                                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 455, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ASSIGN_TICKET_GROUP"], "method", false, false, false, 455)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 456
            yield "                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">";
            // line 457
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
            yield "</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
            // line 460
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
            yield "</label>
                                                <div class=\"uv-search-sm\">
                                                    <input type=\"text\" class=\"uv-search-field\" placeholder=\"Search\">
                                                </div>
                                            </div>

                                            <ul class=\"uv-search-list group\" data-action=\"group\">
                                                ";
            // line 467
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 467, $this->source); })()), "getSupportGroups", [], "method", false, false, false, 467));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 468
                yield "                                                    <li data-index=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 468), "html", null, true);
                yield "\"><a href=\"#\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 468), "html", null, true);
                yield "</a></li>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 470
            yield "                                            </ul>
                                        </div>
                                    </div>
                                ";
        }
        // line 474
        yield "
                                ";
        // line 476
        yield "                                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 476, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ASSIGN_TICKET_GROUP"], "method", false, false, false, 476)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 477
            yield "                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">";
            // line 478
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team"), "html", null, true);
            yield "</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
            // line 481
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team"), "html", null, true);
            yield "</label>
                                                <div class=\"uv-search-sm\">
                                                    <input type=\"text\" class=\"uv-search-field\" placeholder=\"Search\">
                                                </div>
                                            </div>

                                            <ul class=\"uv-search-list team\" data-action=\"team\">
                                                ";
            // line 488
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 488, $this->source); })()), "getSupportTeams", [], "method", false, false, false, 488));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 489
                yield "                                                    <li data-index=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 489), "html", null, true);
                yield "\"><a href=\"#\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 489), "html", null, true);
                yield "</a></li>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 491
            yield "                                            </ul>
                                        </div>
                                    </div>
                                ";
        }
        // line 495
        yield "
                                ";
        // line 497
        yield "                                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 497, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_UPDATE_TICKET_STATUS"], "method", false, false, false, 497)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 498
            yield "                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">";
            // line 499
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
            yield "</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
            // line 502
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
            yield "</label>

                                                <ul class=\"status\" data-action=\"status\">
                                                    ";
            // line 505
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ticketStatusCollection"]) || array_key_exists("ticketStatusCollection", $context) ? $context["ticketStatusCollection"] : (function () { throw new RuntimeError('Variable "ticketStatusCollection" does not exist.', 505, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 506
                yield "                                                        <li data-index=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 506), "html", null, true);
                yield "\"><a href=\"#\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "description", [], "any", false, false, false, 506)), "html", null, true);
                yield "</a></li>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['status'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 508
            yield "                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 513
        yield "
                                ";
        // line 515
        yield "                                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 515, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_UPDATE_TICKET_TYPE"], "method", false, false, false, 515)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 516
            yield "                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">";
            // line 517
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
            yield "</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
            // line 520
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
            yield "</label>
                                                <div class=\"uv-search-sm\">
                                                    <input type=\"text\" class=\"uv-search-field\" placeholder=\"";
            // line 522
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
            yield "\">
                                                </div>
                                            </div>

                                            <ul class=\"uv-search-list type\" data-action=\"type\">
                                                ";
            // line 527
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 527, $this->source); })()), "getTypes", [], "method", false, false, false, 527));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 528
                yield "                                                    <li data-index=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 528), "html", null, true);
                yield "\"><a href=\"#\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 528), "html", null, true);
                yield "</a></li>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 530
            yield "                                            </ul>
                                        </div>
                                    </div>
                                ";
        }
        // line 534
        yield "
                                ";
        // line 536
        yield "                                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 536, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_UPDATE_TICKET_PRIORITY"], "method", false, false, false, 536)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 537
            yield "                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">";
            // line 538
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Priority"), "html", null, true);
            yield "</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
            // line 541
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Priority"), "html", null, true);
            yield "</label>

                                                <ul class=\"priority\" data-action=\"priority\">
                                                    ";
            // line 544
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ticketPriorityCollection"]) || array_key_exists("ticketPriorityCollection", $context) ? $context["ticketPriorityCollection"] : (function () { throw new RuntimeError('Variable "ticketPriorityCollection" does not exist.', 544, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["priority"]) {
                // line 545
                yield "                                                        <li data-index=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["priority"], "id", [], "any", false, false, false, 545), "html", null, true);
                yield "\"><a href=\"#\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["priority"], "description", [], "any", false, false, false, 545)), "html", null, true);
                yield "</a></li>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['priority'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 547
            yield "                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 552
        yield "
                                ";
        // line 554
        yield "                                <div class=\"uv-dropdown\">
                                    <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">";
        // line 555
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label"), "html", null, true);
        yield "</div>
                                    <div class=\"uv-dropdown-list uv-bottom-left\">
                                        <div class=\"uv-dropdown-container\">
                                            <label>";
        // line 558
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label"), "html", null, true);
        yield "</label>

                                            <div class=\"uv-search-sm\">
                                                <input type=\"text\" class=\"uv-search-field\" placeholder=\"Search\">
                                            </div>
                                        </div>

                                        <ul class=\"uv-search-list label\" data-action=\"label\"></ul>
                                    </div>
                                </div>

                                ";
        // line 570
        yield "                                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 570, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_DELETE_TICKET"], "method", false, false, false, 570)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 571
            yield "                                    <a class=\"uv-btn-stroke uv-margin-right-5\" id=\"mass-delete\" data-action=\"trashed\" style=\"margin-left: 5px;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
            yield "</a>
                                ";
        }
        // line 573
        yield "                            </div>

                            ";
        // line 576
        yield "                            <div class=\"trashed-block\" style=\"display: none\">
                                ";
        // line 578
        yield "                                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 578, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_RESTORE_TICKET"], "method", false, false, false, 578)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 579
            yield "                                    <a class=\"uv-btn-stroke uv-margin-right-5\" id=\"mass-restore\" data-action=\"restore\" style=\"margin-left: 5px;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Restore"), "html", null, true);
            yield "</a>
                                ";
        }
        // line 581
        yield "
                                ";
        // line 583
        yield "                                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 583, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_DELETE_TICKET"], "method", false, false, false, 583)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 584
            yield "                                    <a class=\"uv-btn-stroke uv-margin-right-5\" id=\"mass-delete-forever\" data-action=\"delete\" style=\"margin-left: 5px;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete Forever"), "html", null, true);
            yield "</a>
                                ";
        }
        // line 586
        yield "                            </div>
                        </div>
                    </div>

                    ";
        // line 591
        yield "                    <div class=\"uv-action-bar-col-rt\">
                        <!-- Search Tickets -->
                        <div class=\"uv-dropdown uv-dropdown-navigations-support\" style=\"margin-right:-5px;\">
                            <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5 search-by\">
                                ";
        // line 595
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search By:"), "html", null, true);
        yield " <span id=\"new-data\"></span>
                            </div>
                            <div class=\"uv-dropdown-list uv-bottom-left\" style=\"width: unset;\">
                                <div class=\"uv-dropdown-container\" style=\"text-align: left;padding: 10px;\">
                                    <label>";
        // line 599
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search By"), "html", null, true);
        yield "</label>
                                    <ul class=\"uv-dropdown-container-list\">
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <input type=\"text\" class=\"uv-search-inline\" placeholder=\"";
        // line 605
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        yield "\">
                        <span id=\"clear-search\" class=\"clear-search-icon\" style=\"display: none;\">&#10006;</span> <!-- Clear icon -->
                        <span id=\"error-message\"></span>

                        <!-- Extra Filters -->
                        <div class=\"uv-btn-stroke uv-margin-left-15 filter-view-trigger\" data-target=\"uv-filter-view\"><span class=\"uv-icon-filter\"></span>";
        // line 610
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter View"), "html", null, true);
        yield "</div>
                    </div>
                </div>
            </div>

            ";
        // line 616
        yield "            <div class=\"uv-table uv-list-view\">
                <table>
                    <thead>
                    <tr>
                        <th class=\"uv-width-140\"></th>
                        <th>";
        // line 621
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID"), "html", null, true);
        yield "</th>
                        <th class=\"uv-min-width-300\">";
        // line 622
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
        yield "</th>
                        <th data-index=\"customer-name\">";
        // line 623
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Name"), "html", null, true);
        yield "</th>
                        <th data-index=\"customer-email\">";
        // line 624
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Email"), "html", null, true);
        yield "</th>
                        <th data-index=\"timestamp\">";
        // line 625
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Timestamp"), "html", null, true);
        yield "</th>
                        <th style =\"min-width:100px\" data-index=\"lastReply\">";
        // line 626
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last Reply"), "html", null, true);
        yield "</th>
                        <th data-index=\"group\">";
        // line 627
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
        yield "</th>
                        <th data-index=\"team\">";
        // line 628
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team"), "html", null, true);
        yield "</th>
                        <th data-index=\"type1\">";
        // line 629
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        yield "</th>
                        <th data-index=\"replies\">";
        // line 630
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Replies"), "html", null, true);
        yield "</th>
                        <th data-index=\"agent\">";
        // line 631
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        yield "</th>
                    </tr>
                    </thead>

                    <tbody></tbody>
                </table>

                <div class=\"navigation\"></div>
            </div>
        </div>

        ";
        // line 643
        yield "        <div class=\"uv-filter-view\" id=\"uv-filter-view\">
            ";
        // line 645
        yield "            <div class=\"uv-filter-head\">
                <div class=\"uv-filter-title\">
                    <h6>";
        // line 647
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tickets"), "html", null, true);
        yield "</h6>
                    <span>";
        // line 648
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save set of filters as a preset to stay more productive"), "html", null, true);
        yield "</span>
                </div>

                <div class=\"uv-filter-toggle\" id=\"filter-close-trigger\"><span></span></div>
            </div>

            ";
        // line 655
        yield "            <div class=\"uv-filter-paper\">
                ";
        // line 657
        yield "                <div class=\"uv-filter-options\">
                    <script>
                        var userFilters = {};
                    </script>

                    ";
        // line 663
        yield "                    <div class=\"uv-element-block\" style=\"border-bottom: 1px solid #D3D3D3; padding-bottom: 5px;\">
                        <label class=\"uv-field-label\">";
        // line 664
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Saved Filters"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\">
                            <div class=\"uv-customize-wrapper\">
                                <select class=\"uv-select uv-select-70\" id=\"saved-filter\">
                                    ";
        // line 668
        $context["filters"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 668, $this->source); })()), "user", [], "any", false, false, false, 668), "agentInstance", [], "any", false, false, false, 668), "userSavedFilters", [], "any", false, false, false, 668);
        // line 669
        yield "                                    ";
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 669, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 670
            yield "                                        <option value=\"\">-- Saved Filter --</option>
                                        ";
            // line 671
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 671, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["userFilter"]) {
                // line 672
                yield "                                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["userFilter"], "id", [], "any", false, false, false, 672), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["userFilter"], "name", [], "any", false, false, false, 672), "html", null, true);
                yield "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['userFilter'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 674
            yield "                                    ";
        } else {
            // line 675
            yield "                                        <option value=\"\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No saved filter created"), "html", null, true);
            yield "</option>
                                    ";
        }
        // line 677
        yield "                                </select>
                                ";
        // line 678
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 678, $this->source); })()), "user", [], "any", false, false, false, 678), "agentInstance", [], "any", false, false, false, 678), "userSavedFilters", [], "any", false, false, false, 678));
        foreach ($context['_seq'] as $context["_key"] => $context["userFilter"]) {
            // line 679
            yield "                                    <script>
                                        ";
            // line 680
            $context["isDefault"] = 0;
            // line 681
            yield "                                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 681, $this->source); })()), "user", [], "any", false, false, false, 681), "agentInstance", [], "any", false, false, false, 681), "defaultFiltering", [], "any", false, false, false, 681) == CoreExtension::getAttribute($this->env, $this->source, $context["userFilter"], "id", [], "any", false, false, false, 681))) {
                // line 682
                yield "                                        ";
                $context["isDefault"] = 1;
                // line 683
                yield "                                        ";
            }
            // line 684
            yield "                                        userFilters[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["userFilter"], "id", [], "any", false, false, false, 684), "html", null, true);
            yield "] = ";
            yield json_encode(["id" => CoreExtension::getAttribute($this->env, $this->source, $context["userFilter"], "id", [], "any", false, false, false, 684), "name" => CoreExtension::getAttribute($this->env, $this->source, $context["userFilter"], "name", [], "any", false, false, false, 684), "route" => CoreExtension::getAttribute($this->env, $this->source, $context["userFilter"], "route", [], "any", false, false, false, 684), "is_default" => (isset($context["isDefault"]) || array_key_exists("isDefault", $context) ? $context["isDefault"] : (function () { throw new RuntimeError('Variable "isDefault" does not exist.', 684, $this->source); })())]);
            yield ";
                                    </script>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['userFilter'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 687
        yield "                                <span class=\"uv-customize\" style=\"display: none\" data-toggle=\"tooltip\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Saved Filter"), "html", null, true);
        yield "\"></span>
                            </div>
                        </div>
                    </div>

                    ";
        // line 692
        $context["filterContext"] = [];
        // line 693
        yield "                    ";
        // line 694
        yield "                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 695
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\" id=\"agent-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"agent\" id=\"agent-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 700
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        yield "</label>
                                </div>
                                <ul class=\"uv-agents-list\">
                                    ";
        // line 703
        $context["options"] = [];
        // line 704
        yield "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 704, $this->source); })()), "getAgentsPartialDetails", [], "any", false, false, false, 704));
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 705
            yield "                                        ";
            $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 705, $this->source); })()), [["id" => CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 705), "name" => CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 705)]]);
            // line 706
            yield "                                        <li data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 706), "html", null, true);
            yield "\">
                                            ";
            // line 707
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 707) != null)) {
                // line 708
                yield "                                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 708, $this->source); })()), "request", [], "any", false, false, false, 708), "scheme", [], "any", false, false, false, 708) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 708, $this->source); })()), "request", [], "any", false, false, false, 708), "httpHost", [], "any", false, false, false, 708)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 708), "html", null, true);
                yield "\"/>
                                            ";
            } else {
                // line 710
                yield "                                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 710, $this->source); })())), "html", null, true);
                yield "\"/>
                                            ";
            }
            // line 712
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 712), "html", null, true);
            yield "
                                        </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['agent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 715
        yield "                                    <li class=\"uv-no-results\" style=\"display: none;\">
                                        ";
        // line 716
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "
                                    </li>
                                    ";
        // line 718
        $context["filterContext"] = Twig\Extension\CoreExtension::merge((isset($context["filterContext"]) || array_key_exists("filterContext", $context) ? $context["filterContext"] : (function () { throw new RuntimeError('Variable "filterContext" does not exist.', 718, $this->source); })()), ["agent" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 718, $this->source); })())]);
        // line 719
        yield "                                </ul>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 726
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\" id=\"customer-filter\">
                            <input class=\"uv-field uv-dropdown-other\" type=\"text\" data-filter-type=\"customer\" id=\"customer-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 731
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        yield "</label>
                                </div>
                                <ul class=\"uv-agents-list\">
                                    <li class=\"uv-filter-info\">
                                        ";
        // line 735
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        yield "
                                    </li>
                                    <li class=\"uv-no-results\" style=\"display: none;\">
                                        ";
        // line 738
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "
                                    </li>
                                </ul>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 747
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\" id=\"group-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"group\" id=\"group-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 752
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        yield "</label>
                                    <ul class=\"\">
                                        ";
        // line 754
        $context["options"] = [];
        // line 755
        yield "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 755, $this->source); })()), "getSupportGroups", [], "method", false, false, false, 755));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 756
            yield "                                            ";
            $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 756, $this->source); })()), [["id" => CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 756), "name" => CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 756)]]);
            // line 757
            yield "                                            <li data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 757), "html", null, true);
            yield "\">
                                                ";
            // line 758
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 758), "html", null, true);
            yield "
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 761
        yield "                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            ";
        // line 762
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "
                                        </li>
                                        ";
        // line 764
        $context["filterContext"] = Twig\Extension\CoreExtension::merge((isset($context["filterContext"]) || array_key_exists("filterContext", $context) ? $context["filterContext"] : (function () { throw new RuntimeError('Variable "filterContext" does not exist.', 764, $this->source); })()), ["group" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 764, $this->source); })())]);
        // line 765
        yield "                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 773
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\" id=\"team-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"team\" id=\"team-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 778
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        yield "</label>
                                    <ul class=\"\">
                                        ";
        // line 780
        $context["options"] = [];
        // line 781
        yield "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 781, $this->source); })()), "getSupportTeams", [], "method", false, false, false, 781));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 782
            yield "                                            ";
            $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 782, $this->source); })()), [["id" => CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 782), "name" => CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 782)]]);
            // line 783
            yield "                                            <li data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 783), "html", null, true);
            yield "\">
                                                ";
            // line 784
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 784), "html", null, true);
            yield "
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 787
        yield "                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            ";
        // line 788
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "
                                        </li>
                                        ";
        // line 790
        $context["filterContext"] = Twig\Extension\CoreExtension::merge((isset($context["filterContext"]) || array_key_exists("filterContext", $context) ? $context["filterContext"] : (function () { throw new RuntimeError('Variable "filterContext" does not exist.', 790, $this->source); })()), ["team" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 790, $this->source); })())]);
        // line 791
        yield "                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 799
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\" id=\"type-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"type\" id=\"type-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 804
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        yield "</label>
                                    <ul class=\"\">
                                        ";
        // line 806
        $context["options"] = [];
        // line 807
        yield "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 807, $this->source); })()), "getTypes", [], "method", false, false, false, 807));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 808
            yield "                                            ";
            $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 808, $this->source); })()), [["id" => CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 808), "name" => CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 808)]]);
            // line 809
            yield "                                            <li data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 809), "html", null, true);
            yield "\">
                                                ";
            // line 810
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 810), "html", null, true);
            yield "
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 813
        yield "                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            ";
        // line 814
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "
                                        </li>
                                        ";
        // line 816
        $context["filterContext"] = Twig\Extension\CoreExtension::merge((isset($context["filterContext"]) || array_key_exists("filterContext", $context) ? $context["filterContext"] : (function () { throw new RuntimeError('Variable "filterContext" does not exist.', 816, $this->source); })()), ["type" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 816, $this->source); })())]);
        // line 817
        yield "                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 825
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Priority"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\" id=\"priority-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"priority\" id=\"priority-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 830
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        yield "</label>
                                    <ul class=\"\">
                                        ";
        // line 832
        $context["options"] = [];
        // line 833
        yield "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 833, $this->source); })()), "getPriorities", [], "method", false, false, false, 833));
        foreach ($context['_seq'] as $context["_key"] => $context["priority"]) {
            // line 834
            yield "                                            ";
            $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 834, $this->source); })()), [["id" => CoreExtension::getAttribute($this->env, $this->source, $context["priority"], "id", [], "any", false, false, false, 834), "name" => CoreExtension::getAttribute($this->env, $this->source, $context["priority"], "code", [], "any", false, false, false, 834), "color" => CoreExtension::getAttribute($this->env, $this->source, $context["priority"], "colorCode", [], "any", false, false, false, 834)]]);
            // line 835
            yield "                                            <li data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["priority"], "id", [], "any", false, false, false, 835), "html", null, true);
            yield "\">
                                                ";
            // line 836
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["priority"], "code", [], "any", false, false, false, 836)), "html", null, true);
            yield "
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['priority'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 839
        yield "                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            ";
        // line 840
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "
                                        </li>
                                        ";
        // line 842
        $context["filterContext"] = Twig\Extension\CoreExtension::merge((isset($context["filterContext"]) || array_key_exists("filterContext", $context) ? $context["filterContext"] : (function () { throw new RuntimeError('Variable "filterContext" does not exist.', 842, $this->source); })()), ["priority" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 842, $this->source); })())]);
        // line 843
        yield "                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 851
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tag"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\" id=\"tag-filter\">
                            <input class=\"uv-field uv-dropdown-other\" type=\"text\" data-filter-type=\"tag\" id=\"tag-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 856
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        yield "</label>
                                    <ul class=\"\">
                                        <li class=\"uv-filter-info\">
                                            ";
        // line 859
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        yield "
                                        </li>
                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            ";
        // line 862
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 871
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Source"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\" id=\"source-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"source\" id=\"source-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 876
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        yield "</label>
                                    <ul class=\"\">
                                        ";
        // line 878
        $context["options"] = [];
        // line 879
        yield "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 879, $this->source); })()), "getAllSources", [], "method", false, false, false, 879));
        foreach ($context['_seq'] as $context["key"] => $context["source"]) {
            // line 880
            yield "                                            ";
            $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 880, $this->source); })()), [["id" => $context["key"], "name" => $context["source"]]]);
            // line 881
            yield "                                            <li data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\">
                                                ";
            // line 882
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["source"]), "html", null, true);
            yield "
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['source'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 885
        yield "                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            ";
        // line 886
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "
                                        </li>
                                        ";
        // line 888
        $context["filterContext"] = Twig\Extension\CoreExtension::merge((isset($context["filterContext"]) || array_key_exists("filterContext", $context) ? $context["filterContext"] : (function () { throw new RuntimeError('Variable "filterContext" does not exist.', 888, $this->source); })()), ["source" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 888, $this->source); })())]);
        // line 889
        yield "                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 896
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mailbox"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\" id=\"mailbox-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"mailbox\" id=\"mailbox-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 901
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        yield "</label>
                                    <ul class=\"\">
                                        ";
        // line 903
        $context["options"] = [];
        // line 904
        yield "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 904, $this->source); })()), "getAllMailboxes", [], "method", false, false, false, 904));
        foreach ($context['_seq'] as $context["_key"] => $context["mailbox"]) {
            // line 905
            yield "                                            ";
            $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 905, $this->source); })()), [["id" => CoreExtension::getAttribute($this->env, $this->source, $context["mailbox"], "email", [], "any", false, false, false, 905), "name" => CoreExtension::getAttribute($this->env, $this->source, $context["mailbox"], "name", [], "any", false, false, false, 905)]]);
            // line 906
            yield "                                            <li data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mailbox"], "email", [], "any", false, false, false, 906), "html", null, true);
            yield "\">
                                                ";
            // line 907
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["mailbox"], "name", [], "any", false, false, false, 907)), "html", null, true);
            yield "
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mailbox'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 910
        yield "                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            ";
        // line 911
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "
                                        </li>
                                        ";
        // line 913
        $context["filterContext"] = Twig\Extension\CoreExtension::merge((isset($context["filterContext"]) || array_key_exists("filterContext", $context) ? $context["filterContext"] : (function () { throw new RuntimeError('Variable "filterContext" does not exist.', 913, $this->source); })()), ["mailbox" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 913, $this->source); })())]);
        // line 914
        yield "                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 922
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Before"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block range\" id=\"before-filter\">
                            <input class=\"uv-field uv-date-picker\" type=\"text\" data-filter-type=\"before\" id=\"before-filter-input\">
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 929
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("After"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block range\" id=\"after-filter\">
                            <input class=\"uv-field uv-date-picker\" type=\"text\" data-filter-type=\"after\" id=\"after-filter-input\">
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 936
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Replies less than"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\" id=\"reply-filter\">
                            <input class=\"uv-field\" type=\"number\" min=\"1\" data-filter-type=\"replies-less\" id=\"repliesLess-filter-input\">
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 943
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Replies more than"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\" id=\"reply-filter\">
                            <input class=\"uv-field\" type=\"number\" min=\"0\" data-filter-type=\"replies-more\" id=\"repliesMore-filter-input\">
                        </div>
                    </div>

                    <div class=\"uv-action-buttons\">
                    </div>

                    ";
        // line 953
        yield "                    <a class=\"uv-btn-remove\" href=\"#\"><span class=\"uv-icon-discard\"></span> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Clear All"), "html", null, true);
        yield "</a>
                </div>

                ";
        // line 957
        yield "                <div class=\"uv-filter-edit\" style=\"display: none;\"></div>
            </div>

            <script type=\"text/javascript\">
                var filterContext = ";
        // line 961
        yield json_encode((isset($context["filterContext"]) || array_key_exists("filterContext", $context) ? $context["filterContext"] : (function () { throw new RuntimeError('Variable "filterContext" does not exist.', 961, $this->source); })()));
        yield "
            </script>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 967
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

        // line 968
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

    ";
        // line 971
        yield "    <script id=\"ticket_list_sorting_tmp\" type=\"text/template\">
        <li class=\"<% if(sort == 'ticket.id') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/ticket.id/<% if(sort == 'ticket.id') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"ticket.id\">
                ";
        // line 974
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ticket Id", [], "messages");
        // line 975
        yield "                <% if(sort == 'ticket.id') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>

        <li class=\"<% if(sort == 'ticket.updatedAt') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/ticket.updatedAt/<% if(sort == 'ticket.updatedAt') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"ticket.updatedAt\">
                ";
        // line 983
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last Replied", [], "messages");
        // line 984
        yield "                <% if(sort == 'ticket.updatedAt') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>

        <li class=\"<% if(sort == 'agentName') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/agentName/<% if(sort == 'agentName') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"agentName\">
                ";
        // line 992
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Assign To", [], "messages");
        // line 993
        yield "                <% if(sort == 'agentName') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>

        <li class=\"<% if(sort == 'customerEmail') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/customerEmail/<% if(sort == 'customerEmail') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"customerEmail\">
                ";
        // line 1001
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer Email", [], "messages");
        // line 1002
        yield "                <% if(sort == 'customerEmail') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>

        <li class=\"<% if(sort == 'customerName') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/customerName/<% if(sort == 'customerName') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"customerName\">
                ";
        // line 1010
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer Name", [], "messages");
        // line 1011
        yield "                <% if(sort == 'customerName') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>
    </script>

    ";
        // line 1019
        yield "    <script id=\"ticket_status_list_tmp\" type=\"text/template\">
        <ul class=\"status-list\">
            ";
        // line 1021
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ticketStatusCollection"]) || array_key_exists("ticketStatusCollection", $context) ? $context["ticketStatusCollection"] : (function () { throw new RuntimeError('Variable "ticketStatusCollection" does not exist.', 1021, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 1022
            yield "                <li>
                    <a href=\"#\" class=\"<% if(active == ";
            // line 1023
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 1023), "html", null, true);
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 1023) == 1)) {
                yield " || active == 0";
            }
            yield ") { %>uv-aside-nav-active<% } %>\" data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 1023), "html", null, true);
            yield "\">
                        <span class=\"name\">";
            // line 1024
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "description", [], "any", false, false, false, 1024)), "html", null, true);
            yield "</span>
                        <span class=\"uv-flag-gray\">
                            <% if(status && status[1] != undefined) { %>
                                <%= status[";
            // line 1027
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 1027), "html", null, true);
            yield "] %>
                            <% } else { %>
                                0
                            <% } %>
                        </span>
                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1035
        yield "        </ul>
    </script>

    ";
        // line 1039
        yield "    <script id=\"predefined_label_tmp\" type=\"text/template\">
        <li>
            <a href=\"#\" <% if (active == '') { %> class=\"uv-aside-active\" <% } %>>
            ";
        // line 1042
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        yield "
            <span class=\"uv-flag-gray uv-flag-dark\"><%= labelDetails.predefind.all %></span>
            </a>
        </li>
        <li>
            <a href=\"#new\" <% if(active == 'new') { %> class=\"uv-aside-active\" <% } %> >
            ";
        // line 1048
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New"), "html", null, true);
        yield "
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.new %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#unassigned\" <% if(active == 'unassigned') { %> class=\"uv-aside-active\" <% } %> >
            ";
        // line 1056
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("UnAssigned"), "html", null, true);
        yield "
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.unassigned %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#notreplied\" <% if(active == 'notreplied') { %> class=\"uv-aside-active\" <% } %> >
            ";
        // line 1064
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("UnAnswered"), "html", null, true);
        yield "
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.notreplied %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#mine\" <% if(active == 'mine') { %> class=\"uv-aside-active\" <% } %> >
            ";
        // line 1072
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My Tickets"), "html", null, true);
        yield "
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.mine %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#starred\" <% if(active == 'starred') { %> class=\"uv-aside-active\" <% } %> >
            ";
        // line 1080
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Starred"), "html", null, true);
        yield "
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.starred %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#trashed\" <% if(active == 'trashed') { %> class=\"uv-aside-active\" <% } %>>
            ";
        // line 1088
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Trashed"), "html", null, true);
        yield "
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.trashed %>
                </span>
            </a>
        </li>
    </script>

    ";
        // line 1097
        yield "    <script id=\"custom_label_tmp\" type=\"text/template\">
        <a href=\"#label/<%= id %>\"  data-id=\"<%= id %>\">
            <%- name %>
            <span class=\"uv-flag-gray\" style=\"<% if(colorCode) { %>background-color:<%= colorCode %><% } %>\">
                <%= count %>
            </span>
        </a>
        <span class=\"uv-customize\" data-target=\"uv-task-view\" data-toggle=\"tooltip\" title=\"";
        // line 1104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Label"), "html", null, true);
        yield "\"></span>
    </script>

    ";
        // line 1108
        yield "    <script id=\"add_edit_label_tmp\" type=\"text/template\">
        <div class=\"uv-aside-head\">
            <div class=\"uv-aside-title\">
                <% if(id) { %>
                <h6>";
        // line 1112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Label"), "html", null, true);
        yield "</h6>
                <% } else { %>
                <h6>";
        // line 1114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Label"), "html", null, true);
        yield "</h6>
                <% } %>
            </div>
            <div class=\"uv-aside-back\" id=\"back-to-labels\">
                <span>";
        // line 1118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back"), "html", null, true);
        yield "</span>
            </div>
        </div>
        <div class=\"uv-aside-option\" data-id=\"<%= id %>\">

            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">";
        // line 1124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        yield "</label>
                <div class=\"uv-field-block\">
                    <input class=\"uv-field\" type=\"text\" value=\"<%- name %>\" />
                </div>
            </div>

            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">";
        // line 1131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose a Color"), "html", null, true);
        yield "</label>
                <div class=\"uv-field-block\">
                    <% colors = ['#337CFF','#FEBF00','#E5549F','#27B6BB','#FB8A3F','#43AF52'] %>
                    <% for(var colorTemp in colors) { %>
                    <span class=\"uv-color-block <% if(colorCode == colors[colorTemp]) { %>uv-color-active<% } %>\" data-color=\"<%- colors[colorTemp] %>\" style=\"background:<%- colors[colorTemp] %>\"></span>
                    <% } %>
                </div>
            </div>
            <div>
                <a class=\"uv-btn add-update-btn\" href=\"#\">
                    <% if(id) { %>
                    ";
        // line 1142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update"), "html", null, true);
        yield "
                    <% } else { %>
                    ";
        // line 1144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create"), "html", null, true);
        yield "
                    <% } %>
                </a>
            </div>
            <% if(id) { %>
            <a class=\"uv-btn-remove\"><span class=\"uv-icon-discard\"></span>";
        // line 1149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove Label"), "html", null, true);
        yield "</a>
            <% } %>
        </div>
    </script>

    <!-- // Search type option Template -->
    <script id=\"search_type_option_list\" type=\"text/template\">
        <li tabindex=\"0\" data-id=\"ID\">
            ";
        // line 1157
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", [], "messages");
        // line 1158
        yield "        </li>

        <li tabindex=\"0\" data-id=\"Subject\">
            ";
        // line 1161
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Subject", [], "messages");
        // line 1162
        yield "        </li>

        <li tabindex=\"0\" data-id=\"Email\">
            ";
        // line 1165
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email", [], "messages");
        // line 1166
        yield "        </li>

        ";
        // line 1168
        if (((array_key_exists("helpdesk", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["helpdesk"]) || array_key_exists("helpdesk", $context) ? $context["helpdesk"] : (function () { throw new RuntimeError('Variable "helpdesk" does not exist.', 1168, $this->source); })()))) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["helpdesk"]) || array_key_exists("helpdesk", $context) ? $context["helpdesk"] : (function () { throw new RuntimeError('Variable "helpdesk" does not exist.', 1168, $this->source); })()), "id", [], "any", false, false, false, 1168) == "266"))) {
            // line 1169
            yield "            <li tabindex=\"0\" data-id=\"Skills\">
                ";
            // line 1170
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Skills", [], "messages");
            // line 1171
            yield "            </li>
        ";
        }
        // line 1173
        yield "    </script>

    ";
        // line 1176
        yield "    <script id=\"add_edit_saved_filter_tmp\" type=\"text/template\">
        <form>
            <div class=\"uv-filter-edit-head\">
                <div class=\"uv-filter-edit-title\">
                    <h6>
                        <% if(id) { %>
                        <input type=\"hidden\" name=\"id\" id=\"filter-id\" value=\"<%= id %>\"/>
                        ";
        // line 1183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Saved Filter"), "html", null, true);
        yield "
                        <% } else { %>
                        ";
        // line 1185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New Saved Filter"), "html", null, true);
        yield "
                        <% } %>
                    </h6>
                </div>
                <div class=\"uv-filter-edit-back back-to-filter\">
                    <span>";
        // line 1190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back"), "html", null, true);
        yield "</span>
                </div>
            </div>
            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">";
        // line 1194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        yield "</label>
                <div class=\"uv-field-block\">
                    <input class=\"uv-field name\" name=\"name\" type=\"text\" value=\"<%- name %>\" />
                </div>
            </div>

            <div class=\"uv-element-block\">
                <label>
                    <div class=\"uv-checkbox\">
                        <input type=\"checkbox\" name=\"is_default\" <% if(is_default) { %>checked<% } %> />
                        <span class=\"uv-checkbox-view\"></span>
                    </div>
                    <span class=\"uv-checkbox-label\">";
        // line 1206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Is Default"), "html", null, true);
        yield "</span>
                </label>
            </div>

            <div class=\"uv-filters-group\">
                <% _.each(filters, function(filter, key){ %>
                <div class=\"uv-element-block\" data-filter=\"<%= key %>\">
                    <label class=\"uv-field-label\"><%- filter.name %></label>
                    <div class=\"uv-field-block\">
                        <% _.each(filter.options, function(option){ %>
                        <a class=\"uv-btn-tag\" href=\"#\" data-id=\"<%= option.id %>\">
                            <%- option.name %>
                            <span class=\"uv-icon-remove-dark\"></span>
                        </a>
                        <% }); %>
                    </div>
                </div>
                <% }); %>

                <div class=\"uv-action-buttons\">
                    <% if(id) { %>
                    <a class=\"uv-btn-remove\"><span class=\"uv-icon-discard\"></span>";
        // line 1227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove Saved Filter"), "html", null, true);
        yield "</a>
                    <% } %>
                </div>
            </div>
            <div class=\"uv-action-buttons\">
                <a class=\"uv-btn <% if(id) { %>update-filter<% } else { %>save-filter<% } %>\" href=\"#\">
                    <% if(id) { %>
                    ";
        // line 1234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update"), "html", null, true);
        yield "
                    <% } else { %>
                    ";
        // line 1236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create"), "html", null, true);
        yield "
                    <% } %>
                </a>
                <a class=\"uv-btn back-to-filter\" href=\"#\">";
        // line 1239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        yield "</a>
            </div>
        </form>
    </script>

    ";
        // line 1245
        yield "    <script id=\"ticket_quick_view_tmp\" type=\"text/template\">
        <div class=\"uv-pull-right quick-view-navigation\">
            <div class=\"uv-loader\" style=\"display: none\">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <% if(previous) { %>
            <span class=\"uv-btn-tag uv-icon-nav-pre\" data-id=\"<%= previous %>\">
                </span>
            <% } else { %>
            <span class=\"uv-btn-tag uv-icon-nav-pre\" disabled=\"disabled\">
                </span>
            <% } %>
            <% if(next) { %>
            <span class=\"uv-btn-tag uv-icon-nav-nxt\"  data-id=\"<%= next %>\">
                </span>
            <% } else { %>
            <span class=\"uv-btn-tag uv-icon-nav-nxt\" disabled=\"disabled\">
                </span>
            <% } %>
        </div>
        <span class=\"uv-pop-up-close\"></span>
        <a href=\"<%= path %>\"><h2>";
        // line 1268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket Info"), "html", null, true);
        yield " #<%= id %></h2></a>
        <div class=\"uv-pop-up-body uv-inner-section\">
            <div class=\"uv-view\">
                <div class=\"uv-ticket-head\">
                    <div class=\"uv-ticket-strip\">
                        <span>
                            <span class=\"uv-ticket-strip-label\">
                                ";
        // line 1275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Timestamp"), "html", null, true);
        yield " -
                            </span>
                            <span class=\"uv-margin-0\">
                                <%= formatedCreatedAt %>
                            </span>
                        </span>
                        <span>
                            <span class=\"uv-ticket-strip-label\">
                                ";
        // line 1283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("By"), "html", null, true);
        yield " -
                            </span>
                            <%- createThread.user.name %>
                        </span>
                        <% if(agent) { %>
                        <span class=\"agent-info\" style=\"\">
                                <span class=\"uv-ticket-strip-label\">
                                    ";
        // line 1290
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        yield " -
                                </span>
                                <span class=\"name\"><%- agent.name %></span>
                            </span>
                        <% } %>
                    </div>
                    <div class=\"uv-ticket-strip\">
                        <span class=\"uv-btn-tag\">
                            ";
        // line 1298
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Priority"), "html", null, true);
        yield "
                            - <%- priority.description %>
                        </span>
                        <span class=\"uv-btn-tag\">
                            ";
        // line 1302
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "
                            - <%- status.description %>
                        </span>
                        <% if(lastReplyAgentName) { %>
                        <span class=\"uv-btn-tag\">
                                ";
        // line 1307
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last Replied Agent"), "html", null, true);
        yield "
                                - <%- lastReplyAgentName.name.split(\" \")[0] %>
                            </span>
                        <% } %>
                    </div>
                </div>
                <div class=\"uv-ticket-head\">
                    <h1><%- subject %></h1>
                </div>

                <div class=\"uv-ticket-section\">
                    <div class=\"uv-ticket-main create\">
                        <div class=\"uv-ticket-strip\">
                            <span>
                                <span class=\"uv-margin-0 timeago\" data-timestamp=\"<%= createThread.timestamp %>\" title=\"<%= createThread.formatedCreatedAt %>\"><%= createThread.formatedCreatedAt %></span>
                                - <%- createThread.user.name %>
                                <span class=\"uv-ticket-strip-label\">
                                    ";
        // line 1324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("created Ticket"), "html", null, true);
        yield "
                                </span>
                            </span>
                        </div>
                        <div class=\"uv-ticket-main-lt\">
                            <% if (createThread.user.smallThumbnail != null) { %>
                                <img class='border' src=\"";
        // line 1330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1330, $this->source); })()), "request", [], "any", false, false, false, 1330), "scheme", [], "any", false, false, false, 1330) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1330, $this->source); })()), "request", [], "any", false, false, false, 1330), "httpHost", [], "any", false, false, false, 1330)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
        yield "<%= createThread.user.smallThumbnail %>\"/>
                            <% } else { %>
                                <% if (createThread.createdBy == 'customer') { %>
                                    <img class='border' src=\"";
        // line 1333
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_customer_image_path"]) || array_key_exists("default_customer_image_path", $context) ? $context["default_customer_image_path"] : (function () { throw new RuntimeError('Variable "default_customer_image_path" does not exist.', 1333, $this->source); })())), "html", null, true);
        yield "\"/>
                                <% } else { %>
                                    <img class='border' src=\"";
        // line 1335
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 1335, $this->source); })())), "html", null, true);
        yield "\"/>
                                <% } %>
                            <% } %>
                        </div>
                        <div class=\"uv-ticket-main-rt\">
                            <% if(createThread.createdBy == 'customer') { %>
                            <a href=\"";
        // line 1341
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_manage_customer_account");
        yield "/<%= createThread.user.id %>\" class=\"uv-ticket-member-name\">
                                <% } else { %>
                                <% if(createThread.user) { %>
                                <a href=\"";
        // line 1344
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_account");
        yield "/<%= createThread.user.id %>\" class=\"uv-ticket-member-name\">
                                    <% } else { %>
                                    <a class=\"uv-ticket-member-name\">
                                        <% } %>
                                        <% } %>
                                        <%- createThread.user.name %>
                                    </a>

                                    <div class=\"message\">
                                        <p>
                                            <%= createThread.reply %>
                                        </p>
                                    </div>
                                    <!-- Attachment Block -->
                                    <% if(createThread.attachments.length) { %>
                                    <div class=\"uv-ticket-uploads\">
                                        <h4>";
        // line 1360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Uploaded Files"), "html", null, true);
        yield "</h4>
                                        <div class=\"uv-ticket-uploads-strip\">
                                            <% _.each(createThread.attachments, function(file) { %>
                                            <a href=\"<%-file.downloadURL %>\" target =\"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"<%- file.name %>\">
                                                <img src=\"<%-file.iconURL %>\" class=\"uv-auto-pointer-events\">
                                            </a>
                                            <% }) %>
                                        </div>
                                        <% if(createThread.attachments.length >1) { %>
                                        <div class=\"thread-attachments-zip pull-left\">
                                            <div class=\"uv-upload-actions\">
                                                <a href=\"";
        // line 1371
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_download_attachment_zip");
        yield "/<%= createThread.id %>\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download (as .zip)"), "html", null, true);
        yield "</a>
                                            </div>
                                        </div>
                                        <% } %>

                                    </div>
                                    <% } %>
                                    <!-- //Attachment Block -->
                        </div>
                    </div>
                    <% if(lastReply) { %>
                    <div class=\"uv-ticket-main\">
                        <div class=\"uv-ticket-strip\">
                                <span>
                                    <span class=\"uv-margin-0 timeago\" data-timestamp=\"<%= lastReply.timestamp %>\" title=\"<%= lastReply.formatedCreatedAt %>\"><%= lastReply.formatedCreatedAt %></span>
                                    - <%- lastReply.user.name %>
                                    <span class=\"uv-ticket-strip-label\">
                                        ";
        // line 1388
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("made last reply"), "html", null, true);
        yield "
                                    </span>
                                </span>
                        </div>
                        <div class=\"uv-ticket-main-lt\">
                            <% if (lastReply.user.smallThumbnail != null) { %>
                                <img class='border' src=\"";
        // line 1394
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1394, $this->source); })()), "request", [], "any", false, false, false, 1394), "scheme", [], "any", false, false, false, 1394) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1394, $this->source); })()), "request", [], "any", false, false, false, 1394), "httpHost", [], "any", false, false, false, 1394)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
        yield "<%= lastReply.user.smallThumbnail %>\"/>
                            <% } else { %>
                                <% if (lastReply.createdBy == 'customer') { %>
                                    <img class='border' src=\"";
        // line 1397
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_customer_image_path"]) || array_key_exists("default_customer_image_path", $context) ? $context["default_customer_image_path"] : (function () { throw new RuntimeError('Variable "default_customer_image_path" does not exist.', 1397, $this->source); })())), "html", null, true);
        yield "\"/>
                                <% } else { %>
                                    <img class='border' src=\"";
        // line 1399
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 1399, $this->source); })())), "html", null, true);
        yield "\"/>
                                <% } %>
                            <% } %>
                        </div>
                        <div class=\"uv-ticket-main-rt\">
                            <% if(lastReply.createdBy == 'customer') { %>
                            <a href=\"";
        // line 1405
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_manage_customer_account");
        yield "/<%= lastReply.user.id %>\" class=\"uv-ticket-member-name\">
                                <% } else { %>
                                <% if(lastReply.user) { %>
                                <a href=\"";
        // line 1408
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_account");
        yield "/<%= lastReply.user.id %>\" class=\"uv-ticket-member-name\">
                                    <% } else { %>
                                    <a class=\"uv-ticket-member-name\">
                                        <% } %>
                                        <% } %>
                                        <%- lastReply.user.name %>
                                    </a>

                                    <div class=\"message\">
                                        <p>
                                            <%= lastReply.reply %>
                                        </p>
                                    </div>
                                    <!-- Attachment Block -->
                                    <% if(lastReply.attachments.length) { %>
                                    <div class=\"uv-ticket-uploads\">
                                        <h4>";
        // line 1424
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Uploaded Files"), "html", null, true);
        yield "</h4>
                                        <div class=\"uv-ticket-uploads-strip\">
                                            <% _.each(lastReply.attachments, function(file) { %>
                                            <a href=\"<%-file.downloadURL %>\" target =\"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"<%- file.name %>\">
                                                <img src=\"<%-file.iconURL %>\" class=\"uv-auto-pointer-events\">
                                            </a>
                                            <% }) %>
                                        </div>
                                        <% if(lastReply.attachments.length> 1) { %>
                                        <div class=\"thread-attachments-zip pull-left\">
                                            <div class=\"uv-upload-actions\">
                                                <a href=\"";
        // line 1435
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_download_attachment_zip");
        yield "/<%= lastReply.id %>\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download (as .zip)"), "html", null, true);
        yield "</a>
                                            </div>
                                        </div>
                                        <% } %>

                                    </div>
                                    <% } %>
                                    <!-- //Attachment Block -->
                        </div>
                    </div>
                    <% } %>
                </div>
            </div>
        </div>
    </script>

    ";
        // line 1452
        yield "    <script id=\"ticket_list_item_tmp\" type=\"text/template\">
        <td class=\"uv-width-140 uv-no-content\">
            <span class=\"uv-list-ticket-priority\" style=\"<% if(priority) { %>background: <%=priority.colorCode %><% } %>;\"></span>
            <label class=\"uv-vertical-align uv-margin-right-5\">
                <div class=\"uv-checkbox\">
                    <input type=\"checkbox\" class=\"mass-action-checkbox\" value=\"<%= id %>\"/>
                    <span class=\"uv-checkbox-view\"></span>
                </div>
            </label>
            <span class=\"uv-star <% if(isStarred) { %>uv-star-active<% } %> uv-margin-right-5\"></span>
            <span data-index=\"source\">
                <% if(source == 'email') {  %>
                    <span class=\"uv-channel uv-channel-email uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Email\"></span>
                <% } else if(source == 'facebook') {  %>
                    <span class=\"uv-channel uv-channel-facebook uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"></span>
                <% } else if(source == 'twitter') {  %>
                    <span class=\"uv-channel uv-channel-twitter uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"></span>
                <% } else if(source == 'binaka' || source == 'knock') {  %>
                    <span class=\"uv-channel uv-channel-binaka uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Binaka\"></span>
                <% } else if(source == 'api') { %>
                    <span class=\"uv-channel uv-channel-api uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"API\"></span>
                <% } else if(source == 'formbuilder') { %>
                    <span class=\"uv-channel uv-channel-form-builder uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Formbuilder\"></span>
\t\t\t\t<% } else if(source == 'disqus-engage') { %>
                    <span class=\"uv-channel uv-channel-disqus-engage uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Disqus\"></span>
\t\t\t\t<% } else if(source == 'ebay') { %>
                    <span class=\"uv-channel uv-channel-ebay uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Ebay\"></span>
\t\t\t\t<% } else if(source == 'youtube') { %>
                    <span class=\"uv-channel uv-channel-youtube uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Youtube\"></span>
                <% } else { %>
                    <span class=\"uv-channel uv-channel-web uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"<%- source %>\"></span>
                <% } %>

            </span>
            <span class=\"uv-quick-view-trigger\" data-id=\"<%= id %>\"></span>
        </td>
        <td data-value=\"";
        // line 1488
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID"), "html", null, true);
        yield "\" class=\"uv-width-100\">
            <a href=\"<%= path %>\">
                #<%= id %>
            </a>
        </td>
        <td data-value=\"";
        // line 1493
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
        yield "\">
            <a href=\"<%= path %>\">
                <%- subject && subject.length <= 300 ? subject : subject.substr(0, 300) + '...'  %>
            </a>
        </td>
        <td data-value=\"";
        // line 1498
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Name"), "html", null, true);
        yield "\" data-index=\"customer-name\">
            <a href=\"<%= path %>\">
                <%- customer.name %>
            </a>
        </td>
        <td data-value=\"";
        // line 1503
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Email"), "html", null, true);
        yield "\" data-index=\"customer-email\">
            <a href=\"<%= path %>\">
                <%- customer.email %>
            </a>
        </td>
        <td data-value=\"";
        // line 1508
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Timestamp"), "html", null, true);
        yield "\" data-index=\"timestamp\">
            <a href=\"<%= path %>\" class=\"timeago\" data-timestamp=\"<%= timestamp %>\" title=\"<%= formatedCreatedAt %>\">
                <%= formatedCreatedAt %>
            </a>
        </td>
        <td data-value=\"";
        // line 1513
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last Reply"), "html", null, true);
        yield "\" data-index=\"last-reply\">
            <% if(lastReplyTime) { %>
                <a href=\"<%= path %>\">
                    <%= lastReplyTime %>
                </a>
            <% } else { %>
                    ";
        // line 1519
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"), "html", null, true);
        yield "
            <% } %>
        </td>
        <td data-value=\"";
        // line 1522
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
        yield "\" data-index=\"group\">
            <a href=\"<%= path %>\">
                <% if(group) { %>
                <%- group %>
                <% } else { %>
                ";
        // line 1527
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"), "html", null, true);
        yield "
                <% } %>
            </a>
        </td>
        <td data-value=\"";
        // line 1531
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team"), "html", null, true);
        yield "\" data-index=\"team\">
            <a href=\"<%= path %>\">
                <% if(team) { %>
                <%- team %>
                <% } else { %>
                ";
        // line 1536
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"), "html", null, true);
        yield "
                <% } %>
            </a>
        </td>
        <td data-value=\"";
        // line 1540
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        yield "\" data-index=\"type1\">
            <a href=\"<%= path %>\">
                <% if(type) { %>
                <%- type %>
                <% } else { %>
                ";
        // line 1545
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"), "html", null, true);
        yield "
                <% } %>
            </a>
        </td>
        <td data-value=\"";
        // line 1549
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Replies"), "html", null, true);
        yield "\" data-index=\"replies\">
            <a href=\"<%= path %>\">
                <%= totalThreads %>
            </a>
        </td>
        <td data-value=\"";
        // line 1554
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        yield "\" data-index=\"agent\">
            <a href=\"<%= path %>\">
                <% if(agent) { %>
                <% if(agent.smallThumbnail != null) { %>
                <img src=\"";
        // line 1558
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1558, $this->source); })()), "request", [], "any", false, false, false, 1558), "scheme", [], "any", false, false, false, 1558) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1558, $this->source); })()), "request", [], "any", false, false, false, 1558), "httpHost", [], "any", false, false, false, 1558)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
        yield "<%= agent.smallThumbnail %>\" alt=\"\"/>
                <% } else { %>
                <img src=\"";
        // line 1560
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 1560, $this->source); })())), "html", null, true);
        yield "\" alt=\"\"/>
                <% } %>
                <%- agent.name %>
                <% } else { %>
                ";
        // line 1564
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unassigned"), "html", null, true);
        yield "
                <% } %>
            </a>
        </td>
    </script>

    <script type=\"text/javascript\">
        var isPageJustLoaded = true;
        var globalMessageResponse = \"\";
        var currentUserId = \"";
        // line 1573
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1573, $this->source); })()), "getCurrentUser", [], "method", false, false, false, 1573), "id", [], "any", false, false, false, 1573), "html", null, true);
        yield "\";
        var pathToTicket = \"";
        // line 1574
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket", ["ticketId" => "replaceId"]);
        yield "\";

        \$(() => {
            \$('#before-filter-input').datetimepicker({
                format: 'DD-MM-YYYY',
                maxDate: 'now',
                useCurrent: false,
            });

            \$('#after-filter-input').datetimepicker({
                format: 'DD-MM-YYYY',
                maxDate: 'now',
                useCurrent: false,
            });

            // Ticket Model
            var TicketModel = Backbone.Model.extend({
                idAttribute: \"id\",
                defaults: {
                    path: \"\",
                },
                urlRoot: \"";
        // line 1595
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_xhr");
        yield "\"
            });

            // Ticket Label Model
            var LabelModel = Backbone.Model.extend({
                idAttribute: \"id\",
                defaults: {
                    count: 0,
                },
                parse: function (resp, options) {
                    return JSON.parse(resp.label);
                },
                urlRoot: \"";
        // line 1607
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_label_xhr");
        yield "\"
            });

            // Ticket Quick View Model
            var TicketQuickViewModel = Backbone.Model.extend({
                idAttribute: \"id\",
                defaults: {
                    path: \"\",
                    isSynced: false
                }
            });

            // Side Filter Model
            var SideFilterModel = Backbone.Model.extend({
                updateModel: function(type,json) {
                    if(this.has(type)) {
                        context = this.get(type)

                        savedOptionsIds = [];
                        _.each(context, function (option) {
                            savedOptionsIds.push(parseInt(option.id))
                        })

                        if(jQuery.inArray(parseInt(json.id), savedOptionsIds) == -1) {
                            context.push(json);
                            this.set(type, context)
                        }
                    } else {
                        this.set(type, [json])
                    }
                },
                loadFilterOptions: function(data) {
                    var self = this;
                    \$.ajax({
                        url : \"";
        // line 1641
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_collection_load_filter_options_xhr");
        yield "\",
                        type : 'POST',
                        data: data,
                        dataType : 'json',
                        success : function(response) {
                            _.each(response,function(filter,key) {
                                _.each(filter, function (item) {
                                    self.updateModel(key,item)
                                })
                            })
                            sideFilter.render();
                        },
                        error: function (xhr) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                }
            });

            // Ticket Label Collection
            var LabelCollection = Backbone.Collection.extend({
                model: LabelModel,
                isLabelExist: function(labelName, labelId) {
                    var flag = 1;
                    _.each(this.models, function (item) {
                        if(item.get('name').toUpperCase() == labelName.toUpperCase() && item.id != labelId)
                            flag = 0;
                    }, this);
                    return flag;
                }
            });

            // Ticket Collection
            var TicketCollection = AppCollection.extend({
                model: TicketModel,
                url: \"";
        // line 1677
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_collection_xhr");
        yield "\",
                filterParameters: {
                    label: \"\",
                    new: \"\",
                    unassigned: \"\",
                    notreplied: \"\",
                    mine: \"\",
                    starred: \"\",
                    trashed: \"\",
                    label: \"\",
                    status: \"\",
                    search: \"\",
                    searchType: \"\",
                    agent: \"\",
                    customer: \"\",
                    priority: \"\",
                    type: \"\",
                    group: \"\",
                    team: \"\",
                    tag: \"\",
                    mailbox : \"\",
                    source : \"\",
                    after: \"\",
                    before: \"\",
                    repliesLess: \"\",
                    repliesMore: \"\",
                },
                parseRecords: function (response, options) {
                    return response.tickets;
                },
                syncData: function() {
                    app.appView.showLoader();
                    \$('.select-all-checkbox').prop('checked', false);

                    this.fetch({
                        data: this.getValidParameters(),
                        reset: true,
                        success: function(model, response) {
                            ticketQuickViewCollection.reset()
                            app.appView.hideLoader();
                            var ticketListView = new TicketList();

                            app.pager.paginationData = response.pagination;
                            var url = app.pager.paginationData.url;
                            if(ticketCollection.length == 0 && app.pager.paginationData.current != \"0\")
                                router.navigate(url.replace('replacePage', app.pager.paginationData.last),{trigger: true});
                            else {
                                app.pager.render();
                                statusListDetails = response.tabs;
                                labelDetails = response.labels;
                                labelListView.render();
                            }

                            if (globalMessageResponse) {
                                app.appView.renderResponseAlert(globalMessageResponse);
                            }

                            globalMessageResponse = null;
                            sideFilter.backToFilter()
                        },
                        error: function (model, xhr, options) {
                            app.appView.hideLoader();
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                },
                batchOperation: function(data) {
                    var self = this;
                    app.appView.showLoader();
                    \$.ajax({
                        url : \"";
        // line 1748
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_collection_mass_action_xhr");
        yield "\",
                        type : 'POST',
                        data : {data : data},
                        dataType : 'json',
                        success : function(response) {
                            app.appView.hideLoader();
                            globalMessageResponse = response;
                            self.syncData();
                        },
                        error: function (xhr) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                            \$('.mass-action-checkbox').prop('checked', false);
                        }
                    });
                }
            });

            // Ticket Quick View Collection
            var TicketQuickViewCollection = Backbone.Collection.extend({
                model: TicketQuickViewModel,
                isModelSynced: function(id) {
                    if (model = this.get(id)) {
                        if (parseInt(model.attributes.isSynced)) {
                            return model;
                        }
                    }

                    return false;
                },
                initialize: function() {
                    _.bindAll(this, 'getNextPrev', 'nextElement', 'previousElement');
                },
                getNextPrev : function(id) {
                    var data = {};
                    currentModel = ticketQuickViewCollection.get(id)
                    data['next'] = (model = this.nextElement(currentModel)) ? model.id : 0;
                    data['previous'] = (model = this.previousElement(currentModel)) ? model.id : 0;

                    return data;
                },
                nextElement: function(model) {
                    var index = ticketQuickViewCollection.indexOf(model);
                    if ((index + 1) === ticketQuickViewCollection.length)
                        return 0;

                    return ticketQuickViewCollection.at(index + 1);
                },
                previousElement: function(model) {
                    var index = ticketQuickViewCollection.indexOf(model);
                    if (index === 0 )
                        return 0;

                    return ticketQuickViewCollection.at(index - 1);
                }
            });

            // Filter
            var Filter = app.Filter.extend({
                defaultSortIndex: 'ticket.updatedAt',
                sortText: \"";
        // line 1814
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        yield " \",
                defaultSortText: \"";
        // line 1815
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        yield " ";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last Replied", [], "messages");
        yield "\",
                template : _.template(\$(\"#ticket_list_sorting_tmp\").html()),
                searchTypeTemplate : _.template(\$(\"#search_type_option_list\").html()),
                events : {
                    'keyup .uv-search-inline' : 'searchKeyword',
                    'click .clear-search-icon': 'clearSearch',
                    'click .uv-dropdown-container-list li' : 'getOptionValue',
                    'change .asset-visibility input[type=\"checkbox\"]': 'filterAssetsVisibility'
                },
                filterAssetsVisibilityOnLoad: function() {
                    this.\$el.find('.uv-dropdown-container-list').html(this.searchTypeTemplate(ticketCollection.filterParameters));

                    if(localStorage.getItem('assets-visibility')) {
                        var assets = JSON.parse(localStorage.getItem('assets-visibility'));
                        \$.each(assets, function(asset, assetVal) {
                            if(assetVal) {
                                \$('span[data-index=\"' + asset + '\"], td[data-index=\"' +asset + '\"], th[data-index=\"' + asset + '\"]').show()
                                \$('#' + asset).prop('checked', true);
                            } else {
                                \$('span[data-index=\"' + asset + '\"], td[data-index=\"' +asset + '\"], th[data-index=\"' + asset + '\"]').hide()
                                \$('#' + asset).prop('checked', false);
                            }
                        })
                    }
                },
                filterAssetsVisibility: function(e) {
                    var assets = {};
                    \$('.asset-visibility input').each(function() {
                        var asset = \$(this).val();
                        if(\$(this).is(':checked')) {
                            assets[asset] = 1;
                            \$('span[data-index=\"' + asset + '\"], td[data-index=\"' + asset + '\"], th[data-index=\"' + asset + '\"]').show()
                        } else {
                            assets[asset] = 0;
                            \$('span[data-index=\"' + asset + '\"], td[data-index=\"' + asset + '\"], th[data-index=\"' + asset + '\"]').hide()
                        }
                    });

                    localStorage.setItem('assets-visibility', JSON.stringify(assets));
                },
                searchKeyword: _.debounce(function(e) {
                    const self = this;

                    // Get search value and sanitize it
                    const newstr = self.htmlspecialchars(\$(e.target).val());
                    const search_type = this.\$('#new-data').text();
                    const clearButton = document.getElementById('clear-search');

                    // Handle empty search state
                    if (newstr.length === 0 && search_type.length === 0) {
                        this.\$('#error-message').html('');
                        clearButton.style.display = 'none';
                    } else {
                        this.\$('#error-message').text('Please select at least one parameter for searching.');
                        clearButton.style.display = 'inline';
                    }

                    if (search_type.length > 1) {
                        this.\$('#error-message').html('');

                        // Reset collection and update parameters
                        this.collection.reset();
                        this.collection.state.currentPage = null;
                        this.collection.filterParameters.search = newstr;
                        this.collection.filterParameters.searchType = search_type.toLowerCase().trim();

                        const validParams = this.collection.getValidParameters();
                        const queryString = app.appView.buildQuery(\$.param(validParams));

                        router.navigate(queryString, { trigger: true });
                    }
                }, 1000),
                htmlspecialchars(str) {
                    var map = {
                        '&': '&amp;',
                        '<': '&lt;',
                        '>': '&gt;',
                        '\"': '&quot;',
                        \"'\": '&#039;'
                    };

                    return str.replace(/[&<>\"']/g, function(m) { return map[m]; });
                },
                clearSearch: function (e) {
                    var searchInput = document.querySelector('.uv-search-inline');
                    var clearButton = document.getElementById(\"clear-search\");

                    searchInput.value = '';
                    clearButton.style.display = \"none\";
                    searchInput.focus();

                    this.collection.reset();
                    this.collection.state.currentPage = null;
                    this.collection.filterParameters.search = null;
                    this.collection.filterParameters.searchType = null;
                    this.\$('#error-message').html('');
                    var queryString = app.appView.buildQuery(\$.param(this.collection.getValidParameters()));

                    router.navigate(queryString, {trigger: true});
                },
                getOptionValue: function(e){
                    currentElement = Backbone.\$(e.currentTarget);

                    var optionValue = currentElement.attr(\"data-id\");

                    if (optionValue.length) {
                        this.\$('#error-message').html('');
                    }

                    if (this.\$(\"#new-data\").text().length > 0) {
                        this.\$(\"#new-data\").html('');
                    }

                    this.\$(\"#new-data\").append(optionValue);
                }
            });

            // Side Filter View
            var SideFilter = Backbone.View.extend({
                el: \$(\".uv-filter-view\"),
                isRecurrsiveCalls: 0,
                isReadyFlag: 0,
                appliedFilterOptions: {},
                tempAppliedFilterOptions: {},
                events: {
                    'change #saved-filter': 'applySavedFilter',
                    'input .uv-field-block input' : 'searchFilterOption',
                    'click .uv-dropdown-list li' : 'applyFilter',
                    'dp.change .range input': 'applyFilter',
                    'click .uv-filtered-tags .uv-btn-tag' : 'removeFilter',
                    'change .custom-filter' : 'filterByCustom',
                    'change #repliesLess-filter-input' : 'filterByRepliesLessThan',
                    'change #repliesMore-filter-input' : 'filterByRepliesMoreThan',
                    'keyup .search-custom, change .search-custom' : 'filterByCustom',
                    'click .new-saved-reply, .edit-saved-reply, .uv-filter-paper .uv-customize': 'addEditSavedReply',
                    'click .back-to-filter': 'backToFilter',
                    'click .uv-filter-edit .uv-btn-tag': 'removeSavedFilterOption',
                    'click .uv-filter-edit .save-filter, .uv-filter-edit .update-filter' : \"saveSavedFilter\",
                    'click .uv-filter-edit .uv-action-buttons .uv-btn-remove': 'removeSavedFilter'
                },
                loaderTemplate: _.template(\$(\"#loader-tmp\").html()),
                addEditSavedReplyTemplate: _.template(\$(\"#add_edit_saved_filter_tmp\").html()),
                checkOptionAvailable: function() {
                    this.isReadyFlag = 0;
                    var self = this;
                    var fetchOptions = {};

                    _.each(ticketCollection.filterParameters, function (filter,key) {
                        if(jQuery.inArray(key, ['customer','tag','label']) !== -1) {
                            if(filter != null && filter != '') {
                                filter = filter.split(',');

                                if(typeof fetchOptions[key] === 'undefined')
                                    fetchOptions[key] = [];

                                savedOptionsIds = [];
                                if(sideFilterModel.has(key)) {
                                    _.each(sideFilterModel.get(key), function (option) {
                                        savedOptionsIds.push(parseInt(option.id))
                                    })
                                }

                                _.each(filter, function (item) {
                                    if(jQuery.inArray(parseInt(item), savedOptionsIds) == -1) {
                                        fetchOptions[key].push(parseInt(item));
                                        self.isReadyFlag = 1;
                                    }
                                })
                            }
                        }
                    });

                    return fetchOptions;
                },
                render: function() {
                    fetchOptions = this.checkOptionAvailable();

                    if (this.isReadyFlag && !this.isRecurrsiveCalls) {
                        this.isReadyFlag = 0;
                        this.isRecurrsiveCalls = 1;
                        sideFilterModel.loadFilterOptions(fetchOptions)
                    } else {
                        var appliedFilterOptions = {};
                        \$('.uv-filtered-tags').html(\"\")
                        var self = this;
                        var displayFlag = 0;
                        _.each(ticketCollection.filterParameters, function (filter, key) {
                            if (jQuery.inArray(key, ['customer', 'agent', 'priority', 'type', 'group', 'team', 'tag', 'mailbox', 'source', 'after', 'before', 'repliesLess', 'repliesMore']) !== -1) {
                                if (filter != null && filter != '') {
                                    displayFlag = 1;
                                    filter = filter.split(',');

                                    appliedFilterOptions[key] = {'name': key.charAt(0).toUpperCase() + key.slice(1)};
                                    appliedFilterOptions[key]['options'] = [];

                                    _.each(filter, function (value) {
                                        if (key == 'after' || key == 'before' || key == 'repliesLess' || key == 'repliesMore') {
                                            \$(\"#\" + key + \"-filter-input\").val(filter)
                                            appliedFilterOptions[key]['options'].push({'id': filter, 'name': filter});
                                        } else {
                                            savedOptions = sideFilterModel.get(key)
                                            _.each(savedOptions, function (item) {
                                                if (item.id == value) {
                                                    appliedFilterOptions[key]['options'].push({'id': item.id, 'name': item.name});

                                                    parent = \$('#'+key+'-filter')
                                                    parent.find('.uv-filtered-tags').append(\"<a class='uv-btn-tag' href='#' data-id='\" + item.id + \"'>\" + item.name + \"<span class='uv-icon-remove-dark'></span></a>\")
                                                    parent.find('input').val('')
                                                }
                                            })
                                        }
                                    });
                                }
                            } else if (jQuery.inArray(key, ['new','unassigned','notreplied','mine','starred','trashed']) !== -1) {
                                if (filter != null && filter != '') {
                                    displayFlag = 1;
                                    appliedFilterOptions[key] = {'name': \"";
        // line 2031
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label"), "html", null, true);
        yield "\"};
                                    appliedFilterOptions[key]['options'] = [];
                                    var optionName = (key == 'mine') ? \"";
        // line 2033
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Assigned to me", [], "messages");
        yield "\" : key.charAt(0).toUpperCase() + key.slice(1);
                                    appliedFilterOptions[key]['options'].push({'id': key, 'name': optionName});
                                } else {
                                    if (!ticketCollection.filterParameters.new && !ticketCollection.filterParameters.unassigned && !ticketCollection.filterParameters.notreplied && !ticketCollection.filterParameters.mine && !ticketCollection.filterParameters.starred && !ticketCollection.filterParameters.trashed &&! ticketCollection.filterParameters.label) {
                                        appliedFilterOptions['all'] = {'name': \"";
        // line 2037
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label"), "html", null, true);
        yield "\"};
                                        appliedFilterOptions['all']['options'] = [];
                                        appliedFilterOptions['all']['options'].push({'id': 1, 'name': \"";
        // line 2039
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        yield "\"});
                                    }
                                }
                            } else if (key == 'label') {
                                if (filter != null && filter != '') {
                                    displayFlag = 1;
                                    var labelModel = labelCollection.get(filter);
                                    appliedFilterOptions[key] = {'name': \"";
        // line 2046
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label"), "html", null, true);
        yield "\"};
                                    appliedFilterOptions[key]['options'] = [];
                                    if (labelModel) {
                                        appliedFilterOptions[key]['options'] = [];
                                        appliedFilterOptions[key]['options'].push({'id': labelModel.attributes.id, 'name': labelModel.attributes.name});
                                    } else {
                                        savedOptions = sideFilterModel.get(key)
                                        _.each(savedOptions, function (item) {
                                            if(item.id == filter) {
                                                appliedFilterOptions[key]['options'].push({'id': item.id, 'name': item.name});
                                            }
                                        });
                                    }
                                } else {
                                    if (!ticketCollection.filterParameters.new && !ticketCollection.filterParameters.unassigned && !ticketCollection.filterParameters.notreplied && !ticketCollection.filterParameters.mine && !ticketCollection.filterParameters.starred && !ticketCollection.filterParameters.trashed &&! ticketCollection.filterParameters.label) {
                                        appliedFilterOptions['all'] = {'name': \"";
        // line 2061
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label"), "html", null, true);
        yield "\"};
                                        appliedFilterOptions['all']['options'] = [];
                                        appliedFilterOptions['all']['options'].push({'id': 1, 'name': \"";
        // line 2063
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        yield "\"});
                                    }
                                }
                            } else if (key == 'status') {
                                appliedFilterOptions[key] = {'name': \"";
        // line 2067
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "\"};
                                appliedFilterOptions[key]['options'] = []
                                if (filter != null && filter != '' && filter != 1) {
                                    displayFlag = 1;
                                    appliedFilterOptions[key]['options'].push({'id': filter, 'name': \$(\".status-list li a[data-id='\" + filter + \"'] .name\").text().trim()});
                                } else {
                                    appliedFilterOptions[key]['options'].push({'id': 1,'name': \"";
        // line 2073
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Open"), "html", null, true);
        yield "\"});
                                }


                            } else if (key == 'search') {
                                if (filter != null && filter != '') {
                                    displayFlag = 1;
                                    appliedFilterOptions[key] = {'name': \"";
        // line 2080
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search Query"), "html", null, true);
        yield "\"};
                                    appliedFilterOptions[key]['options'] = [];
                                    appliedFilterOptions[key]['options'].push({'id': filter, 'name': filter});
                                }
                            } else if(key == 'custom') {
                                if (filter != null && filter != '') {
                                    self.\$el.find('[data-filter=\"custom\"]').remove();

                                    displayFlag = 1;

                                    var realKey = key;
                                    var checkBoxStore = Array();
                                    var dataValueValueSeprator = '_';
                                    var columnSeperator = '|';

                                    var multiOptions = filter.split(columnSeperator);
                                    var multiKeyValue, multiKeyValueValue, ele, newEle;

                                    _.each(multiOptions, function(valueData, indexData) {
                                        if(!valueData)
                                            return;

                                        multiKeyValue = valueData.split(dataValueValueSeprator);

                                        multiKeyValueValue = multiKeyValue[1].split(',');

                                        eleSelector = '[data-value=\"' + multiKeyValue[0] + '\"]';
                                        ele = \$(eleSelector);

                                        if (ele[0].type == 'radio') {
                                            var dataValue = multiKeyValue[0];
                                            name = ele.parents('.uv-element-block:not(.radio)').find('label:first').text().trim()
                                            value =  \$(eleSelector + '[value=\"' + multiKeyValue[1] + '\"]').parent().next().text();

                                            appliedFilterOptions['z-'+dataValue] = {'name': name, 'type': 'radio'};
                                            appliedFilterOptions['z-'+dataValue]['options'] = [];
                                            appliedFilterOptions['z-'+dataValue]['options'].push({'id': multiKeyValue[1], 'name': value});
                                        } else if (ele[0].type == 'checkbox') {

                                            var dataValue = multiKeyValue[0];
                                            if(\$.inArray(dataValue, checkBoxStore) >= 0)
                                                return;
                                            checkBoxStore.push(dataValue);

                                            name = ele.parents('.uv-element-block:not(.checkbox)').find('label:first').text().trim()

                                            appliedFilterOptions['z-'+dataValue] = {'name': name, 'type': 'checkbox'};
                                            appliedFilterOptions['z-'+dataValue]['options'] = [];
                                            var optionName, optionValue;
                                            _.each(multiKeyValueValue, function(value) {
                                                newEle = \$(eleSelector + '[value=\"' + value + '\"]')
                                                optionValue = dataValue + dataValueValueSeprator + newEle.val();
                                                optionName = newEle.parent().next().text();
                                                if(optionValue && optionName) {
                                                    appliedFilterOptions['z-'+dataValue]['options'].push({'id': value, 'name': optionName});
                                                }
                                            });
                                        } else if (ele[0].type == 'select-multiple') {
                                            var dataValue = multiKeyValue[0];
                                            filter = multiKeyValueValue;
                                            key = ele.attr('id');
                                            name = ele.parents('.uv-element-block').find('label:first').text().trim()

                                            appliedFilterOptions['z-'+dataValue] = {'name': name, 'type': 'select-multiple'};
                                            appliedFilterOptions['z-'+dataValue]['options'] = [];

                                            _.each(filter, function (value) {
                                                var optionName;
                                                if(optionName = \$(\"#\"+key+\" option[value='\" + value + \"']\").text()) {
                                                    appliedFilterOptions['z-'+dataValue]['options'].push({'id': value, 'name': optionName});
                                                }
                                            });

                                        } else if (ele[0].type == 'text' || ele[0].type == 'number') {
                                            filter = multiKeyValue[1];
                                            if (filter != null && filter != '') {
                                                filter = filter.replace(/\\+/g,' ');
                                                displayFlag = 1;
                                                var dataValue = ele.attr('data-value');
                                                name = ele.parents('.uv-element-block').find('label:first').text().trim()

                                                appliedFilterOptions['z-'+dataValue] = {'name': name, 'type': ele[0].type};
                                                appliedFilterOptions['z-'+dataValue]['options'] = [];
                                                appliedFilterOptions['z-'+dataValue]['options'].push({'id': 1, 'name': filter});

                                            }

                                        }
                                    })
                                }
                            }
                            if('after' == key || 'before' == key || 'repliesLess' == key || 'repliesMore' == key) {
                                \$('#'+ key +'-filter-input').val(filter);
                            }
                        })

                        if (displayFlag) {
                            self.\$el.find('.uv-filter-options .uv-action-buttons').html(\"\")
                            if (\$(\"#saved-filter\").val() != null && \$(\"#saved-filter\").val() != '' && Backbone.history.getFragment() == userFilters[\$(\"#saved-filter\").val()]['route']) {
                                self.\$el.find('.uv-filter-options .uv-action-buttons').append(\"<a class='uv-btn edit-saved-reply' href='#'>";
        // line 2179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit"), "html", null, true);
        yield "</a>\").show();
                                \$('.uv-filter-paper .uv-customize').show()
                            } else {
                                self.\$el.find('.uv-filter-options .uv-action-buttons').append(\"<a class='uv-btn new-saved-reply' href='#'>";
        // line 2182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New"), "html", null, true);
        yield "</a>\").show();
                                if (\$(\"#saved-filter\").val() != null && \$(\"#saved-filter\").val() != '') {
                                    self.\$el.find('.uv-filter-options .uv-action-buttons').append(\"<a class='uv-btn edit-saved-reply' href='#'>";
        // line 2184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update"), "html", null, true);
        yield "</a>\").show();
                                    \$('.uv-filter-paper .uv-customize').show()
                                } else {
                                    \$('.uv-filter-paper .uv-customize').hide()
                                }
                            }
                        } else {
                            \$('.uv-filter-paper .uv-customize').hide()
                        }

                        this.appliedFilterOptions = appliedFilterOptions;
                        this.tempAppliedFilterOptions = jQuery.extend(true, {}, appliedFilterOptions);
                    }
                },
                searchFilterOption: function(e) {
                    self = this;
                    currentElement = Backbone.\$(e.currentTarget);
                    dropdown = currentElement.siblings('.uv-dropdown-list');
                    var filterType =  currentElement.attr('data-filter-type');
                    if (jQuery.inArray(filterType, ['customer', 'tag']) !== -1) {
                        self.searchFilterXhr(currentElement);
                    }
                },
                searchFilterXhr: _.debounce(function(currentElement) {
                    var parent = currentElement.parent();
                    if (\$('.uv-dropdown-other.uv-dropdown-btn-active').parent().attr('id') != parent.attr('id'))
                        return;

                    parent.find(\"li:not(.uv-no-results, .uv-filter-info)\").remove();
                    parent.find(\".uv-filter-info\").show()
                    if (currentElement.val().length > 1) {
                        parent.append(this.loaderTemplate())
                        parent.find('.uv-filter-info').text(\"";
        // line 2216
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Searching", [], "messages");
        yield " ...\")
                        if (self.xhrReq)
                            self.xhrReq.abort();

                        self.xhrReq = \$.ajax({
                            url : \"";
        // line 2221
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_collection_search_filter_options_xhr");
        yield "\",
                            type : 'GET',
                            data: {\"type\" : currentElement.attr('data-filter-type'), \"query\" : currentElement.val(), 'not' : ticketCollection.filterParameters[currentElement.attr('data-filter-type')]},
                            dataType : 'json',
                            success : function(response) {
                                self.xhrReq = 0;
                                parent.find('.uv-loader').remove()
                                parent.find('.uv-filter-info').text(\"";
        // line 2228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        yield "\").hide();
                                if (response.length == 0) {
                                    parent.find('.uv-no-results').show()
                                } else {
                                    parent.find('.uv-no-results').hide();
                                    _.each(response, function(item) {
                                        if (currentElement.attr('data-filter-type') == 'customer') {
                                            var img = item.smallThumbnail ? \"";
        // line 2235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2235, $this->source); })()), "request", [], "any", false, false, false, 2235), "scheme", [], "any", false, false, false, 2235) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2235, $this->source); })()), "request", [], "any", false, false, false, 2235), "httpHost", [], "any", false, false, false, 2235)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
        yield "\"+item.smallThumbnail : \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_customer_image_path"]) || array_key_exists("default_customer_image_path", $context) ? $context["default_customer_image_path"] : (function () { throw new RuntimeError('Variable "default_customer_image_path" does not exist.', 2235, $this->source); })())), "html", null, true);
        yield "\";
                                            parent.find('.uv-dropdown-list ul').append(\"<li data-id='\" + item.id + \"' name='\" + item.name + \"' class='uv-dropdown-navigations-support-el' tabindex='0' style='display: flex; gap: 10px;'><div><img src='\" + img + \"' style='margin: unset;'/></div><div style='font-size: 14px;'><div style='width: 100%;'>\" +  item.name + \"</div><div style='width: 100%; max-width: 168px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;'>\" + item.email + \"</div></div></li>\")
                                        } else
                                            parent.find('.uv-dropdown-list ul').append(\"<li data-id='\" + item.id + \"'>\" + item.name + \"</li>\")
                                    });
                                }
                            },
                            error: function (xhr) {
                                self.xhrReq = 0;
                                parent.find('.uv-loader').remove()
                                parent.find('.uv-no-results').hide();
                                parent.find('.uv-filter-info').text(\"";
        // line 2246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        yield "\").show();
                                if (url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                            }
                        });
                    } else {
                        parent.find('.uv-no-results').hide();
                    }
                }, 1000),

                applySavedFilter: function(e) {
                    var element = Backbone.\$(e.currentTarget);
                    if (element.val() != \"\") {
                        var element = Backbone.\$(e.currentTarget);
                        router.navigate(userFilters[element.val()]['route'], {trigger: true});
                    } else {
                        router.navigate('', {trigger: true});
                    }
                },
                applyFilter: function(e) {
                    currentElement = Backbone.\$(e.currentTarget);

                    if (currentElement.attr(\"data-id\")) {
                        var flag = 1;
                        parent = currentElement.parents(\".uv-field-block\");
                        filterType = parent.find('input').attr('data-filter-type');

                        if (filterType == \"customer\" || filterType == 'tag') {
                            sideFilterModel.updateModel(filterType, {'id': currentElement.attr('data-id'), 'name': currentElement.attr('name')})
                            parent.find(\".uv-no-results\").hide()
                            parent.find(\".uv-filter-info\").show().text(\"";
        // line 2276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        yield "\")
                            parent.find(\"li:not(.uv-no-results, .uv-filter-info)\").remove();
                        } else {
                            if (ticketCollection.filterParameters[filterType]) {
                                ids = ticketCollection.filterParameters[filterType].split(',')
                                if (jQuery.inArray(currentElement.attr('data-id'), ids) !== -1)
                                    flag = 0;
                            }
                        }

                        parent.find('input').val('')
                        if (jQuery.inArray(filterType, ['agent', 'priority', 'type', 'group', 'team', 'mailbox', 'source']) !== -1) {
                            parent.find(\"li:not(.uv-no-results)\").show()
                        }
                        if (flag) {
                            parent.find('.uv-filtered-tags').append(\"<a class='uv-btn-tag' href='#' data-id='\" + currentElement.attr('data-id') + \"'>\"+currentElement.attr('name')+\"<span class='uv-icon-remove-dark'></span></a>\")
                            ticketCollection.state.order = null;
                            ticketCollection.state.sortKey = null;
                            ticketCollection.state.currentPage = null;
                            ticketCollection.filterParameters[filterType] = this.joinTagValues(parent.find(\".uv-filtered-tags\"));
                            var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                            router.navigate(queryString, {trigger: true});
                        }
                    } else {
                        filterType = currentElement.attr('data-filter-type');
                        if (filterType == 'before' || filterType == \"after\") {
                            ticketCollection.state.order = null;
                            ticketCollection.state.sortKey = null;
                            ticketCollection.state.currentPage = null;
                            ticketCollection.filterParameters[filterType] = currentElement.val();
                            var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                            router.navigate(queryString, {trigger: true});
                        }
                    }
                },
                removeFilter: function(e) {
                    e.preventDefault()

                    currentElement = Backbone.\$(e.currentTarget);
                    filterType = currentElement.parents('.uv-field-block').find('input').attr('data-filter-type')
                    var options = ticketCollection.filterParameters[filterType];
                    options = options.split(',');
                    var index = options.indexOf(currentElement.attr('data-id'));
                    options.splice(index, 1);
                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters[filterType] = options.join(',');
                    currentElement.remove()

                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString, {trigger: true});
                },
                joinTagValues: function(parent) {
                    var ids = new Array();
                    parent.find('.uv-btn-tag').each(function() {
                        ids.push(\$(this).attr('data-id'))
                    });

                    return ids.join();
                },
                filterByRepliesMoreThan: _.debounce(function(e) {
                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters.repliesMore = \$(e.target).val();
                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString, { trigger: true });
                }, 1000),
                filterByRepliesLessThan: _.debounce(function(e) {
                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters.repliesLess = \$(e.target).val();
                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString, { trigger: true });
                }, 1000),
                filterByCustom: _.debounce(function(e) {
                    var custom = '';
                    var checkBoxStore = Array();
                    var indexValueSeperator = '_';
                    var columnSeperator = '|';

                    Backbone.\$('.custom-filter').each(function() {
                        if (\$(this).context.type == 'radio' && \$(this).is(':checked')) {
                            custom += \$(this).attr('data-value') + indexValueSeperator + \$(this).val() + columnSeperator;
                        } else if (\$(this).context.type == 'checkbox' && \$(this).is(':checked')) {
                            var checkboxValue = Array();
                            var dataValue = \$(this).attr('data-value');
                            if (\$.inArray(dataValue, checkBoxStore) >= 0)
                                return;
                            \$.each(\$('[data-value=\"'+ dataValue +'\"]:checked'), function() {
                                checkboxValue.push(\$(this).val());
                            });
                            checkBoxStore.push(dataValue);
                            custom += dataValue + indexValueSeperator + checkboxValue.join() + columnSeperator;
                        } else if (\$(this).context.type == 'select-multiple' && \$(this).val()) {
                            custom += \$(this).attr('data-value') + indexValueSeperator + \$(this).val().join() + columnSeperator;
                        }
                    })

                    Backbone.\$('.search-custom').each(function(){
                        if (\$(this).val()) {
                            custom += \$(this).attr('data-value') + indexValueSeperator + \$(this).val() + columnSeperator;
                        }
                    })

                    custom = custom.replace(/\\|\$/, '');

                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters.custom = custom;
                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString,{trigger: true});
                }, 1000),
                backToFilter: function(e) {
                    if (e)
                        e.preventDefault()
                    this.\$el.find('.uv-filter-options').show()
                    this.\$el.find('.uv-filter-edit').hide()
                },
                addEditSavedReply: function(e) {
                    e.preventDefault()

                    var context = {};
                    this.tempAppliedFilterOptions = jQuery.extend(true, {}, this.appliedFilterOptions);
                    if (Backbone.\$(e.currentTarget).is('.new-saved-reply')) {
                        context = {'id': 0, 'name': '', 'is_default': 0, 'filters': this.tempAppliedFilterOptions};
                    } else {
                        context = userFilters[\$(\"#saved-filter\").val()];
                        context.filters = this.tempAppliedFilterOptions;
                        userFilters[\$(\"#saved-filter\").val()]
                    }
                    \$('.uv-filter-edit').html('')
                    \$('.uv-filter-edit').append(this.addEditSavedReplyTemplate(context));
                    this.\$el.find('.uv-filter-options').hide()
                    this.\$el.find('.uv-filter-edit').show()
                },
                removeSavedFilterOption: function(e) {
                    e.preventDefault()
                    var parent = Backbone.\$(e.currentTarget).parents('.uv-element-block');
                    var elementIndex = Backbone.\$(e.currentTarget).index();
                    var filterType = parent.attr('data-filter');
                    var filterId = Backbone.\$(e.currentTarget).attr('data-id');

                    delete this.tempAppliedFilterOptions[filterType]['options'][elementIndex]
                    Backbone.\$(e.currentTarget).remove()
                    if (!parent.find('.uv-btn-tag').length) {
                        parent.remove()
                        delete this.tempAppliedFilterOptions[filterType];
                    }
                    if (this.getSavedFilterRoute() == '') {
                        this.backToFilter();
                    }
                },
                saveSavedFilter: function(e) {
                    e.preventDefault()

                    if (Backbone.\$(e.currentTarget).hasClass('save-filter'))
                        this.saveFilterAjax('POST')
                    else {
                        this.saveFilterAjax('PUT')
                    }
                },
                saveFilterAjax: function(method) {
                    var inputElement = \$('.uv-filter-edit input.name');
                    inputElement.removeClass('uv-field-error');
                    \$('.uv-field-message').remove()

                    if (inputElement.val() != undefined && inputElement.val() == '') {
                        inputElement.addClass('uv-field-error');
                        inputElement.parent().after(\"<span class='uv-field-message'>";
        // line 2448
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "</span>\");
                    } else {
                        var data = \$('.uv-filter-edit form').serializeObject();
                        data['route'] = this.getSavedFilterRoute();
                        app.appView.showLoader();
                        self = this;
                        \$.ajax({
                            url : \"";
        // line 2455
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_saved_filters_xhr");
        yield "\",
                            type : method,
                            data: data,
                            dataType : 'json',
                            success : function(response) {
                                app.appView.hideLoader();
                                userFilters[response.filter.id] = response.filter;
                                \$(\"#saved-filter\").html(\"<option value=''>-- ";
        // line 2462
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Saved Filter"), "html", null, true);
        yield " --</option>\")
                                _.each(userFilters, function(filter, key) {
                                    if (response.filter.is_default && filter.id != response.filter.id)
                                        userFilters[key]['is_default'] = 0;

                                    var selected = '';
                                    if (response.filter.id == filter.id)
                                        selected = \"selected\";
                                    \$(\"#saved-filter\").append(\"<option value='\" + filter.id + \"' selected='\" + selected + \"''>\" + filter.name + \"</option>\")
                                })

                                \$(\"#saved-filter\").val(response.filter.id)
                                app.appView.renderResponseAlert(response);
                                self.render();
                                self.backToFilter();
                            },
                            error: function (xhr) {
                                app.appView.hideLoader();
                                if (url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                            }
                        });
                    }
                },
                getSavedFilterRoute: function() {
                    var filterParameters = {};
                    temp = [];
                    _.each(this.tempAppliedFilterOptions, function (filter, key) {
                        if (jQuery.inArray(key, ['customer', 'agent', 'priority', 'type', 'group', 'team', 'tag', 'mailbox', 'source', 'after', 'before', 'repliesLess', 'repliesMore']) !== -1) {
                            var ids = [];
                            _.each(filter['options'], function (item) {
                                ids.push(item.id)
                            });
                            filterParameters[key] = ids.join(',')
                        } else if (jQuery.inArray(key, ['new','unassigned','notreplied','mine','starred','trashed']) !== -1) {
                            filterParameters[key] = 1;
                        } else if (jQuery.inArray(key, ['label', 'status', 'search']) !== -1) {
                            _.each(filter['options'], function (item) {
                                filterParameters[key] = item.id;
                            });
                        } else {
                            custom = key.split(\"z-\")
                            tempKey = custom[1];
                            if (filter.type == 'text' || filter.type == 'number') {
                                _.each(filter['options'], function (item) {
                                    temp.push(tempKey + '_' + item.name)
                                });
                            } else if (filter.type == 'radio') {
                                var ids = [];
                                _.each(filter['options'], function (item) {
                                    ids.push(item.id)
                                });
                                temp.push(tempKey + '_' + ids.join(','))
                            } else if (filter.type == 'checkbox' || filter.type == 'select-multiple') {
                                var ids = [];
                                _.each(filter['options'], function (item) {
                                    ids.push(item.id)
                                });
                                temp.push(tempKey + '_' + ids.join(','))
                            }
                        }
                    })
                    if (temp.length)
                        filterParameters['custom'] = temp.join('|');

                    return app.appView.buildQuery(\$.param(filterParameters));
                },
                removeSavedFilter: function(e) {
                    e.preventDefault()
                    self = this;
                    app.appView.showLoader();
                    \$.ajax({
                        url : \"";
        // line 2534
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_saved_filters_xhr");
        yield "/\" + \$(\"#saved-filter\").val(),
                        type : 'DELETE',
                        dataType : 'json',
                        success : function(response) {
                            app.appView.hideLoader();
                            delete userFilters[\$(\"#saved-filter\").val()];

                            \$(\"#saved-filter\").html(\"<option value=''>-- ";
        // line 2541
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Saved Filter"), "html", null, true);
        yield " --</option>\")
                            _.each(userFilters, function(filter, key) {
                                \$(\"#saved-filter\").append(\"<option value='\" + filter.id + \"'>\" + filter.name + \"</option>\")
                            })

                            \$(\"#saved-filter\").val('')
                            app.appView.renderResponseAlert(response);
                            self.render();
                            self.backToFilter();
                        },
                        error: function (xhr) {
                            app.appView.hideLoader();
                            if (url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                }
            });

            // Ticket Label Item View
            var LabelItemView = Backbone.View.extend({
                tagName: 'li',
                className: 'uv-customize-wrapper',
                template: _.template(\$(\"#custom_label_tmp\").html()),
                events: {
                    'click .delete': 'confirmRemove',
                    'click .label-color.dropdown .fa-caret-down' : 'showUpdateLabelPopup'
                },
                render: function() {
                    this.\$el.html(this.template(this.model.toJSON()));

                    if (ticketCollection.filterParameters.label != '') {
                        if (ticketCollection.filterParameters.label == this.model.id) {
                            this.\$el.find('a').addClass('uv-aside-active');
                        }
                    }

                    return this;
                }
            });

            // Ticket List Item View
            var TicketItem = Backbone.View.extend({
                tagName: \"tr\",
                template: _.template(\$(\"#ticket_list_item_tmp\").html()),
                events: {
                    'click .uv-star': \"updateStar\",
                },
                render: function () {
                    this.model.set({
                        path: pathToTicket.replace('replaceId', this.model.attributes.id)
                    });
                    this.\$el.html(this.template(this.model.toJSON()));

                    if (this.model.attributes.isAgentView != true) {
                        this.\$el.addClass('unread')
                    }

                    if (!this.model.attributes.agent) {
                        this.\$el.addClass('not-assigned')
                    }

                    return this;
                },
                updateStar: function(e) {
                    e.preventDefault();
                    if (Backbone.\$(e.currentTarget).hasClass('uv-star-active')) {
                        Backbone.\$(e.currentTarget).removeClass('uv-star-active');
                    } else {
                        Backbone.\$(e.currentTarget).addClass('uv-star-active');
                    }

                    this.model.save({
                        id: this.model.id
                    }, {
                        patch: true,
                        url: \"";
        // line 2617
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_bookmark_ticket_xhr");
        yield "\",
                        success: function (model, response, options) {},
                        error: function (model, xhr, options) {
                            if (url = xhr.getResponseHeader('Location')) {
                                window.location = url;
                            }
                        }
                    });
                }
            });

            // Ticket List View
            var TicketList = Backbone.View.extend({
                el: \$(\".uv-table table\"),
                initialize: function() {
                    this.render();
                },
                events: {
                    'change .mass-action-checkbox' : 'showBulkOptions',
                },
                showBulkOptions: function() {
                    var count = 0;
                    this.\$el.find('.mass-action-checkbox').each(function() {
                        if (\$(this).is(':checked')) {
                            count++;
                        }
                    });

                    if (count == \$('.mass-action-checkbox').length) {
                        \$('.select-all-checkbox').prop('checked', true);
                    } else {
                        \$('.select-all-checkbox').prop('checked', false);
                    }

                    if (count) {
                        \$('.uv-action-bar .filter').parent().hide();
                        \$('.uv-action-bar .mass-action').parent().addClass(\"uv-width-100\").show();
                        \$('.uv-action-bar-col-rt').hide()
                    } else {
                        \$('.uv-action-bar .mass-action').parent().removeClass(\"uv-width-100\").hide();
                        \$('.uv-action-bar .filter').parent().show();
                        \$('.uv-action-bar-col-rt').show();
                    }
                },
                render: function () {
                    this.\$el.find('tbody').html('');
                    if (ticketCollection.length) {
                        \$('.select-all-checkbox').prop( \"disabled\", false );
                        _.each(ticketCollection.models, function (item) {
                            ticketQuickViewCollection.add(new TicketQuickViewModel({id: item.id}))
                            this.renderTicket(item);
                        }, this);
                    } else {
                        \$('.select-all-checkbox').prop( \"disabled\", true );
                        this.\$el.find('tbody').append(\"<tr style='text-align: center;'><td colspan='11'>";
        // line 2671
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Record Found", [], "messages");
        yield "</td></tr>\")
                    }

                    filter.filterAssetsVisibilityOnLoad()
                    app.appView.relativeTime()
                },
                renderTicket: function (item) {
                    var ticketItem = new TicketItem({
                        model: item
                    });

                    this.\$el.find('tbody').append(ticketItem.render().el);
                }
            });

            // Ticket Label List View
            var LabelListView = Backbone.View.extend({
                el: \$(\".uv-aside\"),
                template: _.template(\$(\"#predefined_label_tmp\").html()),
                statusTemplate: _.template(\$(\"#ticket_status_list_tmp\").html()),
                addEditLabelTemplate: _.template(\$(\"#add_edit_label_tmp\").html()),
                events: {
                    'click .status-list li a': \"filterByStatus\",
                    'click .add-new-label, .uv-customize': 'addEditLabel',
                    'click #back-to-labels': 'backToLabels',
                    'click .uv-color-block': 'setLabelColor',
                    'click .add-update-btn': 'saveLabel',
                    'click .uv-add-edit-label .uv-btn-remove': 'removeLabel'
                },
                render: function() {
                    var active = \"\";

                    if (ticketCollection.filterParameters.new != '') {
                        active = \"new\";
                    } else if (ticketCollection.filterParameters.unassigned != '') {
                        active = \"unassigned\";
                    } else if (ticketCollection.filterParameters.notreplied != '') {
                        active = \"notreplied\";
                    }

                    if (ticketCollection.filterParameters.mine != '') {
                        active = \"mine\";
                    } else if (ticketCollection.filterParameters.starred != '') {
                        active = \"starred\";
                    } else if (ticketCollection.filterParameters.trashed != '') {
                        active = \"trashed\";
                    } else if (ticketCollection.filterParameters.label != '') {
                        active = \"label\";
                    }

                    var data = {
                        'labelDetails' : labelDetails,
                        'active' : active
                    }
                    this.\$el.find('.predefined-label-list').html(this.template(data));

                    labelCollection.reset();
                    labelCollection.set(labelDetails.custom);
                    this.updateMassLabelList()
                },
                updateMassLabelList: function() {
                    this.\$el.find('.uv-aside-custom').html('');
                    var labelOptionHtml = \"\";
                    if (labelCollection.length) {
                        _.each(labelCollection.models, function (item) {
                            this.renderLabelItem(item);
                            labelOptionHtml = labelOptionHtml + \"<li data-index='\" + item.id + \"'><a href='#'>\" + item.attributes.name + \"</a></li>\";
                        }, this);
                    }
                    labelOptionHtml = labelOptionHtml ? labelOptionHtml : \"<li data-index='0'>";
        // line 2740
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No Label Created"), "html", null, true);
        yield "</li>\";
                    \$(\".mass-action ul.label\").html(labelOptionHtml);
                    this.renderStatus();
                },
                renderLabelItem : function (item) {
                    var labelItem = new LabelItemView({
                        model: item
                    });
                    this.\$el.find('.uv-aside-custom').append(labelItem.render().el);
                },
                renderStatus : function() {
                    if (typeof ticketCollection.filterParameters.status == \"undefined\" || ticketCollection.filterParameters.status == null)
                        var active = 0;
                    else
                        var active = ticketCollection.filterParameters.status;

                    this.\$el.find('.uv-aside-active').parent().find('.status-list').remove()
                    this.\$el.find('.uv-aside-active').parent().append(this.statusTemplate({status : statusListDetails, active : active}));
                },
                filterByStatus : function(e) {
                    e.preventDefault()

                    ticketCollection.reset();
                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters.status = Backbone.\$(e.currentTarget).attr('data-id');
                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString, {trigger: true});
                },
                addEditLabel: function(e) {
                    e.preventDefault()
                    currentElement = Backbone.\$(e.currentTarget);
                    if (currentElement.hasClass('add-new-label'))
                        \$('.uv-add-edit-label').html(this.addEditLabelTemplate({id : 0, name : '', colorCode: ''}))
                    else
                        \$('.uv-add-edit-label').html(this.addEditLabelTemplate(labelCollection.get(currentElement.siblings('a').attr('data-id')).toJSON()))

                    \$('.uv-aside-default').hide()
                    \$('.uv-add-edit-label').show()
                },
                backToLabels: function(e) {
                    if (e)
                        e.preventDefault()
                    \$('.uv-aside-default').show()
                    \$('.uv-add-edit-label').hide()
                },
                setLabelColor: function(e) {
                    \$('.uv-color-block').removeClass('uv-color-active');
                    Backbone.\$(e.currentTarget).addClass('uv-color-active');
                },
                saveLabel : function(e) {
                    e.preventDefault()
                    var inputElement = \$('.uv-add-edit-label input');
                    inputElement.removeClass('uv-field-error');
                    \$('.uv-field-message').remove()

                    var labelName = app.appView.stripHTML(inputElement.val());
                    if (labelName == \"\") {
                        inputElement.addClass('uv-field-error');
                        inputElement.parent().after(\"<span class='uv-field-message'>";
        // line 2800
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "</span>\");
                    } else {
                        var labelId = parseInt(\$('.uv-aside-option').attr('data-id'))

                        model = labelId ? labelCollection.get(labelId) : new LabelModel()
                        model.set({name: labelName, colorCode: \$('.uv-color-block.uv-color-active').attr('data-color')});
                        self = this;
                        var flag = labelCollection.isLabelExist(labelName, labelId);
                        if (flag) {
                            app.appView.showLoader();
                            model.save({}, {
                                success: function (model, response, options) {
                                    app.appView.hideLoader();
                                    if (response.alertClass == \"success\") {
                                        if (!labelId) {
                                            labelCollection.add(model);
                                        }
                                        self.updateMassLabelList()
                                        app.appView.renderResponseAlert(response);
                                    } else {
                                        inputElement.addClass('uv-field-error');
                                        inputElement.parent().after(\"<span class='uv-field-message'>\" + response.alertMessage + \"</span>\");
                                    }

                                    self.backToLabels();
                                },
                                error: function (model, xhr, options) {
                                    if(url = xhr.getResponseHeader('Location'))
                                        window.location = url;
                                    app.appView.hideLoader();
                                    app.appView.renderResponseAlert(warningResponse);
                                }
                            });
                        } else {
                            inputElement.parent().after(\"<span class='uv-field-message'>";
        // line 2834
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label with same name already exist."), "html", null, true);
        yield "</span>\");
                        }
                    }
                },
                removeLabel: function(e) {
                    e.preventDefault()
                    self = this;
                    app.appView.showLoader();
                    model = labelCollection.get(\$('.uv-aside-option').attr('data-id'))
                    model.destroy({
                        success : function (model, response, options) {
                            app.appView.hideLoader();
                            self.updateMassLabelList()
                            app.appView.renderResponseAlert(response);
                            self.backToLabels();
                        },
                        error: function (model, xhr, options) {
                            if (url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(warningResponse);
                        }
                    });
                }
            });

            // Bulk Action View
            var BulkActionView = Backbone.View.extend({
                el: \$(\".mass-action\"),
                currentEvent: null,
                events: {
                    'click ul li, #mass-restore': 'massAction',
                    'click #mass-delete, #mass-delete-forever': 'confirmRemove',
                    'click #mass-restore': 'confirmRestore'
                },
                massAction: function(e) {
                    e.preventDefault();
                    if (!parseInt(Backbone.\$(e.currentTarget).attr('data-index')))
                        return;

                    var data = {};
                    data['actionType'] = Backbone.\$(e.currentTarget).parents('ul').attr('data-action') ? Backbone.\$(e.currentTarget).parents('ul').attr('data-action') : Backbone.\$(e.currentTarget).attr('data-action');
                    data['targetId'] = Backbone.\$(e.currentTarget).attr('data-index');
                    data['ids'] = this.getCheckedTicketIds();
                    ticketCollection.batchOperation(data);
                    this.hideBulkOptions();
                },
                removeItem: function(e) {
                    var data = {};

                    if (Backbone.\$(this.currentEvent.currentTarget).is(\"#mass-delete\"))
                        data['actionType'] = \"trashed\";
                    else if (Backbone.\$(this.currentEvent.currentTarget).is(\"#mass-delete-forever\"))
                        data['actionType'] = \"delete\";

                    data['ids'] = this.getCheckedTicketIds();
                    ticketCollection.batchOperation(data);
                    this.hideBulkOptions();
                },
                restoreItem: function(e) {
                    var data = {};
                    data['actionType'] = \"restored\";

                    data['ids'] = this.getCheckedTicketIds();
                    ticketCollection.batchOperation(data);
                    this.hideBulkOptions();
                },
                getCheckedTicketIds: function() {
                    var ids = new Array();
                    \$('.mass-action-checkbox').each(function() {
                        if (\$(this).is(':checked')) {
                            ids.push(\$(this).val());
                        }
                    });

                    return ids;
                },
                confirmRemove: function(e) {
                    e.preventDefault();
                    this.currentEvent = e;
                    app.appView.openConfirmModal(this)
                },
                confirmRestore: function(e) {
                    e.preventDefault();
                    app.appView.openConfirmModal(this, 'restoreItem')
                },
                hideBulkOptions : function() {
                    \$('.uv-action-bar .mass-action').parent().removeClass(\"uv-width-100\").hide();
                    \$('.uv-action-bar .filter').parent().show();
                    \$('.uv-action-bar-col-rt').show()
                }
            });

            var PageView = Backbone.View.extend({
                el: '.uv-paper',
                events : {
                    'change .select-all-checkbox' : 'selectAll',
                    'click .uv-quick-view-trigger, .quick-view-navigation .uv-btn-tag': 'navigateQuickView',
                },
                quickViewTemplate: _.template(\$(\"#ticket_quick_view_tmp\").html()),
                navigateQuickView : function(e) {
                    e.preventDefault();
                    //\$(\"#quick-view-modal .uv-loader\").hide()
                    var currentElement = Backbone.\$(e.currentTarget);
                    ticketId = currentElement.attr('data-id');
                    if (ticketId) {
                        if(model = ticketQuickViewCollection.isModelSynced(ticketId)) {
                            this.renderQuickView(model.toJSON())
                        } else {
                            var self = this;
                            if (currentElement.hasClass(\"uv-quick-view-trigger\"))
                                app.appView.showLoader();

                            if (ticketQuickViewCollection.get(ticketId)) {
                                navData = ticketQuickViewCollection.getNextPrev(ticketId);
                                requiredNext = (!navData.next && app.pager.paginationData.next) ? 1 : 0;
                                requiredPrev = (!navData.previous && app.pager.paginationData.previous) ? 1 : 0;
                            } else
                                requiredNext = requiredPrev = 1;

                            if (self.xhrReq)
                                self.xhrReq.abort();

                            \$(\"#quick-view-modal .uv-loader\").show()
                            self.xhrReq = \$.ajax({
                                url : \"";
        // line 2959
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_quick_view_xhr");
        yield "\",
                                type : 'GET',
                                data : {ticketId : ticketId, next: requiredNext, previous: requiredPrev},
                                dataType : 'json',
                                success : function(response) {
                                    self.xhrReq = 0;
                                    if (currentElement.hasClass(\"uv-quick-view-trigger\"))
                                        app.appView.hideLoader();

                                    if (response.next == undefined)
                                        response.next = navData.next
                                    if (response.previous == undefined)
                                        response.previous = navData.previous

                                    response.isSynced = 1
                                    response.path = pathToTicket.replace('replaceId', response.incrementId);

                                    if (ticketQuickViewCollection.get(ticketId))
                                        ticketQuickViewCollection.set(response,{remove: false})
                                    else
                                        ticketQuickViewCollection.add(new TicketQuickViewModel(response))

                                    self.renderQuickView(response)
                                },
                                error: function (xhr) {
                                    self.xhrReq = 0;
                                    if (url = xhr.getResponseHeader('Location'))
                                        window.location = url;
                                    app.appView.hideLoader();
                                }
                            });
                        }
                    }
                },
                renderQuickView: function(response) {
                    \$('#quick-view-modal .uv-pop-up-box').html(this.quickViewTemplate(response));
                    app.appView.openModal('quick-view-modal')
                    \$('#quick-view-modal .message').find('img').removeAttr('crossorigin');

                    \$('#quick-view-modal .message').find('.uv-icon-ellipsis').remove();
                    \$('#quick-view-modal .message').find('.helpdesk_blockquote').eq(0).before(\"<span class='uv-icon-ellipsis uv-ellipsis-mirror'></span>\").hide();
                    app.appView.relativeTime();
                },
                selectAll : function(e) {
                    if(Backbone.\$(e.currentTarget).is(':checked')) {
                        \$('.mass-action-checkbox').prop('checked', true);
                        \$('.uv-action-bar .filter').parent().hide();
                        \$('.uv-action-bar .mass-action').parent().addClass(\"uv-width-100\").show();
                        \$('.uv-action-bar-col-rt').hide()
                    } else {
                        var count = 0;
                        \$('.mass-action-checkbox').each(function() {
                            if(\$(this).is(':checked'))
                                count++;
                        });
                        if (count == \$('.mass-action-checkbox').length) {
                            \$('.mass-action-checkbox').prop('checked', false);
                            \$('.uv-action-bar .filter').parent().show();
                            \$('.uv-action-bar .mass-action').parent().removeClass(\"uv-width-100\").hide();
                            \$('.uv-action-bar-col-rt').show()
                        }
                    }
                },
            });

            // Ticket Router
            Router = Backbone.Router.extend({
                routes: {
                    'page/:number(/sort/:sortField)(/direction/:order)' : 'paginate',

                    'status/:status(/search/:query)(/searchType/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByStatus',

                    'search/:query(/searchType/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByQuery',

                    'agent/:agent(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByAgent',
                    'customer/:customer(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByCustomer',
                    'priority/:priority(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByPriority',
                    'type/:type(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByType',
                    'group/:group(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByGroup',
                    'team/:team(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterBySubGroup',
                    'tag/:tag(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByTags',
                    'mailbox/:mailbox(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByMailbox',
                    'source/:source(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterBySource',
                    'after/:after(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByAfter',
                    'before/:before(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByBefore',
                    'repliesLess/:repliesLess(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByRepliesLesserCount',
                    'repliesMore/:repliesMore(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByRepliesGreaterCount',
                    'custom/:custom(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByCustom',

                    'label/:labelId(/status/:status)(/search/:query)(/searchType/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByLabel',

                    'new(/status/:status)(/search/:query)(/searchType/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterNew',

                    'unassigned(/status/:status)(/search/:query)(/searchType/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterUnassigned',

                    'notreplied(/status/:status)(/search/:query)(/searchType/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterNotReplied',

                    'mine(/status/:status)(/search/:query)(/searchType/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterMine',

                    'starred(/status/:status)(/search/:query)(/searchType/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterstarred',

                    'trashed(/status/:status)(/search/:query)(/searchType/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterTrashed',
                    '': 'initializeList'
                },
                initializeList : function() {
                    \$(\"#saved-filter\").val('');
                    this.resetParams('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
                    this.fetch(null, null, null);
                },
                paginate : function(number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','','','', '');
                    this.fetch(number,sortField,order);
                },
                filterByLabel : function(labelId,searchType,status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams(labelId,'','','','','','',status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterNew : function(status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('',1,'','','','','',status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterUnassigned : function(status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','',1,'','','','',status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterNotReplied: function(status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','',1,'','','',status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);

                },
                filterMine : function(status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','',1,'','',status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterstarred : function(status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','',1,'',status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterTrashed : function(status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','',1,status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,custom);
                    this.fetch(number,sortField,order);
                },
                filterByStatus : function(status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','',status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByQuery : function(query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','',query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByAgent : function(agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','',agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByCustomer : function(customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','',customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByPriority : function(priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','',priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByType : function(type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','',type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByGroup : function(group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','',group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterBySubGroup : function(team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','',team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByTags : function(tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','',tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByMailbox : function(mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','','',mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterBySource: function(source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','',source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByAfter: function(after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','',after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByBefore: function(before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','','',before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByRepliesLesserCount: function(repliesLess, repliesMore, custom, number, sortField, order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','','',repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByRepliesGreaterCount: function(repliesMore, custom, number, sortField, order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','','','','',repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByCustom : function(custom, number, sortField, order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','','','','','',custom);
                    this.fetch(number,sortField,order);
                },
                fetch: function(number, sortField, order) {
                    ticketCollection.state.currentPage = number;
                    filter.sortCollection(sortField, order);
                    ticketCollection.syncData();
                },
                resetParams : function(labelId,newLabel,unassigned,notreplied,mine,starred,trashed,status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom) {
                    _.each(userFilters, function(filter, index) {
                        if(Backbone.history.getFragment() == filter['route']) {
                            \$(\"#saved-filter\").val(index);
                        }
                    });

                    isPageJustLoaded = false;
                    if (query != null)
                        query = query.replace(/\\+/g,' ');
                    bulkAction.hideBulkOptions();
                    ticketCollection.filterParameters.label = labelId;
                    ticketCollection.filterParameters.new = newLabel;
                    ticketCollection.filterParameters.unassigned = unassigned;
                    ticketCollection.filterParameters.notreplied = notreplied;
                    ticketCollection.filterParameters.mine = mine;
                    ticketCollection.filterParameters.starred = starred;
                    ticketCollection.filterParameters.trashed = trashed;
                    ticketCollection.filterParameters.search = query;
                    ticketCollection.filterParameters.searchType = searchType;
                    \$(\".uv-search-inline\").val(query);
                    ticketCollection.filterParameters.status = status;
                    ticketCollection.filterParameters.agent = agent;
                    ticketCollection.filterParameters.customer = customer;
                    ticketCollection.filterParameters.priority = priority;
                    ticketCollection.filterParameters.type = type;
                    ticketCollection.filterParameters.group = group;
                    ticketCollection.filterParameters.team = team;
                    ticketCollection.filterParameters.tag = tag;
                    ticketCollection.filterParameters.mailbox = mailbox;
                    ticketCollection.filterParameters.source = source;
                    ticketCollection.filterParameters.after = after;
                    ticketCollection.filterParameters.before = before;
                    ticketCollection.filterParameters.repliesLess = repliesLess;
                    ticketCollection.filterParameters.repliesMore = repliesMore;

                    ticketCollection.filterParameters.custom = custom;
                    \$('.custom-fields').find('input[type=\"text\"]').val('');
                    \$('.custom-fields').find('select').val('');
                    \$('.custom-fields').find('input[type=\"radio\"]').prop('checked', false);
                    \$('.custom-fields').find('input[type=\"checkbox\"]').prop('checked', false);

                    if (custom) {
                        custom = custom.replace(/\\+/g,' ');

                        var indexValueSeperator = '_';
                        var columnSeperator = '|';

                        var multiOptions = custom.split(columnSeperator);
                        var multiKeyValue, multiKeyValueValue, ele;

                        _.each(multiOptions, function(valueData, indexData) {
                            if (!valueData)
                                return;

                            multiKeyValue = valueData.split(indexValueSeperator);

                            multiKeyValueValue = multiKeyValue[1].split(',');

                            ele = \$('[data-value=\"' + multiKeyValue[0] + '\"]');

                            if (ele[0].type == 'radio') {
                                \$('[data-value=\"' + multiKeyValue[0] + '\"][value=\"' + multiKeyValue[1] + '\"]').prop('checked', true);

                            } else if (ele[0].type == 'checkbox') {
                                _.each(ele, function(eleElements) {
                                    if (multiKeyValueValue.indexOf(eleElements.value) > -1) {
                                        \$(eleElements).prop('checked', true);
                                    }
                                });

                            } else if (ele[0].type == 'select-multiple') {
                                ele.val(multiKeyValueValue);

                            } else if (ele[0].type == 'text') {
                                ele.val(multiKeyValue[1]);
                            }
                        })

                    }

                    if (trashed) {
                        \$('.property-block').hide();
                        \$('.trashed-block').show();
                    } else {
                        \$('.property-block').show();
                        \$('.trashed-block').hide();
                    }

                    sideFilter.isRecurrsiveCalls = 0;
                    sideFilter.render();
                }
            });

            var router = new Router();
            var pageview = new PageView;
            var bulkAction = new BulkActionView();
            var sideFilterModel = new SideFilterModel(filterContext)
            var sideFilter = new SideFilter();
            var ticketCollection = new TicketCollection();
            var ticketQuickViewCollection = new TicketQuickViewCollection();
            var labelCollection = new LabelCollection();
            var labelListView = new LabelListView()
            var filter = new Filter({collection : ticketCollection});

            Backbone.history.start({
                push_state:true
            });
        });
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
        return "@UVDeskCoreFramework/ticketList.html.twig";
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
        return array (  4201 => 2959,  4073 => 2834,  4036 => 2800,  3973 => 2740,  3901 => 2671,  3844 => 2617,  3765 => 2541,  3755 => 2534,  3680 => 2462,  3670 => 2455,  3660 => 2448,  3485 => 2276,  3452 => 2246,  3436 => 2235,  3426 => 2228,  3416 => 2221,  3408 => 2216,  3373 => 2184,  3368 => 2182,  3362 => 2179,  3260 => 2080,  3250 => 2073,  3241 => 2067,  3234 => 2063,  3229 => 2061,  3211 => 2046,  3201 => 2039,  3196 => 2037,  3189 => 2033,  3184 => 2031,  2963 => 1815,  2959 => 1814,  2890 => 1748,  2816 => 1677,  2777 => 1641,  2740 => 1607,  2725 => 1595,  2701 => 1574,  2697 => 1573,  2685 => 1564,  2678 => 1560,  2673 => 1558,  2666 => 1554,  2658 => 1549,  2651 => 1545,  2643 => 1540,  2636 => 1536,  2628 => 1531,  2621 => 1527,  2613 => 1522,  2607 => 1519,  2598 => 1513,  2590 => 1508,  2582 => 1503,  2574 => 1498,  2566 => 1493,  2558 => 1488,  2520 => 1452,  2499 => 1435,  2485 => 1424,  2466 => 1408,  2460 => 1405,  2451 => 1399,  2446 => 1397,  2440 => 1394,  2431 => 1388,  2409 => 1371,  2395 => 1360,  2376 => 1344,  2370 => 1341,  2361 => 1335,  2356 => 1333,  2350 => 1330,  2341 => 1324,  2321 => 1307,  2313 => 1302,  2306 => 1298,  2295 => 1290,  2285 => 1283,  2274 => 1275,  2264 => 1268,  2239 => 1245,  2231 => 1239,  2225 => 1236,  2220 => 1234,  2210 => 1227,  2186 => 1206,  2171 => 1194,  2164 => 1190,  2156 => 1185,  2151 => 1183,  2142 => 1176,  2138 => 1173,  2134 => 1171,  2132 => 1170,  2129 => 1169,  2127 => 1168,  2123 => 1166,  2121 => 1165,  2116 => 1162,  2114 => 1161,  2109 => 1158,  2107 => 1157,  2096 => 1149,  2088 => 1144,  2083 => 1142,  2069 => 1131,  2059 => 1124,  2050 => 1118,  2043 => 1114,  2038 => 1112,  2032 => 1108,  2026 => 1104,  2017 => 1097,  2006 => 1088,  1995 => 1080,  1984 => 1072,  1973 => 1064,  1962 => 1056,  1951 => 1048,  1942 => 1042,  1937 => 1039,  1932 => 1035,  1918 => 1027,  1912 => 1024,  1902 => 1023,  1899 => 1022,  1895 => 1021,  1891 => 1019,  1882 => 1011,  1880 => 1010,  1870 => 1002,  1868 => 1001,  1858 => 993,  1856 => 992,  1846 => 984,  1844 => 983,  1834 => 975,  1832 => 974,  1827 => 971,  1821 => 968,  1808 => 967,  1792 => 961,  1786 => 957,  1779 => 953,  1767 => 943,  1757 => 936,  1747 => 929,  1737 => 922,  1727 => 914,  1725 => 913,  1720 => 911,  1717 => 910,  1708 => 907,  1703 => 906,  1700 => 905,  1695 => 904,  1693 => 903,  1688 => 901,  1680 => 896,  1671 => 889,  1669 => 888,  1664 => 886,  1661 => 885,  1652 => 882,  1647 => 881,  1644 => 880,  1639 => 879,  1637 => 878,  1632 => 876,  1624 => 871,  1612 => 862,  1606 => 859,  1600 => 856,  1592 => 851,  1582 => 843,  1580 => 842,  1575 => 840,  1572 => 839,  1563 => 836,  1558 => 835,  1555 => 834,  1550 => 833,  1548 => 832,  1543 => 830,  1535 => 825,  1525 => 817,  1523 => 816,  1518 => 814,  1515 => 813,  1506 => 810,  1501 => 809,  1498 => 808,  1493 => 807,  1491 => 806,  1486 => 804,  1478 => 799,  1468 => 791,  1466 => 790,  1461 => 788,  1458 => 787,  1449 => 784,  1444 => 783,  1441 => 782,  1436 => 781,  1434 => 780,  1429 => 778,  1421 => 773,  1411 => 765,  1409 => 764,  1404 => 762,  1401 => 761,  1392 => 758,  1387 => 757,  1384 => 756,  1379 => 755,  1377 => 754,  1372 => 752,  1364 => 747,  1352 => 738,  1346 => 735,  1339 => 731,  1331 => 726,  1322 => 719,  1320 => 718,  1315 => 716,  1312 => 715,  1302 => 712,  1296 => 710,  1289 => 708,  1287 => 707,  1282 => 706,  1279 => 705,  1274 => 704,  1272 => 703,  1266 => 700,  1258 => 695,  1255 => 694,  1253 => 693,  1251 => 692,  1242 => 687,  1230 => 684,  1227 => 683,  1224 => 682,  1221 => 681,  1219 => 680,  1216 => 679,  1212 => 678,  1209 => 677,  1203 => 675,  1200 => 674,  1189 => 672,  1185 => 671,  1182 => 670,  1179 => 669,  1177 => 668,  1170 => 664,  1167 => 663,  1160 => 657,  1157 => 655,  1148 => 648,  1144 => 647,  1140 => 645,  1137 => 643,  1123 => 631,  1119 => 630,  1115 => 629,  1111 => 628,  1107 => 627,  1103 => 626,  1099 => 625,  1095 => 624,  1091 => 623,  1087 => 622,  1083 => 621,  1076 => 616,  1068 => 610,  1060 => 605,  1051 => 599,  1044 => 595,  1038 => 591,  1032 => 586,  1026 => 584,  1023 => 583,  1020 => 581,  1014 => 579,  1011 => 578,  1008 => 576,  1004 => 573,  998 => 571,  995 => 570,  981 => 558,  975 => 555,  972 => 554,  969 => 552,  962 => 547,  951 => 545,  947 => 544,  941 => 541,  935 => 538,  932 => 537,  929 => 536,  926 => 534,  920 => 530,  909 => 528,  905 => 527,  897 => 522,  892 => 520,  886 => 517,  883 => 516,  880 => 515,  877 => 513,  870 => 508,  859 => 506,  855 => 505,  849 => 502,  843 => 499,  840 => 498,  837 => 497,  834 => 495,  828 => 491,  817 => 489,  813 => 488,  803 => 481,  797 => 478,  794 => 477,  791 => 476,  788 => 474,  782 => 470,  771 => 468,  767 => 467,  757 => 460,  751 => 457,  748 => 456,  745 => 455,  742 => 453,  736 => 449,  729 => 447,  726 => 446,  722 => 444,  718 => 442,  715 => 441,  713 => 440,  707 => 438,  701 => 436,  694 => 434,  692 => 433,  687 => 432,  683 => 431,  673 => 424,  667 => 421,  664 => 420,  661 => 419,  655 => 414,  643 => 404,  633 => 396,  627 => 392,  617 => 384,  611 => 380,  601 => 372,  595 => 368,  585 => 360,  579 => 356,  569 => 348,  563 => 344,  553 => 336,  547 => 332,  537 => 324,  531 => 320,  521 => 312,  515 => 308,  505 => 300,  499 => 296,  492 => 292,  489 => 291,  480 => 284,  471 => 280,  468 => 279,  464 => 276,  461 => 274,  452 => 266,  449 => 264,  444 => 261,  437 => 260,  427 => 252,  421 => 248,  414 => 243,  408 => 240,  402 => 237,  396 => 234,  390 => 231,  384 => 228,  376 => 223,  370 => 220,  364 => 217,  358 => 214,  352 => 211,  346 => 208,  342 => 206,  337 => 203,  333 => 201,  322 => 194,  315 => 190,  305 => 186,  298 => 180,  296 => 179,  283 => 178,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}{{ 'Tickets'|trans }}{% endblock %}

{% block templateCSS %}
    <style>
        .uv-dropdown.asset-visibility li input {
            z-index: 100;
        }
        .uv-dropdown.asset-visibility ul li label {
            color: #333333;
            font-size: 17px;
            font-weight: 500;
            text-transform: capitalize;
            cursor: pointer;
            margin: auto;
        }
        .uv-table td a {
            color: #333333;
        }
        .uv-table.uv-list-view table tbody td.uv-width-100 {
            width: 100px !important;
        }
        .uv-table.uv-list-view td[data-index=\"agent\"] {
            white-space: nowrap;
        }
        .uv-view:not(.uv-stack-view) .uv-table td a {
            display: inline-block;
            width: 100%;
        }
        .uv-action-bar-col-lt.uv-width-100 {
            width: 100% !important;
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
            border-top: 1px solid #d3d3d3;
            padding-top: 10px;
            padding-bottom: 10px;
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
        tr.unread {
            background: #f1f1f1;
        }
        .uv-table table tbody tr.not-assigned td {
            border-bottom: 1px solid #ffcacc;
        }
        .clear-search-icon {
            cursor: pointer;
            color: #B1B1AE;;
            font-size: 14px;
            top: 80px;
            position: absolute;
            left: 10;
            right: 152px;
        }
        #error-message {
            position: absolute;
            font-size: 13.2px;
            color: #FF5656;
            margin-top: 41px;
            margin-left: -291px;
            font-style: italic;
        }
        .search-by {
            border-top-right-radius: 0px  !important;
            border-bottom-right-radius: 0px  !important;
            border-right: none !important;
        }
        .uv-search-inline {
            border-top-left-radius: 0px;
            border-bottom-left-radius: 0px;
            padding: 7px 22px 9px 33px;
            position: relative;
        }
        .uv-action-bar {
            padding-bottom: 15px !important;
        }
        @media screen and (max-width: 500px) {
            .uv-action-bar label {
                display: inline-block;
            }
        }

        @media screen and (max-width: 400px) {
            .clear-search-icon {
                top: 215px;
                right: 30px;
            }
            #error-message {
                margin-top: 43px;
                margin-left: 8px;
                font-size: 11.4px;
            }
        }

        @media screen and (max-width: 500px) and (min-width: 400px) {
            .clear-search-icon {
                top: 215px;
                right: 30px;
            }
            #error-message {
                margin-top: 43px;
                margin-left: 8px;
                font-size: 13.5px;
            }
        }

        @media screen and (max-width: 600px) {
            .uv-inner-section .uv-action-bar .uv-dropdown .uv-dropdown-btn {
                width: 100%;
            }
        }
        @media screen and (min-width: 1100px) and (max-width: 1250px)  {
            .clear-search-icon {
                top: 125px;
            }
        }
        @media screen and (max-width: 1024px) {
            .clear-search-icon {
                right: 25px;
            }
        }

        @media screen and (max-width: 500px) {
            .uv-inner-section .uv-action-bar .uv-action-bar-col-lt {
                width: 100% !important;
            }
            .uv-inner-section .uv-action-bar .uv-action-bar-col-rt {
                width: 100% !important;
            }
        }

        .uv-action-bar-col-lt {
            width: 40% !important;
        }
        .uv-action-bar-col-rt {
            width: 60% !important;
        }

        .uv-dropdown-list ul.uv-agents-list li  {
            padding: 15px;
        }
    </style>
{% endblock %}

{% block pageContent %}
    {# Quick View Popup #}
    <div class=\"uv-pop-up-overlay\" id=\"quick-view-modal\">
        <div class=\"uv-pop-up-box uv-pop-up-wide\"></div>
    </div>

    <div class=\"uv-inner-section\">
        {# Ticket Sidebar #}
        <div class=\"uv-aside\" {% if app.request.cookies and app.request.cookies.get('uv-asideView') %} style=\"display: none;\" {% endif %} >
            <div class=\"uv-aside-default\">
                <div class=\"uv-aside-head\">
                    <div class=\"uv-aside-title\">
                        <h6>{{ 'Tickets'|trans }}</h6>
                    </div>

                    <div class=\"uv-aside-back\">
                        <span onclick=\"history.length > 1 ? history.go(-1) : window.location = '{{ path(\"helpdesk_member_dashboard\") }}';\">{{ 'Back'|trans }}</span>
                    </div>
                </div>

                <div class=\"uv-aside-nav\">
                    <ul>
                        {# Predefined Label List #}
                        <ul class=\"predefined-label-list uv-aside-list\">
                            <li>
                                <a href=\"#\" class=\"uv-aside-active\">{{ 'All'|trans }} <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>

                                {# Status ticket count list #}
                                <ul class=\"status-list\">
                                    <li>
                                        <a href=\"#\" data-id=\"1\" class=\"uv-aside-nav-active\"><span class=\"name\">{{ 'Open'|trans }}</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"2\"><span class=\"name\">{{ 'Pending'|trans }}</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"6\"><span class=\"name\">{{ 'Answered'|trans }}</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"3\"><span class=\"name\">{{ 'Resolved'|trans }}</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"4\"><span class=\"name\">{{ 'Closed'|trans }}</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"5\"><span class=\"name\">{{ 'Spam'|trans }}</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#new\">{{ 'New'|trans }} <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#unassigned\">{{ 'UnAssigned'|trans }} <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#notreplied\">{{ 'UnAnswered'|trans }} <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#mine\">{{ 'My Tickets'|trans }} <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#starred\">{{ 'Starred'|trans }} <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#trashed\" style=\"border-bottom: none\">{{ 'Trashed'|trans }} <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                        </ul>

                        {# Custom Label List #}
                        <ul class=\"uv-aside-custom\"></ul>
                    </ul>
                </div>

                <a class=\"uv-btn-small add-new-label\" href=\"#\"><span class=\"uv-icon-add\"></span> {{ 'Label'|trans }}</a>
            </div>

            <!-- Label add and edit -->
            <div class=\"uv-add-edit-label\" style=\"display: block\"></div>
        </div>

        {# Ticket List #}
        <div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %} uv-aside-view {% endif %}\">
            <h1>{{ 'Tickets'|trans }}</h1>

            {# Action Bar #}
            <div class=\"uv-action-bar\">
                {# Select all checkbox #}
                <div class=\"uv-action-select-wrapper\">
                    <label class=\"uv-vertical-align uv-margin-left-27\">
                        <div class=\"uv-checkbox\">
                            <input type=\"checkbox\" class=\"select-all-checkbox\"><span class=\"uv-checkbox-view\"></span>
                        </div>
                    </label>
                </div>
                {# Filter Options #}
                <div class=\"uv-action-col-wrapper\">
                    {# Ticket Sort | Asset Visibility #}
                    <div class=\"uv-action-bar-col-lt\">
                        <div class=\"filter\">
                            {# Sort By #}
                            <div class=\"uv-dropdown sort\">
                                <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">{{ 'Sort By:'|trans }} {{ 'Last Replied'|trans }}</div>

                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>{{ 'Sort By'|trans }}</label>
                                        <ul></ul>
                                    </div>
                                </div>
                            </div>

                            {# Assets Visibilities #}
                            <div class=\"uv-dropdown asset-visibility\">
                                <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">{{ 'Assets Visibility'|trans }}</div>

                                <div class=\"uv-dropdown-list uv-bottom-left\" style=\"width: 215px;\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>{{ 'Assets Visibility'|trans }}</label>

                                        <ul>
                                            {# Ticket Source #}
                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"source\" name=\"assetVisibility[]\" value=\"source\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"source\">{{ 'Channel/Source'|trans }}</label>
                                            </li>

                                            {# Ticket Customer Name #}
                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"customer-name\" name=\"assetVisibility[]\" value=\"customer-name\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"customer-name\">{{ 'Customer Name'|trans }}</label>
                                            </li>

                                            {# Ticket Customer Email #}
                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"customer-email\" name=\"assetVisibility[]\" value=\"customer-email\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"customer-email\">{{ 'Customer Email'|trans }}</label>
                                            </li>

                                            {# Ticket Timestamp #}
                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"timestamp\" name=\"assetVisibility[]\" value=\"timestamp\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"timestamp\">{{ 'Timestamp'|trans }}</label>
                                            </li>

                                            {# Ticket Group #}
                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"group\" name=\"assetVisibility[]\" value=\"group\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"group\">{{ 'Group'|trans }}</label>
                                            </li>

                                            {# Ticket Team #}
                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"team\" name=\"assetVisibility[]\" value=\"team\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"team\">{{ 'Team'|trans }}</label>
                                            </li>

                                            {# Ticket Type #}
                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"type1\" name=\"assetVisibility[]\" value=\"type1\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"type1\">{{ 'Type'|trans }}</label>
                                            </li>

                                            {# Ticket Replies #}
                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"replies\" name=\"assetVisibility[]\" value=\"replies\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"replies\">{{ 'Replies'|trans }}</label>
                                            </li>

                                            {# Ticket Agent #}
                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"agent\" name=\"assetVisibility[]\" value=\"agent\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"agent\">{{ 'Agent'|trans }}</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {# Ticket Mass Action #}
                    <div class=\"uv-action-bar-col-lt\" style=\"display: none\">
                        <!-- Mass action -->
                        <div class=\"mass-action\">
                            <div class=\"property-block\">
                                {# Update Assigned Support Agent #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_ASSIGN_TICKET') %}
                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">{{ 'Agent'|trans }}</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>{{ 'Agent'|trans }}</label>
                                                <div class=\"uv-search-sm\">
                                                    <input type=\"text\" class=\"uv-search-field\" placeholder=\"Search\">
                                                </div>
                                            </div>

                                            <ul class=\"uv-agents-list agent\" data-action=\"agent\">
                                                {% for agent in user_service.getAgentPartialDataCollection() %}
                                                    <li data-index=\"{{ agent.id }}\">
                                                        {% if agent.smallThumbnail != null %}
                                                            <img src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}{{ agent.smallThumbnail }}\"/>
                                                        {% else %}
                                                            <img src=\"{{ asset(default_agent_image_path) }}\" alt=\"\"/>
                                                        {% endif %}
                                                        {{ agent.name }}
                                                        
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
                                    </div>
                                {% endif %}

                                {# Update Assigned Support Group #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_ASSIGN_TICKET_GROUP') %}
                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">{{ 'Group'|trans }}</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>{{ 'Group'|trans }}</label>
                                                <div class=\"uv-search-sm\">
                                                    <input type=\"text\" class=\"uv-search-field\" placeholder=\"Search\">
                                                </div>
                                            </div>

                                            <ul class=\"uv-search-list group\" data-action=\"group\">
                                                {% for group in user_service.getSupportGroups() %}
                                                    <li data-index=\"{{ group.id }}\"><a href=\"#\">{{ group.name }}</a></li>
                                                {% endfor %}
                                            </ul>
                                        </div>
                                    </div>
                                {% endif %}

                                {# Update Assigned Support Team #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_ASSIGN_TICKET_GROUP') %}
                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">{{ 'Team'|trans }}</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>{{ 'Team'|trans }}</label>
                                                <div class=\"uv-search-sm\">
                                                    <input type=\"text\" class=\"uv-search-field\" placeholder=\"Search\">
                                                </div>
                                            </div>

                                            <ul class=\"uv-search-list team\" data-action=\"team\">
                                                {% for team in user_service.getSupportTeams() %}
                                                    <li data-index=\"{{ team.id }}\"><a href=\"#\">{{ team.name }}</a></li>
                                                {% endfor %}
                                            </ul>
                                        </div>
                                    </div>
                                {% endif %}

                                {# Update Ticket Status #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_STATUS') %}
                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">{{ 'Status'|trans }}</div>
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
                                    </div>
                                {% endif %}

                                {# Update Ticket Type #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_TYPE') %}
                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">{{ 'Type'|trans }}</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>{{ 'Type'|trans }}</label>
                                                <div class=\"uv-search-sm\">
                                                    <input type=\"text\" class=\"uv-search-field\" placeholder=\"{{ 'Search'|trans }}\">
                                                </div>
                                            </div>

                                            <ul class=\"uv-search-list type\" data-action=\"type\">
                                                {% for type in ticket_service.getTypes()  %}
                                                    <li data-index=\"{{ type.id }}\"><a href=\"#\">{{ type.name }}</a></li>
                                                {% endfor %}
                                            </ul>
                                        </div>
                                    </div>
                                {% endif %}

                                {# Update Priority #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_PRIORITY') %}
                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">{{ 'Priority'|trans }}</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>{{ 'Priority'|trans }}</label>

                                                <ul class=\"priority\" data-action=\"priority\">
                                                    {% for priority in ticketPriorityCollection %}
                                                        <li data-index=\"{{ priority.id }}\"><a href=\"#\">{{ priority.description|trans }}</a></li>
                                                    {% endfor %}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}

                                {# Update Label #}
                                <div class=\"uv-dropdown\">
                                    <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">{{ 'Label'|trans }}</div>
                                    <div class=\"uv-dropdown-list uv-bottom-left\">
                                        <div class=\"uv-dropdown-container\">
                                            <label>{{ 'Label'|trans }}</label>

                                            <div class=\"uv-search-sm\">
                                                <input type=\"text\" class=\"uv-search-field\" placeholder=\"Search\">
                                            </div>
                                        </div>

                                        <ul class=\"uv-search-list label\" data-action=\"label\"></ul>
                                    </div>
                                </div>

                                {# Trashe Tickets #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_DELETE_TICKET') %}
                                    <a class=\"uv-btn-stroke uv-margin-right-5\" id=\"mass-delete\" data-action=\"trashed\" style=\"margin-left: 5px;\">{{ 'Delete'|trans }}</a>
                                {% endif %}
                            </div>

                            {# For Trashed Tickets #}
                            <div class=\"trashed-block\" style=\"display: none\">
                                {# Restore Tickets #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_RESTORE_TICKET') %}
                                    <a class=\"uv-btn-stroke uv-margin-right-5\" id=\"mass-restore\" data-action=\"restore\" style=\"margin-left: 5px;\">{{ 'Restore'|trans }}</a>
                                {% endif %}

                                {# Delete Tickets Forever #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_DELETE_TICKET') %}
                                    <a class=\"uv-btn-stroke uv-margin-right-5\" id=\"mass-delete-forever\" data-action=\"delete\" style=\"margin-left: 5px;\">{{ 'Delete Forever'|trans }}</a>
                                {% endif %}
                            </div>
                        </div>
                    </div>

                    {# Ticket Search | Filter Extras #}
                    <div class=\"uv-action-bar-col-rt\">
                        <!-- Search Tickets -->
                        <div class=\"uv-dropdown uv-dropdown-navigations-support\" style=\"margin-right:-5px;\">
                            <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5 search-by\">
                                {{ 'Search By:'|trans }} <span id=\"new-data\"></span>
                            </div>
                            <div class=\"uv-dropdown-list uv-bottom-left\" style=\"width: unset;\">
                                <div class=\"uv-dropdown-container\" style=\"text-align: left;padding: 10px;\">
                                    <label>{{ 'Search By'|trans }}</label>
                                    <ul class=\"uv-dropdown-container-list\">
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <input type=\"text\" class=\"uv-search-inline\" placeholder=\"{{ 'Search'|trans }}\">
                        <span id=\"clear-search\" class=\"clear-search-icon\" style=\"display: none;\">&#10006;</span> <!-- Clear icon -->
                        <span id=\"error-message\"></span>

                        <!-- Extra Filters -->
                        <div class=\"uv-btn-stroke uv-margin-left-15 filter-view-trigger\" data-target=\"uv-filter-view\"><span class=\"uv-icon-filter\"></span>{{ 'Filter View'|trans }}</div>
                    </div>
                </div>
            </div>

            {# Ticket List #}
            <div class=\"uv-table uv-list-view\">
                <table>
                    <thead>
                    <tr>
                        <th class=\"uv-width-140\"></th>
                        <th>{{ 'ID'|trans }}</th>
                        <th class=\"uv-min-width-300\">{{ 'Subject'|trans }}</th>
                        <th data-index=\"customer-name\">{{ 'Customer Name'|trans }}</th>
                        <th data-index=\"customer-email\">{{ 'Customer Email'|trans }}</th>
                        <th data-index=\"timestamp\">{{ 'Timestamp'|trans }}</th>
                        <th style =\"min-width:100px\" data-index=\"lastReply\">{{ \"Last Reply\"|trans }}</th>
                        <th data-index=\"group\">{{ 'Group'|trans }}</th>
                        <th data-index=\"team\">{{ 'Team'|trans }}</th>
                        <th data-index=\"type1\">{{ 'Type'|trans }}</th>
                        <th data-index=\"replies\">{{ 'Replies'|trans }}</th>
                        <th data-index=\"agent\">{{ 'Agent'|trans }}</th>
                    </tr>
                    </thead>

                    <tbody></tbody>
                </table>

                <div class=\"navigation\"></div>
            </div>
        </div>

        {# Extra Filters #}
        <div class=\"uv-filter-view\" id=\"uv-filter-view\">
            {# Filter Head #}
            <div class=\"uv-filter-head\">
                <div class=\"uv-filter-title\">
                    <h6>{{ 'Tickets'|trans }}</h6>
                    <span>{{ 'Save set of filters as a preset to stay more productive'|trans }}</span>
                </div>

                <div class=\"uv-filter-toggle\" id=\"filter-close-trigger\"><span></span></div>
            </div>

            {# Filter Content #}
            <div class=\"uv-filter-paper\">
                {# Filters #}
                <div class=\"uv-filter-options\">
                    <script>
                        var userFilters = {};
                    </script>

                    {# Saved Filters #}
                    <div class=\"uv-element-block\" style=\"border-bottom: 1px solid #D3D3D3; padding-bottom: 5px;\">
                        <label class=\"uv-field-label\">{{ 'Saved Filters'|trans }}</label>
                        <div class=\"uv-field-block\">
                            <div class=\"uv-customize-wrapper\">
                                <select class=\"uv-select uv-select-70\" id=\"saved-filter\">
                                    {% set filters = app.user.agentInstance.userSavedFilters %}
                                    {% if filters|length %}
                                        <option value=\"\">-- Saved Filter --</option>
                                        {% for userFilter in filters %}
                                            <option value=\"{{userFilter.id}}\">{{userFilter.name}}</option>
                                        {% endfor %}
                                    {% else %}
                                        <option value=\"\">{{ 'No saved filter created'|trans }}</option>
                                    {% endif %}
                                </select>
                                {% for userFilter in app.user.agentInstance.userSavedFilters %}
                                    <script>
                                        {% set isDefault = 0 %}
                                        {% if app.user.agentInstance.defaultFiltering == userFilter.id %}
                                        {% set isDefault = 1 %}
                                        {% endif %}
                                        userFilters[{{userFilter.id}}] = {{ {'id': userFilter.id, 'name': userFilter.name, 'route': userFilter.route, 'is_default': isDefault}|json_encode|raw }};
                                    </script>
                                {% endfor %}
                                <span class=\"uv-customize\" style=\"display: none\" data-toggle=\"tooltip\" title=\"{{ 'Edit Saved Filter'|trans }}\"></span>
                            </div>
                        </div>
                    </div>

                    {% set filterContext = {} %}
                    {# agent #}
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Agent'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"agent-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"agent\" id=\"agent-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                </div>
                                <ul class=\"uv-agents-list\">
                                    {% set options = [] %}
                                    {% for agent in user_service.getAgentsPartialDetails %}
                                        {% set options = options|merge([{'id': agent.id, 'name': agent.name}]) %}
                                        <li data-id=\"{{agent.id}}\">
                                            {% if agent.smallThumbnail != null %}
                                                <img src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}{{ agent.smallThumbnail }}\"/>
                                            {% else %}
                                                <img src=\"{{ asset(default_agent_image_path) }}\"/>
                                            {% endif %}
                                            {{agent.name}}
                                        </li>
                                    {% endfor %}
                                    <li class=\"uv-no-results\" style=\"display: none;\">
                                        {{ 'No result found'|trans }}
                                    </li>
                                    {% set filterContext = filterContext|merge({'agent':options}) %}
                                </ul>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Customer'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"customer-filter\">
                            <input class=\"uv-field uv-dropdown-other\" type=\"text\" data-filter-type=\"customer\" id=\"customer-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                </div>
                                <ul class=\"uv-agents-list\">
                                    <li class=\"uv-filter-info\">
                                        {{ 'Type atleast 2 letters'|trans }}
                                    </li>
                                    <li class=\"uv-no-results\" style=\"display: none;\">
                                        {{ 'No result found'|trans }}
                                    </li>
                                </ul>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Group'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"group-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"group\" id=\"group-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                    <ul class=\"\">
                                        {% set options = [] %}
                                        {% for group in user_service.getSupportGroups() %}
                                            {% set options = options|merge([{'id': group.id, 'name': group.name}]) %}
                                            <li data-id=\"{{group.id}}\">
                                                {{group.name}}
                                            </li>
                                        {% endfor %}
                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            {{ 'No result found'|trans }}
                                        </li>
                                        {% set filterContext = filterContext|merge({'group':options}) %}
                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Team'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"team-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"team\" id=\"team-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                    <ul class=\"\">
                                        {% set options = [] %}
                                        {% for team in user_service.getSupportTeams() %}
                                            {% set options = options|merge([{'id': team.id, 'name': team.name}]) %}
                                            <li data-id=\"{{team.id}}\">
                                                {{team.name}}
                                            </li>
                                        {% endfor %}
                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            {{ 'No result found'|trans }}
                                        </li>
                                        {% set filterContext = filterContext|merge({'team':options}) %}
                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Type'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"type-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"type\" id=\"type-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                    <ul class=\"\">
                                        {% set options = [] %}
                                        {% for type in ticket_service.getTypes() %}
                                            {% set options = options|merge([{'id': type.id, 'name': type.name}]) %}
                                            <li data-id=\"{{type.id}}\">
                                                {{type.name}}
                                            </li>
                                        {% endfor %}
                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            {{ 'No result found'|trans }}
                                        </li>
                                        {% set filterContext = filterContext|merge({'type':options}) %}
                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Priority'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"priority-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"priority\" id=\"priority-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                    <ul class=\"\">
                                        {% set options = [] %}
                                        {% for priority in ticket_service.getPriorities() %}
                                            {% set options = options|merge([{'id': priority.id, 'name': priority.code, 'color': priority.colorCode}]) %}
                                            <li data-id=\"{{priority.id}}\">
                                                {{ priority.code|trans }}
                                            </li>
                                        {% endfor %}
                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            {{ 'No result found'|trans }}
                                        </li>
                                        {% set filterContext = filterContext|merge({'priority':options}) %}
                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Tag'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"tag-filter\">
                            <input class=\"uv-field uv-dropdown-other\" type=\"text\" data-filter-type=\"tag\" id=\"tag-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                    <ul class=\"\">
                                        <li class=\"uv-filter-info\">
                                            {{ 'Type atleast 2 letters'|trans }}
                                        </li>
                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            {{ 'No result found'|trans }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Source'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"source-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"source\" id=\"source-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                    <ul class=\"\">
                                        {% set options = [] %}
                                        {% for key, source in ticket_service.getAllSources() %}
                                            {% set options = options|merge([{'id': key, 'name': source}]) %}
                                            <li data-id=\"{{key}}\">
                                                {{ source|trans }}
                                            </li>
                                        {% endfor %}
                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            {{ 'No result found'|trans }}
                                        </li>
                                        {% set filterContext = filterContext|merge({'source': options}) %}
                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Mailbox'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"mailbox-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"mailbox\" id=\"mailbox-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                    <ul class=\"\">
                                        {% set options = [] %}
                                        {% for mailbox in ticket_service.getAllMailboxes() %}
                                            {% set options = options|merge([{'id': mailbox.email, 'name': mailbox.name}]) %}
                                            <li data-id=\"{{mailbox.email}}\">
                                                {{ mailbox.name|trans }}
                                            </li>
                                        {% endfor %}
                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            {{ 'No result found'|trans }}
                                        </li>
                                        {% set filterContext = filterContext|merge({'mailbox': options}) %}
                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Before'|trans }}</label>
                        <div class=\"uv-field-block range\" id=\"before-filter\">
                            <input class=\"uv-field uv-date-picker\" type=\"text\" data-filter-type=\"before\" id=\"before-filter-input\">
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'After'|trans }}</label>
                        <div class=\"uv-field-block range\" id=\"after-filter\">
                            <input class=\"uv-field uv-date-picker\" type=\"text\" data-filter-type=\"after\" id=\"after-filter-input\">
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Replies less than'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"reply-filter\">
                            <input class=\"uv-field\" type=\"number\" min=\"1\" data-filter-type=\"replies-less\" id=\"repliesLess-filter-input\">
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Replies more than'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"reply-filter\">
                            <input class=\"uv-field\" type=\"number\" min=\"0\" data-filter-type=\"replies-more\" id=\"repliesMore-filter-input\">
                        </div>
                    </div>

                    <div class=\"uv-action-buttons\">
                    </div>

                    {# Clear Filters #}
                    <a class=\"uv-btn-remove\" href=\"#\"><span class=\"uv-icon-discard\"></span> {{ 'Clear All'|trans }}</a>
                </div>

                {# Add|Edit Filter #}
                <div class=\"uv-filter-edit\" style=\"display: none;\"></div>
            </div>

            <script type=\"text/javascript\">
                var filterContext = {{ filterContext|json_encode|raw }}
            </script>
        </div>
    </div>
{% endblock %}

{% block footer %}
    {{ parent() }}

    {# Sort Ticket View Template #}
    <script id=\"ticket_list_sorting_tmp\" type=\"text/template\">
        <li class=\"<% if(sort == 'ticket.id') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/ticket.id/<% if(sort == 'ticket.id') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"ticket.id\">
                {% trans %}Ticket Id{% endtrans %}
                <% if(sort == 'ticket.id') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>

        <li class=\"<% if(sort == 'ticket.updatedAt') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/ticket.updatedAt/<% if(sort == 'ticket.updatedAt') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"ticket.updatedAt\">
                {% trans %}Last Replied{% endtrans %}
                <% if(sort == 'ticket.updatedAt') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>

        <li class=\"<% if(sort == 'agentName') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/agentName/<% if(sort == 'agentName') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"agentName\">
                {% trans %}Assign To{% endtrans %}
                <% if(sort == 'agentName') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>

        <li class=\"<% if(sort == 'customerEmail') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/customerEmail/<% if(sort == 'customerEmail') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"customerEmail\">
                {% trans %}Customer Email{% endtrans %}
                <% if(sort == 'customerEmail') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>

        <li class=\"<% if(sort == 'customerName') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/customerName/<% if(sort == 'customerName') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"customerName\">
                {% trans %}Customer Name{% endtrans %}
                <% if(sort == 'customerName') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>
    </script>

    {# Ticket Status List Template #}
    <script id=\"ticket_status_list_tmp\" type=\"text/template\">
        <ul class=\"status-list\">
            {% for status in ticketStatusCollection %}
                <li>
                    <a href=\"#\" class=\"<% if(active == {{ status.id }} {% if status.id == 1 %} || active == 0{% endif %}) { %>uv-aside-nav-active<% } %>\" data-id=\"{{ status.id }}\">
                        <span class=\"name\">{{ status.description|trans }}</span>
                        <span class=\"uv-flag-gray\">
                            <% if(status && status[1] != undefined) { %>
                                <%= status[{{ status.id }}] %>
                            <% } else { %>
                                0
                            <% } %>
                        </span>
                    </a>
                </li>
            {% endfor %}
        </ul>
    </script>

    {# Default Ticket Label View Template #}
    <script id=\"predefined_label_tmp\" type=\"text/template\">
        <li>
            <a href=\"#\" <% if (active == '') { %> class=\"uv-aside-active\" <% } %>>
            {{ 'All'|trans }}
            <span class=\"uv-flag-gray uv-flag-dark\"><%= labelDetails.predefind.all %></span>
            </a>
        </li>
        <li>
            <a href=\"#new\" <% if(active == 'new') { %> class=\"uv-aside-active\" <% } %> >
            {{ 'New'|trans }}
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.new %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#unassigned\" <% if(active == 'unassigned') { %> class=\"uv-aside-active\" <% } %> >
            {{ 'UnAssigned'|trans }}
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.unassigned %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#notreplied\" <% if(active == 'notreplied') { %> class=\"uv-aside-active\" <% } %> >
            {{ 'UnAnswered'|trans }}
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.notreplied %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#mine\" <% if(active == 'mine') { %> class=\"uv-aside-active\" <% } %> >
            {{ 'My Tickets'|trans }}
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.mine %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#starred\" <% if(active == 'starred') { %> class=\"uv-aside-active\" <% } %> >
            {{ 'Starred'|trans }}
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.starred %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#trashed\" <% if(active == 'trashed') { %> class=\"uv-aside-active\" <% } %>>
            {{ 'Trashed'|trans }}
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.trashed %>
                </span>
            </a>
        </li>
    </script>

    {# Custom Ticket Label View Template #}
    <script id=\"custom_label_tmp\" type=\"text/template\">
        <a href=\"#label/<%= id %>\"  data-id=\"<%= id %>\">
            <%- name %>
            <span class=\"uv-flag-gray\" style=\"<% if(colorCode) { %>background-color:<%= colorCode %><% } %>\">
                <%= count %>
            </span>
        </a>
        <span class=\"uv-customize\" data-target=\"uv-task-view\" data-toggle=\"tooltip\" title=\"{{ 'Edit Label'|trans }}\"></span>
    </script>

    {# Add|Edit Ticket Label View Template #}
    <script id=\"add_edit_label_tmp\" type=\"text/template\">
        <div class=\"uv-aside-head\">
            <div class=\"uv-aside-title\">
                <% if(id) { %>
                <h6>{{ 'Edit Label'|trans }}</h6>
                <% } else { %>
                <h6>{{ 'Add Label'|trans }}</h6>
                <% } %>
            </div>
            <div class=\"uv-aside-back\" id=\"back-to-labels\">
                <span>{{ 'Back'|trans }}</span>
            </div>
        </div>
        <div class=\"uv-aside-option\" data-id=\"<%= id %>\">

            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">{{ 'Name'|trans }}</label>
                <div class=\"uv-field-block\">
                    <input class=\"uv-field\" type=\"text\" value=\"<%- name %>\" />
                </div>
            </div>

            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">{{ 'Choose a Color'|trans }}</label>
                <div class=\"uv-field-block\">
                    <% colors = ['#337CFF','#FEBF00','#E5549F','#27B6BB','#FB8A3F','#43AF52'] %>
                    <% for(var colorTemp in colors) { %>
                    <span class=\"uv-color-block <% if(colorCode == colors[colorTemp]) { %>uv-color-active<% } %>\" data-color=\"<%- colors[colorTemp] %>\" style=\"background:<%- colors[colorTemp] %>\"></span>
                    <% } %>
                </div>
            </div>
            <div>
                <a class=\"uv-btn add-update-btn\" href=\"#\">
                    <% if(id) { %>
                    {{ 'Update'|trans }}
                    <% } else { %>
                    {{ 'Create'|trans }}
                    <% } %>
                </a>
            </div>
            <% if(id) { %>
            <a class=\"uv-btn-remove\"><span class=\"uv-icon-discard\"></span>{{ 'Remove Label'|trans }}</a>
            <% } %>
        </div>
    </script>

    <!-- // Search type option Template -->
    <script id=\"search_type_option_list\" type=\"text/template\">
        <li tabindex=\"0\" data-id=\"ID\">
            {% trans %}ID{% endtrans %}
        </li>

        <li tabindex=\"0\" data-id=\"Subject\">
            {% trans %}Subject{% endtrans %}
        </li>

        <li tabindex=\"0\" data-id=\"Email\">
            {% trans %}Email{% endtrans %}
        </li>

        {% if helpdesk is defined and helpdesk is not empty and helpdesk.id == '266' %}
            <li tabindex=\"0\" data-id=\"Skills\">
                {% trans %}Skills{% endtrans %}
            </li>
        {% endif %}
    </script>

    {# Add|Edit Saved Ticket Filter View Template #}
    <script id=\"add_edit_saved_filter_tmp\" type=\"text/template\">
        <form>
            <div class=\"uv-filter-edit-head\">
                <div class=\"uv-filter-edit-title\">
                    <h6>
                        <% if(id) { %>
                        <input type=\"hidden\" name=\"id\" id=\"filter-id\" value=\"<%= id %>\"/>
                        {{ 'Edit Saved Filter'|trans }}
                        <% } else { %>
                        {{ 'New Saved Filter'|trans }}
                        <% } %>
                    </h6>
                </div>
                <div class=\"uv-filter-edit-back back-to-filter\">
                    <span>{{ 'Back'|trans }}</span>
                </div>
            </div>
            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">{{ 'Name'|trans }}</label>
                <div class=\"uv-field-block\">
                    <input class=\"uv-field name\" name=\"name\" type=\"text\" value=\"<%- name %>\" />
                </div>
            </div>

            <div class=\"uv-element-block\">
                <label>
                    <div class=\"uv-checkbox\">
                        <input type=\"checkbox\" name=\"is_default\" <% if(is_default) { %>checked<% } %> />
                        <span class=\"uv-checkbox-view\"></span>
                    </div>
                    <span class=\"uv-checkbox-label\">{{ 'Is Default'|trans }}</span>
                </label>
            </div>

            <div class=\"uv-filters-group\">
                <% _.each(filters, function(filter, key){ %>
                <div class=\"uv-element-block\" data-filter=\"<%= key %>\">
                    <label class=\"uv-field-label\"><%- filter.name %></label>
                    <div class=\"uv-field-block\">
                        <% _.each(filter.options, function(option){ %>
                        <a class=\"uv-btn-tag\" href=\"#\" data-id=\"<%= option.id %>\">
                            <%- option.name %>
                            <span class=\"uv-icon-remove-dark\"></span>
                        </a>
                        <% }); %>
                    </div>
                </div>
                <% }); %>

                <div class=\"uv-action-buttons\">
                    <% if(id) { %>
                    <a class=\"uv-btn-remove\"><span class=\"uv-icon-discard\"></span>{{ 'Remove Saved Filter'|trans }}</a>
                    <% } %>
                </div>
            </div>
            <div class=\"uv-action-buttons\">
                <a class=\"uv-btn <% if(id) { %>update-filter<% } else { %>save-filter<% } %>\" href=\"#\">
                    <% if(id) { %>
                    {{ 'Update'|trans }}
                    <% } else { %>
                    {{ 'Create'|trans }}
                    <% } %>
                </a>
                <a class=\"uv-btn back-to-filter\" href=\"#\">{{ 'Cancel'|trans }}</a>
            </div>
        </form>
    </script>

    {# Quick View Ticket View Template #}
    <script id=\"ticket_quick_view_tmp\" type=\"text/template\">
        <div class=\"uv-pull-right quick-view-navigation\">
            <div class=\"uv-loader\" style=\"display: none\">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <% if(previous) { %>
            <span class=\"uv-btn-tag uv-icon-nav-pre\" data-id=\"<%= previous %>\">
                </span>
            <% } else { %>
            <span class=\"uv-btn-tag uv-icon-nav-pre\" disabled=\"disabled\">
                </span>
            <% } %>
            <% if(next) { %>
            <span class=\"uv-btn-tag uv-icon-nav-nxt\"  data-id=\"<%= next %>\">
                </span>
            <% } else { %>
            <span class=\"uv-btn-tag uv-icon-nav-nxt\" disabled=\"disabled\">
                </span>
            <% } %>
        </div>
        <span class=\"uv-pop-up-close\"></span>
        <a href=\"<%= path %>\"><h2>{{ 'Ticket Info'|trans }} #<%= id %></h2></a>
        <div class=\"uv-pop-up-body uv-inner-section\">
            <div class=\"uv-view\">
                <div class=\"uv-ticket-head\">
                    <div class=\"uv-ticket-strip\">
                        <span>
                            <span class=\"uv-ticket-strip-label\">
                                {{ 'Timestamp'|trans }} -
                            </span>
                            <span class=\"uv-margin-0\">
                                <%= formatedCreatedAt %>
                            </span>
                        </span>
                        <span>
                            <span class=\"uv-ticket-strip-label\">
                                {{ 'By'|trans }} -
                            </span>
                            <%- createThread.user.name %>
                        </span>
                        <% if(agent) { %>
                        <span class=\"agent-info\" style=\"\">
                                <span class=\"uv-ticket-strip-label\">
                                    {{ 'Agent'|trans }} -
                                </span>
                                <span class=\"name\"><%- agent.name %></span>
                            </span>
                        <% } %>
                    </div>
                    <div class=\"uv-ticket-strip\">
                        <span class=\"uv-btn-tag\">
                            {{ 'Priority'|trans }}
                            - <%- priority.description %>
                        </span>
                        <span class=\"uv-btn-tag\">
                            {{ 'Status'|trans }}
                            - <%- status.description %>
                        </span>
                        <% if(lastReplyAgentName) { %>
                        <span class=\"uv-btn-tag\">
                                {{ 'Last Replied Agent'|trans }}
                                - <%- lastReplyAgentName.name.split(\" \")[0] %>
                            </span>
                        <% } %>
                    </div>
                </div>
                <div class=\"uv-ticket-head\">
                    <h1><%- subject %></h1>
                </div>

                <div class=\"uv-ticket-section\">
                    <div class=\"uv-ticket-main create\">
                        <div class=\"uv-ticket-strip\">
                            <span>
                                <span class=\"uv-margin-0 timeago\" data-timestamp=\"<%= createThread.timestamp %>\" title=\"<%= createThread.formatedCreatedAt %>\"><%= createThread.formatedCreatedAt %></span>
                                - <%- createThread.user.name %>
                                <span class=\"uv-ticket-strip-label\">
                                    {{ 'created Ticket'|trans }}
                                </span>
                            </span>
                        </div>
                        <div class=\"uv-ticket-main-lt\">
                            <% if (createThread.user.smallThumbnail != null) { %>
                                <img class='border' src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}<%= createThread.user.smallThumbnail %>\"/>
                            <% } else { %>
                                <% if (createThread.createdBy == 'customer') { %>
                                    <img class='border' src=\"{{ asset(default_customer_image_path) }}\"/>
                                <% } else { %>
                                    <img class='border' src=\"{{ asset(default_agent_image_path) }}\"/>
                                <% } %>
                            <% } %>
                        </div>
                        <div class=\"uv-ticket-main-rt\">
                            <% if(createThread.createdBy == 'customer') { %>
                            <a href=\"{{ path('helpdesk_member_manage_customer_account') }}/<%= createThread.user.id %>\" class=\"uv-ticket-member-name\">
                                <% } else { %>
                                <% if(createThread.user) { %>
                                <a href=\"{{ path('helpdesk_member_account') }}/<%= createThread.user.id %>\" class=\"uv-ticket-member-name\">
                                    <% } else { %>
                                    <a class=\"uv-ticket-member-name\">
                                        <% } %>
                                        <% } %>
                                        <%- createThread.user.name %>
                                    </a>

                                    <div class=\"message\">
                                        <p>
                                            <%= createThread.reply %>
                                        </p>
                                    </div>
                                    <!-- Attachment Block -->
                                    <% if(createThread.attachments.length) { %>
                                    <div class=\"uv-ticket-uploads\">
                                        <h4>{{ 'Uploaded Files'|trans }}</h4>
                                        <div class=\"uv-ticket-uploads-strip\">
                                            <% _.each(createThread.attachments, function(file) { %>
                                            <a href=\"<%-file.downloadURL %>\" target =\"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"<%- file.name %>\">
                                                <img src=\"<%-file.iconURL %>\" class=\"uv-auto-pointer-events\">
                                            </a>
                                            <% }) %>
                                        </div>
                                        <% if(createThread.attachments.length >1) { %>
                                        <div class=\"thread-attachments-zip pull-left\">
                                            <div class=\"uv-upload-actions\">
                                                <a href=\"{{ path('helpdesk_member_ticket_download_attachment_zip') }}/<%= createThread.id %>\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> {{ 'Download (as .zip)'|trans }}</a>
                                            </div>
                                        </div>
                                        <% } %>

                                    </div>
                                    <% } %>
                                    <!-- //Attachment Block -->
                        </div>
                    </div>
                    <% if(lastReply) { %>
                    <div class=\"uv-ticket-main\">
                        <div class=\"uv-ticket-strip\">
                                <span>
                                    <span class=\"uv-margin-0 timeago\" data-timestamp=\"<%= lastReply.timestamp %>\" title=\"<%= lastReply.formatedCreatedAt %>\"><%= lastReply.formatedCreatedAt %></span>
                                    - <%- lastReply.user.name %>
                                    <span class=\"uv-ticket-strip-label\">
                                        {{ 'made last reply'|trans }}
                                    </span>
                                </span>
                        </div>
                        <div class=\"uv-ticket-main-lt\">
                            <% if (lastReply.user.smallThumbnail != null) { %>
                                <img class='border' src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}<%= lastReply.user.smallThumbnail %>\"/>
                            <% } else { %>
                                <% if (lastReply.createdBy == 'customer') { %>
                                    <img class='border' src=\"{{ asset(default_customer_image_path) }}\"/>
                                <% } else { %>
                                    <img class='border' src=\"{{ asset(default_agent_image_path) }}\"/>
                                <% } %>
                            <% } %>
                        </div>
                        <div class=\"uv-ticket-main-rt\">
                            <% if(lastReply.createdBy == 'customer') { %>
                            <a href=\"{{ path('helpdesk_member_manage_customer_account') }}/<%= lastReply.user.id %>\" class=\"uv-ticket-member-name\">
                                <% } else { %>
                                <% if(lastReply.user) { %>
                                <a href=\"{{ path('helpdesk_member_account') }}/<%= lastReply.user.id %>\" class=\"uv-ticket-member-name\">
                                    <% } else { %>
                                    <a class=\"uv-ticket-member-name\">
                                        <% } %>
                                        <% } %>
                                        <%- lastReply.user.name %>
                                    </a>

                                    <div class=\"message\">
                                        <p>
                                            <%= lastReply.reply %>
                                        </p>
                                    </div>
                                    <!-- Attachment Block -->
                                    <% if(lastReply.attachments.length) { %>
                                    <div class=\"uv-ticket-uploads\">
                                        <h4>{{ 'Uploaded Files'|trans }}</h4>
                                        <div class=\"uv-ticket-uploads-strip\">
                                            <% _.each(lastReply.attachments, function(file) { %>
                                            <a href=\"<%-file.downloadURL %>\" target =\"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"<%- file.name %>\">
                                                <img src=\"<%-file.iconURL %>\" class=\"uv-auto-pointer-events\">
                                            </a>
                                            <% }) %>
                                        </div>
                                        <% if(lastReply.attachments.length> 1) { %>
                                        <div class=\"thread-attachments-zip pull-left\">
                                            <div class=\"uv-upload-actions\">
                                                <a href=\"{{ path('helpdesk_member_ticket_download_attachment_zip') }}/<%= lastReply.id %>\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> {{ 'Download (as .zip)'|trans }}</a>
                                            </div>
                                        </div>
                                        <% } %>

                                    </div>
                                    <% } %>
                                    <!-- //Attachment Block -->
                        </div>
                    </div>
                    <% } %>
                </div>
            </div>
        </div>
    </script>

    {# Ticket List Item View Template #}
    <script id=\"ticket_list_item_tmp\" type=\"text/template\">
        <td class=\"uv-width-140 uv-no-content\">
            <span class=\"uv-list-ticket-priority\" style=\"<% if(priority) { %>background: <%=priority.colorCode %><% } %>;\"></span>
            <label class=\"uv-vertical-align uv-margin-right-5\">
                <div class=\"uv-checkbox\">
                    <input type=\"checkbox\" class=\"mass-action-checkbox\" value=\"<%= id %>\"/>
                    <span class=\"uv-checkbox-view\"></span>
                </div>
            </label>
            <span class=\"uv-star <% if(isStarred) { %>uv-star-active<% } %> uv-margin-right-5\"></span>
            <span data-index=\"source\">
                <% if(source == 'email') {  %>
                    <span class=\"uv-channel uv-channel-email uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Email\"></span>
                <% } else if(source == 'facebook') {  %>
                    <span class=\"uv-channel uv-channel-facebook uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"></span>
                <% } else if(source == 'twitter') {  %>
                    <span class=\"uv-channel uv-channel-twitter uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"></span>
                <% } else if(source == 'binaka' || source == 'knock') {  %>
                    <span class=\"uv-channel uv-channel-binaka uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Binaka\"></span>
                <% } else if(source == 'api') { %>
                    <span class=\"uv-channel uv-channel-api uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"API\"></span>
                <% } else if(source == 'formbuilder') { %>
                    <span class=\"uv-channel uv-channel-form-builder uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Formbuilder\"></span>
\t\t\t\t<% } else if(source == 'disqus-engage') { %>
                    <span class=\"uv-channel uv-channel-disqus-engage uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Disqus\"></span>
\t\t\t\t<% } else if(source == 'ebay') { %>
                    <span class=\"uv-channel uv-channel-ebay uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Ebay\"></span>
\t\t\t\t<% } else if(source == 'youtube') { %>
                    <span class=\"uv-channel uv-channel-youtube uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Youtube\"></span>
                <% } else { %>
                    <span class=\"uv-channel uv-channel-web uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"<%- source %>\"></span>
                <% } %>

            </span>
            <span class=\"uv-quick-view-trigger\" data-id=\"<%= id %>\"></span>
        </td>
        <td data-value=\"{{ 'ID'|trans }}\" class=\"uv-width-100\">
            <a href=\"<%= path %>\">
                #<%= id %>
            </a>
        </td>
        <td data-value=\"{{ 'Subject'|trans }}\">
            <a href=\"<%= path %>\">
                <%- subject && subject.length <= 300 ? subject : subject.substr(0, 300) + '...'  %>
            </a>
        </td>
        <td data-value=\"{{ 'Customer Name'|trans }}\" data-index=\"customer-name\">
            <a href=\"<%= path %>\">
                <%- customer.name %>
            </a>
        </td>
        <td data-value=\"{{ 'Customer Email'|trans }}\" data-index=\"customer-email\">
            <a href=\"<%= path %>\">
                <%- customer.email %>
            </a>
        </td>
        <td data-value=\"{{ 'Timestamp'|trans }}\" data-index=\"timestamp\">
            <a href=\"<%= path %>\" class=\"timeago\" data-timestamp=\"<%= timestamp %>\" title=\"<%= formatedCreatedAt %>\">
                <%= formatedCreatedAt %>
            </a>
        </td>
        <td data-value=\"{{ 'Last Reply'|trans }}\" data-index=\"last-reply\">
            <% if(lastReplyTime) { %>
                <a href=\"<%= path %>\">
                    <%= lastReplyTime %>
                </a>
            <% } else { %>
                    {{ 'N/A'|trans }}
            <% } %>
        </td>
        <td data-value=\"{{ 'Group'|trans }}\" data-index=\"group\">
            <a href=\"<%= path %>\">
                <% if(group) { %>
                <%- group %>
                <% } else { %>
                {{ 'N/A'|trans }}
                <% } %>
            </a>
        </td>
        <td data-value=\"{{ 'Team'|trans }}\" data-index=\"team\">
            <a href=\"<%= path %>\">
                <% if(team) { %>
                <%- team %>
                <% } else { %>
                {{ 'N/A'|trans }}
                <% } %>
            </a>
        </td>
        <td data-value=\"{{ 'Type'|trans }}\" data-index=\"type1\">
            <a href=\"<%= path %>\">
                <% if(type) { %>
                <%- type %>
                <% } else { %>
                {{ 'N/A'|trans }}
                <% } %>
            </a>
        </td>
        <td data-value=\"{{ 'Replies'|trans }}\" data-index=\"replies\">
            <a href=\"<%= path %>\">
                <%= totalThreads %>
            </a>
        </td>
        <td data-value=\"{{ 'Agent'|trans }}\" data-index=\"agent\">
            <a href=\"<%= path %>\">
                <% if(agent) { %>
                <% if(agent.smallThumbnail != null) { %>
                <img src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}<%= agent.smallThumbnail %>\" alt=\"\"/>
                <% } else { %>
                <img src=\"{{ asset(default_agent_image_path) }}\" alt=\"\"/>
                <% } %>
                <%- agent.name %>
                <% } else { %>
                {{ 'Unassigned'|trans }}
                <% } %>
            </a>
        </td>
    </script>

    <script type=\"text/javascript\">
        var isPageJustLoaded = true;
        var globalMessageResponse = \"\";
        var currentUserId = \"{{ user_service.getCurrentUser().id }}\";
        var pathToTicket = \"{{ path('helpdesk_member_ticket', {'ticketId': 'replaceId' }) }}\";

        \$(() => {
            \$('#before-filter-input').datetimepicker({
                format: 'DD-MM-YYYY',
                maxDate: 'now',
                useCurrent: false,
            });

            \$('#after-filter-input').datetimepicker({
                format: 'DD-MM-YYYY',
                maxDate: 'now',
                useCurrent: false,
            });

            // Ticket Model
            var TicketModel = Backbone.Model.extend({
                idAttribute: \"id\",
                defaults: {
                    path: \"\",
                },
                urlRoot: \"{{ path('helpdesk_member_ticket_xhr') }}\"
            });

            // Ticket Label Model
            var LabelModel = Backbone.Model.extend({
                idAttribute: \"id\",
                defaults: {
                    count: 0,
                },
                parse: function (resp, options) {
                    return JSON.parse(resp.label);
                },
                urlRoot: \"{{ path('helpdesk_member_ticket_label_xhr') }}\"
            });

            // Ticket Quick View Model
            var TicketQuickViewModel = Backbone.Model.extend({
                idAttribute: \"id\",
                defaults: {
                    path: \"\",
                    isSynced: false
                }
            });

            // Side Filter Model
            var SideFilterModel = Backbone.Model.extend({
                updateModel: function(type,json) {
                    if(this.has(type)) {
                        context = this.get(type)

                        savedOptionsIds = [];
                        _.each(context, function (option) {
                            savedOptionsIds.push(parseInt(option.id))
                        })

                        if(jQuery.inArray(parseInt(json.id), savedOptionsIds) == -1) {
                            context.push(json);
                            this.set(type, context)
                        }
                    } else {
                        this.set(type, [json])
                    }
                },
                loadFilterOptions: function(data) {
                    var self = this;
                    \$.ajax({
                        url : \"{{ path('helpdesk_member_ticket_collection_load_filter_options_xhr') }}\",
                        type : 'POST',
                        data: data,
                        dataType : 'json',
                        success : function(response) {
                            _.each(response,function(filter,key) {
                                _.each(filter, function (item) {
                                    self.updateModel(key,item)
                                })
                            })
                            sideFilter.render();
                        },
                        error: function (xhr) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                }
            });

            // Ticket Label Collection
            var LabelCollection = Backbone.Collection.extend({
                model: LabelModel,
                isLabelExist: function(labelName, labelId) {
                    var flag = 1;
                    _.each(this.models, function (item) {
                        if(item.get('name').toUpperCase() == labelName.toUpperCase() && item.id != labelId)
                            flag = 0;
                    }, this);
                    return flag;
                }
            });

            // Ticket Collection
            var TicketCollection = AppCollection.extend({
                model: TicketModel,
                url: \"{{ path('helpdesk_member_ticket_collection_xhr') }}\",
                filterParameters: {
                    label: \"\",
                    new: \"\",
                    unassigned: \"\",
                    notreplied: \"\",
                    mine: \"\",
                    starred: \"\",
                    trashed: \"\",
                    label: \"\",
                    status: \"\",
                    search: \"\",
                    searchType: \"\",
                    agent: \"\",
                    customer: \"\",
                    priority: \"\",
                    type: \"\",
                    group: \"\",
                    team: \"\",
                    tag: \"\",
                    mailbox : \"\",
                    source : \"\",
                    after: \"\",
                    before: \"\",
                    repliesLess: \"\",
                    repliesMore: \"\",
                },
                parseRecords: function (response, options) {
                    return response.tickets;
                },
                syncData: function() {
                    app.appView.showLoader();
                    \$('.select-all-checkbox').prop('checked', false);

                    this.fetch({
                        data: this.getValidParameters(),
                        reset: true,
                        success: function(model, response) {
                            ticketQuickViewCollection.reset()
                            app.appView.hideLoader();
                            var ticketListView = new TicketList();

                            app.pager.paginationData = response.pagination;
                            var url = app.pager.paginationData.url;
                            if(ticketCollection.length == 0 && app.pager.paginationData.current != \"0\")
                                router.navigate(url.replace('replacePage', app.pager.paginationData.last),{trigger: true});
                            else {
                                app.pager.render();
                                statusListDetails = response.tabs;
                                labelDetails = response.labels;
                                labelListView.render();
                            }

                            if (globalMessageResponse) {
                                app.appView.renderResponseAlert(globalMessageResponse);
                            }

                            globalMessageResponse = null;
                            sideFilter.backToFilter()
                        },
                        error: function (model, xhr, options) {
                            app.appView.hideLoader();
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                },
                batchOperation: function(data) {
                    var self = this;
                    app.appView.showLoader();
                    \$.ajax({
                        url : \"{{ path('helpdesk_member_ticket_collection_mass_action_xhr') }}\",
                        type : 'POST',
                        data : {data : data},
                        dataType : 'json',
                        success : function(response) {
                            app.appView.hideLoader();
                            globalMessageResponse = response;
                            self.syncData();
                        },
                        error: function (xhr) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                            \$('.mass-action-checkbox').prop('checked', false);
                        }
                    });
                }
            });

            // Ticket Quick View Collection
            var TicketQuickViewCollection = Backbone.Collection.extend({
                model: TicketQuickViewModel,
                isModelSynced: function(id) {
                    if (model = this.get(id)) {
                        if (parseInt(model.attributes.isSynced)) {
                            return model;
                        }
                    }

                    return false;
                },
                initialize: function() {
                    _.bindAll(this, 'getNextPrev', 'nextElement', 'previousElement');
                },
                getNextPrev : function(id) {
                    var data = {};
                    currentModel = ticketQuickViewCollection.get(id)
                    data['next'] = (model = this.nextElement(currentModel)) ? model.id : 0;
                    data['previous'] = (model = this.previousElement(currentModel)) ? model.id : 0;

                    return data;
                },
                nextElement: function(model) {
                    var index = ticketQuickViewCollection.indexOf(model);
                    if ((index + 1) === ticketQuickViewCollection.length)
                        return 0;

                    return ticketQuickViewCollection.at(index + 1);
                },
                previousElement: function(model) {
                    var index = ticketQuickViewCollection.indexOf(model);
                    if (index === 0 )
                        return 0;

                    return ticketQuickViewCollection.at(index - 1);
                }
            });

            // Filter
            var Filter = app.Filter.extend({
                defaultSortIndex: 'ticket.updatedAt',
                sortText: \"{% trans %}Sort By:{% endtrans %} \",
                defaultSortText: \"{% trans %}Sort By:{% endtrans %} {% trans %}Last Replied{% endtrans %}\",
                template : _.template(\$(\"#ticket_list_sorting_tmp\").html()),
                searchTypeTemplate : _.template(\$(\"#search_type_option_list\").html()),
                events : {
                    'keyup .uv-search-inline' : 'searchKeyword',
                    'click .clear-search-icon': 'clearSearch',
                    'click .uv-dropdown-container-list li' : 'getOptionValue',
                    'change .asset-visibility input[type=\"checkbox\"]': 'filterAssetsVisibility'
                },
                filterAssetsVisibilityOnLoad: function() {
                    this.\$el.find('.uv-dropdown-container-list').html(this.searchTypeTemplate(ticketCollection.filterParameters));

                    if(localStorage.getItem('assets-visibility')) {
                        var assets = JSON.parse(localStorage.getItem('assets-visibility'));
                        \$.each(assets, function(asset, assetVal) {
                            if(assetVal) {
                                \$('span[data-index=\"' + asset + '\"], td[data-index=\"' +asset + '\"], th[data-index=\"' + asset + '\"]').show()
                                \$('#' + asset).prop('checked', true);
                            } else {
                                \$('span[data-index=\"' + asset + '\"], td[data-index=\"' +asset + '\"], th[data-index=\"' + asset + '\"]').hide()
                                \$('#' + asset).prop('checked', false);
                            }
                        })
                    }
                },
                filterAssetsVisibility: function(e) {
                    var assets = {};
                    \$('.asset-visibility input').each(function() {
                        var asset = \$(this).val();
                        if(\$(this).is(':checked')) {
                            assets[asset] = 1;
                            \$('span[data-index=\"' + asset + '\"], td[data-index=\"' + asset + '\"], th[data-index=\"' + asset + '\"]').show()
                        } else {
                            assets[asset] = 0;
                            \$('span[data-index=\"' + asset + '\"], td[data-index=\"' + asset + '\"], th[data-index=\"' + asset + '\"]').hide()
                        }
                    });

                    localStorage.setItem('assets-visibility', JSON.stringify(assets));
                },
                searchKeyword: _.debounce(function(e) {
                    const self = this;

                    // Get search value and sanitize it
                    const newstr = self.htmlspecialchars(\$(e.target).val());
                    const search_type = this.\$('#new-data').text();
                    const clearButton = document.getElementById('clear-search');

                    // Handle empty search state
                    if (newstr.length === 0 && search_type.length === 0) {
                        this.\$('#error-message').html('');
                        clearButton.style.display = 'none';
                    } else {
                        this.\$('#error-message').text('Please select at least one parameter for searching.');
                        clearButton.style.display = 'inline';
                    }

                    if (search_type.length > 1) {
                        this.\$('#error-message').html('');

                        // Reset collection and update parameters
                        this.collection.reset();
                        this.collection.state.currentPage = null;
                        this.collection.filterParameters.search = newstr;
                        this.collection.filterParameters.searchType = search_type.toLowerCase().trim();

                        const validParams = this.collection.getValidParameters();
                        const queryString = app.appView.buildQuery(\$.param(validParams));

                        router.navigate(queryString, { trigger: true });
                    }
                }, 1000),
                htmlspecialchars(str) {
                    var map = {
                        '&': '&amp;',
                        '<': '&lt;',
                        '>': '&gt;',
                        '\"': '&quot;',
                        \"'\": '&#039;'
                    };

                    return str.replace(/[&<>\"']/g, function(m) { return map[m]; });
                },
                clearSearch: function (e) {
                    var searchInput = document.querySelector('.uv-search-inline');
                    var clearButton = document.getElementById(\"clear-search\");

                    searchInput.value = '';
                    clearButton.style.display = \"none\";
                    searchInput.focus();

                    this.collection.reset();
                    this.collection.state.currentPage = null;
                    this.collection.filterParameters.search = null;
                    this.collection.filterParameters.searchType = null;
                    this.\$('#error-message').html('');
                    var queryString = app.appView.buildQuery(\$.param(this.collection.getValidParameters()));

                    router.navigate(queryString, {trigger: true});
                },
                getOptionValue: function(e){
                    currentElement = Backbone.\$(e.currentTarget);

                    var optionValue = currentElement.attr(\"data-id\");

                    if (optionValue.length) {
                        this.\$('#error-message').html('');
                    }

                    if (this.\$(\"#new-data\").text().length > 0) {
                        this.\$(\"#new-data\").html('');
                    }

                    this.\$(\"#new-data\").append(optionValue);
                }
            });

            // Side Filter View
            var SideFilter = Backbone.View.extend({
                el: \$(\".uv-filter-view\"),
                isRecurrsiveCalls: 0,
                isReadyFlag: 0,
                appliedFilterOptions: {},
                tempAppliedFilterOptions: {},
                events: {
                    'change #saved-filter': 'applySavedFilter',
                    'input .uv-field-block input' : 'searchFilterOption',
                    'click .uv-dropdown-list li' : 'applyFilter',
                    'dp.change .range input': 'applyFilter',
                    'click .uv-filtered-tags .uv-btn-tag' : 'removeFilter',
                    'change .custom-filter' : 'filterByCustom',
                    'change #repliesLess-filter-input' : 'filterByRepliesLessThan',
                    'change #repliesMore-filter-input' : 'filterByRepliesMoreThan',
                    'keyup .search-custom, change .search-custom' : 'filterByCustom',
                    'click .new-saved-reply, .edit-saved-reply, .uv-filter-paper .uv-customize': 'addEditSavedReply',
                    'click .back-to-filter': 'backToFilter',
                    'click .uv-filter-edit .uv-btn-tag': 'removeSavedFilterOption',
                    'click .uv-filter-edit .save-filter, .uv-filter-edit .update-filter' : \"saveSavedFilter\",
                    'click .uv-filter-edit .uv-action-buttons .uv-btn-remove': 'removeSavedFilter'
                },
                loaderTemplate: _.template(\$(\"#loader-tmp\").html()),
                addEditSavedReplyTemplate: _.template(\$(\"#add_edit_saved_filter_tmp\").html()),
                checkOptionAvailable: function() {
                    this.isReadyFlag = 0;
                    var self = this;
                    var fetchOptions = {};

                    _.each(ticketCollection.filterParameters, function (filter,key) {
                        if(jQuery.inArray(key, ['customer','tag','label']) !== -1) {
                            if(filter != null && filter != '') {
                                filter = filter.split(',');

                                if(typeof fetchOptions[key] === 'undefined')
                                    fetchOptions[key] = [];

                                savedOptionsIds = [];
                                if(sideFilterModel.has(key)) {
                                    _.each(sideFilterModel.get(key), function (option) {
                                        savedOptionsIds.push(parseInt(option.id))
                                    })
                                }

                                _.each(filter, function (item) {
                                    if(jQuery.inArray(parseInt(item), savedOptionsIds) == -1) {
                                        fetchOptions[key].push(parseInt(item));
                                        self.isReadyFlag = 1;
                                    }
                                })
                            }
                        }
                    });

                    return fetchOptions;
                },
                render: function() {
                    fetchOptions = this.checkOptionAvailable();

                    if (this.isReadyFlag && !this.isRecurrsiveCalls) {
                        this.isReadyFlag = 0;
                        this.isRecurrsiveCalls = 1;
                        sideFilterModel.loadFilterOptions(fetchOptions)
                    } else {
                        var appliedFilterOptions = {};
                        \$('.uv-filtered-tags').html(\"\")
                        var self = this;
                        var displayFlag = 0;
                        _.each(ticketCollection.filterParameters, function (filter, key) {
                            if (jQuery.inArray(key, ['customer', 'agent', 'priority', 'type', 'group', 'team', 'tag', 'mailbox', 'source', 'after', 'before', 'repliesLess', 'repliesMore']) !== -1) {
                                if (filter != null && filter != '') {
                                    displayFlag = 1;
                                    filter = filter.split(',');

                                    appliedFilterOptions[key] = {'name': key.charAt(0).toUpperCase() + key.slice(1)};
                                    appliedFilterOptions[key]['options'] = [];

                                    _.each(filter, function (value) {
                                        if (key == 'after' || key == 'before' || key == 'repliesLess' || key == 'repliesMore') {
                                            \$(\"#\" + key + \"-filter-input\").val(filter)
                                            appliedFilterOptions[key]['options'].push({'id': filter, 'name': filter});
                                        } else {
                                            savedOptions = sideFilterModel.get(key)
                                            _.each(savedOptions, function (item) {
                                                if (item.id == value) {
                                                    appliedFilterOptions[key]['options'].push({'id': item.id, 'name': item.name});

                                                    parent = \$('#'+key+'-filter')
                                                    parent.find('.uv-filtered-tags').append(\"<a class='uv-btn-tag' href='#' data-id='\" + item.id + \"'>\" + item.name + \"<span class='uv-icon-remove-dark'></span></a>\")
                                                    parent.find('input').val('')
                                                }
                                            })
                                        }
                                    });
                                }
                            } else if (jQuery.inArray(key, ['new','unassigned','notreplied','mine','starred','trashed']) !== -1) {
                                if (filter != null && filter != '') {
                                    displayFlag = 1;
                                    appliedFilterOptions[key] = {'name': \"{{ 'Label'|trans }}\"};
                                    appliedFilterOptions[key]['options'] = [];
                                    var optionName = (key == 'mine') ? \"{% trans %}Assigned to me{% endtrans %}\" : key.charAt(0).toUpperCase() + key.slice(1);
                                    appliedFilterOptions[key]['options'].push({'id': key, 'name': optionName});
                                } else {
                                    if (!ticketCollection.filterParameters.new && !ticketCollection.filterParameters.unassigned && !ticketCollection.filterParameters.notreplied && !ticketCollection.filterParameters.mine && !ticketCollection.filterParameters.starred && !ticketCollection.filterParameters.trashed &&! ticketCollection.filterParameters.label) {
                                        appliedFilterOptions['all'] = {'name': \"{{ 'Label'|trans }}\"};
                                        appliedFilterOptions['all']['options'] = [];
                                        appliedFilterOptions['all']['options'].push({'id': 1, 'name': \"{{ 'All'|trans }}\"});
                                    }
                                }
                            } else if (key == 'label') {
                                if (filter != null && filter != '') {
                                    displayFlag = 1;
                                    var labelModel = labelCollection.get(filter);
                                    appliedFilterOptions[key] = {'name': \"{{ 'Label'|trans }}\"};
                                    appliedFilterOptions[key]['options'] = [];
                                    if (labelModel) {
                                        appliedFilterOptions[key]['options'] = [];
                                        appliedFilterOptions[key]['options'].push({'id': labelModel.attributes.id, 'name': labelModel.attributes.name});
                                    } else {
                                        savedOptions = sideFilterModel.get(key)
                                        _.each(savedOptions, function (item) {
                                            if(item.id == filter) {
                                                appliedFilterOptions[key]['options'].push({'id': item.id, 'name': item.name});
                                            }
                                        });
                                    }
                                } else {
                                    if (!ticketCollection.filterParameters.new && !ticketCollection.filterParameters.unassigned && !ticketCollection.filterParameters.notreplied && !ticketCollection.filterParameters.mine && !ticketCollection.filterParameters.starred && !ticketCollection.filterParameters.trashed &&! ticketCollection.filterParameters.label) {
                                        appliedFilterOptions['all'] = {'name': \"{{ 'Label'|trans }}\"};
                                        appliedFilterOptions['all']['options'] = [];
                                        appliedFilterOptions['all']['options'].push({'id': 1, 'name': \"{{ 'All'|trans }}\"});
                                    }
                                }
                            } else if (key == 'status') {
                                appliedFilterOptions[key] = {'name': \"{{ 'Status'|trans }}\"};
                                appliedFilterOptions[key]['options'] = []
                                if (filter != null && filter != '' && filter != 1) {
                                    displayFlag = 1;
                                    appliedFilterOptions[key]['options'].push({'id': filter, 'name': \$(\".status-list li a[data-id='\" + filter + \"'] .name\").text().trim()});
                                } else {
                                    appliedFilterOptions[key]['options'].push({'id': 1,'name': \"{{ 'Open'|trans }}\"});
                                }


                            } else if (key == 'search') {
                                if (filter != null && filter != '') {
                                    displayFlag = 1;
                                    appliedFilterOptions[key] = {'name': \"{{ 'Search Query'|trans }}\"};
                                    appliedFilterOptions[key]['options'] = [];
                                    appliedFilterOptions[key]['options'].push({'id': filter, 'name': filter});
                                }
                            } else if(key == 'custom') {
                                if (filter != null && filter != '') {
                                    self.\$el.find('[data-filter=\"custom\"]').remove();

                                    displayFlag = 1;

                                    var realKey = key;
                                    var checkBoxStore = Array();
                                    var dataValueValueSeprator = '_';
                                    var columnSeperator = '|';

                                    var multiOptions = filter.split(columnSeperator);
                                    var multiKeyValue, multiKeyValueValue, ele, newEle;

                                    _.each(multiOptions, function(valueData, indexData) {
                                        if(!valueData)
                                            return;

                                        multiKeyValue = valueData.split(dataValueValueSeprator);

                                        multiKeyValueValue = multiKeyValue[1].split(',');

                                        eleSelector = '[data-value=\"' + multiKeyValue[0] + '\"]';
                                        ele = \$(eleSelector);

                                        if (ele[0].type == 'radio') {
                                            var dataValue = multiKeyValue[0];
                                            name = ele.parents('.uv-element-block:not(.radio)').find('label:first').text().trim()
                                            value =  \$(eleSelector + '[value=\"' + multiKeyValue[1] + '\"]').parent().next().text();

                                            appliedFilterOptions['z-'+dataValue] = {'name': name, 'type': 'radio'};
                                            appliedFilterOptions['z-'+dataValue]['options'] = [];
                                            appliedFilterOptions['z-'+dataValue]['options'].push({'id': multiKeyValue[1], 'name': value});
                                        } else if (ele[0].type == 'checkbox') {

                                            var dataValue = multiKeyValue[0];
                                            if(\$.inArray(dataValue, checkBoxStore) >= 0)
                                                return;
                                            checkBoxStore.push(dataValue);

                                            name = ele.parents('.uv-element-block:not(.checkbox)').find('label:first').text().trim()

                                            appliedFilterOptions['z-'+dataValue] = {'name': name, 'type': 'checkbox'};
                                            appliedFilterOptions['z-'+dataValue]['options'] = [];
                                            var optionName, optionValue;
                                            _.each(multiKeyValueValue, function(value) {
                                                newEle = \$(eleSelector + '[value=\"' + value + '\"]')
                                                optionValue = dataValue + dataValueValueSeprator + newEle.val();
                                                optionName = newEle.parent().next().text();
                                                if(optionValue && optionName) {
                                                    appliedFilterOptions['z-'+dataValue]['options'].push({'id': value, 'name': optionName});
                                                }
                                            });
                                        } else if (ele[0].type == 'select-multiple') {
                                            var dataValue = multiKeyValue[0];
                                            filter = multiKeyValueValue;
                                            key = ele.attr('id');
                                            name = ele.parents('.uv-element-block').find('label:first').text().trim()

                                            appliedFilterOptions['z-'+dataValue] = {'name': name, 'type': 'select-multiple'};
                                            appliedFilterOptions['z-'+dataValue]['options'] = [];

                                            _.each(filter, function (value) {
                                                var optionName;
                                                if(optionName = \$(\"#\"+key+\" option[value='\" + value + \"']\").text()) {
                                                    appliedFilterOptions['z-'+dataValue]['options'].push({'id': value, 'name': optionName});
                                                }
                                            });

                                        } else if (ele[0].type == 'text' || ele[0].type == 'number') {
                                            filter = multiKeyValue[1];
                                            if (filter != null && filter != '') {
                                                filter = filter.replace(/\\+/g,' ');
                                                displayFlag = 1;
                                                var dataValue = ele.attr('data-value');
                                                name = ele.parents('.uv-element-block').find('label:first').text().trim()

                                                appliedFilterOptions['z-'+dataValue] = {'name': name, 'type': ele[0].type};
                                                appliedFilterOptions['z-'+dataValue]['options'] = [];
                                                appliedFilterOptions['z-'+dataValue]['options'].push({'id': 1, 'name': filter});

                                            }

                                        }
                                    })
                                }
                            }
                            if('after' == key || 'before' == key || 'repliesLess' == key || 'repliesMore' == key) {
                                \$('#'+ key +'-filter-input').val(filter);
                            }
                        })

                        if (displayFlag) {
                            self.\$el.find('.uv-filter-options .uv-action-buttons').html(\"\")
                            if (\$(\"#saved-filter\").val() != null && \$(\"#saved-filter\").val() != '' && Backbone.history.getFragment() == userFilters[\$(\"#saved-filter\").val()]['route']) {
                                self.\$el.find('.uv-filter-options .uv-action-buttons').append(\"<a class='uv-btn edit-saved-reply' href='#'>{{ 'Edit'|trans }}</a>\").show();
                                \$('.uv-filter-paper .uv-customize').show()
                            } else {
                                self.\$el.find('.uv-filter-options .uv-action-buttons').append(\"<a class='uv-btn new-saved-reply' href='#'>{{ 'New'|trans }}</a>\").show();
                                if (\$(\"#saved-filter\").val() != null && \$(\"#saved-filter\").val() != '') {
                                    self.\$el.find('.uv-filter-options .uv-action-buttons').append(\"<a class='uv-btn edit-saved-reply' href='#'>{{ 'Update'|trans }}</a>\").show();
                                    \$('.uv-filter-paper .uv-customize').show()
                                } else {
                                    \$('.uv-filter-paper .uv-customize').hide()
                                }
                            }
                        } else {
                            \$('.uv-filter-paper .uv-customize').hide()
                        }

                        this.appliedFilterOptions = appliedFilterOptions;
                        this.tempAppliedFilterOptions = jQuery.extend(true, {}, appliedFilterOptions);
                    }
                },
                searchFilterOption: function(e) {
                    self = this;
                    currentElement = Backbone.\$(e.currentTarget);
                    dropdown = currentElement.siblings('.uv-dropdown-list');
                    var filterType =  currentElement.attr('data-filter-type');
                    if (jQuery.inArray(filterType, ['customer', 'tag']) !== -1) {
                        self.searchFilterXhr(currentElement);
                    }
                },
                searchFilterXhr: _.debounce(function(currentElement) {
                    var parent = currentElement.parent();
                    if (\$('.uv-dropdown-other.uv-dropdown-btn-active').parent().attr('id') != parent.attr('id'))
                        return;

                    parent.find(\"li:not(.uv-no-results, .uv-filter-info)\").remove();
                    parent.find(\".uv-filter-info\").show()
                    if (currentElement.val().length > 1) {
                        parent.append(this.loaderTemplate())
                        parent.find('.uv-filter-info').text(\"{% trans %}Searching{% endtrans %} ...\")
                        if (self.xhrReq)
                            self.xhrReq.abort();

                        self.xhrReq = \$.ajax({
                            url : \"{{ path('helpdesk_member_ticket_collection_search_filter_options_xhr') }}\",
                            type : 'GET',
                            data: {\"type\" : currentElement.attr('data-filter-type'), \"query\" : currentElement.val(), 'not' : ticketCollection.filterParameters[currentElement.attr('data-filter-type')]},
                            dataType : 'json',
                            success : function(response) {
                                self.xhrReq = 0;
                                parent.find('.uv-loader').remove()
                                parent.find('.uv-filter-info').text(\"{{ 'Type atleast 2 letters'|trans }}\").hide();
                                if (response.length == 0) {
                                    parent.find('.uv-no-results').show()
                                } else {
                                    parent.find('.uv-no-results').hide();
                                    _.each(response, function(item) {
                                        if (currentElement.attr('data-filter-type') == 'customer') {
                                            var img = item.smallThumbnail ? \"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}\"+item.smallThumbnail : \"{{ asset(default_customer_image_path)}}\";
                                            parent.find('.uv-dropdown-list ul').append(\"<li data-id='\" + item.id + \"' name='\" + item.name + \"' class='uv-dropdown-navigations-support-el' tabindex='0' style='display: flex; gap: 10px;'><div><img src='\" + img + \"' style='margin: unset;'/></div><div style='font-size: 14px;'><div style='width: 100%;'>\" +  item.name + \"</div><div style='width: 100%; max-width: 168px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;'>\" + item.email + \"</div></div></li>\")
                                        } else
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
                }, 1000),

                applySavedFilter: function(e) {
                    var element = Backbone.\$(e.currentTarget);
                    if (element.val() != \"\") {
                        var element = Backbone.\$(e.currentTarget);
                        router.navigate(userFilters[element.val()]['route'], {trigger: true});
                    } else {
                        router.navigate('', {trigger: true});
                    }
                },
                applyFilter: function(e) {
                    currentElement = Backbone.\$(e.currentTarget);

                    if (currentElement.attr(\"data-id\")) {
                        var flag = 1;
                        parent = currentElement.parents(\".uv-field-block\");
                        filterType = parent.find('input').attr('data-filter-type');

                        if (filterType == \"customer\" || filterType == 'tag') {
                            sideFilterModel.updateModel(filterType, {'id': currentElement.attr('data-id'), 'name': currentElement.attr('name')})
                            parent.find(\".uv-no-results\").hide()
                            parent.find(\".uv-filter-info\").show().text(\"{{ 'Type atleast 2 letters'|trans }}\")
                            parent.find(\"li:not(.uv-no-results, .uv-filter-info)\").remove();
                        } else {
                            if (ticketCollection.filterParameters[filterType]) {
                                ids = ticketCollection.filterParameters[filterType].split(',')
                                if (jQuery.inArray(currentElement.attr('data-id'), ids) !== -1)
                                    flag = 0;
                            }
                        }

                        parent.find('input').val('')
                        if (jQuery.inArray(filterType, ['agent', 'priority', 'type', 'group', 'team', 'mailbox', 'source']) !== -1) {
                            parent.find(\"li:not(.uv-no-results)\").show()
                        }
                        if (flag) {
                            parent.find('.uv-filtered-tags').append(\"<a class='uv-btn-tag' href='#' data-id='\" + currentElement.attr('data-id') + \"'>\"+currentElement.attr('name')+\"<span class='uv-icon-remove-dark'></span></a>\")
                            ticketCollection.state.order = null;
                            ticketCollection.state.sortKey = null;
                            ticketCollection.state.currentPage = null;
                            ticketCollection.filterParameters[filterType] = this.joinTagValues(parent.find(\".uv-filtered-tags\"));
                            var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                            router.navigate(queryString, {trigger: true});
                        }
                    } else {
                        filterType = currentElement.attr('data-filter-type');
                        if (filterType == 'before' || filterType == \"after\") {
                            ticketCollection.state.order = null;
                            ticketCollection.state.sortKey = null;
                            ticketCollection.state.currentPage = null;
                            ticketCollection.filterParameters[filterType] = currentElement.val();
                            var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                            router.navigate(queryString, {trigger: true});
                        }
                    }
                },
                removeFilter: function(e) {
                    e.preventDefault()

                    currentElement = Backbone.\$(e.currentTarget);
                    filterType = currentElement.parents('.uv-field-block').find('input').attr('data-filter-type')
                    var options = ticketCollection.filterParameters[filterType];
                    options = options.split(',');
                    var index = options.indexOf(currentElement.attr('data-id'));
                    options.splice(index, 1);
                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters[filterType] = options.join(',');
                    currentElement.remove()

                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString, {trigger: true});
                },
                joinTagValues: function(parent) {
                    var ids = new Array();
                    parent.find('.uv-btn-tag').each(function() {
                        ids.push(\$(this).attr('data-id'))
                    });

                    return ids.join();
                },
                filterByRepliesMoreThan: _.debounce(function(e) {
                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters.repliesMore = \$(e.target).val();
                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString, { trigger: true });
                }, 1000),
                filterByRepliesLessThan: _.debounce(function(e) {
                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters.repliesLess = \$(e.target).val();
                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString, { trigger: true });
                }, 1000),
                filterByCustom: _.debounce(function(e) {
                    var custom = '';
                    var checkBoxStore = Array();
                    var indexValueSeperator = '_';
                    var columnSeperator = '|';

                    Backbone.\$('.custom-filter').each(function() {
                        if (\$(this).context.type == 'radio' && \$(this).is(':checked')) {
                            custom += \$(this).attr('data-value') + indexValueSeperator + \$(this).val() + columnSeperator;
                        } else if (\$(this).context.type == 'checkbox' && \$(this).is(':checked')) {
                            var checkboxValue = Array();
                            var dataValue = \$(this).attr('data-value');
                            if (\$.inArray(dataValue, checkBoxStore) >= 0)
                                return;
                            \$.each(\$('[data-value=\"'+ dataValue +'\"]:checked'), function() {
                                checkboxValue.push(\$(this).val());
                            });
                            checkBoxStore.push(dataValue);
                            custom += dataValue + indexValueSeperator + checkboxValue.join() + columnSeperator;
                        } else if (\$(this).context.type == 'select-multiple' && \$(this).val()) {
                            custom += \$(this).attr('data-value') + indexValueSeperator + \$(this).val().join() + columnSeperator;
                        }
                    })

                    Backbone.\$('.search-custom').each(function(){
                        if (\$(this).val()) {
                            custom += \$(this).attr('data-value') + indexValueSeperator + \$(this).val() + columnSeperator;
                        }
                    })

                    custom = custom.replace(/\\|\$/, '');

                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters.custom = custom;
                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString,{trigger: true});
                }, 1000),
                backToFilter: function(e) {
                    if (e)
                        e.preventDefault()
                    this.\$el.find('.uv-filter-options').show()
                    this.\$el.find('.uv-filter-edit').hide()
                },
                addEditSavedReply: function(e) {
                    e.preventDefault()

                    var context = {};
                    this.tempAppliedFilterOptions = jQuery.extend(true, {}, this.appliedFilterOptions);
                    if (Backbone.\$(e.currentTarget).is('.new-saved-reply')) {
                        context = {'id': 0, 'name': '', 'is_default': 0, 'filters': this.tempAppliedFilterOptions};
                    } else {
                        context = userFilters[\$(\"#saved-filter\").val()];
                        context.filters = this.tempAppliedFilterOptions;
                        userFilters[\$(\"#saved-filter\").val()]
                    }
                    \$('.uv-filter-edit').html('')
                    \$('.uv-filter-edit').append(this.addEditSavedReplyTemplate(context));
                    this.\$el.find('.uv-filter-options').hide()
                    this.\$el.find('.uv-filter-edit').show()
                },
                removeSavedFilterOption: function(e) {
                    e.preventDefault()
                    var parent = Backbone.\$(e.currentTarget).parents('.uv-element-block');
                    var elementIndex = Backbone.\$(e.currentTarget).index();
                    var filterType = parent.attr('data-filter');
                    var filterId = Backbone.\$(e.currentTarget).attr('data-id');

                    delete this.tempAppliedFilterOptions[filterType]['options'][elementIndex]
                    Backbone.\$(e.currentTarget).remove()
                    if (!parent.find('.uv-btn-tag').length) {
                        parent.remove()
                        delete this.tempAppliedFilterOptions[filterType];
                    }
                    if (this.getSavedFilterRoute() == '') {
                        this.backToFilter();
                    }
                },
                saveSavedFilter: function(e) {
                    e.preventDefault()

                    if (Backbone.\$(e.currentTarget).hasClass('save-filter'))
                        this.saveFilterAjax('POST')
                    else {
                        this.saveFilterAjax('PUT')
                    }
                },
                saveFilterAjax: function(method) {
                    var inputElement = \$('.uv-filter-edit input.name');
                    inputElement.removeClass('uv-field-error');
                    \$('.uv-field-message').remove()

                    if (inputElement.val() != undefined && inputElement.val() == '') {
                        inputElement.addClass('uv-field-error');
                        inputElement.parent().after(\"<span class='uv-field-message'>{{ 'This field is mandatory'|trans }}</span>\");
                    } else {
                        var data = \$('.uv-filter-edit form').serializeObject();
                        data['route'] = this.getSavedFilterRoute();
                        app.appView.showLoader();
                        self = this;
                        \$.ajax({
                            url : \"{{ path('helpdesk_member_saved_filters_xhr') }}\",
                            type : method,
                            data: data,
                            dataType : 'json',
                            success : function(response) {
                                app.appView.hideLoader();
                                userFilters[response.filter.id] = response.filter;
                                \$(\"#saved-filter\").html(\"<option value=''>-- {{ 'Saved Filter'|trans }} --</option>\")
                                _.each(userFilters, function(filter, key) {
                                    if (response.filter.is_default && filter.id != response.filter.id)
                                        userFilters[key]['is_default'] = 0;

                                    var selected = '';
                                    if (response.filter.id == filter.id)
                                        selected = \"selected\";
                                    \$(\"#saved-filter\").append(\"<option value='\" + filter.id + \"' selected='\" + selected + \"''>\" + filter.name + \"</option>\")
                                })

                                \$(\"#saved-filter\").val(response.filter.id)
                                app.appView.renderResponseAlert(response);
                                self.render();
                                self.backToFilter();
                            },
                            error: function (xhr) {
                                app.appView.hideLoader();
                                if (url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                            }
                        });
                    }
                },
                getSavedFilterRoute: function() {
                    var filterParameters = {};
                    temp = [];
                    _.each(this.tempAppliedFilterOptions, function (filter, key) {
                        if (jQuery.inArray(key, ['customer', 'agent', 'priority', 'type', 'group', 'team', 'tag', 'mailbox', 'source', 'after', 'before', 'repliesLess', 'repliesMore']) !== -1) {
                            var ids = [];
                            _.each(filter['options'], function (item) {
                                ids.push(item.id)
                            });
                            filterParameters[key] = ids.join(',')
                        } else if (jQuery.inArray(key, ['new','unassigned','notreplied','mine','starred','trashed']) !== -1) {
                            filterParameters[key] = 1;
                        } else if (jQuery.inArray(key, ['label', 'status', 'search']) !== -1) {
                            _.each(filter['options'], function (item) {
                                filterParameters[key] = item.id;
                            });
                        } else {
                            custom = key.split(\"z-\")
                            tempKey = custom[1];
                            if (filter.type == 'text' || filter.type == 'number') {
                                _.each(filter['options'], function (item) {
                                    temp.push(tempKey + '_' + item.name)
                                });
                            } else if (filter.type == 'radio') {
                                var ids = [];
                                _.each(filter['options'], function (item) {
                                    ids.push(item.id)
                                });
                                temp.push(tempKey + '_' + ids.join(','))
                            } else if (filter.type == 'checkbox' || filter.type == 'select-multiple') {
                                var ids = [];
                                _.each(filter['options'], function (item) {
                                    ids.push(item.id)
                                });
                                temp.push(tempKey + '_' + ids.join(','))
                            }
                        }
                    })
                    if (temp.length)
                        filterParameters['custom'] = temp.join('|');

                    return app.appView.buildQuery(\$.param(filterParameters));
                },
                removeSavedFilter: function(e) {
                    e.preventDefault()
                    self = this;
                    app.appView.showLoader();
                    \$.ajax({
                        url : \"{{ path('helpdesk_member_saved_filters_xhr') }}/\" + \$(\"#saved-filter\").val(),
                        type : 'DELETE',
                        dataType : 'json',
                        success : function(response) {
                            app.appView.hideLoader();
                            delete userFilters[\$(\"#saved-filter\").val()];

                            \$(\"#saved-filter\").html(\"<option value=''>-- {{ 'Saved Filter'|trans }} --</option>\")
                            _.each(userFilters, function(filter, key) {
                                \$(\"#saved-filter\").append(\"<option value='\" + filter.id + \"'>\" + filter.name + \"</option>\")
                            })

                            \$(\"#saved-filter\").val('')
                            app.appView.renderResponseAlert(response);
                            self.render();
                            self.backToFilter();
                        },
                        error: function (xhr) {
                            app.appView.hideLoader();
                            if (url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                }
            });

            // Ticket Label Item View
            var LabelItemView = Backbone.View.extend({
                tagName: 'li',
                className: 'uv-customize-wrapper',
                template: _.template(\$(\"#custom_label_tmp\").html()),
                events: {
                    'click .delete': 'confirmRemove',
                    'click .label-color.dropdown .fa-caret-down' : 'showUpdateLabelPopup'
                },
                render: function() {
                    this.\$el.html(this.template(this.model.toJSON()));

                    if (ticketCollection.filterParameters.label != '') {
                        if (ticketCollection.filterParameters.label == this.model.id) {
                            this.\$el.find('a').addClass('uv-aside-active');
                        }
                    }

                    return this;
                }
            });

            // Ticket List Item View
            var TicketItem = Backbone.View.extend({
                tagName: \"tr\",
                template: _.template(\$(\"#ticket_list_item_tmp\").html()),
                events: {
                    'click .uv-star': \"updateStar\",
                },
                render: function () {
                    this.model.set({
                        path: pathToTicket.replace('replaceId', this.model.attributes.id)
                    });
                    this.\$el.html(this.template(this.model.toJSON()));

                    if (this.model.attributes.isAgentView != true) {
                        this.\$el.addClass('unread')
                    }

                    if (!this.model.attributes.agent) {
                        this.\$el.addClass('not-assigned')
                    }

                    return this;
                },
                updateStar: function(e) {
                    e.preventDefault();
                    if (Backbone.\$(e.currentTarget).hasClass('uv-star-active')) {
                        Backbone.\$(e.currentTarget).removeClass('uv-star-active');
                    } else {
                        Backbone.\$(e.currentTarget).addClass('uv-star-active');
                    }

                    this.model.save({
                        id: this.model.id
                    }, {
                        patch: true,
                        url: \"{{ path('helpdesk_member_bookmark_ticket_xhr') }}\",
                        success: function (model, response, options) {},
                        error: function (model, xhr, options) {
                            if (url = xhr.getResponseHeader('Location')) {
                                window.location = url;
                            }
                        }
                    });
                }
            });

            // Ticket List View
            var TicketList = Backbone.View.extend({
                el: \$(\".uv-table table\"),
                initialize: function() {
                    this.render();
                },
                events: {
                    'change .mass-action-checkbox' : 'showBulkOptions',
                },
                showBulkOptions: function() {
                    var count = 0;
                    this.\$el.find('.mass-action-checkbox').each(function() {
                        if (\$(this).is(':checked')) {
                            count++;
                        }
                    });

                    if (count == \$('.mass-action-checkbox').length) {
                        \$('.select-all-checkbox').prop('checked', true);
                    } else {
                        \$('.select-all-checkbox').prop('checked', false);
                    }

                    if (count) {
                        \$('.uv-action-bar .filter').parent().hide();
                        \$('.uv-action-bar .mass-action').parent().addClass(\"uv-width-100\").show();
                        \$('.uv-action-bar-col-rt').hide()
                    } else {
                        \$('.uv-action-bar .mass-action').parent().removeClass(\"uv-width-100\").hide();
                        \$('.uv-action-bar .filter').parent().show();
                        \$('.uv-action-bar-col-rt').show();
                    }
                },
                render: function () {
                    this.\$el.find('tbody').html('');
                    if (ticketCollection.length) {
                        \$('.select-all-checkbox').prop( \"disabled\", false );
                        _.each(ticketCollection.models, function (item) {
                            ticketQuickViewCollection.add(new TicketQuickViewModel({id: item.id}))
                            this.renderTicket(item);
                        }, this);
                    } else {
                        \$('.select-all-checkbox').prop( \"disabled\", true );
                        this.\$el.find('tbody').append(\"<tr style='text-align: center;'><td colspan='11'>{% trans %}No Record Found{% endtrans %}</td></tr>\")
                    }

                    filter.filterAssetsVisibilityOnLoad()
                    app.appView.relativeTime()
                },
                renderTicket: function (item) {
                    var ticketItem = new TicketItem({
                        model: item
                    });

                    this.\$el.find('tbody').append(ticketItem.render().el);
                }
            });

            // Ticket Label List View
            var LabelListView = Backbone.View.extend({
                el: \$(\".uv-aside\"),
                template: _.template(\$(\"#predefined_label_tmp\").html()),
                statusTemplate: _.template(\$(\"#ticket_status_list_tmp\").html()),
                addEditLabelTemplate: _.template(\$(\"#add_edit_label_tmp\").html()),
                events: {
                    'click .status-list li a': \"filterByStatus\",
                    'click .add-new-label, .uv-customize': 'addEditLabel',
                    'click #back-to-labels': 'backToLabels',
                    'click .uv-color-block': 'setLabelColor',
                    'click .add-update-btn': 'saveLabel',
                    'click .uv-add-edit-label .uv-btn-remove': 'removeLabel'
                },
                render: function() {
                    var active = \"\";

                    if (ticketCollection.filterParameters.new != '') {
                        active = \"new\";
                    } else if (ticketCollection.filterParameters.unassigned != '') {
                        active = \"unassigned\";
                    } else if (ticketCollection.filterParameters.notreplied != '') {
                        active = \"notreplied\";
                    }

                    if (ticketCollection.filterParameters.mine != '') {
                        active = \"mine\";
                    } else if (ticketCollection.filterParameters.starred != '') {
                        active = \"starred\";
                    } else if (ticketCollection.filterParameters.trashed != '') {
                        active = \"trashed\";
                    } else if (ticketCollection.filterParameters.label != '') {
                        active = \"label\";
                    }

                    var data = {
                        'labelDetails' : labelDetails,
                        'active' : active
                    }
                    this.\$el.find('.predefined-label-list').html(this.template(data));

                    labelCollection.reset();
                    labelCollection.set(labelDetails.custom);
                    this.updateMassLabelList()
                },
                updateMassLabelList: function() {
                    this.\$el.find('.uv-aside-custom').html('');
                    var labelOptionHtml = \"\";
                    if (labelCollection.length) {
                        _.each(labelCollection.models, function (item) {
                            this.renderLabelItem(item);
                            labelOptionHtml = labelOptionHtml + \"<li data-index='\" + item.id + \"'><a href='#'>\" + item.attributes.name + \"</a></li>\";
                        }, this);
                    }
                    labelOptionHtml = labelOptionHtml ? labelOptionHtml : \"<li data-index='0'>{{ 'No Label Created'|trans }}</li>\";
                    \$(\".mass-action ul.label\").html(labelOptionHtml);
                    this.renderStatus();
                },
                renderLabelItem : function (item) {
                    var labelItem = new LabelItemView({
                        model: item
                    });
                    this.\$el.find('.uv-aside-custom').append(labelItem.render().el);
                },
                renderStatus : function() {
                    if (typeof ticketCollection.filterParameters.status == \"undefined\" || ticketCollection.filterParameters.status == null)
                        var active = 0;
                    else
                        var active = ticketCollection.filterParameters.status;

                    this.\$el.find('.uv-aside-active').parent().find('.status-list').remove()
                    this.\$el.find('.uv-aside-active').parent().append(this.statusTemplate({status : statusListDetails, active : active}));
                },
                filterByStatus : function(e) {
                    e.preventDefault()

                    ticketCollection.reset();
                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters.status = Backbone.\$(e.currentTarget).attr('data-id');
                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString, {trigger: true});
                },
                addEditLabel: function(e) {
                    e.preventDefault()
                    currentElement = Backbone.\$(e.currentTarget);
                    if (currentElement.hasClass('add-new-label'))
                        \$('.uv-add-edit-label').html(this.addEditLabelTemplate({id : 0, name : '', colorCode: ''}))
                    else
                        \$('.uv-add-edit-label').html(this.addEditLabelTemplate(labelCollection.get(currentElement.siblings('a').attr('data-id')).toJSON()))

                    \$('.uv-aside-default').hide()
                    \$('.uv-add-edit-label').show()
                },
                backToLabels: function(e) {
                    if (e)
                        e.preventDefault()
                    \$('.uv-aside-default').show()
                    \$('.uv-add-edit-label').hide()
                },
                setLabelColor: function(e) {
                    \$('.uv-color-block').removeClass('uv-color-active');
                    Backbone.\$(e.currentTarget).addClass('uv-color-active');
                },
                saveLabel : function(e) {
                    e.preventDefault()
                    var inputElement = \$('.uv-add-edit-label input');
                    inputElement.removeClass('uv-field-error');
                    \$('.uv-field-message').remove()

                    var labelName = app.appView.stripHTML(inputElement.val());
                    if (labelName == \"\") {
                        inputElement.addClass('uv-field-error');
                        inputElement.parent().after(\"<span class='uv-field-message'>{{ 'This field is mandatory'|trans }}</span>\");
                    } else {
                        var labelId = parseInt(\$('.uv-aside-option').attr('data-id'))

                        model = labelId ? labelCollection.get(labelId) : new LabelModel()
                        model.set({name: labelName, colorCode: \$('.uv-color-block.uv-color-active').attr('data-color')});
                        self = this;
                        var flag = labelCollection.isLabelExist(labelName, labelId);
                        if (flag) {
                            app.appView.showLoader();
                            model.save({}, {
                                success: function (model, response, options) {
                                    app.appView.hideLoader();
                                    if (response.alertClass == \"success\") {
                                        if (!labelId) {
                                            labelCollection.add(model);
                                        }
                                        self.updateMassLabelList()
                                        app.appView.renderResponseAlert(response);
                                    } else {
                                        inputElement.addClass('uv-field-error');
                                        inputElement.parent().after(\"<span class='uv-field-message'>\" + response.alertMessage + \"</span>\");
                                    }

                                    self.backToLabels();
                                },
                                error: function (model, xhr, options) {
                                    if(url = xhr.getResponseHeader('Location'))
                                        window.location = url;
                                    app.appView.hideLoader();
                                    app.appView.renderResponseAlert(warningResponse);
                                }
                            });
                        } else {
                            inputElement.parent().after(\"<span class='uv-field-message'>{{ 'Label with same name already exist.'|trans }}</span>\");
                        }
                    }
                },
                removeLabel: function(e) {
                    e.preventDefault()
                    self = this;
                    app.appView.showLoader();
                    model = labelCollection.get(\$('.uv-aside-option').attr('data-id'))
                    model.destroy({
                        success : function (model, response, options) {
                            app.appView.hideLoader();
                            self.updateMassLabelList()
                            app.appView.renderResponseAlert(response);
                            self.backToLabels();
                        },
                        error: function (model, xhr, options) {
                            if (url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(warningResponse);
                        }
                    });
                }
            });

            // Bulk Action View
            var BulkActionView = Backbone.View.extend({
                el: \$(\".mass-action\"),
                currentEvent: null,
                events: {
                    'click ul li, #mass-restore': 'massAction',
                    'click #mass-delete, #mass-delete-forever': 'confirmRemove',
                    'click #mass-restore': 'confirmRestore'
                },
                massAction: function(e) {
                    e.preventDefault();
                    if (!parseInt(Backbone.\$(e.currentTarget).attr('data-index')))
                        return;

                    var data = {};
                    data['actionType'] = Backbone.\$(e.currentTarget).parents('ul').attr('data-action') ? Backbone.\$(e.currentTarget).parents('ul').attr('data-action') : Backbone.\$(e.currentTarget).attr('data-action');
                    data['targetId'] = Backbone.\$(e.currentTarget).attr('data-index');
                    data['ids'] = this.getCheckedTicketIds();
                    ticketCollection.batchOperation(data);
                    this.hideBulkOptions();
                },
                removeItem: function(e) {
                    var data = {};

                    if (Backbone.\$(this.currentEvent.currentTarget).is(\"#mass-delete\"))
                        data['actionType'] = \"trashed\";
                    else if (Backbone.\$(this.currentEvent.currentTarget).is(\"#mass-delete-forever\"))
                        data['actionType'] = \"delete\";

                    data['ids'] = this.getCheckedTicketIds();
                    ticketCollection.batchOperation(data);
                    this.hideBulkOptions();
                },
                restoreItem: function(e) {
                    var data = {};
                    data['actionType'] = \"restored\";

                    data['ids'] = this.getCheckedTicketIds();
                    ticketCollection.batchOperation(data);
                    this.hideBulkOptions();
                },
                getCheckedTicketIds: function() {
                    var ids = new Array();
                    \$('.mass-action-checkbox').each(function() {
                        if (\$(this).is(':checked')) {
                            ids.push(\$(this).val());
                        }
                    });

                    return ids;
                },
                confirmRemove: function(e) {
                    e.preventDefault();
                    this.currentEvent = e;
                    app.appView.openConfirmModal(this)
                },
                confirmRestore: function(e) {
                    e.preventDefault();
                    app.appView.openConfirmModal(this, 'restoreItem')
                },
                hideBulkOptions : function() {
                    \$('.uv-action-bar .mass-action').parent().removeClass(\"uv-width-100\").hide();
                    \$('.uv-action-bar .filter').parent().show();
                    \$('.uv-action-bar-col-rt').show()
                }
            });

            var PageView = Backbone.View.extend({
                el: '.uv-paper',
                events : {
                    'change .select-all-checkbox' : 'selectAll',
                    'click .uv-quick-view-trigger, .quick-view-navigation .uv-btn-tag': 'navigateQuickView',
                },
                quickViewTemplate: _.template(\$(\"#ticket_quick_view_tmp\").html()),
                navigateQuickView : function(e) {
                    e.preventDefault();
                    //\$(\"#quick-view-modal .uv-loader\").hide()
                    var currentElement = Backbone.\$(e.currentTarget);
                    ticketId = currentElement.attr('data-id');
                    if (ticketId) {
                        if(model = ticketQuickViewCollection.isModelSynced(ticketId)) {
                            this.renderQuickView(model.toJSON())
                        } else {
                            var self = this;
                            if (currentElement.hasClass(\"uv-quick-view-trigger\"))
                                app.appView.showLoader();

                            if (ticketQuickViewCollection.get(ticketId)) {
                                navData = ticketQuickViewCollection.getNextPrev(ticketId);
                                requiredNext = (!navData.next && app.pager.paginationData.next) ? 1 : 0;
                                requiredPrev = (!navData.previous && app.pager.paginationData.previous) ? 1 : 0;
                            } else
                                requiredNext = requiredPrev = 1;

                            if (self.xhrReq)
                                self.xhrReq.abort();

                            \$(\"#quick-view-modal .uv-loader\").show()
                            self.xhrReq = \$.ajax({
                                url : \"{{ path('helpdesk_member_ticket_quick_view_xhr') }}\",
                                type : 'GET',
                                data : {ticketId : ticketId, next: requiredNext, previous: requiredPrev},
                                dataType : 'json',
                                success : function(response) {
                                    self.xhrReq = 0;
                                    if (currentElement.hasClass(\"uv-quick-view-trigger\"))
                                        app.appView.hideLoader();

                                    if (response.next == undefined)
                                        response.next = navData.next
                                    if (response.previous == undefined)
                                        response.previous = navData.previous

                                    response.isSynced = 1
                                    response.path = pathToTicket.replace('replaceId', response.incrementId);

                                    if (ticketQuickViewCollection.get(ticketId))
                                        ticketQuickViewCollection.set(response,{remove: false})
                                    else
                                        ticketQuickViewCollection.add(new TicketQuickViewModel(response))

                                    self.renderQuickView(response)
                                },
                                error: function (xhr) {
                                    self.xhrReq = 0;
                                    if (url = xhr.getResponseHeader('Location'))
                                        window.location = url;
                                    app.appView.hideLoader();
                                }
                            });
                        }
                    }
                },
                renderQuickView: function(response) {
                    \$('#quick-view-modal .uv-pop-up-box').html(this.quickViewTemplate(response));
                    app.appView.openModal('quick-view-modal')
                    \$('#quick-view-modal .message').find('img').removeAttr('crossorigin');

                    \$('#quick-view-modal .message').find('.uv-icon-ellipsis').remove();
                    \$('#quick-view-modal .message').find('.helpdesk_blockquote').eq(0).before(\"<span class='uv-icon-ellipsis uv-ellipsis-mirror'></span>\").hide();
                    app.appView.relativeTime();
                },
                selectAll : function(e) {
                    if(Backbone.\$(e.currentTarget).is(':checked')) {
                        \$('.mass-action-checkbox').prop('checked', true);
                        \$('.uv-action-bar .filter').parent().hide();
                        \$('.uv-action-bar .mass-action').parent().addClass(\"uv-width-100\").show();
                        \$('.uv-action-bar-col-rt').hide()
                    } else {
                        var count = 0;
                        \$('.mass-action-checkbox').each(function() {
                            if(\$(this).is(':checked'))
                                count++;
                        });
                        if (count == \$('.mass-action-checkbox').length) {
                            \$('.mass-action-checkbox').prop('checked', false);
                            \$('.uv-action-bar .filter').parent().show();
                            \$('.uv-action-bar .mass-action').parent().removeClass(\"uv-width-100\").hide();
                            \$('.uv-action-bar-col-rt').show()
                        }
                    }
                },
            });

            // Ticket Router
            Router = Backbone.Router.extend({
                routes: {
                    'page/:number(/sort/:sortField)(/direction/:order)' : 'paginate',

                    'status/:status(/search/:query)(/searchType/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByStatus',

                    'search/:query(/searchType/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByQuery',

                    'agent/:agent(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByAgent',
                    'customer/:customer(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByCustomer',
                    'priority/:priority(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByPriority',
                    'type/:type(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByType',
                    'group/:group(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByGroup',
                    'team/:team(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterBySubGroup',
                    'tag/:tag(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByTags',
                    'mailbox/:mailbox(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByMailbox',
                    'source/:source(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterBySource',
                    'after/:after(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByAfter',
                    'before/:before(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByBefore',
                    'repliesLess/:repliesLess(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByRepliesLesserCount',
                    'repliesMore/:repliesMore(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByRepliesGreaterCount',
                    'custom/:custom(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByCustom',

                    'label/:labelId(/status/:status)(/search/:query)(/searchType/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByLabel',

                    'new(/status/:status)(/search/:query)(/searchType/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterNew',

                    'unassigned(/status/:status)(/search/:query)(/searchType/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterUnassigned',

                    'notreplied(/status/:status)(/search/:query)(/searchType/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterNotReplied',

                    'mine(/status/:status)(/search/:query)(/searchType/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterMine',

                    'starred(/status/:status)(/search/:query)(/searchType/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterstarred',

                    'trashed(/status/:status)(/search/:query)(/searchType/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterTrashed',
                    '': 'initializeList'
                },
                initializeList : function() {
                    \$(\"#saved-filter\").val('');
                    this.resetParams('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
                    this.fetch(null, null, null);
                },
                paginate : function(number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','','','', '');
                    this.fetch(number,sortField,order);
                },
                filterByLabel : function(labelId,searchType,status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams(labelId,'','','','','','',status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterNew : function(status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('',1,'','','','','',status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterUnassigned : function(status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','',1,'','','','',status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterNotReplied: function(status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','',1,'','','',status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);

                },
                filterMine : function(status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','',1,'','',status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterstarred : function(status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','',1,'',status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterTrashed : function(status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','',1,status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,custom);
                    this.fetch(number,sortField,order);
                },
                filterByStatus : function(status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','',status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByQuery : function(query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','',query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByAgent : function(agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','',agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByCustomer : function(customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','',customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByPriority : function(priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','',priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByType : function(type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','',type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByGroup : function(group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','',group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterBySubGroup : function(team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','',team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByTags : function(tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','',tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByMailbox : function(mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','','',mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterBySource: function(source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','',source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByAfter: function(after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','',after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByBefore: function(before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','','',before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByRepliesLesserCount: function(repliesLess, repliesMore, custom, number, sortField, order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','','',repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByRepliesGreaterCount: function(repliesMore, custom, number, sortField, order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','','','','',repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByCustom : function(custom, number, sortField, order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','','','','','',custom);
                    this.fetch(number,sortField,order);
                },
                fetch: function(number, sortField, order) {
                    ticketCollection.state.currentPage = number;
                    filter.sortCollection(sortField, order);
                    ticketCollection.syncData();
                },
                resetParams : function(labelId,newLabel,unassigned,notreplied,mine,starred,trashed,status,query,searchType,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom) {
                    _.each(userFilters, function(filter, index) {
                        if(Backbone.history.getFragment() == filter['route']) {
                            \$(\"#saved-filter\").val(index);
                        }
                    });

                    isPageJustLoaded = false;
                    if (query != null)
                        query = query.replace(/\\+/g,' ');
                    bulkAction.hideBulkOptions();
                    ticketCollection.filterParameters.label = labelId;
                    ticketCollection.filterParameters.new = newLabel;
                    ticketCollection.filterParameters.unassigned = unassigned;
                    ticketCollection.filterParameters.notreplied = notreplied;
                    ticketCollection.filterParameters.mine = mine;
                    ticketCollection.filterParameters.starred = starred;
                    ticketCollection.filterParameters.trashed = trashed;
                    ticketCollection.filterParameters.search = query;
                    ticketCollection.filterParameters.searchType = searchType;
                    \$(\".uv-search-inline\").val(query);
                    ticketCollection.filterParameters.status = status;
                    ticketCollection.filterParameters.agent = agent;
                    ticketCollection.filterParameters.customer = customer;
                    ticketCollection.filterParameters.priority = priority;
                    ticketCollection.filterParameters.type = type;
                    ticketCollection.filterParameters.group = group;
                    ticketCollection.filterParameters.team = team;
                    ticketCollection.filterParameters.tag = tag;
                    ticketCollection.filterParameters.mailbox = mailbox;
                    ticketCollection.filterParameters.source = source;
                    ticketCollection.filterParameters.after = after;
                    ticketCollection.filterParameters.before = before;
                    ticketCollection.filterParameters.repliesLess = repliesLess;
                    ticketCollection.filterParameters.repliesMore = repliesMore;

                    ticketCollection.filterParameters.custom = custom;
                    \$('.custom-fields').find('input[type=\"text\"]').val('');
                    \$('.custom-fields').find('select').val('');
                    \$('.custom-fields').find('input[type=\"radio\"]').prop('checked', false);
                    \$('.custom-fields').find('input[type=\"checkbox\"]').prop('checked', false);

                    if (custom) {
                        custom = custom.replace(/\\+/g,' ');

                        var indexValueSeperator = '_';
                        var columnSeperator = '|';

                        var multiOptions = custom.split(columnSeperator);
                        var multiKeyValue, multiKeyValueValue, ele;

                        _.each(multiOptions, function(valueData, indexData) {
                            if (!valueData)
                                return;

                            multiKeyValue = valueData.split(indexValueSeperator);

                            multiKeyValueValue = multiKeyValue[1].split(',');

                            ele = \$('[data-value=\"' + multiKeyValue[0] + '\"]');

                            if (ele[0].type == 'radio') {
                                \$('[data-value=\"' + multiKeyValue[0] + '\"][value=\"' + multiKeyValue[1] + '\"]').prop('checked', true);

                            } else if (ele[0].type == 'checkbox') {
                                _.each(ele, function(eleElements) {
                                    if (multiKeyValueValue.indexOf(eleElements.value) > -1) {
                                        \$(eleElements).prop('checked', true);
                                    }
                                });

                            } else if (ele[0].type == 'select-multiple') {
                                ele.val(multiKeyValueValue);

                            } else if (ele[0].type == 'text') {
                                ele.val(multiKeyValue[1]);
                            }
                        })

                    }

                    if (trashed) {
                        \$('.property-block').hide();
                        \$('.trashed-block').show();
                    } else {
                        \$('.property-block').show();
                        \$('.trashed-block').hide();
                    }

                    sideFilter.isRecurrsiveCalls = 0;
                    sideFilter.render();
                }
            });

            var router = new Router();
            var pageview = new PageView;
            var bulkAction = new BulkActionView();
            var sideFilterModel = new SideFilterModel(filterContext)
            var sideFilter = new SideFilter();
            var ticketCollection = new TicketCollection();
            var ticketQuickViewCollection = new TicketQuickViewCollection();
            var labelCollection = new LabelCollection();
            var labelListView = new LabelListView()
            var filter = new Filter({collection : ticketCollection});

            Backbone.history.start({
                push_state:true
            });
        });
    </script>
{% endblock %}", "@UVDeskCoreFramework/ticketList.html.twig", "/home/users/sanjeev.papnoi/www/uvdesk-community-v1.1.8/vendor/uvdesk/core-framework/Resources/views/ticketList.html.twig");
    }
}
