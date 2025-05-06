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

/* candidature/_form.html.twig */
class __TwigTemplate_977607f0ecc68e4a0b055ca9b9b22b42 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal needs-validation", "novalidate" => "novalidate"]]);
        yield "

<div class=\"card card-primary\">
    <div class=\"card-header\">
        <h3 class=\"card-title\">";
        // line 5
        yield (((($tmp = (isset($context["edit_mode"]) || array_key_exists("edit_mode", $context) ? $context["edit_mode"] : (function () { throw new RuntimeError('Variable "edit_mode" does not exist.', 5, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Nouvelle"));
        yield " Candidature</h3>
    </div>
    <div class=\"card-body\">
        <div class=\"row mb-3\">
            
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "mission", [], "any", false, false, false, 12), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Mission *"]);
        yield "
                    ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "mission", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "mission", [], "any", false, false, false, 13), "vars", [], "any", false, false, false, 13), "errors", [], "any", false, false, false, 13))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : ("")))]]);
        yield "
                    <div class=\"invalid-feedback\">
                        ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "mission", [], "any", false, false, false, 15), 'errors');
        yield "
                    </div>
                </div>
            </div>
        </div>

        <div class=\"form-group mb-3\">
            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "lettreMotivation", [], "any", false, false, false, 22), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Lettre de motivation *"]);
        yield "
            ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "lettreMotivation", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 25
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "lettreMotivation", [], "any", false, false, false, 25), "vars", [], "any", false, false, false, 25), "errors", [], "any", false, false, false, 25))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : (""))), "rows" => 5]]);
        // line 28
        yield "
            <div class=\"invalid-feedback\">
                ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "lettreMotivation", [], "any", false, false, false, 30), 'errors');
        yield "
            </div>
            <small class=\"form-text text-muted\">100 à 2000 caractères requis</small>
        </div>

        <div class=\"form-group mb-3\">
            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "reponseQuestions", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Réponses aux questions"]);
        yield "
            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "reponseQuestions", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 39
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "reponseQuestions", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "errors", [], "any", false, false, false, 39))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : (""))), "rows" => 5]]);
        // line 42
        yield "
            <div class=\"invalid-feedback\">
                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "reponseQuestions", [], "any", false, false, false, 44), 'errors');
        yield "
            </div>
            <small class=\"form-text text-muted\">Optionnel (max 2000 caractères)</small>
        </div>

        <div class=\"form-group mb-3\">
            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "image", [], "any", false, false, false, 50), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Photo de profil"]);
        yield "
            <div class=\"custom-file\">
                ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "image", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => ("custom-file-input" . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 54
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "image", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "errors", [], "any", false, false, false, 54))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : ("")))]]);
        // line 56
        yield "
                <label class=\"custom-file-label\" for=\"candidature_image\">Choisir un fichier</label>
            </div>
            <div class=\"invalid-feedback\">
                ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "image", [], "any", false, false, false, 60), 'errors');
        yield "
            </div>
            <small class=\"form-text text-muted\">Formats acceptés: JPG/PNG (max 2Mo)</small>
            
            ";
        // line 64
        if (((isset($context["edit_mode"]) || array_key_exists("edit_mode", $context) ? $context["edit_mode"] : (function () { throw new RuntimeError('Variable "edit_mode" does not exist.', 64, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "vars", [], "any", false, false, false, 64), "value", [], "any", false, false, false, 64), "image", [], "any", false, false, false, 64))) {
            // line 65
            yield "                <div class=\"mt-2\">
                    <img src=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/candidatures/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "vars", [], "any", false, false, false, 66), "value", [], "any", false, false, false, 66), "image", [], "any", false, false, false, 66))), "html", null, true);
            yield "\" alt=\"Photo actuelle\" class=\"img-thumbnail\" width=\"150\">
                    <p class=\"text-muted small mt-1\">Photo actuelle</p>
                </div>
            ";
        }
        // line 70
        yield "        </div>
    </div>
    <div class=\"card-footer text-right\">
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fas fa-save\"></i> ";
        // line 74
        yield (((($tmp = (isset($context["edit_mode"]) || array_key_exists("edit_mode", $context) ? $context["edit_mode"] : (function () { throw new RuntimeError('Variable "edit_mode" does not exist.', 74, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettre à jour") : ("Enregistrer"));
        yield "
        </button>
        <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_index");
        yield "\" class=\"btn btn-default\">
            <i class=\"fas fa-times\"></i> Annuler
        </a>
    </div>
</div>

";
        // line 82
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), 'form_end');
        yield "

";
        // line 84
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 85
        yield "<script>
\$(document).ready(function() {
    // Affichage du nom du fichier sélectionné
    \$('.custom-file-input').on('change', function() {
        let fileName = \$(this).val().split('\\\\').pop();
        \$(this).next('.custom-file-label').addClass(\"selected\").html(fileName);
    });

    // Validation Bootstrap
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
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
        return "candidature/_form.html.twig";
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
        return array (  197 => 85,  180 => 84,  175 => 82,  166 => 76,  161 => 74,  155 => 70,  148 => 66,  145 => 65,  143 => 64,  136 => 60,  130 => 56,  128 => 54,  127 => 52,  122 => 50,  113 => 44,  109 => 42,  107 => 39,  106 => 37,  102 => 36,  93 => 30,  89 => 28,  87 => 25,  86 => 23,  82 => 22,  72 => 15,  67 => 13,  63 => 12,  53 => 5,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'form-horizontal needs-validation', 'novalidate': 'novalidate'}}) }}

<div class=\"card card-primary\">
    <div class=\"card-header\">
        <h3 class=\"card-title\">{{ edit_mode ? 'Modifier' : 'Nouvelle' }} Candidature</h3>
    </div>
    <div class=\"card-body\">
        <div class=\"row mb-3\">
            
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    {{ form_label(form.mission, \"Mission *\", {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.mission, {'attr': {'class': 'form-control' ~ (form.mission.vars.errors|length ? ' is-invalid' : '')}}) }}
                    <div class=\"invalid-feedback\">
                        {{ form_errors(form.mission) }}
                    </div>
                </div>
            </div>
        </div>

        <div class=\"form-group mb-3\">
            {{ form_label(form.lettreMotivation, \"Lettre de motivation *\", {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.lettreMotivation, {
                'attr': {
                    'class': 'form-control' ~ (form.lettreMotivation.vars.errors|length ? ' is-invalid' : ''),
                    'rows': 5
                }
            }) }}
            <div class=\"invalid-feedback\">
                {{ form_errors(form.lettreMotivation) }}
            </div>
            <small class=\"form-text text-muted\">100 à 2000 caractères requis</small>
        </div>

        <div class=\"form-group mb-3\">
            {{ form_label(form.reponseQuestions, \"Réponses aux questions\", {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.reponseQuestions, {
                'attr': {
                    'class': 'form-control' ~ (form.reponseQuestions.vars.errors|length ? ' is-invalid' : ''),
                    'rows': 5
                }
            }) }}
            <div class=\"invalid-feedback\">
                {{ form_errors(form.reponseQuestions) }}
            </div>
            <small class=\"form-text text-muted\">Optionnel (max 2000 caractères)</small>
        </div>

        <div class=\"form-group mb-3\">
            {{ form_label(form.image, \"Photo de profil\", {'label_attr': {'class': 'form-label'}}) }}
            <div class=\"custom-file\">
                {{ form_widget(form.image, {
                    'attr': {
                        'class': 'custom-file-input' ~ (form.image.vars.errors|length ? ' is-invalid' : '')
                    }
                }) }}
                <label class=\"custom-file-label\" for=\"candidature_image\">Choisir un fichier</label>
            </div>
            <div class=\"invalid-feedback\">
                {{ form_errors(form.image) }}
            </div>
            <small class=\"form-text text-muted\">Formats acceptés: JPG/PNG (max 2Mo)</small>
            
            {% if edit_mode and form.vars.value.image %}
                <div class=\"mt-2\">
                    <img src=\"{{ asset('uploads/candidatures/' ~ form.vars.value.image) }}\" alt=\"Photo actuelle\" class=\"img-thumbnail\" width=\"150\">
                    <p class=\"text-muted small mt-1\">Photo actuelle</p>
                </div>
            {% endif %}
        </div>
    </div>
    <div class=\"card-footer text-right\">
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fas fa-save\"></i> {{ edit_mode ? 'Mettre à jour' : 'Enregistrer' }}
        </button>
        <a href=\"{{ path('app_candidature_index') }}\" class=\"btn btn-default\">
            <i class=\"fas fa-times\"></i> Annuler
        </a>
    </div>
</div>

{{ form_end(form) }}

{% block javascripts %}
<script>
\$(document).ready(function() {
    // Affichage du nom du fichier sélectionné
    \$('.custom-file-input').on('change', function() {
        let fileName = \$(this).val().split('\\\\').pop();
        \$(this).next('.custom-file-label').addClass(\"selected\").html(fileName);
    });

    // Validation Bootstrap
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
});
</script>
{% endblock %}", "candidature/_form.html.twig", "/Users/moetezjebari/Desktop/PIDV-WEB3A19-Mouheb-User - Copy/Downloads/PIDV-WEB3A19-Mouheb-User - Copy/Downloads/PIDV-WEB3A19-Mouheb-User - Copy/templates/candidature/_form.html.twig");
    }
}
