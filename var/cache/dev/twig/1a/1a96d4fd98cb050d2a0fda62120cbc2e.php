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

/* candidature/index.html.twig */
class __TwigTemplate_fd229d0b70a1bcdd1032e01d59fc8814 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/index.html.twig"));

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

        yield "Gestion des Candidatures";
        
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

        yield "Liste des Candidatures";
        
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
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css\" rel=\"stylesheet\" />
<style>
    :root {
        --primary-color: #4f46e5;
        --secondary-color: #dc2626;
        --primary-light: rgba(79, 70, 229, 0.1);
        --secondary-light: rgba(220, 38, 38, 0.1);
        --success-color: #10b981;
        --success-light: rgba(16, 185, 129, 0.1);
        --warning-color: #f59e0b;
        --warning-light: rgba(245, 158, 11, 0.1);
        --info-color: #0ea5e9;
        --info-light: rgba(14, 165, 233, 0.1);
        --danger-color: #dc2626;
        --danger-light: rgba(220, 38, 38, 0.1);
    }

    .card {
        border: none;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        background: #ffffff;
        transition: all 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: white;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        padding: 20px 25px;
    }

    .card-title {
        font-size: 1.75rem;
        font-weight: 700;
        color: #1e293b;
        margin: 0;
    }

    .search-container {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .search-form {
        flex-grow: 1;
        max-width: 400px;
    }

    .search-group {
        width: 100%;
        border-radius: 12px;
        overflow: hidden;
        background: #ffffff;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    .search-group:hover {
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
    }

    .search-select {
        border: none !important;
        border-radius: 0 !important;
        padding: 14px 18px;
        background-color: #f8f9fa;
        color: #495057;
        font-weight: 500;
        font-size: 0.95rem;
        transition: all 0.2s ease;
    }

    .search-select:focus {
        background-color: #f3f4f6;
        color: #1e293b;
    }

    .search-input {
        border: none !important;
        border-radius: 0 !important;
        padding: 14px 18px;
        background-color: #f8f9fa;
        font-size: 0.95rem;
        transition: all 0.2s ease;
    }

    .search-input:focus {
        background-color: #f3f4f6;
        color: #1e293b;
    }

    .search-btn {
        border: none !important;
        border-radius: 0 !important;
        padding: 14px 22px;
        background-color: var(--primary-color);
        transition: all 0.3s ease;
        font-size: 0.95rem;
        font-weight: 500;
    }

    .search-btn:hover {
        background-color: #4338ca;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(67, 56, 202, 0.2);
    }

    .table {
        width: 100%;
        margin-bottom: 0;
        color: #1e293b;
    }

    .table th {
        background-color: #f8f9fa;
        border-bottom-width: 1px;
        font-weight: 600;
        color: #4b5563;
        vertical-align: middle;
        padding: 15px;
        position: sticky;
        top: 0;
        z-index: 1;
    }

    .table tbody td {
        vertical-align: middle;
        padding: 15px;
        border-color: rgba(0, 0, 0, 0.03);
    }

    .table tbody tr:hover {
        background-color: rgba(79, 70, 229, 0.03);
    }

    .img-thumbnail {
        border-radius: 8px;
        border: 1px solid rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        max-width: 100px;
        height: auto;
    }

    .img-thumbnail:hover {
        transform: scale(1.05);
    }

    .action-buttons {
        display: flex;
        gap: 8px;
        justify-content: flex-end;
        align-items: center;
    }

    .action-buttons .btn {
        width: 36px;
        height: 36px;
        padding: 0;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: all 0.3s ease;
        border: none;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .action-buttons .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    }

    .action-buttons .btn i {
        font-size: 1.1rem;
        color: #fff;
    }

    .action-buttons .btn-info {
        background-color: #3b82f6;
    }

    .action-buttons .btn-info:hover {
        background-color: #2563eb;
    }

    .action-buttons .btn-warning {
        background-color: #f59e0b;
    }

    .action-buttons .btn-warning:hover {
        background-color: #d97706;
    }

    .action-buttons .btn-danger {
        background-color: #dc2626;
    }

    .action-buttons .btn-danger:hover {
        background-color: #b91c1c;
    }

    .sort-icons {
        display: inline-flex;
        flex-direction: column;
        margin-left: 4px;
        line-height: 0.5;
    }
    .sort-icons a {
        color: #6c757d;
        font-size: 12px;
        opacity: 0.5;
        transition: all 0.2s;
    }
    .sort-icons a:hover, .sort-icons a.active {
        color: #0d6efd;
        opacity: 1;
    }
    .sort-icons i {
        font-size: 10px;
    }

    @media (max-width: 768px) {
        .search-container {
            flex-direction: column;
        }
        
        .search-form {
            max-width: 100%;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 247
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 248
        yield "<div class=\"container-fluid py-4\">
    <div class=\"card\">
        <div class=\"card-header\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <h1 class=\"card-title\">Liste des Candidatures</h1>
                ";
        // line 253
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 253, $this->source); })()), "user", [], "any", false, false, false, 253)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 254
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_new", ["userId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 254, $this->source); })()), "user", [], "any", false, false, false, 254), "id", [], "any", false, false, false, 254), "missionId" => (isset($context["missionId"]) || array_key_exists("missionId", $context) ? $context["missionId"] : (function () { throw new RuntimeError('Variable "missionId" does not exist.', 254, $this->source); })())]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                        <i class=\"bi bi-plus-lg\"></i> Nouvelle Candidature
                    </a>
                ";
        } else {
            // line 258
            yield "                    <button disabled class=\"btn btn-primary\" title=\"Connectez-vous pour créer une candidature\">
                        <i class=\"bi bi-plus-lg\"></i> Nouvelle Candidature
                    </button>
                ";
        }
        // line 262
        yield "            </div>

            <div class=\"search-container mt-3\">
                <form method=\"get\" action=\"";
        // line 265
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_index");
        yield "\" class=\"search-form\">
                    <div class=\"search-group d-flex\">
                        <select name=\"search_by\" class=\"form-select search-select\">
                            <option value=\"mission\" ";
        // line 268
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 268, $this->source); })()), "request", [], "any", false, false, false, 268), "query", [], "any", false, false, false, 268), "get", ["search_by"], "method", false, false, false, 268) == "mission")) {
            yield "selected";
        }
        yield ">Mission</option>
                            <option value=\"user\" ";
        // line 269
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 269, $this->source); })()), "request", [], "any", false, false, false, 269), "query", [], "any", false, false, false, 269), "get", ["search_by"], "method", false, false, false, 269) == "user")) {
            yield "selected";
        }
        yield ">Utilisateur</option>
                            <option value=\"reponses\" ";
        // line 270
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 270, $this->source); })()), "request", [], "any", false, false, false, 270), "query", [], "any", false, false, false, 270), "get", ["search_by"], "method", false, false, false, 270) == "reponses")) {
            yield "selected";
        }
        yield ">Réponses</option>
                        </select>
                        <input type=\"text\" name=\"search\" class=\"form-control search-input\" placeholder=\"Rechercher...\" value=\"";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 272, $this->source); })()), "request", [], "any", false, false, false, 272), "query", [], "any", false, false, false, 272), "get", ["search"], "method", false, false, false, 272), "html", null, true);
        yield "\">
                        <button type=\"submit\" class=\"btn btn-primary search-btn\">
                            <i class=\"bi bi-search\"></i> Rechercher
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>Utilisateur</th>
                            <th>Mission</th>
                            <th>Image</th>
                            <th>
                                Réponses
                                <a href=\"";
        // line 291
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_index", ["sort" => "reponse_asc", "search" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 291, $this->source); })()), "request", [], "any", false, false, false, 291), "query", [], "any", false, false, false, 291), "get", ["search"], "method", false, false, false, 291), "search_by" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 291, $this->source); })()), "request", [], "any", false, false, false, 291), "query", [], "any", false, false, false, 291), "get", ["search_by"], "method", false, false, false, 291)]), "html", null, true);
        yield "\" 
                                   class=\"btn btn-link btn-sm p-0 text-decoration-none\">
                                    <i class=\"bi bi-arrow-up\"></i>
                                </a>
                                <a href=\"";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_index", ["sort" => "reponse_desc", "search" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 295, $this->source); })()), "request", [], "any", false, false, false, 295), "query", [], "any", false, false, false, 295), "get", ["search"], "method", false, false, false, 295), "search_by" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 295, $this->source); })()), "request", [], "any", false, false, false, 295), "query", [], "any", false, false, false, 295), "get", ["search_by"], "method", false, false, false, 295)]), "html", null, true);
        yield "\"
                                   class=\"btn btn-link btn-sm p-0 text-decoration-none\">
                                    <i class=\"bi bi-arrow-down\"></i>
                                </a>
                            </th>
                            <th>Motivation</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 305
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["candidatures"]) || array_key_exists("candidatures", $context) ? $context["candidatures"] : (function () { throw new RuntimeError('Variable "candidatures" does not exist.', 305, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["candidature"]) {
            // line 306
            yield "                            <tr>
                                <td data-label=\"Utilisateur\">
                                    ";
            // line 308
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 308)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 309
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 309), "prenom", [], "any", false, false, false, 309), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 309), "nom", [], "any", false, false, false, 309), "html", null, true);
                yield "
                                    ";
            } else {
                // line 311
                yield "                                        <span class=\"text-muted\">Utilisateur inconnu</span>
                                    ";
            }
            // line 313
            yield "                                </td>
                                <td data-label=\"Mission\">
                                    ";
            // line 315
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "mission", [], "any", false, false, false, 315)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 316
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "mission", [], "any", false, false, false, 316), "titre", [], "any", false, false, false, 316), "html", null, true);
                yield "
                                    ";
            } else {
                // line 318
                yield "                                        <span class=\"text-muted\">Mission supprimée</span>
                                    ";
            }
            // line 320
            yield "                                </td>
                                <td data-label=\"Image\">
                                    ";
            // line 322
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "image", [], "any", false, false, false, 322)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 323
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/candidatures/" . CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "image", [], "any", false, false, false, 323))), "html", null, true);
                yield "?";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "U"), "html", null, true);
                yield "\" 
                                             alt=\"Candidature\" 
                                             width=\"80\" 
                                             class=\"img-thumbnail\"
                                             style=\"max-height: 60px; object-fit: cover;\"
                                             onerror=\"this.src='";
                // line 328
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/candidatures/default-avatar.png"), "html", null, true);
                yield "?";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "U"), "html", null, true);
                yield "'\">
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                const img = document.querySelector('img[src=\"";
                // line 331
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/candidatures/" . CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "image", [], "any", false, false, false, 331))), "html", null, true);
                yield "\"]');
                                                if (img) {
                                                    img.onerror = function() {
                                                        this.src = '";
                // line 334
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/candidatures/default-avatar.png"), "html", null, true);
                yield "';
                                                    };
                                                }
                                            });
                                        </script>
                                    ";
            } else {
                // line 340
                yield "                                        <span class=\"text-muted\">Aucune image</span>
                                    ";
            }
            // line 342
            yield "                                </td>
                                <td data-label=\"Réponses\">";
            // line 343
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "reponseQuestions", [], "any", false, false, false, 343)) > 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "reponseQuestions", [], "any", false, false, false, 343), 0, 30) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "reponseQuestions", [], "any", false, false, false, 343), "html", null, true)));
            yield "</td>
                                <td data-label=\"Motivation\">";
            // line 344
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "lettreMotivation", [], "any", false, false, false, 344)) > 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "lettreMotivation", [], "any", false, false, false, 344), 0, 30) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "lettreMotivation", [], "any", false, false, false, 344), "html", null, true)));
            yield "</td>
                                <td data-label=\"Actions\" class=\"text-center\">
                                    <div class=\"action-buttons\">
                                        <a href=\"";
            // line 347
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 347)]), "html", null, true);
            yield "\" class=\"btn btn-info\" title=\"Voir\">
                                            <i class=\"bi bi-eye\"></i>
                                        </a>
                                        <a href=\"";
            // line 350
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 350)]), "html", null, true);
            yield "\" class=\"btn btn-warning\" title=\"Modifier\">
                                            <i class=\"bi bi-pencil\"></i>
                                        </a>
                                        <form action=\"";
            // line 353
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 353)]), "html", null, true);
            yield "\" method=\"post\" style=\"display:inline;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 354
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 354))), "html", null, true);
            yield "\">
                                            <button type=\"submit\" class=\"btn btn-danger\" title=\"Supprimer\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette candidature ?');\">
                                                <i class=\"bi bi-trash\"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 362
        if (!$context['_iterated']) {
            // line 363
            yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center\">
                                    <div class=\"alert alert-info my-3\">
                                        ";
            // line 366
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 366, $this->source); })()), "request", [], "any", false, false, false, 366), "query", [], "any", false, false, false, 366), "get", ["search"], "method", false, false, false, 366)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 367
                yield "                                            Aucune candidature trouvée pour \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 367, $this->source); })()), "request", [], "any", false, false, false, 367), "query", [], "any", false, false, false, 367), "get", ["search"], "method", false, false, false, 367), "html", null, true);
                yield "\"
                                        ";
            } else {
                // line 369
                yield "                                            Aucune candidature disponible
                                        ";
            }
            // line 371
            yield "                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['candidature'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 375
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 383
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 384
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
// Prevent multiple event listeners
let isInitialized = false;

