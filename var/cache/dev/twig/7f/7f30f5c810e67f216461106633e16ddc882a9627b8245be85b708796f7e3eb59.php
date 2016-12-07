<?php

/* default/index.html.twig */
class __TwigTemplate_27844ebd65b860a4eacbcfd86c92c7fb3a4484a299f26f1ccab375ae95a81fc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_front.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base_front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8522ee5e2aa617503c135e5ca63c06d0c7f13676dea18f57b2508ca1b428dfdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8522ee5e2aa617503c135e5ca63c06d0c7f13676dea18f57b2508ca1b428dfdc->enter($__internal_8522ee5e2aa617503c135e5ca63c06d0c7f13676dea18f57b2508ca1b428dfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8522ee5e2aa617503c135e5ca63c06d0c7f13676dea18f57b2508ca1b428dfdc->leave($__internal_8522ee5e2aa617503c135e5ca63c06d0c7f13676dea18f57b2508ca1b428dfdc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c06fbf12750b95673a3c0f6e5315b914461ed758db5351600ff6e0c70941fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c06fbf12750b95673a3c0f6e5315b914461ed758db5351600ff6e0c70941fad->enter($__internal_2c06fbf12750b95673a3c0f6e5315b914461ed758db5351600ff6e0c70941fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "default/index.html.twig"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            
        </div>
    </div>
";
        
        $__internal_2c06fbf12750b95673a3c0f6e5315b914461ed758db5351600ff6e0c70941fad->leave($__internal_2c06fbf12750b95673a3c0f6e5315b914461ed758db5351600ff6e0c70941fad_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a30b414b2589928f85313d3157902d9e5a6454325688095d165a89fee05b98c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a30b414b2589928f85313d3157902d9e5a6454325688095d165a89fee05b98c2->enter($__internal_a30b414b2589928f85313d3157902d9e5a6454325688095d165a89fee05b98c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "default/index.html.twig"));

        // line 12
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_a30b414b2589928f85313d3157902d9e5a6454325688095d165a89fee05b98c2->leave($__internal_a30b414b2589928f85313d3157902d9e5a6454325688095d165a89fee05b98c2_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  53 => 11,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base_front.html.twig' %}

{% block body %}
    <div id=\"wrapper\">
        <div id=\"container\">
            
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
{% endblock %}
", "default/index.html.twig", "/Applications/MAMP/htdocs/fbappgpe3/app/Resources/views/default/index.html.twig");
    }
}
