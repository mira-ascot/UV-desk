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

/* @UVDeskSupportCenter/Knowledgebase/ticket.html.twig */
class __TwigTemplate_1e558b1cd88f6b3ec7cff879a5fb4bd5 extends Template
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
            'ogtitle' => [$this, 'block_ogtitle'],
            'twtitle' => [$this, 'block_twtitle'],
            'metaDescription' => [$this, 'block_metaDescription'],
            'metaKeywords' => [$this, 'block_metaKeywords'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@UVDeskSupportCenter/Templates/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/ticket.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/ticket.html.twig"));

        // line 8
        $context["recaptchaDetail"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recaptcha_service"]) || array_key_exists("recaptcha_service", $context) ? $context["recaptcha_service"] : (function () { throw new RuntimeError('Variable "recaptcha_service" does not exist.', 8, $this->source); })()), "getRecaptchaDetails", [], "method", false, false, false, 8);
        // line 1
        $this->parent = $this->load("@UVDeskSupportCenter/Templates/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create Ticket", [], "messages");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ogtitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create Ticket", [], "messages");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_twtitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twtitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twtitle"));

        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create Ticket", [], "messages");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_metaDescription(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescription"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescription"));

        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("create.ticket.metaDescription", [], "messages");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_metaKeywords(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaKeywords"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaKeywords"));

        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("create.ticket.metaKeywords", [], "messages");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "\t<style>
\t\t.uv-field{
\t\t\tpadding: 5px 10px;
\t\t}
\t\t.grammarly-fix-message-container {
\t\t\toverflow: visible !important;
\t\t}
\t\t.grammarly-fix-message {
\t\t\tmax-width: 158%;
\t\t}
\t\t.uv-field-success-icon {
\t\t\tdisplay: none !important;
\t\t}
\t\t.mce-path {
      \t\tdisplay: none !important;
\t\t}
\t\t
\t\t.uv-element-block label.uv-field-label.required::after {
\t\t\tcontent: \"*\";
\t\t\tcolor: #FC6868;
\t\t\tfont-weight: 700;
\t\t\tdisplay: inline-block;
\t\t}
\t\t.uv-paper-article.uv-paper-form {
\t\t\twidth: fit-content;
\t\t\tmargin: 0 auto;
\t\t}

\t\t.uv-paper-section{
\t\t\twidth: 100% !important;
\t\t\tpadding-right: 0px !important;
\t\t}
\t</style>

\t";
        // line 45
        $context["isTicketViewPage"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 45), "id", [], "any", true, true, false, 45)) ? (true) : (false));
        // line 46
        yield "\t
\t<div class=\"uv-paper-article uv-paper-form\">
\t\t<div class=\"uv-paper-section\">
\t\t\t<section>
\t\t\t\t<h1>";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Ticket Request"), "html", null, true);
        yield "</h1>

\t\t\t\t<div class=\"uv-form\">
\t\t\t\t\t<form action=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_create_ticket");
        yield "\" method=\"post\" id=\"create-ticket-form\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t";
        // line 54
        if ((($tmp =  !(isset($context["isTicketViewPage"]) || array_key_exists("isTicketViewPage", $context) ? $context["isTicketViewPage"] : (function () { throw new RuntimeError('Variable "isTicketViewPage" does not exist.', 54, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            yield "\t\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label required\">";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
            yield "</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t<input name=\"name\" class=\"uv-field create-ticket\" type=\"text\" value=\"";
            // line 59
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "name", [], "any", true, true, false, 59)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 59, $this->source); })()), "name", [], "any", false, false, false, 59), "html", null, true)) : (""));
            yield "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"uv-field-info\">";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enter your name"), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label required\">";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
            yield "</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t<input name=\"from\" class=\"uv-field create-ticket\" type=\"text\" value=\"";
            // line 69
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "from", [], "any", true, true, false, 69)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 69, $this->source); })()), "from", [], "any", false, false, false, 69), "html", null, true)) : (""));
            yield "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"uv-field-info\">";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enter your email"), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- //Field -->
\t\t\t\t\t\t";
        }
        // line 75
        yield "\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label required\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t<select name=\"type\" class=\"uv-select create-ticket\" id=\"type\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select type"), "html", null, true);
        yield "</option>

\t\t\t\t\t\t\t\t\t";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 82, $this->source); })()), "getTypes", [], "method", false, false, false, 82));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 83
            yield "\t\t\t\t\t\t\t\t\t\t<option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 83), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "type", [], "any", true, true, false, 83) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 83, $this->source); })()), "type", [], "any", false, false, false, 83) == CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 83)))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 83), "html", null, true);
            yield "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose ticket type"), "html", null, true);
        yield "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label required\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t<input name=\"subject\" class=\"uv-field create-ticket\" type=\"text\" value=\"";
        // line 95
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "subject", [], "any", true, true, false, 95)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 95, $this->source); })()), "subject", [], "any", false, false, false, 95), "html", null, true)) : (""));
        yield "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket subject"), "html", null, true);
        yield "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label required\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Message"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block grammarly-fix-message-container\">
