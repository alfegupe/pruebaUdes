<?php

/* ::base.html.twig */
class __TwigTemplate_787bd69bc23998a8c26c8a210c6fd40d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Users - Udes ";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t\t\t<link rel=\"styleSheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/udesprueba/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
\t\t";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/udesprueba/js/bootstrap.min.js"), "html", null, true);
        echo "\" > </script>
\t\t\t<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/udesprueba/js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\" > </script>
\t\t";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 15,  74 => 13,  62 => 7,  53 => 5,  47 => 17,  44 => 13,  42 => 12,  35 => 9,  33 => 6,  29 => 5,  23 => 1,  115 => 53,  108 => 48,  96 => 42,  90 => 39,  83 => 35,  77 => 14,  73 => 33,  69 => 12,  65 => 31,  59 => 6,  56 => 29,  52 => 28,  31 => 9,  28 => 7,);
    }
}
