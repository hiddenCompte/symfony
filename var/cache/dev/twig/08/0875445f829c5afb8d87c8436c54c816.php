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

/* error/access_denied.html.twig */
class __TwigTemplate_96978dd4b9825b8ad455d5a72c49ad47 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error/access_denied.html.twig"));

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

        yield "Accès Non Autorisé";
        
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
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .error-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(rgba(var(--color-primary-rgb), 0.1), rgba(var(--color-primary-rgb), 0.1));
            padding: 40px 0;
        }
        .error-content {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 3rem;
            text-align: center;
            max-width: 600px;
            width: 90%;
        }
        .error-icon {
            font-size: 4rem;
            color: var(--color-primary);
            margin-bottom: 1.5rem;
        }
        .error-title {
            color: #012970;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        .error-message {
            color: #444444;
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 2rem;
        }
        .button-group {
            display: flex;
            gap: 1rem;
            justify-content: center;
        }
        .error-button {
            display: inline-block;
            padding: 0.75rem 2.5rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
        }
        .primary-button {
            background: var(--color-primary);
            color: #fff !important;
        }
        .secondary-button {
            background: #fff;
            color: var(--color-primary) !important;
            border: 2px solid var(--color-primary);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 67
        yield "<div class=\"error-page\">
    <div class=\"error-content\">
        <div class=\"error-icon\">
            <i class=\"bi bi-shield-lock\"></i>
        </div>
        <h1 class=\"error-title\">Accès Non Autorisé</h1>
        <p class=\"error-message\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 73, $this->source); })()), "html", null, true);
        yield "</p>
        <div class=\"button-group\">
            <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"error-button secondary-button\">
                <i class=\"bi bi-house-door\"></i> Accueil
            </a>
            ";
        // line 78
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 79
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"error-button primary-button\">
                    <i class=\"bi bi-box-arrow-in-right\"></i> Se Connecter
                </a>
            ";
        }
        // line 83
        yield "        </div>
    </div>
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
        return "error/access_denied.html.twig";
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
        return array (  193 => 83,  185 => 79,  183 => 78,  177 => 75,  172 => 73,  164 => 67,  154 => 66,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accès Non Autorisé{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .error-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(rgba(var(--color-primary-rgb), 0.1), rgba(var(--color-primary-rgb), 0.1));
            padding: 40px 0;
        }
        .error-content {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 3rem;
            text-align: center;
            max-width: 600px;
            width: 90%;
        }
        .error-icon {
            font-size: 4rem;
            color: var(--color-primary);
            margin-bottom: 1.5rem;
        }
        .error-title {
            color: #012970;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        .error-message {
            color: #444444;
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 2rem;
        }
        .button-group {
            display: flex;
            gap: 1rem;
            justify-content: center;
        }
        .error-button {
            display: inline-block;
            padding: 0.75rem 2.5rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
        }
        .primary-button {
            background: var(--color-primary);
            color: #fff !important;
        }
        .secondary-button {
            background: #fff;
            color: var(--color-primary) !important;
            border: 2px solid var(--color-primary);
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"error-page\">
    <div class=\"error-content\">
        <div class=\"error-icon\">
            <i class=\"bi bi-shield-lock\"></i>
        </div>
        <h1 class=\"error-title\">Accès Non Autorisé</h1>
        <p class=\"error-message\">{{ message }}</p>
        <div class=\"button-group\">
            <a href=\"{{ path('app_home') }}\" class=\"error-button secondary-button\">
                <i class=\"bi bi-house-door\"></i> Accueil
            </a>
            {% if not app.user %}
                <a href=\"{{ path('app_login') }}\" class=\"error-button primary-button\">
                    <i class=\"bi bi-box-arrow-in-right\"></i> Se Connecter
                </a>
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}
", "error/access_denied.html.twig", "C:\\PIDEV\\PIDV-WEB3A19-Mouheb-User - Copy\\templates\\error\\access_denied.html.twig");
    }
}
