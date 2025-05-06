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

/* reset_password/reset.html.twig */
class __TwigTemplate_9dfe39352e43af713b3b712b9f22c9ff extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/reset.html.twig"));

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

        yield "Définir un nouveau mot de passe";
        
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
  
  .password-strength {
    height: 5px;
    margin-top: 10px;
    border-radius: 5px;
    transition: all 0.3s ease;
  }
  
  .password-feedback {
    margin-top: 5px;
    font-size: 0.85rem;
  }
  
  .password-tips {
    background-color: #f8f9fa;
    border-left: 4px solid var(--primary-color);
    padding: 15px;
    margin-top: 20px;
    font-size: 0.9rem;
  }
  
  .password-tips ul {
    padding-left: 20px;
    margin-bottom: 0;
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

    // line 77
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const passwordInput = document.getElementById('new_password');
    const confirmInput = document.getElementById('confirm_password');
    const strengthBar = document.getElementById('passwordStrength');
    const feedbackText = document.getElementById('passwordFeedback');
    
    // Vérification de la force du mot de passe
    passwordInput.addEventListener('input', function() {
      const password = this.value;
      let strength = 0;
      let feedback = '';
      
      if (password.length >= 8) strength += 1;
      if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength += 1;
      if (password.match(/\\d/)) strength += 1;
      if (password.match(/[^a-zA-Z\\d]/)) strength += 1;
      
      // Mise à jour de la barre de force
      switch(strength) {
        case 0:
          strengthBar.style.width = '0%';
          strengthBar.className = 'password-strength';
          feedbackText.textContent = '';
          break;
        case 1:
          strengthBar.style.width = '25%';
          strengthBar.className = 'password-strength bg-danger';
          feedbackText.textContent = 'Faible';
          feedbackText.className = 'password-feedback text-danger';
          break;
        case 2:
          strengthBar.style.width = '50%';
          strengthBar.className = 'password-strength bg-warning';
          feedbackText.textContent = 'Moyen';
          feedbackText.className = 'password-feedback text-warning';
          break;
        case 3:
          strengthBar.style.width = '75%';
          strengthBar.className = 'password-strength bg-info';
          feedbackText.textContent = 'Bon';
          feedbackText.className = 'password-feedback text-info';
          break;
        case 4:
          strengthBar.style.width = '100%';
          strengthBar.className = 'password-strength bg-success';
          feedbackText.textContent = 'Excellent';
          feedbackText.className = 'password-feedback text-success';
          break;
      }
    });
    
    // Vérification de la correspondance des mots de passe
    confirmInput.addEventListener('input', function() {
      if (this.value && this.value !== passwordInput.value) {
        this.setCustomValidity('Les mots de passe ne correspondent pas');
      } else {
        this.setCustomValidity('');
      }
    });
  });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 143
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 144
        yield "  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"header fixed-top\">
    <div class=\"container-fluid container-xl d-flex align-items-center justify-content-between\">
      <a href=\"";
        // line 147
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
          <i class=\"bi bi-lock\"></i>
        </div>
        <h2>Nouveau mot de passe</h2>
        <p class=\"text-muted\">Définissez un nouveau mot de passe sécurisé pour votre compte</p>
      </div>
      
      ";
        // line 163
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 163, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 164
            yield "        <div class=\"alert alert-danger\">
          <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 165, $this->source); })()), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 168
        yield "      
      ";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 169, $this->source); })()), "flashes", [], "any", false, false, false, 169));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 170
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 171
                yield "          <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield "\">
            ";
                // line 172
                if ((($context["label"] == "error") || ($context["label"] == "danger"))) {
                    // line 173
                    yield "              <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
            ";
                } elseif ((                // line 174
$context["label"] == "info")) {
                    // line 175
                    yield "              <i class=\"bi bi-info-circle-fill me-2\"></i>
            ";
                } else {
                    // line 177
                    yield "              <i class=\"bi bi-check-circle-fill me-2\"></i>
            ";
                }
                // line 179
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        yield "      
      <form method=\"POST\">
        <div class=\"mb-4\">
          <label for=\"new_password\" class=\"form-label\">Nouveau mot de passe</label>
          <input type=\"password\" class=\"form-control\" id=\"new_password\" name=\"new_password\" minlength=\"8\" required>
          <div id=\"passwordStrength\" class=\"password-strength\"></div>
          <div id=\"passwordFeedback\" class=\"password-feedback\"></div>
        </div>
        
        <div class=\"mb-4\">
          <label for=\"confirm_password\" class=\"form-label\">Confirmer le mot de passe</label>
          <input type=\"password\" class=\"form-control\" id=\"confirm_password\" name=\"confirm_password\" required>
        </div>
        
        <div class=\"password-tips mb-4\">
          <p class=\"mb-2\"><i class=\"bi bi-info-circle me-2\"></i><strong>Conseils pour un mot de passe sécurisé :</strong></p>
          <ul>
            <li>Utilisez au moins 8 caractères</li>
            <li>Combinez des lettres majuscules et minuscules</li>
            <li>Incluez des chiffres et des caractères spéciaux</li>
            <li>Évitez les informations personnelles facilement devinables</li>
          </ul>
        </div>
        
        <div class=\"d-grid gap-2\">
          <button type=\"submit\" class=\"btn-primary-custom w-100\">
            <i class=\"bi bi-check-lg me-2\"></i>Réinitialiser le mot de passe
          </button>
        </div>
      </form>
      
      <div class=\"text-center mt-4\">
        <a href=\"";
        // line 215
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
        return "reset_password/reset.html.twig";
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
        return array (  374 => 215,  340 => 183,  334 => 182,  324 => 179,  320 => 177,  316 => 175,  314 => 174,  311 => 173,  309 => 172,  304 => 171,  299 => 170,  295 => 169,  292 => 168,  286 => 165,  283 => 164,  281 => 163,  262 => 147,  257 => 144,  247 => 143,  175 => 78,  165 => 77,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Définir un nouveau mot de passe{% endblock %}

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
  
  .password-strength {
    height: 5px;
    margin-top: 10px;
    border-radius: 5px;
    transition: all 0.3s ease;
  }
  
  .password-feedback {
    margin-top: 5px;
    font-size: 0.85rem;
  }
  
  .password-tips {
    background-color: #f8f9fa;
    border-left: 4px solid var(--primary-color);
    padding: 15px;
    margin-top: 20px;
    font-size: 0.9rem;
  }
  
  .password-tips ul {
    padding-left: 20px;
    margin-bottom: 0;
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

{% block javascripts %}
{{ parent() }}
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const passwordInput = document.getElementById('new_password');
    const confirmInput = document.getElementById('confirm_password');
    const strengthBar = document.getElementById('passwordStrength');
    const feedbackText = document.getElementById('passwordFeedback');
    
    // Vérification de la force du mot de passe
    passwordInput.addEventListener('input', function() {
      const password = this.value;
      let strength = 0;
      let feedback = '';
      
      if (password.length >= 8) strength += 1;
      if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength += 1;
      if (password.match(/\\d/)) strength += 1;
      if (password.match(/[^a-zA-Z\\d]/)) strength += 1;
      
      // Mise à jour de la barre de force
      switch(strength) {
        case 0:
          strengthBar.style.width = '0%';
          strengthBar.className = 'password-strength';
          feedbackText.textContent = '';
          break;
        case 1:
          strengthBar.style.width = '25%';
          strengthBar.className = 'password-strength bg-danger';
          feedbackText.textContent = 'Faible';
          feedbackText.className = 'password-feedback text-danger';
          break;
        case 2:
          strengthBar.style.width = '50%';
          strengthBar.className = 'password-strength bg-warning';
          feedbackText.textContent = 'Moyen';
          feedbackText.className = 'password-feedback text-warning';
          break;
        case 3:
          strengthBar.style.width = '75%';
          strengthBar.className = 'password-strength bg-info';
          feedbackText.textContent = 'Bon';
          feedbackText.className = 'password-feedback text-info';
          break;
        case 4:
          strengthBar.style.width = '100%';
          strengthBar.className = 'password-strength bg-success';
          feedbackText.textContent = 'Excellent';
          feedbackText.className = 'password-feedback text-success';
          break;
      }
    });
    
    // Vérification de la correspondance des mots de passe
    confirmInput.addEventListener('input', function() {
      if (this.value && this.value !== passwordInput.value) {
        this.setCustomValidity('Les mots de passe ne correspondent pas');
      } else {
        this.setCustomValidity('');
      }
    });
  });
