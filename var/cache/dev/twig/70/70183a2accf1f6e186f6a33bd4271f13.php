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

/* @UVDeskCoreFramework/theme.html.twig */
class __TwigTemplate_593b90586a7916113bfee9e57186af47 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/theme.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/theme.html.twig"));

        // line 3
        $context["website"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 3, $this->source); })()), "getWebsiteDetails", ["helpdesk"], "method", false, false, false, 3);
        // line 1
        $this->parent = $this->load("@UVDeskCoreFramework//Templates//layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        // line 6
        yield "\t";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Branding"), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
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

        // line 10
        yield "    <style>
        .uv-image-upload-brick {
            margin: 10px 0px;
        }
        .uv-color-field {
            color: #fff;
            width: 100px;
            text-transform: uppercase;
        }
        .uv-header-link-wrapper {
            padding-bottom: 20px;
        }
        .uv-footer-link-wrapper {
            border-top: solid 1px #D3D3D3;
            padding-top: 20px;
        }
        .uv-knowledgebase-layout  {
            border-top: solid 1px #D3D3D3;
            padding-top: 20px;
            margin-top: 20px;
        }
        .uv-knowledgebase-layout input[type='radio'] {
            display: none;
        }
        #links .uv-field-block input:first-child {
            width: 200px;
            margin-bottom: 0;
        }
        #links .remove-link {
            margin-left: 10px;
        }
\t\t.grammarly-fix-broadcast {
\t\t\tmax-width: 518px;
\t\t}
        #uv-reset-colors {
            float: right;
            cursor: pointer;
            position: relative;
            z-index:1 ;
        }
    </style>
\t<div class=\"uv-inner-section\">
\t\t";
        // line 53
        yield "\t\t";
        $context["asideTemplate"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\AsideTemplate";
        // line 54
        yield "\t\t";
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Branding";
        // line 55
        yield "
\t\t";
        // line 56
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 56, $this->source); })()), "getRegisteredComponent", [(isset($context["asideTemplate"]) || array_key_exists("asideTemplate", $context) ? $context["asideTemplate"] : (function () { throw new RuntimeError('Variable "asideTemplate" does not exist.', 56, $this->source); })())], "method", false, false, false, 56), "renderSidebar", [(isset($context["asideSidebarReference"]) || array_key_exists("asideSidebarReference", $context) ? $context["asideSidebarReference"] : (function () { throw new RuntimeError('Variable "asideSidebarReference" does not exist.', 56, $this->source); })())], "method", false, false, false, 56);
        yield "

\t\t<div class=\"uv-view ";
        // line 58
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "cookies", [], "any", false, false, false, 58) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "cookies", [], "any", false, false, false, 58), "get", ["uv-asideView"], "method", false, false, false, 58))) {
            yield "uv-aside-view";
        }
        yield "\">
\t\t\t<h1>";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Branding"), "html", null, true);
        yield "</h1>

\t\t\t<!--Tab View-->
            <div class=\"uv-tab-view uv-tab-view-active\" id=\"knowledgebase\">
                <!--Form-->
\t\t\t\t<form method=\"post\" id=\"helpdeskForm\">
                    <!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
                        ";
        // line 68
        yield "\t\t\t\t\t  \t<label class=\"uv-field-label\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Theme Color"), "html", null, true);
        yield "</label>
\t\t\t\t\t  \t<div class=\"uv-field-block\">
\t\t\t\t\t    \t<input name=\"themeColor\" class=\"uv-field uv-color-field\" type=\"text\" value=\"";
        // line 70
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 70, $this->source); })()), "themeColor", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 70, $this->source); })()), "themeColor", [], "any", false, false, false, 70), "html", null, true)) : ("#7C70F4"));
        yield "\" style=\"color: #FFF;background-color: ";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 70, $this->source); })()), "themeColor", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 70, $this->source); })()), "themeColor", [], "any", false, false, false, 70), "html", null, true)) : ("#7C70F4"));
        yield "\" placeholder=\"#7C70F4\">
\t\t\t\t\t  \t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->
                    <!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t  \t<label class=\"uv-field-label\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        yield "</label>
\t\t\t\t\t  \t<div class=\"uv-field-block\">
\t\t\t\t\t    \t<input name=\"helpdeskName\" class=\"uv-field\" type=\"text\" value=\"";
        // line 78
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 78, $this->source); })()), "name", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 78, $this->source); })()), "name", [], "any", false, false, false, 78), "html", null, true)) : (""));
        yield "\" required=\"required\">
