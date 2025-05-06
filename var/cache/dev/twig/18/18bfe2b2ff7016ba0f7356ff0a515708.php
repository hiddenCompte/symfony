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

/* user/profile.html.twig */
class __TwigTemplate_c2673756ebd41ebbf1779d52e9872c4b extends Template
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
            'header' => [$this, 'block_header'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

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

        yield "Mon Profil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 6
        yield "<!-- Suppression du header pour avoir le même design que la page de sécurité -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
  :root {
    --primary-color: #4f46e5;
    --secondary-color: #ef4444;
  }
  
  body {
    font-family: 'Inter', sans-serif;
    color: #333;
    background-color: #f9fafb;
  }
  
  .account-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem 1rem;
    position: relative;
  }
  
  .profile-section {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    padding: 2rem;
    margin-bottom: 2rem;
  }
  
  .profile-header {
    background-color: #f8f9fa;
    padding: 2rem 0;
    margin-top: 0;
    margin-bottom: 2rem;
    border-bottom: 1px solid #dee2e6;
  }
  
  .profile-avatar-container {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 1rem;
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
    overflow: hidden;
    position: relative;
    margin-bottom: 10px;
  }
  
  .profile-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
  }
  
  .profile-image-actions {
    margin-top: 10px;
    text-align: center;
  }
  
  .btn-edit-photo {
    background-color: #f8f9fa;
    color: #333;
    border: 1px solid #dee2e6;
    border-radius: 20px;
    padding: 5px 15px;
    font-size: 0.85rem;
    transition: all 0.2s;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
  }
  
  .btn-edit-photo:hover {
    background-color: var(--primary-color);
    color: white;
    border-color: var(--primary-color);
  }
  
  .btn-edit-photo i {
    margin-right: 5px;
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
  
  .edit-photo-button {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 1.5rem;
    color: #fff;
    background-color: var(--primary-color);
    padding: 5px 10px;
    border-radius: 5px;
    text-decoration: none;
  }
  
  .edit-photo-button:hover {
    background-color: #4338ca;
    text-decoration: none;
    color: white;
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
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 232
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 233
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Validation du formulaire de suppression de compte
    const deleteForm = document.getElementById('deleteAccountForm');
    if (deleteForm) {
      deleteForm.addEventListener('submit', function(event) {
        event.preventDefault();
        
        const password = document.getElementById('confirmPassword').value;
        if (!password) {
          alert('Veuillez entrer votre mot de passe pour confirmer la suppression.');
          return;
        }
        
        // Double confirmation
        if (confirm('Êtes-vous vraiment sûr de vouloir supprimer votre compte ? Cette action est irréversible.')) {
          this.submit();
        }
      });
    }
  });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 258
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 259
        yield "  <div class=\"profile-header\">
    <div class=\"container\">
      <div class=\"row align-items-center\">
        <div class=\"col-md-3 text-center\">
          <div class=\"profile-avatar-container\">
            ";
        // line 264
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 264, $this->source); })()), "profileImage", [], "any", false, false, false, 264)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 265
            yield "              <div class=\"profile-avatar\">
                <img src=\"";
            // line 266
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 266, $this->source); })()), "profileImage", [], "any", false, false, false, 266))), "html", null, true);
            yield "?v=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "U"), "html", null, true);
            yield "\" alt=\"Photo de profil\">
              </div>
              <div class=\"profile-image-actions\">
                <a href=\"";
            // line 269
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_upload_image");
            yield "\" class=\"btn-edit-photo\" title=\"Modifier ma photo\">
                  <i class=\"bi bi-camera\"></i> Modifier
                </a>
              </div>
            ";
        } else {
            // line 274
            yield "              <div class=\"profile-avatar\">
                <a href=\"";
            // line 275
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_upload_image");
            yield "\" class=\"photo-upload-button\" title=\"Modifier ma photo\">
                  <i class=\"bi bi-camera camera-icon\"></i>
                </a>
              </div>
            ";
        }
        // line 280
        yield "          </div>
        </div>
        <div class=\"col-md-9\">
          <h2>";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 283, $this->source); })()), "prenom", [], "any", false, false, false, 283), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 283, $this->source); })()), "nom", [], "any", false, false, false, 283), "html", null, true);
        yield "</h2>
          <p class=\"text-muted mb-2\">";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 284, $this->source); })()), "email", [], "any", false, false, false, 284), "html", null, true);
        yield "</p>
          <p class=\"mb-0\">
            <span class=\"badge\" style=\"background-color: var(--primary-color);\">";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 286, $this->source); })()), "typeUtilisateur", [], "any", false, false, false, 286)), "html", null, true);
        yield "</span>
            <span class=\"text-muted ms-2\">Membre depuis ";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 287, $this->source); })()), "dateInscription", [], "any", false, false, false, 287), "d/m/Y"), "html", null, true);
        yield "</span>
          </p>
        </div>
      </div>
    </div>
    <a href=\"";
        // line 292
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
        // line 305
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mon_compte");
        yield "\" class=\"list-group-item list-group-item-action active\">
              <i class=\"bi bi-person-circle me-2\"></i>Informations personnelles
            </a>
            <a href=\"";
        // line 308
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mon_compte_securite");
        yield "\" class=\"list-group-item list-group-item-action\">
              <i class=\"bi bi-shield-lock me-2\"></i>Sécurité
            </a>
            <a href=\"";
        // line 311
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
            Informations personnelles
          </div>
          <div class=\"card-body\">
            ";
        // line 336
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 336, $this->source); })()), "flashes", [], "any", false, false, false, 336));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 337
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 338
                yield "                <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield "\">
                  ";
                // line 339
                if ((($context["label"] == "error") || ($context["label"] == "danger"))) {
                    // line 340
                    yield "                    <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
                  ";
                } elseif ((                // line 341
$context["label"] == "info")) {
                    // line 342
                    yield "                    <i class=\"bi bi-info-circle-fill me-2\"></i>
                  ";
                } else {
                    // line 344
                    yield "                    <i class=\"bi bi-check-circle-fill me-2\"></i>
                  ";
                }
                // line 346
                yield "                  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 349
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 350
        yield "            
            <form action=\"";
        // line 351
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mon_compte_update");
        yield "\" method=\"POST\">
              <div class=\"row mb-3\">
                <div class=\"col-md-6\">
                  <label for=\"nom\" class=\"form-label\">Nom</label>
                  <input type=\"text\" class=\"form-control\" id=\"nom\" name=\"nom\" value=\"";
        // line 355
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 355, $this->source); })()), "nom", [], "any", false, false, false, 355), "html", null, true);
        yield "\" required>
                </div>
                <div class=\"col-md-6\">
                  <label for=\"prenom\" class=\"form-label\">Prénom</label>
                  <input type=\"text\" class=\"form-control\" id=\"prenom\" name=\"prenom\" value=\"";
        // line 359
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 359, $this->source); })()), "prenom", [], "any", false, false, false, 359), "html", null, true);
        yield "\" required>
                </div>
              </div>
              <div class=\"mb-3\">
                <label for=\"email\" class=\"form-label\">Email</label>
                <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"";
        // line 364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 364, $this->source); })()), "email", [], "any", false, false, false, 364), "html", null, true);
        yield "\" required>
              </div>
              <div class=\"mb-3\">
                <label for=\"telephone\" class=\"form-label\">Téléphone</label>
                <div class=\"input-group\">
                  <span class=\"input-group-text\">+216</span>
                  <input type=\"tel\" class=\"form-control\" id=\"telephone\" name=\"telephone\" value=\"";
        // line 370
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 370, $this->source); })()), "telephone", [], "any", false, false, false, 370), "html", null, true);
        yield "\" pattern=\"[0-9]{8}\" title=\"Le numéro de téléphone doit contenir 8 chiffres\" required>
                </div>
                <small class=\"form-text text-muted\">Format: 8 chiffres sans espaces (ex: 12345678)</small>
              </div>
              <button type=\"submit\" class=\"btn-primary-custom\">
                <i class=\"bi bi-save me-2\"></i>Enregistrer les modifications
              </button>
            </form>
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
        // line 395
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete_account");
        yield "\" method=\"POST\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 396
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
        return "user/profile.html.twig";
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
        return array (  622 => 396,  618 => 395,  590 => 370,  581 => 364,  573 => 359,  566 => 355,  559 => 351,  556 => 350,  550 => 349,  540 => 346,  536 => 344,  532 => 342,  530 => 341,  527 => 340,  525 => 339,  520 => 338,  515 => 337,  511 => 336,  483 => 311,  477 => 308,  471 => 305,  455 => 292,  447 => 287,  443 => 286,  438 => 284,  432 => 283,  427 => 280,  419 => 275,  416 => 274,  408 => 269,  400 => 266,  397 => 265,  395 => 264,  388 => 259,  378 => 258,  346 => 233,  336 => 232,  107 => 10,  97 => 9,  88 => 6,  78 => 5,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon Profil{% endblock %}

{% block header %}
<!-- Suppression du header pour avoir le même design que la page de sécurité -->
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
  :root {
    --primary-color: #4f46e5;
    --secondary-color: #ef4444;
  }
  
  body {
    font-family: 'Inter', sans-serif;
    color: #333;
    background-color: #f9fafb;
  }
  
  .account-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem 1rem;
    position: relative;
  }
  
  .profile-section {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    padding: 2rem;
    margin-bottom: 2rem;
  }
  
  .profile-header {
    background-color: #f8f9fa;
    padding: 2rem 0;
    margin-top: 0;
    margin-bottom: 2rem;
    border-bottom: 1px solid #dee2e6;
  }
  
  .profile-avatar-container {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 1rem;
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
    overflow: hidden;
    position: relative;
    margin-bottom: 10px;
  }
  
  .profile-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
  }
  
  .profile-image-actions {
    margin-top: 10px;
    text-align: center;
  }
  
  .btn-edit-photo {
    background-color: #f8f9fa;
    color: #333;
    border: 1px solid #dee2e6;
    border-radius: 20px;
    padding: 5px 15px;
    font-size: 0.85rem;
    transition: all 0.2s;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
  }
  
  .btn-edit-photo:hover {
    background-color: var(--primary-color);
    color: white;
    border-color: var(--primary-color);
  }
  
  .btn-edit-photo i {
    margin-right: 5px;
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
  
  .edit-photo-button {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 1.5rem;
    color: #fff;
    background-color: var(--primary-color);
    padding: 5px 10px;
    border-radius: 5px;
    text-decoration: none;
  }
  
  .edit-photo-button:hover {
    background-color: #4338ca;
    text-decoration: none;
    color: white;
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
</style>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Validation du formulaire de suppression de compte
    const deleteForm = document.getElementById('deleteAccountForm');
    if (deleteForm) {
      deleteForm.addEventListener('submit', function(event) {
        event.preventDefault();
        
        const password = document.getElementById('confirmPassword').value;
        if (!password) {
          alert('Veuillez entrer votre mot de passe pour confirmer la suppression.');
          return;
        }
        
        // Double confirmation
        if (confirm('Êtes-vous vraiment sûr de vouloir supprimer votre compte ? Cette action est irréversible.')) {
          this.submit();
        }
      });
    }
  });