</script>
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
          <i class=\"bi bi-lock\"></i>
        </div>
        <h2>Nouveau mot de passe</h2>
        <p class=\"text-muted\">Définissez un nouveau mot de passe sécurisé pour votre compte</p>
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
          <label for=\"new_password\" class=\"form-label\">Nouveau mot de passe</label>
          <input type=\"password\" class=\"form-control\" id=\"new_password\" name=\"new_password\" minlength=\"8\" required>
          <div id=\"passwordStrength\" class=\"password-strength\"></div>
          <div id=\"passwordFeedback\" class=\"password-feedback\"></div>
        </div>
        
        <div class=\"mb-4\">
          <label for=\"confirm_password\" class=\"form-label\">Confirmer le mot de passe</label>
          <input type=\"password\" class=\"form-control\" id=\"confirm_password\" name=\"confirm_password\" required>
        </div>
        
        <div class=\"password-tips mb-4\">
          <p class=\"mb-2\"><i class=\"bi bi-info-circle me-2\"></i><strong>Conseils pour un mot de passe sécurisé :</strong></p>
          <ul>
            <li>Utilisez au moins 8 caractères</li>
            <li>Combinez des lettres majuscules et minuscules</li>
            <li>Incluez des chiffres et des caractères spéciaux</li>
            <li>Évitez les informations personnelles facilement devinables</li>
          </ul>
        </div>
        
        <div class=\"d-grid gap-2\">
          <button type=\"submit\" class=\"btn-primary-custom w-100\">
            <i class=\"bi bi-check-lg me-2\"></i>Réinitialiser le mot de passe
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
", "reset_password/reset.html.twig", "/Users/moetezjebari/Desktop/PIDV-WEB3A19-Mouheb-User - Copy/Downloads/PIDV-WEB3A19-Mouheb-User - Copy/Downloads/PIDV-WEB3A19-Mouheb-User - Copy/templates/reset_password/reset.html.twig");
    }
}
