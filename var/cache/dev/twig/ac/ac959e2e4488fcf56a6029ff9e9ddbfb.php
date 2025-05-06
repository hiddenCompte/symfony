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

/* user/reset_password.html.twig */
class __TwigTemplate_e8a18d7bdb88a7f960f739f6797dd4f1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/reset_password.html.twig"));

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

        yield "Réinitialisation du mot de passe";
        
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

  .profile-header {
    background-color: #f8f9fa;
    padding: 2rem 0;
    margin-top: 0;
    margin-bottom: 2rem;
    border-bottom: 1px solid #dee2e6;
  }
  
  .back-arrow {
    position: absolute;
    top: 20px;
    left: 20px;
    font-size: 1.5rem;
    color: #666;
    transition: all 0.2s ease;
    z-index: 1000;
  }
  
  .back-arrow:hover {
    color: var(--primary-color);
    transform: translateX(-3px);
  }
  
  .profile-avatar {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    background-color: var(--primary-color);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 3rem;
    color: #fff;
    margin: 0 auto 1rem;
  }
  
  .profile-card {
    border-radius: 0.5rem;
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    margin-bottom: 2rem;
    border: none;
  }
  
  .profile-card-header {
    background-color: #f8f9fa;
    padding: 1rem;
    border-bottom: 1px solid #dee2e6;
    font-weight: 600;
  }
  
  .back-link {
    display: inline-block;
    margin: 20px 0;
    color: #333;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.2s ease;
  }
  
  .back-link:hover {
    color: var(--primary-color);
    transform: translateX(-3px);
  }
  
  .back-link i {
    font-size: 1.2rem;
    vertical-align: middle;
  }
  
  .list-group-item.active {
    background-color: var(--primary-color);
    border-color: var(--primary-color);
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
  
  .reset-icon {
    font-size: 2rem;
    color: var(--primary-color);
    margin-bottom: 15px;
  }
  
  .verification-code-input {
    letter-spacing: 0.5em;
    text-align: center;
    font-size: 1.5rem;
  }
  
  .password-strength {
    margin-top: 10px;
    height: 5px;
    border-radius: 3px;
    background-color: #e9ecef;
  }
  
  .password-strength-bar {
    height: 100%;
    border-radius: 3px;
    transition: width 0.3s ease;
  }
  
  .strength-weak {
    background-color: var(--secondary-color);
    width: 33%;
  }
  
  .strength-medium {
    background-color: #ffc107;
    width: 66%;
  }
  
  .strength-strong {
    background-color: #28a745;
    width: 100%;
  }
  
  .security-tips li {
    margin-bottom: 8px;
    position: relative;
    padding-left: 25px;
  }
  
  .security-tips li:before {
    content: \"\\F26B\";
    font-family: \"bootstrap-icons\";
    position: absolute;
    left: 0;
    color: var(--primary-color);
  }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 160
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 161
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Vérification de la force du mot de passe
    const passwordInput = document.getElementById('new_password');
    if (passwordInput) {
      const strengthBar = document.getElementById('passwordStrength');
      const feedbackText = document.getElementById('passwordFeedback');
      
      passwordInput.addEventListener('input', function() {
        const password = this.value;
        let strength = 0;
        let feedback = '';
        
        // Vérification de la longueur
        if (password.length >= 8) {
          strength += 1;
        }
        
        // Vérification des chiffres
        if (/\\d/.test(password)) {
          strength += 1;
        }
        
        // Vérification des lettres majuscules
        if (/[A-Z]/.test(password)) {
          strength += 1;
        }
        
        // Vérification des caractères spéciaux
        if (/[^A-Za-z0-9]/.test(password)) {
          strength += 1;
        }
        
        // Mise à jour de l'indicateur de force
        strengthBar.style.width = (strength * 25) + '%';
        
        switch(strength) {
          case 0:
            strengthBar.style.width = '0%';
            feedbackText.textContent = '';
            break;
          case 1:
            strengthBar.className = 'password-strength-bar strength-weak';
            feedbackText.textContent = 'Faible';
            feedbackText.className = 'password-feedback text-danger';
            break;
          case 2:
            strengthBar.className = 'password-strength-bar strength-medium';
            feedbackText.textContent = 'Moyen';
            feedbackText.className = 'password-feedback text-warning';
            break;
          case 3:
            strengthBar.className = 'password-strength-bar strength-strong';
            feedbackText.textContent = 'Fort';
            feedbackText.className = 'password-feedback text-success';
            break;
          case 4:
            strengthBar.className = 'password-strength-bar strength-strong';
            feedbackText.textContent = 'Excellent';
            feedbackText.className = 'password-feedback text-success';
            break;
        }
      });
    }
    
    // Vérification de la correspondance des mots de passe
    const confirmInput = document.getElementById('confirm_password');
    if (confirmInput && passwordInput) {
      confirmInput.addEventListener('input', function() {
        if (this.value && this.value !== passwordInput.value) {
          this.setCustomValidity('Les mots de passe ne correspondent pas');
        } else {
          this.setCustomValidity('');
        }
      });
    }
  });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 242
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 243
        yield "  <div class=\"profile-header\" style=\"margin-top: 0;\">
    <div class=\"container\">
      <div class=\"row align-items-center\">
        <div class=\"col-md-3 text-center\">
          <div class=\"profile-avatar\">
            <i class=\"bi bi-person\"></i>
          </div>
        </div>
        <div class=\"col-md-9\">
          <h2>Réinitialisation du mot de passe</h2>
          <p class=\"text-muted mb-0\">Sécurisez votre compte avec un nouveau mot de passe</p>
        </div>
      </div>
    </div>
    <a href=\"";
        // line 257
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"back-arrow\" title=\"Retour à l'accueil\">
      <i class=\"bi bi-arrow-left\"></i>
    </a>
  </div>

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-4\">
        <div class=\"profile-card\">
          <div class=\"profile-card-header\">
            Menu
          </div>
          <div class=\"list-group list-group-flush\">
            <a href=\"";
        // line 270
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mon_compte");
        yield "\" class=\"list-group-item list-group-item-action\">
              <i class=\"bi bi-person-circle me-2\"></i>Informations personnelles
            </a>
            <a href=\"";
        // line 273
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mon_compte_securite");
        yield "\" class=\"list-group-item list-group-item-action\">
              <i class=\"bi bi-shield-lock me-2\"></i>Sécurité
            </a>
            <a href=\"";
        // line 276
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"list-group-item list-group-item-action text-danger\">
              <i class=\"bi bi-box-arrow-right me-2\"></i>Déconnexion
            </a>
          </div>
        </div>
        
        <div class=\"profile-card\">
          <div class=\"profile-card-header\">
            <i class=\"bi bi-info-circle me-2\"></i>Informations
          </div>
          <div class=\"card-body\">
            <p class=\"card-text\">La réinitialisation de votre mot de passe se fait en trois étapes :</p>
            <ol>
              <li>Entrez votre adresse email</li>
              <li>Saisissez le code reçu par email</li>
              <li>Définissez votre nouveau mot de passe</li>
            </ol>
            <p class=\"small text-muted\">Un code de vérification sera envoyé à l'adresse email associée à votre compte.</p>
          </div>
        </div>
      </div>
      
      <div class=\"col-md-8\">
        ";
        // line 299
        if ((array_key_exists("step", $context) && ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 299, $this->source); })()) == "request"))) {
            // line 300
            yield "          <div class=\"profile-card\">
            <div class=\"profile-card-header\">
              <i class=\"bi bi-phone me-2\"></i>Réinitialisation du mot de passe
            </div>
            <div class=\"card-body\">
              ";
            // line 305
            if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 305, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 306
                yield "                <div class=\"alert alert-danger\">
                  <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>";
                // line 307
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 307, $this->source); })()), "html", null, true);
                yield "
                </div>
              ";
            }
            // line 310
            yield "              
              ";
            // line 311
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 311, $this->source); })()), "flashes", [], "any", false, false, false, 311));
            foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
                // line 312
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 313
                    yield "                  <div class=\"alert alert-";
                    yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                    yield "\">
                    ";
                    // line 314
                    if ((($context["label"] == "error") || ($context["label"] == "danger"))) {
                        // line 315
                        yield "                      <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
                    ";
                    } elseif ((                    // line 316
$context["label"] == "info")) {
                        // line 317
                        yield "                      <i class=\"bi bi-info-circle-fill me-2\"></i>
                    ";
                    } else {
                        // line 319
                        yield "                      <i class=\"bi bi-check-circle-fill me-2\"></i>
                    ";
                    }
                    // line 321
                    yield "                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                    yield "
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 324
                yield "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 325
            yield "              
              <div class=\"text-center mb-4\">
                <div class=\"reset-icon\">
                  <i class=\"bi bi-";
            // line 328
            yield (((($tmp =  !(isset($context["email_verified"]) || array_key_exists("email_verified", $context) ? $context["email_verified"] : (function () { throw new RuntimeError('Variable "email_verified" does not exist.', 328, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("envelope") : ("phone"));
            yield "\"></i>
                </div>
                <h4>Mot de passe oublié ?</h4>
                ";
            // line 331
            if ((($tmp =  !(isset($context["email_verified"]) || array_key_exists("email_verified", $context) ? $context["email_verified"] : (function () { throw new RuntimeError('Variable "email_verified" does not exist.', 331, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 332
                yield "                  <p class=\"text-muted\">Entrez votre adresse email pour commencer</p>
                ";
            } else {
                // line 334
                yield "                  <p class=\"text-success mb-1\"><i class=\"bi bi-check-circle-fill me-1\"></i> Email vérifié : ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 334, $this->source); })()), "html", null, true);
                yield "</p>
                  <p class=\"text-muted\">Entrez votre numéro de téléphone pour recevoir un code de réinitialisation</p>
                ";
            }
            // line 337
            yield "              </div>
              
              <form method=\"post\">
                ";
            // line 340
            if ((($tmp =  !(isset($context["email_verified"]) || array_key_exists("email_verified", $context) ? $context["email_verified"] : (function () { throw new RuntimeError('Variable "email_verified" does not exist.', 340, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 341
                yield "                  <div class=\"mb-4\">
                    <label for=\"email\" class=\"form-label\">Adresse email</label>
                    <div class=\"input-group\">
                      <span class=\"input-group-text\"><i class=\"bi bi-envelope\"></i></span>
                      <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required>
                    </div>
                    <small class=\"form-text text-muted\">Entrez l'adresse email associée à votre compte</small>
                  </div>
                  
                  <div class=\"d-grid gap-2\">
                    <button type=\"submit\" class=\"btn-primary-custom\">
                      <i class=\"bi bi-arrow-right me-2\"></i>Continuer
                    </button>
                  </div>
                ";
            } else {
                // line 356
                yield "                  <div class=\"mb-4\">
                    <label for=\"telephone\" class=\"form-label\">Numéro de téléphone</label>
                    <div class=\"input-group\">
                      <span class=\"input-group-text\"><i class=\"bi bi-phone\"></i></span>
                      <input type=\"tel\" class=\"form-control\" id=\"telephone\" name=\"telephone\" pattern=\"[0-9]{8}\" required>
                    </div>
                    <small class=\"form-text text-muted\">Entrez votre numéro de téléphone au format tunisien (8 chiffres)</small>
                  </div>
                  
                  <div class=\"d-grid gap-2\">
                    <button type=\"submit\" class=\"btn-primary-custom\">
                      <i class=\"bi bi-send me-2\"></i>Recevoir le code
                    </button>
                  </div>
                  
                  <div class=\"mt-3 text-center\">
                    <a href=\"";
                // line 372
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
                yield "?reset=1\" class=\"text-primary\">
                      <i class=\"bi bi-arrow-counterclockwise me-1\"></i>Recommencer
                    </a>
                  </div>
                ";
            }
            // line 377
            yield "              </form>
            </div>
          </div>
        ";
        } elseif ((        // line 380
array_key_exists("step", $context) && ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 380, $this->source); })()) == "check_code"))) {
            // line 381
            yield "          <div class=\"profile-card\">
            <div class=\"profile-card-header\">
              <i class=\"bi bi-shield-check me-2\"></i>Étape 2 : Vérification du code
            </div>
            <div class=\"card-body\">
              ";
            // line 386
            if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 386, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 387
                yield "                <div class=\"alert alert-danger\">
                  <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>";
                // line 388
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 388, $this->source); })()), "html", null, true);
                yield "
                </div>
              ";
            }
            // line 391
            yield "              
              ";
            // line 392
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 392, $this->source); })()), "flashes", [], "any", false, false, false, 392));
            foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
                // line 393
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 394
                    yield "                  <div class=\"alert alert-";
                    yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                    yield "\">
                    ";
                    // line 395
                    if ((($context["label"] == "error") || ($context["label"] == "danger"))) {
                        // line 396
                        yield "                      <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
                    ";
                    } elseif ((                    // line 397
$context["label"] == "info")) {
                        // line 398
                        yield "                      <i class=\"bi bi-info-circle-fill me-2\"></i>
                    ";
                    } else {
                        // line 400
                        yield "                      <i class=\"bi bi-check-circle-fill me-2\"></i>
                    ";
                    }
                    // line 402
                    yield "                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                    yield "
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 405
                yield "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 406
            yield "              
              <div class=\"text-center mb-4\">
                <div class=\"reset-icon\">
                  <i class=\"bi bi-shield-check\"></i>
                </div>
                <h4>Vérification du code</h4>
                <p class=\"text-muted\">Un code de vérification a été envoyé à l'adresse email associée à votre compte.</p>
              </div>
              
              <form method=\"post\">
                <div class=\"mb-4\">
                  <label for=\"verification_code\" class=\"form-label\">Code de vérification</label>
                  <input type=\"text\" class=\"form-control verification-code-input\" id=\"verification_code\" name=\"verification_code\" pattern=\"[0-9]{6}\" maxlength=\"6\" placeholder=\"------\" required>
                  <small class=\"form-text text-muted\">Entrez le code à 6 chiffres reçu par email</small>
                </div>
                
                <div class=\"d-grid gap-2\">
                  <button type=\"submit\" class=\"btn-primary-custom\">
                    <i class=\"bi bi-check-lg me-2\"></i>Vérifier le code
                  </button>
                </div>
                
                <div class=\"mt-3 text-center\">
                  <a href=\"";
            // line 429
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
            yield "\" class=\"text-primary\">
                    <i class=\"bi bi-arrow-left me-1\"></i>Retour
                  </a>
                </div>
              </form>
            </div>
          </div>
        ";
        } elseif ((        // line 436
array_key_exists("step", $context) && ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 436, $this->source); })()) == "reset"))) {
            // line 437
            yield "          <div class=\"profile-card\">
            <div class=\"profile-card-header\">
              <i class=\"bi bi-key me-2\"></i>Étape 3 : Nouveau mot de passe
            </div>
            <div class=\"card-body\">
              ";
            // line 442
            if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 442, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 443
                yield "                <div class=\"alert alert-danger\">
                  <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>";
                // line 444
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 444, $this->source); })()), "html", null, true);
                yield "
                </div>
              ";
            }
            // line 447
            yield "              
              ";
            // line 448
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 448, $this->source); })()), "flashes", [], "any", false, false, false, 448));
            foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
                // line 449
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 450
                    yield "                  <div class=\"alert alert-";
                    yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                    yield "\">
                    ";
                    // line 451
                    if ((($context["label"] == "error") || ($context["label"] == "danger"))) {
                        // line 452
                        yield "                      <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
                    ";
                    } elseif ((                    // line 453
$context["label"] == "info")) {
                        // line 454
                        yield "                      <i class=\"bi bi-info-circle-fill me-2\"></i>
                    ";
                    } else {
                        // line 456
                        yield "                      <i class=\"bi bi-check-circle-fill me-2\"></i>
                    ";
                    }
                    // line 458
                    yield "                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                    yield "
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 461
                yield "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 462
            yield "              
              <div class=\"text-center mb-4\">
                <div class=\"reset-icon\">
                  <i class=\"bi bi-key\"></i>
                </div>
                <h4>Définir un nouveau mot de passe</h4>
                <p class=\"text-muted\">Choisissez un mot de passe fort pour sécuriser votre compte</p>
              </div>
              
              <form method=\"post\">
                <div class=\"mb-3\">
                  <label for=\"new_password\" class=\"form-label\">Nouveau mot de passe</label>
                  <input type=\"password\" class=\"form-control\" id=\"new_password\" name=\"new_password\" minlength=\"8\" required>
                  <div class=\"password-strength mt-2\">
                    <div id=\"passwordStrength\" class=\"password-strength-bar\"></div>
                  </div>
                  <div class=\"d-flex justify-content-between mt-1\">
                    <small class=\"form-text text-muted\">Minimum 8 caractères</small>
                    <small id=\"passwordFeedback\" class=\"password-feedback\"></small>
                  </div>
                </div>
                
                <div class=\"mb-4\">
                  <label for=\"confirm_password\" class=\"form-label\">Confirmer le mot de passe</label>
                  <input type=\"password\" class=\"form-control\" id=\"confirm_password\" name=\"confirm_password\" minlength=\"8\" required>
                </div>
                
                <div class=\"d-grid gap-2\">
                  <button type=\"submit\" class=\"btn-primary-custom\">
                    <i class=\"bi bi-check-lg me-2\"></i>Enregistrer le nouveau mot de passe
                  </button>
                </div>
              </form>
              
              <div class=\"mt-4\">
                <div class=\"profile-card-header\">
                  <i class=\"bi bi-shield-lock me-2\"></i>Conseils de sécurité
                </div>
                <div class=\"card-body pt-3\">
                  <ul class=\"security-tips mb-0 ps-0 list-unstyled\">
                    <li>Utilisez un mot de passe unique pour chaque site web.</li>
                    <li>Incluez des lettres majuscules, minuscules, des chiffres et des caractères spéciaux.</li>
                    <li>Évitez d'utiliser des informations personnelles facilement devinables.</li>
                    <li>Changez régulièrement votre mot de passe pour une sécurité optimale.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        ";
        }
        // line 512
        yield "      </div>
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
        return "user/reset_password.html.twig";
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
        return array (  796 => 512,  744 => 462,  738 => 461,  728 => 458,  724 => 456,  720 => 454,  718 => 453,  715 => 452,  713 => 451,  708 => 450,  703 => 449,  699 => 448,  696 => 447,  690 => 444,  687 => 443,  685 => 442,  678 => 437,  676 => 436,  666 => 429,  641 => 406,  635 => 405,  625 => 402,  621 => 400,  617 => 398,  615 => 397,  612 => 396,  610 => 395,  605 => 394,  600 => 393,  596 => 392,  593 => 391,  587 => 388,  584 => 387,  582 => 386,  575 => 381,  573 => 380,  568 => 377,  560 => 372,  542 => 356,  525 => 341,  523 => 340,  518 => 337,  511 => 334,  507 => 332,  505 => 331,  499 => 328,  494 => 325,  488 => 324,  478 => 321,  474 => 319,  470 => 317,  468 => 316,  465 => 315,  463 => 314,  458 => 313,  453 => 312,  449 => 311,  446 => 310,  440 => 307,  437 => 306,  435 => 305,  428 => 300,  426 => 299,  400 => 276,  394 => 273,  388 => 270,  372 => 257,  356 => 243,  346 => 242,  258 => 161,  248 => 160,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Réinitialisation du mot de passe{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
  :root {
    --primary-color: #4f46e5;
    --secondary-color: #ef4444;
  }

  .profile-header {
    background-color: #f8f9fa;
    padding: 2rem 0;
    margin-top: 0;
    margin-bottom: 2rem;
    border-bottom: 1px solid #dee2e6;
  }
  
  .back-arrow {
    position: absolute;
    top: 20px;
    left: 20px;
    font-size: 1.5rem;
    color: #666;
    transition: all 0.2s ease;
    z-index: 1000;
  }
  
  .back-arrow:hover {
    color: var(--primary-color);
    transform: translateX(-3px);
  }
  
  .profile-avatar {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    background-color: var(--primary-color);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 3rem;
    color: #fff;
    margin: 0 auto 1rem;
  }
  
  .profile-card {
    border-radius: 0.5rem;
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    margin-bottom: 2rem;
    border: none;
  }
  
  .profile-card-header {
    background-color: #f8f9fa;
    padding: 1rem;
    border-bottom: 1px solid #dee2e6;
    font-weight: 600;
  }
  
  .back-link {
    display: inline-block;
    margin: 20px 0;
    color: #333;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.2s ease;
  }
  
  .back-link:hover {
    color: var(--primary-color);
    transform: translateX(-3px);
  }
  
  .back-link i {
    font-size: 1.2rem;
    vertical-align: middle;
  }
  
  .list-group-item.active {
    background-color: var(--primary-color);
    border-color: var(--primary-color);
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
  
  .reset-icon {
    font-size: 2rem;
    color: var(--primary-color);
    margin-bottom: 15px;
  }
  
  .verification-code-input {
    letter-spacing: 0.5em;
    text-align: center;
    font-size: 1.5rem;
  }
  
  .password-strength {
    margin-top: 10px;
    height: 5px;
    border-radius: 3px;
    background-color: #e9ecef;
  }
  
  .password-strength-bar {
    height: 100%;
    border-radius: 3px;
    transition: width 0.3s ease;
  }
  
  .strength-weak {
    background-color: var(--secondary-color);
    width: 33%;
  }
  
  .strength-medium {
    background-color: #ffc107;
    width: 66%;
  }
  
  .strength-strong {
    background-color: #28a745;
    width: 100%;
  }
  
  .security-tips li {
    margin-bottom: 8px;
    position: relative;
    padding-left: 25px;
  }
  
  .security-tips li:before {
    content: \"\\F26B\";
    font-family: \"bootstrap-icons\";
    position: absolute;
    left: 0;
    color: var(--primary-color);
  }
</style>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Vérification de la force du mot de passe
    const passwordInput = document.getElementById('new_password');
    if (passwordInput) {
      const strengthBar = document.getElementById('passwordStrength');
      const feedbackText = document.getElementById('passwordFeedback');
      
      passwordInput.addEventListener('input', function() {
        const password = this.value;
        let strength = 0;
        let feedback = '';
        
        // Vérification de la longueur
        if (password.length >= 8) {
          strength += 1;
        }
        
        // Vérification des chiffres
        if (/\\d/.test(password)) {
          strength += 1;
        }
        
        // Vérification des lettres majuscules
        if (/[A-Z]/.test(password)) {
          strength += 1;
        }
        
        // Vérification des caractères spéciaux
        if (/[^A-Za-z0-9]/.test(password)) {
          strength += 1;
        }
        
        // Mise à jour de l'indicateur de force
        strengthBar.style.width = (strength * 25) + '%';
        
        switch(strength) {
          case 0:
            strengthBar.style.width = '0%';
            feedbackText.textContent = '';
            break;
          case 1:
            strengthBar.className = 'password-strength-bar strength-weak';
            feedbackText.textContent = 'Faible';
            feedbackText.className = 'password-feedback text-danger';
            break;
          case 2:
            strengthBar.className = 'password-strength-bar strength-medium';
            feedbackText.textContent = 'Moyen';
            feedbackText.className = 'password-feedback text-warning';
            break;
          case 3:
            strengthBar.className = 'password-strength-bar strength-strong';
            feedbackText.textContent = 'Fort';
            feedbackText.className = 'password-feedback text-success';
            break;
          case 4:
            strengthBar.className = 'password-strength-bar strength-strong';
            feedbackText.textContent = 'Excellent';
            feedbackText.className = 'password-feedback text-success';
            break;
        }
      });
    }
    
    // Vérification de la correspondance des mots de passe
    const confirmInput = document.getElementById('confirm_password');
    if (confirmInput && passwordInput) {
      confirmInput.addEventListener('input', function() {
        if (this.value && this.value !== passwordInput.value) {
          this.setCustomValidity('Les mots de passe ne correspondent pas');
        } else {
          this.setCustomValidity('');
        }
      });
    }
  });
</script>
{% endblock %}

{% block body %}
  <div class=\"profile-header\" style=\"margin-top: 0;\">
    <div class=\"container\">
      <div class=\"row align-items-center\">
        <div class=\"col-md-3 text-center\">
          <div class=\"profile-avatar\">
            <i class=\"bi bi-person\"></i>
          </div>
        </div>
        <div class=\"col-md-9\">
          <h2>Réinitialisation du mot de passe</h2>
          <p class=\"text-muted mb-0\">Sécurisez votre compte avec un nouveau mot de passe</p>
        </div>
      </div>
    </div>
    <a href=\"{{ path('app_home') }}\" class=\"back-arrow\" title=\"Retour à l'accueil\">
      <i class=\"bi bi-arrow-left\"></i>
    </a>
  </div>

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-4\">
        <div class=\"profile-card\">
          <div class=\"profile-card-header\">
            Menu
          </div>
          <div class=\"list-group list-group-flush\">
            <a href=\"{{ path('mon_compte') }}\" class=\"list-group-item list-group-item-action\">
              <i class=\"bi bi-person-circle me-2\"></i>Informations personnelles
            </a>
            <a href=\"{{ path('mon_compte_securite') }}\" class=\"list-group-item list-group-item-action\">
              <i class=\"bi bi-shield-lock me-2\"></i>Sécurité
            </a>
            <a href=\"{{ path('app_logout') }}\" class=\"list-group-item list-group-item-action text-danger\">
              <i class=\"bi bi-box-arrow-right me-2\"></i>Déconnexion
            </a>
          </div>
        </div>
        
        <div class=\"profile-card\">
          <div class=\"profile-card-header\">
            <i class=\"bi bi-info-circle me-2\"></i>Informations
          </div>
          <div class=\"card-body\">
            <p class=\"card-text\">La réinitialisation de votre mot de passe se fait en trois étapes :</p>
            <ol>
              <li>Entrez votre adresse email</li>
              <li>Saisissez le code reçu par email</li>
              <li>Définissez votre nouveau mot de passe</li>
            </ol>
            <p class=\"small text-muted\">Un code de vérification sera envoyé à l'adresse email associée à votre compte.</p>
          </div>
        </div>
      </div>
      
      <div class=\"col-md-8\">
        {% if step is defined and step == 'request' %}
          <div class=\"profile-card\">
            <div class=\"profile-card-header\">
              <i class=\"bi bi-phone me-2\"></i>Réinitialisation du mot de passe
            </div>
            <div class=\"card-body\">
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
              
              <div class=\"text-center mb-4\">
                <div class=\"reset-icon\">
                  <i class=\"bi bi-{{ not email_verified ? 'envelope' : 'phone' }}\"></i>
                </div>
                <h4>Mot de passe oublié ?</h4>
                {% if not email_verified %}
                  <p class=\"text-muted\">Entrez votre adresse email pour commencer</p>
                {% else %}
                  <p class=\"text-success mb-1\"><i class=\"bi bi-check-circle-fill me-1\"></i> Email vérifié : {{ email }}</p>
                  <p class=\"text-muted\">Entrez votre numéro de téléphone pour recevoir un code de réinitialisation</p>
                {% endif %}
              </div>
              
              <form method=\"post\">
                {% if not email_verified %}
                  <div class=\"mb-4\">
                    <label for=\"email\" class=\"form-label\">Adresse email</label>
                    <div class=\"input-group\">
                      <span class=\"input-group-text\"><i class=\"bi bi-envelope\"></i></span>
                      <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required>
                    </div>
                    <small class=\"form-text text-muted\">Entrez l'adresse email associée à votre compte</small>
                  </div>
                  
                  <div class=\"d-grid gap-2\">
                    <button type=\"submit\" class=\"btn-primary-custom\">
                      <i class=\"bi bi-arrow-right me-2\"></i>Continuer
                    </button>
                  </div>
                {% else %}
                  <div class=\"mb-4\">
                    <label for=\"telephone\" class=\"form-label\">Numéro de téléphone</label>
                    <div class=\"input-group\">
                      <span class=\"input-group-text\"><i class=\"bi bi-phone\"></i></span>
                      <input type=\"tel\" class=\"form-control\" id=\"telephone\" name=\"telephone\" pattern=\"[0-9]{8}\" required>
                    </div>
                    <small class=\"form-text text-muted\">Entrez votre numéro de téléphone au format tunisien (8 chiffres)</small>
                  </div>
                  
                  <div class=\"d-grid gap-2\">
                    <button type=\"submit\" class=\"btn-primary-custom\">
                      <i class=\"bi bi-send me-2\"></i>Recevoir le code
                    </button>
                  </div>
                  
                  <div class=\"mt-3 text-center\">
                    <a href=\"{{ path('app_forgot_password_request') }}?reset=1\" class=\"text-primary\">
                      <i class=\"bi bi-arrow-counterclockwise me-1\"></i>Recommencer
                    </a>
                  </div>
                {% endif %}
              </form>
            </div>
          </div>
        {% elseif step is defined and step == 'check_code' %}
          <div class=\"profile-card\">
            <div class=\"profile-card-header\">
              <i class=\"bi bi-shield-check me-2\"></i>Étape 2 : Vérification du code
            </div>
            <div class=\"card-body\">
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
              
              <div class=\"text-center mb-4\">
                <div class=\"reset-icon\">
                  <i class=\"bi bi-shield-check\"></i>
                </div>
                <h4>Vérification du code</h4>
                <p class=\"text-muted\">Un code de vérification a été envoyé à l'adresse email associée à votre compte.</p>
              </div>
              
              <form method=\"post\">
                <div class=\"mb-4\">
                  <label for=\"verification_code\" class=\"form-label\">Code de vérification</label>
                  <input type=\"text\" class=\"form-control verification-code-input\" id=\"verification_code\" name=\"verification_code\" pattern=\"[0-9]{6}\" maxlength=\"6\" placeholder=\"------\" required>
                  <small class=\"form-text text-muted\">Entrez le code à 6 chiffres reçu par email</small>
                </div>
                
                <div class=\"d-grid gap-2\">
                  <button type=\"submit\" class=\"btn-primary-custom\">
                    <i class=\"bi bi-check-lg me-2\"></i>Vérifier le code
                  </button>
                </div>
                
                <div class=\"mt-3 text-center\">
                  <a href=\"{{ path('app_forgot_password_request') }}\" class=\"text-primary\">
                    <i class=\"bi bi-arrow-left me-1\"></i>Retour
                  </a>
                </div>
              </form>
            </div>
          </div>
        {% elseif step is defined and step == 'reset' %}
          <div class=\"profile-card\">
            <div class=\"profile-card-header\">
              <i class=\"bi bi-key me-2\"></i>Étape 3 : Nouveau mot de passe
            </div>
            <div class=\"card-body\">
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
              
              <div class=\"text-center mb-4\">
                <div class=\"reset-icon\">
                  <i class=\"bi bi-key\"></i>
                </div>
                <h4>Définir un nouveau mot de passe</h4>
                <p class=\"text-muted\">Choisissez un mot de passe fort pour sécuriser votre compte</p>
              </div>
              
              <form method=\"post\">
                <div class=\"mb-3\">
                  <label for=\"new_password\" class=\"form-label\">Nouveau mot de passe</label>
                  <input type=\"password\" class=\"form-control\" id=\"new_password\" name=\"new_password\" minlength=\"8\" required>
                  <div class=\"password-strength mt-2\">
                    <div id=\"passwordStrength\" class=\"password-strength-bar\"></div>
                  </div>
                  <div class=\"d-flex justify-content-between mt-1\">
                    <small class=\"form-text text-muted\">Minimum 8 caractères</small>
                    <small id=\"passwordFeedback\" class=\"password-feedback\"></small>
                  </div>
                </div>
                
                <div class=\"mb-4\">
                  <label for=\"confirm_password\" class=\"form-label\">Confirmer le mot de passe</label>
                  <input type=\"password\" class=\"form-control\" id=\"confirm_password\" name=\"confirm_password\" minlength=\"8\" required>
                </div>
                
                <div class=\"d-grid gap-2\">
                  <button type=\"submit\" class=\"btn-primary-custom\">
                    <i class=\"bi bi-check-lg me-2\"></i>Enregistrer le nouveau mot de passe
                  </button>
                </div>
              </form>
              
              <div class=\"mt-4\">
                <div class=\"profile-card-header\">
                  <i class=\"bi bi-shield-lock me-2\"></i>Conseils de sécurité
                </div>
                <div class=\"card-body pt-3\">
                  <ul class=\"security-tips mb-0 ps-0 list-unstyled\">
                    <li>Utilisez un mot de passe unique pour chaque site web.</li>
                    <li>Incluez des lettres majuscules, minuscules, des chiffres et des caractères spéciaux.</li>
                    <li>Évitez d'utiliser des informations personnelles facilement devinables.</li>
                    <li>Changez régulièrement votre mot de passe pour une sécurité optimale.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        {% endif %}
      </div>
    </div>
  </div>
{% endblock %}
", "user/reset_password.html.twig", "C:\\PIDEV\\PIDV-WEB3A19-Mouheb-User - Copy\\templates\\user\\reset_password.html.twig");
    }
}