</script>
{% endblock %}

{% block body %}
  <div class=\"profile-header\">
    <div class=\"container\">
      <div class=\"row align-items-center\">
        <div class=\"col-md-3 text-center\">
          <div class=\"profile-avatar-container\">
            {% if user.profileImage %}
              <div class=\"profile-avatar\">
                <img src=\"{{ asset('uploads/profile_images/' ~ user.profileImage) }}?v={{ 'now'|date('U') }}\" alt=\"Photo de profil\">
              </div>
              <div class=\"profile-image-actions\">
                <a href=\"{{ path('app_profile_upload_image') }}\" class=\"btn-edit-photo\" title=\"Modifier ma photo\">
                  <i class=\"bi bi-camera\"></i> Modifier
                </a>
              </div>
            {% else %}
              <div class=\"profile-avatar\">
                <a href=\"{{ path('app_profile_upload_image') }}\" class=\"photo-upload-button\" title=\"Modifier ma photo\">
                  <i class=\"bi bi-camera camera-icon\"></i>
                </a>
              </div>
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
            <a href=\"{{ path('mon_compte') }}\" class=\"list-group-item list-group-item-action active\">
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
            Informations personnelles
          </div>
          <div class=\"card-body\">
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
            
            <form action=\"{{ path('mon_compte_update') }}\" method=\"POST\">
              <div class=\"row mb-3\">
                <div class=\"col-md-6\">
                  <label for=\"nom\" class=\"form-label\">Nom</label>
                  <input type=\"text\" class=\"form-control\" id=\"nom\" name=\"nom\" value=\"{{ user.nom }}\" required>
                </div>
                <div class=\"col-md-6\">
                  <label for=\"prenom\" class=\"form-label\">Prénom</label>
                  <input type=\"text\" class=\"form-control\" id=\"prenom\" name=\"prenom\" value=\"{{ user.prenom }}\" required>
                </div>
              </div>
              <div class=\"mb-3\">
                <label for=\"email\" class=\"form-label\">Email</label>
                <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"{{ user.email }}\" required>
              </div>
              <div class=\"mb-3\">
                <label for=\"telephone\" class=\"form-label\">Téléphone</label>
                <div class=\"input-group\">
                  <span class=\"input-group-text\">+216</span>
                  <input type=\"tel\" class=\"form-control\" id=\"telephone\" name=\"telephone\" value=\"{{ user.telephone }}\" pattern=\"[0-9]{8}\" title=\"Le numéro de téléphone doit contenir 8 chiffres\" required>
                </div>
                <small class=\"form-text text-muted\">Format: 8 chiffres sans espaces (ex: 12345678)</small>
              </div>
              <button type=\"submit\" class=\"btn-primary-custom\">
                <i class=\"bi bi-save me-2\"></i>Enregistrer les modifications
              </button>
            </form>
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
", "user/profile.html.twig", "C:\\PIDEV\\PIDV-WEB3A19-Mouheb-User - Copy\\templates\\user\\profile.html.twig");
    }
}
