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

/* test_upload/index.html.twig */
class __TwigTemplate_4328927cd265c47202f051b69610339b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test_upload/index.html.twig"));

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

        yield "Test d'upload d'image";
        
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
    .test-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }
    
    .upload-form {
        margin: 20px 0;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #f8f9fa;
    }
    
    .success-message {
        color: #28a745;
        font-weight: bold;
        padding: 10px;
        background-color: #d4edda;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    
    .error-message {
        color: #dc3545;
        font-weight: bold;
        padding: 10px;
        background-color: #f8d7da;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    
    .info-section {
        margin-top: 30px;
        padding: 20px;
        background-color: #e9ecef;
        border-radius: 5px;
    }
    
    .preview-image {
        max-width: 300px;
        max-height: 300px;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-top: 20px;
    }
    
    .info-table {
        width: 100%;
        border-collapse: collapse;
    }
    
    .info-table th, .info-table td {
        padding: 8px;
        border: 1px solid #ddd;
        text-align: left;
    }
    
    .info-table th {
        background-color: #f2f2f2;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 73
        yield "<div class=\"test-container\">
    <h1 class=\"mb-4\">Test d'upload d'image</h1>
    
    ";
        // line 76
        if ((($tmp = (isset($context["uploadSuccess"]) || array_key_exists("uploadSuccess", $context) ? $context["uploadSuccess"] : (function () { throw new RuntimeError('Variable "uploadSuccess" does not exist.', 76, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 77
            yield "        <div class=\"success-message\">
            <p>Fichier téléchargé avec succès!</p>
            <p>Chemin de l'image: ";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["uploadedImagePath"]) || array_key_exists("uploadedImagePath", $context) ? $context["uploadedImagePath"] : (function () { throw new RuntimeError('Variable "uploadedImagePath" does not exist.', 79, $this->source); })()), "html", null, true);
            yield "</p>
            <img src=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["uploadedImagePath"]) || array_key_exists("uploadedImagePath", $context) ? $context["uploadedImagePath"] : (function () { throw new RuntimeError('Variable "uploadedImagePath" does not exist.', 80, $this->source); })()), "html", null, true);
            yield "\" alt=\"Image téléchargée\" class=\"preview-image\">
        </div>
    ";
        }
        // line 83
        yield "    
    ";
        // line 84
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 84, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 85
            yield "        <div class=\"error-message\">
            <p>Erreur lors du téléchargement: ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 86, $this->source); })()), "html", null, true);
            yield "</p>
        </div>
    ";
        }
        // line 89
        yield "    
    <div class=\"upload-form\">
        <h3>Sélectionnez une image à télécharger</h3>
        <form method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"mb-3\">
                <input type=\"file\" name=\"image\" accept=\"image/*\" required class=\"form-control\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Télécharger</button>
        </form>
    </div>
    
    ";
        // line 100
        if ((($tmp = (isset($context["fileInfo"]) || array_key_exists("fileInfo", $context) ? $context["fileInfo"] : (function () { throw new RuntimeError('Variable "fileInfo" does not exist.', 100, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 101
            yield "        <div class=\"info-section\">
            <h3>Informations du fichier</h3>
            <table class=\"info-table\">
                <tr>
                    <th>Nom</th>
                    <td>";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fileInfo"]) || array_key_exists("fileInfo", $context) ? $context["fileInfo"] : (function () { throw new RuntimeError('Variable "fileInfo" does not exist.', 106, $this->source); })()), "name", [], "any", false, false, false, 106), "html", null, true);
            yield "</td>
                </tr>
                <tr>
                    <th>Taille</th>
                    <td>";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fileInfo"]) || array_key_exists("fileInfo", $context) ? $context["fileInfo"] : (function () { throw new RuntimeError('Variable "fileInfo" does not exist.', 110, $this->source); })()), "size", [], "any", false, false, false, 110), "html", null, true);
            yield " octets</td>
                </tr>
                <tr>
                    <th>Type MIME</th>
                    <td>";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fileInfo"]) || array_key_exists("fileInfo", $context) ? $context["fileInfo"] : (function () { throw new RuntimeError('Variable "fileInfo" does not exist.', 114, $this->source); })()), "type", [], "any", false, false, false, 114), "html", null, true);
            yield "</td>
                </tr>
                <tr>
                    <th>Code d'erreur</th>
                    <td>";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fileInfo"]) || array_key_exists("fileInfo", $context) ? $context["fileInfo"] : (function () { throw new RuntimeError('Variable "fileInfo" does not exist.', 118, $this->source); })()), "error", [], "any", false, false, false, 118), "html", null, true);
            yield "</td>
                </tr>
            </table>
        </div>
    ";
        }
        // line 123
        yield "    
    <div class=\"info-section\">
        <h3>Informations système</h3>
        <table class=\"info-table\">
            <tr>
                <th>Répertoire d'upload</th>
                <td>";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["systemInfo"]) || array_key_exists("systemInfo", $context) ? $context["systemInfo"] : (function () { throw new RuntimeError('Variable "systemInfo" does not exist.', 129, $this->source); })()), "uploadDir", [], "any", false, false, false, 129), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Le répertoire existe</th>
                <td>";
        // line 133
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["systemInfo"]) || array_key_exists("systemInfo", $context) ? $context["systemInfo"] : (function () { throw new RuntimeError('Variable "systemInfo" does not exist.', 133, $this->source); })()), "dirExists", [], "any", false, false, false, 133)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
        yield "</td>
            </tr>
            <tr>
                <th>Le répertoire est accessible en écriture</th>
                <td>";
        // line 137
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["systemInfo"]) || array_key_exists("systemInfo", $context) ? $context["systemInfo"] : (function () { throw new RuntimeError('Variable "systemInfo" does not exist.', 137, $this->source); })()), "isWritable", [], "any", false, false, false, 137)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
        yield "</td>
            </tr>
            <tr>
                <th>Répertoire temporaire</th>
                <td>";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["systemInfo"]) || array_key_exists("systemInfo", $context) ? $context["systemInfo"] : (function () { throw new RuntimeError('Variable "systemInfo" does not exist.', 141, $this->source); })()), "temporaryDir", [], "any", false, false, false, 141), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Répertoire temporaire accessible en écriture</th>
                <td>";
        // line 145
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["systemInfo"]) || array_key_exists("systemInfo", $context) ? $context["systemInfo"] : (function () { throw new RuntimeError('Variable "systemInfo" does not exist.', 145, $this->source); })()), "temporaryDirWritable", [], "any", false, false, false, 145)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
        yield "</td>
            </tr>
            <tr>
                <th>Taille maximale de téléchargement</th>
                <td>";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["systemInfo"]) || array_key_exists("systemInfo", $context) ? $context["systemInfo"] : (function () { throw new RuntimeError('Variable "systemInfo" does not exist.', 149, $this->source); })()), "uploadMaxFilesize", [], "any", false, false, false, 149), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Taille maximale de POST</th>
                <td>";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["systemInfo"]) || array_key_exists("systemInfo", $context) ? $context["systemInfo"] : (function () { throw new RuntimeError('Variable "systemInfo" does not exist.', 153, $this->source); })()), "postMaxSize", [], "any", false, false, false, 153), "html", null, true);
        yield "</td>
            </tr>
        </table>
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
        return "test_upload/index.html.twig";
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
        return array (  305 => 153,  298 => 149,  291 => 145,  284 => 141,  277 => 137,  270 => 133,  263 => 129,  255 => 123,  247 => 118,  240 => 114,  233 => 110,  226 => 106,  219 => 101,  217 => 100,  204 => 89,  198 => 86,  195 => 85,  193 => 84,  190 => 83,  184 => 80,  180 => 79,  176 => 77,  174 => 76,  169 => 73,  159 => 72,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Test d'upload d'image{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .test-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }
    
    .upload-form {
        margin: 20px 0;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #f8f9fa;
    }
    
    .success-message {
        color: #28a745;
        font-weight: bold;
        padding: 10px;
        background-color: #d4edda;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    
    .error-message {
        color: #dc3545;
        font-weight: bold;
        padding: 10px;
        background-color: #f8d7da;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    
    .info-section {
        margin-top: 30px;
        padding: 20px;
        background-color: #e9ecef;
        border-radius: 5px;
    }
    
    .preview-image {
        max-width: 300px;
        max-height: 300px;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-top: 20px;
    }
    
    .info-table {
        width: 100%;
        border-collapse: collapse;
    }
    
    .info-table th, .info-table td {
        padding: 8px;
        border: 1px solid #ddd;
        text-align: left;
    }
    
    .info-table th {
        background-color: #f2f2f2;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"test-container\">
    <h1 class=\"mb-4\">Test d'upload d'image</h1>
    
    {% if uploadSuccess %}
        <div class=\"success-message\">
            <p>Fichier téléchargé avec succès!</p>
            <p>Chemin de l'image: {{ uploadedImagePath }}</p>
            <img src=\"{{ uploadedImagePath }}\" alt=\"Image téléchargée\" class=\"preview-image\">
        </div>
    {% endif %}
    
    {% if error %}
        <div class=\"error-message\">
            <p>Erreur lors du téléchargement: {{ error }}</p>
        </div>
    {% endif %}
    
    <div class=\"upload-form\">
        <h3>Sélectionnez une image à télécharger</h3>
        <form method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"mb-3\">
                <input type=\"file\" name=\"image\" accept=\"image/*\" required class=\"form-control\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Télécharger</button>
        </form>
    </div>
    
    {% if fileInfo %}
        <div class=\"info-section\">
            <h3>Informations du fichier</h3>
            <table class=\"info-table\">
                <tr>
                    <th>Nom</th>
                    <td>{{ fileInfo.name }}</td>
                </tr>
                <tr>
                    <th>Taille</th>
                    <td>{{ fileInfo.size }} octets</td>
                </tr>
                <tr>
                    <th>Type MIME</th>
                    <td>{{ fileInfo.type }}</td>
                </tr>
                <tr>
                    <th>Code d'erreur</th>
                    <td>{{ fileInfo.error }}</td>
                </tr>
            </table>
        </div>
    {% endif %}
    
    <div class=\"info-section\">
        <h3>Informations système</h3>
        <table class=\"info-table\">
            <tr>
                <th>Répertoire d'upload</th>
                <td>{{ systemInfo.uploadDir }}</td>
            </tr>
            <tr>
                <th>Le répertoire existe</th>
                <td>{{ systemInfo.dirExists ? 'Oui' : 'Non' }}</td>
            </tr>
            <tr>
                <th>Le répertoire est accessible en écriture</th>
                <td>{{ systemInfo.isWritable ? 'Oui' : 'Non' }}</td>
            </tr>
            <tr>
                <th>Répertoire temporaire</th>
                <td>{{ systemInfo.temporaryDir }}</td>
            </tr>
            <tr>
                <th>Répertoire temporaire accessible en écriture</th>
                <td>{{ systemInfo.temporaryDirWritable ? 'Oui' : 'Non' }}</td>
            </tr>
            <tr>
                <th>Taille maximale de téléchargement</th>
                <td>{{ systemInfo.uploadMaxFilesize }}</td>
            </tr>
            <tr>
                <th>Taille maximale de POST</th>
                <td>{{ systemInfo.postMaxSize }}</td>
            </tr>
        </table>
    </div>
</div>
{% endblock %}
", "test_upload/index.html.twig", "/Users/moetezjebari/Desktop/PIDV-WEB3A19-Mouheb-User - Copy/Downloads/PIDV-WEB3A19-Mouheb-User - Copy/Downloads/PIDV-WEB3A19-Mouheb-User - Copy/templates/test_upload/index.html.twig");
    }
}
