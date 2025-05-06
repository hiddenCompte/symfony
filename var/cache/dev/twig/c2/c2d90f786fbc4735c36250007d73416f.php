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

/* mission/index.html.twig */
class __TwigTemplate_acaae3bc2f09811f5d1a033d41a2d6cf extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mission/index.html.twig"));

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

        yield "Gestion des Missions";
        
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

        yield "Liste des Missions";
        
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
    }
    
    /* Barre de recherche et boutons */
    .input-group {
        max-width: 300px;
    }
    
    .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }
    
    .btn-primary:hover {
        background-color: #4338ca;
        border-color: #4338ca;
    }
    
    .btn-outline-primary {
        color: var(--primary-color);
        border-color: var(--primary-color);
    }
    
    .btn-outline-primary:hover {
        background-color: var(--primary-light);
    }
    
    /* Tableau des missions */
    .table {
        margin-bottom: 0;
        width: 100%;
    }
    
    .table thead th {
        background-color: #f8f9fa;
        border-bottom-width: 1px;
        font-weight: 600;
        color: #495057;
        vertical-align: middle;
        padding: 15px;
        position: sticky;
        top: 0;
    }
    
    .table tbody td {
        vertical-align: middle;
        padding: 15px;
        border-color: rgba(0, 0, 0, 0.03);
    }
    
    .table tbody tr:hover {
        background-color: rgba(79, 70, 229, 0.03);
    }
    
    /* Badges de compétences */
    .badge {
        font-weight: 500;
        padding: 5px 10px;
        margin: 2px;
        display: inline-block;
        border-radius: 4px;
        font-size: 0.8rem;
    }
    
    .badge-info {
        background-color: var(--primary-light);
        color: var(--primary-color);
    }
    
    /* Boutons d'action */
    .action-buttons {
        white-space: nowrap;
    }
    
    .action-buttons .btn {
        width: 32px;
        height: 32px;
        padding: 0;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: all 0.2s ease;
        margin-right: 5px;
    }
    
    .action-buttons .btn-info {
        background-color: rgba(13, 110, 253, 0.1);
        border-color: transparent;
        color: #0d6efd;
    }
    
    .action-buttons .btn-warning {
        background-color: rgba(255, 193, 7, 0.1);
        border-color: transparent;
        color: #ffc107;
    }
    
    .action-buttons .btn-delete {
        background-color: rgba(220, 53, 69, 0.1);
        border-color: transparent;
        color: #dc3545;
    }
    
    .action-buttons .btn:hover {
        transform: scale(1.1);
    }
    
    /* Message quand pas de missions */
    .alert-info {
        background-color: rgba(79, 70, 229, 0.1);
        border-color: rgba(79, 70, 229, 0.2);
        color: #4f46e5;
    }
    
    /* Pagination */
    .pagination {
        justify-content: center;
        margin-top: 20px;
    }
    
    .page-item.active .page-link {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }
    
    .page-link {
        color: var(--primary-color);
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .card-header {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .card-tools {
            width: 100%;
            margin-top: 15px;
        }
        
        .input-group {
            max-width: 100%;
        }
        
        .table-responsive {
            border: none;
        }
        
        .table thead {
            display: none;
        }
        
        .table, .table tbody, .table tr, .table td {
            display: block;
            width: 100%;
        }
        
        .table tr {
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        
        .table td {
            text-align: right;
            padding-left: 50%;
            position: relative;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .table td::before {
            content: attr(data-label);
            position: absolute;
            left: 15px;
            width: 45%;
            padding-right: 15px;
            font-weight: 600;
            text-align: left;
            color: #495057;
        }
        
        .action-buttons {
            justify-content: flex-end;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 226
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 227
        yield "<div class=\"container-fluid\">
    <div class=\"card\">
        <div class=\"card-header\">
            <div class=\"d-flex flex-column flex-md-row justify-content-between align-items-md-center\">
                <h3 class=\"card-title\">Toutes les missions</h3>
                <div class=\"card-tools d-flex flex-column flex-md-row\">
                    <form method=\"get\" action=\"";
        // line 233
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mission_index");
        yield "\" class=\"form-inline mb-2 mb-md-0 mr-md-2\">
                        <div class=\"input-group input-group-sm\">
                            <input type=\"text\" 
                                   name=\"search\" 
                                   class=\"form-control\" 
                                   placeholder=\"Rechercher par entreprise...\"
                                   value=\"";
        // line 239
        yield (((array_key_exists("search_term", $context) &&  !(null === $context["search_term"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["search_term"], "html", null, true)) : (""));
        yield "\">
                            <div class=\"input-group-append\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"bi bi-search\"></i>
                                </button>
                                ";
        // line 244
        if ((($tmp = (isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 244, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 245
            yield "                                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mission_index");
            yield "\" class=\"btn btn-secondary\">
                                    <i class=\"bi bi-x\"></i>
                                </a>
                                ";
        }
        // line 249
        yield "                            </div>
                        </div>
                    </form>
                    <a href=\"";
        // line 252
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mission_new");
        yield "\" class=\"btn btn-primary\">
                        <i class=\"bi bi-plus\"></i> Nouvelle Mission
                    </a>
                </div>
            </div>
        </div>
        
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead class=\"thead-light\">
                        <tr>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Durée</th>
                            <th>Budget</th>
                            <th>Date Publication</th>
                            <th>Compétences</th>
                            <th>Entreprise</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 275
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["missions"]) || array_key_exists("missions", $context) ? $context["missions"] : (function () { throw new RuntimeError('Variable "missions" does not exist.', 275, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
            // line 276
            yield "                        <tr>
                            <td data-label=\"Titre\">";
            // line 277
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "titre", [], "any", false, false, false, 277), "html", null, true);
            yield "</td>
                            <td data-label=\"Description\">";
            // line 278
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "description", [], "any", false, false, false, 278)) > 50)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "description", [], "any", false, false, false, 278), 0, 50) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "description", [], "any", false, false, false, 278), "html", null, true)));
            yield "</td>
                            <td data-label=\"Durée\">";
            // line 279
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "duree", [], "any", false, false, false, 279), "html", null, true);
            yield " jours</td>
                            <td data-label=\"Budget\">";
            // line 280
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "budget", [], "any", false, false, false, 280), "html", null, true);
            yield " €</td>
                            <td data-label=\"Date Pub\">";
            // line 281
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "datePub", [], "any", false, false, false, 281)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "datePub", [], "any", false, false, false, 281), "d/m/Y"), "html", null, true)) : (""));
            yield "</td>
                            <td data-label=\"Compétences\">
                                ";
            // line 283
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "competance", [], "any", false, false, false, 283)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 284
                yield "                                    ";
                $context["competences"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "competance", [], "any", false, false, false, 284), "/");
                // line 285
                yield "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["competences"]) || array_key_exists("competences", $context) ? $context["competences"] : (function () { throw new RuntimeError('Variable "competences" does not exist.', 285, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
                    // line 286
                    yield "                                        ";
                    if ((($tmp = Twig\Extension\CoreExtension::trim($context["competence"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 287
                        yield "                                            <span class=\"badge badge-info\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim($context["competence"]), "html", null, true);
                        yield "</span>
                                        ";
                    }
                    // line 289
                    yield "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['competence'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 290
                yield "                                ";
            }
            // line 291
            yield "                            </td>
                            <td data-label=\"Entreprise\">";
            // line 292
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "nomEntreprise", [], "any", false, false, false, 292), "html", null, true);
            yield "</td>
                            <td data-label=\"Actions\" class=\"text-center\">
                                <div class=\"d-flex justify-content-center action-buttons\">
                                    <a href=\"";
            // line 295
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mission_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 295)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\" title=\"Voir\">
                                        <i class=\"bi bi-eye\"></i>
                                    </a>
                                    <a href=\"";
            // line 298
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mission_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 298)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\" title=\"Modifier\">
                                        <i class=\"bi bi-pencil\"></i>
                                    </a>
                                    <form method=\"post\" action=\"";
            // line 301
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mission_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 301)]), "html", null, true);
            yield "\" 
                                          onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette mission ?');\" style=\"display:inline;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 303
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 303))), "html", null, true);
            yield "\">
                                        <button class=\"btn btn-sm btn-delete\" title=\"Supprimer\">
                                            <i class=\"bi bi-trash\"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 311
        if (!$context['_iterated']) {
            // line 312
            yield "                        <tr>
                            <td colspan=\"8\" class=\"text-center\">
                                <div class=\"alert alert-info\">
                                    ";
            // line 315
            if ((($tmp = (isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 315, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 316
                yield "                                        Aucune mission trouvée pour \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 316, $this->source); })()), "html", null, true);
                yield "\"
                                    ";
            } else {
                // line 318
                yield "                                        Aucune mission disponible
                                    ";
            }
            // line 320
            yield "                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mission'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 324
        yield "                    </tbody>
                </table>
            </div>
            
            ";
        // line 329
        yield "            ";
        // line 332
        yield "        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 337
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 338
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animation pour les boutons d'action
    document.querySelectorAll('.action-buttons .btn').forEach(btn => {
        btn.addEventListener('mouseover', function() {
            this.style.transform = 'scale(1.1)';
        });
        btn.addEventListener('mouseout', function() {
            this.style.transform = '';
        });
    });
    
    // Confirmation avant suppression
    const deleteForms = document.querySelectorAll('form[onsubmit]');
    deleteForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            if (!confirm(this.getAttribute('onsubmit').replace('return ', ''))) {
                e.preventDefault();
            }
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
        return "mission/index.html.twig";
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
        return array (  560 => 338,  550 => 337,  539 => 332,  537 => 329,  531 => 324,  522 => 320,  518 => 318,  512 => 316,  510 => 315,  505 => 312,  503 => 311,  490 => 303,  485 => 301,  479 => 298,  473 => 295,  467 => 292,  464 => 291,  461 => 290,  455 => 289,  449 => 287,  446 => 286,  441 => 285,  438 => 284,  436 => 283,  431 => 281,  427 => 280,  423 => 279,  419 => 278,  415 => 277,  412 => 276,  407 => 275,  381 => 252,  376 => 249,  368 => 245,  366 => 244,  358 => 239,  349 => 233,  341 => 227,  331 => 226,  105 => 7,  95 => 6,  78 => 4,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Missions{% endblock %}
{% block page_title %}Liste des Missions{% endblock %}

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
    }
    
    /* Barre de recherche et boutons */
    .input-group {
        max-width: 300px;
    }
    
    .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }
    
    .btn-primary:hover {
        background-color: #4338ca;
        border-color: #4338ca;
    }
    
    .btn-outline-primary {
        color: var(--primary-color);
        border-color: var(--primary-color);
    }
    
    .btn-outline-primary:hover {
        background-color: var(--primary-light);
    }
    
    /* Tableau des missions */
    .table {
        margin-bottom: 0;
        width: 100%;
    }
    
    .table thead th {
        background-color: #f8f9fa;
        border-bottom-width: 1px;
        font-weight: 600;
        color: #495057;
        vertical-align: middle;
        padding: 15px;
        position: sticky;
        top: 0;
    }
    
    .table tbody td {
        vertical-align: middle;
        padding: 15px;
        border-color: rgba(0, 0, 0, 0.03);
    }
    
    .table tbody tr:hover {
        background-color: rgba(79, 70, 229, 0.03);
    }
    
    /* Badges de compétences */
    .badge {
        font-weight: 500;
        padding: 5px 10px;
        margin: 2px;
        display: inline-block;
        border-radius: 4px;
        font-size: 0.8rem;
    }
    
    .badge-info {
        background-color: var(--primary-light);
        color: var(--primary-color);
    }
    
    /* Boutons d'action */
    .action-buttons {
        white-space: nowrap;
    }
    
    .action-buttons .btn {
        width: 32px;
        height: 32px;
        padding: 0;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: all 0.2s ease;
        margin-right: 5px;
    }
    
    .action-buttons .btn-info {
        background-color: rgba(13, 110, 253, 0.1);
        border-color: transparent;
        color: #0d6efd;
    }
    
    .action-buttons .btn-warning {
        background-color: rgba(255, 193, 7, 0.1);
        border-color: transparent;
        color: #ffc107;
    }
    
    .action-buttons .btn-delete {
        background-color: rgba(220, 53, 69, 0.1);
        border-color: transparent;
        color: #dc3545;
    }
    
    .action-buttons .btn:hover {
        transform: scale(1.1);
    }
    
    /* Message quand pas de missions */
    .alert-info {
        background-color: rgba(79, 70, 229, 0.1);
        border-color: rgba(79, 70, 229, 0.2);
        color: #4f46e5;
    }
    
    /* Pagination */
    .pagination {
        justify-content: center;
        margin-top: 20px;
    }
    
    .page-item.active .page-link {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }
    
    .page-link {
        color: var(--primary-color);
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .card-header {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .card-tools {
            width: 100%;
            margin-top: 15px;
        }
        
        .input-group {
            max-width: 100%;
        }
        
        .table-responsive {
            border: none;
        }
        
        .table thead {
            display: none;
        }
        
        .table, .table tbody, .table tr, .table td {
            display: block;
            width: 100%;
        }
        
        .table tr {
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        
        .table td {
            text-align: right;
            padding-left: 50%;
            position: relative;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .table td::before {
            content: attr(data-label);
            position: absolute;
            left: 15px;
            width: 45%;
            padding-right: 15px;
            font-weight: 600;
            text-align: left;
            color: #495057;
        }
        
        .action-buttons {
            justify-content: flex-end;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"card\">
        <div class=\"card-header\">
            <div class=\"d-flex flex-column flex-md-row justify-content-between align-items-md-center\">
                <h3 class=\"card-title\">Toutes les missions</h3>
                <div class=\"card-tools d-flex flex-column flex-md-row\">
                    <form method=\"get\" action=\"{{ path('app_mission_index') }}\" class=\"form-inline mb-2 mb-md-0 mr-md-2\">
                        <div class=\"input-group input-group-sm\">
                            <input type=\"text\" 
                                   name=\"search\" 
                                   class=\"form-control\" 
                                   placeholder=\"Rechercher par entreprise...\"
                                   value=\"{{ search_term ?? '' }}\">
                            <div class=\"input-group-append\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"bi bi-search\"></i>
                                </button>
                                {% if search_term %}
                                <a href=\"{{ path('app_mission_index') }}\" class=\"btn btn-secondary\">
                                    <i class=\"bi bi-x\"></i>
                                </a>
                                {% endif %}
                            </div>
                        </div>
                    </form>
                    <a href=\"{{ path('app_mission_new') }}\" class=\"btn btn-primary\">
                        <i class=\"bi bi-plus\"></i> Nouvelle Mission
                    </a>
                </div>
            </div>
        </div>
        
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead class=\"thead-light\">
                        <tr>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Durée</th>
                            <th>Budget</th>
                            <th>Date Publication</th>
                            <th>Compétences</th>
                            <th>Entreprise</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for mission in missions %}
                        <tr>
                            <td data-label=\"Titre\">{{ mission.titre }}</td>
                            <td data-label=\"Description\">{{ mission.description|length > 50 ? mission.description|slice(0, 50) ~ '...' : mission.description }}</td>
                            <td data-label=\"Durée\">{{ mission.duree }} jours</td>
                            <td data-label=\"Budget\">{{ mission.budget }} €</td>
                            <td data-label=\"Date Pub\">{{ mission.datePub ? mission.datePub|date('d/m/Y') : '' }}</td>
                            <td data-label=\"Compétences\">
                                {% if mission.competance %}
                                    {% set competences = mission.competance|split('/') %}
                                    {% for competence in competences %}
                                        {% if competence|trim %}
                                            <span class=\"badge badge-info\">{{ competence|trim }}</span>
                                        {% endif %}
                                    {% endfor %}
                                {% endif %}
                            </td>
                            <td data-label=\"Entreprise\">{{ mission.nomEntreprise }}</td>
                            <td data-label=\"Actions\" class=\"text-center\">
                                <div class=\"d-flex justify-content-center action-buttons\">
                                    <a href=\"{{ path('app_mission_show', {'id': mission.id}) }}\" class=\"btn btn-sm btn-info\" title=\"Voir\">
                                        <i class=\"bi bi-eye\"></i>
                                    </a>
                                    <a href=\"{{ path('app_mission_edit', {'id': mission.id}) }}\" class=\"btn btn-sm btn-warning\" title=\"Modifier\">
                                        <i class=\"bi bi-pencil\"></i>
                                    </a>
                                    <form method=\"post\" action=\"{{ path('app_mission_delete', {'id': mission.id}) }}\" 
                                          onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette mission ?');\" style=\"display:inline;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ mission.id) }}\">
                                        <button class=\"btn btn-sm btn-delete\" title=\"Supprimer\">
                                            <i class=\"bi bi-trash\"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"8\" class=\"text-center\">
                                <div class=\"alert alert-info\">
                                    {% if search_term %}
                                        Aucune mission trouvée pour \"{{ search_term }}\"
                                    {% else %}
                                        Aucune mission disponible
                                    {% endif %}
                                </div>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
            
            {# Ajoutez la pagination si nécessaire #}
            {# <div class=\"d-flex justify-content-center mt-4\">
                {{ knp_pagination_render(missions) }}
            </div> #}
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animation pour les boutons d'action
    document.querySelectorAll('.action-buttons .btn').forEach(btn => {
        btn.addEventListener('mouseover', function() {
            this.style.transform = 'scale(1.1)';
        });
        btn.addEventListener('mouseout', function() {
            this.style.transform = '';
        });
    });
    
    // Confirmation avant suppression
    const deleteForms = document.querySelectorAll('form[onsubmit]');
    deleteForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            if (!confirm(this.getAttribute('onsubmit').replace('return ', ''))) {
                e.preventDefault();
            }
        });
    });
});
</script>
{% endblock %}", "mission/index.html.twig", "C:\\PIDEV\\PIDV-WEB3A19-Mouheb-User - Copy\\templates\\mission\\index.html.twig");
    }
}
