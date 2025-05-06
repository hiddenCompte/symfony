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

/* mission/_actions.html.twig */
class __TwigTemplate_2d2ec09fd12e8e5d6f6cea7c0c8564b7 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mission/_actions.html.twig"));

        // line 2
        yield "<div class=\"btn-group\">
    <a href=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mission_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-info\" title=\"Voir\">
        <i class=\"fas fa-eye\"></i>
    </a>
    <a href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mission_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-warning\" title=\"Modifier\">
        <i class=\"fas fa-edit\"></i>
    </a>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "mission/_actions.html.twig";
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
        return array (  54 => 6,  48 => 3,  45 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/mission/_actions.html.twig #}
<div class=\"btn-group\">
    <a href=\"{{ path('app_mission_show', {'id': mission.id}) }}\" class=\"btn btn-sm btn-info\" title=\"Voir\">
        <i class=\"fas fa-eye\"></i>
    </a>
    <a href=\"{{ path('app_mission_edit', {'id': mission.id}) }}\" class=\"btn btn-sm btn-warning\" title=\"Modifier\">
        <i class=\"fas fa-edit\"></i>
    </a>
</div>", "mission/_actions.html.twig", "C:\\PIDEV\\PIDV-WEB3A19-Mouheb-User - Copy\\templates\\mission\\_actions.html.twig");
    }
}