\t\t\t\t\t\t\t\t<textarea name=\"reply\" id=\"create-reply\" class=\"uv-field create-ticket grammarly-fix-message\" type=\"text\">";
        // line 105
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "reply", [], "any", true, true, false, 105)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 105, $this->source); })()), "reply", [], "any", false, false, false, 105), "html", null, true)) : (""));
        yield "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket query message"), "html", null, true);
        yield "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block attachment-block uv-no-error-success-icon\" id=\"uv-attachment-option\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<span class=\"uv-file-label\">";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Attachment"), "html", null, true);
        yield "</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->
\t\t\t\t\t\t";
        // line 118
        if (((isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 118, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 118, $this->source); })()), "isActive", [], "any", false, false, false, 118) == true))) {
            // line 119
            yield "\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 120, $this->source); })()), "siteKey", [], "any", false, false, false, 120), "html", null, true);
            yield "\"></div>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
                        ";
        } else {
            // line 123
            yield "                            <!-- Recaptcha will not support -->
                        ";
        }
        // line 125
        yield "
\t\t\t\t\t\t";
        // line 127
        yield "\t\t\t\t\t\t";
        $context["CustomerCustomFields"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 127, $this->source); })()), "getCustomerCreateTicketCustomFieldSnippet", [], "method", false, false, false, 127);
        // line 128
        yield "\t\t\t\t\t\t";
        $context["removeMe"] = [];
        // line 129
        yield "\t\t\t\t\t\t";
        if ((($tmp = (isset($context["CustomerCustomFields"]) || array_key_exists("CustomerCustomFields", $context) ? $context["CustomerCustomFields"] : (function () { throw new RuntimeError('Variable "CustomerCustomFields" does not exist.', 129, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 130
            yield "\t\t\t\t\t\t\t<div class=\"custom-fields clearfix\">
\t\t\t\t\t\t\t\t";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["CustomerCustomFields"]) || array_key_exists("CustomerCustomFields", $context) ? $context["CustomerCustomFields"] : (function () { throw new RuntimeError('Variable "CustomerCustomFields" does not exist.', 131, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["customField"]) {
                // line 132
                yield "\t\t\t\t\t\t\t\t\t<div class=\"uv-element-block input-group ";
                yield (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "customFieldsDependency", [], "any", false, false, false, 132))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("dependent") : (""));
                yield " ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "customFieldsDependency", [], "any", false, false, false, 132));
                foreach ($context['_seq'] as $context["_key"] => $context["customFieldCustomFieldsDependency"]) {
                    yield " dependency";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customFieldCustomFieldsDependency"], "id", [], "any", false, false, false, 132), "html", null, true);
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['customFieldCustomFieldsDependency'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                yield "\" style=\"position: relative; ";
                yield (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "customFieldsDependency", [], "any", false, false, false, 132))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("display: none;") : (""));
                yield "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"uv-field-label\" for=\"for";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 133) . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 133)), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 133), "html", null, true);
                yield "</label>
\t\t\t\t\t\t\t\t\t\t";
                // line 134
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "fieldType", [], "any", false, false, false, 134) == "text")) {
                    // line 135
                    yield "\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"";
                    // line 136
                    yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, true, false, 136), "fieldtype", [], "array", true, true, false, 136)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 136), "fieldtype", [], "array", false, false, false, 136), "html", null, true)) : ("text"));
                    yield "\" name=\"customFields[";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 136), "html", null, true);
                    yield "]\" class=\"uv-field create-ticket\" value=\"\" ";
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("required") : (""));
                    yield " id=\"for";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 136) . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 136)), "html", null, true);
                    yield "\" placeholder=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "placeholder", [], "any", false, false, false, 136), "html", null, true);
                    yield "\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t";
                } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,                 // line 139
$context["customField"], "fieldType", [], "any", false, false, false, 139), ["date", "time", "datetime"])) {
                    // line 140
                    yield "\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"uv-field form-control create-ticket uv-date-picker ";
                    // line 141
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "fieldType", [], "any", false, false, false, 141) == "time")) {
                        yield "time";
                    } else {
                        yield "calendar";
                    }
                    yield " uv-header-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "fieldType", [], "any", false, false, false, 141), "html", null, true);
                    yield "\" type=\"text\" name=\"customFields[";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 141), "html", null, true);
                    yield "]\" ";
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("required") : (""));
                    yield " id=\"for";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 141) . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 141)), "html", null, true);
                    yield "\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 143
$context["customField"], "fieldType", [], "any", false, false, false, 143) == "textarea")) {
                    // line 144
                    yield "\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"customFields[";
                    // line 145
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 145), "html", null, true);
                    yield "]\" class=\"uv-field create-ticket\" ";
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 145)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("required") : (""));
                    yield " id=\"for";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 145) . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 145)), "html", null, true);
                    yield "\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t";
                } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,                 // line 148
$context["customField"], "fieldType", [], "any", false, false, false, 148), ["file"])) {
                    // line 149
                    yield "\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"customFields[";
                    // line 150
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 150), "html", null, true);
                    yield "]\" class=\"uv-field create-ticket\" ";
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("required") : (""));
                    yield " id=\"for";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 150) . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 150)), "html", null, true);
                    yield "\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t";
                } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,                 // line 153
