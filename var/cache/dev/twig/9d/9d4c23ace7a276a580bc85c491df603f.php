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

/* admin/base.html.twig */
class __TwigTemplate_01e3751b2168cc3ba86bd70d4d5693c7 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'main' => [$this, 'block_main'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta name=\"author\" content=\"FreelanceConnect\" />
    <meta name=\"description\" content=\"Plateforme de mise en relation entre freelances et clients\" />
    <meta name=\"keywords\" content=\"freelance, clients, projets, administration\" />

    ";
        // line 11
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 18
        yield "  </head>

  <body class=\"layout-fixed layout-navbar-fixed\" data-overlayscrollbars-viewport=\"scrollbarHidden overflowXHidden overflowYScroll\">
    <div class=\"wrapper\">
      <nav class=\"app-header navbar navbar-expand bg-primary navbar-dark border-bottom-0 shadow-sm\">
        <div class=\"container-fluid\">
          <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
              <button type=\"button\" class=\"nav-link\" data-lte-toggle=\"sidebar\">
                <i class=\"bi bi-list\"></i>
              </button>
            </li>
          </ul>
          <ul class=\"navbar-nav ms-auto\">
            <li class=\"nav-item dropdown\">
              <a href=\"#\" class=\"nav-link\" data-bs-toggle=\"dropdown\">
                <i class=\"bi bi-bell\"></i>
                <span class=\"navbar-badge badge text-bg-warning\">15</span>
              </a>
              <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end\">
                <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item\">
                  <i class=\"bi bi-envelope me-2\"></i> 4 nouveaux messages
                  <span class=\"float-end text-muted text-sm\">3 mins</span>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item dropdown-footer\">Voir toutes les notifications</a>
              </div>
            </li>
            <li class=\"nav-item dropdown user-menu\">
              <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                <img src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/default-avatar.jpg"), "html", null, true);
        yield "\" class=\"user-image rounded-circle shadow\" alt=\"User Image\">
                <span class=\"d-none d-md-inline\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "nom", [], "any", false, false, false, 51), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "prenom", [], "any", false, false, false, 51), "html", null, true);
        yield "</span>
              </a>
              <ul class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end\">
                <li class=\"user-header bg-primary\">
                  <img src=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/default-avatar.jpg"), "html", null, true);
        yield "\" class=\"rounded-circle shadow\" alt=\"User Image\">
                  <p>
                    ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "nom", [], "any", false, false, false, 57), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "prenom", [], "any", false, false, false, 57), "html", null, true);
        yield "
                    <small>Membre depuis ";
        // line 58
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "dateInscription", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "dateInscription", [], "any", false, false, false, 58), "M. Y"), "html", null, true)) : ("N/A"));
        yield "</small>
                  </p>
                </li>
                <li class=\"user-footer\">
                  <a href=\"#\" class=\"btn btn-default btn-flat\">Profil</a>
                  <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"btn btn-default btn-flat float-end\">Déconnexion</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>

      <aside class=\"app-sidebar bg-dark elevation-4\">
        <div class=\"sidebar-brand\">
          <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"brand-link text-center bg-primary\">
            <span class=\"brand-text fw-bold text-white\">FreelanceConnect</span>
          </a>
        </div>

        <div class=\"sidebar-menu\">
          <nav class=\"mt-4\">
            <ul
              class=\"nav nav-pills nav-sidebar flex-column nav-child-indent\"
              data-lte-toggle=\"treeview\"
              role=\"menu\"
              data-accordion=\"false\"
            >
              <li class=\"nav-item\">
                <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "request", [], "any", false, false, false, 87), "get", ["_route"], "method", false, false, false, 87) == "app_admin_dashboard")) {
            yield "active";
        }
        yield "\">
                  <i class=\"nav-icon bi bi-speedometer\"></i>
                  <p>Tableau de bord</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\" class=\"nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "request", [], "any", false, false, false, 93), "get", ["_route"], "method", false, false, false, 93) == "admin_users")) {
            yield "active";
        }
        yield "\">
                  <i class=\"nav-icon bi bi-people\"></i>
                  <p>Utilisateurs</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link\">
                  <i class=\"nav-icon bi bi-kanban\"></i>
                  <p>Projets</p>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </aside>

      <main class=\"app-main\">
        ";
        // line 110
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 111
        yield "      </main>
    </div>

    ";
        // line 114
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 120
        yield "  </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "FreelanceConnect | Administration";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        yield "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" />
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/adminlte.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/adminlte.min.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/adminlte-custom.css"), "html", null, true);
        yield "\" />
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 110
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 114
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 115
        yield "    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script src=\"";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/adminlte.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/dashboard.js"), "html", null, true);
        yield "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/base.html.twig";
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
        return array (  301 => 118,  297 => 117,  293 => 115,  283 => 114,  267 => 110,  257 => 16,  253 => 15,  249 => 14,  245 => 12,  235 => 11,  218 => 5,  208 => 120,  206 => 114,  201 => 111,  199 => 110,  175 => 93,  162 => 87,  145 => 73,  132 => 63,  124 => 58,  118 => 57,  113 => 55,  104 => 51,  100 => 50,  66 => 18,  64 => 11,  55 => 5,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>{% block title %}FreelanceConnect | Administration{% endblock %}</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta name=\"author\" content=\"FreelanceConnect\" />
    <meta name=\"description\" content=\"Plateforme de mise en relation entre freelances et clients\" />
    <meta name=\"keywords\" content=\"freelance, clients, projets, administration\" />

    {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" />
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/adminlte.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/adminlte.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/adminlte-custom.css') }}\" />
    {% endblock %}
  </head>

  <body class=\"layout-fixed layout-navbar-fixed\" data-overlayscrollbars-viewport=\"scrollbarHidden overflowXHidden overflowYScroll\">
    <div class=\"wrapper\">
      <nav class=\"app-header navbar navbar-expand bg-primary navbar-dark border-bottom-0 shadow-sm\">
        <div class=\"container-fluid\">
          <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
              <button type=\"button\" class=\"nav-link\" data-lte-toggle=\"sidebar\">
                <i class=\"bi bi-list\"></i>
              </button>
            </li>
          </ul>
          <ul class=\"navbar-nav ms-auto\">
            <li class=\"nav-item dropdown\">
              <a href=\"#\" class=\"nav-link\" data-bs-toggle=\"dropdown\">
                <i class=\"bi bi-bell\"></i>
                <span class=\"navbar-badge badge text-bg-warning\">15</span>
              </a>
              <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end\">
                <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item\">
                  <i class=\"bi bi-envelope me-2\"></i> 4 nouveaux messages
                  <span class=\"float-end text-muted text-sm\">3 mins</span>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item dropdown-footer\">Voir toutes les notifications</a>
              </div>
            </li>
            <li class=\"nav-item dropdown user-menu\">
              <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                <img src=\"{{ asset('assets/img/default-avatar.jpg') }}\" class=\"user-image rounded-circle shadow\" alt=\"User Image\">
                <span class=\"d-none d-md-inline\">{{ app.user.nom }} {{ app.user.prenom }}</span>
              </a>
              <ul class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end\">
                <li class=\"user-header bg-primary\">
                  <img src=\"{{ asset('assets/img/default-avatar.jpg') }}\" class=\"rounded-circle shadow\" alt=\"User Image\">
                  <p>
                    {{ app.user.nom }} {{ app.user.prenom }}
                    <small>Membre depuis {{ app.user.dateInscription ? app.user.dateInscription|date('M. Y') : 'N/A' }}</small>
                  </p>
                </li>
                <li class=\"user-footer\">
                  <a href=\"#\" class=\"btn btn-default btn-flat\">Profil</a>
                  <a href=\"{{ path('app_logout') }}\" class=\"btn btn-default btn-flat float-end\">Déconnexion</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>

      <aside class=\"app-sidebar bg-dark elevation-4\">
        <div class=\"sidebar-brand\">
          <a href=\"{{ path('app_admin_dashboard') }}\" class=\"brand-link text-center bg-primary\">
            <span class=\"brand-text fw-bold text-white\">FreelanceConnect</span>
          </a>
        </div>

        <div class=\"sidebar-menu\">
          <nav class=\"mt-4\">
            <ul
              class=\"nav nav-pills nav-sidebar flex-column nav-child-indent\"
              data-lte-toggle=\"treeview\"
              role=\"menu\"
              data-accordion=\"false\"
            >
              <li class=\"nav-item\">
                <a href=\"{{ path('app_admin_dashboard') }}\" class=\"nav-link {% if app.request.get('_route') == 'app_admin_dashboard' %}active{% endif %}\">
                  <i class=\"nav-icon bi bi-speedometer\"></i>
                  <p>Tableau de bord</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"{{ path('admin_users') }}\" class=\"nav-link {% if app.request.get('_route') == 'admin_users' %}active{% endif %}\">
                  <i class=\"nav-icon bi bi-people\"></i>
                  <p>Utilisateurs</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link\">
                  <i class=\"nav-icon bi bi-kanban\"></i>
                  <p>Projets</p>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </aside>

      <main class=\"app-main\">
        {% block main %}{% endblock %}
      </main>
    </div>

    {% block javascripts %}
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script src=\"{{ asset('assets/js/adminlte.js') }}\"></script>
    <script src=\"{{ asset('assets/js/dashboard.js') }}\"></script>
    {% endblock %}
  </body>
</html>
", "admin/base.html.twig", "C:\\PIDEV\\PIDV-WEB3A19-Mouheb-User - Copy\\templates\\admin\\base.html.twig");
    }
}
