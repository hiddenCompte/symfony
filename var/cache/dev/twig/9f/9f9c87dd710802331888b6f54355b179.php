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

/* mission/show.html.twig */
class __TwigTemplate_ccd7c60bd8f683ee93c1b3c3877c8857 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mission/show.html.twig"));

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

        yield "Détails de la mission - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        
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

    .mission-card {
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        border: none;
        overflow: hidden;
        margin-top: 30px;
    }
    
    .card-header {
        background-color: var(--primary-color);
        color: white;
        padding: 20px 25px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .card-header h2 {
        margin: 0;
        font-size: 1.75rem;
        font-weight: 600;
    }
    
    .card-body {
        padding: 30px;
    }
    
    .card-footer {
        background-color: #f8f9fa;
        border-top: 1px solid rgba(0, 0, 0, 0.05);
        padding: 15px 25px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .info-label {
        font-weight: 600;
        color: var(--primary-color);
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .info-content {
        padding-left: 30px;
        margin-bottom: 25px;
    }
    
    .list-group-item {
        border-color: rgba(0, 0, 0, 0.03);
        padding: 12px 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .badge {
        padding: 8px 12px;
        border-radius: 20px;
        font-weight: 500;
    }
    
    .badge-primary {
        background-color: var(--primary-light);
        color: var(--primary-color);
    }
    
    .badge-success {
        background-color: rgba(25, 135, 84, 0.1);
        color: #198754;
    }
    
    .badge-info {
        background-color: rgba(13, 202, 240, 0.1);
        color: #0dcaf0;
    }
    
    .skill-badge {
        background-color: var(--primary-light);
        color: var(--primary-color);
        padding: 6px 12px;
        border-radius: 20px;
        display: inline-block;
        margin: 0 5px 5px 0;
        transition: all 0.3s ease;
    }
    
    .btn {
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
    
    .btn-outline-secondary {
        border-color: #6c757d;
        color: #6c757d;
    }
    
    .btn-outline-secondary:hover {
        background-color: #6c757d;
        color: white;
    }
    
    .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
        color: #212529;
    }
    
    .btn-warning:hover {
        background-color: #ffca2c;
        border-color: #ffc720;
    }
    
    .btn-danger {
        background-color: var(--secondary-color);
        border-color: var(--secondary-color);
    }
    
    .btn-danger:hover {
        background-color: var(--secondary-light);
        border-color: var(--secondary-light);
    }

    /* Nouveaux styles QR Code */
    .qr-section {
        text-align: center;
        padding: 20px;
        margin: 20px auto;
        max-width: 300px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 15px rgba(0,0,0,0.1);
    }
    
    .qr-code {
        width: 200px;
        height: 200px;
        margin: 0 auto;
        display: block;
        border: 1px solid #eee;
        padding: 10px;
        background: white;
    }
    
    .qr-instruction {
        margin-top: 15px;
        color: var(--primary-color);
        font-weight: 500;
    }
    
    @media (max-width: 768px) {
        .card-header, .card-body, .card-footer {
            padding: 15px;
        }
        
        .card-header {
            flex-direction: column;
            gap: 15px;
        }
        
        .qr-code {
            width: 180px;
            height: 180px;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 190
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 191
        yield "<div class=\"container\">
    <div class=\"mission-card card\">
        <div class=\"card-header\">
            <h2>";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 194, $this->source); })()), "titre", [], "any", false, false, false, 194), "html", null, true);
        yield "</h2>
            <a href=\"";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mission_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 195, $this->source); })()), "id", [], "any", false, false, false, 195)]), "html", null, true);
        yield "\" class=\"btn btn-light\">
                <i class=\"bi bi-file-earmark-pdf\"></i> PDF
            </a>
        </div>

        <div class=\"card-body\">
            <!-- Nouvelle section QR Code -->
            <div class=\"qr-section\">
                <h5 class=\"info-label\">
                    <i class=\"bi bi-qr-code\"></i> Scanner la mission
                </h5>
                <img src=\"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mission_qrcode", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 206, $this->source); })()), "id", [], "any", false, false, false, 206)]), "html", null, true);
        yield "\" 
                     alt=\"QR Code pour ";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 207, $this->source); })()), "titre", [], "any", false, false, false, 207), "html", null, true);
        yield "\"
                     class=\"qr-code\">
                <p class=\"qr-instruction\">Utilisez votre appareil photo pour scanner</p>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"mb-4\">
                        <h5 class=\"info-label\">
                            <i class=\"bi bi-info-circle\"></i> Description
                        </h5>
                        <div class=\"info-content\">
                            ";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 219, $this->source); })()), "description", [], "any", false, false, false, 219), "html", null, true);
        yield "
                        </div>
                    </div>

                    <div class=\"mb-4\">
                        <h5 class=\"info-label\">
                            <i class=\"bi bi-question-circle\"></i> Questions
                        </h5>
                        <div class=\"info-content\">
                            ";
        // line 228
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["mission"] ?? null), "questions", [], "any", true, true, false, 228) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 228, $this->source); })()), "questions", [], "any", false, false, false, 228)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 228, $this->source); })()), "questions", [], "any", false, false, false, 228), "html", null, true)) : ("Aucune question spécifique"));
        yield "
                        </div>
                    </div>

                    <div class=\"mb-4\">
                        <h5 class=\"info-label\">
                            <i class=\"bi bi-building\"></i> Entreprise
                        </h5>
                        <div class=\"info-content\">
                            ";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 237, $this->source); })()), "nomEntreprise", [], "any", false, false, false, 237), "html", null, true);
        yield "
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-6\">
                    <div class=\"mb-4\">
                        <h5 class=\"info-label\">
                            <i class=\"bi bi-tools\"></i> Détails techniques
                        </h5>
                        <ul class=\"list-group\">
                            <li class=\"list-group-item\">
                                <span><i class=\"bi bi-clock\"></i> Durée</span>
                                <span class=\"badge badge-primary\">";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 250, $this->source); })()), "duree", [], "any", false, false, false, 250), "html", null, true);
        yield " jours</span>
                            </li>
                            <li class=\"list-group-item\">
                                <span><i class=\"bi bi-currency-euro\"></i> Budget</span>
                                <span class=\"badge badge-success\">";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 254, $this->source); })()), "budget", [], "any", false, false, false, 254), "html", null, true);
        yield " €</span>
                            </li>
                            <li class=\"list-group-item\">
                                <span><i class=\"bi bi-calendar\"></i> Date publication</span>
                                <span>";
        // line 258
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 258, $this->source); })()), "datePub", [], "any", false, false, false, 258)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 258, $this->source); })()), "datePub", [], "any", false, false, false, 258), "d/m/Y"), "html", null, true)) : (""));
        yield "</span>
                            </li>
                        </ul>
                    </div>

                    <div class=\"mb-4\">
                        <h5 class=\"info-label\">
                            <i class=\"bi bi-code-square\"></i> Compétences
                        </h5>
                        <div class=\"info-content\">
                            ";
        // line 268
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 268, $this->source); })()), "competance", [], "any", false, false, false, 268)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 269
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 269, $this->source); })()), "competance", [], "any", false, false, false, 269), "/"));
            foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
                // line 270
                yield "                                    ";
                if ((($tmp = Twig\Extension\CoreExtension::trim($context["competence"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 271
                    yield "                                        <span class=\"skill-badge\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim($context["competence"]), "html", null, true);
                    yield "</span>
                                    ";
                }
                // line 273
                yield "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['competence'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 274
            yield "                            ";
        } else {
            // line 275
            yield "                                <p class=\"text-muted\">Aucune compétence spécifiée</p>
                            ";
        }
        // line 277
        yield "                        </div>
                    </div>

                    <div class=\"mb-4\">
                        <h5 class=\"info-label\">
                            <i class=\"bi bi-graph-up\"></i> Statistiques
                        </h5>
                        <ul class=\"list-group\">
                            <li class=\"list-group-item\">
                                <span>Utilisateurs concernés</span>
                                <span class=\"badge badge-info\">";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 287, $this->source); })()), "nbreUtilisateur", [], "any", false, false, false, 287), "html", null, true);
        yield "</span>
                            </li>
                            <li class=\"list-group-item\">
                                <span>Candidatures reçues</span>
                                <span class=\"badge badge-info\">";
        // line 291
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 291, $this->source); })()), "nombreCandidatures", [], "any", false, false, false, 291), "html", null, true);
        yield "</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"card-footer\">
            <div>
                <a href=\"";
        // line 301
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mission_index");
        yield "\" class=\"btn btn-outline-secondary\">
                    <i class=\"bi bi-arrow-left\"></i> Retour
                </a>
            </div>
            <div class=\"d-flex gap-2\">
                ";
        // line 306
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 307
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mission_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 307, $this->source); })()), "id", [], "any", false, false, false, 307)]), "html", null, true);
            yield "\" class=\"btn btn-warning\">
                        <i class=\"bi bi-pencil\"></i> Modifier
                    </a>
                ";
        }
        // line 311
        yield "                <form method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mission_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 311, $this->source); })()), "id", [], "any", false, false, false, 311)]), "html", null, true);
        yield "\" 
                      onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette mission ?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 313, $this->source); })()), "id", [], "any", false, false, false, 313))), "html", null, true);
        yield "\">
                    <button class=\"btn btn-danger\">
                        <i class=\"bi bi-trash\"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 324
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 325
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animation des badges de compétences
    const skillBadges = document.querySelectorAll('.skill-badge');
    skillBadges.forEach(badge => {
        badge.addEventListener('mouseover', function() {
            this.style.transform = 'translateY(-3px)';
            this.style.boxShadow = '0 4px 8px rgba(0,0,0,0.1)';
        });
        badge.addEventListener('mouseout', function() {
            this.style.transform = '';
            this.style.boxShadow = '';
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
        return "mission/show.html.twig";
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
        return array (  511 => 325,  501 => 324,  483 => 313,  477 => 311,  469 => 307,  467 => 306,  459 => 301,  446 => 291,  439 => 287,  427 => 277,  423 => 275,  420 => 274,  414 => 273,  408 => 271,  405 => 270,  400 => 269,  398 => 268,  385 => 258,  378 => 254,  371 => 250,  355 => 237,  343 => 228,  331 => 219,  316 => 207,  312 => 206,  298 => 195,  294 => 194,  289 => 191,  279 => 190,  88 => 6,  78 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de la mission - {{ mission.titre }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    :root {
        --primary-color: #4f46e5;
        --secondary-color: #ef4444;
        --primary-light: rgba(79, 70, 229, 0.1);
        --secondary-light: #dc2626;
    }

    .mission-card {
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        border: none;
        overflow: hidden;
        margin-top: 30px;
    }
    
    .card-header {
        background-color: var(--primary-color);
        color: white;
        padding: 20px 25px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .card-header h2 {
        margin: 0;
        font-size: 1.75rem;
        font-weight: 600;
    }
    
    .card-body {
        padding: 30px;
    }
    
    .card-footer {
        background-color: #f8f9fa;
        border-top: 1px solid rgba(0, 0, 0, 0.05);
        padding: 15px 25px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .info-label {
        font-weight: 600;
        color: var(--primary-color);
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .info-content {
        padding-left: 30px;
        margin-bottom: 25px;
    }
    
    .list-group-item {
        border-color: rgba(0, 0, 0, 0.03);
        padding: 12px 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .badge {
        padding: 8px 12px;
        border-radius: 20px;
        font-weight: 500;
    }
    
    .badge-primary {
        background-color: var(--primary-light);
        color: var(--primary-color);
    }
    
    .badge-success {
        background-color: rgba(25, 135, 84, 0.1);
        color: #198754;
    }
    
    .badge-info {
        background-color: rgba(13, 202, 240, 0.1);
        color: #0dcaf0;
    }
    
    .skill-badge {
        background-color: var(--primary-light);
        color: var(--primary-color);
        padding: 6px 12px;
        border-radius: 20px;
        display: inline-block;
        margin: 0 5px 5px 0;
        transition: all 0.3s ease;
    }
    
    .btn {
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
    
    .btn-outline-secondary {
        border-color: #6c757d;
        color: #6c757d;
    }
    
    .btn-outline-secondary:hover {
        background-color: #6c757d;
        color: white;
    }
    
    .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
        color: #212529;
    }
    
    .btn-warning:hover {
        background-color: #ffca2c;
        border-color: #ffc720;
    }
    
    .btn-danger {
        background-color: var(--secondary-color);
        border-color: var(--secondary-color);
    }
    
    .btn-danger:hover {
        background-color: var(--secondary-light);
        border-color: var(--secondary-light);
    }

    /* Nouveaux styles QR Code */
    .qr-section {
        text-align: center;
        padding: 20px;
        margin: 20px auto;
        max-width: 300px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 15px rgba(0,0,0,0.1);
    }
    
    .qr-code {
        width: 200px;
        height: 200px;
        margin: 0 auto;
        display: block;
        border: 1px solid #eee;
        padding: 10px;
        background: white;
    }
    
    .qr-instruction {
        margin-top: 15px;
        color: var(--primary-color);
        font-weight: 500;
    }
    
    @media (max-width: 768px) {
        .card-header, .card-body, .card-footer {
            padding: 15px;
        }
        
        .card-header {
            flex-direction: column;
            gap: 15px;
        }
        
        .qr-code {
            width: 180px;
            height: 180px;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"mission-card card\">
        <div class=\"card-header\">
            <h2>{{ mission.titre }}</h2>
            <a href=\"{{ path('app_mission_pdf', {'id': mission.id}) }}\" class=\"btn btn-light\">
                <i class=\"bi bi-file-earmark-pdf\"></i> PDF
            </a>
        </div>

        <div class=\"card-body\">
            <!-- Nouvelle section QR Code -->
            <div class=\"qr-section\">
                <h5 class=\"info-label\">
                    <i class=\"bi bi-qr-code\"></i> Scanner la mission
                </h5>
                <img src=\"{{ path('app_mission_qrcode', {'id': mission.id}) }}\" 
                     alt=\"QR Code pour {{ mission.titre }}\"
                     class=\"qr-code\">
                <p class=\"qr-instruction\">Utilisez votre appareil photo pour scanner</p>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"mb-4\">
                        <h5 class=\"info-label\">
                            <i class=\"bi bi-info-circle\"></i> Description
                        </h5>
                        <div class=\"info-content\">
                            {{ mission.description }}
                        </div>
                    </div>

                    <div class=\"mb-4\">
                        <h5 class=\"info-label\">
                            <i class=\"bi bi-question-circle\"></i> Questions
                        </h5>
                        <div class=\"info-content\">
                            {{ mission.questions ?? 'Aucune question spécifique' }}
                        </div>
                    </div>

                    <div class=\"mb-4\">
                        <h5 class=\"info-label\">
                            <i class=\"bi bi-building\"></i> Entreprise
                        </h5>
                        <div class=\"info-content\">
                            {{ mission.nomEntreprise }}
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-6\">
                    <div class=\"mb-4\">
                        <h5 class=\"info-label\">
                            <i class=\"bi bi-tools\"></i> Détails techniques
                        </h5>
                        <ul class=\"list-group\">
                            <li class=\"list-group-item\">
                                <span><i class=\"bi bi-clock\"></i> Durée</span>
                                <span class=\"badge badge-primary\">{{ mission.duree }} jours</span>
                            </li>
                            <li class=\"list-group-item\">
                                <span><i class=\"bi bi-currency-euro\"></i> Budget</span>
                                <span class=\"badge badge-success\">{{ mission.budget }} €</span>
                            </li>
                            <li class=\"list-group-item\">
                                <span><i class=\"bi bi-calendar\"></i> Date publication</span>
                                <span>{{ mission.datePub ? mission.datePub|date('d/m/Y') : '' }}</span>
                            </li>
                        </ul>
                    </div>

                    <div class=\"mb-4\">
                        <h5 class=\"info-label\">
                            <i class=\"bi bi-code-square\"></i> Compétences
                        </h5>
                        <div class=\"info-content\">
                            {% if mission.competance %}
                                {% for competence in mission.competance|split('/') %}
                                    {% if competence|trim %}
                                        <span class=\"skill-badge\">{{ competence|trim }}</span>
                                    {% endif %}
                                {% endfor %}
                            {% else %}
                                <p class=\"text-muted\">Aucune compétence spécifiée</p>
                            {% endif %}
                        </div>
                    </div>

                    <div class=\"mb-4\">
                        <h5 class=\"info-label\">
                            <i class=\"bi bi-graph-up\"></i> Statistiques
                        </h5>
                        <ul class=\"list-group\">
                            <li class=\"list-group-item\">
                                <span>Utilisateurs concernés</span>
                                <span class=\"badge badge-info\">{{ mission.nbreUtilisateur }}</span>
                            </li>
                            <li class=\"list-group-item\">
                                <span>Candidatures reçues</span>
                                <span class=\"badge badge-info\">{{ mission.nombreCandidatures }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"card-footer\">
            <div>
                <a href=\"{{ path('app_mission_index') }}\" class=\"btn btn-outline-secondary\">
                    <i class=\"bi bi-arrow-left\"></i> Retour
                </a>
            </div>
            <div class=\"d-flex gap-2\">
                {% if is_granted('ROLE_ADMIN') %}
                    <a href=\"{{ path('app_mission_edit', {'id': mission.id}) }}\" class=\"btn btn-warning\">
                        <i class=\"bi bi-pencil\"></i> Modifier
                    </a>
                {% endif %}
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
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animation des badges de compétences
    const skillBadges = document.querySelectorAll('.skill-badge');
    skillBadges.forEach(badge => {
        badge.addEventListener('mouseover', function() {
            this.style.transform = 'translateY(-3px)';
            this.style.boxShadow = '0 4px 8px rgba(0,0,0,0.1)';
        });
        badge.addEventListener('mouseout', function() {
            this.style.transform = '';
            this.style.boxShadow = '';
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
{% endblock %}", "mission/show.html.twig", "C:\\PIDEV\\PIDV-WEB3A19-Mouheb-User - Copy\\templates\\mission\\show.html.twig");
    }
}
