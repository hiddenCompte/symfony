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

/* reset_password/reset_password_guest.html.twig */
class __TwigTemplate_14bdb13ca794f039526468ebca8c1e0f extends Template
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
            'footer' => [$this, 'block_footer'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/reset_password_guest.html.twig"));

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

        yield "FreeLanceConnect - Réinitialisation du mot de passe";
        
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        :root {
            --primary-color: #4f46e5;
            --secondary-color: #7c3aed;
            --surface-color: #ffffff;
            --text-primary: #1f2937;
            --text-secondary: #6b7280;
        }

        .auth-page {
            min-height: 100vh;
            background: linear-gradient(135deg, #f8faff 0%, #f0f4ff 100%);
            padding: 2rem 1rem;
            display: flex;
            align-items: center;
        }
        .auth-card {
            background: white;
            border-radius: 24px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
            overflow: hidden;
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            display: flex;
            position: relative;
        }
        .auth-card::before,
        .auth-card::after {
            content: '';
            position: absolute;
            width: 1000px;
            height: 1000px;
            border-radius: 50%;
            z-index: 0;
        }

        .auth-card::before {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            top: -60%;
            left: -20%;
            animation: gradientMove 15s ease infinite;
            filter: blur(30px);
            opacity: 0.8;
        }

        .auth-card::after {
            background: linear-gradient(-45deg, #4f46e5, #9333ea);
            bottom: -60%;
            right: -20%;
            animation: gradientMove2 20s ease infinite;
            filter: blur(35px);
            opacity: 0.6;
        }
        @keyframes gradientMove {
            0% { transform: rotate(0deg) scale(1); }
            50% { transform: rotate(180deg) scale(1.1); }
            100% { transform: rotate(360deg) scale(1); }
        }

        @keyframes gradientMove2 {
            0% { transform: rotate(0deg) scale(1.1); }
            50% { transform: rotate(-180deg) scale(1); }
            100% { transform: rotate(-360deg) scale(1.1); }
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        .auth-banner {
            flex: 1;
            padding: 3rem;
            color: white;
            position: relative;
            z-index: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .floating-icons {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 100%;
            pointer-events: none;
            opacity: 0.8;
        }

        .floating-icon {
            position: absolute;
            width: 32px;
            height: 32px;
            color: white;
            opacity: 0.8;
        }

        .floating-icon:nth-child(1) {
            top: 20%;
            left: 20%;
            animation: float 6s ease-in-out infinite;
        }

        .floating-icon:nth-child(2) {
            top: 40%;
            right: 25%;
            animation: float 8s ease-in-out infinite 1s;
        }

        .floating-icon:nth-child(3) {
            bottom: 30%;
            left: 30%;
            animation: float 7s ease-in-out infinite 2s;
        }

        @keyframes float {
            0% {
                transform: translateY(0px) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(10deg);
            }
            100% {
                transform: translateY(0px) rotate(0deg);
            }
        }

        .auth-banner-content {
            position: relative;
            z-index: 2;
        }

        .auth-banner h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }
        .auth-banner p {
            font-size: 1.1rem;
            opacity: 0.9;
            line-height: 1.6;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }
        .auth-form {
            flex: 1;
            background: white;
            padding: 3rem;
            position: relative;
            z-index: 1;
        }
        .auth-form-container {
            max-width: 400px;
            margin: 0 auto;
        }
        .auth-title {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: var(--text-primary);
        }
        .auth-subtitle {
            color: var(--text-secondary);
            margin-bottom: 2rem;
        }
        .form-floating {
            margin-bottom: 1.5rem;
        }
        .form-floating input {
            height: 56px;
            border-radius: 12px;
            border: 2px solid #e5e7eb;
            padding: 1rem 1rem 0;
            font-size: 1rem;
            transition: all 0.2s ease;
        }

        .form-floating .form-control:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1);
            outline: none;
        }

        .form-floating label {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            padding: 0.75rem 1rem;
            pointer-events: none;
            border: 1px solid transparent;
            transform-origin: 0 0;
            transition: all 0.2s ease;
            color: var(--text-secondary);
        }
        .form-floating input:focus ~ label,
        .form-floating input:not(:placeholder-shown) ~ label {
            transform: translateY(-0.5rem) scale(0.85);
            opacity: 0.65;
            color: var(--primary-color);
            height: auto;
        }
        .form-check {
            margin: 1rem 0;
        }
        .form-check input {
            width: 1.2em;
            height: 1.2em;
            margin-right: 0.5rem;
            cursor: pointer;
        }
        .btn-auth {
            width: 100%;
            padding: 1rem;
            border: none;
            border-radius: 12px;
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            color: white;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 1rem;
            position: relative;
            overflow: hidden;
        }
        .btn-auth:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(79, 70, 229, 0.25);
        }
        .btn-auth:active {
            transform: translateY(0);
        }
        .btn-auth::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: 0.5s;
        }

        .btn-auth:hover::before {
            left: 100%;
        }
        .auth-links {
            text-align: right;
            margin-top: 1rem;
        }
        .auth-links a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }
        .auth-links a:hover {
            text-decoration: underline;
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 2rem 0;
            color: var(--text-secondary);
        }
        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-top: 2px solid #e5e7eb;
        }
        .divider-text {
            padding: 0 1rem;
            font-weight: 500;
        }
        .register-link {
            text-align: center;
            margin-top: 2rem;
            color: var(--text-secondary);
        }
        .register-link a {
            color: var(--primary-color);
            font-weight: 500;
            text-decoration: none;
        }
        .register-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .auth-card {
                flex-direction: column;
            }
            .auth-banner {
                padding: 2rem;
                text-align: center;
            }
            .auth-form {
                padding: 2rem;
            }
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
            background-color: #ef4444;
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

        .reset-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 356
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 357
        yield "    ";
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
                            strengthBar.className = 'password-strength-bar strength-medium';
                            feedbackText.textContent = 'Bon';
                            feedbackText.className = 'password-feedback text-primary';
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

    // line 438
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 439
        yield "    <div class=\"auth-page\">
        <div class=\"auth-card\">
            <div class=\"auth-banner\">
                <div class=\"floating-icons\">
                    <svg class=\"floating-icon\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M12 15V17M6 7V9M6 11V13M6 15V17M12 7V13M18 7V9M18 11V13M18 15V17M4 5H20C21.1 5 22 5.9 22 7V17C22 18.1 21.1 19 20 19H4C2.9 19 2 18.1 2 17V7C2 5.9 2.9 5 4 5Z\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                    </svg>
                    <svg class=\"floating-icon\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M12 4V20M4 12H20\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                    </svg>
                    <svg class=\"floating-icon\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M16 8V16M12 11V16M8 14V16M4 4H20V20H4V4Z\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                    </svg>
                </div>
                
                <div class=\"auth-banner-content\">
                    <h1><a href=\"";
        // line 455
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" style=\"color: inherit; text-decoration: none;\">FreeLanceConnect</a></h1>
                    <p>Réinitialisez votre mot de passe en toute sécurité pour retrouver l'accès à votre compte.</p>
                </div>
            </div>
            
            <div class=\"auth-form\">
                <div class=\"auth-form-container\">
                    ";
        // line 462
        if ((array_key_exists("step", $context) && ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 462, $this->source); })()) == "request"))) {
            // line 463
            yield "                        <h2 class=\"auth-title\">Mot de passe oublié</h2>
                        ";
            // line 464
            if ((($tmp =  !(isset($context["email_verified"]) || array_key_exists("email_verified", $context) ? $context["email_verified"] : (function () { throw new RuntimeError('Variable "email_verified" does not exist.', 464, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 465
                yield "                            <p class=\"auth-subtitle\">Entrez votre adresse email pour commencer</p>

                            ";
                // line 467
                if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 467, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 468
                    yield "                                <div class=\"alert alert-danger\">
                                    <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>";
                    // line 469
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 469, $this->source); })()), "html", null, true);
                    yield "
                                </div>
                            ";
                }
                // line 472
                yield "
                            ";
                // line 473
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 473, $this->source); })()), "flashes", [], "any", false, false, false, 473));
                foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
                    // line 474
                    yield "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 475
                        yield "                                    <div class=\"alert alert-";
                        yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                        yield "\">
                                        ";
                        // line 476
                        if ((($context["label"] == "error") || ($context["label"] == "danger"))) {
                            // line 477
                            yield "                                            <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
                                        ";
                        } elseif ((                        // line 478
$context["label"] == "info")) {
                            // line 479
                            yield "                                            <i class=\"bi bi-info-circle-fill me-2\"></i>
                                        ";
                        } else {
                            // line 481
                            yield "                                            <i class=\"bi bi-check-circle-fill me-2\"></i>
                                        ";
                        }
                        // line 483
                        yield "                                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                        yield "
                                    </div>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 486
                    yield "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 487
                yield "
                            <div class=\"text-center mb-4\">
                                <div class=\"reset-icon\">
                                    <i class=\"bi bi-envelope\"></i>
                                </div>
                            </div>

                            <form method=\"post\">
                                <div class=\"form-floating mb-4\">
                                    <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required placeholder=\" \">
                                    <label for=\"email\">Adresse email</label>
                                    <small class=\"form-text text-muted\">Entrez l'adresse email associée à votre compte</small>
                                </div>

                                <button type=\"submit\" class=\"btn-auth\">
                                    <i class=\"bi bi-arrow-right me-2\"></i>Continuer
                                </button>

                                <div class=\"auth-links mt-3 text-center\">
                                    <a href=\"";
                // line 506
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                yield "\">
                                        <i class=\"bi bi-arrow-left me-1\"></i>Retour à la connexion
                                    </a>
                                </div>
                            </form>
                        ";
            } else {
                // line 512
                yield "                            <p class=\"auth-subtitle\">Confirmez votre numéro de téléphone pour recevoir un code</p>

                            ";
                // line 514
                if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 514, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 515
                    yield "                                <div class=\"alert alert-danger\">
                                    <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>";
                    // line 516
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 516, $this->source); })()), "html", null, true);
                    yield "
                                </div>
                            ";
                }
                // line 519
                yield "
                            ";
                // line 520
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 520, $this->source); })()), "flashes", [], "any", false, false, false, 520));
                foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
                    // line 521
                    yield "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 522
                        yield "                                    <div class=\"alert alert-";
                        yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                        yield "\">
                                        ";
                        // line 523
                        if ((($context["label"] == "error") || ($context["label"] == "danger"))) {
                            // line 524
                            yield "                                            <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
                                        ";
                        } elseif ((                        // line 525
$context["label"] == "info")) {
                            // line 526
                            yield "                                            <i class=\"bi bi-info-circle-fill me-2\"></i>
                                        ";
                        } else {
                            // line 528
                            yield "                                            <i class=\"bi bi-check-circle-fill me-2\"></i>
                                        ";
                        }
                        // line 530
                        yield "                                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                        yield "
                                    </div>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 533
                    yield "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 534
                yield "
                            <div class=\"text-center mb-4\">
                                <div class=\"reset-icon\">
                                    <i class=\"bi bi-phone\"></i>
                                </div>
                                <p class=\"text-success mb-1\"><i class=\"bi bi-check-circle-fill me-1\"></i> Email vérifié : ";
                // line 539
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 539, $this->source); })()), "html", null, true);
                yield "</p>
                            </div>

                            <form method=\"post\">
                                <div class=\"form-floating mb-4\">
                                    <input type=\"tel\" class=\"form-control\" id=\"telephone\" name=\"telephone\" pattern=\"[0-9]{8}\" required placeholder=\" \">
                                    <label for=\"telephone\">Numéro de téléphone</label>
                                    <small class=\"form-text text-muted\">Entrez le numéro de téléphone associé à votre compte (8 chiffres)</small>
                                </div>

                                <button type=\"submit\" class=\"btn-auth\">
                                    <i class=\"bi bi-send me-2\"></i>Recevoir le code
                                </button>

                                <div class=\"auth-links mt-3 text-center\">
                                    <a href=\"";
                // line 554
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
                yield "\" onclick=\"event.preventDefault(); if(confirm('Êtes-vous sûr de vouloir recommencer le processus ?')) { window.location.href = '";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
                yield "?reset=1'; }\">
                                        <i class=\"bi bi-arrow-counterclockwise me-1\"></i>Recommencer
                                    </a>
                                </div>
                            </form>
                        ";
            }
            // line 560
            yield "                    ";
        } elseif ((array_key_exists("step", $context) && ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 560, $this->source); })()) == "check_code"))) {
            // line 561
            yield "                        <h2 class=\"auth-title\">Vérification du code</h2>
                        <p class=\"auth-subtitle\">Entrez le code reçu par SMS</p>

                        ";
            // line 564
            if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 564, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 565
                yield "                            <div class=\"alert alert-danger\">
                                <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>";
                // line 566
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 566, $this->source); })()), "html", null, true);
                yield "
                            </div>
                        ";
            }
            // line 569
            yield "
                        ";
            // line 570
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 570, $this->source); })()), "flashes", [], "any", false, false, false, 570));
            foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
                // line 571
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 572
                    yield "                                <div class=\"alert alert-";
                    yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                    yield "\">
                                    ";
                    // line 573
                    if ((($context["label"] == "error") || ($context["label"] == "danger"))) {
                        // line 574
                        yield "                                        <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
                                    ";
                    } elseif ((                    // line 575
$context["label"] == "info")) {
                        // line 576
                        yield "                                        <i class=\"bi bi-info-circle-fill me-2\"></i>
                                    ";
                    } else {
                        // line 578
                        yield "                                        <i class=\"bi bi-check-circle-fill me-2\"></i>
                                    ";
                    }
                    // line 580
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                    yield "
                                </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 583
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 584
            yield "
                        <div class=\"text-center mb-4\">
                            <div class=\"reset-icon\">
                                <i class=\"bi bi-shield-lock\"></i>
                            </div>
                            <p class=\"text-muted\">Un code à 6 chiffres a été envoyé au ";
            // line 589
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["telephone"]) || array_key_exists("telephone", $context) ? $context["telephone"] : (function () { throw new RuntimeError('Variable "telephone" does not exist.', 589, $this->source); })()), "html", null, true);
            yield "</p>
                        </div>

                        <form method=\"post\">
                            <div class=\"mb-4\">
                                <label for=\"verification_code\" class=\"form-label\">Code de vérification</label>
                                <input type=\"text\" class=\"form-control verification-code-input\" id=\"verification_code\" name=\"verification_code\" maxlength=\"6\" pattern=\"[0-9]{6}\" required>
                                <small class=\"form-text text-muted\">Entrez le code à 6 chiffres reçu par SMS</small>
                            </div>

                            <button type=\"submit\" class=\"btn-auth\">
                                <i class=\"bi bi-check-lg me-2\"></i>Vérifier le code
                            </button>

                            <div class=\"mt-3 text-center\">
                                <a href=\"";
            // line 604
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
            yield "\" class=\"text-primary\">
                                    <i class=\"bi bi-arrow-left me-1\"></i>Retour
                                </a>
                            </div>
                        </form>
                    ";
        } elseif ((        // line 609
array_key_exists("step", $context) && ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 609, $this->source); })()) == "reset"))) {
            // line 610
            yield "                        <h2 class=\"auth-title\">Nouveau mot de passe</h2>
                        <p class=\"auth-subtitle\">Choisissez un mot de passe fort pour sécuriser votre compte</p>

                        ";
            // line 613
            if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 613, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 614
                yield "                            <div class=\"alert alert-danger\">
                                <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>";
                // line 615
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 615, $this->source); })()), "html", null, true);
                yield "
                            </div>
                        ";
            }
            // line 618
            yield "
                        ";
            // line 619
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 619, $this->source); })()), "flashes", [], "any", false, false, false, 619));
            foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
                // line 620
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 621
                    yield "                                <div class=\"alert alert-";
                    yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                    yield "\">
                                    ";
                    // line 622
                    if ((($context["label"] == "error") || ($context["label"] == "danger"))) {
                        // line 623
                        yield "                                        <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
                                    ";
                    } elseif ((                    // line 624
$context["label"] == "info")) {
                        // line 625
                        yield "                                        <i class=\"bi bi-info-circle-fill me-2\"></i>
                                    ";
                    } else {
                        // line 627
                        yield "                                        <i class=\"bi bi-check-circle-fill me-2\"></i>
                                    ";
                    }
                    // line 629
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                    yield "
                                </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 632
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 633
            yield "
                        <div class=\"text-center mb-4\">
                            <div class=\"reset-icon\">
                                <i class=\"bi bi-key\"></i>
                            </div>
                        </div>

                        <form method=\"post\">
                            <div class=\"form-floating mb-3\">
                                <input type=\"password\" class=\"form-control\" id=\"new_password\" name=\"new_password\" minlength=\"8\" required placeholder=\" \">
                                <label for=\"new_password\">Nouveau mot de passe</label>
                                <div class=\"password-strength mt-2\">
                                    <div id=\"passwordStrength\" class=\"password-strength-bar\"></div>
                                </div>
                                <div class=\"d-flex justify-content-between mt-1\">
                                    <small class=\"form-text text-muted\">Minimum 8 caractères</small>
                                    <small id=\"passwordFeedback\" class=\"password-feedback\"></small>
                                </div>
                            </div>

                            <div class=\"form-floating mb-4\">
                                <input type=\"password\" class=\"form-control\" id=\"confirm_password\" name=\"confirm_password\" minlength=\"8\" required placeholder=\" \">
                                <label for=\"confirm_password\">Confirmer le mot de passe</label>
                            </div>

                            <button type=\"submit\" class=\"btn-auth\">
                                <i class=\"bi bi-check-lg me-2\"></i>Enregistrer le nouveau mot de passe
                            </button>
                        </form>
                    ";
        }
        // line 663
        yield "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 669
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reset_password/reset_password_guest.html.twig";
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
        return array (  1007 => 669,  995 => 663,  963 => 633,  957 => 632,  947 => 629,  943 => 627,  939 => 625,  937 => 624,  934 => 623,  932 => 622,  927 => 621,  922 => 620,  918 => 619,  915 => 618,  909 => 615,  906 => 614,  904 => 613,  899 => 610,  897 => 609,  889 => 604,  871 => 589,  864 => 584,  858 => 583,  848 => 580,  844 => 578,  840 => 576,  838 => 575,  835 => 574,  833 => 573,  828 => 572,  823 => 571,  819 => 570,  816 => 569,  810 => 566,  807 => 565,  805 => 564,  800 => 561,  797 => 560,  786 => 554,  768 => 539,  761 => 534,  755 => 533,  745 => 530,  741 => 528,  737 => 526,  735 => 525,  732 => 524,  730 => 523,  725 => 522,  720 => 521,  716 => 520,  713 => 519,  707 => 516,  704 => 515,  702 => 514,  698 => 512,  689 => 506,  668 => 487,  662 => 486,  652 => 483,  648 => 481,  644 => 479,  642 => 478,  639 => 477,  637 => 476,  632 => 475,  627 => 474,  623 => 473,  620 => 472,  614 => 469,  611 => 468,  609 => 467,  605 => 465,  603 => 464,  600 => 463,  598 => 462,  588 => 455,  570 => 439,  560 => 438,  471 => 357,  461 => 356,  105 => 8,  95 => 7,  79 => 5,  62 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}FreeLanceConnect - Réinitialisation du mot de passe{% endblock %}