document.addEventListener('DOMContentLoaded', function() {
    if (isInitialized) return;
    isInitialized = true;

    // Animation pour les boutons d'action
    const buttons = document.querySelectorAll('.action-buttons .btn');
    buttons.forEach(btn => {
        btn.addEventListener('mouseover', function() {
            this.style.transform = 'scale(1.1)';
        });
        btn.addEventListener('mouseout', function() {
            this.style.transform = '';
        });
    });
    
    // Gestion des erreurs d'image avec débogage
    const images = document.querySelectorAll('.img-thumbnail');
    images.forEach(img => {
        img.onerror = function() {
            console.log('Image error for:', this.src);
            this.src = '";
        // line 409
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/candidatures/default-avatar.png"), "html", null, true);
        yield "';
        };
    });

    // Debug: Log when page is loaded
    console.log('Page loaded successfully');
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
        return "candidature/index.html.twig";
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
        return array (  662 => 409,  634 => 384,  624 => 383,  610 => 375,  601 => 371,  597 => 369,  591 => 367,  589 => 366,  584 => 363,  582 => 362,  569 => 354,  565 => 353,  559 => 350,  553 => 347,  547 => 344,  543 => 343,  540 => 342,  536 => 340,  527 => 334,  521 => 331,  513 => 328,  502 => 323,  500 => 322,  496 => 320,  492 => 318,  486 => 316,  484 => 315,  480 => 313,  476 => 311,  468 => 309,  466 => 308,  462 => 306,  457 => 305,  444 => 295,  437 => 291,  415 => 272,  408 => 270,  402 => 269,  396 => 268,  390 => 265,  385 => 262,  379 => 258,  371 => 254,  369 => 253,  362 => 248,  352 => 247,  105 => 7,  95 => 6,  78 => 4,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Candidatures{% endblock %}
{% block page_title %}Liste des Candidatures{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css\" rel=\"stylesheet\" />
<style>
    :root {
        --primary-color: #4f46e5;
        --secondary-color: #dc2626;
        --primary-light: rgba(79, 70, 229, 0.1);
        --secondary-light: rgba(220, 38, 38, 0.1);
        --success-color: #10b981;
        --success-light: rgba(16, 185, 129, 0.1);
        --warning-color: #f59e0b;
        --warning-light: rgba(245, 158, 11, 0.1);
        --info-color: #0ea5e9;
        --info-light: rgba(14, 165, 233, 0.1);
        --danger-color: #dc2626;
        --danger-light: rgba(220, 38, 38, 0.1);
    }

    .card {
        border: none;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        background: #ffffff;
        transition: all 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: white;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        padding: 20px 25px;
    }

    .card-title {
        font-size: 1.75rem;
        font-weight: 700;
        color: #1e293b;
        margin: 0;
    }

    .search-container {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .search-form {
        flex-grow: 1;
        max-width: 400px;
    }

    .search-group {
        width: 100%;
        border-radius: 12px;
        overflow: hidden;
        background: #ffffff;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    .search-group:hover {
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
    }

    .search-select {
        border: none !important;
        border-radius: 0 !important;
        padding: 14px 18px;
        background-color: #f8f9fa;
        color: #495057;
        font-weight: 500;
        font-size: 0.95rem;
        transition: all 0.2s ease;
    }

    .search-select:focus {
        background-color: #f3f4f6;
        color: #1e293b;
    }

    .search-input {
        border: none !important;
        border-radius: 0 !important;
        padding: 14px 18px;
        background-color: #f8f9fa;
        font-size: 0.95rem;
        transition: all 0.2s ease;
    }

    .search-input:focus {
        background-color: #f3f4f6;
        color: #1e293b;
    }

    .search-btn {
        border: none !important;
        border-radius: 0 !important;
        padding: 14px 22px;
        background-color: var(--primary-color);
        transition: all 0.3s ease;
        font-size: 0.95rem;
        font-weight: 500;
    }

    .search-btn:hover {
        background-color: #4338ca;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(67, 56, 202, 0.2);
    }

    .table {
        width: 100%;
        margin-bottom: 0;
        color: #1e293b;
    }

    .table th {
        background-color: #f8f9fa;
        border-bottom-width: 1px;
        font-weight: 600;
        color: #4b5563;
        vertical-align: middle;
        padding: 15px;
        position: sticky;
        top: 0;
        z-index: 1;
    }

    .table tbody td {
        vertical-align: middle;
        padding: 15px;
        border-color: rgba(0, 0, 0, 0.03);
    }

    .table tbody tr:hover {
        background-color: rgba(79, 70, 229, 0.03);
    }

    .img-thumbnail {
        border-radius: 8px;
        border: 1px solid rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        max-width: 100px;
        height: auto;
    }

    .img-thumbnail:hover {
        transform: scale(1.05);
    }

    .action-buttons {
        display: flex;
        gap: 8px;
        justify-content: flex-end;
        align-items: center;
    }

    .action-buttons .btn {
        width: 36px;
        height: 36px;
        padding: 0;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: all 0.3s ease;
        border: none;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .action-buttons .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    }

    .action-buttons .btn i {
        font-size: 1.1rem;
        color: #fff;
    }

    .action-buttons .btn-info {
        background-color: #3b82f6;
    }

    .action-buttons .btn-info:hover {
        background-color: #2563eb;
    }

    .action-buttons .btn-warning {
        background-color: #f59e0b;
    }

    .action-buttons .btn-warning:hover {
        background-color: #d97706;
    }

    .action-buttons .btn-danger {
        background-color: #dc2626;
    }

    .action-buttons .btn-danger:hover {
        background-color: #b91c1c;
    }

    .sort-icons {
        display: inline-flex;
        flex-direction: column;
        margin-left: 4px;
        line-height: 0.5;
    }
    .sort-icons a {
        color: #6c757d;
        font-size: 12px;
        opacity: 0.5;
        transition: all 0.2s;
    }
    .sort-icons a:hover, .sort-icons a.active {
        color: #0d6efd;
        opacity: 1;
    }
    .sort-icons i {
        font-size: 10px;
    }

    @media (max-width: 768px) {
        .search-container {
            flex-direction: column;
        }
        
        .search-form {
            max-width: 100%;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"card\">
        <div class=\"card-header\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <h1 class=\"card-title\">Liste des Candidatures</h1>
                {% if app.user %}
                    <a href=\"{{ path('app_candidature_new', {'userId': app.user.id, 'missionId': missionId}) }}\" class=\"btn btn-primary\">
                        <i class=\"bi bi-plus-lg\"></i> Nouvelle Candidature
                    </a>
                {% else %}
                    <button disabled class=\"btn btn-primary\" title=\"Connectez-vous pour créer une candidature\">
                        <i class=\"bi bi-plus-lg\"></i> Nouvelle Candidature
                    </button>
                {% endif %}
            </div>

            <div class=\"search-container mt-3\">
                <form method=\"get\" action=\"{{ path('app_candidature_index') }}\" class=\"search-form\">
                    <div class=\"search-group d-flex\">
                        <select name=\"search_by\" class=\"form-select search-select\">
                            <option value=\"mission\" {% if app.request.query.get('search_by') == 'mission' %}selected{% endif %}>Mission</option>
                            <option value=\"user\" {% if app.request.query.get('search_by') == 'user' %}selected{% endif %}>Utilisateur</option>
                            <option value=\"reponses\" {% if app.request.query.get('search_by') == 'reponses' %}selected{% endif %}>Réponses</option>
                        </select>
                        <input type=\"text\" name=\"search\" class=\"form-control search-input\" placeholder=\"Rechercher...\" value=\"{{ app.request.query.get('search') }}\">
                        <button type=\"submit\" class=\"btn btn-primary search-btn\">
                            <i class=\"bi bi-search\"></i> Rechercher
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>Utilisateur</th>
                            <th>Mission</th>
                            <th>Image</th>
                            <th>
                                Réponses
                                <a href=\"{{ path('app_candidature_index', {'sort': 'reponse_asc', 'search': app.request.query.get('search'), 'search_by': app.request.query.get('search_by')}) }}\" 
                                   class=\"btn btn-link btn-sm p-0 text-decoration-none\">
                                    <i class=\"bi bi-arrow-up\"></i>
                                </a>
                                <a href=\"{{ path('app_candidature_index', {'sort': 'reponse_desc', 'search': app.request.query.get('search'), 'search_by': app.request.query.get('search_by')}) }}\"
                                   class=\"btn btn-link btn-sm p-0 text-decoration-none\">
                                    <i class=\"bi bi-arrow-down\"></i>
                                </a>
                            </th>
                            <th>Motivation</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for candidature in candidatures %}
                            <tr>
                                <td data-label=\"Utilisateur\">
                                    {% if candidature.user %}
                                        {{ candidature.user.prenom }} {{ candidature.user.nom }}
                                    {% else %}
                                        <span class=\"text-muted\">Utilisateur inconnu</span>
                                    {% endif %}
                                </td>
                                <td data-label=\"Mission\">
                                    {% if candidature.mission %}
                                        {{ candidature.mission.titre }}
                                    {% else %}
                                        <span class=\"text-muted\">Mission supprimée</span>
                                    {% endif %}
                                </td>
                                <td data-label=\"Image\">
                                    {% if candidature.image %}
                                        <img src=\"{{ asset('uploads/candidatures/' ~ candidature.image) }}?{{ 'now'|date('U') }}\" 
                                             alt=\"Candidature\" 
                                             width=\"80\" 
                                             class=\"img-thumbnail\"
                                             style=\"max-height: 60px; object-fit: cover;\"
                                             onerror=\"this.src='{{ asset('uploads/candidatures/default-avatar.png') }}?{{ 'now'|date('U') }}'\">
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                const img = document.querySelector('img[src=\"{{ asset('uploads/candidatures/' ~ candidature.image) }}\"]');
                                                if (img) {
                                                    img.onerror = function() {
                                                        this.src = '{{ asset('uploads/candidatures/default-avatar.png') }}';
                                                    };
                                                }
                                            });
                                        </script>
                                    {% else %}
                                        <span class=\"text-muted\">Aucune image</span>
                                    {% endif %}
                                </td>
                                <td data-label=\"Réponses\">{{ candidature.reponseQuestions|length > 30 ? candidature.reponseQuestions|slice(0, 30) ~ '...' : candidature.reponseQuestions }}</td>
                                <td data-label=\"Motivation\">{{ candidature.lettreMotivation|length > 30 ? candidature.lettreMotivation|slice(0, 30) ~ '...' : candidature.lettreMotivation }}</td>
                                <td data-label=\"Actions\" class=\"text-center\">
                                    <div class=\"action-buttons\">
                                        <a href=\"{{ path('app_candidature_show', {'id': candidature.id}) }}\" class=\"btn btn-info\" title=\"Voir\">
                                            <i class=\"bi bi-eye\"></i>
                                        </a>
                                        <a href=\"{{ path('app_candidature_edit', {'id': candidature.id}) }}\" class=\"btn btn-warning\" title=\"Modifier\">
                                            <i class=\"bi bi-pencil\"></i>
                                        </a>
                                        <form action=\"{{ path('app_candidature_delete', {'id': candidature.id}) }}\" method=\"post\" style=\"display:inline;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ candidature.id) }}\">
                                            <button type=\"submit\" class=\"btn btn-danger\" title=\"Supprimer\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette candidature ?');\">
                                                <i class=\"bi bi-trash\"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"6\" class=\"text-center\">
                                    <div class=\"alert alert-info my-3\">
                                        {% if app.request.query.get('search') %}
                                            Aucune candidature trouvée pour \"{{ app.request.query.get('search') }}\"
                                        {% else %}
                                            Aucune candidature disponible
                                        {% endif %}
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
// Prevent multiple event listeners
let isInitialized = false;

document.addEventListener('DOMContentLoaded', function() {
    if (isInitialized) return;
    isInitialized = true;

    // Animation pour les boutons d'action
    const buttons = document.querySelectorAll('.action-buttons .btn');
    buttons.forEach(btn => {
        btn.addEventListener('mouseover', function() {
            this.style.transform = 'scale(1.1)';
        });
        btn.addEventListener('mouseout', function() {
            this.style.transform = '';
        });
    });
    
    // Gestion des erreurs d'image avec débogage
    const images = document.querySelectorAll('.img-thumbnail');
    images.forEach(img => {
        img.onerror = function() {
            console.log('Image error for:', this.src);
            this.src = '{{ asset('uploads/candidatures/default-avatar.png') }}';
        };
    });

    // Debug: Log when page is loaded
    console.log('Page loaded successfully');
});
</script>
{% endblock %}", "candidature/index.html.twig", "/Users/moetezjebari/Desktop/PIDV-WEB3A19-Mouheb-User - Copy/Downloads/PIDV-WEB3A19-Mouheb-User - Copy/Downloads/PIDV-WEB3A19-Mouheb-User - Copy/templates/candidature/index.html.twig");
    }
}
