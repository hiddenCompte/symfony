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

/* emails/registration_confirmation.txt.twig */
class __TwigTemplate_62c1ba6a9ea1f90bf739772d94ea3527 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/registration_confirmation.txt.twig"));

        // line 1
        yield "Bienvenue sur PI Freelance
=======================

Bonjour ";
        // line 4
        yield (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 4, $this->source); })());
        yield ",

Nous vous remercions de vous être inscrit sur PI Freelance. Votre compte a été créé avec succès !

Vous pouvez dès maintenant vous connecter à votre compte et commencer à utiliser notre plateforme.

Pour vous connecter, rendez-vous sur : ";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_login");
        yield "

Si vous avez des questions ou besoin d'aide, n'hésitez pas à nous contacter.

Cordialement,
L'équipe PI Freelance

---
Cet email a été envoyé automatiquement, merci de ne pas y répondre.
© ";
        // line 19
        yield $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y");
        yield " PI Freelance. Tous droits réservés.
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "emails/registration_confirmation.txt.twig";
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
        return array (  71 => 19,  59 => 10,  50 => 4,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("Bienvenue sur PI Freelance
=======================

Bonjour {{ name }},

Nous vous remercions de vous être inscrit sur PI Freelance. Votre compte a été créé avec succès !

Vous pouvez dès maintenant vous connecter à votre compte et commencer à utiliser notre plateforme.

Pour vous connecter, rendez-vous sur : {{ url('app_login') }}

Si vous avez des questions ou besoin d'aide, n'hésitez pas à nous contacter.

Cordialement,
L'équipe PI Freelance

---
Cet email a été envoyé automatiquement, merci de ne pas y répondre.
© {{ \"now\"|date(\"Y\") }} PI Freelance. Tous droits réservés.
", "emails/registration_confirmation.txt.twig", "/Users/moetezjebari/Desktop/PIDV-WEB3A19-Mouheb-User - Copy/Downloads/PIDV-WEB3A19-Mouheb-User - Copy/Downloads/PIDV-WEB3A19-Mouheb-User - Copy/templates/emails/registration_confirmation.txt.twig");
    }
}
