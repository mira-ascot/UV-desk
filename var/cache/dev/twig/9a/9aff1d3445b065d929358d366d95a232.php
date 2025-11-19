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

/* @UVDeskSupportCenter/Templates/announcementView.html.twig */
class __TwigTemplate_9119038361e7d3ac5fd8232d7af9cf9f extends Template
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
            'uvdesk_announcements' => [$this, 'block_uvdesk_announcements'],
            'uvdesk_announcements_css' => [$this, 'block_uvdesk_announcements_css'],
            'uvdesk_announcements_body' => [$this, 'block_uvdesk_announcements_body'],
            'uvdesk_announcements_main' => [$this, 'block_uvdesk_announcements_main'],
            'uvdesk_announcements_javacript' => [$this, 'block_uvdesk_announcements_javacript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Templates/announcementView.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Templates/announcementView.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('uvdesk_announcements', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_uvdesk_announcements(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "uvdesk_announcements"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "uvdesk_announcements"));

        // line 2
        yield "\t";
        yield from $this->unwrap()->yieldBlock('uvdesk_announcements_css', $context, $blocks);
        // line 188
        yield "
\t";
        // line 189
        yield from $this->unwrap()->yieldBlock('uvdesk_announcements_body', $context, $blocks);
        // line 192
        yield "
\t";
        // line 193
        yield from $this->unwrap()->yieldBlock('uvdesk_announcements_main', $context, $blocks);
        // line 271
        yield "
\t";
        // line 272
        yield from $this->unwrap()->yieldBlock('uvdesk_announcements_javacript', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_uvdesk_announcements_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "uvdesk_announcements_css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "uvdesk_announcements_css"));

        // line 3
        yield "\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\">
\t\t\t<style>
\t\t\t\t.announcementWrapperLoader {
\t\t\t\t\tdisplay: block;
\t\t\t\t\tmargin-top: -2px;
\t\t\t\t\theight: 2px;
\t\t\t\t\tbackground-color: rgba(47, 163, 104, 1);
\t\t\t\t}
\t\t\t\t.announcement {
\t\t\t\t\tbackground-color: rgba(255, 165, 0, 0.1);
\t\t\t\t\tborder-radius:3px;
\t\t\t\t\tpadding: 16px;
\t\t\t\t\tborder: 2px solid rgba(255, 165, 0, 1);
\t\t\t\t\tcolor: rgba(0, 0, 0, 1);
\t\t\t\t\talign-items: flex-start;
\t\t\t\t\tdisplay: flex;
\t\t\t\t\tjustify-content: space-between;
\t\t\t\t\talign-items: center;
\t\t\t\t\tfont-family: 'Roboto';
\t\t\t\t\tfont-size: 20px;
\t\t\t\t}
\t\t\t\t.announcement_mobile {
\t\t\t\t\tbackground-color: rgba(255, 165, 0, 0.1);
\t\t\t\t\tborder-radius:3px;
\t\t\t\t\tpadding: 16px;
\t\t\t\t\tborder: 2px solid rgba(255, 165, 0, 1);
\t\t\t\t\tcolor: rgba(0, 0, 0, 1);
\t\t\t\t\tjustify-content: space-between;
\t\t\t\t\talign-items: center;
\t\t\t\t\tfont-family: 'Roboto';
\t\t\t\t\tfont-size: 20px;
\t\t\t\t}

\t\t\t\t.announcement_mobile_flex {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\talign-items: center;
\t\t\t\t}
\t\t\t\t.announcement_left_wrapper {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\tflex-direction: row;
\t\t\t\t\talign-items: center;
\t\t\t\t\twidth: 100%;
\t\t\t\t}
\t\t\t\t.announcement_actions {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\tjustify-content: space-between;
\t\t\t\t}
\t\t\t\t.announcement_para {
\t\t\t\t\tfont-weight: 500;
\t\t\t\t\tfont-size: 20px;
\t\t\t\t\tline-height: 23.44px;
\t\t\t\t}
\t\t\t\t.announcement_para a:hover{
\t\t\t\t\ttext-decoration: underline;
\t\t\t\t}
\t\t\t\t.announcement_count {
\t\t\t\t\tfloat:left;
\t\t\t\t}
\t\t\t\t.announcement_count_next, .announcement_remove {
\t\t\t\t\tfont-weight: 100;
\t\t\t\t\tborder-radius: 50%;
\t\t\t\t\tcursor: pointer;
\t\t\t\t\tfloat: right;
\t\t\t\t\twidth: 39px;
\t\t\t\t\theight: 39px;
\t\t\t\t\tbackground-color: transparent;
\t\t\t\t\tdisplay: flex;
\t\t\t\t\tjustify-content: center;
\t\t\t\t\talign-items: center;
\t\t\t\t\tfont-size: 20px;
\t\t\t\t\tcolor: #000;
\t\t\t\t\tmargin-left: 5px;
\t\t\t\t}
\t\t\t\t.announcement_count_next:hover, .announcement_remove:hover {
\t\t\t\t\tbackground-color: rgba(255, 165, 0, 0.1);
\t\t\t\t}
\t\t\t\t.announcement_count_next_wrapper {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\talign-items: center;
\t\t\t\t}
\t\t\t\t.announcement_btn_left {
\t\t\t\t\tbackground: #EFC556;
\t\t\t\t\tfont-weight: bold;
\t\t\t\t\tcursor: pointer;
\t\t\t\t\tpadding: 8px 12px;
\t\t\t\t\tborder-radius: 4px;
\t\t\t\t\tmargin-right: 10px;
\t\t\t\t\tmargin-left: 4px;
\t\t\t\t\tdisplay: block;
\t\t\t\t}
\t\t\t\t.announcement_left_icon {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\talign-items: center;
\t\t\t\t\tjustify-content: space-between;
\t\t\t\t}
\t\t\t\t.announcement_left_icon img {
\t\t\t\t\theight: 39px;
\t\t\t\t\twidth: 39px;
\t\t\t\t}
\t\t\t\t.announcement_count_next img, .announcement_remove img {
\t\t\t\t\twidth: 100%;
\t\t\t\t\theight: 100%;
\t\t\t\t\tmargin-left: 1.7px;
\t\t\t\t}
\t\t\t\t.announcement_content {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\talign-items: center;
\t\t\t\t\tmargin-left: 4px;
\t\t\t\t\twidth: 100%;
\t\t\t\t}

\t\t\t\t.announcement_content_mobile {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\talign-items: center;
\t\t\t\t\tmargin-left: 4px;
\t\t\t\t\twidth: 100%;
\t\t\t\t}

\t\t\t\t.announcement_content_para_link {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\talign-items: center;
\t\t\t\t\tflex-direction: row;
\t\t\t\t}
\t\t\t\t.announcement_count_mv {
\t\t\t\t\tdisplay: none;
\t\t\t\t}

\t\t\t\t.desktop {
\t\t\t\t\tdisplay: block !important;
\t\t\t\t}

\t\t\t\t.mobile {
\t\t\t\t\tdisplay: none;
\t\t\t\t}

\t\t\t\t@media screen and (max-width: 800px) {
\t\t\t\t\t.announcementWrapperLoader {
\t\t\t\t\t\tmargin-top: -2px !important;
\t\t\t\t\t}
\t\t\t\t\t.desktop {
\t\t\t\t\t\tdisplay: none !important;
\t\t\t\t\t}

\t\t\t\t\t.mobile {
\t\t\t\t\t\tdisplay: block !important;
\t\t\t\t\t}
\t\t\t\t\t.announcement_btn_left{
\t\t\t\t\t\tfont-size: 10px;
\t\t\t\t\t}
\t\t\t\t\t.announcementWrapperLoader {
\t\t\t\t\t\tmargin-top: -12px;
\t\t\t\t\t}

\t\t\t\t\t.announcementWrapperLoader_mobile {
\t\t\t\t\t\tmargin-top: -2px;
\t\t\t\t\t}

\t\t\t\t\t.announcement_remove {
\t\t\t\t\t\twidth: 36px !important;
\t\t\t\t\t\theight: 36px !important;
\t\t\t\t\t}

\t\t\t\t\t.announcement {
\t\t\t\t\t\tbackground-color: rgba(255, 165, 0, 0.1);
\t\t\t\t\t\tmargin-bottom: 10px;
\t\t\t\t\t\tborder-radius: 3px;
\t\t\t\t\t\tpadding: 8px;
\t\t\t\t\t\tborder: 2px solid rgba(255, 165, 0, 1);
\t\t\t\t\t}
\t\t\t\t\t.announcement_para {
\t\t\t\t\t\tfont-size: 18px;
\t\t\t\t\t\tline-height: 25px;
\t\t\t\t\t}
\t\t\t\t\t.announcement_count_mv {
\t\t\t\t\t\tdisplay: block;
\t\t\t\t\t}
\t\t\t\t\t.announcement_count {
\t\t\t\t\t\tdisplay: none;
\t\t\t\t\t}
\t\t\t\t\t.announcement_actions {
\t\t\t\t\t\tflex-direction: column;
\t\t\t\t\t}
\t\t\t\t}
\t\t</style>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 189
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_uvdesk_announcements_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "uvdesk_announcements_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "uvdesk_announcements_body"));

        // line 190
        yield "\t\t<div id=\"item-list\"></div>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 193
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_uvdesk_announcements_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "uvdesk_announcements_main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "uvdesk_announcements_main"));

        // line 194
        yield "\t\t<script id=\"announcement_template\" type=\"text/template\">
\t\t\t<div class=\"desktop\">
\t\t\t\t<div class=\"announcementWrapper\" >
\t\t\t\t\t<div class=\"announcement\" id=\"uv-kb-info-announcement_<%- id %>\">
\t\t\t\t\t\t<div class=\"announcement_left_wrapper\">
\t\t\t\t\t\t\t<div class=\"announcement_left_icon\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdesksupportcenter/images/tick_icon.png"), "html", null, true);
        yield "\" alt=\"tick icon\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"announcement_content\">