{% block header %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        :root {
            --primary-color: #4f46e5;
            --secondary-color: #7c3aed;
            --surface-color: #ffffff;
            --text-primary: #1f2937;
            --text-secondary: #6b7280;
        }

        .auth-page {
            min-height: 100vh;
            background: linear-gradient(135deg, #f8faff 0%, #f0f4ff 100%);
            padding: 2rem 1rem;
            display: flex;
            align-items: center;
        }
        .auth-card {
            background: white;
            border-radius: 24px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
            overflow: hidden;
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            display: flex;
            position: relative;
        }
        .auth-card::before,
        .auth-card::after {
            content: '';
            position: absolute;
            width: 1000px;
            height: 1000px;
            border-radius: 50%;
            z-index: 0;
        }

        .auth-card::before {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            top: -60%;
            left: -20%;
            animation: gradientMove 15s ease infinite;
            filter: blur(30px);
            opacity: 0.8;
        }

        .auth-card::after {
            background: linear-gradient(-45deg, #4f46e5, #9333ea);
            bottom: -60%;
            right: -20%;
            animation: gradientMove2 20s ease infinite;
            filter: blur(35px);
            opacity: 0.6;
        }
        @keyframes gradientMove {
            0% { transform: rotate(0deg) scale(1); }
            50% { transform: rotate(180deg) scale(1.1); }
            100% { transform: rotate(360deg) scale(1); }
        }

        @keyframes gradientMove2 {
            0% { transform: rotate(0deg) scale(1.1); }
            50% { transform: rotate(-180deg) scale(1); }
            100% { transform: rotate(-360deg) scale(1.1); }
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        .auth-banner {
            flex: 1;
            padding: 3rem;
            color: white;
            position: relative;
            z-index: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .floating-icons {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 100%;
            pointer-events: none;
            opacity: 0.8;
        }

        .floating-icon {
            position: absolute;
            width: 32px;
            height: 32px;
            color: white;
            opacity: 0.8;
        }

        .floating-icon:nth-child(1) {
            top: 20%;
            left: 20%;
            animation: float 6s ease-in-out infinite;
        }

        .floating-icon:nth-child(2) {
            top: 40%;
            right: 25%;
            animation: float 8s ease-in-out infinite 1s;
        }

        .floating-icon:nth-child(3) {
            bottom: 30%;
            left: 30%;
            animation: float 7s ease-in-out infinite 2s;
        }

        @keyframes float {
            0% {
                transform: translateY(0px) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(10deg);
            }
            100% {
                transform: translateY(0px) rotate(0deg);
            }
        }

        .auth-banner-content {
            position: relative;
            z-index: 2;
        }

        .auth-banner h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }
        .auth-banner p {
            font-size: 1.1rem;
            opacity: 0.9;
            line-height: 1.6;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }
        .auth-form {
            flex: 1;
            background: white;
            padding: 3rem;
            position: relative;
            z-index: 1;
        }
        .auth-form-container {
            max-width: 400px;
            margin: 0 auto;
        }
        .auth-title {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: var(--text-primary);
        }
        .auth-subtitle {
            color: var(--text-secondary);
            margin-bottom: 2rem;
        }
        .form-floating {
            margin-bottom: 1.5rem;
        }
        .form-floating input {
            height: 56px;
            border-radius: 12px;
            border: 2px solid #e5e7eb;
            padding: 1rem 1rem 0;
            font-size: 1rem;
            transition: all 0.2s ease;
        }

        .form-floating .form-control:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1);
            outline: none;
        }

        .form-floating label {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            padding: 0.75rem 1rem;
            pointer-events: none;
            border: 1px solid transparent;
            transform-origin: 0 0;
            transition: all 0.2s ease;
            color: var(--text-secondary);
        }
        .form-floating input:focus ~ label,
        .form-floating input:not(:placeholder-shown) ~ label {
            transform: translateY(-0.5rem) scale(0.85);
            opacity: 0.65;
            color: var(--primary-color);
            height: auto;
        }
        .form-check {
            margin: 1rem 0;
        }
        .form-check input {
            width: 1.2em;
            height: 1.2em;
            margin-right: 0.5rem;
            cursor: pointer;
        }
        .btn-auth {
            width: 100%;
            padding: 1rem;
            border: none;
            border-radius: 12px;
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            color: white;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 1rem;
            position: relative;
            overflow: hidden;
        }
        .btn-auth:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(79, 70, 229, 0.25);
        }
        .btn-auth:active {
            transform: translateY(0);
        }
        .btn-auth::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: 0.5s;
        }

        .btn-auth:hover::before {
            left: 100%;
        }
        .auth-links {
            text-align: right;
            margin-top: 1rem;
        }
        .auth-links a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }
        .auth-links a:hover {
            text-decoration: underline;
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 2rem 0;
            color: var(--text-secondary);
        }
        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-top: 2px solid #e5e7eb;
        }
        .divider-text {
            padding: 0 1rem;
            font-weight: 500;
        }
        .register-link {
            text-align: center;
            margin-top: 2rem;
            color: var(--text-secondary);
        }
        .register-link a {
            color: var(--primary-color);
            font-weight: 500;
            text-decoration: none;
        }
        .register-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .auth-card {
                flex-direction: column;
            }
            .auth-banner {
                padding: 2rem;
                text-align: center;
            }
            .auth-form {
                padding: 2rem;
            }
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
            background-color: #ef4444;
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

        .reset-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 15px;
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
                            strengthBar.className = 'password-strength-bar strength-medium';
                            feedbackText.textContent = 'Bon';
                            feedbackText.className = 'password-feedback text-primary';
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
    <div class=\"auth-page\">
        <div class=\"auth-card\">
            <div class=\"auth-banner\">
                <div class=\"floating-icons\">
                    <svg class=\"floating-icon\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M12 15V17M6 7V9M6 11V13M6 15V17M12 7V13M18 7V9M18 11V13M18 15V17M4 5H20C21.1 5 22 5.9 22 7V17C22 18.1 21.1 19 20 19H4C2.9 19 2 18.1 2 17V7C2 5.9 2.9 5 4 5Z\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                    </svg>
                    <svg class=\"floating-icon\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M12 4V20M4 12H20\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                    </svg>
                    <svg class=\"floating-icon\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M16 8V16M12 11V16M8 14V16M4 4H20V20H4V4Z\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                    </svg>
                </div>
                
                <div class=\"auth-banner-content\">
                    <h1><a href=\"{{ path('app_home') }}\" style=\"color: inherit; text-decoration: none;\">FreeLanceConnect</a></h1>
                    <p>Réinitialisez votre mot de passe en toute sécurité pour retrouver l'accès à votre compte.</p>
                </div>
            </div>
            
            <div class=\"auth-form\">
                <div class=\"auth-form-container\">
                    {% if step is defined and step == 'request' %}
                        <h2 class=\"auth-title\">Mot de passe oublié</h2>
                        {% if not email_verified %}
                            <p class=\"auth-subtitle\">Entrez votre adresse email pour commencer</p>

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
                                    <i class=\"bi bi-envelope\"></i>
                                </div>
                            </div>

                            <form method=\"post\">
                                <div class=\"form-floating mb-4\">
                                    <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required placeholder=\" \">
                                    <label for=\"email\">Adresse email</label>
                                    <small class=\"form-text text-muted\">Entrez l'adresse email associée à votre compte</small>
                                </div>

                                <button type=\"submit\" class=\"btn-auth\">
                                    <i class=\"bi bi-arrow-right me-2\"></i>Continuer
                                </button>

                                <div class=\"auth-links mt-3 text-center\">
                                    <a href=\"{{ path('app_login') }}\">
                                        <i class=\"bi bi-arrow-left me-1\"></i>Retour à la connexion
                                    </a>
                                </div>
                            </form>
                        {% else %}
                            <p class=\"auth-subtitle\">Confirmez votre numéro de téléphone pour recevoir un code</p>

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
                                    <i class=\"bi bi-phone\"></i>
                                </div>
                                <p class=\"text-success mb-1\"><i class=\"bi bi-check-circle-fill me-1\"></i> Email vérifié : {{ email }}</p>
                            </div>

                            <form method=\"post\">
                                <div class=\"form-floating mb-4\">
                                    <input type=\"tel\" class=\"form-control\" id=\"telephone\" name=\"telephone\" pattern=\"[0-9]{8}\" required placeholder=\" \">
                                    <label for=\"telephone\">Numéro de téléphone</label>
                                    <small class=\"form-text text-muted\">Entrez le numéro de téléphone associé à votre compte (8 chiffres)</small>
                                </div>

                                <button type=\"submit\" class=\"btn-auth\">
                                    <i class=\"bi bi-send me-2\"></i>Recevoir le code
                                </button>

                                <div class=\"auth-links mt-3 text-center\">
                                    <a href=\"{{ path('app_forgot_password_request') }}\" onclick=\"event.preventDefault(); if(confirm('Êtes-vous sûr de vouloir recommencer le processus ?')) { window.location.href = '{{ path('app_forgot_password_request') }}?reset=1'; }\">
                                        <i class=\"bi bi-arrow-counterclockwise me-1\"></i>Recommencer
                                    </a>
                                </div>
                            </form>
                        {% endif %}
                    {% elseif step is defined and step == 'check_code' %}
                        <h2 class=\"auth-title\">Vérification du code</h2>
                        <p class=\"auth-subtitle\">Entrez le code reçu par SMS</p>

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
                                <i class=\"bi bi-shield-lock\"></i>
                            </div>
                            <p class=\"text-muted\">Un code à 6 chiffres a été envoyé au {{ telephone }}</p>
                        </div>

                        <form method=\"post\">
                            <div class=\"mb-4\">
                                <label for=\"verification_code\" class=\"form-label\">Code de vérification</label>
                                <input type=\"text\" class=\"form-control verification-code-input\" id=\"verification_code\" name=\"verification_code\" maxlength=\"6\" pattern=\"[0-9]{6}\" required>
                                <small class=\"form-text text-muted\">Entrez le code à 6 chiffres reçu par SMS</small>
                            </div>

                            <button type=\"submit\" class=\"btn-auth\">
                                <i class=\"bi bi-check-lg me-2\"></i>Vérifier le code
                            </button>

                            <div class=\"mt-3 text-center\">
                                <a href=\"{{ path('app_forgot_password_request') }}\" class=\"text-primary\">
                                    <i class=\"bi bi-arrow-left me-1\"></i>Retour
                                </a>
                            </div>
                        </form>
                    {% elseif step is defined and step == 'reset' %}
                        <h2 class=\"auth-title\">Nouveau mot de passe</h2>
                        <p class=\"auth-subtitle\">Choisissez un mot de passe fort pour sécuriser votre compte</p>

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
                        </div>

                        <form method=\"post\">
                            <div class=\"form-floating mb-3\">
                                <input type=\"password\" class=\"form-control\" id=\"new_password\" name=\"new_password\" minlength=\"8\" required placeholder=\" \">
                                <label for=\"new_password\">Nouveau mot de passe</label>
                                <div class=\"password-strength mt-2\">
                                    <div id=\"passwordStrength\" class=\"password-strength-bar\"></div>
                                </div>
                                <div class=\"d-flex justify-content-between mt-1\">
                                    <small class=\"form-text text-muted\">Minimum 8 caractères</small>
                                    <small id=\"passwordFeedback\" class=\"password-feedback\"></small>
                                </div>
                            </div>

                            <div class=\"form-floating mb-4\">
                                <input type=\"password\" class=\"form-control\" id=\"confirm_password\" name=\"confirm_password\" minlength=\"8\" required placeholder=\" \">
                                <label for=\"confirm_password\">Confirmer le mot de passe</label>
                            </div>

                            <button type=\"submit\" class=\"btn-auth\">
                                <i class=\"bi bi-check-lg me-2\"></i>Enregistrer le nouveau mot de passe
                            </button>
                        </form>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block footer %}{% endblock %}
", "reset_password/reset_password_guest.html.twig", "C:\\PIDEV\\PIDV-WEB3A19-Mouheb-User - Copy\\templates\\reset_password\\reset_password_guest.html.twig");
    }
}
