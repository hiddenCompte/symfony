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

/* mission/new.html.twig */
class __TwigTemplate_4476a751e5f9280d9370eeef6aa77663 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mission/new.html.twig"));

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

        yield "Nouvelle Mission";
        
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

        yield "Créer une Mission";
        
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
        background-color: white;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        padding: 20px 25px;
    }
    
    .card-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: #333;
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
    
    .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }
    
    .btn-primary:hover {
        background-color: #4338ca;
        border-color: #4338ca;
        transform: translateY(-2px);
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
        
        .btn {
            padding: 8px 15px;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 142
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 143
        yield "<div class=\"container-fluid\">
    <div class=\"card\">
        <div class=\"card-header\">
            <h3 class=\"card-title\"><i class=\"bi bi-plus-circle\"></i> Nouvelle Mission</h3>
        </div>
        
        <div class=\"card-body\">
            ";
        // line 150
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
            
            <div class=\"form-group\">
                ";
        // line 153
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "titre", [], "any", false, false, false, 153), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 154
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "titre", [], "any", false, false, false, 154), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Titre de la mission"]]);
        // line 157
        yield "
                ";
        // line 158
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "titre", [], "any", false, false, false, 158), 'errors');
        yield "
            </div>
            
            <div class=\"form-group\">
                ";
        // line 162
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "description", [], "any", false, false, false, 162), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 163
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "description", [], "any", false, false, false, 163), 'widget', ["attr" => ["class" => "form-control", "rows" => 4, "placeholder" => "Description détaillée de la mission"]]);
        // line 167
        yield "
                ";
        // line 168
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "description", [], "any", false, false, false, 168), 'errors');
        yield "
            </div>
            
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        ";
        // line 174
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "duree", [], "any", false, false, false, 174), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                        ";
        // line 175
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), "duree", [], "any", false, false, false, 175), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Durée en jours"]]);
        // line 178
        yield "
                        ";
        // line 179
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "duree", [], "any", false, false, false, 179), 'errors');
        yield "
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        ";
        // line 184
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "budget", [], "any", false, false, false, 184), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                        ";
        // line 185
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "budget", [], "any", false, false, false, 185), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Budget en €"]]);
        // line 188
        yield "
                        ";
        // line 189
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "budget", [], "any", false, false, false, 189), 'errors');
        yield "
                    </div>
                </div>
            </div>
            
            <div class=\"form-group\">
                ";
        // line 195
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "competance", [], "any", false, false, false, 195), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 196
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "competance", [], "any", false, false, false, 196), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Compétences requises (séparées par /)"]]);
        // line 199
        yield "
                <small class=\"form-text\">Séparez les compétences par des / (ex: PHP/JavaScript/HTML)</small>
                ";
        // line 201
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "competance", [], "any", false, false, false, 201), 'errors');
        yield "
            </div>
            
            <div class=\"form-group\">
                ";
        // line 205
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "nomEntreprise", [], "any", false, false, false, 205), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 206
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "nomEntreprise", [], "any", false, false, false, 206), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom de l'entreprise"]]);
        // line 209
        yield "
                ";
        // line 210
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "nomEntreprise", [], "any", false, false, false, 210), 'errors');
        yield "
            </div>
            
            <div class=\"form-group\">
                <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"bi bi-check-circle\"></i> Créer la mission
                </button>
            </div>
            
            ";
        // line 219
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 219, $this->source); })()), 'form_end');
        yield "
        </div>
        
        <div class=\"card-footer\">
            <a href=\"";
        // line 223
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mission_index");
        yield "\" class=\"btn btn-default\">
                <i class=\"bi bi-arrow-left\"></i> Retour à la liste
            </a>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 231
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 232
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
        return "mission/new.html.twig";
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
        return array (  411 => 232,  401 => 231,  386 => 223,  379 => 219,  367 => 210,  364 => 209,  362 => 206,  358 => 205,  351 => 201,  347 => 199,  345 => 196,  341 => 195,  332 => 189,  329 => 188,  327 => 185,  323 => 184,  315 => 179,  312 => 178,  310 => 175,  306 => 174,  297 => 168,  294 => 167,  292 => 163,  288 => 162,  281 => 158,  278 => 157,  276 => 154,  272 => 153,  266 => 150,  257 => 143,  247 => 142,  105 => 7,  95 => 6,  78 => 4,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvelle Mission{% endblock %}
{% block page_title %}Créer une Mission{% endblock %}

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
        background-color: white;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        padding: 20px 25px;
    }
    
    .card-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: #333;
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
    
    .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }
    
    .btn-primary:hover {
        background-color: #4338ca;
        border-color: #4338ca;
        transform: translateY(-2px);
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
        
        .btn {
            padding: 8px 15px;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"card\">
        <div class=\"card-header\">
            <h3 class=\"card-title\"><i class=\"bi bi-plus-circle\"></i> Nouvelle Mission</h3>
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
                    <i class=\"bi bi-check-circle\"></i> Créer la mission
                </button>
            </div>
            
            {{ form_end(form) }}
        </div>
        
        <div class=\"card-footer\">
            <a href=\"{{ path('app_mission_index') }}\" class=\"btn btn-default\">
                <i class=\"bi bi-arrow-left\"></i> Retour à la liste
            </a>
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
{% endblock %}", "mission/new.html.twig", "/Users/moetezjebari/Desktop/PIDV-WEB3A19-Mouheb-User - Copy/Downloads/PIDV-WEB3A19-Mouheb-User - Copy/Downloads/PIDV-WEB3A19-Mouheb-User - Copy/templates/mission/new.html.twig");
    }
}
