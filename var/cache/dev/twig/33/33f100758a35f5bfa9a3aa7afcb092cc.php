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

/* user/security.html.twig */
class __TwigTemplate_c13cc3261cd69f62d141e52d284e9453 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/security.html.twig"));

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

        yield "Sécurité - Mon Compte";
        
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
    overflow: hidden;
    position: relative;
  }
  
  .profile-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
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
  
  .delete-account-btn {
    background-color: #fff;
    color: var(--secondary-color);
    border: 1px solid var(--secondary-color);
    transition: all 0.2s ease;
  }
  
  .delete-account-btn:hover {
    background-color: var(--secondary-color);
    color: #fff;
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
  
  .camera-button {
    position: absolute;
    top: -20px;
    left: 50%;
    transform: translateX(-50%);
    background-color: var(--primary-color);
    color: white;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    transition: all 0.2s ease;
    text-decoration: none;
    z-index: 10;
  }
  
  .camera-button:hover {
    background-color: #4338ca;
    transform: translateX(-50%) scale(1.1);
    color: white;
  }
  
  .photo-upload-button {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    background-color: var(--primary-color);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    text-decoration: none;
    color: white;
    position: relative;
  }
  
  .photo-upload-button:hover {
    background-color: #4338ca;
    text-decoration: none;
    color: white;
  }
  
  .photo-upload-button .camera-icon {
    font-size: 2.5rem;
  }
  
  .photo-upload-button .icon-group {
    display: flex;
    align-items: center;
  }
  
  .photo-upload-button .bi-person {
    font-size: 2.2rem;
    margin-right: 5px;
  }
  
  .photo-upload-button .bi-camera {
    font-size: 1.8rem;
  }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 235
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 236
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Vérification de la force du mot de passe
    const newPasswordInput = document.getElementById('new_password');
    const strengthBar = document.getElementById('password-strength-bar');
    const strengthText = document.getElementById('password-strength-text');
    
    if (newPasswordInput && strengthBar && strengthText) {
      newPasswordInput.addEventListener('input', function() {
        const password = this.value;
        let strength = 0;
        
        // Longueur minimale
        if (password.length >= 8) {
          strength += 1;
        }
        
        // Contient des chiffres
        if (/\\d/.test(password)) {
          strength += 1;
        }
        
        // Contient des caractères spéciaux
        if (/[^A-Za-z0-9]/.test(password)) {
          strength += 1;
        }
        
        // Mise à jour de l'indicateur de force
        strengthBar.className = 'password-strength-bar';
        
        if (password.length === 0) {
          strengthBar.style.width = '0%';
          strengthText.textContent = '';
        } else if (strength === 1) {
          strengthBar.classList.add('strength-weak');
          strengthText.textContent = 'Faible';
          strengthText.className = 'text-danger small';
        } else if (strength === 2) {
          strengthBar.classList.add('strength-medium');
          strengthText.textContent = 'Moyen';
          strengthText.className = 'text-warning small';
        } else {
          strengthBar.classList.add('strength-strong');
          strengthText.textContent = 'Fort';
          strengthText.className = 'text-success small';
        }
      });
    }
    
    // Vérification que les deux mots de passe correspondent
    const confirmPasswordInput = document.getElementById('confirm_password');
    const passwordForm = document.getElementById('password-form');
    
    if (confirmPasswordInput && passwordForm) {
      passwordForm.addEventListener('submit', function(event) {
        if (newPasswordInput.value !== confirmPasswordInput.value) {
          event.preventDefault();
          alert('Les deux mots de passe ne correspondent pas.');
        }
      });
    }
  });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 302
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 303
        yield "  <div class=\"profile-header\" style=\"margin-top: 0;\">
    <div class=\"container\">
      <div class=\"row align-items-center\">
        <div class=\"col-md-3 text-center\">
          <div class=\"profile-avatar\">
            ";
        // line 308
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 308, $this->source); })()), "profileImage", [], "any", false, false, false, 308)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 309
            yield "              <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 309, $this->source); })()), "profileImage", [], "any", false, false, false, 309))), "html", null, true);
            yield "?v=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "U"), "html", null, true);
            yield "\" alt=\"Photo de profil\">
            ";
        } else {
            // line 311
            yield "              <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_upload_image");
            yield "\" class=\"photo-upload-button\" title=\"Modifier ma photo\">
                <i class=\"bi bi-camera camera-icon\"></i>
              </a>
            ";
        }
        // line 315
        yield "          </div>
        </div>
        <div class=\"col-md-9\">
          <h2>";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 318, $this->source); })()), "prenom", [], "any", false, false, false, 318), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 318, $this->source); })()), "nom", [], "any", false, false, false, 318), "html", null, true);
        yield "</h2>
          <p class=\"text-muted mb-2\">";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 319, $this->source); })()), "email", [], "any", false, false, false, 319), "html", null, true);
        yield "</p>
          <p class=\"mb-0\">
            <span class=\"badge\" style=\"background-color: var(--primary-color);\">";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 321, $this->source); })()), "typeUtilisateur", [], "any", false, false, false, 321)), "html", null, true);
        yield "</span>
            <span class=\"text-muted ms-2\">Membre depuis ";
        // line 322
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 322, $this->source); })()), "dateInscription", [], "any", false, false, false, 322), "d/m/Y"), "html", null, true);
        yield "</span>
          </p>
        </div>
      </div>
    </div>
    <a href=\"";
        // line 327
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
        // line 340
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mon_compte");
        yield "\" class=\"list-group-item list-group-item-action\">
              <i class=\"bi bi-person-circle me-2\"></i>Informations personnelles
            </a>
            <a href=\"";
        // line 343
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mon_compte_securite");
        yield "\" class=\"list-group-item list-group-item-action active\">
              <i class=\"bi bi-shield-lock me-2\"></i>Sécurité
            </a>
            <a href=\"";
        // line 346
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"list-group-item list-group-item-action text-danger\">
              <i class=\"bi bi-box-arrow-right me-2\"></i>Déconnexion
            </a>
          </div>
        </div>
        
        <div class=\"profile-card\">
          <div class=\"profile-card-header text-danger\">
            Zone dangereuse
          </div>
          <div class=\"card-body\">
            <p class=\"card-text\">La suppression de votre compte est définitive et entraînera la perte de toutes vos données.</p>
            <button type=\"button\" class=\"btn delete-account-btn\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteAccountModal\">
              <i class=\"bi bi-trash me-2\"></i>Supprimer mon compte
            </button>
          </div>
        </div>
      </div>
      
      <div class=\"col-md-8\">
        <div class=\"profile-card\">
          <div class=\"profile-card-header\">
            <i class=\"bi bi-key me-2\"></i>Changer mon mot de passe
          </div>
          <div class=\"card-body\">
            ";
        // line 371
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 371, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 372
            yield "              <div class=\"alert alert-danger\">
                <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>";
            // line 373
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 373, $this->source); })()), "html", null, true);
            yield "
              </div>
            ";
        }
        // line 376
        yield "            
            ";
        // line 377
        if ((($tmp = (isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 377, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 378
            yield "              <div class=\"alert alert-success\">
                <i class=\"bi bi-check-circle-fill me-2\"></i>";
            // line 379
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 379, $this->source); })()), "html", null, true);
            yield "
              </div>
            ";
        }
        // line 382
        yield "            
            <form id=\"password-form\" action=\"";
        // line 383
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mon_compte_securite");
        yield "\" method=\"POST\">
              <div class=\"mb-3\">
                <label for=\"current_password\" class=\"form-label\">Mot de passe actuel</label>
                <input type=\"password\" class=\"form-control\" id=\"current_password\" name=\"current_password\" required>
                <small class=\"form-text text-muted\">Entrez votre mot de passe actuel pour confirmer votre identité.</small>
                <div class=\"mt-2\">
                  <a href=\"";
        // line 389
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\" class=\"text-primary small\">
                    <i class=\"bi bi-question-circle me-1\"></i>Mot de passe oublié ? Réinitialiser par SMS
                  </a>
                </div>
              </div>
              
              <div class=\"mb-3\">
                <label for=\"new_password\" class=\"form-label\">Nouveau mot de passe</label>
                <input type=\"password\" class=\"form-control\" id=\"new_password\" name=\"new_password\" minlength=\"8\" required>
                <div class=\"password-strength mt-2\">
                  <div id=\"password-strength-bar\" class=\"password-strength-bar\"></div>
                </div>
                <div class=\"d-flex justify-content-between mt-1\">
                  <small class=\"form-text text-muted\">Minimum 8 caractères</small>
                  <small id=\"password-strength-text\"></small>
                </div>
              </div>
              
              <div class=\"mb-4\">
                <label for=\"confirm_password\" class=\"form-label\">Confirmer le nouveau mot de passe</label>
                <input type=\"password\" class=\"form-control\" id=\"confirm_password\" name=\"confirm_password\" minlength=\"8\" required>
              </div>
              
              <button type=\"submit\" class=\"btn-primary-custom\">
                <i class=\"bi bi-check-lg me-2\"></i>Mettre à jour le mot de passe
              </button>
            </form>
          </div>
        </div>
        
        <div class=\"profile-card\">
          <div class=\"profile-card-header\">
            <i class=\"bi bi-shield-lock me-2\"></i>Conseils de sécurité
          </div>
          <div class=\"card-body\">
            <ul class=\"security-tips mb-0 ps-0 list-unstyled\">
              <li>Utilisez un mot de passe unique pour chaque site web.</li>
              <li>Incluez des lettres majuscules, minuscules, des chiffres et des caractères spéciaux.</li>
              <li>Évitez d'utiliser des informations personnelles facilement devinables.</li>
              <li>Changez régulièrement votre mot de passe pour une sécurité optimale.</li>
              <li>Activez l'authentification à deux facteurs lorsque c'est possible.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal de suppression de compte -->
  <div class=\"modal fade\" id=\"deleteAccountModal\" tabindex=\"-1\" aria-labelledby=\"deleteAccountModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"deleteAccountModalLabel\">Confirmation de suppression</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        </div>
        <div class=\"modal-body\">
          <p class=\"text-danger\"><i class=\"bi bi-exclamation-triangle-fill me-2\"></i>Attention ! Cette action est irréversible.</p>
          <p>Pour confirmer la suppression de votre compte, veuillez saisir votre mot de passe :</p>
          <form id=\"deleteAccountForm\" action=\"";
        // line 448
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete_account");
        yield "\" method=\"POST\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 449
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete_account"), "html", null, true);
        yield "\">
            <div class=\"mb-3\">
              <label for=\"confirmPassword\" class=\"form-label\">Mot de passe</label>
              <input type=\"password\" class=\"form-control\" id=\"confirmPassword\" name=\"password\" required>
            </div>
          </form>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
          <button type=\"submit\" form=\"deleteAccountForm\" class=\"btn btn-danger\">Supprimer définitivement</button>
        </div>
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
        return "user/security.html.twig";
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
        return array (  628 => 449,  624 => 448,  562 => 389,  553 => 383,  550 => 382,  544 => 379,  541 => 378,  539 => 377,  536 => 376,  530 => 373,  527 => 372,  525 => 371,  497 => 346,  491 => 343,  485 => 340,  469 => 327,  461 => 322,  457 => 321,  452 => 319,  446 => 318,  441 => 315,  433 => 311,  425 => 309,  423 => 308,  416 => 303,  406 => 302,  333 => 236,  323 => 235,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Sécurité - Mon Compte{% endblock %}

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
    overflow: hidden;
    position: relative;
  }
  
  .profile-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
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
  
  .delete-account-btn {
    background-color: #fff;
    color: var(--secondary-color);
    border: 1px solid var(--secondary-color);
    transition: all 0.2s ease;
  }
  
  .delete-account-btn:hover {
    background-color: var(--secondary-color);
    color: #fff;
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
  
  .camera-button {
    position: absolute;
    top: -20px;
    left: 50%;
    transform: translateX(-50%);
    background-color: var(--primary-color);
    color: white;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    transition: all 0.2s ease;
    text-decoration: none;
    z-index: 10;
  }
  
  .camera-button:hover {
    background-color: #4338ca;
    transform: translateX(-50%) scale(1.1);
    color: white;
  }
  
  .photo-upload-button {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    background-color: var(--primary-color);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    text-decoration: none;
    color: white;
    position: relative;
  }
  
  .photo-upload-button:hover {
    background-color: #4338ca;
    text-decoration: none;
    color: white;
  }
  
  .photo-upload-button .camera-icon {
    font-size: 2.5rem;
  }
  
  .photo-upload-button .icon-group {
    display: flex;
    align-items: center;
  }
  
  .photo-upload-button .bi-person {
    font-size: 2.2rem;
    margin-right: 5px;
  }
  
  .photo-upload-button .bi-camera {
    font-size: 1.8rem;
  }
</style>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Vérification de la force du mot de passe
    const newPasswordInput = document.getElementById('new_password');
    const strengthBar = document.getElementById('password-strength-bar');
    const strengthText = document.getElementById('password-strength-text');
    
    if (newPasswordInput && strengthBar && strengthText) {
      newPasswordInput.addEventListener('input', function() {
        const password = this.value;
        let strength = 0;
        
        // Longueur minimale
        if (password.length >= 8) {
          strength += 1;
        }
        
        // Contient des chiffres
        if (/\\d/.test(password)) {
          strength += 1;
        }
        
        // Contient des caractères spéciaux
        if (/[^A-Za-z0-9]/.test(password)) {
          strength += 1;
        }
        
        // Mise à jour de l'indicateur de force
        strengthBar.className = 'password-strength-bar';
        
        if (password.length === 0) {
          strengthBar.style.width = '0%';
          strengthText.textContent = '';
        } else if (strength === 1) {
          strengthBar.classList.add('strength-weak');
          strengthText.textContent = 'Faible';
          strengthText.className = 'text-danger small';
        } else if (strength === 2) {
          strengthBar.classList.add('strength-medium');
          strengthText.textContent = 'Moyen';
          strengthText.className = 'text-warning small';
        } else {
          strengthBar.classList.add('strength-strong');
          strengthText.textContent = 'Fort';
          strengthText.className = 'text-success small';
        }
      });
    }
    
    // Vérification que les deux mots de passe correspondent
    const confirmPasswordInput = document.getElementById('confirm_password');
    const passwordForm = document.getElementById('password-form');
    
    if (confirmPasswordInput && passwordForm) {
      passwordForm.addEventListener('submit', function(event) {
        if (newPasswordInput.value !== confirmPasswordInput.value) {
          event.preventDefault();
          alert('Les deux mots de passe ne correspondent pas.');
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
            {% if user.profileImage %}
              <img src=\"{{ asset('uploads/profile_images/' ~ user.profileImage) }}?v={{ 'now'|date('U') }}\" alt=\"Photo de profil\">
            {% else %}
              <a href=\"{{ path('app_profile_upload_image') }}\" class=\"photo-upload-button\" title=\"Modifier ma photo\">
                <i class=\"bi bi-camera camera-icon\"></i>
              </a>
            {% endif %}
          </div>
        </div>
        <div class=\"col-md-9\">
          <h2>{{ user.prenom }} {{ user.nom }}</h2>
          <p class=\"text-muted mb-2\">{{ user.email }}</p>
          <p class=\"mb-0\">
            <span class=\"badge\" style=\"background-color: var(--primary-color);\">{{ user.typeUtilisateur|capitalize }}</span>
            <span class=\"text-muted ms-2\">Membre depuis {{ user.dateInscription|date('d/m/Y') }}</span>
          </p>
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
            <a href=\"{{ path('mon_compte_securite') }}\" class=\"list-group-item list-group-item-action active\">
              <i class=\"bi bi-shield-lock me-2\"></i>Sécurité
            </a>
            <a href=\"{{ path('app_logout') }}\" class=\"list-group-item list-group-item-action text-danger\">
              <i class=\"bi bi-box-arrow-right me-2\"></i>Déconnexion
            </a>
          </div>
        </div>
        
        <div class=\"profile-card\">
          <div class=\"profile-card-header text-danger\">
            Zone dangereuse
          </div>
          <div class=\"card-body\">
            <p class=\"card-text\">La suppression de votre compte est définitive et entraînera la perte de toutes vos données.</p>
            <button type=\"button\" class=\"btn delete-account-btn\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteAccountModal\">
              <i class=\"bi bi-trash me-2\"></i>Supprimer mon compte
            </button>
          </div>
        </div>
      </div>
      
      <div class=\"col-md-8\">
        <div class=\"profile-card\">
          <div class=\"profile-card-header\">
            <i class=\"bi bi-key me-2\"></i>Changer mon mot de passe
          </div>
          <div class=\"card-body\">
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
            
            <form id=\"password-form\" action=\"{{ path('mon_compte_securite') }}\" method=\"POST\">
              <div class=\"mb-3\">
                <label for=\"current_password\" class=\"form-label\">Mot de passe actuel</label>
                <input type=\"password\" class=\"form-control\" id=\"current_password\" name=\"current_password\" required>
                <small class=\"form-text text-muted\">Entrez votre mot de passe actuel pour confirmer votre identité.</small>
                <div class=\"mt-2\">
                  <a href=\"{{ path('app_forgot_password_request') }}\" class=\"text-primary small\">
                    <i class=\"bi bi-question-circle me-1\"></i>Mot de passe oublié ? Réinitialiser par SMS
                  </a>
                </div>
              </div>
              
              <div class=\"mb-3\">
                <label for=\"new_password\" class=\"form-label\">Nouveau mot de passe</label>
                <input type=\"password\" class=\"form-control\" id=\"new_password\" name=\"new_password\" minlength=\"8\" required>
                <div class=\"password-strength mt-2\">
                  <div id=\"password-strength-bar\" class=\"password-strength-bar\"></div>
                </div>
                <div class=\"d-flex justify-content-between mt-1\">
                  <small class=\"form-text text-muted\">Minimum 8 caractères</small>
                  <small id=\"password-strength-text\"></small>
                </div>
              </div>
              
              <div class=\"mb-4\">
                <label for=\"confirm_password\" class=\"form-label\">Confirmer le nouveau mot de passe</label>
                <input type=\"password\" class=\"form-control\" id=\"confirm_password\" name=\"confirm_password\" minlength=\"8\" required>
              </div>
              
              <button type=\"submit\" class=\"btn-primary-custom\">
                <i class=\"bi bi-check-lg me-2\"></i>Mettre à jour le mot de passe
              </button>
            </form>
          </div>
        </div>
        
        <div class=\"profile-card\">
          <div class=\"profile-card-header\">
            <i class=\"bi bi-shield-lock me-2\"></i>Conseils de sécurité
          </div>
          <div class=\"card-body\">
            <ul class=\"security-tips mb-0 ps-0 list-unstyled\">
              <li>Utilisez un mot de passe unique pour chaque site web.</li>
              <li>Incluez des lettres majuscules, minuscules, des chiffres et des caractères spéciaux.</li>
              <li>Évitez d'utiliser des informations personnelles facilement devinables.</li>
              <li>Changez régulièrement votre mot de passe pour une sécurité optimale.</li>
              <li>Activez l'authentification à deux facteurs lorsque c'est possible.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal de suppression de compte -->
  <div class=\"modal fade\" id=\"deleteAccountModal\" tabindex=\"-1\" aria-labelledby=\"deleteAccountModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"deleteAccountModalLabel\">Confirmation de suppression</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        </div>
        <div class=\"modal-body\">
          <p class=\"text-danger\"><i class=\"bi bi-exclamation-triangle-fill me-2\"></i>Attention ! Cette action est irréversible.</p>
          <p>Pour confirmer la suppression de votre compte, veuillez saisir votre mot de passe :</p>
          <form id=\"deleteAccountForm\" action=\"{{ path('user_delete_account') }}\" method=\"POST\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_account') }}\">
            <div class=\"mb-3\">
              <label for=\"confirmPassword\" class=\"form-label\">Mot de passe</label>
              <input type=\"password\" class=\"form-control\" id=\"confirmPassword\" name=\"password\" required>
            </div>
          </form>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
          <button type=\"submit\" form=\"deleteAccountForm\" class=\"btn btn-danger\">Supprimer définitivement</button>
        </div>
      </div>
    </div>
  </div>
{% endblock %}
", "user/security.html.twig", "/Users/moetezjebari/Desktop/PIDV-WEB3A19-Mouheb-User - Copy/Downloads/PIDV-WEB3A19-Mouheb-User - Copy/Downloads/PIDV-WEB3A19-Mouheb-User - Copy/templates/user/security.html.twig");
    }
}
