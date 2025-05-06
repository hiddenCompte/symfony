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

/* admin/base_admin.html.twig */
class __TwigTemplate_a60a9455660c16ce8d362eb6df841608 extends Template
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
            'page_title' => [$this, 'block_page_title'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base_admin.html.twig"));

        // line 1
        yield "<!doctype html>
<html lang=\"en\">
  <!--begin::Head-->
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <!--begin::Primary Meta Tags-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta name=\"title\" content=\"FreelanceConnect | Administration\" />
    <meta name=\"author\" content=\"FreelanceConnect\" />
    <!--end::Primary Meta Tags-->
    <!--begin::Fonts-->
    <link
      rel=\"stylesheet\"
      href=\"https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css\"
      integrity=\"sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=\"
      crossorigin=\"anonymous\"
    />
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
      rel=\"stylesheet\"
      href=\"https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css\"
      integrity=\"sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg=\"
      crossorigin=\"anonymous\"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel=\"stylesheet\"
      href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css\"
      integrity=\"sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI=\"
      crossorigin=\"anonymous\"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel=\"stylesheet\" href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/adminlte.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/adminlte.min.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/adminlte-custom.css"), "html", null, true);
        yield "\" />
    <!--end::Required Plugin(AdminLTE)-->
    ";
        // line 41
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 42
        yield "  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body class=\"layout-fixed sidebar-expand-lg bg-body-tertiary\">
    <!--begin::App Wrapper-->
    <div class=\"app-wrapper\">
      <!--begin::Header-->
      <nav class=\"app-header navbar navbar-expand bg-body\">
        <!--begin::Container-->
        <div class=\"container-fluid\">
          <!--begin::Start Navbar Links-->
          <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
              <a class=\"nav-link\" data-lte-toggle=\"sidebar\" href=\"#\" role=\"button\">
                <i class=\"bi bi-list\"></i>
              </a>
            </li>
            <li class=\"nav-item d-none d-md-block\"><a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-link\">Accueil</a></li>
            <li class=\"nav-item d-none d-md-block\"><a href=\"#\" class=\"nav-link\">Contact</a></li>
          </ul>
          <!--end::Start Navbar Links-->
          <!--begin::End Navbar Links-->
          <ul class=\"navbar-nav ms-auto\">
            <!--begin::User Menu Dropdown-->
            <li class=\"nav-item dropdown user-menu\">
              <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                <i class=\"fas fa-user-circle fa-lg me-2\"></i>
                <span class=\"d-none d-md-inline\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "nom", [], "any", false, false, false, 69), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "prenom", [], "any", false, false, false, 69), "html", null, true);
        yield "</span>
              </a>
              <ul class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end\">
                <!--begin::User Image-->
                <li class=\"user-header text-bg-primary\">
                  <i class=\"fas fa-user-circle fa-4x mb-3\"></i>
                  <p>
                    ";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "nom", [], "any", false, false, false, 76), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "prenom", [], "any", false, false, false, 76), "html", null, true);
        yield "
                    <small>Administrateur</small>
                  </p>
                </li>
                <!--end::User Image-->
                <!--begin::Menu Footer-->
                <li class=\"user-footer\">
                  <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mon_compte");
        yield "\" class=\"btn btn-default btn-flat\">Profile</a>
                  <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"btn btn-default btn-flat float-end\">Déconnexion</a>
                </li>
                <!--end::Menu Footer-->
              </ul>
            </li>
            <!--end::User Menu Dropdown-->
          </ul>
          <!--end::End Navbar Links-->
        </div>
        <!--end::Container-->
      </nav>
      <!--end::Header-->
      <!--begin::Sidebar-->
      <aside class=\"app-sidebar bg-body-secondary shadow\" data-bs-theme=\"dark\">
        <!--begin::Sidebar Brand-->
        <div class=\"sidebar-brand\">
          <!--begin::Brand Link-->
          <a href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"brand-link\">
            <!--begin::Brand Text-->
            <span class=\"brand-text fw-light\">FreelanceConnect</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class=\"sidebar-wrapper\">
          <nav class=\"mt-2\">
            <!--begin::Sidebar Menu-->
            <ul class=\"nav sidebar-menu flex-column\" data-lte-toggle=\"treeview\" role=\"menu\" data-accordion=\"false\">
              <li class=\"nav-item\">
                <a href=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "request", [], "any", false, false, false, 115), "get", ["_route"], "method", false, false, false, 115) == "app_admin_dashboard")) {
            yield "active";
        }
        yield "\">
                  <i class=\"nav-icon bi bi-speedometer\"></i>
                  <p>Tableau de bord</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 121
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\" class=\"nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "request", [], "any", false, false, false, 121), "get", ["_route"], "method", false, false, false, 121) == "admin_users")) {
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
              <li class=\"nav-item mt-auto\">
                <a href=\"";
        // line 133
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-link text-danger\">
                  <i class=\"nav-icon bi bi-box-arrow-right\"></i>
                  <p>Déconnexion</p>
                </a>
              </li>
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class=\"app-main\">
        <!--begin::App Content Header-->
        <div class=\"app-content-header\">
          <!--begin::Container-->
          <div class=\"container-fluid\">
            <!--begin::Row-->
            <div class=\"row\">
              <div class=\"col-sm-6\">
                <h3 class=\"mb-0\">";
        // line 154
        yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
        yield "</h3>
              </div>
              <div class=\"col-sm-6\">
                <ol class=\"breadcrumb float-sm-end\">
                  <li class=\"breadcrumb-item\"><a href=\"";
        // line 158
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">Accueil</a></li>
                  <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 159
        yield from $this->unwrap()->yieldBlock('breadcrumb', $context, $blocks);
        yield "</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class=\"app-content\">
          <!--begin::Container-->
          <div class=\"container-fluid\">
            ";
        // line 172
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 173
        yield "          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
    </div>
    <!--end::App Wrapper-->

    <!--begin::Script-->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/overlayscrollbars@2.4.4/browser/overlayscrollbars.browser.es6.min.js\"></script>
    <script src=\"";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/adminlte.js"), "html", null, true);
        yield "\"></script>
    ";
        // line 186
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 187
        yield "    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "FreelanceConnect";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 154
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 159
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 172
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 186
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/base_admin.html.twig";
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
        return array (  402 => 186,  386 => 172,  370 => 159,  354 => 154,  338 => 41,  321 => 6,  309 => 187,  307 => 186,  303 => 185,  289 => 173,  287 => 172,  271 => 159,  267 => 158,  260 => 154,  236 => 133,  217 => 121,  204 => 115,  187 => 101,  167 => 84,  163 => 83,  151 => 76,  139 => 69,  126 => 59,  107 => 42,  105 => 41,  100 => 39,  96 => 38,  92 => 37,  58 => 6,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html lang=\"en\">
  <!--begin::Head-->
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>{% block title %}FreelanceConnect{% endblock %}</title>
    <!--begin::Primary Meta Tags-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta name=\"title\" content=\"FreelanceConnect | Administration\" />
    <meta name=\"author\" content=\"FreelanceConnect\" />
    <!--end::Primary Meta Tags-->
    <!--begin::Fonts-->
    <link
      rel=\"stylesheet\"
      href=\"https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css\"
      integrity=\"sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=\"
      crossorigin=\"anonymous\"
    />
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
      rel=\"stylesheet\"
      href=\"https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css\"
      integrity=\"sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg=\"
      crossorigin=\"anonymous\"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel=\"stylesheet\"
      href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css\"
      integrity=\"sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI=\"
      crossorigin=\"anonymous\"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/adminlte.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/adminlte.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/adminlte-custom.css') }}\" />
    <!--end::Required Plugin(AdminLTE)-->
    {% block stylesheets %}{% endblock %}
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body class=\"layout-fixed sidebar-expand-lg bg-body-tertiary\">
    <!--begin::App Wrapper-->
    <div class=\"app-wrapper\">
      <!--begin::Header-->
      <nav class=\"app-header navbar navbar-expand bg-body\">
        <!--begin::Container-->
        <div class=\"container-fluid\">
          <!--begin::Start Navbar Links-->
          <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
              <a class=\"nav-link\" data-lte-toggle=\"sidebar\" href=\"#\" role=\"button\">
                <i class=\"bi bi-list\"></i>
              </a>
            </li>
            <li class=\"nav-item d-none d-md-block\"><a href=\"{{ path('app_home') }}\" class=\"nav-link\">Accueil</a></li>
            <li class=\"nav-item d-none d-md-block\"><a href=\"#\" class=\"nav-link\">Contact</a></li>
          </ul>
          <!--end::Start Navbar Links-->
          <!--begin::End Navbar Links-->
          <ul class=\"navbar-nav ms-auto\">
            <!--begin::User Menu Dropdown-->
            <li class=\"nav-item dropdown user-menu\">
              <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                <i class=\"fas fa-user-circle fa-lg me-2\"></i>
                <span class=\"d-none d-md-inline\">{{ app.user.nom }} {{ app.user.prenom }}</span>
              </a>
              <ul class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end\">
                <!--begin::User Image-->
                <li class=\"user-header text-bg-primary\">
                  <i class=\"fas fa-user-circle fa-4x mb-3\"></i>
                  <p>
                    {{ app.user.nom }} {{ app.user.prenom }}
                    <small>Administrateur</small>
                  </p>
                </li>
                <!--end::User Image-->
                <!--begin::Menu Footer-->
                <li class=\"user-footer\">
                  <a href=\"{{ path('mon_compte') }}\" class=\"btn btn-default btn-flat\">Profile</a>
                  <a href=\"{{ path('app_logout') }}\" class=\"btn btn-default btn-flat float-end\">Déconnexion</a>
                </li>
                <!--end::Menu Footer-->
              </ul>
            </li>
            <!--end::User Menu Dropdown-->
          </ul>
          <!--end::End Navbar Links-->
        </div>
        <!--end::Container-->
      </nav>
      <!--end::Header-->
      <!--begin::Sidebar-->
      <aside class=\"app-sidebar bg-body-secondary shadow\" data-bs-theme=\"dark\">
        <!--begin::Sidebar Brand-->
        <div class=\"sidebar-brand\">
          <!--begin::Brand Link-->
          <a href=\"{{ path('app_admin_dashboard') }}\" class=\"brand-link\">
            <!--begin::Brand Text-->
            <span class=\"brand-text fw-light\">FreelanceConnect</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class=\"sidebar-wrapper\">
          <nav class=\"mt-2\">
            <!--begin::Sidebar Menu-->
            <ul class=\"nav sidebar-menu flex-column\" data-lte-toggle=\"treeview\" role=\"menu\" data-accordion=\"false\">
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
              <li class=\"nav-item mt-auto\">
                <a href=\"{{ path('app_logout') }}\" class=\"nav-link text-danger\">
                  <i class=\"nav-icon bi bi-box-arrow-right\"></i>
                  <p>Déconnexion</p>
                </a>
              </li>
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class=\"app-main\">
        <!--begin::App Content Header-->
        <div class=\"app-content-header\">
          <!--begin::Container-->
          <div class=\"container-fluid\">
            <!--begin::Row-->
            <div class=\"row\">
              <div class=\"col-sm-6\">
                <h3 class=\"mb-0\">{% block page_title %}{% endblock %}</h3>
              </div>
              <div class=\"col-sm-6\">
                <ol class=\"breadcrumb float-sm-end\">
                  <li class=\"breadcrumb-item\"><a href=\"{{ path('app_admin_dashboard') }}\">Accueil</a></li>
                  <li class=\"breadcrumb-item active\" aria-current=\"page\">{% block breadcrumb %}{% endblock %}</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class=\"app-content\">
          <!--begin::Container-->
          <div class=\"container-fluid\">
            {% block content %}{% endblock %}
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
    </div>
    <!--end::App Wrapper-->

    <!--begin::Script-->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/overlayscrollbars@2.4.4/browser/overlayscrollbars.browser.es6.min.js\"></script>
    <script src=\"{{ asset('assets/js/adminlte.js') }}\"></script>
    {% block javascripts %}{% endblock %}
    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
", "admin/base_admin.html.twig", "/Users/moetezjebari/Desktop/PIDV-WEB3A19-Mouheb-User - Copy/Downloads/PIDV-WEB3A19-Mouheb-User - Copy/Downloads/PIDV-WEB3A19-Mouheb-User - Copy/templates/admin/base_admin.html.twig");
    }
}