\t\t\t\t\t  \t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

                    <!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\" style=\"margin: 20px 0\">
\t\t\t\t\t  \t<label class=\"uv-field-label\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Set Webhook Url"), "html", null, true);
        yield "</label>
\t\t\t\t\t  \t<div class=\"uv-field-block\">
\t\t\t\t\t    \t<input name=\"webhookUrl\" class=\"uv-field\" type=\"text\" value=\"";
        // line 87
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 87, $this->source); })()), "webhookUrl", [], "any", false, false, false, 87)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 87, $this->source); })()), "webhookUrl", [], "any", false, false, false, 87), "html", null, true)) : (""));
        yield "\" placeholder=\"https://example.com/webhook\" validate=\"url\" />
\t\t\t\t\t  \t</div>
                        <span class=\"uv-field-info\">Webhook URL for event(new Thread or Ticket) notifications.</span>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Session Expiration Time (in minutes)"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\">
                            <input type=\"number\" name=\"website[session_expiry]\" class=\"uv-field\" value=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentSessionExpiry"]) || array_key_exists("currentSessionExpiry", $context) ? $context["currentSessionExpiry"] : (function () { throw new RuntimeError('Variable "currentSessionExpiry" does not exist.', 96, $this->source); })()), "html", null, true);
        yield "\" />
                            <span class=\"uv-field-info\">
                                ";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Set how long a user stays logged in without activity."), "html", null, true);
        yield "
                            </span>
                        </div>
                    </div>
                   
                    <!-- Field -->
                    <div class=\"uv-element-block\" style=\"margin: 20px 0\">
                        <label>
                            <div class=\"uv-checkbox\">
                                <input type=\"hidden\" name=\"displayUserPresenceIndicator\" value=\"0\">
                                <input name=\"displayUserPresenceIndicator\" type=\"checkbox\" value=\"1\" ";
        // line 108
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 108, $this->source); })()), "displayUserPresenceIndicator", [], "any", false, false, false, 108) == true)) ? ("checked") : (""));
        yield ">
                                <span class=\"uv-checkbox-view\"></span>
                            </div>
                            <span class=\"uv-checkbox-label\">Enable Agents/Customers Presence status</span>
                        </label>
                    </div>
\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t<!--CTA-->
\t\t\t\t\t<input class=\"uv-btn knowledgebase-btn\" href=\"#\" value=\"";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save Changes"), "html", null, true);
        yield "\" type=\"submit\">
\t\t\t\t\t<!--//CTA-->
                </form>
\t\t\t</div>
\t\t\t<!--//Tab View-->
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 126
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

        // line 127
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.0/css/bootstrap-colorpicker.min.css\">
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.0/js/bootstrap-colorpicker.min.js\"></script>

    <script type=\"text/javascript\">
        (() => {
            \$('.uv-color-field').colorpicker({format: \"hex\"}).on('changeColor', function(ev) {
                \$(this).css('background', \$(this).val())
                textColor = app.appView.getTextColorBasedBackground(\$(this).val());
                \$(this).css('color', textColor)
            });
        })();
\t</script>
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
        return "@UVDeskCoreFramework/theme.html.twig";
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
        return array (  297 => 127,  284 => 126,  265 => 117,  253 => 108,  240 => 98,  235 => 96,  230 => 94,  220 => 87,  215 => 85,  205 => 78,  200 => 76,  189 => 70,  183 => 68,  172 => 59,  166 => 58,  161 => 56,  158 => 55,  155 => 54,  152 => 53,  108 => 10,  95 => 9,  81 => 6,  68 => 5,  57 => 1,  55 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% set website = user_service.getWebsiteDetails('helpdesk') %}

{% block title %}
\t{{ 'Branding'|trans }}
{% endblock %}

{% block pageContent %}
    <style>
        .uv-image-upload-brick {
            margin: 10px 0px;
        }
        .uv-color-field {
            color: #fff;
            width: 100px;
            text-transform: uppercase;
        }
        .uv-header-link-wrapper {
            padding-bottom: 20px;
        }
        .uv-footer-link-wrapper {
            border-top: solid 1px #D3D3D3;
            padding-top: 20px;
        }
        .uv-knowledgebase-layout  {
            border-top: solid 1px #D3D3D3;
            padding-top: 20px;
            margin-top: 20px;
        }
        .uv-knowledgebase-layout input[type='radio'] {
            display: none;
        }
        #links .uv-field-block input:first-child {
            width: 200px;
            margin-bottom: 0;
        }
        #links .remove-link {
            margin-left: 10px;
        }
