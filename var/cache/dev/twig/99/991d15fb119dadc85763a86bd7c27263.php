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

/* candidature/qrcode.html.twig */
class __TwigTemplate_150a8fc50df31ad45a6935d02c549a8c extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/qrcode.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "QR Code - Candidature";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .qr-container {
        text-align: center;
        margin: 2rem auto;
        max-width: 500px;
    }
    .qr-code {
        margin: 1rem auto;
        padding: 1rem;
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .candidature-info {
        margin: 1rem 0;
        padding: 1rem;
        background: #f8f9fa;
        border-radius: 8px;
    }
    .candidature-info p {
        margin-bottom: 0.5rem;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 33
        yield "<div class=\"container\">
    <div class=\"qr-container\">
        <h1>QR Code - Candidature</h1>
        
        <div class=\"candidature-info\">
            <p><strong>Candidat:</strong> ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "prenom", [], "any", false, false, false, 38), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "nom", [], "any", false, false, false, 38), "html", null, true);
        yield "</p>
            <p><strong>Mission:</strong> ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 39, $this->source); })()), "mission", [], "any", false, false, false, 39), "titre", [], "any", false, false, false, 39), "html", null, true);
        yield "</p>
            <p><strong>Date:</strong> ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield "</p>
        </div>

        ";
        // line 43
        if (array_key_exists("qrCode", $context)) {
            // line 44
            yield "            <div class=\"qr-code\">
                <img src=\"data:image/png;base64,";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["qrCode"]) || array_key_exists("qrCode", $context) ? $context["qrCode"] : (function () { throw new RuntimeError('Variable "qrCode" does not exist.', 45, $this->source); })()), "html", null, true);
            yield "\" alt=\"QR Code\">
            </div>
            <a href=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
            yield "\" class=\"btn btn-secondary mt-3\">
                <i class=\"bi bi-arrow-left\"></i> Retour aux détails
            </a>
        ";
        } else {
            // line 51
            yield "            <div class=\"alert alert-info\">
                Le QR code sera généré une fois le formulaire soumis.
            </div>
            ";
            // line 54
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'form_start');
            yield "
            ";
            // line 55
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'widget');
            yield "
            <button type=\"submit\" class=\"btn btn-primary\">
                <i class=\"bi bi-qr-code\"></i> Générer le QR Code
            </button>
            ";
            // line 59
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'form_end');
            yield "
        ";
        }
        // line 61
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "candidature/qrcode.html.twig";
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
        return array (  190 => 61,  185 => 59,  178 => 55,  174 => 54,  169 => 51,  162 => 47,  157 => 45,  154 => 44,  152 => 43,  146 => 40,  142 => 39,  136 => 38,  129 => 33,  119 => 32,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}QR Code - Candidature{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .qr-container {
        text-align: center;
        margin: 2rem auto;
        max-width: 500px;
    }
    .qr-code {
        margin: 1rem auto;
        padding: 1rem;
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .candidature-info {
        margin: 1rem 0;
        padding: 1rem;
        background: #f8f9fa;
        border-radius: 8px;
    }
    .candidature-info p {
        margin-bottom: 0.5rem;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"qr-container\">
        <h1>QR Code - Candidature</h1>
        
        <div class=\"candidature-info\">
            <p><strong>Candidat:</strong> {{ candidature.user.prenom }} {{ candidature.user.nom }}</p>
            <p><strong>Mission:</strong> {{ candidature.mission.titre }}</p>
            <p><strong>Date:</strong> {{ \"now\"|date('d/m/Y') }}</p>
        </div>

        {% if qrCode is defined %}
            <div class=\"qr-code\">
                <img src=\"data:image/png;base64,{{ qrCode }}\" alt=\"QR Code\">
            </div>
            <a href=\"{{ path('app_candidature_show', {'id': candidature.id}) }}\" class=\"btn btn-secondary mt-3\">
                <i class=\"bi bi-arrow-left\"></i> Retour aux détails
            </a>
        {% else %}
            <div class=\"alert alert-info\">
                Le QR code sera généré une fois le formulaire soumis.
            </div>
            {{ form_start(form) }}
            {{ form_widget(form) }}
            <button type=\"submit\" class=\"btn btn-primary\">
                <i class=\"bi bi-qr-code\"></i> Générer le QR Code
            </button>
            {{ form_end(form) }}
        {% endif %}
    </div>
</div>
{% endblock %}", "candidature/qrcode.html.twig", "/Users/moetezjebari/Desktop/PIDV-WEB3A19-Mouheb-User - Copy/Downloads/PIDV-WEB3A19-Mouheb-User - Copy/Downloads/PIDV-WEB3A19-Mouheb-User - Copy/templates/candidature/qrcode.html.twig");
    }
}