$context["customField"], "fieldType", [], "any", false, false, false, 153), ["select"])) {
                    // line 154
                    yield "\t\t\t\t\t\t\t\t\t\t\t";
                    if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 154))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 155
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"customFields[";
                        // line 156
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 156), "html", null, true);
                        yield "]\" class=\"uv-select create-ticket\" id=\"for";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 156) . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 156)), "html", null, true);
                        yield "\" ";
                        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 156)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("required") : (""));
                        yield ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                        // line 157
                        yield "Select option";
                        yield "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 158
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 158));
                        foreach ($context['_seq'] as $context["_key"] => $context["customFieldValues"]) {
                            // line 159
                            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 159), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 159), "html", null, true);
                            yield "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['customFieldValues'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 161
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 164
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t<!--Hide this beacause choices aren't available-->
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 165
                        $context["removeMe"] = Twig\Extension\CoreExtension::merge((isset($context["removeMe"]) || array_key_exists("removeMe", $context) ? $context["removeMe"] : (function () { throw new RuntimeError('Variable "removeMe" does not exist.', 165, $this->source); })()), [(("for" . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 165)) . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 165))]);
                        // line 166
                        yield "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 167
                    yield "
\t\t\t\t\t\t\t\t\t\t";
                } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,                 // line 168
$context["customField"], "fieldType", [], "any", false, false, false, 168), ["checkbox"])) {
                    // line 169
                    yield "\t\t\t\t\t\t\t\t\t\t\t";
                    if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 169))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 170
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 170));
                        foreach ($context['_seq'] as $context["_key"] => $context["customFieldValues"]) {
                            // line 171
                            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-split-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"customFields[";
                            // line 174
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 174), "html", null, true);
                            yield "][]\" value=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 174), "html", null, true);
                            yield "\" id=\"for";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 174) . CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 174)), "html", null, true);
                            yield "\" class=\"create-ticket\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-radio-label\" for=\"for";
                            // line 177
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 177) . CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 177)), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 177), "html", null, true);
                            yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['customFieldValues'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 181
                        yield "\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 182
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t<!--Hide this beacause choices aren't available-->
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 183
                        $context["removeMe"] = Twig\Extension\CoreExtension::merge((isset($context["removeMe"]) || array_key_exists("removeMe", $context) ? $context["removeMe"] : (function () { throw new RuntimeError('Variable "removeMe" does not exist.', 183, $this->source); })()), [(("for" . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 183)) . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 183))]);
                        // line 184
                        yield "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 185
                    yield "
\t\t\t\t\t\t\t\t\t\t";
                } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,                 // line 186
$context["customField"], "fieldType", [], "any", false, false, false, 186), ["radio"])) {
                    // line 187
                    yield "\t\t\t\t\t\t\t\t\t\t\t";
                    if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 187))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 188
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 188));
                        foreach ($context['_seq'] as $context["_key"] => $context["customFieldValues"]) {
                            // line 189
                            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-split-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"customFields[";
                            // line 192
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 192), "html", null, true);
                            yield "]\" value=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 192), "html", null, true);
                            yield "\" id=\"for";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 192) . CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 192)), "html", null, true);
                            yield "\" class=\"create-ticket\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-radio-view\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-radio-label\" for=\"for";
                            // line 195
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 195) . CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 195)), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 195), "html", null, true);
                            yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['customFieldValues'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 199
                        yield "\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 200
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t<!--Hide this beacause choices aren't available-->
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 201
                        $context["removeMe"] = Twig\Extension\CoreExtension::merge((isset($context["removeMe"]) || array_key_exists("removeMe", $context) ? $context["removeMe"] : (function () { throw new RuntimeError('Variable "removeMe" does not exist.', 201, $this->source); })()), [(("for" . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 201)) . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 201))]);
                        // line 202
                        yield "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 203
                    yield "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 205
                yield "\t\t\t\t\t\t\t\t\t\t";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["formErrors"] ?? null), (("customFields[" . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 205)) . "]"), [], "array", true, true, false, 205)) {
                    // line 206
                    yield "\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formErrors"]) || array_key_exists("formErrors", $context) ? $context["formErrors"] : (function () { throw new RuntimeError('Variable "formErrors" does not exist.', 206, $this->source); })()), (("customFields[" . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 206)) . "]"), [], "array", false, false, false, 206), "html", null, true);
                    yield "</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 208
                yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['customField'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 210
            yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 212
        yield "
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<button type=\"submit\" id=\"create-ticket-btn\" class=\"uv-btn\">";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Ticket"), "html", null, true);
        yield "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t</div>

\t";
        // line 222
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 222, $this->source); })()), "isFileExists", ["apps/uvdesk/form-component"], "method", false, false, false, 222)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 223
            yield "\t\t";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@_uvdesk_extension_uvdesk_form_component/CustomFields/customFieldValidation.html.twig");
            yield " 
\t";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 224
(isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 224, $this->source); })()), "isFileExists", ["apps/uvdesk/custom-fields"], "method", false, false, false, 224)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 225
            yield "\t\t";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@_uvdesk_extension_uvdesk_custom_fields/CustomFields/customFieldValidation.html.twig");
            yield " 
\t";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 229
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

        // line 230
        yield "\t";
        $context["isTicketViewPage"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 230), "id", [], "any", true, true, false, 230)) ? (true) : (false));
        // line 231
        yield "\t
\t";
        // line 232
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

