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

/* candidature/edit.html.twig */
class __TwigTemplate_6c9ba43dcfe462bed1d6db44982743ff extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/edit.html.twig"));

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

        yield "Modifier Candidature #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        
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

        yield "Modification de Candidature";
        
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
    
    /* Image preview */
    .image-preview {
        margin-top: 15px;
    }
    
    .image-preview img {
        max-width: 200px;
        max-height: 200px;
        border-radius: 8px;
        border: 1px solid #eee;
        margin-top: 10px;
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
    
    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
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

    // line 174
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 175
        yield "<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"form-container\">
                <h1 class=\"page-title\">Modifier la candidature</h1>

                ";
        // line 181
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        // line 183
        yield "
                
                <div class=\"form-group\">
                    ";
        // line 186
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "mission", [], "any", false, false, false, 186), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 187
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "mission", [], "any", false, false, false, 187), 'widget', ["attr" => ["class" => "form-control select2", "style" => "width: 100%;"]]);
        // line 190
        yield "
                    ";
        // line 191
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "mission", [], "any", false, false, false, 191), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 195
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "lettreMotivation", [], "any", false, false, false, 195), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 196
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "lettreMotivation", [], "any", false, false, false, 196), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre lettre de motivation", "rows" => 8]]);
        // line 200
        yield "
                    ";
        // line 201
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "lettreMotivation", [], "any", false, false, false, 201), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 205
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "image", [], "any", false, false, false, 205), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <div class=\"custom-file\">
                        ";
        // line 207
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "image", [], "any", false, false, false, 207), 'widget', ["attr" => ["class" => "custom-file-input", "accept" => "image/*"]]);
        // line 210
        yield "
                        <label class=\"custom-file-label\" for=\"";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 211, $this->source); })()), "image", [], "any", false, false, false, 211), "vars", [], "any", false, false, false, 211), "id", [], "any", false, false, false, 211), "html", null, true);
        yield "\">Choisir un fichier</label>
                    </div>
                    ";
        // line 213
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), "image", [], "any", false, false, false, 213), 'errors');
        yield "
                    ";
        // line 214
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 214, $this->source); })()), "image", [], "any", false, false, false, 214)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 215
            yield "                        <div class=\"image-preview\">
                            <p>Image actuelle :</p>
                            <img src=\"";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/candidatures/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 217, $this->source); })()), "image", [], "any", false, false, false, 217))), "html", null, true);
            yield "\" 
                                 alt=\"Image actuelle\" 
                                 class=\"img-thumbnail\">
                        </div>
                    ";
        }
        // line 222
        yield "                </div>

                <div class=\"form-group\">
                    ";
        // line 225
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), "reponseQuestions", [], "any", false, false, false, 225), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 226
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 226, $this->source); })()), "reponseQuestions", [], "any", false, false, false, 226), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Vos réponses aux questions", "rows" => 4]]);
        // line 230
        yield "
                    ";
        // line 231
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), "reponseQuestions", [], "any", false, false, false, 231), 'errors');
        yield "
                </div>

                <div class=\"form-group mt-4\">
                    <button type=\"submit\" class=\"btn btn-primary mr-3\">
                        <i class=\"bi bi-check-circle\"></i> Enregistrer
                    </button>
                    <a href=\"";
        // line 238
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_index");
        yield "\" class=\"btn btn-secondary\">
                        <i class=\"bi bi-arrow-left\"></i> Annuler
                    </a>
                </div>

                ";
        // line 243
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 250
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 251
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
    const fileInput = document.querySelector('.custom-file-input');
    if (fileInput) {
        fileInput.addEventListener('change', function(e) {
            let fileName = '';
            if (this.files && this.files.length > 0) {
                fileName = e.target.value.split('\\\\').pop();
            }
            
            if (fileName) {
                const label = this.nextElementSibling;
                label.textContent = fileName;
                label.classList.add('selected');
            }
        });
    }
    
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
        return "candidature/edit.html.twig";
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
        return array (  426 => 251,  416 => 250,  402 => 243,  394 => 238,  384 => 231,  381 => 230,  379 => 226,  375 => 225,  370 => 222,  362 => 217,  358 => 215,  356 => 214,  352 => 213,  347 => 211,  344 => 210,  342 => 207,  337 => 205,  330 => 201,  327 => 200,  325 => 196,  321 => 195,  314 => 191,  311 => 190,  309 => 187,  305 => 186,  300 => 183,  298 => 181,  290 => 175,  280 => 174,  106 => 7,  96 => 6,  79 => 4,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Candidature #{{ candidature.id }}{% endblock %}
{% block page_title %}Modification de Candidature{% endblock %}

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
    
    /* Image preview */
    .image-preview {
        margin-top: 15px;
    }
    
    .image-preview img {
        max-width: 200px;
        max-height: 200px;
        border-radius: 8px;
        border: 1px solid #eee;
        margin-top: 10px;
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
    
    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
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
                <h1 class=\"page-title\">Modifier la candidature</h1>

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
                    {{ form_label(form.image, null, { 'label_attr': { 'class': 'form-label' } }) }}
                    <div class=\"custom-file\">
                        {{ form_widget(form.image, { 'attr': { 
                            'class': 'custom-file-input',
                            'accept': 'image/*'
                        } }) }}
                        <label class=\"custom-file-label\" for=\"{{ form.image.vars.id }}\">Choisir un fichier</label>
                    </div>
                    {{ form_errors(form.image) }}
                    {% if candidature.image %}
                        <div class=\"image-preview\">
                            <p>Image actuelle :</p>
                            <img src=\"{{ asset('uploads/candidatures/' ~ candidature.image) }}\" 
                                 alt=\"Image actuelle\" 
                                 class=\"img-thumbnail\">
                        </div>
                    {% endif %}
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

                <div class=\"form-group mt-4\">
                    <button type=\"submit\" class=\"btn btn-primary mr-3\">
                        <i class=\"bi bi-check-circle\"></i> Enregistrer
                    </button>
                    <a href=\"{{ path('app_candidature_index') }}\" class=\"btn btn-secondary\">
                        <i class=\"bi bi-arrow-left\"></i> Annuler
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
    const fileInput = document.querySelector('.custom-file-input');
    if (fileInput) {
        fileInput.addEventListener('change', function(e) {
            let fileName = '';
            if (this.files && this.files.length > 0) {
                fileName = e.target.value.split('\\\\').pop();
            }
            
            if (fileName) {
                const label = this.nextElementSibling;
                label.textContent = fileName;
                label.classList.add('selected');
            }
        });
    }
    
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
{% endblock %}", "candidature/edit.html.twig", "C:\\PIDEV\\PIDV-WEB3A19-Mouheb-User - Copy\\templates\\candidature\\edit.html.twig");
    }
}
