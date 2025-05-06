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

/* candidature/new.html.twig */
class __TwigTemplate_e9ae38fbc65da3c3d528ff3ab4a5bd81 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/new.html.twig"));

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

        yield "Nouvelle Candidature";
        
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
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css\" rel=\"stylesheet\">
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<style>
    :root {
        --primary-color: #4f46e5;
        --secondary-color: #ef4444;
        --primary-light: rgba(79, 70, 229, 0.1);
        --secondary-light: #dc2626;
    }

    /* Style général du conteneur */
    .form-container {
        background-color: white;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        padding: 30px;
        margin-top: 30px;
    }
    
    /* Titre */
    .page-title {
        font-size: 2rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 30px;
        position: relative;
        padding-bottom: 15px;
    }
    
    .page-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 4px;
        background-color: var(--primary-color);
        border-radius: 2px;
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
    .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        background-color: #4338ca;
        border-color: #4338ca;
        transform: translateY(-2px);
    }
    
    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .btn-secondary:hover {
        background-color: #5a6268;
        border-color: #545b62;
        transform: translateY(-2px);
    }
    
    /* Zone de texte */
    textarea.form-control {
        min-height: 120px;
    }
    
    /* Upload de fichier */
    .custom-file {
        position: relative;
        display: inline-block;
        width: 100%;
    }
    
    .custom-file-input {
        position: relative;
        z-index: 2;
        width: 100%;
        height: calc(2.25rem + 2px);
        margin: 0;
        opacity: 0;
    }
    
    .custom-file-label {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1;
        height: calc(2.25rem + 2px);
        padding: 0.375rem 0.75rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .form-container {
            padding: 20px;
        }
        
        .page-title {
            font-size: 1.5rem;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 158
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 159
        yield "<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"form-container\">
                <h1 class=\"page-title\">Ajouter une nouvelle Candidature</h1>

                ";
        // line 166
        yield "                ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        // line 168
        yield "
                
                <div class=\"form-group\">
                    ";
        // line 171
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "mission", [], "any", false, false, false, 171), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 172
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "mission", [], "any", false, false, false, 172), 'widget', ["attr" => ["class" => "form-control select2", "style" => "width: 100%;"]]);
        // line 175
        yield "
                    ";
        // line 176
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "mission", [], "any", false, false, false, 176), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 180
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "lettreMotivation", [], "any", false, false, false, 180), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 181
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "lettreMotivation", [], "any", false, false, false, 181), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre lettre de motivation", "rows" => 8]]);
        // line 185
        yield "
                    ";
        // line 186
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "lettreMotivation", [], "any", false, false, false, 186), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 190
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "reponseQuestions", [], "any", false, false, false, 190), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 191
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "reponseQuestions", [], "any", false, false, false, 191), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Vos réponses aux questions", "rows" => 4]]);
        // line 195
        yield "
                    ";
        // line 196
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "reponseQuestions", [], "any", false, false, false, 196), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 200
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "image", [], "any", false, false, false, 200), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <div class=\"custom-file\">
                        ";
        // line 202
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "image", [], "any", false, false, false, 202), 'widget', ["attr" => ["class" => "custom-file-input", "lang" => "fr"]]);
        // line 205
        yield "
                        <label class=\"custom-file-label\" for=\"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "image", [], "any", false, false, false, 206), "vars", [], "any", false, false, false, 206), "id", [], "any", false, false, false, 206), "html", null, true);
        yield "\">
                            Choisir un fichier...
                        </label>
                    </div>
                    <small class=\"form-text\">Téléchargez une image (JPG, PNG ou GIF).</small>
                    ";
        // line 211
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 211, $this->source); })()), "image", [], "any", false, false, false, 211), 'errors');
        yield "
                </div>

                <div class=\"form-group mt-4\">
                    <button type=\"submit\" class=\"btn btn-primary mr-3\">
                        <i class=\"bi bi-send\"></i> Soumettre la candidature
                    </button>
                    <a href=\"";
        // line 218
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_index");
        yield "\" class=\"btn btn-secondary\">
                        <i class=\"bi bi-arrow-left\"></i> Retour à la liste
                    </a>
                </div>

                ";
        // line 223
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 230
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 231
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script>
// Ensure icons are loaded before rendering
if (document.fonts) {
    document.fonts.ready.then(function() {
        // Icons should be visible now
    });
} else {
    // Fallback for older browsers
    setTimeout(function() {
        // Icons should be visible now
    }, 1000);
}
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    \$('.select2').select2({
        theme: 'bootstrap4',
        width: '100%'
    });
});
</script>
<script>
// Script pour afficher le nom du fichier sélectionné
document.addEventListener('DOMContentLoaded', function() {
    // Gestion de l'affichage du nom du fichier
    const fileInputs = document.querySelectorAll('.custom-file-input');
    fileInputs.forEach(input => {
        input.addEventListener('change', function(e) {
            let fileName = '';
            if (this.files && this.files.length > 1) {
                fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
            } else {
                fileName = e.target.value.split('\\\\').pop();
            }
            
            if (fileName) {
                const label = this.nextElementSibling;
                label.textContent = fileName;
                label.classList.add('selected');
            }
        });
    });
    
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
        return "candidature/new.html.twig";
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
        return array (  380 => 231,  370 => 230,  356 => 223,  348 => 218,  338 => 211,  330 => 206,  327 => 205,  325 => 202,  320 => 200,  313 => 196,  310 => 195,  308 => 191,  304 => 190,  297 => 186,  294 => 185,  292 => 181,  288 => 180,  281 => 176,  278 => 175,  276 => 172,  272 => 171,  267 => 168,  264 => 166,  256 => 159,  246 => 158,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvelle Candidature{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css\" rel=\"stylesheet\">
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<style>
    :root {
        --primary-color: #4f46e5;
        --secondary-color: #ef4444;
        --primary-light: rgba(79, 70, 229, 0.1);
        --secondary-light: #dc2626;
    }

    /* Style général du conteneur */
    .form-container {
        background-color: white;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        padding: 30px;
        margin-top: 30px;
    }
    
    /* Titre */
    .page-title {
        font-size: 2rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 30px;
        position: relative;
        padding-bottom: 15px;
    }
    
    .page-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 4px;
        background-color: var(--primary-color);
        border-radius: 2px;
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
    .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        background-color: #4338ca;
        border-color: #4338ca;
        transform: translateY(-2px);
    }
    
    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .btn-secondary:hover {
        background-color: #5a6268;
        border-color: #545b62;
        transform: translateY(-2px);
    }
    
    /* Zone de texte */
    textarea.form-control {
        min-height: 120px;
    }
    
    /* Upload de fichier */
    .custom-file {
        position: relative;
        display: inline-block;
        width: 100%;
    }
    
    .custom-file-input {
        position: relative;
        z-index: 2;
        width: 100%;
        height: calc(2.25rem + 2px);
        margin: 0;
        opacity: 0;
    }
    
    .custom-file-label {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1;
        height: calc(2.25rem + 2px);
        padding: 0.375rem 0.75rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .form-container {
            padding: 20px;
        }
        
        .page-title {
            font-size: 1.5rem;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"form-container\">
                <h1 class=\"page-title\">Ajouter une nouvelle Candidature</h1>

                {# Formulaire de candidature #}
                {{ form_start(form, { 
                    'attr': { 'class': 'needs-validation', 'novalidate': 'novalidate' }
                }) }}
                
                <div class=\"form-group\">
                    {{ form_label(form.mission, null, { 'label_attr': { 'class': 'form-label' } }) }}
                    {{ form_widget(form.mission, { 'attr': { 
                        'class': 'form-control select2',
                        'style': 'width: 100%;'
                    } }) }}
                    {{ form_errors(form.mission) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.lettreMotivation, null, { 'label_attr': { 'class': 'form-label' } }) }}
                    {{ form_widget(form.lettreMotivation, { 'attr': { 
                        'class': 'form-control',
                        'placeholder': 'Votre lettre de motivation',
                        'rows': 8
                    } }) }}
                    {{ form_errors(form.lettreMotivation) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.reponseQuestions, null, { 'label_attr': { 'class': 'form-label' } }) }}
                    {{ form_widget(form.reponseQuestions, { 'attr': { 
                        'class': 'form-control',
                        'placeholder': 'Vos réponses aux questions',
                        'rows': 4
                    } }) }}
                    {{ form_errors(form.reponseQuestions) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.image, null, { 'label_attr': { 'class': 'form-label' } }) }}
                    <div class=\"custom-file\">
                        {{ form_widget(form.image, { 'attr': { 
                            'class': 'custom-file-input',
                            'lang': 'fr'
                        } }) }}
                        <label class=\"custom-file-label\" for=\"{{ form.image.vars.id }}\">
                            Choisir un fichier...
                        </label>
                    </div>
                    <small class=\"form-text\">Téléchargez une image (JPG, PNG ou GIF).</small>
                    {{ form_errors(form.image) }}
                </div>

                <div class=\"form-group mt-4\">
                    <button type=\"submit\" class=\"btn btn-primary mr-3\">
                        <i class=\"bi bi-send\"></i> Soumettre la candidature
                    </button>
                    <a href=\"{{ path('app_candidature_index') }}\" class=\"btn btn-secondary\">
                        <i class=\"bi bi-arrow-left\"></i> Retour à la liste
                    </a>
                </div>

                {{ form_end(form) }}
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script>
// Ensure icons are loaded before rendering
if (document.fonts) {
    document.fonts.ready.then(function() {
        // Icons should be visible now
    });
} else {
    // Fallback for older browsers
    setTimeout(function() {
        // Icons should be visible now
    }, 1000);
}
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    \$('.select2').select2({
        theme: 'bootstrap4',
        width: '100%'
    });
});
</script>
<script>
// Script pour afficher le nom du fichier sélectionné
document.addEventListener('DOMContentLoaded', function() {
    // Gestion de l'affichage du nom du fichier
    const fileInputs = document.querySelectorAll('.custom-file-input');
    fileInputs.forEach(input => {
        input.addEventListener('change', function(e) {
            let fileName = '';
            if (this.files && this.files.length > 1) {
                fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
            } else {
                fileName = e.target.value.split('\\\\').pop();
            }
            
            if (fileName) {
                const label = this.nextElementSibling;
                label.textContent = fileName;
                label.classList.add('selected');
            }
        });
    });
    
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
});
</script>
{% endblock %}", "candidature/new.html.twig", "/Users/moetezjebari/Desktop/PIDV-WEB3A19-Mouheb-User - Copy/Downloads/PIDV-WEB3A19-Mouheb-User - Copy/Downloads/PIDV-WEB3A19-Mouheb-User - Copy/templates/candidature/new.html.twig");
    }
}