\t\t.grammarly-fix-broadcast {
\t\t\tmax-width: 518px;
\t\t}
        #uv-reset-colors {
            float: right;
            cursor: pointer;
            position: relative;
            z-index:1 ;
        }
    </style>
\t<div class=\"uv-inner-section\">
\t\t{# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Branding' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}

\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t<h1>{{ 'Branding'|trans }}</h1>

\t\t\t<!--Tab View-->
            <div class=\"uv-tab-view uv-tab-view-active\" id=\"knowledgebase\">
                <!--Form-->
\t\t\t\t<form method=\"post\" id=\"helpdeskForm\">
                    <!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
                        {##564DA8#}
\t\t\t\t\t  \t<label class=\"uv-field-label\">{{ 'Theme Color'|trans }}</label>
\t\t\t\t\t  \t<div class=\"uv-field-block\">
\t\t\t\t\t    \t<input name=\"themeColor\" class=\"uv-field uv-color-field\" type=\"text\" value=\"{{ website.themeColor ? website.themeColor : '#7C70F4' }}\" style=\"color: #FFF;background-color: {{ website.themeColor ? website.themeColor : '#7C70F4' }}\" placeholder=\"#7C70F4\">
\t\t\t\t\t  \t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->
                    <!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t  \t<label class=\"uv-field-label\">{{ 'Name'|trans }}</label>
\t\t\t\t\t  \t<div class=\"uv-field-block\">
\t\t\t\t\t    \t<input name=\"helpdeskName\" class=\"uv-field\" type=\"text\" value=\"{{ website.name ? website.name : ''}}\" required=\"required\">
\t\t\t\t\t  \t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

                    <!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\" style=\"margin: 20px 0\">
\t\t\t\t\t  \t<label class=\"uv-field-label\">{{ 'Set Webhook Url'|trans }}</label>
\t\t\t\t\t  \t<div class=\"uv-field-block\">
\t\t\t\t\t    \t<input name=\"webhookUrl\" class=\"uv-field\" type=\"text\" value=\"{{ website.webhookUrl ? website.webhookUrl : ''}}\" placeholder=\"https://example.com/webhook\" validate=\"url\" />
\t\t\t\t\t  \t</div>
                        <span class=\"uv-field-info\">Webhook URL for event(new Thread or Ticket) notifications.</span>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Session Expiration Time (in minutes)'|trans }}</label>
                        <div class=\"uv-field-block\">
                            <input type=\"number\" name=\"website[session_expiry]\" class=\"uv-field\" value=\"{{ currentSessionExpiry }}\" />
                            <span class=\"uv-field-info\">
                                {{ 'Set how long a user stays logged in without activity.'|trans }}
                            </span>
                        </div>
                    </div>
                   
                    <!-- Field -->
                    <div class=\"uv-element-block\" style=\"margin: 20px 0\">
                        <label>
                            <div class=\"uv-checkbox\">
                                <input type=\"hidden\" name=\"displayUserPresenceIndicator\" value=\"0\">
                                <input name=\"displayUserPresenceIndicator\" type=\"checkbox\" value=\"1\" {{ website.displayUserPresenceIndicator == true ? 'checked' : '' }}>
                                <span class=\"uv-checkbox-view\"></span>
                            </div>
                            <span class=\"uv-checkbox-label\">Enable Agents/Customers Presence status</span>
                        </label>
                    </div>
\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t<!--CTA-->
\t\t\t\t\t<input class=\"uv-btn knowledgebase-btn\" href=\"#\" value=\"{{ 'Save Changes'|trans }}\" type=\"submit\">
\t\t\t\t\t<!--//CTA-->
                </form>
\t\t\t</div>
\t\t\t<!--//Tab View-->
\t\t</div>
\t</div>
{% endblock %}

{% block footer %}
\t{{ parent() }}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.0/css/bootstrap-colorpicker.min.css\">
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.0/js/bootstrap-colorpicker.min.js\"></script>

    <script type=\"text/javascript\">
        (() => {
            \$('.uv-color-field').colorpicker({format: \"hex\"}).on('changeColor', function(ev) {
                \$(this).css('background', \$(this).val())
                textColor = app.appView.getTextColorBasedBackground(\$(this).val());
                \$(this).css('color', textColor)
            });
        })();
\t</script>
{% endblock %}", "@UVDeskCoreFramework/theme.html.twig", "/home/users/sanjeev.papnoi/www/uvdesk-community-v1.1.8/vendor/uvdesk/core-framework/Resources/views/theme.html.twig");
    }
}
