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
class __TwigTemplate_c0d58f1ee1848c65c973736fe0039a329adff4aa6103aa9d2fed822420e46534 extends Template
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
        // line 8
        echo "</head>
<body>
<section id=\"content\">
";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "</section>
<footer id=\"footer\">
    ";
        // line 14
        $this->displayBlock('footer', $context, $blocks);
        // line 17
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
    ";
    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "  ";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 14
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    &copy; Copyright 2020 - Site dévelloper par Luc, Thomas, François et Emilio
    ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  96 => 15,  92 => 14,  86 => 11,  74 => 6,  71 => 5,  67 => 4,  61 => 17,  59 => 14,  55 => 12,  53 => 11,  48 => 8,  46 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    {% block head %}
    <meta charset=\"utf-8\">
    <title>{% block title %}  {% endblock %}</title>
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
