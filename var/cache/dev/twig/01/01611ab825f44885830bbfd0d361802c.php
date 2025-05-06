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

/* admin/pdf/user_details.html.twig */
class __TwigTemplate_ce8697e6faf925d33bb07c73078428b6 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf/user_details.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Détails de l'utilisateur</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 11px;
            line-height: 1.4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #444;
            padding-bottom: 10px;
        }
        .header h1 {
            color: #333;
            font-size: 20px;
            margin: 0;
            font-weight: bold;
        }
        .date {
            text-align: right;
            margin-bottom: 20px;
            font-style: italic;
            color: #666;
        }
        .user-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #f9f9f9;
        }
        .user-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }
        .user-name {
            font-size: 16px;
            font-weight: bold;
            color: #333;
        }
        .user-type {
            padding: 3px 8px;
            border-radius: 3px;
            font-size: 10px;
            font-weight: bold;
        }
        .type-freelance {
            background-color: #e3f2fd;
            color: #0d6efd;
        }
        .type-formateur {
            background-color: #e8f5e9;
            color: #2e7d32;
        }
        .type-employeur {
            background-color: #fff3e0;
            color: #ed6c02;
        }
        .user-details {
            margin-bottom: 20px;
        }
        .detail-row {
            display: flex;
            margin-bottom: 10px;
            padding-bottom: 5px;
            border-bottom: 1px solid #eee;
        }
        .detail-label {
            width: 150px;
            font-weight: bold;
            color: #555;
        }
        .detail-value {
            flex: 1;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 10px;
            color: #666;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
        .status-active {
            color: green;
            font-weight: bold;
        }
        .status-inactive {
            color: red;
            font-weight: bold;
        }
        .role-badge {
            display: inline-block;
            margin-right: 5px;
            padding: 2px 6px;
            border-radius: 3px;
            font-size: 9px;
            background-color: #eee;
            color: #333;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>FICHE UTILISATEUR</h1>
    </div>
    
    <div class=\"date\">
        Généré le ";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y à H:i"), "html", null, true);
        yield "
    </div>
    
    <div class=\"user-card\">
        <div class=\"user-header\">
            <div class=\"user-name\">";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 125, $this->source); })()), "nom", [], "any", false, false, false, 125), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 125, $this->source); })()), "prenom", [], "any", false, false, false, 125), "html", null, true);
        yield "</div>
            <div class=\"user-type type-";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 126, $this->source); })()), "typeUtilisateur", [], "any", false, false, false, 126), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 126, $this->source); })()), "typeUtilisateur", [], "any", false, false, false, 126)), "html", null, true);
        yield "</div>
        </div>
        
        <div class=\"user-details\">
            <div class=\"detail-row\">
                <div class=\"detail-label\">Email :</div>
                <div class=\"detail-value\">";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 132, $this->source); })()), "email", [], "any", false, false, false, 132), "html", null, true);
        yield "</div>
            </div>
            <div class=\"detail-row\">
                <div class=\"detail-label\">Téléphone :</div>
                <div class=\"detail-value\">";
        // line 136
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 136, $this->source); })()), "telephone", [], "any", false, false, false, 136)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 136, $this->source); })()), "telephone", [], "any", false, false, false, 136), "html", null, true)) : ("Non renseigné"));
        yield "</div>
            </div>
            <div class=\"detail-row\">
                <div class=\"detail-label\">Date d'inscription :</div>
                <div class=\"detail-value\">";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 140, $this->source); })()), "dateInscription", [], "any", false, false, false, 140), "d/m/Y"), "html", null, true);
        yield "</div>
            </div>
            <div class=\"detail-row\">
                <div class=\"detail-label\">Statut :</div>
                <div class=\"detail-value\">
                    <span class=\"status-";
        // line 145
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 145, $this->source); })()), "isActive", [], "any", false, false, false, 145)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
        yield "\">
                        ";
        // line 146
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 146, $this->source); })()), "isActive", [], "any", false, false, false, 146)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
        yield "
                    </span>
                </div>
            </div>
            <div class=\"detail-row\">
                <div class=\"detail-label\">Rôles :</div>
                <div class=\"detail-value\">
                    ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 153, $this->source); })()), "roles", [], "any", false, false, false, 153));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 154
            yield "                        <span class=\"role-badge\">
                            ";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($context["role"], ["ROLE_" => ""]), "html", null, true);
            yield "
                        </span>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        yield "                </div>
            </div>
        </div>
    </div>
    
    <div class=\"footer\">
        <p>Document confidentiel - ";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Tous droits réservés</p>
    </div>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/pdf/user_details.html.twig";
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
        return array (  251 => 164,  243 => 158,  234 => 155,  231 => 154,  227 => 153,  217 => 146,  213 => 145,  205 => 140,  198 => 136,  191 => 132,  180 => 126,  174 => 125,  166 => 120,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Détails de l'utilisateur</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 11px;
            line-height: 1.4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #444;
            padding-bottom: 10px;
        }
        .header h1 {
            color: #333;
            font-size: 20px;
            margin: 0;
            font-weight: bold;
        }
        .date {
            text-align: right;
            margin-bottom: 20px;
            font-style: italic;
            color: #666;
        }
        .user-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #f9f9f9;
        }
        .user-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }
        .user-name {
            font-size: 16px;
            font-weight: bold;
            color: #333;
        }
        .user-type {
            padding: 3px 8px;
            border-radius: 3px;
            font-size: 10px;
            font-weight: bold;
        }
        .type-freelance {
            background-color: #e3f2fd;
            color: #0d6efd;
        }
        .type-formateur {
            background-color: #e8f5e9;
            color: #2e7d32;
        }
        .type-employeur {
            background-color: #fff3e0;
            color: #ed6c02;
        }
        .user-details {
            margin-bottom: 20px;
        }
        .detail-row {
            display: flex;
            margin-bottom: 10px;
            padding-bottom: 5px;
            border-bottom: 1px solid #eee;
        }
        .detail-label {
            width: 150px;
            font-weight: bold;
            color: #555;
        }
        .detail-value {
            flex: 1;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 10px;
            color: #666;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
        .status-active {
            color: green;
            font-weight: bold;
        }
        .status-inactive {
            color: red;
            font-weight: bold;
        }
        .role-badge {
            display: inline-block;
            margin-right: 5px;
            padding: 2px 6px;
            border-radius: 3px;
            font-size: 9px;
            background-color: #eee;
            color: #333;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>FICHE UTILISATEUR</h1>
    </div>
    
    <div class=\"date\">
        Généré le {{ \"now\"|date(\"d/m/Y à H:i\") }}
    </div>
    
    <div class=\"user-card\">
        <div class=\"user-header\">
            <div class=\"user-name\">{{ user.nom }} {{ user.prenom }}</div>
            <div class=\"user-type type-{{ user.typeUtilisateur }}\">{{ user.typeUtilisateur|capitalize }}</div>
        </div>
        
        <div class=\"user-details\">
            <div class=\"detail-row\">
                <div class=\"detail-label\">Email :</div>
                <div class=\"detail-value\">{{ user.email }}</div>
            </div>
            <div class=\"detail-row\">
                <div class=\"detail-label\">Téléphone :</div>
                <div class=\"detail-value\">{{ user.telephone ?: 'Non renseigné' }}</div>
            </div>
            <div class=\"detail-row\">
                <div class=\"detail-label\">Date d'inscription :</div>
                <div class=\"detail-value\">{{ user.dateInscription|date('d/m/Y') }}</div>
            </div>
            <div class=\"detail-row\">
                <div class=\"detail-label\">Statut :</div>
                <div class=\"detail-value\">
                    <span class=\"status-{{ user.isActive ? 'active' : 'inactive' }}\">
                        {{ user.isActive ? 'Actif' : 'Inactif' }}
                    </span>
                </div>
            </div>
            <div class=\"detail-row\">
                <div class=\"detail-label\">Rôles :</div>
                <div class=\"detail-value\">
                    {% for role in user.roles %}
                        <span class=\"role-badge\">
                            {{ role|replace({'ROLE_': ''}) }}
                        </span>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"footer\">
        <p>Document confidentiel - {{ \"now\"|date(\"Y\") }} Tous droits réservés</p>
    </div>
</body>
</html>
", "admin/pdf/user_details.html.twig", "C:\\PIDEV\\PIDV-WEB3A19-Mouheb-User - Copy\\templates\\admin\\pdf\\user_details.html.twig");
    }
}