\t";
        // line 234
        if (((isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 234, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 234, $this->source); })()), "isActive", [], "any", false, false, false, 234) == true))) {
            // line 235
            yield "        <script src='https://www.google.com/recaptcha/api.js'></script>
    ";
        }
        // line 237
        yield "
    ";
        // line 238
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@UVDeskSupportCenter/Templates/tinyMCE.html.twig");
        yield "
\t";
        // line 239
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@UVDeskCoreFramework/Templates/attachment.html.twig");
        yield "

\t<script type=\"text/javascript\">
\t\t";
        // line 242
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 242, $this->source); })()), "isFileExists", ["apps/uvdesk/form-component"], "method", false, false, false, 242) == false)) {
            // line 243
            yield "\t\t\tcustomFieldValidation = {};
\t\t";
        }
        // line 245
        yield "
\t\t\$(function () {
\t\t\tsfTinyMce.init({
\t\t\t\theight: '155px',
\t\t\t\tselector : '#create-reply',
\t\t\t\timages_upload_url: \"\",
\t\t\t\tsetup: function(editor) {
\t\t\t\t},
\t\t\t\tplugins: [
\t\t\t\t],
\t\t\t\ttoolbar: '| undo redo | bold italic forecolor ',
\t\t\t});

\t\t\t";
        // line 258
        if (array_key_exists("removeMe", $context)) {
            // line 259
            yield "\t\t\t\t\$.each(";
            yield json_encode((isset($context["removeMe"]) || array_key_exists("removeMe", $context) ? $context["removeMe"] : (function () { throw new RuntimeError('Variable "removeMe" does not exist.', 259, $this->source); })()));
            yield ", function(key, value){
\t\t\t\t\t\$('label[for=\"' + value + '\"]').parent().hide();
\t\t\t\t});
\t\t\t";
        }
        // line 263
        yield "
\t\t\t\$('.uv-header-date').datetimepicker({
            \tformat: 'YYYY-MM-DD',
        \t});

        \t\$('.uv-header-time').datetimepicker({
            \tformat: 'LT',
        \t});

        \t\$('.uv-header-datetime').datetimepicker({
            \tformat: 'YYYY-MM-DD H:m:s'
        \t});

