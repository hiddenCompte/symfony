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

/* user/upload_image.html.twig */
class __TwigTemplate_7331aaa3b92bea6d37371b604c5f62ab extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/upload_image.html.twig"));

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

        yield "Modifier ma photo de profil";
        
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
    background-color: white;
  }
  
  .profile-card-header {
    background-color: #f8f9fa;
    padding: 1rem;
    border-bottom: 1px solid #dee2e6;
    font-weight: 600;
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
  
  .image-preview {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    margin: 20px auto;
    overflow: hidden;
    border: 3px solid var(--primary-color);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }
  
  .image-preview img {
    width: 100%;
    height: 100%;
    object-fit: cover;
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
  
  .list-group-item.active {
    background-color: var(--primary-color);
    border-color: var(--primary-color);
  }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 149
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 150
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Prévisualisation de l'image
    const imageInput = document.getElementById('profile_image_imageFile');
    if (imageInput) {
      imageInput.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = function(e) {
            const preview = document.getElementById('imagePreview');
            if (preview) {
              preview.src = e.target.result;
              document.querySelector('.image-preview').style.display = 'block';
            }
          };
          reader.readAsDataURL(file);
        }
      });
    }
  });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 175
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 176
        yield "  <div class=\"profile-header\">
    <div class=\"container\">
      <div class=\"row align-items-center\">
        <div class=\"col-md-3 text-center\">
          <div class=\"profile-avatar\">
            ";
        // line 181
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 181, $this->source); })()), "profileImage", [], "any", false, false, false, 181)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 182
            yield "              <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 182, $this->source); })()), "profileImage", [], "any", false, false, false, 182))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 182, $this->source); })()), "prenom", [], "any", false, false, false, 182), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 182, $this->source); })()), "nom", [], "any", false, false, false, 182), "html", null, true);
            yield "\">
            ";
        } else {
            // line 184
            yield "              <i class=\"bi bi-person\"></i>
            ";
        }
        // line 186
        yield "          </div>
        </div>
        <div class=\"col-md-9\">
          <h2>";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 189, $this->source); })()), "prenom", [], "any", false, false, false, 189), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 189, $this->source); })()), "nom", [], "any", false, false, false, 189), "html", null, true);
        yield "</h2>
          <p class=\"text-muted mb-2\">";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 190, $this->source); })()), "email", [], "any", false, false, false, 190), "html", null, true);
        yield "</p>
          <p class=\"mb-0\">
            <span class=\"badge\" style=\"background-color: var(--primary-color);\">";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 192, $this->source); })()), "typeUtilisateur", [], "any", false, false, false, 192)), "html", null, true);
        yield "</span>
            <span class=\"text-muted ms-2\">Membre depuis ";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 193, $this->source); })()), "dateInscription", [], "any", false, false, false, 193), "d/m/Y"), "html", null, true);
        yield "</span>
          </p>
        </div>
      </div>
    </div>
    <a href=\"";
        // line 198
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mon_compte");
        yield "\" class=\"back-arrow\" title=\"Retour au profil\">
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
        // line 211
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mon_compte");
        yield "\" class=\"list-group-item list-group-item-action\">
              <i class=\"bi bi-person me-2\"></i> Informations personnelles
            </a>
            <a href=\"";
        // line 214
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mon_compte_securite");
        yield "\" class=\"list-group-item list-group-item-action\">
              <i class=\"bi bi-shield-lock me-2\"></i> Sécurité
            </a>
            <a href=\"";
        // line 217
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"list-group-item list-group-item-action\">
              <i class=\"bi bi-box-arrow-right me-2\"></i> Déconnexion
            </a>
          </div>
        </div>
      </div>
      
      <div class=\"col-md-8\">
        <div class=\"profile-card\">
          <div class=\"profile-card-header\">
            Modifier ma photo de profil
          </div>
          <div class=\"card-body\">
            ";
        // line 230
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 230, $this->source); })()), "flashes", ["success"], "method", false, false, false, 230));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 231
            yield "              <div class=\"alert alert-success\">
                <i class=\"bi bi-check-circle-fill me-2\"></i>";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        yield "            
            ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 236, $this->source); })()), "flashes", ["error"], "method", false, false, false, 236));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 237
            yield "              <div class=\"alert alert-danger\">
                <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>";
            // line 238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        yield "            
            ";
        // line 242
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 242, $this->source); })()), "flashes", ["info"], "method", false, false, false, 242));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 243
            yield "              <div class=\"alert alert-info\">
                <i class=\"bi bi-info-circle-fill me-2\"></i>";
            // line 244
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        yield "            
            <div class=\"mb-4\">
              <h5>État actuel</h5>
              <p>Image de profil actuelle: ";
        // line 250
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 250, $this->source); })()), "profileImage", [], "any", false, false, false, 250)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 250, $this->source); })()), "profileImage", [], "any", false, false, false, 250), "html", null, true);
            yield "\"";
        } else {
            yield "Aucune";
        }
        yield "</p>
            </div>
            
            <div class=\"image-preview\" ";
        // line 253
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 253, $this->source); })()), "profileImage", [], "any", false, false, false, 253)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "style=\"display: none;\"";
        }
        yield ">
              <img id=\"imagePreview\" src=\"";
        // line 254
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 254, $this->source); })()), "profileImage", [], "any", false, false, false, 254)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 254, $this->source); })()), "profileImage", [], "any", false, false, false, 254))), "html", null, true);
        }
        yield "\" alt=\"Prévisualisation\">
            </div>
            
            ";
        // line 257
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 257, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        yield "
              <div class=\"mb-3\">
                ";
        // line 259
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 259, $this->source); })()), "imageFile", [], "any", false, false, false, 259), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Photo de profil"]);
        yield "
                ";
        // line 260
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 260, $this->source); })()), "imageFile", [], "any", false, false, false, 260), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                <small class=\"form-text text-muted\">Formats acceptés : JPG, PNG, GIF. Taille maximale : 2 Mo.</small>
                ";
        // line 262
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 262, $this->source); })()), "imageFile", [], "any", false, false, false, 262), 'errors');
        yield "
              </div>
              
              <div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">
                <a href=\"";
        // line 266
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mon_compte");
        yield "\" class=\"btn btn-secondary me-md-2\">Annuler</a>
                <button type=\"submit\" class=\"btn-primary-custom\">Enregistrer</button>
              </div>
            ";
        // line 269
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 269, $this->source); })()), 'form_end');
        yield "
          </div>
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
        return "user/upload_image.html.twig";
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
        return array (  512 => 269,  506 => 266,  499 => 262,  494 => 260,  490 => 259,  485 => 257,  477 => 254,  471 => 253,  459 => 250,  454 => 247,  445 => 244,  442 => 243,  438 => 242,  435 => 241,  426 => 238,  423 => 237,  419 => 236,  416 => 235,  407 => 232,  404 => 231,  400 => 230,  384 => 217,  378 => 214,  372 => 211,  356 => 198,  348 => 193,  344 => 192,  339 => 190,  333 => 189,  328 => 186,  324 => 184,  314 => 182,  312 => 181,  305 => 176,  295 => 175,  263 => 150,  253 => 149,  107 => 10,  97 => 9,  88 => 6,  78 => 5,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier ma photo de profil{% endblock %}

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
    background-color: white;
  }
  
  .profile-card-header {
    background-color: #f8f9fa;
    padding: 1rem;
    border-bottom: 1px solid #dee2e6;
    font-weight: 600;
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
  
  .image-preview {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    margin: 20px auto;
    overflow: hidden;
    border: 3px solid var(--primary-color);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }
  
  .image-preview img {
    width: 100%;
    height: 100%;
    object-fit: cover;
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
  
  .list-group-item.active {
    background-color: var(--primary-color);
    border-color: var(--primary-color);
  }
</style>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Prévisualisation de l'image
    const imageInput = document.getElementById('profile_image_imageFile');
    if (imageInput) {
      imageInput.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = function(e) {
            const preview = document.getElementById('imagePreview');
            if (preview) {
              preview.src = e.target.result;
              document.querySelector('.image-preview').style.display = 'block';
            }
          };
          reader.readAsDataURL(file);
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
          <div class=\"profile-avatar\">
            {% if user.profileImage %}
              <img src=\"{{ asset('uploads/profile_images/' ~ user.profileImage) }}\" alt=\"{{ user.prenom }} {{ user.nom }}\">
            {% else %}
              <i class=\"bi bi-person\"></i>
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
    <a href=\"{{ path('mon_compte') }}\" class=\"back-arrow\" title=\"Retour au profil\">
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
              <i class=\"bi bi-person me-2\"></i> Informations personnelles
            </a>
            <a href=\"{{ path('mon_compte_securite') }}\" class=\"list-group-item list-group-item-action\">
              <i class=\"bi bi-shield-lock me-2\"></i> Sécurité
            </a>
            <a href=\"{{ path('app_logout') }}\" class=\"list-group-item list-group-item-action\">
              <i class=\"bi bi-box-arrow-right me-2\"></i> Déconnexion
            </a>
          </div>
        </div>
      </div>
      
      <div class=\"col-md-8\">
        <div class=\"profile-card\">
          <div class=\"profile-card-header\">
            Modifier ma photo de profil
          </div>
          <div class=\"card-body\">
            {% for message in app.flashes('success') %}
              <div class=\"alert alert-success\">
                <i class=\"bi bi-check-circle-fill me-2\"></i>{{ message }}
              </div>
            {% endfor %}
            
            {% for message in app.flashes('error') %}
              <div class=\"alert alert-danger\">
                <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>{{ message }}
              </div>
            {% endfor %}
            
            {% for message in app.flashes('info') %}
              <div class=\"alert alert-info\">
                <i class=\"bi bi-info-circle-fill me-2\"></i>{{ message }}
              </div>
            {% endfor %}
            
            <div class=\"mb-4\">
              <h5>État actuel</h5>
              <p>Image de profil actuelle: {% if user.profileImage %}\"{{ user.profileImage }}\"{% else %}Aucune{% endif %}</p>
            </div>
            
            <div class=\"image-preview\" {% if not user.profileImage %}style=\"display: none;\"{% endif %}>
              <img id=\"imagePreview\" src=\"{% if user.profileImage %}{{ asset('uploads/profile_images/' ~ user.profileImage) }}{% endif %}\" alt=\"Prévisualisation\">
            </div>
            
            {{ form_start(form, {'attr': {'enctype': 'multipart/form-data'}}) }}
              <div class=\"mb-3\">
                {{ form_label(form.imageFile, 'Photo de profil', {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.imageFile, {'attr': {'class': 'form-control'}}) }}
                <small class=\"form-text text-muted\">Formats acceptés : JPG, PNG, GIF. Taille maximale : 2 Mo.</small>
                {{ form_errors(form.imageFile) }}
              </div>
              
              <div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">
                <a href=\"{{ path('mon_compte') }}\" class=\"btn btn-secondary me-md-2\">Annuler</a>
                <button type=\"submit\" class=\"btn-primary-custom\">Enregistrer</button>
              </div>
            {{ form_end(form) }}
          </div>
        </div>
      </div>
    </div>
  </div>
{% endblock %}
", "user/upload_image.html.twig", "/Users/moetezjebari/Desktop/PIDV-WEB3A19-Mouheb-User - Copy/Downloads/PIDV-WEB3A19-Mouheb-User - Copy/Downloads/PIDV-WEB3A19-Mouheb-User - Copy/templates/user/upload_image.html.twig");
    }
}
