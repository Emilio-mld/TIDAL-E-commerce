<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_458c05e62f04d4b3c509e25a9cc5cf53b1b3e302a35fa708f64794262d587136 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 14
        echo "</head>
<body>
<section id=\"content\">
";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "</section>
<footer id=\"footer\">
    ";
        // line 20
        $this->displayBlock('footer', $context, $blocks);
        // line 23
        echo "</footer>
</body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <meta charset=\"utf-8\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/semantic/ui/dist/semantic.min.css\">
    <script
    src=\"https://code.jquery.com/jquery-3.1.1.min.js\"
    integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"
    crossorigin=\"anonymous\"></script>
    <script src=\"vendor/semantic/ui/dist/semantic.min.js\"></script>
    ";
    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "  ";
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 20
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    &copy; Copyright 2020 - Site dévelloper par Luc, Thomas, François et Emilio
    ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  102 => 21,  98 => 20,  92 => 17,  74 => 6,  71 => 5,  67 => 4,  61 => 23,  59 => 20,  55 => 18,  53 => 17,  48 => 14,  46 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    {% block head %}
    <meta charset=\"utf-8\">
    <title>{% block title %}  {% endblock %}</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/semantic/ui/dist/semantic.min.css\">
    <script
    src=\"https://code.jquery.com/jquery-3.1.1.min.js\"
    integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"
    crossorigin=\"anonymous\"></script>
    <script src=\"vendor/semantic/ui/dist/semantic.min.js\"></script>
    {% endblock %}
</head>
<body>
<section id=\"content\">
{% block content %}{% endblock %}
</section>
<footer id=\"footer\">
    {% block footer %}
    &copy; Copyright 2020 - Site dévelloper par Luc, Thomas, François et Emilio
    {% endblock %}
</footer>
</body>
</html>", "base.html.twig", "C:\\wamp64\\www\\TIDAL-E-commerce\\TIDAL_E-commerce\\templates\\base.html.twig");
    }
}
