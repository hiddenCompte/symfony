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

/* mission/edit.html.twig */
class __TwigTemplate_cbc3a1dff922341e51c532c07057e95d extends Template
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
            'page_title' => [$this, 'block_page_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mission/edit.html.twig"));

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

        yield "Modifier Mission - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "Modification de Mission";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    :root {
        --primary-color: #4f46e5;
        --secondary-color: #ef4444;
        --primary-light: rgba(79, 70, 229, 0.1);
        --secondary-light: #dc2626;
    }

    /* Style général de la carte */
    .card {
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        border: none;
        overflow: hidden;
        margin-top: 30px;
    }
    
    /* En-tête de la carte */
    .card-header {
        background-color: #ffc107;
        color: #212529;
        padding: 20px 25px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }
    
    .card-title {
        font-size: 1.5rem;
        font-weight: 600;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    /* Corps de la carte */
    .card-body {
        padding: 25px;
    }
    
    /* Pied de page de la carte */
    .card-footer {
        background-color: #f8f9fa;
        border-top: 1px solid rgba(0, 0, 0, 0.05);
        padding: 15px 25px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    /* Formulaire */
    .form-group {
        margin-bottom: 25px;
    }
    
    .form-label {
        font-weight: 500;
        color: #495057;
        margin-bottom: 8px;
        display: block;
    }
    
    .form-control {
        border-radius: 8px;
        border: 1px solid #e0e0e0;
        padding: 12px 15px;
        transition: all 0.3s ease;
    }
    
    .form-control:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 0.25rem rgba(79, 70, 229, 0.1);
    }
    
    .form-text {
        font-size: 0.85rem;
        color: #6c757d;
        margin-top: 5px;
    }
    
    /* Boutons */
    .btn {
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
    
    .btn-default {
        background-color: #f8f9fa;
        border-color: #e0e0e0;
        color: #333;
    }
    
    .btn-default:hover {
        background-color: #e9ecef;
        transform: translateY(-2px);
    }
    
    .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }
    
    .btn-primary:hover {
        background-color: #4338ca;
        border-color: #4338ca;
        transform: translateY(-2px);
    }
    
    .btn-danger {
        background-color: var(--secondary-color);
        border-color: var(--secondary-color);
    }
    
    .btn-danger:hover {
        background-color: var(--secondary-light);
        border-color: var(--secondary-light);
        transform: translateY(-2px);
    }
    
    /* Zone de texte */
    textarea.form-control {
        min-height: 120px;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .card-header, .card-body, .card-footer {
            padding: 15px;
        }
        
        .card-title {
            font-size: 1.3rem;
        }
        
        .card-footer {
            flex-direction: column;
            gap: 15px;
        }
        
        .btn {
            width: 100%;
            justify-content: center;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 159
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 160
        yield "<div class=\"container-fluid\">
    <div class=\"card\">
        <div class=\"card-header\">
            <h3 class=\"card-title\"><i class=\"bi bi-pencil-square\"></i> Modifier Mission</h3>
        </div>
        
        <div class=\"card-body\">
            ";
        // line 167
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
            
            <div class=\"form-group\">
                ";
        // line 170
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "titre", [], "any", false, false, false, 170), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 171
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "titre", [], "any", false, false, false, 171), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Titre de la mission"]]);
        // line 174
        yield "
                ";
        // line 175
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), "titre", [], "any", false, false, false, 175), 'errors');
        yield "
            </div>
            
            <div class=\"form-group\">
                ";
        // line 179
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "description", [], "any", false, false, false, 179), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 180
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "description", [], "any", false, false, false, 180), 'widget', ["attr" => ["class" => "form-control", "rows" => 4, "placeholder" => "Description détaillée de la mission"]]);
        // line 184
        yield "
                ";
        // line 185
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "description", [], "any", false, false, false, 185), 'errors');
        yield "
            </div>
            
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        ";
        // line 191
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "duree", [], "any", false, false, false, 191), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                        ";
        // line 192
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "duree", [], "any", false, false, false, 192), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Durée en jours"]]);
        // line 195
        yield "
                        ";
        // line 196
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "duree", [], "any", false, false, false, 196), 'errors');
        yield "
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        ";
        // line 201
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "budget", [], "any", false, false, false, 201), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                        ";
        // line 202
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "budget", [], "any", false, false, false, 202), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Budget en €"]]);
        // line 205
        yield "
                        ";
        // line 206
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "budget", [], "any", false, false, false, 206), 'errors');
        yield "
                    </div>
                </div>
            </div>
            
            <div class=\"form-group\">
                ";
        // line 212
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "competance", [], "any", false, false, false, 212), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 213
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), "competance", [], "any", false, false, false, 213), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Compétences requises (séparées par /)"]]);
        // line 216
        yield "
                <small class=\"form-text\">Séparez les compétences par des / (ex: PHP/JavaScript/HTML)</small>
                ";
        // line 218
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 218, $this->source); })()), "competance", [], "any", false, false, false, 218), 'errors');
        yield "
            </div>
            
            <div class=\"form-group\">
                ";
        // line 222
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 222, $this->source); })()), "nomEntreprise", [], "any", false, false, false, 222), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 223
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), "nomEntreprise", [], "any", false, false, false, 223), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom de l'entreprise"]]);
        // line 226
        yield "
                ";
        // line 227
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 227, $this->source); })()), "nomEntreprise", [], "any", false, false, false, 227), 'errors');
        yield "
            </div>
            
            <div class=\"form-group\">
                <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"bi bi-check-circle\"></i> Mettre à jour
                </button>
            </div>
            
            ";
        // line 236
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 236, $this->source); })()), 'form_end');
        yield "
        </div>
        
        <div class=\"card-footer\">
            <a href=\"";
        // line 240
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mission_index");
        yield "\" class=\"btn btn-default\">
                <i class=\"bi bi-arrow-left\"></i> Retour à la liste
            </a>
            
            <form method=\"post\" action=\"";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mission_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 244, $this->source); })()), "id", [], "any", false, false, false, 244)]), "html", null, true);
        yield "\" 
                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette mission ?');\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 246, $this->source); })()), "id", [], "any", false, false, false, 246))), "html", null, true);
        yield "\">
                <button class=\"btn btn-danger\">
                    <i class=\"bi bi-trash\"></i> Supprimer
                </button>
            </form>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 256
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 257
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Validation du formulaire
    const forms = document.querySelectorAll('.needs-validation');
    forms.forEach(form => {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            
            form.classList.add('was-validated');
        }, false);
    });
    
    // Animation des boutons
    const buttons = document.querySelectorAll('.btn');
    buttons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
        });
        button.addEventListener('mouseleave', function() {
            this.style.transform = '';
        });
    });
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "mission/edit.html.twig";
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
        return array (  443 => 257,  433 => 256,  416 => 246,  411 => 244,  404 => 240,  397 => 236,  385 => 227,  382 => 226,  380 => 223,  376 => 222,  369 => 218,  365 => 216,  363 => 213,  359 => 212,  350 => 206,  347 => 205,  345 => 202,  341 => 201,  333 => 196,  330 => 195,  328 => 192,  324 => 191,  315 => 185,  312 => 184,  310 => 180,  306 => 179,  299 => 175,  296 => 174,  294 => 171,  290 => 170,  284 => 167,  275 => 160,  265 => 159,  106 => 7,  96 => 6,  79 => 4,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Mission - {{ mission.titre }}{% endblock %}
{% block page_title %}Modification de Mission{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    :root {
        --primary-color: #4f46e5;
        --secondary-color: #ef4444;
        --primary-light: rgba(79, 70, 229, 0.1);
        --secondary-light: #dc2626;
    }

    /* Style général de la carte */
    .card {
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        border: none;
        overflow: hidden;
        margin-top: 30px;
    }
    
    /* En-tête de la carte */
    .card-header {
        background-color: #ffc107;
        color: #212529;
        padding: 20px 25px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }
    
    .card-title {
        font-size: 1.5rem;
        font-weight: 600;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    /* Corps de la carte */
    .card-body {
        padding: 25px;
    }
    
    /* Pied de page de la carte */
    .card-footer {
        background-color: #f8f9fa;
        border-top: 1px solid rgba(0, 0, 0, 0.05);
        padding: 15px 25px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    /* Formulaire */
    .form-group {
        margin-bottom: 25px;
    }
    
    .form-label {
        font-weight: 500;
        color: #495057;
        margin-bottom: 8px;
        display: block;
    }
    
    .form-control {
        border-radius: 8px;
        border: 1px solid #e0e0e0;
        padding: 12px 15px;
        transition: all 0.3s ease;
    }
    
    .form-control:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 0.25rem rgba(79, 70, 229, 0.1);
    }
    
    .form-text {
        font-size: 0.85rem;
        color: #6c757d;
        margin-top: 5px;
    }
    
    /* Boutons */
    .btn {
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
    
    .btn-default {
        background-color: #f8f9fa;
        border-color: #e0e0e0;
        color: #333;
    }
    
    .btn-default:hover {
        background-color: #e9ecef;
        transform: translateY(-2px);
    }
    
    .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }
    
    .btn-primary:hover {
        background-color: #4338ca;
        border-color: #4338ca;
        transform: translateY(-2px);
    }
    
    .btn-danger {
        background-color: var(--secondary-color);
        border-color: var(--secondary-color);
    }
    
    .btn-danger:hover {
        background-color: var(--secondary-light);
        border-color: var(--secondary-light);
        transform: translateY(-2px);
    }
    
    /* Zone de texte */
    textarea.form-control {
        min-height: 120px;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .card-header, .card-body, .card-footer {
            padding: 15px;
        }
        
        .card-title {
            font-size: 1.3rem;
        }
        
        .card-footer {
            flex-direction: column;
            gap: 15px;
        }
        
        .btn {
            width: 100%;
            justify-content: center;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"card\">
        <div class=\"card-header\">
            <h3 class=\"card-title\"><i class=\"bi bi-pencil-square\"></i> Modifier Mission</h3>
        </div>
        
        <div class=\"card-body\">
            {{ form_start(form, { 'attr': { 'class': 'needs-validation', 'novalidate': 'novalidate' } }) }}
            
            <div class=\"form-group\">
                {{ form_label(form.titre, null, { 'label_attr': { 'class': 'form-label' } }) }}
                {{ form_widget(form.titre, { 'attr': { 
                    'class': 'form-control',
                    'placeholder': 'Titre de la mission'
                } }) }}
                {{ form_errors(form.titre) }}
            </div>
            
            <div class=\"form-group\">
                {{ form_label(form.description, null, { 'label_attr': { 'class': 'form-label' } }) }}
                {{ form_widget(form.description, { 'attr': { 
                    'class': 'form-control',
                    'rows': 4,
                    'placeholder': 'Description détaillée de la mission'
                } }) }}
                {{ form_errors(form.description) }}
            </div>
            
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        {{ form_label(form.duree, null, { 'label_attr': { 'class': 'form-label' } }) }}
                        {{ form_widget(form.duree, { 'attr': { 
                            'class': 'form-control',
                            'placeholder': 'Durée en jours'
                        } }) }}
                        {{ form_errors(form.duree) }}
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        {{ form_label(form.budget, null, { 'label_attr': { 'class': 'form-label' } }) }}
                        {{ form_widget(form.budget, { 'attr': { 
                            'class': 'form-control',
                            'placeholder': 'Budget en €'
                        } }) }}
                        {{ form_errors(form.budget) }}
                    </div>
                </div>
            </div>
            
            <div class=\"form-group\">
                {{ form_label(form.competance, null, { 'label_attr': { 'class': 'form-label' } }) }}
                {{ form_widget(form.competance, { 'attr': { 
                    'class': 'form-control',
                    'placeholder': 'Compétences requises (séparées par /)'
                } }) }}
                <small class=\"form-text\">Séparez les compétences par des / (ex: PHP/JavaScript/HTML)</small>
                {{ form_errors(form.competance) }}
            </div>
            
            <div class=\"form-group\">
                {{ form_label(form.nomEntreprise, null, { 'label_attr': { 'class': 'form-label' } }) }}
                {{ form_widget(form.nomEntreprise, { 'attr': { 
                    'class': 'form-control',
                    'placeholder': 'Nom de l\\'entreprise'
                } }) }}
                {{ form_errors(form.nomEntreprise) }}
            </div>
            
            <div class=\"form-group\">
                <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"bi bi-check-circle\"></i> Mettre à jour
                </button>
            </div>
            
            {{ form_end(form) }}
        </div>
        
        <div class=\"card-footer\">
            <a href=\"{{ path('app_mission_index') }}\" class=\"btn btn-default\">
                <i class=\"bi bi-arrow-left\"></i> Retour à la liste
            </a>
            
            <form method=\"post\" action=\"{{ path('app_mission_delete', {'id': mission.id}) }}\" 
                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette mission ?');\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ mission.id) }}\">
                <button class=\"btn btn-danger\">
                    <i class=\"bi bi-trash\"></i> Supprimer
                </button>
            </form>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Validation du formulaire
    const forms = document.querySelectorAll('.needs-validation');
    forms.forEach(form => {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            
            form.classList.add('was-validated');
        }, false);
    });
    
    // Animation des boutons
    const buttons = document.querySelectorAll('.btn');
    buttons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
        });
        button.addEventListener('mouseleave', function() {
            this.style.transform = '';
        });
    });
});
</script>
{% endblock %}", "mission/edit.html.twig", "C:\\PIDEV\\PIDV-WEB3A19-Mouheb-User - Copy\\templates\\mission\\edit.html.twig");
    }
}
