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

/* reset_password/request.html.twig */
class __TwigTemplate_50362010fef0897a611aa9fdfd7123de extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

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

        yield "Réinitialisation de mot de passe";
        
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
  }
  
  .reset-container {
    max-width: 500px;
    margin: 120px auto 60px;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    background-color: #fff;
  }
  
  .reset-header {
    text-align: center;
    margin-bottom: 30px;
  }
  
  .reset-icon {
    font-size: 3rem;
    color: var(--primary-color);
    margin-bottom: 15px;
  }
  
  .btn-primary-custom {
    background-color: var(--primary-color);
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    font-weight: 500;
    transition: all 0.3s;
    text-decoration: none;
    display: inline-block;
  }
  
  .btn-primary-custom:hover {
    background-color: #4338ca;
    color: #fff;
  }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 53
        yield "  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"header fixed-top\">
    <div class=\"container-fluid container-xl d-flex align-items-center justify-content-between\">
      <a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"logo d-flex align-items-center\">
        <h1 class=\"sitename\">Freelance<span style=\"color: var(--secondary-color);\">Connecté</span></h1>
      </a>
    </div>
  </header><!-- End Header -->

  <div class=\"container\">
    <div class=\"reset-container\">
      <div class=\"reset-header\">
        <div class=\"reset-icon\">
          <i class=\"bi bi-key\"></i>
        </div>
        <h2>Mot de passe oublié ?</h2>
        <p class=\"text-muted\">Entrez votre numéro de téléphone pour recevoir un code de réinitialisation</p>
      </div>
      
      ";
        // line 72
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 72, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 73
            yield "        <div class=\"alert alert-danger\">
          <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 74, $this->source); })()), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 77
        yield "      
      ";
        // line 78
        if ((($tmp = (isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 78, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 79
            yield "        <div class=\"alert alert-success\">
          <i class=\"bi bi-check-circle-fill me-2\"></i>";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 80, $this->source); })()), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 83
        yield "      
      ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "flashes", [], "any", false, false, false, 84));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 85
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 86
                yield "          <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield "\">
            ";
                // line 87
                if ((($context["label"] == "error") || ($context["label"] == "danger"))) {
                    // line 88
                    yield "              <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
            ";
                } elseif ((                // line 89
$context["label"] == "info")) {
                    // line 90
                    yield "              <i class=\"bi bi-info-circle-fill me-2\"></i>
            ";
                } else {
                    // line 92
                    yield "              <i class=\"bi bi-check-circle-fill me-2\"></i>
            ";
                }
                // line 94
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        yield "      
      <form method=\"POST\">
        <div class=\"mb-4\">
          <label for=\"telephone\" class=\"form-label\">Numéro de téléphone</label>
          <div class=\"input-group\">
            <span class=\"input-group-text\">+216</span>
            <input type=\"text\" class=\"form-control\" id=\"telephone\" name=\"telephone\" placeholder=\"12345678\" pattern=\"[0-9]{8}\" maxlength=\"8\" title=\"Le numéro doit contenir 8 chiffres\" required>
          </div>
          <small class=\"form-text text-muted\">Entrez votre numéro de téléphone au format tunisien (8 chiffres)</small>
        </div>
        
        <div class=\"d-grid gap-2\">
          <button type=\"submit\" class=\"btn-primary-custom w-100\">
            <i class=\"bi bi-send me-2\"></i>Recevoir le code
          </button>
        </div>
      </form>
      
      <div class=\"text-center mt-4\">
        <a href=\"";
        // line 117
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-decoration-none\" style=\"color: var(--primary-color);\">
          <i class=\"bi bi-arrow-left me-1\"></i>Retour à la connexion
        </a>
      </div>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reset_password/request.html.twig";
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
        return array (  267 => 117,  246 => 98,  240 => 97,  230 => 94,  226 => 92,  222 => 90,  220 => 89,  217 => 88,  215 => 87,  210 => 86,  205 => 85,  201 => 84,  198 => 83,  192 => 80,  189 => 79,  187 => 78,  184 => 77,  178 => 74,  175 => 73,  173 => 72,  154 => 56,  149 => 53,  139 => 52,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Réinitialisation de mot de passe{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
  :root {
    --primary-color: #4f46e5;
    --secondary-color: #ef4444;
  }
  
  .reset-container {
    max-width: 500px;
    margin: 120px auto 60px;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    background-color: #fff;
  }
  
  .reset-header {
    text-align: center;
    margin-bottom: 30px;
  }
  
  .reset-icon {
    font-size: 3rem;
    color: var(--primary-color);
    margin-bottom: 15px;
  }
  
  .btn-primary-custom {
    background-color: var(--primary-color);
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    font-weight: 500;
    transition: all 0.3s;
    text-decoration: none;
    display: inline-block;
  }
  
  .btn-primary-custom:hover {
    background-color: #4338ca;
    color: #fff;
  }
</style>
{% endblock %}

{% block body %}
  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"header fixed-top\">
    <div class=\"container-fluid container-xl d-flex align-items-center justify-content-between\">
      <a href=\"{{ path('app_home') }}\" class=\"logo d-flex align-items-center\">
        <h1 class=\"sitename\">Freelance<span style=\"color: var(--secondary-color);\">Connecté</span></h1>
      </a>
    </div>
  </header><!-- End Header -->

  <div class=\"container\">
    <div class=\"reset-container\">
      <div class=\"reset-header\">
        <div class=\"reset-icon\">
          <i class=\"bi bi-key\"></i>
        </div>
        <h2>Mot de passe oublié ?</h2>
        <p class=\"text-muted\">Entrez votre numéro de téléphone pour recevoir un code de réinitialisation</p>
      </div>
      
      {% if error %}
        <div class=\"alert alert-danger\">
          <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>{{ error }}
        </div>
      {% endif %}
      
      {% if success %}
        <div class=\"alert alert-success\">
          <i class=\"bi bi-check-circle-fill me-2\"></i>{{ success }}
        </div>
      {% endif %}
      
      {% for label, messages in app.flashes %}
        {% for message in messages %}
          <div class=\"alert alert-{{ label == 'error' ? 'danger' : label }}\">
            {% if label == 'error' or label == 'danger' %}
              <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
            {% elseif label == 'info' %}
              <i class=\"bi bi-info-circle-fill me-2\"></i>
            {% else %}
              <i class=\"bi bi-check-circle-fill me-2\"></i>
            {% endif %}
            {{ message }}
          </div>
        {% endfor %}
      {% endfor %}
      
      <form method=\"POST\">
        <div class=\"mb-4\">
          <label for=\"telephone\" class=\"form-label\">Numéro de téléphone</label>
          <div class=\"input-group\">
            <span class=\"input-group-text\">+216</span>
            <input type=\"text\" class=\"form-control\" id=\"telephone\" name=\"telephone\" placeholder=\"12345678\" pattern=\"[0-9]{8}\" maxlength=\"8\" title=\"Le numéro doit contenir 8 chiffres\" required>
          </div>
          <small class=\"form-text text-muted\">Entrez votre numéro de téléphone au format tunisien (8 chiffres)</small>
        </div>
        
        <div class=\"d-grid gap-2\">
          <button type=\"submit\" class=\"btn-primary-custom w-100\">
            <i class=\"bi bi-send me-2\"></i>Recevoir le code
          </button>
        </div>
      </form>
      
      <div class=\"text-center mt-4\">
        <a href=\"{{ path('app_login') }}\" class=\"text-decoration-none\" style=\"color: var(--primary-color);\">
          <i class=\"bi bi-arrow-left me-1\"></i>Retour à la connexion
        </a>
      </div>
    </div>
  </div>
{% endblock %}
", "reset_password/request.html.twig", "C:\\PIDEV\\PIDV-WEB3A19-Mouheb-User - Copy\\templates\\reset_password\\request.html.twig");
    }
}
