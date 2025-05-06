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

/* candidature/show.html.twig */
class __TwigTemplate_4025cfbd68a9f6d34eacc1ff1ee67e69 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/show.html.twig"));

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

        yield "Candidature de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "prenom", [], "any", false, false, false, 3), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "nom", [], "any", false, false, false, 3), "html", null, true);
        
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
    :root {
        --primary-color: #4f46e5;
        --secondary-color: #ef4444;
        --primary-light: rgba(79, 70, 229, 0.1);
        --secondary-light: #dc2626;
    }

    /* Style général */
    .detail-container {
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
    
    /* Tableau */
    .detail-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
    }
    
    .detail-table th {
        width: 25%;
        padding: 15px;
        text-align: left;
        font-weight: 600;
        color: #495057;
        background-color: #f8f9fa;
        border-bottom: 1px solid #e9ecef;
    }
    
    .detail-table td {
        padding: 15px;
        border-bottom: 1px solid #e9ecef;
        vertical-align: middle;
    }
    
    .detail-table tr:last-child td,
    .detail-table tr:last-child th {
        border-bottom: none;
    }
    
    /* Images */
    .img-thumbnail {
        border-radius: 8px;
        border: 1px solid rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease;
        max-width: 100%;
        height: auto;
    }
    
    .img-thumbnail:hover {
        transform: scale(1.05);
    }
    
    .qr-code-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
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
    
    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
        color: white;
    }
    
    .btn-secondary:hover {
        background-color: #5a6268;
        border-color: #545b62;
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
    
    .btn-outline-primary {
        border-color: var(--primary-color);
        color: var(--primary-color);
    }
    
    .btn-outline-primary:hover {
        background-color: var(--primary-light);
    }
    
    .btn-outline-success {
        border-color: #198754;
        color: #198754;
    }
    
    .btn-outline-success:hover {
        background-color: rgba(25, 135, 84, 0.1);
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
    
    /* Actions */
    .action-buttons {
        display: flex;
        gap: 10px;
        margin-top: 30px;
        flex-wrap: wrap;
    }
    
    /* Texte */
    .text-muted {
        color: #6c757d !important;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .detail-container {
            padding: 20px;
        }
        
        .detail-table {
            display: block;
            overflow-x: auto;
        }
        
        .page-title {
            font-size: 1.5rem;
        }
        
        .action-buttons {
            flex-direction: column;
        }
        
        .action-buttons .btn {
            width: 100%;
            justify-content: center;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 197
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 198
        yield "<div class=\"container\">
    <div class=\"detail-container\">
        <h1 class=\"page-title\">Candidature de ";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 200, $this->source); })()), "user", [], "any", false, false, false, 200), "prenom", [], "any", false, false, false, 200), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 200, $this->source); })()), "user", [], "any", false, false, false, 200), "nom", [], "any", false, false, false, 200), "html", null, true);
        yield "</h1>

        <table class=\"detail-table\">
            <tbody>
                <tr>
                    <th>Utilisateur</th>
                    <td>";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 206, $this->source); })()), "user", [], "any", false, false, false, 206), "prenom", [], "any", false, false, false, 206), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 206, $this->source); })()), "user", [], "any", false, false, false, 206), "nom", [], "any", false, false, false, 206), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Mission associée</th>
                    <td>
                        ";
        // line 211
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 211, $this->source); })()), "mission", [], "any", false, false, false, 211)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 212
            yield "                            <div class=\"d-flex flex-column\">
                                <span class=\"mb-2\">";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 213, $this->source); })()), "mission", [], "any", false, false, false, 213), "titre", [], "any", false, false, false, 213), "html", null, true);
            yield "</span>
                                <div class=\"d-flex gap-2\">
                                    <a href=\"";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_qrcode", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 215, $this->source); })()), "id", [], "any", false, false, false, 215)]), "html", null, true);
            yield "\" 
                                       class=\"btn btn-outline-primary\">
                                        <i class=\"bi bi-qr-code\"></i> Voir QR Code
                                    </a>
                                    <a href=\"";
            // line 219
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mission_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 219, $this->source); })()), "mission", [], "any", false, false, false, 219), "id", [], "any", false, false, false, 219)]), "html", null, true);
            yield "\"
                                       class=\"btn btn-outline-success\">
                                        <i class=\"bi bi-eye\"></i> Voir Mission
                                    </a>
                                </div>
                            </div>
                        ";
        } else {
            // line 226
            yield "                            <span class=\"text-muted\">Aucune mission associée</span>
                        ";
        }
        // line 228
        yield "                    </td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td>
                        ";
        // line 233
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 233, $this->source); })()), "image", [], "any", false, false, false, 233)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 234
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/candidatures/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 234, $this->source); })()), "image", [], "any", false, false, false, 234))), "html", null, true);
            yield "\" 
                                 width=\"200\" 
                                 class=\"img-thumbnail\"
                                 style=\"max-height: 200px; object-fit: cover;\">
                        ";
        } else {
            // line 239
            yield "                            <span class=\"text-muted\">Aucune image</span>
                        ";
        }
        // line 241
        yield "                    </td>
                </tr>
                <tr>
                    <th>Réponses</th>
                    <td>";
        // line 245
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "reponseQuestions", [], "any", true, true, false, 245) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 245, $this->source); })()), "reponseQuestions", [], "any", false, false, false, 245)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 245, $this->source); })()), "reponseQuestions", [], "any", false, false, false, 245), "html", null, true)) : ("Aucune réponse"));
        yield "</td>
                </tr>
                <tr>
                    <th>Lettre de motivation</th>
                    <td>";
        // line 249
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "lettreMotivation", [], "any", true, true, false, 249) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 249, $this->source); })()), "lettreMotivation", [], "any", false, false, false, 249)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 249, $this->source); })()), "lettreMotivation", [], "any", false, false, false, 249), "html", null, true)) : ("Aucune lettre de motivation"));
        yield "</td>
                </tr>
            </tbody>
        </table>

        <div class=\"action-buttons mt-4\">
            <a href=\"";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 255, $this->source); })()), "id", [], "any", false, false, false, 255)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                <i class=\"bi bi-pencil\"></i> Modifier
            </a>
            <a href=\"";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_qrcode", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 258, $this->source); })()), "id", [], "any", false, false, false, 258)]), "html", null, true);
        yield "\" class=\"btn btn-info\">
                <i class=\"bi bi-qr-code\"></i> QR Code
            </a>
            <form method=\"post\" action=\"";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 261, $this->source); })()), "id", [], "any", false, false, false, 261)]), "html", null, true);
        yield "\" style=\"display: inline-block;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 262, $this->source); })()), "id", [], "any", false, false, false, 262))), "html", null, true);
        yield "\">
                <button class=\"btn btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette candidature ?');\">
                    <i class=\"bi bi-trash\"></i> Supprimer
                </button>
            </form>
            <a href=\"";
        // line 267
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_index");
        yield "\" class=\"btn btn-secondary\">
                <i class=\"bi bi-arrow-left\"></i> Retour
            </a>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 275
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 276
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animation des images
    const images = document.querySelectorAll('.img-thumbnail');
    images.forEach(img => {
        img.addEventListener('mouseover', function() {
            this.style.transform = 'scale(1.05)';
        });
        img.addEventListener('mouseout', function() {
            this.style.transform = '';
        });
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
        return "candidature/show.html.twig";
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
        return array (  447 => 276,  437 => 275,  422 => 267,  414 => 262,  410 => 261,  404 => 258,  398 => 255,  389 => 249,  382 => 245,  376 => 241,  372 => 239,  363 => 234,  361 => 233,  354 => 228,  350 => 226,  340 => 219,  333 => 215,  328 => 213,  325 => 212,  323 => 211,  313 => 206,  302 => 200,  298 => 198,  288 => 197,  90 => 6,  80 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Candidature de {{ candidature.user.prenom }} {{ candidature.user.nom }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    :root {
        --primary-color: #4f46e5;
        --secondary-color: #ef4444;
        --primary-light: rgba(79, 70, 229, 0.1);
        --secondary-light: #dc2626;
    }

    /* Style général */
    .detail-container {
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
    
    /* Tableau */
    .detail-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
    }
    
    .detail-table th {
        width: 25%;
        padding: 15px;
        text-align: left;
        font-weight: 600;
        color: #495057;
        background-color: #f8f9fa;
        border-bottom: 1px solid #e9ecef;
    }
    
    .detail-table td {
        padding: 15px;
        border-bottom: 1px solid #e9ecef;
        vertical-align: middle;
    }
    
    .detail-table tr:last-child td,
    .detail-table tr:last-child th {
        border-bottom: none;
    }
    
    /* Images */
    .img-thumbnail {
        border-radius: 8px;
        border: 1px solid rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease;
        max-width: 100%;
        height: auto;
    }
    
    .img-thumbnail:hover {
        transform: scale(1.05);
    }
    
    .qr-code-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
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
    
    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
        color: white;
    }
    
    .btn-secondary:hover {
        background-color: #5a6268;
        border-color: #545b62;
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
    
    .btn-outline-primary {
        border-color: var(--primary-color);
        color: var(--primary-color);
    }
    
    .btn-outline-primary:hover {
        background-color: var(--primary-light);
    }
    
    .btn-outline-success {
        border-color: #198754;
        color: #198754;
    }
    
    .btn-outline-success:hover {
        background-color: rgba(25, 135, 84, 0.1);
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
    
    /* Actions */
    .action-buttons {
        display: flex;
        gap: 10px;
        margin-top: 30px;
        flex-wrap: wrap;
    }
    
    /* Texte */
    .text-muted {
        color: #6c757d !important;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .detail-container {
            padding: 20px;
        }
        
        .detail-table {
            display: block;
            overflow-x: auto;
        }
        
        .page-title {
            font-size: 1.5rem;
        }
        
        .action-buttons {
            flex-direction: column;
        }
        
        .action-buttons .btn {
            width: 100%;
            justify-content: center;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"detail-container\">
        <h1 class=\"page-title\">Candidature de {{ candidature.user.prenom }} {{ candidature.user.nom }}</h1>

        <table class=\"detail-table\">
            <tbody>
                <tr>
                    <th>Utilisateur</th>
                    <td>{{ candidature.user.prenom }} {{ candidature.user.nom }}</td>
                </tr>
                <tr>
                    <th>Mission associée</th>
                    <td>
                        {% if candidature.mission %}
                            <div class=\"d-flex flex-column\">
                                <span class=\"mb-2\">{{ candidature.mission.titre }}</span>
                                <div class=\"d-flex gap-2\">
                                    <a href=\"{{ path('app_candidature_qrcode', {'id': candidature.id}) }}\" 
                                       class=\"btn btn-outline-primary\">
                                        <i class=\"bi bi-qr-code\"></i> Voir QR Code
                                    </a>
                                    <a href=\"{{ path('app_mission_show', {'id': candidature.mission.id}) }}\"
                                       class=\"btn btn-outline-success\">
                                        <i class=\"bi bi-eye\"></i> Voir Mission
                                    </a>
                                </div>
                            </div>
                        {% else %}
                            <span class=\"text-muted\">Aucune mission associée</span>
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td>
                        {% if candidature.image %}
                            <img src=\"{{ asset('uploads/candidatures/' ~ candidature.image) }}\" 
                                 width=\"200\" 
                                 class=\"img-thumbnail\"
                                 style=\"max-height: 200px; object-fit: cover;\">
                        {% else %}
                            <span class=\"text-muted\">Aucune image</span>
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Réponses</th>
                    <td>{{ candidature.reponseQuestions ?? 'Aucune réponse' }}</td>
                </tr>
                <tr>
                    <th>Lettre de motivation</th>
                    <td>{{ candidature.lettreMotivation ?? 'Aucune lettre de motivation' }}</td>
                </tr>
            </tbody>
        </table>

        <div class=\"action-buttons mt-4\">
            <a href=\"{{ path('app_candidature_edit', {'id': candidature.id}) }}\" class=\"btn btn-warning\">
                <i class=\"bi bi-pencil\"></i> Modifier
            </a>
            <a href=\"{{ path('app_candidature_qrcode', {'id': candidature.id}) }}\" class=\"btn btn-info\">
                <i class=\"bi bi-qr-code\"></i> QR Code
            </a>
            <form method=\"post\" action=\"{{ path('app_candidature_delete', {'id': candidature.id}) }}\" style=\"display: inline-block;\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ candidature.id) }}\">
                <button class=\"btn btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette candidature ?');\">
                    <i class=\"bi bi-trash\"></i> Supprimer
                </button>
            </form>
            <a href=\"{{ path('app_candidature_index') }}\" class=\"btn btn-secondary\">
                <i class=\"bi bi-arrow-left\"></i> Retour
            </a>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animation des images
    const images = document.querySelectorAll('.img-thumbnail');
    images.forEach(img => {
        img.addEventListener('mouseover', function() {
            this.style.transform = 'scale(1.05)';
        });
        img.addEventListener('mouseout', function() {
            this.style.transform = '';
        });
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
{% endblock %}", "candidature/show.html.twig", "C:\\PIDEV\\PIDV-WEB3A19-Mouheb-User - Copy\\templates\\candidature\\show.html.twig");
    }
}
