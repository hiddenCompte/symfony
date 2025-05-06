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

/* admin/pdf/users_list.html.twig */
class __TwigTemplate_4a3c30a6457a1707f70ea124aaac265c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf/users_list.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Liste des utilisateurs</title>
    ";
        // line 6
        $context["stats"] = ["admin" => 0, "freelance" => 0, "formateur" => 0, "employeur" => 0, "active" => 0, "inactive" => 0, "total" => 0];
        // line 15
        yield "    
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 17
            yield "        ";
            $context["type"] = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "typeUtilisateur", [], "any", false, false, false, 17);
            // line 18
            yield "        ";
            if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 18, $this->source); })()) == "ROLE_ADMIN")) {
                // line 19
                yield "            ";
                $context["type"] = "admin";
                // line 20
                yield "        ";
            }
            // line 21
            yield "        
        ";
            // line 22
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 22, $this->source); })()), [], "array", true, true, false, 22)) {
                // line 23
                yield "            ";
                $context["stats"] = Twig\Extension\CoreExtension::merge((isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 23, $this->source); })()), [ (string)(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 23, $this->source); })()) => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 23, $this->source); })()), (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 23, $this->source); })()), [], "array", false, false, false, 23) + 1)]);
                // line 24
                yield "        ";
            } else {
                // line 25
                yield "            ";
                $context["stats"] = Twig\Extension\CoreExtension::merge((isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 25, $this->source); })()), [ (string)(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 25, $this->source); })()) => 1]);
                // line 26
                yield "        ";
            }
            // line 27
            yield "        
        ";
            // line 28
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 29
                yield "            ";
                $context["stats"] = Twig\Extension\CoreExtension::merge((isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 29, $this->source); })()), ["active" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 29, $this->source); })()), "active", [], "any", false, false, false, 29) + 1)]);
                // line 30
                yield "        ";
            } else {
                // line 31
                yield "            ";
                $context["stats"] = Twig\Extension\CoreExtension::merge((isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 31, $this->source); })()), ["inactive" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 31, $this->source); })()), "inactive", [], "any", false, false, false, 31) + 1)]);
                // line 32
                yield "        ";
            }
            // line 33
            yield "        
        ";
            // line 34
            $context["stats"] = Twig\Extension\CoreExtension::merge((isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 34, $this->source); })()), ["total" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 34, $this->source); })()), "total", [], "any", false, false, false, 34) + 1)]);
            // line 35
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "    
    ";
        // line 37
        $context["stats"] = Twig\Extension\CoreExtension::merge((isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 37, $this->source); })()), ["admin_percent" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 38
(isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 38, $this->source); })()), "admin", [], "any", false, false, false, 38) > 0)) ? (Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 38, $this->source); })()), "admin", [], "any", false, false, false, 38) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 38, $this->source); })()), "total", [], "any", false, false, false, 38)) * 100))) : (0)), "freelance_percent" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 39
(isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 39, $this->source); })()), "freelance", [], "any", false, false, false, 39) > 0)) ? (Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 39, $this->source); })()), "freelance", [], "any", false, false, false, 39) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 39, $this->source); })()), "total", [], "any", false, false, false, 39)) * 100))) : (0)), "formateur_percent" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 40
(isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 40, $this->source); })()), "formateur", [], "any", false, false, false, 40) > 0)) ? (Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 40, $this->source); })()), "formateur", [], "any", false, false, false, 40) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 40, $this->source); })()), "total", [], "any", false, false, false, 40)) * 100))) : (0)), "employeur_percent" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 41
(isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 41, $this->source); })()), "employeur", [], "any", false, false, false, 41) > 0)) ? (Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 41, $this->source); })()), "employeur", [], "any", false, false, false, 41) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 41, $this->source); })()), "total", [], "any", false, false, false, 41)) * 100))) : (0))]);
        // line 43
        yield "    
    ";
        // line 45
        yield "    ";
        $context["months"] = [];
        // line 46
        yield "    ";
        $context["currentYear"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y");
        // line 47
        yield "    
    ";
        // line 49
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 50
            yield "        ";
            $context["monthName"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->convertDate(((((isset($context["currentYear"]) || array_key_exists("currentYear", $context) ? $context["currentYear"] : (function () { throw new RuntimeError('Variable "currentYear" does not exist.', 50, $this->source); })()) . "-") . $context["i"]) . "-01")), "M");
            // line 51
            yield "        ";
            $context["months"] = Twig\Extension\CoreExtension::merge((isset($context["months"]) || array_key_exists("months", $context) ? $context["months"] : (function () { throw new RuntimeError('Variable "months" does not exist.', 51, $this->source); })()), [ (string)$context["i"] => ["name" => (isset($context["monthName"]) || array_key_exists("monthName", $context) ? $context["monthName"] : (function () { throw new RuntimeError('Variable "monthName" does not exist.', 51, $this->source); })()), "count" => 0]]);
            // line 52
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "    
    ";
        // line 55
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 56
            yield "        ";
            $context["month"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "dateInscription", [], "any", false, false, false, 56), "n");
            // line 57
            yield "        ";
            $context["year"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "dateInscription", [], "any", false, false, false, 57), "Y");
            // line 58
            yield "        
        ";
            // line 59
            if (((isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 59, $this->source); })()) == (isset($context["currentYear"]) || array_key_exists("currentYear", $context) ? $context["currentYear"] : (function () { throw new RuntimeError('Variable "currentYear" does not exist.', 59, $this->source); })()))) {
                // line 60
                yield "            ";
                $context["currentCount"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["months"]) || array_key_exists("months", $context) ? $context["months"] : (function () { throw new RuntimeError('Variable "months" does not exist.', 60, $this->source); })()), (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 60, $this->source); })()), [], "array", false, false, false, 60), "count", [], "any", false, false, false, 60);
                // line 61
                yield "            ";
                $context["months"] = Twig\Extension\CoreExtension::merge((isset($context["months"]) || array_key_exists("months", $context) ? $context["months"] : (function () { throw new RuntimeError('Variable "months" does not exist.', 61, $this->source); })()), [ (string)                // line 62
(isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 62, $this->source); })()) => ["name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 63
(isset($context["months"]) || array_key_exists("months", $context) ? $context["months"] : (function () { throw new RuntimeError('Variable "months" does not exist.', 63, $this->source); })()), (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 63, $this->source); })()), [], "array", false, false, false, 63), "name", [], "any", false, false, false, 63), "count" => (                // line 64
(isset($context["currentCount"]) || array_key_exists("currentCount", $context) ? $context["currentCount"] : (function () { throw new RuntimeError('Variable "currentCount" does not exist.', 64, $this->source); })()) + 1)]]);
                // line 67
                yield "        ";
            }
            // line 68
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "    
    ";
        // line 71
        yield "    ";
        $context["maxCount"] = 1;
        // line 72
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["months"]) || array_key_exists("months", $context) ? $context["months"] : (function () { throw new RuntimeError('Variable "months" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 73
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["month"], "count", [], "any", false, false, false, 73) > (isset($context["maxCount"]) || array_key_exists("maxCount", $context) ? $context["maxCount"] : (function () { throw new RuntimeError('Variable "maxCount" does not exist.', 73, $this->source); })()))) {
                // line 74
                yield "            ";
                $context["maxCount"] = CoreExtension::getAttribute($this->env, $this->source, $context["month"], "count", [], "any", false, false, false, 74);
                // line 75
                yield "        ";
            }
            // line 76
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['month'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "    
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th {
            background-color: #444;
            color: white;
            font-weight: bold;
            text-align: left;
            padding: 8px;
            font-size: 11px;
        }
        td {
            padding: 6px 8px;
            vertical-align: middle;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 10px;
            color: #666;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
        .type-badge {
            display: inline-block;
            padding: 2px 6px;
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
        .type-admin {
            background-color: #f3e5f5;
            color: #9c27b0;
        }
        .status-active {
            color: green;
            font-weight: bold;
        }
        .status-inactive {
            color: red;
            font-weight: bold;
        }
        .section-title {
            background-color: #f5f5f5;
            padding: 8px;
            margin-top: 15px;
            margin-bottom: 10px;
            font-size: 14px;
            font-weight: bold;
            border-left: 4px solid #444;
        }
        
        /* Styles pour les statistiques */
        .stats-container {
            margin-bottom: 30px;
            border: 1px solid #ddd;
            padding: 15px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .stats-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 15px;
            color: #333;
            border-bottom: 1px solid #eee;
            padding-bottom: 8px;
            text-align: center;
        }
        .stats-box {
            width: 60%;
            margin: 0 auto;
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #eee;
        }
        .stats-box-title {
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 10px;
            text-align: center;
        }
        .stats-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .stats-table td {
            padding: 5px;
            border: none;
            border-bottom: 1px solid #eee;
        }
        .stats-table tr:last-child td {
            border-bottom: none;
            border-top: 1px solid #ddd;
            font-weight: bold;
            padding-top: 8px;
        }
        .stats-badge {
            display: inline-block;
            padding: 2px 6px;
            border-radius: 3px;
            font-size: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>LISTE DES UTILISATEURS</h1>
    </div>
    
    <div class=\"date\">
        Généré le ";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y à H:i"), "html", null, true);
        yield "
    </div>
    
    <!-- Statistiques des utilisateurs -->
    <div class=\"stats-container\">
        <div class=\"stats-title\">Statistiques par type d'utilisateur</div>
        
        <div class=\"stats-box\">
            <div class=\"stats-box-title\">Répartition des utilisateurs</div>
            
            <table class=\"stats-table\">
                ";
        // line 251
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 251, $this->source); })()), "admin", [], "any", false, false, false, 251) > 0)) {
            // line 252
            yield "                <tr>
                    <td>Admin</td>
                    <td>";
            // line 254
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 254, $this->source); })()), "admin", [], "any", false, false, false, 254), "html", null, true);
            yield " utilisateurs (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 254, $this->source); })()), "admin_percent", [], "any", false, false, false, 254), "html", null, true);
            yield "%)</td>
                </tr>
                ";
        }
        // line 257
        yield "                
                ";
        // line 258
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 258, $this->source); })()), "freelance", [], "any", false, false, false, 258) > 0)) {
            // line 259
            yield "                <tr>
                    <td>Freelance</td>
                    <td>";
            // line 261
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 261, $this->source); })()), "freelance", [], "any", false, false, false, 261), "html", null, true);
            yield " utilisateurs (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 261, $this->source); })()), "freelance_percent", [], "any", false, false, false, 261), "html", null, true);
            yield "%)</td>
                </tr>
                ";
        }
        // line 264
        yield "                
                ";
        // line 265
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 265, $this->source); })()), "formateur", [], "any", false, false, false, 265) > 0)) {
            // line 266
            yield "                <tr>
                    <td>Formateur</td>
                    <td>";
            // line 268
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 268, $this->source); })()), "formateur", [], "any", false, false, false, 268), "html", null, true);
            yield " utilisateurs (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 268, $this->source); })()), "formateur_percent", [], "any", false, false, false, 268), "html", null, true);
            yield "%)</td>
                </tr>
                ";
        }
        // line 271
        yield "                
                ";
        // line 272
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 272, $this->source); })()), "employeur", [], "any", false, false, false, 272) > 0)) {
            // line 273
            yield "                <tr>
                    <td>Employeur</td>
                    <td>";
            // line 275
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 275, $this->source); })()), "employeur", [], "any", false, false, false, 275), "html", null, true);
            yield " utilisateurs (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 275, $this->source); })()), "employeur_percent", [], "any", false, false, false, 275), "html", null, true);
            yield "%)</td>
                </tr>
                ";
        }
        // line 278
        yield "                
                <tr>
                    <td>Total</td>
                    <td>";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 281, $this->source); })()), "total", [], "any", false, false, false, 281), "html", null, true);
        yield " utilisateurs</td>
                </tr>
            </table>
        </div>
    </div>
    
    <!-- Tableau des administrateurs -->
    <div class=\"section-title\">Administrateurs</div>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Type</th>
                <th>Téléphone</th>
                <th>Inscription</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 302
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 302, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 303
            yield "                ";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "typeUtilisateur", [], "any", false, false, false, 303) == "admin") || (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "typeUtilisateur", [], "any", false, false, false, 303) == "ROLE_ADMIN"))) {
                // line 304
                yield "                <tr>
                    <td>";
                // line 305
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 305), "html", null, true);
                yield "</td>
                    <td>";
                // line 306
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 306), "html", null, true);
                yield "</td>
                    <td>";
                // line 307
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 307), "html", null, true);
                yield "</td>
                    <td>
                        <span class=\"type-badge type-admin\">
                            Admin
                        </span>
                    </td>
                    <td>";
                // line 313
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "telephone", [], "any", false, false, false, 313)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "telephone", [], "any", false, false, false, 313), "html", null, true)) : ("Non renseigné"));
                yield "</td>
                    <td>";
                // line 314
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "dateInscription", [], "any", false, false, false, 314), "d/m/Y"), "html", null, true);
                yield "</td>
                    <td class=\"status-";
                // line 315
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 315)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
                yield "\">
                        ";
                // line 316
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 316)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Banni"));
                yield "
                    </td>
                </tr>
                ";
            }
            // line 320
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 321
        yield "        </tbody>
    </table>
    
    <!-- Tableau des utilisateurs normaux -->
    <div class=\"section-title\">Utilisateurs</div>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Type</th>
                <th>Téléphone</th>
                <th>Inscription</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 339
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 339, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 340
            yield "                ";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "typeUtilisateur", [], "any", false, false, false, 340) != "admin") && (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "typeUtilisateur", [], "any", false, false, false, 340) != "ROLE_ADMIN"))) {
                // line 341
                yield "                <tr>
                    <td>";
                // line 342
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 342), "html", null, true);
                yield "</td>
                    <td>";
                // line 343
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 343), "html", null, true);
                yield "</td>
                    <td>";
                // line 344
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 344), "html", null, true);
                yield "</td>
                    <td>
                        <span class=\"type-badge type-";
                // line 346
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "typeUtilisateur", [], "any", false, false, false, 346), "html", null, true);
                yield "\">
                            ";
                // line 347
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "typeUtilisateur", [], "any", false, false, false, 347)), "html", null, true);
                yield "
                        </span>
                    </td>
                    <td>";
                // line 350
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "telephone", [], "any", false, false, false, 350)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "telephone", [], "any", false, false, false, 350), "html", null, true)) : ("Non renseigné"));
                yield "</td>
                    <td>";
                // line 351
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "dateInscription", [], "any", false, false, false, 351), "d/m/Y"), "html", null, true);
                yield "</td>
                    <td class=\"status-";
                // line 352
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 352)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
                yield "\">
                        ";
                // line 353
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 353)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Banni"));
                yield "
                    </td>
                </tr>
                ";
            }
            // line 357
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 358
        yield "        </tbody>
    </table>
    
    <div class=\"footer\">
        <p>Document confidentiel - ";
        // line 362
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
        return "admin/pdf/users_list.html.twig";
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
        return array (  628 => 362,  622 => 358,  616 => 357,  609 => 353,  605 => 352,  601 => 351,  597 => 350,  591 => 347,  587 => 346,  582 => 344,  578 => 343,  574 => 342,  571 => 341,  568 => 340,  564 => 339,  544 => 321,  538 => 320,  531 => 316,  527 => 315,  523 => 314,  519 => 313,  510 => 307,  506 => 306,  502 => 305,  499 => 304,  496 => 303,  492 => 302,  468 => 281,  463 => 278,  455 => 275,  451 => 273,  449 => 272,  446 => 271,  438 => 268,  434 => 266,  432 => 265,  429 => 264,  421 => 261,  417 => 259,  415 => 258,  412 => 257,  404 => 254,  400 => 252,  398 => 251,  384 => 240,  219 => 77,  213 => 76,  210 => 75,  207 => 74,  204 => 73,  199 => 72,  196 => 71,  193 => 69,  187 => 68,  184 => 67,  182 => 64,  181 => 63,  180 => 62,  178 => 61,  175 => 60,  173 => 59,  170 => 58,  167 => 57,  164 => 56,  159 => 55,  156 => 53,  150 => 52,  147 => 51,  144 => 50,  139 => 49,  136 => 47,  133 => 46,  130 => 45,  127 => 43,  125 => 41,  124 => 40,  123 => 39,  122 => 38,  121 => 37,  118 => 36,  112 => 35,  110 => 34,  107 => 33,  104 => 32,  101 => 31,  98 => 30,  95 => 29,  93 => 28,  90 => 27,  87 => 26,  84 => 25,  81 => 24,  78 => 23,  76 => 22,  73 => 21,  70 => 20,  67 => 19,  64 => 18,  61 => 17,  57 => 16,  54 => 15,  52 => 6,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Liste des utilisateurs</title>
    {% set stats = {
        'admin': 0,
        'freelance': 0,
        'formateur': 0,
        'employeur': 0,
        'active': 0,
        'inactive': 0,
        'total': 0
    } %}
    
    {% for user in users %}
        {% set type = user.typeUtilisateur %}
        {% if type == 'ROLE_ADMIN' %}
            {% set type = 'admin' %}
        {% endif %}
        
        {% if stats[type] is defined %}
            {% set stats = stats|merge({(type): stats[type] + 1}) %}
        {% else %}
            {% set stats = stats|merge({(type): 1}) %}
        {% endif %}
        
        {% if user.isActive %}
            {% set stats = stats|merge({'active': stats.active + 1}) %}
        {% else %}
            {% set stats = stats|merge({'inactive': stats.inactive + 1}) %}
        {% endif %}
        
        {% set stats = stats|merge({'total': stats.total + 1}) %}
    {% endfor %}
    
    {% set stats = stats|merge({
        'admin_percent': stats.admin > 0 ? (stats.admin / stats.total * 100)|round : 0,
        'freelance_percent': stats.freelance > 0 ? (stats.freelance / stats.total * 100)|round : 0,
        'formateur_percent': stats.formateur > 0 ? (stats.formateur / stats.total * 100)|round : 0,
        'employeur_percent': stats.employeur > 0 ? (stats.employeur / stats.total * 100)|round : 0
    }) %}
    
    {# Calcul des statistiques pour le graphique en courbe #}
    {% set months = {} %}
    {% set currentYear = \"now\"|date(\"Y\") %}
    
    {# Initialiser les mois de l'année en cours #}
    {% for i in 1..12 %}
        {% set monthName = date(currentYear ~ \"-\" ~ i ~ \"-01\")|date(\"M\") %}
        {% set months = months|merge({(i): {name: monthName, count: 0}}) %}
    {% endfor %}
    
    {# Compter les inscriptions par mois #}
    {% for user in users %}
        {% set month = user.dateInscription|date(\"n\") %}
        {% set year = user.dateInscription|date(\"Y\") %}
        
        {% if year == currentYear %}
            {% set currentCount = months[month].count %}
            {% set months = months|merge({
                (month): {
                    name: months[month].name,
                    count: currentCount + 1
                }
            }) %}
        {% endif %}
    {% endfor %}
    
    {# Trouver la valeur maximale pour l'échelle du graphique #}
    {% set maxCount = 1 %}
    {% for month in months %}
        {% if month.count > maxCount %}
            {% set maxCount = month.count %}
        {% endif %}
    {% endfor %}
    
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th {
            background-color: #444;
            color: white;
            font-weight: bold;
            text-align: left;
            padding: 8px;
            font-size: 11px;
        }
        td {
            padding: 6px 8px;
            vertical-align: middle;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 10px;
            color: #666;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
        .type-badge {
            display: inline-block;
            padding: 2px 6px;
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
        .type-admin {
            background-color: #f3e5f5;
            color: #9c27b0;
        }
        .status-active {
            color: green;
            font-weight: bold;
        }
        .status-inactive {
            color: red;
            font-weight: bold;
        }
        .section-title {
            background-color: #f5f5f5;
            padding: 8px;
            margin-top: 15px;
            margin-bottom: 10px;
            font-size: 14px;
            font-weight: bold;
            border-left: 4px solid #444;
        }
        
        /* Styles pour les statistiques */
        .stats-container {
            margin-bottom: 30px;
            border: 1px solid #ddd;
            padding: 15px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .stats-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 15px;
            color: #333;
            border-bottom: 1px solid #eee;
            padding-bottom: 8px;
            text-align: center;
        }
        .stats-box {
            width: 60%;
            margin: 0 auto;
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #eee;
        }
        .stats-box-title {
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 10px;
            text-align: center;
        }
        .stats-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .stats-table td {
            padding: 5px;
            border: none;
            border-bottom: 1px solid #eee;
        }
        .stats-table tr:last-child td {
            border-bottom: none;
            border-top: 1px solid #ddd;
            font-weight: bold;
            padding-top: 8px;
        }
        .stats-badge {
            display: inline-block;
            padding: 2px 6px;
            border-radius: 3px;
            font-size: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>LISTE DES UTILISATEURS</h1>
    </div>
    
    <div class=\"date\">
        Généré le {{ \"now\"|date(\"d/m/Y à H:i\") }}
    </div>
    
    <!-- Statistiques des utilisateurs -->
    <div class=\"stats-container\">
        <div class=\"stats-title\">Statistiques par type d'utilisateur</div>
        
        <div class=\"stats-box\">
            <div class=\"stats-box-title\">Répartition des utilisateurs</div>
            
            <table class=\"stats-table\">
                {% if stats.admin > 0 %}
                <tr>
                    <td>Admin</td>
                    <td>{{ stats.admin }} utilisateurs ({{ stats.admin_percent }}%)</td>
                </tr>
                {% endif %}
                
                {% if stats.freelance > 0 %}
                <tr>
                    <td>Freelance</td>
                    <td>{{ stats.freelance }} utilisateurs ({{ stats.freelance_percent }}%)</td>
                </tr>
                {% endif %}
                
                {% if stats.formateur > 0 %}
                <tr>
                    <td>Formateur</td>
                    <td>{{ stats.formateur }} utilisateurs ({{ stats.formateur_percent }}%)</td>
                </tr>
                {% endif %}
                
                {% if stats.employeur > 0 %}
                <tr>
                    <td>Employeur</td>
                    <td>{{ stats.employeur }} utilisateurs ({{ stats.employeur_percent }}%)</td>
                </tr>
                {% endif %}
                
                <tr>
                    <td>Total</td>
                    <td>{{ stats.total }} utilisateurs</td>
                </tr>
            </table>
        </div>
    </div>
    
    <!-- Tableau des administrateurs -->
    <div class=\"section-title\">Administrateurs</div>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Type</th>
                <th>Téléphone</th>
                <th>Inscription</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            {% for user in users %}
                {% if user.typeUtilisateur == 'admin' or user.typeUtilisateur == 'ROLE_ADMIN' %}
                <tr>
                    <td>{{ user.nom }}</td>
                    <td>{{ user.prenom }}</td>
                    <td>{{ user.email }}</td>
                    <td>
                        <span class=\"type-badge type-admin\">
                            Admin
                        </span>
                    </td>
                    <td>{{ user.telephone ?: 'Non renseigné' }}</td>
                    <td>{{ user.dateInscription|date('d/m/Y') }}</td>
                    <td class=\"status-{{ user.isActive ? 'active' : 'inactive' }}\">
                        {{ user.isActive ? 'Actif' : 'Banni' }}
                    </td>
                </tr>
                {% endif %}
            {% endfor %}
        </tbody>
    </table>
    
    <!-- Tableau des utilisateurs normaux -->
    <div class=\"section-title\">Utilisateurs</div>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Type</th>
                <th>Téléphone</th>
                <th>Inscription</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            {% for user in users %}
                {% if user.typeUtilisateur != 'admin' and user.typeUtilisateur != 'ROLE_ADMIN' %}
                <tr>
                    <td>{{ user.nom }}</td>
                    <td>{{ user.prenom }}</td>
                    <td>{{ user.email }}</td>
                    <td>
                        <span class=\"type-badge type-{{ user.typeUtilisateur }}\">
                            {{ user.typeUtilisateur|capitalize }}
                        </span>
                    </td>
                    <td>{{ user.telephone ?: 'Non renseigné' }}</td>
                    <td>{{ user.dateInscription|date('d/m/Y') }}</td>
                    <td class=\"status-{{ user.isActive ? 'active' : 'inactive' }}\">
                        {{ user.isActive ? 'Actif' : 'Banni' }}
                    </td>
                </tr>
                {% endif %}
            {% endfor %}
        </tbody>
    </table>
    
    <div class=\"footer\">
        <p>Document confidentiel - {{ \"now\"|date(\"Y\") }} Tous droits réservés</p>
    </div>
</body>
</html>
", "admin/pdf/users_list.html.twig", "C:\\PIDEV\\PIDV-WEB3A19-Mouheb-User - Copy\\templates\\admin\\pdf\\users_list.html.twig");
    }
}