\t\t\t\t\t\t\t\t<div class=\"announcement_content_para_link\">
\t\t\t\t\t\t\t\t\t<p class=\"announcement_para\"><%= promoText %></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"announcement_count_mv\"><%- currentPage %>/<%- lastPage %></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"announcement_actions\">
\t\t\t\t\t\t\t<div class=\"announcement_count_next_wrapper\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<p class=\"announcement_count\"><%- currentPage %>/<%- lastPage %></p>
\t\t\t\t\t\t\t\t\t<a class =\"announcement_count_next\" id=\"announcement_count_next\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdesksupportcenter/images/arrow.png"), "html", null, true);
        yield "\" alt=\"arrow icon\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a class =\"announcement_remove\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdesksupportcenter/images/close_2.png"), "html", null, true);
        yield "\" alt=\"close icon\"/>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<span class=\"announcementWrapperLoader\"></span>
\t\t\t</div>

\t\t\t<div class=\"mobile\">
\t\t\t\t<div class=\"announcementWrapper\" >
\t\t\t\t\t<div class=\"\" id=\"uv-kb-info-announcement_<%- id %>\">
\t\t\t\t\t\t<div class=\"announcement_mobile\">
\t\t\t\t\t\t\t<div class=\"announcement_mobile_flex\">
\t\t\t\t\t\t\t\t<div class=\"announcement_left_wrapper\">
\t\t\t\t\t\t\t\t\t<div class=\"announcement_left_icon\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdesksupportcenter/images/tick_icon.png"), "html", null, true);
        yield "\" alt=\"tick icon\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a class =\"announcement_remove\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdesksupportcenter/images/close_2.png"), "html", null, true);
        yield "\" alt=\"Close icon\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<p class=\"announcement_count_mv\"><%- currentPage %>/<%- lastPage %></p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"announcement_count_next_wrapper\">