\t\t\tvar CreateTicketModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\",
\t\t\t\tdefaults : {
\t\t\t\t\tpath : \"\",
\t\t\t\t},
\t\t\t\tvalidation: _.extend(customFieldValidation, {
\t\t\t\t\t";
        // line 282
        if ((($tmp =  !(isset($context["isTicketViewPage"]) || array_key_exists("isTicketViewPage", $context) ? $context["isTicketViewPage"] : (function () { throw new RuntimeError('Variable "isTicketViewPage" does not exist.', 282, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 283
            yield "\t\t\t\t\t\t'name' : {
\t\t\t\t\t\t\trequired : true,
\t\t\t\t\t\t\tmsg : '";
            // line 285
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
            yield "'
\t\t\t\t\t\t},
\t\t\t\t\t\t'from' :[{
\t\t\t\t\t\t\trequired : true,
\t\t\t\t\t\t\tmsg : '";
            // line 289
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
            yield "'
\t\t\t\t\t\t}, {
\t\t\t\t\t\t\tpattern : 'email',
\t\t\t\t\t\t\tmsg : '";
            // line 292
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email address is invalid"), "html", null, true);
            yield "'
\t\t\t\t\t\t}],
\t\t\t\t\t";
        }
        // line 295
        yield "\t\t\t\t\t'type' : {
\t\t\t\t\t\trequired : true,
\t\t\t\t\t\tmsg : '";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
\t\t\t\t\t},
\t\t\t\t\t'subject' : {
\t\t\t\t\t\trequired : true,
\t\t\t\t\t\tmsg : '";
        // line 301
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
\t\t\t\t\t},
\t\t\t\t\t'reply' : {
\t\t\t\t\t\tfn: function(value) {
\t\t\t\t\t\t\tvar content = tinyMCE.activeEditor.getContent();
\t\t\t\t\t\t\tcontent = content.replace(/&nbsp;/g, '').replace(/<[^>]*>/g, '');

\t\t\t\t\t\t\tif (content.trim() == '') {
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t}

                            if (! tinyMCE.get(\"uv-edit-create-thread\"))
                                return false;
\t\t\t\t\t\t\t\t
                            var html = tinyMCE.get(\"uv-edit-create-thread\").getContent();
                            if (app.appView.stripHTML(html) != '') {
                                return false;
                            }

                            return true;
                        },
\t\t\t\t\t\tmsg : '";
        // line 324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
\t\t\t\t\t},
\t\t\t\t\t";
        // line 326
        if (((isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 326, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 326, $this->source); })()), "isActive", [], "any", false, false, false, 326) == true))) {
            // line 327
            yield "                        'g-recaptcha-response' : {
                            fn: function(value) {
                                if (grecaptcha.getResponse().length > 0)
                                    return false;
                                else
                                    return true;
                            },
                            msg : '";
            // line 334
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please select CAPTCHA"), "html", null, true);
            yield "'
                        }
\t\t\t\t    ";
        }
        // line 337
        yield "\t\t\t\t}),
\t\t\t\turlRoot : \"";
        // line 338
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_create_ticket");
        yield "\"
\t\t\t});
\t\t\tvar CreateTicketForm = Backbone.View.extend({
\t\t\t\tinitialize : function() {
\t\t\t\t\tBackbone.Validation.bind(this);
\t\t\t\t\tvar jsonContext = JSON.parse('";
        // line 343
        yield ((array_key_exists("errors", $context)) ? ((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 343, $this->source); })())) : ("{}"));
        yield "');
\t\t\t\t\tfor (var field in jsonContext) {
\t\t\t\t\t\tBackbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tevents : {
\t\t\t\t\t'click #create-ticket-btn' : \"saveTicket\",
\t\t\t\t\t'change #type' : \"updateCustomFields\",
\t\t\t\t\t'blur input:not(input[type=file]), textarea, select, checkbox': 'formChanged',
\t\t\t\t\t'change input[type=file]': 'formChanged',
\t\t\t\t},
\t\t\t\tformChanged: function(e) {
\t\t\t\t\tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t\t\tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t\t},
\t\t\t\tsaveTicket : function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\tvar currentElement = Backbone.\$(e.currentTarget);
\t\t\t\t\tvar data = currentElement.closest('form').serializeObject();
\t\t\t\t\tthis.model.set(data);
\t\t\t\t\tif (this.model.isValid(true)) {
\t\t\t\t\t\t\$('#create-ticket-form').submit();
\t\t\t\t\t\t\$('form').find('#create-ticket-btn').attr('disabled', 'disabled');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tupdateCustomFields : function (e) {
\t\t\t\t\tvar dependentFields = e.currentTarget.value;
\t\t\t\t\tthis.\$('.dependent').hide();
\t\t\t\t\tthis.\$('.dependency' + dependentFields).show();
\t\t\t\t}
\t\t\t});
\t\t\tvar createticketForm = new CreateTicketForm({
\t\t\t\tel : \$(\"#create-ticket-form\"),
\t\t\t\tmodel : new CreateTicketModel()
\t\t\t});
\t\t});
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
        return "@UVDeskSupportCenter/Knowledgebase/ticket.html.twig";
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
        return array (  918 => 343,  910 => 338,  907 => 337,  901 => 334,  892 => 327,  890 => 326,  885 => 324,  859 => 301,  852 => 297,  848 => 295,  842 => 292,  836 => 289,  829 => 285,  825 => 283,  823 => 282,  802 => 263,  794 => 259,  792 => 258,  777 => 245,  773 => 243,  771 => 242,  765 => 239,  761 => 238,  758 => 237,  754 => 235,  752 => 234,  747 => 232,  744 => 231,  741 => 230,  728 => 229,  713 => 225,  711 => 224,  706 => 223,  704 => 222,  693 => 214,  689 => 212,  685 => 210,  678 => 208,  672 => 206,  669 => 205,  665 => 203,  662 => 202,  660 => 201,  657 => 200,  654 => 199,  642 => 195,  632 => 192,  627 => 189,  622 => 188,  619 => 187,  617 => 186,  614 => 185,  611 => 184,  609 => 183,  606 => 182,  603 => 181,  591 => 177,  581 => 174,  576 => 171,  571 => 170,  568 => 169,  566 => 168,  563 => 167,  560 => 166,  558 => 165,  555 => 164,  550 => 161,  539 => 159,  535 => 158,  531 => 157,  523 => 156,  520 => 155,  517 => 154,  515 => 153,  505 => 150,  502 => 149,  500 => 148,  490 => 145,  487 => 144,  485 => 143,  468 => 141,  465 => 140,  463 => 139,  449 => 136,  446 => 135,  444 => 134,  438 => 133,  421 => 132,  417 => 131,  414 => 130,  411 => 129,  408 => 128,  405 => 127,  402 => 125,  398 => 123,  392 => 120,  389 => 119,  387 => 118,  380 => 114,  370 => 107,  365 => 105,  360 => 103,  351 => 97,  346 => 95,  341 => 93,  332 => 87,  328 => 85,  315 => 83,  311 => 82,  306 => 80,  300 => 77,  296 => 75,  289 => 71,  284 => 69,  279 => 67,  270 => 61,  265 => 59,  260 => 57,  256 => 55,  254 => 54,  250 => 53,  244 => 50,  238 => 46,  236 => 45,  200 => 11,  187 => 10,  164 => 6,  141 => 5,  118 => 4,  95 => 3,  72 => 2,  61 => 1,  59 => 8,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskSupportCenter/Templates/layout.html.twig\" %}
{% block title %}{% trans %}Create Ticket{% endtrans %}{% endblock %}
{% block ogtitle %}{% trans %}Create Ticket{% endtrans %}{% endblock %}
{% block twtitle %}{% trans %}Create Ticket{% endtrans %}{% endblock %}
{% block metaDescription %}{% trans %}create.ticket.metaDescription{% endtrans %}{% endblock %}
{% block metaKeywords %}{% trans %}create.ticket.metaKeywords{% endtrans %}{% endblock %}

{% set recaptchaDetail = recaptcha_service.getRecaptchaDetails() %}

{% block body %}
\t<style>
\t\t.uv-field{
\t\t\tpadding: 5px 10px;
\t\t}
\t\t.grammarly-fix-message-container {
\t\t\toverflow: visible !important;
\t\t}
\t\t.grammarly-fix-message {
\t\t\tmax-width: 158%;
\t\t}
\t\t.uv-field-success-icon {
\t\t\tdisplay: none !important;
\t\t}
\t\t.mce-path {
      \t\tdisplay: none !important;
\t\t}
\t\t
\t\t.uv-element-block label.uv-field-label.required::after {
\t\t\tcontent: \"*\";
\t\t\tcolor: #FC6868;
\t\t\tfont-weight: 700;
\t\t\tdisplay: inline-block;
\t\t}
\t\t.uv-paper-article.uv-paper-form {
\t\t\twidth: fit-content;
\t\t\tmargin: 0 auto;
\t\t}

\t\t.uv-paper-section{
\t\t\twidth: 100% !important;
\t\t\tpadding-right: 0px !important;
\t\t}
\t</style>

\t{% set isTicketViewPage = (app.user.id is defined ? true : false) %}
\t
\t<div class=\"uv-paper-article uv-paper-form\">
\t\t<div class=\"uv-paper-section\">
\t\t\t<section>
\t\t\t\t<h1>{{ 'Create Ticket Request'|trans }}</h1>

\t\t\t\t<div class=\"uv-form\">
\t\t\t\t\t<form action=\"{{ path('helpdesk_customer_create_ticket') }}\" method=\"post\" id=\"create-ticket-form\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t{% if not isTicketViewPage %}
\t\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label required\">{{ 'Name'|trans }}</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t<input name=\"name\" class=\"uv-field create-ticket\" type=\"text\" value=\"{{ post.name is defined ? post.name : '' }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"uv-field-info\">{{ 'Enter your name'|trans }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label required\">{{ 'Email'|trans }}</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t<input name=\"from\" class=\"uv-field create-ticket\" type=\"text\" value=\"{{ post.from is defined ? post.from : '' }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"uv-field-info\">{{ 'Enter your email'|trans }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- //Field -->
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label required\">{{ 'Type'|trans }}</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t<select name=\"type\" class=\"uv-select create-ticket\" id=\"type\">
\t\t\t\t\t\t\t\t\t<option value=\"\">{{ 'Select type'|trans }}</option>

\t\t\t\t\t\t\t\t\t{% for type in ticket_service.getTypes() %}
\t\t\t\t\t\t\t\t\t\t<option value=\"{{ type.id }}\" {{ post.type is defined and post.type == type.id ? 'selected' : '' }}>{{ type.name }}</option>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">{{ 'Choose ticket type'|trans }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label required\">{{ 'Subject'|trans }}</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t<input name=\"subject\" class=\"uv-field create-ticket\" type=\"text\" value=\"{{ post.subject is defined ? post.subject : '' }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">{{ 'Ticket subject'|trans }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label required\">{{ 'Message'|trans }}</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block grammarly-fix-message-container\">
\t\t\t\t\t\t\t\t<textarea name=\"reply\" id=\"create-reply\" class=\"uv-field create-ticket grammarly-fix-message\" type=\"text\">{{ post.reply is defined ? post.reply : '' }}</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">{{ 'Ticket query message'|trans }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block attachment-block uv-no-error-success-icon\" id=\"uv-attachment-option\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<span class=\"uv-file-label\">{{ 'Add Attachment'|trans }}</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->
\t\t\t\t\t\t{% if recaptchaDetail and recaptchaDetail.isActive == true %}
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"{{ recaptchaDetail.siteKey }}\"></div>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
                        {% else %}
                            <!-- Recaptcha will not support -->
                        {% endif %}

\t\t\t\t\t\t{# CustomFields #}
\t\t\t\t\t\t{% set CustomerCustomFields = ticket_service.getCustomerCreateTicketCustomFieldSnippet() %}
\t\t\t\t\t\t{% set removeMe = [] %}
\t\t\t\t\t\t{% if CustomerCustomFields %}
\t\t\t\t\t\t\t<div class=\"custom-fields clearfix\">
\t\t\t\t\t\t\t\t{% for key, customField in CustomerCustomFields %}
\t\t\t\t\t\t\t\t\t<div class=\"uv-element-block input-group {{ customField.customFieldsDependency|length ? 'dependent' : '' }} {% for customFieldCustomFieldsDependency in customField.customFieldsDependency %} dependency{{customFieldCustomFieldsDependency.id}}{% endfor %}\" style=\"position: relative; {{ customField.customFieldsDependency|length ? 'display: none;' : '' }}\">
\t\t\t\t\t\t\t\t\t\t<label class=\"uv-field-label\" for=\"for{{customField.name~customField.id}}\">{{ customField.name }}</label>
\t\t\t\t\t\t\t\t\t\t{% if customField.fieldType == 'text' %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"{{ customField['validation']['fieldtype'] is defined ? customField['validation']['fieldtype'] :'text' }}\" name=\"customFields[{{customField.id}}]\" class=\"uv-field create-ticket\" value=\"\" {{ customField.required ? \"required\" : \"\" }} id=\"for{{customField.name~customField.id}}\" placeholder=\"{{customField.placeholder}}\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t{% elseif customField.fieldType in ['date', 'time', 'datetime'] %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"uv-field form-control create-ticket uv-date-picker {% if customField.fieldType == 'time' %}time{% else %}calendar{% endif %} uv-header-{{ customField.fieldType }}\" type=\"text\" name=\"customFields[{{customField.id}}]\" {{ customField.required ? \"required\" : \"\" }} id=\"for{{customField.name~customField.id}}\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% elseif customField.fieldType == 'textarea' %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"customFields[{{customField.id}}]\" class=\"uv-field create-ticket\" {{ customField.required ? \"required\" : \"\" }} id=\"for{{customField.name~customField.id}}\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t{% elseif customField.fieldType in ['file'] %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"customFields[{{customField.id}}]\" class=\"uv-field create-ticket\" {{ customField.required ? \"required\" : \"\" }} id=\"for{{customField.name~customField.id}}\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t{% elseif customField.fieldType in ['select'] %}
\t\t\t\t\t\t\t\t\t\t\t{% if customField.customFieldValues is not empty %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"customFields[{{customField.id}}]\" class=\"uv-select create-ticket\" id=\"for{{customField.name~customField.id}}\" {{ customField.required ? \"required\" : \"\" }}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">{{ 'Select option' }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for customFieldValues in customField.customFieldValues %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{customFieldValues.id}}\">{{customFieldValues.name}}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<!--Hide this beacause choices aren't available-->
\t\t\t\t\t\t\t\t\t\t\t\t{% set removeMe = removeMe|merge([\"for\"~customField.name~customField.id]) %}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t{% elseif customField.fieldType in ['checkbox'] %}
\t\t\t\t\t\t\t\t\t\t\t{% if customField.customFieldValues is not empty %}
\t\t\t\t\t\t\t\t\t\t\t\t{% for customFieldValues in customField.customFieldValues %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-split-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"customFields[{{customField.id}}][]\" value=\"{{customFieldValues.id}}\" id=\"for{{customFieldValues.name~customFieldValues.id}}\" class=\"create-ticket\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-radio-label\" for=\"for{{customFieldValues.name~customFieldValues.id}}\">{{ customFieldValues.name }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<!--Hide this beacause choices aren't available-->
\t\t\t\t\t\t\t\t\t\t\t\t{% set removeMe = removeMe|merge([\"for\"~customField.name~customField.id]) %}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t{% elseif customField.fieldType in ['radio'] %}
\t\t\t\t\t\t\t\t\t\t\t{% if customField.customFieldValues is not empty %}
\t\t\t\t\t\t\t\t\t\t\t\t{% for customFieldValues in customField.customFieldValues %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-split-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"customFields[{{customField.id}}]\" value=\"{{customFieldValues.id}}\" id=\"for{{customFieldValues.name~customFieldValues.id}}\" class=\"create-ticket\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-radio-view\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-radio-label\" for=\"for{{customFieldValues.name~customFieldValues.id}}\">{{ customFieldValues.name }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<!--Hide this beacause choices aren't available-->
\t\t\t\t\t\t\t\t\t\t\t\t{% set removeMe = removeMe|merge([\"for\"~customField.name~customField.id]) %}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% if formErrors['customFields['~customField.id~']'] is defined %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">{{formErrors['customFields['~customField.id~']']}}</div>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<button type=\"submit\" id=\"create-ticket-btn\" class=\"uv-btn\">{{ 'Create Ticket'|trans }}</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t</div>

\t{% if user_service.isFileExists('apps/uvdesk/form-component') %}
\t\t{{ include('@_uvdesk_extension_uvdesk_form_component/CustomFields/customFieldValidation.html.twig') }} 
\t{% elseif user_service.isFileExists('apps/uvdesk/custom-fields') %}
\t\t{{ include('@_uvdesk_extension_uvdesk_custom_fields/CustomFields/customFieldValidation.html.twig') }} 
\t{% endif %}
{% endblock %}

{% block footer %}
\t{% set isTicketViewPage = (app.user.id is defined ? true : false) %}
\t
\t{{ parent() }}

\t{% if recaptchaDetail and recaptchaDetail.isActive == true %}
        <script src='https://www.google.com/recaptcha/api.js'></script>
    {% endif %}

    {{ include(\"@UVDeskSupportCenter/Templates/tinyMCE.html.twig\") }}
\t{{ include('@UVDeskCoreFramework/Templates/attachment.html.twig') }}

\t<script type=\"text/javascript\">
\t\t{% if user_service.isFileExists('apps/uvdesk/form-component') == false %}
\t\t\tcustomFieldValidation = {};
\t\t{% endif %}

\t\t\$(function () {
\t\t\tsfTinyMce.init({
\t\t\t\theight: '155px',
\t\t\t\tselector : '#create-reply',
\t\t\t\timages_upload_url: \"\",
\t\t\t\tsetup: function(editor) {
\t\t\t\t},
\t\t\t\tplugins: [
\t\t\t\t],
\t\t\t\ttoolbar: '| undo redo | bold italic forecolor ',
\t\t\t});

\t\t\t{% if (removeMe is defined) %}
\t\t\t\t\$.each({{ removeMe | json_encode |raw }}, function(key, value){
\t\t\t\t\t\$('label[for=\"' + value + '\"]').parent().hide();
\t\t\t\t});
\t\t\t{% endif %}

\t\t\t\$('.uv-header-date').datetimepicker({
            \tformat: 'YYYY-MM-DD',
        \t});

        \t\$('.uv-header-time').datetimepicker({
            \tformat: 'LT',
        \t});

        \t\$('.uv-header-datetime').datetimepicker({
            \tformat: 'YYYY-MM-DD H:m:s'
        \t});

\t\t\tvar CreateTicketModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\",
\t\t\t\tdefaults : {
\t\t\t\t\tpath : \"\",
\t\t\t\t},
\t\t\t\tvalidation: _.extend(customFieldValidation, {
\t\t\t\t\t{% if not isTicketViewPage %}
\t\t\t\t\t\t'name' : {
\t\t\t\t\t\t\trequired : true,
\t\t\t\t\t\t\tmsg : '{{ \"This field is mandatory\"|trans }}'
\t\t\t\t\t\t},
\t\t\t\t\t\t'from' :[{
\t\t\t\t\t\t\trequired : true,
\t\t\t\t\t\t\tmsg : '{{ \"This field is mandatory\"|trans }}'
\t\t\t\t\t\t}, {
\t\t\t\t\t\t\tpattern : 'email',
\t\t\t\t\t\t\tmsg : '{{ \"Email address is invalid\"|trans }}'
\t\t\t\t\t\t}],
\t\t\t\t\t{% endif %}
\t\t\t\t\t'type' : {
\t\t\t\t\t\trequired : true,
\t\t\t\t\t\tmsg : '{{ \"This field is mandatory\"|trans }}'
\t\t\t\t\t},
\t\t\t\t\t'subject' : {
\t\t\t\t\t\trequired : true,
\t\t\t\t\t\tmsg : '{{ \"This field is mandatory\"|trans }}'
\t\t\t\t\t},
\t\t\t\t\t'reply' : {
\t\t\t\t\t\tfn: function(value) {
\t\t\t\t\t\t\tvar content = tinyMCE.activeEditor.getContent();
\t\t\t\t\t\t\tcontent = content.replace(/&nbsp;/g, '').replace(/<[^>]*>/g, '');

\t\t\t\t\t\t\tif (content.trim() == '') {
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t}

                            if (! tinyMCE.get(\"uv-edit-create-thread\"))
                                return false;
\t\t\t\t\t\t\t\t
                            var html = tinyMCE.get(\"uv-edit-create-thread\").getContent();
                            if (app.appView.stripHTML(html) != '') {
                                return false;
                            }

                            return true;
                        },
\t\t\t\t\t\tmsg : '{{ \"This field is mandatory\"|trans }}'
\t\t\t\t\t},
\t\t\t\t\t{% if recaptchaDetail and recaptchaDetail.isActive == true %}
                        'g-recaptcha-response' : {
                            fn: function(value) {
                                if (grecaptcha.getResponse().length > 0)
                                    return false;
                                else
                                    return true;
                            },
                            msg : '{{ \"Please select CAPTCHA\"|trans }}'
                        }
\t\t\t\t    {% endif %}
\t\t\t\t}),
\t\t\t\turlRoot : \"{{ path('helpdesk_customer_create_ticket') }}\"
\t\t\t});
\t\t\tvar CreateTicketForm = Backbone.View.extend({
\t\t\t\tinitialize : function() {
\t\t\t\t\tBackbone.Validation.bind(this);
\t\t\t\t\tvar jsonContext = JSON.parse('{{ errors is defined ? errors|raw : \"{}\"  }}');
\t\t\t\t\tfor (var field in jsonContext) {
\t\t\t\t\t\tBackbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tevents : {
\t\t\t\t\t'click #create-ticket-btn' : \"saveTicket\",
\t\t\t\t\t'change #type' : \"updateCustomFields\",
\t\t\t\t\t'blur input:not(input[type=file]), textarea, select, checkbox': 'formChanged',
\t\t\t\t\t'change input[type=file]': 'formChanged',
\t\t\t\t},
\t\t\t\tformChanged: function(e) {
\t\t\t\t\tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t\t\tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t\t},
\t\t\t\tsaveTicket : function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\tvar currentElement = Backbone.\$(e.currentTarget);
\t\t\t\t\tvar data = currentElement.closest('form').serializeObject();
\t\t\t\t\tthis.model.set(data);
\t\t\t\t\tif (this.model.isValid(true)) {
\t\t\t\t\t\t\$('#create-ticket-form').submit();
\t\t\t\t\t\t\$('form').find('#create-ticket-btn').attr('disabled', 'disabled');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tupdateCustomFields : function (e) {
\t\t\t\t\tvar dependentFields = e.currentTarget.value;
\t\t\t\t\tthis.\$('.dependent').hide();
\t\t\t\t\tthis.\$('.dependency' + dependentFields).show();
\t\t\t\t}
\t\t\t});
\t\t\tvar createticketForm = new CreateTicketForm({
\t\t\t\tel : \$(\"#create-ticket-form\"),
\t\t\t\tmodel : new CreateTicketModel()
\t\t\t});
\t\t});
\t</script>
{% endblock %}", "@UVDeskSupportCenter/Knowledgebase/ticket.html.twig", "/home/users/sanjeev.papnoi/www/uvdesk-community-v1.1.8/vendor/uvdesk/support-center-bundle/Resources/views/Knowledgebase/ticket.html.twig");
    }
}
