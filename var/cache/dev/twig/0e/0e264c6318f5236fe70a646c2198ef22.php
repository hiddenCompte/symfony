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

/* reset_password/check_code.html.twig */
class __TwigTemplate_750dd4758cf2abbda2de5b61b1e607a9 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/check_code.html.twig"));

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

        yield "Vérification du code SMS";
        
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
  
  .code-input {
    letter-spacing: 0.5em;
    text-align: center;
    font-size: 1.5rem;
    font-weight: bold;
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

    // line 59
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 60
        yield "  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"header fixed-top\">
    <div class=\"container-fluid container-xl d-flex align-items-center justify-content-between\">
      <a href=\"";
        // line 63
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
          <i class=\"bi bi-shield-check\"></i>
        </div>
        <h2>Vérification du code</h2>
        <p class=\"text-muted\">Nous avons envoyé un code de réinitialisation au numéro <strong>+216 ";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["telephone"]) || array_key_exists("telephone", $context) ? $context["telephone"] : (function () { throw new RuntimeError('Variable "telephone" does not exist.', 76, $this->source); })()), "html", null, true);
        yield "</strong></p>
      </div>
      
      ";
        // line 79
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 79, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 80
            yield "        <div class=\"alert alert-danger\">
          <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 81, $this->source); })()), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 84
        yield "      
      ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "flashes", [], "any", false, false, false, 85));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 86
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 87
                yield "          <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield "\">
            ";
                // line 88
                if ((($context["label"] == "error") || ($context["label"] == "danger"))) {
                    // line 89
                    yield "              <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
            ";
                } elseif ((                // line 90
$context["label"] == "info")) {
                    // line 91
                    yield "              <i class=\"bi bi-info-circle-fill me-2\"></i>
            ";
                } else {
                    // line 93
                    yield "              <i class=\"bi bi-check-circle-fill me-2\"></i>
            ";
                }
                // line 95
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        yield "      
      <form method=\"POST\">
        <div class=\"mb-4\">
          <label for=\"code\" class=\"form-label\">Code de vérification</label>
          <input type=\"text\" class=\"form-control code-input\" id=\"code\" name=\"code\" maxlength=\"6\" pattern=\"[0-9]{6}\" title=\"Le code doit contenir 6 chiffres\" required autofocus>
          <small class=\"form-text text-muted\">Entrez le code à 6 chiffres reçu par SMS</small>
        </div>
        
        <div class=\"d-grid gap-2\">
          <button type=\"submit\" class=\"btn-primary-custom w-100\">
            <i class=\"bi bi-check-lg me-2\"></i>Vérifier le code
          </button>
        </div>
      </form>
      
      <div class=\"text-center mt-4\">
        <a href=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\" class=\"text-decoration-none\" style=\"color: var(--primary-color);\">
          <i class=\"bi bi-arrow-left me-1\"></i>Retour
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
        return "reset_password/check_code.html.twig";
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
        return array (  260 => 115,  242 => 99,  236 => 98,  226 => 95,  222 => 93,  218 => 91,  216 => 90,  213 => 89,  211 => 88,  206 => 87,  201 => 86,  197 => 85,  194 => 84,  188 => 81,  185 => 80,  183 => 79,  177 => 76,  161 => 63,  156 => 60,  146 => 59,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Vérification du code SMS{% endblock %}

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
  
  .code-input {
    letter-spacing: 0.5em;
    text-align: center;
    font-size: 1.5rem;
    font-weight: bold;
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
          <i class=\"bi bi-shield-check\"></i>
        </div>
        <h2>Vérification du code</h2>
        <p class=\"text-muted\">Nous avons envoyé un code de réinitialisation au numéro <strong>+216 {{ telephone }}</strong></p>
      </div>
      
      {% if error %}
        <div class=\"alert alert-danger\">
          <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>{{ error }}
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
          <label for=\"code\" class=\"form-label\">Code de vérification</label>
          <input type=\"text\" class=\"form-control code-input\" id=\"code\" name=\"code\" maxlength=\"6\" pattern=\"[0-9]{6}\" title=\"Le code doit contenir 6 chiffres\" required autofocus>
          <small class=\"form-text text-muted\">Entrez le code à 6 chiffres reçu par SMS</small>
        </div>
        
        <div class=\"d-grid gap-2\">
          <button type=\"submit\" class=\"btn-primary-custom w-100\">
            <i class=\"bi bi-check-lg me-2\"></i>Vérifier le code
          </button>
        </div>
      </form>
      
      <div class=\"text-center mt-4\">
        <a href=\"{{ path('app_forgot_password_request') }}\" class=\"text-decoration-none\" style=\"color: var(--primary-color);\">
          <i class=\"bi bi-arrow-left me-1\"></i>Retour
        </a>
      </div>
    </div>
  </div>
{% endblock %}
", "reset_password/check_code.html.twig", "/Users/moetezjebari/Desktop/PIDV-WEB3A19-Mouheb-User - Copy/Downloads/PIDV-WEB3A19-Mouheb-User - Copy/Downloads/PIDV-WEB3A19-Mouheb-User - Copy/templates/reset_password/check_code.html.twig");
    }
}