\t\t\t\t\t\t\t\t\t<p class=\"announcement_count\"><%- currentPage %>/<%- lastPage %></p>
\t\t\t\t\t\t\t\t\t<a class =\"announcement_count_next\" id=\"announcement_count_next\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdesksupportcenter/images/arrow.png"), "html", null, true);
        yield "\" alt=\"arrow icon\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t

\t\t\t\t\t\t\t<div class=\"announcement_content_mobile\">
\t\t\t\t\t\t\t\t<div class=\"announcement_content_para_link\">
\t\t\t\t\t\t\t\t\t<p class=\"announcement_para\"><%= promoText %></p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<span class=\"announcementWrapperLoader\"></span>
\t\t\t</div>
\t\t\t
\t\t</script>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 272
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_uvdesk_announcements_javacript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "uvdesk_announcements_javacript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "uvdesk_announcements_javacript"));

        // line 273
        yield "\t\t<script src=\"/js/front_jquery-2.1.4.min_1.js\"></script>

\t\t<script type=\"text/javascript\">
\t\t\t\$(function() {
\t\t\t\tvar AnnouncementModel = Backbone.Model.extend({
\t\t\t\t\tidAttribute : \"id\",
\t\t\t\t});

\t\t\t\tvar AnnouncementCollection = Backbone.Collection.extend({
\t\t\t\t\tmodel: AnnouncementModel,
\t\t\t\t\turl: '";
        // line 283
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_front_marketing_announcement_xhr");
        yield "',
\t\t\t\t\tparse: function(response) {
\t\t\t\t\t\treturn response;
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tvar ItemView = Backbone.View.extend({
\t\t\t\t\ttemplate: _.template(\$(\"#announcement_template\").html()),

\t\t\t\t\trender: function(announcement, currentPage, totalPages) {
\t\t\t\t\t\tannouncement.currentPage = currentPage;
\t\t\t\t\t\tannouncement.lastPage = totalPages;
\t\t\t\t\t\tthis.\$el.html(this.template(announcement));
\t\t\t\t\t\treturn this;
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tvar ItemListView = Backbone.View.extend({
\t\t\t\t\ttag: 'div',
\t\t\t\t\tel: '#item-list',

\t\t\t\t\tallAnnouncements: [],
\t\t\t\t\tcurrentIndex: 0,

\t\t\t\t\tevents: {
\t\t\t\t\t\t'click .announcement_count_next': \"loadNextAnnouncement\",
\t\t\t\t\t\t'click .announcement_remove': \"removeAnnouncement\"
\t\t\t\t\t},

\t\t\t\t\tinitialize: function() {
\t\t\t\t\t\tthis.collection = new AnnouncementCollection();
\t\t\t\t\t\tthis.itemView = new ItemView({ el: this.el });

\t\t\t\t\t\t// Only fetch data once
\t\t\t\t\t\tthis.collection.fetch({
\t\t\t\t\t\t\treset: true,
\t\t\t\t\t\t\tsuccess: function(collection, response) {
\t\t\t\t\t\t\t\t// Store all announcements from the response
\t\t\t\t\t\t\t\tif (collection.length > 0) {
\t\t\t\t\t\t\t\t\tvar model = collection.at(0);
\t\t\t\t\t\t\t\t\tthis.allAnnouncements = model.get('modules') || [];
\t\t\t\t\t\t\t\t\tthis.totalAnnouncements = this.allAnnouncements.length;

\t\t\t\t\t\t\t\t\tif (this.totalAnnouncements > 0) {
\t\t\t\t\t\t\t\t\t\tthis.displayAnnouncement(0);
\t\t\t\t\t\t\t\t\t\tthis.startLoader();
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}.bind(this)
\t\t\t\t\t\t});
\t\t\t\t\t},

\t\t\t\t\tdisplayAnnouncement: function(index) {
\t\t\t\t\t\tif (index >= this.totalAnnouncements) {
\t\t\t\t\t\t\tindex = 0;
\t\t\t\t\t\t}

\t\t\t\t\t\tif (this.allAnnouncements.length > 0) {
\t\t\t\t\t\t\tvar announcement = this.allAnnouncements[index];
\t\t\t\t\t\t\tthis.itemView.render(announcement, index + 1, this.totalAnnouncements);
\t\t\t\t\t\t\tthis.currentIndex = index;
\t\t\t\t\t\t}
\t\t\t\t\t},

\t\t\t\t\tremoveAnnouncement: function() {
\t\t\t\t\t\tthis.\$el.empty();
\t\t\t\t\t\tthis.stopInterval();
\t\t\t\t\t},

\t\t\t\t\tstopInterval: function() {
\t\t\t\t\t\tif (this.loaderInterval) {
\t\t\t\t\t\t\tclearInterval(this.loaderInterval);
\t\t\t\t\t\t\tthis.loaderInterval = null;
\t\t\t\t\t\t}
\t\t\t\t\t},

\t\t\t\t\tstartLoader: function() {
\t\t\t\t\t\tthis.stopInterval();

\t\t\t\t\t\tthis.loaderWidth = 0;
\t\t\t\t\t\tthis.loaderInterval = setInterval(function() {
\t\t\t\t\t\t\tvar elem = this.\$el.find('.announcementWrapperLoader');
\t\t\t\t\t\t\tif (this.loaderWidth >= 100) {
\t\t\t\t\t\t\t\tthis.loadNextAnnouncement();
\t\t\t\t\t\t\t\tthis.loaderWidth = 0;
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tthis.loaderWidth++;
\t\t\t\t\t\t\t\tif (elem.length > 0) {
\t\t\t\t\t\t\t\t\telem[0].style.width = this.loaderWidth + '%';
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}.bind(this), 70);
\t\t\t\t\t},

\t\t\t\t\tloadNextAnnouncement: function(event) {
\t\t\t\t\t\tif (event) {
\t\t\t\t\t\t\tthis.\$el.find('.announcement_count_next').prop('disabled', true);
\t\t\t\t\t\t}

\t\t\t\t\t\tthis.stopInterval();
\t\t\t\t\t\tvar nextIndex = (this.currentIndex + 1) % this.totalAnnouncements;

\t\t\t\t\t\tthis.displayAnnouncement(nextIndex);

\t\t\t\t\t\tif (event) {
\t\t\t\t\t\t\tthis.\$el.find('.announcement_count_next').prop('disabled', false);
\t\t\t\t\t\t}

\t\t\t\t\t\tthis.startLoader();
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tvar itemsView = new ItemListView();
\t\t\t});
\t\t</script>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@UVDeskSupportCenter/Templates/announcementView.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  479 => 283,  467 => 273,  454 => 272,  422 => 250,  410 => 241,  401 => 235,  382 => 219,  374 => 214,  357 => 200,  349 => 194,  336 => 193,  324 => 190,  311 => 189,  116 => 3,  103 => 2,  92 => 272,  89 => 271,  87 => 193,  84 => 192,  82 => 189,  79 => 188,  76 => 2,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block uvdesk_announcements %}
\t{% block uvdesk_announcements_css %}
\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\">
\t\t\t<style>
\t\t\t\t.announcementWrapperLoader {
\t\t\t\t\tdisplay: block;
\t\t\t\t\tmargin-top: -2px;
\t\t\t\t\theight: 2px;
\t\t\t\t\tbackground-color: rgba(47, 163, 104, 1);
\t\t\t\t}
\t\t\t\t.announcement {
\t\t\t\t\tbackground-color: rgba(255, 165, 0, 0.1);
\t\t\t\t\tborder-radius:3px;
\t\t\t\t\tpadding: 16px;
\t\t\t\t\tborder: 2px solid rgba(255, 165, 0, 1);
\t\t\t\t\tcolor: rgba(0, 0, 0, 1);
\t\t\t\t\talign-items: flex-start;
\t\t\t\t\tdisplay: flex;
\t\t\t\t\tjustify-content: space-between;
\t\t\t\t\talign-items: center;
\t\t\t\t\tfont-family: 'Roboto';
\t\t\t\t\tfont-size: 20px;
\t\t\t\t}
\t\t\t\t.announcement_mobile {
\t\t\t\t\tbackground-color: rgba(255, 165, 0, 0.1);
\t\t\t\t\tborder-radius:3px;
\t\t\t\t\tpadding: 16px;
\t\t\t\t\tborder: 2px solid rgba(255, 165, 0, 1);
\t\t\t\t\tcolor: rgba(0, 0, 0, 1);
\t\t\t\t\tjustify-content: space-between;
\t\t\t\t\talign-items: center;
\t\t\t\t\tfont-family: 'Roboto';
\t\t\t\t\tfont-size: 20px;
\t\t\t\t}

\t\t\t\t.announcement_mobile_flex {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\talign-items: center;
\t\t\t\t}
\t\t\t\t.announcement_left_wrapper {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\tflex-direction: row;
\t\t\t\t\talign-items: center;
\t\t\t\t\twidth: 100%;
\t\t\t\t}
\t\t\t\t.announcement_actions {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\tjustify-content: space-between;
\t\t\t\t}
\t\t\t\t.announcement_para {
\t\t\t\t\tfont-weight: 500;
\t\t\t\t\tfont-size: 20px;
\t\t\t\t\tline-height: 23.44px;
\t\t\t\t}
\t\t\t\t.announcement_para a:hover{
\t\t\t\t\ttext-decoration: underline;
\t\t\t\t}
\t\t\t\t.announcement_count {
\t\t\t\t\tfloat:left;
\t\t\t\t}
\t\t\t\t.announcement_count_next, .announcement_remove {
\t\t\t\t\tfont-weight: 100;
\t\t\t\t\tborder-radius: 50%;
\t\t\t\t\tcursor: pointer;
\t\t\t\t\tfloat: right;
\t\t\t\t\twidth: 39px;
\t\t\t\t\theight: 39px;
\t\t\t\t\tbackground-color: transparent;
\t\t\t\t\tdisplay: flex;
\t\t\t\t\tjustify-content: center;
\t\t\t\t\talign-items: center;
\t\t\t\t\tfont-size: 20px;
\t\t\t\t\tcolor: #000;
\t\t\t\t\tmargin-left: 5px;
\t\t\t\t}
\t\t\t\t.announcement_count_next:hover, .announcement_remove:hover {
\t\t\t\t\tbackground-color: rgba(255, 165, 0, 0.1);
\t\t\t\t}
\t\t\t\t.announcement_count_next_wrapper {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\talign-items: center;
\t\t\t\t}
\t\t\t\t.announcement_btn_left {
\t\t\t\t\tbackground: #EFC556;
\t\t\t\t\tfont-weight: bold;
\t\t\t\t\tcursor: pointer;
\t\t\t\t\tpadding: 8px 12px;
\t\t\t\t\tborder-radius: 4px;
\t\t\t\t\tmargin-right: 10px;
\t\t\t\t\tmargin-left: 4px;
\t\t\t\t\tdisplay: block;
\t\t\t\t}
\t\t\t\t.announcement_left_icon {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\talign-items: center;
\t\t\t\t\tjustify-content: space-between;
\t\t\t\t}
\t\t\t\t.announcement_left_icon img {
\t\t\t\t\theight: 39px;
\t\t\t\t\twidth: 39px;
\t\t\t\t}
\t\t\t\t.announcement_count_next img, .announcement_remove img {
\t\t\t\t\twidth: 100%;
\t\t\t\t\theight: 100%;
\t\t\t\t\tmargin-left: 1.7px;
\t\t\t\t}
\t\t\t\t.announcement_content {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\talign-items: center;
\t\t\t\t\tmargin-left: 4px;
\t\t\t\t\twidth: 100%;
\t\t\t\t}

\t\t\t\t.announcement_content_mobile {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\talign-items: center;
\t\t\t\t\tmargin-left: 4px;
\t\t\t\t\twidth: 100%;
\t\t\t\t}

\t\t\t\t.announcement_content_para_link {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\talign-items: center;
\t\t\t\t\tflex-direction: row;
\t\t\t\t}
\t\t\t\t.announcement_count_mv {
\t\t\t\t\tdisplay: none;
\t\t\t\t}

\t\t\t\t.desktop {
\t\t\t\t\tdisplay: block !important;
\t\t\t\t}

\t\t\t\t.mobile {
\t\t\t\t\tdisplay: none;
\t\t\t\t}

\t\t\t\t@media screen and (max-width: 800px) {
\t\t\t\t\t.announcementWrapperLoader {
\t\t\t\t\t\tmargin-top: -2px !important;
\t\t\t\t\t}
\t\t\t\t\t.desktop {
\t\t\t\t\t\tdisplay: none !important;
\t\t\t\t\t}

\t\t\t\t\t.mobile {
\t\t\t\t\t\tdisplay: block !important;
\t\t\t\t\t}
\t\t\t\t\t.announcement_btn_left{
\t\t\t\t\t\tfont-size: 10px;
\t\t\t\t\t}
\t\t\t\t\t.announcementWrapperLoader {
\t\t\t\t\t\tmargin-top: -12px;
\t\t\t\t\t}

\t\t\t\t\t.announcementWrapperLoader_mobile {
\t\t\t\t\t\tmargin-top: -2px;
\t\t\t\t\t}

\t\t\t\t\t.announcement_remove {
\t\t\t\t\t\twidth: 36px !important;
\t\t\t\t\t\theight: 36px !important;
\t\t\t\t\t}

\t\t\t\t\t.announcement {
\t\t\t\t\t\tbackground-color: rgba(255, 165, 0, 0.1);
\t\t\t\t\t\tmargin-bottom: 10px;
\t\t\t\t\t\tborder-radius: 3px;
\t\t\t\t\t\tpadding: 8px;
\t\t\t\t\t\tborder: 2px solid rgba(255, 165, 0, 1);
\t\t\t\t\t}
\t\t\t\t\t.announcement_para {
\t\t\t\t\t\tfont-size: 18px;
\t\t\t\t\t\tline-height: 25px;
\t\t\t\t\t}
\t\t\t\t\t.announcement_count_mv {
\t\t\t\t\t\tdisplay: block;
\t\t\t\t\t}
\t\t\t\t\t.announcement_count {
\t\t\t\t\t\tdisplay: none;
\t\t\t\t\t}
\t\t\t\t\t.announcement_actions {
\t\t\t\t\t\tflex-direction: column;
\t\t\t\t\t}
\t\t\t\t}
\t\t</style>
\t{% endblock %}

\t{% block uvdesk_announcements_body %}
\t\t<div id=\"item-list\"></div>
\t{% endblock %}

\t{% block uvdesk_announcements_main %}
\t\t<script id=\"announcement_template\" type=\"text/template\">
\t\t\t<div class=\"desktop\">
\t\t\t\t<div class=\"announcementWrapper\" >
\t\t\t\t\t<div class=\"announcement\" id=\"uv-kb-info-announcement_<%- id %>\">
\t\t\t\t\t\t<div class=\"announcement_left_wrapper\">
\t\t\t\t\t\t\t<div class=\"announcement_left_icon\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('bundles/uvdesksupportcenter/images/tick_icon.png') }}\" alt=\"tick icon\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"announcement_content\">
\t\t\t\t\t\t\t\t<div class=\"announcement_content_para_link\">
\t\t\t\t\t\t\t\t\t<p class=\"announcement_para\"><%= promoText %></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"announcement_count_mv\"><%- currentPage %>/<%- lastPage %></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"announcement_actions\">
\t\t\t\t\t\t\t<div class=\"announcement_count_next_wrapper\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<p class=\"announcement_count\"><%- currentPage %>/<%- lastPage %></p>
\t\t\t\t\t\t\t\t\t<a class =\"announcement_count_next\" id=\"announcement_count_next\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('bundles/uvdesksupportcenter/images/arrow.png') }}\" alt=\"arrow icon\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a class =\"announcement_remove\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('bundles/uvdesksupportcenter/images/close_2.png') }}\" alt=\"close icon\"/>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<span class=\"announcementWrapperLoader\"></span>
\t\t\t</div>

\t\t\t<div class=\"mobile\">
\t\t\t\t<div class=\"announcementWrapper\" >
\t\t\t\t\t<div class=\"\" id=\"uv-kb-info-announcement_<%- id %>\">
\t\t\t\t\t\t<div class=\"announcement_mobile\">
\t\t\t\t\t\t\t<div class=\"announcement_mobile_flex\">
\t\t\t\t\t\t\t\t<div class=\"announcement_left_wrapper\">
\t\t\t\t\t\t\t\t\t<div class=\"announcement_left_icon\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('bundles/uvdesksupportcenter/images/tick_icon.png') }}\" alt=\"tick icon\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a class =\"announcement_remove\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('bundles/uvdesksupportcenter/images/close_2.png') }}\" alt=\"Close icon\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<p class=\"announcement_count_mv\"><%- currentPage %>/<%- lastPage %></p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"announcement_count_next_wrapper\">
\t\t\t\t\t\t\t\t\t<p class=\"announcement_count\"><%- currentPage %>/<%- lastPage %></p>
\t\t\t\t\t\t\t\t\t<a class =\"announcement_count_next\" id=\"announcement_count_next\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('bundles/uvdesksupportcenter/images/arrow.png') }}\" alt=\"arrow icon\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t

\t\t\t\t\t\t\t<div class=\"announcement_content_mobile\">
\t\t\t\t\t\t\t\t<div class=\"announcement_content_para_link\">
\t\t\t\t\t\t\t\t\t<p class=\"announcement_para\"><%= promoText %></p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<span class=\"announcementWrapperLoader\"></span>
\t\t\t</div>
\t\t\t
\t\t</script>
\t{% endblock %}

\t{% block uvdesk_announcements_javacript %}
\t\t<script src=\"/js/front_jquery-2.1.4.min_1.js\"></script>

\t\t<script type=\"text/javascript\">
\t\t\t\$(function() {
\t\t\t\tvar AnnouncementModel = Backbone.Model.extend({
\t\t\t\t\tidAttribute : \"id\",
\t\t\t\t});

\t\t\t\tvar AnnouncementCollection = Backbone.Collection.extend({
\t\t\t\t\tmodel: AnnouncementModel,
\t\t\t\t\turl: '{{ path(\"helpdesk_member_knowledgebase_front_marketing_announcement_xhr\") }}',
\t\t\t\t\tparse: function(response) {
\t\t\t\t\t\treturn response;
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tvar ItemView = Backbone.View.extend({
\t\t\t\t\ttemplate: _.template(\$(\"#announcement_template\").html()),

\t\t\t\t\trender: function(announcement, currentPage, totalPages) {
\t\t\t\t\t\tannouncement.currentPage = currentPage;
\t\t\t\t\t\tannouncement.lastPage = totalPages;
\t\t\t\t\t\tthis.\$el.html(this.template(announcement));
\t\t\t\t\t\treturn this;
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tvar ItemListView = Backbone.View.extend({
\t\t\t\t\ttag: 'div',
\t\t\t\t\tel: '#item-list',

\t\t\t\t\tallAnnouncements: [],
\t\t\t\t\tcurrentIndex: 0,

\t\t\t\t\tevents: {
\t\t\t\t\t\t'click .announcement_count_next': \"loadNextAnnouncement\",
\t\t\t\t\t\t'click .announcement_remove': \"removeAnnouncement\"
\t\t\t\t\t},

\t\t\t\t\tinitialize: function() {
\t\t\t\t\t\tthis.collection = new AnnouncementCollection();
\t\t\t\t\t\tthis.itemView = new ItemView({ el: this.el });

\t\t\t\t\t\t// Only fetch data once
\t\t\t\t\t\tthis.collection.fetch({
\t\t\t\t\t\t\treset: true,
\t\t\t\t\t\t\tsuccess: function(collection, response) {
\t\t\t\t\t\t\t\t// Store all announcements from the response
\t\t\t\t\t\t\t\tif (collection.length > 0) {
\t\t\t\t\t\t\t\t\tvar model = collection.at(0);
\t\t\t\t\t\t\t\t\tthis.allAnnouncements = model.get('modules') || [];
\t\t\t\t\t\t\t\t\tthis.totalAnnouncements = this.allAnnouncements.length;

\t\t\t\t\t\t\t\t\tif (this.totalAnnouncements > 0) {
\t\t\t\t\t\t\t\t\t\tthis.displayAnnouncement(0);
\t\t\t\t\t\t\t\t\t\tthis.startLoader();
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}.bind(this)
\t\t\t\t\t\t});
\t\t\t\t\t},

\t\t\t\t\tdisplayAnnouncement: function(index) {
\t\t\t\t\t\tif (index >= this.totalAnnouncements) {
\t\t\t\t\t\t\tindex = 0;
\t\t\t\t\t\t}

\t\t\t\t\t\tif (this.allAnnouncements.length > 0) {
\t\t\t\t\t\t\tvar announcement = this.allAnnouncements[index];
\t\t\t\t\t\t\tthis.itemView.render(announcement, index + 1, this.totalAnnouncements);
\t\t\t\t\t\t\tthis.currentIndex = index;
\t\t\t\t\t\t}
\t\t\t\t\t},

\t\t\t\t\tremoveAnnouncement: function() {
\t\t\t\t\t\tthis.\$el.empty();
\t\t\t\t\t\tthis.stopInterval();
\t\t\t\t\t},

\t\t\t\t\tstopInterval: function() {
\t\t\t\t\t\tif (this.loaderInterval) {
\t\t\t\t\t\t\tclearInterval(this.loaderInterval);
\t\t\t\t\t\t\tthis.loaderInterval = null;
\t\t\t\t\t\t}
\t\t\t\t\t},

\t\t\t\t\tstartLoader: function() {
\t\t\t\t\t\tthis.stopInterval();

\t\t\t\t\t\tthis.loaderWidth = 0;
\t\t\t\t\t\tthis.loaderInterval = setInterval(function() {
\t\t\t\t\t\t\tvar elem = this.\$el.find('.announcementWrapperLoader');
\t\t\t\t\t\t\tif (this.loaderWidth >= 100) {
\t\t\t\t\t\t\t\tthis.loadNextAnnouncement();
\t\t\t\t\t\t\t\tthis.loaderWidth = 0;
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tthis.loaderWidth++;
\t\t\t\t\t\t\t\tif (elem.length > 0) {
\t\t\t\t\t\t\t\t\telem[0].style.width = this.loaderWidth + '%';
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}.bind(this), 70);
\t\t\t\t\t},

\t\t\t\t\tloadNextAnnouncement: function(event) {
\t\t\t\t\t\tif (event) {
\t\t\t\t\t\t\tthis.\$el.find('.announcement_count_next').prop('disabled', true);
\t\t\t\t\t\t}

\t\t\t\t\t\tthis.stopInterval();
\t\t\t\t\t\tvar nextIndex = (this.currentIndex + 1) % this.totalAnnouncements;

\t\t\t\t\t\tthis.displayAnnouncement(nextIndex);

\t\t\t\t\t\tif (event) {
\t\t\t\t\t\t\tthis.\$el.find('.announcement_count_next').prop('disabled', false);
\t\t\t\t\t\t}

\t\t\t\t\t\tthis.startLoader();
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tvar itemsView = new ItemListView();
\t\t\t});
\t\t</script>
\t{% endblock %}
{% endblock %}
", "@UVDeskSupportCenter/Templates/announcementView.html.twig", "/home/users/sanjeev.papnoi/www/uvdesk-community-v1.1.8/vendor/uvdesk/support-center-bundle/Resources/views/Templates/announcementView.html.twig");
    }
}
